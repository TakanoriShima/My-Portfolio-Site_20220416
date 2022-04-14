<?php
    // (C)
    // ヘッダーを明記(文字化け対策のため)
    header("Content-Type: application/json; charset=UTF-8");
    
    // jQueryからPOST通信で受け取った値を取得
    $name = $_POST['name']; // 名前
    $email = $_POST['email']; // メールアドレス
    $comment = $_POST['comment']; // コメント
    
    // お問い合わせ日時
    $date = date("Y年m月d日 H時i分s秒");
    
    //サイトを見てフォームを記入した人への自動返信メール
    $mailto = $request_param['email'];
    $to = 'メールを受け付けるメールアドレスを入力'; 
    $mailfrom = "From:samurai.portfolio@gmail.com"; 
    $subject = "お問い合わせ有難うございます。";
    
    // 代入演算子、改行文字を使って自動メールのフォーマットを作成
    $content = "";
    $content .= $name . "様\r\n";
    $content .= "お問い合わせ有難うございます。\r\n";
    $content .= "お問い合わせ内容は下記通りでございます。\r\n";
    $content .= "=================================\r\n";
    $content .= "お名前	      " . $name."\r\n";
    $content .= "メールアドレス   " . $email."\r\n";
    $content .= "コメント   " . $comment."\r\n";
    $content .= "お問い合わせ日時   " . $date."\r\n";
    $content .= "=================================\r\n";
    
    // サイト管理者確認用メール(Iwaiあて)
    // 代入演算子、改行文字を使って自動メールのフォーマットを作成
    $subject2 = "お問い合わせがありました。";
    $content2 = "";
    $content2 .= "お問い合わせがありました。\r\n";
    $content2 .= "お問い合わせ内容は下記通りです。\r\n";
    $content2 .= "=================================\r\n";
    $content2 .= "お名前	      " . $name."\r\n";
    $content2 .= "メールアドレス   " . $email."\r\n";
    $content2 .= "コメント   " . $comment."\r\n";
    $content2 .= "お問い合わせ日時   " . $request_datetime."\r\n";
    $content2 .= "================================="."\r\n";
    
    // // 文字化け対策
    mb_language("Japanese");
    mb_internal_encoding("UTF-8");
    
    // メール送信
    $result_1 = mb_send_mail($to, $subject2, $content2, $mailfrom);
    $result_2 = mb_send_mail($mailto, $subject, $content, $mailfrom);
    
    // 二つのメール送信結果を判定し、Ajaxに配列をreturn
    if($result_1 and result_2) { // php形式のデータをjson形式に変更
        echo json_encode(array('result' => true)); 
    } else {
        echo json_encode(array('result' => false));
    }
     
    // JSON（JavaScript Object Notation）
    // PHPやJava、Ruby、Pythonなどの様々なプログラミング言語に対応するデータ記述言語。
    // JSONを使用することでプログラミング言語を問わずデータの受け渡しが可能
    // エンコード --- データをある一定の規則に従って、別の形式のデータに変更すること