import {createStore, useStore as baseUseStore, Store} from 'vuex'
import {InjectionKey} from "vue"

export default createStore<IState>({

  state: {
    students: null,
    site: null,
  },

  mutations: {
    updateStudents(state, studentsData: IStudents) {
      state.students = studentsData
    },

    updateSite(state, siteData: ISite) {
      state.site = siteData
    },
  },
  actions: {
  },
  modules: {
  }
})

export const storeKey: InjectionKey<Store<IState>> = Symbol()

export interface IState {
  site: ISite | null
  students: IStudents | null
}

export interface ISite {
  title: string
}

export interface IStudents {
  "description en": string
  "description fr": string
  items: IResourcesItem
  title: string
}

export interface IResourcesItem {
  "description en": string
  "description fr": string
  images: IImageData[]
  link: string
  title: string
}

export interface IImageData {
  url: string
}

export function useStore () {
  return baseUseStore(storeKey)
}
