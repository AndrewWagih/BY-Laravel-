<template>
    <div class="row" v-if="cvPublications.length > 0">
        <div class="col-12 content-publication">
            <div class="header-publication">
                <i class="far fa-newspaper"> PUBLICATION</i>
            </div>
            <div class="row publications" v-for="pub in cvPublications" :key="pub.id">
                <div class="col-4  p0">
                    <p class="date"><span>{{pub.date}}</span></p>
                </div>
                <div class="col-8">
                    <p class="title">{{pub.title}}</p>
                    
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { mapState, mapGetters , mapMutations} from 'vuex'
export default {

    mounted() {
        console.log('Component mounted.');
        this.$store.dispatch('getCvPublications',this.$route.params.userName)
    },
    computed:{
        ...mapState([
            'cvPublications'
        ])
    },
}
</script>

<style>

</style>