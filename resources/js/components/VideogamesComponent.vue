<template>
    <div class="videogames-container">
        <div v-for="videogame, i in videogames" :key="i">
            <span>Titolo: {{videogame.title}}</span>
            <span>Sottotitolo: {{videogame.subtitle}}</span>
            <span>Voto: {{videogame.rating}}</span>
            <span v-if="user"><a :href="'/api/videogames/delete/' +  videogame.id" class="btn btn-danger">Cancella</a>
            </span>
            <hr>
        </div>
    </div>
</template>

<script>
    export default {

          data: function () {
            return {
                videogames: []
            }
        },

         props: {
            user: String
        },

        mounted() {
            axios.get('/api/videogames/list')
            .then(r => this.videogames = r.data)
            .catch(e => console.log(e));
        }
    }
</script>
