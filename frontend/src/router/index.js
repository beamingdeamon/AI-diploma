import Vue from 'vue'
import VueRouter from 'vue-router'
import HomeView from '../views/HomeView.vue'
import MockView from '../views/MockView.vue'
import RegisterView from '../views/RegisterView.vue'
import QuestionsView from '../views/QuestionsView.vue'
Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeView
  },
  {
    path: '/mocks',
    name: 'mocks',
    component: MockView
  },
  {
    path: '/register',
    name: 'register',
    component: RegisterView
  },
  {
    path: '/questions',
    name: 'questions',
    component: QuestionsView
  }
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
