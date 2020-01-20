<template>
    <div class="row" v-if="cvInterests.length > 0">
        <div class="col-12 content-interest">
            <div class="header-interest">
                <i class="fas fa-basketball-ball">interests </i>
            </div>
            <div class="row interests" >
                <div class="col-9 offset-3">
                    <span class="interest" v-for="int in cvInterests" :key="int.id">
                        <span>{{int.interests}}</span>
                        <span> - </span>
                    </span>

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
        this.$store.dispatch('getCvInterests',this.$route.params.userName)
    },
    computed:{
        ...mapState([
            'cvInterests'
        ])
    },
}
</script>

<style>

</style>