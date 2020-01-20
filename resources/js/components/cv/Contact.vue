<template>
    <div class="row" v-if="cvPersonalInfo.length > 0">
        <div class="col-12 content-contact">
            <div class="header-contact">
                <i class="fas fa-address-book"> CONTACTS</i>
            </div>
            <div class="contacts" v-for="pi in cvPersonalInfo" :key="pi.id">
                <strong>Address :</strong>
                <p class="contct-addres">{{pi.address}}</p>
                <strong>Phone :</strong>
                <p class="contct-phone">{{pi.phone}}</p>
                <strong>E-Mail :</strong>
                <p class="contct-email">{{pi.email}}</p>
                <strong>Date of birth :</strong>
                <p class="contct-birthdate">{{pi.date_birth}}</p>
            </div>
        </div>
    </div>
</template>

<script>
import { mapState, mapGetters , mapMutations} from 'vuex'
export default {
    data(){
        return{
            id:this.$route.params.userName
          }
    },

    mounted() {
        console.log('Component mounted.');
        this.$store.dispatch('getCvPersonalInfo',this.$route.params.userName)
    },
    computed:{
        ...mapState([
            'cvPersonalInfo'
        ])
    },
}
</script>

<style>

</style>