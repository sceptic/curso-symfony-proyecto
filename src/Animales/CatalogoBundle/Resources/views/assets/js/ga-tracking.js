var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-9238620-2']);
_gaq.push(['_trackPageview']);
(function () { var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true; ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s); })();


eventWithRedirect = function (eventToPrevent, redirectUrl, overrideDelay, category, action, label, value) {
    var delay = 100;

    if (overrideDelay) {
        delay = overrideDelay;
    }

    try {
        if (value != undefined && value != null) //TODO: more optional stuff
            _gaq.push(['_trackEvent', category, action, label, value]);
        else
            _gaq.push(['_trackEvent', category, action, label]);
    } catch (ex) {
        return;
    }

    setTimeout(function () {
        window.location = redirectUrl;
    }, delay);

    if (eventToPrevent)
        eventToPrevent.preventDefault ? eventToPrevent.preventDefault() : eventToPrevent.returnValue = false;
};