/* global $ */

$(function(){
  
  // スマホ版のハンバーガーメニュー
  const open = $('#open').text();
  const overlay = $('overlay').text();
  const close = $('#close');
  // メニューバーをクリックして表示させる処理
  $('#open').on('click' , () => {
    $('.overlay').addClass('show');
    $('.open').addClass('hide');
  });
  
  // メニューバーをクリックして閉じるときの処理
  $('#close').on('click' , () => {
    $('.overlay').removeClass('show');
    $('.open').removeClass('hide');
  });
  
  // 福岡の街並みの画像アニメーション(slider)
  // const images = ['images/hakata1.jpg','images/hakata2.jpg', 'images/hakata3.jpg']
  // $.each(images, (index, image) => {
  //   $('#slider').append($('<img>', {image}));
  // });
  
  // $('#slider img').eq(1).css('margin-left', '-700px');
  // $('#slider img').eq(2).css('margin-left', '-700px');
  
  // let sec = 0;
  
  // const slider = () => {
  //   $.when(
      
  //       $('#slider img').eq(sec % 3).animate({marginLeft: '700px'}, 2000),
  //       $('#slider img').eq((sec+ 1) % 3).animate({marginLeft: '0'}, 2000),
  //       console.log('a')
  //     ).done(
  //       () => {
  //         $('#slider img').eq(sec % 3).css('margin-left', '-700px');
  //         console.log('b')
  //       }
  //     ).done(
  //         () => {
  //           sec++;
  //           console.log('sec = ' + sec);
  //         }
  //     );
  // };
  
  // setInterval(slider, 5000);
  
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

});

