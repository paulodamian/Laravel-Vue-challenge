<template>
    <div class="cardContainer">
        <div class="card">
            <img :src="'https://loremflickr.com/300/220/?' + movie.id">
            <section>
                <div>{{movie.title}}</div>
                <div>Year: {{movie.year}}</div>
            </section>
            <footer v-if="!hideLink">
                <router-link class="button" :to="detailsPath">Full info</router-link> 
            </footer>
        </div>
    </div>
</template>

<script>
export default {
    props: ['movie', 'hideLink'],
    computed: {
        detailsPath: function() {
            return this.movie.link.replace(/^.*?\/api/, "");
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

            section {
                div {
                    white-space: nowrap;
                    text-overflow: ellipsis;
                    overflow: hidden;
                    text-align: center;
                }
            }

            footer {
                text-align: center;
            }
        }
    }
</style>