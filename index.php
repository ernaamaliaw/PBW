<?php
session_start();
include "function.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>E-Karangpakel</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Day - v4.10.0
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">karangpakel@gmail.com</a>
        <i class="bi bi-phone-fill phone-icon"></i> +62 831 6445 0789
      </div>
      <div class="social-links d-none d-md-block">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="ti-whatsapp"><i class="bi bi-whatsapp"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">E-Karangpakel</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#home">Home</a></li>
          <li class="dropdown"><a href="#kategori"><span>Kategori</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#makanan">Makanan</a></li>
              <li><a href="#minuman">Minuman</a></li>
              <li><a href="#kerajinan">Kerajinan</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#promo">Promo</a></li>
          <li><a class="nav-link scrollto " href="#berita">Berita</a></li>
          <li><a class="nav-link scrollto" href="#video">Video</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a href="cart.php" class=""><i class="bi bi-basket"></i></a></li>
          <li class="dropdown"><a href="#home"><span>Akun</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="login.php">Login</a></li>
              <li><a href="register.php">Register</a></li>
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Home Section ======= -->
  <section id="home" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
      <script type="text/javascript">(function(g,h,c,j,d,k,l){/*! Jssor */
        new(function(){});var e={ud:function(a){return-c.cos(a*c.PI)/2+.5},ld:function(a){return a},Le:function(a){return a*a},Oc:function(a){return-a*(a-2)},Me:function(a){return(a*=2)<1?1/2*a*a:-1/2*(--a*(a-2)-1)},Ne:function(a){return a*a*a},Oe:function(a){return(a-=1)*a*a+1},Pe:function(a){return(a*=2)<1?1/2*a*a*a:1/2*((a-=2)*a*a+2)},Qe:function(a){return a*a*a*a},Re:function(a){return-((a-=1)*a*a*a-1)},Se:function(a){return(a*=2)<1?1/2*a*a*a*a:-1/2*((a-=2)*a*a*a-2)},Te:function(a){return a*a*a*a*a},Ue:function(a){return(a-=1)*a*a*a*a+1},Ve:function(a){return(a*=2)<1?1/2*a*a*a*a*a:1/2*((a-=2)*a*a*a*a+2)},Xe:function(a){return 1-c.cos(c.PI/2*a)},lf:function(a){return c.sin(c.PI/2*a)},Ye:function(a){return-1/2*(c.cos(c.PI*a)-1)},Ze:function(a){return a==0?0:c.pow(2,10*(a-1))},af:function(a){return a==1?1:-c.pow(2,-10*a)+1},bf:function(a){return a==0||a==1?a:(a*=2)<1?1/2*c.pow(2,10*(a-1)):1/2*(-c.pow(2,-10*--a)+2)},cf:function(a){return-(c.sqrt(1-a*a)-1)},df:function(a){return c.sqrt(1-(a-=1)*a)},ef:function(a){return(a*=2)<1?-1/2*(c.sqrt(1-a*a)-1):1/2*(c.sqrt(1-(a-=2)*a)+1)},ff:function(a){if(!a||a==1)return a;var b=.3,d=.075;return-(c.pow(2,10*(a-=1))*c.sin((a-d)*2*c.PI/b))},gf:function(a){if(!a||a==1)return a;var b=.3,d=.075;return c.pow(2,-10*a)*c.sin((a-d)*2*c.PI/b)+1},hf:function(a){if(!a||a==1)return a;var b=.45,d=.1125;return(a*=2)<1?-.5*c.pow(2,10*(a-=1))*c.sin((a-d)*2*c.PI/b):c.pow(2,-10*(a-=1))*c.sin((a-d)*2*c.PI/b)*.5+1},jf:function(a){var b=1.70158;return a*a*((b+1)*a-b)},kf:function(a){var b=1.70158;return(a-=1)*a*((b+1)*a+b)+1},Ke:function(a){var b=1.70158;return(a*=2)<1?1/2*a*a*(((b*=1.525)+1)*a-b):1/2*((a-=2)*a*(((b*=1.525)+1)*a+b)+2)},cd:function(a){return 1-e.ic(1-a)},ic:function(a){return a<1/2.75?7.5625*a*a:a<2/2.75?7.5625*(a-=1.5/2.75)*a+.75:a<2.5/2.75?7.5625*(a-=2.25/2.75)*a+.9375:7.5625*(a-=2.625/2.75)*a+.984375},We:function(a){return a<1/2?e.cd(a*2)*.5:e.ic(a*2-1)*.5+.5},Je:function(){return 1-c.abs(1)},te:function(a){return 1-c.cos(a*c.PI*2)},he:function(a){return c.sin(a*c.PI*2)},ie:function(a){return 1-((a*=2)<1?(a=1-a)*a*a:(a-=1)*a*a)},je:function(a){return(a*=2)<1?a*a*a:(a=2-a)*a*a}},f={ke:e.ud,le:e.ld,me:e.Le,ne:e.Oc,oe:e.Me,pe:e.Ne,qe:e.Oe,re:e.Pe,se:e.Qe,ue:e.Re,He:e.Se,ve:e.Te,Qc:e.Ue,we:e.Ve,xe:e.Xe,ye:e.lf,ze:e.Ye,Ae:e.Ze,Be:e.af,Ce:e.bf,De:e.cf,Ee:e.df,Fe:e.ef,nf:e.ff,Ie:e.gf,mf:e.hf,pf:e.jf,of:e.kf,Uf:e.Ke,Vf:e.cd,Wf:e.ic,Xf:e.We,Yf:e.Je,Zf:e.te,ag:e.he,bg:e.ie,cg:e.je};var b=new function(){var f=this,Ab=/\S+/g,F=1,yb=2,fb=3,eb=4,jb=5,G,r=0,i=0,s=0,X=0,z=0,I=navigator,ob=I.appName,o=I.userAgent,p=parseFloat;function Ib(){if(!G){G={eg:"ontouchstart"in g||"createTouch"in h};var a;if(I.pointerEnabled||(a=I.msPointerEnabled))G.sd=a?"msTouchAction":"touchAction"}return G}function v(j){if(!r){r=-1;if(ob=="Microsoft Internet Explorer"&&!!g.attachEvent&&!!g.ActiveXObject){var e=o.indexOf("MSIE");r=F;s=p(o.substring(e+5,o.indexOf(";",e)));/*@cc_on X=@_jscript_version@*/;i=h.documentMode||s}else if(ob=="Netscape"&&!!g.addEventListener){var d=o.indexOf("Firefox"),b=o.indexOf("Safari"),f=o.indexOf("Chrome"),c=o.indexOf("AppleWebKit");if(d>=0){r=yb;i=p(o.substring(d+8))}else if(b>=0){var k=o.substring(0,b).lastIndexOf("/");r=f>=0?eb:fb;i=p(o.substring(k+1,b))}else{var a=/Trident\/.*rv:([0-9]{1,}[\.0-9]{0,})/i.exec(o);if(a){r=F;i=s=p(a[1])}}if(c>=0)z=p(o.substring(c+12))}else{var a=/(opera)(?:.*version|)[ \/]([\w.]+)/i.exec(o);if(a){r=jb;i=p(a[2])}}}return j==r}function q(){return v(F)}function Q(){return q()&&(i<6||h.compatMode=="BackCompat")}function db(){return v(fb)}function ib(){return v(jb)}function vb(){return db()&&z>534&&z<535}function J(){v();return z>537||i>42||r==F&&i>=11}function O(){return q()&&i<9}function wb(a){var b,c;return function(f){if(!b){b=d;var e=a.substr(0,1).toUpperCase()+a.substr(1);n([a].concat(["WebKit","ms","Moz","O","webkit"]),function(g,d){var b=a;if(d)b=g+e;if(f.style[b]!=l)return c=b})}return c}}function ub(b){var a;return function(c){a=a||wb(b)(c)||b;return a}}var K=ub("transform");function nb(a){return{}.toString.call(a)}var kb={};n(["Boolean","Number","String","Function","Array","Date","RegExp","Object"],function(a){kb["[object "+a+"]"]=a.toLowerCase()});function n(b,d){var a,c;if(nb(b)=="[object Array]"){for(a=0;a<b.length;a++)if(c=d(b[a],a,b))return c}else for(a in b)if(c=d(b[a],a,b))return c}function C(a){return a==j?String(a):kb[nb(a)]||"object"}function lb(a){for(var b in a)return d}function A(a){try{return C(a)=="object"&&!a.nodeType&&a!=a.window&&(!a.constructor||{}.hasOwnProperty.call(a.constructor.prototype,"isPrototypeOf"))}catch(b){}}function u(a,b){return{x:a,y:b}}function rb(b,a){setTimeout(b,a||0)}function H(b,d,c){var a=!b||b=="inherit"?"":b;n(d,function(c){var b=c.exec(a);if(b){var d=a.substr(0,b.index),e=a.substr(b.index+b[0].length+1,a.length-1);a=d+e}});a=c+(!a.indexOf(" ")?"":" ")+a;return a}function tb(b,a){if(i<9)b.style.filter=a}f.Rf=Ib;f.Nc=q;f.qf=db;f.tf=J;f.xc=O;wb("transform");f.Cc=function(){return i};f.Bc=rb;function Y(a){a.constructor===Y.caller&&a.Ic&&a.Ic.apply(a,Y.caller.arguments)}f.Ic=Y;f.ob=function(a){if(f.xf(a))a=h.getElementById(a);return a};function t(a){return a||g.event}f.Lc=t;f.hc=function(b){b=t(b);var a=b.target||b.srcElement||h;if(a.nodeType==3)a=f.Ec(a);return a};f.Gc=function(a){a=t(a);return{x:a.pageX||a.clientX||0,y:a.pageY||a.clientY||0}};function D(c,d,a){if(a!==l)c.style[d]=a==l?"":a;else{var b=c.currentStyle||c.style;a=b[d];if(a==""&&g.getComputedStyle){b=c.ownerDocument.defaultView.getComputedStyle(c,j);b&&(a=b.getPropertyValue(d)||b[d])}return a}}function ab(b,c,a,d){if(a!==l){if(a==j)a="";else d&&(a+="px");D(b,c,a)}else return p(D(b,c))}function m(c,a){var d=a?ab:D,b;if(a&4)b=ub(c);return function(e,f){return d(e,b?b(e):c,f,a&2)}}function Db(b){if(q()&&s<9){var a=/opacity=([^)]*)/.exec(b.style.filter||"");return a?p(a[1])/100:1}else return p(b.style.opacity||"1")}function Fb(b,a,f){if(q()&&s<9){var h=b.style.filter||"",i=new RegExp(/[\s]*alpha\([^\)]*\)/g),e=c.round(100*a),d="";if(e<100||f)d="alpha(opacity="+e+") ";var g=H(h,[i],d);tb(b,g)}else b.style.opacity=a==1?"":c.round(a*100)/100}var L={ab:["rotate"],K:["rotateX"],M:["rotateY"],Kb:["skewX"],Lb:["skewY"]};if(!J())L=B(L,{z:["scaleX",2],n:["scaleY",2],P:["translateZ",1]});function M(d,a){var c="";if(a){if(q()&&i&&i<10){delete a.K;delete a.M;delete a.P}b.c(a,function(d,b){var a=L[b];if(a){var e=a[1]||0;if(N[b]!=d)c+=" "+a[0]+"("+d+(["deg","px",""])[e]+")"}});if(J()){if(a.bb||a.fb||a.P)c+=" translate3d("+(a.bb||0)+"px,"+(a.fb||0)+"px,"+(a.P||0)+"px)";if(a.z==l)a.z=1;if(a.n==l)a.n=1;if(a.z!=1||a.n!=1)c+=" scale3d("+a.z+", "+a.n+", 1)"}}d.style[K(d)]=c}f.Jc=m("transformOrigin",4);f.fe=m("backfaceVisibility",4);f.Af=m("transformStyle",4);f.Bf=m("perspective",6);f.Cf=m("perspectiveOrigin",4);f.Df=function(a,b){if(q()&&s<9||s<10&&Q())a.style.zoom=b==1?"":b;else{var c=K(a),f="scale("+b+")",e=a.style[c],g=new RegExp(/[\s]*scale\(.*?\)/g),d=H(e,[g],f);a.style[c]=d}};f.kc=function(b,a){return function(c){c=t(c);var e=c.type,d=c.relatedTarget||(e=="mouseout"?c.toElement:c.fromElement);(!d||d!==a&&!f.Ef(a,d))&&b(c)}};f.a=function(a,d,b,c){a=f.ob(a);if(a.addEventListener){d=="mousewheel"&&a.addEventListener("DOMMouseScroll",b,c);a.addEventListener(d,b,c)}else if(a.attachEvent){a.attachEvent("on"+d,b);c&&a.setCapture&&a.setCapture()}};f.H=function(a,c,d,b){a=f.ob(a);if(a.removeEventListener){c=="mousewheel"&&a.removeEventListener("DOMMouseScroll",d,b);a.removeEventListener(c,d,b)}else if(a.detachEvent){a.detachEvent("on"+c,d);b&&a.releaseCapture&&a.releaseCapture()}};f.Nb=function(a){a=t(a);a.preventDefault&&a.preventDefault();a.cancel=d;a.returnValue=k};f.Gf=function(a){a=t(a);a.stopPropagation&&a.stopPropagation();a.cancelBubble=d};f.G=function(d,c){var a=[].slice.call(arguments,2),b=function(){var b=a.concat([].slice.call(arguments,0));return c.apply(d,b)};return b};f.Hf=function(a,b){if(b==l)return a.textContent||a.innerText;var c=h.createTextNode(b);f.fc(a);a.appendChild(c)};f.yb=function(d,c){for(var b=[],a=d.firstChild;a;a=a.nextSibling)(c||a.nodeType==1)&&b.push(a);return b};function mb(a,c,e,b){b=b||"u";for(a=a?a.firstChild:j;a;a=a.nextSibling)if(a.nodeType==1){if(U(a,b)==c)return a;if(!e){var d=mb(a,c,e,b);if(d)return d}}}f.B=mb;function S(a,d,f,b){b=b||"u";var c=[];for(a=a?a.firstChild:j;a;a=a.nextSibling)if(a.nodeType==1){U(a,b)==d&&c.push(a);if(!f){var e=S(a,d,f,b);if(e.length)c=c.concat(e)}}return c}function gb(a,c,d){for(a=a?a.firstChild:j;a;a=a.nextSibling)if(a.nodeType==1){if(a.tagName==c)return a;if(!d){var b=gb(a,c,d);if(b)return b}}}f.Lf=gb;f.Mf=function(b,a){return b.getElementsByTagName(a)};function B(){var e=arguments,d,c,b,a,g=1&e[0],f=1+g;d=e[f-1]||{};for(;f<e.length;f++)if(c=e[f])for(b in c){a=c[b];if(a!==l){a=c[b];var h=d[b];d[b]=g&&(A(h)||A(a))?B(g,{},h,a):a}}return d}f.J=B;function Z(f,g){var d={},c,a,b;for(c in f){a=f[c];b=g[c];if(a!==b){var e;if(A(a)&&A(b)){a=Z(a,b);e=!lb(a)}!e&&(d[c]=a)}}return d}f.wc=function(a){return C(a)=="function"};f.xf=function(a){return C(a)=="string"};f.Zb=function(a){return!isNaN(p(a))&&isFinite(a)};f.c=n;f.Pf=A;function R(a){return h.createElement(a)}f.Ab=function(){return R("DIV")};f.Ge=function(){return R("SPAN")};f.Mc=function(){};function V(b,c,a){if(a==l)return b.getAttribute(c);b.setAttribute(c,a)}function U(a,b){return V(a,b)||V(a,"data-"+b)}f.p=V;f.g=U;function x(b,a){if(a==l)return b.className;b.className=a}f.tc=x;function qb(b){var a={};n(b,function(b){a[b]=b});return a}function sb(b,a){return b.match(a||Ab)}function P(b,a){return qb(sb(b||"",a))}f.yd=sb;function bb(b,c){var a="";n(c,function(c){a&&(a+=b);a+=c});return a}function E(a,c,b){x(a,bb(" ",B(Z(P(x(a)),P(c)),P(b))))}f.Ec=function(a){return a.parentNode};f.L=function(a){f.Q(a,"none")};f.S=function(a,b){f.Q(a,b?"none":"")};f.Dd=function(b,a){b.removeAttribute(a)};f.Yd=function(){return q()&&i<10};f.Od=function(d,a){if(a)d.style.clip="rect("+c.round(a.i||a.q||0)+"px "+c.round(a.C)+"px "+c.round(a.D)+"px "+c.round(a.j||a.v||0)+"px)";else if(a!==l){var g=d.style.cssText,f=[new RegExp(/[\s]*clip: rect\(.*?\)[;]?/i),new RegExp(/[\s]*cliptop: .*?[;]?/i),new RegExp(/[\s]*clipright: .*?[;]?/i),new RegExp(/[\s]*clipbottom: .*?[;]?/i),new RegExp(/[\s]*clipleft: .*?[;]?/i)],e=H(g,f,"");b.Mb(d,e)}};f.V=function(){return+new Date};f.U=function(b,a){b.appendChild(a)};f.Eb=function(b,a,c){(c||a.parentNode).insertBefore(b,a)};f.Fb=function(b,a){a=a||b.parentNode;a&&a.removeChild(b)};f.Fd=function(a,b){n(a,function(a){f.Fb(a,b)})};f.fc=function(a){f.Fd(f.yb(a,d),a)};f.Hd=function(a,b){var c=f.Ec(a);b&1&&f.E(a,(f.l(c)-f.l(a))/2);b&2&&f.A(a,(f.m(c)-f.m(a))/2)};f.Wb=function(b,a){return parseInt(b,a||10)};f.ee=p;f.Ef=function(b,a){var c=h.body;while(a&&b!==a&&c!==a)try{a=a.parentNode}catch(d){return k}return b===a};function W(d,c,b){var a=d.cloneNode(!c);!b&&f.Dd(a,"id");return a}f.lb=W;f.nb=function(e,g){var a=new Image;function b(e,d){f.H(a,"load",b);f.H(a,"abort",c);f.H(a,"error",c);g&&g(a,d)}function c(a){b(a,d)}if(ib()&&i<11.6||!e)b(!e);else{f.a(a,"load",b);f.a(a,"abort",c);f.a(a,"error",c);a.src=e}};f.Id=function(d,a,e){var c=d.length+1;function b(b){c--;if(a&&b&&b.src==a.src)a=b;!c&&e&&e(a)}n(d,function(a){f.nb(a.src,b)});b()};f.Jd=function(a,g,i,h){if(h)a=W(a);var c=S(a,g);if(!c.length)c=b.Mf(a,g);for(var f=c.length-1;f>-1;f--){var d=c[f],e=W(i);x(e,x(d));b.Mb(e,d.style.cssText);b.Eb(e,d);b.Fb(d)}return a};function Gb(a){var k=this,p="",r=["av","pv","ds","dn"],e=[],q,j=0,g=0,d=0;function i(){E(a,q,e[d||j||g&2||g]);b.W(a,"pointer-events",d?"none":"")}function c(){j=0;i();f.H(h,"mouseup",c);f.H(h,"touchend",c);f.H(h,"touchcancel",c)}function o(a){if(d)f.Nb(a);else{j=4;i();f.a(h,"mouseup",c);f.a(h,"touchend",c);f.a(h,"touchcancel",c)}}k.Kd=function(a){if(a===l)return g;g=a&2||a&1;i()};k.qd=function(a){if(a===l)return!d;d=a?0:3;i()};k.X=a=f.ob(a);var m=b.yd(x(a));if(m)p=m.shift();n(r,function(a){e.push(p+a)});q=bb(" ",e);e.unshift("");f.a(a,"mousedown",o);f.a(a,"touchstart",o)}f.nc=function(a){return new Gb(a)};f.W=D;f.Db=m("overflow");f.A=m("top",2);f.E=m("left",2);f.l=m("width",2);f.m=m("height",2);f.Md=m("marginLeft",2);f.Nd=m("marginTop",2);f.F=m("position");f.Q=m("display");f.s=m("zIndex",1);f.pc=function(b,a,c){if(a!=l)Fb(b,a,c);else return Db(b)};f.Mb=function(a,b){if(b!=l)a.style.cssText=b;else return a.style.cssText};var T={kb:f.pc,i:f.A,j:f.E,jb:f.l,ib:f.m,hb:f.F,Ag:f.Q,gb:f.s};function w(g,k){var e=O(),b=J(),d=vb(),h=K(g);function i(b,d,a){var e=b.eb(u(-d/2,-a/2)),f=b.eb(u(d/2,-a/2)),g=b.eb(u(d/2,a/2)),h=b.eb(u(-d/2,a/2));b.eb(u(300,300));return u(c.min(e.x,f.x,g.x,h.x)+d/2,c.min(e.y,f.y,g.y,h.y)+a/2)}function a(d,a){a=a||{};var n=a.P||0,p=(a.K||0)%360,q=(a.M||0)%360,u=(a.ab||0)%360,k=a.z,m=a.n,g=a.zg;if(k==l)k=1;if(m==l)m=1;if(g==l)g=1;if(e){n=0;p=0;q=0;g=0}var c=new Cb(a.bb,a.fb,n);c.K(p);c.M(q);c.Sd(u);c.Td(a.Kb,a.Lb);c.oc(k,m,g);if(b){c.pb(a.v,a.q);d.style[h]=c.Ud()}else if(!X||X<9){var o="",j={x:0,y:0};if(a.N)j=i(c,a.N,a.Z);f.Nd(d,j.y);f.Md(d,j.x);o=c.Vd();var s=d.style.filter,t=new RegExp(/[\s]*progid:DXImageTransform\.Microsoft\.Matrix\([^\)]*\)/g),r=H(s,[t],o);tb(d,r)}}w=function(e,c){c=c||{};var h=c.v,i=c.q,g;n(T,function(a,b){g=c[b];g!==l&&a(e,g)});f.Od(e,c.f);if(!b){h!=l&&f.E(e,(c.Sc||0)+h);i!=l&&f.A(e,(c.Tc||0)+i)}if(c.Wd)if(d)rb(f.G(j,M,e,c));else a(e,c)};f.Pb=M;if(d)f.Pb=w;if(e)f.Pb=a;else if(!b)a=M;f.T=w;w(g,k)}f.Pb=w;f.T=w;function Cb(i,k,o){var d=this,b=[1,0,0,0,0,1,0,0,0,0,1,0,i||0,k||0,o||0,1],h=c.sin,g=c.cos,l=c.tan;function f(a){return a*c.PI/180}function n(a,b){return{x:a,y:b}}function m(c,e,l,m,o,r,t,u,w,z,A,C,E,b,f,k,a,g,i,n,p,q,s,v,x,y,B,D,F,d,h,j){return[c*a+e*p+l*x+m*F,c*g+e*q+l*y+m*d,c*i+e*s+l*B+m*h,c*n+e*v+l*D+m*j,o*a+r*p+t*x+u*F,o*g+r*q+t*y+u*d,o*i+r*s+t*B+u*h,o*n+r*v+t*D+u*j,w*a+z*p+A*x+C*F,w*g+z*q+A*y+C*d,w*i+z*s+A*B+C*h,w*n+z*v+A*D+C*j,E*a+b*p+f*x+k*F,E*g+b*q+f*y+k*d,E*i+b*s+f*B+k*h,E*n+b*v+f*D+k*j]}function e(c,a){return m.apply(j,(a||b).concat(c))}d.oc=function(a,c,d){if(a!=1||c!=1||d!=1)b=e([a,0,0,0,0,c,0,0,0,0,d,0,0,0,0,1])};d.pb=function(a,c,d){b[12]+=a||0;b[13]+=c||0;b[14]+=d||0};d.K=function(c){if(c){a=f(c);var d=g(a),i=h(a);b=e([1,0,0,0,0,d,i,0,0,-i,d,0,0,0,0,1])}};d.M=function(c){if(c){a=f(c);var d=g(a),i=h(a);b=e([d,0,-i,0,0,1,0,0,i,0,d,0,0,0,0,1])}};d.Sd=function(c){if(c){a=f(c);var d=g(a),i=h(a);b=e([d,i,0,0,-i,d,0,0,0,0,1,0,0,0,0,1])}};d.Td=function(a,c){if(a||c){i=f(a);k=f(c);b=e([1,l(k),0,0,l(i),1,0,0,0,0,1,0,0,0,0,1])}};d.eb=function(c){var a=e(b,[1,0,0,0,0,1,0,0,0,0,1,0,c.x,c.y,0,1]);return n(a[12],a[13])};d.Ud=function(){return"matrix3d("+b.join(",")+")"};d.Vd=function(){return"progid:DXImageTransform.Microsoft.Matrix(M11="+b[0]+", M12="+b[4]+", M21="+b[1]+", M22="+b[5]+", SizingMethod='auto expand')"}}new function(){var a=this;function b(d,g){for(var j=d[0].length,i=d.length,h=g[0].length,f=[],c=0;c<i;c++)for(var k=f[c]=[],b=0;b<h;b++){for(var e=0,a=0;a<j;a++)e+=d[c][a]*g[a][b];k[b]=e}return f}a.z=function(b,c){return a.Zc(b,c,0)};a.n=function(b,c){return a.Zc(b,0,c)};a.Zc=function(a,c,d){return b(a,[[c,0],[0,d]])};a.eb=function(d,c){var a=b(d,[[c.x],[c.y]]);return u(a[0][0],a[1][0])}};var N={Sc:0,Tc:0,v:0,q:0,Y:1,z:1,n:1,ab:0,K:0,M:0,bb:0,fb:0,P:0,Kb:0,Lb:0};f.bd=function(a){var c=a||{};if(a)if(b.wc(a))c={lc:c};else if(b.wc(a.f))c.f={lc:a.f};return c};function pb(c,a){var b={};n(c,function(c,d){var e=c;if(a[d]!=l)if(f.Zb(c))e=c+a[d];else e=pb(c,a[d]);b[d]=e});return b}f.be=pb;f.Ed=function(k,m,x,q,z,A,n){var a=m;if(k){a={};for(var g in m){var B=A[g]||1,w=z[g]||[0,1],f=(x-w[0])/w[1];f=c.min(c.max(f,0),1);f=f*B;var u=c.floor(f);if(f!=u)f-=u;var h=q.lc||e.ud,i,C=k[g],o=m[g];if(b.Zb(o)){h=q[g]||h;var y=h(f);i=C+o*y}else{i=b.J({Hb:{}},k[g]);var v=q[g]||{};b.c(o.Hb||o,function(d,a){h=v[a]||v.lc||h;var c=h(f),b=d*c;i.Hb[a]=b;i[a]+=b})}a[g]=i}var t=b.c(m,function(b,a){return N[a]!=l});t&&b.c(N,function(c,b){if(a[b]==l&&k[b]!==l)a[b]=k[b]});if(t){if(a.Y)a.z=a.n=a.Y;a.N=n.N;a.Z=n.Z;a.Wd=d}}if(m.f&&n.pb){var p=a.f.Hb,s=(p.i||0)+(p.D||0),r=(p.j||0)+(p.C||0);a.j=(a.j||0)+r;a.i=(a.i||0)+s;a.f.j-=r;a.f.C-=r;a.f.i-=s;a.f.D-=s}if(a.f&&b.Yd()&&!a.f.i&&!a.f.j&&!a.f.q&&!a.f.v&&a.f.C==n.N&&a.f.D==n.Z)a.f=j;return a}};function n(){var a=this,d=[];function i(a,b){d.push({jc:a,Yb:b})}function h(a,c){b.c(d,function(b,e){b.jc==a&&b.Yb===c&&d.splice(e,1)})}a.xb=a.addEventListener=i;a.removeEventListener=h;a.k=function(a){var c=[].slice.call(arguments,1);b.c(d,function(b){b.jc==a&&b.Yb.apply(g,c)})}}var m=function(z,C,i,J,M,L){z=z||0;var a=this,q,n,o,u,A=0,G,H,F,B,y=0,h=0,m=0,D,l,f,e,p,w=[],x;function O(a){f+=a;e+=a;l+=a;h+=a;m+=a;y+=a}function t(o){var g=o;if(p&&(g>=e||g<=f))g=((g-f)%p+p)%p+f;if(!D||u||h!=g){var j=c.min(g,e);j=c.max(j,f);if(!D||u||j!=m){if(L){var k=(j-l)/(C||1);if(i.zd)k=1-k;var n=b.Ed(M,L,k,G,F,H,i);if(x)b.c(n,function(b,a){x[a]&&x[a](J,b)});else b.T(J,n)}a.ec(m-l,j-l);m=j;b.c(w,function(b,c){var a=o<h?w[w.length-c-1]:b;a.u(m-y)});var r=h,q=m;h=g;D=d;a.Ib(r,q)}}}function E(a,b,d){b&&a.Bb(e);if(!d){f=c.min(f,a.dc()+y);e=c.max(e,a.Gb()+y)}w.push(a)}var r=g.requestAnimationFrame||g.webkitRequestAnimationFrame||g.mozRequestAnimationFrame||g.msRequestAnimationFrame;if(b.qf()&&b.Cc()<7)r=j;r=r||function(a){b.Bc(a,i.Yc)};function I(){if(q){var d=b.V(),e=c.min(d-A,i.Xc),a=h+e*o;A=d;if(a*o>=n*o)a=n;t(a);if(!u&&a*o>=n*o)K(B);else r(I)}}function s(g,i,j){if(!q){q=d;u=j;B=i;g=c.max(g,f);g=c.min(g,e);n=g;o=n<h?-1:1;a.Wc();A=b.V();r(I)}}function K(b){if(q){u=q=B=k;a.Vc();b&&b()}}a.Uc=function(a,b,c){s(a?h+a:e,b,c)};a.Rc=s;a.cb=K;a.Bd=function(a){s(a)};a.R=function(){return h};a.hd=function(){return n};a.rb=function(){return m};a.u=t;a.pb=function(a){t(h+a)};a.od=function(){return q};a.xd=function(a){p=a};a.Bb=O;a.vb=function(a,b){E(a,0,b)};a.bc=function(a){E(a,1)};a.Ff=function(a){e+=a};a.dc=function(){return f};a.Gb=function(){return e};a.Ib=a.Wc=a.Vc=a.ec=b.Mc;a.rc=b.V();i=b.J({Yc:16,Xc:50},i);p=i.Fc;x=i.wf;f=l=z;e=z+C;H=i.vf||{};F=i.uf||{};G=b.bd(i.O)};new(function(){});var i=function(p,fc){var f=this;function Bc(){var a=this;m.call(a,-1e8,2e8);a.Tf=function(){var b=a.rb(),d=c.floor(b),f=t(d),e=b-c.floor(b);return{db:f,Qf:d,hb:e}};a.Ib=function(b,a){var e=c.floor(a);if(e!=a&&a>b)e++;Tb(e,d);f.k(i.Sf,t(a),t(b),a,b)}}function Ac(){var a=this;m.call(a,0,0,{Fc:r});b.c(C,function(b){D&1&&b.xd(r);a.bc(b);b.Bb(kb/bc)})}function zc(){var a=this,b=Ub.X;m.call(a,-1,2,{O:e.ld,wf:{hb:Zb},Fc:r},b,{hb:1},{hb:-2});a.mc=b}function mc(o,n){var b=this,e,g,h,l,c;m.call(b,-1e8,2e8,{Xc:100});b.Wc=function(){M=d;R=j;f.k(i.sf,t(w.R()),w.R())};b.Vc=function(){M=k;l=k;var a=w.Tf();f.k(i.yf,t(w.R()),w.R());!a.hb&&Dc(a.Qf,s)};b.Ib=function(i,f){var b;if(l)b=c;else{b=g;if(h){var d=f/h;b=a.Hc(d)*(g-e)+e}}w.u(b)};b.Ob=function(a,d,c,f){e=a;g=d;h=c;w.u(a);b.u(0);b.Rc(c,f)};b.zf=function(a){l=d;c=a;b.Uc(a,j,d)};b.sg=function(a){c=a};w=new Bc;w.vb(o);w.vb(n)}function oc(){var c=this,a=Xb();b.s(a,0);b.W(a,"pointerEvents","none");c.X=a;c.zb=function(){b.L(a);b.fc(a)}}function xc(o,g){var e=this,q,M,v,l,y=[],x,B,W,H,S,F,h,w,p;m.call(e,-u,u+1,{});function E(a){q&&q.Pc();T(o,a,0);F=d;q=new I.I(o,I,b.ee(b.g(o,"idle"))||lc);q.u(0)}function Z(){q.rc<I.rc&&E()}function O(p,r,o){if(!H){H=d;if(l&&o){var h=o.width,c=o.height,n=h,m=c;if(h&&c&&a.ub){if(a.ub&3&&(!(a.ub&4)||h>K||c>J)){var j=k,q=K/J*c/h;if(a.ub&1)j=q>1;else if(a.ub&2)j=q<1;n=j?h*J/c:K;m=j?J:c*K/h}b.l(l,n);b.m(l,m);b.A(l,(J-m)/2);b.E(l,(K-n)/2)}b.F(l,"absolute");f.k(i.Cd,g)}}b.L(r);p&&p(e)}function Y(b,c,d,f){if(f==R&&s==g&&N)if(!Cc){var a=t(b);A.rg(a,g,c,e,d);c.wd();U.Bb(a-U.dc()-1);U.u(a);z.Ob(b,b,0)}}function bb(b){if(b==R&&s==g){if(!h){var a=j;if(A)if(A.db==g)a=A.ng();else A.zb();Z();h=new vc(o,g,a,q);h.fd(p)}!h.od()&&h.gc()}}function G(d,f,l){if(d==g){if(d!=f)C[f]&&C[f].dd();else!l&&h&&h.de();p&&p.qd();var m=R=b.V();e.nb(b.G(j,bb,m))}else{var k=c.min(g,d),i=c.max(g,d),o=c.min(i-k,k+r-i),n=u+a.ae-1;(!S||o<=n)&&e.nb()}}function db(){if(s==g&&h){h.cb();p&&p.Xd();p&&p.Rd();h.ed()}}function eb(){s==g&&h&&h.cb()}function ab(a){!P&&f.k(i.Qd,g,a)}function Q(){p=w.pInstance;h&&h.fd(p)}e.nb=function(c,a){a=a||v;if(y.length&&!H){b.S(a);if(!W){W=d;f.k(i.Pd,g);b.c(y,function(a){if(!b.p(a,"src")){a.src=b.g(a,"src2");b.Q(a,a["display-origin"])}})}b.Id(y,l,b.G(j,O,c,a))}else O(c,a)};e.Ld=function(){var i=g;if(a.rd<0)i-=r;var d=i+a.rd*tc;if(D&2)d=t(d);if(!(D&1)&&!ib)d=c.max(0,c.min(d,r-u));if(d!=g){if(A){var f=A.kg(r);if(f){var k=R=b.V(),h=C[t(d)];return h.nb(b.G(j,Y,d,h,f,k),v)}}cb(d)}else if(a.wb){e.dd();G(g,g)}};e.Tb=function(){G(g,g,d)};e.dd=function(){p&&p.Xd();p&&p.Rd();e.ad();h&&h.Zd();h=j;E()};e.wd=function(){b.L(o)};e.ad=function(){b.S(o)};e.ce=function(){p&&p.qd()};function T(a,c,e){if(b.p(a,"jssor-slider"))return;if(!F){if(a.tagName=="IMG"){y.push(a);if(!b.p(a,"src")){S=d;a["display-origin"]=b.Q(a);b.L(a)}}b.xc()&&b.s(a,(b.s(a)||0)+1)}var f=b.yb(a);b.c(f,function(f){var h=f.tagName,i=b.g(f,"u");if(i=="player"&&!w){w=f;if(w.pInstance)Q();else b.a(w,"dataavailable",Q)}if(i=="caption"){if(c){b.Jc(f,b.g(f,"to"));b.fe(f,b.g(f,"bf"));b.g(f,"3d")&&b.Af(f,"preserve-3d")}else if(!b.Nc()){var g=b.lb(f,k,d);b.Eb(g,f,a);b.Fb(f,a);f=g;c=d}}else if(!F&&!e&&!l){if(h=="A"){if(b.g(f,"u")=="image")l=b.Lf(f,"IMG");else l=b.B(f,"image",d);if(l){x=f;b.Q(x,"block");b.T(x,V);B=b.lb(x,d);b.F(x,"relative");b.pc(B,0);b.W(B,"backgroundColor","#000")}}else if(h=="IMG"&&b.g(f,"u")=="image")l=f;if(l){l.border=0;b.T(l,V)}}T(f,c,e+1)})}e.ec=function(c,b){var a=u-b;Zb(M,a)};e.db=g;n.call(e);b.Bf(o,b.g(o,"p"));b.Cf(o,b.g(o,"po"));var L=b.B(o,"thumb",d);if(L){b.lb(L);b.L(L)}b.S(o);v=b.lb(gb);b.s(v,1e3);b.a(o,"click",ab);E(d);e.mg=l;e.Kc=B;e.mc=M=o;b.U(M,v);f.xb(203,G);f.xb(28,eb);f.xb(24,db)}function vc(y,g,p,q){var a=this,n=0,u=0,h,j,e,c,l,t,r,o=C[g];m.call(a,0,0);function v(){b.fc(L);cc&&l&&o.Kc&&b.U(L,o.Kc);b.S(L,!l&&o.mg)}function w(){a.gc()}function x(b){r=b;a.cb();a.gc()}a.gc=function(){var b=a.rb();if(!B&&!M&&!r&&s==g){if(!b){if(h&&!l){l=d;a.ed(d);f.k(i.Ad,g,n,u,h,c)}v()}var k,p=i.yc;if(b!=c)if(b==e)k=c;else if(b==j)k=e;else if(!b)k=j;else k=a.hd();f.k(p,g,b,n,j,e,c);var m=N&&(!E||F);if(b==c)(e!=c&&!(E&12)||m)&&o.Ld();else(m||b!=e)&&a.Rc(k,w)}};a.de=function(){e==c&&e==a.rb()&&a.u(j)};a.Zd=function(){A&&A.db==g&&A.zb();var b=a.rb();b<c&&f.k(i.yc,g,-b-1,n,j,e,c)};a.ed=function(a){p&&b.Db(lb,a&&p.Vb.wg?"":"hidden")};a.ec=function(b,a){if(l&&a>=h){l=k;v();o.ad();A.zb();f.k(i.ge,g,n,u,h,c)}f.k(i.Of,g,a,n,j,e,c)};a.fd=function(a){if(a&&!t){t=a;a.xb($JssorPlayer$.rf,x)}};p&&a.bc(p);h=a.Gb();a.bc(q);j=h+q.uc;e=h+q.vc;c=a.Gb()}function Kb(a,c,d){b.E(a,c);b.A(a,d)}function Zb(c,b){var a=x>0?x:fb,d=zb*b*(a&1),e=Ab*b*(a>>1&1);Kb(c,d,e)}function Pb(){qb=M;Ib=z.hd();G=w.R()}function gc(){Pb();if(B||!F&&E&12){z.cb();f.k(i.Nf)}}function ec(f){if(!B&&(F||!(E&12))&&!z.od()){var d=w.R(),b=c.ceil(G);if(f&&c.abs(H)>=a.zc){b=c.ceil(d);b+=jb}if(!(D&1))b=c.min(r-u,c.max(b,0));var e=c.abs(b-d);e=1-c.pow(1-e,5);if(!P&&qb)z.Bd(Ib);else if(d==b){tb.ce();tb.Tb()}else z.Ob(d,b,e*Vb)}}function Hb(a){!b.g(b.hc(a),"nodrag")&&b.Nb(a)}function rc(a){Yb(a,1)}function Yb(a,c){a=b.Lc(a);var l=b.hc(a);if(!O&&!b.g(l,"nodrag")&&sc()&&(!c||a.touches.length==1)){B=d;yb=k;R=j;b.a(h,c?"touchmove":"mousemove",Bb);b.V();P=0;gc();if(!qb)x=0;if(c){var g=a.touches[0];ub=g.clientX;vb=g.clientY}else{var e=b.Gc(a);ub=e.x;vb=e.y}H=0;hb=0;jb=0;f.k(i.Kf,t(G),G,a)}}function Bb(e){if(B){e=b.Lc(e);var f;if(e.type!="mousemove"){var l=e.touches[0];f={x:l.clientX,y:l.clientY}}else f=b.Gc(e);if(f){var j=f.x-ub,k=f.y-vb;if(c.floor(G)!=G)x=x||fb&O;if((j||k)&&!x){if(O==3)if(c.abs(k)>c.abs(j))x=2;else x=1;else x=O;if(ob&&x==1&&c.abs(k)-c.abs(j)>3)yb=d}if(x){var a=k,i=Ab;if(x==1){a=j;i=zb}if(!(D&1)){if(a>0){var g=i*s,h=a-g;if(h>0)a=g+c.sqrt(h)*5}if(a<0){var g=i*(r-u-s),h=-a-g;if(h>0)a=-g-c.sqrt(h)*5}}if(H-hb<-2)jb=0;else if(H-hb>2)jb=-1;hb=H;H=a;sb=G-H/i/(Y||1);if(H&&x&&!yb){b.Nb(e);if(!M)z.zf(sb);else z.sg(sb)}}}}}function bb(){qc();if(B){B=k;b.V();b.H(h,"mousemove",Bb);b.H(h,"touchmove",Bb);P=H;z.cb();var a=w.R();f.k(i.Jf,t(a),a,t(G),G);E&12&&Pb();ec(d)}}function jc(c){if(P){b.Gf(c);var a=b.hc(c);while(a&&v!==a){a.tagName=="A"&&b.Nb(c);try{a=a.parentNode}catch(d){break}}}}function Jb(a){C[s];s=t(a);tb=C[s];Tb(a);return s}function Dc(a,b){x=0;Jb(a);f.k(i.If,t(a),b)}function Tb(a,c){wb=a;b.c(S,function(b){b.Xb(t(a),a,c)})}function sc(){var b=i.Dc||0,a=X;if(ob)a&1&&(a&=1);i.Dc|=a;return O=a&~b}function qc(){if(O){i.Dc&=~X;O=0}}function Xb(){var a=b.Ab();b.T(a,V);b.F(a,"absolute");return a}function t(a){return(a%r+r)%r}function kc(b,d){if(d)if(!D){b=c.min(c.max(b+wb,0),r-u);d=k}else if(D&2){b=t(b+wb);d=k}cb(b,a.Cb,d)}function xb(){b.c(S,function(a){a.cc(a.Jb.xg<=F)})}function hc(){if(!F){F=1;xb();if(!B){E&12&&ec();E&3&&C[s].Tb()}}}function Ec(){if(F){F=0;xb();B||!(E&12)||gc()}}function ic(){V={jb:K,ib:J,i:0,j:0};b.c(T,function(a){b.T(a,V);b.F(a,"absolute");b.Db(a,"hidden");b.L(a)});b.T(gb,V)}function ab(b,a){cb(b,a,d)}function cb(g,f,j){if(Rb&&(!B&&(F||!(E&12))||a.Ac)){M=d;B=k;z.cb();if(f==l)f=Vb;var e=Cb.rb(),b=g;if(j){b=e+g;if(g>0)b=c.ceil(b);else b=c.floor(b)}if(D&2)b=t(b);if(!(D&1))b=c.max(0,c.min(b,r-u));var i=(b-e)%r;b=e+i;var h=e==b?0:f*c.abs(i);h=c.min(h,f*u*1.5);z.Ob(e,b,h||1)}}f.Uc=function(){if(!N){N=d;C[s]&&C[s].Tb()}};function W(){return b.l(y||p)}function nb(){return b.m(y||p)}f.N=W;f.Z=nb;function Eb(c,d){if(c==l)return b.l(p);if(!y){var a=b.Ab(h);b.tc(a,b.tc(p));b.Mb(a,b.Mb(p));b.Q(a,"block");b.F(a,"relative");b.A(a,0);b.E(a,0);b.Db(a,"visible");y=b.Ab(h);b.F(y,"absolute");b.A(y,0);b.E(y,0);b.l(y,b.l(p));b.m(y,b.m(p));b.Jc(y,"0 0");b.U(y,a);var g=b.yb(p);b.U(p,y);b.W(p,"backgroundImage","");b.c(g,function(c){b.U(b.g(c,"noscale")?p:a,c);b.g(c,"autocenter")&&Lb.push(c)})}Y=c/(d?b.m:b.l)(y);b.Df(y,Y);var f=d?Y*W():c,e=d?c:Y*nb();b.l(p,f);b.m(p,e);b.c(Lb,function(a){var c=b.Wb(b.g(a,"autocenter"));b.Hd(a,c)})}f.lg=Eb;n.call(f);f.X=p=b.ob(p);var a=b.J({ub:0,ae:1,Qb:1,Sb:0,Ub:k,wb:1,tb:d,Ac:d,rd:1,id:3e3,jd:1,Cb:500,Hc:e.Oc,zc:20,kd:0,qb:1,gd:0,og:1,Rb:1,md:1},fc);a.tb=a.tb&&b.tf();if(a.pg!=l)a.id=a.pg;if(a.qg!=l)a.gd=a.qg;var fb=a.Rb&3,tc=(a.Rb&4)/-4||1,mb=a.yg,I=b.J({I:q,tb:a.tb},a.ig);I.mb=I.mb||I.tg;var Fb=a.gg,Z=a.fg,eb=a.ug,Q=!a.og,y,v=b.B(p,"slides",Q),gb=b.B(p,"loading",Q)||b.Ab(h),Nb=b.B(p,"navigator",Q),dc=b.B(p,"arrowleft",Q),ac=b.B(p,"arrowright",Q),Mb=b.B(p,"thumbnavigator",Q),pc=b.l(v),nc=b.m(v),V,T=[],uc=b.yb(v);b.c(uc,function(a){if(a.tagName=="DIV"&&!b.g(a,"u"))T.push(a);else b.xc()&&b.s(a,(b.s(a)||0)+1)});var s=-1,wb,tb,r=T.length,K=a.hg||pc,J=a.dg||nc,Wb=a.kd,zb=K+Wb,Ab=J+Wb,bc=fb&1?zb:Ab,u=c.min(a.qb,r),lb,x,O,yb,S=[],Qb,Sb,Ob,cc,Cc,N,E=a.jd,lc=a.id,Vb=a.Cb,rb,ib,kb,Rb=u<r,D=Rb?a.wb:0,X,P,F=1,M,B,R,ub=0,vb=0,H,hb,jb,Cb,w,U,z,Ub=new oc,Y,Lb=[];if(r){if(a.tb)Kb=function(a,c,d){b.Pb(a,{bb:c,fb:d})};N=a.Ub;f.Jb=fc;ic();b.p(p,"jssor-slider",d);b.s(v,b.s(v)||0);b.F(v,"absolute");lb=b.lb(v,d);b.Eb(lb,v);if(mb){cc=mb.vg;rb=mb.I;ib=u==1&&r>1&&rb&&(!b.Nc()||b.Cc()>=8)}kb=ib||u>=r||!(D&1)?0:a.gd;X=(u>1||kb?fb:-1)&a.md;var Gb=v,C=[],A,L,Db=b.Rf(),ob=Db.eg,G,qb,Ib,sb;Db.sd&&b.W(Gb,Db.sd,([j,"pan-y","pan-x","none"])[X]||"");U=new zc;if(ib)A=new rb(Ub,K,J,mb,ob);b.U(lb,U.mc);b.Db(v,"hidden");L=Xb();b.W(L,"backgroundColor","#000");b.pc(L,0);b.Eb(L,Gb.firstChild,Gb);for(var db=0;db<T.length;db++){var wc=T[db],yc=new xc(wc,db);C.push(yc)}b.L(gb);Cb=new Ac;z=new mc(Cb,U);b.a(v,"click",jc,d);b.a(p,"mouseout",b.kc(hc,p));b.a(p,"mouseover",b.kc(Ec,p));if(X){b.a(v,"mousedown",Yb);b.a(v,"touchstart",rc);b.a(v,"dragstart",Hb);b.a(v,"selectstart",Hb);b.a(h,"mouseup",bb);b.a(h,"touchend",bb);b.a(h,"touchcancel",bb);b.a(g,"blur",bb)}E&=ob?10:5;if(Nb&&Fb){Qb=new Fb.I(Nb,Fb,W(),nb());S.push(Qb)}if(Z&&dc&&ac){Z.wb=D;Z.qb=u;Sb=new Z.I(dc,ac,Z,W(),nb());S.push(Sb)}if(Mb&&eb){eb.Sb=a.Sb;Ob=new eb.I(Mb,eb);S.push(Ob)}b.c(S,function(a){a.qc(r,C,gb);a.xb(o.sc,kc)});b.W(p,"visibility","visible");Eb(W());xb();a.Qb&&b.a(h,"keydown",function(b){if(b.keyCode==37)ab(-a.Qb);else b.keyCode==39&&ab(a.Qb)});var pb=a.Sb;if(!(D&1))pb=c.max(0,c.min(pb,r-u));z.Ob(pb,pb,0)}};i.Qd=21;i.Kf=22;i.Jf=23;i.sf=24;i.yf=25;i.Pd=26;i.Cd=27;i.Nf=28;i.Sf=202;i.If=203;i.Ad=206;i.ge=207;i.Of=208;i.yc=209;var o={sc:1},r=function(e,C){var f=this;n.call(f);e=b.ob(e);var s,A,z,r,l=0,a,m,i,w,x,h,g,q,p,B=[],y=[];function v(a){a!=-1&&y[a].Kd(a==l)}function t(a){f.k(o.sc,a*m)}f.X=e;f.Xb=function(a){if(a!=r){var d=l,b=c.floor(a/m);l=b;r=a;v(d);v(b)}};f.cc=function(a){b.S(e,a)};var u;f.qc=function(D){if(!u){s=c.ceil(D/m);l=0;var o=q+w,r=p+x,n=c.ceil(s/i)-1;A=q+o*(!h?n:i-1);z=p+r*(h?n:i-1);b.l(e,A);b.m(e,z);for(var f=0;f<s;f++){var C=b.Ge();b.Hf(C,f+1);var k=b.Jd(g,"numbertemplate",C,d);b.F(k,"absolute");var v=f%(n+1);b.E(k,!h?o*v:f%i*o);b.A(k,h?r*v:c.floor(f/(n+1))*r);b.U(e,k);B[f]=k;a.ac&1&&b.a(k,"click",b.G(j,t,f));a.ac&2&&b.a(k,"mouseover",b.kc(b.G(j,t,f),k));y[f]=b.nc(k)}u=d}};f.Jb=a=b.J({td:10,vd:10,pd:1,ac:1},C);g=b.B(e,"prototype");q=b.l(g);p=b.m(g);b.Fb(g,e);m=a.nd||1;i=a.jg||1;w=a.td;x=a.vd;h=a.pd-1;a.oc==k&&b.p(e,"noscale",d);a.sb&&b.p(e,"autocenter",a.sb)},s=function(a,g,h){var c=this;n.call(c);var r,q,e,f,i;b.l(a);b.m(a);function l(a){c.k(o.sc,a,d)}function p(c){b.S(a,c||!h.wb&&e==0);b.S(g,c||!h.wb&&e>=q-h.qb);r=c}c.Xb=function(b,a,c){if(c)e=a;else{e=b;p(r)}};c.cc=p;var m;c.qc=function(c){q=c;e=0;if(!m){b.a(a,"click",b.G(j,l,-i));b.a(g,"click",b.G(j,l,i));b.nc(a);b.nc(g);m=d}};c.Jb=f=b.J({nd:1},h);i=f.nd;if(f.oc==k){b.p(a,"noscale",d);b.p(g,"noscale",d)}if(f.sb){b.p(a,"autocenter",f.sb);b.p(g,"autocenter",f.sb)}};function q(e,d,c){var a=this;m.call(a,0,c);a.Pc=b.Mc;a.uc=0;a.vc=c}var t=function(n,g,l){var a=this,o,h={},i=g.mb,c=new m(0,0);m.call(a,0,0);function j(d,c){var a={};b.c(d,function(d,f){var e=h[f];if(e){if(b.Pf(d))d=j(d,c||f=="e");else if(c)if(b.Zb(d))d=o[d];a[e]=d}});return a}function k(e,c){var a=[],d=b.yb(e);b.c(d,function(d){var h=b.g(d,"u")=="caption";if(h){var e=b.g(d,"t"),g=i[b.Wb(e)]||i[e],f={X:d,Vb:g};a.push(f)}if(c<5)a=a.concat(k(d,c+1))});return a}function r(e,f,a){b.c(f,function(h){var f=b.J(d,{},j(h)),g=b.bd(f.O);delete f.O;if(f.j){f.v=f.j;g.v=g.j;delete f.j}if(f.i){f.q=f.i;g.q=g.i;delete f.i}var k={O:g,N:a.jb,Z:a.ib},i=new m(h.b,h.d,k,e,a,f);c.vb(i);a=b.be(a,f)});return a}function q(a){b.c(a,function(d){var a=d.X,f=b.l(a),e=b.m(a),c={j:b.E(a),i:b.A(a),v:0,q:0,kb:1,gb:b.s(a)||0,ab:0,K:0,M:0,z:1,n:1,bb:0,fb:0,P:0,Kb:0,Lb:0,jb:f,ib:e,f:{i:0,C:f,D:e,j:0}};c.Sc=c.j;c.Tc=c.i;r(a,d.Vb,c)})}function t(g,f,h){var e=g.b-f;if(e){var b=new m(f,e);b.vb(c,d);b.Bb(h);a.vb(b)}a.Ff(g.d);return e}function s(f){var d=c.dc(),e=0;b.c(f,function(c,f){c=b.J({d:l},c);t(c,d,e);d=c.b;e+=c.d;if(!f||c.t==2){a.uc=d;a.vc=d+c.d}})}a.Pc=function(){a.u(-1,d)};o=[f.ke,f.le,f.me,f.ne,f.oe,f.pe,f.qe,f.re,f.se,f.ue,f.He,f.ve,f.Qc,f.we,f.xe,f.ye,f.ze,f.Ae,f.Be,f.Ce,f.De,f.Ee,f.Fe,f.nf,f.Ie,f.mf,f.pf,f.of,f.Uf,f.Vf,f.Wf,f.Xf,f.Yf,f.Zf,f.ag,f.bg,f.cg];var u={i:"y",j:"x",D:"m",C:"t",ab:"r",K:"rX",M:"rY",z:"sX",n:"sY",bb:"tX",fb:"tY",P:"tZ",Kb:"kX",Lb:"kY",kb:"o",O:"e",gb:"i",f:"c"};b.c(u,function(b,a){h[b]=a});q(k(n,1));c.u(-1);var p=g.Bg||[],e=[].concat(p[b.Wb(b.g(n,"b"))]||[]);e.push({b:c.Gb(),d:e.length?0:l});s(e);a.u(-1)};jssor_1_slider_init=function(){var h=[[{b:-1,d:1,o:-1},{b:0,d:1e3,o:1}],[{b:1900,d:2e3,x:-379,e:{x:7}}],[{b:1900,d:2e3,x:-379,e:{x:7}}],[{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:1e3,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:1900,d:1600,x:-200,o:-1,e:{x:16}}]],j={Ub:d,Cb:800,Hc:f.Qc,ig:{I:t,mb:h},fg:{I:s},gg:{I:r}},e=new i("jssor_1",j);function a(){var b=e.X.parentNode.clientWidth;if(b){b=c.min(b,1920);e.lg(b)}else g.setTimeout(a,30)}a();b.a(g,"load",a);b.a(g,"resize",a);b.a(g,"orientationchange",a)}})(window,document,Math,null,true,false)
        </script>
        <style>.jssorb05{position:absolute}.jssorb05 div,.jssorb05 div:hover,.jssorb05 .av{position:absolute;width:16px;height:16px;background:url('img/b05.png') no-repeat;overflow:hidden;cursor:pointer}.jssorb05 div{background-position:-7px -7px}.jssorb05 div:hover,.jssorb05 .av:hover{background-position:-37px -7px}.jssorb05 .av{background-position:-67px -7px}.jssorb05 .dn,.jssorb05 .dn:hover{background-position:-97px -7px}.jssora22l,.jssora22r{display:block;position:absolute;width:40px;height:58px;cursor:pointer;background:url('img/a22.png') center center no-repeat;overflow:hidden}.jssora22l{background-position:-10px -31px}.jssora22r{background-position:-70px -31px}.jssora22l:hover{background-position:-130px -31px}.jssora22r:hover{background-position:-190px -31px}.jssora22l.jssora22ldn{background-position:-250px -31px}.jssora22r.jssora22rdn{background-position:-310px -31px}.jssora22l.jssora22lds{background-position:-10px -31px;opacity:.3;pointer-events:none}.jssora22r.jssora22rds{background-position:-70px -31px;opacity:.3;pointer-events:none}
        </style>
        <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
        <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
        <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
        <div data-p="225.00">
        <img data-u="image" src="assets/img/makanan.png" />
        <div style="position: absolute; top: 30px; left: 30px; width: 480px; height: 120px; font-size: 50px; color: #a11c1c; line-height: 60px;"></div>
        <div style="position: absolute; top: 300px; left: 30px; width: 480px; height: 120px; font-size: 30px; color: #db1c1c; line-height: 38px;"></div>
        <div data-u="" data-t="">
        <img data-u="" data-t="3" style="position: absolute; top: 740px; left: 1600px; width: 257px; height: 300px;"/>
        </div>
        </div>
        <a data-u="any" href="http://www.jssor.com" style="display:none"></a>
        <div data-p="225.00" style="display: none;">
        <img data-u="image" src="assets/img/minuman.png" />
        </div>
        <div data-p="225.00" data-po="80% 55%" style="display: none;">
        <img data-u="image" src="assets/img/kerajinan.png" />
        </div>
        </div>
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
        <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:8px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:8px;width:40px;height:58px;" data-autocenter="2"></span>
        </div>
        <script type="text/javascript">jssor_1_slider_init();</script>
    </div>
  </section><!-- End Home -->

  <!-- Start Small Banner  -->
  <center>
	<section class="small-banner section">
		<div class="container-fluid">
			<div class="row">
				<!-- Single Banner  -->
				<div class="col-lg-4 col-md-6 col-12">
					<div class="single-banner">
						<img src="assets/img/makanan.png" alt="#">
						<div class="content">
							<p></p>
							<h3>Makanan</h3>
							<a href="#makanan">Click Now</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-4 col-md-6 col-12">
					<div class="single-banner">
						<img src="assets/img/minuman.png" alt="#">
						<div class="content">
							<p></p>
							<h3>Minuman</h3>
							<a href="#minuman">Click Now</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-4 col-12">
					<div class="single-banner tab-height">
						<img src="assets/img/kerajinan.png" alt="#">
						<div class="content">
							<p></p>
							<h3>Kerajinan</h3>
							<a href="#kerajinan">Click Now</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
			</div>
		</div>
	</section>
  </center>
	<!-- End Small Banner -->
	<br>

  <main id="main">

    <!-- ======= Kategori Section ======= -->
    <section id="kategori" class="about">
      <div class="container">
        <div class="section-title">
          <span>Kategori</span>
          <h2>Kategori</h2>
          <p></p>
        </div>
      </div>
    </section><!-- End Kategori Section -->

    <!-- ======= Makanan Section ======= -->
    <section id="makanan" class="portfolio">
    <div class="container">
      <div class="section-title">
        <h2>Makanan</h2>
        <p></p>
      </div> 
      <div class="row">  
      <?php
        $makanan=query("SELECT * FROM product WHERE ctg_product=1");
        foreach($makanan as $row):
        ?>
        <div class="col-4 box">
            <div class="image">
                <img src="assets/img/<?=$row['foto_pdt']?>"  class="cover2" alt="">
            </div>
            <div class="content">
                <h3><?=$row['name_pdt']?></h3>
                <div class="price">Rp <?=$row['price_pdt']?> </div>
                <a class="btn btn-primary" href="produkdetail.php?id_pdt=<?=$row['id_pdt']?>">Lihat</a>
            </div>
          
        </div>
        <?php
        endforeach;
        ?>
        </div>
    </div>
    </section><!-- End Makanan Section -->

    <!-- ======= Minuman Section ======= -->
    <section id="minuman" class="portfolio">
    <div class="container">
    <div class="section-title">
        <h2>Minuman</h2>
        <p></p>
      </div> 
      <div class="row">  
      <?php
        $minuman=query("SELECT * FROM product WHERE ctg_product=2");
        foreach($minuman as $row):
        ?>
        <div class="col-4 box">
            <div class="image">
                <img src="assets/img/<?=$row['foto_pdt']?>"  class="cover2" alt="">
            </div>
            <div class="content">
                <h3><?=$row['name_pdt']?></h3>
                <div class="price">Rp <?=$row['price_pdt']?> </div>
                <a class="btn btn-primary" href="produkdetail.php?id_pdt=<?=$row['id_pdt']?>">Lihat</a>
            </div>
        </div>
        <?php
        endforeach;
        ?>
        </div>
    </div>
    </section><!-- End Minuman Section -->

    <!-- ======= Kerajinan Section ======= -->
    <section id="kerajinan" class="portfolio">
    <div class="container">
    <div class="section-title">
        <h2>Kerajinan</h2>
        <p></p>
      </div> 
      <div class="row">  
      <?php
        $kerajinan=query("SELECT * FROM product WHERE ctg_product=3");
        foreach($kerajinan as $row):
        ?>
        <div class="col-4 box">
            <div class="image">
                <img src="assets/img/<?=$row['foto_pdt']?>"  class="cover2" alt="">
            </div>
            <div class="content">
                <h3><?=$row['name_pdt']?></h3>
                <div class="price">Rp <?=$row['price_pdt']?> </div>
                <a class="btn btn-primary" href="produkdetail.php?id_pdt=<?=$row['id_pdt']?>">Lihat</a>
            </div>
          
        </div>
        <?php
        endforeach;
        ?>
        </div>
    </div>
    </section><!-- End Kerajinan Section -->

    <!-- ======= Promo Section ======= -->
    <section id="promo" class="portfolio">
    <div class="container">
      <div class="section-title">
          <span>Promo</span>
          <h2>Promo</h2>
          <p></p>
      </div>
      <div class="row">
      <?php
        $promo=query("SELECT * FROM product WHERE promo_pdt=1");
        foreach($promo as $row):
        ?>
        <div class="col-4 box">
            <div class="image">
            <img src="assets/img/<?=$row['foto_pdt']?>" class="cover3" alt="">
            </div>
            <div class="content">
                <span style="font-size:large;"><?=$row['name_pdt']?></span>
                <h3>Diskon : <?=$row['disc_pdt']?>%</h3>
                <a class="btn btn-primary" href="produkdetail.php?id_pdt=<?=$row['id_pdt']?>">Lihat</a>
            </div>
        </div>
        <?php
        endforeach;
        ?>
      </div>
    </div>
    </section><!-- End Promo Section -->

    <!-- ======= Berita Section ======= -->
    <section id="berita" class="services">
      <div class="container">

        <div class="section-title">
          <span>Berita</span>
          <h2>Berita</h2>
          <p></p>
        </div>

        <div class="row gy-2">

<div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
    <?php
    $berita=query("SELECT * FROM berita WHERE id_berita=1");
    foreach($berita as $row):
    ?>
<div class="content">
  <div class="box">
    <h4 class="title"><a href="https://www.bing.com/ck/a?!&&p=5176ea93fceb008bJmltdHM9MTY3Mjg3NjgwMCZpZ3VpZD0yMDQwY2UwOS1iMjhjLTZlY2QtMGIwNi1kYzJkYjNkYTZmNjImaW5zaWQ9NTI2OA&ptn=3&hsh=3&fclid=2040ce09-b28c-6ecd-0b06-dc2db3da6f62&psq=desa+karangpakel&u=a1aHR0cHM6Ly9rYW11c2xlbmdrYXAuY29tL3RlbXBhdC9kZXRhaWwvamF3YS10ZW5nYWgva2xhdGVuL3RydWN1ay9rYXJhbmdwYWtlbA&ntb=1"><?=$row['name_berita']?></a></h4>
    <p class="description"><?=$row['isi_berita']?></p>
  </div>
</div>
    <?php
  endforeach;
  ?>
</div>

<div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
    <?php
        $berita=query("SELECT * FROM berita WHERE id_berita=2");
        foreach($berita as $row):
        ?>
<div class="content">
  <div class="box">
    <h4 class="title"><a href="https://www.bing.com/ck/a?!&&p=82afbbaa37f45598JmltdHM9MTY3Mjg3NjgwMCZpZ3VpZD0yMDQwY2UwOS1iMjhjLTZlY2QtMGIwNi1kYzJkYjNkYTZmNjImaW5zaWQ9NTIzMQ&ptn=3&hsh=3&fclid=2040ce09-b28c-6ecd-0b06-dc2db3da6f62&psq=desa+karangpakel&u=a1aHR0cHM6Ly93d3cuc29sb3Bvcy5jb20vZGVzYS1rYXJhbmdwYWtlbC1rbGF0ZW4tZGlzZWJ1dC1rYW1wdW5nLW9udGhlbC1iZWdpbmktY2VyaXRhbnlhLTgwNDE3NA&ntb=1"><?=$row['name_berita']?></a></h4>
    <p class="description"><?=$row['isi_berita']?></p>
  </div>
</div>
    <?php
  endforeach;
  ?>
</div>

<div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
    <?php
        $berita=query("SELECT * FROM berita WHERE id_berita=3");
        foreach($berita as $row):
        ?>
<div class="content">
  <div class="box">
    <h4 class="title"><a href="https://www.medcom.id/ekonomi/bisnis/aNrxrZgk-desa-jadi-beranda-terdepan-pembangunan-nasional"><?=$row['name_berita']?></a></h4>
    <p class="description"><?=$row['isi_berita']?></p>
  </div>
</div>
    <?php
  endforeach;
  ?>
</div>

</div>


      </div>
    </section><!-- End Berita Section -->

    <!-- ======= Video Section ======= -->
    <section id="video" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <span>Video</span>
          <h2>Video</h2>
          <p></p>
        </div>

        
        <div class="row d-flex">
        <?php
        $video=query("SELECT * FROM video ");
        foreach($video as $row):
          ?>
          <div class="col d-flex ms-4 me-4">
        <?=$row['link_video']?>
        <?php
        endforeach;
        ?>
        </div>
        </div>

      </div>
    </section><!-- End Video Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <span>Contact</span>
          <h2>Contact</h2>
          <p></p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>Jl. Kyai Abdul Wahab No. 18, Ngampel, Kendal</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>karangpakelgmail.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+62 831 6445 0789</p>
            </div>
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <center>
          <div class="col-lg-6">
            <form action="" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit" name="kirim">Send Message</button></div>
            </form>
            <?php
            if(isset($_POST['kirim'])){
              $name = $_POST['name'];
              $email = $_POST['email'];
              $subject = $_POST['subject'];
              $message = $_POST['message'];
              mysqli_query($conn, "INSERT INTO kontak (name_kt,email_kt,subject_kt,message_kt) VALUES('$name','$email','$subject','$message')");
            }
            ?>
          </div>
          </center>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>E-Karangpakel</h3>
              <p>
                Jl. Kyai Abdul Wahab No. 18, Ngampel, Kendal<br>
                <strong>Phone:</strong> +62 831 6445 0789<br>
                <strong>Email:</strong> karangpakel@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Deskripsi</h4>
            <p>E-Karangpakel merupakan web penjualan online UMKM Desa Karangpakel, Truck, Klaten. Shop ini menjual berbagai macam makanan, minuman, dan kerajinan hasil produksi sendiri warga Desa Karangpakel.</p>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; COPYRIGHT 2022 || A11.2022.14506 || ERNA AMALIA WIDHIYANTI
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/day-multipurpose-html-template-for-free/ -->
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>