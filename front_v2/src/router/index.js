import Vue from 'vue'
import VueRouter from 'vue-router'
import HomeView from '../views/HomeView.vue'
import Register from '../views/RegisterView.vue'
import PreMock from '../views/PreMockView.vue'
import FirstMock from '../views/FirstMockView.vue'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'main',
    component: HomeView,
    meta: {layout: 'auth'}
  },{
    path: '/register',
    name: 'register',
    component: Register,
    meta: {layout: 'auth'}
  },{
    path: '/pre-mock',
    name: 'pre-mock',
    component: PreMock,
    meta: {layout: 'main'}
  },{
    path: '/first-mock',
    name: 'first-mock',
    component: FirstMock,
    meta: {layout: 'main'}
  }
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
