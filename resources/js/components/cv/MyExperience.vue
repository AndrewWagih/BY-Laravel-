<template>
    <div class="row" v-if="cvExperience.length > 0">
        <div class="col-12 content-experience">
            <div class="header-experience">
                <i class="fa fa-briefcase"> EXPERIENCE</i>
            </div>
            <div class="row experiences" v-for="exp in cvExperience" :key="exp.id">
                <div class="col-4 p0">
                    <p class="compay-name">{{exp.company}}</p>
                    <p class="date"><span>{{exp.date_from}}</span> / <span>{{exp.date_to}}</span></p>
                </div>
                <div class="col-8">
                    <p class="position">{{exp.position}}</p>
                    <p class="description" style="padding :0">{{exp.description}}</p>
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
        this.$store.dispatch('getCvExperience',this.$route.params.userName)
    },
    computed:{
        ...mapState([
            'cvExperience'
        ])
    },
}
</script>

<style>

</style>