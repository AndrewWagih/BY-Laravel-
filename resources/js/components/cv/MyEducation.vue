<template>
    <div class="row" v-if="cvEducation.length > 0">
        <div class="col-12 content-education">
            <div class="header-education">
                <i class="fa fa-user-graduate"> EDUCATION</i>
            </div>
            <div class="row educations" v-for="edu in cvEducation" :key="edu.id">
                <div class="col-4 p0">
                    <p class="school-name">{{edu.school_name}}</p>
                    <p class="date"><span>{{edu.date_from}}</span> / <span>{{edu.date_to}}</span></p>
                </div>
                <div class="col-8">
                    <p class="departmet">{{edu.description}}</p>
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
        this.$store.dispatch('getCvEducation',this.$route.params.userName)
    },
    computed:{
        ...mapState([
            'cvEducation'
        ])
    },
}
</script>

<style>

</style>