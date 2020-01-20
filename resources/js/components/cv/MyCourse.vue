<template>
    <div class="row" v-if="cvCourse.length > 0">
        <div class="col-12 content-course" >
            <div class="header-course">
                <i class="far fa-lightbulb"> COURSE</i>
            </div>
            <div class="row courses" v-for="course in cvCourse" :key="course.id">
                <div class="col-4 p0">
                    <p class="date"><span>{{course.date_from}}</span> / <span>{{course.date_to}}</span></p>
                </div>
                <div class="col-8">
                    <p class="course-name">{{course.name}}</p>
                    
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
        this.$store.dispatch('getCvCourse',this.$route.params.userName)
    },
    computed:{
        ...mapState([
            'cvCourse'
        ])
    },
}
</script>

<style>

</style>