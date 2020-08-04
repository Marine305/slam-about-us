!function(s,p,d){function l(e,t){return typeof e===t}function m(e){return"function"!=typeof p.createElement?p.createElement(e):h?p.createElementNS.call(p,"http://www.w3.org/2000/svg",e):p.createElement.apply(p,arguments)}function a(e,t){return function(){return e.apply(t,arguments)}}function o(e){return e.replace(/([A-Z])/g,function(e,t){return"-"+t.toLowerCase()}).replace(/^ms-/,"-ms-")}function i(e,t,n,r){var o,s,i,l,a,f="modernizr",u=m("div"),c=((a=p.body)||((a=m(h?"svg":"body")).fake=!0),a);if(parseInt(n,10))for(;n--;)(i=m("div")).id=r?r[n]:f+(n+1),u.appendChild(i);return(o=m("style")).type="text/css",o.id="s"+f,(c.fake?c:u).appendChild(o),c.appendChild(u),o.styleSheet?o.styleSheet.cssText=e:o.appendChild(p.createTextNode(e)),u.id=f,c.fake&&(c.style.background="",c.style.overflow="hidden",l=g.style.overflow,g.style.overflow="hidden",g.appendChild(c)),s=t(u,e),c.fake?(c.parentNode.removeChild(c),g.style.overflow=l,g.offsetHeight):u.parentNode.removeChild(u),!!s}function v(e,t){var n=e.length;if("CSS"in s&&"supports"in s.CSS){for(;n--;)if(s.CSS.supports(o(e[n]),t))return!0;return!1}if("CSSSupportsRule"in s){for(var r=[];n--;)r.push("("+o(e[n])+":"+t+")");return i("@supports ("+(r=r.join(" or "))+") { #modernizr { position: absolute; } }",function(e){return"absolute"==function(e,t,n){var r;if("getComputedStyle"in s){r=getComputedStyle.call(s,e,t);var o=s.console;if(null!==r)n&&(r=r.getPropertyValue(n));else if(o){o[o.error?"error":"log"].call(o,"getComputedStyle returning null, its possible modernizr test results are inaccurate")}}else r=!t&&e.currentStyle&&e.currentStyle[n];return r}(e,null,"position")})}return d}function f(e,t,n,r){function o(){i&&(delete x.style,delete x.modElem)}if(r=void 0!==r&&r,void 0!==n){var s=v(e,n);if(void 0!==s)return s}for(var i,l,a,f,u,c=["modernizr","tspan","samp"];!x.style&&c.length;)i=!0,x.modElem=m(c.shift()),x.style=x.modElem.style;for(a=e.length,l=0;l<a;l++)if(f=e[l],u=x.style[f],~(""+f).indexOf("-")&&(f=f.replace(/([a-z])-([a-z])/g,function(e,t,n){return t+n.toUpperCase()}).replace(/^-/,"")),x.style[f]!==d){if(r||void 0===n)return o(),"pfx"!=t||f;try{x.style[f]=n}catch(e){}if(x.style[f]!=u)return o(),"pfx"!=t||f}return o(),!1}function r(e,t,n,r,o){var s=e.charAt(0).toUpperCase()+e.slice(1),i=(e+" "+C.join(s+" ")+s).split(" ");return l(t,"string")||void 0===t?f(i,t,r,o):function(e,t,n){var r;for(var o in e)if(e[o]in t)return!1===n?e[o]:l(r=t[e[o]],"function")?a(r,n||t):r;return!1}(i=(e+" "+w.join(s+" ")+s).split(" "),t,n)}function e(e,t,n){return r(e,d,d,t,n)}var u=[],c=[],t={_version:"3.6.0",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,t){var n=this;setTimeout(function(){t(n[e])},0)},addTest:function(e,t,n){c.push({name:e,fn:t,options:n})},addAsyncTest:function(e){c.push({name:null,fn:e})}},y=function(){};y.prototype=t,y=new y;var g=p.documentElement,h="svg"===g.nodeName.toLowerCase(),n="Moz O ms Webkit",C=t._config.usePrefixes?n.split(" "):[];t._cssomPrefixes=C;var w=t._config.usePrefixes?n.toLowerCase().split(" "):[];t._domPrefixes=w;var S={elem:m("modernizr")};y._q.push(function(){delete S.elem});var x={style:S.elem.style};y._q.unshift(function(){delete x.style}),t.testAllProps=r,t.testAllProps=e,y.addTest("cssgridlegacy",e("grid-columns","10px",!0)),y.addTest("cssgrid",e("grid-template-rows","none",!0)),function(){var e,t,n,r,o,s;for(var i in c)if(c.hasOwnProperty(i)){if(e=[],(t=c[i]).name&&(e.push(t.name.toLowerCase()),t.options&&t.options.aliases&&t.options.aliases.length))for(n=0;n<t.options.aliases.length;n++)e.push(t.options.aliases[n].toLowerCase());for(r=l(t.fn,"function")?t.fn():t.fn,o=0;o<e.length;o++)1===(s=e[o].split(".")).length?y[s[0]]=r:(!y[s[0]]||y[s[0]]instanceof Boolean||(y[s[0]]=new Boolean(y[s[0]])),y[s[0]][s[1]]=r),u.push((r?"":"no-")+s.join("-"))}}(),function(e){var t=g.className,n=y._config.classPrefix||"";if(h&&(t=t.baseVal),y._config.enableJSClass){var r=new RegExp("(^|\\s)"+n+"no-js(\\s|$)");t=t.replace(r,"$1"+n+"js$2")}y._config.enableClasses&&(t+=" "+n+e.join(" "+n),h?g.className.baseVal=t:g.className=t)}(u),delete t.addTest,delete t.addAsyncTest;for(var _=0;_<y._q.length;_++)y._q[_]();s.Modernizr=y}(window,document);