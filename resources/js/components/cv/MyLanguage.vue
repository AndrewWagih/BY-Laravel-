<template>
    <div class="row" v-if="cvLanguage.length > 0">
        <div class="col-12 content-language">
            <div class="header-language">
                <i class="fas fa-globe"> LANGUAGES</i>
            </div>
            <div class="languages" >
                <p v-for="lang in cvLanguage" :key="lang.id">{{lang.language}} <span>{{lang.mastery}}</span></p>
            </div>
        </div>
    </div>
</template>

<script>
import { mapState, mapGetters , mapMutations} from 'vuex'
export default {

    mounted() {
        console.log('Component mounted.');
        this.$store.dispatch('getCvLanguage',this.$route.params.userName)
    },
    computed:{
        ...mapState([
            'cvLanguage'
        ])
    },
}
</script>

<style>

</style>