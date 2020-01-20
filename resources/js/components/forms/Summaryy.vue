<template>
    <div class="row">
        <div class="col-12">
            <p class="main-header-form"><i class="far fa-compass"></i> Summary</p>
            <div class="container container-form">
                <div class="row BP" v-show="summary.length == 0">
                        <div class="form-group col-12">
                            <label class="main-lable" for="">Summary</label>
                            <textarea class="main-textarea" type="text" placeholder="Enter your resume summary, profile or objective." v-model="newSuammry.description"></textarea>
                        </div>
                        <button class="mian-button" @click="addSummary">Add</button>
                </div>
                <div class="row" v-show="summary.length > 0" v-for="summaryy in summary" :key="summaryy.id">
                        <div class="form-group col-12">
                            <label class="main-lable" for="">Summary</label>
                            <textarea class="main-textarea" type="text" placeholder="Enter your resume summary, profile or objective." v-model="summaryy.description"></textarea>
                        </div>
                        <button class="mian-button bg-primary" @click="editSummary(summaryy)">Edit</button>
                        <button class="mian-button bg-danger" style="margin: 20px 0" @click="deleteSummary(summaryy)">Delete</button>
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
            newSuammry:{
                description:'',
                user_id:Auth.user.id
            }
        }
    },
    mounted() {
        this.$store.dispatch('getSummary',Auth.user.id)
    },
    computed:{
        ...mapState([
            'summary'
        ])
    },
    methods:{
        addSummary(){
            this.$store.dispatch('addSummary',this.newSuammry)
        },
        editSummary(summary){
            this.$store.dispatch('editSummary',summary)
        },
        deleteSummary(summary){
            this.$store.dispatch('deleteSummary',summary)
        }
    }
}
</script>

<style>
.mx-input{
            background-color: #f3f3f3;
    }
</style>