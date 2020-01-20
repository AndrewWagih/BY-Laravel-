<template>
    <div class="row">
        <div class="col-12">
            <p class="main-header-form"><i class="fas fa-newspaper"></i> Publications  </p>
            <div class="container container-form">
                <div class="row BP" v-show="publications.length > 0 " v-for="pub in publications" :key="pub.id">
                    <div class="form-group col-6">
                        <label class="main-lable" for="">Title</label>
                        <input class="main-input" type="text" placeholder="Title" v-model="pub.title">
                    </div>
                    <div class="form-group col-6">
                        <label class="main-lable" for="">Date</label>
                        <date-picker style="width:100%" v-model="pub.date" valueType="format" lang="en" ></date-picker>
                    </div>
                    <button class="mian-button bg-primary" style="width:50%" @click="editPublications(pub)">Edit</button>
                    <button class="mian-button bg-danger" style="width:50%" @click="deletePublications(pub)">Delete</button>
                </div>
                <button v-show="publications.length > 0" class="mian-button bg-primaey" style="margin:20px 0" @click="showFromNew">Add New</button>

                <div class="row" v-show=" newForm || publications.length == 0 ">
                    <div class="form-group col-6">
                        <label class="main-lable" for="">Title</label>
                        <input class="main-input" type="text" placeholder="Title" v-model="newPublications.title">
                    </div>
                    <div class="form-group col-6">
                        <label class="main-lable" for="">Date</label>
                        <date-picker style="width:100%" v-model="newPublications.date" valueType="format" lang="en" ></date-picker>
                    </div>
                    <button class="mian-button" @click="addPublications">Add</button>
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
            newPublications:{
                title:'',
                date:'',
                user_id:Auth.user.id
            }
            
        }
    },computed:{
        ...mapState([
            'publications'
        ])
    },
    mounted() {
        this.$store.dispatch('getPublications',Auth.user.id)
    },
    methods:{
        showFromNew(){
            this.newForm = true;
            this.newPublications.title ='';
            this.newPublications.date = '';
            
        },
        addPublications(){
            this.$store.dispatch('addPublications',this.newPublications)
            this.newForm = false;        
                
        },
        editPublications(publications){
            this.$store.dispatch('editPublications',publications)
        },
        deletePublications(publications){
            this.$store.dispatch('deletePublications',publications)
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