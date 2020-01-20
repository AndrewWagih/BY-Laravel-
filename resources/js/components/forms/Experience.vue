<template>
    <div class="row">
        <div class="col-12">
            <p class="main-header-form"><i class="fas fa-briefcase"></i> Experience</p>
            <div class="container container-form">
                <div class="row BP" v-show="experience.length > 0" v-for="exp in experience" :key="exp.id">
                    <div class="form-group col-6">
                        <label class="main-lable" for="">Position</label>
                        <input class="main-input" type="text" placeholder="Position" v-model="exp.position">
                    </div>
                    <div class="form-group col-6">
                        <label class="main-lable" for="">Company</label>
                        <input class="main-input" type="text" placeholder="Company" v-model="exp.company">
                    </div>
                    <div class="form-group col-6">
                        <label class="main-lable" for="">Date From</label>
                        <date-picker style="width:100%" v-model="exp.date_from" valueType="format" lang="en" ></date-picker>
                    </div>
                    <div class="form-group col-6">
                        <label class="main-lable" for="">Date To</label>
                        <date-picker style="width:100%" v-model="exp.date_to"  valueType="format" lang="en" ></date-picker>
                    </div>
                    <div class="form-group col-12">
                        <label class="main-lable" for="">Summary</label>
                        <textarea class="main-textarea" type="text" placeholder="Enter your resume summary, profile or objective." v-model="exp.description"></textarea>
                    </div>
                    <button class="mian-button bg-primary" style="width:50%" @click="editExperience(exp)">Edit</button>
                    <button class="mian-button bg-danger" style="width:50%" @click="deleteExperience(exp)">Delete</button>
                    
                </div>
                <button v-show="experience.length > 0" class="mian-button bg-primaey" style="margin:20px 0" @click="showFromNew">Add New</button>
                <div class="row" v-show="newForm || experience.length == 0">
                    <div class="form-group col-6">
                        <label class="main-lable" for="">Position</label>
                        <input class="main-input" type="text" placeholder="Position" v-model="newExperience.position">
                    </div>
                    <div class="form-group col-6">
                        <label class="main-lable" for="">Company</label>
                        <input class="main-input" type="text" placeholder="Company" v-model="newExperience.company">
                    </div>
                    <div class="form-group col-6">
                        <label class="main-lable" for="">Date From</label>
                        <date-picker style="width:100%" v-model="newExperience.date_from" valueType="format" lang="en" ></date-picker>
                    </div>
                    <div class="form-group col-6">
                        <label class="main-lable" for="">Date To</label>
                        <date-picker style="width:100%" v-model="newExperience.date_to"  valueType="format" lang="en" ></date-picker>
                    </div>
                    <div class="form-group col-12">
                        <label class="main-lable" for="">Summary</label>
                        <textarea class="main-textarea" type="text" placeholder="Enter your resume summary, profile or objective." v-model="newExperience.description"></textarea>
                    </div>
                    <button class="mian-button" @click="addExperience">Add</button>
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
            newExperience:{
                position:'',
                company:'',
                date_from:'2015-08-17',
                date_to:'2017-08-17',
                description:'',
                user_id:Auth.user.id
            }
        }
    },
    computed:{
        ...mapState([
            'experience'
        ])
    },
    mounted() {
        this.$store.dispatch('getExperience',Auth.user.id)
    },
    methods:{
        showFromNew(){
            this.newForm = true;
            this.newExperience.position = '';
            this.newExperience.company = '';
            this.newExperience.date_from = '';
            this.newExperience.date_to ='';
            this.newExperience.description ='';
        },
        addExperience(){
            this.$store.dispatch('addExperience',this.newExperience)
            this.newForm = false;
                
        },
        editExperience(experience){
            this.$store.dispatch('editExperience',experience)
        },
        deleteExperience(experience){
            this.$store.dispatch('deleteExperience',experience)
        }
    }
}
</script>

<style scoped>
    .mx-input{
            background-color: #f3f3f3;
    }
</style>

</style>