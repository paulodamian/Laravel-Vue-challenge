<template>
    <div class="cardContainer">
        <div class="card">
            <img :src="'https://loremflickr.com/120/160/?' + person.id">
            <section>
                <div>{{person.firstName}}</div>
                <div>{{person.lastName}}</div>
            </section>
            <footer v-if="!hideLink">
                <router-link class="button" :to="detailsPath">Full info</router-link> 
            </footer>
        </div>
    </div>
</template>

<script>
export default {
    props: ['person', 'hideLink'],
    computed: {
        detailsPath: function() {
            return this.person.link.replace(/^.*?\/api/, "");
        }
    }
}
</script>

<style lang="scss" scoped>
    .cardContainer {
        padding: 5px;

        .card {
            img {
                width: 100%;
                max-width: 100%;
            }

            section, footer {
                text-align: center;
            }
        }
    }
</style>