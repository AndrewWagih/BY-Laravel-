<template>
    <div class="col-12">
        <p class="main-header" >
            Manage
        </p>
        <div class="user-info">
            <!-- <div class="content-user-info" @click="toggle">
                <img class="profile-img" src="http://localhost:8000/images/001.JPG">
                <span class="user-name">Andrew Wagih</span>
            </div> -->
            <transition name="slide-fade">
            <ul class="dropdown" v-if="dropdownUrerInfo">
                <li class="list-dropdown"><i class="fas fa-user-circle"></i>My Profile</li>
                <li class="list-dropdown"><i class="fas fa-user-edit"></i>Edite Profile</li>
            </ul>
            </transition>
        </div>
        <div class="feild">
            <span style="width:100%;padding: 7px" class="badge badge-secondary">FILL IN YOUR DOCUMENT</span>
            <router-link to="PersonalInfo"><p class="feild-list" @click="setActive('PersonalInfo')" :class="{ feildListActivePersonalInfo:PersonalInfo }"><i class="fab fa-github-alt"></i> Personal Info <i class="far fa-times-circle"></i><i class="fas fa-plus-circle"></i></p></router-link>
            <router-link to="Summary"><p class="feild-list" @click="setActive('Summary')" :class="{ feildListActiveSummary:Summary }"><i class="far fa-compass"></i> Summary<i class="far fa-times-circle"></i><i class="fas fa-plus-circle"></i></p></router-link>
            <router-link to="Experience"><p class="feild-list" @click="setActive('Experience')" :class="{ feildListActiveExperience:Experience }"><i class="fas fa-briefcase"></i> Experience<i class="far fa-times-circle"></i><i class="fas fa-plus-circle"></i></p>  </router-link>
            <router-link to="Education"><p class="feild-list" @click="setActive('Education')" :class="{ feildListActiveEducation:Education }"><i class="fas fa-user-graduate"></i> Education<i class="far fa-times-circle"></i><i class="fas fa-plus-circle"></i></p>  </router-link>
            <router-link to="Skills"><p class="feild-list" @click="setActive('Skills')" :class="{ feildListActiveSkills:Skills }"><i class="fas fa-puzzle-piece"></i> Skills<i class="far fa-times-circle"></i><i class="fas fa-plus-circle"></i></p>  </router-link>
            <router-link to="Languages"><p class="feild-list" @click="setActive('Languages')" :class="{ feildListActiveLanguages:Languages }"><i class="fas fa-language"></i> Languages<i class="far fa-times-circle"></i><i class="fas fa-plus-circle"></i></p>  </router-link>
            <router-link to="Interests"><p class="feild-list" @click="setActive('Interests')" :class="{ feildListActiveInterests:Interests }"><i class="fas fa-basketball-ball"></i> Interests<i class="far fa-times-circle"></i><i class="fas fa-plus-circle"></i></p>  </router-link>
            <router-link to="Certificate"><p class="feild-list" @click="setActive('Certificates')" :class="{ feildListActiveCertificates:Certificates }"><i class="fas fa-award"></i> Certificates<i class="far fa-times-circle"></i><i class="fas fa-plus-circle"></i></p>  </router-link>
            <router-link to="Conferences"><p class="feild-list" @click="setActive('Conferences')" :class="{ feildListActiveConferences:Conferences }"><i class="far fa-comment"></i> Conferences<i class="far fa-times-circle"></i><i class="fas fa-plus-circle"></i></p></router-link>
            <router-link to="Courses"><p class="feild-list" @click="setActive('Courses')" :class="{ feildListActiveCourses:Courses }"><i class="far fa-lightbulb"></i> Courses<i class="far fa-times-circle"></i><i class="fas fa-plus-circle"></i></p>  </router-link>
            <router-link to="Publications"><p class="feild-list" @click="setActive('Publications')" :class="{ feildListActivePublications:Publications }"><i class="fas fa-newspaper"></i> Publications<i class="far fa-times-circle"></i><i class="fas fa-plus-circle"></i></p>  </router-link>
            <!-- <router-link to="/References"><p class="feild-list" @click="setActive('References')" :class="{ feildListActiveReferences:References }"><i class="fas fa-book"></i> References<i class="far fa-times-circle"></i><i class="fas fa-plus-circle"></i></p>  </router-link> -->
            <!-- <router-link to="/Softwares"><p class="feild-list" @click="setActive('Software')" :class="{ feildListActiveSoftware:Software }"><i class="fas fa-laptop"></i> Software<i class="far fa-times-circle"></i><i class="fas fa-plus-circle"></i></p></router-link> -->

        </div>
    </div>

</template>

<script>
export default {
    data(){
        return{
            dropdownUrerInfo:false,
            isActive: false,
            PersonalInfo:false,
            Summary:false,
            Experience:false,
            Education:false,
            Skills:false,
            Languages:false,
            Interests:false,
            Certificates:false,
            Conferences:false,
            Courses:false,
            Publications:false,
            References:false,
            Software:false,
        }
    },
    methods:{
        toggle(){
            if(this.dropdownUrerInfo == false){
                this.dropdownUrerInfo = true
            }else{
                this.dropdownUrerInfo = false    
            }
            
        },
        setActive($class){
            this.PersonalInfo = false,
            this.Summary = false,
            this.Experience = false,
            this.Education = false,
            this.Skills = false,
            this.Languages = false,
            this.Interests = false,
            this.Certificates = false,
            this.Conferences = false,
            this.Courses = false,
            this.Publications = false,
            this.References = false,
            this.Software = false,
            this.Licenses = false,
            this.Text = false,
            this.Additional = false,
            Vue.set(this.$data, $class, true)
        }
    }
}
</script>

<style scoped>
a ,a{
    color: #a5a5a5;
    text-decoration: none
}
a:hover ,a:hover{
    color: #a5a5a5;
    text-decoration: none
}
</style>