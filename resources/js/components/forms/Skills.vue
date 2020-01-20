<template>
    <div class="row">
        <div class="col-12">
            <p class="main-header-form"><i class="fas fa-puzzle-piece"></i> Skills</p>
            <div class="container container-form">
                <div class="row BP" v-show="skills.length > 0 " v-for="skill in skills" :key="skill.id">
                    <div class="form-group col-12">
                        <label class="main-lable" for="">Skill</label>
                        <input class="main-input" type="text" placeholder="Skill" v-model="skill.skill">
                    </div>
                    <button class="mian-button bg-primary" style="width:50%" @click="editSkill(skill)">Edit</button>
                    <button class="mian-button bg-danger" style="width:50%" @click="deleteSkill(skill)">Delete</button>
                    
                </div>
                <button v-show="skills.length > 0" class="mian-button bg-primaey" style="margin:20px 0" @click="showFromNew">Add New</button>
                <div class="row" v-show="newForm || skills.length == 0 ">
                    <div class="form-group col-12">
                        <label class="main-lable" for="">Skill</label>
                        <input class="main-input" type="text" placeholder="Skill" v-model="newSkill.skill">
                    </div>
                    <button class="mian-button" @click="addSkill">Add</button>
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
           newSkill:{
               skill:'',
               user_id:Auth.user.id
           }
        }
    },
    computed:{
        ...mapState([
            'skills'
        ])
    },
    mounted() {
        this.$store.dispatch('getSkills',Auth.user.id)
    },
    methods:{
        showFromNew(){
            this.newForm = true;
            this.newSkill.skill =''
            
        },
        addSkill(){
            this.$store.dispatch('addSkills',this.newSkill)
            this.newForm = false;        
                
        },
        editSkill(skill){
            this.$store.dispatch('editSkills',skill)
        },
        deleteSkill(skill){
            this.$store.dispatch('deleteSkills',skill)
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