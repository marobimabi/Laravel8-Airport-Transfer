
<style>
    /************/
    /**** General CSS *****/
    /************/
    body {
        color: #353535;
        font-family: 'Open Sans', sans-serif;
        font-weight: 400;
        background: #f3f6ff;
    }

    a {
        color: orangered;
    }

    a:hover,
    a:active,
    a:focus {
        color: #353535;
        outline: none;
        text-decoration: none;
    }

    h1 {
        font-family: 'Source Code Pro', monospace;
        font-weight: 900;
    }

    h2 {
        font-family: 'Source Code Pro', monospace;
        font-weight: 700;
    }

    @media(min-width: 992px) {
        .container-fluid {
            padding-right: 60px;
            padding-left: 60px;
        }
    }


    /************/
    /*** Back to Top CSS ****/
    /************/
    .back-to-top {
        position: fixed;
        display: none;
        background: orangered;
        color: #ffffff;
        width: 40px;
        height: 40px;
        text-align: center;
        line-height: 1;
        font-size: 16px;
        border-radius: 4px;
        right: 15px;
        bottom: 15px;
        transition: background 0.5s;
        z-index: 11;
    }

    .back-to-top i {
        padding-top: 12px;
        color: #ffffff;
    }


    /************/
    /*** Form Input CSS ***/
    /************/
    .form-control,
    .custom-select {
        width: 100%;
        height: 35px;
        padding: 0 15px;
        color: #999999;
        border: 1px solid #dddddd;
        margin-bottom: 15px
    }

    .form-control:focus,
    .custom-select:focus {
        box-shadow: none;
        border-color: orangered;
    }

    .custom-radio,
    .custom-checkbox {
        margin-bottom: 15px;
    }

    .custom-radio .custom-control-label::before,
    .custom-checkbox .custom-control-label::before {
        background: #dddddd;
        border-color: #dddddd;
    }

    .custom-radio .custom-control-input:checked~.custom-control-label::before,
    .custom-checkbox .custom-control-input:checked~.custom-control-label::before {
        color: #ffffff;
        background: orangered;
        border-color: orangered;
        box-shadow: none;
    }

    .btn {
        color: orangered;
        background: #ffffff;
        border: 1px solid orangered;
    }

    .btn:hover,
    .btn:active,
    .btn:focus {
        color: #ffffff;
        background: orangered;
        box-shadow: none;
    }


    /************/
    /*** Normal Slider CSS ****/
    /************/
    .normal-slider .slick-prev,
    .normal-slider .slick-next {
        width: 40px;
        height: 40px;
        z-index: 1;
        opacity: 0;
        transition: .5s;
        background: rgba(255, 111, 97, .7);
        border-radius: 4px;
    }

    .normal-slider .slick-prev {
        left: 55px;
    }

    .normal-slider .slick-next {
        right: 55px;
    }

    .normal-slider.slick-slider:hover .slick-prev {
        left: 15px;
        opacity: 1;
    }

    .normal-slider.slick-slider:hover .slick-next {
        right: 15px;
        opacity: 1;
    }

    .normal-slider .slick-prev:hover,
    .normal-slider .slick-prev:focus,
    .normal-slider .slick-next:hover,
    .normal-slider .slick-next:focus {
        background: rgba(0, 0, 0, .7);
    }

    .normal-slider .slick-prev:hover::before,
    .normal-slider .slick-prev:focus::before,
    .normal-slider .slick-next:hover::before,
    .normal-slider .slick-next:focus::before {
        color: orangered;
    }

    .normal-slider .slick-prev::before,
    .normal-slider .slick-next::before {
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        font-size: 30px;
        color: #ffffff;
    }

    .normal-slider .slick-prev::before {
        content: "\f104";
    }

    .normal-slider .slick-next::before {
        content: "\f105";
    }

    .normal-slider .slick-dots {
        bottom: 15px;
    }

    .normal-slider .slick-dots li button:before {
        color: #ffffff;
        font-size: 15px;
    }

    .normal-slider .slick-dots li.slick-active button:before {
        color: orangered;
    }

    .slick-dotted.slick-slider {
        margin-bottom: 0;
    }


    /************/
    /**** Top Bar CSS *****/
    /************/
    .top-bar {
        padding: 3px 0;
        font-size: 14px;
        color: orangered;
        background: #000000;
    }

    .top-bar i {
        margin-right: 5px;
    }

    .top-bar .col-sm-6:first-child {
        text-align: left;
    }

    .top-bar .col-sm-6:last-child {
        text-align: right;
    }

    @media (max-width: 575.98px) {
        .top-bar {
            border-bottom: 1px solid rgba(255,255,255,.1);
        }

        .top-bar .col-sm-6:first-child,
        .top-bar .col-sm-6:last-child {
            text-align: center;
        }
    }


    /************/
    /**** Nav Bar CSS *****/
    /************/
    .nav {
        position: relative;
    }

    @media (min-width: 992px) {
        .nav .container-fluid {
            padding-left: 52px;
            padding-right: 52px;
        }
    }

    .nav .navbar {
        height: 100%;
        padding: 0;
    }

    .nav .dropdown-menu {
        margin-top: 0;
        border: 0;
        border-radius: 0;
        background: orangered;
    }

    .nav .dropdown-menu a.active {
        color: #353535;
        background: #f8f9fa;
    }

    @media (min-width: 768px) {
        .nav,
        .nav .navbar {
            background: orangered !important;
        }

        .nav .navbar-brand {
            display: none;
        }

        .nav .navbar-dark a.nav-link {
            color: #ffffff;
            font-size: 14px;
            text-transform: uppercase;
        }

        .nav .navbar-dark a.nav-link:hover,
        .nav .navbar-dark a.nav-link.active {
            color: #000000;
        }
    }

    @media (max-width: 768px) {
        .nav {
            padding: 5px 0;
        }

        .nav,
        .nav .navbar {
            background: #000000 !important;
        }

        .nav a.nav-link {
            padding: 5px 0;
        }

        .nav .dropdown-menu {
            box-shadow: none;
        }
    }


    /************/
    /*** Bottom Bar CSS ***/
    /************/
    .bottom-bar {
        padding: 15px 0;
        background: #ffffff;
        margin-bottom: 30px;
    }

    .bottom-bar .logo {
        text-align: left;
        overflow: hidden;
    }

    .bottom-bar .logo a img {
        max-height: 60px;
    }

    .bottom-bar .search {
        width: 100%;
    }

    .bottom-bar .search input[type=text] {
        width: 100%;
        height: 40px;
        padding: 0 15px;
        color: #666666;
        border: 1px solid orangered;
        border-radius: 4px;
    }

    .bottom-bar .search button {
        position: absolute;
        width: 40px;
        height: 38px;
        top: 1px;
        right: 16px;
        padding: 0 15px;
        border: none;
        background: none;
        color: orangered;
        border-radius: 0 2px 2px 0;
    }

    .bottom-bar .search button:hover {
        background: orangered;
        color: #ffffff;
    }

    .bottom-bar .user {
        font-size: 0;
        text-align: right;
    }

    .bottom-bar .user .wishlist {
        margin-right: 15px;
    }

    .bottom-bar .user .cart i,
    .bottom-bar .user .wishlist i {
        color: orangered;
    }

    .bottom-bar .user .cart span,
    .bottom-bar .user .wishlist span {
        color: orangered;
        font-size: 15px;
    }

    .bottom-bar .user .cart:hover i,
    .bottom-bar .user .wishlist:hover i,
    .bottom-bar .user .cart:hover span,
    .bottom-bar .user .wishlist:hover span {
        color: #ffffff;
    }

    @media (min-width: 768px) {
        .bottom-bar {
            max-height: 90px;
        }
    }

    @media (max-width: 767.98px) {
        .bottom-bar .logo,
        .bottom-bar .search,
        .bottom-bar .user {
            text-align: center;
            margin-bottom: 15px;
        }

        .bottom-bar .user {
            margin-bottom: 0;
        }
    }


    /************/
    /**** Header CSS ****/
    /************/
    .header {
        position: relative;
    }

    .header .col-md-3,
    .header .col-md-6 {
        margin-bottom: 30px;
    }

    .header .navbar {
        padding: 0;
        height: 100%;
        max-height: 400px;
        overflow: hidden;
        background: #ffffff !important;
    }

    .header .navbar-nav {
        width: 100%;
        padding: 15px 0;
    }

    .header .navbar li {
        padding: 0 30px;
        border-bottom: 1px solid #f3f6ff;
    }

    .header .navbar li:last-child {
        border-bottom: none;
    }

    .header .navbar a {
        color: #353535;
    }
    .header .navbar a:hover {
        color: orangered;
    }


    .header .navbar i {
        color: orangered;
        width: 20px;
        text-align: center;
        margin-right: 8px;
    }

    .header .navbar a:hover i {
        color: #353535;
    }

    .header-slider {
        position: relative;
        width: 100%;
    }

    .header-slider .header-slider-item {
        position: relative;
    }

    .header-slider .header-slider-caption {
        position: absolute;
        top: 20%;
        left: 20%;
        width: 60%;
        height: 60%;
        padding: 15px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background: rgba(255, 111, 97, .7);
        transition: all 0.3s;
        z-index: 1;
    }

    .header-slider .header-slider-caption p {
        text-align: center;
        color: #ffffff;
        font-size: 22px;
        font-family: 'Source Code Pro', monospace;
        font-weight: 700;
    }

    .header-slider .header-slider-caption .btn {
        border-color: #ffffff;
    }

    .header-slider .header-slider-caption .btn i {
        margin-right: 5px;
    }

    .header .header-img {
        position: relative;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        height: 100%;
        max-height: 400px;
        overflow: hidden;
        background: #ffffff;
    }

    .header .img-item {
        position: relative;
        width: 100%;
        height: 50%;
        overflow: hidden;
    }

    .header .img-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .header .img-text {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        background: rgba(255, 111, 97, .7);
        transition: all 0.3s;
        opacity: 0;
    }

    .header .img-text:hover {
        opacity: 1;
    }

    .header .img-text p {
        margin: 0 0 50px 0;
        padding: 15px;
        width: 100%;
        text-align: center;
        color: #ffffff;
        font-size: 16px;
        transition: all 0.3s;
    }

    .header .img-text:hover p {
        margin: 0;
    }


    /************/
    /*** Breadcrumb CSS ***/
    /************/
    .breadcrumb-wrap {
        position: relative;
        width: 100%;
    }

    .breadcrumb-wrap .breadcrumb {
        margin: 0;
        padding: 0;
        background: transparent;
    }



    /************/
    /**** Category CSS ****/
    /************/
    .category {
        position: relative;
        padding: 0 15px;
        margin-bottom: 30px;
    }

    .category .col-md-3 {
        padding: 0;
    }

    .category .category-item {
        position: relative;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        height: 100%;
        max-height: 400px;
        overflow: hidden;
        background: #ffffff;
    }

    .category .category-item.ch-400 {
        height: 400px;
    }

    .category .category-item.ch-250 {
        height: 250px;
    }

    .category .category-item.ch-150 {
        height: 150px;
    }

    .category .category-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .category .category-name {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        background: rgba(255, 111, 97, .7);
        transition: all 0.3s;
        opacity: 0;
    }

    .category .category-name:hover {
        opacity: 1;
    }

    .category .category-name p {
        margin: 0 0 50px 0;
        padding: 15px;
        width: 100%;
        text-align: center;
        color: #ffffff;
        font-size: 16px;
        transition: all 0.3s;
    }

    .category .category-name:hover p {
        margin: 0;
    }


    /************/
    /**** Feature CSS *****/
    /************/
    .feature {
        position: relative;
    }

    .feature .feature-col {
        margin-bottom: 30px;
    }

    .feature .feature-content {
        position: relative;
        width: 100%;
        height: 100%;
        padding: 30px 15px;
        text-align: center;
        background: #ffffff;
    }

    .feature .feature-content i {
        color: orangered;
        font-size: 60px;
        margin-bottom: 30px;
    }

    .feature .feature-content h2 {
        font-size: 18px;
    }

    .feature .feature-content p {
        font-size: 15px;
        margin: 0;
    }


    /************/
    /*** Product Item CSS ***/
    /************/
    .product-item {
        position: relative;
    }

    .product-item .product-title {
        padding: 15px;
        text-align: center;
        background: #000000;
        transition: all .3s;
    }

    .product-item:hover .product-title {
        background: orangered;
    }

    .product-item .product-title a,
    .product-item .product-title .ratting {
        position: relative;
        width: 100%;
    }

    .product-item .product-title a {
        margin-bottom: 5px;
        color: #ffffff;
        font-size: 18px;
    }

    .product-item .product-title .ratting i {
        font-size: 14px;
        color: orangered;
    }

    .reviews-submitted .ratting .a{

        color: black;
    }
    .reviews-submitted .ratting .b{

        color: orangered;
    }

    .product-item .product-content .price span {
        margin-left: 12px;
        text-decoration: line-through;
        font-weight: 700;
        color: #999999;
    }

    .product-item:hover .product-title a,
    .product-item:hover .product-title .ratting i {
        color: #ffffff;
    }

    .product-item:hover .product-content .price span {
        color: #dddddd;
    }

    .product-item .product-image {
        position: relative;
        overflow: hidden;
    }

    .product-item .product-image a {
        display: block;
        background: #ffffff;
        transition: .3s;
    }

    .product-item .product-image img {
        width: 100%;
        transition: all .3s;
    }

    .product-item:hover .product-image img {
        transform: scale(1.2);
    }

    .product-item .product-image .product-action {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(255, 111, 97, .5);
        transition: all .3s;
        font-size: 0;
        z-index: 1;
        opacity: 0;
    }

    .product-item:hover .product-image .product-action {
        opacity: 1;
    }

    .product-item .product-image .product-action a {
        display: inline-block;
        width: 40px;
        height: 40px;
        margin-right: 5px;
        padding: 7px 0 10px 0;
        font-size: 16px;
        text-align: center;
        color: #ffffff;
        background: orangered;
        border: 1px solid #ffffff;
        border-radius: 4px;
        transition: all .3s;
        margin-top: 50px;
    }

    .product-item:hover .product-image .product-action a {
        margin-top: 0;
    }

    .product-item .product-image .product-action a:last-child {
        margin-right: 0;
    }

    .product-item .product-image .product-action a:hover {
        color: orangered;
        background: #ffffff;
        border: 1px solid orangered;
    }

    .product-item .product-price {
        padding: 20px;
        background: #000000;
        transition: all .3s;
    }

    .product-item:hover .product-price {
        background: orangered;
    }

    .product-item .product-price h3 {
        display: inline-block;
        color: #ffffff;
        margin: 0;
    }

    .product-item .product-price h3 span {
        font-size: 16px;
    }

    .product-item .product-price .btn {
        float: right;
        border: none;
        color: #000000;
        background: orangered;
    }

    .product-item:hover .product-price .btn,
    .product-item .product-price .btn:hover {
        color: orangered;
        background: #ffffff;
    }

    .product-item .product-price .btn i {
        margin-right: 5px;
    }


    /************/
    /*** Featured Product ***/
    /************/
    .featured-product {
        position: relative;
        padding: 30px 0;
    }

    .recent-product {
        position: relative;
        padding: 30px 0;
    }

    .product .section-header {
        margin-bottom: 30px;
        padding: 20px 30px 15px 30px;
        color: orangered;
        background: #ffffff;
    }

    .product .slick-prev,
    .product .slick-next {
        top: -75px;
        width: 30px;
        height: 30px;
        z-index: 1;
        transition: .5s;
        color: orangered;
        background: #ffffff;
        border: 1px solid orangered;
        border-radius: 4px;
    }

    .product .slick-prev {
        left: calc(100% - 120px);
    }

    .product .slick-next {
        right: 45px;
    }

    .product .slick-prev:hover,
    .product .slick-prev:focus,
    .product .slick-next:hover,
    .product .slick-next:focus {
        background: orangered;
    }

    .product .slick-prev::before,
    .product .slick-next::before {
        font-family: "Font Awesome 5 Free";
        font-size: 18px;
        font-weight: 900;
        color: orangered;
    }

    .product .slick-prev::before {
        content: "\f104";
    }

    .product .slick-next::before {
        content: "\f105";
    }

    .product .slick-prev:hover::before,
    .product .slick-prev:focus::before,
    .product .slick-next:hover::before,
    .product .slick-next:focus::before {
        color: #ffffff;
    }


    /************/
    /*** Product View CSS ***/
    /************/
    .product-view {
        position: relative;
        width: 100%;
        padding: 30px 0;
    }

    .product-view .product-view-top {
        padding: 30px;
        margin-bottom: 30px;
        background: #ffffff;
    }

    .product-view .product-search {
        position: relative;
        width: 100%;
    }

    .product-view .product-search input {
        width: 100%;
        height: 35px;
        padding: 0 15px;
        color: #999999;
        background: transparent;
        border: 1px solid #353535;
        border-radius: 4px;
        transition: all .3s;
    }

    .product-view .product-search input:focus {
        border-color: orangered;
    }

    .product-view .product-search button {
        position: absolute;
        width: 35px;
        height: 33px;
        top: 1px;
        right: 1px;
        text-align: center;
        background: transparent;
        color: #353535;
        border: none;
        border-radius: 0 4px 4px 0;
        transition: all .3s;
    }

    .product-view .product-search button i {
        font-size: 16px;
    }

    .product-view .product-search button:hover {
        background: orangered;
        color: #ffffff;
    }

    .product-view .product-short,
    .product-view .product-price-range {
        position: relative;
        width: 100%;
        text-align: right;
    }

    .product-view .product-short .dropdown .dropdown-toggle,
    .product-view .product-price-range .dropdown .dropdown-toggle {
        display: block;
        width: 100%;
        height: 35px;
        padding: 5px 10px;
        background: transparent;
        border: 1px solid #353535;
        text-align: left;
        border-radius: 4px;
        cursor: pointer;
        transition: all .3s;
    }

    .product-view .product-short .dropdown .dropdown-toggle:hover,
    .product-view .product-price-range .dropdown .dropdown-toggle:hover {
        color: orangered;
        border-color: orangered;
    }

    .product-view .product-short .dropdown .dropdown-toggle::after,
    .product-view .product-price-range .dropdown .dropdown-toggle::after {
        float: right;
        margin-top: 10px;
    }

    .product-view .product-short .dropdown-menu,
    .product-view .product-price-range .dropdown-menu {
        margin: -1px 0 0 0;
        border-radius: 0;
    }

    .product-view .product-item {
        margin-bottom: 30px;
    }

    .product-view .pagination {
        margin: 0;
    }

    .product-view .pagination .page-item .page-link {
        color: #353535;
        background: transparent;
        border-color: #353535;
    }

    .product-view .pagination .page-item:hover .page-link,
    .product-view .pagination .page-item.active .page-link {
        color: orangered;
        background: #000000;
    }

    @media (max-width: 991.98px) {
        .product-view .pagination {
            margin-bottom: 30px;
        }
    }


    /************/
    /*** Product Detail CSS ***/
    /************/
    .product-detail {
        position: relative;
        width: 100%;
        padding: 30px 0;
    }

    .product-detail .product-detail-top,
    .product-detail .product-detail-bottom {
        margin-bottom: 30px;
    }

    .product-detail .product-detail-top {
        padding: 0;
        background: #ffffff;
    }

    .product-detail .product-slider-single img {
        width: 100%;
    }

    .product-detail .product-slider-single-nav {
        margin: 15px 30px 30px 30px;
        border: 3px double orangered;
    }

    .product-detail .product-slider-single-nav .slider-nav-img {
        border-right: 1px solid orangered;
        overflow: hidden;
    }

    .product-detail .product-slider-single-nav img {
        width: 100%;
        transition: all .3s;
    }

    .product-detail .product-slider-single-nav img:hover {
        transform: scale(1.2);
    }

    .product-detail .product-content,
    .product-detail .product-content .title,
    .product-detail .product-content .ratting,
    .product-detail .product-content .price,
    .product-detail .product-content .details,
    .product-detail .product-content .quantity,
    .product-detail .product-content .action {
        position: relative;
        width: 100%;
    }

    .product-detail .product-content {
        padding: 30px;
    }

    @media (min-width: 768px) {
        .product-detail .product-content {
            padding-left: 0;
        }
    }

    .product-detail .product-content .title h2 {
        font-size: 25px;
        margin-bottom: 5px;
    }

    .product-detail .product-content .ratting {
        margin-bottom: 10px;
    }

    .product-detail .product-content .ratting .b,.product-item .product-title .ratting .b  {
        color: orangered;
        font-size: 16px;
    }
    .product-detail .product-content .ratting .a,.product-item .product-title .ratting .a {
        color: white;
        font-size: 16px;
    }

    .product-detail .product-content .price,
    .product-detail .product-content .quantity,
    .product-detail .product-content .p-size,
    .product-detail .product-content .p-color {
        margin-bottom: 15px;
    }

    .product-detail .product-content .price h4,
    .product-detail .product-content .quantity h4,
    .product-detail .product-content .p-size h4,
    .product-detail .product-content .p-color h4 {
        display: inline-block;
        width: 80px;
        font-size: 18px;
        font-weight: 700;
        margin-right: 5px;
    }

    .product-detail .product-content .price p {
        display: inline-block;
        color: #000;
        font-size: 18px;
        font-weight: 400;
        margin: 0;
    }

    .product-detail .product-content .price span {
        color: #999999;
        text-decoration: line-through;
        margin-left: 12px;
    }

    .product-detail .product-content .quantity .qty {
        display: inline-block;
        font-size: 0;
    }

    .product-detail .product-content .quantity button {
        width: 30px;
        height: 30px;
        padding: 2px 0;
        font-size: 16px;
        text-align: center;
        color: #ffffff;
        background: orangered;
        border: none;
    }

    .product-detail .product-content .quantity button.btn-minus {
        border-radius: 4px 0 0 4px;
    }

    .product-detail .product-content .quantity button.btn-plus {
        border-radius: 0 4px 4px 0;
    }

    .product-detail .product-content .quantity input {
        width: 40px;
        height: 30px;
        color: #ffffff;
        font-size: 16px;
        text-align: center;
        background: #000000;
        border: none;
    }

    .product-detail .product-content .action a:first-child {
        margin-right: 11px;
    }

    .product-detail .product-content .action a i {
        margin-right: 5px;
    }

    .product-detail .nav.nav-pills .nav-link {
        color: orangered;
        background: #000000;
        border-radius: 0;
        transition: all .3s;
    }

    .product-detail .nav.nav-pills .nav-link:hover,
    .product-detail .nav.nav-pills .nav-link.active {
        color: #000000;
        background: orangered;
    }

    .product-detail .tab-content {
        background: #ffffff;
        padding: 25px 15px 15px 15px;
    }

    .product-detail .tab-content ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .product-detail .tab-content ul li {
        margin-bottom: 10px;
    }

    .product-detail .tab-content ul li::before {
        content: '\f061';
        font-family: 'Font Awesome 5 Free';
        font-weight: 900;
        padding-right: 5px;
    }

    .product-detail .tab-content .reviews-submitted {
        position: relative;
        margin-bottom: 45px;
    }

    .product-detail .tab-content .reviewer {
        color: black;
        font-size: 18px;
        font-weight: 600;
    }

    .product-detail .tab-content .reviewer span {
        color: #666666;
        font-size: 14px;
        font-weight: 400;
    }

    .product-detail .tab-content .ratting {
        color: orangered;
        margin-bottom: 15px;
    }

    .product-detail .tab-content .reviews-submit .ratting {
        font-size: 24px;
    }

    .product-detail .tab-content .form input {
        width: 100%;
        height: 35px;
        padding: 0 15px;
        color: #666666;
        border: 1px solid #dddddd;
        border-radius: 4px;
        margin-bottom: 15px;
    }

    .product-detail .tab-content .form textarea {
        width: 100%;
        height: 80px;
        padding: 6px 15px;
        color: #666666;
        border: 1px solid #dddddd;
        border-radius: 4px;
        margin-bottom: 15px;
    }

    .product-detail .tab-content .form button {
        display: inline-block;
        height: 35px;
        padding: 0 15px;
        color: orangered;
        background: #ffffff;
        border: 1px solid orangered;
        border-radius: 4px;
        margin-bottom: 15px;
        transition: all .3s;
    }

    .product-detail .tab-content .form button:hover {
        color: #ffffff;
        background: orangered;
    }


    /************/
    /**** Sidebar CSS *****/
    /************/
    .sidebar-widget {
        padding: 30px;
        background: #ffffff;
    }

    .sidebar-widget:not(:first-child) {
        padding-top: 0;
    }

    .sidebar-widget .title {
        position: relative;
        font-size: 22px;
        text-transform: capitalize;
        margin-bottom: 15px;
    }

    .sidebar-widget.category {
        margin: 0;
    }

    .sidebar-widget.category .navbar {
        padding: 0;
        overflow: hidden;
        background: #ffffff !important;
    }

    .sidebar-widget.category .navbar-nav {
        width: 100%;
    }

    .sidebar-widget.category .navbar li {
        border-bottom: 1px solid #f3f6ff;
    }

    .sidebar-widget.category .navbar li:last-child {
        border-bottom: none;
    }

    .sidebar-widget.category .navbar a {
        color: #353535;
    }

    .sidebar-widget.category .navbar a:hover {
        color: orangered;
    }

    .sidebar-widget.category .navbar i {
        color: orangered;
        width: 20px;
        text-align: center;
        margin-right: 8px;
    }

    .sidebar-widget.category .navbar a:hover i {
        color: #353535;
    }

    .sidebar-widget.brands ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .sidebar-widget.brands ul li {
        margin-bottom: 12px;
    }

    .sidebar-widget.brands ul li:last-child {
        margin-bottom: 0;
    }

    .sidebar-widget.brands ul li a {
        color: #353535;
        white-space: nowrap;
        display: inline-block;
        line-height: 23px;
        transition: all .3s;
    }

    .sidebar-widget.brands ul li a::before {
        content: '\f105';
        font-family: 'Font Awesome 5 Free';
        font-weight: 900;
        padding-right: 5px;
    }

    .sidebar-widget.brands ul li a:hover {
        color: orangered;
    }

    .sidebar-widget.brands ul li a:hover::before {
        content: '\f101';
        font-family: 'Font Awesome 5 Free';
        font-weight: 900;
    }

    .sidebar-widget.brands ul li a:hover {
        padding-left: 10px;
    }

    .sidebar-widget.brands ul li span {
        display: inline-block;
        float: right;
        color: #666666;
        font-size: 14px;
        font-weight: 400;
    }

    .sidebar-widget.widget-slider {
        position: relative;
    }

    .sidebar-widget.image a {
        display: block;
        width: 100%;
        overflow: hidden;
    }

    .sidebar-widget.image img {
        max-width: 100%;
        transition: .3s;
    }

    .sidebar-widget.image img:hover {
        transform: scale(1.1);
        filter: blur(3px);
        -webkit-filter: blur(3px);
    }

    .sidebar-widget.tag a {
        display: inline-block;
        margin: 0 0 4px 0;
        padding: 3px 8px;
        font-size: 14px;
        color: #353535;
        background: #ffffff;
        border: 1px solid #353535;
        border-radius: 4px;
        transition: .3s;
    }

    .sidebar-widget.tag a:hover {
        color: #ffffff;
        background: orangered;
        border-color: orangered;
    }


    /************/
    /**** Cart CSS ****/
    /************/
    .cart-page {
        position: relative;
        margin-top: 30px;
    }

    .cart-page .cart-page-inner {
        padding: 30px;
        margin-bottom: 30px;
        background: #ffffff;
    }

    .cart-page .table {
        width: 100%;
        text-align: center;
        margin-bottom: 0;
    }

    .cart-page .table .thead-dark th {
        font-family: 'Source Code Pro', monospace;
        font-size: 18px;
        font-weight: 700;
        color: #353535;
        text-align: center;
        background: transparent;
        border-color: #dddddd;
        border-bottom: none;
        vertical-align: middle;
    }

    .cart-page .table td {
        font-size: 16px;
        vertical-align: middle;
    }

    .cart-page .table .img {
        display: flex;
        align-items: center;
    }

    .cart-page .table .img img {
        max-width: 60px;
        max-height: 60px;
        margin-right: 15px;
    }

    .cart-page .table .img p {
        display: inline-block;
        text-align: left;
        margin: 0;
    }

    .cart-page .table .qty {
        display: inline-block;
        width: 100px;
        font-size: 0;
    }

    .cart-page .table button {
        width: 30px;
        height: 30px;
        font-size: 14px;
        text-align: center;
        color: #ffffff;
        background: orangered;
        border: none;
        border-radius: 4px;
    }

    .cart-page .table button.btn-minus {
        border-radius: 4px 0 0 4px;
    }

    .cart-page .table button.btn-plus {
        border-radius: 0 4px 4px 0;
    }

    .cart-page .table button.btn-cart {
        width: auto;
    }

    .cart-page .table input {
        width: 40px;
        height: 30px;
        font-size: 16px;
        color: #ffffff;
        text-align: center;
        background: #000000;
        border: none;
    }

    .cart-page .coupon {
        position: relative;
        width: 100%;
        margin-bottom: 15px;
        font-size: 0;
    }

    .cart-page .coupon input {
        width: calc(100% - 135px);
        height: 40px;
        padding: 0 15px;
        font-size: 16px;
        color: #999999;
        background: #ffffff;
        border: 1px solid #dddddd;
        border-radius: 4px;
        margin-right: 15px;
        transition: all .3s;
    }

    .cart-page .coupon input:focus {
        border-color: orangered;
    }

    .cart-page .coupon button {
        width: 120px;
        height: 40px;
        padding: 2px 0;
        font-size: 16px;
        text-align: center;
        color: orangered;
        background: #ffffff;
        border: 1px solid orangered;
        border-radius: 4px;
    }

    .cart-page .coupon button:hover {
        color: #ffffff;
        background: orangered;
    }

    .cart-page .cart-summary {
        position: relative;
        width: 100%;
    }

    .cart-page .cart-summary .cart-content {
        padding: 30px;
        background: #f3f6ff;
    }

    .cart-page .cart-summary .cart-content h1 {
        font-size: 22px;
        margin-bottom: 20px;
    }

    .cart-page .cart-summary .cart-content p span,
    .cart-page .cart-summary .cart-content h2 span {
        float: right;
    }

    .cart-page .cart-summary .cart-content h2 {
        font-size: 20px;
        font-weight: 600;
        padding-top: 12px;
        border-top: 1px solid #dddddd;
        margin: 0;
    }

    .cart-page .cart-summary .cart-btn button {
        margin-top: 15px;
        width: calc(50% - 15px);
        height: 50px;
        padding: 2px 10px;
        text-align: center;
        color: #ffffff;
        background: orangered;
        border: none;
        border-radius: 4px;
    }

    .cart-page .cart-summary .cart-btn button:hover {
        color: orangered;
        background: #000000;
    }

    .cart-page .cart-summary .cart-btn button:first-child {
        margin-right: 25px;
        color: orangered;
        background: #ffffff;
        border: 1px solid orangered;
    }

    .cart-page .cart-summary .cart-btn button:first-child:hover {
        color: #ffffff;
        background: orangered;
    }


    /************/
    /**** Wishlist CSS ****/
    /************/
    .wishlist-page {
        position: relative;
        padding: 30px 0;
    }

    .wishlist-page .wishlist-page-inner {
        padding: 30px;
        background: #ffffff;
    }

    .wishlist-page .table {
        width: 100%;
        text-align: center;
        margin-bottom: 0;
    }

    .wishlist-page .table .thead-dark th {
        font-family: 'Source Code Pro', monospace;
        font-size: 18px;
        font-weight: 700;
        color: #353535;
        text-align: center;
        background: transparent;
        border-color: #dddddd;
        border-bottom: none;
        vertical-align: middle;
    }

    .wishlist-page .table td {
        font-size: 16px;
        vertical-align: middle;
    }

    .wishlist-page .table .img {
        display: flex;
        align-items: center;
    }

    .wishlist-page .table .img img {
        max-width: 60px;
        max-height: 60px;
        margin-right: 15px;
    }

    .wishlist-page .table .img p {
        display: inline-block;
        text-align: left;
        margin: 0;
    }

    .wishlist-page .table .qty {
        display: inline-block;
        width: 100px;
        font-size: 0;
    }

    .wishlist-page .table button {
        width: 30px;
        height: 30px;
        font-size: 14px;
        text-align: center;
        color: #ffffff;
        background: orangered;
        border: none;
        border-radius: 4px;
    }

    .wishlist-page .table button.btn-minus {
        border-radius: 4px 0 0 4px;
    }

    .wishlist-page .table button.btn-plus {
        border-radius: 0 4px 4px 0;
    }

    .wishlist-page .table button.btn-cart {
        width: auto;
    }

    .wishlist-page .table input {
        width: 40px;
        height: 30px;
        font-size: 16px;
        color: #ffffff;
        text-align: center;
        background: #000000;
        border: none;
    }


    /************/
    /**** Checkout CSS ****/
    /************/
    .checkout {
        position: relative;
        padding-top: 30px;
    }

    .checkout .checkout-inner {
        margin-bottom: 30px;
        padding: 30px;
        background: #ffffff;
    }

    .checkout .billing-address,
    .checkout .shipping-address {
        position: relative;
        width: 100%;
    }

    .checkout .shipping-address {
        display: none;
        margin-top: 30px;
    }

    .checkout .billing-address h2,
    .checkout .shipping-address h2 {
        font-size: 25px;
        margin-bottom: 20px;
    }

    .checkout .checkout-summary,
    .checkout .checkout-payment {
        position: relative;
        width: 100%;
    }

    .checkout .checkout-summary h1,
    .checkout .checkout-payment h1 {
        font-size: 25px;
        margin-bottom: 20px;
    }

    .checkout .checkout-summary,
    .checkout .checkout-payment .payment-methods {
        padding: 30px;
        background: #f3f6ff;
        margin-bottom: 30px;
    }

    .checkout .checkout-summary p.sub-total,
    .checkout .checkout-summary p.ship-cost {
        padding-top: 15px;
        border-top: 1px solid #dddddd;
    }

    .checkout .checkout-summary p span,
    .checkout .checkout-summary h2 span {
        float: right;
    }

    .checkout .checkout-summary h2 {
        font-size: 20px;
        padding-top: 12px;
        border-top: 1px solid #dddddd;
        margin: 0;
    }

    .checkout .checkout-payment .payment-methods .payment-content {
        display: none;
    }

    .checkout .checkout-payment .checkout-btn button {
        width: 100%;
        height: 50px;
        padding: 2px 10px;
        font-family: 'Source Code Pro', monospace;
        font-weight: 700;
        font-size: 25px;
        text-align: center;
        color: #000000;
        background: orangered;
        border: none;
        border-radius: 4px;
        transition: all .3s;
    }

    .checkout .checkout-payment .checkout-btn button:hover {
        color: orangered;
        background: #000000;
    }


    /************/
    /*** My Account CSS ***/
    /************/
    .my-account {
        position: relative;
        padding: 30px 0;
    }

    .my-account .nav.nav-pills .nav-link {
        padding: 10px 15px;
        color: #353535;
        background: #ffffff;
        border-radius: 0;
        border-bottom: 1px solid #dddddd;
        transition: all .3s;
    }

    .my-account .nav.nav-pills .nav-link:last-child {
        border-bottom: none;
    }

    .my-account .nav.nav-pills .nav-link:hover,
    .my-account .nav.nav-pills .nav-link.active {
        color: #ffffff;
        background: orangered;
    }

    .my-account .nav.nav-pills .nav-link i {
        margin-right: 5px;
    }

    .my-account .tab-content {
        padding: 30px;
        background: #ffffff;
    }

    .my-account .tab-content .table {
        width: 100%;
        text-align: center;
        margin-bottom: 0;
    }

    .my-account .tab-content .table .thead-dark th {
        text-align: center;
        color: #353535;
        background: #ffffff;
        border-color: #dddddd;
        border-bottom: none;
        vertical-align: middle;
    }

    .my-account .tab-content .table td {
        vertical-align: middle;
    }


    /************/
    /*** Call to Action CSS ***/
    /************/
    .call-to-action {
        position: relative;
        padding: 30px 0;
        background: orangered;
    }

    .call-to-action .col-md-6:last-child {
        text-align: right;
    }

    .call-to-action h1 {
        color: #ffffff;
        font-size: 30px;
        margin: 0;
    }

    .call-to-action a {
        display: inline-block;
        padding: 0 20px;
        border: 1px solid #ffffff;
        border-radius: 4px;
        color: #ffffff;
        font-size: 30px;
        letter-spacing: 2px;
        transition: all .3s;
    }

    .call-to-action a:hover {
        color: #000000;
        border-color: #000000;
    }

    @media (max-width: 767.98px) {
        .call-to-action,
        .call-to-action .col-md-6:last-child {
            text-align: center;
        }

        .call-to-action h1 {
            margin-bottom: 20px;
        }
    }


    /************/
    /*** Newsletter CSS ***/
    /************/
    .newsletter {
        position: relative;
        padding: 30px 0;
        background: orangered;
    }

    .newsletter h1 {
        color: #ffffff;
        font-size: 30px;
        margin: 0;
    }

    .newsletter .form {
        position: relative;
        max-width: 400px;
        margin: 0 0 0 auto;
    }

    .newsletter .form input {
        width: 100%;
        height: 40px;
        padding: 0 15px;
        color: #666666;
        border: 1px solid #ffffff;
        border-radius: 4px;
    }

    .newsletter .form button {
        position: absolute;
        width: 80px;
        height: 40px;
        top: 0;
        right: 0;
        padding: 0 15px;
        border: none;
        background: orangered;
        color: #ffffff;
        border: 1px solid #ffffff;
        border-radius: 0 4px 4px 0;
    }

    .newsletter .form button:hover {
        color: orangered;
        background: #000000;
    }

    @media (max-width: 767.98px) {
        .newsletter {
            text-align: center;
        }

        .newsletter h1 {
            margin-bottom: 20px;
        }

        .newsletter .form {
            margin: 0 auto;
        }
    }


    /************/
    /**** Brand CSS *****/
    /************/
    .brand {
        position: relative;
        margin-bottom: 30px;
        padding: 30px 0;
        background: #ffffff;
    }

    .brand .brand-item {
        text-align: center;
    }

    .brand .brand-item img {
        max-width: 100%;
        margin: auto;
    }

    .brand .slick-prev,
    .brand .slick-next {
        width: 40px;
        height: 40px;
        z-index: 1;
        opacity: 0;
        transition: .5s;
        background: orangered;
        border-radius: 4px;
    }

    .brand .slick-prev {
        left: 55px;
    }

    .brand .slick-next {
        right: 55px;
    }

    .brand .slick-slider:hover .slick-prev {
        left: 15px;
        opacity: 1;
    }

    .brand .slick-slider:hover .slick-next {
        right: 15px;
        opacity: 1;
    }

    .brand .slick-prev:hover,
    .brand .slick-prev:focus,
    .brand .slick-next:hover,
    .brand .slick-next:focus {
        background: #000000;
    }

    .brand .slick-prev:hover::before,
    .brand .slick-prev:focus::before,
    .brand .slick-next:hover::before,
    .brand .slick-next:focus::before {
        color: orangered;
    }

    .brand .slick-prev::before,
    .brand .slick-next::before {
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        font-size: 30px;
        color: #000000;
    }

    .brand .slick-prev::before {
        content: "\f104";
    }

    .brand .slick-next::before {
        content: "\f105";
    }


    /************/
    /**** Review CSS ****/
    /************/
    .review {
        margin-bottom: 30px;
    }

    .review .review-slider {
        position: relative;
    }

    .review .review-slider-item {
        display: flex;
        align-items: center;
        flex-direction: row;
        background: #ffffff;
    }

    .review .review-img {
        width: 100%;
        max-width: 200px;
        overflow: hidden;
    }

    .review .review-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .review .review-text {
        padding: 15px;
        width: 100%;
        max-width: calc(100% - 200px);
    }

    .review .review-text h2 {
        font-size: 22px;
        letter-spacing: 2px;
        margin-bottom: 5px;
    }

    .review .review-text h3 {
        font-size: 14px;
        letter-spacing: 2px;
        margin-bottom: 5px;
    }

    .review .review-text p {
        margin: 0;
    }

    .review .review-text .ratting {
        margin-bottom: 5px;
    }

    .review .review-text .ratting .b{
        color: orangered;
        font-size: 14px;
    }
    .review .review-text .ratting .a{
        color: black;
        font-size: 14px;
    }


    .review .slick-slider:hover .slick-prev {
        left: 30px;
    }

    .review .slick-slider:hover .slick-next {
        right: 30px;
    }


    /************/
    /**** Contact CSS *****/
    /************/
    .contact {
        position: relative;
        padding-top: 30px;
    }

    .contact .contact-info,
    .contact .contact-form,
    .contact .contact-map {
        height: 100%;
        padding: 30px;
        background: #ffffff;
        border-bottom: 30px solid #f3f6ff;
    }

    .contact .contact-info h2 {
        margin-bottom: 15px;
    }

    .contact .contact-info h3 {
        margin-bottom: 15px;
        font-size: 18px;
    }

    .contact .contact-info h3 i {
        width: 20px;
        color: orangered;
        margin-right: 5px;
    }

    .contact .social {
        position: relative;
        width: 100%;
    }

    .contact .social a {
        display: inline-block;
        margin: 10px 10px 0 0;
        width: 40px;
        height: 40px;
        padding: 5px 0;
        text-align: center;
        font-size: 18px;
        border: 1px solid orangered;
        border-radius: 4px;
    }

    .contact .social a i {
        color: orangered;
    }

    .contact .social a:hover {
        background: orangered;
    }

    .contact .social a:hover i {
        color: #ffffff;
    }

    .contact .contact-map iframe {
        width: 100%;
        height: 450px;
    }


    /************/
    /** Register & Login CSS **/
    /************/
    .login {
        position: relative;
        padding-top: 30px;
    }

    .login .login-form,
    .login .register-form {
        padding: 30px;
        background: #ffffff;
        margin-bottom: 30px;
    }


    /************/
    /**** Footer CSS ****/
    /************/
    .footer {
        position: relative;
        padding: 30px 0 0 0;
        background: #ffffff;
    }

    .footer .footer-widget {
        position: relative;
        width: 100%;
        margin-bottom: 30px;
    }

    .footer .footer-widget h2 {
        font-size: 25px;
        white-space: nowrap;
        margin-bottom: 20px;
    }

    .footer .footer-widget ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .footer .footer-widget ul li {
        margin-bottom: 12px;
    }

    .footer .footer-widget ul li:last-child {
        margin-bottom: 0;
    }

    .footer .footer-widget ul li a {
        color: #353535;
        white-space: nowrap;
        display: block;
        line-height: 23px;
        transition: all .3s;
    }

    .footer .footer-widget ul li a::before {
        content: '\f105';
        font-family: 'Font Awesome 5 Free';
        font-weight: 900;
        padding-right: 5px;
    }

    .footer .footer-widget ul li a:hover {
        color: orangered;
    }

    .footer .footer-widget ul li a:hover::before {
        content: '\f101';
        font-family: 'Font Awesome 5 Free';
        font-weight: 900;
    }

    .footer .contact-info p {
        margin-bottom: 10px;
        font-size: 16px;
    }

    .footer .contact-info p i {
        margin-right: 5px;
    }

    .footer .social {
        position: relative;
        width: 100%;
    }

    .footer .social a {
        display: inline-block;
        margin: 10px 5px 0 0;
        width: 40px;
        height: 40px;
        padding: 6px 0;
        text-align: center;
        font-size: 18px;
        color: #353535;
        border: 1px solid #353535;
        border-radius: 4px;
        transition: all .3s;
    }

    .footer .social a:hover {
        color: orangered;
        border-color: orangered;
    }

    .footer .payment {
        padding-top: 25px;
        padding-bottom: 25px;
        border-top: 1px solid rgba(0,0,0,.1);
    }

    @media (min-width: 992px) {
        .footer .payment {
            max-width: 80%;
            margin: 0 auto;
        }
    }

    .footer .payment-method,
    .footer .payment-security {
        overflow: hidden;
    }

    .footer .payment-method {
        text-align: left;
    }

    .footer .payment-security {
        text-align: right;
    }

    @media (max-width: 768.98px) {
        .footer .payment-method {
            margin-bottom: 15px;
        }

        .footer .payment-method,
        .footer .payment-security {
            text-align: center;
        }
    }

    .footer .payment-method h2,
    .footer .payment-security h2 {
        display: inline-block;
        margin: 0 10px 0 0;
        font-size: 18px;
        font-weight: 400;
        line-height: 22px;
    }

    .footer .payment-method img,
    .footer .payment-security img {
        height: 25px;
    }


    /************/
    /*** Footer Bottom CSS ****/
    /************/
    .footer-bottom {
        position: relative;
        padding: 25px 0;
        background: #000000;
    }

    .footer-bottom .copyright {
        text-align: left;
    }

    .footer-bottom .template-by {
        text-align: right;
    }

    .footer-bottom .copyright p,
    .footer-bottom .template-by p {
        color: #ffffff;
        font-weight: 400;
        margin: 0;
    }

    .footer-bottom .copyright p a,
    .footer-bottom .template-by p a {
        font-weight: 600;
    }

    .footer-bottom .copyright p a:hover,
    .footer-bottom .template-by p a:hover {
        color: #ffffff;
    }

    @media (max-width: 768.98px) {
        .footer-bottom .copyright,
        .footer-bottom .template-by {
            text-align: center;
        }
    }
    .my-account {
        position: relative;
        padding: 30px 0;
    }

    .my-account .nav.nav-pills .nav-link {
        padding: 10px 15px;
        color: #353535;
        background: #ffffff;
        border-radius: 0;
        border-bottom: 1px solid #dddddd;
        transition: all .3s;
    }

    .my-account .nav.nav-pills .nav-link:last-child {
        border-bottom: none;
    }

    .my-account .nav.nav-pills .nav-link:hover,
    .my-account .nav.nav-pills .nav-link.active {
        color: #ffffff;
        background: orangered;
    }

    .my-account .nav.nav-pills .nav-link i {
        margin-right: 5px;
    }

    .my-account .tab-content {
        padding: 30px;
        background: #ffffff;
    }

    .my-account .tab-content .table {
        width: 100%;
        text-align: center;
        margin-bottom: 0;
    }

    .my-account .tab-content .table .thead-dark th {
        text-align: center;
        color: #353535;
        background: #ffffff;
        border-color: #dddddd;
        border-bottom: none;
        vertical-align: middle;
    }

    .my-account .tab-content .table td {
        vertical-align: middle;
    }

    .product-detail {
        position: relative;
        width: 100%;
        padding: 30px 0;
    }

    .product-detail .product-detail-top,
    .product-detail .product-detail-bottom {
        margin-bottom: 30px;
    }

    .product-detail .product-detail-top {
        padding: 0;
        background: #ffffff;
    }
    .product-detail .tab-content .reviews-submitted {
        position: relative;
        margin-bottom: 45px;
    }

    .product-detail .tab-content .reviewer {
        color: black;
        font-size: 18px;
        font-weight: 600;
    }

    .product-detail .tab-content .reviewer span {
        color: #666666;
        font-size: 14px;
        font-weight: 400;
    }

    .product-detail .tab-content .ratting {
        color: orangered;
        margin-bottom: 15px;
    }

    .product-detail .tab-content .reviews-submit .ratting {
        font-size: 24px;
    }

    .product-detail .tab-content .form input {
        width: 100%;
        height: 35px;
        padding: 0 15px;
        color: #666666;
        border: 1px solid #dddddd;
        border-radius: 4px;
        margin-bottom: 15px;
    }

    .product-detail .tab-content .form textarea {
        width: 100%;
        height: 80px;
        padding: 6px 15px;
        color: #666666;
        border: 1px solid #dddddd;
        border-radius: 4px;
        margin-bottom: 15px;
    }

    .product-detail .tab-content .form button {
        display: inline-block;
        height: 35px;
        padding: 0 15px;
        color: orangered;
        background: #ffffff;
        border: 1px solid orangered;
        border-radius: 4px;
        margin-bottom: 15px;
        transition: all .3s;
    }

    .product-detail .tab-content .form button:hover {
        color: #ffffff;
        background: orangered;
    }
    *{
        margin: 0;
        padding: 0;
    }
    .rate {
        float: left;
        height: 46px;
        padding: 0 10px;
    }
    .rate:not(:checked) > input {
        position:absolute;
        top:-9999px;
    }
    .rate:not(:checked) > label {
        float:right;
        width:1em;
        overflow:hidden;
        white-space:nowrap;
        cursor:pointer;
        font-size:30px;
        color:#ccc;
    }
    .rate:not(:checked) > label:before {
        content: '★ ';
    }
    .rate > input:checked ~ label {
        color: #ffc700;
    }
    .rate:not(:checked) > label:hover,
    .rate:not(:checked) > label:hover ~ label {
        color: #deb217;
    }
    .rate > input:checked + label:hover,
    .rate > input:checked + label:hover ~ label,
    .rate > input:checked ~ label:hover,
    .rate > input:checked ~ label:hover ~ label,
    .rate > label:hover ~ input:checked ~ label {
        color: #c59b08;
    }
</style>
@php
    $count=\App\Http\Controllers\HomeController::countreviews($data->id);
    $average=\App\Http\Controllers\HomeController::averagereviews($data->id);
    $average=round($average,1);
@endphp
@extends('layouts.home')

@section('content')

<!-- Page Header Start -->
<div class="container-fluid page-header">
    <h1 class="display-3 text-uppercase text-white mb-3">Car Detail</h1>
    <div class="d-inline-flex text-white">
        <h6 class="text-uppercase m-0"><a class="text-white" href="{{route('homepage')}}">Home</a></h6>
        <h6 class="text-body m-0 px-3">/</h6>
        <h6 class="text-uppercase text-body m-0">{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($data, $data->title) }}</h6>
    </div>
</div>
<!-- Page Header Start -->

<!-- Detail Start -->
<div class="container-fluid pt-5">
    <div class="container pt-5 pb-3">
        <h1 class="display-4 text-uppercase mb-5">{{$data->title}} </h1>
        <div class="row align-items-center pb-2">
            <div class="col-lg-6 mb-4">
                <img class="img-fluid" src="{{Storage::url($data->images)}}" alt="">
            </div>
            <div class="col-lg-6 mb-4">

                    <!-- a class="btn btn-block btn-primary py-3" href="{{route('user_rezervation')}}" style="background-color:#39b54a; color: #FFFFFF">Reserve Now</a -->
                 @php
                 $avgrev = \App\Http\Controllers\HomeController::averagereviews($data->id);
                 $contreview = \App\Http\Controllers\HomeController::countreviews($data->id);

                 @endphp
                <h4 class="mb-2">${{$data->base_price}}/Km</h4>
                <div class="d-flex mb-3">
                    <h6 class="mr-2">Rating:</h6>
                    <div class="d-flex align-items-center justify-content-center mb-1">
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star-half-alt text-primary mr-1"></small>
                        <small>({{$contreview}})</small>
                    </div>
                </div>
                <p>{{$data->detail}}</p>
                <div class="d-flex pt-1">
                    <h6>Share on:</h6>
                    <div class="d-inline-flex">
                        @if($setting->twitter!=null) <a  class="px-2" href="{{$setting->twitter}}" target="_blank"><i class="fab fa-twitter"></i></a>@endif
                        @if($setting->facebook!=null) <a class="px-2" href="{{$setting->facebook}}" target="_blank"><i class="fab fa-facebook-f"></i></a>@endif
                        @if($setting->ınstagram!=null)<a class="px-2" href="{{$setting->ınstagram}}" target="_blank"><i class="fab fa-instagram"></i></a>@endif
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-n3 mt-lg-0 pb-4">
            <div class="col-md-3 col-6 mb-2">
                <i class="fa fa-car text-primary mr-2"></i>
                <span>{{$data->capacity}} Seats</span>
            </div>
            <div class="col-md-3 col-6 mb-2">
                <i class="fa fa-cogs text-primary mr-2"></i>
                <span>Automatic</span>
            </div>
            <div class="col-md-3 col-6 mb-2">
                <i class="fa fa-road text-primary mr-2"></i>
                <span>20km/liter</span>
            </div>
            <div class="col-md-3 col-6 mb-2">
                <i class="fa fa-eye text-primary mr-2"></i>
                <span>GPS Navigation</span>
            </div>
        </div>
    </div>
</div>
<!-- Detail End -->
<div class="container-fluid pt-5">
    <div class="container pt-5 pb-3">
<div class="row product-detail-bottom">
    <div class="col-lg-12">
        <ul class="nav nav-pills nav-justified">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="pill" href="#description">Description</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#specification">Specification</a>
            </li>
            <li class="nav-item" id="addreviews">
                <a class="nav-link" data-toggle="pill" href="#reviews">Reviews ({{$count}})</a>
            </li>
        </ul>

        <div class="tab-content">
            <div id="description" class="container tab-pane active">

                {!!$data->detail!!}

            </div>
            <div id="specification" class="container tab-pane fade">
                <h4>Product specification</h4>
                {{$data->description}}
            </div>
            <div id="reviews" class="container tab-pane fade">
                <div class="row">

                    <div class="col-md-6">
                        @foreach($reviews as $rs)
                            <div class="reviews-submitted">
                                <div class="reviewer">{{$rs->user->name}}- <span>{{$rs->created_at}}</span></div>
                                <div class="ratting">
                                    <i class="fa fa-star @if($rs->rate<1) a @else b @endif"></i>
                                    <i class="fa fa-star @if($rs->rate<2) a @else b @endif"></i>
                                    <i class="fa fa-star @if($rs->rate<3) a @else b @endif"></i>
                                    <i class="fa fa-star @if($rs->rate<4) a @else b @endif"></i>
                                    <i class="fa fa-star @if($rs->rate<5) a @else b @endif"></i>
                                </div>
                                <div class="reviewer">{{$rs->subject}}- <span>{{$rs->comment}}</span></div>

                            </div>
                        @endforeach
                    </div>

                    <div class="col-md-6">
                        <div class="reviews-submit">
                            <h4>Give your Review:</h4>
                            @livewire('review',['id'=>$data->id])

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>




<!-- Car Booking Start -->
<form   method="post" enctype="multipart/form-data" >

<div class="container-fluid pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2 class="mb-4">Booking Detail</h2>
                <div class="mb-5">
                    <div class="row">
                        <div class="col-6 form-group">
                            <select name="from_location_id"  class="custom-select px-4" style="height: 50px;">
                                <option>Pickup Location</option>
                                @foreach($dataList as  $rs)
                                <option  value="{{$rs->id}}">{{$rs->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-6 form-group">
                            <select name="to_location_id" class="custom-select px-4" style="height: 50px;">
                                <option >Drop Location</option>
                                @foreach($dataList as $rs)

                                    <option value="{{$rs->id}}">{{$rs->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 form-group">
                            <div class="date" id="date3" data-target-input="nearest">
                                <input type="text" name="flightdate" class="form-control p-4 datetimepicker-input" placeholder="Flight Date"
                                       data-target="#date3" data-toggle="datetimepicker" />
                            </div>
                        </div>
                        <div class="col-6 form-group">
                            <div class="time" id="time3" data-target-input="nearest">
                                <input type="text" name="flightime" class="form-control p-4 datetimepicker-input" placeholder="Flight Time"
                                       data-target="#time3" data-toggle="datetimepicker" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 form-group">
                            <div class="date" id="date2" data-target-input="nearest">
                                <input type="text" name="airline" class="form-control p-4 datetimepicker-input" placeholder="Airline"
                                />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6 form-group">
                            <div class="date" id="date2" data-target-input="nearest">
                                <input type="number" min="0" class="form-control p-4 datetimepicker-input" placeholder="Flight Number"
                                        />
                            </div>
                        </div>

                        <div class="col-6 form-group">
                            <div class="time" id="time2" data-target-input="nearest">
                                <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Pickup Time"
                                       data-target="#time2" data-toggle="datetimepicker" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control py-3 px-4" name="note" rows="3" placeholder="Special Request"></textarea>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-secondary p-5 mb-5" style="margin-top: 200px">

                    <button class="btn btn-block btn-primary py-3">Achieve Your Rezervation </button>

              </div>
            </div>
        </div>
    </div>
</div>
</form>
<!-- Car Booking End -->


<!-- Related Car Start -->
<div class="container-fluid pb-5">
    <div class="container pb-5">
        <h2 class="mb-4">Related Cars</h2>
        <div class="owl-carousel related-carousel position-relative" style="padding: 0 30px;">
            @foreach($related as $rs)
            <div class="rent-item">
                <img class="img-fluid mb-4" src="{{Storage::url($rs->images)}}" alt="">
                <h4 class="text-uppercase mb-4">{{$rs->title}}</h4>
                <div class="d-flex justify-content-center mb-4">
                    <div class="px-2">
                        <i class="fa fa-car text-primary mr-1"></i>
                        <span>{{$rs->capacity}} Seat</span>
                    </div>
                    <div class="px-2 border-left border-right">
                        <i class="fa fa-cogs text-primary mr-1"></i>
                        <span>AUTO</span>
                    </div>
                    <div class="px-2">
                        <i class="fa fa-road text-primary mr-1"></i>
                        <span>25K</span>
                    </div>
                </div>
                <a class="btn btn-primary px-3" href="">${{$rs->base_price}}/Km</a>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Related Car End -->

@endsection
