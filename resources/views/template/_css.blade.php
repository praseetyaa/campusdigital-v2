<style type="text/css">
:root{ 
	--primary: #46157a;
	--primary-s: #e1c7fd;
	--primary-ss: #F2E9FB;
	--secondary: #fdd100; 
	--secondary-s: #FFF6C8;
	--shadow: 0 .125rem .25rem rgba(0,0,0,.075);
	--transition: .25s ease;
	--red: #DC3545;
	--red-s: #FAE3E5;
	--green: #28A745;
	--green-s: #CBF2D4;
	--blue: #17A2B8;
	--blue-s: #D9F6FA;
	--yellow: #ffc107;
	--yellow-s: #FFFBED;
}
html, body {}
html{scroll-behavior: smooth;}
p {font-size: 1rem;}
.btn-link-primary {color: #46157a;}
.btn-link-primary:hover {color: #46157a; text-decoration: underline;}
.btn-link-secondary {color: #fdd100;}
.btn-link-secondary:hover {color: #fdd100; text-decoration: underline;}
.site-btn {color: #fff; background-color: #46157a; border: 2px solid #46157a; transition: .2s ease}
.site-btn:hover {color: #46157a; background-color: transparent;}
.icon-box-item .ib-icon {color: #46157a; border-color: #46157a;}
.icon-box-item:hover .ib-icon {color: #fdd100; background-color: #46157a;}
.sb-whatsapp {color: #333; background-color: #25D366; border-color: #25D366;}
.sb-whatsapp:hover {color: #25D366; background-color: transparent;}
.transition{transition: var(--transition);}
.card{border-radius: .5rem!important;}
.card .card-img-top{border-radius: .5rem .5rem 0 0!important;}
.card .card-footer{border-radius: 0 0 .5rem .5rem!important;}

.pagination{box-shadow: var(--shadow);}
.page-link,
.page-item.disabled .page-link,
.page-item.active .page-link{border: unset;}

.navbar-light .navbar-nav .nav-item {margin-left: .3rem; margin-right: .3rem;}
.navbar-light .navbar-nav .nav-link {color: #333; font-size: 17px; font-weight: 600;}
.navbar-light .navbar-nav .nav-link:hover {color: #46157a;}
.navbar-light .navbar-nav .active > .nav-link {color: #46157a;}
.collapse.show{height: calc(100vh - 5rem)!important; overflow-y: auto;}
.btn-navbar {font-size: 17px; font-weight: 600; margin-left: .5rem; margin-right: .5rem;}
.btn-login {background-color: #46157a; border: 2px solid #46157a; color: #fff; padding: 1rem; border-radius: 0;}
.btn-login:hover {background-color: transparent; color: #46157a;}
.btn-register {background-color: #fdd100; border: 2px solid #fdd100; color: #46157a; font-weight: 600; padding: 1rem; border-radius: 0;}
.btn-register:hover {background-color: transparent; color: #46157a;}
.btn-register-2 {font-size: 1rem; text-transform: uppercase; font-weight: 600; background-color: #fdd100; border: 2px solid #fdd100; color: #46157a; padding: 1rem 2rem; border-radius: 0; transition: .2s ease;}
.btn-register-2:hover {background-color: transparent; color: #fdd100;}
.navbar-light .navbar-toggler {background-color: transparent; border-width: 2px; border-color: transparent; color: var(--dark); font-size: 1.5rem;}
.navbar-light .navbar-toggler:hover {background-color: transparent; color: var(--dark); border-color: var(--primary-s);}
.navbar-light .navbar-brand img{height: 60px;}
.map .shadow{box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;}
.map iframe{height: 200px;}
/*.page-top-section {border-top: 5px solid #fdd100!important;}*/

.footer-section {background-color: #46157a;}
.footer-widget ul li {margin-bottom: 5px;}

/* edited by isna prasetyo */

/*theme*/
.btn-theme-1{background-color: #46157a; color: #ffffff; border: 2px solid #46157a}
.btn-theme-1:hover{color: #46157a!important; background-color: #ffffff!important; border: 2px solid #46157a!important}
.btn-theme-1-1{background-color: #46157a; color: #ffffff;}
.btn-theme-1-1:hover{color: #ffffff; background-color: #2c0a50;}
.btn-theme-2{background-color: #fdd100; color: #46157a; border: 2px solid #fdd100}
.btn-theme-2:hover{color: #fdd100!important; background-color: #ffffff!important; border: 2px solid #fdd100!important}
.color-theme-1{color: #46157a;}

.btn-s{background-color: var(--primary-s); color: var(--primary); border: 1px solid var(--primary-s);}
.btn-s:hover{color: var(--white); background-color: var(--primary); border: 1px solid var(--primary);}

.bg-theme-1{background-color: #46157a;}
.bg-theme-2{background-color: #fdd100;}

.border-theme-1{border-color: #46157a;}
.border-theme-2{border-color: #fdd100;}

/* style own */
.rounded-15{border-radius: .5rem!important}
.rounded-1{border-radius: 1em!important}
.rounded-2{border-radius: 2em!important}
.rounded-3{border-radius: 3em!important}
.rounded-4{border-radius: 4em!important}
.rounded-5{border-radius: 5em!important}

/*.navbar{border-bottom: 3px solid #fdd100}*/
.navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .show>.nav-link {color: #46157a;}
.feature-section .owl-item{margin-top: 1em; margin-bottom: 1em; padding: 4em 0 1em 0;}
.mitra-section .owl-item{margin-top:.2em; margin-bottom: .2em; padding: 4em 0 1em 0;}

.btn-link-primary:hover{color: #46157a; text-decoration: none;}

/*beasiswa*/
.page-top-section {
    height: auto;
    padding: 3em 0em;
    margin-top: 5em;
}
.account.dropdown-toggle:after{display: none;}
.dropdown-item.active, .dropdown-item:active {text-decoration: none; color: #fff; background: #46157a}
.dropdown-menu{border: unset; box-shadow: var(--shadow); border-radius: .5rem;}
.dropdown-item{padding: .75rem 1.5rem;}
.owl-carousel .owl-item img{margin: auto; width: 80%}
.sticky-sidebar{position: sticky; top: 6em; height: fit-content}
.package .list-group-item{background: unset; border: unset;}
/*----------------------------------------------------------*/
.custom-shape-divider-bottom-1619236286 {bottom: 0;  left: 0;  width: 100%;  overflow: hidden;  line-height: 0;  transform: rotate(180deg);}
.custom-shape-divider-bottom-1619236286 svg {position: relative; display: block; width: calc(100% + 1.3px); height: 100px;}
.custom-shape-divider-bottom-1619236286 .shape-fill {fill: var(--light)}
/*--------------------------------------------------------*/
.custom-shape-divider-top-1615970510 {
position: absolute;
left: 0;
width: 100%;
overflow: hidden;
line-height: 0;
transform: rotate(180deg);
}

.custom-shape-divider-top-1615970510 svg {
position: relative;
display: block;
width: calc(100% + 1.3px);
height: 89px;
}

.custom-shape-divider-top-1615970510 .shape-fill {
fill: #FFFFFF;
box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
}

/*----------------------------------------------------*/
.custom-shape-divider-bottom-1615971570 {
position: absolute;
left: 0;
width: 100%;
overflow: hidden;
line-height: 0;
transform: rotate(0deg);
}

.custom-shape-divider-bottom-1615971570 svg {
position: relative;
display: block;
width: calc(100% + 1.3px);
height: 89px;
}

.custom-shape-divider-bottom-1615971570 .shape-fill {
fill: #FDD100;
}
/*--------------------------------------------------*/
.custom-shape-divider-top-1616034455 {
position: absolute;
left: 0;
width: 100%;
overflow: hidden;
line-height: 0;
}

.custom-shape-divider-top-1616034455 svg {
position: relative;
display: block;
width: calc(100% + 1.3px);
height: 150px;
}

.custom-shape-divider-top-1616034455 .shape-fill {
fill: #FDD100;
}
/*----------------------------------------------------*/
.custom-shape-divider-bottom-1616034763 {
position: absolute;
left: 0;
width: 100%;
overflow: hidden;
line-height: 0;
}

.custom-shape-divider-bottom-1616034763 svg {
position: relative;
display: block;
width: calc(100% + 1.3px);
height: 150px;
}

.custom-shape-divider-bottom-1616034763 .shape-fill {
fill: #FFF;
}
[v-cloak] { display: none; }
.img-header{max-width: 400px;}
@media (max-width: 767.98px) {
	.img-header{max-width: 100%;}
	.navbar-light .navbar-brand img{height: 40px;}
}
@media (max-width: 991.98px){
	h1{font-size: 40px;}
    .icon-box-item .ib-icon {width: 76px; margin: 0 auto;}
    .icon-box-item:hover .ib-icon{color: #340369; background-color: transparent;}
    .ib-text{text-align: center}
    .owl-carousel .owl-item img{margin: auto; width: 60%}
    .account.dropdown-toggle:after{display: inline-block;}
    .sticky-sidebar{position: unset; top: unset; height: unset;}
}
@keyframes fab{
    0% {transform: scale(1);}
    25% {transform: scale(1);}
    50% {transform: scale(.9);}
    75% {transform: scale(1);}
    100% {transform: scale(1);}
}
</style>
<!-- <style type="text/css">
.hero-section {border-top: none!important;}
.page-top-section{border-top: none!important}
</style> -->