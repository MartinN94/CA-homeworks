import HomeComponent from './components/HomeComponent.vue'
import AboutComponent from './components/AboutComponent.vue'

export default {
    mode: 'history',
    routes: [

        {
            path: '/', // our page Url
            component: HomeComponent
        },
        {
            path: '/about-us', // our page URL
            component: AboutComponent,
            name: 'about',
            alias: '/about' // 2) Redirect with alias
        },
     
        // 1) Redirects
        // {
        //     path: "/about",
        //     redirect: { name: "about" }
        // }
    ]
}