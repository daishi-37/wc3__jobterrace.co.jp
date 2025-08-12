<?php get_header(); ?>
<?php
    $topimg = THEMEIMG."/toppage";
?>
<main class="main">
    <div class="main__inner">
        <section class="top-mv">
            <div class="top-mv__inner">
                <figure class="top-mv__figure slick-type1">
                    <picture>
                        <img src="<?= $topimg; ?>/mv1.jpg" class="top-mv__img mv1">
                    </picture>
                    <picture>
                        <img src="<?= $topimg; ?>/mv2.jpg" class="top-mv__img mv2">
                    </picture>
                    <picture>
                        <img src="<?= $topimg; ?>/mv4.jpg" class="top-mv__img mv4">
                    </picture>
                </figure>
                <div class="top-mv__sitname fade fade-up-50 ">Jobterrace</div>
                <div class="top-mv__copy fade fade-up-50">
                    人と仕事、<br>
                    そして<br>
                    社会に未来を照らす
                </div>
            </div>
        </section>
        <section class="top-message">
            <div class="top-message__inner">
                <div class="top-message__bg">
                    <div class="top-message__obj1">
                        <picture>
                            <source srcset="<?= $topimg; ?>/about__obj1-sp.svg" media="(max-width: 1024px)">
                            <source srcset="<?= $topimg; ?>/about__obj1.svg" media="(min-width: 1025px)">
                            <img src="<?= $topimg; ?>/about__obj1.svg" alt="">
                        </picture>
                    </div>
                    <div class="top-message__obj2">
                        <picture>
                            <source srcset="<?= $topimg; ?>/about__obj2-sp.svg" media="(max-width: 1024px)">
                            <source srcset="<?= $topimg; ?>/about__obj2.svg" media="(min-width: 1025px)">
                            <img src="<?= $topimg; ?>/about__obj2.svg" alt="">
                        </picture>
                    </div>
                    <div class="top-message__img1 fade fade-up-50">
                        <img src="<?= $topimg; ?>/about__img1.jpg" alt="">
                    </div>
                    <div class="top-message__img2 fade fade-up-50">
                        <img src="<?= $topimg; ?>/about__img2.jpg" alt="">
                    </div>
                </div>
                <div class="top-message__box fade fade-up-50">
                    <div class="top-message__box-title">
                        <img src="<?= $topimg; ?>/about__box-title.png" alt="今のより良くにこだわり、こどもたちの未来をてらす。" >
                    </div>
                    <div class="top-message__box-text">
                        <p>
                            ジョブテラスは、<br class="br-md">中小企業の雇用支援を通じて<br>
                            <span>「人と仕事、そして<br class="br-md">社会に未来を照らす」</span><br>
                            というビジョンを掲げています。<br>
                            雇用の創出を通じ、<br class="br-md">少しでも事業課題に貢献する。<br>
                            横浜という大好きな地域で、 <br>
                            みなさまと一緒に日々精進を<br class="br-md">重ねていきたいと思っています。<br>
                        </p>
                    </div>
                    <div class="top-message__box-obj1">
                        <img src="<?= $topimg; ?>/about__box-obj1.svg" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="top-business section-type1">
            <div class="top-business__bg">
                <div class="top-business__obj1">
                    <picture>
                        <source srcset="<?= $topimg; ?>/business__obj1.svg" media="(min-width: 1025px)">
                        <img src="<?= $topimg; ?>/business__obj1.svg" alt="">
                    </picture>
                </div>
                <div class="top-business__obj2">
                    <picture>
                        <source srcset="<?= $topimg; ?>/business__obj2-sp.svg" media="(max-width: 1024px)">
                        <source srcset="<?= $topimg; ?>/business__obj2.svg" media="(min-width: 1025px)">
                        <img src="<?= $topimg; ?>/business__obj2.svg" alt="">
                    </picture>
                </div>
            </div>
            <div class="top-business__inner">
                <div class="top-business__box section-type1__box">
                    <h2 class="top-business__title h2-type1 fade fade-up-50">
                        Our<br>Business
                    </h2>
                    <div class="top-business__img1 fade fade-up-50">
                        <img src="<?= $topimg; ?>/business__img1.jpg" alt="">
                    </div>
                    <div class="top-business__text1 fade fade-up-50">
                        企業の採用活動をサポート
                    </div>
                    <div class="top-business__text2 fade fade-up-50">
                        企業の採用活動を社外人事担当として全面的にサポートし、貴社の採用成功にコミットします。採用戦略の立案から実行、効果測定まで、一貫して伴走することで、採用担当者様の負担を軽減し、最適な人材との出会いを創出します。
                    </div>
                    <div class="top-business__btn btn-type1 fade fade-up-50">
                        <a href="/Our-Business/#recruit-support" class="btn-type1__a">
                            <img src="<?= THEMEIMG ?>/btn-type1.svg" alt="" class="btn-type1__img">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="top-recruit section-type1">
            <div class="top-recruit__inner">
                <div class="top-recruit__objs1">
                    <div class="top-recruit___obj2">
                        <picture>
                            <source srcset="<?= $topimg; ?>/recruit__obj2.svg" media="(min-width: 1281px)">
                            <source srcset="<?= $topimg; ?>/recruit__obj2-sp.svg" media="(max-width: 1280px)">
                            <img src="<?= $topimg; ?>/recruit__obj2.svg" alt="">
                        </picture>
                    </div>
                    <div class="top-recruit__obj3">
                        <picture>
                            <source srcset="<?= $topimg; ?>/recruit__obj3.svg" media="(min-width: 1025px)">
                            <img src="<?= $topimg; ?>/recruit__obj3.svg" alt="">
                        </picture>
                    </div>
                </div>
                <div class="top-recruit__box section-type1__box">
                    <div class="top-recruit__title h2-type1 fade fade-up-50">
                        Recruit
                    </div>
                    <figure class="top-recruit__figure fade fade-up-50">
                        <img src="<?= $topimg; ?>/recruit__img1.jpg" alt="" class="top-recruit__img">
                    </figure>
                    <div class="top-recruit__items">
                        <a href="/recruit/#interview" class="top-recruit__item-link">
                            <div class="top-recruit__item item1">
                                <div class="top-recruit__item-title fade fade-up-50">
                                    <div class="top-recruit__item-title-inner">
                                        <div class="top-recruit__item-title-ja">先輩社員<br>インタビュー</div>
                                        <div class="top-recruit__item-title-en"><p>Jobterracein numbers</p></div>
                                    </div>
                                </div>
                                <div class="top-recruit__item-text fade fade-up-50">
                                    ジョブテラスは、中小企業の雇用支援を通じて 「人と仕事、そして社会に未来を照らす」というモットーを掲げています。
                                </div>
                                <div class="top-recruit__item-btn btn-type1 fade fade-up-50">
                                    <img src="<?= THEMEIMG ?>/btn-type1.svg" alt="" class="btn-type1__img">
                                </div>
                            </div>
                        </a>

                        <a href="/recruit/#Requirements" class="top-recruit__item-link">
                            <div class="top-recruit__item item2">
                                <div class="top-recruit__item-title fade fade-up-50">
                                    <div class="top-recruit__item-title-inner">
                                        <div class="top-recruit__item-title-ja">採用情報</div>
                                        <div class="top-recruit__item-title-en"><p>Requirements</p></div>
                                    </div>
                                </div>
                                <div class="top-recruit__item-text fade fade-up-50">
                                    ジョブテラスは、中小企業の雇用支援を通じて 「人と仕事、そして社会に未来を照らす」というモットーを掲げています。
                                </div>
                                <div class="top-recruit__item-btn btn-type1 fade fade-up-50">
                                    <img src="<?= THEMEIMG ?>/btn-type1.svg" alt="" class="btn-type1__img">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="top-recruti__bojs2">
                    <div class="top-recruit___obj1">
                        <picture>
                            <source srcset="<?= $topimg; ?>/recruit__obj1.svg" media="(min-width: 1025px)">
                            <img src="<?= $topimg; ?>/recruit__obj1.svg" alt="">
                        </picture>
                    </div>
                </div>
            </div>
        </section>
        <section class="top-about section-type1">
            <div class="top-about__inner">
                <div class="tob-about__box section-type1__box">
                    <h2 class="top-about__title h2-type1 fade fade-up-50">
                        About<br>us
                    </h2>
                    <figure class="top-about__figure fade fade-up-50">
                        <picture>
                            <source srcset="<?= $topimg; ?>/about__img1.png" media="(min-width: 1025px)">
                            <img src="<?= $topimg; ?>/about__img1.png" alt="" class="top-about__img">
                        </picture>
                    </figure>
                    <div class="top-about__menu">
                        <ul class="top-about__lists fade fade-up-50">
                            <li class="top-about__list">
                                <a href="/about-us/#jobterrace" class="top-about__list-link">
                                    <div class="top-about__list-text">ミッション・バリュー</div>
                                </a>
                            </li>
                            <li class="top-about__list">
                                <a href="/about-us/#ceo" class="top-about__list-link">
                                    <div class="top-about__list-text">代表挨拶</div>
                                </a>
                            </li>
                            <li class="top-about__list">
                                <a href="/about-us/#company" class="top-about__list-link">
                                    <div class="top-about__list-text">会社概要</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>