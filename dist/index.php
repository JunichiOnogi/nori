<?php
$thisPageName = 'top';
$path = realpath(dirname(__FILE__) . '') . "/";
include_once($path . 'app_config.php');
include($path . 'libs/head.php');
?>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
<link href="<?php echo APP_ASSETS; ?>css/page/top.min.css?ver=1" rel="stylesheet">

</head>

<body id="top">

    <main>
        <div class="mv">
            <div class="base">
                <div class="mv__inner">
                    <?php include($path . 'libs/header.php'); ?>
                    <div class="mv__img">
                        <div class="mv__img__main">
                            <picture>
                                <source srcset="<?php echo APP_ASSETS; ?>img/img_mv_sp.jpg.webp" type="image/webp" media="(max-width:768px)">
                                <source srcset="<?php echo APP_ASSETS; ?>img/img_mv_sp.jpg.jpg" media="(max-width:768px)">
                                <source srcset="<?php echo APP_ASSETS; ?>img/img_mv.jpg.webp" type="image/webp">
                                <img src="<?php echo APP_ASSETS; ?>img/img_mv.jpg" alt="美味しくお肉をたべる。">
                            </picture>
                            <div class="mv__img__ttl">
                                <h1 class="ttl">美味しくお肉をたべる。</h1>
                            </div>
                        </div>
                        <div class="mv__img__bottom">
                            <div class="mv__img__sub">
                                <picture>
                                    <source srcset="<?php echo APP_ASSETS; ?>img/img_mv_sub.jpg.webp" type="image/webp">
                                    <img src="<?php echo APP_ASSETS; ?>img/img_mv_sub.jpg" alt="いろんな食べ方が楽しめる" class="img">
                                </picture>
                                <div class="pc">
                                    <picture>
                                        <source srcset="<?php echo APP_ASSETS; ?>img/txt_mv_sub.png.webp" type="image/webp">
                                        <img src="<?php echo APP_ASSETS; ?>img/txt_mv_sub.png" alt="いろんな食べ方が楽しめる" class="txt">
                                    </picture>
                                </div>
                            </div>
                            <div class="mv__img__sp sp">
                                <div class="mv__img__sp__head">
                                    <p class="p-idx-head__subtitle">HOW TO EAT</p>
                                    <p class="mv__img__sp__title">いろんな食べ方が楽しめる</p>
                                </div>
                                <p class="mv__img__sp__text">肉寿司、肉茶漬け<br>絶品の一口</p>
                            </div>
                            <div class="mv__img__sns pc">
                                <a href="#" class="insta opacity" target="_blank">
                                    <img src="<?php echo APP_ASSETS; ?>img/ico_insta.svg" alt="">
                                    <span>INSTAGRAM</span>
                                </a>
                            </div>
                        </div>
                        <div class="mv__img__news">
                            <div class="category">重要なお知らせ</div>
                            <p class="date">2023.3.8</p>
                            <p class="ttl"><a href="#">新型コロナウイルスに関する当店の営業状況と感染症予防対策実施について</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="p-idx-prade" id="concept">
            <div class="p-idx-base p-idx-prade__base">
                <div class="p-idx-prade__txtfield">
                    <header class="p-idx-head is-vertical p-idx-prade__head">
                        <p class="p-idx-head__subtitle">CONCEPT</p>
                        <h2 class="p-idx-head__title">ごあいさつ</h2>
                    </header>
                    <div class="p-idx-prade__info">
                        <picture class="p-idx-prade__mark pc">
                            <source srcset="<?php echo APP_ASSETS; ?>img/img_prade_mark.png.webp" type="image/webp">
                            <img src="<?php echo APP_ASSETS; ?>img/img_prade_mark.png" width="115" height="115" alt="">
                        </picture>
                        <p class="p-idx-text">のりちゃん、能登牛の肉カットにこだわり。肉重定食が自慢。お肉のカットには独自のこだわりを持ち、手作りの醤油麹や酵素シロップも必食。健康と美味しさの調和が魅力。のりちゃんで、こだわりの味わいをご堪能ください。ダミーテキスト</p>
                        <a href="#howto" class="p-idx-link">こだわりへ</a>
                    </div>
                </div>
                <picture class="p-idx-prade__image">
                    <source srcset="<?php echo APP_ASSETS; ?>img/img_prade_main_sp.jpg.webp" type="image/webp" media="(max-width:768px)">
                    <source srcset="<?php echo APP_ASSETS; ?>img/img_prade_main_sp.jpg.jpg" media="(max-width:768px)">
                    <source srcset="<?php echo APP_ASSETS; ?>img/img_prade_main.jpg.webp" type="image/webp">
                    <img src="<?php echo APP_ASSETS; ?>img/img_prade_main.jpg" width="696" height="405" class="p-idx-img" alt="">
                </picture>
            </div>
        </section>
        <div class="p-idx-inner">
            <section class="p-idx-howto" id="howto">
                <div class="p-idx-base p-idx-howto__base">
                    <div class="p-idx-howto__txtfield">
                        <header class="p-idx-head">
                            <p class="p-idx-head__subtitle">HOW TO EAT</p>
                            <h2 class="p-idx-head__title">のりちゃんの<br>こだわり</h2>
                        </header>
                        <picture class="p-idx-howto__spimage sp">
                            <source srcset="<?php echo APP_ASSETS; ?>img/img_howto_sp.png.webp" type="image/webp">
                            <img src="<?php echo APP_ASSETS; ?>img/img_howto_sp.png" width="364" height="302" class="p-idx-img" alt="">
                        </picture>
                        <p class="p-idx-text">のりちゃん、能登牛の肉カットにこだわり。肉重定食が自慢。お肉のカットには独自のこだわりを持ち、手作りの醤油麹や酵素シロップも必食。健康と美味しさの調和が魅力。のりちゃんで、こだわりの味わいをご堪能ください。</p>
                        <a href="#menu" class="p-idx-link">メニューを見る</a>
                        <picture class="p-idx-howto__subimage pc">
                            <source srcset="<?php echo APP_ASSETS; ?>img/img_howto_sub.jpg.webp" type="image/webp">
                            <img src="<?php echo APP_ASSETS; ?>img/img_howto_sub.jpg" width="244" height="244" alt="">
                        </picture>
                    </div>
                    <picture class="p-idx-howto__image pc">
                        <source srcset="<?php echo APP_ASSETS; ?>img/img_howto_main.jpg.webp" type="image/webp">
                        <img src="<?php echo APP_ASSETS; ?>img/img_howto_main.jpg" width="696" height="540" class="p-idx-img" alt="">
                    </picture>
                </div>
            </section>
            <section class="p-idx-menu" id="menu">
                <div class="p-idx-base p-idx-menu__base">
                    <header class="p-idx-head is-vertical p-idx-menu__head">
                        <p class="p-idx-head__subtitle">SET MENU</p>
                        <h2 class="p-idx-head__title">定食のメニュー</h2>
                    </header>
                    <div class="p-idx-menu__txtfield">
                        <p class="p-idx-text p-idx-menu__text">のりちゃん、能登牛の肉カットにこだわり。<br class="pc">肉重定食が自慢。お肉のカットには独自のこだわりを持ち、<br class="pc">手作りの醤油麹や酵素シロップも必食。健康と美味しさの調和が魅力。</p>
                        <a href="#shop" class="p-idx-link pc">お店の紹介</a>
                    </div>
                    <div class="p-idx-menu__swiper">
                        <div class="p-idx-menu__st">
                            <div class="p-idx-menu__prev"><img src="assets/img/ico_prev.svg" width="38" height="38" alt=""></div>
                            <p class="p-idx-menu__st-page"><span class="p-idx-menu__st-now">1</span> / <span class="p-idx-menu__st-max"></span></p>
                            <div class="p-idx-menu__next"><img src="assets/img/ico_next.svg" width="38" height="38" alt=""></div>
                        </div>
                        <div class="swiper-wrapper">
                        <div class="swiper-slide p-idx-menu__item">
                                <div class="p-idx-menu__item-img">
                                    <picture>
                                        <source srcset="<?php echo APP_ASSETS; ?>img/img_menu.jpg.webp" type="image/webp">
                                        <img src="<?php echo APP_ASSETS; ?>img/img_menu.jpg" width="375" height="263" alt="">
                                    </picture>
                                    <p class="p-idx-menu__item-cate">肉の部位</p>
                                </div>
                                <p class="p-idx-menu__item-name">能登牛定食</p>
                                <p class="p-idx-text p-idx-menu__item-text">のりちゃん、能登牛の肉カットにこだわり。肉重定食が自慢。お肉のカットには独自のこだわりを持ち、手作りの醤油麹や酵素シロップも必食。健康と美味しさの調和が魅力。のりちゃんで、こだわりの味わいをご堪能ください。</p>
                            </div>
                            <div class="swiper-slide p-idx-menu__item">
                                <div class="p-idx-menu__item-img">
                                    <picture>
                                        <source srcset="<?php echo APP_ASSETS; ?>img/img_menu.jpg.webp" type="image/webp">
                                        <img src="<?php echo APP_ASSETS; ?>img/img_menu.jpg" width="375" height="263" alt="">
                                    </picture>
                                    <p class="p-idx-menu__item-cate">肉の部位</p>
                                </div>
                                <p class="p-idx-menu__item-name">能登牛定食</p>
                                <p class="p-idx-text p-idx-menu__item-text">のりちゃん、能登牛の肉カットにこだわり。肉重定食が自慢。お肉のカットには独自のこだわりを持ち、手作りの醤油麹や酵素シロップも必食。健康と美味しさの調和が魅力。のりちゃんで、こだわりの味わいをご堪能ください。</p>
                            </div>
                            <div class="swiper-slide p-idx-menu__item">
                                <div class="p-idx-menu__item-img">
                                    <picture>
                                        <source srcset="<?php echo APP_ASSETS; ?>img/img_menu.jpg.webp" type="image/webp">
                                        <img src="<?php echo APP_ASSETS; ?>img/img_menu.jpg" width="375" height="263" alt="">
                                    </picture>
                                    <p class="p-idx-menu__item-cate">肉の部位</p>
                                </div>
                                <p class="p-idx-menu__item-name">能登牛定食</p>
                                <p class="p-idx-text p-idx-menu__item-text">のりちゃん、能登牛の肉カットにこだわり。肉重定食が自慢。お肉のカットには独自のこだわりを持ち、手作りの醤油麹や酵素シロップも必食。健康と美味しさの調和が魅力。のりちゃんで、こだわりの味わいをご堪能ください。</p>
                            </div>
                            <div class="swiper-slide p-idx-menu__item">
                                <div class="p-idx-menu__item-img">
                                    <picture>
                                        <source srcset="<?php echo APP_ASSETS; ?>img/img_menu.jpg.webp" type="image/webp">
                                        <img src="<?php echo APP_ASSETS; ?>img/img_menu.jpg" width="375" height="263" alt="">
                                    </picture>
                                    <p class="p-idx-menu__item-cate">肉の部位</p>
                                </div>
                                <p class="p-idx-menu__item-name">能登牛定食</p>
                                <p class="p-idx-text p-idx-menu__item-text">のりちゃん、能登牛の肉カットにこだわり。肉重定食が自慢。お肉のカットには独自のこだわりを持ち、手作りの醤油麹や酵素シロップも必食。健康と美味しさの調和が魅力。のりちゃんで、こだわりの味わいをご堪能ください。</p>
                            </div>
                            <div class="swiper-slide p-idx-menu__item">
                                <div class="p-idx-menu__item-img">
                                    <picture>
                                        <source srcset="<?php echo APP_ASSETS; ?>img/img_menu.jpg.webp" type="image/webp">
                                        <img src="<?php echo APP_ASSETS; ?>img/img_menu.jpg" width="375" height="263" alt="">
                                    </picture>
                                    <p class="p-idx-menu__item-cate">肉の部位</p>
                                </div>
                                <p class="p-idx-menu__item-name">能登牛定食</p>
                                <p class="p-idx-text p-idx-menu__item-text">のりちゃん、能登牛の肉カットにこだわり。肉重定食が自慢。お肉のカットには独自のこだわりを持ち、手作りの醤油麹や酵素シロップも必食。健康と美味しさの調和が魅力。のりちゃんで、こだわりの味わいをご堪能ください。</p>
                            </div>
                        </div>
                        <div class="p-idx-menu__dots sp"></div>
                    </div>
                </div>
            </section>
            <section class="p-idx-shop" id="shop">
                <div class="p-idx-base p-idx-shop__base">
                    <div class="p-idx-shop__txtfield">
                        <header class="p-idx-head">
                            <p class="p-idx-head__subtitle">SHOP INFORMATION</p>
                            <h2 class="p-idx-head__title">お店のご紹介</h2>
                        </header>
                        <picture class="p-idx-shop__spimage sp">
                            <source srcset="<?php echo APP_ASSETS; ?>img/img_shop_sp.png.webp" type="image/webp">
                            <img src="<?php echo APP_ASSETS; ?>img/img_shop_sp.png" width="364" height="302" class="p-idx-img" alt="">
                        </picture>
                        <p class="p-idx-text">のりちゃん、能登牛の肉カットにこだわり。肉重定食が自慢。お肉のカットには独自のこだわりを持ち、手作りの醤油麹や酵素シロップも必食。健康と美味しさの調和が魅力。のりちゃんで、こだわりの味わいをご堪能ください。ダミーテキスト</p>
                        <a href="#access" class="p-idx-link">アクセス情報</a>
                    </div>
                    <div class="p-idx-shop__image pc">
                        <picture class="p-idx-shop__image-sub">
                            <source srcset="<?php echo APP_ASSETS; ?>img/img_shop_sub.jpg.webp" type="image/webp">
                            <img src="<?php echo APP_ASSETS; ?>img/img_shop_sub.jpg" width="313" height="420" class="p-idx-img" alt="">
                        </picture>
                        <picture class="p-idx-shop__image-main">
                            <source srcset="<?php echo APP_ASSETS; ?>img/img_shop_main.jpg.webp" type="image/webp">
                            <img src="<?php echo APP_ASSETS; ?>img/img_shop_main.jpg" width="337" height="420" class="p-idx-img" alt="">
                        </picture>
                    </div>
                </div>
            </section>
        </div>
        <section class="p-idx-sns" id="sns">
            <div class="p-idx-base p-idx-sns__base">
                <div class="p-idx-sns__txtfield">
                    <header class="p-idx-head">
                        <p class="p-idx-head__subtitle">OFFICIAL SNS</p>
                        <h2 class="p-idx-head__title">今日の日替り<br class="sp">配信中</h2>
                    </header>
                    <p class="p-idx-text">日替わりのりちゃんセットのメインおかずの内容や、最新の営業日・時間帯を毎日配信しています。珍しいお酒の入荷お知らせも。<br class="sp">是非お気軽にフォローしてくださいね。</p>
                    <a href="" target="_blank" class="p-idx-button is-ig">Instagramを見る</a>
                </div>
                <div class="p-idx-sns__feed">

                </div>
            </div>
        </section>
        <section class="p-idx-acs" id="access">
            <div class="p-idx-base">
                <div class="p-idx-acs__base">
                    <header class="p-idx-head is-vertical">
                        <p class="p-idx-head__subtitle">ACCESS INFO</p>
                        <h2 class="p-idx-head__title">アクセス情報</h2>
                    </header>
                    <div class="p-idx-acs__map">
                        <div class="p-idx-acs__map-frame"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d802.927917282307!2d136.6633171638885!3d36.57099713122361!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5ff833740c136de7%3A0xc04e6444477447d0!2z44CSOTIwLTA5MDIg55-z5bed55yM6YeR5rKi5biC5bp-idx-5by155S677yS5LiB55uu77yR77yT4oiS77yZIOaghOWvv-WPuA!5e0!3m2!1sja!2sjp!4v1714321364072!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                        <a href="https://maps.app.goo.gl/Ght4nAtNWmoYXYeL6" target="_blank" class="p-idx-button is-map p-idx-acs__button">Googlemapで見る</a>
                    </div>
                </div>
                <div class="p-idx-acs__tableWrapper">
                    <table class="p-idx-acs__table">
                        <tr>
                            <th>住所</th>
                            <td>〒000-0000<br>石川県金沢市尾張町２丁目１３−９ 栄寿司</td>
                        </tr>
                        <tr>
                            <th>交通手段</th>
                            <td>金沢駅西口からバスXXX方面、徒歩100m</td>
                        </tr>
                        <tr>
                            <th>TEL</th>
                            <td><a href="tel:000-0000-0000">000-0000-0000</a></td>
                        </tr>
                        <tr>
                            <th>メール</th>
                            <td><a href="mailto:&#105;&#110;&#102;&#111;&#64;&#110;&#111;&#114;&#105;&#99;&#104;&#97;&#110;&#46;&#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;">&#105;&#110;&#102;&#111;&#64;&#110;&#111;&#114;&#105;&#99;&#104;&#97;&#110;&#46;&#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;</a></td>
                        </tr>
                    </table>
                    <table class="p-idx-acs__table">
                        <tr>
                            <th>営業時間</th>
                            <td>
                                <ul>
                                    <li>月〜水 / 金 / 土 - 11:30～21:00 <br class="sp">20:00ラストオーダー</li>
                                    <li>日 - 11:00～15:00 <br class="sp">14:30ラストオーダー<br>※日曜のみ予約不可</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <th>定休日</th>
                            <td>木曜・祝日</td>
                        </tr>
                        <tr>
                            <th>席数</th>
                            <td>テーブル12席/カウンター8席</td>
                        </tr>
                    </table>
                </div>
                <div class="mv__img__news">
                    <div class="category">重要なお知らせ</div>
                    <p class="date">2023.3.8</p>
                    <p class="ttl"><a href="#">新型コロナウイルスに関する当店の営業状況と感染症予防対策実施について</a></p>
                </div>
            </div>
        </section>
    </main>

    <script>
    (()=>{
        let slider,option;

        window.addEventListener('load', () => {
            let totalSlides = document.querySelectorAll('.p-idx-menu__item').length;
            document.querySelector('.p-idx-menu__st-max').textContent = totalSlides;

            createSwiper();
        }, false);

        option = {
            loop:true,
            slidesPerView: "auto",
            centeredSlides: true,
            spaceBetween:26,
            pagination: {
                el: ".p-idx-menu__dots",
                type: 'progressbar',
                clickable: true
            },
            navigation: {
                nextEl: ".p-idx-menu__next",
                prevEl: ".p-idx-menu__prev",
            },
            breakpoints: {
                769: {
                    spaceBetween:0,
                    centeredSlides: false,
                }
            }
        }

        function createSwiper() {
            slider  = new Swiper('.p-idx-menu__swiper', option);
            slider.on('slideChange', function () {
                let currentSlide = slider.realIndex + 1;
                document.querySelector('.p-idx-menu__st-now').textContent = currentSlide;
            });
        }
    })();
    </script>

    <?php include($path . 'libs/footer.php'); ?>
</body>

</html>