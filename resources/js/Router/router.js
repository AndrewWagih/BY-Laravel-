import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)

import PersonalInfo from '../components/forms/PersonalInfo.vue';
import Summaryy from '../components/forms/Summaryy.vue';
import Experience from '../components/forms/Experience.vue';
import Education from '../components/forms/Education.vue';
import Skills from '../components/forms/Skills.vue';
import Languages from '../components/forms/Languages.vue';
import Interests from '../components/forms/Interests.vue';
import Certificate from '../components/forms/Certificate.vue';
import Conferences from '../components/forms/Conferences.vue';
import Courses from '../components/forms/Courses.vue';
import Publications from '../components/forms/Publications.vue';
import References from '../components/forms/References.vue';
import Softwares from '../components/forms/Softwares.vue';
import login from '../components/auth/login.vue';
import Template from '../components/cv/Template.vue'

const routes =
[
    {
        path: '/login',
        component: login
    },
    {
        path: '/cv/:userName',
        component: Template,
        props:true,
        
    },
    {
        path: '/manage/PersonalInfo',
        component: PersonalInfo
        ,meta: { middlewareAuth: true },
    },
    {
        path: '/manage/Summary',
        component: Summaryy
        ,meta: { middlewareAuth: true },
    },
    {
        path: '/manage/Experience',
        component: Experience
        ,meta: { middlewareAuth: true },
    },
    {
        path: '/manage/Education',
        component: Education
        ,meta: { middlewareAuth: true },
    },
    {
        path: '/manage/Skills',
        component: Skills
        ,meta: { middlewareAuth: true },
    },
    {
        path: '/manage/Languages',
        component: Languages
        ,meta: { middlewareAuth: true },
    },
    {
        path: '/manage/Interests',
        component: Interests
        ,meta: { middlewareAuth: true },
    },
    {
        path: '/manage/Certificate',
        component: Certificate
        ,meta: { middlewareAuth: true },
    },
    {
        path: '/manage/Conferences',
        component: Conferences
        ,meta: { middlewareAuth: true },
    },
    {
        path: '/manage/Courses',
        component: Courses
        ,meta: { middlewareAuth: true },
    },
    {
        path: '/manage/Publications',
        component: Publications
        ,meta: { middlewareAuth: true },
    },
    {
        path: '/manage/References',
        component: References
        ,meta: { middlewareAuth: true },
    },
    {
        path: '/manage/Softwares',
        component: Softwares
        ,meta: { middlewareAuth: true },
    },
]

const router = new VueRouter({
    routes, // short for `routes: routes`,
    hashbang:false,
    mode:'history',

})
  export default router
