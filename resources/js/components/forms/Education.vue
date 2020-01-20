<template>
    <div class="row">
        <div class="col-12">
            <p class="main-header-form"><i class="fas fa-user-graduate"></i> Education</p>
            <div class="container container-form">
                <div class="row BP" v-show="education.length > 0" v-for="edu in education" :key="edu.id">
                    <div class="form-group col-12">
                        <label class="main-lable" for="">School Name</label>
                        <input class="main-input" type="text" placeholder="School Name" v-model="edu.school_name">
                    </div>
                    <div class="form-group col-6">
                        <label class="main-lable" for="">Date From</label>
                        <date-picker style="width:100%" v-model="edu.date_from" valueType="format" lang="en"></date-picker>
                    </div>
                    <div class="form-group col-6">
                        <label class="main-lable" for="">Date To</label>
                        <date-picker style="width:100%" v-model="edu.date_to" valueType="format" lang="en" ></date-picker>
                    </div>
                    <div class="form-group col-12">
                        <label class="main-lable" for="">Description</label>
                        <textarea class="main-textarea" type="text" placeholder="Enter your Description for study." v-model="edu.description"></textarea>
                    </div>
                    <button class="mian-button bg-primary" style="width:50%" @click="editEducation(edu)">Edit</button>
                    <button class="mian-button bg-danger" style="width:50%" @click="deleteEducation(edu)">Delete</button>
                    
                </div>
                <button v-show="education.length > 0" class="mian-button bg-primaey" style="margin:20px 0" @click="showFromNew">Add New</button>

                <div class="row" v-show="newForm || education.length == 0">
                    <div class="form-group col-12">
                        <label class="main-lable" for="">School Name</label>
                        <input class="main-input" type="text" placeholder="School Name" v-model="newEducation.school_name">
                    </div>
                    <div class="form-group col-6">
                        <label class="main-lable" for="">Date From</label>
                        <date-picker style="width:100%" v-model="newEducation.date_from" valueType="format" lang="en"></date-picker>
                    </div>
                    <div class="form-group col-6">
                        <label class="main-lable" for="">Date To</label>
                        <date-picker style="width:100%" v-model="newEducation.date_to" valueType="format" lang="en" ></date-picker>
                    </div>
                    <div class="form-group col-12">
                        <label class="main-lable" for="">Description</label>
                        <textarea class="main-textarea" type="text" placeholder="Enter your Description for study." v-model="newEducation.description"></textarea>
                    </div>
                    <button class="mian-button" @click="addEducation">Add</button>
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
            newEducation:{
                school_name:'',
                description:'',
                date_from:'',
                date_to:'',
                user_id:Auth.user.id
            }

        }
    },
    computed:{
        ...mapState([
            'education'
        ])
    },
    mounted() {
        this.$store.dispatch('getEducation',Auth.user.id)
    },
    methods:{
        showFromNew(){
            this.newForm = true;
            this.newEducation.school_name ='';
            this.newEducation.description ='';
            this.newEducation.date_from ='';
            this.newEducation.date_to ='';
        },
        addEducation(){
            this.$store.dispatch('addEducation',this.newEducation)
            this.newForm = false;        
                
        },
        editEducation(education){
            this.$store.dispatch('editEducation',education)
        },
        deleteEducation(education){
            this.$store.dispatch('deleteEducation',education)
        },
        
    }
}
</script>

<style scoped>
    .mx-input{
            background-color: #f3f3f3;
    }
</style>

