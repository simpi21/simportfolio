import Vue from 'vue';
import VueRouter from 'vue-router';
import Home from './Home';
import AboutUs from './AboutUs';
import ContactUs from './ContactUs';
import MyWork from './MyWork';
import MyBlog from './MyBlog';
import Skills from './Skills';

Vue.use(VueRouter);
const routes = [
    {path: '/', name: 'Home', component: Home},
    {path: '/about-me', name: 'AboutUs', component: AboutUs},
    {path: '/contact-me', name: 'ContactUs', component: ContactUs},
    {path: '/work', name: 'MyWork', component: MyWork},
    {path: '/blog', name: 'MyBlog', component: MyBlog},
    {path: '/skill', name: 'Skills', component: Skills},
];

export default new VueRouter({
    routes: routes
});
