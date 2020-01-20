<template>
    
    <div class="row" style="background-color: rgba(39, 41, 61, 0.51);    height: -webkit-fill-available;">
        <div class="col-xl-4 col-lg-6 col-md-8 col-sm-8 col-xs-8 login-container">
            <p class="login-header"><i class="fas fa-sign-in-alt"></i> Login</p>
            <div class="form-group">
                <label  for="" class="main-lable" style="color:white">E-mail</label> 
                <input type="email" placeholder="E-mail" class="login-input" v-model="email">
            </div>
            <div class="form-group">
                <label  for="" class="main-lable" style="color:white">Password</label> 
                <input  type="password" placeholder="Password" class="login-input" v-model="password">
            </div>
            <button class="mian-button" @click="login">Login</button>
        </div>
    </div>
    
</template>

<script>
export default {
    data(){
        return{
            userData:Auth.user,
            email: '',
            password: '',
            has_error: false
        }
    },
    methods: {
        login() {
            axios.post('http://localhost:8000/api/login', {
                email:this.email,
                password:this.password,
                
            }).then((res) => {
                Auth.login(res.data.success.token,res.data.user);
                console.log(res.data.user);
                this.$router.push('/manage/PersonalInfo');
                location.reload();
            }).catch(({response}) => {                    
                alert(response.data.message);
            });
            
            }
        },mounted() {
            Event.$on('userLoggedIn', () => {
                this.authenticated = true;
                this.user = Auth.user;
            });
        }
}
</script>

<style>

</style>