/* global $ */

$(function(){
  // ハンバーガーメニュー処理
  // メニューバーをクリックして表示させる処理
  $('#open').on('click' , () => {
    $('.overlay').addClass('show');
    $('#open').addClass('hide');
  });
  
  // メニューバーをクリックして閉じるときの処理
  $('#close').on('click' , () => {
    $('.overlay').removeClass('show');
    $('#open').removeClass('hide');
  });
  
  // // ハンバーガーメニュー中のリンクをクリックしたときに、メニューを閉じる処理
  $('.overlay a').on('click', () => {
    $('.overlay').removeClass('show');
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
  $('#slider img').eq(1).css('margin-left', '-370px');
  $('#slider img').eq(2).css('margin-left', '-370px');
  $('#slider img').eq(3).css('margin-left', '-370px');
  $('#slider img').eq(4).css('margin-left', '-370px');
  $('#slider img').eq(5).css('margin-left', '-370px');
  
  let s_count = 0;
  
  // スライドアニメーションの非同期処理の定義
  const slider = () => {
    $.when(
      
        $('#slider img').eq(s_count % 6).animate({marginLeft: '370'}, 2000),
        $('#slider img').eq((s_count + 1) % 6).animate({marginLeft: '0px'}, 2000),
        
    ).done(
        () => {
            $('#slider img').eq(s_count % 6).css('margin-left', '-370px');
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
  
  // スクロールで各コンテンツを表示させる処理
  // .content要素(計7個)を取得
  let contents = $('.content');
  // 表示画面の高さを取得
  const window_height = $(window).height();
  // 0番目のcontent要素から取得
  $.each(contents, (index, content) => {
    // 注目しているcontent要素のoffset(座標)を取得
    let offset = $(content).offset();
    // そのcontent要素の座標がブラウザの表示領域にあるならば
    if(window_height > offset.top) {
      // 表示
      $(content).css({'opacity': '1'});
    } else {
      // 非表示
      $(content).css({'opacity': '0'});
    }
  });
  
  // スクロールしたときの処理
  $(window).scroll(function() {
    // 現在のスクロール量を取得
    let scroll_top = $(this).scrollTop();
    // 一つ一つのcontent要素に対しての処理
    // .contentは計7個
    $.each(contents , (index, content) => { 
      // 注目しているcontent要素のoffset(座標)を取得
      let offset = $(content).offset();
      
      // 各content要素のtop座標が、スクロール量+400より小さいときに表示
      if(offset.top < scroll_top + 400) {
        // 0.3秒かけてふわっと表示する感じで各contentを出現させる。
        $(content).animate({'opacity':'1',}, 300);
      }
    });
  });
  
  // My portfolioのモーダルウインドウ
  // 画像をクリックしてモーダルウィンドウを表示
  $('#open_2').on('click' , () => {
   $('#modal').removeClass('hidden')
   $('#mask').removeClass('hidden');
  });
  
  // closeをクリックしてモーダルウィンドウを閉じ、元の画面に戻す。
   $('#close_2').on('click' , () => {
   $('#modal').addClass('hidden')
   $('#mask').addClass('hidden');
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
  
  // Contactの入力、送信の設定
  // Messageクラスの作成
  class Message {
    name; // 名前
    email; // メール
    comment; // コメント
    // コンストラクタ
    constructor(name, email, comment) {
      this.name = name;
      this.email = email;
      this.comment = comment;
    }
    // 入力値を検証するメソッドの定義
    validate() {
      // 入力が正しいかどうかのフラッグ
      let flag = true;
      $('li').remove();
      const ul = $('<ul>');
      // もし名前が入力されていなければ
      if(this.name === '') {
        const e_name = $('<li>', {text: '※Plese enter your name.'}).addClass('error');
        ul.append(e_name);
        $('#message').append(ul);
        flag = false;
      }
      // もしメールが入力されていなければ
      if(this.email === '') {
        const e_email = $('<li>', {text: '※Plese enter your email address.'}).addClass('error');
        ul.append(e_email);
        $('#message').append(ul);
        flag = false;
      }
      // もしコメントが入力されていなければ
      if(this.comment === '') {
        const e_comment = $('<li>', {text: '※Plese enter your comments'}).addClass('error');
        ul.append(e_comment);
        $('#message').append(ul);
        flag = false;
      }
      return flag;
    }
  }
  
  // 送信ボタンを押したときの処理
  $('#btn').click((e) => {
    e.preventDefault(); // 画面が更新されないようにする
    // メッセージをリセット
    $('.hw+p').remove();
    // 入力された値を取得
    const name = $('input[name="name"]').val();
    const email = $('input[name="email"]').val();
    const comment = $('textarea[name="comment"]').val();
    // 新しいユーザーを作成
    const message = new Message(name, email, comment);
    // 入力値を検証(validateメソッドを実行)
    const flag = message.validate();
    if(flag === true) {
      
      // 入力値が正しかった時にconfirmを表示させる。
      const send_flag = confirm('Are you sure you want to send it?');
      if(send_flag === true) {
        
        $('input[name="name"]').val('');
        $('input[name="email"]').val('');
        $('textarea[name="comment"]').val('');
        
        // メール送信
        $.ajax({
           type: 'post',
           url: 'send_mail_English.php',
           datatype: 'json',
           data: {
               name: message.name, // 名前
               email: message.email, // メールアドレス
               comment: message.comment // コメント
           }
        }).done(function(data) { // ajax通信が成功したら
          //送信に成功したならば
          if (data['result']) {
              // メール「送信」に成功したときの処理
              // 3秒後にContactページを再表示
              $(window).load(function() {
                setTimeout(function(){
                  window.location.href = 'http://ksamurai.php.xdomain.jp/Portfolio/index_English.php#contact';
                  // 画面にメッセージを表示
                  $('.hw').after($('<p>', {text: 'Transmission completed.'}).addClass('send'));
                }, 3000);
              });
          } else {
              // メール送信に「失敗」した時の処理
              // 3秒後にContactページを表示
              $(window).load(function() {
                setTimeout(function(){
                  window.location.href = 'http://ksamurai.php.xdomain.jp/Portfolio/index_English.php#contact';
                  // 画面にメッセージを表示、画面をリロードなど
                  $('.hw').after($('<p>', {text: 'Transmission failed.'}).addClass('error'));
                }, 3000);
              });
          }
        });
      }
    }
  });
  
});

