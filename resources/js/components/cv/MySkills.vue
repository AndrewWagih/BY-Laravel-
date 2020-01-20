<template>
    <div class="row" v-if="cvSkills.length > 0">
        <div class="col-12 content-skills">
            <div class="header-skills">
                <i class="fas fa-user-cog"> SKILLS</i>
            </div>
            <div class="skills" >
                <span v-for="course in cvSkills" :key="course.id">{{course.skill}}</span>
            </div>
        </div>
    </div>
</template>

<script>
import { mapState, mapGetters , mapMutations} from 'vuex'
export default {

    mounted() {
        console.log('Component mounted.');
        this.$store.dispatch('getCvSkills',this.$route.params.userName)
    },
    computed:{
        ...mapState([
            'cvSkills'
        ])
    },
}
</script>

<style>

</style>