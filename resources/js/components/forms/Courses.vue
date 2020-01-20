<template>
    <div class="row">
        <div class="col-12">
            <p class="main-header-form"><i class="far fa-lightbulb"></i> Courses  </p>
            <div class="container container-form">
                <div class="row BP" v-show="course.length > 0" v-for="cour in course" :key="cour.id">
                    <div class="form-group col-12">
                        <label class="main-lable" for="">Name</label>
                        <input class="main-input" type="text" placeholder="Name" v-model="cour.name">
                    </div>
                    <div class="form-group col-6">
                        <label class="main-lable" for="">Date From</label>
                        <date-picker style="width:100%" v-model="cour.date_from" valueType="format" lang="en" ></date-picker>
                    </div>
                    <div class="form-group col-6">
                        <label class="main-lable" for="">Date To</label>
                        <date-picker style="width:100%" v-model="cour.date_to" valueType="format" lang="en" ></date-picker>
                    </div>
                    <button class="mian-button bg-primary" style="width:50%" @click="editCourse(cour)">Edit</button>
                    <button class="mian-button bg-danger" style="width:50%" @click="deleteCourse(cour)">Delete</button>
                </div>
                <button v-show="course.length > 0" class="mian-button bg-primaey" style="margin:20px 0" @click="showFromNew">Add New</button>

                <div class="row" v-show="newForm || course.length == 0">
                    <div class="form-group col-12">
                        <label class="main-lable" for="">Name</label>
                        <input class="main-input" type="text" placeholder="Name" v-model="newCourse.name">
                    </div>
                    <div class="form-group col-6">
                        <label class="main-lable" for="">Date From</label>
                        <date-picker style="width:100%" v-model="newCourse.date_from" valueType="format" lang="en" ></date-picker>
                    </div>
                    <div class="form-group col-6">
                        <label class="main-lable" for="">Date To</label>
                        <date-picker style="width:100%" v-model="newCourse.date_to" valueType="format" lang="en" ></date-picker>
                    </div>
                    <button class="mian-button" @click="addCourse">Add</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { mapState, mapGetters , mapMutations} from 'vuex'
export default {
    
    data(){
        return{
            newForm:false,
            newCourse:{
                name:'',
                date_from:'',
                date_to:'',
                user_id:Auth.user.id
            }
        }
    },
    computed:{
        ...mapState([
            'course'
        ])
    },
    mounted() {
        this.$store.dispatch('getCourse',Auth.user.id)
    },
    methods:{
        showFromNew(){
            this.newForm = true;
            this.newCourse.name ='';
            this.newCourse.date_from ='';
            this.newCourse.date_to ='';
            
        },
        addCourse(){
            this.$store.dispatch('addCourse',this.newCourse)
            this.newForm = false;        
                
        },
        editCourse(course){
            this.$store.dispatch('editCourse',course)
        },
        deleteCourse(course){
            this.$store.dispatch('deleteCourse',course)
        },
    }
}
</script>

<style scoped>
    .mx-input{
            background-color: #f3f3f3;
    }
</style>

