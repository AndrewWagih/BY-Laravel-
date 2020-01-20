<template>
    <div class="row">
        <div class="col-12">
            <p class="main-header-form"><i class="fab fa-github-alt"></i> Personal Info</p>
            <div class="container container-form">
                <div class="row BP" v-show="personalInfo.length == 0">
                    <div class="form-group col-6">
                        <label class="main-lable" for="">First Name</label>
                        <input class="main-input" type="text" placeholder="First Name" v-model="newPersonalUser.first_name">
                    </div>
                    <div class="form-group col-6">
                        <label class="main-lable" for="">Last Name</label>
                        <input class="main-input" type="text" placeholder="Last Name" v-model="newPersonalUser.last_name">
                    </div>
                    <div class="form-group col-6">
                        <label class="main-lable" for="">E-mail</label>
                        <input class="main-input" type="text" placeholder="Profession" v-model="newPersonalUser.email">
                    </div>
                    <div class="form-group col-6">
                        <label class="main-lable" for="">Professione</label>
                        <input class="main-input" type="text" placeholder="Profession" v-model="newPersonalUser.profession">
                    </div>
                    <div class="form-group col-12">
                        <label class="main-lable" for="">Address</label>
                        <input class="main-input" type="text" placeholder="Address" v-model="newPersonalUser.address">
                    </div>
                    <div class="form-group col-6">
                        <label class="main-lable" for="">Phone</label>
                        <input class="main-input" type="text" placeholder="Phone" v-model="newPersonalUser.phone">
                    </div>
                    <div class="form-group col-6">
                        <label class="main-lable" for="">Date of birth</label>
                        <date-picker style="width:100%" v-model="newPersonalUser.date_birth" valueType="format" lang="en" ></date-picker>
                    </div>
                    <button class="mian-button" @click="addPersonalInfo">Add</button>
                </div>

                <div class="row" v-show="personalInfo.length > 0" v-for="PI in personalInfo" :key="PI.id">
                    <div class="form-group col-6">
                        <label class="main-lable" for="">First Name</label>
                        <input class="main-input" type="text" placeholder="First Name" v-model="PI.first_name">
                    </div>
                    <div class="form-group col-6">
                        <label class="main-lable" for="">Last Name</label>
                        <input class="main-input" type="text" placeholder="Last Name" v-model="PI.last_name">
                    </div>
                    <div class="form-group col-6">
                        <label class="main-lable" for="">E-mail</label>
                        <input class="main-input" type="text" placeholder="Profession" v-model="PI.email">
                    </div>
                    <div class="form-group col-6">
                        <label class="main-lable" for="">Professione</label>
                        <input class="main-input" type="text" placeholder="Profession" v-model="PI.profession">
                    </div>
                    <div class="form-group col-12">
                        <label class="main-lable" for="">Address</label>
                        <input class="main-input" type="text" placeholder="Address" v-model="PI.address">
                    </div>
                    <div class="form-group col-6">
                        <label class="main-lable" for="">Phone</label>
                        <input class="main-input" type="text" placeholder="Phone" v-model="PI.phone">
                    </div>
                    <div class="form-group col-6">
                        <label class="main-lable" for="">Date of birth</label>
                        <date-picker style="width:100%" v-model="PI.date_birth" valueType="format" lang="en" ></date-picker>
                    </div>
                    <button class="mian-button bg-primary" @click="editPersonalInfo(PI)">Edit</button>
                    <button class="mian-button" style="margin: 20px 0;background-color: #F44336;" @click="deletePersonalInfo(PI)">Delete</button>
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
            value1:'2015-08-17',
            newPersonalUser:{
                first_name:'',
                last_name:'',
                profession:'',
                address:'',
                phone:'',
                email:'',
                date_birth:'',
                user_id:Auth.user.id
            }
            
        }
    },
    mounted() {
        console.log('Component mounted.');
        this.$store.dispatch('getPersonalInfo',Auth.user.id)
    },
    computed:{
        ...mapState([
            'personalInfo'
        ])
    },
    methods:{
        addPersonalInfo(){
            this.$store.dispatch('addPersonalInfo',this.newPersonalUser)
        },
        editPersonalInfo(PI){
            this.$store.dispatch('editPersonalInfo',PI)
        },
        deletePersonalInfo(PI){
            this.$store.dispatch('deletePersonalInfo',PI)
        }
    }
}
</script>

<style>
.mx-input{
            background-color: #f3f3f3;
    }
</style>