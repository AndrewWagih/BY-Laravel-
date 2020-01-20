<template>
    <div class="row">
        <div class="col-12">
            <p class="main-header-form"><i class="far fa-comment"></i> Conferences  </p>
            <div class="container container-form">
                <div class="row BP" v-show="conference.length > 0" v-for="conf in conference" :key="conf.id">
                    <div class="form-group col-6">
                        <label class="main-lable" for="">Name</label>
                        <input class="main-input" type="text" placeholder="Name" v-model="conf.name">
                    </div>
                    <div class="form-group col-6">
                        <label class="main-lable" for="">Date</label>
                        <date-picker style="width:100%" v-model="conf.date" valueType="format" lang="en" ></date-picker>
                    </div>
                    <button class="mian-button bg-primary" style="width:50%" @click="editConference(conf)">Edit</button>
                    <button class="mian-button bg-danger" style="width:50%" @click="deleteConference(conf)">Delete</button>
                </div>
                <button v-show="conference.length > 0" class="mian-button bg-primaey" style="margin:20px 0" @click="showFromNew">Add New</button>

                <div class="row" v-show="newForm || conference.length == 0">
                    <div class="form-group col-6">
                        <label class="main-lable" for="">Name</label>
                        <input class="main-input" type="text" placeholder="Name" v-model="newConferences.name">
                    </div>
                    <div class="form-group col-6">
                        <label class="main-lable" for="">Date</label>
                        <date-picker style="width:100%" v-model="newConferences.date" valueType="format" lang="en" ></date-picker>
                    </div>
                    <button class="mian-button" @click="addConference">Add</button>
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
            newConferences:{
                 name:'',
                date:'',
                user_id:Auth.user.id
            }
        }
    },computed:{
        ...mapState([
            'conference'
        ])
    },
    mounted() {
        this.$store.dispatch('getConference',Auth.user.id)
    },
    methods:{
        showFromNew(){
            this.newForm = true;
            this.newConferences.title ='';
            this.newConferences.date = '';
            
        },
        addConference(){
            this.$store.dispatch('addConference',this.newConferences)
            this.newForm = false;        
                
        },
        editConference(conference){
            this.$store.dispatch('editConference',conference)
        },
        deleteConference(conference){
            this.$store.dispatch('deleteConference',conference)
        },
        
    }
}
</script>

<style scoped>
    .mx-input{
            background-color: #f3f3f3;
    }
</style>

</style>