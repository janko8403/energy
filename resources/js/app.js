import "bootstrap";
import addClient  from './modules/addClient';
import editClient  from './modules/editClient';

class App {
    constructor () {
        addClient();
        editClient();
        this.events();
    }

    events() {

    }
}

document.addEventListener('DOMContentLoaded', () => {
    new App();
});

