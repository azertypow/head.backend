import "./style/_main.scss"

import { createApp } from 'vue'
import App from './App.vue'
import './registerServiceWorker'
import router from './router'
import store, {ISite, storeKey} from './store'

createApp(App).use(store, storeKey).use(router).mount('#app')

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

fetch("/api/site", {
  method: "GET",
  headers: {
    Authorization: 'Basic ' + auth
  }
})
  .then(response => response.json())
  .then(response => {

    const siteData: ISite = {
      title: response.data.content.title || ""
    }

    store.commit("updateSite", siteData)

  })
  .catch(error => {
    // something went wrong
  });
