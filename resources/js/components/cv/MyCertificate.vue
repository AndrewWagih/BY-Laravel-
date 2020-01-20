<template>
    <div class="row" v-if="cvCertificate.length > 0">
        <div class="col-12 content-certificate">
            <div class="header-certificate">
                <i class="fas fa-certificate"> CERTIFICATE</i>
            </div>
            <div class="row certificate" v-for="cert in cvCertificate" :key="cert.id">
                <div class="col-4 p0">
                    <p class="date"><span>{{cert.date}}</span></p>
                </div>
                <div class="col-8">
                    <p class="title">{{cert.title}}</p>
                    
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
        this.$store.dispatch('getCvCertificate',this.$route.params.userName)
    },
    computed:{
        ...mapState([
            'cvCertificate'
        ])
    },
}
</script>

<style>

</style>