import Api from './api.js';
window.api = new Api();
class Auth {
  constructor() {
    this.token = window.localStorage.getItem('token');
    
    let userData = window.localStorage.getItem('user');
    this.user = userData ? JSON.parse(userData) : null;

    if (this.token) {
        axios.defaults.headers.common['Authorization'] = 'Bearer ' + this.token;
        axios.defaults.headers.common['Accept'] = 'Application/json';

        this.getUser();
    }

  }

  login (token, user) {        
    
      window.localStorage.setItem('token', token);
      
      //window.localStorage.setItem('user', JSON.stringify(user));

      axios.defaults.headers.common['Authorization'] = 'Bearer ' + token;
      axios.defaults.headers.common['Accept'] = 'Application/json';
      axios.defaults.headers.common['Content-Type'] = 'Application/json';


      Event.$emit('userLoggedIn');
  }
  check () {
    return !! this.token;
}
logout(){
  window.localStorage.removeItem('token');
  window.localStorage.removeItem('user');
}
getUser() {
  api.call('get', 'http://localhost:8000/api/user-details')
  
        .then(({data}) => {
          window.localStorage.setItem('user', JSON.stringify(data.user));
            this.user = data.user;
        });
      
}

}
export default Auth;