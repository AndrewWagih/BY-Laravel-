<template>
    <div class="row" v-if="cvPersonalInfo.length > 0">
        <div class="col-12" v-for="pi in cvPersonalInfo" :key="pi.id">
            <p class="name"><span>{{pi.first_name}}</span> <span>{{pi.last_name}}</span></p>          
            <p class="profession">{{pi.profession}}</p>
        </div>
    </div>
</template>

<script>
import { mapState, mapGetters , mapMutations} from 'vuex'
export default {

    mounted() {
        console.log('Component mounted.');
        this.$store.dispatch('getCvPersonalInfo',this.$route.params.userName)
    },
    computed:{
        ...mapState([
            'cvPersonalInfo'
        ])
    },
}
</script>

<style>

</style>