/*---------------------------------------------------------*/
/* アンカースクロール　                                         */
/*---------------------------------------------------------*/
$('a[href^="#"]').click(function() {
    let header = $(".header").innerHeight();
    let speed = 1000;
    let id = $(this).attr("href");
    let target = $("#" == id ? "html" : id);
    let position = $(target).offset().top - header;
    $("html, body").animate(
        {
        scrollTop: position
        },
        speed
    );
    return false;
});


/*---------------------------------------------------------*/
/* スマホメニュー開閉　                                         */
/*---------------------------------------------------------*/
$('.header-btn').click(function() {
    $('body').toggleClass('header-navi__open');
});


/*---------------------------------------------------------*/
/* トップへのスクロール表示                                      */
/*---------------------------------------------------------*/
$(function(){
    var pagetop = $('.pagetop');
    pagetop.hide();
    $(window).scroll(function () {
        if ($(this).scrollTop() > 1000) {
            pagetop.fadeIn();
        } else {
            pagetop.fadeOut();
        }
    });
    pagetop.click(function () {
        $('body, html').animate({ scrollTop: 0 }, 500);
        return false;
    });
});


/*-------------------------------------------------------------------------
* メニューの表示制御
*
* top-business要素の位置に基づいて、header-navi要素の表示/非表示を切り替えます。
*
* 問題点：
* 初期のobjTopはページロード時の値であり、ウィンドウのリサイズや
* ページコンテンツの動的な変更があった場合に古くなる可能性があります。
* また、表示トリガーの計算も調整が必要です。
*
* 改善点：
* 1. DOMが完全にロードされた後にスクリプトが実行されるようにします。
* 2. ウィンドウのリサイズ時に表示トリガーの位置を再計算します。
* 3. どのスクロール位置で表示をトリガーするかを明確にします。
* 4. showクラスを適用する対象を明確に（ここでは.header-navi）します。
* 5. デバッグのためのコンソールログを改善します。
-------------------------------------------------------------------------*/
$(function() { // DOMが完全にロードされた後に実行されます

    var $targetObj = $('.top-business'); // 監視対象の要素
    var $showObj = $('.header-navi');    // 表示/非表示を制御したい要素
    var $footerObj = $('.footer');       // フッター要素を監視
    var $body = $('body'); // body要素を参照
    var $headerBtn = $('.header-btn');   // メニュー開閉用のボタン要素
    const BREAKPOINT_WIDTH = 1024; // 処理を実行する最小のウィンドウ幅
    
    // 初期ロード時にスクロールポイントを設定
    setScrollPoints();
    
    // ウィンドウのリサイズ時にスクロールポイントを再計算
    // これにより、レイアウトの変更に対応できます。
    $(window).on('resize', function() {
        setScrollPoints();
        // リサイズ後にもスクロール位置をチェックして、すぐに表示状態を更新します
        checkScrollPosition();
    });
    
    // スクロールイベントハンドラ
    $(window).on('scroll', function() {
        checkScrollPosition();
    });
    
    // 1024px以下のときに.header-btnクリックで.header-naviを開閉
    $headerBtn.on('click', function(e) {
        e.preventDefault(); // デフォルトの動作（例：ページ内リンクなど）を無効化

        if ($(window).width() <= BREAKPOINT_WIDTH) {
            $body.toggleClass('show__header-navi');
        }
    });

    // スクロール時の表示トリガーポイントを設定する関数
    function setScrollPoints() {
        // ウィンドウ幅がブレークポイント以下の場合、処理をスキップ
        if ($(window).width() <= BREAKPOINT_WIDTH) {
            // クラスを削除して、非表示状態を強制
            $body.removeClass('show__header-navi');
            return;
        }

        var winHeight = $(window).height(); // 現在のウィンドウの高さ
        var objTop = $targetObj.offset().top; // 監視対象要素のドキュメント上部からの位置
        var offsetTop = $showObj.offset().top; // .header-navi のドキュメント上部からの位置

        // ここで表示トリガーとなるスクロール位置を定義します。
        // 目標に応じて調整してください。

        // 例1: top-businessの頂点がビューポートの最下部から100px上に達したら表示
        // (top-businessが画面に入り始める時に表示したい場合)
        var scrollShowTrigger = objTop;

        // 例2: top-businessの頂点がビューポートの頂点に達したら表示
        // (top-businessと同じ高さまでスクロールしたら表示したい場合)
        // var scrollShowTrigger = objTop;

        // 例3: top-businessが完全にビューポート内に入ったら表示
        // (詳細な計算が必要ですが、例として)
        // var scrollShowTrigger = objTop - winHeight + $targetObj.outerHeight();

        // フッターが画面に見えるタイミングを計算
        var footerTop = $footerObj.offset().top; // フッターのドキュメント上部からの位置
        var scrollHideTrigger = footerTop - winHeight; // フッターが画面に入り始める位置

        // 計算した値をjQueryのdata()機能に保存し、イベントハンドラでアクセスできるようにします。
        $targetObj.data('scrollShowTrigger', scrollShowTrigger);
        $targetObj.data('objTop', objTop); // デバッグ用に実際のobjTopも保存
        $footerObj.data('scrollHideTrigger', scrollHideTrigger); // フッター非表示トリガー
        $footerObj.data('footerTop', footerTop); // デバッグ用にフッターのTop位置も保存
    }

    // スクロール位置をチェックし、要素の表示/非表示を切り替える関数
    function checkScrollPosition() {
        // ウィンドウ幅がブレークポイント以下の場合、処理をスキップ
        if ($(window).width() <= BREAKPOINT_WIDTH) {
            // クラスを削除して、非表示状態を強制
            $body.removeClass('show__header-navi');
            return;
        }

        let scroll = $(window).scrollTop(); // 現在のスクロール位置
        var scrollShowTrigger = $targetObj.data('scrollShowTrigger'); // 保存されたトリガーポイント
        var scrollHideTrigger = $footerObj.data('scrollHideTrigger'); // フッター非表示トリガー

        // デバッグ用ログ：現在のスクロール位置、監視対象要素のトップ位置、表示トリガーポイント、フッター非表示トリガー
        console.log('現在のスクロール:', scroll, ' | top-businessのTop位置:', $targetObj.data('objTop'), ' | 表示トリガーポイント:', scrollShowTrigger, ' | フッターのTop位置:', $footerObj.data('footerTop'), ' | 非表示トリガーポイント:', scrollHideTrigger);

        // フッターが画面に見えたら.header-naviを非表示にする
        if (scroll >= scrollHideTrigger) {
            $body.removeClass('show__header-navi');
        } else if (scroll >= scrollShowTrigger) {
            $body.addClass('show__header-navi');
        } else {
            $body.removeClass('show__header-navi');
        }
    }

    // ページロード時に一度チェックを実行し、初期表示状態を正しく設定します。
    // （例えば、ページがスクロールされた状態でリロードされた場合など）
    $(window).trigger('scroll');
});


/*---------------------------------------------------------*/
/* URLパラメータによるタブ制御（privacy-policyページ用）          */
/*---------------------------------------------------------*/
$(function() {
    // URLパラメータを取得する関数
    function getUrlParameter(name) {
        name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
        var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
        var results = regex.exec(location.search);
        return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
    }

    // privacy-policyページでbtn=2のパラメータがある場合の処理
    var btnParam = getUrlParameter('btn');
    if (btnParam === '2') {
        // #tab-btn2をcheckedにする
        $('#tab-btn2').prop('checked', true);
    }
});
