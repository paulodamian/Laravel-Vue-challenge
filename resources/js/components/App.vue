<template>
    <div>
        <h1 class="main">Minimal FrontEnd Demo App</h1>

        <p class="main">
            <router-link :to="{ name: 'home' }">Home</router-link> |
            <router-link :to="{ name: 'movies' }">Movies</router-link> |
            <router-link :to="{ name: 'people' }">People</router-link>
        </p>

        <div class="container">
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
    export default {}
</script>

<style lang="scss" scoped>
    h1.main {
        text-align: center;
        font-size: 30px;
    }

    p.main {
        text-align: center;
    }
</style>