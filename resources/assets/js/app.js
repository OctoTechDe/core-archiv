
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */

// Users Component
Vue.component(
    'users',
    require('./components/Users.vue')
);

// Create User Component
Vue.component(
    'create-user',
    require('./components/CreateUser.vue')
);

// Laravel Passport Components
Vue.component(
    'passport-clients',
    require('./components/passport/Clients.vue')
);

Vue.component(
    'passport-authorized-clients',
    require('./components/passport/AuthorizedClients.vue')
);

Vue.component(
    'passport-personal-access-tokens',
    require('./components/passport/PersonalAccessTokens.vue')
);

// Form Alert Components
import { 
    AlertError, 
    AlertErrors, 
    AlertSuccess 
} from 'vform';

Vue.component(
    'alert-error', 
    AlertError
);

Vue.component(
    'alert-errors', 
    AlertErrors
);

Vue.component(
    'alert-success',
    AlertSuccess
);

const app = new Vue({
    el: 'body'
});
