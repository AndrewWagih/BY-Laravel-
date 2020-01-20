<template>
    <div class="row">
        <div class="col-12" >
            <p class="main-header-form"><i class="fas fa-language"></i> Languages</p>
            <div class="container container-form">
                <div class="row BP" v-show="language.length > 0 " v-for="lang in language" :key="lang.id">
                    <div class="form-group col-6">
                        <label class="main-lable" for="">Language</label>
                        <input class="main-input" type="text" placeholder="Language" v-model="lang.language">
                    </div>
                    <div class="form-group col-6">
                        <label class="main-lable" for="">Mastery</label>
                        <input class="main-input" type="text" placeholder="Mastery" v-model="lang.mastery">
                    </div>
                    <button class="mian-button bg-primary" style="width:50%" @click="editLanguage(lang)">Edit</button>
                    <button class="mian-button bg-danger" style="width:50%" @click="deleteLanguage(lang)">Delete</button>
                </div>
                <button v-show="language.length > 0" class="mian-button bg-primaey" style="margin:20px 0" @click="showFromNew">Add New</button>
                <div class="row" v-if="newForm || language.length == 0">
                    <div class="form-group col-6">
                        <label class="main-lable" for="">Language</label>
                        <input class="main-input" type="text" placeholder="Language" v-model="newLanguage.language">
                    </div>
                    <div class="form-group col-6">
                        <label class="main-lable" for="">Mastery</label>
                        <input class="main-input" type="text" placeholder="Mastery" v-model="newLanguage.mastery">
                    </div>
                    <button class="mian-button" @click="addLanguage">Add</button>
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
            newLanguage:{
                language:'',
                mastery:'',
                user_id:Auth.user.id
            }
        }
    },computed:{
        ...mapState([
            'language'
        ])
    },
    mounted() {
        this.$store.dispatch('getLanguage',Auth.user.id)
    },
    methods:{
        showFromNew(){
            this.newForm = true;
            this.newLanguage.language ='';
            this.newLanguage.mastery = '';
            
        },
        addLanguage(){
            this.$store.dispatch('addLanguage',this.newLanguage)
            this.newForm = false;        
                
        },
        editLanguage(language){
            this.$store.dispatch('editLanguage',language)
        },
        deleteLanguage(language){
            this.$store.dispatch('deleteLanguage',language)
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