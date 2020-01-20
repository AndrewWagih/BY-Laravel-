<template>
    <div class="row" v-if="cvConference.length > 0">
        <div class="col-12 content-conference">
            <div class="header-conference">
                <i class="fa fa-comment"> CONFERENCES</i>
            </div>
            <div class="row conferences" v-for="conf in cvConference" :key="conf.id">
                <div class="col-4 p0">
                    <p class="date"><span>{{conf.date}}</span></p>
                </div>
                <div class="col-8">
                    <p class="name">{{conf.name}}</p>
                    
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
        this.$store.dispatch('getCvConference',this.$route.params.userName)
    },
    computed:{
        ...mapState([
            'cvConference'
        ])
    },
}
</script>

<style>

</style>