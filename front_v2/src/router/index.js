import Vue from 'vue'
import VueRouter from 'vue-router'
import HomeView from '../views/HomeView.vue'
import Register from '../views/RegisterView.vue'
import PreMock from '../views/PreMockView.vue'
import FirstMock from '../views/FirstMockView.vue'
import Calendar from '../views/CalendarView.vue'
import ConfigCalendar from '../views/ConfigCalendarView.vue'

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
  },{
    path: '/calendar',
    name: 'calendar',
    component: Calendar,
    meta: {layout: 'main'}
  },{
    path: '/config-calendar',
    name: 'config-calendar',
    component: ConfigCalendar,
    meta: {layout: 'main'}
  }
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
