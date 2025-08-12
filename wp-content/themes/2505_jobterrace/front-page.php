<?php get_header(); ?>
<?php
    $topimg = THEMEIMG."/toppage";
?>
<main class="main">
    <div class="main__inner">
        <section class="hero">
            <div class="hero__bg">
                <ul>
                    <li class="hero__item is-active" style="transform: translate(0px, 0px); clip-path: circle(72% at 50% 50%);">
                        <div class="hero__item__scale" style="transform: translate(0px, 0px);">
                            <picture class="op-images">
                                <img src="<?= $topimg; ?>/hero-img1.jpg" loading="lazy">
                            </picture>
                        </div>
                    </li>
                    <li class="hero__item" style="transform: translate(0px, 0px); clip-path: circle(72% at 50% 50%);">
                        <div class="hero__item__scale" style="transform: translate(0px, 0px);">
                            <picture class="op-images">
                                <img src="<?= $topimg; ?>/hero-img2.jpg" loading="lazy">
                            </picture>
                        </div>
                    </li>
                    <li class="hero__item" style="transform: translate(0px, 0px); clip-path: circle(72% at 50% 50%);">
                        <div class="hero__item__scale" style="transform: translate(0px, 0px);">
                            <picture class="op-images">
                                <img src="<?= $topimg; ?>/hero-img3.jpg" loading="lazy">
                            </picture>
                        </div>
                    </li>

                </ul>
                <div class="hero__nav-area">
                    <div class="hero__nav__list">
                        <span class="hero__nav__item"><button class="hero__nav__btn">01</button></span>
                        <span class="hero__nav__item"><button class="hero__nav__btn">02</button></span>
                        <span class="hero__nav__item"><button class="hero__nav__btn">03</button></span>
                    </div>
                    <span class="hero__nav__progress"><span class="hero__nav__progress-bar"></span></span>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/CustomEase.min.js"></script>
<script>
    class HeroSlider {
        constructor() {
            this.observer = document.querySelector(".hero");
            this.slide = document.querySelectorAll(".hero__item");
            this.slideScale = document.querySelectorAll(".hero__item__scale");
            this.navBtn = document.querySelectorAll(".hero__nav__item");
            this.navBar = document.querySelector(".hero__nav__progress-bar");

            this.allDuration = 6; // 各スライドの表示期間（秒）
            this.currentNum = 0; // 現在表示されているスライドのインデックス
            this.oldCurrentNum = null; // nullで初期化することで、初回はis-old-activeを付与しない
            this.oldCurrentNum = this.slide.length - 1; // 以前表示されていたスライドのインデックス（初期値は最後のスライド）

            this.sliderAnimation = null; // 自動スライダーのGSAPインスタンス
            this.progressAnimation = null; // プログレスバーのGSAPインスタンス

            this._setupEventListeners();
            this.init(); // 初期化処理
        }

        _setupEventListeners() {
            // ナビゲーションボタンのクリックイベント
            this.navBtn.forEach((btn, index) => {
                btn.addEventListener("click", () => {
                    this._targetChangeSlide(index);
                    this.sliderAnimation.restart(); // 自動スライダーをリスタート
                });
            });

            // Intersection Observerでスライダーがビューポートに入ったかを監視
            // これにより、ビューポート外ではアニメーションを一時停止できます
            const observerOptions = {
                rootMargin: "0%"
            };
            const intersectionObserver = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        this.sliderAnimation && this.sliderAnimation.play();
                        this.progressAnimation && this.progressAnimation.play();
                    } else {
                        this.sliderAnimation && this.sliderAnimation.pause();
                        this.progressAnimation && this.progressAnimation.pause();
                    }
                });
            }, observerOptions);
            this.observer && intersectionObserver.observe(this.observer);
        }

        init() {
            this._elementInit(this.slide);
            this._elementInit(this.navBtn);
            this._progressBarAnimation(); // プログレスバーを初期化
            this._autoChangeSlide(); // 自動スライダーを開始
        }

        // 特定のスライドに切り替える（ナビゲーションボタンクリック時など）
        _targetChangeSlide(targetIndex) {
            if (this.currentNum !== targetIndex) {
                this.oldCurrentNum = this.currentNum;
                this.currentNum = targetIndex;
                this._elementInit(this.slide);
                this._elementInit(this.navBtn);
                this._clipAnimation(); // 切り替えアニメーション
                this._progressBarAnimation(); // プログレスバーをリスタート
            }
        }

        // 次/前のスライドに切り替える（自動スライダー、スワイプ時など）
        _moveChangeSlide(direction) {
            this.oldCurrentNum = this.currentNum;
            if (direction === "prev") { // 「prev」は次のスライドに進む動作
                this.currentNum = (this.currentNum >= this.slide.length - 1) ? 0 : this.currentNum + 1;
            } else if (direction === "next") { // 「next」は前のスライドに戻る動作
                this.currentNum = (this.currentNum < 1) ? this.slide.length - 1 : this.currentNum - 1;
            }
            this._elementInit(this.slide);
            this._elementInit(this.navBtn);
            this._clipAnimation();
            this._progressBarAnimation();
        }

        // 自動スライド切り替えのGSAPアニメーション
        _autoChangeSlide() {
            // `gsap.to({})` を使用して、透明なオブジェクトをアニメーションさせ、`onRepeat` でスライドを切り替える
            this.sliderAnimation = gsap.to({}, {
                ease: "none",
                duration: this.allDuration,
                repeat: -1, // 無限リピート
                onRepeat: () => {
                    this._moveChangeSlide("prev"); // 次のスライドへ
                }
            });
        }

        // スライドとナビゲーションボタンのアクティブ状態を更新
        _elementInit(elements) {
            // すべてのスライドからアクティブ/オールドアクティブクラスを削除
            this.slide.forEach(el => el.classList.remove("is-active", "is-old-active"));
            this.navBtn.forEach(el => el.classList.remove("is-active"));

            // 新しいアクティブスライドとボタンを設定
            this.slide[this.currentNum].classList.add("is-active");
            this.navBtn[this.currentNum].classList.add("is-active");
            
            // 以前のアクティブスライドにオールドアクティブクラスを設定
            // oldCurrentNum が初期値(スライド数-1)のままでないかチェック
            if(this.oldCurrentNum !== this.slide.length - 1 || this.currentNum !== 0) {
                this.slide[this.oldCurrentNum].classList.add("is-old-active");
            }
        }

        // スライド切り替え時のクリップパスとスケールアニメーション
        _clipAnimation() {
            // 新しいスライドのクリップパスアニメーション (円形に広がる)
            gsap.fromTo(this.slide[this.currentNum], {
                clipPath: "circle(0% at 50% 50%)",
                z: 0 // Three.jsのz値に干渉しないように
            }, {
                duration: 0.6, // アニメーション時間
                ease: "power2.inOut", // イージング
                clipPath: "circle(72% at 50% 50%)",
                z: 0
            });

            // 新しいスライドのスケールアニメーション (ズームイン)
            gsap.fromTo(this.slideScale[this.currentNum], {
                scale: 3
            }, {
                duration: 0.6,
                ease: "power2.out",
                scale: 1
            });
        }

        // プログレスバーのアニメーション
        _progressBarAnimation() {
            if (this.progressAnimation) {
                this.progressAnimation.kill(); // 既存のアニメーションを停止
            }
            this.progressAnimation = gsap.fromTo(this.navBar, {
                scaleX: 0
            }, {
                duration: this.allDuration,
                ease: "none",
                scaleX: 1
            });
        }
    }

    // ページ読み込み完了後にヒーロースライダーを初期化
    // 必要に応じてDOMContentLoadedイベントなどで囲む
    window.addEventListener("load", () => {
        new HeroSlider();
    });
  // 元のサイトから CustomEase の定義を抽出してここに記述することも検討してください
  // 例えば: CustomEase.create("transform","M0,0 C0.44,0.05 0.17,1 1,1 ");
  // CustomEase.create("colorAndOpacity","M0,0 C0.26,0.16 0.1,1 1,1 ");
</script>

<?php get_footer(); ?>