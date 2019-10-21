<template>
    <div>
        <div v-if="!loading" class="movie">
            <MovieCard :movie="movie" :hideLink="true" />
        </div>
        <div v-if="!loading">
            <div v-for="r in rols" :key='r' class="listContainer flex two three-500 four-600 five-700 six-900 seven-1100 eight-1200">
                <h2>{{r}}:</h2>
                <PersonCard v-for="d in getCrew(r)" :key="d.person.id" :person="d.person" />
            </div>
        </div>
    </div>
</template>

<script>
import MovieCard from './MovieCard';
import PersonCard from './PersonCard';

export default {
    data() {
        return {
            loading: true,
            movie: null,
            rols: ['Director', 'Producer', 'Cast']
        };
    },
    created() {
        this.fetchData();
    },
    components: { PersonCard, MovieCard },
    methods: {
        async fetchData() {
            let response = await axios.get('/api/movies/' + this.$route.params.id);
            //Weird bug, I do not know why some times the data comes in a different structure.
            //I have runned out of time to debug it
            this.movie = response.data.data ? response.data.data : response.data;
            this.loading = false;
        },
        getCrew: function(rol) {
            return this.movie ? _.filter(this.movie.crews, {'rol': {'name': rol}}) : [];
        }
    }
}
</script>

<style lang="scss" scoped>
    .movie {
        .cardContainer {
            width: 90%;
            max-width: 450px;
            margin: 0 auto;
        }
    }
</style>