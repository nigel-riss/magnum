import $ from 'jquery';

class MobileMenu {
    constructor() {
        this.mainMenu = $('.main-menu');
        this.menuIcon = $('.main-nav__menu-icon');
        this.whiteLogo = $('.logo__white');
        this.events();
    }

    events() {
        this.menuIcon.click(
            this.toggleTheMenu.bind(this)
        );
    }

    toggleTheMenu() {
        this.mainMenu.toggleClass('main-menu--shown');
        this.whiteLogo.toggleClass('logo__white--shown');
        this.menuIcon.toggleClass('main-nav__menu-icon--close-x');
    }
}

export default MobileMenu;