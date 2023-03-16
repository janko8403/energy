// import jquery from "jquery";
// window.$ = jquery;
import "bootstrap";

import addComplaint  from './modules/addComplaint';

class App {
    constructor () {
        // this.events();
        addComplaint();
    }

    // events() {
    // }
}

document.addEventListener('DOMContentLoaded', () => {
    new App();
});
