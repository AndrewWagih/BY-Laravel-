<template>
    <div class="row">
        <div class="col-12">
            <p class="main-header-form"><i class="fas fa-basketball-ball"></i> Interests</p>
            <div class="container container-form">
                <div class="row BP" v-show="interests.length > 0 " v-for="inte in interests" :key="inte.id">
                    <div class="form-group col-12 ">
                        <label class="main-lable" for="">Interest</label>
                        <input class="main-input" type="text" placeholder="Interests" v-model="inte.interests">
                    </div>
                    <button class="mian-button bg-primary" style="width:50%" @click="editInterests(inte)">Edit</button>
                    <button class="mian-button bg-danger" style="width:50%" @click="deleteInterests(inte)">Delete</button>
                </div>
                <button v-show="interests.length > 0" class="mian-button bg-primaey" style="margin:20px 0" @click="showFromNew">Add New</button>
                <div class="row" v-show="newForm || interests.length == 0 ">
                    <div class="form-group col-12">
                        <label class="main-lable" for="">Interest</label>
                        <input class="main-input" type="text" placeholder="Interests" v-model="newInterests.interests">
                    </div>
                    <button class="mian-button" @click="addInterests">Add</button>
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
            newInterests:{
                interests:'',
                user_id:Auth.user.id
            }
        }
    },
    computed:{
        ...mapState([
            'interests'
        ])
    },
    mounted() {
        this.$store.dispatch('getInterests',Auth.user.id)
    },
    methods:{
        showFromNew(){
            this.newForm = true;
            this.newInterests.interests =''
            
        },
        addInterests(){
            this.$store.dispatch('addInterests',this.newInterests)
            this.newForm = false;        
                
        },
        editInterests(interests){
            this.$store.dispatch('editInterests',interests)
        },
        deleteInterests(interests){
            this.$store.dispatch('deleteInterests',interests)
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