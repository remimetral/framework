
import Home from './pages/home';
import About from './pages/about';
import Login from './pages/login';
import Password from './pages/password';
import Register from './pages/register';
import Deeplink from './deeplink';

export const deeplink = new Deeplink();

export default class Bundle {
    /**
     * @constructor
     */
    constructor() {
        this.eventReload = new Event('reload');
        this.init();
    }

    /**
     * Initialize
     */
    init() {
        const home = new Home();
        const about = new About();
        const login = new Login();
        const password = new Password();
        const register = new Register();
        /*var timerid = setTimeout(() => {
            window.dispatchEvent(this.eventReload);
        }, 2000);*/
    }
}
