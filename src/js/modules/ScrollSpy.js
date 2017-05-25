import $ from 'jquery';
import waypoints from '../../../node_modules/waypoints/lib/noframework.waypoints';

class ScrollSpy {
    constructor() {
        this.navSections = $('.nav-section');
        this.scrollSpyLinks = $('.scroll-spy__link');
        this.createWaypoints();
    }

    createWaypoints() {
        var self = this;
        this.navSections.each(function() {
            let currentNavSection = this;
            new Waypoint({
                element: currentNavSection,
                handler: function(direction) {
                    if (direction == "down") {
                        let matchingSpyLink = "#" + currentNavSection.getAttribute('id') + "-link";
                        self.scrollSpyLinks.removeClass('scroll-spy__link--current');
                        $(matchingSpyLink).addClass('scroll-spy__link--current');
                        console.log((matchingSpyLink));
                    }
                },
                offset: ("40%")
            });

            new Waypoint({
                element: currentNavSection,
                handler: function(direction) {
                    if (direction == "up") {
                        let matchingSpyLink = "#" + currentNavSection.getAttribute('id') + "-link";
                        self.scrollSpyLinks.removeClass('scroll-spy__link--current');
                        $(matchingSpyLink).addClass('scroll-spy__link--current');
                        console.log((matchingSpyLink));
                    }
                },
                offset: ("-20%")
            });
        });
    }
}

export default ScrollSpy;