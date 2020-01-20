<template>
    <div class="row" v-if="cvSummary.length > 0">
        <div class="col-12 content-about-me">
            <div class="header-about-me">
                <i class="fa fa-user-circle"> ABOUT ME</i>
            </div>
            <p class="text-about-me" v-for="summary in cvSummary" :key="summary.id">
                {{summary.description}}                
            </p>
        </div>
    </div>
</template>

<script>
import { mapState, mapGetters , mapMutations} from 'vuex'
export default {

    mounted() {
        console.log('Component mounted.');
        this.$store.dispatch('getCvSummary',this.$route.params.userName)
    },
    computed:{
        ...mapState([
            'cvSummary'
        ])
    },
}
</script>

<style>

</style>