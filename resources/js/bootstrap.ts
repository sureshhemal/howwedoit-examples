import axios from 'axios';

declare global {
  interface Window {
    $http: typeof axios;
  }
}

window.$http = axios;
window.$http.defaults.withCredentials = true;
window.$http.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
window.$http.defaults.baseURL = '/api/';

// JS version of the code that sets up Axios for HTTP requests in a Vue.js application.

// import axios from 'axios'
//
// window.$http = axios
// window.$http.defaults.withCredentials = true
// window.$http.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest'
// window.$http.defaults.baseURL = '/api/'
