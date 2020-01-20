import Vue from 'vue';
import Vuex from 'vuex';
import Axios from 'axios';
Vue.use(Vuex);

export const  summary = new Vuex.Store({
    state:{
        summary:[],
        newsummary:''

    },
    getters: {
       
    },
    mutations: {
        SET_SUMMARY(state,summary){
            state.summary = summary;
        },
        SET_NEW_SUMMARY(state,summary){
            state.summary.push(summary);
        },
        SET_EDIT_SUMMARY(state,summary){
            state.summary.unshift(summary);
        },
        DELETE_SUMMARY(state,summary){

            state.summary.splice(state.summary.indexOf(summary),1);
        }
    },
    actions:{
        getSummary({commit},id){
            axios.get('http://localhost:8000/api/view-summary/'+id)
            .then(data=>{
                console.log(data.data);
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
                console.log(res)
                commit('SET_NEW_SUMMARY',summary)
			})
			.catch(err => {
				console.error(err); 
			})
        },
        editSummary({commit},summary){
            axios.post('http://localhost:8000/api/edit-summary',summary)
			.then(res => {
                console.log(res)
                commit('SET_EDIT_SUMMARY',summary)
			})
			.catch(err => {
				console.error(err); 
			})
        },
        deleteSummary({commit},summary){
            axios.post('http://localhost:8000/api/delete-summary',summary)
			.then(res => {
                console.log(res)
                commit('DELETE_SUMMARY',summary)
			})
			.catch(err => {
				console.error(err); 
			})
        },
    }
});