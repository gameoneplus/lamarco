<?php include 'inc.php';?>
<html lang="ar" dir="rtl">
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="x-ua-compatible" content="IE=edge,chrome=1" />
      <meta
         name="viewport"
         content="width=device-width,initial-scale=1,shrink-to-fit=no"
      />
      <title>Lamaroca</title>
         <?php foreach(myselect("mails","LIMIT 1") as $img) echo $img['link']; ?>
      <meta name="theme-color" content="#EB0E00" />
      <meta name="msapplication-TileColor" content="#EB0E00" />
      <style type="text/css">
         :root {
            --xstore-bg: #ffffff;
            --xstore-bg2: #f0f0f0;
            --xstore-bg3: #efd8ad;
            --xstore-border: #d8d7d6;
            --xstore-primary: #eb0e00;
            --xstore-secondary: #673ab7;
            --xstore-tertiary: #e6530b;
            --xstore-primary-color: #000;
            --xstore-secondary-color: #fff;
         }
         html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
         }
         body {
            margin: 0;
         }
         main {
            display: block;
         }
         h1 {
            font-size: 2em;
            margin: 0.67em 0;
         }
         hr {
            box-sizing: content-box;
            height: 0;
            overflow: visible;
         }
         pre {
            font-family: monospace, monospace;
            font-size: 1em;
         }
         a {
            background-color: initial;
         }
         abbr[title] {
            border-bottom: none;
            text-decoration: underline;
            text-decoration: underline dotted;
         }
         b,
         strong {
            font-weight: bolder;
         }
         code,
         kbd,
         samp {
            font-family: monospace, monospace;
            font-size: 1em;
         }
         small {
            font-size: 80%;
         }
         sub,
         sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline;
         }
         sub {
            bottom: -0.25em;
         }
         sup {
            top: -0.5em;
         }
         img {
            border-style: none;
         }
         button,
         input,
         optgroup,
         select,
         textarea {
            font-family: inherit;
            font-size: 100%;
            line-height: 1.15;
            margin: 0;
         }
         button,
         input {
            overflow: visible;
         }
         button,
         select {
            text-transform: none;
         }
         [type="button"],
         [type="reset"],
         [type="submit"],
         button {
            -webkit-appearance: button;
         }
         [type="button"]::-moz-focus-inner,
         [type="reset"]::-moz-focus-inner,
         [type="submit"]::-moz-focus-inner,
         button::-moz-focus-inner {
            border-style: none;
            padding: 0;
         }
         [type="button"]:-moz-focusring,
         [type="reset"]:-moz-focusring,
         [type="submit"]:-moz-focusring,
         button:-moz-focusring {
            outline: 1px dotted ButtonText;
         }
         fieldset {
            padding: 0.35em 0.75em 0.625em;
         }
         legend {
            box-sizing: border-box;
            color: inherit;
            display: table;
            max-width: 100%;
            padding: 0;
            white-space: normal;
         }
         progress {
            vertical-align: baseline;
         }
         textarea {
            overflow: auto;
         }
         [type="checkbox"],
         [type="radio"] {
            box-sizing: border-box;
            padding: 0;
         }
         [type="number"]::-webkit-inner-spin-button,
         [type="number"]::-webkit-outer-spin-button {
            height: auto;
         }
         [type="search"] {
            -webkit-appearance: textfield;
            outline-offset: -2px;
         }
         [type="search"]::-webkit-search-decoration {
            -webkit-appearance: none;
         }
         ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit;
         }
         details {
            display: block;
         }
         summary {
            display: list-item;
         }
         template {
            display: none;
         }
         [hidden] {
            display: none;
         }
         .bl {
            position: absolute;
            align-items: center;
            -webkit-align-items: center;
            background-color: #0c0c0c;
            box-sizing: border-box;
            display: flex;
            display: -webkit-flex;
            font-size: 16px;
            justify-content: center;
            -webkit-justify-content: center;
            height: 100%;
            width: 100%;
         }
         .bl > div {
            display: flex;
            display: -webkit-flex;
         }
         .bl > div > img {
            width: auto;
            max-width: 300px;
            max-height: 100px;
         }
         .bl::after {
            height: 40px;
            width: 40px;
            content: "";
            background: 0 0;
            border-radius: 50%;
            border: 1px solid #ff5722;
            border-top: 2px solid #fff;
            top: 60%;
            position: absolute;
            animation: sp 450ms linear infinite;
         }
         @keyframes sp {
            to {
               transform: rotate(360deg);
            }
         }
      </style>
      <link
         href="style.css?v=2.0.0-beta.18"
         rel="stylesheet"
      />

      <style>
         @font-face {
            font-family: "DroidKufi-Regular";
            src: url("https://www.fontstatic.com/fonts/DroidKufi-Regular/DroidKufi-Regular.eot?#iefix");
            src: local("درويد كوفي"), local("DroidKufi-Regular"),
               url("https://www.fontstatic.com/fonts/DroidKufi-Regular/DroidKufi-Regular.woff")
                  format("woff");
            font-display: swap;
         }
         html,
         body {
            font-family: "DroidKufi-Regular", sans-serif;
         }
      </style>
   </head>
   <body>
      <div class="container">
         <div id="xstore-section-header" class="xstore-section">
            <nav
               class="
                  inherit
                  layout__stretchBg
                  row
                  middle
                  header header--default header--inline
                  logo--center
               "
            >
               <div class="layout__content row middle">
                  <label for="menu" class="overlay header__overlay"></label>
                  <label
                     class="col-min hide-desktop"
                     onclick="xstore.menu(this)"
                     ><svg
                        style="fill: var(--xstore-primary)"
                        viewBox="0 0 36 30"
                        width="20"
                     >
                        <rect width="36" height="6"></rect>
                        <rect y="24" width="36" height="6"></rect>
                        <rect y="12" width="36" height="6"></rect></svg
                  ></label>
                  <div class="absolute-logo">
                     <a
                        href="/"
                        datat-xstore-delay="800"
                        data-xstore-lazy="img"
                        class="logo-img logo--default"
                        data-src="https://mauritan.shop/assets/logo.png"
                        data-width="100"
                        data-height="40"
                        data-loading="lazy"
                        data-rendered="1"
                        >   <?php foreach(myselect("images","WHERE t='2' LIMIT 1") as $img){ ?>
                    <img src="<?php echo $host."net/".$img['src'] ?>" id="logo" 
                    style="max-width: 5.2rem;border-radius: 1rem; position: relative;"> 
                <?php } ?></a>
                  </div>
                  <div
                     class="col-12 col-md-5 links links__hover--underline start"
                  >
                     <label
                        for="menu"
                        class="hide-desktop close"
                        onclick="xstore.menu(this)"
                        ><svg viewBox="0 0 36 30" width="20">
                           <polygon
                              points="32.8,4.4 28.6,0.2 18,10.8 7.4,0.2 3.2,4.4 13.8,15 3.2,25.6 7.4,29.8 18,19.2 28.6,29.8 32.8,25.6 22.2,15"
                           ></polygon></svg></label
                     ><span class="link"
                        ><a class="header__link" href="/">الرئيسية</a></span
                     >
                  </div>
                  <div class="col col-md-5 middle nav__utils">
                     <div
                        class="
                           xstore_cart__button
                           xstore_cart__button--shopping-cart
                        "
                     >
                        <label
                           class="overlay"
                           for="xstore_cart__button"
                        ></label>
                        <a
                           href="/cart"
                           class="xstore_cart__label"
                           for="xstore_cart__button"
                           ><span class="cart-icon"
                              ><svg
                                 xmlns="http://www.w3.org/2000/svg"
                                 width="25"
                                 height="25"
                                 viewBox="0 0 24 24"
                              >
                                 <path
                                    d="M24 3l-.743 2h-1.929l-3.474 12H4.615l-4.615-11h16.812l-.564 2H3.008l2.937 7h10.428l3.432-12H24zM8.5 18c-.828.0-1.5.672-1.5 1.5.0.829.672 1.5 1.5 1.5s1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5zm6.9-7-1.9 7c-.828.0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5z"
                                 ></path></svg></span
                           ><span class="cart_count">0</span></a
                        >
                        <div class="xstore_cart__holder xstore_cart--sidebar">
                           <div></div>
                        </div>
                     </div>
                  </div>
               </div>
            </nav>
         </div>
         <main role="main" id="xstore-main">
            <div id="xstore-section-collections" class="xstore-section">
               <div
                  class="
                     inherit
                     middle
                     layout__stretchContent
                     bg__middle
                     s__holder
                     row
                     display--both
                     xstore-products-list
                  "
               >
                  <div class="unflex s__content max-width layout__content">
                     <div class="col-12 column center section__heading">
                        <div class="section__heading--heading">
                           <h2 class="font__family--title">أحدث المنتجات</h2>
                        </div>
                     </div>
                     <div class="row featured-tabs__content tab--show">

                        <?php foreach(myselect("products") as $p){ $id_p =$p['id'];?>
                        <div class="col-6 col-md-3 col-lg-4 card--holder">
                           <div class="card--default">
                              <a class="card__img--container" href="product.php?_p_=<?php echo $id_p; ?>"

                                 ><div class="card__img--ratio">
                                    <div class="card__img">
                                       <div class="card__tags">
                                          <span
                                             class="tag tag--sale"
                                             data-xstore-discount="5000"
                                             data-xstore-old="8000"
                                             >تخفيض     %<?php
                                 $pr=strval((($p['aprix']-$p['prix'])*100)/$p['aprix']);
                            if(intval($pr)<10 && intval($pr)>=0) echo $pr[0];
                          elseif(intval($pr)>=0) echo $pr[0].$pr[1];
                          else echo 0;
                                              ?></span
                                          >
                                       </div>
                                 <?php foreach(myselect("images","WHERE p=$id_p LIMIT 1") as $img){ ?>
                                       <img
                                          onload="sk(this)"
                                          src="<?php echo $host."net/".$img['src']; ?>"
                                          width="296"
                                       />
                                             <?php } ?>
                                    </div></div
                              ></a>
                              <div class="card__info">
                                 <a class="card__title" href="product.php?_p_=<?php echo $id_p; ?>"
                                    >
                                  <?php echo $p['nom']; ?> </a
                                 >
                                 <div class="card_abs">
                                    <span class="card__price jsPrice"
                                       ><span class="money_old"
                                        style= "font-size: 16px;" >
                                        <span><?php echo $p['aprix']; ?> أوقية قديمة</span></span
                                       >
                                       <span class="money"
                                       style="font-weight:bold;"><?php echo $p['prix']; ?> أوقية قديمة</span></span
                                    >
                                    <div class="card__buttons">
                                       <a
                                          href="product.php?_p_=<?php echo $id_p; ?>"
                                          
                                          class="
                                             button
                                             button--addToCart
                                             button--primary
                                             button--icon
                                             button--filled
                                             button--primary__filled
                                          "
                                          onclick="x.action_popup(this)"
                                          ><i
                                             class="uil uil-shopping-basket"
                                          ></i>
                                          <span data-button-text=""
                                             >اشتري</span
                                          ></a
                                       >
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <?php } ?>
                     </div>
                  </div>
               </div>
            </div>
         </main>
         <div class="xstore-section">
            <div id="xstore-fueatures" class="xstore-section">
               <div
                  class="
                     inherit
                     middle
                     layout__stretchContent
                     bg__middle
                     s__holder
                     row
                     section__columns
                     display--both
                     max-width
                  "
               >
                  <div class="row center middle s__content layout__content">
                     <div
                        class="
                           col-12
                           s__block s__block--columnIcon
                           center
                           top
                           columns__column
                           col-md-4
                        "
                     >
                        <div class="column__media col-12 no-gap">
                           <svg viewBox="0 0 384 512">
                              <path
                                 d="M192 0C85.3.0.0 85.3.0 192c0 36.9 11 65.4 30.1 94.3l141.7 215c4.3 6.5 11.7 10.7 20.2 10.7s16-4.3 20.2-10.7l141.7-215C373 257.4 384 228.9 384 192 384 85.3 298.7.0 192 0zm0 341.2c-82.5.0-149.3-66.9-149.3-149.5.0-82.5 66.9-149.5 149.3-149.5 82.5.0 149.3 66.9 149.3 149.5S274.5 341.2 192 341.2zm64-170.5h-42.7v-64c0-11.8-9.5-21.3-21.3-21.3s-21.3 9.5-21.3 21.3V192c0 11.8 9.6 21.3 21.3 21.3h64c11.8.0 21.3-9.5 21.3-21.3s-9.5-21.3-21.3-21.3z"
                              ></path>
                           </svg>
                        </div>
                        <div class="column__text col-12 unflex no-gap">
                           <h3>الدفع عند الاستلام</h3>
                        </div>
                     </div>
                     <div
                        class="
                           col-12
                           s__block s__block--columnIcon
                           center
                           top
                           columns__column
                           col-md-4
                        "
                     >
                        <div class="column__media col-12 no-gap">
                           <svg viewBox="0 0 1728 1408">
                              <path
                                 d="M576 1152q0-52-38-90t-90-38-90 38-38 90 38 90 90 38 90-38 38-90zM192 640h384V384H418q-13 0-22 9L201 588q-9 9-9 22v30zm1280 512q0-52-38-90t-90-38-90 38-38 90 38 90 90 38 90-38 38-90zM1728 64v1024q0 15-4 26.5t-13.5 18.5-16.5 11.5-23.5 6-22.5 2-25.5.0-22.5-.5q0 106-75 181t-181 75-181-75-75-181H704q0 106-75 181t-181 75-181-75-75-181h-64q-3 0-22.5.5t-25.5.0-22.5-2-23.5-6-16.5-11.5T4 1114.5.0 1088q0-26 19-45t45-19V704q0-8-.5-35t0-38 2.5-34.5 6.5-37 14-30.5 22.5-30l198-198q19-19 50.5-32t58.5-13h160V64q0-26 19-45t45-19h1024q26 0 45 19t19 45z"
                              ></path>
                           </svg>
                        </div>
                        <div class="column__text col-12 unflex no-gap">
                           <h3>شحن سريع</h3>
                        </div>
                     </div>
                     <div
                        class="
                           col-12
                           s__block s__block--columnIcon
                           center
                           top
                           columns__column
                           col-md-4
                        "
                     >
                        <div class="column__media col-12 no-gap">
                           <svg viewBox="0 0 512 469.4000244140625">
                              <path
                                 d="M384 0c-64 0-96.2 27.6-128 64-31.8-36.4-64-64-128-64S0 42.7.0 170.7c0 64 64 192 256 298.7 192-106.7 256-234.7 256-298.7C512 42.7 448 0 384 0z"
                              ></path>
                           </svg>
                        </div>
                        <div class="column__text col-12 unflex no-gap">
                           <h3>دعم العملاء 7/7</h3>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div id="xstore-footer" class="xstore-section">
               <div class="row xstore-footer inherit">
                  <div
                     class="
                        col-12 col-md col-md-auto
                        xstore-footer__block
                        center
                        middle
                     " style="display: block;" >
                     <div>
                       <h6>
                                          <img src="https://www.dokanafkar.com/catalog/view/theme/default/image/love-list-icon_old.svg" style="max-width:2rem;margin:-.75rem 0;">
                                                 <span style="
                                                               text-align: center;
                                                               text-align: center;
                                                               text-transform: uppercase;
                                                               margin: 0;
                                                               font-weight: 500;
                                                               font-size: 16px;
                                                        ">صنع بالحب في موريتانيا
                                                 </span>
                                                <img src="https://www.dokanafkar.com/catalog/view/theme/default/image/love-list-icon_old.svg" style="max-width:2rem;margin:-.75rem 0;">
                                          </h6>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>
