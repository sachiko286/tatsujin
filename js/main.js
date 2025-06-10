
$(function () {

  //===========================================================
  //  ハンバーガーメニュー
  //===========================================================
  // $(".js-hamburger").on("click", function () {
  //   if ($(".js-drawer").hasClass("is-open")) {
  //     closeDrawer(); // ドロワーが開いている場合は閉じる
  //   } else {
  //     openDrawer(); // ドロワーを開く
  //   }
  // });

  // function openDrawer() {
  //   $(".js-hamburger").addClass("is-open");
  //   $(".js-drawer").addClass("is-open");
  //   $("body").addClass("header-drawer-noscroll");
  // }

  // function closeDrawer() {
  //   $(".js-hamburger").removeClass("is-open");
  //   $(".js-drawer").removeClass("is-open");
  //   $("body").removeClass("header-drawer-noscroll");

  //   // **アコーディオンを閉じる処理**
  //   $(".js-header-drawer-nav-accordion").removeClass("is-open"); // クラス削除
  //   $(".js-header-drawer-nav-accordion").next().slideUp(); // アコーディオンの中身を閉じる
  // }

  // $(".header-drawer").on("click", function (e) {
  //   if (!$(e.target).closest(".header-drawer-nav-accordion").length) {
  //     closeDrawer();
  //   }
  // });

  // // ウィンドウリサイズ時にドロワーを閉じる
  // $(window).on("resize", function () {
  //   if (window.matchMedia("(min-width: 768px)").matches) {
  //     closeDrawer();
  //   }
  // });
  // ハンバーガーメニュー開閉
  $(".js-hamburger").on("click", function () {
    if ($(".js-drawer").hasClass("is-open")) {
      closeDrawer(); // ドロワーが開いている場合は閉じる
    } else {
      openDrawer();  // ドロワーを開く
    }
  });

  function openDrawer() {
    $(".js-hamburger").addClass("is-open");
    $(".js-drawer").addClass("is-open");
    $("body").addClass("header-drawer-noscroll");
  }

  function closeDrawer() {
    $(".js-hamburger").removeClass("is-open");
    $(".js-drawer").removeClass("is-open");
    $("body").removeClass("header-drawer-noscroll");

    // アコーディオンを閉じる
    $(".js-header-drawer-nav-accordion").removeClass("is-open");
    $(".js-header-drawer-nav-accordion").next().slideUp();
  }

  // ドロワー内クリックイベント処理
  $(".header-drawer").on("click", function (e) {
    // ドロワー内のリンククリックなら閉じる処理しない（そのまま遷移）
    if ($(e.target).closest(".js-drawer a").length) return;

    // アコーディオン部分以外をクリックしたらドロワー閉じる
    if (!$(e.target).closest(".header-drawer-nav-accordion").length) {
      closeDrawer();
    }
  });

  // ウィンドウリサイズ時にドロワーを閉じる
  $(window).on("resize", function () {
    if (window.matchMedia("(min-width: 768px)").matches) {
      closeDrawer();
    }
  });


  //===========================================================
  //  アコーディオン
  //===========================================================
  $(".js-header-drawer-nav-accordion").on("click", function () {
    $(this).toggleClass("is-open");
    $(this).next().slideToggle();
  });



  //===========================================================
  //  画面可視領域に入ったらふわっと表示
  //===========================================================
  $(document).ready(function () {
    $(window).on("scroll", function () {
      let scroll = $(window).scrollTop();
      let windowHeight = $(window).height();

      // fade-in クラスの要素が画面内に入ったら下からふわっと表示
      $(".fade-in").each(function () {
        let elementTop = $(this).offset().top;
        if (scroll > elementTop - windowHeight + 100) {
          $(this).addClass("is-visible");
        }
      });

      // .top-products-content-item の要素ごとに遅延をつけて表示
      let itemsContainer = $(".fade-delays"); // 親要素
      if (itemsContainer.length) {
        let containerTop = itemsContainer.offset().top;
        if (scroll > containerTop - windowHeight + 100) {
          $(".fade-delay").each(function (index) {
            let delay = index * 300; // 0.3秒ごとに遅延
            $(this).delay(delay).queue(function () {
              $(this).addClass("is-visible").dequeue();
            });
          });
        }
      }
    });

    // 初回読み込み時にも実行
    $(window).trigger("scroll");
  });


  //===========================================================
  //   FV過ぎたらヘッダー背景色変化
  //===========================================================
  $(window).on("scroll", function () {
    mvHeight = $(".fv, .sub-fv, .recruit-fv").height();

    if ($(window).scrollTop() > mvHeight) {
      $(".js-header").addClass("is-scroll");
    } else {
      $(".js-header").removeClass("is-scroll");
    }
  });

  //===========================================================
  //   TOPに戻るボタン
  //===========================================================


  // $(function () {
  //   const $pageTop = $("#js-pagetop");

  //   $(window).scroll(function () {
  //     if ($(window).scrollTop() > 1) {
  //       $pageTop.fadeIn(300).css('display', 'flex');
  //     } else {
  //       $pageTop.fadeOut(300);
  //     }
  //   });

  //   $pageTop.click(function () {
  //     $('html, body').animate({ scrollTop: 0 }, 300);
  //   });
  // });

  $(function () {
    const $pageTop = $("#js-pagetop");
    const $footer = $(".footer-bottom");

    $(window).on("scroll resize", function () {
      const scrollTop = $(window).scrollTop();
      const windowHeight = $(window).height();
      const footerTop = $footer.offset().top;

      // 表示切り替え
      if (scrollTop > 1) {
        $pageTop.fadeIn(300).css('display', 'flex');
      } else {
        $pageTop.fadeOut(300);
      }

      // footerとの重なり回避
      const pageTopHeight = $pageTop.outerHeight();
      const pageBottomPos = scrollTop + windowHeight;
      const overlap = pageBottomPos > footerTop;

      if (overlap) {
        const offset = pageBottomPos - footerTop;
        $pageTop.css("bottom", 20 + offset); // 下にずらす
      } else {
        $pageTop.css("bottom", 20); // 通常位置
      }
    });

    $pageTop.click(function () {
      $("html, body").animate({ scrollTop: 0 }, 300);
    });
  });




});

