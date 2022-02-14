<template>
    <div class="videogames-container">
            <div v-for="videogame, i in videogames" :key="i">
                <p>Titolo: {{videogame.title}}</p>
                <p>Sottotitolo: {{videogame.subtitle}}</p>
                <p>Voto: {{videogame.rating}}</p>
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

        mounted() {
            axios.get('/api/videogames/list')
            .then(r => this.videogames = r.data)
            .catch(e => console.log(e));
        }
    }
</script>
