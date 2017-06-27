mybiStreaming = function() {
    function a(a, b, c) {
        var e = "XDomainRequest" in window ? "XDomainRequest" : "XMLHttpRequest",
            d = new window[e];
        d.open("POST", a, c);
        d.onprogress = function() {};
        d.ontimeout = function() {};
        d.onerror = function() {};
        d.onload = function() {};
        d.setRequestHeader && d.setRequestHeader("Content-Type", "text/plain");
        "XDomainRequest" == e ? setTimeout(function() {
            d.send(b)
        }, 0) : d.send(b)
    }
    function f(a, b) {
        var c = new Image;
        c.onload = function() {};
        c.src = a + "?" + b
    }
    var h = "https://app.mybi.ru/analytics/webhook/283";
    return {
        send: function(g, b) {
            var c;
            b = b || h;
            try {
                if (2036 < g.length) {
                    var e = g.match(/(^|&)tid=([^&]+)/i);
                    c = e && e.length ? decodeURIComponent(e[2]) : null;
                    var d;
                    if (c) {
                        e = b;
                        c = {
                            tid: c
                        };
                        var k, l = [];
                        for (k in c) c.hasOwnProperty(k) && l.push(encodeURIComponent(k) + "\x3d" + encodeURIComponent(c[k]));
                        d = e + "?" + l.join("\x26")
                    } else d = null;
                    a(d || b, g, !0)
                } else f(b, g)
            } catch (m) {}
        }
    }
}();

function mybiHitSender(tracker) {
  var originalSendHitTask = tracker.get('sendHitTask');
  tracker.set('sendHitTask', function(model) {
    originalSendHitTask(model);
    mybiStreaming.send(model.get("hitPayload"))
  });
}

function providePlugin(pluginName, pluginConstructor) {
  var ga = window[window['GoogleAnalyticsObject'] || 'ga'];
  if (ga) ga('provide', pluginName, pluginConstructor);
}

providePlugin('mybi', mybiHitSender);
