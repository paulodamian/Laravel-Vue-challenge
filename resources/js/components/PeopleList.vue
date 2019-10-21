<template>
    <div>
        <div class="listContainer flex two three-500 four-600 five-700 six-900 seven-1100 eight-1200">
            <PersonCard v-for="p in people" :key="p.id" :person="p" />
        </div>
    </div>
</template>

<script>
import PersonCard from './PersonCard';

export default {
    data() {
        return {
            loading: false,
            people: null,
        };
    },
    created() {
        this.fetchData();
    },
    components: { PersonCard },
    methods: {
        async fetchData() {
            this.users = null;
            this.loading = true;
            let response = await axios.get('/api/people');
            this.people = response.data.data;
            this.loading = false;
        }
    }
    
}
</script>

<style lang="scss" scoped>
    
</style>