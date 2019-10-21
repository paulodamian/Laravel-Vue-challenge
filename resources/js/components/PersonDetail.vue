<template>
    <div>
        <div v-if="!loading" class="person">
            <PersonCard :person="person" :hideLink="true" />
        </div>
        <div v-if="!loading">
            <h2>Movies</h2>
            <div v-for="r in rols" :key='r' class="listContainer flex one two-600 three-900 four-1200">
                <h2>As a {{r}}:</h2>
                <MovieCard v-for="d in getMovies(r)" :key="d.movie.id" :movie="d.movie" />
            </div>
        </div>
    </div>
</template>

<script>
import PersonCard from './PersonCard';
import MovieCard from './MovieCard';

export default {
    data() {
        return {
            loading: true,
            person: null,
            rols: ['Director', 'Producer', 'Cast']
        };
    },
    created() {
        this.fetchData();
    },
    components: { PersonCard, MovieCard },
    methods: {
        async fetchData() {
            let response = await axios.get('/api/people/' + this.$route.params.id);
            //Weird bug, I do not know why some times the data comes in a different structure.
            //I have runned out of time to debug it
            this.person = response.data.data ? response.data.data : response.data;
            this.loading = false;
        },
        getMovies: function(rol) {
            return this.person ? _.filter(this.person.roles, {'rol': {'name': rol}}) : [];
        }
    }
}
</script>

<style lang="scss" scoped>
    .person {
        .cardContainer {
            width: 90%;
            max-width: 280px;
            margin: 0 auto;
        }
    }
</style>