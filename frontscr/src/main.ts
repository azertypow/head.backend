import "./style/_main.scss"

import { createApp } from 'vue'
import App from './App.vue'
import './registerServiceWorker'
import router from './router'
import store from './store'

createApp(App).use(store).use(router).mount('#app')

const auth = btoa('public@public.com:publickey')

fetch("/api/pages/students", {
  method: "GET",
  headers: {
    // "X-CSRF" : csrf,
    Authorization: 'Basic ' + auth
  }
})
  .then(response => response.json())
  .then(response => {

    console.log( response.data )

    store.commit("updateStudents", response.data.content)

  })
  .catch(error => {
    // something went wrong
  });
