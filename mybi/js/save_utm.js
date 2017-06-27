(function() {
    function parseGetParams() {
        if (!window.$_GET) {
            window.$_GET = {};
            var __GET = window.location.search.substring(1).split('&');
            for (var i = 0; i < __GET.length; i++) {
                var getVar = __GET[i].split('=');
                $_GET[getVar[0]] = typeof(getVar[1]) == 'undefined' ? '' : getVar[1];
            }
        }

        return window.$_GET;
    }

    function writeCookie(name, value) {
        var expires = '';
        var date = new Date();

        date.setTime(date.getTime() + (30 * 24 * 60 * 60 * 1000));
        expires = '; expires=' + date.toGMTString();
        
        document.cookie = name + '=' + value + expires + '; path=/';
    }


    var utmArr = ['utm_source', 'utm_medium', 'utm_campaign', 'utm_content', 'utm_term'];
    var getArr = parseGetParams();

    var ref = document.referrer.split('/')[2];
    if (typeof ref == 'undefined' || ref.indexOf(location.hostname.split('.').slice(-2).join('.')) >= 0) {
        ref = getArr['utm_source'];
    }
    if (ref && ref.length > 0) {
        writeCookie('refffa', decodeURIComponent(ref));

        for (var i = 0; i < utmArr.length; i++) {
            var value = getArr[utmArr[i]];
            if (value) {
                writeCookie(utmArr[i], decodeURIComponent(getArr[utmArr[i]]));
            } else {
                writeCookie(utmArr[i], '');
            }
        }
    }
})();
