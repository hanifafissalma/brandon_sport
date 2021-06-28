@-webkit-keyframes indicator {
    0% {
        opacity: 0
    }

    50% {
        opacity: 1
    }

    100% {
        opacity: 0
    }
}

@-moz-keyframes indicator {
    0% {
        opacity: 0
    }

    50% {
        opacity: 1
    }

    100% {
        opacity: 0
    }
}

@keyframes indicator {
    0% {
        opacity: 0
    }

    50% {
        opacity: 1
    }

    100% {
        opacity: 0
    }
}

#notif.poptamv .wrap .content {
    overflow: hidden;
}
.notifComRat .more {
    display:block;
    padding: 15px 0;
    text-align:center;
    background:#fff;
    border-top:1px solid rgba(0,0,0,.06);
}
.notifComRat { list-style: none; font-size: 90; color: #485358;background:#F7F9FB; display:block; max-height:70vh; overflow-y:auto;}
.notifComRat li { display:block;overflow: hidden; border-top: 1px solid rgba(0,0,0,.06); padding:20px; transition:.4s; display:none; }
.notifComRat li .notifComRat_grid {
    display: grid; grid-template-columns: 48px 1fr;grid-gap: 20px;
}
.notifComRat li:first-child { border: 0 none; }
.notifComRat li .notifComRat_wrap {
    display: block;
}
.notifComRat li .notifComRat_wrap header {
    display: block;
    font-size: 90%;
    line-height: 1.6;
}
.notifComRat li .notifComRat_wrap header a {
    font-weight: 500;
    color: <?php echo $dominan_color; ?>
}
.notifComRat li p { background: #fff; color: #6a6a6a; padding: 10px 15px;margin-top: 10px; border-radius: 4px;box-shadow: 0 1px 0 rgba(0, 0, 0, .06);font-size: 95%;}
.notifComRat li small {
    opacity: .8;
    display: block;
    font-size: 80%;
    margin-top: 10px;
}
.notifComRat li:nth-child(even) {
    background:#fff;
}
.notifComRat li:nth-child(even) p {
    box-shadow: inset 0 0 0 1px rgba(0, 0, 0, .06), 0 1px 0 rgba(0, 0, 0, .06);
}
.notifComRat img.ava { border-radius: 48px; 
    box-shadow: 0 0 0 3px rgba(0,0,0,.04);
    display: block;
    overflow: hidden;
width: 48px;
height: 48px;} 
.notifComRat a { display: inline-block; }
.moreProduct {
    display: block;
    text-align: center;
}
.moreProduct a {
    letter-spacing: 1px;
    margin: 40px 0 20px;
    display:block;
    border: 1px solid rgba(0,0,0,.06);
    border-radius: 2px;
    color: #fff;
    background: <?php echo $dominan_color; ?>;
    padding: 10px 15px;
}
.moreProduct a:hover {
    color: #fff;
    box-shadow: inset 0 -3px 0 0 rgba(0,0,0,.06);
}
.moreProduct a:active {
    box-shadow: none;
}
hr {
    display:block;
    padding:0;
    margin:20px 0;
    border:none;
    border-top:1px solid rgba(0,0,0,.06);
}

#ikuti .ava {
    display: block;
    height: 100px;
    width: 100px;
    border-radius: 100px;
    margin: auto;
    margin-top: -50px;
    background-size: 50% 50%;
    background-position: center center;
    background-repeat: no-repeat;
    text-indent: -99999px;
    background-color: #fff;
    box-shadow: 0 0 0 5px rgba(0,0,0,.1);
}
#ikuti a.youtube i {
    color: #ff0000;
}

#ikuti a.youtube {
    color: #969696;
}

#ikuti a.instagram {
    color: #BA4893;
}

#ikuti a.facebook {
    color: #4267B2;
}

#ikuti a.twitter {
    color: #00ABF0;
}
.indicator,
.post-edit-link {
    -webkit-animation: indicator 1s ease infinite !important;
    -moz-animation: indicator 1s ease infinite !important;
    animation: indicator 1s ease infinite !important
}
.post-edit-link {
}
.post-edit-link .abs {
    position:absolute;
    z-index:99999;
    bottom:0;
    right:0;
    display:inline-block;
    background:#fff;
    color:<?php echo $dominan_color; ?>;
    border-left: 1px solid rgba(0,0,0,.1);
    width:40px;
    height:40px;
    line-height:45px;
    border-radius: 40px 0 0 0;
    font-size:120%;
    text-align:right;
    padding-right:8px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, .1);
}
.imgArea .post-edit-link {
    position:absolute;
    top:0;
    right:0;
    z-index:100;
}
.imgArea .post-edit-link .abs {
    position:absolute;
    z-index:99999;
    top:0;
    right:0;
    display:inline-block;
    background:#fff;
    color:<?php echo $dominan_color; ?>;
    border-left: 1px solid rgba(0,0,0,.1);
    width:40px;
    height:40px;
    line-height:35px;
    border-radius: 0 0 0 40px;
    font-size:120%;
    text-align:right;
    padding-right:8px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, .1);
}
.autocomplete-suggestions {
    position:absolute;
    z-index: 999999!important;
    border: 1px solid #bbb;
    background: #FFF;
    overflow: auto;
    font-family: 'Montserrat', sans-serif;
    font-size: 90%;
    color: #666;
}
.autocomplete-suggestion {
    padding: 6px 8px;
    white-space: nowrap;
    overflow: hidden;
    cursor: pointer;
}
.autocomplete-selected { background: #f3f3f3 }
.autocomplete-suggestions strong {
    font-weight: 700;
    color: <?php echo $dominan_color; ?>;
}
.autocomplete-group { padding: 2px 5px }
.autocomplete-group strong {
    display: block;
    border-bottom: 1px solid #000;
}
@-webkit-keyframes loadingCircle {
  0% { transform:scale(.5)}
  50% { transform:scale(1)}
  100% { transform:scale(.5)}
}

@keyframes loadingCircle {
  0% { transform:scale(.5)}
  50% { transform:scale(1)}
  100% { transform:scale(.5)}
}
.gallery {
    display:grid;
    grid-template-columns: repeat(4, 1fr);
    grid-gap: 20px;
}
.gallery a {
    display:block;
}
#page-loader {
    display:none;
    position:fixed!important;
    position:relative;
    z-index: 999;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:#F7F9FB;
    opacity:.95;
    box-shadow:0 100px 0 0 #F7F9FB;
}
#page-loader:before {
    content:'';
    position:absolute;
    top:calc(50% - 20px);
    left:calc(50% - 20px);
    display:block;
    width:40px;
    height:40px;
    border-radius:40px;
    background-color: <?php echo $dominan_color; ?>;
    -webkit-animation: loadingCircle 1s infinite; /* Safari 4.0 - 8.0 */
    animation: loadingCircle 1s infinite;
}
.pagination {
    display:block;
    text-align:center;
    padding: 20px 0;
}
.pagination > * {
    display: inline-block;
    padding:5px 15px;
    text-align:center;
    border-radius:2px;
}
.pagination span.current {
    background-color: <?php echo $dominan_color; ?>;
    color: #ffffff;
}
.ribbon {
    direction: ltr;
    display: block;
    width: 85px;
    height: 88px;
    overflow: hidden;
    position: absolute;
    z-index: 5;
    top: 6px;
    left: 10px;
    transform: rotate(-90deg) scale(1.2);
    cursor: default;
}

.ribbon .text {
    text-transform: uppercase;
    display: block;
    font-size: 55%;
    font-weight: 600;
    color: #fff;
    letter-spacing: 2px;
    text-align: center;
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    position: relative;
    padding: 7px 0;
    left: -5px;
    top: 15px;
    width: 120px;
    background: <?php echo $dominan_color; ?>;
    color: #fff;
    -webkit-box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.3);
    -moz-box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.3);
}

.ribbon .text:before,
.ribbon .text:after {
    content: "";
    border-top: 3px solid rgba(0, 0, 0, .4);
    border-left: 3px solid transparent;
    border-right: 3px solid transparent;
    position: absolute;
    bottom: -3px;
}

.ribbon .text:before {
    left: 0;
}

.ribbon .text:after {
    right: 0;
}

/* OWL */
.owl-dots,
.owl-nav {
    text-align: center;
    -webkit-tap-highlight-color: transparent
}

.owl-nav [class*=owl-] {
    color: #FFF;
    font-size: 14px;
    margin: 5px;
    padding: 4px 7px;
    background: rgba(0, 0, 0, .2);
    display: inline-block;
    cursor: pointer;
    border-radius: 3px
}

.owl-nav [class*=owl-]:hover {
    background: #fff;
    box-shadow: 0 0 0 4px rgba(0, 0, 0, .1);
    color: #FFF;
    text-decoration: none
}

.owl-nav .disabled {
    opacity: .5;
    cursor: default
}

.owl-nav.disabled+.owl-dots {
    margin-top: 10px
}

.owl-dots .owl-dot {
    display: inline-block;
    zoom: 1
}

.owl-dots .owl-dot span {
    width: 10px;
    height: 10px;
    margin: 5px 7px;
    background: rgba(0, 0, 0, .2);
    display: block;
    -webkit-backface-visibility: visible;
    transition: opacity .2s ease;
    border-radius: 30px
}

.owl-dots .owl-dot.active span,
.owl-dots .owl-dot:hover span {
    background: #fff;
    box-shadow: 0 0 0 4px rgba(0, 0, 0, .1);
}

/* OWL */

.owl-carousel {
    display: block;
    overflow: hidden;
    border-radius: 2px;
    position: relative;
}

.owl-carousel .owl-dots {
    display: block;
    position: absolute;
    z-index: 999;
    left: 50%;
    bottom: 20px;
    transform:translate(-50%,0);
    text-align: center;
}

.imgProducts.owl-carousel {
    border-radius:0;
}
.imgProducts.owl-carousel .owl-dots {
    bottom: 15px;
    right: 15px;
    text-align: center;
    transform:translate(0,0);
    text-align:right;
}

.owl-carousel .owl-nav {
    display: block;
    visibility: hidden;
    opacity: 0;
    transition: .1s;
}

.owl-carousel:hover .owl-nav {
    visibility: visible;
    opacity: 1;
}

.owl-carousel .owl-nav button {
    box-shadow: none;
    position: absolute;
    z-index: 10000;
    display: block;
    top: 50%;
    width: 40px;
    height: 80px;
    line-height: 80px;
    text-align: center;
    background: rgba(0, 0, 0, .1) !important;
    color: #fff !important;
    font-size: 110%;
    transform: translate(0, -50%);
    vertical-align: middle;
    transition: .1s;
    margin: 0 !important;
    box-shadow: none !important;
}

.owl-carousel .owl-nav button:hover {
    background: rgba(0, 0, 0, .2) !important;
}

.owl-carousel .owl-nav button:active {
    background: rgba(0, 0, 0, .3) !important;
}

.owl-carousel .owl-nav button.disabled {
    display: none;
}

.owl-carousel .owl-nav button.owl-prev {
    left: 0;
    border-radius: 0 4px 4px 0;
}

.owl-carousel .owl-nav button.owl-next {
    right: 0;
    border-radius: 4px 0 0 4px;
}

* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    outline: none;
    text-decoration: none;
    font-family: 'Montserrat', sans-serif;
    -webkit-tap-highlight-color: transparent;
    word-wrap: break-word;

    /*-moz-user-select: none;
    -webkit-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-user-drag: none;
    user-drag: none;
    -webkit-touch-callout: none;*/
}

select::-ms-expand {
    display: none;
}
select {
    -webkit-appearance: none;
    -moz-appearance: none;
    -webkit-appearance: none;
    appearance: none;
}

::selection {
    background: <?php echo $dominan_color; ?>;
    color: #fff;
    text-shadow: none
}

::-webkit-selection {
    background: <?php echo $dominan_color; ?>;
    color: #fff;
    text-shadow: none
}

::-moz-selection {
    background: <?php echo $dominan_color; ?>;
    color: #fff;
    text-shadow: none
}

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

input[type=number] {
    -moz-appearance: textfield;
    /* Firefox */
}

body {
    background-color: #f7f9fb;
    font-size: 16px;
    line-height: 1.4;
    color: #666;
    /*padding-top:70px;*/
}
body.hideScroll {
    overflow:hidden;
}

@media only screen and (max-width: 768px) {
    body {
        /*padding-top:66px;*/
    }
}

b,
strong {
    font-weight: 500!important;
}

.hide {
    position: fixed;
    top: -9999px;
    left: -9999px;
    z-index: -9999;
    opacity: 0;
    visibility: hidden;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    font-weight: 400;
    padding: 0;
}

i.icon {
    display: inline-block;
    vertical-align: middle;
    font-size: 150%;
    padding: 0 5px;
    font-style: normal;
    line-height: 1;
}
i.icon:before {
    font-display: swap;
}

a {
    color: #999;
    font-weight: 400;
}

a:hover {
    color: <?php echo $dominan_color; ?>;
}

img {
    display: block !important;
    max-width: 100%;
    height: auto;
    text-indent:-9999px;
}
/* lazyload */
img[data-src] {
  opacity: 0!important;
}

.wrapper {
    display: block;
    width: 1268px;
    max-width: calc(100% - 40px);
    margin: auto;
}
@media only screen and (max-width: 1468px) {
    .wrapper {
        display: block;
        width: 1168px;
        margin: auto;
    }
}
#header {
    position: fixed!important;
    position: relative;
    z-index: 9999;
    top: 0;
    left: 0;
    width: 100%;
    display: block;
    background-image: linear-gradient(to right, #800000 , #000);
    color: #fff;
    transition:.2s ease-out;
    visibility: visible;
    opacity: 1;
}

#header:before {
    content: '';
    display: block;
    position: absolute;
    z-index: -1;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100vh;
    box-shadow: 0 100vh 0 rgba(0, 0, 0, .2);
    opacity: 0;
    visibility: hidden;
    transition: .4s;
}

#header:hover:before {
    opacity: 1;
    visibility: visible;
}

#header .grid {
    display: grid;
    grid-template-columns: auto 1fr 0.3fr auto auto;
}

#header .grid .item {
    display: flex;
    padding: 15px 20px;
}

@media only screen and (max-width: 768px) {
    #header:before {
        display: none;
    }

    #header .wrapper {
        max-width: 100%;
    }

    #header .grid {
        display: grid;
        grid-template-columns: auto 1fr auto;
    }

    #header .grid .item {
        padding: 20px 20px;
    }

    #header .grid .item.logo a {
        display: block;
        margin-left: auto !important;
    }
}

#header .grid .item.logo img {
    max-height: 30px;
}

#header .grid .item.category {
    position: relative;
}

#header .grid .item.category>a {
    color: #fff;
    display: block;
}

#header .grid .item.category nav {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
}

#header .grid .item.category:hover nav {
    display: block;
}

#header .grid .item.category nav ul {
    display: block;
    position: relative;
    background: #fff;
    width: 200px;
    min-height: 40vh;
}

#header .grid .item.category nav ul li {
    display: block;
}

#header .grid .item.category nav ul li a {
    display: block;
    padding: 12px 20px;
    border-top: 1px solid #f6f6f6;
    font-size: 95%;
    transition: .1s;
}

#header .grid .item.category nav ul li.menu-item-has-children>a:before {
    content: '\f3d1';
    font-family: 'Montserrat', sans-serif;
    font-display: swap;
    display: inline-block;
    vertical-align: middle;
    float: right;
    color: #969696;
    font-size: 90%;
    color: <?php echo $dominan_color; ?>;
}

#header .grid .item.category nav ul li.menu-item-has-children:hover>a {
    background: rgba(0, 0, 0, .02);
    color: <?php echo $dominan_color; ?>;
}

#header .grid .item.category nav ul li ul.sub-menu {
    display: block;
    position: absolute;
    top: 0;
    left: calc(100% - 20px);
    min-height: 100%;
    box-shadow: inset 4px 0 4px rgba(0, 0, 0, .06);
    transition: .4s;
    visibility: hidden;
    opacity: 0;
}

#header .grid .item.category nav ul li:hover>ul.sub-menu {
    left: 100%;
    visibility: visible;
    opacity: 1;
}

#header .grid .item.search {
    position: relative;
}

#header .grid .item.search>div {
    width: 100%;
}

#header .grid .item.search form {
    overflow: hidden;
    border-radius: 2px;
    position: relative;
}

#header .grid .item.search form:after {
    content: '';
    display: block;
    clear: both;
}

#header .grid .item.search form span,
#header .grid .item.search form input,
#header .grid .item.search form button {
    display: block;
    height: 40px;
    line-height: 40px;
    border: none;
    outline: none;
}

#header .grid .item.search form span {
    position: absolute !important;
    position: static;
    top: 0;
    left: 0;
    color: <?php echo $dominan_color; ?>;
    width: 60px;
    text-align: center;
    cursor: pointer;
    transition: .2s;
    transform: scale(0);
    visibility: hidden;
    opacity: 0;
}

#header .grid .item.search.active form span {
    transform: scale(1);
    visibility: visible;
    opacity: 1;
}

#header .grid .item.search form input {
    background: #fff;
    border-radius: 2px 0 0 2px;
    font-size: 95%;
    color: #666;
    padding-left: 20px;
    padding-right: 20px;
    transition: .2s;
    float: left;
    width: calc(100% - 80px);
}

#header .grid .item.search form input::placeholder {
    color: #969696;
    opacity: 1;
    /* Firefox */
}

#header .grid .item.search form input:-ms-input-placeholder {
    /* Internet Explorer 10-11 */
    color: #969696;
}

#header .grid .item.search form input::-ms-input-placeholder {
    /* Microsoft Edge */
    color: #969696;
}

#header .grid .item.search.active form input {
    text-indent: 40px;
}

#header .grid .item.search form button {
    cursor: pointer;
    background: <?php echo $dominan_color; ?>;
    color: #fff;
    border-radius: 0 5px 5px 0;
    box-shadow: inset 0 0 0 2px #fff, inset 0 -5px 0 rgba(0, 0, 0, .1);
    font-size: 100%;
    padding-left: 20px;
    padding-right: 20px;
    float: right;
    width: 80px;
    text-align: center;
}

#header .grid .item.search form button i {
    padding: 0;
}

#header .grid .item.search form button:active {
    box-shadow: inset 0 0 0 2px #fff;
}

#header .grid .item.search .inSearch {
    position: absolute;
    left: 20px;
    right: 20px;
    background: #fff;
    color: #969696;
    visibility: hidden;
    opacity: 0;
    top: 50%;
    transition: .1s;
    font-size: 95%;
    font-weight: 300;
}

#header .grid .item.search.active .inSearch {
    visibility: visible;
    opacity: 1;
    top: 100%;
}

#header .grid .item.search .inSearch {
    display: block;
    overflow: hidden;
    border-radius: 0 0 3px 3px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, .06);
}

#header .grid .item.search .inSearch .tabSearch h4.titleSearch {
    font-size: 90%;
    color: #666;
    display: grid;
    grid-template-columns: 1.2fr 1fr;
    box-shadow: 0 1px 5px rgba(0, 0, 0, .08);
}

#header .grid .item.search .inSearch .tabSearch h4.titleSearch a {
    display: block;
    padding: 10px 20px;
    border-bottom: 3px solid #e6e6e6;
    text-align: center;
    transition: .1s;
}

#header .grid .item.search .inSearch .tabSearch h4.titleSearch a.active {
    border-bottom: 3px solid <?php echo $dominan_color; ?>;
    color: <?php echo $dominan_color; ?>;
}

#header .grid .item.search .inSearch .tabSearch .itemTab {
    display: none;
}

#header .grid .item.search .inSearch .tabSearch .itemTab:first-of-type {
    display: block;
}

#header .grid .item.search .inSearch .itemTab ul>small {
    background: #fafafa;
    display: block;
    padding: 10px 20px;
    border-left: 4px solid <?php echo $dominan_color; ?>;
    color: <?php echo $dominan_color; ?>;
    letter-spacing: 1px;

}
#header .grid .item.search .inSearch .itemTab ul>small>a {
    float:right;
    display: inline-block;
    vertical-align: middle;
}
#header .grid .item.search .inSearch .itemTab>ul {
    display: block;
    overflow: hidden;
    overflow-y: auto;
    max-height: 60vh;
    letter-spacing: 1px;
}

#header .grid .item.search .inSearch .itemTab ul,
#header .grid .item.search .inSearch .itemTab ul li,
#header .grid .item.search .inSearch .itemTab ul li a {
    position: relative;
    display: block;
    width: 100%;
}

#header .grid .item.search .inSearch .itemTab ul li {
    border-top: 1px solid rgba(0, 0, 0, .06);
}

#header .grid .item.search .inSearch .itemTab>ul>li:first-child {
    border-top: none;
}

#header .grid .item.search .inSearch .itemTab>ul>li>a {
    font-weight: 400;
}

#header .grid .item.search .inSearch .itemTab ul li i {
    display: none;
}

#header .grid .item.search .inSearch .itemTab ul li a.current {
    color: <?php echo $dominan_color; ?>;
    font-weight: 500;
}
#header .grid .item.search .inSearch .itemTab ul li > small {
    float: right;
    display: inline-block;
    background: <?php echo $dominan_color; ?>;
    color: #fff;
    padding: 2px 10px;
    margin: 10px 10px 0 10px;
    border-radius: 2px;
}


#header .grid .item.search .inSearch .itemTab ul.children>li {
    padding-left: 20px;
}

#header .grid .item.search .inSearch .itemTab ul li a,
#header .grid .item.search .inSearch .itemTab ul li>i {
    padding: 10px 20px;
}

#header .grid .item.search .inSearch .itemTab ul li>i {
    position: absolute;
    z-index: 1;
    top: 0;
    right: 0;
}

#header .grid .item.btnCart {
    text-align: center;
    position: relative;
}

#header .grid .item>* {
    display: block;
    margin: auto;
}

#header .grid .item.logo a {
    margin-left: 0;
    font-size: 150%;
    color: #fff;
    display: block;
}

#header .grid .item.btnSearch {
    display: none;
}

#header .grid .item.btnSearch a {
    display: block;
    color: #fff;
    position: relative;
}

#header .grid .item.btnSearch a i {
    padding: 0;
    font-size: 160%;
    position: relative;
}
.nav-header a{
	color:#fff;
}

@media only screen and (max-width: 768px) {
	.nav-header {
		display:none !important; 
	}
    #header:hover:before {
        display: none!important;
    }
    #header .grid .item.search {
        position: absolute;
        z-index: 1;
        top: 0;
        left: 0;
        padding: 10px;
        width: 100%;
        transition: .2s;
        background: <?php echo $dominan_color;
        ?>;
        visibility: hidden;
        opacity: 0;
    }

    #header .grid .item.search.active {
        visibility: visible;
        opacity: 1;
    }

    #header .grid .item.search .inSearch {
        left: 0;
        right: 0;
    }

    #header .grid .item.btnSearch {
        display: flex;
        padding-left: 30px;
    }

    #header .grid .item.search .inSearch .itemTab>* {
        display: block;
        overflow: hidden;
        overflow-y: auto;
        max-height: calc(100vh - 148px)!important;
        height: calc(100vh - 148px)!important;
        border-bottom: 1px solid #ddd;
    }

    #header .grid .item.btnCart {
        padding-right: 30px;
    }

    #header .grid .item.btnCart #cartHeader {
        display: none !important;
    }

}

#header .grid .item.btnCart a.openCart {
    color: #fff;
    position: relative;
}

#header .grid .item.btnCart a.openCart i {
    padding: 0;
    font-size: 160%;
}

#header .grid .item.btnCart a.openCart .count {
    display: none;
    background: #FFFFFF;
    color: <?php echo $dominan_color; ?>;
    box-shadow: 0 0 0 3px <?php echo $dominan_color; ?>;
    padding: 3px 6px;
    position: absolute;
    top: -3px;
    left: calc(100% - 5px);
    border-radius: 100px;
    line-height: 1;
    font-size: 70%;
    font-weight: bold;
}

#header .grid .item.btnNotif a {
    color: #fff;
    position: relative;
}

#header .grid .item.btnNotif a i {
    padding: 0;
    font-size: 160%;
}

#header .grid .item.btnNotif a .count {
    display: block;
    width:12px;
    height:12px;
    border-radius: 12px;
    background: #FBBC05;
    box-shadow: 0 0 3px <?php echo $dominan_color; ?>;
    position: absolute;
    top: 1px;
    left: calc(100% - 6px);
    line-height: 1;
    font-size: 70%;
    font-weight: bold;
}

@media only screen and (max-width: 768px) {
    #header .grid .item.btnNotif {
        display:none;
    }
}
#header .grid .item.btnCart #cartHeader {
    display: block;
    position: absolute;
    top: 100%;
    right: 0;
    background: #fff;
    box-shadow: 0 5px 15px rgba(0, 0, 0, .06);
    width: 400px;
    text-align: left;
    color: #666;
    font-size: 85%;
    overflow: hidden;
    border-radius: 0 0 4px 4px;
    visibility: hidden;
    opacity: 0;
    transition: .4s;
}

#header .grid .item.btnCart:hover #cartHeader {
    visibility: visible;
    opacity: 1;
}

#cartHeader .off {
    display: none;
    padding: 20px 0;
    color: #969696;
}

#cartHeader .off:before {
    content: '';
    display: block;
    background: url(<?php echo get_template_directory_uri(); ?>/img/cart.png) no-repeat center center;
    background-size: auto 80%;
    height: 150px;
}

#cartHeader .on h4 {
    color: #969696;
    display: block;
    padding: 10px;
    border-bottom: 1px solid #f6f6f6;
}

#cartHeader .on ul.listCart {
    display: block;
    max-height: 40vh;
    overflow-y: auto;
}

#cartHeader .on ul.listCart li:nth-child(odd) {
    background: #fafafa;
}

#cartHeader .on ul.listCart li {
    border-bottom: 1px solid #f2f2f2;
    display: grid;
    grid-template-columns: auto 2fr 1fr;
    grid-gap: 10px;
    padding: 10px;
    transition: .1s;
}

#cartHeader .on ul.listCart li:hover {
    background: #FFF7E2;
}

#cartHeader .on ul.listCart li .left img {
    border-radius: 2px;
    max-width: 40px;
    max-height: 40px;
}

#cartHeader .on ul.listCart li .center .title {
    font-weight: 500;
    font-size: 100%;
}

#cartHeader .on ul.listCart li .center .title a.link {
    color: #666;
}

#cartHeader .on ul.listCart li .center .title a.link:hover {
    color: <?php echo $dominan_color; ?>;
}

#cartHeader .on ul.listCart li .right {
    text-align: right;
}
#cartHeader .on ul.listCart li .right b {
    color: <?php echo $dominan_color; ?>;
}

#cartHeader .on ul.listCart li .right .removeProductCart {
    color: #666666;
}

#cartHeader .on ul.listCart li .right .removeProductCart:hover {
    color: <?php echo $dominan_color; ?>;
}

#cartHeader .on .action {
    padding: 10px;
    /*display: grid;
    grid-template-columns: 1fr 1fr;*/
}

#cartHeader .on .action a {
    display: block;
    border: 1px solid #f6f6f6;
    padding: 10px;
    text-align: center;
    box-shadow: inset 0 -3px 0 rgba(0, 0, 0, .04);
    background: <?php echo $dominan_color; ?>;
    color: #fff;
    font-weight: 500;
}

#cartHeader .on .action a:active {
    box-shadow: none;
}

#cartPopup .off {
    display: none;
    padding: 20px 0;
    color: #969696;
}

#cartPopup .off:before {
    content: '';
    display: block;
    background: url(<?php echo get_template_directory_uri(); ?>/img/cart.png) no-repeat center center;
    background-size: auto 80%;
    height: 150px;
}

#cartPopup .on h4 {
    color: #969696;
    display: block;
    padding: 10px;
    border-bottom: 1px solid #f6f6f6;
}

#cartPopup .on #textCheckout {
    display: none;
}

#cartPopup .on ul.listCart {
    display: block;
    max-height: 40vh;
    overflow-y: auto;
}

#cartPopup .on ul.listCart li:nth-child(odd) {
    background: #fafafa;
}

#cartPopup .on ul.listCart li {
    border-bottom: 1px solid #f2f2f2;
    display: grid;
    grid-template-columns: auto 2fr 1fr;
    grid-gap: 10px;
    padding: 10px 20px;
    transition: .1s;
}
@media only screen and (max-width: 768px) {

    #cartPopup .on ul.listCart li {
        border-bottom: 1px solid #f2f2f2;
        display: grid;
        grid-template-columns: auto 2fr 1fr;
        grid-gap: 10px;
        padding: 10px 20px;
        transition: .1s;
    }
}

#cartPopup .on ul.listCart li:hover {
    background: #FFF7E2;
}

#cartPopup .on ul.listCart li .left img {
    border-radius: 2px;
    max-width: 40px;
    max-height: 40px;
}

#cartPopup .on ul.listCart li .center .title {
    font-weight: 500;
    line-height: 110%;
    margin-bottom: 5px;
    font-size: 100%;
}

#cartPopup .on ul.listCart li .center .title a.link {
    color: #666;
}

#cartPopup .on ul.listCart li .center .title a.link:hover {
    color: <?php echo $dominan_color; ?>;
}

#cartPopup .on ul.listCart li .center .qtyMin,
#cartPopup .on ul.listCart li .center .qtyPlus {
    cursor: pointer;
    padding: 3px 10px;
    background: transparent;
    border: 1px solid rgba(0, 0, 0, .1);
    text-align: center;
    background: #f6f6f6;
    box-shadow: inset 0 -1.5px 0 #e6e6e6;
}

#cartPopup .on ul.listCart li .center .qtyMin {
    border-radius: 4px 0 0 4px;
}

#cartPopup .on ul.listCart li .center .qtyPlus {
    border-radius: 0 4px 4px 0;
}

#cartPopup .on ul.listCart li .center .qtyMin:active,
#cartPopup .on ul.listCart li .center .qtyPlus:active {
    background: #e6e6e6;
}

#cartPopup .on ul.listCart li .center .qty {
    background: #fff;
    max-width: 40px;
    border: 1px solid rgba(0, 0, 0, .1);
    border-left: 0;
    border-right: 0;
    text-align: center;
    padding: 3px 0;
}

#cartPopup .on ul.listCart li .center .note:before {
    content: '';
    font-family: 'Montserrat', sans-serif;
    font-display: swap;
    display: inline-block;
    vertical-align: middle;
    color: #666;
    margin-right: 5px;
}

#cartPopup .on ul.listCart li .center .note {
    display: block;
    width: 100%;
    border: none;
    color: #666;
    background: none;
    padding: 5px 0;
}

#cartPopup .on ul.listCart li .center .note:focus {
    border: 1px solid #e6e6e6;
    color: #666;
    background: #fff;
    padding: 5px 10px;
    margin-top: 5px;
}

#cartPopup .on ul.listCart li .right {
    text-align: right;
}
#cartPopup .on ul.listCart li .right b {
    display:block;
}

#cartPopup .on ul.listCart li .right .sum {
    color: <?php echo $dominan_color; ?>;
}

#cartPopup .on ul.listCart li .right .removeProductCart {
    color: #666666;
}

#cartPopup .on ul.listCart li .right .removeProductCart:hover {
    color: <?php echo $dominan_color; ?>;
}


#cartPopup .on #cartTotal {
    position: relative;
    z-index: 1;
    padding: 20px;
    display: grid;
    grid-template-columns: 1fr auto;
}

@media only screen and (max-width: 768px) {

    #cartPopup .on #cartTotal {
        font-size: 90%;
    }
}

#cartPopup .on #cartTotal .subtotal h2 {
    font-weight: 500;
    color: <?php echo $dominan_color; ?>;
}

#cartPopup .on #cartTotal .subtotal small {
    opacity: .8;
}

#cartPopup .on #cartTotal .cartCheckout .btnCheckout {
    display: block;
    padding: 10px 30px;
    border-radius: 2px;
    font-weight: 500;
    box-shadow: 0 0 0 1px rgba(0, 0, 0, .04), 0 5px 5px rgba(0, 0, 0, .04);
    text-align: center;
    color: #868686;
}

#cartPopup .on #cartTotal .cartCheckout .btnCheckout span:before {
    content: attr(data-text-checkout);
}

#cartPopup .on #cartTotal .cartCheckout .btnCheckout.active span:before {
    content: attr(data-text-viewcart);
}

#cartPopup .on #cartTotal .cartCheckout .btnCheckout:active {
    box-shadow: 0 0 0 1px rgba(0, 0, 0, .04);
}

#cartPopup .on #cartTotal .cartCheckout .btnCheckout i {
    transition: .4s;
    padding: 0;
    color: <?php echo $dominan_color; ?>;
}

#cartPopup .on #cartTotal .cartCheckout .btnCheckout.active i {
    transform: rotate(90deg);
}

#cartPopup .cartForm {
    display: none;
    border-top: .5px solid #e6e6e6;
    box-shadow: inset 0 1px 6px rgba(0, 0, 0, .1);
}

@media only screen and (max-width: 768px) {
    #cartPopup .cartForm {
        font-size: 90%;
    }
}

#slide {
    margin-bottom: 20px;
}
#slide img {
    border-radius: 2px;
}

#slide .grid {
    display: grid;
    grid-template-columns: 2fr 1fr;
    grid-gap: 20px;
}

@media only screen and (max-width: 768px) {
    #slide .grid {
        display:block;
    }

    #slide .grid .owl-carousel {
        display: block;
        width: calc(100% + 40px);
        margin-left: -20px;
        margin-top: -15px;
        margin-bottom:20px;
    }

    #slide .grid .owl-carousel,
    #slide .grid .owl-carousel img {
        border-radius: 0 !important;
    }
}

#slide .banner a {
    display: block;
    overflow: hidden;
}

#slide .banner a img {
    width: 100%;
}

@media only screen and (max-width:1068px) {
    #slide-ulasan  {
        width: calc( 100% + 40px );
        margin-left: -20px;
    }
}

#slide-ulasan .owl-carousel {
    position: relative
}

#slide-ulasan .owl-carousel .owl-stage {
    display: flex;
}
#slide-ulasan .owl-carousel .owl-item {
    display: block;
    margin:auto;
}

.item_ulasan {
    opacity: .6;
    transform: scale(.8);
    transition: .4s ease-out;
}
.item_ulasan p a {
    display: inline-block;
    font-weight:300;
    color:<?php echo $dominan_color; ?>;
}
.notifComRat p img,
.item_ulasan p img {
    display:inline-block;
    width:auto!important;
    max-height:168px;
    border-radius:2px;
}

.loopGrid .item_ulasan,
#slide-ulasan .owl-carousel .owl-item.center .item_ulasan {
    transform: scale(1);
    opacity: 1;
    text-align: left
}

.item_ulasan p {
    background: #fff;
    display: block;
    padding: 20px;
    margin: 20px 0;
    margin-top: 40px;
    border-radius: 0 3px 3px 3px;
    position: relative;
}

.item_ulasan p:before {
    content: '';
    position: absolute;
    bottom: 100%;
    left: 0;
    border: 10px solid;
    border-radius: 4px 0 0 0;
    border-color: transparent rgba(0,0,0,.06) rgba(0,0,0,.06) transparent;
}

.loopGrid .item_ulasan p,
#slide-ulasan .owl-carousel .owl-item.center .item_ulasan p {
    box-shadow: 0 1px 0 rgba(0, 0, 0, .06)
}

.loopGrid .item_ulasan p small,
#slide-ulasan .owl-carousel .owl-item.center .item_ulasan p small {
    display: block;
    opacity: .8;
    font-size: 80%;
}

.rating {
    display: block;
    color: #FBBC05;
}

.rating:before {
    font-family: 'Montserrat', sans-serif;
    font-display: swap;
    display: inline-block;
    vertical-align: middle;
    line-height: 1;
    font-size: 100%;
}

.rating[data-rating="1"]:before {
    content: "\f4b3"" "" "" "" "
}

.rating[data-rating="2"]:before {
    content: "\f4b3 "" \f4b3"" "" "" "
}

.rating[data-rating="3"]:before {
    content: "\f4b3 "" \f4b3 "" \f4b3"" "" "
}

.rating[data-rating="4"]:before {
    content: "\f4b3 "" \f4b3 "" \f4b3 "" \f4b3"" "
}

.rating[data-rating="5"]:before {
    content: "\f4b3 "" \f4b3 "" \f4b3 "" \f4b3 "" \f4b3"
}

.item_ulasan .ava_info {
    margin-top: 20px;
    display: grid;
    grid-template-columns: 50px 1fr;
    grid-gap: 15px;
}

.item_ulasan h4 {
    font-weight: 400;
    display: block;
}

.item_ulasan .ava_info img.ava {
    width:50px;
    height:50px;
    border-radius: 50px;
    display: block;
}

.item_ulasan .ava_info .info {
    display: flex;
}

.item_ulasan .ava_info .info .flexwrap {
    display: block;
    margin: auto;
    margin-left: 0;
}

.item_ulasan small {
    color: rgba(0, 0, 0, .6);
    display: block;
    margin-top: 10px
}

.item_ulasan small a {
    color: <?php echo $dominan_color; ?>
}


#slide-ulasan {
    padding: 30px 0 30px;
    border-bottom: 1px solid rgba(0,0,0,.06);
    margin-bottom: 30px;
}
#slide-ulasan .owl-nav button {
    position: absolute;
    width: 40px;
    text-align: center;
    color: #4e5665;
    margin: 0;
    padding: 0;
    transition: .2s;
    z-index: +101;
    background:transparent;
}

#slide-ulasan .owl-nav button span {
    font-size: 300%
}

#slide-ulasan .owl-nav button:active span {
    color: <?php echo $dominan_color; ?>
}

#slide-ulasan .owl-nav button.owl-prev {
    left: 0;
}

#slide-ulasan .owl-nav button.owl-next {
    right: 0;
}

#slide-ulasan .owl-dots {
    position: relative;
    bottom: 0;
    margin-top: 30px;
}
#slide-ulasan .item_ulasan p {
    border: .5px solid rgba(0, 0, 0, .06);
}
#slide-ulasan .item_ulasan p:before {
    left: -.5px;
}
main {
    padding: 30px 0;
}

@media only screen and (max-width: 768px) {
    main {
        padding: 15px 0;
    }
}
.archiveWrap {
    display: grid;
    grid-template-columns: 250px 1fr;
    grid-column-gap: 20px;
    transition: .4s;
}
.archiveWrap.toggle {
    grid-template-columns: 1fr;
    grid-column-gap: 0;
}
.archiveWrap .catside {
    transition: .4s;
    position: relative;
    background: #fff;
    box-shadow: 0 1px 0 rgba(0, 0, 0, .06);
    border-radius: 4px;
    color: #969696;
    padding: 20px;
}
.archiveWrap.toggle .catside {
    display: none;
}
.archiveWrap .catside h3 {
    display: block;
    color: <?php echo $dominan_color; ?>;
    border-bottom: 1px solid rgba(0,0,0,.06);
    padding-bottom: 10px;
    font-size: 90%;
}
.archiveWrap .catside h3 span {
    display: inline-block;
    vertical-align: middle;
    padding-right: 5px;
}
.archiveWrap .catside ul {
    font-size: 95%;
}
.archiveWrap .catside ul,
.archiveWrap .catside ul li {
    /*display: block;*/
}
.archiveWrap .catside ul li {
    list-style-type: square;
    margin-left: 20px;
    /*background: rgba(0,0,0,.1);*/
}
.archiveWrap .catside > ul > li {
    display: block;
    margin-left: 0;
    border-top: 1px solid rgba(0,0,0,.06);
}
.archiveWrap .catside > ul > li:first-of-type {
    border-top: 0;
}
.archiveWrap .catside ul li a {
    display: inline-block;
    padding: 10px 0;
}
.archiveWrap .catside ul li small {
    float: right;
    display: inline-block;
    padding: 0 8px;
    border-radius: 2px;
    font-size: 80%;
    background: <?php echo $dominan_color; ?>;
    color: #fff;
    margin-top: 12px;
    margin-left: 5px;
    margin-left: 5px;
}
.archiveWrap .catside ul li a.current {
    font-weight: 500;
    color: <?php echo $dominan_color; ?>;
}
.archiveWrap .catside ul.children {
    padding-left: 10px;
    border-left: 1px solid rgba(0,0,0,.06);
}

//
.archiveWrapHome {
	margin-top: 30px;
    display: grid;
    grid-template-columns: 250px 1fr;
    grid-column-gap: 20px;
    transition: .4s;
}
.archiveWrapHome.toggle {
    grid-template-columns: 1fr;
    grid-column-gap: 0;
}
.archiveWrapHome .catside {
    transition: .4s;
    position: relative;
    background: #fff;
    box-shadow: 0 1px 0 rgba(0, 0, 0, .06);
    border-radius: 4px;
    color: #969696;
	margin: 20px;
    padding: 20px;
}
.archiveWrapHome.toggle .catside {
    display: none;
}
.archiveWrapHome .catside h3 {
    display: block;
    color: <?php echo $dominan_color; ?>;
    border-bottom: 1px solid rgba(0,0,0,.06);
    padding-bottom: 10px;
    font-size: 90%;
}
.archiveWrapHome .catside h3 span {
    display: inline-block;
    vertical-align: middle;
    padding-right: 5px;
}
.archiveWrapHome .catside ul {
    font-size: 95%;
}
.archiveWrapHome .catside ul,
.archiveWrapHome .catside ul li {
    /*display: block;*/
}
.archiveWrapHome .catside ul li {
    list-style-type: square;
    margin-left: 20px;
    /*background: rgba(0,0,0,.1);*/
}
.archiveWrapHome .catside > ul > li {
    display: block;
    margin-left: 0;
    border-top: 1px solid rgba(0,0,0,.06);
}
.archiveWrapHome .catside > ul > li:first-of-type {
    border-top: 0;
}
.archiveWrapHome .catside ul li a {
    display: inline-block;
    padding: 10px 0;
}
.archiveWrapHome .catside ul li small {
    float: right;
    display: inline-block;
    padding: 0 8px;
    border-radius: 2px;
    font-size: 80%;
    background: <?php echo $dominan_color; ?>;
    color: #fff;
    margin-top: 12px;
    margin-left: 5px;
    margin-left: 5px;
}
.archiveWrapHome .catside ul li a.current {
    font-weight: 500;
    color: <?php echo $dominan_color; ?>;
}
.archiveWrapHome .catside ul.children {
    padding-left: 10px;
    border-left: 1px solid rgba(0,0,0,.06);
}
@media only screen and (max-width: 768px) {

    .archiveWrap {
        display: grid;
        grid-template-columns: 1fr;
    }
    .archiveWrap .catside {
        display: none;
    }
    .archiveWrap.toggle {
        grid-row-gap: 20px;
    }
    .archiveWrap.toggle .catside {
        display: block;
    }

    .archiveWrapHome {
        display: grid;
        grid-template-columns: 1fr;
    }
    .archiveWrapHome .catside {
        display: none;
    }
    .archiveWrapHome.toggle {
        grid-row-gap: 20px;
    }
    .archiveWrapHome.toggle .catside {
        display: block;
    }

}
.pageTitle {
    font-size: 110%;
    padding: 20px 0;
    display: grid;
    grid-template-columns: 1fr auto;
    grid-gap:10px;
    font-weight: 400;
    letter-spacing: 1px;
    margin-bottom: 20px;
    border-bottom: 1px solid rgba(0, 0, 0, .06);
}

@media only screen and (max-width: 1468px) {
    .pageTitle {
        padding: 15px 0;
        font-size: 95%;
    }
}

.pageTitle h1,
.pageTitle h2,
.pageTitle h3,
.pageTitle h4 {
    font-size: 100%;
}

.pageTitle .flex {
    display: flex;
}

.pageTitle .flex>* {
    display: block;
    margin: auto;
}

.pageTitle .flex.left>* {
    margin-left: 0;
}

.pageTitle .flex.right>* {
    margin-right: 0;
}

.pageTitle .flex.left>* i {
    display: inline-block;
}
.pageTitle .flex.left>* .toggleBtn {
    position: relative;
    display: inline-block;
    vertical-align: middle;
    transition: .4s;
    width: 40px;
    height: 20px;
    line-height: 20px;
    border-radius: 40px;
    text-align: center;
    margin-left: 10px;
    font-size: 110%;
    box-shadow: inset 0 1px 2px rgba(0,0,0,.06);
    border: 1px solid <?php echo $dominan_color; ?>;
    background: <?php echo $dominan_color; ?>;
}
.pageTitle .flex.left>* .toggleBtn.toggle {
    border: 1px solid rgba(0,0,0,.1);
    background: rgba(0,0,0,.04);
}
.pageTitle .flex.left>* .toggleBtn:before {
    content: '';
    position: absolute;
    display: block;
    top: 2px;
    right: 2px;
    width: 14px;
    height: 14px;
    border-radius: 14px;
    background: #fff;
    transition: .4s;
    box-shadow: 0 1px 2px rgba(0,0,0,.4);
}
.pageTitle .flex.left>* .toggleBtn.toggle:before {
    right:calc(50% + 2px);
}
.pageTitle .flex.right a {
    display:inline-block;
    padding: 5px 15px;
    border-radius: 4px;
    vertical-align: middle;
    font-size: 80%;
    color: #6a6a6a;
    border:1px solid rgba(0,0,0,.06);
}
.pageTitle .flex.right a i {
    color: <?php echo $dominan_color; ?>;
}
@media only screen and (max-width: 768px) {

    .pageTitle .flex.left>* .toggleBtn {
        border: 1px solid rgba(0,0,0,.1);
        background: rgba(0,0,0,.04);
    }
    .pageTitle .flex.left>* .toggleBtn.toggle {
        border: 1px solid <?php echo $dominan_color; ?>;
        background: <?php echo $dominan_color; ?>;
    }
    .pageTitle .flex.left>* .toggleBtn:before {
        right:calc(50% + 2px);
    }
    .pageTitle .flex.left>* .toggleBtn.toggle:before {
        right: 2px;
    }
}
.pageTitle a {
    text-align: right;
    font-size: 90%;
    color: <?php echo $dominan_color; ?>;
}
.pageTitle .select {
    position: relative;
    font-size: 90%;
}
.pageTitle .select:before {
    position: absolute;
    z-index: -1;
    top: 50%;
    right: 15px;
    transform: translate(0, -50%);
    content:"";
    display: inline-block;
    font-size: 90%;
    font-family: 'Montserrat', sans-serif;
    font-display: swap;
}
.pageTitle .select select {
    display:inline-block;
    padding:10px 15px;
    padding-right: 50px;
    border-radius:2px;
    border:1px solid rgba(0,0,0,.06);
    background: transparent;
    color: rgba(0,0,0,.8);
}
.pageTitle .select select:focus {
    border:1px solid <?php echo $dominan_color; ?>;
}

.wrapper>.breadcrumbs {
    padding: 20px 0;
    font-size: 90%;
}

@media only screen and (max-width: 768px) {
    .wrapper>.breadcrumbs {
        display: none;
    }
}

.breadcrumbs {
    display: block;
    white-space: nowrap;
    max-width: 100%;
    overflow-x: auto;
    color: #969696;
}
.breadcrumbs * {
    display: inline-block!important;
    vertical-align: middle!important;
}
.breadcrumbs .breadcrumbs__separator {
    padding:0 2px;
}

.breadcrumbs a {
    color: #868686;
}

.breadcrumbs a:hover {
    color: <?php echo $dominan_color; ?>;
}


.loop .loopGrid {
    display: grid;
}
.loop .loopGrid > *:last-of-type {
    margin-bottom: 20px;
}
.imgWrap {
    position: relative;
    display: block;
    overflow: hidden;
}

#product .imgWrap figure .youtube {
    position: absolute;
    z-index: 100;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    color: #ff0000;
    font-size: 300%;
    text-shadow: 1px 1px 2px rgba(0,0,0,.2);
}
#product .imgWrap figure .youtube i {
    position: relative;
}
#product .imgWrap figure .youtube i:after {
    content: '';
    position: absolute;
    z-index: -1;
    display: block;
    width: 50%;
    height: 50%;
    background: #fff;
    top:25%;
    left: 25%;
}
#iframe .content {
    display: block;
    padding-top: 56.25%;
    position: relative;
    background: #000 url(<?php echo get_template_directory_uri(); ?>/img/youtube.gif) no-repeat center center;
    overflow: hidden;
    border-radius: 0 0 4px 4px;
}
#iframe .content iframe {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    width: 100%;
    height: 100%;
    border: none;
    outline: none;
}
.loop .loopGrid.produk {
    grid-template-columns: repeat(5, 1fr);
    grid-gap: 15px;
}
.loop .loopGrid.ulasan {
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 20px;
}
.loop .loopGrid.post {
    grid-template-columns: repeat(2, 1fr);
    grid-gap: 20px;
}

.loop .loopGrid.related {
    grid-template-columns: repeat(4, 1fr);
    grid-gap: 20px;
}
body.single-post .loop .loopGrid.related {
    grid-template-columns: repeat(2, 1fr);
}

.loop .loopGrid.related img {
    display: block;
    width: 100%;
}


@media only screen and (max-width: 1068px) {
    .loop .loopGrid.produk {
        grid-template-columns: repeat(2, 1fr);
        grid-column-gap: 10px;
    }
}

@media only screen and (max-width: 768px) {

    .loop .loopGrid.post,
    .loop .loopGrid.related,
    .loop .loopGrid.ulasan {
        grid-template-columns: repeat(1, 1fr);
        grid-gap: 20px;
    }
    body.single-produk .loop .loopGrid.related {
        grid-template-columns: repeat(2, 1fr);
    }
}

.item_post {
    position:relative;
}
.item_post .thumbPost {
    display:block;
}
.item_post .thumbPost img {
    display:block;
    border-radius:2px;
}
.item_post .postGrid {
    margin-top:15px;
    display:grid;
    grid-template-columns:40px 1fr;
    grid-gap:15px;
}
.item_post h2 {
    font-size:105%;
    margin-bottom:5px;
}
.item_post h2 a {
    color:#666;
    font-weight:500;
}
.item_post .postGrid .avaPost img {
    display:block;
    border-radius:40px;
    background:#f2f2f2;
    width:40px;
    height:40px;
}
.item_post .postGrid .infoPost small {
    opacity:.8;
    display:block;
    margin-top:10px;
}

.loop .item_product {
    position: relative;
}

.loop .item_product .thumbProduct {
    display:block;
    padding-top:100%;
    background-size:cover;
    background-position: center center;
    border-radius: 2px 2px 0 0;
    overflow: hidden;
    position:relative;
}
.loop .item_product .thumbProduct img {
    display:none!important;
}

.loop .item_product .thumbProduct .discount {
    font-size: 80%;
    background: <?php echo $dominan_color; ?>;
    color: #fff;
    padding: 5px 10px;
    border-radius: 0 4px 0 0;
    position: absolute;
    bottom: 0;
    left: 0;
    text-align: center;
}

.loop .item_product .thumbProduct .discount b {
    display: inline-block;
    margin-right:5px;
    font-size:120%;
}
.loop .item_product .productInfo {
    display: block;
    height:150px;
    padding: 15px;
    border-top: 1px solid #f6f6f6;
    background: #fff;
    box-shadow: 0 1px 0 rgba(0, 0, 0, .06);
    border-radius: 0 0 2px 2px;
}

.loop .item_product .productInfo .title {
    font-weight: 300;
    font-size: 100%;
}

.loop .item_product .productInfo .title a.link {
    color: #666;
}

.loop .item_product .productInfo .title a.link:hover {
    color: <?php echo $dominan_color; ?>;
}

.loop .item_product .productInfo .priceArea {
    display: block;
    margin-top: 5px;
    font-size: 90%;
}

.loop .item_product .productInfo .priceArea>* {
    display: inline-block;
    vertical-align: middle;
    line-height: 1;
}

.loop .item_product .productInfo .priceArea .normalPrice {
    color: #969696;
    text-decoration: line-through;
    margin-right: 5px;
    font-weight: 300;
}

.loop .item_product .productInfo .priceArea .price {
    color: <?php echo $dominan_color; ?>;
    font-weight: 500;
}
.mainAside {
    display:grid;
    grid-template-columns: auto 300px;
    grid-gap:40px;
}
.mainAside aside {
    display: block;
    padding: 30px 0;
}
.mainAside aside > * {
    display:grid;
    grid-template-columns:1fr;
    grid-row-gap:40px;
}
.mainAside aside > * > div {
    
}
.mainAside aside > * > div h3 {
    display:block;
    border-left:4px solid <?php echo $dominan_color; ?>;
    background: rgba(0,0,0,.01);
    padding: 15px;
    margin-bottom:20px;
    font-size: 100%;
}
.mainAside aside .custom-widget {
    margin-bottom:40px;
}
.mainAside aside .custom-widget .new-post {
    display:grid;
    grid-template-columns:1fr;
    grid-row-gap:20px;
}
#post {
    
}

#post .breadcrumbs {
    margin:20px 0;
    font-size: 90%;
}
#post .thumbPost {
    display:block;
}
#post .thumbPost img {
    display:block;
    width:100%;
    border-radius:2px;
}
#post h1.postTitle {
    font-size:180%;
    display:block;
    margin:30px 0;
    font-weight: 500;
}
#post .postGrid {
    display:grid;
    grid-template-columns:40px 1fr auto;
    grid-gap:15px;
}
#post .postGrid {
    margin-bottom:30px;
}
#post .postGrid .avaPost img {
    display:block;
    border-radius:40px;
    background:#f2f2f2;
    width:40px;
    height:40px;
}
#post .postGrid .infoPost {
}
#post .postGrid .infoPost .flexwrap {
    display:block;
    margin-top:5px;
}
#post .postGrid .infoPost small {
    opacity:.8;
    display:block;
}

#post .postGrid .shareThis span {
    display:inline-block;
    vertical-align:middle;
    padding:5px 0;
    padding-right:15px;
    margin-right:15px;
    border-right:1px solid rgba(0,0,0,.06);
    color:#969696;
    font-size:90%;
}

@media only screen and (max-width: 480px) {
    #post .postGrid .shareThis span {
        display:none;
    }
    .loop .item_product .productInfo {
        font-size: 90%;
    }
}
#post .postGrid .shareThis a.facebook {
    color: #4267B2;
}
#post .postGrid .shareThis a.twitter {
    color: #00ABF0;
}
#post .postGrid .shareThis a.whatsapp {
    color: #0CC243;
}
#post .postTag {
    display: block;
    margin: 20px 0;
    font-size: 80%;
}
#post .postTag a {
    display: inline-block;
    margin: 0 5px 5px 0;
    background: rgba(0,0,0,.04);
    box-shadow: 0 0 0 1px rgba(0,0,0,.04);
    border-radius: 3px;
    padding: 5px 15px;
}
#post .postTag a:hover {
    display: inline-block;
    margin: 0 5px 5px 0;
    background: transparent;
    box-shadow: 0 0 0 2px rgba(0,0,0,.04);
    border-radius: 3px;
    padding: 5px 15px;
}
.postContent_wrap {
    padding: 20px;
    display: block;
    background: #fff;
    box-shadow: 0 1px 0 rgba(0, 0, 0, .06);
    border-radius: 2px;
    font-size:90%;
}
.postContent {
    font-size: 105%;
    line-height: 1.6;
}
.postContent .wp-caption {
    max-width: 100%!important;
    background: #fff;
    border: none;
    max-width: 100%;
    padding: 0!important;
    text-align: center;
    margin-top: 40px;
    margin-bottom: 40px;
    border: 1px solid rgba(0, 0, 0, .06);
    border-radius: 4px;
    overflow: hidden;
}
.postContent .wp-caption a {
    display: block;
    max-width: 100%;
    margin: auto;
}
.postContent img {
    display: block;
    margin: 20px 0;
    border-radius: 2px;
}
.postContent .gallery img {
    margin: 0;
}
.postContent .wp-caption img {
    width: 100%;
    margin: 0;
    border-radius: 0!important;
    border-bottom: 1px solid rgba(0, 0, 0, .06);
}
.postContent .wp-caption .wp-caption-text,
.postContent .gallery-caption {
    font-size: 80%;
    line-height: auto;
    margin: 0;
    padding: 15px;
    opacity: .8;
    max-width: 90%;
    display: block;
    text-align: center;
}
.postContent h1,
.postContent h2,
.postContent h3,
.postContent h4,
.postContent h5,
.postContent h6,
.postContent .gallery,
.postContent p,
.postContent ol,
.postContent ul {
    margin: 20px 0;
}
.postContent p:first-of-type {
    margin-top: 0;
}
.postContent h1,
.postContent h2,
.postContent h3,
.postContent h4,
.postContent h5,
.postContent h6 {
    margin-top: 40px;
    font-weight: 500;
    line-height: 1.4;
    text-decoration: underline 2px;
    text-decoration-color: <?php echo $dominan_color; ?>;
}
.postContent .focusHash {
    background: <?php echo $dominan_color; ?>!important;
    color: #fff!important;
}
.postContent ol li,
.postContent ul li {
    margin: 5px 0;
}
.postContent ol,
.postContent ul {
    margin-left: 35px;
}
#post .comments {

}
#post .comments ul li #respond {
    padding-left:20px;
    padding-top:20px;
    padding-bottom:20px;
}
#post .comments .required {
    color:red;
}
#post .comments #respond form {
    display:grid;
    grid-template-columns: 1fr 1fr;
    grid-gap: 20px;
}
#post .comments #respond form label {
    font-size: 90%;
    display: inline-block;
    padding: 10px 0;
}
#post .comments #respond form .comment-notes,
#post .comments #respond form .comment-form-comment,
#post .comments #respond form .comment-form-cookies-consent,
#post .comments #respond form .form-submit,
#post .comments #respond form .comment-form-url{
    grid-column: 1/3;
}
#post .comments #respond form .comment-form-cookies-consent {
    border: 1px solid rgba(0,0,0,.04);
    padding: 10px 15px;
    border-radius: 2px;
    display: grid;
    grid-template-columns: auto 1fr;
    grid-gap: 10px;
}
#post .comments #respond form .comment-form-cookies-consent input {
    margin-top: 5px;
}
#post .comments #respond form .comment-form-cookies-consent label {
    display: inline;
    padding: 0;
}

#post .comments #respond form input[type=text],
#post .comments #respond form input[type=email],
#post .comments #respond form input[type=url],
#post .comments #respond form textarea {
    background: rgba(0,0,0,.04);
    border: 1px solid rgba(0,0,0,.04);
    padding: 15px;
    border:none;
    width:100%;
    border-radius: 2px;
    transition: .2s;
}
#post .comments #respond form input[type=text]:focus,
#post .comments #respond form input[type=email]:focus,
#post .comments #respond form input[type=url]:focus,
#post .comments #respond form textarea:focus {
    background: #fff;
}

#post .comments #respond form input[type=submit] {
    display: block;
    padding: 15px;
    background: <?php echo $dominan_color; ?>;
    color: #fff;
    border:none;
    width: 100%;
    font-weight: 500;
    font-size: 120%;
    box-shadow: inset 0 -4px 0 0 rgba(0,0,0,.1);
    cursor: pointer;
    border-radius: 2px;
}

#post .comments #respond form input[type=submit]:active {
    box-shadow: none;
}
#post .comments ul,
#post .comments ul li {
    display: block;
}
#post .comments li.comment {
    margin: 20px 0;
}
#post .comments li.comment.bypostauthor > small {
    display: none;
}
#post .comments li.comment.bypostauthor > .comment-body .comment-author-wrap b:after {
    content:'';
    width:18px;
    height:18px;
    line-height:18px;
    margin-left:5px;
    vertical-align:middle;
    display:inline-block;
    background:url("data:image/svg+xml,<svg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'><path d='M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9M12,1L3,5V11C3,16.55 6.84,21.74 12,23C17.16,21.74 21,16.55 21,11V5L12,1Z' fill='%23<?php echo trim($dominan_color,"#"); ?>'></path></svg>") center center no-repeat

}
#post .comments ul.children {
    padding-left: 20px;
}
#post .comments li.comment>small {
    display:none;
}
#post .comments li.comment .comment-author {
    display: grid;
    grid-template-columns: 60px 1fr;
    grid-gap: 20px;
}
#post .comments li.comment .comment-author img {
    display: block;
    width: 60px;
    height: 60px;
    border-radius: 60px;
    box-shadow: 0 0 0 4px rgba(0,0,0,.04);
}
#post .comments li.comment .comment-author .comment-author-wrap {
    display: flex;
}
#post .comments li.comment .comment-author .comment-author-wrap .flexWrap {
    display: block;
    margin: auto;
    margin-left: 0;
}
#post .comments li.comment .comment-author .comment-author-wrap .flexWrap .commentmetadata {
    display: block;
    font-size:80%;
}
#post .comments li.comment .comment-body p {
    display: block;
    padding: 15px 20px;
    background: #fff;
    margin: 20px 0;
    box-shadow: 0 1px 0 rgba(0, 0, 0, .06);
    border-radius: 2px;
}
#post .comments li.comment .comment-body .comment-awaiting-moderation {
    background:#FFF7E2;
    border:1px solid rgba(0,0,0,.06);
    margin-top:20px;
    border-radius:2px;
    display:block;
    padding:5px 15px;
}
#post .comment-respond form .comment-form-comment {
    display:block;
    position:relative;
}
@media only screen and (max-width: 768px) {
    .mainAside {
        display:block;
    }
    .mainAside aside {
        display:block;
        margin-top: 20px;
    }
    .postContent h1,
    .postContent h2,
    .postContent h3,
    .postContent h4,
    .postContent h5,
    .postContent h6 {
        margin-top: 30px;
    }
    #post .imgWrap.expand {
        display:block;
        width: calc(100% + 40px);
        margin-left: -20px;
        margin-top: -15px;
    }
    #post .thumbPost img {
        border-radius:0;
    }
    #post h1.postTitle {
        font-size: 150%;
        margin: 20px 0;
    }
    #post .postGrid {
        font-size: 90%;
    }
    .postContent_wrap {
        display:block;
        width: calc(100% + 40px);
        margin-left: -20px;
        padding: 20px 15px;
        border-radius: 0;
    }
}
#product .item_product {
    display: grid;
    grid-template-columns: 1fr 1.4fr;
    background: #fff;
    box-shadow: 0 1px 0 rgba(0, 0, 0, .06);
    border-radius: 2px;
    overflow: hidden;
}

@media only screen and (max-width: 1468px) {
    #product .item_product {
        grid-template-columns: 1fr 1.2fr;
    }
}

@media only screen and (max-width: 768px) {
    #product .item_product {
        border-radius: 0;
        grid-template-columns: 1fr;
        grid-gap: 0;
        direction: block;
        width: calc(100% + 40px);
        margin-left: -20px;
        margin-top: -15px;
    }
}

#product .item_product .shareThis {
    position: absolute;
    z-index: 999;
    bottom: 0;
    left: 0;
    background: rgba(255,255,255,.9);
    display: inline-block;
    border-radius: 0 6px 0 0;
    padding: 10px 15px;
    box-shadow: 0 0 0 1px rgba(0,0,0,.04);
    font-size: 90%;
}
@media only screen and (max-width: 768px) {
    #product .item_product .shareThis {
        font-size: 80%;
    }
}
#product .item_product .shareThis span {
    font-size: 90%;
}
#product .item_product .shareThis a.facebook {
    color: #4267B2;
}
#product .item_product .shareThis a.twitter {
    color: #00ABF0;
}
#product .item_product .shareThis a.whatsapp {
    color: #0CC243;
}
#product .item_product .imgArea {
    display: block;
    overflow: hidden;
    position: relative;
    box-shadow: 0 0 0 1px rgba(0,0,0,.04);
}
#product .item_product .imgArea figure a.lightbox {
    display:block;
    padding-top:100%;
    background-size:cover;
    background-position: center center;
}
#product .item_product .imgArea figure img {
    width: 100%;
    display:none!important;
}

#product .item_product .productInfo {
    display: block;
    padding: 20px;
    border-top: none;
}

#product .item_product .productInfo .title {
    font-weight: 300;
    font-size: 100%;
    margin-bottom: 10px;
}

#product .item_product .productInfo .title {
    font-weight: 400;
    font-size: 120%;
}

#product .item_product .productInfo .title a.link {
    color: #666;
}

#product .item_product .productInfo .title a.link:hover {
    color: <?php echo $dominan_color; ?>;
}

#product .item_product .productInfo .priceArea {
    color: <?php echo $dominan_color; ?>;
    font-size: 150%;
    display: block;
    background: #fafafa;
    padding: 15px 20px;
}

#product .item_product .productInfo .priceArea>* {
    display: inline-block;
    vertical-align: middle;
    line-height: 1;
}

#product .item_product .productInfo .priceArea .normalPrice {
    font-size: 70%;
    color: #969696;
    text-decoration: line-through;
    margin-right: 10px;
}

#product .item_product .productInfo .priceArea .discount {
    font-size: 50%;
    margin-left: 10px;
    background: <?php echo $dominan_color; ?>;
    color: #fff;
    padding: 4px 10px;
    border-radius: 2px;
}

#product .item_product .productInfo .productRating {
    margin-bottom: 10px;
    font-size: 100%;
}

#product .item_product .productInfo .productRating a {
    color: #666;
}

#product .item_product .productInfo .productRating .avg_rating_count {
    display: inline-block;
    border-bottom: 1px solid #FBBC05;
    vertical-align: middle;
    margin-right:10px;
}
.productRating small {
    border-left:1px solid #eee;
    padding-left:10px;
    margin-left:10px;
}
.avg_rating_wrap {
    display: inline-block;
    vertical-align: middle;
    overflow: hidden;
    position: relative;
    top: -2px;
    color: #FBBC05;
}

.avg_rating {
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: flex-start;
}

.avg_rating__item {
    font-size: 160%;
    display: block;
    font-family: 'Montserrat', sans-serif;
    font-display: swap;
    margin-right: 2px;
}

.avg_rating__item::after {
    content: '';
}

.avg_rating[data-rating='0'] .avg_rating__item:nth-child(-n+0):after,
.avg_rating[data-rating='0.5'] .avg_rating__item:nth-child(-n+0):after,
.avg_rating[data-rating='1'] .avg_rating__item:nth-child(-n+1):after,
.avg_rating[data-rating='1.5'] .avg_rating__item:nth-child(-n+1):after,
.avg_rating[data-rating='2'] .avg_rating__item:nth-child(-n+2):after,
.avg_rating[data-rating='2.5'] .avg_rating__item:nth-child(-n+2):after,
.avg_rating[data-rating='3'] .avg_rating__item:nth-child(-n+3):after,
.avg_rating[data-rating='3.5'] .avg_rating__item:nth-child(-n+3):after,
.avg_rating[data-rating='4'] .avg_rating__item:nth-child(-n+4):after,
.avg_rating[data-rating='4.5'] .avg_rating__item:nth-child(-n+4):after,
.avg_rating[data-rating='5'] .avg_rating__item:nth-child(-n+5):after,
.avg_rating[data-rating='5.5'] .avg_rating__item:nth-child(-n+5):after {
    content: "";
}

.avg_rating[data-rating='0.5'] .avg_rating__item:nth-child(1):after,
.avg_rating[data-rating='1.5'] .avg_rating__item:nth-child(2):after,
.avg_rating[data-rating='2.5'] .avg_rating__item:nth-child(3):after,
.avg_rating[data-rating='3.5'] .avg_rating__item:nth-child(4):after,
.avg_rating[data-rating='4.5'] .avg_rating__item:nth-child(5):after,
.avg_rating[data-rating='5.5'] .avg_rating__item:nth-child(6):after {
    content: "";
}

#product .item_product .productInfo .productOption2,
#product .item_product .productInfo .productOption {
    display: grid;
    grid-template-columns: 120px 1fr;
    margin-bottom: 15px;
}

#product .item_product .productInfo .productOption2 .optionTitle,
#product .item_product .productInfo .productOption .optionTitle {
    /*display: flex;*/
}

#product .item_product .productInfo .productOption2 .optionTitle span,
#product .item_product .productInfo .productOption .optionTitle span {
    /*margin: auto;
    margin-left: 0;*/
}

#product .item_product .productInfo .productOption2 .optionBtn button,
#product .item_product .productInfo .productOption .optionBtn button {
    display: inline-block;
    margin:0 5px 10px 0;
    border: 1px solid #e6e6e6;
    background: #fff;
    line-height: 1;
    padding: 5px 10px;
    cursor: pointer;
    border-radius: 2px;
}

#product .item_product .productInfo .productOption2 .optionBtn button:hover,
#product .item_product .productInfo .productOption .optionBtn button:hover {
    color: <?php echo $dominan_color; ?>;
}

#product .item_product .productInfo .productOption2 .optionBtn button.selected,
#product .item_product .productInfo .productOption .optionBtn button.selected {
    border: 1px solid <?php echo $dominan_color; ?>;
    color: <?php echo $dominan_color; ?>;
    background: #fff;
}

#product .item_product .productInfo .productOption2 .optionBtn button:active,
#product .item_product .productInfo .productOption .optionBtn button:active {
    background: <?php echo $dominan_color; ?>;
    border: 1px solid <?php echo $dominan_color; ?>;
    color: #fff;
}

#product .item_product .productInfo .productQty {
    display: grid;
    grid-template-columns: 120px 1fr;
}

#product .item_product .productInfo .productQty .qtyTitle {
    display: flex;
}

#product .item_product .productInfo .productQty .qtyTitle span {
    margin: auto;
    margin-left: 0;
}

#product .item_product .productInfo .productQty .qtyBtn {
    margin-top: 5px;
}

#product .item_product .productInfo .productQty .qtyBtn>* {
    display: inline-block;
    height: 30px;
    line-height: 30px;
    padding: 0 10px;
    margin: auto;
    text-align: center;
    border: none;
    box-shadow: 0 0 0 1px #e6e6e6;
    font-size: 100%;
    vertical-align: middle;
}

#product .item_product .productInfo .productQty .qtyBtn>button {
    background: #fff;
    font-size: 100%;
    cursor: pointer;
    width: 35px;
}

#product .item_product .productInfo .productQty .qtyBtn>button:active {
    background: #e6e6e6;
}

#product .item_product .productInfo .productQty .qtyBtn>button.qtyMin {
    border-radius: 2px 0 0 2px;
}

#product .item_product .productInfo .productQty .qtyBtn>button.qtyPlus {
    border-radius: 0 2px 2px 0;
}

#product .item_product .productInfo .productQty .qtyBtn>input.qty {
    background: #fff;
    width: 60px;
}

#product .item_product .productInfo .orderBtn {
    display: block;
    margin-top: 20px;
}

#product .item_product .productInfo .orderBtn a {
    font-weight: 400;
    cursor: pointer;
    display: inline-block;
    padding: 10px 15px;
    text-align: center;
    border: 1px solid <?php echo $dominan_color; ?>;
    color: <?php echo $dominan_color; ?>;
    font-size: 90%;
    border-radius: 2px;
    background: <?php echo $dominan_color; ?>10;
}

#product .item_product .productInfo .orderBtn a.orderCart {
    margin-right: 5px;
}

#product .item_product .productInfo .orderBtn a.orderCheckout {
    background: <?php echo $dominan_color; ?>;
    color: #fff;
    font-weight: 500;
}

@media only screen and (max-width: 768px) {
    #product .item_product .productInfo .orderBtn {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-gap: 10px;
    }

    #product .item_product .productInfo .orderBtn a {
        display: block;
    }

    #product .item_product .productInfo .orderBtn a.orderCart {
        margin-right: 0;
    }
}

@media only screen and (max-width: 468px) {
    #product .item_product .productInfo .orderBtn {
        display: grid;
        grid-template-columns: 1fr;
        grid-gap: 0;
        grid-row-gap: 10px;
    }
}

#product .item_product .productInfo .orderMp {
    margin-top: 20px;
}
#product .item_product .productInfo .orderMp a {
    display: inline-block;
    margin: 10px 5px 0 0;
    border: 1px solid rgba(0,0,0,.08);
    border-radius: 2px;
    padding: 10px 15px;
    color: #969696;
}
#product .item_product .productInfo .orderMp a:hover {
    box-shadow: inset 0 -2px 0 rgba(0,0,0,.06);
}
#product .item_product .productInfo .orderMp a:active {
    box-shadow: none;
}
#product .item_product .productInfo .orderMp a img {
    margin: auto;
    vertical-align: middle;
    max-height: 15px;
    border-radius: 2px;
    margin-bottom: 5px;
}
@media only screen and (max-width: 768px) {
    #product .item_product .productInfo .orderMp a small {
        display: none;
    }
    #product .item_product .productInfo .orderMp a img {
        margin-bottom: 0;
    }
}
#product .item_product .productInfo .productFeature {
    padding: 20px 0;
    padding-bottom: 0;
    border-top: 1px solid #f6f6f6;
    margin-top: 20px;
    font-size: 85%;
    color: #161616;
    line-height: 2;
}

@media only screen and (max-width: 768px) {
    #product .item_product .productInfo .productFeature {
        text-align: center;
    }
}

#product .item_product .productInfo .productFeature small {
    display: inline-block;
    opacity: .6;
    font-size: 100%;
    padding: 0 10px;
}

#product .item_product .productInfo .productFeature i {
    color: <?php echo $dominan_color; ?>;
    font-size: 160%;
}

.detailRecommend {
    margin-top: 20px;
    display: block;
}

@media only screen and (max-width: 768px) {

    .detailRecommend {
    }
}
.detailRecommend:after {
    content: '';
    display: block;
    clear: both;
}

.detailRecommend .productDetail {
    display: block;
    float: left;
    width: calc(100% - 320px);
}

.detailRecommend .productRecommend {
    display: block;
    float: right;
    width: 300px;
}

.detailRecommend .productDetail .wrap {
    padding: 30px;
    display: block;
    background: #fff;
    box-shadow: 0 1px 0 rgba(0, 0, 0, .06);
    border-radius: 2px;
    overflow: hidden;
    font-size: 95%;
    line-height: 1.6;
}

.detailRecommend .productDetail .wrap h3 {
    display: block;
    background: #fafafa;
    font-size: 120%;
    font-weight: 400;
    padding: 10px;
    margin-bottom: 20px;
    width: calc(100% + 20px);
    margin-left: -10px;
}

.detailRecommend .productDetail .wrap h3 a {
    display: block;
    float: right;
    font-size: 80%;
    display: inline-block;
    vertical-align: middle;
    padding: 4px 20px;
    border-radius: 3px;
    background: <?php echo $dominan_color; ?>;
    box-shadow: inset 0 -3px 0 rgba(0, 0, 0, .08);
    letter-spacing: 1px;
    color: #fff;
}

.detailRecommend .productDetail .wrap h3 a:active {
    box-shadow: none;
}

.detailRecommend .productDetail .wrap table {
    width: 100%;
    display: table;
    margin-top: 0;
}

.detailRecommend .productDetail .wrap table tr td {
    vertical-align: middle;
}
.detailRecommend .productDetail .wrap table tr td:first-of-type {
    width: 20%;
    opacity: .6;
    padding: 5px 0;
}

.detailRecommend .productDetail .wrap table tr td:last-of-type {
    padding-left: 15px;
}

@media only screen and (max-width: 768px) {

    .detailRecommend .productDetail,
    .detailRecommend .productRecommend {
        display: block;
        float: none;
        width: auto;
    }
    .detailRecommend .productRecommend h3 {
        text-align: center;
    }
    .detailRecommend .wrap {
        width:calc(100% + 40px);
        margin-left: -20px;
        margin-top:20px;
        border-radius:0!important;
        padding:0 20px 20px!important;
    }
    .detailRecommend .wrap h3 {
        display: block;
        background: #fff!important;
        border-bottom:1px solid #f2f2f2;
        font-size: 120%;
        font-weight: 400;
        padding: 20px!important;
        margin-bottom: 15px!important;
        width: calc(100% + 40px)!important;
        margin-left: -20px!important;
    }
    .detailRecommend .productRecommend {
        margin-top: 20px;
    }
    .detailRecommend .loop .item_product:last-of-type {
        margin-top: 20px;
    }
}

@media only screen and (max-width: 480px) {
    .detailRecommend .productDetail .wrap table {
        font-size: 85%;
    }
    .detailRecommend .productDetail .wrap table tr td:first-of-type {
        font-size:90%;
        width:100%;
    }
    .detailRecommend .productDetail .wrap table tr td:last-of-type {
        width:50vw;
        font-weight: 500;
        text-align:right;
        display:inline-block;
        overflow:auto;
        white-space:nowrap;
    }
}
.detailRecommend .productUlasan {
    margin-top: 20px;
}

@media only screen and (max-width: 768px) {
    .detailRecommend .productUlasan .ulasanList {
        padding: 0 10px;
    }
}
.detailRecommend .productUlasan .ulasanList .item {
    border-bottom: 1px solid #f6f6f6;
    width: calc(100% + 60px);
    margin-left: -30px;
    padding: 20px;
    display: grid;
    grid-template-columns: 50px 1fr;
    grid-gap: 20px;
    transition: .6s;
}

.detailRecommend .productUlasan .ulasanList .item:last-of-type {
    border-bottom: none;
}

.detailRecommend .productUlasan .ulasanList .item a {
    color:<?php echo $dominan_color; ?>
}
.detailRecommend .productUlasan .ulasanList .item .img_ulasan img {
    display: block;
    height: 50px;
    width: 50px;
    border-radius: 50px;
}

.detailRecommend .productUlasan .ulasanList .item .info_ulasan h5 {
    font-size: 110%;
}

.detailRecommend .productUlasan .ulasanList .item .info_ulasan .rating_view {
    display: block;
    color: #FBBC05;
    margin-bottom: 10px;
}

.detailRecommend .productUlasan .ulasanList .item .info_ulasan .rating_view:before {
    font-family: 'Montserrat', sans-serif;
    font-display: swap;
    display: inline-block;
    vertical-align: middle;
    line-height: 1;
    font-size: 120%;
}

.detailRecommend .productUlasan .ulasanList .item .info_ulasan .rating_view[data-rating="1"]:before {
    content: "\f4b3"" "" "" "" "
}

.detailRecommend .productUlasan .ulasanList .item .info_ulasan .rating_view[data-rating="2"]:before {
    content: "\f4b3 "" \f4b3"" "" "" "
}

.detailRecommend .productUlasan .ulasanList .item .info_ulasan .rating_view[data-rating="3"]:before {
    content: "\f4b3 "" \f4b3 "" \f4b3"" "" "
}

.detailRecommend .productUlasan .ulasanList .item .info_ulasan .rating_view[data-rating="4"]:before {
    content: "\f4b3 "" \f4b3 "" \f4b3 "" \f4b3"" "
}

.detailRecommend .productUlasan .ulasanList .item .info_ulasan .rating_view[data-rating="5"]:before {
    content: "\f4b3 "" \f4b3 "" \f4b3 "" \f4b3 "" \f4b3"
}

.detailRecommend .productUlasan .ulasanList .item .info_ulasan a {
    display:inline-block;
}
.detailRecommend .productUlasan .ulasanList .item .info_ulasan img {
    display: block;
    margin: 20px 0 0;
    border-radius: 3px;
}

.detailRecommend .productUlasan .ulasanList .item .info_ulasan small {
    font-size: 85%;
    opacity: .6;
}
.detailRecommend .productUlasan .ulasanList .item .info_ulasan small a {
    color:#666;
}

.detailRecommend .productUlasan .ulasanList .item.focusHash {
    background: #FFF7E2;
}

form#ulasanProduk>.acf-notice {
    margin: 0 !important;
    position: relative;
}

form#ulasanProduk .acf-input .acf-notice {
    position: relative;
    margin-bottom: 20px;
}

form#ulasanProduk .acf-input .acf-notice:before {
    content: '';
    position: absolute;
    z-index: 1;
    top: 100%;
    left: 0;
    border: 5px solid;
    border-color: currentColor currentColor transparent transparent;
}

form#ulasanProduk .acf-field {
    padding: 20px;
}

form#ulasanProduk input,
form#ulasanProduk textarea {
    display: block;
    border: none;
    padding: 0;
    margin: 0;
}

form#ulasanProduk .acf-label>label,
form#ulasanProduk div[data-name="produk_ulasan"],
form#ulasanProduk div[data-name="_post_title"] {
    display: none;
}

form#ulasanProduk div[data-name="rating_ulasan"] .acf-input ul {
    display: block;
    text-align: center;
}

form#ulasanProduk div[data-name="rating_ulasan"] .acf-input ul>li {
    position: relative;
    display: inline-block;
    color: #FBBC05;
}

form#ulasanProduk div[data-name="rating_ulasan"] .acf-input ul>li>label {
    text-indent: -99;
    display: inline-block;
    overflow: hidden;
    font-size: 0px;
    cursor: pointer;
    padding: 5px;
}

form#ulasanProduk div[data-name="rating_ulasan"] .acf-input ul>li>label:after {
    font-family: 'Montserrat', sans-serif;
    font-display: swap;
    content: '';
    font-size: 20px;
}

form#ulasanProduk div[data-name="rating_ulasan"] .acf-input ul>li.selected~li {
    color: #ccc;
}

form#ulasanProduk div[data-name="rating_ulasan"] .acf-input ul>li>label>input {
    display: none;
}

form#ulasanProduk .acf-form-submit {
    padding: 20px;
    position: relative;
}

form#ulasanProduk .acf-form-submit button {
    border: none;
    display: block;
    text-align: center;
    padding: 10px 20px;
    background: <?php echo $dominan_color; ?>;
    color: #fff;
    width: 100%;
    box-shadow: inset 0 -4px 0 rgba(0, 0, 0, .1);
    border-radius: 3px;
    font-size: 110%;
    font-weight: 500;
    letter-spacing: 1px;
    cursor: pointer;
}

form#ulasanProduk .acf-form-submit button:active {
    box-shadow: none;
}

.detailRecommend .productRelated {
    display: block;
    margin-top: 20px;
}

.detailRecommend .productRecommend .wrap {
    display: block;
    background: #fff;
    box-shadow: 0 1px 0 rgba(0, 0, 0, .06);
    border-radius: 2px;
    overflow: hidden;
    padding: 30px 0 0;
}

.detailRecommend .productRecommend h3 {
    display: block;
    background: #fafafa;
    font-weight: 400;
    padding: 10px;
    margin: 0 20px 20px;
    font-size: 100%;
}

.detailRecommend .productRecommend img {
    width: 100%;
    display: block;
}

#feature {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    border-radius: 4px;
    box-shadow: 0 1px 0 rgba(0, 0, 0, .06);
    overflow: hidden;
}

#feature .item {
    display: grid;
    background: #fff;
    grid-template-columns: auto 1fr;
    grid-gap: 20px;
    padding: 10px 20px;
    border-right: 1px solid rgba(0, 0, 0, .06);
}

#feature .item:last-of-type {
    border-right: none;
}

#feature .item i {
    font-size: 300%;
    display: block;
    padding: 20px;
    color: <?php echo $dominan_color; ?>;
    position: relative;
    top: 0;
    transition: .1s;
}
#feature .item a {
    color:<?php echo $dominan_color; ?>;
}

#feature .item:hover i {
    top: -6px;
    text-shadow: 6px 6px 1px rgba(0, 0, 0, .06);
}

#feature .item .flex {
    display: flex;
}

#feature .item .flexwrap {
    display: block;
    margin: auto;
    margin-left: 0;
    font-size: 80%;
}

#feature .item .flexwrap h3 {
    font-weight: 500;
    display: block;
    border-bottom: 1px solid rgba(0, 0, 0, .06);
    margin-bottom: 5px;
    padding-bottom: 5px;
}

.kategorifeatures {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    border-radius: 4px;
	margin-top: 30px;
    box-shadow: 0 1px 0 rgba(0, 0, 0, .06);
    overflow: hidden;
}

.kategorifeatures .item {
    display: grid;
    background: #fff;
    grid-template-columns: auto 1fr;
    grid-gap: 20px;
    padding: 30px;
    border-right: 1px solid rgba(0, 0, 0, .06);
}

.kategorifeatures .item:last-of-type {
    border-right: none;
}
.kategorifeatures .item a {
    color:<?php echo $dominan_color; ?>;
}

.kategorifeatures .item .flex {
    display: flex;
}

.kategorifeatures .item .flexwrap {
    display: block;
    margin: auto;
    margin-left: 0;
    font-size: 80%;
}

.kategorifeatures .item .flexwrap h3 {
    font-weight: 500;
    display: block;
    border-bottom: 1px solid rgba(0, 0, 0, .06);
	text-align:center;
    margin-bottom: 5px;
    padding-bottom: 5px;
}
@media only screen and (max-width: 768px) {
    #feature {
        font-size: 90%;
        max-width: calc(100% + 40px);
        padding: 0 20px;
        margin-left: -20px;
        margin-right: -20px;
        padding-right: 20px;
        overflow-x: auto;
        grid-gap: 10px;
        box-shadow: none;
        padding-bottom: 1px;
        grid-template-columns: repeat(4, auto);
    }
    #feature:after {
        display: block;
        content: ' ';
        width: 10px;
    }
    #feature .item .flexwrap h3 {
        padding-bottom: 0;
        margin-bottom: 0;
        border: none;
    }
    #feature .item {
        padding: 15px 20px;
        grid-gap: 10px;
        width: 80vw;
        border-radius: 4px;
        border: none;
        box-shadow: 0 1px 0 rgba(0, 0, 0, .06);
    }
    #feature .item i {
        padding:0 10px 0 0;
        font-size: 250%;
    }

//kategorifeatures

   .kategorifeatures {
        font-size: 90%;
        max-width: calc(100% + 40px);
        padding: 0 20px;
        margin-left: -20px;
        margin-right: -20px;
        padding-right: 20px;
        overflow-x: auto;
        grid-gap: 10px;
        box-shadow: none;
        padding-bottom: 1px;
       grid-template-columns: repeat(1, 1fr);
    }
    .kategorifeatures:after {
        display: block;
        content: ' ';
        width: 10px;
    }
    .kategorifeatures .item .flexwrap h3 {
        padding-bottom: 0;
        margin-bottom: 0;
        border: none;
    }
.kategorifeatures{
 grid-template-columns: repeat(1, 1fr) !important;
}
    .kategorifeatures .item {
        padding: 15px 20px;
        grid-gap: 10px;
        width: 80vw;
        border-radius: 4px;
        border: none;
        box-shadow: 0 1px 0 rgba(0, 0, 0, .06);
    }
    .kategorifeatures .item i {
        padding:0 10px 0 0;
        font-size: 250%;
    }
}
#footer {
    box-shadow: 0 -1px 0 rgba(0, 0, 0, .06);
    padding: 20px 0 40px;
    background: #000;
    color: #FFF;
    font-size: 90%;
}
#footer .item_ulasan {
    font-size:110%;
}

#footer a {
    font-weight: 500;
  color: #FFF;
}

#footer .footerGrid {
    display: grid;
    grid-template-columns: 2fr .5fr 1fr 1fr 1fr;
    grid-gap: 40px;
    padding: 20px 0;
}

@media only screen and (max-width: 1068px) {
    #footer .footerGrid {
        grid-template-columns: 1fr 1fr;
        grid-row-gap: 40px;
        text-align: center;
    }
}

@media only screen and (max-width: 768px) {
    #footer .footerGrid {
        grid-template-columns: 1fr;
        grid-gap: 0;
        grid-row-gap: 40px;
        text-align: center;
    }
}

#footer .footerGrid>* {
    display: block;
    overflow: hidden;
}

#footer .footerGrid>*:nth-last-child(2) {
    text-align: left;
}
#footer .footerGrid>*:last-of-type {
    text-align: center;
}

#footer .footerGrid>*>ul,
#footer .footerGrid>*>ul li,
#footer .footerGrid>*>ul li a {
    display: block;
}

#footer .footerGrid>*>ul li a {
    margin-bottom: 5px;
}

#footer .footerGrid>*>h3 {
    font-weight: 400;
    letter-spacing: 1px;
    margin-bottom: 30px;
    color: #FFF;
    font-size:110%;
}

#footer .footerGrid>*>ul.payShipIcon {
    display:grid;
    grid-template-columns: repeat(4, 1fr);
    grid-gap: 5px;
    max-width: 80%;
    margin: auto;
}

#footer .footerGrid>*>ul.payShipIcon li {
    display: block;
    padding-top:55%;
    width: 100%;
    border: 1px solid rgba(0, 0, 0, .06);
    background-color: #fff;
    border-radius: 2px;
    background-position: center center;
    background-size: 70% auto;
    background-repeat: no-repeat;
}

#footer .footerGrid .item.custom .tanyaWA {
    display: block;
    margin: auto;
    max-width: 80%;
    border: 1px solid rgba(0, 0, 0, .06);
    padding: 10px;
    color: #FFF;
    border-radius: 3px;
    box-shadow: 0 1px 0 rgba(0, 0, 0, .06);
}

#footer .footerGrid .item.custom .tanyaWA:active {
    box-shadow: none;
}

#footer .footerGrid .item.custom .tanyaWA i {
    color: #0CC243;
}

#footer .footerGrid .item.custom small {
    opacity: .8;
}

#footer .footerGrid .item.custom a {
    font-weight: 400;
}

#footer .footerGrid .item.custom a.youtube i {
    color: #ff0000;
}

#footer .footerGrid .item.custom a.youtube {
    color: #969696;
}

#footer .footerGrid .item.custom a.instagram {
    color: #BA4893;
}

#footer .footerGrid .item.custom a.facebook {
    color: #4267B2;
}

#footer .footerGrid .item.custom a.twitter {
    color: #00ABF0;
}

#livesales .item_livesales {
    position: fixed !important;
    position: relative;
    z-index: 9999;
    left: 20px;
    bottom: 20px;
    font-size: 100px;
    transition: .5s ease-out;
    transform: translate(-100%, 100%);
    opacity: 0;
    visibility: hidden;
    width: 380px;
    overflow: hidden;
    display: grid;
    grid-template-columns: auto 1fr;
    font-size: 80%;
    background: rgba(255, 255, 255, .95);
    color: #969696;
    box-shadow: 0 5px 15px rgba(0, 0, 0, .1);
    border-radius: 3px;
}

.item-local{
	margin-bottom:5px;
}

@media only screen and (max-width: 768px) {
    #livesales .item_livesales {
        bottom: 60px;
        right: 15px;
    }
#footer .footerGrid>*:nth-last-child(2){
text-align:center;
}
}

@media only screen and (max-width: 480px) {
    #livesales .item_livesales {
        left: 0;
        bottom: 45px;
        right: 0;
        width: 100%;
        border-radius: 0;
        box-shadow: 0 -5px 15px rgba(0, 0, 0, .1);
        transform: translate(0, 100%);
    }
}

#livesales .item_livesales.active {
    transform: translate(0%, 0%);
    opacity: 1;
    visibility: visible;
}

#livesales .item_livesales .img {
    cursor: pointer;
    display: block;
    background: #eee no-repeat center center;
    width: 120px;
    height: 120px;
    background-size: cover;
}

#livesales .item_livesales .closelivesales {
    cursor: pointer;
    position: absolute;
    top: 0px;
    right: 0px;
    display: block;
    width: 35px;
    height: 35px;
    line-height: 28px;
    font-size: 140%;
    text-align: right;
    padding-right: 8px;
    border-left: 1px solid #f6f6f6;
    border-bottom: 1px solid #f6f6f6;
    border-radius: 0 0 0 35px;
    -webkit-user-select: none;
    /* Safari 3.1+ */
    -moz-user-select: none;
    /* Firefox 2+ */
    -ms-user-select: none;
    /* IE 10+ */
    user-select: none;
    /* Standard syntax */
    color: <?php echo $dominan_color; ?>;
}

#livesales .item_livesales .closelivesales:active {
    color: #fff;
    background: <?php echo $dominan_color; ?>;
}

#livesales .item_livesales .wrap {
    padding: 10px 20px;
    display: flex;
}

#livesales .item_livesales .wrap .detail {
    display: block;
    margin: auto;
    line-height: 1.4;
}

#livesales .item_livesales .wrap .detail:before {
    content: '';
    display: block;
    height: 10px;
    width: 20px;
    float: right;
}

#livesales .item_livesales .wrap .detail b {
    color: #666;
}

#livesales .item_livesales .wrap .detail a {
    color: <?php echo $dominan_color; ?>;
}

#livesales .item_livesales .wrap .detail small {
    display: block;
    margin-top: 5px;
    padding-top: 10px;
    border-top: 1px solid #f6f6f6;
}

#livesales .item_livesales .wrap .detail small a {
    color: #969696;
    float: right;
    display: inline-block;
    vertical-align: middle;
    border-left: 1px solid #f6f6f6;
    padding-left: 10px;
}

#livesales .item_livesales .wrap .detail small i {
    font-size: 160%;
    color: <?php echo $dominan_color; ?>;
}

.poptamv {
    font-size: 14px;
    line-height: 1.6;
}

.poptamv b,
.poptamv strong {
    font-weight: 500;
}

.poptamv {
    display: flex !important;
    position: relative;
    position: fixed !important;
    z-index: 99999;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow-y: auto;
    padding: 10px 0;
    visibility: hidden;
    opacity: 0;
}

.poptamv.open {
    visibility: visible;
    opacity: 1;
    transition: .2s;
}

.poptamv a {
    text-decoration: none;
}

.poptamv .wrap {
    display: block;
    margin: auto auto;
    width: calc(100% - 20px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, .1);
    max-width: 500px;
}

.poptamv .wrap .titletamv {
    display: grid;
    width: 100%;
    grid-template-columns: 1fr auto;
    grid-column-gap: 10px;
    margin: 0;
    height: 60px;
    line-height: 60px;
    border-bottom: 1px solid rgba(0, 0, 0, .06);
    font-size: 14px;
    background: #fff;
    font-weight: 400;
    border-radius: 4px 4px 0 0;
}

.poptamv .wrap .titletamv span.titletamv-content {
    padding: 0 20px;
    display: block;
    vertical-align: middle;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    color: #444;
    font-size: 110%;
}

@media only screen and (max-width: 1023px) {
    .poptamv .wrap .titletamv span.titletamv-content {
        font-size: 100%;
    }
}

.poptamv .wrap .titletamv span.titletamv-content i {
    color: <?php echo $dominan_color; ?>;
    font-size: 160%;
    display: inline-block;
    vertical-align: middle;
    margin-right: 10px;
}

.poptamv .wrap .titletamv .closeTamv {
    display: block;
    color: #aaa;
    padding: 0 20px;
    cursor: pointer;
    font-size: 30px;
    font-weight: 300;
    transition: .2s;
}

.poptamv .wrap .titletamv .closeTamv:hover {
    color: #444;
}

.poptamv .wrap .titletamv .closeTamv:before {
    content: '';
    cursor: default;
    display: block;
    position: fixed;
    z-index: -2;
    top: 0;
    left: 0;
    width: 100%;
    height: calc(100% + 100px);
    background: rgba(0, 0, 0, .2);
    visibility: hidden;
    opacity: 0;
}

.poptamv.open .wrap .titletamv .closeTamv:before {
    visibility: visible;
    opacity: 1;
    transition: .4s;
}

.poptamv .wrap .content {
    display: block;
    /*overflow-y: auto;*/
    /*max-height: calc(100vh - 80px);*/
    background: #fff;
    border-radius: 0 0 4px 4px;
}

.poptamv .wrap .content .productlivesalesGrid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-gap: 10px;
}

.poptamv .poptamv-wrap {
    padding: 20px;
}

/* ----------------

FORMTAMV

------------------- */

.grid-wa {
    display: grid;
    grid-gap: 10px;
}

.grid-wa.col2 {
    grid-template-columns: 1fr 1fr;
}

.grid-wa.col3 {
    grid-template-columns: 1fr 1fr 1fr;
}

.grid-wa.col4 {
    grid-template-columns: 1fr 1fr 1fr 1fr;
}

.grid-wa.col2-submit {
    grid-template-columns: 1fr auto;
}

.grid-wa.install-btn {
    grid-template-columns: 2fr 1fr;
}

@media only screen and (max-width: 1023px) {
    .formtamv .grid-wa.col2 {
        grid-template-columns: 1fr 1fr !important;
    }
}

@media only screen and (max-width: 320px) {
    .formtamv .grid-wa.col2 {
        grid-template-columns: 1fr !important;
    }
}

.formtamv * {
    outline: none;
    text-decoration: none;
}

@media only screen and (max-width: 1023px) {
    .formtamv * {
        font-size: 12px;
    }
}

.formtamv br {
    margin: 0;
    padding: 0;
    line-height: 0;
}

.formtamv .focus {
    box-shadow: inset 0 -1px 0 0 #FBBC05 !important;
}


.formtamv label {
    position: relative;
    display: block;
    width: 100%;
    margin: 0;
    padding: 0;
}

.formtamv label>input,
.formtamv label>select,
.formtamv label>textarea {
    position: relative;
    z-index: 1;
    border: none;
    box-shadow: inset 0 -1px 0 0 rgba(0, 0, 0, .08);
    padding: 10px 15px;
    width: 100%;
    padding-left: 40px;
    background: transparent;
    color: #666;
}

.formtamv label>input:focus,
.formtamv label>select:focus,
.formtamv label>textarea:focus {
    box-shadow: inset 0 -1px 0 0 <?php echo $dominan_color; ?>;
}


.formtamv label>input::placeholder,
.formtamv label>input:-ms-input-placeholder,
.formtamv label>input::-ms-input-placeholder {
    /* Microsoft Edge */
    color: #969696;
    opacity: 1;
    /* Firefox */
}

.formtamv label>textarea::placeholder,
.formtamv label>textarea:-ms-input-placeholder,
.formtamv label>textarea::-ms-input-placeholder {
    /* Microsoft Edge */
    color: #969696;
    opacity: 1;
    /* Firefox */
}

.formtamv label>i {
    position: absolute;
    z-index: 0;
    display: inline-block;
    vertical-align: top;
    width: 40px;
    text-align: center;
    font-size: 20px;
    height: auto;
    background: transparent;
    box-shadow: none;
    top: 9px;
    left: 0;
    color: rgba(0, 0, 0, .2);
}

@media only screen and (max-width: 768px) {

    .formtamv label>i {
        position: absolute;
        z-index: 0;
        display: inline-block;
        vertical-align: top;
        width: 40px;
        text-align: center;
        font-size: 20px;
        height: auto;
        background: transparent;
        box-shadow: none;
        top: 7px;
        left: 0;
        color: rgba(0, 0, 0, .2);
    }
}

.formtamv label small {
    position: relative;
    display: block;
    margin-top: 10px;
    z-index: 3;
}

.formtamv label small>a.tooltip {
    margin-left: 10px;
    font-size: 20px;
    vertical-align: middle;
    display: inline-block;
    color: rgba(0, 0, 0, .4);
}

.formtamv label small>a.tooltip:hover {
    color: rgba(0, 0, 0, .6);
}

.formtamv label small a {
    font-weight: 500;
}

.formtamv select::-ms-expand {
    display: none;
}

.formtamv select {
    -webkit-appearance: none;
    -moz-appearance: none;
    -webkit-appearance: none;
    appearance: none;
    text-align: right;
}

.formtamv select option {
    font-size: 18px;
    background: #fafafa;
    color: rgba(0, 0, 0, 0.7);
    text-shadow: none;
    text-align: left;
}

.formtamv .nomor_whatsapp[type=number]::-webkit-outer-spin-button,
.formtamv .nomor_whatsapp[type=number]::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

.nomor_whatsapp[type=number] {
    -moz-appearance: textfield;
}

.formtamv label>*:focus {
    background: transparent;
}

.formtamv label textarea {
    min-height: 40px;
    resize: vertical;
    margin-bottom: 0;
}

.formtamv label .validasi {
    position: relative;
    position: absolute !important;
    z-index: 2;
    top: calc(100% + 20px);
    left: 0;
    background: #FBBC05;
    color: rgba(0, 0, 0, .6);
    padding: 5px 10px;
    border-radius: 3px;
    font-size: 80%;
    box-shadow: 0 5px 10px rgba(0, 0, 0, .08);
    transition: .4s;
    visibility: hidden;
    opacity: 0;
    display: inline-block !important;
}

.formtamv label .validasi.show {
    visibility: visible;
    opacity: 1;
    top: calc(100% + 10px);
}

.formtamv label .validasi:after {
    position: absolute;
    bottom: 100%;
    left: 12px;
    content: '';
    border: 8px solid;
    border-color: transparent transparent #FBBC05 transparent;
}
.formtamv .note {
    display: block;
    font-size: 90%;
    background: #ffedba;
    color: rgba(0,0,0,.8);
    padding: 10px 20px;
    border: 1px solid rgba(0,0,0,.1);
    border-radius: 4px;
}
.formtamv .submit {
    display: block;
    text-align: center;
    border: none;
    width: 100%;
    display: block;
    background: <?php echo $dominan_color; ?>;
    color: #fff;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 2px;
    font-weight: 500;
    font-size: 105%;
    letter-spacing: 1px;
    box-shadow: inset 0 -3px 0 0 rgba(0, 0, 0, .08);
}

.formtamv .submit.s2 {
    background: transparent;
    color: <?php echo $dominan_color; ?>;
    display: inline-block;
    padding: 2px 10px;
    font-size: 140%;
    box-shadow: none;
}

.formtamv .submit i {
    display: inline-block;
    vertical-align: middle;
    font-size: 140%;
    margin: 0 10px;
}

.formtamv .submit:active {
    box-shadow: inset 0 -60px 0 0 rgba(0, 0, 0, .08);
}

.notifFix {
    font-family: "Montserrat", sans-serif;
    position: relative;
    position: fixed !important;
    z-index: 999;
    bottom: 20px;
    left: 20px;
}

.notifFix i.wa {
    position: relative;
    display: block;
    width: 60px;
    height: 60px;
    line-height: 60px;
    text-align: center;
    background: #fff;
    color: <?php echo $dominan_color; ?>;
    border-radius: 60px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, .08);
    font-size: 30px;
}

.notifFix:active i.wa {
    box-shadow: none;
}

.notifFix span.count {
    position: absolute;
    display: inline-block;
    top: 0px;
    right: 0px;
    background: #FBBC05;
    color: rgba(0, 0, 0, .8);
    height: 15px;
    line-height: 15px;
    width: 15px;
    border-radius: 15px;
    font-style: normal;
    font-weight: 600;
    box-shadow: inset 0 -3px 0 rgba(0, 0, 0, .08);
    transform: scale(0.0);
}

.notifFix.show span.count {
    transform: scale(1.1);
    transition: .2s;
}

.waFix {
    font-family: "Montserrat", sans-serif;
    position: relative;
    position: fixed !important;
    z-index: 999;
    bottom: 20px;
}

.waFix.kiri {
    left: 20px;
}

.waFix.kanan {
    right: 20px;
}

.waFix i.wa {
    position: relative;
    display: block;
    width: 60px;
    height: 60px;
    line-height: 60px;
    text-align: center;
    background: #fff;
    color: <?php echo $dominan_color; ?>;
    border-radius: 60px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, .08);
    font-size: 30px;
}

.waFix:active i.wa {
    box-shadow: none;
}

.waFix span.count {
    position: absolute;
    display: inline-block;
    top: 0px;
    right: 0px;
    background: #FBBC05;
    color: rgba(0, 0, 0, .8);
    height: 15px;
    line-height: 15px;
    width: 15px;
    border-radius: 15px;
    font-style: normal;
    font-weight: 600;
    box-shadow: inset 0 -3px 0 rgba(0, 0, 0, .08);
    transform: scale(0.0);
}

.waFix.show span.count {
    transform: scale(1.1);
    transition: .2s;
}

.waFix span.info {
    display: inline-block;
    white-space: nowrap;
    border-radius: 4px;
    background: #fff;
    height: 40px;
    line-height: 40px;
    padding: 0 15px;
    text-align: center;
    position: relative;
    position: absolute !important;
    box-shadow: 0 5px 15px rgba(0, 0, 0, .08);
    bottom: 8px;
    color: rgba(0, 0, 0, .6);
    opacity: 0;
    visibility: hidden;
}

.waFix.show span.info {
    opacity: 1;
    visibility: visible;
    transition: 1s;
}

.waFix.kiri span.info {
    left: calc(100% + 45px);
}

.waFix.kiri.show span.info {
    left: calc(100% + 15px);
}

.waFix.kanan span.info {
    right: calc(100% + 45px);
}

.waFix.kanan.show span.info {
    right: calc(100% + 15px);
}

.waFix span.info:after {
    position: absolute;
    top: calc(50% - 8px);
    content: "";
    border: 8px solid;
}

.waFix.kiri span.info:after {
    right: 100%;
    border-color: transparent #fff transparent transparent;
}

.waFix.kanan span.info:after {
    left: 100%;
    border-color: transparent transparent transparent #fff;
}

@media only screen and (max-width: 768px) {
    .waFix { display:none; }
}
.waFix span.info i {
    display: inline-block;
    font-size: 140%;
    margin-right: 5px;
    vertical-align: middle;
    color: #4FC3F7;
}

.fixBtn { display:none; }
@media only screen and (max-width: 768px) {
    .fixBtn {
        display: block;
        box-shadow: 0 -1px 0 0 rgba(0,0,0,.06);
        z-index: 999;
        background: #fff;
        position: fixed;
        z-index:10000;
        bottom: 0;
        left: 0;
        width: 100%;
        display: grid;
        grid-template-columns: repeat(4,1fr);
        text-align: center;
    }
    .fixBtn a {
        display: block;
        text-align: center;
        height: 45px;
        line-height: 45px;
    }
    .fixBtn a i {
        display:inline-block;
        position: relative;
    }
    .fixBtn a i span {
        display: block;
        position: absolute;
        top: 2px;
        right: 2px;
        background: #FBBC05;
        width: 10px;
        height: 10px;
        border-radius: 10px;
    }
}