import Vue from 'vue';
import Vuex from 'vuex';
import Axios from 'axios';
Vue.use(Vuex);

export const  store = new Vuex.Store({
    state:{
        personalInfo:[],
        summary:[],
        newsummary:'',
        experience:[],
        education:[],
        skills:[],
        language:[],
        interests:[],
        certificate:[],
        conference:[],
        course:[],
        publications:[],
        cvPersonalInfo:[],
        cvSummary:[],
        cvExperience:[],
        cvEducation:[],
        cvSkills:[],
        cvLanguage:[],
        cvInterests:[],
        cvCertificate:[],
        cvConference:[],
        cvCourse:[],
        cvPublications:[]

    },
    getters: {
       
    },
    mutations: {
        SET_PERSONAL_INFO(state,personal){
            state.personalInfo = personal;
        },
        SET_NEW_PERSONAL_INFO(state,personalInfo){
            state.personalInfo.unshift(personalInfo);
        },
        SET_EDIT_PERSONAL_INFO(state,PI){
            //state.personalInfo.unshift(PI);
        },
        DELETE_PERSONAL_INFO(state,PI){

                state.personalInfo.splice(state.personalInfo.indexOf(PI),1);
        },
        //--------------------------------------------------------------
        // Summary
        //---------
        SET_SUMMARY(state,summary){
            state.summary = summary;
        },
        SET_NEW_SUMMARY(state,summary){
            state.summary.unshift(summary);
        },
        SET_EDIT_SUMMARY(state,summary){
            // state.summary.splice(state.summary.indexOf(summary),1);
            // state.summary.unshift(summary);
        },
        DELETE_SUMMARY(state,summary){

            state.summary.splice(state.summary.indexOf(summary),1);
        },
        //--------------------------------------------------------------
        // Experience
        //------------
        SET_EXPERIENCE(state,experience){
            state.experience = experience;
        },
        SET_NEW_EXPERIENCE(state,experience){
            state.experience.unshift(experience);
        },
        SET_EDIT_EXPERIENCE(state,experience){
            // state.experience.splice(state.experience.indexOf(experience),1);
            // state.experience.unshift(experience);
        },
        DELETE_EXPERIENCE(state,experience){

            state.experience.splice(state.experience.indexOf(experience),1);
        },
        //--------------------------------------------------------------
        // Education 
        //------------
        SET_EDUCATION(state,education){
            state.education = education;
        },
        SET_NEW_EDUCATION(state,education){
            state.education.unshift(education);
        },
        SET_EDIT_EDUCATION(state,education){
            // state.education.splice(state.education.indexOf(education),1);
            // state.education.unshift(education);
        },
        DELETE_EDUCATION(state,education){

            state.education.splice(state.education.indexOf(education),1);
        },
        //--------------------------------------------------------------
        // Skills
        //---------
        SET_SKILLS(state,skills){
            state.skills = skills;
        },
        SET_NEW_SKILLS(state,skills){
            state.skills.unshift(skills);
        },
        SET_EDIT_SKILLS(state,skills){
            // state.skills.splice(state.skills.indexOf(skills),1);
            // state.skills.unshift(skills);
        },
        DELETE_SKILLS(state,skills){

            state.skills.splice(state.skills.indexOf(skills),1);
        },
        //--------------------------------------------------------------
        // Languages  
        //---------
        SET_LANGUAGE(state,language){
            state.language = language;
        },
        SET_NEW_LANGUAGE(state,language){
            state.language.unshift(language);
        },
        SET_EDIT_LANGUAGE(state,language){
            // state.language.splice(state.language.indexOf(language),1);
            // state.language.unshift(language);
        },
        DELETE_LANGUAGE(state,language){
            state.language.splice(state.language.indexOf(language),1);
        },
        //--------------------------------------------------------------
        // interests 
        //---------
        SET_INTERESTS(state,interests){
            state.interests = interests;
        },
        SET_NEW_INTERESTS(state,interests){
            state.interests.unshift(interests);
        },
        SET_EDIT_INTERESTS(state,interests){
            // state.interests.splice(state.interests.indexOf(interests),1);
            // state.interests.unshift(interests);
        },
        DELETE_INTERESTS(state,interests){
            state.interests.splice(state.interests.indexOf(interests),1);
        },
        //--------------------------------------------------------------
        // Certificates 
        //------------
        SET_CERTIFICATES(state,certificate){
            state.certificate = certificate;
        },
        SET_NEW_CERTIFICATES(state,certificate){
            state.certificate.unshift(certificate);
        },
        SET_EDIT_CERTIFICATES(state,certificate){
            // state.certificate.splice(state.certificate.indexOf(certificate),1);
            // state.certificate.unshift(certificate);
        },
        DELETE_CERTIFICATES(state,certificate){
            state.certificate.splice(state.certificate.indexOf(certificate),1);
        },
        //--------------------------------------------------------------
        // conferences 
        //---------
        SET_CONFERENCE(state,conference){
            state.conference = conference;
        },
        SET_NEW_CONFERENCE(state,conference){
            state.conference.unshift(conference);
        },
        SET_EDIT_CONFERENCE(state,conference){
            // state.conference.splice(state.conference.indexOf(conference),1);
            // state.conference.unshift(conference);
        },
        DELETE_CONFERENCE(state,conference){

            state.conference.splice(state.conference.indexOf(conference),1);
        },
        //--------------------------------------------------------------
        // Courses COURSE
        //---------
        SET_COURSE(state,course){
            state.course = course;
        },
        SET_NEW_COURSE(state,course){
            // state.course.unshift(course);
            state.course.unshift(course);
        },
        SET_EDIT_COURSE(state,course){
            // state.course.splice(state.course.indexOf(course),1);
            // state.course.unshift(course);
        },
        DELETE_COURSE(state,course){

            state.course.splice(state.course.indexOf(course),1);
        },
        //--------------------------------------------------------------
        // Publications  PUBLICATIONS
        //---------
        SET_PUBLICATIONS(state,publications){
            state.publications = publications;
        },
        SET_NEW_PUBLICATIONS(state,publications){
            // state.publications.unshift(publications);
            state.publications.unshift(publications);
        },
        SET_EDIT_PUBLICATIONS(state,publications){
            // state.publications.splice(state.publications.indexOf(publications),1);
            // state.publications.unshift(publications);
        },
        DELETE_PUBLICATIONS(state,publications){

            state.publications.splice(state.publications.indexOf(publications),1);
        },
        //--------------------------------------------------------------
        // CV Template 
        //-------------
        SET_CV_PERSONAL_INFO(state,cvPersonalInfo){
            state.cvPersonalInfo = cvPersonalInfo;
        },
        SET_CV_SUMMARY(state,cvSummary){
            state.cvSummary = cvSummary;
        },
        SET_CV_EXPERIENCE(state,cvExperience){
            state.cvExperience = cvExperience;
        },
        SET_CV_EDUCATION(state,cvEducation){
            state.cvEducation = cvEducation;
        },
        SET_CV_SKILLS(state,cvSkills){
            state.cvSkills = cvSkills;
        },
        SET_CV_LANGUAGE(state,cvLanguage){
            state.cvLanguage = cvLanguage;
        },
        SET_CV_INTERESTS(state,cvInterests){
            state.cvInterests = cvInterests;
        },
        SET_CV_CERTIFICATE(state,cvCertificate){
            state.cvCertificate = cvCertificate;
        },
        SET_CV_CONFERENCE(state,cvConference){
            state.cvConference = cvConference;
        },
        SET_CV_COURSE(state,cvCourse){
            state.cvCourse = cvCourse;
        },
        SET_CV_PUBLICATIONS(state,cvPublications){
            state.cvPublications = cvPublications;
        },
    },
    actions:{
        getPersonalInfo({commit},id){
            axios.get('http://localhost:8000/api/view-personal-info/'+id)
            .then(data=>{
                
                let personal = data.data;
                commit('SET_PERSONAL_INFO',personal)
            })
            .catch(error=>{
                console.log(error)
            })
        },
        addPersonalInfo({commit},personalInfo){
            axios.post('http://localhost:8000/api/add-personal-info',personalInfo)
			.then(res => {
               
                commit('SET_NEW_PERSONAL_INFO',personalInfo)
			})
			.catch(err => {
				console.error(err); 
			})
        },
        editPersonalInfo({commit},PI){
            axios.post('http://localhost:8000/api/edit-personal-info',PI)
			.then(res => {
               
                commit('SET_EDIT_PERSONAL_INFO',PI)
			})
			.catch(err => {
				console.error(err); 
			})
        },
        deletePersonalInfo({commit},PI){
            axios.post('http://localhost:8000/api/delete-personal-info',PI)
			.then(res => {
               
                commit('DELETE_PERSONAL_INFO',PI)
			})
			.catch(err => {
				console.error(err); 
			})
        },
        //--------------------------------------------------------------
        // Summary
        //---------
        getSummary({commit},id){
            axios.get('http://localhost:8000/api/view-summary/'+id)
            .then(data=>{
                
                let summary = data.data;
                commit('SET_SUMMARY',summary)
            })
            .catch(error=>{
                console.log(error)
            })
        },
        addSummary({commit},summary){
            axios.post('http://localhost:8000/api/add-summary',summary)
			.then(res => {
               
                commit('SET_NEW_SUMMARY',summary)
			})
			.catch(err => {
				console.error(err); 
			})
        },
        editSummary({commit},summary){
            axios.post('http://localhost:8000/api/edit-summary',summary)
			.then(res => {
               
                commit('SET_EDIT_SUMMARY',summary)
			})
			.catch(err => {
				console.error(err); 
			})
        },
        deleteSummary({commit},summary){
            axios.post('http://localhost:8000/api/delete-summary',summary)
			.then(res => {
               
                commit('DELETE_SUMMARY',summary)
			})
			.catch(err => {
				console.error(err); 
			})
        },
        //--------------------------------------------------------------
        // Experience
        //------------
        getExperience({commit},id){
            axios.get('http://localhost:8000/api/view-experience/'+id)
            .then(data=>{
                
                let experience = data.data;
                commit('SET_EXPERIENCE',experience)
            })
            .catch(error=>{
                console.log(error)
            })
        },
        addExperience({commit},experience){
            axios.post('http://localhost:8000/api/add-experience',experience)
			.then(res => {
               
                commit('SET_NEW_EXPERIENCE',experience)
			})
			.catch(err => {
				console.error(err); 
			})
        },
        editExperience({commit},experience){
            axios.post('http://localhost:8000/api/edit-experience',experience)
			.then(res => {
               
                commit('SET_EDIT_EXPERIENCE',experience)
			})
			.catch(err => {
				console.error(err); 
			})
        },
        deleteExperience({commit},experience){
            axios.post('http://localhost:8000/api/delete-experience',experience)
			.then(res => {
               
                commit('DELETE_EXPERIENCE',experience)
			})
			.catch(err => {
				console.error(err); 
			})
        },

        //--------------------------------------------------------------
        // Education 
        //------------
        getEducation({commit},id){
            axios.get('http://localhost:8000/api/view-education/'+id)
            .then(data=>{
                
                let education = data.data;
                commit('SET_EDUCATION',education)
            })
            .catch(error=>{
                console.log(error)
            })
        },
        addEducation({commit},education){
            axios.post('http://localhost:8000/api/add-education',education)
			.then(res => {
               
                commit('SET_NEW_EDUCATION',education)
			})
			.catch(err => {
				console.error(err); 
			})
        },
        editEducation({commit},education){
            axios.post('http://localhost:8000/api/edit-education',education)
			.then(res => {
               
                commit('SET_EDIT_EDUCATION',education)
			})
			.catch(err => {
				console.error(err); 
			})
        },
        deleteEducation({commit},education){
            axios.post('http://localhost:8000/api/delete-education',education)
			.then(res => {
               
                commit('DELETE_EDUCATION',education)
			})
			.catch(err => {
				console.error(err); 
			})
        },
        //--------------------------------------------------------------
        // Skills
        //---------
        getSkills({commit},id){
            axios.get('http://localhost:8000/api/view-skills/'+id)
            .then(data=>{
                
                let skills = data.data;
                commit('SET_SKILLS',skills)
            })
            .catch(error=>{
                console.log(error)
            })
        },
        addSkills({commit},skills){
            axios.post('http://localhost:8000/api/add-skills',skills)
			.then(res => {
               
                commit('SET_NEW_SKILLS',skills)
			})
			.catch(err => {
				console.error(err); 
			})
        },
        editSkills({commit},skills){
            axios.post('http://localhost:8000/api/edit-skills',skills)
			.then(res => {
               
                commit('SET_EDIT_SKILLS',skills)
			})
			.catch(err => {
				console.error(err); 
			})
        },
        deleteSkills({commit},skills){
            axios.post('http://localhost:8000/api/delete-skills',skills)
			.then(res => {
               
                commit('DELETE_SKILLS',skills)
			})
			.catch(err => {
				console.error(err); 
			})
        },
        //--------------------------------------------------------------
        // Languages  
        //---------
        getLanguage({commit},id){
            axios.get('http://localhost:8000/api/view-language/'+id)
            .then(data=>{
                
                let language = data.data;
                commit('SET_LANGUAGE',language)
            })
            .catch(error=>{
                console.log(error)
            })
        },
        addLanguage({commit},language){
            axios.post('http://localhost:8000/api/add-language',language)
			.then(res => {
               
                commit('SET_NEW_LANGUAGE',language)
			})
			.catch(err => {
				console.error(err); 
			})
        },
        editLanguage({commit},language){
            axios.post('http://localhost:8000/api/edit-language',language)
			.then(res => {
               
                commit('SET_EDIT_LANGUAGE',language)
			})
			.catch(err => {
				console.error(err); 
			})
        },
        deleteLanguage({commit},language){
            axios.post('http://localhost:8000/api/delete-language',language)
			.then(res => {
               
                commit('DELETE_LANGUAGE',language)
			})
			.catch(err => {
				console.error(err); 
			})
        },
        //--------------------------------------------------------------
        // Interests 
        //---------
        getInterests({commit},id){
            axios.get('http://localhost:8000/api/view-interests/'+id)
            .then(data=>{
                
                let interests = data.data;
                commit('SET_INTERESTS',interests)
            })
            .catch(error=>{
                console.log(error)
            })
        },
        addInterests({commit},interests){
            axios.post('http://localhost:8000/api/add-interests',interests)
			.then(res => {
               
                commit('SET_NEW_INTERESTS',interests)
			})
			.catch(err => {
				console.error(err); 
			})
        },
        editInterests({commit},interests){
            axios.post('http://localhost:8000/api/edit-interests',interests)
			.then(res => {
               
                commit('SET_EDIT_INTERESTS',interests)
			})
			.catch(err => {
				console.error(err); 
			})
        },
        deleteInterests({commit},interests){
            axios.post('http://localhost:8000/api/delete-interests',interests)
			.then(res => {
               
                commit('DELETE_INTERESTS',interests)
			})
			.catch(err => {
				console.error(err); 
			})
        },
        //--------------------------------------------------------------
        // Certificate 
        //------------
        getCertificate({commit},id){
            axios.get('http://localhost:8000/api/view-certificate/'+id)
            .then(data=>{
                
                let certificate = data.data;
                commit('SET_CERTIFICATES',certificate)
            })
            .catch(error=>{
                console.log(error)
            })
        },
        addCertificate({commit},certificate){
            axios.post('http://localhost:8000/api/add-certificate',certificate)
			.then(res => {
               
                commit('SET_NEW_CERTIFICATES',certificate)
			})
			.catch(err => {
				console.error(err); 
			})
        },
        editCertificate({commit},certificate){
            axios.post('http://localhost:8000/api/edit-certificate',certificate)
			.then(res => {
               
                commit('SET_EDIT_CERTIFICATES',certificate)
			})
			.catch(err => {
				console.error(err); 
			})
        },
        deleteCertificate({commit},certificate){
            axios.post('http://localhost:8000/api/delete-certificate',certificate)
			.then(res => {
               
                commit('DELETE_CERTIFICATES',certificate)
			})
			.catch(err => {
				console.error(err); 
			})
        },
        //--------------------------------------------------------------
        // Conference
        //---------
        getConference({commit},id){
            axios.get('http://localhost:8000/api/view-conference/'+id)
            .then(data=>{
                
                let conference = data.data;
                commit('SET_CONFERENCE',conference)
            })
            .catch(error=>{
                console.log(error)
            })
        },
        addConference({commit},conference){
            axios.post('http://localhost:8000/api/add-conference',conference)
			.then(res => {
               
                commit('SET_NEW_CONFERENCE',conference)
			})
			.catch(err => {
				console.error(err); 
			})
        },
        editConference({commit},conference){
            axios.post('http://localhost:8000/api/edit-conference',conference)
			.then(res => {
               
                commit('SET_EDIT_CONFERENCE',conference)
			})
			.catch(err => {
				console.error(err); 
			})
        },
        deleteConference({commit},conference){
            axios.post('http://localhost:8000/api/delete-conference',conference)
			.then(res => {
               
                commit('DELETE_CONFERENCE',conference)
			})
			.catch(err => {
				console.error(err); 
			})
        },
        //--------------------------------------------------------------
        // Courses 
        //---------
        getCourse({commit},id){
            axios.get('http://localhost:8000/api/view-course/'+id)
            .then(data=>{
                
                let course = data.data;
                commit('SET_COURSE',course)
            })
            .catch(error=>{
                console.log(error)
            })
        },
        addCourse({commit},course){
            axios.post('http://localhost:8000/api/add-course',course)
			.then(res => {
               
                commit('SET_NEW_COURSE',course)
			})
			.catch(err => {
				console.error(err); 
			})
        },
        editCourse({commit},course){
            axios.post('http://localhost:8000/api/edit-course',course)
			.then(res => {
               
                commit('SET_EDIT_COURSE',course)
			})
			.catch(err => {
				console.error(err); 
			})
        },
        deleteCourse({commit},course){
            axios.post('http://localhost:8000/api/delete-course',course)
			.then(res => {
               
                commit('DELETE_COURSE',course)
			})
			.catch(err => {
				console.error(err); 
			})
        },
        //--------------------------------------------------------------
        // Publications  PUBLICATIONS Publications
        //---------
        getPublications({commit},id){
            axios.get('http://localhost:8000/api/view-publications/'+id)
            .then(data=>{
                
                let publications = data.data;
                commit('SET_PUBLICATIONS',publications)
            })
            .catch(error=>{
                console.log(error)
            })
        },
        addPublications({commit},publications){
            axios.post('http://localhost:8000/api/add-publications',publications)
			.then(res => {
               
                commit('SET_NEW_PUBLICATIONS',publications)
                
			})
			.catch(err => {
				console.error(err); 
			})
        },
        editPublications({commit},publications){
            axios.post('http://localhost:8000/api/edit-publications',publications)
			.then(res => {
               
                commit('SET_EDIT_PUBLICATIONS',publications)
			})
			.catch(err => {
				console.error(err); 
			})
        },
        deletePublications({commit},publications){
            axios.post('http://localhost:8000/api/delete-publications',publications)
			.then(res => {
               
                commit('DELETE_PUBLICATIONS',publications);
                
			})
			.catch(err => {
				console.error(err); 
			})
        },
        //--------------------------------------------------------------
        // CV Template  
        //-------------
        getCvPersonalInfo({commit},userName){
            axios.get('http://localhost:8000/api/view-cv-personal-info/'+userName)
            .then(data=>{
                
                let cvPersonalInfo = data.data;
                commit('SET_CV_PERSONAL_INFO',cvPersonalInfo)
            })
            .catch(error=>{
                console.log(error)
            })
        },
        getCvSummary({commit},userName){
            axios.get('http://localhost:8000/api/view-cv-summary/'+userName)
            .then(data=>{
                
                let summary = data.data;
                commit('SET_CV_SUMMARY',summary)
            })
            .catch(error=>{
                console.log(error)
            })
        },
        getCvExperience({commit},userName){
            axios.get('http://localhost:8000/api/view-cv-experience/'+userName)
            .then(data=>{
                
                let experience = data.data;
                commit('SET_CV_EXPERIENCE',experience)
            })
            .catch(error=>{
                console.log(error)
            })
        },
        getCvEducation({commit},userName){
            axios.get('http://localhost:8000/api/view-cv-education/'+userName)
            .then(data=>{
                
                let education = data.data;
                commit('SET_CV_EDUCATION',education)
            })
            .catch(error=>{
                console.log(error)
            })
        },
        getCvSkills({commit},userName){
            axios.get('http://localhost:8000/api/view-cv-skills/'+userName)
            .then(data=>{
                
                let skills = data.data;
                commit('SET_CV_SKILLS',skills)
            })
            .catch(error=>{
                console.log(error)
            })
        },
        getCvLanguage({commit},userName){
            axios.get('http://localhost:8000/api/view-cv-language/'+userName)
            .then(data=>{
                
                let language = data.data;
                commit('SET_CV_LANGUAGE',language)
            })
            .catch(error=>{
                console.log(error)
            })
        },
        getCvInterests({commit},userName){
            axios.get('http://localhost:8000/api/view-cv-interests/'+userName)
            .then(data=>{
                
                let interests = data.data;
                commit('SET_CV_INTERESTS',interests)
            })
            .catch(error=>{
                console.log(error)
            })
        },
        getCvCertificate({commit},userName){
            axios.get('http://localhost:8000/api/view-cv-certificate/'+userName)
            .then(data=>{
                
                let certificate = data.data;
                commit('SET_CV_CERTIFICATE',certificate)
            })
            .catch(error=>{
                console.log(error)
            })
        },
        getCvConference({commit},userName){
            axios.get('http://localhost:8000/api/view-cv-conference/'+userName)
            .then(data=>{
                
                let conference = data.data;
                commit('SET_CV_CONFERENCE',conference)
            })
            .catch(error=>{
                console.log(error)
            })
        },
        getCvCourse({commit},userName){
            axios.get('http://localhost:8000/api/view-cv-course/'+userName)
            .then(data=>{
                
                let course = data.data;
                commit('SET_CV_COURSE',course)
            })
            .catch(error=>{
                console.log(error)
            })
        },
        getCvPublications({commit},userName){
            axios.get('http://localhost:8000/api/view-cv-publications/'+userName)
            .then(data=>{
                
                let publications = data.data;
                commit('SET_CV_PUBLICATIONS',publications)
            })
            .catch(error=>{
                console.log(error)
            })
        },
    }
});