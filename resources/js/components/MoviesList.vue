<template>
    <div>
        <div class="listContainer flex one two-600 three-900 four-1200">
            <MovieCard v-for="m in movies" :key="m.id" :movie="m" />
        </div>
    </div>
</template>

<script>
import MovieCard from './MovieCard';

export default {
    data() {
        return {
            loading: false,
            movies: null,
            error: null,
        };
    },
    created() {
        this.fetchData();
    },
    components: { MovieCard },
    methods: {
        async fetchData() {
            this.users = null;
            this.loading = true;
            let response = await axios.get('/api/movies');
            this.movies = response.data.data;
            this.loading = false;
        }
    }
}
</script>

<style lang="scss" scoped>
    
</style>