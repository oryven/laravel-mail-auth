<template>
    <div class="videogames-container">
        <div v-for="videogame, i in videogames" :key="i">
            <div>Titolo: {{videogame.title}}</div>
            <div>Sottotitolo: {{videogame.subtitle}}</div>
            <div>Voto: {{videogame.rating}}</div>
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
