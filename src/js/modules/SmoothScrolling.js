import $ from 'jquery';
import waypoints from '../../../node_modules/waypoints/lib/noframework.waypoints';
import smoothScroll from 'jquery-smooth-scroll';

class SmoothScrolling {
    constructor() {
        this.menuLinks = $('.main-menu__list a');
        this.addSmoothScrolling();
    }

    addSmoothScrolling() {
        this.menuLinks.smoothScroll({
            offset: -80
        });
    }
}

export default SmoothScrolling;