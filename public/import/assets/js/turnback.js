(function () {
    "use strict";

    // Disable the back button
    history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
})();
