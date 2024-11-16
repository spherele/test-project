import './bootstrap';

//Main styles
import '../scss/global/_main.scss';
import '../scss/global/_header.scss';
import '../scss/global/_footer.scss';
import '../scss/global/_variables.scss';

//Pages styles
import '../scss/about/_about.scss';
import '../scss/services/_services.scss';

//Init styles
import '../scss/app.scss';


document.addEventListener('DOMContentLoaded', function () {
    const menuToggleButton = document.querySelector('.site-header__menu-toggle');
    const header = document.querySelector('.site-header');

    menuToggleButton.addEventListener('click', () => {
        header.classList.toggle('active');
    });
});

