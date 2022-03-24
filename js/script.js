/* global $ */

$(function(){
  
  // スマホ版のハンバーガーメニュー
  const open = $('#open').text();
  const overlay = $('overlay').text();
  const close = $('#close');
  
  // メニューバーをクリックして表示させる処理
  $('#open').on('click' , () => {
    $('.overlay').show();
    $('.overlay').addClass('show');
    $('#open').addClass('hide');
  });
  
  // メニューバーをクリックして閉じるときの処理
  $('#close').on('click' , () => {
    $('.overlay').removeClass('show');
    $('#open').removeClass('hide');
  });
  
  // ハンバーガーメニュー中にリンクをクリックしたときに、ハンバーガーメニューを閉じる処理
  $('.overlay a').on('click', () => {
    $('.overlay').removeClass('show');
    $('.overlay').hide();
    $('#open').removeClass('hide');
  });
  
  // 福岡の画像アニメーション(slider)
  const images = [
      'images/fukuoka0.jpg', 
      'images/fukuoka1.jpg', 
      'images/fukuoka2.jpg', 
      'images/fukuoka3.jpg', 
      'images/fukuoka4.jpg',
      'images/fukuoka5.jpg'
    ];
  
  // images配列からimageを一つずつ取り出し、#sliderに入れる。
  $.each(images, (index, image) => {
    $('#slider').append($('<img>', {src:image}));
  });
  
  // 配列の1,2,3,4番目を隠した状態にする。
  $('#slider img').eq(1).css('margin-left', '-400px');
  $('#slider img').eq(2).css('margin-left', '-400px');
  $('#slider img').eq(3).css('margin-left', '-400px');
  $('#slider img').eq(4).css('margin-left', '-400px');
  $('#slider img').eq(5).css('margin-left', '-400px');
  
  let s_count = 0;
  
  // スライドアニメーションの非同期処理の定義
  const slider = () => {
    $.when(
      
        $('#slider img').eq(s_count % 6).animate({marginLeft: '400'}, 2000),
        $('#slider img').eq((s_count + 1) % 6).animate({marginLeft: '0px'}, 2000),
        
    ).done(
        () => {
            $('#slider img').eq(s_count % 6).css('margin-left', '-400px');
        }
    ).done(
        () => {
          s_count++;
        }
    );
  };
  
  // slider処理の実行
  setInterval(slider, 3000);
  
  // Topのテキストアニメーション
  const title1 = $('.first').text();
  const title2 = $('.second').text();
  $('.first').text('');
  $('.second').text('');
  let count = 1;
  let timer2;
  
  // h1のテキストアニメーションの関数を定義
  const text_animation1 = () => {
    const word1 = title1.substr(0, count);
    $('.first').text(word1);
    count++;
    if(count > title1.length) {
      clearInterval(timer1);
      count = 1;
      
      // h1のテキストアニメーション終了し、その0.5秒後にh2のテキストアニメーションの処理開始。
      setTimeout(() => {
        timer2 = setInterval(text_animation2, 100);
      }, 500)
    }
  };
  
  // h2のテキストアニメーション関数の定義
  const text_animation2 = () => {
    const word2 = title2.substr(0, count);
    $('.second').text(word2);
    count++;
    if(count > title2.length) {
      clearInterval(timer2);
      count = 1;
    }
  };
  
  // h1のテキストアニメーションの実行
  const timer1 = setInterval(text_animation1, 100);
  
  // // スクロールアニメーション
  // $(window).scroll(function () {
  //   // ウィンドウの高さを取得
  //   const wh = $(window).height();
  //   // スクロール量を取得
  //   const scroll = $(window).scrollTop();
  //   // フェードインさせたいの要素の上からの距離を取得
  //   $('.content').each(function () {
  //     const targetPosition = $(this).offset().top;
  //     if(scroll > targetPosition - wh + 100){
  //       $(this).addClass('.is-fadein');
  //     }
  //   });
  // });
  
  // Portのモーダルウィンドウ
  const open_2 = document.getElementById('open_2');
  const close_2 = document.getElementById('close_2');
  const modal = document.getElementById('modal');
  const mask = document.getElementById('mask');
  
  // 詳細をクリックしてモーダルウィンドウを表示
  $('#open_2').on('click' , () => {
   $('#modal').removeClass('hidden')
   $('#mask').removeClass('hidden');
  });
  
  // 閉じるをクリックして元の画面に戻す。
   $('#close_2').on('click' , () => {
   $('#modal').addClass('hidden')
   $('#mask').addClass('hidden');
  });
  // maskもクリックして元の画面に戻せるようにする。
   $('#mask').on('click' , () => {
   $('#close_2').on();
  });
  
  // hobbyの料理写真のアニメーション(fadein/fadeout)
  const pictures = [
      'images/cook0.jpg',
      'images/cook1.jpg',
      'images/cook2.jpg',
      'images/cook3.jpg',
      'images/cook4.jpg',
      'images/cook5.jpg',
    ];
    
  let ff_count = 1;
  
  // fadein_fadeout関数の定義
  const fadein_fadeout = () => {
    $('#fadein_fadeout img').animate({'opacity': 0}, 1000, () => {
      $('#fadein_fadeout img').prop('src', pictures[ff_count]);
      $('#fadein_fadeout img').animate({'opacity': 1});
      ff_count++;
      if(ff_count === images.length) {
        ff_count = 0;
      }
    });
  };
  
  // fadein_fadeout関数の実行
  setInterval(fadein_fadeout, 4000);
  
});

