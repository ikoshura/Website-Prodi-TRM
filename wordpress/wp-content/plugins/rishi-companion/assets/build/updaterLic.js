!function(){"use strict";var e={n:function(t){var n=t&&t.__esModule?function(){return t.default}:function(){return t};return e.d(n,{a:n}),n},d:function(t,n){for(var a in n)e.o(n,a)&&!e.o(t,a)&&Object.defineProperty(t,a,{enumerable:!0,get:n[a]})},o:function(e,t){return Object.prototype.hasOwnProperty.call(e,t)}};!function(){function t(e,t,n,a,r,c,i){try{var o=e[c](i),s=o.value}catch(e){return void n(e)}o.done?t(s):Promise.resolve(s).then(a,r)}var n,a=window.regeneratorRuntime,r=e.n(a);n=function(){var e=document.querySelector("#rishi-cmp-activatelic"),n=document.querySelector(".deactivateMessage"),a=document.querySelector("#rishi-cmp-license-key"),c=function(){var e,n=(e=r().mark((function e(t,n){var c,i;return r().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:if(""!==a.value){e.next=3;break}return alert("Enter License Key first!!"),e.abrupt("return");case 3:return c=document.querySelector("#rsh-msgned"),(i=new FormData).append("nonce",t),i.append("license_key",a.value),i.append("action","rishi_cmp_activate_license_fromplgns"),n.disabled=!0,n.classList.add("is-loading"),c.classList.add("updating-message"),e.prev=11,e.next=14,fetch(ajaxurl,{method:"POST",body:i}).then((function(e){return e.json()})).then((function(e){e.success?location.reload():alert(e.data.license_activation_error)}));case 14:e.next=18;break;case 16:e.prev=16,e.t0=e.catch(11);case 18:n.disabled=!1,n.classList.remove("is-loading"),c.classList.remove("updating-message");case 21:case"end":return e.stop()}}),e,null,[[11,16]])})),function(){var n=this,a=arguments;return new Promise((function(r,c){var i=e.apply(n,a);function o(e){t(i,r,c,o,s,"next",e)}function s(e){t(i,r,c,o,s,"throw",e)}o(void 0)}))});return function(_x,e){return n.apply(this,arguments)}}();null!==e&&e.addEventListener("click",(function(t){t.preventDefault();var n=e.dataset.nonce;c(n,e)})),null!==n&&n.addEventListener("click",(function(e){e.preventDefault();var t=n.firstChild.attributes.href.value,a=new URLSearchParams(t),r=new FormData;r.append("nonce",n.firstChild.dataset.nonce),r.append("license_key",a.get("license")),r.append("action","rishi_cmp_deactivate_license_fromplgns"),n.classList.add("updatingMsg");try{fetch(ajaxurl,{method:"POST",body:r}).then((function(e){return e.json()})).then((function(e){n.classList.remove("updatingMsg"),e.success?location.reload():alert(e.data.message)}))}catch(e){}}))},/comp|inter|loaded/.test(document.readyState)?n():document.addEventListener("DOMContentLoaded",n,!1)}()}();