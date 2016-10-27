!function(e,t){function r(e){a("sendApiRequestJSONP: init with url "+e);var r=t.createElement("script");r.onload=r.onreadystatechange=function(){var e=this.readyState?this.readyState:"unknown";a("sendApiRequestJSONP: script state changed to "+e)},r.src=e,r.type="text/javascript",r.async=!0;var o=t.getElementsByTagName("script")[0];o.parentNode.insertBefore(r,o),a("sendApiRequestJSONP: script appended")}function o(e){var t=[];for(var r in e)e.hasOwnProperty(r)&&t.push(encodeURIComponent(r)+"="+encodeURIComponent(e[r]));return t.join("&")}function n(){return(new Date).getTime()}function a(e){var t=n()-g,r="["+t/1e3+"s] "+e;C=C+"; "+r,"undefined"!=typeof console&&console.log&&u&&console.log(r)}function i(e){var r=t.cookie.match(new RegExp("(?:^|; )"+e.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g,"\\$1")+"=([^;]*)"));return r?D(r[1]):void 0}function c(e,r,o){o=o||{};var n=o.expires;if("number"==typeof n&&n){var a=new Date;a.setTime(a.getTime()+1e3*n),n=o.expires=a}n&&n.toUTCString&&(o.expires=n.toUTCString()),r=encodeURIComponent(r);var i=e+"="+r;for(var c in o)if(i+="; "+c,o.hasOwnProperty(c)){var D=o[c];D!==!0&&(i+="="+D)}t.cookie=i}function D(e){try{return decodeURIComponent(e)}catch(t){var r;return r=s(e),null===r?e:r}}function s(e){for(var t={"%E0":"%D0%B0","%E1":"%D0%B1","%E2":"%D0%B2","%E3":"%D0%B3","%E4":"%D0%B4","%E5":"%D0%B5","%B8":"%D1%91","%E6":"%D0%B6","%E7":"%D0%B7","%E8":"%D0%B8","%E9":"%D0%B9","%EA":"%D0%BA","%EB":"%D0%BB","%EC":"%D0%BC","%ED":"%D0%BD","%EE":"%D0%BE","%EF":"%D0%BF","%F0":"%D1%80","%F1":"%D1%81","%F2":"%D1%82","%F3":"%D1%83","%F4":"%D1%84","%F5":"%D1%85","%F6":"%D1%86","%F7":"%D1%87","%F8":"%D1%88","%F9":"%D1%89","%FC":"%D1%8C","%FB":"%D1%8B","%FA":"%D1%8A","%FD":"%D1%8D","%FE":"%D1%8E","%FF":"%D1%8F","%C0":"%D0%90","%C1":"%D0%91","%C2":"%D0%92","%C3":"%D0%93","%C4":"%D0%94","%C5":"%D0%95","%A8":"%D0%81","%C6":"%D0%96","%C7":"%D0%97","%C8":"%D0%98","%C9":"%D0%99","%CA":"%D0%9A","%CB":"%D0%9B","%CC":"%D0%9C","%CD":"%D0%9D","%CE":"%D0%9E","%CF":"%D0%9F","%D0":"%D0%A0","%D1":"%D0%A1","%D2":"%D0%A2","%D3":"%D0%A3","%D4":"%D0%A4","%D5":"%D0%A5","%D6":"%D0%A6","%D7":"%D0%A7","%D8":"%D0%A8","%D9":"%D0%A9","%DC":"%D0%AC","%DB":"%D0%AB","%DA":"%D0%AA","%DD":"%D0%AD","%DE":"%D0%AE","%DF":"%D0%AF"},r="",o=0;o<e.length;){var n=e.substring(o,o+3);Object.prototype.hasOwnProperty.call(t,n)?(r+=t[n],o+=3):(r+=e.substring(o,o+1),o++)}try{return decodeURIComponent(r)}catch(a){return null}}var u=!1,l="datamap",f=e[l],d="___dc",h={expires:31536e4,path:"/"},C="",g=(new Date).getTime(),p={isAvailable:function(){var t=!1;if(!(e.localStorage&&e.localStorage.setItem&&e.localStorage.getItem&&e.localStorage.removeItem))return t;try{e.localStorage.setItem("testKey","testValue"),t="testValue"===e.localStorage.getItem("testKey"),e.localStorage.removeItem("testKey")}catch(r){return!1}return t},remove:function(t){if(this.isAvailable())e.localStorage.removeItem(t);else{var r=new Date(1970,1,1);c(t,"",{expires:r.toUTCString()})}},set:function(e,t){this.isAvailable()?localStorage.setItem(e,t):c(e,t,h)},save:function(e,t,r){this.isAvailable()&&localStorage.setItem(e,t),c(e,t,r)},get:function(e){var t=null;return this.isAvailable()&&(t=localStorage.getItem(e)),null===t&&(t=i(e)),t}},A={_keyStr:"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",encode:function(e){var t,r,o,n,a,i,c,D="",s=0;for(e=A._utf8_encode(e);s<e.length;)t=e.charCodeAt(s++),r=e.charCodeAt(s++),o=e.charCodeAt(s++),n=t>>2,a=(3&t)<<4|r>>4,i=(15&r)<<2|o>>6,c=63&o,isNaN(r)?i=c=64:isNaN(o)&&(c=64),D=D+A._keyStr.charAt(n)+A._keyStr.charAt(a)+A._keyStr.charAt(i)+A._keyStr.charAt(c);return D},decode:function(e){var t,r,o,n,a,i,c,D="",s=0;for(e=e.replace(/[^A-Za-z0-9\+\/=]/g,"");s<e.length;)n=A._keyStr.indexOf(e.charAt(s++)),a=A._keyStr.indexOf(e.charAt(s++)),i=A._keyStr.indexOf(e.charAt(s++)),c=A._keyStr.indexOf(e.charAt(s++)),t=n<<2|a>>4,r=(15&a)<<4|i>>2,o=(3&i)<<6|c,D+=String.fromCharCode(t),64!=i&&(D+=String.fromCharCode(r)),64!=c&&(D+=String.fromCharCode(o));return D=A._utf8_decode(D)},_utf8_encode:function(e){e=e.replace(/\r\n/g,"\n");for(var t="",r=0;r<e.length;r++){var o=e.charCodeAt(r);o<128?t+=String.fromCharCode(o):o>127&&o<2048?(t+=String.fromCharCode(o>>6|192),t+=String.fromCharCode(63&o|128)):(t+=String.fromCharCode(o>>12|224),t+=String.fromCharCode(o>>6&63|128),t+=String.fromCharCode(63&o|128))}return t},_utf8_decode:function(e){for(var t="",r=0,o=0,n=0,a=0;r<e.length;)o=e.charCodeAt(r),o<128?(t+=String.fromCharCode(o),r++):o>191&&o<224?(n=e.charCodeAt(r+1),t+=String.fromCharCode((31&o)<<6|63&n),r+=2):(n=e.charCodeAt(r+1),a=e.charCodeAt(r+2),t+=String.fromCharCode((15&o)<<12|(63&n)<<6|63&a),r+=3);return t}};!function(e,t){function n(n){var a={counter_id:e[l].COUNTER_ID,page:n,cookie:t.cookie,host:e.location.host,visit_id:i("roistat_visit")||"",phone:i("roistat_phone")||""},c=p.get("___dc");c&&"undefined"!=c&&(a.___dc=c),t.referrer&&(a.referrer=t.referrer);var D=o(a);r("//"+f.HOST+"/stream/view/-/"+A.encode(D))}!function(e){var t=e.pushState;e.pushState=function(r,o,n){return"function"==typeof e.onpushstate&&e.onpushstate({state:r,title:o,url:n}),t.apply(e,arguments)}}(e.history),e.onpopstate=history.onpushstate=function(t){var r,o;t.url&&t.url.indexOf("http")>=0?r=t.url:(o="",t.url&&(o=t.url),r=e.location.protocol+"//"+e.location.host+o),n(r)},f.dc=function(e){p.save(d,e,h)},setTimeout(function(){n(e.location.href)},200)}(e,t)}(window,document);
//# sourceMappingURL=maps/counter.js.map