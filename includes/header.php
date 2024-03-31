<body>


    <!--[if lte IE 9]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->



    <!--********************************
   		Code Start From Here 
	******************************** -->




    <!--==============================
     Preloader
  ==============================-->
    <div class="preloader  ">
        <button class="vs-btn mask-style1 preloaderCls">Cancelar Carregamento </button>
        <div class="preloader-inner">
            <div class="loader-logo">
                <img src="assets/img/logo-white.svg" alt="Loader Image">
            </div>
            <div class="loader-wrap pt-4">
                <span class="loader"></span>
            </div>
        </div>
    </div>
    <!--========================
    Sticky Header
========================-->
    <div class="sticky-header-wrap sticky-header py-1 py-sm-2 py-lg-1">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-5 col-md-3">
                    <div class="logo">
                        <a href="index.html"><img src="assets/img/logo.svg" alt="logo"></a>
                    </div>
                </div>
                <div class="col-7 col-md-9 text-right position-static">
                    <nav class="main-menu menu-sticky1 d-none d-lg-block link-inherit">
                        <?php include('includes/menu.php')?>
                    </nav>
                    <button class="vs-menu-toggle text-theme border-theme d-inline-block d-lg-none"><i class="far fa-bars"></i></button>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
    Mobile Menu
  ============================== -->
    <div class="vs-menu-wrapper">
        <div class="vs-menu-area">
            <button class="vs-menu-toggle text-theme"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="index.html"><img src="assets/img/logo.svg" alt="logo"></a>
            </div>
            <div class="vs-mobile-menu link-inherit"></div><!-- Menu Will Append With Javascript -->
        </div>
    </div>
    <!--==============================
        Header Area
    ==============================-->
    <header class="header-wrapper header-layout4 position-absolute px-lg-100 ">
        <div class="container-fluid position-relative py-15 py-lg-20">
            <div class="row align-items-center">
                <div class="col-6 col-lg-2">
                    <div class="header-logo">
                        <a href="index.html"><img src="assets/img/logo-white.svg" class="d-none d-lg-block" alt="Grillino - Food Restaurant Cafe Grill & Bistro HTML Template"></a>
                        <a href="index.html"><img src="assets/img/logo.svg" class="d-block d-lg-none" alt="Grillino - Food Restaurant Cafe Grill & Bistro HTML Template"></a>
                    </div>
                </div>
                <div class="col-6 col-lg-6 col-xl-5 position-static">
                    <nav class="main-menu menu-style3 link-inherit text-right text-xl-left mobile-menu-active dark-style">
                        <?php include('includes/menu.php')?>
                    </nav>
                    <button type="button" class="vs-menu-toggle ml-auto d-block text-theme border-theme d-lg-none"><i class="far fa-bars"></i></button>
                </div>
                <div class="col-lg-4 col-xl-5 dark-style">
                    <div class="header-right d-none d-lg-flex align-items-center justify-content-end">
                        <div class="contact-info pl-0 media align-items-center d-none d-xl-flex">
                            <div class="media-icon mr-15 pl-30" data-overlay="theme" data-opacity="1">
                                <i class="fal fa-clock text-theme fa-2x"></i>
                            </div>
                            <div class="media-body">
                                <span class="d-block mb-1">Telefone de contato</span>
                                <p class="mb-0 h4 text-font1"><a href="tel:+5567991757863">+55 67 991757863</a></p>
                            </div>
                        </div>
                        <div class="header-btn pl-xl-50">
                            <a href="#" class="vs-btn mask-style1">Area do Cliente</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>