<template>
    <div class="row">
        <div class="col-12">
            <p class="main-header-form"><i class="fas fa-award"></i> Certificates  </p>
            <div class="container container-form BP">
                <div class="row BP" v-show="certificate.length > 0" v-for="certi in certificate" :key="certi.id">
                    <div class="form-group col-6">
                        <label class="main-lable" for="">Title</label>
                        <input class="main-input" type="text" placeholder="Title" v-model="certi.title">
                    </div>
                    <div class="form-group col-6">
                        <label class="main-lable" for="">Date</label>
                        <date-picker style="width:100%" v-model="certi.date" valueType="format" lang="en" ></date-picker>
                    </div>
                    <button class="mian-button bg-primary" style="width:50%" @click="editCertificate(certi)">Edit</button>
                    <button class="mian-button bg-danger" style="width:50%" @click="deleteCertificate(certi)">Delete</button>
                </div>
                <button v-show="certificate.length > 0" class="mian-button bg-primaey" style="margin:20px 0" @click="showFromNew">Add New</button>
                <div class="row" v-show="newForm || certificate.length == 0">
                    <div class="form-group col-6">
                        <label class="main-lable" for="">Title</label>
                        <input class="main-input" type="text" placeholder="Title" v-model="newCertificate.title">
                    </div>
                    <div class="form-group col-6">
                        <label class="main-lable" for="">Date</label>
                        <date-picker style="width:100%" v-model="newCertificate.date" valueType="format" lang="en" ></date-picker>
                    </div>
                    <button class="mian-button" @click="addCertificate">Add</button>
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
            newCertificate:{
                title:'',
                date:'',
                user_id:Auth.user.id
            }
            
        }
    },computed:{
        ...mapState([
            'certificate'
        ])
    },
    mounted() {
        this.$store.dispatch('getCertificate',Auth.user.id)
    },
    methods:{
        showFromNew(){
            this.newForm = true;
            this.newCertificate.title ='';
            this.newCertificate.date = '';
            
        },
        addCertificate(){
            this.$store.dispatch('addCertificate',this.newCertificate)
            this.newForm = false;        
                
        },
        editCertificate(certificate){
            this.$store.dispatch('editCertificate',certificate)
        },
        deleteCertificate(certificate){
            this.$store.dispatch('deleteCertificate',certificate)
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