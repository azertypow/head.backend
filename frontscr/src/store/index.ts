import { createStore } from 'vuex'

export default createStore({

  state: {
    students: undefined,
  } as IStoreState,

  mutations: {
    updateStudents(state, studentData: IStudents) {
      state.students = studentData
    },
  },
  actions: {
  },
  modules: {
  }
})

export interface IStoreState {
  students?: IStudents
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
