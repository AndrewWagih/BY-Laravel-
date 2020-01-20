
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
window.Event = new Vue();
import Auth from './auth.js';
window.Auth = new Auth();
import Api from './api.js';
window.api = new Api();

import Vuex from 'vuex'
Vue.use(Vuex)
import 'es6-promise/auto'

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

import DatePaicker from 'vue2-datepicker';
Vue.component('date-picker',DatePaicker);
import { VueTyper } from 'vue-typer'
Vue.component('vue-typer',VueTyper);

Vue.component('home-page',require('./components/homepage/HomePage.vue').default);
Vue.component('uper-content',require('./components/homepage/UperContent.vue').default);
Vue.component('nav-bar',require('./components/homepage/NavBar.vue').default);

Vue.component('login',require('./components/auth/login.vue').default);
Vue.component('body-login',require('./components/auth/BodyLogin.vue').default);
Vue.component('user-app',require('./components/App.vue').default);
Vue.component('side-bar',require('./components/layout/SideBar.vue').default);
Vue.component('content-form',require('./components/ContentForm.vue').default);
Vue.component('personal-info',require('./components/forms/PersonalInfo.vue').default);
Vue.component('summaryy',require('./components/forms/Summaryy.vue').default);
Vue.component('experience',require('./components/forms/Experience.vue').default);
Vue.component('education',require('./components/forms/Education.vue').default);
Vue.component('skills',require('./components/forms/Skills.vue').default);
Vue.component('languages',require('./components/forms/Languages.vue').default);
Vue.component('interests',require('./components/forms/Interests.vue').default);
Vue.component('certificate',require('./components/forms/Certificate.vue').default);
Vue.component('conferences',require('./components/forms/Conferences.vue').default);
Vue.component('courses',require('./components/forms/Courses.vue').default);
Vue.component('publications',require('./components/forms/Publications.vue').default);
Vue.component('references',require('./components/forms/References.vue').default);
Vue.component('softwares',require('./components/forms/Softwares.vue').default);

// CV Temlpate
Vue.component('cv-template',require('./components/cv/Template.vue').default);
Vue.component('body-template',require('./components/cv/BodyTemplate.vue').default);
Vue.component('header-cv',require('./components/cv/HeaderCv.vue').default);
Vue.component('left-section',require('./components/cv/LeftSection.vue').default);
Vue.component('about-me',require('./components/cv/AboutMe.vue').default);
Vue.component('contact-info',require('./components/cv/Contact.vue').default);
Vue.component('my-skills',require('./components/cv/MySkills.vue').default);
Vue.component('right-section',require('./components/cv/RightSection.vue').default);
Vue.component('my-experience',require('./components/cv/MyExperience.vue').default);  
Vue.component('my-eeducation',require('./components/cv/MyEducation.vue').default);
Vue.component('my-Language',require('./components/cv/MyLanguage.vue').default);
Vue.component('my-course',require('./components/cv/MyCourse.vue').default);
Vue.component('my-publications',require('./components/cv/MyPublications.vue').default);
Vue.component('my-conference',require('./components/cv/MyConference.vue').default);
Vue.component('my-certificate',require('./components/cv/MyCertificate.vue').default);
Vue.component('my-interest',require('./components/cv/MyInterest.vue').default);

import router from './Router/router'
import './assest/app.css';
import './assest/managee.css';
import './assest/cv-template.css';
import './assest/home.css';
import '@fortawesome/fontawesome-free/css/all.css';


// vuex
import {store} from './store/store.js'
import {summary} from './store/summary.js'


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


const app = new Vue({
    el: '#app',
    router,
    store,
});

