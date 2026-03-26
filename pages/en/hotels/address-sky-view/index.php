<?php declare(strict_types=1); ?>
<!doctype html>
<html lang="en">


<head><script src="/dependencies/js/wp-content/themes/emaar-projects/addresshotel/js/utils-matcher.js"></script><script src="/dependencies/js/wp-content/themes/emaar-projects/addresshotel/js/utils-single.js"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="/dependencies/img/wp-content/themes/emaar-projects/img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/dependencies/img/wp-content/themes/emaar-projects/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/dependencies/img/wp-content/themes/emaar-projects/img/favicon/favicon-16x16.png">
  <link rel="mask-icon" href="/dependencies/img/wp-content/themes/emaar-projects/img/favicon/favicon-32x32.png">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">
  <meta name="yandex-verification" content="4765176ea1d97e47">

  <meta name="google-site-verification" content="9ijprdUIq2E46IQpcBdOS7g8YmIA8OrGSL7eUbUeHvU">

  <script type="text/javascript" id="new-relic-script">
;window.NREUM||(NREUM={});NREUM.init={distributed_tracing:{enabled:true},privacy:{cookies_enabled:true}};
window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o||e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(t,e,n){function r(t){try{s.console&&console.log(t)}catch(e){}}var o,i=t("ee"),a=t(29),s={};try{o=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(s.console=!0,o.indexOf("dev")!==-1&&(s.dev=!0),o.indexOf("nr_dev")!==-1&&(s.nrDev=!0))}catch(c){}s.nrDev&&i.on("internal-error",function(t){r(t.stack)}),s.dev&&i.on("fn-err",function(t,e,n){r(n.stack)}),s.dev&&(r("NR AGENT IN DEVELOPMENT MODE"),r("flags: "+a(s,function(t,e){return t}).join(", ")))},{}],2:[function(t,e,n){function r(t,e,n,r,s){try{l?l-=1:o(s||new UncaughtException(t,e,n),!0)}catch(f){try{i("ierr",[f,c.now(),!0])}catch(d){}}return"function"==typeof u&&u.apply(this,a(arguments))}function UncaughtException(t,e,n){this.message=t||"Uncaught error with no additional information",this.sourceURL=e,this.line=n}function o(t,e){var n=e?null:c.now();i("err",[t,n])}var i=t("handle"),a=t(30),s=t("ee"),c=t("loader"),f=t("gos"),u=window.onerror,d=!1,p="nr@seenError";if(!c.disabled){var l=0;c.features.err=!0,t(1),window.onerror=r;try{throw new Error}catch(h){"stack"in h&&(t(13),t(12),"addEventListener"in window&&t(6),c.xhrWrappable&&t(14),d=!0)}s.on("fn-start",function(t,e,n){d&&(l+=1)}),s.on("fn-err",function(t,e,n){d&&!n[p]&&(f(n,p,function(){return!0}),this.thrown=!0,o(n))}),s.on("fn-end",function(){d&&!this.thrown&&l>0&&(l-=1)}),s.on("internal-error",function(t){i("ierr",[t,c.now(),!0])})}},{}],3:[function(t,e,n){var r=t("loader");r.disabled||(r.features.ins=!0)},{}],4:[function(t,e,n){function r(){L++,C=g.hash,this[u]=y.now()}function o(){L--,g.hash!==C&&i(0,!0);var t=y.now();this[h]=~~this[h]+t-this[u],this[d]=t}function i(t,e){E.emit("newURL",[""+g,e])}function a(t,e){t.on(e,function(){this[e]=y.now()})}var s="-start",c="-end",f="-body",u="fn"+s,d="fn"+c,p="cb"+s,l="cb"+c,h="jsTime",m="fetch",v="addEventListener",w=window,g=w.location,y=t("loader");if(w[v]&&y.xhrWrappable&&!y.disabled){var x=t(10),b=t(11),E=t(8),R=t(6),O=t(13),S=t(7),N=t(14),M=t(9),P=t("ee"),T=P.get("tracer");t(16),y.features.spa=!0;var C,L=0;P.on(u,r),b.on(p,r),M.on(p,r),P.on(d,o),b.on(l,o),M.on(l,o),P.buffer([u,d,"xhr-done","xhr-resolved"]),R.buffer([u]),O.buffer(["setTimeout"+c,"clearTimeout"+s,u]),N.buffer([u,"new-xhr","send-xhr"+s]),S.buffer([m+s,m+"-done",m+f+s,m+f+c]),E.buffer(["newURL"]),x.buffer([u]),b.buffer(["propagate",p,l,"executor-err","resolve"+s]),T.buffer([u,"no-"+u]),M.buffer(["new-jsonp","cb-start","jsonp-error","jsonp-end"]),a(N,"send-xhr"+s),a(P,"xhr-resolved"),a(P,"xhr-done"),a(S,m+s),a(S,m+"-done"),a(M,"new-jsonp"),a(M,"jsonp-end"),a(M,"cb-start"),E.on("pushState-end",i),E.on("replaceState-end",i),w[v]("hashchange",i,!0),w[v]("load",i,!0),w[v]("popstate",function(){i(0,L>1)},!0)}},{}],5:[function(t,e,n){function r(t){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var o=t("ee"),i=t("handle"),a=t(13),s=t(12),c="learResourceTimings",f="addEventListener",u="resourcetimingbufferfull",d="bstResource",p="resource",l="-start",h="-end",m="fn"+l,v="fn"+h,w="bstTimer",g="pushState",y=t("loader");if(!y.disabled){y.features.stn=!0,t(8),"addEventListener"in window&&t(6);var x=NREUM.o.EV;o.on(m,function(t,e){var n=t[0];n instanceof x&&(this.bstStart=y.now())}),o.on(v,function(t,e){var n=t[0];n instanceof x&&i("bst",[n,e,this.bstStart,y.now()])}),a.on(m,function(t,e,n){this.bstStart=y.now(),this.bstType=n}),a.on(v,function(t,e){i(w,[e,this.bstStart,y.now(),this.bstType])}),s.on(m,function(){this.bstStart=y.now()}),s.on(v,function(t,e){i(w,[e,this.bstStart,y.now(),"requestAnimationFrame"])}),o.on(g+l,function(t){this.time=y.now(),this.startPath=location.pathname+location.hash}),o.on(g+h,function(t){i("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),f in window.performance&&(window.performance["c"+c]?window.performance[f](u,function(t){i(d,[window.performance.getEntriesByType(p)]),window.performance["c"+c]()},!1):window.performance[f]("webkit"+u,function(t){i(d,[window.performance.getEntriesByType(p)]),window.performance["webkitC"+c]()},!1)),document[f]("scroll",r,{passive:!0}),document[f]("keypress",r,!1),document[f]("click",r,!1)}}},{}],6:[function(t,e,n){function r(t){for(var e=t;e&&!e.hasOwnProperty(u);)e=Object.getPrototypeOf(e);e&&o(e)}function o(t){s.inPlace(t,[u,d],"-",i)}function i(t,e){return t[1]}var a=t("ee").get("events"),s=t("wrap-function")(a,!0),c=t("gos"),f=XMLHttpRequest,u="addEventListener",d="removeEventListener";e.exports=a,"getPrototypeOf"in Object?(r(document),r(window),r(f.prototype)):f.prototype.hasOwnProperty(u)&&(o(window),o(f.prototype)),a.on(u+"-start",function(t,e){var n=t[1],r=c(n,"nr@wrapped",function(){function t(){if("function"==typeof n.handleEvent)return n.handleEvent.apply(n,arguments)}var e={object:t,"function":n}[typeof n];return e?s(e,"fn-",null,e.name||"anonymous"):n});this.wrapped=t[1]=r}),a.on(d+"-start",function(t){t[1]=this.wrapped||t[1]})},{}],7:[function(t,e,n){function r(t,e,n){var r=t[e];"function"==typeof r&&(t[e]=function(){var t=i(arguments),e={};o.emit(n+"before-start",[t],e);var a;e[m]&&e[m].dt&&(a=e[m].dt);var s=r.apply(this,t);return o.emit(n+"start",[t,a],s),s.then(function(t){return o.emit(n+"end",[null,t],s),t},function(t){throw o.emit(n+"end",[t],s),t})})}var o=t("ee").get("fetch"),i=t(30),a=t(29);e.exports=o;var s=window,c="fetch-",f=c+"body-",u=["arrayBuffer","blob","json","text","formData"],d=s.Request,p=s.Response,l=s.fetch,h="prototype",m="nr@context";d&&p&&l&&(a(u,function(t,e){r(d[h],e,f),r(p[h],e,f)}),r(s,"fetch",c),o.on(c+"end",function(t,e){var n=this;if(e){var r=e.headers.get("content-length");null!==r&&(n.rxSize=r),o.emit(c+"done",[null,e],n)}else o.emit(c+"done",[t],n)}))},{}],8:[function(t,e,n){var r=t("ee").get("history"),o=t("wrap-function")(r);e.exports=r;var i=window.history&&window.history.constructor&&window.history.constructor.prototype,a=window.history;i&&i.pushState&&i.replaceState&&(a=i),o.inPlace(a,["pushState","replaceState"],"-")},{}],9:[function(t,e,n){function r(t){function e(){c.emit("jsonp-end",[],p),t.removeEventListener("load",e,!1),t.removeEventListener("error",n,!1)}function n(){c.emit("jsonp-error",[],p),c.emit("jsonp-end",[],p),t.removeEventListener("load",e,!1),t.removeEventListener("error",n,!1)}var r=t&&"string"==typeof t.nodeName&&"script"===t.nodeName.toLowerCase();if(r){var o="function"==typeof t.addEventListener;if(o){var a=i(t.src);if(a){var u=s(a),d="function"==typeof u.parent[u.key];if(d){var p={};f.inPlace(u.parent,[u.key],"cb-",p),t.addEventListener("load",e,!1),t.addEventListener("error",n,!1),c.emit("new-jsonp",[t.src],p)}}}}}function o(){return"addEventListener"in window}function i(t){var e=t.match(u);return e?e[1]:null}function a(t,e){var n=t.match(p),r=n[1],o=n[3];return o?a(o,e[r]):e[r]}function s(t){var e=t.match(d);return e&&e.length>=3?{key:e[2],parent:a(e[1],window)}:{key:t,parent:window}}var c=t("ee").get("jsonp"),f=t("wrap-function")(c);if(e.exports=c,o()){var u=/[?&](?:callback|cb)=([^&#]+)/,d=/(.*)\.([^.]+)/,p=/^(\w+)(\.|$)(.*)$/,l=["appendChild","insertBefore","replaceChild"];Node&&Node.prototype&&Node.prototype.appendChild?f.inPlace(Node.prototype,l,"dom-"):(f.inPlace(HTMLElement.prototype,l,"dom-"),f.inPlace(HTMLHeadElement.prototype,l,"dom-"),f.inPlace(HTMLBodyElement.prototype,l,"dom-")),c.on("dom-start",function(t){r(t[0])})}},{}],10:[function(t,e,n){var r=t("ee").get("mutation"),o=t("wrap-function")(r),i=NREUM.o.MO;e.exports=r,i&&(window.MutationObserver=function(t){return this instanceof i?new i(o(t,"fn-")):i.apply(this,arguments)},MutationObserver.prototype=i.prototype)},{}],11:[function(t,e,n){function r(t){var e=i.context(),n=s(t,"executor-",e,null,!1),r=new f(n);return i.context(r).getCtx=function(){return e},r}var o=t("wrap-function"),i=t("ee").get("promise"),a=t("ee").getOrSetContext,s=o(i),c=t(29),f=NREUM.o.PR;e.exports=i,f&&(window.Promise=r,["all","race"].forEach(function(t){var e=f[t];f[t]=function(n){function r(t){return function(){i.emit("propagate",[null,!o],a,!1,!1),o=o||!t}}var o=!1;c(n,function(e,n){Promise.resolve(n).then(r("all"===t),r(!1))});var a=e.apply(f,arguments),s=f.resolve(a);return s}}),["resolve","reject"].forEach(function(t){var e=f[t];f[t]=function(t){var n=e.apply(f,arguments);return t!==n&&i.emit("propagate",[t,!0],n,!1,!1),n}}),f.prototype["catch"]=function(t){return this.then(null,t)},f.prototype=Object.create(f.prototype,{constructor:{value:r}}),c(Object.getOwnPropertyNames(f),function(t,e){try{r[e]=f[e]}catch(n){}}),o.wrapInPlace(f.prototype,"then",function(t){return function(){var e=this,n=o.argsToArray.apply(this,arguments),r=a(e);r.promise=e,n[0]=s(n[0],"cb-",r,null,!1),n[1]=s(n[1],"cb-",r,null,!1);var c=t.apply(this,n);return r.nextPromise=c,i.emit("propagate",[e,!0],c,!1,!1),c}}),i.on("executor-start",function(t){t[0]=s(t[0],"resolve-",this,null,!1),t[1]=s(t[1],"resolve-",this,null,!1)}),i.on("executor-err",function(t,e,n){t[1](n)}),i.on("cb-end",function(t,e,n){i.emit("propagate",[n,!0],this.nextPromise,!1,!1)}),i.on("propagate",function(t,e,n){this.getCtx&&!e||(this.getCtx=function(){if(t instanceof Promise)var e=i.context(t);return e&&e.getCtx?e.getCtx():this})}),r.toString=function(){return""+f})},{}],12:[function(t,e,n){var r=t("ee").get("raf"),o=t("wrap-function")(r),i="equestAnimationFrame";e.exports=r,o.inPlace(window,["r"+i,"mozR"+i,"webkitR"+i,"msR"+i],"raf-"),r.on("raf-start",function(t){t[0]=o(t[0],"fn-")})},{}],13:[function(t,e,n){function r(t,e,n){t[0]=a(t[0],"fn-",null,n)}function o(t,e,n){this.method=n,this.timerDuration=isNaN(t[1])?0:+t[1],t[0]=a(t[0],"fn-",this,n)}var i=t("ee").get("timer"),a=t("wrap-function")(i),s="setTimeout",c="setInterval",f="clearTimeout",u="-start",d="-";e.exports=i,a.inPlace(window,[s,"setImmediate"],s+d),a.inPlace(window,[c],c+d),a.inPlace(window,[f,"clearImmediate"],f+d),i.on(c+u,r),i.on(s+u,o)},{}],14:[function(t,e,n){function r(t,e){d.inPlace(e,["onreadystatechange"],"fn-",s)}function o(){var t=this,e=u.context(t);t.readyState>3&&!e.resolved&&(e.resolved=!0,u.emit("xhr-resolved",[],t)),d.inPlace(t,g,"fn-",s)}function i(t){y.push(t),h&&(b?b.then(a):v?v(a):(E=-E,R.data=E))}function a(){for(var t=0;t<y.length;t++)r([],y[t]);y.length&&(y=[])}function s(t,e){return e}function c(t,e){for(var n in t)e[n]=t[n];return e}t(6);var f=t("ee"),u=f.get("xhr"),d=t("wrap-function")(u),p=NREUM.o,l=p.XHR,h=p.MO,m=p.PR,v=p.SI,w="readystatechange",g=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],y=[];e.exports=u;var x=window.XMLHttpRequest=function(t){var e=new l(t);try{u.emit("new-xhr",[e],e),e.addEventListener(w,o,!1)}catch(n){try{u.emit("internal-error",[n])}catch(r){}}return e};if(c(l,x),x.prototype=l.prototype,d.inPlace(x.prototype,["open","send"],"-xhr-",s),u.on("send-xhr-start",function(t,e){r(t,e),i(e)}),u.on("open-xhr-start",r),h){var b=m&&m.resolve();if(!v&&!m){var E=1,R=document.createTextNode(E);new h(a).observe(R,{characterData:!0})}}else f.on("fn-end",function(t){t[0]&&t[0].type===w||a()})},{}],15:[function(t,e,n){function r(t){if(!s(t))return null;var e=window.NREUM;if(!e.loader_config)return null;var n=(e.loader_config.accountID||"").toString()||null,r=(e.loader_config.agentID||"").toString()||null,f=(e.loader_config.trustKey||"").toString()||null;if(!n||!r)return null;var h=l.generateSpanId(),m=l.generateTraceId(),v=Date.now(),w={spanId:h,traceId:m,timestamp:v};return(t.sameOrigin||c(t)&&p())&&(w.traceContextParentHeader=o(h,m),w.traceContextStateHeader=i(h,v,n,r,f)),(t.sameOrigin&&!u()||!t.sameOrigin&&c(t)&&d())&&(w.newrelicHeader=a(h,m,v,n,r,f)),w}function o(t,e){return"00-"+e+"-"+t+"-01"}function i(t,e,n,r,o){var i=0,a="",s=1,c="",f="";return o+"@nr="+i+"-"+s+"-"+n+"-"+r+"-"+t+"-"+a+"-"+c+"-"+f+"-"+e}function a(t,e,n,r,o,i){var a="btoa"in window&&"function"==typeof window.btoa;if(!a)return null;var s={v:[0,1],d:{ty:"Browser",ac:r,ap:o,id:t,tr:e,ti:n}};return i&&r!==i&&(s.d.tk=i),btoa(JSON.stringify(s))}function s(t){return f()&&c(t)}function c(t){var e=!1,n={};if("init"in NREUM&&"distributed_tracing"in NREUM.init&&(n=NREUM.init.distributed_tracing),t.sameOrigin)e=!0;else if(n.allowed_origins instanceof Array)for(var r=0;r<n.allowed_origins.length;r++){var o=h(n.allowed_origins[r]);if(t.hostname===o.hostname&&t.protocol===o.protocol&&t.port===o.port){e=!0;break}}return e}function f(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&!!NREUM.init.distributed_tracing.enabled}function u(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&!!NREUM.init.distributed_tracing.exclude_newrelic_header}function d(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&NREUM.init.distributed_tracing.cors_use_newrelic_header!==!1}function p(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&!!NREUM.init.distributed_tracing.cors_use_tracecontext_headers}var l=t(26),h=t(17);e.exports={generateTracePayload:r,shouldGenerateTrace:s}},{}],16:[function(t,e,n){function r(t){var e=this.params,n=this.metrics;if(!this.ended){this.ended=!0;for(var r=0;r<p;r++)t.removeEventListener(d[r],this.listener,!1);e.aborted||(n.duration=a.now()-this.startTime,this.loadCaptureCalled||4!==t.readyState?null==e.status&&(e.status=0):i(this,t),n.cbTime=this.cbTime,u.emit("xhr-done",[t],t),s("xhr",[e,n,this.startTime]))}}function o(t,e){var n=c(e),r=t.params;r.host=n.hostname+":"+n.port,r.pathname=n.pathname,t.parsedOrigin=n,t.sameOrigin=n.sameOrigin}function i(t,e){t.params.status=e.status;var n=v(e,t.lastSize);if(n&&(t.metrics.rxSize=n),t.sameOrigin){var r=e.getResponseHeader("X-NewRelic-App-Data");r&&(t.params.cat=r.split(", ").pop())}t.loadCaptureCalled=!0}var a=t("loader");if(a.xhrWrappable&&!a.disabled){var s=t("handle"),c=t(17),f=t(15).generateTracePayload,u=t("ee"),d=["load","error","abort","timeout"],p=d.length,l=t("id"),h=t(22),m=t(21),v=t(18),w=NREUM.o.REQ,g=window.XMLHttpRequest;a.features.xhr=!0,t(14),t(7),u.on("new-xhr",function(t){var e=this;e.totalCbs=0,e.called=0,e.cbTime=0,e.end=r,e.ended=!1,e.xhrGuids={},e.lastSize=null,e.loadCaptureCalled=!1,e.params=this.params||{},e.metrics=this.metrics||{},t.addEventListener("load",function(n){i(e,t)},!1),h&&(h>34||h<10)||window.opera||t.addEventListener("progress",function(t){e.lastSize=t.loaded},!1)}),u.on("open-xhr-start",function(t){this.params={method:t[0]},o(this,t[1]),this.metrics={}}),u.on("open-xhr-end",function(t,e){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&e.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid);var n=f(this.parsedOrigin);if(n){var r=!1;n.newrelicHeader&&(e.setRequestHeader("newrelic",n.newrelicHeader),r=!0),n.traceContextParentHeader&&(e.setRequestHeader("traceparent",n.traceContextParentHeader),n.traceContextStateHeader&&e.setRequestHeader("tracestate",n.traceContextStateHeader),r=!0),r&&(this.dt=n)}}),u.on("send-xhr-start",function(t,e){var n=this.metrics,r=t[0],o=this;if(n&&r){var i=m(r);i&&(n.txSize=i)}this.startTime=a.now(),this.listener=function(t){try{"abort"!==t.type||o.loadCaptureCalled||(o.params.aborted=!0),("load"!==t.type||o.called===o.totalCbs&&(o.onloadCalled||"function"!=typeof e.onload))&&o.end(e)}catch(n){try{u.emit("internal-error",[n])}catch(r){}}};for(var s=0;s<p;s++)e.addEventListener(d[s],this.listener,!1)}),u.on("xhr-cb-time",function(t,e,n){this.cbTime+=t,e?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof n.onload||this.end(n)}),u.on("xhr-load-added",function(t,e){var n=""+l(t)+!!e;this.xhrGuids&&!this.xhrGuids[n]&&(this.xhrGuids[n]=!0,this.totalCbs+=1)}),u.on("xhr-load-removed",function(t,e){var n=""+l(t)+!!e;this.xhrGuids&&this.xhrGuids[n]&&(delete this.xhrGuids[n],this.totalCbs-=1)}),u.on("addEventListener-end",function(t,e){e instanceof g&&"load"===t[0]&&u.emit("xhr-load-added",[t[1],t[2]],e)}),u.on("removeEventListener-end",function(t,e){e instanceof g&&"load"===t[0]&&u.emit("xhr-load-removed",[t[1],t[2]],e)}),u.on("fn-start",function(t,e,n){e instanceof g&&("onload"===n&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=a.now()))}),u.on("fn-end",function(t,e){this.xhrCbStart&&u.emit("xhr-cb-time",[a.now()-this.xhrCbStart,this.onload,e],e)}),u.on("fetch-before-start",function(t){function e(t,e){var n=!1;return e.newrelicHeader&&(t.set("newrelic",e.newrelicHeader),n=!0),e.traceContextParentHeader&&(t.set("traceparent",e.traceContextParentHeader),e.traceContextStateHeader&&t.set("tracestate",e.traceContextStateHeader),n=!0),n}var n,r=t[1]||{};"string"==typeof t[0]?n=t[0]:t[0]&&t[0].url?n=t[0].url:window.URL&&t[0]&&t[0]instanceof URL&&(n=t[0].href),n&&(this.parsedOrigin=c(n),this.sameOrigin=this.parsedOrigin.sameOrigin);var o=f(this.parsedOrigin);if(o&&(o.newrelicHeader||o.traceContextParentHeader))if("string"==typeof t[0]||window.URL&&t[0]&&t[0]instanceof URL){var i={};for(var a in r)i[a]=r[a];i.headers=new Headers(r.headers||{}),e(i.headers,o)&&(this.dt=o),t.length>1?t[1]=i:t.push(i)}else t[0]&&t[0].headers&&e(t[0].headers,o)&&(this.dt=o)}),u.on("fetch-start",function(t,e){this.params={},this.metrics={},this.startTime=a.now(),t.length>=1&&(this.target=t[0]),t.length>=2&&(this.opts=t[1]);var n,r=this.opts||{},i=this.target;"string"==typeof i?n=i:"object"==typeof i&&i instanceof w?n=i.url:window.URL&&"object"==typeof i&&i instanceof URL&&(n=i.href),o(this,n);var s=(""+(i&&i instanceof w&&i.method||r.method||"GET")).toUpperCase();this.params.method=s,this.txSize=m(r.body)||0}),u.on("fetch-done",function(t,e){this.params||(this.params={}),this.params.status=e?e.status:0;var n;"string"==typeof this.rxSize&&this.rxSize.length>0&&(n=+this.rxSize);var r={txSize:this.txSize,rxSize:n,duration:a.now()-this.startTime};s("xhr",[this.params,r,this.startTime])})}},{}],17:[function(t,e,n){var r={};e.exports=function(t){if(t in r)return r[t];var e=document.createElement("a"),n=window.location,o={};e.href=t,o.port=e.port;var i=e.href.split("://");!o.port&&i[1]&&(o.port=i[1].split("/")[0].split("@").pop().split(":")[1]),o.port&&"0"!==o.port||(o.port="https"===i[0]?"443":"80"),o.hostname=e.hostname||n.hostname,o.pathname=e.pathname,o.protocol=i[0],"/"!==o.pathname.charAt(0)&&(o.pathname="/"+o.pathname);var a=!e.protocol||":"===e.protocol||e.protocol===n.protocol,s=e.hostname===document.domain&&e.port===n.port;return o.sameOrigin=a&&(!e.hostname||s),"/"===o.pathname&&(r[t]=o),o}},{}],18:[function(t,e,n){function r(t,e){var n=t.responseType;return"json"===n&&null!==e?e:"arraybuffer"===n||"blob"===n||"json"===n?o(t.response):"text"===n||""===n||void 0===n?o(t.responseText):void 0}var o=t(21);e.exports=r},{}],19:[function(t,e,n){function r(){}function o(t,e,n){return function(){return i(t,[f.now()].concat(s(arguments)),e?null:this,n),e?void 0:this}}var i=t("handle"),a=t(29),s=t(30),c=t("ee").get("tracer"),f=t("loader"),u=NREUM;"undefined"==typeof window.newrelic&&(newrelic=u);var d=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],p="api-",l=p+"ixn-";a(d,function(t,e){u[e]=o(p+e,!0,"api")}),u.addPageAction=o(p+"addPageAction",!0),u.setCurrentRouteName=o(p+"routeName",!0),e.exports=newrelic,u.interaction=function(){return(new r).get()};var h=r.prototype={createTracer:function(t,e){var n={},r=this,o="function"==typeof e;return i(l+"tracer",[f.now(),t,n],r),function(){if(c.emit((o?"":"no-")+"fn-start",[f.now(),r,o],n),o)try{return e.apply(this,arguments)}catch(t){throw c.emit("fn-err",[arguments,this,t],n),t}finally{c.emit("fn-end",[f.now()],n)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,e){h[e]=o(l+e)}),newrelic.noticeError=function(t,e){"string"==typeof t&&(t=new Error(t)),i("err",[t,f.now(),!1,e])}},{}],20:[function(t,e,n){function r(t){if(NREUM.init){for(var e=NREUM.init,n=t.split("."),r=0;r<n.length-1;r++)if(e=e[n[r]],"object"!=typeof e)return;return e=e[n[n.length-1]]}}e.exports={getConfiguration:r}},{}],21:[function(t,e,n){e.exports=function(t){if("string"==typeof t&&t.length)return t.length;if("object"==typeof t){if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if(!("undefined"!=typeof FormData&&t instanceof FormData))try{return JSON.stringify(t).length}catch(e){return}}}},{}],22:[function(t,e,n){var r=0,o=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);o&&(r=+o[1]),e.exports=r},{}],23:[function(t,e,n){function r(){return s.exists&&performance.now?Math.round(performance.now()):(i=Math.max((new Date).getTime(),i))-a}function o(){return i}var i=(new Date).getTime(),a=i,s=t(31);e.exports=r,e.exports.offset=a,e.exports.getLastTimestamp=o},{}],24:[function(t,e,n){function r(t){return!(!t||!t.protocol||"file:"===t.protocol)}e.exports=r},{}],25:[function(t,e,n){function r(t,e){var n=t.getEntries();n.forEach(function(t){"first-paint"===t.name?d("timing",["fp",Math.floor(t.startTime)]):"first-contentful-paint"===t.name&&d("timing",["fcp",Math.floor(t.startTime)])})}function o(t,e){var n=t.getEntries();n.length>0&&d("lcp",[n[n.length-1]])}function i(t){t.getEntries().forEach(function(t){t.hadRecentInput||d("cls",[t])})}function a(t){if(t instanceof h&&!v){var e=Math.round(t.timeStamp),n={type:t.type};e<=p.now()?n.fid=p.now()-e:e>p.offset&&e<=Date.now()?(e-=p.offset,n.fid=p.now()-e):e=p.now(),v=!0,d("timing",["fi",e,n])}}function s(t){"hidden"===t&&d("pageHide",[p.now()])}if(!("init"in NREUM&&"page_view_timing"in NREUM.init&&"enabled"in NREUM.init.page_view_timing&&NREUM.init.page_view_timing.enabled===!1)){var c,f,u,d=t("handle"),p=t("loader"),l=t(28),h=NREUM.o.EV;if("PerformanceObserver"in window&&"function"==typeof window.PerformanceObserver){c=new PerformanceObserver(r);try{c.observe({entryTypes:["paint"]})}catch(m){}f=new PerformanceObserver(o);try{f.observe({entryTypes:["largest-contentful-paint"]})}catch(m){}u=new PerformanceObserver(i);try{u.observe({type:"layout-shift",buffered:!0})}catch(m){}}if("addEventListener"in document){var v=!1,w=["click","keydown","mousedown","pointerdown","touchstart"];w.forEach(function(t){document.addEventListener(t,a,!1)})}l(s)}},{}],26:[function(t,e,n){function r(){function t(){return e?15&e[n++]:16*Math.random()|0}var e=null,n=0,r=window.crypto||window.msCrypto;r&&r.getRandomValues&&(e=r.getRandomValues(new Uint8Array(31)));for(var o,i="xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx",a="",s=0;s<i.length;s++)o=i[s],"x"===o?a+=t().toString(16):"y"===o?(o=3&t()|8,a+=o.toString(16)):a+=o;return a}function o(){return a(16)}function i(){return a(32)}function a(t){function e(){return n?15&n[r++]:16*Math.random()|0}var n=null,r=0,o=window.crypto||window.msCrypto;o&&o.getRandomValues&&Uint8Array&&(n=o.getRandomValues(new Uint8Array(31)));for(var i=[],a=0;a<t;a++)i.push(e().toString(16));return i.join("")}e.exports={generateUuid:r,generateSpanId:o,generateTraceId:i}},{}],27:[function(t,e,n){function r(t,e){if(!o)return!1;if(t!==o)return!1;if(!e)return!0;if(!i)return!1;for(var n=i.split("."),r=e.split("."),a=0;a<r.length;a++)if(r[a]!==n[a])return!1;return!0}var o=null,i=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var s=navigator.userAgent,c=s.match(a);c&&s.indexOf("Chrome")===-1&&s.indexOf("Chromium")===-1&&(o="Safari",i=c[1])}e.exports={agent:o,version:i,match:r}},{}],28:[function(t,e,n){function r(t){function e(){t(a&&document[a]?document[a]:document[o]?"hidden":"visible")}"addEventListener"in document&&i&&document.addEventListener(i,e,!1)}e.exports=r;var o,i,a;"undefined"!=typeof document.hidden?(o="hidden",i="visibilitychange",a="visibilityState"):"undefined"!=typeof document.msHidden?(o="msHidden",i="msvisibilitychange"):"undefined"!=typeof document.webkitHidden&&(o="webkitHidden",i="webkitvisibilitychange",a="webkitVisibilityState")},{}],29:[function(t,e,n){function r(t,e){var n=[],r="",i=0;for(r in t)o.call(t,r)&&(n[i]=e(r,t[r]),i+=1);return n}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],30:[function(t,e,n){function r(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,o=n-e||0,i=Array(o<0?0:o);++r<o;)i[r]=t[e+r];return i}e.exports=r},{}],31:[function(t,e,n){e.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(t,e,n){function r(){}function o(t){function e(t){return t&&t instanceof r?t:t?f(t,c,a):a()}function n(n,r,o,i,a){if(a!==!1&&(a=!0),!l.aborted||i){t&&a&&t(n,r,o);for(var s=e(o),c=m(n),f=c.length,u=0;u<f;u++)c[u].apply(s,r);var p=d[y[n]];return p&&p.push([x,n,r,s]),s}}function i(t,e){g[t]=m(t).concat(e)}function h(t,e){var n=g[t];if(n)for(var r=0;r<n.length;r++)n[r]===e&&n.splice(r,1)}function m(t){return g[t]||[]}function v(t){return p[t]=p[t]||o(n)}function w(t,e){l.aborted||u(t,function(t,n){e=e||"feature",y[n]=e,e in d||(d[e]=[])})}var g={},y={},x={on:i,addEventListener:i,removeEventListener:h,emit:n,get:v,listeners:m,context:e,buffer:w,abort:s,aborted:!1};return x}function i(t){return f(t,c,a)}function a(){return new r}function s(){(d.api||d.feature)&&(l.aborted=!0,d=l.backlog={})}var c="nr@context",f=t("gos"),u=t(29),d={},p={},l=e.exports=o();e.exports.getOrSetContext=i,l.backlog=d},{}],gos:[function(t,e,n){function r(t,e,n){if(o.call(t,e))return t[e];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return t[e]=r,r}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],handle:[function(t,e,n){function r(t,e,n,r){o.buffer([t],r),o.emit(t,e,n)}var o=t("ee").get("handle");e.exports=r,r.ee=o},{}],id:[function(t,e,n){function r(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:a(t,i,function(){return o++})}var o=1,i="nr@id",a=t("gos");e.exports=r},{}],loader:[function(t,e,n){function r(){if(!S++){var t=O.info=NREUM.info,e=m.getElementsByTagName("script")[0];if(setTimeout(f.abort,3e4),!(t&&t.licenseKey&&t.applicationID&&e))return f.abort();c(E,function(e,n){t[e]||(t[e]=n)});var n=a();s("mark",["onload",n+O.offset],null,"api"),s("timing",["load",n]);var r=m.createElement("script");0===t.agent.indexOf("http://")||0===t.agent.indexOf("https://")?r.src=t.agent:r.src=l+"://"+t.agent,e.parentNode.insertBefore(r,e)}}function o(){"complete"===m.readyState&&i()}function i(){s("mark",["domContent",a()+O.offset],null,"api")}var a=t(23),s=t("handle"),c=t(29),f=t("ee"),u=t(27),d=t(24),p=t(20),l=p.getConfiguration("ssl")===!1?"http":"https",h=window,m=h.document,v="addEventListener",w="attachEvent",g=h.XMLHttpRequest,y=g&&g.prototype,x=!d(h.location);NREUM.o={ST:setTimeout,SI:h.setImmediate,CT:clearTimeout,XHR:g,REQ:h.Request,EV:h.Event,PR:h.Promise,MO:h.MutationObserver};var b=""+location,E={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-spa-1210.min.js"},R=g&&y&&y[v]&&!/CriOS/.test(navigator.userAgent),O=e.exports={offset:a.getLastTimestamp(),now:a,origin:b,features:{},xhrWrappable:R,userAgent:u,disabled:x};if(!x){t(19),t(25),m[v]?(m[v]("DOMContentLoaded",i,!1),h[v]("load",r,!1)):(m[w]("onreadystatechange",o),h[w]("onload",r)),s("mark",["firstbyte",a.getLastTimestamp()],null,"api");var S=0}},{}],"wrap-function":[function(t,e,n){function r(t,e){function n(e,n,r,c,f){function nrWrapper(){var i,a,u,p;try{a=this,i=d(arguments),u="function"==typeof r?r(i,a):r||{}}catch(l){o([l,"",[i,a,c],u],t)}s(n+"start",[i,a,c],u,f);try{return p=e.apply(a,i)}catch(h){throw s(n+"err",[i,a,h],u,f),h}finally{s(n+"end",[i,a,p],u,f)}}return a(e)?e:(n||(n=""),nrWrapper[p]=e,i(e,nrWrapper,t),nrWrapper)}function r(t,e,r,o,i){r||(r="");var s,c,f,u="-"===r.charAt(0);for(f=0;f<e.length;f++)c=e[f],s=t[c],a(s)||(t[c]=n(s,u?c+r:r,o,c,i))}function s(n,r,i,a){if(!h||e){var s=h;h=!0;try{t.emit(n,r,i,e,a)}catch(c){o([c,n,r,i],t)}h=s}}return t||(t=u),n.inPlace=r,n.flag=p,n}function o(t,e){e||(e=u);try{e.emit("internal-error",t)}catch(n){}}function i(t,e,n){if(Object.defineProperty&&Object.keys)try{var r=Object.keys(t);return r.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(i){o([i],n)}for(var a in t)l.call(t,a)&&(e[a]=t[a]);return e}function a(t){return!(t&&t instanceof Function&&t.apply&&!t[p])}function s(t,e){var n=e(t);return n[p]=t,i(t,n,u),n}function c(t,e,n){var r=t[e];t[e]=s(r,n)}function f(){for(var t=arguments.length,e=new Array(t),n=0;n<t;++n)e[n]=arguments[n];return e}var u=t("ee"),d=t(30),p="nr@original",l=Object.prototype.hasOwnProperty,h=!1;e.exports=r,e.exports.wrapFunction=s,e.exports.wrapInPlace=c,e.exports.argsToArray=f},{}]},{},["loader",2,16,5,3,4]);
;NREUM.loader_config={accountID:"3233636",trustKey:"3233636",agentID:"268811962",licenseKey:"NRJS-23b945b24f09db434b3",applicationID:"268811962"}
;NREUM.info={beacon:"bam.eu01.nr-data.net",errorBeacon:"bam.eu01.nr-data.net",licenseKey:"NRJS-23b945b24f09db434b3",applicationID:"268811962",sa:1}
</script>
<meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1'>
<link rel="alternate" href="/pages/en/hotels/address-sky-view/index.php" hreflang="x-default">
<link rel="alternate" hreflang="en" href="/pages/en/hotels/address-sky-view/index.php">
<link rel="alternate" hreflang="ar" href="https://www.addresshotels.com/ar/hotels/address-sky-view/">
<link rel="alternate" hreflang="zh-cn" href="https://www.addresshotels.com/zh-hans/hotels/address-sky-view/">
<link rel="alternate" hreflang="fr-fr" href="https://www.addresshotels.com/fr/hotels/address-sky-view/">
<link rel="alternate" hreflang="de-de" href="https://www.addresshotels.com/de/hotels/address-sky-view/">
<link rel="alternate" hreflang="ru-ru" href="https://www.addresshotels.com/ru/hotels/address-sky-view/">
<link rel="alternate" hreflang="x-default" href="/pages/en/hotels/address-sky-view/index.php">

	<!-- This site is optimized with the Yoast SEO plugin v22.9 - https://yoast.com/wordpress/plugins/seo/ -->
	<title>Address Sky View | Downtown Dubai | Address Hotels + Resorts</title>
	<meta name="description" content="Stay above it all at Address Sky View, a luxury hotel in Downtown Dubai with iconic infinity pool, breathtaking views of Burj Khalifa, direct access to Dubai Mall.">
	<link rel="canonical" href="/pages/en/hotels/address-sky-view/index.php">
	<meta property="og:locale" content="en_US">
	<meta property="og:type" content="article">
	<meta property="og:title" content="Address Sky View | Downtown Dubai | Address Hotels + Resorts">
	<meta property="og:description" content="Stay above it all at Address Sky View, a luxury hotel in Downtown Dubai with iconic infinity pool, breathtaking views of Burj Khalifa, direct access to Dubai Mall.">
	<meta property="og:url" content="https://www.addresshotels.com/en/hotels/address-sky-view/">
	<meta property="og:site_name" content="Address Hotels in Dubai">
	<meta property="article:modified_time" content="2026-01-13T06:55:49+00:00">
	<meta property="og:image" content="https://www-addresshotels-com.azureedge.net/wp-content/uploads/2021/02/Address-SkyView-V1.mp4.jpg">
	<meta property="og:image:width" content="1920">
	<meta property="og:image:height" content="1080">
	<meta property="og:image:type" content="image/jpeg">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:label1" content="Est. reading time">
	<meta name="twitter:data1" content="1 minute">
	<script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebPage","@id":"https://www.addresshotels.com/en/hotels/address-sky-view/","url":"https://www.addresshotels.com/en/hotels/address-sky-view/","name":"Address Sky View | Downtown Dubai | Address Hotels + Resorts","isPartOf":{"@id":"https://www.addresshotels.com/en/#website"},"primaryImageOfPage":{"@id":"https://www.addresshotels.com/en/hotels/address-sky-view/#primaryimage"},"image":{"@id":"https://www.addresshotels.com/en/hotels/address-sky-view/#primaryimage"},"thumbnailUrl":"https://www-addresshotels-com.azureedge.net/wp-content/uploads/2021/02/Address-SkyView-V1.mp4.jpg","datePublished":"2020-10-07T08:47:07+00:00","dateModified":"2026-01-13T06:55:49+00:00","description":"Stay above it all at Address Sky View, a luxury hotel in Downtown Dubai with iconic infinity pool, breathtaking views of Burj Khalifa, direct access to Dubai Mall.","inLanguage":"en","potentialAction":[{"@type":"ReadAction","target":["https://www.addresshotels.com/en/hotels/address-sky-view/"]}]},{"@type":"ImageObject","inLanguage":"en","@id":"https://www.addresshotels.com/en/hotels/address-sky-view/#primaryimage","url":"https://www-addresshotels-com.azureedge.net/wp-content/uploads/2021/02/Address-SkyView-V1.mp4.jpg","contentUrl":"https://www-addresshotels-com.azureedge.net/wp-content/uploads/2021/02/Address-SkyView-V1.mp4.jpg","width":1920,"height":1080},{"@type":"WebSite","@id":"https://www.addresshotels.com/en/#website","url":"https://www.addresshotels.com/en/","name":"Address Hotels in Dubai","description":"Book a Hotel - Address Hotels + Resorts","potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https://www.addresshotels.com/en/?s={search_term_string}"},"query-input":"required name=search_term_string"}],"inLanguage":"en"}]}</script>
	<!-- / Yoast SEO plugin. -->


<link rel='dns-prefetch' href='//use.typekit.net'>
<link rel='dns-prefetch' href='//www-addresshotels-com.azureedge.net'>
<link href='https://www-addresshotels-com.azureedge.net' rel='preconnect'>
<link rel='stylesheet' id='sbi_styles-css' href='/dependencies/css/wp-content/plugins/instagram-feed/css/sbi-styles.min.css?ver=6.9.1' type='text/css' media='all'>
<style id='wp-emoji-styles-inline-css' type='text/css'>

	img.wp-smiley, img.emoji {
		display: inline !important;
		border: none !important;
		box-shadow: none !important;
		height: 1em !important;
		width: 1em !important;
		margin: 0 0.07em !important;
		vertical-align: -0.1em !important;
		background: none !important;
		padding: 0 !important;
	}
</style>
<link rel='stylesheet' id='wp-block-library-css' href='/dependencies/css/wp-includes/css/dist/block-library/style.min.css?ver=6.6.4' type='text/css' media='all'>
<style id='gutenberg-blocks-homepage-banner-style-inline-css' type='text/css'>
/*!**************************************************************************************************************************************************************************************************************************************************************!*\
  !*** css ./node_modules/css-loader/dist/cjs.js??ruleSet[1].rules[4].use[1]!./node_modules/postcss-loader/dist/cjs.js??ruleSet[1].rules[4].use[2]!./node_modules/sass-loader/dist/cjs.js??ruleSet[1].rules[4].use[3]!./src/blocks/homepage-banner/index.scss ***!
  \**************************************************************************************************************************************************************************************************************************************************************/
.image-slider-container {
  height: 100vh;
}

.slider-block .carousel-indicators .active {
  background-color: white;
  /* Active indicator color */
}

#carousalHeaders .carousel-caption {
  top: auto;
  bottom: 20%;
}

.image-slider {
  height: 100%;
  -o-object-fit: cover;
     object-fit: cover;
}

@media screen and (max-width: 400px) {
  .header-banner-img-content-box .slider-header {
    font-size: 32px !important;
    line-height: 36px !important;
    letter-spacing: -1px !important;
  }
}
@media (min-width: 1025px) and (max-width: 1440px) and (max-height: 850px) {
  .header-banner-img-content-box .slider-header {
    font-size: 56px !important;
    line-height: 60px !important;
    letter-spacing: -1px !important;
  }
}
@media screen and (max-width: 600px) {
  .image-slider-container {
    height: 100vh;
  }
  .slider-description {
    font-size: 16px !important;
  }
  .slider-header {
    font-size: 48px !important;
    line-height: 48px !important;
  }
  .slider-block #carousalHeaders .carousel-caption {
    width: 96%;
  }
}
.carousel-caption {
  left: 0 !important;
  right: 0 !important;
}

@media screen and (min-width: 991px) {
  #carousalHeaders .carousel-caption {
    bottom: 30%;
  }
}
@media screen and (min-width: 1200px) {
  #carousalHeaders .carousel-caption {
    max-width: 1200px;
  }
}
@media screen and (min-width: 1250px) {
  #carousalHeaders .carousel-caption {
    padding-left: 0px;
  }
}
@media (max-width: 991px) {
  .global-home-link-dropdown-box .dropdown-menu.show {
    transform: translateX(20px);
  }
}
@media (max-width: 1198px) and (min-width: 992px) {
  .global-home-link-dropdown-box .dropdown-menu.show {
    transform: translateX(25px);
    padding: 44px 25px 35px !important;
  }
  .global-home-link-dropdown-inner {
    max-width: 1000px !important;
  }
}
@media (max-width: 1199px) and (min-width: 601px) {
  .slider-block #carousalHeaders .carousel-caption {
    width: 97%;
    max-width: unset;
  }
}
.image-slider-container {
  position: relative;
}

.image-slider-container::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image: radial-gradient(127.1% 107.76% at 47.48% 100%, rgba(42, 60, 68, 0.00008) 0%, rgba(42, 60, 68, 0.00008) 66.59%, rgba(42, 60, 68, 0.48) 99.98%), linear-gradient(135deg, rgba(0, 0, 0, 0.7) 2.11%, rgba(37, 40, 45, 0.00007) 89.75%), linear-gradient(243.98deg, rgba(0, 0, 0, 0.00005) 19.63%, rgba(37, 40, 45, 0.5) 96.46%);
  z-index: 1;
}

.carousel-caption {
  position: relative;
  z-index: 2;
  /* To ensure the text is above the gradient */
}

.slider-block .carousel-indicators {
  padding: 5px 20px;
}

@media (max-width: 1199px) {
  .slider-block .carousel-indicators {
    bottom: 12% !important;
  }
}
.slider-block .carousel-indicators {
  position: absolute;
  display: flex;
  justify-content: center;
  margin-left: auto;
  margin-right: auto;
  list-style: none;
  width: -moz-fit-content;
  width: fit-content;
  left: 0;
  right: 0;
}

:lang(ar) .slider-block .carousel-item-next,
:lang(ar) .slider-block .carousel-item-prev,
:lang(ar) .slider-block .carousel-item.active {
  display: flex !important;
}

/*# sourceMappingURL=index.css.map*/
</style>
<style id='gutenberg-blocks-homepage-about-us-style-inline-css' type='text/css'>
.homepage-about-us-section{background-image:linear-gradient(180deg,#fff 0,hsla(0,0%,100%,0) 40%,hsla(0,0%,100%,0) 60%,#fff),url(../../../wp-content/uploads/2021/07/Address-Artwork-123x123-1-1.png);background-repeat:repeat;height:100%}.homepage-about-us{max-width:954px!important;padding-bottom:80px!important;padding-top:20px!important}@media screen and (max-width:1025px){.homepage-about-us{padding:30px 20px 64px!important}.section-divider{padding-bottom:64px!important}}.section-divider{border-top:1px solid #b8bbbf;margin:0 auto;padding-bottom:80px;width:120px}.message-container{opacity:0;transition:opacity .3s ease-in-out}.make-full-width{opacity:1}@media screen and (max-width:375px){.changes-375{font-size:46px!important;line-break:anywhere}}@media(min-width:375px)and (max-width:600px){.font-56-mobile1{font-size:56px!important;line-height:66px!important}}

</style>
<style id='gutenberg-blocks-homepage-luxury-hotel-style-inline-css' type='text/css'>
html[dir=rtl] .individual-homepage-experience-section .overlap-btn-new-block,html[dir=rtl] .individual-homepage-experience-section .overlap-text-experience{text-align:right!important}.individual-homepage-experience-section dir[dir=rtl]{text-align:right}html[dir=rtl] .individual-homepage-experience-section .overlap-text-experience{text-align:right!important}.wp-block-create-block-homepage-luxury-hotels{background-color:#21759b;color:#fff;padding:2px}h2.display-1-72{margin-bottom:8px!important}.individual-homepage-hotel-highlights-section-luxury-hotel{padding-top:40px!important}.individual-homepage-hotel-highlights-section-luxury-hotel .img-shadow{box-shadow:0 60px 70px -50px rgba(37,40,45,.5)}.individual-homepage-hotel-highlights-section-luxury-hotel .container{padding:40px 100px!important}.luxury-hotel-section-title{margin-top:24px}@media screen and (max-width:992px){.individual-homepage-hotel-highlights-section-luxury-hotel .container{padding:40px 20px!important}}button.flickity-button.flickity-prev-next-button.next,button.flickity-button.flickity-prev-next-button.previous{visibility:hidden}.individual-homepage-hotel-highlights-section-luxury-hotel.hotel-landing-top-attractions{padding-top:25px}.individual-homepage-hotel-highlights-section-luxury-hotel.hotel-landing-top-attractions .container{padding:40px 90px 120px}.individual-homepage-hotel-highlights-section-luxury-hotel .other-cities-container{padding:40px 80px 60px}.individual-homepage-hotel-highlights-section-luxury-hotel ol.flickity-page-dots{display:none}.cta-btn{align-items:center;display:flex;flex-direction:column}.slider-img-luxury-section{height:520px;margin-left:16px;margin-right:16px;padding-bottom:100px!important;width:380px}#dine-carousel .flickity-slider>div:first-child{padding-left:100px;width:460px}#dine-carousel .flickity-slider>div:last-child{padding-right:80px;width:460px}#dine-carousel .slider-img-explore-accommodations:last-child{padding-right:80px;width:904px}#dine-carousel .slider-img-explore-accommodations:first-child{padding-left:80px;width:904px}#dine-carousel .flickity-slider>div .img-content,#dine-carousel .flickity-slider>div .img-shadow,#dine-carousel .flickity-slider>div .img-shadow img{height:100%;width:100%}.individual-homepage-hotel-highlights-section-luxury-hotel .img-content:hover .overlap-content .overlap-text-luxury-hotel h3{overflow:hidden!important;text-overflow:ellipsis!important;white-space:nowrap!important;width:240px!important}.individual-homepage-hotel-highlights-section-luxury-hotel .img-content .overlap-content .overlap-text-luxury-hotel h3{overflow:hidden!important;text-overflow:ellipsis!important;white-space:nowrap!important;width:340px!important}.individual-homepage-hotel-highlights-section-luxury-hotel .img-content:hover .overlap-content .overlap-text-luxury-hotel span{display:block!important;overflow:hidden!important;text-overflow:ellipsis!important;white-space:nowrap!important;width:240px!important}.individual-homepage-hotel-highlights-section-luxury-hotel .img-content .overlap-content .overlap-text-luxury-hotel span{display:block;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;width:340px}.img-content:hover .overlap-btn-new-block{opacity:1!important;transition:.5s ease!important}.img-content .overlap-btn-new-block{background-color:transparent!important;opacity:0!important}@media screen and (max-width:992px){.individual-homepage-hotel-highlights-section-luxury-hotel .container,.individual-homepage-hotel-highlights-section-luxury-hotel.hotel-landing-top-attractions .container{padding:40px 10px}.individual-homepage-hotel-highlights-section-luxury-hotel .overlap-content .overlap-text-luxury-hotel h3,.individual-homepage-hotel-highlights-section-luxury-hotel .overlap-content .overlap-text-luxury-hotel span{overflow:hidden;text-overflow:ellipsis;white-space:nowrap;width:220px}.individual-homepage-hotel-highlights-section-luxury-hotel .overlap-content{align-items:flex-end}}.bottom-section{padding-bottom:40px}@media(max-width:600px){.bottom-section{padding-bottom:24px}#dine-carousel .flickity-slider>div:first-child{padding-left:20px!important;width:300px}.individual-homepage-hotel-highlights-section-luxury-hotel .other-cities-container{padding:40px 10px}.slider-img-luxury-section{height:354px!important;margin-left:10px;margin-right:10px;padding-bottom:52px!important;width:305px!important}#dine-carousel .flickity-slider>div:last-child{padding-right:20px;width:300px}.individual-homepage-hotel-highlights-section-luxury-hotel .overlap-content{display:block;padding:20px}.individual-homepage-hotel-highlights-section-luxury-hotel .overlap-content .overlap-btn{margin-top:10px}.individual-homepage-hotel-highlights-section-luxury-hotel .img-content .overlap-content .overlap-text-luxury-hotel span{width:240px!important}.eyebrow-dark-luxury-hotel{letter-spacing:1px!important;line-height:16.21px!important}.luxury-hotel-section-title{margin-top:20px}.individual-homepage-hotel-highlights-section-luxury-hotel{padding-top:24px!important}}.individual-homepage-hotel-highlights-section-luxury-hotel .hotel-name{font-family:FreightSansProBook-Regular;font-size:32px!important;letter-spacing:0;line-height:28px}.individual-homepage-hotel-highlights-section-luxury-hotel p.body-2 a{font-family:FreightSansProBook;font-size:22px;font-weight:300;letter-spacing:0;line-height:34px}

</style>
<style id='gutenberg-blocks-homepage-video-section-style-inline-css' type='text/css'>
.individual-homepage-explore-videoCardss{background-image:linear-gradient(180deg,#fff 0,hsla(0,0%,100%,0) 40%,hsla(0,0%,100%,0) 60%,#fff),url(../../../wp-content/uploads/2021/07/Address-Artwork-123x123-1-1.png);background-repeat:repeat;height:100%}.individual-homepage-explore-videoCardss .flickity-viewport{height:620px!important}.individual-homepage-explore-videoCardss .video-section-img-box{box-shadow:0 60px 70px -30px rgba(37,40,45,.5);height:520px}.individual-homepage-explore-videoCardss .video-poster{height:100%;left:0;-o-object-fit:cover;object-fit:cover;pointer-events:none;position:absolute;top:0;width:100%}@media(min-width:760px)and (max-width:1000px){.individual-homepage-explore-videoCardss .img-text-box{margin-inline-end:30px}}.individual-homepage-explore-videoCardss .video-card-section-title{margin-top:24px}.individual-homepage-explore-videoCardss #videos-carousel{margin-top:40px}.individual-homepage-explore-videoCardss .flickity-slider>div:last-child{padding-right:60px}@media screen and (max-width:767px){.individual-homepage-explore-videoCardss .slider-img-explore-videoCardss{padding-left:20px;width:305px!important}.individual-homepage-explore-videoCardss .flickity-slider>div:last-child{padding-right:20px}.individual-homepage-explore-videoCardss .video-card-top-section{padding-left:20px!important;padding-right:20px!important}.eyebrow-dark-mobile-video-section{font-size:14px!important}.individual-homepage-explore-videoCardss .video-card-section-title{margin-bottom:0!important;margin-top:20px}.individual-homepage-explore-videoCardss .flickity-viewport{height:465px!important}.individual-homepage-explore-videoCardss .video-section-img-box{height:372px}}@media screen and (min-width:1000px){.slider-img-explore-videoCardss{padding-left:60px;width:884px;width:824px}.individual-homepage-explore-videoCardss .img-content{width:824px}}

</style>
<link rel='stylesheet' id='gutenberg-blocks-homepage-experience-section-style-css' href='/dependencies/css/wp-content/themes/emaar-projects/gutenberg-blocks/build/blocks/homepage-experience-section/index.css?ver=0.1.0' type='text/css' media='all'>
<style id='gutenberg-blocks-homepage-blog-section-style-inline-css' type='text/css'>
.homepage-blog-section{background:#f2f2f2;padding:100px 80px!important}.homepage-blog-section .show-on-scroll{max-width:1364px}.homepage-blog-section .blog-cards{box-shadow:0 4px 6px 0 rgba(131,134,163,.122);height:100%;padding:20px!important}.homepage-blog-section .blog-cards:hover{box-shadow:0 20px 44px 0 rgba(131,134,163,.247)}.homepage-blog-section .blogs-section-description{max-width:954px}.card-body .icon-date{gap:8px;margin-bottom:7px}.homepage-blog-section .blog-card-section{margin-top:40px}.blog-card-section .clock-icon{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 512 512%27%3E%3Cpath stroke=%27%23000%27 d=%27M464 256a208 208 0 1 1-416 0 208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0 256 256 0 1 0-512 0zm232-136v136c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120a24 24 0 1 0-48 0z%27/%3E%3C/svg%3E");display:inline-block;height:17px;opacity:.7;width:17px}.card-img-top{aspect-ratio:1.6!important;-o-object-fit:cover!important;object-fit:cover!important}.card-text{display:-webkit-box;width:100%;-webkit-line-clamp:4;-webkit-box-orient:vertical;margin:0;overflow:hidden;padding:0;text-overflow:ellipsis}.view-all-btn{border-color:#25282d!important;font-family:FreightSansProSemibold;font-size:17px!important;font-weight:400!important;letter-spacing:.5px;margin-top:40px;padding-bottom:12px!important;padding-top:12px!important;width:366px}.view-all-btn:hover{background-color:transparent!important;border-color:#25282d!important;color:#25282d!important}@media screen and (max-width:905px){.view-all-btn{margin-top:20px;width:320px;width:100%}.blog-card:first-child{margin-top:0!important}.blog-cards{margin-top:20px!important}.homepage-blog-section{padding-left:20px!important;padding-right:20px!important}.homepage-blog-section .blog-cards{height:auto}}.no-underline,.no-underline:hover{text-decoration:none}@media screen and (min-width:1350px){.homepage-blog-section .blog-cards{height:534px;width:380px}.homepage-blog-section .card-img-top{aspect-ratio:1.63}}@media screen and (max-width:750px){.homepage-blog-section .card-img-top{aspect-ratio:1.34}}.webclamp-card-title{display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden}.line-spacing-38{line-height:38px!important;padding-bottom:5px}

</style>
<style id='gutenberg-blocks-homepage-ubyemaar-section-style-inline-css' type='text/css'>
.spa-and-wellness-section{background:#f7f8f6;margin-bottom:unset!important;padding:100px!important}.download-bbe-app-block .eyebrow-dark{margin-top:40px}.download-bbe-app-block .logo{height:64px;-o-object-fit:contain;object-fit:contain;width:64px}.download-bbe-app-block .img-shadow{margin:0 auto;max-width:409px}.download-bbe-app-block .mobile-image-container{box-shadow:0 60px 70px -30px rgba(37,40,45,.5);margin-bottom:60px;margin-top:25px}.download-bbe-app-block .inline-logo-container{gap:16px;margin-top:32px}.download-bbe-app-block .inline-logo{height:40px;-o-object-fit:contain;object-fit:contain;width:130px}@media(max-width:600px){.app-logo{height:42px;width:136px}.inline-logo-container{display:flex;flex-wrap:wrap;gap:16px!important;justify-content:center}}@media screen and (max-width:992px){.download-bbe-app-block{padding:100px 20px}.ubyemaar-title-mobile{font-size:48px!important}.download-bbe-app-block .inline-logo-container{margin-top:24px}.download-bbe-app-block .inline-logo{margin-top:16px;width:150px}.spa-and-wellness-section{height:auto!important;margin-bottom:52px!important;padding:40px 20px!important}}.download-bbe-aspect-ratio{aspect-ratio:.903}@media screen and (min-width:992px){.download-bbe-aspect-ratio{height:453px!important}}.download-bbe-app-block .mobile-image-container{height:331px;margin:30px auto;width:276px}

</style>
<link rel='stylesheet' id='gutenberg-blocks-all-hotel-list-style-css' href='/dependencies/css/wp-content/themes/emaar-projects/gutenberg-blocks/build/blocks/all-hotel-list/index.css?ver=0.1.0' type='text/css' media='all'>
<style id='create-block-global-event-details-style-inline-css' type='text/css'>
/*!*******************************************************************************************************************************************************************************************************************************************************************!*\
  !*** css ./node_modules/css-loader/dist/cjs.js??ruleSet[1].rules[4].use[1]!./node_modules/postcss-loader/dist/cjs.js??ruleSet[1].rules[4].use[2]!./node_modules/sass-loader/dist/cjs.js??ruleSet[1].rules[4].use[3]!./src/blocks/global-event-details/style.scss ***!
  \*******************************************************************************************************************************************************************************************************************************************************************/
/**
 * The following styles get applied both on the front of your site
 * and in the editor.
 *
 * Replace them with your own styles or remove the file completely.
 */
.event-details-box {
  padding: 80px;
}

.img-event {
  -o-object-fit: cover;
  object-fit: cover;
  overflow: hidden;
  height: 290px;
  width: 100%;
  box-shadow: 0 60px 70px -30px rgba(37, 40, 45, 0.3);
}

.address-content-box {
  padding: 0 47px;
}

.bullet-features {
  list-style: none;
  padding: 0;
}

/* .bullet-features li:not(.location-icons)::before {
    content: url(https://www-addresshotels-com.azureedge.net/wp-content/themes/emaar-projects/gutenberg-blocks/build/blocks/global-event-details//wp-content/uploads/2021/07/generic-icon.svg);
    vertical-align: middle;
    margin: 10px;
} */
.bullet-features li.location-icons a {
  font-size: 17px;
  color: #25282d !important;
}

.bullet-features li.location-icons a i {
  margin: 0 10px;
}

/*Media Queries*/
@media (max-width: 991px) {
  .event-details-box .stay-overlay {
    opacity: 1;
  }
}
@media (max-width: 600px) {
  .event-details-box {
    padding: 40px 20px;
  }
  .address-content-box {
    padding: 0;
  }
  .event-details-box .stay-overlay .primary-btn,
  .event-details-box .stay-overlay .secondary-btn {
    width: 90%;
  }
}

/*# sourceMappingURL=style-index.css.map*/
</style>
<style id='global-styles-inline-css' type='text/css'>
:root{--wp--preset--aspect-ratio--square: 1;--wp--preset--aspect-ratio--4-3: 4/3;--wp--preset--aspect-ratio--3-4: 3/4;--wp--preset--aspect-ratio--3-2: 3/2;--wp--preset--aspect-ratio--2-3: 2/3;--wp--preset--aspect-ratio--16-9: 16/9;--wp--preset--aspect-ratio--9-16: 9/16;--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flex{display: flex;}.is-layout-flex{flex-wrap: wrap;align-items: center;}.is-layout-flex > :is(*, div){margin: 0;}body .is-layout-grid{display: grid;}.is-layout-grid > :is(*, div){margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
:root :where(.wp-block-pullquote){font-size: 1.5em;line-height: 1.6;}
</style>
<link rel='stylesheet' id='wpml-blocks-css' href='/dependencies/css/wp-content/plugins/sitepress-multilingual-cms/dist/css/blocks/styles.css?ver=4.6.13' type='text/css' media='all'>
<link rel='stylesheet' id='wpml-legacy-dropdown-click-0-css' href='/dependencies/css/wp-content/plugins/sitepress-multilingual-cms/templates/language-switchers/legacy-dropdown-click/style.min.css?ver=1' type='text/css' media='all'>
<style id='wpml-legacy-dropdown-click-0-inline-css' type='text/css'>
.wpml-ls-statics-shortcode_actions .wpml-ls-current-language > a {color:#ffffff;}
</style>
<link rel='stylesheet' id='bootscore-style-css' href='/dependencies/css/wp-content/themes/emaar-projects/style.css?ver=6.6.4' type='text/css' media='all'>
<link rel='stylesheet' id='all-css' href='/dependencies/css/wp-content/themes/emaar-projects/css/all.css?ver=6.6.4' type='text/css' media='all'>
<link rel='stylesheet' id='bootstrap-css' href='/dependencies/css/wp-content/themes/emaar-projects/css/lib/bootstrap.min.css?ver=6.6.4' type='text/css' media='all'>
<link rel='stylesheet' id='normalize-css' href='/dependencies/css/wp-content/themes/emaar-projects/css/normalize.css?ver=6.6.4' type='text/css' media='all'>
<link rel='stylesheet' id='fontawesome-css' href='/dependencies/css/wp-content/themes/emaar-projects/css/lib/fontawesome.min.css?ver=1707315139' type='text/css' media='all'>
<link rel='stylesheet' id='bootstrap-select-css' href='/dependencies/css/wp-content/themes/emaar-projects/vendor/css/bootstrap-select.min.css?ver=1.13.0' type='text/css' media='all'>
<link rel='stylesheet' id='typography-art-board-css' href='/dependencies/css/wp-content/themes/emaar-projects/css/dynamic-css/dynamic-typography.css?ver=6.6.4' type='text/css' media='all'>
<link rel='stylesheet' id='dynamic-custom-colors-css' href='/dependencies/css/wp-content/themes/emaar-projects/css/dynamic-css/dynamic-custom-colors.css?ver=6.6.4' type='text/css' media='all'>
<link rel='stylesheet' id='dynamic-font-faces-css' href='/dependencies/css/wp-content/themes/emaar-projects/css/dynamic-css/dynamic-font-faces.css?ver=6.6.4' type='text/css' media='all'>
<link rel='stylesheet' id='global_styles-css' href='/dependencies/css/wp-content/themes/emaar-projects/css/lib/global_styles.css?ver=1716547034' type='text/css' media='all'>
<link rel='stylesheet' id='navbar-css-css' href='/dependencies/css/wp-content/themes/emaar-projects/template-parts/navbars/css/navbar.css?ver=1766397437' type='text/css' media='all'>
<link rel='stylesheet' id='navbar-individual-hotels-css-css' href='/dependencies/css/wp-content/themes/emaar-projects/template-parts/navbars/css/navbar-individual-hotels.css?ver=1733217111' type='text/css' media='all'>
<link rel='stylesheet' id='global-dynamic-blocks-common-css' href='/dependencies/css/wp-content/themes/emaar-projects/template-parts/dynamic-blocks/assets/css/global_dynamic_blocks_common.css?ver=1737511377' type='text/css' media='all'>
<style id='rocket-lazyload-inline-css' type='text/css'>
.rll-youtube-player{position:relative;padding-bottom:56.23%;height:0;overflow:hidden;max-width:100%;}.rll-youtube-player:focus-within{outline: 2px solid currentColor;outline-offset: 5px;}.rll-youtube-player iframe{position:absolute;top:0;left:0;width:100%;height:100%;z-index:100;background:0 0}.rll-youtube-player img{bottom:0;display:block;left:0;margin:auto;max-width:100%;width:100%;position:absolute;right:0;top:0;border:none;height:auto;-webkit-transition:.4s all;-moz-transition:.4s all;transition:.4s all}.rll-youtube-player img:hover{-webkit-filter:brightness(75%)}.rll-youtube-player .play{height:100%;width:100%;left:0;top:0;position:absolute;background:url(../../../wp-content/plugins/wp-rocket/assets/img/youtube.png) no-repeat center;background-color: transparent !important;cursor:pointer;border:none;}
</style>
<script type="text/javascript" src="/dependencies/js/wp-includes/js/dist/vendor/react.min.js?ver=18.3.1" id="react-js"></script>
<script type="text/javascript" src="/dependencies/js/wp-includes/js/dist/vendor/react-dom.min.js?ver=18.3.1" id="react-dom-js"></script>
<script type="text/javascript" src="/dependencies/js/wp-content/plugins/emaar-digital-vouchers/build/blocks/vouchers-listing-block/view.js?ver=4ce0c6d36fdcbf5c8338" id="digital-vouchers-vouchers-listing-block-script-js"></script>
<script type="text/javascript" src="/dependencies/js/wp-content/plugins/emaar-digital-vouchers/build/blocks/vouchers-cart-block/view.js?ver=52383da8f512ac2eb756" id="digital-vouchers-vouchers-cart-block-script-js"></script>
<script type="text/javascript" src="/dependencies/js/wp-content/plugins/emaar-digital-vouchers/build/blocks/vouchers-checkout-block/view.js?ver=5bdee964c02e936ce254" id="digital-vouchers-vouchers-checkout-block-script-js"></script>
<script type="text/javascript" src="/dependencies/js/wp-content/plugins/emaar-digital-vouchers/build/blocks/vouchers-confirmation-block/view.js?ver=85630d52822762967ca7" id="digital-vouchers-vouchers-confirmation-block-script-js"></script>
<script type="text/javascript" src="/dependencies/js/wp-content/plugins/emaar-digital-vouchers/build/blocks/vouchers-styleguide-block/view.js?ver=bc9b95158f230cdc9300" id="digital-vouchers-vouchers-styleguide-block-script-js"></script>
<script type="text/javascript" src="/dependencies/js/wp-content/plugins/emaar-digital-vouchers/build/blocks/vouchers-details-block/view.js?ver=c0c5d31665da9eb6f838" id="digital-vouchers-vouchers-details-block-script-js"></script>
<script type="text/javascript" src="/dependencies/js/wp-content/themes/emaar-projects/gutenberg-blocks/build/blocks/homepage-video-section/index-render.js?ver=31d6cfe0d16ae931b73c" id="gutenberg-blocks-homepage-video-section-script-js"></script>
<script type="text/javascript" src="/dependencies/js/wp-content/plugins/sitepress-multilingual-cms/templates/language-switchers/legacy-dropdown-click/script.min.js?ver=1" id="wpml-legacy-dropdown-click-0-js"></script>
<script type="text/javascript" src="/dependencies/js/wp-content/themes/emaar-projects/js/lib/jquery.min.js?ver=3.6.0" id="jquery-js"></script>
<meta name="generator" content="WPML ver:4.6.13 stt:5,59,1,4,3,45,53;">
<link rel="icon" href="/dependencies/img/wp-content/uploads/2020/06/address-favicon-dark.jpg.webp" sizes="32x32">
<link rel="icon" href="/dependencies/img/wp-content/uploads/2020/06/address-favicon-dark.jpg.webp" sizes="192x192">
<link rel="apple-touch-icon" href="/dependencies/img/wp-content/uploads/2020/06/address-favicon-dark.jpg.webp">
<meta name="msapplication-TileImage" content="https://www-addresshotels-com.azureedge.net/wp-content/uploads/2020/06/address-favicon-dark.jpg">
		<style type="text/css" id="wp-custom-css">
			/* Start Page Infinity Pool */
.page-id-190574 .individual-homepage-featured-offer:nth-child(2n+1) .row {
    flex-direction: row-reverse;
}

.page-id-197302 .individual-homepage-featured-offer:nth-child(2n+1) .row {
    flex-direction: row-reverse;
}
.page-id-199346 .individual-homepage-featured-offer:nth-child(2n+1) .row {
    flex-direction: row-reverse;
}
.page-id-190574 .display-2-48{
	display: none;
}
/* End Page Infinity Pool */
/*  Start Rooms and clubs*/
.page-id-190552 .individual-homepage-explore-accommodations{
	background-color: #f7f8f6;
}
.page-id-190552 .hotel-list-main-container{
	padding-top:0px;
}
.page-id-190552 #wellness-vid {
  object-fit: cover;
}
.page-id-190574 .header-banner-img-container.header-2 {
    height: 664px;
    min-height: auto;
}

.page-id-192005 .header-banner-img-container {
  height: 100px;

	    background-image: linear-gradient(-105deg, rgba(37, 40, 45, 0) 18%, #00000000 104%), radial-gradient(circle at 53% 100%, rgba(42, 60, 68, 0), rgba(42, 60, 68, 0) 53%, rgb(42 60 68 / 0%) 79%), url(../../../wp-content/uploads/2025/06/Banner.png);
}
}
.page-id-192881 .individual-homepage-featured-offer:nth-child(odd) .row {
  flex-direction: row;
}

.page-id-192881 .individual-homepage-featured-offer:nth-child(even) .row {
  flex-direction: row-reverse;
}
.page-id-192881 .header-banner-img-container.header-2 {
  bottom: -61px;
  position: relative;
}

.page-id-4490 
.content-box {
    text-align: left !important;
}

.page-id-4490 .container.individual-homepage-featured-offer .row.g-0.align-items-center.text-center.justify-content-between {
    flex-direction: row-reverse;
}
.page-id-4490 .container.individual-homepage-featured-offer:nth-of-type(even) 
.row.g-0.align-items-center.text-center.justify-content-between {
    flex-direction: row;
}
.page-id-4490 .container.individual-homepage-featured-offer:nth-of-type(even) .inline-left {
    padding-left: 0;
    padding-right: 60px;
}
.page-id-4490 .container.individual-homepage-featured-offer:nth-of-type(odd) .inline-left {
    padding-right: 0;
    padding-left: 60px;
}









		</style>
		<noscript><style id="rocket-lazyload-nojs-css">.rll-youtube-player, [data-lazy-src]{display:none !important;}</style></noscript>  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <!-- <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet">  -->
<meta name="generator" content="WP Rocket 3.17.3.1" data-wpr-features="wpr_lazyload_iframes wpr_image_dimensions wpr_cache_webp wpr_cdn wpr_desktop wpr_dns_prefetch"></head>

<body class="page-template page-template-templates page-template-individual-home-custom-template page-template-templatesindividual-home-custom-template-php page page-id-3739 page-parent page-child parent-pageid-662">
  <!-- Preloader -->
  <!-- Preloader End -->
  <div id="page" class="site">

    <script>
      ICL = "en";
      RECAPTCHA_SITE_KEY = "6Ld_JNIbAAAAAPu9Dbv8WgBHfIYmdKBzNh-7w72X";
    </script>

    


<header id="masthead" class="site-header custom-navbar-page more-dropdown-navbar">
  <div id="to-top"></div>

  <nav id="nav-main" class="navbar navbar-expand-xl position-absolute top-0 start-0 w-100 px-0 px-lg-3 py-3 py-lg-4 align-content-start global-navbar " style="z-index: 900;">

    <div class="custom-navigation-expandable container-fluid px-sm-3 justify-content-lg-between align-items-lg-end mt-3 mt-lg-2">

      <div id="custom-sticky-itendifier">
        <a class="navbar-brand pb-0 pl-3 px-lg-0 custom-width-navbar-brand d-flex justify-content-center" href="/pages/en/hotels/address-sky-view/index.php">
          <img width="141" height="34" id="black_logo" src="/dependencies/img/wp-content/uploads/2021/03/address-SkyViews-logo-B.svg" alt="logo" class="logo" style="display:none">

          <img width="141" height="34" id="white_logo" src="/dependencies/img/wp-content/uploads/2021/03/address-SkyViews-logo-W.svg" alt="logo" class="logo">
        </a>
      </div>

      <!-- Mobile Search Module -->
      <div class="d-flex">
                <div class="d-block d-xl-none whatsapp-icon-mobile">
          <a href="https://api.whatsapp.com/send?phone=97142488553&text=Hi Address Sky View" class="nav-link " target="_blank">
            <svg width="22" height="22" viewbox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M20.4664 2.43597C10.9087 2.43597 3.13672 10.1492 3.13672 19.6315C3.13672 23.3917 4.36218 26.8781 6.43721 29.7133L4.27275 36.0977L10.931 33.9821C13.667 35.7777 16.9437 36.8243 20.4664 36.8243C30.02 36.8243 37.7947 29.111 37.7947 19.6301C37.7947 10.1492 30.02 2.43457 20.4664 2.43457V2.43597Z" fill="url(#paint0_linear_7343_26683)"></path>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M40.0014 19.4844C40.0014 30.2438 31.2094 38.9688 20.3647 38.9688C16.9203 38.9688 13.6855 38.0898 10.8726 36.5444L0 40L3.54363 29.5466C1.75505 26.6094 0.726612 23.1664 0.726612 19.4858C0.726612 8.72354 9.51862 0 20.3647 0C31.2108 0 40.0014 8.72354 40.0014 19.4858V19.4844ZM20.3661 3.10208C11.2597 3.10208 3.85524 10.4506 3.85524 19.4844C3.85524 23.0671 5.02201 26.3872 6.99923 29.0896L4.93817 35.1722L11.2821 33.1573C13.8881 34.8676 17.0111 35.8653 20.3661 35.8653C29.4683 35.8653 36.8756 28.5167 36.8756 19.4844C36.8756 10.452 29.4683 3.10208 20.3661 3.10208ZM30.2816 23.9726C30.16 23.7728 29.8386 23.654 29.3593 23.4151C28.8772 23.1761 26.5102 22.0205 26.0686 21.8612C25.6285 21.702 25.3043 21.6223 24.9857 22.1002C24.6643 22.5781 23.7421 23.654 23.4598 23.9726C23.1803 24.2926 22.8995 24.3303 22.4188 24.0914C21.9367 23.8524 20.3843 23.3466 18.5468 21.7215C17.1173 20.4541 16.1504 18.8919 15.8681 18.414C15.5886 17.9361 15.8401 17.679 16.0791 17.4401C16.2957 17.2249 16.5612 16.8826 16.8015 16.6045C17.0432 16.325 17.1229 16.1238 17.2836 15.8052C17.4443 15.4866 17.3646 15.2086 17.2431 14.9696C17.1243 14.7307 16.1601 12.3804 15.7591 11.4232C15.3609 10.4688 14.9584 10.5037 14.6762 10.5037C14.3939 10.5037 13.8769 10.5876 13.8769 10.5876C13.8769 10.5876 12.9113 10.7064 12.4712 11.1842C12.031 11.6621 10.7874 12.8177 10.7874 15.1666C10.7874 17.5155 12.5103 19.789 12.752 20.1062C12.9938 20.4262 16.0805 25.4063 20.9753 27.3178C25.8688 29.2294 25.8688 28.5922 26.7519 28.5111C27.6336 28.4329 29.5997 27.3569 30.0007 26.2405C30.4017 25.1254 30.4017 24.1682 30.283 23.9698L30.2816 23.9726Z" fill="white"></path>
              <defs>
              <lineargradient id="paint0_linear_7343_26683" x1="20.465" y1="2.43597" x2="20.465" y2="36.8257" gradientunits="userSpaceOnUse">
              <stop stop-color="#4AC14B"></stop>
              <stop offset="1" stop-color="#06853A"></stop>
              </lineargradient>
              </defs>
              </svg>

          </a>
        </div>
                <button class="navbar-toggler ml-2 pr-3 px-lg-3 px-xl-0 bootstrap-collapse-navbar" type="button" data-toggle="collapse" data-target="#bootscore-navbar-collapse" aria-controls="#cw-navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
          <div class="toggler-icon-animated">
            <i class="fal fa-bars"></i>
            <i class="fal fa-times"></i>
          </div>
        </button>
      </div>
      <hr class="header-bottom-line-IBU d-none">


      <div class="collapse navbar-collapse custom-collapsed-items align-items-xl-end p-lg-0 px-3 py-4 " id="bootscore-navbar-collapsedd">

        <div class=" flex-grow-1 justify-content-start" id="responsive-navbar-flex">
          <ul class="navbar-nav static-area">
            <li id="menu-item-175612" class="nav-item dropdown hotelsandresortsmenu menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children dropdown active menu-item-175612 nav-item"><a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link" id="menu-item-dropdown-175612">Hotels &#038; Resorts</a>
<ul id='hotelList__dropdown' class="dropdown-menu" aria-labelledby="menu-item-dropdown-175612"><div class='container hotel_resorts_dropdown'>
	<li id="menu-item-175613" class="nav-indentation-class nav-link menu-item menu-item-type-custom menu-item-object-custom menu-item-175613 nav-item"><a href="#" class="dropdown-item">United Arab Emirates</a></li>
	<li id="menu-item-175614" class="dropdown-item hotel-nav-sub-heading menu-item menu-item-type-custom menu-item-object-custom menu-item-175614 nav-item"><a href="#" class="dropdown-item">Dubai</a></li>
	<li id="menu-item-175615" class="dropdown-item menu-item menu-item-type-custom menu-item-object-custom menu-item-175615 nav-item"><a href="https://www.addresshotels.com/en/resorts/address-beach-resort/" class="dropdown-item">Address Beach Resort</a></li>
	<li id="menu-item-175616" class="dropdown-item menu-item menu-item-type-custom menu-item-object-custom menu-item-175616 nav-item"><a href="https://www.addresshotels.com/en/hotels/address-downtown/" class="dropdown-item">Address Downtown</a></li>
	<li id="menu-item-175617" class="dropdown-item menu-item menu-item-type-custom menu-item-object-custom menu-item-175617 nav-item"><a href="https://www.addresshotels.com/en/hotels/address-dubai-mall/" class="dropdown-item">Address Dubai Mall</a></li>
	<li id="menu-item-175618" class="dropdown-item menu-item menu-item-type-custom menu-item-object-custom menu-item-175618 nav-item"><a href="https://www.addresshotels.com/en/hotels/address-creek-harbour/" class="dropdown-item">Address Creek Harbour</a></li>
	<li id="menu-item-175619" class="dropdown-item menu-item menu-item-type-custom menu-item-object-custom menu-item-175619 nav-item"><a href="https://www.addresshotels.com/en/hotels/address-montgomerie/" class="dropdown-item">Address Montgomerie</a></li>
	<li id="menu-item-175621" class="dropdown-item menu-item menu-item-type-custom menu-item-object-custom current-menu-item active menu-item-175621 nav-item"><a href="/pages/en/hotels/address-sky-view/index.php" class="dropdown-item" aria-current="page">Address Sky View</a></li>
	<li id="menu-item-175624" class="dropdown-item menu-item menu-item-type-custom menu-item-object-custom menu-item-175624 nav-item"><a href="https://www.addresshotels.com/en/hotels/palace-downtown/" class="dropdown-item">Palace Downtown</a></li>
	<li id="menu-item-175625" class="dropdown-item menu-item menu-item-type-custom menu-item-object-custom menu-item-175625 nav-item"><a href="https://www.addresshotels.com/en/hotels/palace-dubai-creek-harbour/" class="dropdown-item">Palace Dubai Creek Harbour</a></li>
	<li id="menu-item-175627" class="dropdown-item hotel-nav-sub-heading menu-item menu-item-type-custom menu-item-object-custom menu-item-175627 nav-item"><a href="#" class="dropdown-item">Fujairah</a></li>
	<li id="menu-item-175628" class="dropdown-item menu-item menu-item-type-custom menu-item-object-custom menu-item-175628 nav-item"><a href="https://www.addresshotels.com/en/resorts/address-beach-resort-fujairah/" class="dropdown-item">Address Beach Resort Fujairah</a></li>
	<li id="menu-item-175668" class="dropdown-item menu-item menu-item-type-custom menu-item-object-custom menu-item-175668 nav-item"><a href="https://www.addresshotels.com/en/resorts/palace-beach-resort-fujairah/" class="dropdown-item">Palace Beach Resort Fujairah</a></li>
	<li id="menu-item-175669" class="nav-indentation-class nav-linking menu-item menu-item-type-custom menu-item-object-custom menu-item-175669 nav-item"><a href="#" class="dropdown-item">Bahrain</a></li>
	<li id="menu-item-175670" class="dropdown-item menu-item menu-item-type-custom menu-item-object-custom menu-item-175670 nav-item"><a href="https://www.addresshotels.com/en/resorts/address-beach-resort-bahrain/" class="dropdown-item">Address Beach Resort Bahrain</a></li>
	<li id="menu-item-175671" class="dropdown-item hotel-nav-sub-heading menu-item menu-item-type-custom menu-item-object-custom menu-item-175671 nav-item"><a href="#" class="dropdown-item">Egypt</a></li>
	<li id="menu-item-175672" class="dropdown-item menu-item menu-item-type-custom menu-item-object-custom menu-item-175672 nav-item"><a href="https://www.addresshotels.com/en/resorts/address-marassi-golf-resort/" class="dropdown-item">Address Marassi Golf Resort</a></li>
	<li id="menu-item-175673" class="dropdown-item menu-item menu-item-type-custom menu-item-object-custom menu-item-175673 nav-item"><a href="https://www.addresshotels.com/en/resorts/address-beach-resort-marassi/" class="dropdown-item">Address Beach Resort Marassi</a></li>
	<li id="menu-item-201444" class="dropdown-item menu-item menu-item-type-post_type menu-item-object-page menu-item-201444 nav-item"><a href="https://www.addresshotels.com/en/resorts/palace-beach-resort/" class="dropdown-item">Palace Beach Resort</a></li>
	<li id="menu-item-175674" class="dropdown-item hotel-nav-sub-heading menu-item menu-item-type-custom menu-item-object-custom menu-item-175674 nav-item"><a href="#" class="dropdown-item">Saudi Arabia</a></li>
	<li id="menu-item-175675" class="dropdown-item menu-item menu-item-type-custom menu-item-object-custom menu-item-175675 nav-item"><a href="https://www.addresshotels.com/en/hotels/address-jabal-omar-makkah/" class="dropdown-item">Address Jabal Omar Makkah</a></li>
	<li id="menu-item-175676" class="dropdown-item hotel-nav-sub-heading menu-item menu-item-type-custom menu-item-object-custom menu-item-175676 nav-item"><a href="#" class="dropdown-item">Turkey</a></li>
	<li id="menu-item-175638" class="dropdown-item menu-item menu-item-type-custom menu-item-object-custom menu-item-175638 nav-item"><a href="https://www.addresshotels.com/en/hotels/address-istanbul/" class="dropdown-item">Address Istanbul</a></li>
</div></ul>
</li>
<li id="menu-item-29631" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-29631 nav-item"><a href="/pages/en/hotels/address-sky-view/rooms-and-suites/index.php" class="nav-link">Rooms and Suites</a></li>
<li id="menu-item-2838" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2838 nav-item"><a href="/pages/en/hotels/address-sky-view/residences/index.php" class="nav-link">Residences</a></li>
<li id="menu-item-2839" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2839 nav-item"><a href="/pages/en/hotels/address-sky-view/dining/index.php" class="nav-link">Dining</a></li>
<li id="menu-item-2840" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2840 nav-item"><a href="/pages/en/hotels/address-sky-view/wellness/index.php" class="nav-link">Wellness</a></li>
<li id="menu-item-2841" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2841 nav-item"><a href="/pages/en/hotels/address-sky-view/events/index.php" class="nav-link">Events</a></li>
          </ul>

                    <div id="work-area" class="work-area-class">
            <!-- Add your content here -->
            <ul class="navbar-nav work-navbar-nav">
              <li id="menu-item-175954" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-175954 nav-item"><a href="/pages/en/hotels/address-sky-view/photos-and-videos/index.php" class="nav-link">Gallery</a></li>
<li id="menu-item-175955" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-175955 nav-item"><a href="/pages/en/hotels/address-sky-view/offers/index.php" class="nav-link">Offers</a></li>
<li id="menu-item-175956" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-175956 nav-item"><a href="/pages/en/hotels/address-sky-view/amenities/index.php" class="nav-link">Amenities</a></li>
<li id="menu-item-175965" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-175965 nav-item"><a target="_blank" rel="noopener noreferrer" href="https://www.google.co.in/maps/place/Address+Sky+View/@25.2015914,55.2683494,17z/data=!3m1!4b1!4m8!3m7!1s0x3e5f43859586ed13:0xe1103d783cf1f2f1!5m2!4m1!1i2!8m2!3d25.2015914!4d55.2705381" class="nav-link">Location</a></li>
<li id="menu-item-175968" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-175968 nav-item"><a href="/pages/en/hotels/address-sky-view/address-sky-view-360-tour/index.php" class="nav-link">360 Tour</a></li>
            </ul>
          </div>
          
          <ul class="navigation-ul-area">       
            <li id="work-area-dropss" class="more-option-menu position-relative menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown nav-item">
              <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link">More…</a>
              <ul id="hotelList__dropdown" class="dropdown-menu" aria-labelledby="menu-item-dropdown-153290">
                <div class="container hotel_resorts_dropdown work-area-more-dropdown">
                </div>
              </ul>
            </li>
          </ul>

        </div>



        <div class="d-flex flex-xl-row flex-column justify-content-end right-nav-container  h-100" id="right-side-elements">
          <ul class="navbar-nav rightlinks  cntplink align-items-xl-end fit-content justify-content-  ">
            <li class="nav-item  manageBooking-mobile d-block d-lg-none">
              <a class="nav-link px-lg-0" href="/en/modify-booking-stay-dine/">Manage Booking              </a>
            </li>
                        <li class="nav-item d-xl-block d-none sunaina">
              <a href="https://api.whatsapp.com/send?phone=97142488553&text=Hi Address Sky View" class="nav-link" target="_blank">
                 <svg width="22" height="22" viewbox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M20.4664 2.43597C10.9087 2.43597 3.13672 10.1492 3.13672 19.6315C3.13672 23.3917 4.36218 26.8781 6.43721 29.7133L4.27275 36.0977L10.931 33.9821C13.667 35.7777 16.9437 36.8243 20.4664 36.8243C30.02 36.8243 37.7947 29.111 37.7947 19.6301C37.7947 10.1492 30.02 2.43457 20.4664 2.43457V2.43597Z" fill="url(#paint0_linear_2)"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M40.0014 19.4844C40.0014 30.2438 31.2094 38.9688 20.3647 38.9688C16.9203 38.9688 13.6855 38.0898 10.8726 36.5444L0 40L3.54363 29.5466C1.75505 26.6094 0.726612 23.1664 0.726612 19.4858C0.726612 8.72354 9.51862 0 20.3647 0C31.2108 0 40.0014 8.72354 40.0014 19.4858V19.4844ZM20.3661 3.10208C11.2597 3.10208 3.85524 10.4506 3.85524 19.4844C3.85524 23.0671 5.02201 26.3872 6.99923 29.0896L4.93817 35.1722L11.2821 33.1573C13.8881 34.8676 17.0111 35.8653 20.3661 35.8653C29.4683 35.8653 36.8756 28.5167 36.8756 19.4844C36.8756 10.452 29.4683 3.10208 20.3661 3.10208ZM30.2816 23.9726C30.16 23.7728 29.8386 23.654 29.3593 23.4151C28.8772 23.1761 26.5102 22.0205 26.0686 21.8612C25.6285 21.702 25.3043 21.6223 24.9857 22.1002C24.6643 22.5781 23.7421 23.654 23.4598 23.9726C23.1803 24.2926 22.8995 24.3303 22.4188 24.0914C21.9367 23.8524 20.3843 23.3466 18.5468 21.7215C17.1173 20.4541 16.1504 18.8919 15.8681 18.414C15.5886 17.9361 15.8401 17.679 16.0791 17.4401C16.2957 17.2249 16.5612 16.8826 16.8015 16.6045C17.0432 16.325 17.1229 16.1238 17.2836 15.8052C17.4443 15.4866 17.3646 15.2086 17.2431 14.9696C17.1243 14.7307 16.1601 12.3804 15.7591 11.4232C15.3609 10.4688 14.9584 10.5037 14.6762 10.5037C14.3939 10.5037 13.8769 10.5876 13.8769 10.5876C13.8769 10.5876 12.9113 10.7064 12.4712 11.1842C12.031 11.6621 10.7874 12.8177 10.7874 15.1666C10.7874 17.5155 12.5103 19.789 12.752 20.1062C12.9938 20.4262 16.0805 25.4063 20.9753 27.3178C25.8688 29.2294 25.8688 28.5922 26.7519 28.5111C27.6336 28.4329 29.5997 27.3569 30.0007 26.2405C30.4017 25.1254 30.4017 24.1682 30.283 23.9698L30.2816 23.9726Z" fill="white"></path>
                  <defs>
                  <lineargradient id="paint0_linear_2" x1="20.465" y1="2.43597" x2="20.465" y2="36.8257" gradientunits="userSpaceOnUse">
                  <stop stop-color="#4AC14B"></stop>
                  <stop offset="1" stop-color="#06853A"></stop>
                  </lineargradient>
                  </defs>
                  </svg>
              </a>
            </li>
                        <li class="nav-item">
              <!--login -->
<div class="dropdown login-dropdown">
   <a class="nav-link login first_name dropdown-toggle disabled" href="javascript:void(0);" type="" id="loginMenuButton" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
      <span class="sign_in_text">Sign In</span>
   </a>
   <div class="login dropdown-menu dropdown-menu-center" aria-labelledby="loginMenuButton">
      <div class="dropdown-item">
         <p class="go-back-text d-lg-none d-block"><i class="fal fa-caret-left " style="font-weight: bolder !important;padding-right:5px;"></i>
            Go Back</p>
         <h6 class="login_item full_name body-4 text-capitalize secondary-semibold"></h6>
         <p class="login_item tier_name font-14 text-upparcase"></p>
         <p class="login_item upoints font-14 ">Total Upoints: <span class="CurrentPoints"></span>
            worth AED <span class="CurrentBalance"></span></p>
      </div>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item login_item dashboard_link" href="/en/my-dashboard/">My Dashboard</a>
      <a class="dropdown-item login_item sign_out" href="javascript:void(0);" id="sign_out_link">Sign Out</a>
   </div>
</div>
<a class="nav-link login d-none" href="javascript:void(0);"></a>
            <li class="nav-item d-flex align-items-end language-selector language-individual-spacing">
              
<div class="wpml-ls-statics-shortcode_actions wpml-ls wpml-ls-legacy-dropdown-click js-wpml-ls-legacy-dropdown-click">
	<ul>

		<li class="wpml-ls-slot-shortcode_actions wpml-ls-item wpml-ls-item-en wpml-ls-current-language wpml-ls-first-item wpml-ls-item-legacy-dropdown-click">

			<a href="#" class="js-wpml-ls-item-toggle wpml-ls-item-toggle">
                                                    <img width="18" height="12" class="wpml-ls-flag" src="/dependencies/img/wp-content/plugins/sitepress-multilingual-cms/res/flags/en.svg" alt=""><span class="wpml-ls-native">EN</span></a>

			<ul class="js-wpml-ls-sub-menu wpml-ls-sub-menu">
				
					<li class="wpml-ls-slot-shortcode_actions wpml-ls-item wpml-ls-item-ar">
						<a href="https://www.addresshotels.com/ar/hotels/address-sky-view/" class="wpml-ls-link">
                                                                <img width="18" height="12" class="wpml-ls-flag" src="/dependencies/img/wp-content/plugins/sitepress-multilingual-cms/res/flags/ar.svg" alt=""><span class="wpml-ls-native" lang="ar">AR</span></a>
					</li>

				
					<li class="wpml-ls-slot-shortcode_actions wpml-ls-item wpml-ls-item-zh-hans">
						<a href="https://www.addresshotels.com/zh-hans/hotels/address-sky-view/" class="wpml-ls-link">
                                                                <img width="18" height="12" class="wpml-ls-flag" src="/dependencies/img/wp-content/plugins/sitepress-multilingual-cms/res/flags/zh-hans.svg" alt=""><span class="wpml-ls-native" lang="zh-hans">ZH</span></a>
					</li>

				
					<li class="wpml-ls-slot-shortcode_actions wpml-ls-item wpml-ls-item-fr">
						<a href="https://www.addresshotels.com/fr/hotels/address-sky-view/" class="wpml-ls-link">
                                                                <img width="18" height="12" class="wpml-ls-flag" src="/dependencies/img/wp-content/plugins/sitepress-multilingual-cms/res/flags/fr.svg" alt=""><span class="wpml-ls-native" lang="fr">FR</span></a>
					</li>

				
					<li class="wpml-ls-slot-shortcode_actions wpml-ls-item wpml-ls-item-de">
						<a href="https://www.addresshotels.com/de/hotels/address-sky-view/" class="wpml-ls-link">
                                                                <img width="18" height="12" class="wpml-ls-flag" src="/dependencies/img/wp-content/plugins/sitepress-multilingual-cms/res/flags/de.svg" alt=""><span class="wpml-ls-native" lang="de">DE</span></a>
					</li>

				
					<li class="wpml-ls-slot-shortcode_actions wpml-ls-item wpml-ls-item-ru wpml-ls-last-item">
						<a href="https://www.addresshotels.com/ru/hotels/address-sky-view/" class="wpml-ls-link">
                                                                <img width="18" height="12" class="wpml-ls-flag" src="/dependencies/img/wp-content/plugins/sitepress-multilingual-cms/res/flags/ru.svg" alt=""><span class="wpml-ls-native" lang="ru">RU</span></a>
					</li>

							</ul>

		</li>

	</ul>
</div>
            </li>
            <!-- Boat By Address Micro-Site Changes Start -->
            <!-- 
 -->
            <!-- Boat By Address Micro-Site Changes End -->
          </ul>

        </div>
      </div>
    </div>

    <a class="nav-link d-none d-lg-block manageBooking-global manageBooking-desktop managebooking-individual " href="/en/modify-booking-stay-dine/">Manage Booking</a>
    <div class="global-home-link-dropdown-box dropdown">

      <a class="dropdown-toggle global-home-link-dropdown global-home-link /en/" id="dropdownMenuButton1" href="https://www.addresshotels.com/en/">
        Address Hotels + Resorts</a>
      <ul class="dropdown-menu d-none" aria-labelledby="dropdownMenuButton1">
        <div class="container global-home-link-dropdown-inner">
          <a href="/en/" class=" hotels-resort-homepage-link">
            <p>Address Hotels + Resorts</p>
          </a>
          <div class="global-home-link-dropdown-inner-box w-100">

            <button type="button" class="close" data-dismiss="modal" id="modelclosesign"><i class="fal fa-times"></i></button>
            <ul class="navbar-nav cntplink">

              <li id="menu-item-17822" class="nav-indentation-class nav-link menu-item menu-item-type-custom menu-item-object-custom menu-item-17822 nav-item"><a href="#" class="nav-link">United Arab Emirates</a></li>
<li id="menu-item-17824" class="dropdown-item nav-link hotel-nav-sub-heading menu-item menu-item-type-custom menu-item-object-custom menu-item-17824 nav-item"><a href="#" class="nav-link">Dubai</a></li>
<li id="menu-item-17834" class="dropdown-item menu-item menu-item-type-post_type menu-item-object-page menu-item-17834 nav-item"><a href="https://www.addresshotels.com/en/resorts/address-beach-resort/" class="nav-link">Address Beach Resort</a></li>
<li id="menu-item-17826" class="dropdown-item menu-item menu-item-type-post_type menu-item-object-page menu-item-17826 nav-item"><a href="https://www.addresshotels.com/en/hotels/address-downtown/" class="nav-link">Address Downtown</a></li>
<li id="menu-item-17838" class="dropdown-item menu-item menu-item-type-post_type menu-item-object-page menu-item-17838 nav-item"><a href="https://www.addresshotels.com/en/hotels/address-dubai-mall/" class="nav-link">Address Dubai Mall</a></li>
<li id="menu-item-96332" class="dropdown-item menu-item menu-item-type-post_type menu-item-object-page menu-item-96332 nav-item"><a href="https://www.addresshotels.com/en/hotels/address-creek-harbour/" class="nav-link">Address Creek Harbour</a></li>
<li id="menu-item-17828" class="dropdown-item menu-item menu-item-type-post_type menu-item-object-page menu-item-17828 nav-item"><a href="https://www.addresshotels.com/en/hotels/address-montgomerie/" class="nav-link">Address Montgomerie</a></li>
<li id="menu-item-17836" class="dropdown-item menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-3739 current_page_item active menu-item-17836 nav-item"><a href="/pages/en/hotels/address-sky-view/index.php" class="nav-link" aria-current="page">Address Sky View</a></li>
<li id="menu-item-17843" class="dropdown-item menu-item menu-item-type-post_type menu-item-object-page menu-item-17843 nav-item"><a href="https://www.addresshotels.com/en/hotels/palace-downtown/" class="nav-link">Palace Downtown</a></li>
<li id="menu-item-156297" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-156297 nav-item"><a href="https://www.addresshotels.com/en/hotels/palace-dubai-creek-harbour/" class="nav-link">Palace Dubai Creek Harbour</a></li>
<li id="menu-item-19776" class="dropdown-item nav-link hotel-nav-sub-heading menu-item menu-item-type-custom menu-item-object-custom menu-item-19776 nav-item"><a href="#" class="nav-link">Fujairah</a></li>
<li id="menu-item-19777" class="dropdown-item menu-item menu-item-type-post_type menu-item-object-page menu-item-19777 nav-item"><a href="https://www.addresshotels.com/en/resorts/address-beach-resort-fujairah/" class="nav-link">Address Beach Resort Fujairah</a></li>
<li id="menu-item-82068" class="dropdown-item menu-item menu-item-type-post_type menu-item-object-page menu-item-82068 nav-item"><a href="https://www.addresshotels.com/en/resorts/palace-beach-resort-fujairah/" class="nav-link">Palace Beach Resort Fujairah</a></li>
<li id="menu-item-93194" class="nav-indentation-class nav-link menu-item menu-item-type-custom menu-item-object-custom menu-item-93194 nav-item"><a href="#" class="nav-link">Bahrain</a></li>
<li id="menu-item-93195" class="dropdown-item menu-item menu-item-type-custom menu-item-object-custom menu-item-93195 nav-item"><a href="https://www.addresshotels.com/en/resorts/address-beach-resort-bahrain/" class="nav-link">Address Beach Resort Bahrain</a></li>
<li id="menu-item-17844" class="dropdown-item nav-link hotel-nav-sub-heading menu-bottom-border menu-item menu-item-type-custom menu-item-object-custom menu-item-17844 nav-item"><a href="#" class="nav-link">Egypt</a></li>
<li id="menu-item-17842" class="dropdown-item menu-item menu-item-type-post_type menu-item-object-page menu-item-17842 nav-item"><a href="https://www.addresshotels.com/en/resorts/address-marassi-golf-resort/" class="nav-link">Address Marassi Golf Resort</a></li>
<li id="menu-item-157066" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-157066 nav-item"><a href="https://www.addresshotels.com/en/resorts/address-beach-resort-marassi/" class="nav-link">Address Beach Resort Marassi</a></li>
<li id="menu-item-118756" class="dropdown-item nav-link hotel-nav-sub-heading menu-bottom-border menu-item menu-item-type-custom menu-item-object-custom menu-item-118756 nav-item"><a href="#" class="nav-link">Saudi Arabia</a></li>
<li id="menu-item-118757" class="dropdown-item menu-item menu-item-type-post_type menu-item-object-page menu-item-118757 nav-item"><a href="https://www.addresshotels.com/en/hotels/address-jabal-omar-makkah/" class="nav-link">Address Jabal Omar Makkah</a></li>
<li id="menu-item-22451" class="nav-indentation-class nav-link menu-item menu-item-type-custom menu-item-object-custom menu-item-22451 nav-item"><a href="#" class="nav-link">Turkey</a></li>
<li id="menu-item-22452" class="dropdown-item menu-item menu-item-type-post_type menu-item-object-page menu-item-22452 nav-item"><a href="https://www.addresshotels.com/en/hotels/address-istanbul/" class="nav-link">Address Istanbul</a></li>

            </ul>
          </div>
        </div>
      </ul>
    </div>
  </nav>

</header><!-- #masthead -->
<style>
@media (min-width: 992px) {
  :lang(ar) .global-home-link-dropdown-box .dropdown-menu li {
    padding: 10px 5px 13px 20px;
  }
}

@media (min-width: 1200px) {
  :lang(ar) .global-home-link-dropdown-box .dropdown-item.current-menu-item::before {
    top: 0%;
    border-right: unset;
    transform: translateY(10px);
    font-weight: 600;
  }

  :lang(ar) .global-home-link-dropdown-inner li.dropdown-item:not(.hotel-nav-sub-heading):hover::before {
    border-right: unset;
  }

  #hotelList__dropdown .work-area-more-dropdown li {
    margin: 0 !important;
    width: 100%;
  }
}

@media (min-width: 1200px) {
  .hotelsandresortsmenu li.dropdown-item:not(.hotel-nav-sub-heading):hover::before {
    content: "";
    position: absolute;
    left: -10px;
    top: 50%;
    transform: translateY(-50%);
    border-left: 6px solid black;
    border-top: 6px solid transparent;
    border-bottom: 6px solid transparent;
  }

  :lang(ar) .hotelsandresortsmenu li.dropdown-item:not(.hotel-nav-sub-heading):hover::before {
    border-right: 6px solid black !important;
    border-left: unset !important;
  }
}

.hotelsandresortsmenu .dropdown-item.current-menu-item {
  position: relative;
}

:lang(ar) .hotelsandresortsmenu .dropdown-item.current-menu-item::before {
  content: "";
  position: absolute;
  right: -10px;
  top: 50%;
  transform: translateY(-50%);
  border-right: 6px solid black !important;
  border-left: unset !important;
  border-top: 6px solid transparent;
  border-bottom: 6px solid transparent;
}

.hotelsandresortsmenu .dropdown-item.current-menu-item::before {
  content: "";
  position: absolute;
  left: -10px;
  top: 50%;
  transform: translateY(-50%);
  border-left: 6px solid black;
  border-right: unset !important;
  border-top: 6px solid transparent;
  border-bottom: 6px solid transparent;
}

@media screen and (max-width: 998px) {
  .global-home-link-dropdown-inner-box .navbar-nav .dropdown-item.current-menu-item::before {
    top: 20px;
  }
}

@media (max-width: 991px) {
  :lang(ar) .global-home-link-dropdown-inner-box .navbar-nav li {
    padding-right: 15px;
  }
}

#nav-main .right-nav-container {
  max-width: 300px !important;
}

@media (min-width: 1200px) {
  /* .manageBooking-global.manageBooking-desktop {
right: 70px !important;
}

:lang(ar) .manageBooking-global.manageBooking-desktop.managebooking-individual {
right: unset !important;
left: 55px;
} */
}

@media screen and (min-width: 1300px) {
  .wpml-ls-legacy-dropdown-click a {
    padding: 0 22px;
  }
}


@media screen and (max-width: 998px) {

  .dropdown-item.selected {
    font-weight: 600 !important;
    position: relative;
  }

  .dropdown-item.selected::before {
    content: "";
    position: absolute;
    left: -10px;
    top: 50%;
    transform: translateY(-50%);
    border-left: 6px solid black;
    border-top: 6px solid transparent;
    border-bottom: 6px solid transparent;
  }

  #bootscore-navbar-collapsedd {
    max-height: 95vh;
    overflow: scroll;
    padding-bottom: 80px !important;
  }
}


/* @media (min-width: 1202px) and (max-width: 1252px) {
.manageBooking-global.manageBooking-desktop {
right: 55px !important;
}
} */

@media (min-width: 992px) and (max-width: 1140px) {
  .managebooking-individual {
    color: white !important;
  }
}

nav.global-navbar.internal-nav .language-selector .wpml-ls-item-tr {
  display: none;
}

@media (max-width: 1199px) {
  .individual-home-navbar {
    z-index: 1000 !important;
  }

  :lang(ar) #responsive-navbar-flex {
    margin-inline-start: 20px
  }

  :lang(ar) #right-side-elements {
    margin-inline-start: 20px
  }
}

@media (max-width: 600px) {
  .navbar-expand-xl .navbar-nav .nav-link {
    padding-inline-start: 0 !important;
  }

  #right-side-elements {
    margin-bottom: 80px;
  }
}


.modified-divider-vm {
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
  width: 90vw;
  margin: 0 auto;
  padding-bottom: 25px;

}

.view-all-btn-adjustment {
  margin-bottom: 30px;
  margin-top: 30px;
  width: 250px;
}


#topbooknow {
  position: relative;
  bottom: -15px;
  right: 0;
}

:lang(ar) .darkHeader .manageBooking-global.manageBooking-desktop {
  right: unset !important;
  left: 55px;
}




@media (min-width: 1199px) {

  #work-area {
    visibility: hidden;
  }

  .navigation-ul-area {
    visibility: hidden;
  }
}

:lang(ar) .manageBooking-global.manageBooking-desktop.managebooking-individual {
  right: unset;
  left: 180px;
}

@media (min-width: 992px) {
  :lang(ar) .global-home-link-dropdown {
    left: 40px !important;
  }

  :lang(ar) .global-home-link-dropdown-box {
    right: auto;
    left: 0;
  }
}

.whatsapp-icon-mobile .nav-link {
  color: white;
}
</style>
<script>
//script for controlling opening of the dropdown
document.addEventListener("DOMContentLoaded", function() {
  const togglerButton = document.querySelector('.navbar-toggler');
  const collapseElement = document.querySelector('.bootstrap-collapse-navbar');
  const navbar = document.querySelector('.navbar'); // Select the navbar
  let addedStyle = null; // To keep track of dynamically added style

  if (togglerButton && collapseElement && navbar) {

    togglerButton.addEventListener('click', function() {

      if (navbar.classList.contains('menu-open')) {

        const headerBottomLine = document.querySelector('.header-bottom-line-IBU');
        if (headerBottomLine) {
          headerBottomLine.classList.add('menus-open'); // Add class when menus are open
        }

        if (!collapseElement.classList.contains('show')) {

          collapseElement.style.display = 'block';

          addedStyle = document.createElement('style');
          addedStyle.innerHTML = `
.collapse:not(.show) {
display: block !important;
}
@media (min-width: 320px) and (max-width: 1024px) {
#black_logo {
display: block !important;
}
#white_logo {
display: none !important;
}
}
@media (min-width: 1025px) and (max-width: 1140px) {
#black_logo {
display: block !important;
}
#white_logo {
display: none !important;
}
}
@media (max-width: 1199px) {
#work-area {
display:block !important
}

`;

          document.head.appendChild(addedStyle);

        } else {

          collapseElement.style.display = '';
          if (addedStyle) {
            addedStyle.remove();
            addedStyle = null;
          }
        }
      } else {

        const headerBottomLine = document.querySelector('.header-bottom-line-IBU');
        if (headerBottomLine) {
          headerBottomLine.classList.remove('menus-open'); // Add class when menus are open
        }
        if (addedStyle) {
          addedStyle.remove();
          addedStyle = null;
        }
      }
    });
  } else {
    console.error("Toggler button, collapse element, or navbar not found.");
  }
});
//script for adding CTA

document.addEventListener("DOMContentLoaded", function() {
  function adjustDropdownMargin() {
    if (window.innerWidth > 1200) {
      const menuItem = document.querySelector('.static-area');
      if (menuItem) {
        const rect = menuItem.getBoundingClientRect();
        const isRTL = window.getComputedStyle(document.documentElement).direction === 'rtl';

        let distanceFromStart = isRTL ? (window.innerWidth - rect.right + 12) : (rect.left + 12);


        const dropdownElement = document.querySelector(
          '[id^="menu-item-"] #hotelList__dropdown .hotel_resorts_dropdown'
        );
        if (dropdownElement) {
          dropdownElement.style.marginInlineStart = distanceFromStart + 'px';
          console.log("Applied margin-inline-start:", distanceFromStart + 'px');
        } else {
          console.error('Dropdown element not found');
        }
      } else {
        console.error('Element with class "static-area" not found');
      }
    }
  }



  function handleDropdowns() {
    const dropdownMenus = document.querySelectorAll(
      '.navbar-nav .menu-item-has-children .dropdown-menu');
    const navbar = document.querySelector('#nav-main.navbar');
    const blackLogo = document.querySelector('#black_logo');
    const whiteLogo = document.querySelector('#white_logo');
    const workAreaMoreDropdown = document.querySelector('#work-area-dropss');
    const newBookingWidget = document.querySelector('.new-booking-widget');
    const dropdownToggles = document.querySelectorAll('.navbar-nav .menu-item-has-children > a');

    let isAnyMenuOpen = false;
    requestAnimationFrame(() => {
      dropdownMenus.forEach(function(menu) {
        if (menu.classList.contains('show')) {
          isAnyMenuOpen = true;
        }
      });

      if (workAreaMoreDropdown && workAreaMoreDropdown.classList.contains('show')) {
        isAnyMenuOpen = true;
      }

      let languageSwitcherOpen = false;

      const languageSwitcher = document.querySelector(".js-wpml-ls-sub-menu.wpml-ls-sub-menu");

      if (languageSwitcher) {

        const isVisible = getComputedStyle(languageSwitcher).visibility === "visible";

        if (isVisible) {
          console.log("Language switcher is visible.");
          languageSwitcherOpen = true; // Set the state to true if visible
        } else {
          console.log("Language switcher is hidden.");
        }
      }

      // Toggle dark header and logos based on dropdown state
      if (isAnyMenuOpen || languageSwitcherOpen) {
        navbar.classList.add('darkHeader');
        whiteLogo.style.setProperty('display', 'none', 'important');
        blackLogo.style.setProperty('display', 'block', 'important');


        // Set z-index to allow dropdowns to appear over the widget
        if (newBookingWidget & !languageSwitcherOpen) {
          newBookingWidget.style.setProperty('z-index', 'unset', 'important');
        }

      } else {
        navbar.classList.remove('darkHeader');
        whiteLogo.style.display = 'block';
        blackLogo.style.display = 'none';

        // Reset z-index to default when dropdowns are closed
        if (newBookingWidget) {
          newBookingWidget.style.setProperty('z-index', '999', 'important');
        }
        //disable scrolling
        document.body.classList.remove('overflow-hidden');
      }
    });
  }

  if (window.innerWidth > 1200) {
    //adjustDropdownMargin();
  }
  handleDropdowns();

  window.addEventListener('resize', function() {
    if (window.innerWidth > 1200) {
      //adjustDropdownMargin();
    }
    handleDropdowns();
  });

  document.addEventListener('click', function(event) {
    if (window.innerWidth > 1200) {
      handleDropdowns();

      const clickedListItem = event.target.closest('li');
      if (clickedListItem) {
        //  const dropdownMenu = clickedListItem.querySelector('.dropdown-menu');
        //  if (dropdownMenu) {
        //    dropdownMenu.classList.toggle('show');
        //  }
        handleDropdowns();
      }

      const moreDropdown = document.querySelector('#work-area-dropss > a');
      if (moreDropdown) {
        moreDropdown.addEventListener('click', function() {
          handleDropdowns();
        });
      }
    }
  });


  if (window.innerWidth > 1200) {
    document.body.addEventListener('mouseover', function() {
      handleDropdowns();
    });
  }
});



//script to add spacing
document.addEventListener('DOMContentLoaded', function() {

  const isRTL = document.documentElement.getAttribute('dir') === 'rtl';
  const firstNavItemDropdown = document.querySelector('.static-area .nav-item.dropdown');

  if (firstNavItemDropdown) {
    const firstDropdownMenu = firstNavItemDropdown.querySelector('ul.dropdown-menu');
    if (firstDropdownMenu) {
      firstDropdownMenu.classList.add('first-element-hotel-list');
    }
  }

  const navDropdowns = document.querySelectorAll('.nav-item.dropdown.hotelsandresortsmenu');
  const newBookingWidget = document.querySelector('.new-booking-widget');


  navDropdowns.forEach(dropdown => {

    const toggle = dropdown.querySelector('.dropdown-toggle');
    const navbatogglerButton = dropdown.querySelector('.navbar-toggler')
    if (toggle || navbatogglerButton) {
      toggle.addEventListener('click', function(event) {
        event.preventDefault();
        setTimeout(() => {
          checkDropdownState(dropdown);
        }, 100);
      });
    } else {
      console.log(`No .dropdown-toggle found inside dropdown:`, dropdown);
    }
  });
  const navbarTogglerButton = document.querySelector('.navbar-toggler');

  if (navbarTogglerButton) {
    navbarTogglerButton.addEventListener('click', function(event) {
      navDropdowns.forEach(dropdown => {
        setTimeout(() => {
          checkDropdownState(dropdown);
        }, 100);
      });
    });
  }




  //function to add CTA
  function addCTAElements(menu, lang) {

    // Check if the CTA button already exists
    if (!menu.querySelector('.view-all-btn')) {

      const divider = document.createElement('div');
      divider.classList.add('modified-divider-vm');

      const buttonContainer = document.createElement('div');
      buttonContainer.classList.add('text-center', 'cta-buttons-redirection');

      const viewMoreButton = document.createElement('a');
      viewMoreButton.classList.add('btn', 'btn-outline-dark', 'view-all-btn',
        'view-all-btn-adjustment');

      // Dynamically set and log href based on language
      viewMoreButton.href = "/" + ICL + "/destinations/";
      viewMoreButton.textContent = view_all_hotel;

      buttonContainer.appendChild(divider);
      buttonContainer.appendChild(viewMoreButton);
      menu.appendChild(buttonContainer);
      // disable scroll
      document.body.classList.add('overflow-hidden');
    }
  }

  //function to add CTA  based on language
  function checkDropdownState(dropdown) {

    const menu = dropdown.querySelector('.dropdown-menu');

    if (menu.classList.contains('show') && menu.classList.contains(
        'first-element-hotel-list')) {
      if (newBookingWidget) {
        newBookingWidget.style.setProperty('z-index', 'unset', 'important');
      }
      let lang = document.documentElement.lang || 'en';
      if (lang === 'ru-ru') {
        lang = 'ru';
      } else if (lang === 'de-de') {
        lang = 'de';
      } else if (lang === 'fr-fr') {
        lang = 'fr';
      }

      addCTAElements(menu, lang);

    } else {
      const buttonContainer = menu.querySelector('.text-center');
      if (buttonContainer) {
        menu.removeChild(buttonContainer);
      }
      newBookingWidget.style.setProperty('z-index', '999', 'important');
      if (menu.classList.contains('show')) {
        // disable scroll
        document.body.classList.add('overflow-hidden');
      }
      document.body.classList.remove('overflow-hidden');

    }
  }




  function getSpacingBetweenItems(container) {
    const items = container.querySelectorAll('.static-area > li');
    let totalSpacing = 0;
    let count = 0;

    for (let i = 0; i < items.length - 1; i++) {
      const currentItem = items[i];
      const nextItem = items[i + 1];

      // Calculate spacing in an absolute manner to avoid negative values
      const spacing = Math.abs(isRTL ?
        currentItem.offsetLeft - nextItem.offsetLeft - nextItem.offsetWidth :
        nextItem.offsetLeft - (currentItem.offsetLeft + currentItem.offsetWidth)
      );

      totalSpacing += spacing;
      count++;
    }

    const averageSpacing = count > 0 ? totalSpacing / count : 0;
    return averageSpacing;
  }

  function checkAndHideEmptyListItems() {
    const workArea = document.querySelector('#work-area');
    const ulElement = workArea ? workArea.querySelector('.work-navbar-nav') : null;


    if (!workArea || !ulElement) {
      return;
    }

    const listItems = ulElement.querySelectorAll('li');

    let allItemsEmptyOrZeroWidth = true;

    listItems.forEach((li, index) => {
      // Check if the li element is empty (no child nodes or text content)
      const isEmpty = !li.textContent.trim() && li.children.length === 0;

      // Check if the li element is taking space
      const hasWidth = li.offsetWidth > 0;

      // If any item is not empty or has width, set the flag to false
      if (!isEmpty && hasWidth) {
        allItemsEmptyOrZeroWidth = false;
      }
    });

    // Hide the #work-area element if all li elements are empty or have 0px width
    if (allItemsEmptyOrZeroWidth) {
      workArea.style.setProperty('display', 'none', 'important');
    } else {
      console.log('#work-area remains visible.');
    }
  }

  function adjustNavItems() {
    const parentContainer = document.querySelector('#bootscore-navbar-collapsedd');
    if (!parentContainer) {
      console.error('Parent container not found.');
      return;
    }

    const ulElement = parentContainer.querySelector('ul.navbar-nav');
    const divElement = parentContainer.querySelector('#right-side-elements');
    if (!ulElement || !divElement) {
      console.error('Navbar elements not found.');
      return;
    }

    const getFixedScreenWidth = (screenWidth) => {
      if (screenWidth >= 1200 && screenWidth < 1300) {
        return 1200;
      } else if (screenWidth >= 1300 && screenWidth < 1400) {
        return 1300;
      } else if (screenWidth >= 1400 && screenWidth < 1600) {
        return 1400;
      } else if (screenWidth >= 1600 && screenWidth < 1800) {
        return 1600;
      } else {
        return screenWidth; // No change if screen width is 1600 or more
      }
    };

    // Function to determine the parent container width based on screen width
    const getParentContainerWidth = (screenWidth) => {
      if (screenWidth >= 1800) {
        return parentContainer.getBoundingClientRect()
          .width; // For 1500px, parent container width should be 1200px
      } else if (screenWidth >= 1600) {
        return 1200; // For 1400px, parent container width should be 1100px
      } else if (screenWidth >= 1400) {
        return 1000; // For 1300px, parent container width should be 1000px
      } else if (screenWidth >= 1300) {
        return 900; // For 1300px, parent container width should be 1000px
      } else if (screenWidth >= 1200) {
        return 800; // For 1300px, parent container width should be 1000px
      }
    };

    const screenWidth = window.innerWidth;

    // Apply the fixed screen width logic
    const fixedWidth = getFixedScreenWidth(screenWidth);

    // Get the parent container width based on screen width
    const parentWidth = getParentContainerWidth(screenWidth);

    // Set the parent container width dynamically
    parentContainer.style.width = `${parentWidth}px`;
    const ulWidth = ulElement.offsetWidth;
    const divWidth = 300;

    const staticArea = document.querySelector('.static-area');
    const moreNavigationArea = document.querySelector('.navigation-ul-area');
    const moreNavigationAreaWidth = moreNavigationArea ? moreNavigationArea.offsetWidth : 0;
    const spacing = getSpacingBetweenItems(
      staticArea); // Get spacing between items in static area


    const totalMargin = spacing * (ulElement.children.length - 1);
    const spaceWidth = parentWidth - (ulWidth + divWidth + moreNavigationAreaWidth);

    const workArea = document.querySelector('#work-area');
    const moreDropdownMenu = document.querySelector(
      '#hotelList__dropdown .work-area-more-dropdown');
    const moreDropdown = document.querySelector('#work-area-dropss');

    if (!moreDropdownMenu) {
      console.error('Work Area menu container or work area not found.');
      return;
    }
    if (!workArea) {
      console.error('Dropdown menu container not found.');
      return;
    }

    workArea.style.display = 'block';

    const listItems = [
      ...workArea.querySelectorAll('ul.navbar-nav > li'),
      ...moreDropdownMenu.querySelectorAll('li')
    ].filter((item) => item.className.trim() !== "");


    let totalWidth = 0;

    moreDropdownMenu.querySelectorAll('li').forEach((item) => {
      moreDropdownMenu.removeChild(item);
      workArea.querySelector('ul.navbar-nav').appendChild(item);
    });

    listItems.forEach((item, index) => {
      item.style.margin = isRTL ? `0 0 0 ${spacing}px` : `0 ${spacing}px 0 0`;
      const itemWidth = item.offsetWidth + spacing;
      if (index === listItems.length - 1) {
        item.style.marginRight = '0'; // Remove margin for the last item
      }


      if ((totalWidth + itemWidth) <= spaceWidth) {
        totalWidth += itemWidth;
        item.style.display = 'inline-block';
      } else {
        item.style.display = '';
        moreDropdownMenu.appendChild(item);
      }
    });



    const spacer = document.createElement('li');
    spacer.style.display = 'inline-block';
    spacer.style.width = `${spacing}px`;
    workArea.querySelector('ul.navbar-nav').appendChild(spacer);

    if (window.innerWidth > 1450) {
      if (moreDropdownMenu.children.length === 0) {
        moreDropdown.classList.add('d-none');
      } else {
        moreDropdown.classList.remove('d-none');
      }
    }

    if (totalWidth < spaceWidth) {
      if ((spaceWidth - totalWidth) > 4) {
        document.querySelector('.custom-navbar-page #work-area').style.maxWidth =
          `${totalWidth}px`;
      }
      parentContainer.style.width = `${totalWidth}px`;
    }

    moveItemsToDropdownIfEmpty([...workArea.querySelectorAll('ul.navbar-nav > li'), ...
      moreDropdownMenu
      .querySelectorAll('li')
    ], moreDropdownMenu);

    workArea.style.visibility = 'visible';
    moreNavigationArea.style.visibility = 'visible';
    checkAndHideEmptyListItems();
  }

  function moveItemsToDropdownIfEmpty(listItems, moreDropdownMenu) {
    const navLinksEmpty = listItems.length === 0;
    const dropdownEmpty = moreDropdownMenu.children.length === 0;

    if (navLinksEmpty && dropdownEmpty) {
      listItems.forEach((item) => {
        moreDropdownMenu.appendChild(item);
      });
    }
  }

  // Initial layout adjustment
  if (window.innerWidth > 1200) {
    adjustNavItems();
  }

  // Adjust nav items on window resize and zoom
  window.addEventListener('resize', function() {
    if (window.innerWidth > 1200) {
      adjustNavItems();
    }
  });

  // Handle browser zoom changes
  window.visualViewport.addEventListener('resize', function() {
    if (window.innerWidth > 1200) {
      adjustNavItems();
    }
  });

});


if (window.innerWidth >= 1024) {

  const dropdownElements = document.querySelectorAll(
    '.navbar-collapse .navbar-nav > .menu-item-has-children, .login-dropdown');

  dropdownElements.forEach(element => {
    element.addEventListener('hidden.bs.dropdown', function() {
      const scroll = window.pageYOffset || document.documentElement.scrollTop;
      const navMain = document.getElementById('nav-main');

      if (scroll <= 0) {
        navMain.classList.remove('darkHeader');
        hideBlackLogo();
      } else {
        navMain.classList.add('darkHeader');
      }
      document.body.classList.remove('overflow-hidden');
    });

    element.addEventListener('show.bs.dropdown', function() {
      document.getElementById('nav-main').classList.add('darkHeader');
      document.body.classList.add('overflow-hidden');
      hideWhiteLogo();
    });
  });
}

document.querySelector('#nav-main .navbar-toggler').addEventListener('click', function() {
  const navMain = document.getElementById('nav-main');
  navMain.classList.toggle('menu-open');
  navMain.classList.toggle('individual-home-navbar');
  document.querySelector('#dropdownMenuButton1').classList.toggle('darkgrey');

  if (!navMain.classList.contains('darkHeader')) {
    document.querySelectorAll('.navbar-brand .logo').forEach(logo => logo.style.display = logo
      .style
      .display === 'none' ? 'block' : 'none');
  }
  document.documentElement.classList.toggle('overflow-hidden');
  document.body.classList.toggle('overflow-hidden');
});

const globalHomeLinkDropdownBox = document.querySelector('.global-home-link-dropdown-box');
if (globalHomeLinkDropdownBox) {
  const navMain = document.getElementById('nav-main');
  globalHomeLinkDropdownBox.addEventListener('show.bs.dropdown', function() {
    document.documentElement.classList.add('overflow-hidden');
    document.body.classList.add('overflow-hidden');
    navMain.classList.add('individual-home-navbar');
  });

  globalHomeLinkDropdownBox.addEventListener('hide.bs.dropdown', function() {
    document.documentElement.classList.remove('overflow-hidden');
    document.body.classList.remove('overflow-hidden');
    navMain.classList.remove('individual-home-navbar');
  });
}
</script>
    <script>
      CURRENT_HOTEL_SLUG = 'address-sky-view';
      var ICL = "en";
      var SSO_CLIENT_ID = "znhNJo7GaCOVfCCEoyIP1HjII8jPL3w84zoluNQQ"
      var SSO_REDIRECT_URI = "https://www.addresshotels.com/en/my-dashboard"
    </script>



    <div class="opac z11"></div>


    <style>
      .container {
        max-width: 1364px;
      }
    </style>

    

<script>
   jQuery(document).ready(function() {
      $('a[rel="noopener noreferrer"]').removeAttr("rel");
   });
</script>



<!----------------------------- Specific Styles and Scripts------------------------------->
<!--<link href="https://www-addresshotels-com.azureedge.net/wp-content/themes/emaar-projects/vendor/css/custom-block.css" rel="stylesheet">
<link rel="stylesheet" href="https://www-addresshotels-com.azureedge.net/wp-content/themes/emaar-projects/vendor/css/individual-home.css">
<script src="https://www-addresshotels-com.azureedge.net/wp-content/themes/emaar-projects/vendor/js/individual-home.js"></script>
-->

<script>
   $(document).ready(function() {

      // window.onscroll = function () {
      //     stickyMenuFunction()
      // };

      // // init Flickity
      // var $carousel = $('.carousel').flickity();

      // //var flkty = $carousel.data('flickity');
      // function stickyMenuFunction() {
      //    if (window.pageYOffset >= 1850 && window.pageYOffset <= 2560) {
      //        // alert('flickity');
      //        $carousel.flickity('next');
      //    }
      // }


   });
</script>




<!-- <header id="top" class="panel snapdiv" data-section-name="top">

     

    
  
</header> -->


<!--end booking --------------------------------------------------------->
<div id="global__individual__template">
   <!-- removed hotel ID 31 for Address Marassi Golf Resort as per request on mail from Sathish and Omkar -->
  <!-- <script>
  function initQuickText() {
    if (window.quickTextDidInit) {
      return false;
    }
    window.quickTextDidInit = true; // flag to ensure script does not get added to DOM more than once.

    var scriptTag = document.createElement('script');
    scriptTag.src = 'https://cdn.quicktext.im/widget.min.js';
    scriptTag.setAttribute("type", "text/javascript");
    scriptTag.setAttribute("async", true);
    scriptTag.setAttribute("data-license", "8QHsG-4I9i");
    document.body.appendChild(scriptTag);
    $(document.body).prepend('<noscript class="quicktext-noscript"></noscript>');
    $(".quicktext-noscript").html(
        `<a href="https://www.quicktext.im/" title="Hotel AI Chabot and Guest Communication">Quicktext hotel chatbot</a>`
    );
  }

  function initQuickTextOnEvent(event) {
    initQuickText();
    event.currentTarget.removeEventListener(event.type, initQuickTextOnEvent); // remove the event listener that got triggered
  }
  document.addEventListener('scroll', initQuickTextOnEvent);
  document.addEventListener('mousemove', initQuickTextOnEvent);
  document.addEventListener('touchstart', initQuickTextOnEvent);
</script> -->



<!-- <div class="important-msg d-flex align-items-center justify-content-between text-lg-center px-lg-5" id="imp-msge"> -->
<!-- <p class="my-0 mx-auto">
       نظرًا لأعمال الصيانة ، سيكون المطعم مغلق من ٣ إلى 8 مايو2025.خلال هذه الفترة، يمكنكم الاستمتاع بوجباتكم في  SoCal في الأوقات التالية :الإفطار من 7:00 إلى 11:00 صباحًا ,الغداء من 12:00 إلى 5:00 مساءً, العشاء من 6:00 إلى 10:30 مساءً. نشكركم مقدمًا على حسن تفهمكم ونتطلع إلى الترحيب بكم في المستقبل.
      </p> -->
<!-- <div>
        <p class=" my-0 mx-auto">Due to scheduled maintenance, The Restaurant will be closed from the 3rd till the 8th of May 2025. In the meantime, you can enjoy all your meals at SoCal – Breakfast: 7:00–11:00 AM, Lunch: 12:00–5:00 PM, and Dinner: 6:00–10:30 PM. Thank you for your understanding, and we look forward to welcoming you back soon!
        </p>
      </div> -->
<!-- <div>
      <a href="#" class="btn close-msg"><i class="fa fa-times"></i></a>
    </div>
  </div> -->




<style>
  #liveToastBtn {
    position: fixed;
    bottom: 20px;
    z-index: 1040;
    right: 20px;
  }

  .important-msg {
    position: absolute;
    z-index: 1050;
    top: 0;
    width: 100%;
    background-color: black;
    color: #fff;
    padding: 10px 21px;
    text-align: center;
    padding-bottom: 0 !important;
  }

  .important-msg p {
    font-size: 15px;
    padding-top: 10px;
    padding-bottom: 10px;
  }

  :lang(ar) .important-msg p {
    padding-top: 20px;
    padding-bottom: 10px;
  }

  .important-msg a {
    color: #fff;
    text-decoration: underline;
    font-size: 17px;
  }

  .important-msg p a {
    color: #fff;
    text-decoration: underline;
  }

  .important-msg .btn {
    color: #fff;
  }

  @media (max-width:768px) {
    .important-msg {
      flex-direction: row;
      align-items: start !important;
      text-align: center;
    }

    .important-msg p,
    :lang(ar) .important-msg p {
      padding-top: 0px;
    }
  }
</style>
<script>
  $(document).ready(() => {
    calculateTop()
    $('.close-msg').click(function() {
      $('#imp-msge').removeClass('d-flex').addClass('d-none');
      calculateTop();
    })

    function calculateTop() {
      if (($('#imp-msge').length)) {
        if (!$('#imp-msge').hasClass('d-none')) {
          var disclaimerHeight = $('#imp-msge').outerHeight(true);
          console.log("disclaimerHeight=" + disclaimerHeight);
          var windowHeight = $(window).height();
          console.log("windowHeight=" + windowHeight)
          var adjustedHeight = windowHeight - disclaimerHeight;
          $('.fullscreen-hero-banner-booking-widget').css('margin-top', disclaimerHeight);

          if ($(window).width() > 576) {
            $('.fullscreen-hero-banner-booking-widget').css('height', adjustedHeight + 'px');
            $('#hero-vid').css('height', adjustedHeight + 'px');
          } else {
            $('#bootscore-navbar-collapsedd').css({
              'margin-top': '15px',
              'max-height': '85vh'
            });
            $('#right-side-elements').css('margin-bottom', '200px');
            $('.container.hotel_resorts_dropdown').css('margin-bottom', '150px');
            $('.navbar.menu-open').css({
              'overflow-y': '',
              'overflow-x': ''
            });
          }
        } else {
          console.log("into else statement")
          $('.fullscreen-hero-banner-booking-widget').css({
            'margin-top': '',
            'height': ''
          });
          $('#hero-vid').css('height', '');
        }
      }
    }


    $(window).on('resize', function() {
      calculateTop();
    });
  });
</script>

<div class="container-fluid position-relative fullscreen-hero-banner-booking-widget">
  <div class="row">
    <div id="video-overlay"></div>
    
      <style>
        @media (min-width: 768px) {
          #hero-vid {
            background-image: url(../../../wp-content/uploads/2021/02/Address-SkyView-V1.mp4.jpg);
          }
        }

        @media (max-width: 767px) {
          /* Change Here Harshit 18th Oct,2022 */

          video#hero-vid:-webkit-full-screen {
            width: 100%;
            height: 100%;
            max-height: 100%;
            object-fit: cover;
          }

          video#hero-vid {
            width: 100%;
            max-height: 100%;
            object-fit: cover;
          }

          /* Change Ends Harshit 18th Oct,2022 */
          #hero-vid {
            background-image: url(../../../wp-content/uploads/2021/02/Address-SkyView-V1.mp4-1.jpg);
          }

          #nav-main {
            top: 0 !important;
          }
        }
      </style>

      <video class="visible-desktop individual-homepage-video" id="hero-vid" autoplay="" loop="" muted="" playsinline="">
                  <source type="video/mp4" media="all and (min-width: 768px)" src="/dependencies/media/wp-content/uploads/2023/08/WEB-Wide-1_2.mp4">
                  <source type="video/mp4" media="all and (max-width: 767px)" src="/dependencies/media/wp-content/uploads/2023/08/WEB-Mobile-1_2.mp4">
              </video>


    
<div class="container-fluid individual-homepage-content-section">
  <div class="container mx-auto">
    <h1 class="display-2-48 text-capitalize mb-2 pb-1 text-white h2">Address Sky View</h1>
    <p class="mb-2 homepage-content-description text-white d-none"></p>
    <p class="mb-2 homepage-content-address ">Sheikh Mohammed Bin Rashed Boulevard Downtown Dubai, PO Box 111969 Dubai, UAE</p>
    <p class="mb-0 homepage-content-conact-links">
      <a class="bluelink secondary-medium" href="tel:+97148738888">
        <span class="dir-ltr">+97148738888</span>
      </a>
      <a href="https://www.google.co.in/maps/place/Address+Sky+View/@25.2015914,55.2683494,17z/data=!3m1!4b1!4m8!3m7!1s0x3e5f43859586ed13:0xe1103d783cf1f2f1!5m2!4m1!1i2!8m2!3d25.2015914!4d55.2705381?hl=en" id="pseudo_map_link" target="_blank">Location      </a>
      <a href="#contact-details">Contact Us</a>
    </p>
  </div>
</div>  </div>
</div>
<script type="text/javascript">
  // Sing-in & sign-up page messaages


  var required_text = "This field is required";
  var mob_already_exist = "Looks like your mobile number already exists";
  var ubymaartext = "Use your U by Emaar credentials to sign in.";
  var welbacktext = "Welcome Back";
  var signintext = "Sign In";
  var valid_otp = "Please Enter valid otp";
  var error_only_digits = "Mobile number can only contain digits";
  var error_min_dig_7 = "Minimum allowed digits is 7";
  var error_min_dig_10 = "Maximum allowed digits is 15";
  var strong_pwd = "Please enter a strong password";
  var valid_email = "Please enter a valid Email.";
  var valid_name = "Please enter valid name.";
  var success_account_created = "Thank you! your account had been successfully created.";
  var opt_resent = "OTP has been resent!";

  // Sing-in & sign-up page messaages

  // Sing-in & sign-up Api error page messaages

  var security_token_error = "Could not set security token. Please reload and try again.";
  var server_reach_error = "Could not reach server. Please try again later.";
  var unknown_error = "We are facing an unknown error. Please try again later.";

  // Sing-in & sign-up Api error page messaages


  // Booking Modal & Widget Month&Day

  var enter_code_var = "Enter code";
  var code_applied_var = "Code applied";
  var codes_applied_var = "Codes applied";
  var hotel_modalTitle = "Select a hotel and check availability";
  var modal_title = "Search available hotels for this offer";
  var modal_title_rooms = "Select your check-in & check-out dates";
  var loading_price_var = "Loading all prices";
  var price_var = "All prices are displayed in";
  var child_text = "Child";
  var children_text = "Children";
  var adult_text = "Adult";
  var adults_text = "Adults";
  var nightVar = "Night";
  var nightsVar = "Nights";
  var minLength_error_message = "The selected dates requires a minimum of";
  // var minLength_error_message = "This offer requires a reservation of at least";
  var maxLength_error_message = "The selected dates requires a maximum of";
  var nights_stay_var = "nights stay.";
  // var nights_stay_var = "nights.";
  var select_these_dates_var = "Select these dates";
  var select_a_checkout_date_var = "Select a checkout date";
  var all_hotels_var = "All Hotels";

  //multiroom changes
  var room_var = "Room";
  var add_room_var = "Add Room";
  var view_detail_var = "View Detail";
  var hide_detail_var = "Hide Detail";


  // Months
  var month_january = "January";
  var month_february = "February";
  var month_march = "March";
  var month_april = "April";
  var month_may = "May";
  var month_june = "June";
  var month_july = "July";
  var month_August = "August";
  var month_september = "September";
  var month_october = "October";
  var month_november = "November";
  var month_december = "December";

  // var month_sunday ="";
  // var month_monday ="";
  // var month_tuesday ="";
  // var month_wednesday ="";
  // var month_thursday ="";
  // var month_friday ="";
  // var month_saturday ="";


  // dine modal
  var people_var = "people";
  var seating_var = "Seating";
  var reservDetails = "Reservation Details";
  var email_var = "Please enter a valid email address";
  var none_var = "None";

  // Booking Modal & Widget Month&Day


  // ModifyBooking Messages

  var invalid_confirmation = "Invalid Confirmation Number";
  var invalid_last_name = "Invalid Last Name";
  var select_hotel_name = "Select hotel";
  var select_resturant_name = "Select resturant";
  var invalid_email = "Invalid Email";
  // ModifyBooking Messages
  var no_upcoming_booking = "No Upcoming Bookings";

  // Akshay | 04-08-22
  var time_format;

  if (ICL == 'de') {
    time_format = 'HH:mm [Uhr]';
  } else if (ICL == 'fr' || ICL == 'ru') {
    time_format = 'HH:mm';
  } else {
    time_format = 'h:mm a';
  }


  // fetch-Global-offers-page translation
  var ube_member_only_text = "U By Emaar Members Only";
  var offer_applied_text = "Offer Applied";
  var offer_name_text = "Offer Name";

  // strings need to be translated for backend


  var hotelandresorts_Text = "Hotels & Resorts";

  // For new booking widget
  var checkin_text = "Check In - Check Out";
  var checkinmobile_text = "Check In - Out";
  var calendar_minerror = "The selected dates requires a minimum of 1 nights stay.";
  var checkout_unavail = "This date is unavailable as a Check-out Date";
  var checkin_unavail = "This date is unavailable as a Check-in Date";
  var view_all_hotel = "View All Hotels";

  var from_text = "from";
  var soldout_text = "Sold Out";
  var view_rooms_text = "View Rooms";
  var error_text = "We are having trouble in fetching data right now. Please try again later";


  var view_more_rates = "View More Rates";
  var view_less_rates = "View Less Rates";
  var currency_prefix = "Currency:";
  var hideFilterText = "Hide Filter";
  var moreFilterText = "More Filter";
</script>

<!-- ""; -->
<script>
  modal_title = "Search available hotels for this offer";
  preset_hotel_id = "18";
  preset_hotel_name = "Address Sky View";
  templateName = "templates/individual-home-custom-template.php";
  requestArray = '[]';
  hotel_timezone_offset = [{"IbuId":"61","timezone_offset":240},{"IbuId":"54","timezone_offset":240},{"IbuId":"52","timezone_offset":240},{"IbuId":"51","timezone_offset":240},{"IbuId":"42","timezone_offset":240},{"IbuId":"50","timezone_offset":240},{"IbuId":"","timezone_offset":240},{"IbuId":"40","timezone_offset":240},{"IbuId":"38","timezone_offset":180},{"IbuId":"35","timezone_offset":240},{"IbuId":"29","timezone_offset":240},{"IbuId":"4","timezone_offset":240},{"IbuId":"31","timezone_offset":120},{"IbuId":"18","timezone_offset":240},{"IbuId":"17","timezone_offset":240},{"IbuId":"2","timezone_offset":240},{"IbuId":"5","timezone_offset":240},{"IbuId":"3","timezone_offset":240},{"IbuId":"10","timezone_offset":240},{"IbuId":"1","timezone_offset":240}];
  minimun_timezone_offset = 120;
  roomIndex = "";
</script>


<div class="new-booking-widget ibu">
  <div class="widget-ui justify-content-start justify-content-xl-between d-flex position-relative">
          <div class="hotel-selector flex-column justify-content-start d-none widget-border-left" role="button" tabindex="0" data-id="">
        <div class="hotel-selector-title d-flex align-items-center">
                      <!-- <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon pr-1" width="24" height="24" style="width:1em;height:1em;vertical-align:middle;fill:currentColor;overflow:hidden" viewBox="0 0 1024 1024">
              fa-map-marker-alt            </svg> -->
            <i class="fal fa-map-marker-alt pr-2 widget-icons"></i>
                    <span class="hotel-selector-title-text">
            Choose Hotels          </span>
        </div>
        <div class="d-flex justify-content-between flex-row">
          <p class="selected-hotel m-0 mt-1">
            All Hotels          </p>
                  </div>
      </div>
          <div class="date-selector flex-column justify-content-start d-flex w-100 " role="button" tabindex="0" data-date="">
        <div class="date-selector-title d-flex align-items-center">
                      <!-- <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon pr-1" width="24" height="24" style="width:1em;height:1em;vertical-align:middle;fill:currentColor;overflow:hidden" viewBox="0 0 1024 1024">
              fa-calendar            </svg> -->
            <i class="fal fa-calendar pr-2 widget-icons"></i>
                    <span class="date-selector-title-text">
            Dates          </span>
        </div>
        <div class="d-flex justify-content-between flex-row">
          <p class="selected-date m-0 mt-1">
            Check In &#8211; Check Out          </p>
                    <span class="night_var_widget selected-night-count d-none mt-1"></span>
                  </div>
      </div>
          <div class="guest-selector flex-column justify-content-start d-flex w-100 widget-border-left" role="button" tabindex="0" data-guest="">
        <div class="guest-selector-title d-flex align-items-center">
                      <!-- <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon pr-1" width="24" height="24" style="width:1em;height:1em;vertical-align:middle;fill:currentColor;overflow:hidden" viewBox="0 0 1024 1024">
              fa-user-friends            </svg> -->
            <i class="fal fa-user-friends pr-2 widget-icons"></i>
                    <span class="guest-selector-title-text">
            Room and Guests          </span>
        </div>
        <div class="d-flex justify-content-between flex-row">
          <p class="selected-guest m-0 mt-1">
            1 Adult, 0 Child          </p>
                  </div>
      </div>
          <div class="code-selector flex-column justify-content-start d-none d-xl-flex w-100 setwidth widget-border-left" role="button" tabindex="0" data-code="">
        <div class="code-selector-title d-flex align-items-center">
                    <span class="code-selector-title-text">
            Code          </span>
        </div>
        <div class="d-flex justify-content-between flex-row">
          <p class="selected-code m-0 mt-1">
            Enter Code          </p>
                  </div>
      </div>
        <div class="search-button d-none d-xl-flex flex-column justify-content-center p-2 w-100">
      <button class="bg-dark text-white p-auto h-100 findrooms">
        <svg class="button-loader d-none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200px" height="200px" viewbox="0 0 100 100" preserveaspectratio="xMidYMid">
          <circle cx="50" cy="50" fill="none" stroke="#ffffff" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(132.222 50 50)">
            <animatetransform attributename="transform" type="rotate" repeatcount="indefinite" dur="1s" values="0 50 50;360 50 50" keytimes="0;1"></animatetransform>
          </circle>
        </svg>
        Find Rooms      </button>
    </div>

    <div class="hotel-popup bg-grey py-2 px-4 border d-none">
      <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="all" role="button" tabindex="0">
        <!-- <i class="fal fa-map-marker-alt pr-2"></i> -->
        <span>All Hotels</span>
      </p>
      <div class="row">
                              <div class="col-md-8">
                      <div class="body-3 secondary-semibold countryName_heading">
                        United Arab Emirates                      </div>
                      <div class="row no-gutters">
                                                  <div class="individual_hotel_restaurant pr-3 mb-0">
                                                        <div class="body-3 secondary-semibold countryName_subheading">
                              Dubai                            </div>
                                                                                     
                              <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="1" role="button" tabindex="0">Address Downtown</p>
                                                         
                              <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="2" role="button" tabindex="0">Palace Downtown</p>
                                                         
                              <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="4" role="button" tabindex="0">Address Montgomerie</p>
                                                         
                              <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="17" role="button" tabindex="0">Address Dubai Mall</p>
                                                         
                              <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="42" role="button" tabindex="0">Address Creek Harbour</p>
                                                         
                              <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="18" role="button" tabindex="0">Address Sky View, Downtown Dubai</p>
                                                         
                              <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="29" role="button" tabindex="0">Address Beach Resort</p>
                                                         
                              <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="54" role="button" tabindex="0">Palace Dubai Creek Harbour</p>
                                                      </div>
                                                  <div class="individual_hotel_restaurant pr-3 mb-0">
                                                        <div class="body-3 secondary-semibold countryName_subheading">
                              Fujairah                            </div>
                                                                                     
                              <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="40" role="button" tabindex="0">Palace Beach Resort Fujairah</p>
                                                         
                              <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="35" role="button" tabindex="0">Address Beach Resort Fujairah</p>
                                                      </div>
                                              </div>
                    </div>
                                  
                <div class="col-md-4">
                                      <div>
                      <div class="body-3 secondary-semibold countryName_heading">
                        Bahrain                      </div>
                      <div class="row no-gutters">
                                                  <div class="individual_hotel_restaurant mb-0">                           
                                                          <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="50" role="button" tabindex="0">Address Beach Resort Bahrain</p>
                                                      </div>
                                              </div>
                    </div>
                                      <div>
                      <div class="body-3 secondary-semibold countryName_heading">
                        Egypt                      </div>
                      <div class="row no-gutters">
                                                  <div class="individual_hotel_restaurant mb-0">                           
                                                          <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="31" role="button" tabindex="0">Address Marassi Golf Resort</p>
                                                          <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="52" role="button" tabindex="0">Address Beach Resort Marassi</p>
                                                          <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="61" role="button" tabindex="0">Palace Beach Resort</p>
                                                      </div>
                                              </div>
                    </div>
                                      <div>
                      <div class="body-3 secondary-semibold countryName_heading">
                        Saudi Arabia                      </div>
                      <div class="row no-gutters">
                                                  <div class="individual_hotel_restaurant mb-0">                           
                                                          <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="51" role="button" tabindex="0">Address Jabal Omar Makkah</p>
                                                      </div>
                                              </div>
                    </div>
                                      <div>
                      <div class="body-3 secondary-semibold countryName_heading">
                        Turkey                      </div>
                      <div class="row no-gutters">
                                                  <div class="individual_hotel_restaurant mb-0">                           
                                                          <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="38" role="button" tabindex="0">Address Istanbul</p>
                                                      </div>
                                              </div>
                    </div>
                          </div>
      </div>
    </div>
    <div class="date-popup bg-grey d-none individualpage_popup ">
      <div class="stayCalendar pt-4 text-center bg-grey d-none">
        <div class=" calendar-error-msg mb-0" role="alert">
          <p>
          <i class="fal fa-exclamation-triangle px-1"></i>
          <span class="error-message"></span>
          </p>
        </div>
      </div>
      <input class="datepicker d-none">
      <p class="prices-text text-end body-4 font-14 mb-3 pr-4 d-none"></p>
    </div>
    <div class="pax-popup bg-grey py-1 d-none border individualpage_popup">
      <input type="hidden" name="rooms" id="no_of_rooms" value="1">
      <div class="rooms px-3 adult-child-dropdown">
        <div class="room" data-room="1">
          <div class="room-header align-items-center d-none mt-3">
            <div class="room-title">Room 1</div>
            <span class="btn-remove-room" aria-label="Remove room">
              <i class="fal fa-trash-alt trash_widget"></i>
            </span>
          </div>
          <div class="guest-counter d-flex justify-content-between align-items-center py-1 my-3">
            <label class="guest-label mb-0">Adult (12+)</label>
            <div class="counter-box d-flex align-items-center">
              <span class="btn_counter ag-minus disabled" data-action="minus">
                <i class="fal fa-minus-circle"></i>
              </span>
              <span class="adult-counter count b4">1</span>
              <span class="btn_counter ag-plus" data-action="plus">
                <i class="fal fa-plus-circle"></i>
              </span>
            </div>
          </div>
          <div class="guest-counter d-flex justify-content-between align-items-center py-1 my-3">
            <label class="guest-label mb-0">Children (4-11)</label>
            <div class="counter-box d-flex gap-1 align-items-center">
              <span class="btn_counter cg-minus disabled" data-action="minus">
                <i class="fal fa-minus-circle"></i>
              </span>
              <span class="child-counter count b4">0</span>
              <span class="btn_counter cg-plus" data-action="plus">
                <i class="fal fa-plus-circle"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="addRoomWidget px-3 mt-3 mb-2">
        <div class="roomcircle addroom desktop">
          <i class="fas fa-plus"></i>
          <span>Add a room</span>
        </div>
      </div>
      <div class="book_for_someone_else_row pl-3" style="display:none;">
        <div colspan="4">
          <form class="go-bottom">
            <label class="checkbox book_for_someone_else_label">
              I am booking for someone else.              <input type="checkbox" name="book_for_someone_else_checkbox" id="book_for_someone_else_checkbox">
              <span name="agree" class="geekmark mandatory"></span>
            </label>
          </form>
        </div>
      </div>
    </div>
    <div class="code-popup bg-grey p-4 d-none border stay_promo_dropdown individualpage_popup">
      <div class="promocode-info-box-main">
        <p class="mb-0">Enter Code</p>
        <i class="fal fa-info-circle promocode-box-info-icon"></i>
        <div class="promocode-info-box bg-grey d-none">
          <p>You can apply upto two codes at a time as below combination. e.g.</p>
          <p>IATA +Promo Code </p>
          <p>IATA + Corporate Code</p>
        </div>
      </div>
      <p class="promocode-invalid-message d-none click_error_widget error_label" id="">You can&#8217;t apply more than two codes.</p>
      <p class="promocode-code-warning d-none iata_error_widget error_label" id="">You can&#8217;t apply two codes without IATA code combination.</p>
      <p class="promocode-code-warning d-none group_error_widget error_label" id="">This combination is not valid.</p>
      <hr>
      <ul>
        <!---------------IATA Code desktop--------------------->
        <label class="checkbox IATACheckbox_widget">
          <input type="checkbox" id="chkPassportIATA_widget" class="Checkbox-input chkPassportIATA_widget" autocomplete="off"><span class="geekmark">
          </span>IATA code        </label>

        <div class="promocode-input-code-box promocode-input-code-box-desktop iatacode_input_widget">
          <i class="fas fa-check-circle promocode-validation-icon promocode-valid-icon valid_widget iatacode_valid d-none"></i>
          <i class="fas fa-times-circle promocode-validation-icon promocode-invalid-icon invalid_widget iatacode_invalid d-none"></i>
          <input type="text" placeholder="Enter IATA code" class="iatacode_widget inputfield_widget" autocomplete="off">
          <button class="btn promocode-apply-btn iatacode_apply_btn_widget widget_apply_btn" id="" disabled="">
            <svg class="button-loader d-none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200px" height="200px" viewbox="0 0 100 100" preserveaspectratio="xMidYMid">
              <circle cx="50" cy="50" fill="none" stroke="#ffffff" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(132.222 50 50)">
                <animatetransform attributename="transform" type="rotate" repeatcount="indefinite" dur="1s" values="0 50 50;360 50 50" keytimes="0;1"></animatetransform>
              </circle>
            </svg>
            Apply          </button>
          <i class="fal fa-trash-alt promocode-trash-icon trash_widget iatacode_trash d-none"></i>
        </div>
        <p class="promocode-invalid-message iatacode_error error_widget d-none"></p>

        <!---------------Corporate Code--------------------->
        <label class="checkbox CorporateCheckbox_widget">
          <input type="checkbox" id="chkPassportCorporate_widget" class="Checkbox-input chkPassportCorporate_widget" autocomplete="off">
          <span class="geekmark"></span>Corporate code        </label>

        <div class="promocode-input-code-box promocode-input-code-box-desktop corporatecode_input_widget">
          <i class="fas fa-check-circle promocode-validation-icon promocode-valid-icon corporatecode_valid valid_widget d-none"></i>
          <i class="fas fa-times-circle promocode-validation-icon promocode-invalid-icon corporatecode_invalid invalid_widget d-none"></i>
          <input type="text" placeholder="Enter corporate code" class="corporatecode_widget inputfield_widget" autocomplete="off">
          <button class="btn promocode-apply-btn corporatecode_apply_btn_widget widget_apply_btn" disabled="">
            <svg class="button-loader d-none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200px" height="200px" viewbox="0 0 100 100" preserveaspectratio="xMidYMid">
              <circle cx="50" cy="50" fill="none" stroke="#ffffff" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(132.222 50 50)">
                <animatetransform attributename="transform" type="rotate" repeatcount="indefinite" dur="1s" values="0 50 50;360 50 50" keytimes="0;1"></animatetransform>
              </circle>
            </svg>
            Apply          </button>
          <i class="fal fa-trash-alt promocode-trash-icon corporatecode_trash trash_widget d-none"></i>
        </div>
        <p class="promocode-invalid-message corporatecode_error error d-none"></p>
        <!---------------Promo Code--------------------->
        <label class="checkbox promocodeCheckbox PromoCheckbox_widget">
          <input type="checkbox" id="chkPassportPromo_widget" class="Checkbox-input chkPassportPromo_widget" autocomplete="off">
          <span class="geekmark"></span>Promo code        </label>

        <div class="promocode-input-code-box promocode-input-code-box-desktop promocode_input_widget">
          <i class="fas fa-check-circle promocode-validation-icon promocode-valid-icon  valid_widget d-none"></i>
          <i class="fas fa-times-circle promocode-validation-icon promocode-invalid-icon promocode_invalid invalid_widget d-none"></i>
          <input type="text" placeholder="Enter promo code" class="promocode_widget inputfield_widget" autocomplete="off">
          <button class="btn promocode-apply-btn promocode_apply_btn_widget widget_apply_btn" disabled="">
            <svg class="button-loader d-none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200px" height="200px" viewbox="0 0 100 100" preserveaspectratio="xMidYMid">
              <circle cx="50" cy="50" fill="none" stroke="#ffffff" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(132.222 50 50)">
                <animatetransform attributename="transform" type="rotate" repeatcount="indefinite" dur="1s" values="0 50 50;360 50 50" keytimes="0;1"></animatetransform>
              </circle>
            </svg>
            Apply          </button>
          <i class="fal fa-trash-alt promocode-trash-icon promocode_trash trash_widget d-none"></i>
        </div>
        <p class="promocode-invalid-message promocode_error error d-none"></p>

        <!---------------Group Code--------------------->
        <label class="checkbox groupCheckbox GroupCheckbox_widget">
          <input type="checkbox" id="chkPassportGroup_widget" class="Checkbox-input chkPassportGroup_widget" autocomplete="off">
          <span class="geekmark"></span>Group code        </label>

        <div class="promocode-input-code-box promocode-input-code-box-desktop groupcode_input_widget">
          <i class="fas fa-check-circle promocode-validation-icon promocode-valid-icon groupcode_valid valid_widget d-none"></i>
          <i class="fas fa-times-circle promocode-validation-icon promocode-invalid-icon groupcode_invalid invalid_widget d-none" id=""></i>
          <input type="text" placeholder="Enter group code" class="groupcode_widget inputfield_widget" autocomplete="off">
          <button class="btn promocode-apply-btn groupcode_apply_btn_widget widget_apply_btn" disabled="">
            <svg class="button-loader d-none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200px" height="200px" viewbox="0 0 100 100" preserveaspectratio="xMidYMid">
              <circle cx="50" cy="50" fill="none" stroke="#ffffff" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(132.222 50 50)">
                <animatetransform attributename="transform" type="rotate" repeatcount="indefinite" dur="1s" values="0 50 50;360 50 50" keytimes="0;1"></animatetransform>
              </circle>
            </svg>
            Apply          </button>
          <i class="fal fa-trash-alt promocode-trash-icon groupcode_trash trash_widget d-none" id=""></i>
        </div>
        <p class="promocode-invalid-message groupcode_error error d-none" id=""></p>
      </ul>
    </div>


    <!-- create a popup for mobnile device -->
    <div class="mobile-popup-wrapper">
      <div class="d-none mobile-hotel-selector">
        <div class="mobile-popup-header">
          <div class="d-flex justify-content-between align-items-center mb-4">
            <p class="mb-0">Select a hotel &amp; check availability</p>
            <span class="close-mobile-popup">
              <i class="fal fa-times"></i>
            </span>
          </div>
          <div class="d-flex align-items-center">
            <i class="fal fa-map-marker-alt pr-2"></i>
            <span class="hotel-selector-title-text">All Hotels</span>
          </div>
        </div>
        <div class="mobile-popup-hotel-body m-3 px-3">
          <p class="dropdown-item hotel_list_item mb-0 px-0" data-id="all" role="button" tabindex="0">
            <!-- <i class="fal fa-map-marker-alt pr-2"></i> -->
            <span>All Hotels</span>
          </p>
                              <!-- <div class="width-75"> -->
                      <div class="body-3 secondary-semibold countryName_heading">
                        United Arab Emirates                      </div>
                      <div class="row no-gutters">
                                                  <div class="individual_hotel_restaurant">
                                                          <div class="body-3 secondary-semibold ">
                                Dubai                              </div>
                                                                                     
                               <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="1" role="button" tabindex="0">Address Downtown</p>
                                                         
                               <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="2" role="button" tabindex="0">Palace Downtown</p>
                                                         
                               <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="4" role="button" tabindex="0">Address Montgomerie</p>
                                                         
                               <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="17" role="button" tabindex="0">Address Dubai Mall</p>
                                                         
                               <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="42" role="button" tabindex="0">Address Creek Harbour</p>
                                                         
                               <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="18" role="button" tabindex="0">Address Sky View, Downtown Dubai</p>
                                                         
                               <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="29" role="button" tabindex="0">Address Beach Resort</p>
                                                         
                               <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="54" role="button" tabindex="0">Palace Dubai Creek Harbour</p>
                                                      </div>
                                                  <div class="individual_hotel_restaurant">
                                                          <div class="body-3 secondary-semibold ">
                                Fujairah                              </div>
                                                                                     
                               <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="40" role="button" tabindex="0">Palace Beach Resort Fujairah</p>
                                                         
                               <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="35" role="button" tabindex="0">Address Beach Resort Fujairah</p>
                                                      </div>
                                              </div>
                    <!-- </div> -->
                                      <!-- <div class="width-75"> -->
                      <div class="body-3 secondary-semibold countryName_heading">
                        Bahrain                      </div>
                      <div class="row no-gutters">
                                                  <div class="individual_hotel_restaurant">
                                                                                     
                               <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="50" role="button" tabindex="0">Address Beach Resort Bahrain</p>
                                                      </div>
                                              </div>
                    <!-- </div> -->
                                      <!-- <div class="width-75"> -->
                      <div class="body-3 secondary-semibold countryName_heading">
                        Egypt                      </div>
                      <div class="row no-gutters">
                                                  <div class="individual_hotel_restaurant">
                                                                                     
                               <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="31" role="button" tabindex="0">Address Marassi Golf Resort</p>
                                                         
                               <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="52" role="button" tabindex="0">Address Beach Resort Marassi</p>
                                                         
                               <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="61" role="button" tabindex="0">Palace Beach Resort</p>
                                                      </div>
                                              </div>
                    <!-- </div> -->
                                      <!-- <div class="width-75"> -->
                      <div class="body-3 secondary-semibold countryName_heading">
                        Saudi Arabia                      </div>
                      <div class="row no-gutters">
                                                  <div class="individual_hotel_restaurant">
                                                                                     
                               <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="51" role="button" tabindex="0">Address Jabal Omar Makkah</p>
                                                      </div>
                                              </div>
                    <!-- </div> -->
                                      <!-- <div class="width-75"> -->
                      <div class="body-3 secondary-semibold countryName_heading">
                        Turkey                      </div>
                      <div class="row no-gutters">
                                                  <div class="individual_hotel_restaurant">
                                                                                     
                               <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="38" role="button" tabindex="0">Address Istanbul</p>
                                                      </div>
                                              </div>
                    <!-- </div> -->
                          </div>

      </div>
      <div class="d-none mobile-date-selector">
        <div class="mobile-popup-header">
          <div class="d-flex justify-content-between align-items-center mb-4">
            <p class="mb-0">Select a date &amp; check availability</p>
            <span class="close-mobile-popup">
              <i class="fal fa-times"></i>
            </span>
          </div>
          <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
              <i class="fal fa-calendar pr-2"></i>
              <span class="date-selector-title-text">Check In &#8211; Check Out</span>
            </div>
            <div class="date-clear-btn cursor-pointer d-none">Clear</div>
          </div>
        </div>
        <div class="mobile-popup-date-body p-4">
          <div class="stayCalendar pt-4 text-center bg-grey d-none">
            <div class=" calendar-error-msg mb-0" role="alert">
              <p>
              <i class="fal fa-exclamation-triangle px-1"></i>
              <span class="error-message"></span>
              </p>
            </div>
          </div>
          <input class="datepicker d-none">
          <div class="select-date-button-wrapper button-wrapper mb-3 pb-1">
            <button class="btn primary-btn w-100 select-date-button d-none">Select these dates</button>
          </div>
          <span class="currency-text position-absolute w-100 text-center py-2 d-none"></span>
        </div>
      </div>
      <div class="d-none mobile-guest-selector">
        <div class="mobile-popup-header">
          <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="d-flex align-items-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left backtoguestwidget" viewbox="0 0 16 16">
                <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0"></path>
              </svg>
              <p class="mb-0 ml-3">Rooms &amp; Guests</p>
            </div>
            <span class="close-mobile-popup">
              <i class="fal fa-times"></i>
            </span>
          </div>
          <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
              <i class="fal fa-user-friends pr-2"></i>
              <span class="guest-selected-title-text">1 Adult, 0 Children</span>
            </div>
            <div class="guest-clear-btn cursor-pointer">Clear</div>
          </div>
        </div>
        <div class="mobile-popup-guest-body p-3 d-flex flex-column justify-content-between">
          <div class="overflow-wrapper">
            <div class="d-flex flex-column pt-2 rooms">
              <div class="room mb-2 bg-grey rounded-8px py-2" data-room="1">
                <div class="px-4 room-header mt-2 align-items-center d-none">
                  <div class="room-title">Room 1</div>
                  <span class="btn-remove-room" aria-label="Remove room">
                    <i class="fal fa-trash-alt trash_widget"></i>
                  </span>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="guest-counter w-100 py-1">
                    <label class="guest-label mb-2 px-4">Adults (12+)</label>
                    <div class="counter-box d-flex align-items-center justify-content-between px-4">
                      <span class="btn_counter ag-minus disabled" data-action="minus">
                        <i class="fal fa-minus-circle"></i>
                      </span>
                      <span class="adult-counter count b4">1</span>
                      <span class="btn_counter ag-plus" data-action="plus">
                        <i class="fal fa-plus-circle"></i>
                      </span>
                    </div>
                  </div>
                  <div style="background: #25282D29; width: 1px; height: 48px;"></div>
                  <div class="guest-counter w-100 py-1">
                    <label class="guest-label mb-2 px-4">Children (4-11)</label>
                    <div class="counter-box d-flex align-items-center justify-content-between px-4">
                      <span class="btn_counter cg-minus disabled" data-action="minus">
                        <i class="fal fa-minus-circle"></i>
                      </span>
                      <span class="child-counter count b4">0</span>
                      <span class="btn_counter cg-plus" data-action="plus">
                        <i class="fal fa-plus-circle"></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="addRoomWidget py-2 mb-4 bg-grey rounded-8px">
              <div class="roomcircle addroom mx-3 my-1 px-1 mobile">
                <i class="fas fa-plus"></i>
                <span>Add a room</span>
              </div>
            </div>
            <div class="book_for_someone_else_row pl-2 pt-2" style="display:none;">
            <div colspan="4">
              <form class="go-bottom">
                <label class="checkbox book_for_someone_else_label">
                  I am booking for someone else.                  <input type="checkbox" name="book_for_someone_else_checkbox" id="book_for_someone_else_checkbox">
                  <span name="agree" class="geekmark mandatory"></span>
                </label>
              </form>
            </div>
            </div>
          </div>
          <div class="button-wrapper">
            <button class="btn primary-btn w-100 mobile-guest-selector-done">Done</button>
          </div>
        </div>
      </div>
      <div class="d-none mobile-code-selector">
        <div class="mobile-popup-header">
          <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="d-flex align-items-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left backtocodewidget" viewbox="0 0 16 16">
                <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0"></path>
              </svg>
              <p class="mb-0 ml-3">Select a Code type</p>
            </div>
            <span class="close-mobile-popup">
              <i class="fal fa-times"></i>
            </span>
          </div>
          <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
              <span class="code-selected-title-text">Enter Code</span>
              <i class="fal fa-info-circle promocode-box-info-icon"></i>
              <div class="promocode-info-box promocode-info-box-mobile bg-grey d-none">
                <div>You can apply upto two codes at a time as below combination. e.g.</div>
                <div>IATA +Promo Code </div>
                <div>IATA + Corporate Code</div>
              </div>
            </div>
            <div class="code-clear-btn cursor-pointer">Clear</div>
          </div>
        </div>
        <div class="mobile-popup-code-body p-4 d-flex flex-column justify-content-between">
          <div class="overflow-wrapper p-3 bg-grey rounded-8px">
            <p class="promocode-invalid-message d-none click_error_widget error_label" id="">You can&#8217;t apply more than two codes.</p>
            <p class="promocode-code-warning d-none iata_error_widget error_label" id="">You can&#8217;t apply two codes without IATA code combination.</p>
            <p class="promocode-code-warning d-none group_error_widget error_label" id="">This combination is not valid.</p>
            <!-- IATA -->
            <label class="checkbox">
              <input type="checkbox" id="chkPassportIATA_widget" class="Checkbox-input chkPassportIATA_widget" autocomplete="off">
              <span class="geekmark"></span>IATA code            </label>
            <div class="promocode-input-code-box promocode-input-code-box-desktop iatacode_input_widget">
              <i class="fas fa-check-circle promocode-validation-icon promocode-valid-icon valid_widget iatacode_valid d-none"></i>
              <i class="fas fa-times-circle promocode-validation-icon promocode-invalid-icon invalid_widget iatacode_invalid d-none"></i>
              <input type="text" placeholder="Enter IATA code" class="iatacode_widget inputfield_widget" autocomplete="off">
              <button class="btn promocode-apply-btn iatacode_apply_btn_widget widget_apply_btn" id="" disabled="">
                <svg class="button-loader d-none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200px" height="200px" viewbox="0 0 100 100" preserveaspectratio="xMidYMid">
                  <circle cx="50" cy="50" fill="none" stroke="#ffffff" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(132.222 50 50)">
                    <animatetransform attributename="transform" type="rotate" repeatcount="indefinite" dur="1s" values="0 50 50;360 50 50" keytimes="0;1"></animatetransform>
                  </circle>
                </svg>
                Apply              </button>
              <i class="fal fa-trash-alt promocode-trash-icon trash_widget iatacode_trash d-none"></i>
            </div>
            <p class="promocode-invalid-message iatacode_error error_widget d-none"></p>
            <!-- Corporate -->
            <label class="checkbox">
              <input type="checkbox" id="chkPassportCorporate_widget" class="Checkbox-input chkPassportCorporate_widget" autocomplete="off">
              <span class="geekmark"></span>Corporate code            </label>
            <div class="promocode-input-code-box promocode-input-code-box-desktop corporatecode_input_widget">
              <i class="fas fa-check-circle promocode-validation-icon promocode-valid-icon corporatecode_valid valid_widget d-none"></i>
              <i class="fas fa-times-circle promocode-validation-icon promocode-invalid-icon corporatecode_invalid invalid_widget d-none"></i>
              <input type="text" placeholder="Enter corporate code" class="corporatecode_widget inputfield_widget" autocomplete="off">
              <button class="btn promocode-apply-btn corporatecode_apply_btn_widget widget_apply_btn" disabled="">
                <svg class="button-loader d-none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200px" height="200px" viewbox="0 0 100 100" preserveaspectratio="xMidYMid">
                  <circle cx="50" cy="50" fill="none" stroke="#ffffff" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(132.222 50 50)">
                    <animatetransform attributename="transform" type="rotate" repeatcount="indefinite" dur="1s" values="0 50 50;360 50 50" keytimes="0;1"></animatetransform>
                  </circle>
                </svg>
                Apply              </button>
              <i class="fal fa-trash-alt promocode-trash-icon corporatecode_trash trash_widget d-none"></i>
            </div>
            <p class="promocode-invalid-message corporatecode_error error d-none"></p>
            <!-- Promotion -->
            <label class="checkbox">
              <input type="checkbox" id="chkPassportPromo_widget" class="Checkbox-input chkPassportPromo_widget" autocomplete="off">
              <span class="geekmark"></span>Promo code            </label>
            <div class="promocode-input-code-box promocode-input-code-box-desktop promocode_input_widget">
              <i class="fas fa-check-circle promocode-validation-icon promocode-valid-icon  valid_widget d-none"></i>
              <i class="fas fa-times-circle promocode-validation-icon promocode-invalid-icon promocode_invalid invalid_widget d-none"></i>
              <input type="text" placeholder="Enter promo code" class="promocode_widget inputfield_widget" autocomplete="off">
              <button class="btn promocode-apply-btn promocode_apply_btn_widget widget_apply_btn" disabled="">
                <svg class="button-loader d-none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200px" height="200px" viewbox="0 0 100 100" preserveaspectratio="xMidYMid">
                  <circle cx="50" cy="50" fill="none" stroke="#ffffff" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(132.222 50 50)">
                    <animatetransform attributename="transform" type="rotate" repeatcount="indefinite" dur="1s" values="0 50 50;360 50 50" keytimes="0;1"></animatetransform>
                  </circle>
                </svg>
                Apply              </button>
              <i class="fal fa-trash-alt promocode-trash-icon promocode_trash trash_widget d-none"></i>
            </div>
            <p class="promocode-invalid-message promocode_error error d-none"></p>
            <!-- Group Code -->
            <label class="checkbox">
              <input type="checkbox" id="chkPassportGroup_widget" class="Checkbox-input chkPassportGroup_widget" autocomplete="off">
              <span class="geekmark"></span>Group code            </label>
             <div class="promocode-input-code-box promocode-input-code-box-desktop groupcode_input_widget">
                <i class="fas fa-check-circle promocode-validation-icon promocode-valid-icon groupcode_valid valid_widget d-none"></i>
                <i class="fas fa-times-circle promocode-validation-icon promocode-invalid-icon groupcode_invalid invalid_widget d-none" id=""></i>
                <input type="text" placeholder="Enter group code" class="groupcode_widget inputfield_widget" autocomplete="off">
                <button class="btn promocode-apply-btn groupcode_apply_btn_widget widget_apply_btn" disabled="">
                  <svg class="button-loader d-none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200px" height="200px" viewbox="0 0 100 100" preserveaspectratio="xMidYMid">
                    <circle cx="50" cy="50" fill="none" stroke="#ffffff" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(132.222 50 50)">
                      <animatetransform attributename="transform" type="rotate" repeatcount="indefinite" dur="1s" values="0 50 50;360 50 50" keytimes="0;1"></animatetransform>
                    </circle>
                  </svg>
                  Apply                </button>
                <i class="fal fa-trash-alt promocode-trash-icon groupcode_trash trash_widget d-none" id=""></i>
              </div>
              <p class="promocode-invalid-message groupcode_error error d-none" id=""></p>
          </div>
          <div class="button-wrapper mt-3">
            <button class="btn primary-btn w-100 selected-code-done">Done</button>
          </div>
        </div>
      </div>
      <div class="d-none mobile-bookingwidget-selector">
        <div class="mobile-popup-header">
          
          <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="d-flex align-items-center">
              <p class="mb-0">Search</p>
            </div>
            <span class="close-mobile-popup">
              <i class="fal fa-times"></i>
            </span>
          </div>
          <div class="d-flex justify-content-end align-items-center">
            <div class="widget-clear-btn cursor-pointer">Clear</div>
          </div>
        </div>
        
        <div class="mobile-popup-bookingwidget-body pb-3 px-3 d-flex flex-column justify-content-between">
          <div class="mobile-bookingwidget-selector overflow-wrapper bg-grey rounded-8px">
            <div class="hotel-selection m-3">
                <i class="fal fa-map-marker-alt pr-2"></i>
                <span class="hotel-selector-title-text">All Hotels</span>
            </div>
            <hr>
            <div class="date-selection m-3">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                    <i class="fal fa-calendar pr-2"></i>
                    <span class="date-selector-title-text">Check In &#8211; Check Out</span>
                </div>
                <span class="night_var_widget d-none"></span>
              </div>
                 
            </div>
            <hr>
            <div class="guest-selection m-3">
                  <i class="fal fa-user-friends pr-2"></i>
                <span class="guest-selected-title-text">1 Adult, 0 Children</span>
            </div>
            <hr>
            <div class="code-input-selection m-3">
                <span class="code-selected-title-text">Enter Code</span>
            </div>
            
          </div>
          <div class="button-wrapper mt-3">
            <button class="btn primary-btn w-100 findrooms mobile-findrooms">
                <svg class="button-loader d-none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200px" height="200px" viewbox="0 0 100 100" preserveaspectratio="xMidYMid">
                <circle cx="50" cy="50" fill="none" stroke="#ffffff" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(132.222 50 50)">
                  <animatetransform attributename="transform" type="rotate" repeatcount="indefinite" dur="1s" values="0 50 50;360 50 50" keytimes="0;1"></animatetransform>
                </circle>
              </svg>
              Find Rooms            </button>
          </div>
        </div>
       
      </div>

    </div>

    <style>
      .mobile-popup-wrapper .rounded-8px {
        border-radius: 8px;
      }

      .mobile-popup-wrapper .room-title {
        font-weight: 400;
        font-family: "FreightSansProSemibold";
      }

      .mobile-popup-wrapper {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        height: auto;
        background-color: #EBEDE8;
        border-top-left-radius: 1rem;
        border-top-right-radius: 1rem;
      }

      .mobile-popup-wrapper .mobile-popup-header {
        padding: 20px;
        border-bottom: 1px solid #25282D29;
      }
      .mobile-popup-wrapper .mobile-bookingwidget-selector .mobile-popup-header {
        padding: 20px;
        border-bottom: unset;
      }

      .mobile-popup-wrapper .mobile-popup-header p {
        font-family: 'Vanitasbold';
        font-size: 24px;
        font-weight: 400;
        line-height: 28.42px;
        letter-spacing: -1px;
        text-align: left;
      }

      .mobile-popup-wrapper .mobile-popup-hotel-body {
        border-radius: .5rem;
        overflow-y: auto;
        height: 100%;
        max-height: 60vh;
        background-color:#F7F8F6;
      }

      .mobile-popup-wrapper .mobile-date-selector .date-clear-btn {
        font-size: 17px;
        font-weight: 400;
        line-height: 19.69px;
        text-align: right;
        color: #483D8B;
      }

      .mobile-popup-wrapper .mobile-date-selector .currency-text {
        font-family: FreightSansProBook-Regular;
        font-size: 12px;
        font-weight: 400;
        line-height: 15.37px;
        text-align: center;
        bottom: 0;
        left: 0;
      }

      .mobile-popup-wrapper .mobile-guest-selector .mobile-popup-guest-body {
        min-height: 50vh;
        max-height: 60vh;
        /* overflow: auto; */
      }
     .mobile-popup-wrapper .mobile-guest-selector .mobile-popup-guest-body .overflow-wrapper {
        overflow: auto;
      }
      .mobile-popup-wrapper .mobile-guest-selector .guest-clear-btn {
        font-size: 17px;
        font-weight: 400;
        line-height: 19.69px;
        text-align: right;
        color: #483D8B;
      }

       .mobile-popup-wrapper .mobile-code-selector .mobile-popup-guest-body {
        min-height: 50vh;
        max-height: 60vh;
        overflow: auto;
      }
      

      .mobile-popup-wrapper .mobile-code-selector .code-clear-btn,.widget-clear-btn {
        font-size: 17px;
        font-weight: 400;
        line-height: 19.69px;
        text-align: right;
        color: #483D8B;
      }
    </style>

  </div>
</div>

<style>
  .new-booking-widget .prevent-select {
    -webkit-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }

  .new-booking-widget {
    width: 100%;
    margin: auto;
    bottom: 11.5rem;
    z-index: 999;
    border-radius: 0.5rem;
    position: relative;
    transition: all 0.3s ease-in-out;
  }
  
@media (min-width: 1200px) {
  .new-booking-widget.ibu {
    bottom: 8rem;
  }
}

  @media (max-width: 1199px) {
    .new-booking-widget {
      bottom: 6rem;
      padding-left: 25px;
      padding-right: 25px;
    }
    .new-booking-widget.ibu{
      bottom: 6rem;
      padding-left: 25px;
      padding-right: 25px;
    }
    .new-booking-widget.active-scroll.fixed-scroll {
      top : unset !important;
      box-shadow: 0.5rem 0 1rem rgba(0, 0, 0, .15) !important;
    }
  }

  .new-booking-widget.active-scroll {
    bottom: 0rem;
    border-bottom: 1px solid #25282D29;
    box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important;
    background-color:#F7F8F6;
    margin-bottom: 30px;
  }

  .new-booking-widget .widget-ui {
    border-radius: 0.5rem;
    width: 100%;
    max-width: 1200px;
    margin: auto;
    background-color:#F7F8F6;
  }

  .new-booking-widget.active-scroll.fixed-scroll {
    position: fixed;
    top: 0px;
    background: white;
    border: 1px solid #25282D29;
    height: fit-content;
    border-radius: 0rem;
    margin: unset;
    box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15);
    background-color:#F7F8F6;
  }

  .new-booking-widget .hotel-selector {
    width: 285px;
    padding: 20px 24px;
    /* border-right: 1px solid #25282D29; */
  }
  .widget-border-right{
     border-right: 1px solid #25282D29;
  }
  .widget-border-left{
     border-left: 1px solid #25282D29;
  }

  @media (max-width: 1199px) {
    .new-booking-widget .hotel-selector {
      width: 50%;
      padding: 12px 16px;
    }
  }

  .new-booking-widget .date-selector {
    width: 323px;
    padding: 20px 24px;
    /* border-right: 1px solid #25282D29; */
  }

  @media (max-width: 1199px) {
    .new-booking-widget .date-selector {
      width: 50%;
      padding: 12px 16px;
      border-right: 1px solid #25282D29;
    }
    .new-booking-widget .date-selector.widget-border-right {
      width: 50%;
      padding: 12px 16px;
      border-right: unset;
    }
    :lang(ar) .new-booking-widget .date-selector.widget-border-right {
        width: 50%;
        padding: 12px 16px;
        border-right: 1px solid #25282D29;
    }
    
    .new-booking-widget .guest-selector.widget-border-left {
         border-left: unset;
        width: 50%;
         padding: 12px 16px;
  }
      .new-booking-widget .guest-selector {
       width: 50%;
      padding: 12px 16px;
    }
    :lang(ar) .new-booking-widget.ibu .date-selector {
        width: 50%;
        padding: 12px 16px;
        border-right: unset;
    }
  }

  .new-booking-widget .guest-selector {
    width: 226px;
    padding: 20px 24px;
    /* border-right: 1px solid #25282D29; */
  }

  .new-booking-widget .code-selector {
    width: 170px;
    padding: 20px 24px;
  }
  .new-booking-widget .code-selector.setwidth {
    max-width : 200px
  }

  .new-booking-widget .search-button {
    width: 200px;
  }

  .new-booking-widget .search-button button {
    border-radius: 0.5rem;
  }

  .new-booking-widget .hotel-popup {
    width: 100%;
    max-width: 900px;
    height: 100%;
    max-height: 800px;
    border-radius: 0.5rem;
    bottom: 103%;
    height: auto;
    position: absolute;
  }

  .new-booking-widget.active-scroll .hotel-popup {
    bottom: unset;
    top: 103%;
  }

  .new-booking-widget .date-popup {
    height: 100%;
    max-height: 800px;
    border-radius: 0.5rem;
    bottom: 103%;
    height: auto;
    position: absolute;
    left: 280px;
  }
  .new-booking-widget .date-popup.individualpage_popup {
    left: unset;
  }

  .new-booking-widget.active-scroll .date-popup {
    bottom: unset;
    top: 103%;
  }

  .new-booking-widget .pax-popup {
    border-radius: 0.5rem;
    bottom: 103%;
    height: auto;
    position: absolute;
    left: 605px;
    width: 300px;
  }
  .new-booking-widget .pax-popup.individualpage_popup {
    left: 340px;
    width: 324px;
  }

  .new-booking-widget.active-scroll .pax-popup {
    bottom: unset;
    top: 103%;
  }

  .new-booking-widget .room-header {
    gap: 8px;
  }

  .new-booking-widget .code-popup {
    border-radius: 0.5rem;
    bottom: 103%;
    height: auto;
    position: absolute;
    left: 830px;
    width: 300px;
  }
  .new-booking-widget .code-popup.individualpage_popup {  
    left: 680px;  
  }

  .new-booking-widget.active-scroll .code-popup {
    bottom: unset;
    top: 103%;
  }
  .hotel-selector-title-text,.date-selector-title-text,.guest-selector-title-text,.code-selector-title-text{
     font-family: FreightSansProBook-Regular;
     font-size:14px;
    line-height : 17.93px;
    color : #25282D;
    font-weight: 400;
    opacity: 80%;
  }
  .widget-icons{
    opacity: 60%;
    color : #25282D;
  }
  .selected-hotel ,.selected-date , .selected-guest ,.selected-code,.selected-night-count{
      font-family: FreightSansProMedium;
      font-size:18px;
    line-height : 20.84px;
    color : #25282D;
    font-weight: 400;
  } 
  .mobile-popup-wrapper .hotel-selector-title-text,.mobile-popup-wrapper .date-selector-title-text,.mobile-popup-wrapper .guest-selector-title-text,.mobile-popup-wrapper .code-selector-title-text{
     font-family: FreightSansProBook-Regular;
     font-size:17px;
    line-height : 21.78px;
    color : #25282D;
    font-weight: 400;
    opacity: 1;
  }
  .bg-grey{
    background-color:#F7F8F6;
  }
  :lang(ar) .new-booking-widget .pax-popup {
    left: 297px;
  }
   :lang(ar) .new-booking-widget .code-popup{
    left: 45px;
  }
  :lang(ar) .new-booking-widget .code-popup {
    width: 330px;
  }
   :lang(ar) .new-booking-widget .pax-popup.individualpage_popup {
    left: 536px;
}
 :lang(ar) .new-booking-widget .code-popup.individualpage_popup {
    left: 190px;
}
.mobile-popup-header .promocode-info-box-mobile{
  top: 100px;
  left:100px;
  background-color: #F7F8F6;
}
.code-popup .promocode-info-box{
 background-color: #F7F8F6;
}
.mobile-bookingwidget-selector span.close-mobile-popup {
    margin-right: 12px;
}
.pax-popup {
    overflow-y: auto;
    max-height: 386px;
}
 
.pax-popup::-webkit-scrollbar {
    width: 4px !important;
}
.pax-popup::-webkit-scrollbar-track {
    background-color: #ccc;
}
.pax-popup::-webkit-scrollbar-thumb {
    background-color: #25282d;
    height: 60%;
}
.pax-popup::-webkit-scrollbar {
    width: 4px;
}


@media (max-width: 1400px) and (min-width: 1199px) {
  
  .new-booking-widget .widget-ui {
    width: 96%;
  }
  
}
.hotel-selection.disabled{
  cursor: not-allowed;
    pointer-events: none;
    opacity: 0.4;
}
.select-date-button-wrapper{
     position: absolute;
    bottom: 12px;
    width: 100%;
    padding-right: 48px;
}
:lang(ar) .select-date-button-wrapper{
    padding-left: 48px;
    padding-right : unset;
}
.book_for_someone_else_label .geekmark{
  top:15px !important;
}
:lang(ar) .backtocodewidget, :lang(ar) .backtoguestwidget{
  transform: scaleX(-1);
}
@media (max-width: 599px) {
  .selected-date.visible-date{
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: 80px;
  }
  :lang(ar) .selected-date.visible-date{
    max-width: 80px;
  }
   :lang(ar) .ibu .selected-date.visible-date{
    max-width: 80px;
  }
  .selected-guest, .selected-date{
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: 120px;
  }
  
    .new-booking-widget {
      /* padding-left: 12px;
      padding-right: 12px; */
    }
 
}
@media (max-width: 380px) {
   :lang(ar) .ibu .selected-date.visible-date, .ibu .selected-date.visible-date,.selected-date.visible-date ,:lang(ar) .selected-date.visible-date{
    max-width: 60px;
  }
}

@media (max-width: 400px) {
  .guest-selector-title-text{
     white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: 75px;
  }
  
}
 :lang(ar) .widget-icons{
    padding-right: 0% !important;
  }
  .selected-hotel{
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  
  }
</style>


<script>
  //Video play in safari on play click- Gayathree(11 Oct,2022)
  var video_playing_status = false;
  var background_video = document.getElementById("hero-vid");
  if (background_video != null) {
    const isVideoPlaying = video => !!(video.currentTime > 0 && !video.paused && !video.ended && video.readyState > 2);

    $('body').on('click touchstart', function() {
      if (!isVideoPlaying(background_video)) {
        background_video.play();
      }
    });
  }
</script>


<section class="subtitle-title-desc pt-5">
  <div class="container text-center">


          <h2 class="display-1-72 font-48-mobile mt-4 text-uppercase title-pink">Iconic Luxury in a Prime Location and Unparalleled Views</h2>

          <p class="body-2 description--text">Discover luxury with an unparalleled view at Address Sky View. This <a href="https://www.addresshotels.com/en/hotels-in-downtown-dubai/"><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-vivid-cyan-blue-color"><span style="text-decoration: underline;">hotel in Downtown</span></mark></a> offers breathtaking panoramas, iconic infinity pool overlooking Burj Khalifa. Renowned for its prime location with direct access to Dubai Mall and metro station, Address Sky View is a haven for both leisure and business travellers.</p>
    
    <div class="cta-btn mt-4">
          </div>
  </div>
</section>

<div class="container individual-homepage-featured-offer">
  <div class="row g-0 align-items-center text-center justify-content-between">
    <div class="col-12 col-lg-6 inline-left show-on-scroll">
      <div class="content-box" data-aos="fade-right" data-aos-duration="1000" data-aos-offset="300" data-aos-easing="ease-in-sine">
        <h5 class="eyebrow-text">FEATURED OFFER</h5><h2 class="offers-section-item-heading text-center display-1-72 font-56-mobile">Infinity Pool Day Pass</h2><p class="body-2 mb-0 mb-lg-5">Rise above the city at Address Sky View&#8217;s iconic Infinity Pool in Alto 54. Suspended high above Dubai, the pool offers sweeping, uninterrupted views of the Burj Khalifa and the city skyline, and elegance. </p><a class="btn primary-btn" href="https://www.addresshotels.com/en/offers/infinity-pool-day-pass/">Learn More</a>      </div>
    </div>
    <div class="col-12 col-lg-6 p-0 inline-right show-on-scroll image-zoom-animation img-shadow">
      <div class="img-box img-shadow image-zoom-animation" data-aos="fade-left" data-aos-duration="1000" data-aos-offset="300" data-aos-easing="ease-in-sine">
        <img width="1024" height="535" decoding="async" src="/dependencies/img/wp-content/uploads/2026/01/ASV-Infinity-Pool-5-1-e1736344266192.jpg" alt="" class="img-fluid">        
      </div>
    </div>
  </div>
</div>



<div class="individual-homepage-explore-accommodations">

  <div class="container-fluid p-0">
    <div class="container text-center p-2 p-lg-5 inline-up2 show-on-scroll">

              <p class="text-uppercase offers-section-item-label eyebrow-dark text-center">STAY</p>
      
              <h2 class="offers-section-item-heading text-center display-1-72 font-56-mobile mt-0">Explore Our Accommodation</h2>
                </div>
  </div>

  

  <div id="offers-carousel">
    <div class="main-carousel" data-flickity='{ "cellAlign": "center", "contain": true,"pageDots": false }'>
                <div class="img-text-box slider-img slider-img-explore-accommodations is-selected ">
            <div class="img-content">

                              <div class="img-box img-shadow">
                  <img width="824" height="520" decoding="async" src="/dependencies/img/wp-content/uploads/2020/10/DEF8469.jpg.webp" class="img-fluid" alt="">
                </div>
              

              <style>
                @media (max-width: 767px) {
                  .slider-img-explore-accommodations .img-content::before {
                    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(38%, rgba(0, 0, 0, 0)), color-stop(104%, rgba(0, 0, 0, 0.8))) !important;
                  }
                }
              </style>


              <div class="overlap-content accomodation-content">
                <div class="overlap-text text-left text-white w-100">
                                      <p class="smalltitle eyebrow-dark whitetext secondary-medium font-14 text-uppercase d-inline-block p-0 m-0">Address Sky View</p>
                  
                                      <h3 class="whitetext m-0 display-4-32 secondary-normal mb-2">Rooms</h3>
                                    <div class="d-flex flex-column flex-md-row align-items-start align-md-items-center justify-content-between gap-2">
                                        <div class="overlap-btn mb-0 mb-md-auto">
                                              <a class="btn alternate-btn small-btn" style="width: max-content;" href="/pages/en/hotels/address-sky-view/rooms-and-suites/index.php">Discover More</a>
                                          </div>

                  </div>

                </div>
              </div>
            </div>
          </div>

                <div class="img-text-box slider-img slider-img-explore-accommodations is-selected ">
            <div class="img-content">

                              <div class="img-box img-shadow">
                  <img width="824" height="520" decoding="async" src="/dependencies/img/wp-content/uploads/2020/10/ADH_ADSVH_RESIDENCES_CATEGORY_AMBIENT_HR_02.jpg.webp" class="img-fluid" alt="">
                </div>
              

              <style>
                @media (max-width: 767px) {
                  .slider-img-explore-accommodations .img-content::before {
                    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(38%, rgba(0, 0, 0, 0)), color-stop(104%, rgba(0, 0, 0, 0.8))) !important;
                  }
                }
              </style>


              <div class="overlap-content accomodation-content">
                <div class="overlap-text text-left text-white w-100">
                                      <p class="smalltitle eyebrow-dark whitetext secondary-medium font-14 text-uppercase d-inline-block p-0 m-0">Address Sky View</p>
                  
                                      <h3 class="whitetext m-0 display-4-32 secondary-normal mb-2">Residences </h3>
                                    <div class="d-flex flex-column flex-md-row align-items-start align-md-items-center justify-content-between gap-2">
                                        <div class="overlap-btn mb-0 mb-md-auto">
                                              <a class="btn alternate-btn small-btn" style="width: max-content;" href="/pages/en/hotels/address-sky-view/residences/index.php">Discover More</a>
                                          </div>

                  </div>

                </div>
              </div>
            </div>
          </div>

          </div>
  </div>

</div>
<style>
  .accomodation-content .overlap-btn {
    margin-bottom: 20px;
  }

  @media (max-width: 350px) {
    .slider-img-explore-accommodations {
      height: 500px !important;
      width: 300px !important;
    }
  }

  @media screen and (max-width: 767px) {
    .accomodation-text {
      line-height: 24px;
    }

  }
  .page-id-196909 .overlap-btn.mb-0.mb-md-auto {
    all: unset; 
}

</style>

<div class="individual-homepage-hotel-highlights-section  " style="background-image: linear-gradient( to bottom, #ffffff 0%, #ffffff00 40%, #ffffff00 60%, #ffffff 100% ),
    url('../../../wp-content/uploads/2021/07/Address-Artwork-123x123-1-1-1.png');
    background-repeat: repeat;
    /* background-size: cover; */
    height: 100%;">
      <div class="container-fluid">
      <div class="container text-center inline-up show-on-scroll">

                  <p class="text-uppercase eyebrow-dark h6 mb-2 mt-0">ADDRESS SKY VIEW</p>
                          <h2 class="display-1-72 font-56-mobile mt-0">Iconic Stays</h2>
                  <p class="m-auto body-2 py-lg-0">In this skyline-defining duo of towers joined by an architecturally marvellous Sky Bridge, embrace the unique privilege of staying ‘Where Life Happens’.</p>
              </div>
    </div>
    <div id="dine-carousel">
    <div class="main-carousel" data-flickity='{ "cellAlign": "center", "contain": true,"pageDots": false }'>
                <div class="img-text-box slider-img slider-img-hotel-highlights is-selected">
            <div class="img-content highlight-container">
              <div class="img-box img-shadow">
                                  <img width="380" height="400" decoding="async" src="/dependencies/img/wp-content/uploads/2020/10/THE-RESTAURANT-2-ADDRESS-SKY-VIEW.jpg.webp" class="img-fluid">
                              </div>
              <div class="overlap-content overlap-container flex-column">
                <div class="d-lg-flex align-items-center justify-content-between w-100">
                  <div class="overlap-text text-left text-white">
                                          <span class="smalltitle eyebrow-dark whitetext secondary-medium font-14 text-uppercase ">Restaurants</span>
                                                              <h3 class="whitetext m-0 display-4-32 secondary-normal ">Gourmet Dining</h3>
                                      </div>
                  <div class="overlap-btn">
                                          <a class="btn alternate-btn small-btn" href="/pages/en/hotels/address-sky-view/dining/index.php">Explore</a>
                                      </div>
                </div>
                <div class="overlap-below d-none mt-1">
                                  </div>
                <div class="mobile-overlap-btn d-none">
                                      <a class="btn alternate-btn small-btn" href="/pages/en/hotels/address-sky-view/dining/index.php">Explore</a>
                  
                </div>

              </div>
            </div>



          </div>
                <div class="img-text-box slider-img slider-img-hotel-highlights is-selected">
            <div class="img-content highlight-container">
              <div class="img-box img-shadow">
                                  <img width="2560" height="1706" decoding="async" src="/dependencies/img/wp-content/uploads/2023/06/THE-SPA-COUPLE-ROOM-JACUZZI-ADDRESS-SKY-VIEW-scaled.jpg.webp" class="img-fluid">
                              </div>
              <div class="overlap-content overlap-container flex-column">
                <div class="d-lg-flex align-items-center justify-content-between w-100">
                  <div class="overlap-text text-left text-white">
                                          <span class="smalltitle eyebrow-dark whitetext secondary-medium font-14 text-uppercase ">Wellness</span>
                                                              <h3 class="whitetext m-0 display-4-32 secondary-normal ">The Spa</h3>
                                      </div>
                  <div class="overlap-btn">
                                          <a class="btn alternate-btn small-btn" href="/pages/en/hotels/address-sky-view/wellness/spa/index.php">Explore</a>
                                      </div>
                </div>
                <div class="overlap-below d-none mt-1">
                                  </div>
                <div class="mobile-overlap-btn d-none">
                                      <a class="btn alternate-btn small-btn" href="/pages/en/hotels/address-sky-view/wellness/spa/index.php">Explore</a>
                  
                </div>

              </div>
            </div>



          </div>
                <div class="img-text-box slider-img slider-img-hotel-highlights is-selected">
            <div class="img-content highlight-container">
              <div class="img-box img-shadow">
                                  <img width="1750" height="1166" decoding="async" src="/dependencies/img/wp-content/uploads/2023/01/FITNESS-GYM-ADDRESS-SKY-VIEW-1.jpg.webp" class="img-fluid">
                              </div>
              <div class="overlap-content overlap-container flex-column">
                <div class="d-lg-flex align-items-center justify-content-between w-100">
                  <div class="overlap-text text-left text-white">
                                          <span class="smalltitle eyebrow-dark whitetext secondary-medium font-14 text-uppercase ">Pool &amp; Fitness</span>
                                                              <h3 class="whitetext m-0 display-4-32 secondary-normal ">Superb Recreation</h3>
                                      </div>
                  <div class="overlap-btn">
                                          <a class="btn alternate-btn small-btn" href="/pages/en/hotels/address-sky-view/wellness/index.php">Explore</a>
                                      </div>
                </div>
                <div class="overlap-below d-none mt-1">
                                  </div>
                <div class="mobile-overlap-btn d-none">
                                      <a class="btn alternate-btn small-btn" href="/pages/en/hotels/address-sky-view/wellness/index.php">Explore</a>
                  
                </div>

              </div>
            </div>



          </div>
                <div class="img-text-box slider-img slider-img-hotel-highlights is-selected">
            <div class="img-content highlight-container">
              <div class="img-box img-shadow">
                                  <img width="1750" height="1166" decoding="async" src="/dependencies/img/wp-content/uploads/2023/01/KIDS-CLUB-ADDRESS-SKY-VIEW.jpg.webp" class="img-fluid">
                              </div>
              <div class="overlap-content overlap-container flex-column">
                <div class="d-lg-flex align-items-center justify-content-between w-100">
                  <div class="overlap-text text-left text-white">
                                          <span class="smalltitle eyebrow-dark whitetext secondary-medium font-14 text-uppercase ">Amenities</span>
                                                              <h3 class="whitetext m-0 display-4-32 secondary-normal ">Opulent Amenities</h3>
                                      </div>
                  <div class="overlap-btn">
                                          <a class="btn alternate-btn small-btn" href="/pages/en/hotels/address-sky-view/amenities/index.php">Explore</a>
                                      </div>
                </div>
                <div class="overlap-below d-none mt-1">
                                  </div>
                <div class="mobile-overlap-btn d-none">
                                      <a class="btn alternate-btn small-btn" href="/pages/en/hotels/address-sky-view/amenities/index.php">Explore</a>
                  
                </div>

              </div>
            </div>



          </div>
          </div>
  </div>
</div>
<style>
  .highlight-container {
    position: relative;
    overflow: hidden;
    height: auto;

  }

  .highlight-container .overlap-btn,
  .highlight-container .overlap-text {
    position: relative;
    transition: transform 0.3s ease;

  }

  .highlight-container .overlap-btn {
    padding-top: 30px;
  }

  @media (max-width: 991px) {
    .highlight-container .overlap-btn {
      display: none !important;
    }

    .highlight-container .overlap-below {
      opacity: 1;
      display: block !important;

    }

    html[dir="rtl"] .overlap-content {

      -webkit-align-items: unset !important;
    }

    .highlight-container .mobile-overlap-btn {
      display: block !important;
    }

    .highlight-container .overlap-content {
      align-items: baseline !important;
    }
  }

  @media (max-width: 600px) {
    .slider-img-hotel-highlights {
      height: 520px !important;
      width: 320px !important;
    }
  }

  @media (max-width: 350px) {
    .slider-img-hotel-highlights {
      height: 500px !important;
      width: 300px !important;
    }
  }

  .overlap-below {
    /* position: absolute; */
    bottom: 0;
    left: 20px;
    width: 100%;
    /* padding: 10px; */
    box-sizing: border-box;
    color: white;
    transition: opacity 0.3s ease;
    opacity: 0;

  }



  .highlight-container:hover .overlap-below {
    opacity: 1;
    display: block !important;

  }

  @media screen and (max-width: 767px) {
    .overlap-desc {
      line-height: 24px;
    }

  }
 .page-id-197302 .flickity-viewport{
  height : 500px !important;
 }  
</style>

<link rel="stylesheet" href="/dependencies/css/wp-content/themes/emaar-projects/template-parts/dynamic-blocks/assets/css/individual-homepage-corporate-section.css">



<div id="carousalHeaders" class="carousel slide" data-ride="carousel">


    <div class="carousel-inner">
            <style>
          .individual-homepage-corporate-section.individual-homepage-corporate-section-0 {
            background-image: url('../../../wp-content/uploads/2024/11/EMAAR-Address-SkyView-by-Maddy-Christina-153-sur-171-scaled.jpg');

          }
        </style>

        <style>
          html[dir="rtl"] .individual-homepage-corporate-section.individual-homepage-corporate-section-0 {
            background-image: url('../../../wp-content/uploads/2024/11/EMAAR-Address-SkyView-by-Maddy-Christina-153-sur-171-scaled.jpg');
          }
        </style>
        <div class="carousel-item active">
          <div class="container-fluid g-0 individual-homepage-corporate-section individual-homepage-corporate-section-0">
            <div class="corporate-img-section">
              <div class="corporate-img-overlay"></div>
            </div>
            <div class="corporate-img-content text-white">

                              <h5 class="smalltitle eyebrow-dark whitetext">Weddings &amp; Events</h5>
              
                              <h2 class="whitetext pt-4 display-1-72 font-56-mobile mt-0 whitetext">Memorable Events</h2>
              
                              <p class="body-2 whitetext corporate-desc">Whether you’re celebrating your special day or conducting business in style, we have the perfect venue to make it memorable. </p>
              
              <div class="cta-btn">
                                  <a class="btn transbtn mt15r cntplink transparent-btn" href="/pages/en/hotels/address-sky-view/events/index.php">View Details</a>
                              </div>

            </div>
          </div>
        </div>
      </div>



</div>
<style>
  @media (max-width: 600px) {
    .corporate-desc {
      overflow: hidden;
      text-overflow: ellipsis;
      display: -webkit-box !important;
      -webkit-line-clamp: 6;
      -webkit-box-orient: vertical;
    }
  }
</style>



<div class="container-fluid individual-homepage-contact-map-section" id="contact-details">
  <div class="container individual-homepage-contact-map">
    <div class="row g-0">
      <div class="col-12 col-lg-5 px-5 pt-5 py-lg-0 px-lg-3">
        <div class="individual-homepage-contact-map-content-box" data-aos="fade-right" data-aos-duration="600" data-aos-offset="300" data-aos-easing="ease-in-sine">

                      <h2 class="display-2-48">Contact Us</h2>
          
          <div class="contact-details">
            <!-- Gayathree- Contact email changes start -->

                          <p class="body-4">
                <i class="fal fa-phone-alt"></i>
                                <a class="bluelink secondary-medium" href="tel:+97148738888">
                  <span class="dir-ltr">+97148738888</span>
                </a>
              </p>
            

                          <p class="body-4">
                <i class="fal fa-envelope"></i>
                                <a class="bluelink secondary-medium" href="mailto:stay@addresshotels.com">
                  stay@addresshotels.com                </a>
              </p>
            

            
                        <!-- Gayathree- Contact email changes end -->

            

            

                          <p class="body-4">
                <i class="fal fa-map-marker-alt"></i>
                Sheikh Mohammed Bin Rashed Boulevard Downtown Dubai, PO Box 111969 Dubai, UAE              </p>
            
          </div>
        </div>
        <hr>
      </div>

      
        
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfpnrdvo_bFJm9mPFQzkn79GA29S50dgw&language=en&region=AE&sensor=false"></script>

        <script type="text/javascript">
          function initialize() {
            var mapOptions = {

              center: new google.maps.LatLng(25.201485152531276, 55.27063659940833),
              zoom: 12,

              styles: [{
                  "elementType": "geometry",
                  "stylers": [{
                    "color": "#f5f5f5"
                  }]
                },
                {
                  "elementType": "geometry.fill",
                  "stylers": [{
                    "color": "#ECEAE8"
                  }]
                },
                {
                  "elementType": "labels.icon",
                  "stylers": [{
                    "visibility": "off"
                  }]
                },
                {
                  "elementType": "labels.text.fill",
                  "stylers": [{
                    "color": "#928F8A"
                  }]
                },
                {
                  "elementType": "labels.text.stroke",
                  "stylers": [{
                    "color": "#f5f5f5"
                  }]
                },
                {
                  "featureType": "administrative.land_parcel",
                  "elementType": "labels",
                  "stylers": [{
                    "visibility": "off"
                  }]
                },
                {
                  "featureType": "administrative.land_parcel",
                  "elementType": "labels.text.fill",
                  "stylers": [{
                    "color": "#bdbdbd"
                  }]
                },
                {
                  "featureType": "administrative.locality",
                  "elementType": "labels",
                  "stylers": [{
                    "visibility": "off"
                  }]
                },
                {
                  "featureType": "poi",
                  "elementType": "geometry",
                  "stylers": [{
                    "color": "#eeeeee"
                  }]
                },
                {
                  "featureType": "poi",
                  "elementType": "labels.text",
                  "stylers": [{
                    "visibility": "off"
                  }]
                },
                {
                  "featureType": "poi",
                  "elementType": "labels.text.fill",
                  "stylers": [{
                    "color": "#757575"
                  }]
                },
                {
                  "featureType": "poi.park",
                  "elementType": "geometry",
                  "stylers": [{
                    "color": "#e5e5e5"
                  }]
                },
                {
                  "featureType": "poi.park",
                  "elementType": "labels.text.fill",
                  "stylers": [{
                    "color": "#9e9e9e"
                  }]
                },
                {
                  "featureType": "road",
                  "elementType": "geometry",
                  "stylers": [{
                    "color": "#ffffff"
                  }]
                },
                {
                  "featureType": "road",
                  "elementType": "geometry.fill",
                  "stylers": [{
                    "color": "#ffffff"
                  }]
                },
                {
                  "featureType": "road.arterial",
                  "elementType": "labels.text.fill",
                  "stylers": [{
                    "color": "#757575"
                  }]
                },
                {
                  "featureType": "road.highway",
                  "elementType": "geometry",
                  "stylers": [{
                    "color": "#dadada"
                  }]
                },
                {
                  "featureType": "road.highway",
                  "elementType": "geometry.fill",
                  "stylers": [{
                    "color": "#ffffff"
                  }]
                },
                {
                  "featureType": "road.highway",
                  "elementType": "labels.text.fill",
                  "stylers": [{
                    "color": "#616161"
                  }]
                },
                {
                  "featureType": "road.local",
                  "elementType": "labels",
                  "stylers": [{
                    "visibility": "off"
                  }]
                },
                {
                  "featureType": "road.local",
                  "elementType": "labels.text.fill",
                  "stylers": [{
                    "color": "#9e9e9e"
                  }]
                },
                {
                  "featureType": "transit.line",
                  "elementType": "geometry",
                  "stylers": [{
                    "color": "#e5e5e5"
                  }]
                },
                {
                  "featureType": "transit.station",
                  "elementType": "geometry",
                  "stylers": [{
                    "color": "#eeeeee"
                  }]
                },
                {
                  "featureType": "water",
                  "elementType": "geometry",
                  "stylers": [{
                    "color": "#c9c9c9"
                  }]
                },
                {
                  "featureType": "water",
                  "elementType": "geometry.fill",
                  "stylers": [{
                    "color": "#D4D1CC"
                  }]
                },
                {
                  "featureType": "water",
                  "elementType": "labels.text.fill",
                  "stylers": [{
                    "color": "#9e9e9e"
                  }]
                }
              ],
              mapTypeId: google.maps.MapTypeId.ROADMAP,

              // MAP CONTROLS (START)
              // mapTypeControl: true,
              panControl: false,
              zoomControl: false,
              streetViewControl: false,
              fullscreenControl: false,
              mapTypeControl: false,
              // MAP CONTROLS (END)

            };
            var map = new google.maps.Map(document.getElementById("map_canvas"),
              mapOptions);
            /**********Location Image/icon ******/
            var imagaloc = "/images/map-indicator.png";
            var companyImage = new google.maps.MarkerImage(imagaloc,
              new google.maps.Size(40, 55),
              new google.maps.Point(0, 0),
              new google.maps.Point(20, 60)
            );
            /****************************/

            // -------------- MARKER 2
            //The Address Dubai Mall
            var marker2 = new google.maps.Marker({
              position: new google.maps.LatLng(25.201485152531276, 55.27063659940833),
              icon: "https://www.addresshotels.com/wp-content/themes/emaar-projects/images/marker-location.svg", // Request ID # 212282 | 26/07/22 | Anubhav Gogoi
              map: map
            });

            var infowindow2 = new google.maps.InfoWindow({
              content: 'Address Sky View'
            });

            marker2.addListener('click', function() {
              infowindow2.open(map, marker2);
              $("#pseudo_map_link")[0].click(); // Request ID # 212282 | 26/07/22 | Anubhav Gogoi
            });


          }
          google.maps.event.addDomListener(window, 'load', initialize);
        </script>

        <div class="col-12 col-lg-7 mt-0">

          <!-- # CHG3718 | 07/07/22 | Anubhav Gogoi -->
          <!-- <a href="https://www.google.co.in/maps/place/Address+Sky+View/@25.2015914,55.2683494,17z/data=!3m1!4b1!4m8!3m7!1s0x3e5f43859586ed13:0xe1103d783cf1f2f1!5m2!4m1!1i2!8m2!3d25.2015914!4d55.2705381" id="pseudo_map_link" target="_blank"></a> -->
          <!-- # CHG3718 | 07/07/22 | Anubhav Gogoi END  -->

          <a href="https://www.google.co.in/maps/place/Address+Sky+View/@25.2015914,55.2683494,17z/data=!3m1!4b1!4m8!3m7!1s0x3e5f43859586ed13:0xe1103d783cf1f2f1!5m2!4m1!1i2!8m2!3d25.2015914!4d55.2705381?hl=en" id="pseudo_map_link" target="_blank"></a>


          <div class="is-visible">
            <div id="map_canvas" style="height:400px;" data-aos="fade-left" data-aos-duration="600" data-aos-offset="300" data-aos-easing="ease-in-sine"></div>
          </div>
        </div>
      

    </div>
  </div>
</div>


<section class="global-hotel-landing-faq-section greyboxlight">
  <div class="container px-3 py-5">
    <h2 class="mb-3 pb-1 display-2-48 font-56-mobile">FAQs</h2>
    <div class="accordion accordionFaq" id="accordionFaq659105484">
              <div class="card">
          <div class="card-header" id="heading0">

                          <button class="btn btn-block d-flex text-left body-2 justify-content-between align-items-center" type="button" data-toggle="collapse" data-target="#collapse6591054840" aria-expanded="true" aria-controls="collapse0">
                <h3 class="mb-0 body-2">How can I make a hotel reservation at Address Sky View? </h3>
                <i class="fal fa-plus float-end plus-icon" aria-hidden="true"></i>
              </button>
                      </div>

          <div id="collapse6591054840" class="collapse accordionFaq-card-content" aria-labelledby="heading0" data-parent="#accordionFaq659105484">
            <div class="card-body">
            To secure your reservation with us at Address Sky View, you have multiple convenient options. You may initiate the booking process by accessing our official website at <a href="/pages/en/hotels/address-sky-view/index.php">https://www.addresshotels.com/en/hotels/address-sky-view/</a>. Alternatively, you can send us an email at <a href="mailto:stay@addresshotels.com">stay@addresshotels.com</a>. <br>For direct assistance and personalized service, feel free to contact our dedicated team by placing a call to us at +971 42 458 888.              <div class="cta-btn mt-4">
              </div>
            </div>
          </div>
        </div>
              <div class="card">
          <div class="card-header" id="heading1">

                          <button class="btn btn-block d-flex text-left body-2 justify-content-between align-items-center" type="button" data-toggle="collapse" data-target="#collapse6591054841" aria-expanded="true" aria-controls="collapse1">
                <h3 class="mb-0 body-2">What is the standard check-in time and check-out time at Address Sky View? </h3>
                <i class="fal fa-plus float-end plus-icon" aria-hidden="true"></i>
              </button>
                      </div>

          <div id="collapse6591054841" class="collapse accordionFaq-card-content" aria-labelledby="heading1" data-parent="#accordionFaq659105484">
            <div class="card-body">
            The designated time for standard check-in is 3:00 PM, and for check-out, it is scheduled for 12:00 PM. This policy applies to all guests at Address Hotels + Resorts, ensuring a seamless and organized arrival and departure experience. We kindly request our valued guests to adhere to these timings to facilitate the efficient turnover of accommodations and maintain the high standards of service synonymous with Address Hotels + Resorts.              <div class="cta-btn mt-4">
              </div>
            </div>
          </div>
        </div>
              <div class="card">
          <div class="card-header" id="heading2">

                          <button class="btn btn-block d-flex text-left body-2 justify-content-between align-items-center" type="button" data-toggle="collapse" data-target="#collapse6591054842" aria-expanded="true" aria-controls="collapse2">
                <h3 class="mb-0 body-2">What accommodation options are available at Address Sky View? </h3>
                <i class="fal fa-plus float-end plus-icon" aria-hidden="true"></i>
              </button>
                      </div>

          <div id="collapse6591054842" class="collapse accordionFaq-card-content" aria-labelledby="heading2" data-parent="#accordionFaq659105484">
            <div class="card-body">
            Discover an array of picturesque accommodations at Address Sky View, featuring an exquisite selection of rooms and suites that cater to diverse preferences. Among the enticing choices are the Premier Room King, Premier Room Twin, Premier Burj View Room King, Premier Burj View Room Twin, Club Room King, Club Room Twin, Junior Suite, Executive Suite, and the opulent Presidential Suite. Each category is meticulously designed to provide a distinctive experience, ensuring a stay that exceeds expectations.<br>For a comprehensive insight into the distinctive characteristics and amenities offered by each of our room categories, we invite you to explore further details by visiting the following link: <a href="/pages/en/hotels/address-sky-view/rooms-and-suites/index.php">https://www.addresshotels.com/en/hotels/address-sky-view/rooms-and-suites/</a>. This resource provides an in-depth overview, allowing you to make an informed choice and tailor your stay at Address Sky View to your individual preferences and desires.              <div class="cta-btn mt-4">
              </div>
            </div>
          </div>
        </div>
              <div class="card">
          <div class="card-header" id="heading3">

                          <button class="btn btn-block d-flex text-left body-2 justify-content-between align-items-center" type="button" data-toggle="collapse" data-target="#collapse6591054843" aria-expanded="true" aria-controls="collapse3">
                <h3 class="mb-0 body-2">What room amenities are available at Address Sky View ? </h3>
                <i class="fal fa-plus float-end plus-icon" aria-hidden="true"></i>
              </button>
                      </div>

          <div id="collapse6591054843" class="collapse accordionFaq-card-content" aria-labelledby="heading3" data-parent="#accordionFaq659105484">
            <div class="card-body">
            Step into an elevated realm of comfort and convenience with our thoughtfully furnished rooms and suites, each equipped with modern amenities for an enhanced stay. Explore the seamless accessibility of our automated in-room iPad service, granting you easy control over various services. Stay connected with complimentary high-speed Wi-Fi, and unwind with the added convenience of a coffee machine and tea-making facilities within your space. Your safety is paramount with an in-room security safe, offering a secure spot for your valuables. Enjoy entertainment at its finest with an interactive flat-screen TV, boasting a range of channels and on-demand content. Additionally, treat yourself to a private minibar, where you can indulge in a curated selection of beverages and snacks (surcharge applies), completing the perfect accommodation experience.              <div class="cta-btn mt-4">
              </div>
            </div>
          </div>
        </div>
              <div class="card">
          <div class="card-header" id="heading4">

                          <button class="btn btn-block d-flex text-left body-2 justify-content-between align-items-center" type="button" data-toggle="collapse" data-target="#collapse6591054844" aria-expanded="true" aria-controls="collapse4">
                <h3 class="mb-0 body-2">How do I access the infinity pool as a hotel guest or as a non-hotel guest? </h3>
                <i class="fal fa-plus float-end plus-icon" aria-hidden="true"></i>
              </button>
                      </div>

          <div id="collapse6591054844" class="collapse accordionFaq-card-content" aria-labelledby="heading4" data-parent="#accordionFaq659105484">
            <div class="card-body">
            The highly sought-after infinity pool, offering breathtaking views of the iconic Burj Khalifa, is a privileged amenity exclusively accessible to our esteemed hotel guests. For those not staying with us, there&#8217;s an enticing option to relish the ambiance by choosing to dine at CÉ LA VI Dubai. However a dining experience at Ce La Vi, does not entail the use to the Infinity Pool.<br><br>For an unforgettable experience at Address Sky View, securing your stay is just a few clicks away. Explore the available accommodations, amenities, and services by visiting our website at <a href="/pages/en/hotels/address-sky-view/index.php">https://www.addresshotels.com/en/hotels/address-sky-view/</a>. To make a reservation, you can also reach out to us via email at <a href="mailto:stay@addresshotels.com">stay@addresshotels.com</a> or contact our dedicated team directly at +971 42 458 888. We look forward to making your stay with us truly exceptional.              <div class="cta-btn mt-4">
              </div>
            </div>
          </div>
        </div>
              <div class="card">
          <div class="card-header" id="heading5">

                          <button class="btn btn-block d-flex text-left body-2 justify-content-between align-items-center" type="button" data-toggle="collapse" data-target="#collapse6591054845" aria-expanded="true" aria-controls="collapse5">
                <h3 class="mb-0 body-2">Is U by Emaar applicable at your hotel? </h3>
                <i class="fal fa-plus float-end plus-icon" aria-hidden="true"></i>
              </button>
                      </div>

          <div id="collapse6591054845" class="collapse accordionFaq-card-content" aria-labelledby="heading5" data-parent="#accordionFaq659105484">
            <div class="card-body">
            Certainly, U by Emaar discounts can be availed across various facets of your experience, extending their applicability to accommodations, dining experiences, and rejuvenating wellness treatments. Whether you choose to stay with us, indulge in delectable dining options, or pamper yourself with wellness treatments, the exclusive benefits of U by Emaar are designed to enhance and elevate every aspect of your visit.              <div class="cta-btn mt-4">
              </div>
            </div>
          </div>
        </div>
              <div class="card">
          <div class="card-header" id="heading6">

                          <button class="btn btn-block d-flex text-left body-2 justify-content-between align-items-center" type="button" data-toggle="collapse" data-target="#collapse6591054846" aria-expanded="true" aria-controls="collapse6">
                <h3 class="mb-0 body-2">Does Address Sky View have a spa? </h3>
                <i class="fal fa-plus float-end plus-icon" aria-hidden="true"></i>
              </button>
                      </div>

          <div id="collapse6591054846" class="collapse accordionFaq-card-content" aria-labelledby="heading6" data-parent="#accordionFaq659105484">
            <div class="card-body">
            Situated on Level 54, The Spa at Address Sky View stands out for its world-class facilities, featuring dedicated spaces for beauty treatments, massage therapies, and a diverse range of wellness experiences, all administered by highly skilled professionals.              <div class="cta-btn mt-4">
              </div>
            </div>
          </div>
        </div>
              <div class="card">
          <div class="card-header" id="heading7">

                          <button class="btn btn-block d-flex text-left body-2 justify-content-between align-items-center" type="button" data-toggle="collapse" data-target="#collapse6591054847" aria-expanded="true" aria-controls="collapse7">
                <h3 class="mb-0 body-2">How many restaurants are in Address Sky View? </h3>
                <i class="fal fa-plus float-end plus-icon" aria-hidden="true"></i>
              </button>
                      </div>

          <div id="collapse6591054847" class="collapse accordionFaq-card-content" aria-labelledby="heading7" data-parent="#accordionFaq659105484">
            <div class="card-body">
            Address Sky View boasts six distinct dining destinations within the hotel, offering a diverse culinary experience. These include:<br><br>&#8211; The Restaurant, an all-day dining venue<br>&#8211; Deck Too, a poolside lounge<br>&#8211; Patisserie, located in the lobby<br>&#8211; CÉ LA VI, offering contemporary Asian cuisine<br>&#8211; Lucia’s, specializing in Italian fare<br>&#8211; Amelia Restaurant and Lounge, presenting a fusion of Peruvian and Japanese flavours.<br><br>Each of these dining establishments contributes to the rich tapestry of gastronomic delights available at Address Sky View.<br>              <div class="cta-btn mt-4">
              </div>
            </div>
          </div>
        </div>
              <div class="card">
          <div class="card-header" id="heading8">

                          <button class="btn btn-block d-flex text-left body-2 justify-content-between align-items-center" type="button" data-toggle="collapse" data-target="#collapse6591054848" aria-expanded="true" aria-controls="collapse8">
                <h3 class="mb-0 body-2">What facilities and activities are available at the hotel? </h3>
                <i class="fal fa-plus float-end plus-icon" aria-hidden="true"></i>
              </button>
                      </div>

          <div id="collapse6591054848" class="collapse accordionFaq-card-content" aria-labelledby="heading8" data-parent="#accordionFaq659105484">
            <div class="card-body">
            Our offerings encompass a comprehensive array of facilities, ensuring a well-rounded and enriching experience for our guests. From the captivating “<a href="https://www.skyviewsdubai.com/">Sky View Observatory</a>” to the engaging Qix Kids Club, the multiple swimming pools situated on the ground level, and the mesmerizing infinity pool on Level 54, we provide diverse options for relaxation and recreation. Our spa, fitness centre, and beauty salon cater to wellness and grooming needs, while the six distinctive dining venues present a culinary journey. Additionally, we offer versatile event spaces to accommodate various occasions, further enhancing the overall experience at our establishment.              <div class="cta-btn mt-4">
              </div>
            </div>
          </div>
        </div>
              <div class="card">
          <div class="card-header" id="heading9">

                          <button class="btn btn-block d-flex text-left body-2 justify-content-between align-items-center" type="button" data-toggle="collapse" data-target="#collapse6591054849" aria-expanded="true" aria-controls="collapse9">
                <h3 class="mb-0 body-2">How far is Address Sky View from Dubai Mall? </h3>
                <i class="fal fa-plus float-end plus-icon" aria-hidden="true"></i>
              </button>
                      </div>

          <div id="collapse6591054849" class="collapse accordionFaq-card-content" aria-labelledby="heading9" data-parent="#accordionFaq659105484">
            <div class="card-body">
            Dubai Mall is conveniently located just a short stroll away from Address Sky View, with an approximate walking distance of about 10 minutes via the air-conditioned walkway. This proximity allows our guests to seamlessly access the vibrant shopping, dining, and entertainment offerings at Dubai Mall, enhancing their overall experience during their stay at Address Sky View.              <div class="cta-btn mt-4">
              </div>
            </div>
          </div>
        </div>
              <div class="card">
          <div class="card-header" id="heading10">

                          <button class="btn btn-block d-flex text-left body-2 justify-content-between align-items-center" type="button" data-toggle="collapse" data-target="#collapse65910548410" aria-expanded="true" aria-controls="collapse10">
                <h3 class="mb-0 body-2">What is sky views observatory? </h3>
                <i class="fal fa-plus float-end plus-icon" aria-hidden="true"></i>
              </button>
                      </div>

          <div id="collapse65910548410" class="collapse accordionFaq-card-content" aria-labelledby="heading10" data-parent="#accordionFaq659105484">
            <div class="card-body">
            The Sky Views Observatory introduces a groundbreaking and unprecedented array of exhilarating experiences, featuring a unique outdoor glass slide. This extraordinary slide propels adventurous visitors from the elevated height of level 53 at 219.5 meters to level 52 at 215.5 meters, all within the confines of an enclosed and transparent glass tube. This one-of-a-kind attraction promises an unparalleled adventure, providing guests with a thrilling journey and breathtaking panoramic views of the surroundings. For bookings please visit our Sky View Observatory site and <a href="https://www.skyviewsdubai.com/booking/">Book now</a>!              <div class="cta-btn mt-4">
              </div>
            </div>
          </div>
        </div>
          </div>
  </div>
</section>


<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "How can I make a hotel reservation at Address Sky View?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "To secure your reservation with us at Address Sky View, you have multiple convenient options. You may initiate the booking process by accessing our official website at https://www.addresshotels.com/en/hotels/address-sky-view/. Alternatively, you can send us an email at stay@addresshotels.com.
For direct assistance and personalized service, feel free to contact our dedicated team by placing a call to us at +971 42 458 888."
    }
  },{
    "@type": "Question",
    "name": ">What is the standard check-in time and check-out time at Address Sky View?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "The designated time for standard check-in is 3:00 PM, and for check-out, it is scheduled for 12:00 PM. This policy applies to all guests at Address Hotels + Resorts, ensuring a seamless and organized arrival and departure experience. We kindly request our valued guests to adhere to these timings to facilitate the efficient turnover of accommodations and maintain the high standards of service synonymous with Address Hotels + Resorts."
    }
  },{
    "@type": "Question",
    "name": "What accommodation options are available at Address Sky View?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Discover an array of picturesque accommodations at Address Sky View, featuring an exquisite selection of rooms and suites that cater to diverse preferences. Among the enticing choices are the Premier Room King, Premier Room Twin, Premier Burj View Room King, Premier Burj View Room Twin, Club Room King, Club Room Twin, Junior Suite, Executive Suite, and the opulent Presidential Suite. Each category is meticulously designed to provide a distinctive experience, ensuring a stay that exceeds expectations.
For a comprehensive insight into the distinctive characteristics and amenities offered by each of our room categories, we invite you to explore further details by visiting the following link: https://www.addresshotels.com/en/hotels/address-sky-view/rooms-and-suites/. This resource provides an in-depth overview, allowing you to make an informed choice and tailor your stay at Address Sky View to your individual preferences and desires."
    }
  },{
    "@type": "Question",
    "name": "What room amenities are available at Address Sky View ?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Step into an elevated realm of comfort and convenience with our thoughtfully furnished rooms and suites, each equipped with modern amenities for an enhanced stay. Explore the seamless accessibility of our automated in-room iPad service, granting you easy control over various services. Stay connected with complimentary high-speed Wi-Fi, and unwind with the added convenience of a coffee machine and tea-making facilities within your space. Your safety is paramount with an in-room security safe, offering a secure spot for your valuables. Enjoy entertainment at its finest with an interactive flat-screen TV, boasting a range of channels and on-demand content. Additionally, treat yourself to a private minibar, where you can indulge in a curated selection of beverages and snacks (surcharge applies), completing the perfect accommodation experience."
    }
  },{
    "@type": "Question",
    "name": "How do I access the infinity pool as a hotel guest or as a non-hotel guest?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "The highly sought-after infinity pool, offering breathtaking views of the iconic Burj Khalifa, is a privileged amenity exclusively accessible to our esteemed hotel guests. For those not staying with us, there’s an enticing option to relish the ambiance by choosing to dine at CÉ LA VI Dubai. However a dining experience at Ce La Vi, does not entail the use to the Infinity Pool.

For an unforgettable experience at Address Sky View, securing your stay is just a few clicks away. Explore the available accommodations, amenities, and services by visiting our website at https://www.addresshotels.com/en/hotels/address-sky-view/. To make a reservation, you can also reach out to us via email at stay@addresshotels.com or contact our dedicated team directly at +971 42 458 888. We look forward to making your stay with us truly exceptional."
    }
  },{
    "@type": "Question",
    "name": "Is U by Emaar applicable at your hotel?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Certainly, U by Emaar discounts can be availed across various facets of your experience, extending their applicability to accommodations, dining experiences, and rejuvenating wellness treatments. Whether you choose to stay with us, indulge in delectable dining options, or pamper yourself with wellness treatments, the exclusive benefits of U by Emaar are designed to enhance and elevate every aspect of your visit."
    }
  },{
    "@type": "Question",
    "name": "Does Address Sky View have a spa?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Situated on Level 54, The Spa at Address Sky View stands out for its world-class facilities, featuring dedicated spaces for beauty treatments, massage therapies, and a diverse range of wellness experiences, all administered by highly skilled professionals."
    }
  },{
    "@type": "Question",
    "name": "How many restaurants are in Address Sky View?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Address Sky View boasts six distinct dining destinations within the hotel, offering a diverse culinary experience. These include:

– The Restaurant, an all-day dining venue
– Deck Too, a poolside lounge
– Patisserie, located in the lobby
– CÉ LA VI, offering contemporary Asian cuisine
– Lucia’s, specializing in Italian fare
– Amelia Restaurant and Lounge, presenting a fusion of Peruvian and Japanese flavours.

Each of these dining establishments contributes to the rich tapestry of gastronomic delights available at Address Sky View."
    }
  },{
    "@type": "Question",
    "name": "What facilities and activities are available at the hotel?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Our offerings encompass a comprehensive array of facilities, ensuring a well-rounded and enriching experience for our guests. From the captivating “Sky View Observatory” to the engaging Qix Kids Club, the multiple swimming pools situated on the ground level, and the mesmerizing infinity pool on Level 54, we provide diverse options for relaxation and recreation. Our spa, fitness centre, and beauty salon cater to wellness and grooming needs, while the six distinctive dining venues present a culinary journey. Additionally, we offer versatile event spaces to accommodate various occasions, further enhancing the overall experience at our establishment."
    }
  },{
    "@type": "Question",
    "name": "How far is Address Sky View from Dubai Mall?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Dubai Mall is conveniently located just a short stroll away from Address Sky View, with an approximate walking distance of about 10 minutes via the air-conditioned walkway. This proximity allows our guests to seamlessly access the vibrant shopping, dining, and entertainment offerings at Dubai Mall, enhancing their overall experience during their stay at Address Sky View."
    }
  },{
    "@type": "Question",
    "name": "What is sky views observatory?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "The Sky Views Observatory introduces a groundbreaking and unprecedented array of exhilarating experiences, featuring a unique outdoor glass slide. This extraordinary slide propels adventurous visitors from the elevated height of level 53 at 219.5 meters to level 52 at 215.5 meters, all within the confines of an enclosed and transparent glass tube. This one-of-a-kind attraction promises an unparalleled adventure, providing guests with a thrilling journey and breathtaking panoramic views of the surroundings. For bookings please visit our Sky View Observatory site and Book now!"
    }
  }]
}
</script>
</div>

<footer class="">
  <div class=" footer">
    <div class="container-fluid ft-btm-link">
      <div class="enclosedarea container">
        <div class="row no-gutters adjustments1 footer-links justify-content-between">
          <div class="col-ipad col-lg-3 col-md-4  col-xs-12 px-0 d-flex justify-content-start flex-column logo-container">

                        <h2 class="mb-4 pb-2"><a href="/en/"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="205px" height="40px" viewbox="0 0 205 40" version="1.1">
    <g id="Error-Pages" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="error-404---1364" transform="translate(-24.000000, -24.000000)" fill="#25282D">
            <g id="component/header/transparent/1364">
                <g id="address-HR-logo@SVG" transform="translate(24.000000, 24.000000)">
                    <polygon id="Fill-17" points="61.1886272 31.7821994 57.6037909 31.7821994 57.6037909 28.95 55.8086124 28.95 55.8086124 36.0088235 57.6037909 36.0088235 57.6037909 33.1504335 61.1886272 33.1504335 61.1886272 36.0088235 62.9856459 36.0088235 62.9856459 28.95 61.1886272 28.95"></polygon>
                    <path d="M71.3688446,34.5768279 C70.1725389,34.5768279 69.3824803,33.7429632 69.3824803,32.4807311 C69.3824803,31.21674 70.1725389,30.3793568 71.3688446,30.3793568 C72.5531313,30.3793568 73.3439912,31.21674 73.3439912,32.4807311 C73.3439912,33.7429632 72.5531313,34.5768279 71.3688446,34.5768279 M71.3688446,28.95 C69.0066816,28.95 67.7751196,30.8130016 67.7751196,32.4807311 C67.7751196,34.2337823 69.0691812,36.0088235 71.3688446,36.0088235 C73.6196303,36.0088235 74.9521531,34.2469764 74.9521531,32.4807311 C74.9521531,30.8253161 73.7262001,28.95 71.3688446,28.95" id="Fill-20"></path>
                    <polygon id="Fill-22" points="79.7416268 30.237856 82.4132246 30.237856 82.4132246 36.0088235 84.2489469 36.0088235 84.2489469 30.237856 86.9186603 30.237856 86.9186603 28.95 79.7416268 28.95"></polygon>
                    <polygon id="Fill-24" points="93.3259727 33.0203836 96.2838556 33.0203836 96.2838556 31.7253025 93.3259727 31.7253025 93.3259727 30.237856 96.4239959 30.237856 96.4239959 28.95 91.708134 28.95 91.708134 36.0088235 96.492823 36.0088235 96.492823 34.7137426 93.3259727 34.7137426"></polygon>
                    <polygon id="Fill-26" points="102.84751 28.95 101.282297 28.95 101.282297 36.0088235 106.066986 36.0088235 106.066986 34.7144801 102.84751 34.7144801"></polygon>
                    <path d="M112.462804,30.7742991 C112.462804,30.4312535 112.818262,30.207834 113.379005,30.207834 C113.911791,30.207834 114.449369,30.3793568 115.356783,30.8261958 L115.356783,29.4830402 C114.569186,29.1083288 113.937352,28.95 113.241614,28.95 C111.793428,28.95 110.856459,29.7354865 110.856459,30.9255911 C110.856459,33.3937603 114.038797,32.9829852 114.038797,34.1115174 C114.038797,34.5152556 113.718486,34.7483508 113.120999,34.7483508 C112.434048,34.7483508 111.884489,34.5152556 110.988258,33.8590709 L110.988258,35.3429632 C111.611306,35.6956845 112.152878,36.0088235 113.241614,36.0088235 C114.633089,36.0088235 115.641148,35.2426883 115.641148,33.923282 C115.641148,31.5184442 112.462804,31.812232 112.462804,30.7742991" id="Fill-28"></path>
                    <path d="M135.52008,31.8484984 L134.435155,31.8484984 L134.435155,30.2380207 L135.469862,30.2380207 C136.235691,30.2380207 136.631161,30.5107994 136.631161,31.0410014 C136.631161,31.6425596 136.077713,31.8484984 135.52008,31.8484984 M137.32794,32.7056734 C138.262209,32.3335384 138.735098,31.7554646 138.735098,30.9750649 C138.735098,29.9227899 137.734917,28.95 136.054696,28.95 L132.397129,28.95 L132.397129,36.0088235 L134.435155,36.0088235 L134.435155,33.1446483 L135.027313,33.1446483 C136.127931,33.1446483 136.451211,34.5022186 137.32794,36.0088235 L139.574163,36.0088235 C138.420188,33.9404031 138.165958,33.0678729 137.32794,32.7056734" id="Fill-30"></path>
                    <polygon id="Fill-32" points="145.983146 33.0203836 148.940909 33.0203836 148.940909 31.7253025 145.983146 31.7253025 145.983146 30.237856 149.085271 30.237856 149.085271 28.95 144.363636 28.95 144.363636 36.0088235 149.148325 36.0088235 149.148325 34.7137426 145.983146 34.7137426"></polygon>
                    <path d="M155.540426,30.7742991 C155.540426,30.4312535 155.901897,30.207834 156.457698,30.207834 C156.987108,30.207834 157.530914,30.3793568 158.439389,30.8261958 L158.439389,29.4830402 C157.651671,29.1083288 157.016698,28.95 156.323346,28.95 C154.873464,28.95 153.937799,29.7354865 153.937799,30.9255911 C153.937799,33.3937603 157.116662,32.9829852 157.116662,34.1115174 C157.116662,34.5152556 156.795977,34.7483508 156.20179,34.7483508 C155.514035,34.7483508 154.963833,34.5152556 154.064154,33.8590709 L154.064154,35.3429632 C154.687931,35.6956845 155.226138,36.0088235 156.323346,36.0088235 C157.71085,36.0088235 158.722488,35.2426883 158.722488,33.923282 C158.722488,31.5184442 155.540426,31.812232 155.540426,30.7742991" id="Fill-34"></path>
                    <path d="M167.103684,34.5768279 C165.91045,34.5768279 165.117097,33.7429632 165.117097,32.4807311 C165.117097,31.21674 165.91045,30.3793568 167.103684,30.3793568 C168.290506,30.3793568 169.083058,31.21674 169.083058,32.4807311 C169.083058,33.7429632 168.290506,34.5768279 167.103684,34.5768279 M167.103684,28.95 C164.738052,28.95 163.511962,30.8130016 163.511962,32.4807311 C163.511962,34.2337823 164.805366,36.0088235 167.103684,36.0088235 C169.354721,36.0088235 170.688995,34.2469764 170.688995,32.4807311 C170.688995,30.8253161 169.462905,28.95 167.103684,28.95" id="Fill-36"></path>
                    <path d="M178.603783,31.8484984 L177.523672,31.8484984 L177.523672,30.2380207 L178.553594,30.2380207 C179.318977,30.2380207 179.714216,30.5107994 179.714216,31.0410014 C179.714216,31.6425596 179.165273,31.8484984 178.603783,31.8484984 M180.413725,32.7056734 C181.348496,32.3335384 181.816927,31.7554646 181.816927,30.9750649 C181.816927,29.9227899 180.821511,28.95 179.146452,28.95 L175.478469,28.95 L175.478469,36.0088235 L177.523672,36.0088235 L177.523672,33.1446483 L178.10712,33.1446483 C179.215462,33.1446483 179.541691,34.5022186 180.413725,36.0088235 L182.655502,36.0088235 C181.5022,33.9404031 181.256483,33.0678729 180.413725,32.7056734" id="Fill-38"></path>
                    <polygon id="Fill-40" points="187.444976 30.237856 190.112104 30.237856 190.112104 36.0088235 191.951113 36.0088235 191.951113 30.237856 194.62201 30.237856 194.62201 28.95 187.444976 28.95"></polygon>
                    <path d="M201.014099,30.7742991 C201.014099,30.4312535 201.375026,30.207834 201.933187,30.207834 C202.464198,30.207834 203.004791,30.3793568 203.911902,30.8261958 L203.911902,29.4830402 C203.125366,29.1083288 202.494542,28.95 201.792649,28.95 C200.348139,28.95 199.411483,29.7354865 199.411483,30.9255911 C199.411483,33.3937603 202.591161,32.9829852 202.591161,34.1115174 C202.591161,34.5152556 202.273353,34.7483508 201.677663,34.7483508 C200.987748,34.7483508 200.438371,34.5152556 199.543238,33.8590709 L199.543238,35.3429632 C200.168474,35.6956845 200.705872,36.0088235 201.792649,36.0088235 C203.190046,36.0088235 204.196172,35.2426883 204.196172,33.923282 C204.196172,31.5184442 201.014099,31.812232 201.014099,30.7742991" id="Fill-42"></path>
                    <polygon id="Fill-44" points="124.861465 28.95 123.336322 28.95 123.184275 28.95 123.184275 31.5618265 120.430622 31.5618265 120.430622 31.7111496 120.430622 33.0073436 120.430622 33.1540158 123.184275 33.1540158 123.184275 36.0088235 124.706619 36.0088235 124.861465 36.0088235 124.861465 33.1504815 127.607656 33.1540158 127.607656 31.7111496 127.607656 31.5618265 124.861465 31.5618265"></polygon>
                    <polygon id="Combined-Shape" points="62.971531 4.70588235 63.3220846 5.32999343 70.1626794 18.8235294 68.8888584 18.8235294 66.8487148 14.7916602 66.3846581 13.8702258 62.9745443 7.13536195 59.5885374 13.8702258 59.1244807 14.7916602 57.0852917 18.8235294 55.8086124 18.8235294"></polygon>
                    <path d="M77.4673905,17.9106669 L73.6173449,17.9106669 L73.6173449,5.61698254 L77.4075047,5.61698254 C81.114345,5.61698254 83.6590553,8.14057145 83.6590553,11.7629436 C83.6590553,15.7404158 80.7541627,17.9106669 77.4673905,17.9106669 M77.3467511,4.70588235 L72.5550239,4.70588235 L72.5550239,18.8235294 L77.5255404,18.8235294 C82.9386907,18.8235294 84.8038281,15.0355027 84.8038281,11.7629436 C84.8038281,8.66044486 83.1617431,4.70588235 77.3467511,4.70588235" id="Fill-2"></path>
                    <path d="M94.2115497,17.9106669 L90.3616031,17.9106669 L90.3616031,5.61698253 L94.1516391,5.61698253 C97.8600563,5.61698253 100.407585,8.14057141 100.407585,11.7629436 C100.407585,15.7404157 97.5014571,17.9106669 94.2115497,17.9106669 M101.55024,11.7629436 C101.55024,8.66044482 99.9065883,4.70588235 94.0891228,4.70588235 L89.3014354,4.70588235 L89.3014354,18.8235294 L94.2714611,18.8235294 C99.6869145,18.8235294 101.55024,15.0355026 101.55024,11.7629436" id="Fill-4"></path>
                    <path d="M110.185971,11.1422184 L107.564732,11.1422184 L107.564732,5.61692567 L110.135774,5.61692567 C113.035099,5.61692567 114.311083,6.77643535 114.311083,8.3694395 C114.311083,10.068174 112.967836,11.1422184 110.185971,11.1422184 M112.618472,11.7854114 C114.636353,11.1228344 115.634251,9.98358978 115.634251,8.34917451 C115.634251,6.46453077 114.265907,4.70588235 110.393782,4.70588235 L106.334928,4.70588235 L106.334928,18.8235294 L107.564732,18.8235294 L107.564732,12.0559049 L109.699068,12.0559049 C111.598487,12.0559049 112.199836,12.2823441 114.101264,14.9520359 L116.86004,18.8235294 L118.296651,18.8235294 L114.725702,13.9379054 C113.986816,12.9431589 113.36037,12.1352027 112.618472,11.7854114" id="Fill-6"></path>
                    <polygon id="Fill-8" points="123.794431 12.0594292 129.669523 12.0594292 129.669523 11.1466238 123.794431 11.1466238 123.794431 5.61692567 129.819998 5.61692567 129.819998 4.70588235 122.794258 4.70588235 122.794258 18.8235294 129.971292 18.8235294 129.971292 17.9107239 123.794431 17.9107239"></polygon>
                    <path d="M136.11551,8.31723763 C136.11551,6.82273573 137.279395,5.69391895 138.821427,5.69391895 C139.701702,5.69391895 140.379731,5.93685061 141.693945,6.74290306 L141.693945,5.57116549 C140.698211,4.98830116 139.72185,4.70588235 138.727665,4.70588235 C136.696678,4.70588235 135.043062,6.3214209 135.043062,8.35586632 C135.043062,12.8934523 141.149972,11.1800543 141.149972,15.0909968 C141.149972,16.643871 139.96749,17.8353521 138.445605,17.8353521 C137.449096,17.8353521 136.640886,17.469667 135.215088,16.363169 L135.215088,17.6113056 C136.340229,18.4199332 137.449096,18.8216718 138.500623,18.8216718 C140.586627,18.8216718 142.220096,17.1700799 142.220096,15.0506512 C142.220096,10.2315049 136.11551,11.9878237 136.11551,8.31723763" id="Fill-10"></path>
                    <path d="M148.075567,8.31723763 C148.075567,6.82273573 149.241651,5.69391895 150.780417,5.69391895 C151.664472,5.69391895 152.340103,5.93685061 153.655724,6.74290306 L153.655724,5.57116549 C152.660872,4.98830116 151.684616,4.70588235 150.68744,4.70588235 C148.657447,4.70588235 147.004785,6.3214209 147.004785,8.35586632 C147.004785,12.8934523 153.111035,11.1800543 153.111035,15.0909968 C153.111035,16.643871 151.92713,17.8353521 150.40696,17.8353521 C149.409784,17.8353521 148.600886,17.469667 147.172918,16.363169 L147.172918,17.6113056 C148.301036,18.4199332 149.409784,18.8216718 150.461972,18.8216718 C152.549301,18.8216718 154.181818,17.1700799 154.181818,15.0506512 C154.181818,10.2315049 148.075567,11.9878237 148.075567,8.31723763" id="Fill-12"></path>
                    <path d="M26.3651478,28.4551341 L19.9932597,15.0926812 L13.6378479,28.4551341 L11.6666667,28.4551341 L19.9827747,11.0638298 L28.3333333,28.4551341 L26.3651478,28.4551341 Z M0,40 L40,40 L40,0 L0,0 L0,40 Z" id="Fill-14"></path>
                </g>
            </g>
        </g>
    </g>
</svg></a></h2>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-6  col-5 links d-none">
            <ul class=" p-0">
                          </ul>
          </div>
          <div class="col-lg-3 col-md-2 col-sm-6  col-5 links  ml-lg-5 ">
            <ul class=" p-0">
              <li id="menu-item-153680" class="dropdown-item nav-link hotel-nav-sub-heading footer-hotel-sub-heading menu-item menu-item-type-custom menu-item-object-custom menu-item-153680"><a>United Arab Emirates</a></li>
<li id="menu-item-137864" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-137864"><a href="https://www.addresshotels.com/en/hotels-in-dubai/">Hotels In Dubai</a></li>
<li id="menu-item-137865" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-137865"><a href="https://www.addresshotels.com/en/hotels-in-downtown-dubai/">Hotels In Downtown Dubai</a></li>
<li id="menu-item-137861" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-137861"><a href="https://www.addresshotels.com/en/hotels-in-dubai-creek-harbour/">Hotels in Dubai Creek Harbour</a></li>
<li id="menu-item-137862" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-137862"><a href="https://www.addresshotels.com/en/hotels-in-dubai-marina/">Hotels in Dubai Marina &#038; JBR</a></li>
<li id="menu-item-141485" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-141485"><a href="https://www.addresshotels.com/en/hotels-in-emirates-hills/">Hotels in Emirates Hills</a></li>
<li id="menu-item-137866" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-137866"><a href="https://www.addresshotels.com/en/5-star-hotels-in-dubai/">5-star hotels in Dubai</a></li>
<li id="menu-item-137863" class="dropdown-item nav-link hotel-nav-sub-heading footer-hotel-sub-heading menu-item menu-item-type-post_type menu-item-object-page menu-item-137863"><a href="https://www.addresshotels.com/en/hotels-in-fujairah/">Hotels in Fujairah</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-2  col-sm-6  col-6 links footer-hotel-list-custom">
            <ul class=" p-0">
              <li id="menu-item-153672" class="dropdown-item nav-link hotel-nav-sub-heading footer-hotel-sub-heading menu-item menu-item-type-custom menu-item-object-custom menu-item-153672"><a>Saudia Arabia</a></li>
<li id="menu-item-153673" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-153673"><a href="https://www.addresshotels.com/en/hotels-in-makkah/">Hotels in Makkah</a></li>
<li id="menu-item-153674" class="dropdown-item nav-link hotel-nav-sub-heading footer-hotel-sub-heading menu-item menu-item-type-custom menu-item-object-custom menu-item-153674"><a>Egypt</a></li>
<li id="menu-item-153675" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-153675"><a href="https://www.addresshotels.com/en/hotels-in-egypt/">Hotels in Egypt</a></li>
<li id="menu-item-153676" class="dropdown-item nav-link hotel-nav-sub-heading footer-hotel-sub-heading menu-item menu-item-type-custom menu-item-object-custom menu-item-153676"><a>Turkey</a></li>
<li id="menu-item-153677" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-153677"><a href="https://www.addresshotels.com/en/hotels-in-istanbul/">Hotels in Istanbul</a></li>
<li id="menu-item-153678" class="dropdown-item nav-link hotel-nav-sub-heading footer-hotel-sub-heading menu-item menu-item-type-custom menu-item-object-custom menu-item-153678"><a>Bahrain</a></li>
<li id="menu-item-153679" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-153679"><a href="https://www.addresshotels.com/en/hotels-in-bahrain/">Hotels in Bahrain</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-2  col-sm-6  col-5 links ">
            <ul class=" p-0">
              <li id="menu-item-6079" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6079"><a href="https://www.addresshotels.com/en/dine/">Dining</a></li>
<li id="menu-item-6080" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6080"><a href="https://www.addresshotels.com/en/wellness/">Wellness</a></li>
<li id="menu-item-6081" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6081"><a href="https://www.addresshotels.com/en/offers-global/">Offers</a></li>
<li id="menu-item-6082" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6082"><a href="https://www.addresshotels.com/en/events/">Events</a></li>
<li id="menu-item-8277" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8277"><a href="https://www.addresshotels.com/en/about-u-by-emaar/">U By Emaar</a></li>
<li id="menu-item-165998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-165998"><a href="https://www.addresshotels.com/en/hotels/sustainability/">Sustainability</a></li>
<li id="menu-item-162563" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-162563"><a href="https://www.addresshotels.com/en/blogs/">Blogs</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-12 col-lg-12 links footer-page-links">
            <ul class="d-flex align-items-md-center justify-content-center m-md-0 flex-column flex-md-row">
              <li id="menu-item-2827" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2827"><a href="https://www.addresshotels.com/en/about-us/">About Address</a></li>
<li id="menu-item-4691" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4691"><a target="_blank" rel="noopener" href="https://www.emaarhospitality.com/en/gdpr/privacypolicy/">Privacy Policy</a></li>
<li id="menu-item-2659" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2659"><a href="https://www.addresshotels.com/en/terms-and-conditions/">Terms &#038; Conditions</a></li>
<li id="menu-item-2657" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2657"><a href="https://www.addresshotels.com/en/faq/">FAQ</a></li>
<li id="menu-item-2655" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2655"><a href="https://www.addresshotels.com/en/contact-us/">Contact Us</a></li>
<li id="menu-item-141314" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-141314"><a href="https://www.addresshotels.com/en/sitemap/">Sitemap</a></li>
            </ul>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-sm-12 collapse fixer ft-menu">
            <a href="javascript:void(0);" class="ft-dropdown ft-close"><i class="fal fa-times"></i></a>
            <div class="row no-gutters g-0 footer_sidebar-links justify-content-between px-3">
              <!-- Column 1 -->
                              <div class="col-sm-5 col-lg-2">
                  <li id="menu-item-30242" class="bold-heading footer-hotel-sub-heading menu-item menu-item-type-custom menu-item-object-custom menu-item-30242"><a target="_blank" rel="noopener" href="https://properties.emaar.com/en/">Properties</a></li>
<li id="menu-item-30244" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-30244"><a target="_blank" rel="noopener" href="https://properties.emaar.com/en/our-communities/the-oasis/">The Oasis</a></li>
<li id="menu-item-30246" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-30246"><a target="_blank" rel="noopener" href="https://properties.emaar.com/en/our-communities/downtown-dubai/">Downtown Dubai</a></li>
<li id="menu-item-174528" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-174528"><a target="_blank" rel="noopener" href="https://properties.emaar.com/en/our-communities/dubai-marina/">Dubai Marina</a></li>
<li id="menu-item-174529" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-174529"><a href="https://properties.emaar.com/en/our-communities/dubai-hills-estate/">Dubai Hills Estate</a></li>
<li id="menu-item-174530" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-174530"><a target="_blank" rel="noopener" href="https://properties.emaar.com/en/our-communities/dubai-creek-harbour/">Dubai Creek Harbour</a></li>
<li id="menu-item-174531" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-174531"><a target="_blank" rel="noopener" href="https://properties.emaar.com/en/our-communities/arabian-ranches-iii/">Arabian Ranches III</a></li>
<li id="menu-item-174532" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-174532"><a target="_blank" rel="noopener" href="https://properties.emaar.com/en/our-communities/emaar-south/">Emaar South</a></li>
<li id="menu-item-174533" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-174533"><a target="_blank" rel="noopener" href="https://properties.emaar.com/en/our-communities/the-valley/">The Valley</a></li>
<li id="menu-item-174534" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-174534"><a href="https://properties.emaar.com/en/our-communities/emaar-beachfront/">Emaar Beachfront</a></li>
                </div>
              
              <!-- Column 2 -->
                              <div class="col-sm-5 col-lg-2">
                  <li id="menu-item-30251" class="footer-hotel-sub-heading menu-item menu-item-type-custom menu-item-object-custom menu-item-30251"><a target="_blank" rel="noopener" href="https://www.emaarhospitality.com/en/">Hospitality</a></li>
<li id="menu-item-30253" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-30253"><a target="_blank" rel="noopener" href="https://www.addresshotels.com/">Address Hotels + Resorts</a></li>
<li id="menu-item-30255" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-30255"><a target="_blank" rel="noopener" href="https://www.vidahotels.com/en/">Vida Hotels and Resorts</a></li>
<li id="menu-item-174553" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-174553"><a href="https://www.alalameinhotel.com/en/">Al Alamein Hotel Egypt</a></li>
<li id="menu-item-174554" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-174554"><a href="https://www.armanihotels.com/en/">Armani Hotel Dubai</a></li>
<li id="menu-item-174555" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-174555"><a href="https://www.rovehotels.com/en/">Rove Hotels</a></li>
<li id="menu-item-174556" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-174556"><a href="https://www.emaarhospitality.com/en/">Emaar Hospitality Group</a></li>
<li id="menu-item-174557" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-174557"><a href="https://www.veofitness.com/en/">VEO Fitness</a></li>
<li id="menu-item-174558" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-174558"><a href="https://www.atmosphereburjkhalifa.com/">Atmosphere Burj Khalifa</a></li>
<li id="menu-item-174559" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-174559"><a href="https://www.weddingsbyemaar.com/">Weddings by Emaar</a></li>
<li id="menu-item-174560" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-174560"><a href="https://www.ubyemaar.com/en-ae/">U By Emaar</a></li>
                </div>
              
              <!-- Column 3 -->
                              <div class="col-sm-5 col-lg-2">
                  <li id="menu-item-174561" class="footer-hotel-sub-heading menu-item menu-item-type-custom menu-item-object-custom menu-item-174561"><a href="https://entertainment.emaar.com/en-ae/">Entertainment</a></li>
<li id="menu-item-174562" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-174562"><a target="_blank" rel="noopener" href="https://entertainment.emaar.com/en-ae/attraction/burj-khalifa">Burj Khalifa</a></li>
<li id="menu-item-174563" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-174563"><a target="_blank" rel="noopener" href="https://tickets.atthetop.ae/atthetop/ar-ae">At The Top</a></li>
<li id="menu-item-30258" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-30258"><a target="_blank" rel="noopener" href="https://reelcinemas.com/en-ae/">Reel Cinemas</a></li>
<li id="menu-item-174564" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-174564"><a href="https://www.dubaiopera.com/en-US/home">Dubai Opera</a></li>
<li id="menu-item-174567" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-174567"><a target="_blank" rel="noopener" href="https://dubai.kidzania.com/en-ae/">Kidzania Dubai</a></li>
<li id="menu-item-30259" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-30259"><a target="_blank" rel="noopener" href="https://www.dubaiicerink.com/en/">Dubai Ice Rink</a></li>
<li id="menu-item-174568" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-174568"><a href="https://abudhabi.kidzania.com/en-ae/">Kidzania Abu Dhabi</a></li>
<li id="menu-item-174569" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-174569"><a href="https://www.ekartzabeel.ae/">Ekart Zabeel</a></li>
<li id="menu-item-30261" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-30261"><a target="_blank" rel="noopener" href="https://entertainment.emaar.com/en-ae/attraction/play-dxb">Play Dxb</a></li>
<li id="menu-item-174572" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-174572"><a href="https://www.skyviewsdubai.com/">Sky Views Dubai</a></li>
                </div>
              
              <!-- Column 4 -->
                              <div class="col-sm-5 col-lg-2">
                  <li id="menu-item-30263" class="footer-hotel-sub-heading menu-item menu-item-type-custom menu-item-object-custom menu-item-30263"><a target="_blank" rel="noopener" href="https://www.emaarmalls.ae/">Malls</a></li>
<li id="menu-item-174574" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-174574"><a target="_blank" rel="noopener" href="https://thedubaimall.com/">Dubai Mall</a></li>
<li id="menu-item-174579" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-174579"><a target="_blank" rel="noopener" href="https://www.dubaihillsmall.ae/">Dubai Hills Mall</a></li>
<li id="menu-item-174580" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-174580"><a target="_blank" rel="noopener" href="https://www.dubaimarinamall.com/">Dubai Marina Mall</a></li>
<li id="menu-item-174581" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-174581"><a target="_blank" rel="noopener" href="https://www.emaarmalls.ae/malls/gold-and-diamond-park/">Gold and Diamond Park</a></li>
<li id="menu-item-174583" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-174583"><a target="_blank" rel="noopener" href="https://www.emaarmalls.ae/malls/souk-al-bahar/">Soul Al Bahar</a></li>
<li id="menu-item-174584" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-174584"><a target="_blank" rel="noopener" href="https://www.emaarmalls.ae/malls/the-springs-souk/">The Spring Souk</a></li>
                </div>
              
              <!-- Column 5 -->
                              <div class="col-sm-5 col-lg-2">
                  <li id="menu-item-174585" class="footer-hotel-sub-heading menu-item menu-item-type-custom menu-item-object-custom menu-item-174585"><a target="_blank" rel="noopener" href="#">International</a></li>
<li id="menu-item-174587" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-174587"><a href="https://in.emaar.com/en/">India</a></li>
<li id="menu-item-174590" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-174590"><a href="https://pk.emaar.com/en/">Pakistan</a></li>
<li id="menu-item-174591" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-174591"><a href="https://www.emaarmisr.com/en/">Egypt</a></li>
<li id="menu-item-174592" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-174592"><a href="https://ma.emaar.com/en/">Morocco</a></li>
<li id="menu-item-174593" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-174593"><a href="https://tr.emaar.com/en/">Turkey</a></li>
<li id="menu-item-174594" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-174594"><a href="https://www.dubaiemaar.cn/">China</a></li>
                </div>
              
              <!-- Column 6 -->
                              <div class="col-sm-5 col-lg-2">
                  <li id="menu-item-174595" class="footer-hotel-sub-heading menu-item menu-item-type-custom menu-item-object-custom menu-item-174595"><a href="#">Leisure</a></li>
<li id="menu-item-174596" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-174596"><a href="https://www.poloclubdubai.com/">Dubai Polo &#038; Equestrian Club</a></li>
<li id="menu-item-174597" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-174597"><a href="https://www.arabianranchesgolfclub.com/">Arabian Ranches Golf Club</a></li>
<li id="menu-item-174598" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-174598"><a href="https://www.dubaihillsgolfclub.com/">Dubai Hills Golf Club</a></li>
<li id="menu-item-174599" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-174599"><a href="https://www.dubaimarinayachtclub.com/">Dubai Marina Yacht Club</a></li>
<li id="menu-item-174600" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-174600"><a href="https://www.creekmarinayachtclub.com/">Creek Marina Yacht Club</a></li>
<li id="menu-item-174601" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-174601"><a href="https://www.montgomeriegolfclubdubai.com/">Montgomorie Golf Club Dubai</a></li>
<li id="menu-item-174602" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-174602"><a href="https://www.marassimarinayachtclub.com/en/">Marassi Marina Yacht Club</a></li>
                </div>
                          </div>
          </div>
        </div>
      </div>
      <div class="row no-gutters emaarLogo verticleborderwhite1">
        <div class="social-icon-drop-up-menu-mobile  col-lg-3  col-xl-2 col-md-12 col-12 px-0 text-right order-lg-2 d-flex justify-content-between mt-0">
          <div class="btn-group dropup position-static text-nowrap">
            <a class="ft-dropdown" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">View All Group Entities              <i class="fas fa-caret-down up"></i>
            </a>
          </div>
                      <ul class="social-pet px-0 d-lg-none social-pet-icons-mobile">
              <li><a href="https://www.facebook.com/addressskyview" rel="nofollow" title="facebook" target="_BLANK"><i class="fab fa-facebook-square darkgrey"></i></a></li>

              <li><a href="https://www.instagram.com/addressskyview/" rel="nofollow" title="instagram" target="_BLANK"><i class="fab fa-instagram darkgrey"></i></a></li>

              <li><a href="https://www.youtube.com/@AddressHotels" rel="nofollow" title="youtube" target="_BLANK"><i class="fab fa-youtube darkgrey"></i></a></li>

              <li><a href="https://www.tiktok.com/@addresshotels" rel="nofollow" title="tiktok" target="_BLANK"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 448 512" style="height:12px;">
                    <path d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z"></path>
                  </svg></a></li>

              <li><a href="https://www.linkedin.com/company/address-hotels-and-resorts" rel="nofollow" title="linkedin" target="_BLANK"><i class="fab fa-linkedin darkgrey"></i></a></li>
             
              <li class="d-md-none">
                <hr class="vhr-dark">
              </li>
            </ul>
                  </div>
        <div class="col-xl-1 col-lg-2 col-1 col-md-1 emaarLogo-footer  px-0 ">
          <!-- <img width="1267" height="272" class="emaar_footer_logo" src="https://www-addresshotels-com.azureedge.net/wp-content/themes/emaar-projects/img/emaar-text-logo.svg" alt="Emaar"> -->
          <img width="1267" height="272" class="emaar_footer_logo" src="/dependencies/img/wp-content/themes/emaar-projects/img/emaar-new-logo.svg" alt="Emaar">
        </div>
        <div class="d-lg-inline-flex justify-content-lg-between justify-content-xl-end col-xl-9  col-lg-7  col-md-11 col-11 text-right px-0 order-lg-last  order-lg-3 ">
                      <ul class="social-pet px-0 d-none d-lg-block social-pet-icons-desktop">
              <li><a href="https://www.facebook.com/addressskyview" rel="nofollow" title="facebook" target="_BLANK"><i class="fab fa-facebook-square darkgrey"></i></a></li>

              <li><a href="https://www.instagram.com/addressskyview/" rel="nofollow" title="instagram" target="_BLANK"><i class="fab fa-instagram darkgrey"></i></a></li>

              <li><a href="https://www.youtube.com/@AddressHotels" rel="nofollow" title="youtube" target="_BLANK"><i class="fab fa-youtube darkgrey"></i></a></li>

              <li><a href="https://www.tiktok.com/@addresshotels" rel="nofollow" title="tiktok" target="_BLANK"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 448 512" style="height:12px;">
                    <path d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z"></path>
                  </svg></a></li>

              <li><a href="https://www.linkedin.com/company/address-hotels-and-resorts" rel="nofollow" title="linkedin" target="_BLANK"><i class="fab fa-linkedin darkgrey"></i></a></li>
               <li class="d-none d-lg-inline-block">
                <hr class="vhr-dark">
              </li>
              
            </ul>
                    <ul class="footer-pet p-0 ">
              <li><a href="https://api.whatsapp.com/send?phone=97142488553&text=Hi Address Sky View" rel="nofollow" title="whatsapp" target="_BLANK" class="blacklink">
                    <svg width="22" height="22" viewbox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin-bottom:5px;">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M20.4664 2.43597C10.9087 2.43597 3.13672 10.1492 3.13672 19.6315C3.13672 23.3917 4.36218 26.8781 6.43721 29.7133L4.27275 36.0977L10.931 33.9821C13.667 35.7777 16.9437 36.8243 20.4664 36.8243C30.02 36.8243 37.7947 29.111 37.7947 19.6301C37.7947 10.1492 30.02 2.43457 20.4664 2.43457V2.43597Z" fill="url(#paint0_linear_1)"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M40.0014 19.4844C40.0014 30.2438 31.2094 38.9688 20.3647 38.9688C16.9203 38.9688 13.6855 38.0898 10.8726 36.5444L0 40L3.54363 29.5466C1.75505 26.6094 0.726612 23.1664 0.726612 19.4858C0.726612 8.72354 9.51862 0 20.3647 0C31.2108 0 40.0014 8.72354 40.0014 19.4858V19.4844ZM20.3661 3.10208C11.2597 3.10208 3.85524 10.4506 3.85524 19.4844C3.85524 23.0671 5.02201 26.3872 6.99923 29.0896L4.93817 35.1722L11.2821 33.1573C13.8881 34.8676 17.0111 35.8653 20.3661 35.8653C29.4683 35.8653 36.8756 28.5167 36.8756 19.4844C36.8756 10.452 29.4683 3.10208 20.3661 3.10208ZM30.2816 23.9726C30.16 23.7728 29.8386 23.654 29.3593 23.4151C28.8772 23.1761 26.5102 22.0205 26.0686 21.8612C25.6285 21.702 25.3043 21.6223 24.9857 22.1002C24.6643 22.5781 23.7421 23.654 23.4598 23.9726C23.1803 24.2926 22.8995 24.3303 22.4188 24.0914C21.9367 23.8524 20.3843 23.3466 18.5468 21.7215C17.1173 20.4541 16.1504 18.8919 15.8681 18.414C15.5886 17.9361 15.8401 17.679 16.0791 17.4401C16.2957 17.2249 16.5612 16.8826 16.8015 16.6045C17.0432 16.325 17.1229 16.1238 17.2836 15.8052C17.4443 15.4866 17.3646 15.2086 17.2431 14.9696C17.1243 14.7307 16.1601 12.3804 15.7591 11.4232C15.3609 10.4688 14.9584 10.5037 14.6762 10.5037C14.3939 10.5037 13.8769 10.5876 13.8769 10.5876C13.8769 10.5876 12.9113 10.7064 12.4712 11.1842C12.031 11.6621 10.7874 12.8177 10.7874 15.1666C10.7874 17.5155 12.5103 19.789 12.752 20.1062C12.9938 20.4262 16.0805 25.4063 20.9753 27.3178C25.8688 29.2294 25.8688 28.5922 26.7519 28.5111C27.6336 28.4329 29.5997 27.3569 30.0007 26.2405C30.4017 25.1254 30.4017 24.1682 30.283 23.9698L30.2816 23.9726Z" fill="white"></path>
                    <defs>
                    <lineargradient id="paint0_linear_1" x1="20.465" y1="2.43597" x2="20.465" y2="36.8257" gradientunits="userSpaceOnUse">
                    <stop stop-color="#4AC14B"></stop>
                    <stop offset="1" stop-color="#06853A"></stop>
                    </lineargradient>
                    </defs>
                    </svg>

                    Chat with us</a></li>              <li><a class="blacklink" href="tel:8002337377">UAE: 800 ADDRESS (2337377) </a>
            </li>
            <li><a class="blacklink" href="tel:8008971470">KSA: 8008971470</a>
            </li>
          </ul>
        </div>

      </div>
    </div>
</div></footer>
<script type="text/javascript">
  // Sing-in & sign-up page messaages


  var required_text = "This field is required";
  var mob_already_exist = "Looks like your mobile number already exists";
  var ubymaartext = "Use your U by Emaar credentials to sign in.";
  var welbacktext = "Welcome Back";
  var signintext = "Sign In";
  var valid_otp = "Please Enter valid otp";
  var error_only_digits = "Mobile number can only contain digits";
  var error_min_dig_7 = "Minimum allowed digits is 7";
  var error_min_dig_10 = "Maximum allowed digits is 15";
  var strong_pwd = "Please enter a strong password";
  var valid_email = "Please enter a valid Email.";
  var valid_name = "Please enter valid name.";
  var success_account_created = "Thank you! your account had been successfully created.";
  var opt_resent = "OTP has been resent!";

  // Sing-in & sign-up page messaages

  // Sing-in & sign-up Api error page messaages

  var security_token_error = "Could not set security token. Please reload and try again.";
  var server_reach_error = "Could not reach server. Please try again later.";
  var unknown_error = "We are facing an unknown error. Please try again later.";

  // Sing-in & sign-up Api error page messaages


  // Booking Modal & Widget Month&Day

  var enter_code_var = "Enter code";
  var code_applied_var = "Code applied";
  var codes_applied_var = "Codes applied";
  var hotel_modalTitle = "Select a hotel and check availability";
  var modal_title = "Search available hotels for this offer";
  var modal_title_rooms = "Select your check-in & check-out dates";
  var loading_price_var = "Loading all prices";
  var price_var = "All prices are displayed in";
  var child_text = "Child";
  var children_text = "Children";
  var adult_text = "Adult";
  var adults_text = "Adults";
  var nightVar = "Night";
  var nightsVar = "Nights";
  var minLength_error_message = "The selected dates requires a minimum of";
  // var minLength_error_message = "This offer requires a reservation of at least";
  var maxLength_error_message = "The selected dates requires a maximum of";
  var nights_stay_var = "nights stay.";
  // var nights_stay_var = "nights.";
  var select_these_dates_var = "Select these dates";
  var select_a_checkout_date_var = "Select a checkout date";
  var all_hotels_var = "All Hotels";

  //multiroom changes
  var room_var = "Room";
  var add_room_var = "Add Room";
  var view_detail_var = "View Detail";
  var hide_detail_var = "Hide Detail";


  // Months
  var month_january = "January";
  var month_february = "February";
  var month_march = "March";
  var month_april = "April";
  var month_may = "May";
  var month_june = "June";
  var month_july = "July";
  var month_August = "August";
  var month_september = "September";
  var month_october = "October";
  var month_november = "November";
  var month_december = "December";

  // var month_sunday ="";
  // var month_monday ="";
  // var month_tuesday ="";
  // var month_wednesday ="";
  // var month_thursday ="";
  // var month_friday ="";
  // var month_saturday ="";


  // dine modal
  var people_var = "people";
  var seating_var = "Seating";
  var reservDetails = "Reservation Details";
  var email_var = "Please enter a valid email address";
  var none_var = "None";

  // Booking Modal & Widget Month&Day


  // ModifyBooking Messages

  var invalid_confirmation = "Invalid Confirmation Number";
  var invalid_last_name = "Invalid Last Name";
  var select_hotel_name = "Select hotel";
  var select_resturant_name = "Select resturant";
  var invalid_email = "Invalid Email";
  // ModifyBooking Messages
  var no_upcoming_booking = "No Upcoming Bookings";

  // Akshay | 04-08-22
  var time_format;

  if (ICL == 'de') {
    time_format = 'HH:mm [Uhr]';
  } else if (ICL == 'fr' || ICL == 'ru') {
    time_format = 'HH:mm';
  } else {
    time_format = 'h:mm a';
  }


  // fetch-Global-offers-page translation
  var ube_member_only_text = "U By Emaar Members Only";
  var offer_applied_text = "Offer Applied";
  var offer_name_text = "Offer Name";

  // strings need to be translated for backend


  var hotelandresorts_Text = "Hotels & Resorts";

  // For new booking widget
  var checkin_text = "Check In - Check Out";
  var checkinmobile_text = "Check In - Out";
  var calendar_minerror = "The selected dates requires a minimum of 1 nights stay.";
  var checkout_unavail = "This date is unavailable as a Check-out Date";
  var checkin_unavail = "This date is unavailable as a Check-in Date";
  var view_all_hotel = "View All Hotels";

  var from_text = "from";
  var soldout_text = "Sold Out";
  var view_rooms_text = "View Rooms";
  var error_text = "We are having trouble in fetching data right now. Please try again later";


  var view_more_rates = "View More Rates";
  var view_less_rates = "View Less Rates";
  var currency_prefix = "Currency:";
  var hideFilterText = "Hide Filter";
  var moreFilterText = "More Filter";
</script>

<!-- ""; -->




<script>
  modal_title = "Search available hotels for this offer";
  preset_hotel_id = "18";
  preset_hotel_name = "Address Sky View";
  // dine_booking_active = "";
  dine_booking_active = 0;
  templateName = "templates/individual-home-custom-template.php";
  //for timezone
  hotel_timezone_offset = [{"IbuId":"61","timezone_offset":240},{"IbuId":"54","timezone_offset":240},{"IbuId":"52","timezone_offset":240},{"IbuId":"51","timezone_offset":240},{"IbuId":"42","timezone_offset":240},{"IbuId":"50","timezone_offset":240},{"IbuId":"","timezone_offset":240},{"IbuId":"40","timezone_offset":240},{"IbuId":"38","timezone_offset":180},{"IbuId":"35","timezone_offset":240},{"IbuId":"29","timezone_offset":240},{"IbuId":"4","timezone_offset":240},{"IbuId":"31","timezone_offset":120},{"IbuId":"18","timezone_offset":240},{"IbuId":"17","timezone_offset":240},{"IbuId":"2","timezone_offset":240},{"IbuId":"5","timezone_offset":240},{"IbuId":"3","timezone_offset":240},{"IbuId":"10","timezone_offset":240},{"IbuId":"1","timezone_offset":240}];
  minimun_timezone_offset = 120;
  // console.log(hotel_timezone_offset);
  // console.log(minimun_timezone_offset);
</script>




<div class="modal fade bookingmodal booking-modal-global p-0" id="bookingModalGlobal">
  <div class="modal-dialog ">
    <div class="modal-content pt-0 container px-xxl-0">
      <!-- Modal Header -->
      <div class="modal-header pl-0 pr-0">
        <a href="/dependencies/vendor/en.bin">
          <!-- <img class="booking-modal_logo" src="" alt="Address Hotels + Resorts"> -->
          <div class="booking-modal_logo d-inline-block" id="" alt="Address Hotels + Resorts">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="205px" height="40px" viewbox="0 0 205 40" version="1.1">
    <g id="Error-Pages" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="error-404---1364" transform="translate(-24.000000, -24.000000)" fill="#25282D">
            <g id="component/header/transparent/1364">
                <g id="address-HR-logo@SVG" transform="translate(24.000000, 24.000000)">
                    <polygon id="Fill-17" points="61.1886272 31.7821994 57.6037909 31.7821994 57.6037909 28.95 55.8086124 28.95 55.8086124 36.0088235 57.6037909 36.0088235 57.6037909 33.1504335 61.1886272 33.1504335 61.1886272 36.0088235 62.9856459 36.0088235 62.9856459 28.95 61.1886272 28.95"></polygon>
                    <path d="M71.3688446,34.5768279 C70.1725389,34.5768279 69.3824803,33.7429632 69.3824803,32.4807311 C69.3824803,31.21674 70.1725389,30.3793568 71.3688446,30.3793568 C72.5531313,30.3793568 73.3439912,31.21674 73.3439912,32.4807311 C73.3439912,33.7429632 72.5531313,34.5768279 71.3688446,34.5768279 M71.3688446,28.95 C69.0066816,28.95 67.7751196,30.8130016 67.7751196,32.4807311 C67.7751196,34.2337823 69.0691812,36.0088235 71.3688446,36.0088235 C73.6196303,36.0088235 74.9521531,34.2469764 74.9521531,32.4807311 C74.9521531,30.8253161 73.7262001,28.95 71.3688446,28.95" id="Fill-20"></path>
                    <polygon id="Fill-22" points="79.7416268 30.237856 82.4132246 30.237856 82.4132246 36.0088235 84.2489469 36.0088235 84.2489469 30.237856 86.9186603 30.237856 86.9186603 28.95 79.7416268 28.95"></polygon>
                    <polygon id="Fill-24" points="93.3259727 33.0203836 96.2838556 33.0203836 96.2838556 31.7253025 93.3259727 31.7253025 93.3259727 30.237856 96.4239959 30.237856 96.4239959 28.95 91.708134 28.95 91.708134 36.0088235 96.492823 36.0088235 96.492823 34.7137426 93.3259727 34.7137426"></polygon>
                    <polygon id="Fill-26" points="102.84751 28.95 101.282297 28.95 101.282297 36.0088235 106.066986 36.0088235 106.066986 34.7144801 102.84751 34.7144801"></polygon>
                    <path d="M112.462804,30.7742991 C112.462804,30.4312535 112.818262,30.207834 113.379005,30.207834 C113.911791,30.207834 114.449369,30.3793568 115.356783,30.8261958 L115.356783,29.4830402 C114.569186,29.1083288 113.937352,28.95 113.241614,28.95 C111.793428,28.95 110.856459,29.7354865 110.856459,30.9255911 C110.856459,33.3937603 114.038797,32.9829852 114.038797,34.1115174 C114.038797,34.5152556 113.718486,34.7483508 113.120999,34.7483508 C112.434048,34.7483508 111.884489,34.5152556 110.988258,33.8590709 L110.988258,35.3429632 C111.611306,35.6956845 112.152878,36.0088235 113.241614,36.0088235 C114.633089,36.0088235 115.641148,35.2426883 115.641148,33.923282 C115.641148,31.5184442 112.462804,31.812232 112.462804,30.7742991" id="Fill-28"></path>
                    <path d="M135.52008,31.8484984 L134.435155,31.8484984 L134.435155,30.2380207 L135.469862,30.2380207 C136.235691,30.2380207 136.631161,30.5107994 136.631161,31.0410014 C136.631161,31.6425596 136.077713,31.8484984 135.52008,31.8484984 M137.32794,32.7056734 C138.262209,32.3335384 138.735098,31.7554646 138.735098,30.9750649 C138.735098,29.9227899 137.734917,28.95 136.054696,28.95 L132.397129,28.95 L132.397129,36.0088235 L134.435155,36.0088235 L134.435155,33.1446483 L135.027313,33.1446483 C136.127931,33.1446483 136.451211,34.5022186 137.32794,36.0088235 L139.574163,36.0088235 C138.420188,33.9404031 138.165958,33.0678729 137.32794,32.7056734" id="Fill-30"></path>
                    <polygon id="Fill-32" points="145.983146 33.0203836 148.940909 33.0203836 148.940909 31.7253025 145.983146 31.7253025 145.983146 30.237856 149.085271 30.237856 149.085271 28.95 144.363636 28.95 144.363636 36.0088235 149.148325 36.0088235 149.148325 34.7137426 145.983146 34.7137426"></polygon>
                    <path d="M155.540426,30.7742991 C155.540426,30.4312535 155.901897,30.207834 156.457698,30.207834 C156.987108,30.207834 157.530914,30.3793568 158.439389,30.8261958 L158.439389,29.4830402 C157.651671,29.1083288 157.016698,28.95 156.323346,28.95 C154.873464,28.95 153.937799,29.7354865 153.937799,30.9255911 C153.937799,33.3937603 157.116662,32.9829852 157.116662,34.1115174 C157.116662,34.5152556 156.795977,34.7483508 156.20179,34.7483508 C155.514035,34.7483508 154.963833,34.5152556 154.064154,33.8590709 L154.064154,35.3429632 C154.687931,35.6956845 155.226138,36.0088235 156.323346,36.0088235 C157.71085,36.0088235 158.722488,35.2426883 158.722488,33.923282 C158.722488,31.5184442 155.540426,31.812232 155.540426,30.7742991" id="Fill-34"></path>
                    <path d="M167.103684,34.5768279 C165.91045,34.5768279 165.117097,33.7429632 165.117097,32.4807311 C165.117097,31.21674 165.91045,30.3793568 167.103684,30.3793568 C168.290506,30.3793568 169.083058,31.21674 169.083058,32.4807311 C169.083058,33.7429632 168.290506,34.5768279 167.103684,34.5768279 M167.103684,28.95 C164.738052,28.95 163.511962,30.8130016 163.511962,32.4807311 C163.511962,34.2337823 164.805366,36.0088235 167.103684,36.0088235 C169.354721,36.0088235 170.688995,34.2469764 170.688995,32.4807311 C170.688995,30.8253161 169.462905,28.95 167.103684,28.95" id="Fill-36"></path>
                    <path d="M178.603783,31.8484984 L177.523672,31.8484984 L177.523672,30.2380207 L178.553594,30.2380207 C179.318977,30.2380207 179.714216,30.5107994 179.714216,31.0410014 C179.714216,31.6425596 179.165273,31.8484984 178.603783,31.8484984 M180.413725,32.7056734 C181.348496,32.3335384 181.816927,31.7554646 181.816927,30.9750649 C181.816927,29.9227899 180.821511,28.95 179.146452,28.95 L175.478469,28.95 L175.478469,36.0088235 L177.523672,36.0088235 L177.523672,33.1446483 L178.10712,33.1446483 C179.215462,33.1446483 179.541691,34.5022186 180.413725,36.0088235 L182.655502,36.0088235 C181.5022,33.9404031 181.256483,33.0678729 180.413725,32.7056734" id="Fill-38"></path>
                    <polygon id="Fill-40" points="187.444976 30.237856 190.112104 30.237856 190.112104 36.0088235 191.951113 36.0088235 191.951113 30.237856 194.62201 30.237856 194.62201 28.95 187.444976 28.95"></polygon>
                    <path d="M201.014099,30.7742991 C201.014099,30.4312535 201.375026,30.207834 201.933187,30.207834 C202.464198,30.207834 203.004791,30.3793568 203.911902,30.8261958 L203.911902,29.4830402 C203.125366,29.1083288 202.494542,28.95 201.792649,28.95 C200.348139,28.95 199.411483,29.7354865 199.411483,30.9255911 C199.411483,33.3937603 202.591161,32.9829852 202.591161,34.1115174 C202.591161,34.5152556 202.273353,34.7483508 201.677663,34.7483508 C200.987748,34.7483508 200.438371,34.5152556 199.543238,33.8590709 L199.543238,35.3429632 C200.168474,35.6956845 200.705872,36.0088235 201.792649,36.0088235 C203.190046,36.0088235 204.196172,35.2426883 204.196172,33.923282 C204.196172,31.5184442 201.014099,31.812232 201.014099,30.7742991" id="Fill-42"></path>
                    <polygon id="Fill-44" points="124.861465 28.95 123.336322 28.95 123.184275 28.95 123.184275 31.5618265 120.430622 31.5618265 120.430622 31.7111496 120.430622 33.0073436 120.430622 33.1540158 123.184275 33.1540158 123.184275 36.0088235 124.706619 36.0088235 124.861465 36.0088235 124.861465 33.1504815 127.607656 33.1540158 127.607656 31.7111496 127.607656 31.5618265 124.861465 31.5618265"></polygon>
                    <polygon id="Combined-Shape" points="62.971531 4.70588235 63.3220846 5.32999343 70.1626794 18.8235294 68.8888584 18.8235294 66.8487148 14.7916602 66.3846581 13.8702258 62.9745443 7.13536195 59.5885374 13.8702258 59.1244807 14.7916602 57.0852917 18.8235294 55.8086124 18.8235294"></polygon>
                    <path d="M77.4673905,17.9106669 L73.6173449,17.9106669 L73.6173449,5.61698254 L77.4075047,5.61698254 C81.114345,5.61698254 83.6590553,8.14057145 83.6590553,11.7629436 C83.6590553,15.7404158 80.7541627,17.9106669 77.4673905,17.9106669 M77.3467511,4.70588235 L72.5550239,4.70588235 L72.5550239,18.8235294 L77.5255404,18.8235294 C82.9386907,18.8235294 84.8038281,15.0355027 84.8038281,11.7629436 C84.8038281,8.66044486 83.1617431,4.70588235 77.3467511,4.70588235" id="Fill-2"></path>
                    <path d="M94.2115497,17.9106669 L90.3616031,17.9106669 L90.3616031,5.61698253 L94.1516391,5.61698253 C97.8600563,5.61698253 100.407585,8.14057141 100.407585,11.7629436 C100.407585,15.7404157 97.5014571,17.9106669 94.2115497,17.9106669 M101.55024,11.7629436 C101.55024,8.66044482 99.9065883,4.70588235 94.0891228,4.70588235 L89.3014354,4.70588235 L89.3014354,18.8235294 L94.2714611,18.8235294 C99.6869145,18.8235294 101.55024,15.0355026 101.55024,11.7629436" id="Fill-4"></path>
                    <path d="M110.185971,11.1422184 L107.564732,11.1422184 L107.564732,5.61692567 L110.135774,5.61692567 C113.035099,5.61692567 114.311083,6.77643535 114.311083,8.3694395 C114.311083,10.068174 112.967836,11.1422184 110.185971,11.1422184 M112.618472,11.7854114 C114.636353,11.1228344 115.634251,9.98358978 115.634251,8.34917451 C115.634251,6.46453077 114.265907,4.70588235 110.393782,4.70588235 L106.334928,4.70588235 L106.334928,18.8235294 L107.564732,18.8235294 L107.564732,12.0559049 L109.699068,12.0559049 C111.598487,12.0559049 112.199836,12.2823441 114.101264,14.9520359 L116.86004,18.8235294 L118.296651,18.8235294 L114.725702,13.9379054 C113.986816,12.9431589 113.36037,12.1352027 112.618472,11.7854114" id="Fill-6"></path>
                    <polygon id="Fill-8" points="123.794431 12.0594292 129.669523 12.0594292 129.669523 11.1466238 123.794431 11.1466238 123.794431 5.61692567 129.819998 5.61692567 129.819998 4.70588235 122.794258 4.70588235 122.794258 18.8235294 129.971292 18.8235294 129.971292 17.9107239 123.794431 17.9107239"></polygon>
                    <path d="M136.11551,8.31723763 C136.11551,6.82273573 137.279395,5.69391895 138.821427,5.69391895 C139.701702,5.69391895 140.379731,5.93685061 141.693945,6.74290306 L141.693945,5.57116549 C140.698211,4.98830116 139.72185,4.70588235 138.727665,4.70588235 C136.696678,4.70588235 135.043062,6.3214209 135.043062,8.35586632 C135.043062,12.8934523 141.149972,11.1800543 141.149972,15.0909968 C141.149972,16.643871 139.96749,17.8353521 138.445605,17.8353521 C137.449096,17.8353521 136.640886,17.469667 135.215088,16.363169 L135.215088,17.6113056 C136.340229,18.4199332 137.449096,18.8216718 138.500623,18.8216718 C140.586627,18.8216718 142.220096,17.1700799 142.220096,15.0506512 C142.220096,10.2315049 136.11551,11.9878237 136.11551,8.31723763" id="Fill-10"></path>
                    <path d="M148.075567,8.31723763 C148.075567,6.82273573 149.241651,5.69391895 150.780417,5.69391895 C151.664472,5.69391895 152.340103,5.93685061 153.655724,6.74290306 L153.655724,5.57116549 C152.660872,4.98830116 151.684616,4.70588235 150.68744,4.70588235 C148.657447,4.70588235 147.004785,6.3214209 147.004785,8.35586632 C147.004785,12.8934523 153.111035,11.1800543 153.111035,15.0909968 C153.111035,16.643871 151.92713,17.8353521 150.40696,17.8353521 C149.409784,17.8353521 148.600886,17.469667 147.172918,16.363169 L147.172918,17.6113056 C148.301036,18.4199332 149.409784,18.8216718 150.461972,18.8216718 C152.549301,18.8216718 154.181818,17.1700799 154.181818,15.0506512 C154.181818,10.2315049 148.075567,11.9878237 148.075567,8.31723763" id="Fill-12"></path>
                    <path d="M26.3651478,28.4551341 L19.9932597,15.0926812 L13.6378479,28.4551341 L11.6666667,28.4551341 L19.9827747,11.0638298 L28.3333333,28.4551341 L26.3651478,28.4551341 Z M0,40 L40,40 L40,0 L0,0 L0,40 Z" id="Fill-14"></path>
                </g>
            </g>
        </g>
    </g>
</svg>          </div>
        </a>

        <button type="button" class="close" data-dismiss="modal" id="modelclosesignGlobal"><i class="fal fa-times"></i></button>
      </div>
      <!-- Modal body -->
      <div class="modal-body container-fluid">

        <div class="row " id="modal_toggle">
          <div class="col-lg-12 d-flex justify-content-lg-end justify-content-center">
            <ul class="nav greytabs" id="tabs">
              <li class="nav-item">
                <a class="nav-link blacklink active body-4 stay-tab" id="pills-Stay-tab " data-toggle="pill" href="#pills-Stay" role="tab" aria-controls="pills-Stay" aria-selected="true"><i class="fal fa-hotel pr-2"></i>Stay</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link blacklink body-4 dine-tab" id="pills-profile-tab" data-toggle="pill" href="#pills-Dine" role="tab" aria-controls="pills-Dine" aria-selected="false"><i class="fal fa-utensils-alt pr-2"></i>Dine</a>
              </li> -->
              <!-- spa booking changes -->
              <!-- <li class="nav-item">
                <a class="nav-link blacklink body-4 spa-tab" id="pills-spa-tab" data-toggle="pill" href="#pills-Spa" role="tab" aria-controls="pills-Spa" aria-selected="false"><i class="fal fa-spa pr-2"></i></a>
              </li> -->
            </ul>
          </div>
        </div>
        <div class="container m-auto py-lg-3 px-0">
          <div class="row no-gutters tab-content" id="pills-tabContent">




            <!-- ------------------------------Stay booking Modal Goes Here------------------------------ -->


            <div class="col-lg-12 tab-pane fade show active  staymodifyform" id="pills-Stay" role="tabpanel" aria-labelledby="pills-Stay-tab">
              <div class="container m-auto px-0">
                <h2 class="modal-title-stay">Select a hotel and check availability                </h2>

                <hr>

                <p class="py-2 mb-sm-0 mb-md-0 d-none" id="hname"><i class="fal  fa-map-marker-alt pr-2"></i><span class="hotelName body-4"></span></p>
                <p class="body-3 secondary-semibold d-none" id="offer_name">Offer: <span class="body-3 secondary-regular offerName"></span></p>
                <div class="row modal_dropdowns">

                  <nav class="navbar navbar-expand-lg  w-100">
                    <div class=" navbar-collapse" id="navbarContent">
                      <ul class="navbar-nav w-100 h-100  align-items-center">
                        <!--hotels-->
                        <li class="nav-item dropdown hoteldropdownModal px-2 " alt="Select a hotel and check availability">
                          <a class="nav-link blacklink dropdown-toggle detect-selected-modal hotel-dropdown-fullscreen getAltAttr" href="#" id="navbarDropdownXL" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img width="12" height="16" src="/dependencies/img/wp-content/themes/emaar-projects/img/location.svg" alt="" class="booking-icon mr-1">
                            <span class="w-100"> All Hotels</span>
                          </a>
                          <a class="nav-link blacklink dropdown-toggle w-100 hotel-dropdown-mobile d-lg-none d-flex align-items-center h-72 pl-3 getAltAttr" href="#" id="" role="button" aria-haspopup="true" aria-expanded="false" data-target="#hotel_dropdown" data-toggle="modal" type="">
                            <img width="12" height="16" src="/dependencies/img/wp-content/themes/emaar-projects/img/location.svg" alt="" class="booking-icon mr-1">
                            <span class="body-4 w-100"> All Hotels</span>
                          </a>

                          <!-- dropdown-desktop-modal -->
                          <div class="allHotels_Dropdown-Menu dropdown-menu all_Hotel__dropdown stay_all_hotel_list" aria-labelledby="navbarDropdownHotel">
                            <a class="dropdown-item  hotel-highlight-cta pl-0" href="#" rel="all">All Hotels</a>
                            <section class="booking-flow-hotel-list">
                                                               <div>
                                  <div class="body-3 secondary-semibold countryName_heading">
                                    United Arab Emirates                                  </div>
                                  <div class="row no-gutters">
                                                                          <div class="individual_hotel_restaurant mb-0">
                                                                                  <div class="body-3 secondary-semibold countryName_subheading">
                                            Dubai                                          </div>
                                                                                                                          <a class="dropdown-item hotel_list_item px-lg-0" href="javascript:void(0);" value="1" rel="1">
                                            Address Downtown                                          </a>
                                                                                  <a class="dropdown-item hotel_list_item px-lg-0" href="javascript:void(0);" value="2" rel="2">
                                            Palace Downtown                                          </a>
                                                                                  <a class="dropdown-item hotel_list_item px-lg-0" href="javascript:void(0);" value="4" rel="4">
                                            Address Montgomerie                                          </a>
                                                                                  <a class="dropdown-item hotel_list_item px-lg-0" href="javascript:void(0);" value="17" rel="17">
                                            Address Dubai Mall                                          </a>
                                                                                  <a class="dropdown-item hotel_list_item px-lg-0" href="javascript:void(0);" value="42" rel="42">
                                            Address Creek Harbour                                          </a>
                                                                                  <a class="dropdown-item hotel_list_item px-lg-0" href="javascript:void(0);" value="18" rel="18">
                                            Address Sky View, Downtown Dubai                                          </a>
                                                                                  <a class="dropdown-item hotel_list_item px-lg-0" href="javascript:void(0);" value="29" rel="29">
                                            Address Beach Resort                                          </a>
                                                                                  <a class="dropdown-item hotel_list_item px-lg-0" href="javascript:void(0);" value="54" rel="54">
                                            Palace Dubai Creek Harbour                                          </a>
                                                                              </div>
                                                                          <div class="individual_hotel_restaurant mb-0">
                                                                                  <div class="body-3 secondary-semibold countryName_subheading">
                                            Fujairah                                          </div>
                                                                                                                          <a class="dropdown-item hotel_list_item px-lg-0" href="javascript:void(0);" value="40" rel="40">
                                            Palace Beach Resort Fujairah                                          </a>
                                                                                  <a class="dropdown-item hotel_list_item px-lg-0" href="javascript:void(0);" value="35" rel="35">
                                            Address Beach Resort Fujairah                                          </a>
                                                                              </div>
                                                                      </div>
                                </div>
                                                              <div>
                                  <div class="body-3 secondary-semibold countryName_heading">
                                    Bahrain                                  </div>
                                  <div class="row no-gutters">
                                                                          <div class="individual_hotel_restaurant mb-0">
                                                                                                                          <a class="dropdown-item hotel_list_item px-lg-0" href="javascript:void(0);" value="50" rel="50">
                                            Address Beach Resort Bahrain                                          </a>
                                                                              </div>
                                                                      </div>
                                </div>
                                                              <div>
                                  <div class="body-3 secondary-semibold countryName_heading">
                                    Egypt                                  </div>
                                  <div class="row no-gutters">
                                                                          <div class="individual_hotel_restaurant mb-0">
                                                                                                                          <a class="dropdown-item hotel_list_item px-lg-0" href="javascript:void(0);" value="31" rel="31">
                                            Address Marassi Golf Resort                                          </a>
                                                                                  <a class="dropdown-item hotel_list_item px-lg-0" href="javascript:void(0);" value="52" rel="52">
                                            Address Beach Resort Marassi                                          </a>
                                                                                  <a class="dropdown-item hotel_list_item px-lg-0" href="javascript:void(0);" value="61" rel="61">
                                            Palace Beach Resort                                          </a>
                                                                              </div>
                                                                      </div>
                                </div>
                                                              <div>
                                  <div class="body-3 secondary-semibold countryName_heading">
                                    Saudi Arabia                                  </div>
                                  <div class="row no-gutters">
                                                                          <div class="individual_hotel_restaurant mb-0">
                                                                                                                          <a class="dropdown-item hotel_list_item px-lg-0" href="javascript:void(0);" value="51" rel="51">
                                            Address Jabal Omar Makkah                                          </a>
                                                                              </div>
                                                                      </div>
                                </div>
                                                              <div>
                                  <div class="body-3 secondary-semibold countryName_heading">
                                    Turkey                                  </div>
                                  <div class="row no-gutters">
                                                                          <div class="individual_hotel_restaurant mb-0">
                                                                                                                          <a class="dropdown-item hotel_list_item px-lg-0" href="javascript:void(0);" value="38" rel="38">
                                            Address Istanbul                                          </a>
                                                                              </div>
                                                                      </div>
                                </div>
                                                          </section>
                          </div>

                          <!-- modal-mobile-modal -->
                          <div class="modal fade bd-example-modal-sm" id="hotel_dropdown" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                              <div class="modal-content">
                                <div class="dropdown hotel-mobile-dropdown">

                                  <a class="global-booking-modal-back-btn"><i class="fas fa-chevron-left"></i></a>

                                  <a class="dropdown-toggle d-flex align-items-center" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img width="12" height="16" src="/dependencies/img/wp-content/themes/emaar-projects/img/location.svg" alt="" class="booking-icon mr-1">
                                    <span class="body-4 w-100"> All Hotels</span>
                                  </a>
                                  <div class="dropdown-menu show  w-100 mobile_hotel_dropdown" aria-labelledby="navbarDropdownXL">
                                    <a class="dropdown-item  hotel-highlight-cta pl-lg-0" href="#" rel="all">All Hotels</a>
                                                                           <div class="width-75">
                                        <div class="body-3 secondary-semibold countryName_heading mr-0 mb-2">
                                          United Arab Emirates                                        </div>
                                        <div class="row">
                                                                                      <div class="individual_hotel_restaurant pr-3">
                                                                                              <div class="body-3 secondary-semibold pl-4">
                                                  Dubai                                                </div>
                                                                                                                                            <a class="dropdown-item hotel_list_item" href="javascript:void(0);" value="1" rel="1">
                                                  Address Downtown                                                </a>
                                                                                              <a class="dropdown-item hotel_list_item" href="javascript:void(0);" value="2" rel="2">
                                                  Palace Downtown                                                </a>
                                                                                              <a class="dropdown-item hotel_list_item" href="javascript:void(0);" value="4" rel="4">
                                                  Address Montgomerie                                                </a>
                                                                                              <a class="dropdown-item hotel_list_item" href="javascript:void(0);" value="17" rel="17">
                                                  Address Dubai Mall                                                </a>
                                                                                              <a class="dropdown-item hotel_list_item" href="javascript:void(0);" value="42" rel="42">
                                                  Address Creek Harbour                                                </a>
                                                                                              <a class="dropdown-item hotel_list_item" href="javascript:void(0);" value="18" rel="18">
                                                  Address Sky View, Downtown Dubai                                                </a>
                                                                                              <a class="dropdown-item hotel_list_item" href="javascript:void(0);" value="29" rel="29">
                                                  Address Beach Resort                                                </a>
                                                                                              <a class="dropdown-item hotel_list_item" href="javascript:void(0);" value="54" rel="54">
                                                  Palace Dubai Creek Harbour                                                </a>
                                                                                          </div>
                                                                                      <div class="individual_hotel_restaurant pr-3">
                                                                                              <div class="body-3 secondary-semibold pl-4">
                                                  Fujairah                                                </div>
                                                                                                                                            <a class="dropdown-item hotel_list_item" href="javascript:void(0);" value="40" rel="40">
                                                  Palace Beach Resort Fujairah                                                </a>
                                                                                              <a class="dropdown-item hotel_list_item" href="javascript:void(0);" value="35" rel="35">
                                                  Address Beach Resort Fujairah                                                </a>
                                                                                          </div>
                                                                                  </div>
                                      </div>
                                                                          <div class="width-75">
                                        <div class="body-3 secondary-semibold countryName_heading mr-0 mb-2">
                                          Bahrain                                        </div>
                                        <div class="row">
                                                                                      <div class="individual_hotel_restaurant pr-3">
                                                                                                                                            <a class="dropdown-item hotel_list_item" href="javascript:void(0);" value="50" rel="50">
                                                  Address Beach Resort Bahrain                                                </a>
                                                                                          </div>
                                                                                  </div>
                                      </div>
                                                                          <div class="width-75">
                                        <div class="body-3 secondary-semibold countryName_heading mr-0 mb-2">
                                          Egypt                                        </div>
                                        <div class="row">
                                                                                      <div class="individual_hotel_restaurant pr-3">
                                                                                                                                            <a class="dropdown-item hotel_list_item" href="javascript:void(0);" value="31" rel="31">
                                                  Address Marassi Golf Resort                                                </a>
                                                                                              <a class="dropdown-item hotel_list_item" href="javascript:void(0);" value="52" rel="52">
                                                  Address Beach Resort Marassi                                                </a>
                                                                                              <a class="dropdown-item hotel_list_item" href="javascript:void(0);" value="61" rel="61">
                                                  Palace Beach Resort                                                </a>
                                                                                          </div>
                                                                                  </div>
                                      </div>
                                                                          <div class="width-75">
                                        <div class="body-3 secondary-semibold countryName_heading mr-0 mb-2">
                                          Saudi Arabia                                        </div>
                                        <div class="row">
                                                                                      <div class="individual_hotel_restaurant pr-3">
                                                                                                                                            <a class="dropdown-item hotel_list_item" href="javascript:void(0);" value="51" rel="51">
                                                  Address Jabal Omar Makkah                                                </a>
                                                                                          </div>
                                                                                  </div>
                                      </div>
                                                                          <div class="width-75">
                                        <div class="body-3 secondary-semibold countryName_heading mr-0 mb-2">
                                          Turkey                                        </div>
                                        <div class="row">
                                                                                      <div class="individual_hotel_restaurant pr-3">
                                                                                                                                            <a class="dropdown-item hotel_list_item" href="javascript:void(0);" value="38" rel="38">
                                                  Address Istanbul                                                </a>
                                                                                          </div>
                                                                                  </div>
                                      </div>
                                                                      </div>

                                </div>
                              </div>

                            </div>
                          </div>
                        </li>

                        <li class="nav-item datebox d-flex datebox-fullscreen p-0 px-2 " id="datefield_modal_stay" alt="Select your check-in & check-out dates">

                          <!-- dropdown-desktop -->

                          <a href="javascript:void(0)" class="selectdate  d-flex w-100 h-72 global-booking-dropdown-desktop getAltAttr" id="datefieldStayModal" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img width="16" height="16" src="/dependencies/img/wp-content/themes/emaar-projects/img/calendar.svg" alt="" class="payment-icon">
                            <input id="datepick_modal_stay" class="w-100 datepick-input h-100 px-2" onkeydown="return false" name="" value="Check In - Check Out" autocomplete="off">
                            <span class="blacklink night_var nowrap"></span>
                          </a>

                          <!-- dropdown-mobile -->
                          <a href="javascript:void(0)" class="selectdate  d-flex w-100 global-booking-dropdown-mobile h-72 px-0 pl-3 getAltAttr" aria-haspopup="true" aria-expanded="false" data-target="#stay_calender_dropdown" data-toggle="modal">
                            <img width="16" height="16" src="/dependencies/img/wp-content/themes/emaar-projects/img/calendar.svg" alt="" class="payment-icon mr-1">
                            <input id="datepick-modal-mobile-dropdown" class="w-100 datepick-input h-100" name="" value="Check In - Check Out" autocomplete="off" readonly="">
                            <span class="blacklink night_var nowrap"></span>
                          </a>

                          <div class="modal fade bd-example-modal-sm global-booking-dropdown-mobile" id="stay_calender_dropdown" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                              <div class="modal-content">
                                <div class="global-calender-clear-back-btns">
                                  <a class="global-booking-modal-back-btn"><i class="fas fa-chevron-left"></i></a>
                                  <a href="javascript:void(0);" class="global-calender-clear-btn">
                                    <p>Clear</p>
                                  </a>
                                </div>
                                <div class="datefield-mobile datebox d-flex datebox-fullscreen" alt="Select your check-in & check-out dates ">
                                  <a class="selectdate d-flex w-100 " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img width="16" height="16" src="/dependencies/img/wp-content/themes/emaar-projects/img/calendar.svg" alt="" class="payment-icon mr-1">
                                    <input id="datepick_modal_stay_mobile" class="w-100 datepick-input" onkeydown="return false" name="" value="Check In - Check Out" autocomplete="off">
                                    <span class="night_var nowrap" class="blacklink"></span>
                                  </a>
                                </div>
                                <div class="" aria-labelledby="dropdownMenuButton">
                                  <div id="datepick_modal_stay_inside"></div>
                                </div>
                              </div>
                              <div class="global-calender-select-date-btn-box">
                                <!-- <a class="price" href="javascript:void(0);">
                                                   <p class="global-calender-all-price-text"></p>
                                                </a> -->
                                <a href="javascript:void(0);" class="global-calender-select-date-btn btn primary-btn"></a>
                              </div>
                            </div>
                          </div>


                        </li>


                        <!--rooms-->
                        <li class="nav-item dropdown add_rooms_nav_dropdown p-0 px-2 " alt="Select number of guests & rooms">

                          <!-- Dropdown-Toggle-Mobile -->
                          <a class="nav-link blacklink dropdown-toggle page_booking_cta_mobile w-100 dropdown_toggle_mobile h-72 py-0 d-flex d-lg-none align-items-center pl-3 getAltAttr" href="#" id="navbarDropdownAddRoomsMobile" role="button" aria-haspopup="true" aria-expanded="false" data-target="#guest_dropdown" data-toggle="modal" type="">


                            <img width="16" height="16" src="/dependencies/img/wp-content/themes/emaar-projects/img/guests.svg" alt="" class="booking-icon mr-1">

                            <span class="count-adult-child body-4 w-100">1 Adult, 0 Child                              <span>


                          </span></span></a>

                          <!-- Dropdown-toggle-Desktop -->
                          <a class="nav-link blacklink dropdown-toggle page_booking_cta w-100 dropdown_toggle_desktop h-72 py-0 d-lg-flex d-none align-items-center getAltAttr" href="#" id="navbarDropdownAddRooms" role="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" type="">


                            <img width="16" height="16" src="/dependencies/img/wp-content/themes/emaar-projects/img/guests.svg" alt="" class="booking-icon mr-1">
                            <span class="count-adult-child body-4 w-100">1 Adult, 0 Child</span>


                          </a>

                          <!-- Dropdown-Desktop -->
                          <div class="dropdown-menu  w-100" aria-labelledby="navbarDropdownAddRooms">
                            <div class="addRoomsDropdownModal">
                              <input type="hidden" name="no_of_rooms" id="no_of_rooms" value="1">

                              <!-- multiroom change -->
                              <div id="table_modal_container" class="table_modal_container"></div>
                              <div class="addRoomModal">
                                <div class="roomcircle addroom">
                                  <i class="fas fa-plus"></i>
                                  <span>Add a room</span>
                                </div>
                              </div>

                              <div class="book_for_someone_else_row" style="display:none;">
                                <div colspan="4">
                                  <form class="go-bottom">
                                    <label class="checkbox book_for_someone_else_label">
                                      I am booking for someone else.                                      <input type="checkbox" name="book_for_someone_else_checkbox" id="book_for_someone_else_checkbox">
                                      <span name="agree" class="geekmark mandatory"></span>
                                    </label>
                                  </form>
                                </div>
                              </div>
                              <!-- multiroom change -->

                            </div>
                          </div>


                          <!-- Dropdown Mobile -->
                          <div class="modal fade bd-example-modal-sm" id="guest_dropdown" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                              <div class="modal-content">
                                <a class="global-booking-modal-back-btn"><i class="fas fa-chevron-left"></i></a>
                                <div class="addRoomsDropdownModal mobile-persons-select">
                                  <div class="py-3 pop_up_guest">
                                    <a class="nav-link blacklink dropdown-toggle page_booking_cta w-100 pl-3" href="#" id="navbarDropdownAddRooms" role="button" aria-haspopup="true" aria-expanded="false" data-target="#guest_dropdown" data-toggle="modal" type="">
                                      <img width="16" height="16" src="/dependencies/img/wp-content/themes/emaar-projects/img/guests.svg" alt="" class="booking-icon mr-1">
                                      <span class="count-adult-child body-4">1 Adult, 0 Child</span>
                                    </a>
                                  </div>
                                  <input type="hidden" name="no_of_rooms" id="no_of_rooms" value="1">
                                  <div class="table_modal_container_mobile_main px-3">
                                    <div id="table_modal_container_mobile" class="table_modal_container"></div>
                                    <div class="addRoomModal">
                                      <div class="roomcircle addroom">
                                        <i class="fas fa-plus"></i>
                                        <span>Add a room</span>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="done_btn w-100">
                                    <button type="button" class="primary-btn h-100 w-100">Done</button>
                                  </div>
                                </div>

                              </div>
                            </div>


                        </div></li>

                        <!--promocode -->
                        <li class="nav-item dropdown codebox px-2 " alt="Select & enter your code">

                          <!--promocode Desktop -->
                          <a class="nav-link blacklink dropdown-toggle page_booking_cta w-100 global-booking-dropdown-desktop d-lg-block d-none getAltAttr" href="#" id="navbarDropdownPromoCode" role="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" type="">
                            <!-- <button type="button" id="dropdownMenu2" class=" promobtn btn  dropdown-toggle p-0">Enter Code <span class="caret"></span></button> -->
                            <!-- <span><i class="fal fa-trash-alt delete-promo-code d-none"></i></span> -->
                            <span class="promobtn btn  dropdown-toggle p-0">Enter Code</span>
                          </a>

                          <!--promocode Mobile -->
                          <a class="nav-link dropdown-toggle page_booking_cta w-100 pl-3 d-block d-lg-none getAltAttr" href="#" id="navbarDropdownPromoCode" role="button" aria-haspopup="true" aria-expanded="false" data-target="#promocode_dropdown" data-toggle="modal" type="">
                            <!-- <button type="button" id="dropdownMenu2" class="promobtn btn  dropdown-toggle p-0">Enter Code <span class="caret"></span></button> -->
                            <!-- <span><i class="fal fa-trash-alt delete-promo-code d-none"></i></span> -->
                            <span class="promobtn btn  dropdown-toggle p-0">Enter Code</span>
                          </a>


                          <!--promocode Desktop-box -->
                          <div class="desktop-promocode-box promocode-box dropdown-menu dropdown-menu-right promo-desktop promocodedropdown">
                            <div class="promocode-info-box-main">
                              <p class="mb-0">Enter Code</p>
                              <i class="fal fa-info-circle promocode-box-info-icon"></i>

                            </div>
                            <div class="promocode-info-box" style="display: none;">
                              <p>You can apply upto two codes at a time as below combination. e.g.</p>
                              <br>
                              <p>IATA +Promo Code </p>
                              <p>IATA + Corporate Code</p>
                            </div>
                            <p class="promocode-invalid-message d-none click_error" id="">You can't apply more than two codes.</p>
                            <p class="promocode-code-warning d-none iata_error" id="">You can't apply two codes without IATA code combination.</p>
                            <p class="promocode-code-warning d-none group_error" id="">This combination is not valid.</p>
                            <hr>
                            <ul>
                              <!---------------IATA Code desktop--------------------->
                              <label class="checkbox IATACheckbox">
                                <input type="checkbox" id="chkPassportIATA" class="Checkbox-input I_Checkbox" autocomplete="off">
                                <span class="geekmark">
                                </span>IATA code                              </label>

                              <div class="promocode-input-code-box promocode-input-code-box-desktop iatacode_input">
                                <i class="fas fa-check-circle promocode-validation-icon promocode-valid-icon valid iatacode_valid d-none"></i>
                                <i class="fas fa-times-circle promocode-validation-icon promocode-invalid-icon invalid iatacode_invalid d-none"></i>
                                <input type="text" placeholder="Enter IATA code" class="iatacode inputfield" autocomplete="off">
                                <button class="btn promocode-apply-btn modal_apply_btn" id="" disabled="">
                                  <svg class="button-loader" style="display: none;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200px" height="200px" viewbox="0 0 100 100" preserveaspectratio="xMidYMid">
                                    <circle cx="50" cy="50" fill="none" stroke="#ffffff" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(132.222 50 50)">
                                      <animatetransform attributename="transform" type="rotate" repeatcount="indefinite" dur="1s" values="0 50 50;360 50 50" keytimes="0;1"></animatetransform>
                                    </circle>
                                  </svg>
                                  Apply                                </button>
                                <i class="fal fa-trash-alt promocode-trash-icon trash iatacode_trash d-none"></i>
                              </div>
                              <p class="promocode-invalid-message iatacode_error error d-none"></p>

                              <!---------------Corporate Code--------------------->
                              <label class="checkbox corporateCheckbox">
                                <input type="checkbox" id="chkPassportCorporate" class="Checkbox-input C_Checkbox" autocomplete="off">
                                <span class="geekmark"></span>Corporate code                              </label>

                              <div class="promocode-input-code-box promocode-input-code-box-desktop corporatecode_input">
                                <i class="fas fa-check-circle promocode-validation-icon promocode-valid-icon corporatecode_valid valid d-none"></i>
                                <i class="fas fa-times-circle promocode-validation-icon promocode-invalid-icon corporatecode_invalid invalid d-none"></i>
                                <input type="text" placeholder="Enter corporate code" class="corporatecode inputfield" autocomplete="off">
                                <button class="btn promocode-apply-btn modal_apply_btn" disabled="">
                                  <svg class="button-loader" style="display: none;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200px" height="200px" viewbox="0 0 100 100" preserveaspectratio="xMidYMid">
                                    <circle cx="50" cy="50" fill="none" stroke="#ffffff" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(132.222 50 50)">
                                      <animatetransform attributename="transform" type="rotate" repeatcount="indefinite" dur="1s" values="0 50 50;360 50 50" keytimes="0;1"></animatetransform>
                                    </circle>
                                  </svg>
                                  Apply                                </button>
                                <i class="fal fa-trash-alt promocode-trash-icon corporatecode_trash trash d-none"></i>
                              </div>
                              <p class="promocode-invalid-message corporatecode_error error d-none"></p>
                              <!---------------Promo Code--------------------->
                              <label class="checkbox promocodeCheckbox">
                                <input type="checkbox" id="chkPassportPromo" class="Checkbox-input P_Checkbox" autocomplete="off">
                                <span class="geekmark"></span>Promo code                              </label>

                              <div class="promocode-input-code-box promocode-input-code-box-desktop promocode_input">
                                <i class="fas fa-check-circle promocode-validation-icon promocode-valid-icon  valid d-none"></i>
                                <i class="fas fa-times-circle promocode-validation-icon promocode-invalid-icon promocode_invalid invalid d-none"></i>
                                <input type="text" placeholder="Enter promo code" class="promocode inputfield" autocomplete="off">
                                <button class="btn promocode-apply-btn modal_apply_btn" disabled="">
                                  <svg class="button-loader" style="display: none;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200px" height="200px" viewbox="0 0 100 100" preserveaspectratio="xMidYMid">
                                    <circle cx="50" cy="50" fill="none" stroke="#ffffff" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(132.222 50 50)">
                                      <animatetransform attributename="transform" type="rotate" repeatcount="indefinite" dur="1s" values="0 50 50;360 50 50" keytimes="0;1"></animatetransform>
                                    </circle>
                                  </svg>
                                  Apply                                </button>
                                <i class="fal fa-trash-alt promocode-trash-icon promocode_trash trash d-none"></i>
                              </div>
                              <p class="promocode-invalid-message promocode_error error d-none"></p>

                              <!---------------Group Code--------------------->
                              <label class="checkbox groupCheckbox">
                                <input type="checkbox" id="chkPassportGroup" class="Checkbox-input G_Checkbox" autocomplete="off">
                                <span class="geekmark"></span>Group code                              </label>

                              <div class="promocode-input-code-box promocode-input-code-box-desktop groupcode_input">
                                <i class="fas fa-check-circle promocode-validation-icon promocode-valid-icon groupcode_valid valid d-none"></i>
                                <i class="fas fa-times-circle promocode-validation-icon promocode-invalid-icon groupcode_invalid invalid d-none" id=""></i>
                                <input type="text" placeholder="Enter group code" class="groupcode inputfield" autocomplete="off">
                                <button class="btn promocode-apply-btn modal_apply_btn" disabled="">
                                  <svg class="button-loader" style="display: none;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200px" height="200px" viewbox="0 0 100 100" preserveaspectratio="xMidYMid">
                                    <circle cx="50" cy="50" fill="none" stroke="#ffffff" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(132.222 50 50)">
                                      <animatetransform attributename="transform" type="rotate" repeatcount="indefinite" dur="1s" values="0 50 50;360 50 50" keytimes="0;1"></animatetransform>
                                    </circle>
                                  </svg>
                                  Apply                                </button>
                                <i class="fal fa-trash-alt promocode-trash-icon groupcode_trash trash d-none" id=""></i>
                              </div>
                              <p class="promocode-invalid-message groupcode_error error d-none" id=""></p>
                            </ul>
                          </div>
                        </li>


                        <!--promocode Mobile-box -->
                        <div class="modal fade bd-example-modal-sm" id="promocode_dropdown" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                              <a class="global-booking-modal-back-btn"><i class="fas fa-chevron-left"></i></a>
                              <div class="desktop-promocode-box promocode-box dropdown-menu dropdown-menu-right promo-mobile promocodedropdown show d-block">
                                <div class="promocode-info-box-main">
                                  <p class="mb-0">Enter Code</p>
                                  <i class="fal fa-info-circle promocode-box-info-icon"></i>

                                </div>
                                <div class="promocode-info-box" style="display: none;">
                                  <p>You can apply upto two codes at a time as below combination. e.g.</p>
                                  <br>
                                  <p>IATA +Promo Code </p>
                                  <p>IATA + Corporate Code</p>
                                </div>
                                <p class="promocode-code-warning d-none click_error" id="">You can't apply more than two codes.</p>
                                <p class="promocode-code-warning d-none iata_error" id="">You can't apply two codes without IATA code combination.</p>
                                <p class="promocode-code-warning d-none group_error" id="">This combination is not valid.</p>
                                <hr>

                                <ul>

                                  <!-------------------------mobile IATA code--------------------------->
                                  <label class="checkbox">
                                    <input type="checkbox" id="chkPassportIATA_mobile" class="Checkbox-input I_Checkbox" autocomplete="off">
                                    <span class="geekmark"></span>IATA code                                  </label>
                                  <div class="promocode-input-code-box promocode-input-code-box-mobile iatacode_input">
                                    <i class="fas fa-check-circle promocode-validation-icon promocode-valid-icon d-none valid iatacode_valid"></i>
                                    <i class="fas fa-times-circle promocode-validation-icon promocode-invalid-icon d-none invalid iatacode_invalid"></i>
                                    <input type="text" placeholder="Enter IATA code" class="iatacode inputfield" autocomplete="off">
                                    <button class="btn promocode-apply-btn modal_apply_btn" id="" disabled="">
                                      <svg class="button-loader" style="display: none;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200px" height="200px" viewbox="0 0 100 100" preserveaspectratio="xMidYMid">
                                        <circle cx="50" cy="50" fill="none" stroke="#ffffff" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(132.222 50 50)">
                                          <animatetransform attributename="transform" type="rotate" repeatcount="indefinite" dur="1s" values="0 50 50;360 50 50" keytimes="0;1"></animatetransform>
                                        </circle>
                                      </svg>
                                      Apply                                    </button>
                                    <i class="fal fa-trash-alt promocode-trash-icon iatacode_trash trash d-none"></i>
                                  </div>
                                  <p class="promocode-invalid-message iatacode_error error d-none" id=""></p>
                                  <!-------------------------mobile corporate code--------------------------->
                                  <label class="checkbox">
                                    <input type="checkbox" id="chkPassportCorporate_mobile" class="Checkbox-input C_Checkbox" autocomplete="off">
                                    <span class="geekmark"></span>Corporate code                                  </label>

                                  <div class="promocode-input-code-box promocode-input-code-box-mobile corporatecode_input">
                                    <i class="fas fa-check-circle promocode-validation-icon promocode-valid-icon corporatecode_valid valid d-none"></i>
                                    <i class="fas fa-times-circle promocode-validation-icon promocode-invalid-icon corporatecode_invalid invalid d-none"></i>
                                    <input type="text" placeholder="Enter corporate code" class="corporatecode inputfield" autocomplete="off">
                                    <button class="btn promocode-apply-btn modal_apply_btn" id="" disabled="">
                                      <svg class="button-loader" style="display: none;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200px" height="200px" viewbox="0 0 100 100" preserveaspectratio="xMidYMid">
                                        <circle cx="50" cy="50" fill="none" stroke="#ffffff" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(132.222 50 50)">
                                          <animatetransform attributename="transform" type="rotate" repeatcount="indefinite" dur="1s" values="0 50 50;360 50 50" keytimes="0;1"></animatetransform>
                                        </circle>
                                      </svg>
                                      Apply                                    </button>
                                    <i class="fal fa-trash-alt promocode-trash-icon corporatecode_trash trash d-none"></i>
                                  </div>
                                  <p class="promocode-invalid-message corporatecode_error error d-none"></p>
                                  <!------------------------mobile promo  code--------------------------->
                                  <label class="checkbox">
                                    <input type="checkbox" id="chkPassportPromo_mobile" class="Checkbox-input P_Checkbox" autocomplete="off">
                                    <span class="geekmark"></span>Promo code                                  </label>

                                  <div class="promocode-input-code-box promocode-input-code-box-mobile promocode_input">
                                    <i class="fas fa-check-circle promocode-validation-icon promocode-valid-icon promocode_valid valid d-none"></i>
                                    <i class="fas fa-times-circle promocode-validation-icon promocode-invalid-icon promocode_invalid invalid d-none"></i>
                                    <input type="text" placeholder="Enter promo code" class="promocode inputfield" autocomplete="off">
                                    <button class="btn promocode-apply-btn modal_apply_btn" disabled="">
                                      <svg class="button-loader" style="display: none;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200px" height="200px" viewbox="0 0 100 100" preserveaspectratio="xMidYMid">
                                        <circle cx="50" cy="50" fill="none" stroke="#ffffff" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(132.222 50 50)">
                                          <animatetransform attributename="transform" type="rotate" repeatcount="indefinite" dur="1s" values="0 50 50;360 50 50" keytimes="0;1"></animatetransform>
                                        </circle>
                                      </svg>
                                      Apply                                    </button>
                                    <i class="fal fa-trash-alt promocode-trash-icon promocode_trash trash d-none"></i>
                                  </div>
                                  <p class="promocode-invalid-message promocode_error error d-none"></p>
                                  <!------------------------mobile Group  code--------------------------->
                                  <label class="checkbox">
                                    <input type="checkbox" id="chkPassportGroup_mobile" class="Checkbox-input G_Checkbox" autocomplete="off">
                                    <span class="geekmark"></span>Group code                                  </label>

                                  <div class="promocode-input-code-box promocode-input-code-box-mobile groupcode_input ">
                                    <i class="fas fa-check-circle promocode-validation-icon promocode-valid-icon groupcode_valid valid d-none"></i>
                                    <i class="fas fa-times-circle promocode-validation-icon promocode-invalid-icon groupcode_invalid invalid d-none"></i>
                                    <input type="text" placeholder="Enter group code" class="groupcode inputfield" autocomplete="off">
                                    <button class="btn promocode-apply-btn modal_apply_btn" disabled="">
                                      <svg class="button-loader" style="display: none;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200px" height="200px" viewbox="0 0 100 100" preserveaspectratio="xMidYMid">
                                        <circle cx="50" cy="50" fill="none" stroke="#ffffff" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(132.222 50 50)">
                                          <animatetransform attributename="transform" type="rotate" repeatcount="indefinite" dur="1s" values="0 50 50;360 50 50" keytimes="0;1"></animatetransform>
                                        </circle>
                                      </svg>
                                      Apply                                    </button>
                                    <i class="fal fa-trash-alt promocode-trash-icon groupcode_trash trash d-none"></i>
                                  </div>
                                  <p class="promocode-invalid-message groupcode_error error d-none"></p>

                                </ul>
                              </div>

                              <div class="done_btn w-100">
                                <button type="button" class="primary-btn h-100 w-100 mobile_done_button">Done</button>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- poromocode Mobile -->
                        <li class="nav-item p-2 find_room_btn primary__cta">
                          <button class="btn blackfull2btn primary-btn h-100" id="findRoomModalBtn" type="submit">
                            <svg class="button-loader" style="display: none;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200px" height="200px" viewbox="0 0 100 100" preserveaspectratio="xMidYMid">
                              <circle cx="50" cy="50" fill="none" stroke="#ffffff" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(132.222 50 50)">
                                <animatetransform attributename="transform" type="rotate" repeatcount="indefinite" dur="1s" values="0 50 50;360 50 50" keytimes="0;1"></animatetransform>
                              </circle>
                            </svg>
                            Find Rooms                          </button>
                          <!--end -->
                        </li>
                      </ul>
                    </div>
                  </nav>
                </div>
              </div>
            </div>
            <!-- ------------------------------Spa booking Modal Goes Here------------------------------ -->
            <!-- <div class="col-lg-12 tab-pane fade" id="pills-Spa" role="tabpanel" aria-labelledby="pills-Spa-tab">
                          </div> -->
            <!-- ------------------------------Dine booking Modal Goes Here------------------------------ -->

            <script type="text/javascript">
  // Sing-in & sign-up page messaages


  var required_text = "This field is required";
  var mob_already_exist = "Looks like your mobile number already exists";
  var ubymaartext = "Use your U by Emaar credentials to sign in.";
  var welbacktext = "Welcome Back";
  var signintext = "Sign In";
  var valid_otp = "Please Enter valid otp";
  var error_only_digits = "Mobile number can only contain digits";
  var error_min_dig_7 = "Minimum allowed digits is 7";
  var error_min_dig_10 = "Maximum allowed digits is 15";
  var strong_pwd = "Please enter a strong password";
  var valid_email = "Please enter a valid Email.";
  var valid_name = "Please enter valid name.";
  var success_account_created = "Thank you! your account had been successfully created.";
  var opt_resent = "OTP has been resent!";

  // Sing-in & sign-up page messaages

  // Sing-in & sign-up Api error page messaages

  var security_token_error = "Could not set security token. Please reload and try again.";
  var server_reach_error = "Could not reach server. Please try again later.";
  var unknown_error = "We are facing an unknown error. Please try again later.";

  // Sing-in & sign-up Api error page messaages


  // Booking Modal & Widget Month&Day

  var enter_code_var = "Enter code";
  var code_applied_var = "Code applied";
  var codes_applied_var = "Codes applied";
  var hotel_modalTitle = "Select a hotel and check availability";
  var modal_title = "Search available hotels for this offer";
  var modal_title_rooms = "Select your check-in & check-out dates";
  var loading_price_var = "Loading all prices";
  var price_var = "All prices are displayed in";
  var child_text = "Child";
  var children_text = "Children";
  var adult_text = "Adult";
  var adults_text = "Adults";
  var nightVar = "Night";
  var nightsVar = "Nights";
  var minLength_error_message = "The selected dates requires a minimum of";
  // var minLength_error_message = "This offer requires a reservation of at least";
  var maxLength_error_message = "The selected dates requires a maximum of";
  var nights_stay_var = "nights stay.";
  // var nights_stay_var = "nights.";
  var select_these_dates_var = "Select these dates";
  var select_a_checkout_date_var = "Select a checkout date";
  var all_hotels_var = "All Hotels";

  //multiroom changes
  var room_var = "Room";
  var add_room_var = "Add Room";
  var view_detail_var = "View Detail";
  var hide_detail_var = "Hide Detail";


  // Months
  var month_january = "January";
  var month_february = "February";
  var month_march = "March";
  var month_april = "April";
  var month_may = "May";
  var month_june = "June";
  var month_july = "July";
  var month_August = "August";
  var month_september = "September";
  var month_october = "October";
  var month_november = "November";
  var month_december = "December";

  // var month_sunday ="";
  // var month_monday ="";
  // var month_tuesday ="";
  // var month_wednesday ="";
  // var month_thursday ="";
  // var month_friday ="";
  // var month_saturday ="";


  // dine modal
  var people_var = "people";
  var seating_var = "Seating";
  var reservDetails = "Reservation Details";
  var email_var = "Please enter a valid email address";
  var none_var = "None";

  // Booking Modal & Widget Month&Day


  // ModifyBooking Messages

  var invalid_confirmation = "Invalid Confirmation Number";
  var invalid_last_name = "Invalid Last Name";
  var select_hotel_name = "Select hotel";
  var select_resturant_name = "Select resturant";
  var invalid_email = "Invalid Email";
  // ModifyBooking Messages
  var no_upcoming_booking = "No Upcoming Bookings";

  // Akshay | 04-08-22
  var time_format;

  if (ICL == 'de') {
    time_format = 'HH:mm [Uhr]';
  } else if (ICL == 'fr' || ICL == 'ru') {
    time_format = 'HH:mm';
  } else {
    time_format = 'h:mm a';
  }


  // fetch-Global-offers-page translation
  var ube_member_only_text = "U By Emaar Members Only";
  var offer_applied_text = "Offer Applied";
  var offer_name_text = "Offer Name";

  // strings need to be translated for backend


  var hotelandresorts_Text = "Hotels & Resorts";

  // For new booking widget
  var checkin_text = "Check In - Check Out";
  var checkinmobile_text = "Check In - Out";
  var calendar_minerror = "The selected dates requires a minimum of 1 nights stay.";
  var checkout_unavail = "This date is unavailable as a Check-out Date";
  var checkin_unavail = "This date is unavailable as a Check-in Date";
  var view_all_hotel = "View All Hotels";

  var from_text = "from";
  var soldout_text = "Sold Out";
  var view_rooms_text = "View Rooms";
  var error_text = "We are having trouble in fetching data right now. Please try again later";


  var view_more_rates = "View More Rates";
  var view_less_rates = "View Less Rates";
  var currency_prefix = "Currency:";
  var hideFilterText = "Hide Filter";
  var moreFilterText = "More Filter";
</script>

<!-- ""; --><script>
   var personlg = "person";
   var personslg = "persons";
   var msglg = "Booking not avaialable for this restaurant";
   var selectrestaurantlg = "Please select restaurant";
   var selectdatelg = "Please select date";
   var serverErrorText = "Server Error: ";
   var tryAgainLater = "Please try again later, or email";
   var selecttimelg = "Please select time";
   var selectpeoplelg = "Please select number of people";
   var servererror1lg = "Server Error: Please try again later, or email";
   var servererror2lg = "or call";
   var fnamelg = "Invalid first name";
   var lnamelg = "Invalid Last name";
   var remoblg = "Invalid mobile number";
   var updatetitlelg = "Update your information";
</script>

<!-- <div class="col-lg-12 tab-pane fade " id="pills-Dine" role="tabpanel" aria-labelledby="pills-Dine-tab"> -->
<div class="col-lg-12 tab-pane fade dinemodifyform" id="pills-Dine" role="tabpanel" aria-labelledby="pills-Dine-tab">

   <div class="container m-auto px-0">
      <h2 class="modal-title-dine">Dining Reservation</h2>
      <hr>
      <div class="row body-4 information d-none">
         <div class="col-12 col-lg-6">
            <h5 class="meduimtext mb-0"><span class="dineresname">The Restaurant</span></h5>
            <p class="py-2 m-0 d-none">Global Bistronomy</p>
            <p class="py-2 mb-sm-0 mb-md-0"><i class="fal  fa-map-marker-alt pr-2"></i><span class="dinereslocation body-4">Address Dubai Mall</span></p>
         </div>
         <div class="col-12 col-lg-6 text-lg-right contact-details mt-0">
            <p class="m-0 dineresphone  d-flex align-items-center justify-content-start justify-content-lg-end "></p>
            <p class="py-2 dineresemail d-flex align-items-center justify-content-start justify-content-lg-end"></p>
         </div>
      </div>

      <div class="row block">
         <form name="checkAvailibilityForm" id="checkAvailibilityForm" class="checkAvailibilityForm" style="width: 100%;">

            <div class="col-12 modal_dropdowns px-0">
               <nav class="navbar navbar-expand-lg navbar-dark w-100">

                  <div class=" navbar-collapse h-100" id="dineBookingModal">
                     <ul class="navbar-nav w-100 h-100  align-items-center">
                        <li class="nav-item  restaurant_dropdown dropdown p-0 px-2" alt="Select Restaurant">

                           <input id="bookingresid" name="bookingresid" type="hidden" value="">
                           <!-- dropdown-desktop  -->
                           <a class="nav-link blacklink dropdown-toggle pr-0 global-booking-dropdown-desktop  d-lg-flex  align-items-center h-72 py-0 getAltAttrDine" href="javascript:void(0)" id="" data-toggle="dropdown">
                              <i class="fal fa-map-marker-alt pr-2"></i>
                              <span class="w-100 h-100 d-lg-flex d-none align-items-center dineresname">Select Restaurant</span>
                           </a>

                           <!-- dropdown-mobile  -->
                           <a class="nav-link blacklink dropdown-toggle pr-0 global-booking-dropdown-mobile  h-72 py-0 d-lg-none d-flex align-items-center pl-3 getAltAttrDine" href="javascript:void(0)" id="" aria-haspopup="true" aria-expanded="false" data-target="#dine_hotel_restaurant" data-toggle="modal">
                              <i class="fal fa-map-marker-alt pr-2"></i>
                              <span class="w-100 h-100 d-lg-none d-flex align-items-center dineresname">Select Restaurant</span>
                           </a>

                           <!---desktop  -->
                           <div class="global-booking-dropdown-desktop">
                                                                                                                     <div class="individualHotels_Dropdown-Menu dropdown-menu">
                                                <div class="individual_hotelPage_restaurant"><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Sky View" data-id="78" data-restaurant="The Restaurant At Address Sky Views" data-email="dineatskyview@addresshotels.com" data-phone="+97148738889" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Restaurant At Address Sky Views</a></div><div class="individual_hotelPage_restaurant"><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Sky View" data-id="90" data-restaurant="DeckToo at Address Sky View" data-email="dineatskyview@addresshotels.com" data-phone="+97148738889" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">DeckToo at Address Sky View</a></div><div class="individual_hotelPage_restaurant"><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Sky View" data-id="83" data-restaurant="The Patisserie" data-email="dineatskyview@addresshotels.com" data-phone="+97142458888" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Patisserie</a></div>                                                <a href="#" class=" show_all_restaurant px-3  w-100 d-inline-flex justify-content-end font-14 ">Show All</a>
                                             </div>
                                                                                    <div class="allHotels_Dropdown-Menu dropdown-menu all_Hotel__dropdown ">
                                             <div class="individual_hotel_restaurant"><div class="body-3 secondary-semibold ">Palace Downtown</div><a class="body-4 dropdown-item selected-restaurant" data-hotel="Palace Downtown" data-id="2" data-restaurant="Al Bayt at Palace Downtown" data-email="dineatpalacedowntown@addresshotels.com" data-phone="+97144287961" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Al Bayt at Palace Downtown</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Palace Downtown" data-id="7" data-restaurant="Buhayra Lounge at Palace Downtown" data-email="dineatpalacedowntown@addresshotels.com" data-phone="+97144287961" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Buhayra Lounge at Palace Downtown</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Palace Downtown" data-id="10" data-restaurant="Ewaan at Palace Downtown" data-email="dineatpalacedowntown@addresshotels.com" data-phone="+97144287961" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Ewaan at Palace Downtown</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Palace Downtown" data-id="38" data-restaurant="Thiptara" data-email="dineatpalacedowntown@addresshotels.com" data-phone="+97144287961" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Thiptara</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Palace Downtown" data-id="165" data-restaurant="Royale Ballroom at Palace Downtown" data-email="events@palacehotels.com" data-phone="+97144287888" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="7">Royale Ballroom at Palace Downtown</a></div><div class="individual_hotel_restaurant"><div class="body-3 secondary-semibold ">Address Downtown</div><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Downtown" data-id="8" data-restaurant="Cigar Lounge" data-email="dineatdowntown@addresshotels.com" data-phone="+97144368888" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Cigar Lounge</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Downtown" data-id="35" data-restaurant="Lounge at Address Downtown" data-email="dineatdowntown@addresshotels.com" data-phone="+97144368888" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Lounge at Address Downtown</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Downtown" data-id="37" data-restaurant="Cetara" data-email="dineatdowntown@addresshotels.com" data-phone="+97144368888" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Cetara</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Downtown" data-id="40" data-restaurant="Pool Lounge" data-email="dineatdowntown@addresshotels.com" data-phone="+97144368888" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Pool Lounge</a></div><div class="individual_hotel_restaurant"><div class="body-3 secondary-semibold ">Address Montgomerie </div><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Montgomerie " data-id="23" data-restaurant="Bahu" data-email="dineatmontgomerie@addresshotels.com" data-phone="+97143631275" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Bahu</a></div><div class="individual_hotel_restaurant"><div class="body-3 secondary-semibold ">Address Dubai Mall</div><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Dubai Mall" data-id="76" data-restaurant="The Tea Lounge at Address Dubai Mall" data-email="dineatdubaimall@addresshotels.com" data-phone="+97142458888" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Tea Lounge at Address Dubai Mall</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Dubai Mall" data-id="77" data-restaurant="Solara" data-email="Therestaurant.adm@addresshotels.com" data-phone="+97142458888" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Solara</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Dubai Mall" data-id="167" data-restaurant="In Room Dining" data-email="dineatdubaimall@addresshotels.com" data-phone="+97142458888" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="7">In Room Dining</a></div><div class="individual_hotel_restaurant"><div class="body-3 secondary-semibold ">Address Sky View</div><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Sky View" data-id="78" data-restaurant="The Restaurant At Address Sky Views" data-email="dineatskyview@addresshotels.com" data-phone="+97148738889" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Restaurant At Address Sky Views</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Sky View" data-id="90" data-restaurant="DeckToo at Address Sky View" data-email="dineatskyview@addresshotels.com" data-phone="+97148738889" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">DeckToo at Address Sky View</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Sky View" data-id="83" data-restaurant="The Patisserie" data-email="dineatskyview@addresshotels.com" data-phone="+97142458888" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Patisserie</a></div><div class="individual_hotel_restaurant"><div class="body-3 secondary-semibold ">Address Beach Resort</div><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Beach Resort" data-id="84" data-restaurant="Lounge at Address Beach Resort" data-email="dineatbeachresort@addresshotels.com" data-phone="+97148798866" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Lounge at Address Beach Resort</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Beach Resort" data-id="87" data-restaurant="Beach Grill" data-email="dineatbeachresort@addresshotels.com" data-phone="+97148798866" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Beach Grill</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Beach Resort" data-id="88" data-restaurant="The Restaurant at Address Beach Resort" data-email="dineatbeachresort@addresshotels.com" data-phone="+97148798866" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Restaurant at Address Beach Resort</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Beach Resort" data-id="89" data-restaurant="Zeta Seventy Seven" data-email="dineatbeachresort@addresshotels.com" data-phone="+97148798866" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Zeta Seventy Seven</a></div><div class="individual_hotel_restaurant"><div class="body-3 secondary-semibold ">Address Beach Resort Fujairah</div><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Beach Resort Fujairah" data-id="105" data-restaurant="The Restaurant at Address Fujairah" data-email="irdadfuh@addresshotels.com" data-phone="+97192047777" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Restaurant at Address Fujairah</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Beach Resort Fujairah" data-id="126" data-restaurant="SALiA at Address Fujairah" data-email="tradfuh@addresshotels.com" data-phone="+97192047777" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">SALiA at Address Fujairah</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Beach Resort Fujairah" data-id="104" data-restaurant="The Lobby Lounge at Address Fujairah" data-email="dineatbeachresortfuj@addresshotels.com" data-phone="+97192047777" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Lobby Lounge at Address Fujairah</a></div><div class="individual_hotel_restaurant"><div class="body-3 secondary-semibold ">Address Marrassi Golf Resort</div><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Marrassi Golf Resort" data-id="106" data-restaurant="The Restaurant at Address Marassi" data-email="therestaurant.admgr@addresshotels.com" data-phone="+20464681666" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Restaurant at Address Marassi</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Marrassi Golf Resort" data-id="107" data-restaurant="SoCal at Address Marassi" data-email="therestaurant.admgr@addresshotels.com" data-phone="+20464681666" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">SoCal at Address Marassi</a></div><div class="individual_hotel_restaurant"><div class="body-3 secondary-semibold ">Address Istanbul</div><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Istanbul" data-id="108" data-restaurant="The Restaurant at Address Istanbul" data-email="fb.adish@addresshotels.com" data-phone="+902162851111" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Restaurant at Address Istanbul</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Istanbul" data-id="109" data-restaurant="The Lounge at Address Istanbul" data-email="fb.adish@addresshotels.com" data-phone="+902162851111" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Lounge at Address Istanbul</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Istanbul" data-id="184" data-restaurant="In Room Dining" data-email="" data-phone="" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="7">In Room Dining</a></div><div class="individual_hotel_restaurant"><div class="body-3 secondary-semibold ">Palace Beach Resort Fujairah</div><a class="body-4 dropdown-item selected-restaurant" data-hotel="Palace Beach Resort Fujairah" data-id="114" data-restaurant="Ewaan at Palace Beach Resort Fujairah" data-email="dine.pafuh@palacehotels.com" data-phone="+97192038892" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Ewaan at Palace Beach Resort Fujairah</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Palace Beach Resort Fujairah" data-id="115" data-restaurant="Al Bayt at Palace Beach Resort Fujairah" data-email="dine.pafuh@palacehotels.com" data-phone="+97192038892" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Al Bayt at Palace Beach Resort Fujairah</a></div><div class="individual_hotel_restaurant"><div class="body-3 secondary-semibold ">Address Beach Resort Bahrain</div><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Beach Resort Bahrain" data-id="120" data-restaurant="The Restaurant at Address Bahrain" data-email="dineatbeachresortbah@addresshotels.com" data-phone="+97377998888" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Restaurant at Address Bahrain</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Beach Resort Bahrain" data-id="121" data-restaurant="The Lounge at Address Bahrain" data-email="dineatbeachresortbah@addresshotels.com" data-phone="+97377998888" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Lounge at Address Bahrain</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Beach Resort Bahrain" data-id="122" data-restaurant="The Garden at Address Bahrain" data-email="dineatbeachresortbah@addresshotels.com" data-phone="+97377998888" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Garden at Address Bahrain</a></div><div class="individual_hotel_restaurant"><div class="body-3 secondary-semibold ">Address Creek Harbour</div><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Creek Harbour" data-id="123" data-restaurant="The Restaurant at Address Creek Harbour" data-email="dineatcreek@addresshotels.com" data-phone="+97142758833" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Restaurant at Address Creek Harbour</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Creek Harbour" data-id="124" data-restaurant="The Patisserie at Address Creek Harbour" data-email="dineatcreek@addresshotels.com" data-phone="+97142758833" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Patisserie at Address Creek Harbour</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Creek Harbour" data-id="125" data-restaurant="Luma Pool Lounge at Address Creek Harbour" data-email="dineatcreek@addresshotels.com" data-phone="+97142758833" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Luma Pool Lounge at Address Creek Harbour</a></div><div class="individual_hotel_restaurant"><div class="body-3 secondary-semibold ">Palace Dubai Creek Harbour</div><a class="body-4 dropdown-item selected-restaurant" data-hotel="Palace Dubai Creek Harbour" data-id="151" data-restaurant="Orme Osteria at Palace Dubai Creek Harbour" data-email="Ewaan.PADCH@palacehotels.com" data-phone="+97145598874" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="7">Orme Osteria at Palace Dubai Creek Harbour</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Palace Dubai Creek Harbour" data-id="152" data-restaurant="Al Bayt at Palace Dubai Creek Harbour" data-email="Albayt.PADCH@palacehotels.com" data-phone="+97145598871" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="7">Al Bayt at Palace Dubai Creek Harbour</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Palace Dubai Creek Harbour" data-id="153" data-restaurant="Fai Lounge" data-email="Fai.PADCH@palacehotels.com" data-phone="+97145598875" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="7">Fai Lounge</a></div>                                             <a href="#" class="show_less_restaurant px-3  w-100 d-inline-flex justify-content-end font-14 ">Show Less</a>
                                          </div>
                                                         </div>

                           <!-- mobile view  -->
                           <div class="modal fade bd-example-modal-sm global-booking-dropdown-mobile" id="dine_hotel_restaurant" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-sm">
                                 <div class="modal-content">
                                    <a class="global-booking-modal-back-btn"><i class="fas fa-chevron-left"></i></a>
                                    <div class="datefield-mobile restaurant_dropdown dropdown" alt="Select Restaurant">
                                       <a class="dropdown-toggle pr-0" href="javascript:void(0)" id="" data-toggle="dropdown">
                                          <i class="fal fa-calendar pr-2"></i>
                                          <span>Select Restaurant</span>
                                       </a>
                                    </div>
                                    <div class="global-booking-dropdown-mobile">
                                                                                                                                                <div id="mobile-restaurants" class="individualHotels_Dropdown-Menu dropdown-menu show">
                                                         <div class="individual_hotelPage_restaurant"><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Sky View" data-id="78" data-restaurant="The Restaurant At Address Sky Views" data-email="dineatskyview@addresshotels.com" data-phone="+97148738889" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Restaurant At Address Sky Views</a></div><div class="individual_hotelPage_restaurant"><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Sky View" data-id="90" data-restaurant="DeckToo at Address Sky View" data-email="dineatskyview@addresshotels.com" data-phone="+97148738889" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">DeckToo at Address Sky View</a></div><div class="individual_hotelPage_restaurant"><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Sky View" data-id="83" data-restaurant="The Patisserie" data-email="dineatskyview@addresshotels.com" data-phone="+97142458888" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Patisserie</a></div>                                                         <a href="#" class=" show_all_restaurant px-3  w-100 d-inline-flex justify-content-end font-14 ">Show All</a>
                                                      </div>
                                                   
                                                   <div class=" dropdown-menu all_Hotel__dropdown p-3  ">
                                                      <div class="individual_hotel_restaurant"><div class="body-3 secondary-semibold ">Palace Downtown</div><a class="body-4 dropdown-item selected-restaurant" data-hotel="Palace Downtown" data-id="2" data-restaurant="Al Bayt at Palace Downtown" data-email="dineatpalacedowntown@addresshotels.com" data-phone="+97144287961" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Al Bayt at Palace Downtown</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Palace Downtown" data-id="7" data-restaurant="Buhayra Lounge at Palace Downtown" data-email="dineatpalacedowntown@addresshotels.com" data-phone="+97144287961" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Buhayra Lounge at Palace Downtown</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Palace Downtown" data-id="10" data-restaurant="Ewaan at Palace Downtown" data-email="dineatpalacedowntown@addresshotels.com" data-phone="+97144287961" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Ewaan at Palace Downtown</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Palace Downtown" data-id="38" data-restaurant="Thiptara" data-email="dineatpalacedowntown@addresshotels.com" data-phone="+97144287961" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Thiptara</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Palace Downtown" data-id="165" data-restaurant="Royale Ballroom at Palace Downtown" data-email="events@palacehotels.com" data-phone="+97144287888" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="7">Royale Ballroom at Palace Downtown</a></div><div class="individual_hotel_restaurant"><div class="body-3 secondary-semibold ">Address Downtown</div><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Downtown" data-id="8" data-restaurant="Cigar Lounge" data-email="dineatdowntown@addresshotels.com" data-phone="+97144368888" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Cigar Lounge</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Downtown" data-id="35" data-restaurant="Lounge at Address Downtown" data-email="dineatdowntown@addresshotels.com" data-phone="+97144368888" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Lounge at Address Downtown</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Downtown" data-id="37" data-restaurant="Cetara" data-email="dineatdowntown@addresshotels.com" data-phone="+97144368888" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Cetara</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Downtown" data-id="40" data-restaurant="Pool Lounge" data-email="dineatdowntown@addresshotels.com" data-phone="+97144368888" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Pool Lounge</a></div><div class="individual_hotel_restaurant"><div class="body-3 secondary-semibold ">Address Montgomerie </div><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Montgomerie " data-id="23" data-restaurant="Bahu" data-email="dineatmontgomerie@addresshotels.com" data-phone="+97143631275" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Bahu</a></div><div class="individual_hotel_restaurant"><div class="body-3 secondary-semibold ">Address Dubai Mall</div><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Dubai Mall" data-id="76" data-restaurant="The Tea Lounge at Address Dubai Mall" data-email="dineatdubaimall@addresshotels.com" data-phone="+97142458888" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Tea Lounge at Address Dubai Mall</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Dubai Mall" data-id="77" data-restaurant="Solara" data-email="Therestaurant.adm@addresshotels.com" data-phone="+97142458888" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Solara</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Dubai Mall" data-id="167" data-restaurant="In Room Dining" data-email="dineatdubaimall@addresshotels.com" data-phone="+97142458888" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="7">In Room Dining</a></div><div class="individual_hotel_restaurant"><div class="body-3 secondary-semibold ">Address Sky View</div><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Sky View" data-id="78" data-restaurant="The Restaurant At Address Sky Views" data-email="dineatskyview@addresshotels.com" data-phone="+97148738889" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Restaurant At Address Sky Views</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Sky View" data-id="90" data-restaurant="DeckToo at Address Sky View" data-email="dineatskyview@addresshotels.com" data-phone="+97148738889" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">DeckToo at Address Sky View</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Sky View" data-id="83" data-restaurant="The Patisserie" data-email="dineatskyview@addresshotels.com" data-phone="+97142458888" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Patisserie</a></div><div class="individual_hotel_restaurant"><div class="body-3 secondary-semibold ">Address Beach Resort</div><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Beach Resort" data-id="84" data-restaurant="Lounge at Address Beach Resort" data-email="dineatbeachresort@addresshotels.com" data-phone="+97148798866" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Lounge at Address Beach Resort</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Beach Resort" data-id="87" data-restaurant="Beach Grill" data-email="dineatbeachresort@addresshotels.com" data-phone="+97148798866" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Beach Grill</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Beach Resort" data-id="88" data-restaurant="The Restaurant at Address Beach Resort" data-email="dineatbeachresort@addresshotels.com" data-phone="+97148798866" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Restaurant at Address Beach Resort</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Beach Resort" data-id="89" data-restaurant="Zeta Seventy Seven" data-email="dineatbeachresort@addresshotels.com" data-phone="+97148798866" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Zeta Seventy Seven</a></div><div class="individual_hotel_restaurant"><div class="body-3 secondary-semibold ">Address Beach Resort Fujairah</div><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Beach Resort Fujairah" data-id="105" data-restaurant="The Restaurant at Address Fujairah" data-email="irdadfuh@addresshotels.com" data-phone="+97192047777" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Restaurant at Address Fujairah</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Beach Resort Fujairah" data-id="126" data-restaurant="SALiA at Address Fujairah" data-email="tradfuh@addresshotels.com" data-phone="+97192047777" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">SALiA at Address Fujairah</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Beach Resort Fujairah" data-id="104" data-restaurant="The Lobby Lounge at Address Fujairah" data-email="dineatbeachresortfuj@addresshotels.com" data-phone="+97192047777" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Lobby Lounge at Address Fujairah</a></div><div class="individual_hotel_restaurant"><div class="body-3 secondary-semibold ">Address Marrassi Golf Resort</div><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Marrassi Golf Resort" data-id="106" data-restaurant="The Restaurant at Address Marassi" data-email="therestaurant.admgr@addresshotels.com" data-phone="+20464681666" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Restaurant at Address Marassi</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Marrassi Golf Resort" data-id="107" data-restaurant="SoCal at Address Marassi" data-email="therestaurant.admgr@addresshotels.com" data-phone="+20464681666" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">SoCal at Address Marassi</a></div><div class="individual_hotel_restaurant"><div class="body-3 secondary-semibold ">Address Istanbul</div><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Istanbul" data-id="108" data-restaurant="The Restaurant at Address Istanbul" data-email="fb.adish@addresshotels.com" data-phone="+902162851111" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Restaurant at Address Istanbul</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Istanbul" data-id="109" data-restaurant="The Lounge at Address Istanbul" data-email="fb.adish@addresshotels.com" data-phone="+902162851111" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Lounge at Address Istanbul</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Istanbul" data-id="184" data-restaurant="In Room Dining" data-email="" data-phone="" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="7">In Room Dining</a></div><div class="individual_hotel_restaurant"><div class="body-3 secondary-semibold ">Palace Beach Resort Fujairah</div><a class="body-4 dropdown-item selected-restaurant" data-hotel="Palace Beach Resort Fujairah" data-id="114" data-restaurant="Ewaan at Palace Beach Resort Fujairah" data-email="dine.pafuh@palacehotels.com" data-phone="+97192038892" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Ewaan at Palace Beach Resort Fujairah</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Palace Beach Resort Fujairah" data-id="115" data-restaurant="Al Bayt at Palace Beach Resort Fujairah" data-email="dine.pafuh@palacehotels.com" data-phone="+97192038892" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Al Bayt at Palace Beach Resort Fujairah</a></div><div class="individual_hotel_restaurant"><div class="body-3 secondary-semibold ">Address Beach Resort Bahrain</div><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Beach Resort Bahrain" data-id="120" data-restaurant="The Restaurant at Address Bahrain" data-email="dineatbeachresortbah@addresshotels.com" data-phone="+97377998888" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Restaurant at Address Bahrain</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Beach Resort Bahrain" data-id="121" data-restaurant="The Lounge at Address Bahrain" data-email="dineatbeachresortbah@addresshotels.com" data-phone="+97377998888" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Lounge at Address Bahrain</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Beach Resort Bahrain" data-id="122" data-restaurant="The Garden at Address Bahrain" data-email="dineatbeachresortbah@addresshotels.com" data-phone="+97377998888" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Garden at Address Bahrain</a></div><div class="individual_hotel_restaurant"><div class="body-3 secondary-semibold ">Address Creek Harbour</div><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Creek Harbour" data-id="123" data-restaurant="The Restaurant at Address Creek Harbour" data-email="dineatcreek@addresshotels.com" data-phone="+97142758833" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Restaurant at Address Creek Harbour</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Creek Harbour" data-id="124" data-restaurant="The Patisserie at Address Creek Harbour" data-email="dineatcreek@addresshotels.com" data-phone="+97142758833" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Patisserie at Address Creek Harbour</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Creek Harbour" data-id="125" data-restaurant="Luma Pool Lounge at Address Creek Harbour" data-email="dineatcreek@addresshotels.com" data-phone="+97142758833" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Luma Pool Lounge at Address Creek Harbour</a></div><div class="individual_hotel_restaurant"><div class="body-3 secondary-semibold ">Palace Dubai Creek Harbour</div><a class="body-4 dropdown-item selected-restaurant" data-hotel="Palace Dubai Creek Harbour" data-id="151" data-restaurant="Orme Osteria at Palace Dubai Creek Harbour" data-email="Ewaan.PADCH@palacehotels.com" data-phone="+97145598874" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="7">Orme Osteria at Palace Dubai Creek Harbour</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Palace Dubai Creek Harbour" data-id="152" data-restaurant="Al Bayt at Palace Dubai Creek Harbour" data-email="Albayt.PADCH@palacehotels.com" data-phone="+97145598871" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="7">Al Bayt at Palace Dubai Creek Harbour</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Palace Dubai Creek Harbour" data-id="153" data-restaurant="Fai Lounge" data-email="Fai.PADCH@palacehotels.com" data-phone="+97145598875" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="7">Fai Lounge</a></div>                                                      <a href="#" class="show_less_restaurant px-3  w-100 d-inline-flex justify-content-end font-14 ">Show Less</a>
                                                   </div>
                                                                           </div>
                                 </div>
                              </div>
                           </div>
                        </li>

                        <!-- date -->
                        <li class="nav-item dinedatebox dropdown p-0 px-2 " alt="Select date & time">
                           <input id="daterangeboxtxt" name="daterangeboxtxt" type="hidden" value="">

                           <!-- -desktop  -->
                           <a class="nav-link blacklink d-block pr-0 dropdown-toggle global-booking-dropdown-desktop getAltAttrDine" id="datepick_modal_dine_desktop" type="" data-toggle="dropdown" href="javascript:void(0)">
                              <i class="fal fa-calendar"></i>
                              <span class="w-100 h-100">Date</span>
                           </a>

                           <!-- -mobile  -->
                           <a class="nav-link blacklink d-lg-none d-flex align-items-center h-72 pr-0 dropdown-toggle global-booking-dropdown- pl-3 getAltAttrDine" id="datepick_modal_dine_mobile123" type="" aria-haspopup="true" aria-expanded="false" data-target="#dine_hotel_datebox" data-toggle="modal" href="javascript:void(0)">
                              <i class="fal fa-calendar"></i>
                              <input id="datepick_modal_dine_mobile" class="w-100 datepick-input h-100" onkeydown="return false" name="" value="Date" autocomplete="off">
                              <!-- <span class="d-flex align-items-center h-100 w-100"></span> -->
                           </a>

                           <!-- -mobile modal -->
                           <div class="modal  fade bd-example-modal-sm global-booking-dropdown-mobile" id="dine_hotel_datebox" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-sm">
                                 <div class="modal-content">
                                    <a class="global-booking-modal-back-btn"><i class="fas fa-chevron-left"></i></a>
                                    <div class="datebox datefield-mobile" alt="Date">
                                       <a class="nav-link blacklink d-block pr-0" data-toggle="dropdown" href="javascript:void(0)">
                                          <i class="fal fa-calendar pr-2"></i>
                                          <span>Date</span>
                                       </a>
                                    </div>
                                    <div class="" aria-labelledby="dropdownMenuButton">
                                       <div id="datepick_modal_dine_inside"></div>
                                    </div>
                                 </div>

                              </div>
                           </div>

                        </li>

                        <!--time-->
                        <li class="nav-item dropdown timedropdown p-0 px-2 " alt="Select date & time">

                           <input id="timerangeboxtxt" name="timerangeboxtxt" type="hidden" value="">
                           <!-- dropdown-desktop  -->
                           <a class="nav-link blacklink dropdown-toggle pr-0 global-booking-dropdown-desktop d-none d-lg-flex align-items-center h-72 getAltAttrDine" id="navbarDropdownTime" href="javascript:void(0)" data-toggle="dropdown">
                              <i class="fal fa-clock pr-2"></i>
                              <span class="">Time</span>
                           </a>
                           <!-- dropdown-mobile  -->
                           <a class="nav-link blacklink dropdown-toggle pr-0 global-booking-dropdown-mobile d-lg-none d-flex align-items-center h-72 pl-3 getAltAttrDine" href="javascript:void(0)" aria-expanded="false" data-target="#time_dine_dropdown" data-toggle="modal">
                              <i class="fal fa-clock pr-2"></i>
                              <span class="d-flex h-100 w-100 align-items-center">Time</span>
                           </a>

                           <!-- content of dropdown-desktop  -->
                           <div class="global-booking-dropdown-desktop">
                              <div id="timeDropdownId" class="dropdown-menu longdropdown navbarDropdownTime w-100 d-none" aria-labelledby="navbarDropdownTime">
                              </div>
                           </div>

                           <!-- content of dropdown-mobile modal  -->
                           <div class="modal fade bd-example-modal-sm global-booking-dropdown-mobile navbarDropdownTime-mobile d-none" id="time_dine_dropdown" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-sm">
                                 <div class="modal-content">
                                    <a class="global-booking-modal-back-btn"><i class="fas fa-chevron-left"></i></a>
                                    <div class="datefield-mobile timedropdown dropdown p-0 ">
                                       <a class="nav-link blacklink dropdown-toggle detect-selected w-100 d-flex align-items-center h-72 pl-3" href="#" data-toggle="dropdown">
                                          <i class="fal fa-clock pr-2"></i>
                                          <span>Time</span>
                                       </a>
                                       <div id="timeDropdownId" class="dropdown-menu longdropdown navbarDropdownTime w-100 show" aria-labelledby="navbarDropdownTime">
                                       </div>
                                    </div>

                                 </div>
                              </div>
                           </div>
                        </li>

                        <!--number of peaple -->
                        <li class="nav-item dropdown nopdropdown p-0 px-2 " alt="Select number of guests">
                           <input id="pax" name="pax" type="hidden" value="">
                           <!-- dropdown-desktop  -->
                           <a class="nav-link blacklink dropdown-toggle detect-selected w-100 global-booking-dropdown-desktop d-lg-flex d-none align-items-center h-72 getAltAttrDine" href="#" id="navbarDropdownXL" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fal fa-user-friends pr-2"></i>
                              <span>Number of people</span>
                           </a>

                           <!-- dropdown-mobile  -->
                           <a class="nav-link blacklink dropdown-toggle detect-selected w-100 global-booking-dropdown-mobile d-lg-none d-flex align-items-center h-72 pl-3 getAltAttrDine" href="#" id="navbarDropdownXL" role="button" aria-expanded="false" data-target="#dine_hotel_numberofpeople" data-toggle="modal">
                              <i class="fal fa-user-friends pr-2"></i>
                              <span>Number of people</span>
                           </a>

                           <!-- content-desktop  -->
                           <div class="global-booking-dropdown-desktop">
                              <div class="dropdown-menu w-100  longdropdown peopleDropdown d-none" id="peopleDropdown" aria-labelledby="navbarDropdownXL">
                                 <a class="dropdown-item large-party-option" data-value="0" href="javascript:void(0)" rel="all"> Large Party</a>
                              </div>
                           </div>

                           <!-- content-mobile  -->
                           <div class="modal fade bd-example-modal-sm global-booking-dropdown-mobile peopleDropdown-mobile d-none" id="dine_hotel_numberofpeople" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-sm">
                                 <div class="modal-content">
                                    <a class="global-booking-modal-back-btn"><i class="fas fa-chevron-left"></i></a>
                                    <div class="datefield-mobile nopdropdown dropdown" alt="Number of People">
                                       <a class="nav-link blacklink dropdown-toggle detect-selected w-100 " href="#" data-toggle="dropdown">
                                          <i class="fal fa-user-friends pr-2"></i><span>Number of people</span>
                                       </a>
                                    </div>
                                    <div class="dropdown-menu w-100  longdropdown peopleDropdown" id="peopleDropdown" aria-labelledby="navbarDropdownXL">
                                       <a class="dropdown-item large-party-option" data-value="0" href="javascript:void(0)" rel="all"> Large Party</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>

                        <li class="nav-item p-2 modalCheckAvailibilitybtn primary__cta show-desktop" id="modalCheckAvailibilitybtn_1">
                           <button class="btn primary-btn h-100 w-100 blackfull2btn bookingdinebtn modalAvailibilitybtn" type="submit">
                              <svg class="button-loader" style="display: none;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200px" height="200px" viewbox="0 0 100 100" preserveaspectratio="xMidYMid">
                                 <circle cx="50" cy="50" fill="none" stroke="#ffffff" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(132.222 50 50)">
                                    <animatetransform attributename="transform" type="rotate" repeatcount="indefinite" dur="1s" values="0 50 50;360 50 50" keytimes="0;1"></animatetransform>
                                 </circle>
                              </svg>
                              Check Availability
                           </button>
                        </li>


                     </ul>
                     <div class="row select_time_dine_mobile">
                        <div class="col-12 timerangebox">
                           <h5 class="col-12 select_time_header meduimtext py-3">Select a time</h5>
                        </div>
                     </div>
                     <div class="p-2 modalCheckAvailibilitybtn show-mobile w-100" id="modalCheckAvailibilitybtn_1">
                        <button class="btn primary-btn h-100  blackfull2btn bookingdinebtn modalAvailibilitybtn" type="submit">
                           <svg class="button-loader" style="display: none;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200px" height="200px" viewbox="0 0 100 100" preserveaspectratio="xMidYMid">
                              <circle cx="50" cy="50" fill="none" stroke="#ffffff" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(132.222 50 50)">
                                 <animatetransform attributename="transform" type="rotate" repeatcount="indefinite" dur="1s" values="0 50 50;360 50 50" keytimes="0;1"></animatetransform>
                              </circle>
                           </svg>
                           Check Availability                        </button>
                     </div>
                  </div>
               </nav>
            </div>
            <div class="col-md-12 col-ms-12 input-fields">
               <input id="tabletyperangetetxt" name="tabletyperangetetxt" type="hidden" value="">
               <input id="modifybooking" name="modifybooking" type="hidden" value="">
               <input id="modifyconfirmationNumber" name="modifyconfirmationNumber" type="hidden" value="">
               <input id="modifySeating" name="modifySeating" type="hidden" value="">
            </div>
            <div class="col-md-12 col-ms-12 api-error hide"></div>

            <div class="col-md-12 col-ms-12 large-party-msg d-none">
               <div class="col-md-6 offset-md-3 text-center mb-5 mt-5">
                  <dl>
                     <dd>
                        <h2>Looking to Make a Group Booking?</h2>
                     </dd>
                     <dd>Contact our group reservations team at</dd>
                     <dd></dd>
                     <dd><i class="fal fa-phone-alt pr-2"></i>&nbsp;Telephone:<span id="wp_block-phone" class="dir-ltr"></span></dd>
                     <dd><i class="fal fa-envelope pr-2"></i>&nbsp;Email:<span id="wp_block-email" class="dir-ltr"></span></dd>
                  </dl>
               </div>
         </div></form>

      </div>
      <div class="container">
         <div class="row select_time_dine_desktop d-none">
            <div class="col-12 py-3 timerangebox ">
               <h5 class="meduimtext pb-3">Select a time</h5>
            </div>
         </div>
      </div>


      <div class="row">
         <div class="col-12 py-3 tabletyperange d-none">
            <h5 class="meduimtext pb-3">Select a table type</h5>
            <a href="#" data-value="0" data-name="Standard" class="tabletypebox">Standard Seating</a>
            <a href="#" data-value="1" data-name="Window" class="tabletypebox">Window Seating</a>
            <a href="#" data-value="2" data-name="Hightop" class="tabletypebox">Hightop Seating</a>
            <a href="#" data-value="3" data-name="Bar" class="tabletypebox">Bar Seating</a>
            <a href="#" data-value="4" data-name="Counter" class="tabletypebox">Counter Seating</a>
            <a href="#" data-value="5" data-name="Outdoor" class="tabletypebox">Outdoor Seating</a>
         </div>
      </div>
   </div>
</div>


<script>
   var hotelNameStatus = "18"
   $('#dine_hotel_restaurant .modal-content .dropdown-menu .dropdown-item').click(function() {
      $('#dineBookingModal .restaurant_dropdown .global-booking-dropdown-mobile  span').text($(this).text());
      $('#dine_hotel_restaurant').modal('hide');
   });

   $('#time_dine_dropdown .modal-content .dropdown-menu').on('click', '.dropdown-item', function() {
      $('#dineBookingModal .timedropdown .global-booking-dropdown-mobile  span').text($(this).text());
      $('#time_dine_dropdown').modal('hide');
   });

   $('#dine_hotel_numberofpeople .modal-content .dropdown-menu').on('click', '.dropdown-item', function() {
      $('#dineBookingModal .nopdropdown .global-booking-dropdown-mobile  span').text($(this).text());
      $('#dine_hotel_numberofpeople').modal('hide');
   });


   $(document).ready(function() {
      // ----------------Modal Hide Functionality---------------------
      $('.global-booking-modal-back-btn').click(function() {
         $('#time_dine_dropdown').modal('hide');
      });

      $('.global-booking-modal-back-btn').click(function() {
         $('#dine_hotel_restaurant').modal('hide');
      });

      $('.global-booking-modal-back-btn').click(function() {
         $('#dine_hotel_datebox').modal('hide');
      });
      $('.global-booking-modal-back-btn').click(function() {
         $('#dine_hotel_numberofpeople').modal('hide');
      });
   });

   if (hotelNameStatus != "") {
      $('#dine_hotel_restaurant').on('show.bs.modal', function() {
         $('#mobile-restaurants').addClass('show')
      })
      $('#dine_hotel_restaurant').on('hidden.bs.modal', function() {
         $('.all_Hotel__dropdown.show').removeClass('show')
      })

      $('.show_all_restaurant').click(function() {
         $('.individualHotels_Dropdown-Menu.show').removeClass('show');
         $('.all_Hotel__dropdown').addClass('show');
         // $('#mobile-restaurants.show').removeClass('show');
      })

      $('.individual_hotelPage_restaurant .dropdown-item, .all_Hotel__dropdown .individual_hotel_restaurant .dropdown-item').click(function() {
         $('.individualHotels_Dropdown-Menu.show').removeClass('show')
         $('.allHotels_Dropdown-Menu.show').removeClass('show')
      })


      $('.show_less_restaurant').click(function() {
         $('.individualHotels_Dropdown-Menu').addClass('show');
         $('.all_Hotel__dropdown').removeClass('show')
      })
   } else {
      $('.global-booking-dropdown-mobile .all_Hotel__dropdown').addClass('show');
      $('.show_all_restaurant').removeClass('d-inline-flex').hide();
      $('.show_less_restaurant').removeClass('d-inline-flex').hide();
   }

   </script>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>


<div class="modal fade bookingmodal p-0 bookingdineModal " id="bookingconfirmdineModal">
  <div class="modal-dialog">

    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header pl-0 pr-0 container">
                <a href="/dependencies/vendor/en.bin">

          <!-- <img class="booking-modal_logo" style="height:40px;" src="" alt="Address Hotels + Resorts"> -->

          <div class="booking-modal_logo d-inline-block" style="height:40px;" id="" alt="Address Hotels + Resorts">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="205px" height="40px" viewbox="0 0 205 40" version="1.1">
    <g id="Error-Pages" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="error-404---1364" transform="translate(-24.000000, -24.000000)" fill="#25282D">
            <g id="component/header/transparent/1364">
                <g id="address-HR-logo@SVG" transform="translate(24.000000, 24.000000)">
                    <polygon id="Fill-17" points="61.1886272 31.7821994 57.6037909 31.7821994 57.6037909 28.95 55.8086124 28.95 55.8086124 36.0088235 57.6037909 36.0088235 57.6037909 33.1504335 61.1886272 33.1504335 61.1886272 36.0088235 62.9856459 36.0088235 62.9856459 28.95 61.1886272 28.95"></polygon>
                    <path d="M71.3688446,34.5768279 C70.1725389,34.5768279 69.3824803,33.7429632 69.3824803,32.4807311 C69.3824803,31.21674 70.1725389,30.3793568 71.3688446,30.3793568 C72.5531313,30.3793568 73.3439912,31.21674 73.3439912,32.4807311 C73.3439912,33.7429632 72.5531313,34.5768279 71.3688446,34.5768279 M71.3688446,28.95 C69.0066816,28.95 67.7751196,30.8130016 67.7751196,32.4807311 C67.7751196,34.2337823 69.0691812,36.0088235 71.3688446,36.0088235 C73.6196303,36.0088235 74.9521531,34.2469764 74.9521531,32.4807311 C74.9521531,30.8253161 73.7262001,28.95 71.3688446,28.95" id="Fill-20"></path>
                    <polygon id="Fill-22" points="79.7416268 30.237856 82.4132246 30.237856 82.4132246 36.0088235 84.2489469 36.0088235 84.2489469 30.237856 86.9186603 30.237856 86.9186603 28.95 79.7416268 28.95"></polygon>
                    <polygon id="Fill-24" points="93.3259727 33.0203836 96.2838556 33.0203836 96.2838556 31.7253025 93.3259727 31.7253025 93.3259727 30.237856 96.4239959 30.237856 96.4239959 28.95 91.708134 28.95 91.708134 36.0088235 96.492823 36.0088235 96.492823 34.7137426 93.3259727 34.7137426"></polygon>
                    <polygon id="Fill-26" points="102.84751 28.95 101.282297 28.95 101.282297 36.0088235 106.066986 36.0088235 106.066986 34.7144801 102.84751 34.7144801"></polygon>
                    <path d="M112.462804,30.7742991 C112.462804,30.4312535 112.818262,30.207834 113.379005,30.207834 C113.911791,30.207834 114.449369,30.3793568 115.356783,30.8261958 L115.356783,29.4830402 C114.569186,29.1083288 113.937352,28.95 113.241614,28.95 C111.793428,28.95 110.856459,29.7354865 110.856459,30.9255911 C110.856459,33.3937603 114.038797,32.9829852 114.038797,34.1115174 C114.038797,34.5152556 113.718486,34.7483508 113.120999,34.7483508 C112.434048,34.7483508 111.884489,34.5152556 110.988258,33.8590709 L110.988258,35.3429632 C111.611306,35.6956845 112.152878,36.0088235 113.241614,36.0088235 C114.633089,36.0088235 115.641148,35.2426883 115.641148,33.923282 C115.641148,31.5184442 112.462804,31.812232 112.462804,30.7742991" id="Fill-28"></path>
                    <path d="M135.52008,31.8484984 L134.435155,31.8484984 L134.435155,30.2380207 L135.469862,30.2380207 C136.235691,30.2380207 136.631161,30.5107994 136.631161,31.0410014 C136.631161,31.6425596 136.077713,31.8484984 135.52008,31.8484984 M137.32794,32.7056734 C138.262209,32.3335384 138.735098,31.7554646 138.735098,30.9750649 C138.735098,29.9227899 137.734917,28.95 136.054696,28.95 L132.397129,28.95 L132.397129,36.0088235 L134.435155,36.0088235 L134.435155,33.1446483 L135.027313,33.1446483 C136.127931,33.1446483 136.451211,34.5022186 137.32794,36.0088235 L139.574163,36.0088235 C138.420188,33.9404031 138.165958,33.0678729 137.32794,32.7056734" id="Fill-30"></path>
                    <polygon id="Fill-32" points="145.983146 33.0203836 148.940909 33.0203836 148.940909 31.7253025 145.983146 31.7253025 145.983146 30.237856 149.085271 30.237856 149.085271 28.95 144.363636 28.95 144.363636 36.0088235 149.148325 36.0088235 149.148325 34.7137426 145.983146 34.7137426"></polygon>
                    <path d="M155.540426,30.7742991 C155.540426,30.4312535 155.901897,30.207834 156.457698,30.207834 C156.987108,30.207834 157.530914,30.3793568 158.439389,30.8261958 L158.439389,29.4830402 C157.651671,29.1083288 157.016698,28.95 156.323346,28.95 C154.873464,28.95 153.937799,29.7354865 153.937799,30.9255911 C153.937799,33.3937603 157.116662,32.9829852 157.116662,34.1115174 C157.116662,34.5152556 156.795977,34.7483508 156.20179,34.7483508 C155.514035,34.7483508 154.963833,34.5152556 154.064154,33.8590709 L154.064154,35.3429632 C154.687931,35.6956845 155.226138,36.0088235 156.323346,36.0088235 C157.71085,36.0088235 158.722488,35.2426883 158.722488,33.923282 C158.722488,31.5184442 155.540426,31.812232 155.540426,30.7742991" id="Fill-34"></path>
                    <path d="M167.103684,34.5768279 C165.91045,34.5768279 165.117097,33.7429632 165.117097,32.4807311 C165.117097,31.21674 165.91045,30.3793568 167.103684,30.3793568 C168.290506,30.3793568 169.083058,31.21674 169.083058,32.4807311 C169.083058,33.7429632 168.290506,34.5768279 167.103684,34.5768279 M167.103684,28.95 C164.738052,28.95 163.511962,30.8130016 163.511962,32.4807311 C163.511962,34.2337823 164.805366,36.0088235 167.103684,36.0088235 C169.354721,36.0088235 170.688995,34.2469764 170.688995,32.4807311 C170.688995,30.8253161 169.462905,28.95 167.103684,28.95" id="Fill-36"></path>
                    <path d="M178.603783,31.8484984 L177.523672,31.8484984 L177.523672,30.2380207 L178.553594,30.2380207 C179.318977,30.2380207 179.714216,30.5107994 179.714216,31.0410014 C179.714216,31.6425596 179.165273,31.8484984 178.603783,31.8484984 M180.413725,32.7056734 C181.348496,32.3335384 181.816927,31.7554646 181.816927,30.9750649 C181.816927,29.9227899 180.821511,28.95 179.146452,28.95 L175.478469,28.95 L175.478469,36.0088235 L177.523672,36.0088235 L177.523672,33.1446483 L178.10712,33.1446483 C179.215462,33.1446483 179.541691,34.5022186 180.413725,36.0088235 L182.655502,36.0088235 C181.5022,33.9404031 181.256483,33.0678729 180.413725,32.7056734" id="Fill-38"></path>
                    <polygon id="Fill-40" points="187.444976 30.237856 190.112104 30.237856 190.112104 36.0088235 191.951113 36.0088235 191.951113 30.237856 194.62201 30.237856 194.62201 28.95 187.444976 28.95"></polygon>
                    <path d="M201.014099,30.7742991 C201.014099,30.4312535 201.375026,30.207834 201.933187,30.207834 C202.464198,30.207834 203.004791,30.3793568 203.911902,30.8261958 L203.911902,29.4830402 C203.125366,29.1083288 202.494542,28.95 201.792649,28.95 C200.348139,28.95 199.411483,29.7354865 199.411483,30.9255911 C199.411483,33.3937603 202.591161,32.9829852 202.591161,34.1115174 C202.591161,34.5152556 202.273353,34.7483508 201.677663,34.7483508 C200.987748,34.7483508 200.438371,34.5152556 199.543238,33.8590709 L199.543238,35.3429632 C200.168474,35.6956845 200.705872,36.0088235 201.792649,36.0088235 C203.190046,36.0088235 204.196172,35.2426883 204.196172,33.923282 C204.196172,31.5184442 201.014099,31.812232 201.014099,30.7742991" id="Fill-42"></path>
                    <polygon id="Fill-44" points="124.861465 28.95 123.336322 28.95 123.184275 28.95 123.184275 31.5618265 120.430622 31.5618265 120.430622 31.7111496 120.430622 33.0073436 120.430622 33.1540158 123.184275 33.1540158 123.184275 36.0088235 124.706619 36.0088235 124.861465 36.0088235 124.861465 33.1504815 127.607656 33.1540158 127.607656 31.7111496 127.607656 31.5618265 124.861465 31.5618265"></polygon>
                    <polygon id="Combined-Shape" points="62.971531 4.70588235 63.3220846 5.32999343 70.1626794 18.8235294 68.8888584 18.8235294 66.8487148 14.7916602 66.3846581 13.8702258 62.9745443 7.13536195 59.5885374 13.8702258 59.1244807 14.7916602 57.0852917 18.8235294 55.8086124 18.8235294"></polygon>
                    <path d="M77.4673905,17.9106669 L73.6173449,17.9106669 L73.6173449,5.61698254 L77.4075047,5.61698254 C81.114345,5.61698254 83.6590553,8.14057145 83.6590553,11.7629436 C83.6590553,15.7404158 80.7541627,17.9106669 77.4673905,17.9106669 M77.3467511,4.70588235 L72.5550239,4.70588235 L72.5550239,18.8235294 L77.5255404,18.8235294 C82.9386907,18.8235294 84.8038281,15.0355027 84.8038281,11.7629436 C84.8038281,8.66044486 83.1617431,4.70588235 77.3467511,4.70588235" id="Fill-2"></path>
                    <path d="M94.2115497,17.9106669 L90.3616031,17.9106669 L90.3616031,5.61698253 L94.1516391,5.61698253 C97.8600563,5.61698253 100.407585,8.14057141 100.407585,11.7629436 C100.407585,15.7404157 97.5014571,17.9106669 94.2115497,17.9106669 M101.55024,11.7629436 C101.55024,8.66044482 99.9065883,4.70588235 94.0891228,4.70588235 L89.3014354,4.70588235 L89.3014354,18.8235294 L94.2714611,18.8235294 C99.6869145,18.8235294 101.55024,15.0355026 101.55024,11.7629436" id="Fill-4"></path>
                    <path d="M110.185971,11.1422184 L107.564732,11.1422184 L107.564732,5.61692567 L110.135774,5.61692567 C113.035099,5.61692567 114.311083,6.77643535 114.311083,8.3694395 C114.311083,10.068174 112.967836,11.1422184 110.185971,11.1422184 M112.618472,11.7854114 C114.636353,11.1228344 115.634251,9.98358978 115.634251,8.34917451 C115.634251,6.46453077 114.265907,4.70588235 110.393782,4.70588235 L106.334928,4.70588235 L106.334928,18.8235294 L107.564732,18.8235294 L107.564732,12.0559049 L109.699068,12.0559049 C111.598487,12.0559049 112.199836,12.2823441 114.101264,14.9520359 L116.86004,18.8235294 L118.296651,18.8235294 L114.725702,13.9379054 C113.986816,12.9431589 113.36037,12.1352027 112.618472,11.7854114" id="Fill-6"></path>
                    <polygon id="Fill-8" points="123.794431 12.0594292 129.669523 12.0594292 129.669523 11.1466238 123.794431 11.1466238 123.794431 5.61692567 129.819998 5.61692567 129.819998 4.70588235 122.794258 4.70588235 122.794258 18.8235294 129.971292 18.8235294 129.971292 17.9107239 123.794431 17.9107239"></polygon>
                    <path d="M136.11551,8.31723763 C136.11551,6.82273573 137.279395,5.69391895 138.821427,5.69391895 C139.701702,5.69391895 140.379731,5.93685061 141.693945,6.74290306 L141.693945,5.57116549 C140.698211,4.98830116 139.72185,4.70588235 138.727665,4.70588235 C136.696678,4.70588235 135.043062,6.3214209 135.043062,8.35586632 C135.043062,12.8934523 141.149972,11.1800543 141.149972,15.0909968 C141.149972,16.643871 139.96749,17.8353521 138.445605,17.8353521 C137.449096,17.8353521 136.640886,17.469667 135.215088,16.363169 L135.215088,17.6113056 C136.340229,18.4199332 137.449096,18.8216718 138.500623,18.8216718 C140.586627,18.8216718 142.220096,17.1700799 142.220096,15.0506512 C142.220096,10.2315049 136.11551,11.9878237 136.11551,8.31723763" id="Fill-10"></path>
                    <path d="M148.075567,8.31723763 C148.075567,6.82273573 149.241651,5.69391895 150.780417,5.69391895 C151.664472,5.69391895 152.340103,5.93685061 153.655724,6.74290306 L153.655724,5.57116549 C152.660872,4.98830116 151.684616,4.70588235 150.68744,4.70588235 C148.657447,4.70588235 147.004785,6.3214209 147.004785,8.35586632 C147.004785,12.8934523 153.111035,11.1800543 153.111035,15.0909968 C153.111035,16.643871 151.92713,17.8353521 150.40696,17.8353521 C149.409784,17.8353521 148.600886,17.469667 147.172918,16.363169 L147.172918,17.6113056 C148.301036,18.4199332 149.409784,18.8216718 150.461972,18.8216718 C152.549301,18.8216718 154.181818,17.1700799 154.181818,15.0506512 C154.181818,10.2315049 148.075567,11.9878237 148.075567,8.31723763" id="Fill-12"></path>
                    <path d="M26.3651478,28.4551341 L19.9932597,15.0926812 L13.6378479,28.4551341 L11.6666667,28.4551341 L19.9827747,11.0638298 L28.3333333,28.4551341 L26.3651478,28.4551341 Z M0,40 L40,40 L40,0 L0,0 L0,40 Z" id="Fill-14"></path>
                </g>
            </g>
        </g>
    </g>
</svg>          </div>
        </a>
        <button type="button" class="close" data-dismiss="modal" id=""><i class="fal fa-times"></i></button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <div class="container pt-3  mb-0 pl-0 pr-0 ">
          <!-- <h2 class="modal-title"> Your reservation is confirmed.</h2> -->
          <h2 class="modal-title"> Restaurant Reservation</h2>
          <p class="ConfirmationMessage"></p>

          <div class="row  justify-content-center  h-100   block ">

            <div class="col-lg-12">
              <hr class="pb-0 mb-0">
              <div class="container-fluid whitebox2 p-40">
                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12 pl-4 pt-0 pb-3 confirmationNumber">
                    Booking Reference #436
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-4 pl-4">

                    <table class="table table-borderless bookingConfirm">
                      <thead>
                        <tr>
                          <th class="pb-2 px-0 meduimtext"> Booking Details </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class=" py-1 px-0"><span class="dineresname">The Restaurant</span></td>
                        </tr>
                        <tr>
                          <td class="py-1 px-0"><i class="fal  fa-map-marker-alt pr-2"></i><span class="dinereslocation">Address Dubai Mall</span></td>
                        </tr>
                        <tr>
                          <td class="py-1 px-0 dineresemail"></td>
                        </tr>
                        <tr>
                          <td class="py-1 px-0 dineresphone"></td>
                        </tr>
                        <tr>
                          <td colspan="Separator">
                            <hr>
                          </td>
                        </tr>
                        <tr>
                          <td class="py-1 px-0"><i class="fal  fa-calendar pr-2"></i><span class="date"></span></td>
                        </tr>
                        <tr>
                          <td class="py-1 px-0"><i class="fal  fa-clock pr-2"></i><span class="time"></span></td>
                        </tr>
                        <tr>
                          <td class="py-1 px-0"><i class="fal  fa-user-friends  pr-2"></i><span class="people"></span>
                          </td>
                        </tr>
                        <tr>
                          <td class="py-1 px-0"><i class="fal  fa-chair pr-2"></i><span class="seating"></span></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="col-sm-12 col-md-12 col-lg-3 border-left pl-lg-5 pl-4">
                    <table class="table table-borderless bookingGuest">
                      <thead>
                        <tr>
                          <th class="pb-2 px-0 meduimtext">Guest Information</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="py-1 px-0 name">John Smith</td>
                        </tr>
                        <tr>
                          <td class="py-1 px-0 email">john.smith@xyzmail.com</td>
                        </tr>
                        <tr>
                          <td class="py-1 px-0 phone">05122354234</td>

                      </tr></tbody>
                    </table>

                  </div>
                  <div class="col-sm-12 col-md-12 col-lg-5 border-left pl-lg-5 pl-4">
                    <table class="table table-borderless">
                      <thead>
                        <tr>
                          <th class="pb-2 px-0 meduimtext">Special Instructions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="py-1 px-0 bookingSpecialInstructions">allergic to nuts</td>
                        </tr>

                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 mr-auto py-5 bookingdineconfirm-btn-div">
              <form name="bookingdineconfirm" id="bookingdineconfirmform">
                <button class="btn blackfullbtn donebtn primary-btn">Done</button>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<div class="modal fade bookingmodal p-0 bookingdineModal" id="bookinginfodineModal">
  <div class="modal-dialog">

    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header pl-0 pr-0 container">
                <a href="/dependencies/vendor/en.bin">
          <!-- <img class="booking-modal_logo" style="height:40px;" src="" alt="Address Hotels + Resorts"> -->

          <div class="booking-modal_logo d-inline-block" style="height:40px;" id="" alt="Address Hotels + Resorts">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="205px" height="40px" viewbox="0 0 205 40" version="1.1">
    <g id="Error-Pages" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="error-404---1364" transform="translate(-24.000000, -24.000000)" fill="#25282D">
            <g id="component/header/transparent/1364">
                <g id="address-HR-logo@SVG" transform="translate(24.000000, 24.000000)">
                    <polygon id="Fill-17" points="61.1886272 31.7821994 57.6037909 31.7821994 57.6037909 28.95 55.8086124 28.95 55.8086124 36.0088235 57.6037909 36.0088235 57.6037909 33.1504335 61.1886272 33.1504335 61.1886272 36.0088235 62.9856459 36.0088235 62.9856459 28.95 61.1886272 28.95"></polygon>
                    <path d="M71.3688446,34.5768279 C70.1725389,34.5768279 69.3824803,33.7429632 69.3824803,32.4807311 C69.3824803,31.21674 70.1725389,30.3793568 71.3688446,30.3793568 C72.5531313,30.3793568 73.3439912,31.21674 73.3439912,32.4807311 C73.3439912,33.7429632 72.5531313,34.5768279 71.3688446,34.5768279 M71.3688446,28.95 C69.0066816,28.95 67.7751196,30.8130016 67.7751196,32.4807311 C67.7751196,34.2337823 69.0691812,36.0088235 71.3688446,36.0088235 C73.6196303,36.0088235 74.9521531,34.2469764 74.9521531,32.4807311 C74.9521531,30.8253161 73.7262001,28.95 71.3688446,28.95" id="Fill-20"></path>
                    <polygon id="Fill-22" points="79.7416268 30.237856 82.4132246 30.237856 82.4132246 36.0088235 84.2489469 36.0088235 84.2489469 30.237856 86.9186603 30.237856 86.9186603 28.95 79.7416268 28.95"></polygon>
                    <polygon id="Fill-24" points="93.3259727 33.0203836 96.2838556 33.0203836 96.2838556 31.7253025 93.3259727 31.7253025 93.3259727 30.237856 96.4239959 30.237856 96.4239959 28.95 91.708134 28.95 91.708134 36.0088235 96.492823 36.0088235 96.492823 34.7137426 93.3259727 34.7137426"></polygon>
                    <polygon id="Fill-26" points="102.84751 28.95 101.282297 28.95 101.282297 36.0088235 106.066986 36.0088235 106.066986 34.7144801 102.84751 34.7144801"></polygon>
                    <path d="M112.462804,30.7742991 C112.462804,30.4312535 112.818262,30.207834 113.379005,30.207834 C113.911791,30.207834 114.449369,30.3793568 115.356783,30.8261958 L115.356783,29.4830402 C114.569186,29.1083288 113.937352,28.95 113.241614,28.95 C111.793428,28.95 110.856459,29.7354865 110.856459,30.9255911 C110.856459,33.3937603 114.038797,32.9829852 114.038797,34.1115174 C114.038797,34.5152556 113.718486,34.7483508 113.120999,34.7483508 C112.434048,34.7483508 111.884489,34.5152556 110.988258,33.8590709 L110.988258,35.3429632 C111.611306,35.6956845 112.152878,36.0088235 113.241614,36.0088235 C114.633089,36.0088235 115.641148,35.2426883 115.641148,33.923282 C115.641148,31.5184442 112.462804,31.812232 112.462804,30.7742991" id="Fill-28"></path>
                    <path d="M135.52008,31.8484984 L134.435155,31.8484984 L134.435155,30.2380207 L135.469862,30.2380207 C136.235691,30.2380207 136.631161,30.5107994 136.631161,31.0410014 C136.631161,31.6425596 136.077713,31.8484984 135.52008,31.8484984 M137.32794,32.7056734 C138.262209,32.3335384 138.735098,31.7554646 138.735098,30.9750649 C138.735098,29.9227899 137.734917,28.95 136.054696,28.95 L132.397129,28.95 L132.397129,36.0088235 L134.435155,36.0088235 L134.435155,33.1446483 L135.027313,33.1446483 C136.127931,33.1446483 136.451211,34.5022186 137.32794,36.0088235 L139.574163,36.0088235 C138.420188,33.9404031 138.165958,33.0678729 137.32794,32.7056734" id="Fill-30"></path>
                    <polygon id="Fill-32" points="145.983146 33.0203836 148.940909 33.0203836 148.940909 31.7253025 145.983146 31.7253025 145.983146 30.237856 149.085271 30.237856 149.085271 28.95 144.363636 28.95 144.363636 36.0088235 149.148325 36.0088235 149.148325 34.7137426 145.983146 34.7137426"></polygon>
                    <path d="M155.540426,30.7742991 C155.540426,30.4312535 155.901897,30.207834 156.457698,30.207834 C156.987108,30.207834 157.530914,30.3793568 158.439389,30.8261958 L158.439389,29.4830402 C157.651671,29.1083288 157.016698,28.95 156.323346,28.95 C154.873464,28.95 153.937799,29.7354865 153.937799,30.9255911 C153.937799,33.3937603 157.116662,32.9829852 157.116662,34.1115174 C157.116662,34.5152556 156.795977,34.7483508 156.20179,34.7483508 C155.514035,34.7483508 154.963833,34.5152556 154.064154,33.8590709 L154.064154,35.3429632 C154.687931,35.6956845 155.226138,36.0088235 156.323346,36.0088235 C157.71085,36.0088235 158.722488,35.2426883 158.722488,33.923282 C158.722488,31.5184442 155.540426,31.812232 155.540426,30.7742991" id="Fill-34"></path>
                    <path d="M167.103684,34.5768279 C165.91045,34.5768279 165.117097,33.7429632 165.117097,32.4807311 C165.117097,31.21674 165.91045,30.3793568 167.103684,30.3793568 C168.290506,30.3793568 169.083058,31.21674 169.083058,32.4807311 C169.083058,33.7429632 168.290506,34.5768279 167.103684,34.5768279 M167.103684,28.95 C164.738052,28.95 163.511962,30.8130016 163.511962,32.4807311 C163.511962,34.2337823 164.805366,36.0088235 167.103684,36.0088235 C169.354721,36.0088235 170.688995,34.2469764 170.688995,32.4807311 C170.688995,30.8253161 169.462905,28.95 167.103684,28.95" id="Fill-36"></path>
                    <path d="M178.603783,31.8484984 L177.523672,31.8484984 L177.523672,30.2380207 L178.553594,30.2380207 C179.318977,30.2380207 179.714216,30.5107994 179.714216,31.0410014 C179.714216,31.6425596 179.165273,31.8484984 178.603783,31.8484984 M180.413725,32.7056734 C181.348496,32.3335384 181.816927,31.7554646 181.816927,30.9750649 C181.816927,29.9227899 180.821511,28.95 179.146452,28.95 L175.478469,28.95 L175.478469,36.0088235 L177.523672,36.0088235 L177.523672,33.1446483 L178.10712,33.1446483 C179.215462,33.1446483 179.541691,34.5022186 180.413725,36.0088235 L182.655502,36.0088235 C181.5022,33.9404031 181.256483,33.0678729 180.413725,32.7056734" id="Fill-38"></path>
                    <polygon id="Fill-40" points="187.444976 30.237856 190.112104 30.237856 190.112104 36.0088235 191.951113 36.0088235 191.951113 30.237856 194.62201 30.237856 194.62201 28.95 187.444976 28.95"></polygon>
                    <path d="M201.014099,30.7742991 C201.014099,30.4312535 201.375026,30.207834 201.933187,30.207834 C202.464198,30.207834 203.004791,30.3793568 203.911902,30.8261958 L203.911902,29.4830402 C203.125366,29.1083288 202.494542,28.95 201.792649,28.95 C200.348139,28.95 199.411483,29.7354865 199.411483,30.9255911 C199.411483,33.3937603 202.591161,32.9829852 202.591161,34.1115174 C202.591161,34.5152556 202.273353,34.7483508 201.677663,34.7483508 C200.987748,34.7483508 200.438371,34.5152556 199.543238,33.8590709 L199.543238,35.3429632 C200.168474,35.6956845 200.705872,36.0088235 201.792649,36.0088235 C203.190046,36.0088235 204.196172,35.2426883 204.196172,33.923282 C204.196172,31.5184442 201.014099,31.812232 201.014099,30.7742991" id="Fill-42"></path>
                    <polygon id="Fill-44" points="124.861465 28.95 123.336322 28.95 123.184275 28.95 123.184275 31.5618265 120.430622 31.5618265 120.430622 31.7111496 120.430622 33.0073436 120.430622 33.1540158 123.184275 33.1540158 123.184275 36.0088235 124.706619 36.0088235 124.861465 36.0088235 124.861465 33.1504815 127.607656 33.1540158 127.607656 31.7111496 127.607656 31.5618265 124.861465 31.5618265"></polygon>
                    <polygon id="Combined-Shape" points="62.971531 4.70588235 63.3220846 5.32999343 70.1626794 18.8235294 68.8888584 18.8235294 66.8487148 14.7916602 66.3846581 13.8702258 62.9745443 7.13536195 59.5885374 13.8702258 59.1244807 14.7916602 57.0852917 18.8235294 55.8086124 18.8235294"></polygon>
                    <path d="M77.4673905,17.9106669 L73.6173449,17.9106669 L73.6173449,5.61698254 L77.4075047,5.61698254 C81.114345,5.61698254 83.6590553,8.14057145 83.6590553,11.7629436 C83.6590553,15.7404158 80.7541627,17.9106669 77.4673905,17.9106669 M77.3467511,4.70588235 L72.5550239,4.70588235 L72.5550239,18.8235294 L77.5255404,18.8235294 C82.9386907,18.8235294 84.8038281,15.0355027 84.8038281,11.7629436 C84.8038281,8.66044486 83.1617431,4.70588235 77.3467511,4.70588235" id="Fill-2"></path>
                    <path d="M94.2115497,17.9106669 L90.3616031,17.9106669 L90.3616031,5.61698253 L94.1516391,5.61698253 C97.8600563,5.61698253 100.407585,8.14057141 100.407585,11.7629436 C100.407585,15.7404157 97.5014571,17.9106669 94.2115497,17.9106669 M101.55024,11.7629436 C101.55024,8.66044482 99.9065883,4.70588235 94.0891228,4.70588235 L89.3014354,4.70588235 L89.3014354,18.8235294 L94.2714611,18.8235294 C99.6869145,18.8235294 101.55024,15.0355026 101.55024,11.7629436" id="Fill-4"></path>
                    <path d="M110.185971,11.1422184 L107.564732,11.1422184 L107.564732,5.61692567 L110.135774,5.61692567 C113.035099,5.61692567 114.311083,6.77643535 114.311083,8.3694395 C114.311083,10.068174 112.967836,11.1422184 110.185971,11.1422184 M112.618472,11.7854114 C114.636353,11.1228344 115.634251,9.98358978 115.634251,8.34917451 C115.634251,6.46453077 114.265907,4.70588235 110.393782,4.70588235 L106.334928,4.70588235 L106.334928,18.8235294 L107.564732,18.8235294 L107.564732,12.0559049 L109.699068,12.0559049 C111.598487,12.0559049 112.199836,12.2823441 114.101264,14.9520359 L116.86004,18.8235294 L118.296651,18.8235294 L114.725702,13.9379054 C113.986816,12.9431589 113.36037,12.1352027 112.618472,11.7854114" id="Fill-6"></path>
                    <polygon id="Fill-8" points="123.794431 12.0594292 129.669523 12.0594292 129.669523 11.1466238 123.794431 11.1466238 123.794431 5.61692567 129.819998 5.61692567 129.819998 4.70588235 122.794258 4.70588235 122.794258 18.8235294 129.971292 18.8235294 129.971292 17.9107239 123.794431 17.9107239"></polygon>
                    <path d="M136.11551,8.31723763 C136.11551,6.82273573 137.279395,5.69391895 138.821427,5.69391895 C139.701702,5.69391895 140.379731,5.93685061 141.693945,6.74290306 L141.693945,5.57116549 C140.698211,4.98830116 139.72185,4.70588235 138.727665,4.70588235 C136.696678,4.70588235 135.043062,6.3214209 135.043062,8.35586632 C135.043062,12.8934523 141.149972,11.1800543 141.149972,15.0909968 C141.149972,16.643871 139.96749,17.8353521 138.445605,17.8353521 C137.449096,17.8353521 136.640886,17.469667 135.215088,16.363169 L135.215088,17.6113056 C136.340229,18.4199332 137.449096,18.8216718 138.500623,18.8216718 C140.586627,18.8216718 142.220096,17.1700799 142.220096,15.0506512 C142.220096,10.2315049 136.11551,11.9878237 136.11551,8.31723763" id="Fill-10"></path>
                    <path d="M148.075567,8.31723763 C148.075567,6.82273573 149.241651,5.69391895 150.780417,5.69391895 C151.664472,5.69391895 152.340103,5.93685061 153.655724,6.74290306 L153.655724,5.57116549 C152.660872,4.98830116 151.684616,4.70588235 150.68744,4.70588235 C148.657447,4.70588235 147.004785,6.3214209 147.004785,8.35586632 C147.004785,12.8934523 153.111035,11.1800543 153.111035,15.0909968 C153.111035,16.643871 151.92713,17.8353521 150.40696,17.8353521 C149.409784,17.8353521 148.600886,17.469667 147.172918,16.363169 L147.172918,17.6113056 C148.301036,18.4199332 149.409784,18.8216718 150.461972,18.8216718 C152.549301,18.8216718 154.181818,17.1700799 154.181818,15.0506512 C154.181818,10.2315049 148.075567,11.9878237 148.075567,8.31723763" id="Fill-12"></path>
                    <path d="M26.3651478,28.4551341 L19.9932597,15.0926812 L13.6378479,28.4551341 L11.6666667,28.4551341 L19.9827747,11.0638298 L28.3333333,28.4551341 L26.3651478,28.4551341 Z M0,40 L40,40 L40,0 L0,0 L0,40 Z" id="Fill-14"></path>
                </g>
            </g>
        </g>
    </g>
</svg>          </div>
        </a>
        <button type="button" class="close" data-dismiss="modal" id="" onclick="hideMesg()"><i class="fal fa-times"></i></button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <div class="container pt-3  mb-0 pl-0 pr-0 ">
          <h2 class="modal-title">Dining Reservation</h2>



          <div class="row  justify-content-center h-100 block ">

            <div class="col-lg-12">
              <hr class="pb-0 mb-0">
              <div class="container ">

                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-4 pl-lg-0 pr-lg-4 booking-info-container">
                    <table class="table table-borderless bookingInfo body-4">
                      <thead>
                        <tr>
                          <th class="pb-0 px-0 pt-3 meduimtext"><span class="dineresname">The Restaurant</span></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="d-none">
                          <td class=" pb-3 pt-0 px-0">Global Bistronomy</td>
                        </tr>

                        <tr>
                          <td class="py-1 px-0"><i class="fal  fa-map-marker-alt pr-2"></i><span class="dinereslocation">Address Dubai Mall</span></td>
                        </tr>
                        <tr>
                          <td class="py-1 px-0 dineresphone"></td>
                        </tr>
                        <tr>
                          <td class="py-1 px-0 dineresemail"></td>
                        </tr>
                        <tr>
                          <td colspan="Separator">
                            <hr>
                          </td>
                        </tr>
                        <tr>
                          <td class="py-1 px-0"><i class="fal  fa-calendar pr-2"></i><span class="date"></span></td>
                        </tr>
                        <tr>
                          <td class="py-1 px-0"><i class="fal  fa-clock pr-2"></i><span class="time"></span></td>
                        </tr>
                        <tr>
                          <td class="py-1 px-0"><i class="fal  fa-user-friends  pr-2"></i><span class="people"></span>
                          </td>
                        </tr>
                        <tr>
                          <td class="py-1 px-0"><i class="fal  fa-chair pr-2"></i><span class="seating"></span></td>
                        </tr>
                      </tbody>
                    </table>

                    <button class="btn whitefullbtn modifybutton my-3">Modify</button>
                  </div>

                  <div class="col-sm-12 col-md-12 col-lg-8 pl-lg-4 whitebox2 p-40 booking-form-container">
                    <!--form-->
                    <div class="container form-fluid-container">
                      <div class="row no-gutters">
                        <!-- Changes -->
                        <div class="col-lg-12  col-md-12 col-sm-12 pl-34 pl-sm-0 booking-form-title">
                          <h5 class="meduimtext pb-3">Guest information</h5>
                        </div>
                        <div class="col-lg-12  col-md-12 col-sm-12 pl-34 pl-sm-0 new-booking-container">
                          <div class="container-fluid form-container">
                            <form class="go-bottom needs-validation bookingForm" method="Post" action="#" id="bookinginfodineform" name="dineuserinfo">

                              <div class="row">
                                <div class="col-md-6 col-sm-12   dine-booking-fname">
                                  <input id="fname" name="fname" type="text" maxlength="50" class="form-control22" required="">
                                  <label for="fname" class="formtitle">First Name</label>
                                </div>
                                <div class="col-md-6 col-sm-12  dine-booking-lname">
                                  <input type="text" class="form-control22" maxlength="50" name="lname" id="lname" required="">
                                  <label for="lname" class="formtitle">Last Name</label>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-12 col-ms-12 px-0">

                                  <input type="text" class="form-control22" maxlength="50" name="email" id="email" required="">
                                  <label for="email" class="formtitle">Email</label>
                                </div>
                              </div>

                              <!-- Mobile Phone -->
                              <div class="row">
                                <div class="col-md-3  col-4 box codelist pr-3 pl-0 pr-mobile-10">
                                                                        <select name="phonecode" title="" class="my-image-selectpicker flagdrop" data-container="body" data-val="true" data-size="5" data-width='100%' data-container="body" data-show-subtext="true" data-live-search="true" id="flagdrop">
                                        <option value="AF" data-value="93" data-content="">+93 (Afghanistan)</option><option value="AX" data-value="358" data-content="">+358 (Åland Islands)</option><option value="AL" data-value="355" data-content="">+355 (Albania)</option><option value="DZ" data-value="213" data-content="">+213 (Algeria)</option><option value="AS" data-value="1" data-content="">+1 (American Samoa)</option><option value="AD" data-value="376" data-content="">+376 (Andorra)</option><option value="AO" data-value="244" data-content="">+244 (Angola)</option><option value="AI" data-value="1" data-content="">+1 (Anguilla)</option><option value="AQ" data-value="672" data-content="">+672 (Antarctica)</option><option value="AG" data-value="1" data-content="">+1 (Antigua and Barbuda)</option><option value="AR" data-value="54" data-content="">+54 (Argentina)</option><option value="AM" data-value="374" data-content="">+374 (Armenia)</option><option value="AW" data-value="297" data-content="">+297 (Aruba)</option><option value="AU" data-value="61" data-content="">+61 (Australia)</option><option value="AT" data-value="43" data-content="">+43 (Austria)</option><option value="AZ" data-value="994" data-content="">+994 (Azerbaijan)</option><option value="BS" data-value="1" data-content="">+1 (Bahamas)</option><option value="BH" data-value="973" data-content="">+973 (Bahrain)</option><option value="BD" data-value="880" data-content="">+880 (Bangladesh)</option><option value="BB" data-value="1" data-content="">+1 (Barbados)</option><option value="BY" data-value="375" data-content="">+375 (Belarus)</option><option value="BE" data-value="32" data-content="">+32 (Belgium)</option><option value="BZ" data-value="501" data-content="">+501 (Belize)</option><option value="BJ" data-value="229" data-content="">+229 (Benin)</option><option value="BM" data-value="1" data-content="">+1 (Bermuda)</option><option value="BT" data-value="975" data-content="">+975 (Bhutan)</option><option value="BO" data-value="591" data-content="">+591 (Bolivia (Plurinational State of))</option><option value="BQ" data-value="599" data-content="">+599 (Bonaire, Sint Eustatius and Saba)</option><option value="BA" data-value="387" data-content="">+387 (Bosnia and Herzegovina)</option><option value="BW" data-value="267" data-content="">+267 (Botswana)</option><option value="BV" data-value="47" data-content="">+47 (Bouvet Island)</option><option value="BR" data-value="55" data-content="">+55 (Brazil)</option><option value="IO" data-value="246" data-content="">+246 (British Indian Ocean Territory)</option><option value="BN" data-value="673" data-content="">+673 (Brunei Darussalam)</option><option value="BG" data-value="359" data-content="">+359 (Bulgaria)</option><option value="BF" data-value="226" data-content="">+226 (Burkina Faso)</option><option value="BI" data-value="257" data-content="">+257 (Burundi)</option><option value="CV" data-value="238" data-content="">+238 (Cabo Verde)</option><option value="KH" data-value="855" data-content="">+855 (Cambodia)</option><option value="CM" data-value="237" data-content="">+237 (Cameroon)</option><option value="CA" data-value="1" data-content="">+1 (Canada)</option><option value="KY" data-value="1" data-content="">+1 (Cayman Islands)</option><option value="CF" data-value="236" data-content="">+236 (Central African Republic)</option><option value="TD" data-value="235" data-content="">+235 (Chad)</option><option value="CL" data-value="56" data-content="">+56 (Chile)</option><option value="CN" data-value="86" data-content="">+86 (China)</option><option value="CX" data-value="61" data-content="">+61 (Christmas Island)</option><option value="CC" data-value="61" data-content="">+61 (Cocos (Keeling) Islands)</option><option value="CO" data-value="57" data-content="">+57 (Colombia)</option><option value="KM" data-value="269" data-content="">+269 (Comoros)</option><option value="CG" data-value="242" data-content="">+242 (Congo)</option><option value="CD" data-value="243" data-content="">+243 (Congo (Democratic Republic of the))</option><option value="CK" data-value="682" data-content="">+682 (Cook Islands)</option><option value="CR" data-value="506" data-content="">+506 (Costa Rica)</option><option value="HR" data-value="385" data-content="">+385 (Croatia)</option><option value="CU" data-value="53" data-content="">+53 (Cuba)</option><option value="CW" data-value="599" data-content="">+599 (Curaçao)</option><option value="CY" data-value="357" data-content="">+357 (Cyprus)</option><option value="CZ" data-value="420" data-content="">+420 (Czech Republic)</option><option value="DK" data-value="45" data-content="">+45 (Denmark)</option><option value="DJ" data-value="253" data-content="">+253 (Djibouti)</option><option value="DM" data-value="1" data-content="">+1 (Dominica)</option><option value="DO" data-value="1" data-content="">+1 (Dominican Republic)</option><option value="EC" data-value="593" data-content="">+593 (Ecuador)</option><option value="EG" data-value="20" data-content="">+20 (Egypt)</option><option value="SV" data-value="503" data-content="">+503 (El Salvador)</option><option value="GQ" data-value="240" data-content="">+240 (Equatorial Guinea)</option><option value="ER" data-value="291" data-content="">+291 (Eritrea)</option><option value="EE" data-value="372" data-content="">+372 (Estonia)</option><option value="ET" data-value="251" data-content="">+251 (Ethiopia)</option><option value="FK" data-value="500" data-content="">+500 (Falkland Islands (Malvinas))</option><option value="FO" data-value="298" data-content="">+298 (Faroe Islands)</option><option value="FJ" data-value="679" data-content="">+679 (Fiji)</option><option value="FI" data-value="358" data-content="">+358 (Finland)</option><option value="FR" data-value="33" data-content="">+33 (France)</option><option value="GF" data-value="594" data-content="">+594 (French Guiana)</option><option value="PF" data-value="689" data-content="">+689 (French Polynesia)</option><option value="TF" data-value="262" data-content="">+262 (French Southern Territories)</option><option value="GA" data-value="241" data-content="">+241 (Gabon)</option><option value="GM" data-value="220" data-content="">+220 (Gambia)</option><option value="GE" data-value="995" data-content="">+995 (Georgia)</option><option value="DE" data-value="49" data-content="">+49 (Germany)</option><option value="GH" data-value="233" data-content="">+233 (Ghana)</option><option value="GI" data-value="350" data-content="">+350 (Gibraltar)</option><option value="GR" data-value="30" data-content="">+30 (Greece)</option><option value="GL" data-value="299" data-content="">+299 (Greenland)</option><option value="GD" data-value="1" data-content="">+1 (Grenada)</option><option value="GP" data-value="590" data-content="">+590 (Guadeloupe)</option><option value="GU" data-value="1" data-content="">+1 (Guam)</option><option value="GT" data-value="502" data-content="">+502 (Guatemala)</option><option value="GG" data-value="44" data-content="">+44 (Guernsey)</option><option value="GN" data-value="224" data-content="">+224 (Guinea)</option><option value="GW" data-value="245" data-content="">+245 (Guinea-Bissau)</option><option value="GY" data-value="592" data-content="">+592 (Guyana)</option><option value="HT" data-value="509" data-content="">+509 (Haiti)</option><option value="HM" data-value="672" data-content="">+672 (Heard Island and McDonald Islands)</option><option value="HN" data-value="504" data-content="">+504 (Honduras)</option><option value="HK" data-value="852" data-content="">+852 (Hong Kong)</option><option value="HU" data-value="36" data-content="">+36 (Hungary)</option><option value="IS" data-value="354" data-content="">+354 (Iceland)</option><option value="IN" data-value="91" data-content="">+91 (India)</option><option value="ID" data-value="62" data-content="">+62 (Indonesia)</option><option value="IR" data-value="98" data-content="">+98 (Iran (Islamic Republic of))</option><option value="IQ" data-value="964" data-content="">+964 (Iraq)</option><option value="IE" data-value="353" data-content="">+353 (Ireland)</option><option value="IM" data-value="44" data-content="">+44 (Isle of Man)</option><option value="IL" data-value="972" data-content="">+972 (Israel)</option><option value="IT" data-value="39" data-content="">+39 (Italy)</option><option value="CI" data-value="225" data-content="">+225 (Ivory Coast)</option><option value="JM" data-value="1" data-content="">+1 (Jamaica)</option><option value="JP" data-value="81" data-content="">+81 (Japan)</option><option value="JE" data-value="44" data-content="">+44 (Jersey)</option><option value="JO" data-value="962" data-content="">+962 (Jordan)</option><option value="KZ" data-value="76" data-content="">+76 (Kazakhstan)</option><option value="KE" data-value="254" data-content="">+254 (Kenya)</option><option value="KI" data-value="686" data-content="">+686 (Kiribati)</option><option value="KP" data-value="850" data-content="">+850 (Korea (Democratic People's Republic of))</option><option value="KR" data-value="82" data-content="">+82 (Korea (Republic of))</option><option value="KW" data-value="965" data-content="">+965 (Kuwait)</option><option value="KG" data-value="996" data-content="">+996 (Kyrgyzstan)</option><option value="LA" data-value="856" data-content="">+856 (Lao People's Democratic Republic)</option><option value="LV" data-value="371" data-content="">+371 (Latvia)</option><option value="LB" data-value="961" data-content="">+961 (Lebanon)</option><option value="LS" data-value="266" data-content="">+266 (Lesotho)</option><option value="LR" data-value="231" data-content="">+231 (Liberia)</option><option value="LY" data-value="218" data-content="">+218 (Libya)</option><option value="LI" data-value="423" data-content="">+423 (Liechtenstein)</option><option value="LT" data-value="370" data-content="">+370 (Lithuania)</option><option value="LU" data-value="352" data-content="">+352 (Luxembourg)</option><option value="MO" data-value="853" data-content="">+853 (Macao)</option><option value="MG" data-value="261" data-content="">+261 (Madagascar)</option><option value="MW" data-value="265" data-content="">+265 (Malawi)</option><option value="MY" data-value="60" data-content="">+60 (Malaysia)</option><option value="MV" data-value="960" data-content="">+960 (Maldives)</option><option value="ML" data-value="223" data-content="">+223 (Mali)</option><option value="MT" data-value="356" data-content="">+356 (Malta)</option><option value="MH" data-value="692" data-content="">+692 (Marshall Islands)</option><option value="MQ" data-value="596" data-content="">+596 (Martinique)</option><option value="MR" data-value="222" data-content="">+222 (Mauritania)</option><option value="MU" data-value="230" data-content="">+230 (Mauritius)</option><option value="YT" data-value="262" data-content="">+262 (Mayotte)</option><option value="MX" data-value="52" data-content="">+52 (Mexico)</option><option value="FM" data-value="691" data-content="">+691 (Micronesia (Federated States of))</option><option value="MD" data-value="373" data-content="">+373 (Moldova (Republic of))</option><option value="MC" data-value="377" data-content="">+377 (Monaco)</option><option value="MN" data-value="976" data-content="">+976 (Mongolia)</option><option value="ME" data-value="382" data-content="">+382 (Montenegro)</option><option value="MS" data-value="1" data-content="">+1 (Montserrat)</option><option value="MA" data-value="212" data-content="">+212 (Morocco)</option><option value="MZ" data-value="258" data-content="">+258 (Mozambique)</option><option value="MM" data-value="95" data-content="">+95 (Myanmar)</option><option value="NA" data-value="264" data-content="">+264 (Namibia)</option><option value="NR" data-value="674" data-content="">+674 (Nauru)</option><option value="NP" data-value="977" data-content="">+977 (Nepal)</option><option value="NL" data-value="31" data-content="">+31 (Netherlands)</option><option value="NC" data-value="687" data-content="">+687 (New Caledonia)</option><option value="NZ" data-value="64" data-content="">+64 (New Zealand)</option><option value="NI" data-value="505" data-content="">+505 (Nicaragua)</option><option value="NE" data-value="227" data-content="">+227 (Niger)</option><option value="NG" data-value="234" data-content="">+234 (Nigeria)</option><option value="NU" data-value="683" data-content="">+683 (Niue)</option><option value="NF" data-value="672" data-content="">+672 (Norfolk Island)</option><option value="MK" data-value="389" data-content="">+389 (North Macedonia)</option><option value="MP" data-value="1" data-content="">+1 (Northern Mariana Islands)</option><option value="NO" data-value="47" data-content="">+47 (Norway)</option><option value="OM" data-value="968" data-content="">+968 (Oman)</option><option value="PK" data-value="92" data-content="">+92 (Pakistan)</option><option value="PW" data-value="680" data-content="">+680 (Palau)</option><option value="PS" data-value="970" data-content="">+970 (Palestine, State of)</option><option value="PA" data-value="507" data-content="">+507 (Panama)</option><option value="PG" data-value="675" data-content="">+675 (Papua New Guinea)</option><option value="PY" data-value="595" data-content="">+595 (Paraguay)</option><option value="PE" data-value="51" data-content="">+51 (Peru)</option><option value="PH" data-value="63" data-content="">+63 (Philippines)</option><option value="PN" data-value="64" data-content="">+64 (Pitcairn)</option><option value="PL" data-value="48" data-content="">+48 (Poland)</option><option value="PT" data-value="351" data-content="">+351 (Portugal)</option><option value="PR" data-value="1" data-content="">+1 (Puerto Rico)</option><option value="QA" data-value="974" data-content="">+974 (Qatar)</option><option value="XK" data-value="383" data-content="">+383 (Republic of Kosovo)</option><option value="RE" data-value="262" data-content="">+262 (Réunion)</option><option value="RO" data-value="40" data-content="">+40 (Romania)</option><option value="RU" data-value="7" data-content="">+7 (Russian Federation)</option><option value="RW" data-value="250" data-content="">+250 (Rwanda)</option><option value="BL" data-value="590" data-content="">+590 (Saint Barthélemy)</option><option value="SH" data-value="290" data-content="">+290 (Saint Helena, Ascension and Tristan da Cunha)</option><option value="KN" data-value="1" data-content="">+1 (Saint Kitts and Nevis)</option><option value="LC" data-value="1" data-content="">+1 (Saint Lucia)</option><option value="MF" data-value="590" data-content="">+590 (Saint Martin (French part))</option><option value="PM" data-value="508" data-content="">+508 (Saint Pierre and Miquelon)</option><option value="VC" data-value="1" data-content="">+1 (Saint Vincent and the Grenadines)</option><option value="WS" data-value="685" data-content="">+685 (Samoa)</option><option value="SM" data-value="378" data-content="">+378 (San Marino)</option><option value="ST" data-value="239" data-content="">+239 (Sao Tome and Principe)</option><option value="SA" data-value="966" data-content="">+966 (Saudi Arabia)</option><option value="SN" data-value="221" data-content="">+221 (Senegal)</option><option value="RS" data-value="381" data-content="">+381 (Serbia)</option><option value="SC" data-value="248" data-content="">+248 (Seychelles)</option><option value="SL" data-value="232" data-content="">+232 (Sierra Leone)</option><option value="SG" data-value="65" data-content="">+65 (Singapore)</option><option value="SX" data-value="1" data-content="">+1 (Sint Maarten (Dutch part))</option><option value="SK" data-value="421" data-content="">+421 (Slovakia)</option><option value="SI" data-value="386" data-content="">+386 (Slovenia)</option><option value="SB" data-value="677" data-content="">+677 (Solomon Islands)</option><option value="SO" data-value="252" data-content="">+252 (Somalia)</option><option value="ZA" data-value="27" data-content="">+27 (South Africa)</option><option value="GS" data-value="500" data-content="">+500 (SGSSI)</option><option value="SS" data-value="211" data-content="">+211 (South Sudan)</option><option value="ES" data-value="34" data-content="">+34 (Spain)</option><option value="LK" data-value="94" data-content="">+94 (Sri Lanka)</option><option value="SD" data-value="249" data-content="">+249 (Sudan)</option><option value="SR" data-value="597" data-content="">+597 (Suriname)</option><option value="SJ" data-value="47" data-content="">+47 (Svalbard and Jan Mayen)</option><option value="SZ" data-value="268" data-content="">+268 (Swaziland)</option><option value="SE" data-value="46" data-content="">+46 (Sweden)</option><option value="CH" data-value="41" data-content="">+41 (Switzerland)</option><option value="SY" data-value="963" data-content="">+963 (Syrian Arab Republic)</option><option value="TW" data-value="886" data-content="">+886 (Taiwan)</option><option value="TJ" data-value="992" data-content="">+992 (Tajikistan)</option><option value="TZ" data-value="255" data-content="">+255 (Tanzania, United Republic of)</option><option value="TH" data-value="66" data-content="">+66 (Thailand)</option><option value="TL" data-value="670" data-content="">+670 (Timor-Leste)</option><option value="TG" data-value="228" data-content="">+228 (Togo)</option><option value="TK" data-value="690" data-content="">+690 (Tokelau)</option><option value="TO" data-value="676" data-content="">+676 (Tonga)</option><option value="TT" data-value="1" data-content="">+1 (Trinidad and Tobago)</option><option value="TN" data-value="216" data-content="">+216 (Tunisia)</option><option value="TR" data-value="90" data-content="">+90 (Turkey)</option><option value="TM" data-value="993" data-content="">+993 (Turkmenistan)</option><option value="TC" data-value="1" data-content="">+1 (Turks and Caicos Islands)</option><option value="TV" data-value="688" data-content="">+688 (Tuvalu)</option><option value="UG" data-value="256" data-content="">+256 (Uganda)</option><option value="UA" data-value="380" data-content="">+380 (Ukraine)</option><option value="AE" data-value="971" data-content="">+971 (United Arab Emirates)</option><option value="GB" data-value="44" data-content="">+44 (United Kingdom of Great Britain and Northern Ireland)</option><option value="UM" data-value="246" data-content="">+246 (United States Minor Outlying Islands)</option><option value="US" data-value="1" data-content="">+1 (United States of America)</option><option value="UY" data-value="598" data-content="">+598 (Uruguay)</option><option value="UZ" data-value="998" data-content="">+998 (Uzbekistan)</option><option value="VU" data-value="678" data-content="">+678 (Vanuatu)</option><option value="VA" data-value="379" data-content="">+379 (Vatican City)</option><option value="VE" data-value="58" data-content="">+58 (Venezuela (Bolivarian Republic of))</option><option value="VN" data-value="84" data-content="">+84 (Vietnam)</option><option value="VG" data-value="1" data-content="">+1 (Virgin Islands (British))</option><option value="VI" data-value="1 340" data-content="">+1 340 (Virgin Islands (U.S.))</option><option value="WF" data-value="681" data-content="">+681 (Wallis and Futuna)</option><option value="EH" data-value="212" data-content="">+212 (Western Sahara)</option><option value="YE" data-value="967" data-content="">+967 (Yemen)</option><option value="ZM" data-value="260" data-content="">+260 (Zambia)</option><option value="ZW" data-value="263" data-content="">+263 (Zimbabwe)</option>                                      </select>
                                                                  </div>
                                <div class="col-md-9 col-8 px-0 pt-1">


                                  <input type="tel" id="mobile" maxlength="25" name="mobile" required="">
                                  <label for="mobile" class="formtitle">Mobile Phone</label>
                                </div>
                              </div>



                              <div class="row">
                                <div class="col-md-12 col-sm-12 px-0 pt-1">
                                  <textarea id="specialRequest" name="specialRequest" type="text" maxlength="500" onkeypress="return blockSpecialChar(event)"></textarea>
                                  <label for="fname" class="formtitle">Special Request</label>
                                </div>

                              </div>
                              <div class="row">

                                <div class="col-md-12 small-text px-1 pt-lg-3">
                                  Powered by Eat App. By completing this reservation, you agree to Eat App's <a class="bluelink small-text" rel="nofollow" href="https://restaurant.eatapp.co/terms" target="_blank">Terms of Use</a> and <a class="bluelink small-text" href="https://restaurant.eatapp.co/privacy" rel="nofollow" target="_blank">Privacy Policy </a>
                                </div>
                                <div class="col-md-12 small-text px-1">Please visit our <a target="_blank" class="bluelink small-text" href="https://www.emaarhospitality.com/en/gdpr/privacypolicy/">Privacy Policy</a>
                                  to understand how we handle your personal data.
                                </div>

                              </div>

                              <div class="row">
                                <div class="col-lg-5 mr-auto py-4 px-0">
                                  <button class="btn blackfullbtn bookinginfodinebtn primary-btn w-100" data-backdrop="static">
                                    <svg class="button-loader" style="display: none;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200px" height="200px" viewbox="0 0 100 100" preserveaspectratio="xMidYMid">
                                      <circle cx="50" cy="50" fill="none" stroke="#ffffff" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(132.222 50 50)">
                                        <animatetransform attributename="transform" type="rotate" repeatcount="indefinite" dur="1s" values="0 50 50;360 50 50" keytimes="0;1">
                                        </animatetransform>
                                      </circle>
                                    </svg>
                                    Book Now                                  </button>
                                </div>

                                <div class="col-md-12 col-ms-12 api-error hide" id="ApiError"></div>
                                <!-- <div class="col-md-12 col-ms-12 errormsg hide">
                                                   <h4><i class="fal fa-exclamation-circle pr-2"></i>Invalid Details                                                   </h4>
                                                   .
                                                </div> -->

                              </div>
                            </form>
                            <!--end form -->
                          </div>

                        </div>

                        <div class="col-lg-12  col-md-12 col-ms-12 pl-3 modify-booking-info" style="display: none;">
                        </div>
                        <div class="col-lg-12  col-md-12 col-ms-12 pl-3 modify-booking-container" style="display: none;">
                          <div class="col-lg-5 mr-auto py-4">
                            <button class="btn blackfullbtn updatebookingbtn primary-btn">
                              <svg class="button-loader" style="display: none;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200px" height="200px" viewbox="0 0 100 100" preserveaspectratio="xMidYMid">
                                <circle cx="50" cy="50" fill="none" stroke="#ffffff" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(132.222 50 50)">
                                  <animatetransform attributename="transform" type="rotate" repeatcount="indefinite" dur="1s" values="0 50 50;360 50 50" keytimes="0;1"></animatetransform>
                                </circle>
                              </svg>
                              Book Now                            </button>
                          </div>
                          <div class="col-md-12 col-ms-12 api-error hide" style="display: none;"></div>
                          <!-- <div class="col-md-12 col-ms-12 errormsg hide">
                                          <h4><i class="fal fa-exclamation-circle pr-2"></i>                                          </h4>
                                          .
                                       </div> -->
                        </div>

                      </div>

                      <!-- personal info -->



                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<script src="/dependencies/js/recaptcha/api.js?render=6Ld_JNIbAAAAAPu9Dbv8WgBHfIYmdKBzNh-7w72X" defer=""></script>
<!--2-->

<form action="/en/find/rooms/" method="GET" id="book_now_form" name="book_now_form" type="submit">
  <input type="hidden" name="id" id="hotel_id" value="all">
  <input type="hidden" name="hotelname" id="hotel_name" value="All Hotels">
  <input type="hidden" name="cid" id="check_in_date" value="">
  <input type="hidden" name="cod" id="check_out_date" value="">
  <input type="hidden" name="bfse" id="bfse" value="0">
  <input type="hidden" name="adult" id="total_adults" value="1">
  <input type="hidden" name="child" id="total_childs" value="0">
  <input type="hidden" name="rooms" id="room_count" value="1">
  <input type="hidden" name="type" id="code_type" value="">
  <input type="hidden" name="code" id="code_value" value="">
  <input type="hidden" name="offer" id="offer" value="">
  <input type="hidden" name="offercode" id="offer_code" value="">
  <input type="hidden" name="offerstart" id="offer_start_date" value="">
  <input type="hidden" name="offerend" id="offer_end_date" value="">
  <input type="hidden" name="offerid" id="offerid" value="">

  <input type="hidden" name="roomtypecode" id="room_type_code" value="">
  <input type="hidden" name="rateplancode" id="rate_plan_code" value="">
  <!-- for packages -->
  <input type="hidden" name="rateplantype" id="rate_plan_type" value="">
  <input type="hidden" id="hotelDetails" name="hotelDetails" value="">
  <input type="hidden" name="iata" id="iata_value" value="">
</form>
<script>
  $(document).ready(function() {

    $("#findRoomModalBtn").click(function() {
      window.dataLayer = window.dataLayer || [];
      const urlParams = new URLSearchParams(window.location.search);
      dataLayer.push({
        "event": "select_promotion",
        "ecommerce": {
          "promotions": [{
            "hotel_name": urlParams.get('hotel'),
            "promotion_name": urlParams.get('experience') + " offers",
            "page_url": window.location.href,
            "experience": urlParams.get('experience')
          }]
        }
      });

    });
  });
</script>
<style>
  @media (max-width: 600px) {
    .staymodifyform .individual_hotel_restaurant .dropdown-item.hotel_list_item {
        white-space: normal;
    }
}
  </style><!-- Instagram Feed JS -->
<script type="text/javascript">
var sbiajaxurl = "https://www.addresshotels.com/wp-admin/admin-ajax.php";
</script>
<link rel='stylesheet' id='individual-pages-css-css' href='/dependencies/css/wp-content/themes/emaar-projects/vendor/css/individual-pages.css?ver=1707315139' type='text/css' media='all'>
<link rel='stylesheet' id='individual-home-css-css' href='/dependencies/css/wp-content/themes/emaar-projects/vendor/css/individual-home.css?ver=1707315139' type='text/css' media='all'>
<link rel='stylesheet' id='custom-block-css-css' href='/dependencies/css/wp-content/themes/emaar-projects/vendor/css/custom-block.css?ver=1707315139' type='text/css' media='all'>
<link rel='stylesheet' id='individual-homepage-widget-video-text-content-css-css' href='/dependencies/css/wp-content/themes/emaar-projects/template-parts/dynamic-blocks/assets/css/individual-homepage-widget-video-text-content.css?ver=1737511380' type='text/css' media='all'>
<link rel='stylesheet' id='global-homepage-booking-widget-css-css' href='/dependencies/css/wp-content/themes/emaar-projects/vendor/css/global-homepage-booking-widget.css?ver=1728894359' type='text/css' media='all'>
<link rel='stylesheet' id='global-booking-widget-css' href='/dependencies/css/wp-content/themes/emaar-projects/vendor/css/global-booking-widget.css?ver=1714113413' type='text/css' media='all'>
<link rel='stylesheet' id='subtitle-title-description-section-css-css' href='https://www-addresshotels-com.azureedge.net/wp-content/themes/emaar-projects/template-parts/dynamic-blocks/assets/css/subtitle-title-description-section.css?ver=6.6.4' type='text/css' media='all'>
<link rel='stylesheet' id='individual-homepage-featured-offer-css-css' href='/dependencies/css/wp-content/themes/emaar-projects/template-parts/dynamic-blocks/assets/css/individual-homepage-featured-offer.css?ver=1737511379' type='text/css' media='all'>
<link rel='stylesheet' id='flickity-css-css' href='/dependencies/css/wp-content/themes/emaar-projects/vendor/css/flickity.min.css?ver=1707315139' type='text/css' media='all'>
<link rel='stylesheet' id='individual-homepage-explore-accommodations-css-css' href='/dependencies/css/wp-content/themes/emaar-projects/template-parts/dynamic-blocks/assets/css/individual-homepage-explore-accommodations.css?ver=1737511379' type='text/css' media='all'>
<link rel='stylesheet' id='individual-homepage-hotel-highlights-section-css-css' href='/dependencies/css/wp-content/themes/emaar-projects/template-parts/dynamic-blocks/assets/css/individual-homepage-hotel-highlights-section.css?ver=1760339637' type='text/css' media='all'>
<link rel='stylesheet' id='individual-homepage-corporate-section-css-css' href='/dependencies/css/wp-content/themes/emaar-projects/template-parts/dynamic-blocks/assets/css/individual-homepage-corporate-section-1.css?ver=1737511378' type='text/css' media='all'>
<link rel='stylesheet' id='individual-homepage-contact-map-css-css' href='/dependencies/css/wp-content/themes/emaar-projects/template-parts/dynamic-blocks/assets/css/individual-homepage-contact-map.css?ver=1737511378' type='text/css' media='all'>
<link rel='stylesheet' id='global-hotel-landing-faq-section-css' href='/dependencies/css/wp-content/themes/emaar-projects/template-parts/dynamic-blocks/assets/css/global-hotel-landing-faq-section.css?ver=1737511375' type='text/css' media='all'>
<link rel='stylesheet' id='footer-css-css' href='/dependencies/css/wp-content/themes/emaar-projects/vendor/css/footer.css?ver=1740064444' type='text/css' media='all'>
<link rel='stylesheet' id='dinebooking-css' href='/dependencies/css/wp-content/themes/emaar-projects/vendor/css/dinebooking.css?ver=1707315139' type='text/css' media='all'>
<link rel='stylesheet' id='jquery.datepick-css' href='/dependencies/css/wp-content/themes/emaar-projects/vendor/css/jquery.datepick.css?ver=1707315139' type='text/css' media='all'>
<link rel='stylesheet' id='global-booking-modal-css' href='/dependencies/css/wp-content/themes/emaar-projects/vendor/css/global-booking-modal.css?ver=1714125067' type='text/css' media='all'>
<link rel='stylesheet' id='spabooking-modal-css' href='/dependencies/css/wp-content/themes/emaar-projects/vendor/css/spabooking.css?ver=1707315139' type='text/css' media='all'>
<script type="text/javascript" id="dynamic-calendar-ajax-js-extra">
/* <![CDATA[ */
var dynamic_ajax_call_obj = {"ajax_url":"https:\/\/www.addresshotels.com\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type="text/javascript" src="/dependencies/js/wp-content/plugins/addressbookings/js/dynamic-calendar-ajax.js?ver=5.7.2" id="dynamic-calendar-ajax-js"></script>
<script type="text/javascript" src="/dependencies/js/wp-content/themes/emaar-projects/js/lib/bootstrap.bundle.min.js?ver=20151215" id="bootstrap-js"></script>
<script type="text/javascript" src="/dependencies/js/wp-content/themes/emaar-projects/vendor/js/jquery.validate.min.js?ver=1.19.5" id="jquery-validate-min-js-js"></script>
<script type="text/javascript" id="window-onload-js-before">
/* <![CDATA[ */
const site_constants = {"gtm_key":"GTM-T5Q9VQ"}
/* ]]> */
</script>
<script type="text/javascript" src="/dependencies/js/wp-content/themes/emaar-projects/vendor/js/window-onload.js?ver=1747292584" id="window-onload-js"></script>
<script type="text/javascript" src="/dependencies/js/wp-content/themes/emaar-projects/vendor/js/login.js?ver=1766562220" id="login-js"></script>
<script type="text/javascript" src="/dependencies/js/wp-includes/js/dist/vendor/moment.min.js?ver=2.29.4" id="moment-js"></script>
<script type="text/javascript" id="moment-js-after">
/* <![CDATA[ */
moment.updateLocale( 'en', {"months":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthsShort":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"weekdays":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"weekdaysShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"week":{"dow":0},"longDateFormat":{"LT":"g:i A","LTS":null,"L":null,"LL":"F j, Y","LLL":"F j, Y g:i a","LLLL":null}} );
/* ]]> */
</script>
<script type="text/javascript" src="/dependencies/js/wp-content/themes/emaar-projects/vendor/js/bootstrap-select.min.js?ver=1.13.0" id="bootstrap-select-js"></script>
<script type="text/javascript" src="/dependencies/js/wp-content/themes/emaar-projects/vendor/js/individual-home.js?ver=1707315139" id="individual-home-js-js"></script>
<script type="text/javascript" src="/dependencies/js/wp-content/themes/emaar-projects/vendor/js/global-homepage-booking-widget.js?ver=1747371351" id="global-homepage-booking-widget-js-js"></script>
<script type="text/javascript" src="/dependencies/js/wp-content/themes/emaar-projects/js/lib/easepick.js?ver=1728893068" id="easepick-js-js"></script>
<script type="text/javascript" src="/dependencies/js/wp-content/themes/emaar-projects/vendor/js/flickity.pkgd.min.js?ver=1707315139" id="flickity-js-js"></script>
<script type="text/javascript" src="/dependencies/js/wp-content/themes/emaar-projects/vendor/js/jquery.plugin.min.js?ver=1707315139" id="jquery-plugin-min-js"></script>
<script type="text/javascript" src="/dependencies/js/wp-content/themes/emaar-projects/vendor/js/jquery.datepick.js?ver=1740461485" id="jquery-datepick-js"></script>
<script type="text/javascript" src="/dependencies/js/wp-content/themes/emaar-projects/vendor/js/global-booking-modal.js?ver=1746687266" id="global-booking-modal-js"></script>
<script type="text/javascript" src="/dependencies/js/wp-content/themes/emaar-projects/vendor/js/dinebooking.js?ver=1761568325" id="dinebooking-js"></script>
<script type="text/javascript" src="/dependencies/js/wp-content/themes/emaar-projects/vendor/js/spabooking.js?ver=1709702027" id="spabooking-js-js"></script>
<script>window.lazyLoadOptions={elements_selector:"iframe[data-lazy-src]",data_src:"lazy-src",data_srcset:"lazy-srcset",data_sizes:"lazy-sizes",class_loading:"lazyloading",class_loaded:"lazyloaded",threshold:300,callback_loaded:function(element){if(element.tagName==="IFRAME"&&element.dataset.rocketLazyload=="fitvidscompatible"){if(element.classList.contains("lazyloaded")){if(typeof window.jQuery!="undefined"){if(jQuery.fn.fitVids){jQuery(element).parent().fitVids()}}}}}};window.addEventListener('LazyLoad::Initialized',function(e){var lazyLoadInstance=e.detail.instance;if(window.MutationObserver){var observer=new MutationObserver(function(mutations){var image_count=0;var iframe_count=0;var rocketlazy_count=0;mutations.forEach(function(mutation){for(var i=0;i<mutation.addedNodes.length;i++){if(typeof mutation.addedNodes[i].getElementsByTagName!=='function'){continue}
if(typeof mutation.addedNodes[i].getElementsByClassName!=='function'){continue}
images=mutation.addedNodes[i].getElementsByTagName('img');is_image=mutation.addedNodes[i].tagName=="IMG";iframes=mutation.addedNodes[i].getElementsByTagName('iframe');is_iframe=mutation.addedNodes[i].tagName=="IFRAME";rocket_lazy=mutation.addedNodes[i].getElementsByClassName('rocket-lazyload');image_count+=images.length;iframe_count+=iframes.length;rocketlazy_count+=rocket_lazy.length;if(is_image){image_count+=1}
if(is_iframe){iframe_count+=1}}});if(image_count>0||iframe_count>0||rocketlazy_count>0){lazyLoadInstance.update()}});var b=document.getElementsByTagName("body")[0];var config={childList:!0,subtree:!0};observer.observe(b,config)}},!1)</script><script data-no-minify="1" async="" src="/dependencies/js/wp-content/plugins/wp-rocket/assets/js/lazyload/17.8.3/lazyload.min.js"></script><script>function lazyLoadThumb(e,alt,l){var t='<img src="https://i.ytimg.com/vi_webp/ID/hqdefault.webp" alt="" width="480" height="360">',a='<button class="play" aria-label="play Youtube video"></button>';if(l){t=t.replace('data-lazy-','');t=t.replace('loading="lazy"','');t=t.replace(/<noscript>.*?<\/noscript>/g,'');}t=t.replace('alt=""','alt="'+alt+'"');return t.replace("ID",e)+a}function lazyLoadYoutubeIframe(){var e=document.createElement("iframe"),t="ID?autoplay=1";t+=0===this.parentNode.dataset.query.length?"":"&"+this.parentNode.dataset.query;e.setAttribute("src",t.replace("ID",this.parentNode.dataset.src)),e.setAttribute("frameborder","0"),e.setAttribute("allowfullscreen","1"),e.setAttribute("allow","accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"),this.parentNode.parentNode.replaceChild(e,this.parentNode)}document.addEventListener("DOMContentLoaded",function(){var exclusions=["wpml-ls-flag"];var e,t,p,u,l,a=document.getElementsByClassName("rll-youtube-player");for(t=0;t<a.length;t++)(e=document.createElement("div")),(u='https://i.ytimg.com/vi_webp/ID/hqdefault.webp'),(u=u.replace('ID',a[t].dataset.id)),(l=exclusions.some(exclusion=>u.includes(exclusion))),e.setAttribute("data-id",a[t].dataset.id),e.setAttribute("data-query",a[t].dataset.query),e.setAttribute("data-src",a[t].dataset.src),(e.innerHTML=lazyLoadThumb(a[t].dataset.id,a[t].dataset.alt,l)),a[t].appendChild(e),(p=e.querySelector(".play")),(p.onclick=lazyLoadYoutubeIframe)});</script>
<style>
  .color-inherit {
    color: inherit !important;
  }

  .translatey2 {
    transform: translateY(-2px)
  }

  @media (max-width: 1200px) {
    .translatey2 {
      transform: translateY(-1px)
    }

  }
</style>
<script>
  $(document).ready(function() {
    $(".ft-dropdown").click(function() {
      $(".ft-menu").slideToggle(0);
      $(".ft-dropdown i").toggleClass("fa-caret-up fa-caret-down");
      setTimeout(function() {
        $(document).scrollTop($(document).height());
      }, 400);
    });
  });
</script>

</div></body>

</html>
<script>
   //Video play in safari on play click- Gayathree(11 Oct,2022)
   // var video_playing_status = false;
   // var background_video = document.getElementById("hero-vid");
   // const isVideoPlaying = video => !!(video.currentTime > 0 && !video.paused && !video.ended && video.readyState > 2);

   // $('body').on('click touchstart', function() {
   //    if (!isVideoPlaying(background_video)) {
   //       background_video.play();
   //    }
   // });
</script><!-- Rocket has webp -->
<!-- This website is like a Rocket, isn't it? Performance optimized by WP Rocket. Learn more: https://wp-rocket.me -->