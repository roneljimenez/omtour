this.wp=this.wp||{},this.wp.blockSerializationSpecParser=function(t){var r={};function n(e){if(r[e])return r[e].exports;var u=r[e]={i:e,l:!1,exports:{}};return t[e].call(u.exports,u,u.exports,n),u.l=!0,u.exports}return n.m=t,n.c=r,n.d=function(t,r,e){n.o(t,r)||Object.defineProperty(t,r,{configurable:!1,enumerable:!0,get:e})},n.r=function(t){Object.defineProperty(t,"__esModule",{value:!0})},n.n=function(t){var r=t&&t.__esModule?function(){return t.default}:function(){return t};return n.d(r,"a",r),r},n.o=function(t,r){return Object.prototype.hasOwnProperty.call(t,r)},n.p="",n(n.s=318)}({318:function(t,r,n){"use strict";function e(t,r,n,u){this.message=t,this.expected=r,this.found=n,this.location=u,this.name="SyntaxError","function"==typeof Error.captureStackTrace&&Error.captureStackTrace(this,e)}!function(t,r){function n(){this.constructor=t}n.prototype=r.prototype,t.prototype=new n}(e,Error),e.buildMessage=function(t,r){var n={literal:function(t){return'"'+u(t.text)+'"'},class:function(t){var r,n="";for(r=0;r<t.parts.length;r++)n+=t.parts[r]instanceof Array?o(t.parts[r][0])+"-"+o(t.parts[r][1]):o(t.parts[r]);return"["+(t.inverted?"^":"")+n+"]"},any:function(t){return"any character"},end:function(t){return"end of input"},other:function(t){return t.description}};function e(t){return t.charCodeAt(0).toString(16).toUpperCase()}function u(t){return t.replace(/\\/g,"\\\\").replace(/"/g,'\\"').replace(/\0/g,"\\0").replace(/\t/g,"\\t").replace(/\n/g,"\\n").replace(/\r/g,"\\r").replace(/[\x00-\x0F]/g,function(t){return"\\x0"+e(t)}).replace(/[\x10-\x1F\x7F-\x9F]/g,function(t){return"\\x"+e(t)})}function o(t){return t.replace(/\\/g,"\\\\").replace(/\]/g,"\\]").replace(/\^/g,"\\^").replace(/-/g,"\\-").replace(/\0/g,"\\0").replace(/\t/g,"\\t").replace(/\n/g,"\\n").replace(/\r/g,"\\r").replace(/[\x00-\x0F]/g,function(t){return"\\x0"+e(t)}).replace(/[\x10-\x1F\x7F-\x9F]/g,function(t){return"\\x"+e(t)})}function c(t){return n[t.type](t)}return"Expected "+function(t){var r,n,e=new Array(t.length);for(r=0;r<t.length;r++)e[r]=c(t[r]);if(e.sort(),e.length>0){for(r=1,n=1;r<e.length;r++)e[r-1]!==e[r]&&(e[n]=e[r],n++);e.length=n}switch(e.length){case 1:return e[0];case 2:return e[0]+" or "+e[1];default:return e.slice(0,-1).join(", ")+", or "+e[e.length-1]}}(t)+" but "+function(t){return t?'"'+u(t)+'"':"end of input"}(r)+" found."},t.exports={SyntaxError:e,parse:function(t,r){r=void 0!==r?r:{};var n,u={},o={Block_List:$},c=$,i={type:"any"},a=function(t,r,n){return[r,n]},s=function(t,r,n){return function(t,r,n){var e,u,o,c,i,a=[];for(t.length&&a.push(ct(t)),e=0,u=r.length;e<u;e++)c=r[e],i=c[0],o=c[1],a.push(i),o.length&&a.push(ct(o));return n.length&&a.push(ct(n)),a}(t,r,n)},l="\x3c!--",f=K("\x3c!--",!1),h="wp:",p=K("wp:",!1),g=function(t,r){return r},d="/--\x3e",v=K("/--\x3e",!1),b=function(t,r){return{blockName:t,attrs:r||{},innerBlocks:[],innerHTML:"",innerContent:[]}},A=function(t,r,n){var e=function(t){var r,n,e,u="",o=[],c=[];for(r=0,n=t.length;r<n;r++)"string"==typeof(e=t[r])?(u+=e,c.push(e)):(o.push(e),c.push(null));return[u,o,c]}(r),u=e[0],o=e[1],c=e[2];return{blockName:t.blockName,attrs:t.attrs,innerBlocks:o,innerHTML:u,innerContent:c}},x="--\x3e",m=K("--\x3e",!1),y=function(t,r){return{blockName:t,attrs:r||{}}},C="/wp:",w=K("/wp:",!1),k=function(t){return{blockName:t}},S="/",F=K("/",!1),N=function(t){return"core/"+t},E=/^[a-z]/,M=Q([["a","z"]],!1,!1),_=/^[a-z0-9_\-]/,O=Q([["a","z"],["0","9"],"_","-"],!1,!1),z=V("JSON-encoded attributes embedded in a block's opening comment"),T="{",j=K("{",!1),B="}",L=K("}",!1),P="",R=function(t){return function(t){try{return JSON.parse(t)}catch(t){return null}}(t)},H=/^[ \t\r\n]/,J=Q([" ","\t","\r","\n"],!1,!1),U=0,q=[{line:1,column:1}],D=0,G=[],I=0;if("startRule"in r){if(!(r.startRule in o))throw new Error("Can't start parsing from rule \""+r.startRule+'".');c=o[r.startRule]}function K(t,r){return{type:"literal",text:t,ignoreCase:r}}function Q(t,r,n){return{type:"class",parts:t,inverted:r,ignoreCase:n}}function V(t){return{type:"other",description:t}}function W(r){var n,e=q[r];if(e)return e;for(n=r-1;!q[n];)n--;for(e={line:(e=q[n]).line,column:e.column};n<r;)10===t.charCodeAt(n)?(e.line++,e.column=1):e.column++,n++;return q[r]=e,e}function X(t,r){var n=W(t),e=W(r);return{start:{offset:t,line:n.line,column:n.column},end:{offset:r,line:e.line,column:e.column}}}function Y(t){U<D||(U>D&&(D=U,G=[]),G.push(t))}function Z(t,r,n){return new e(e.buildMessage(t,r),t,r,n)}function $(){var r,n,e,o,c,l,f,h,p,g;for(r=U,n=U,e=[],o=U,c=U,I++,l=tt(),I--,l===u?c=void 0:(U=c,c=u),c!==u?(t.length>U?(l=t.charAt(U),U++):(l=u,0===I&&Y(i)),l!==u?o=c=[c,l]:(U=o,o=u)):(U=o,o=u);o!==u;)e.push(o),o=U,c=U,I++,l=tt(),I--,l===u?c=void 0:(U=c,c=u),c!==u?(t.length>U?(l=t.charAt(U),U++):(l=u,0===I&&Y(i)),l!==u?o=c=[c,l]:(U=o,o=u)):(U=o,o=u);if((n=e!==u?t.substring(n,U):e)!==u){if(e=[],o=U,(c=tt())!==u){for(l=U,f=[],h=U,p=U,I++,g=tt(),I--,g===u?p=void 0:(U=p,p=u),p!==u?(t.length>U?(g=t.charAt(U),U++):(g=u,0===I&&Y(i)),g!==u?h=p=[p,g]:(U=h,h=u)):(U=h,h=u);h!==u;)f.push(h),h=U,p=U,I++,g=tt(),I--,g===u?p=void 0:(U=p,p=u),p!==u?(t.length>U?(g=t.charAt(U),U++):(g=u,0===I&&Y(i)),g!==u?h=p=[p,g]:(U=h,h=u)):(U=h,h=u);(l=f!==u?t.substring(l,U):f)!==u?o=c=a(n,c,l):(U=o,o=u)}else U=o,o=u;for(;o!==u;)if(e.push(o),o=U,(c=tt())!==u){for(l=U,f=[],h=U,p=U,I++,g=tt(),I--,g===u?p=void 0:(U=p,p=u),p!==u?(t.length>U?(g=t.charAt(U),U++):(g=u,0===I&&Y(i)),g!==u?h=p=[p,g]:(U=h,h=u)):(U=h,h=u);h!==u;)f.push(h),h=U,p=U,I++,g=tt(),I--,g===u?p=void 0:(U=p,p=u),p!==u?(t.length>U?(g=t.charAt(U),U++):(g=u,0===I&&Y(i)),g!==u?h=p=[p,g]:(U=h,h=u)):(U=h,h=u);(l=f!==u?t.substring(l,U):f)!==u?o=c=a(n,c,l):(U=o,o=u)}else U=o,o=u;if(e!==u){for(o=U,c=[],t.length>U?(l=t.charAt(U),U++):(l=u,0===I&&Y(i));l!==u;)c.push(l),t.length>U?(l=t.charAt(U),U++):(l=u,0===I&&Y(i));(o=c!==u?t.substring(o,U):c)!==u?r=n=s(n,e,o):(U=r,r=u)}else U=r,r=u}else U=r,r=u;return r}function tt(){var r;return(r=function(){var r,n,e,o,c,i;return r=U,t.substr(U,4)===l?(n=l,U+=4):(n=u,0===I&&Y(f)),n!==u&&ot()!==u?(t.substr(U,3)===h?(e=h,U+=3):(e=u,0===I&&Y(p)),e!==u&&(o=nt())!==u&&ot()!==u?(c=U,(i=ut())!==u&&ot()!==u?(i=g(o,i),c=i):(U=c,c=u),c===u&&(c=null),c!==u?(t.substr(U,4)===d?(i=d,U+=4):(i=u,0===I&&Y(v)),i!==u?(n=b(o,c),r=n):(U=r,r=u)):(U=r,r=u)):(U=r,r=u)):(U=r,r=u),r}())===u&&(r=function(){var r,n,e,o,c,a,s,d,v;if(r=U,(n=function(){var r,n,e,o,c,i;return r=U,t.substr(U,4)===l?(n=l,U+=4):(n=u,0===I&&Y(f)),n!==u&&ot()!==u?(t.substr(U,3)===h?(e=h,U+=3):(e=u,0===I&&Y(p)),e!==u&&(o=nt())!==u&&ot()!==u?(c=U,(i=ut())!==u&&ot()!==u?(i=g(o,i),c=i):(U=c,c=u),c===u&&(c=null),c!==u?(t.substr(U,3)===x?(i=x,U+=3):(i=u,0===I&&Y(m)),i!==u?(n=y(o,c),r=n):(U=r,r=u)):(U=r,r=u)):(U=r,r=u)):(U=r,r=u),r}())!==u){if(e=[],(o=tt())===u){if(o=U,c=[],a=U,s=U,I++,d=tt(),I--,d===u?s=void 0:(U=s,s=u),s!==u?(d=U,I++,v=rt(),I--,v===u?d=void 0:(U=d,d=u),d!==u?(t.length>U?(v=t.charAt(U),U++):(v=u,0===I&&Y(i)),v!==u?a=s=[s,d,v]:(U=a,a=u)):(U=a,a=u)):(U=a,a=u),a!==u)for(;a!==u;)c.push(a),a=U,s=U,I++,d=tt(),I--,d===u?s=void 0:(U=s,s=u),s!==u?(d=U,I++,v=rt(),I--,v===u?d=void 0:(U=d,d=u),d!==u?(t.length>U?(v=t.charAt(U),U++):(v=u,0===I&&Y(i)),v!==u?a=s=[s,d,v]:(U=a,a=u)):(U=a,a=u)):(U=a,a=u);else c=u;o=c!==u?t.substring(o,U):c}for(;o!==u;)if(e.push(o),(o=tt())===u){if(o=U,c=[],a=U,s=U,I++,d=tt(),I--,d===u?s=void 0:(U=s,s=u),s!==u?(d=U,I++,v=rt(),I--,v===u?d=void 0:(U=d,d=u),d!==u?(t.length>U?(v=t.charAt(U),U++):(v=u,0===I&&Y(i)),v!==u?a=s=[s,d,v]:(U=a,a=u)):(U=a,a=u)):(U=a,a=u),a!==u)for(;a!==u;)c.push(a),a=U,s=U,I++,d=tt(),I--,d===u?s=void 0:(U=s,s=u),s!==u?(d=U,I++,v=rt(),I--,v===u?d=void 0:(U=d,d=u),d!==u?(t.length>U?(v=t.charAt(U),U++):(v=u,0===I&&Y(i)),v!==u?a=s=[s,d,v]:(U=a,a=u)):(U=a,a=u)):(U=a,a=u);else c=u;o=c!==u?t.substring(o,U):c}e!==u&&(o=rt())!==u?(n=A(n,e,o),r=n):(U=r,r=u)}else U=r,r=u;return r}()),r}function rt(){var r,n,e,o,c;return r=U,t.substr(U,4)===l?(n=l,U+=4):(n=u,0===I&&Y(f)),n!==u&&ot()!==u?(t.substr(U,4)===C?(e=C,U+=4):(e=u,0===I&&Y(w)),e!==u&&(o=nt())!==u&&ot()!==u?(t.substr(U,3)===x?(c=x,U+=3):(c=u,0===I&&Y(m)),c!==u?r=n=k(o):(U=r,r=u)):(U=r,r=u)):(U=r,r=u),r}function nt(){var r;return(r=function(){var r,n,e,o,c;return r=U,n=U,(e=et())!==u?(47===t.charCodeAt(U)?(o=S,U++):(o=u,0===I&&Y(F)),o!==u&&(c=et())!==u?n=e=[e,o,c]:(U=n,n=u)):(U=n,n=u),r=n!==u?t.substring(r,U):n}())===u&&(r=function(){var r,n;return U,r=U,(r=(n=et())!==u?t.substring(r,U):n)!==u&&(r=N(r)),r}()),r}function et(){var r,n,e,o,c;if(r=U,n=U,E.test(t.charAt(U))?(e=t.charAt(U),U++):(e=u,0===I&&Y(M)),e!==u){for(o=[],_.test(t.charAt(U))?(c=t.charAt(U),U++):(c=u,0===I&&Y(O));c!==u;)o.push(c),_.test(t.charAt(U))?(c=t.charAt(U),U++):(c=u,0===I&&Y(O));o!==u?n=e=[e,o]:(U=n,n=u)}else U=n,n=u;return r=n!==u?t.substring(r,U):n}function ut(){var r,n,e,o,c,a,s,l,f,h,p,g,d;if(I++,r=U,n=U,e=U,123===t.charCodeAt(U)?(o=T,U++):(o=u,0===I&&Y(j)),o!==u){for(c=[],a=U,s=U,I++,l=U,125===t.charCodeAt(U)?(f=B,U++):(f=u,0===I&&Y(L)),f!==u&&(h=ot())!==u&&(p=P)!==u?(47===t.charCodeAt(U)?(g=S,U++):(g=u,0===I&&Y(F)),g===u&&(g=null),g!==u?(t.substr(U,3)===x?(d=x,U+=3):(d=u,0===I&&Y(m)),d!==u?l=f=[f,h,p,g,d]:(U=l,l=u)):(U=l,l=u)):(U=l,l=u),I--,l===u?s=void 0:(U=s,s=u),s!==u?(t.length>U?(l=t.charAt(U),U++):(l=u,0===I&&Y(i)),l!==u?a=s=[s,l]:(U=a,a=u)):(U=a,a=u);a!==u;)c.push(a),a=U,s=U,I++,l=U,125===t.charCodeAt(U)?(f=B,U++):(f=u,0===I&&Y(L)),f!==u&&(h=ot())!==u&&(p=P)!==u?(47===t.charCodeAt(U)?(g=S,U++):(g=u,0===I&&Y(F)),g===u&&(g=null),g!==u?(t.substr(U,3)===x?(d=x,U+=3):(d=u,0===I&&Y(m)),d!==u?l=f=[f,h,p,g,d]:(U=l,l=u)):(U=l,l=u)):(U=l,l=u),I--,l===u?s=void 0:(U=s,s=u),s!==u?(t.length>U?(l=t.charAt(U),U++):(l=u,0===I&&Y(i)),l!==u?a=s=[s,l]:(U=a,a=u)):(U=a,a=u);c!==u?(125===t.charCodeAt(U)?(a=B,U++):(a=u,0===I&&Y(L)),a!==u?e=o=[o,c,a]:(U=e,e=u)):(U=e,e=u)}else U=e,e=u;return(n=e!==u?t.substring(n,U):e)!==u&&(n=R(n)),I--,(r=n)===u&&(n=u,0===I&&Y(z)),r}function ot(){var r,n;if(r=[],H.test(t.charAt(U))?(n=t.charAt(U),U++):(n=u,0===I&&Y(J)),n!==u)for(;n!==u;)r.push(n),H.test(t.charAt(U))?(n=t.charAt(U),U++):(n=u,0===I&&Y(J));else r=u;return r}function ct(t){return t.length&&{blockName:null,attrs:{},innerBlocks:[],innerHTML:t,innerContent:[t]}}if((n=c())!==u&&U===t.length)return n;throw n!==u&&U<t.length&&Y({type:"end"}),Z(G,D<t.length?t.charAt(D):null,D<t.length?X(D,D+1):X(D,D))}}}});