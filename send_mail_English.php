<?php
    // (C)
    // ヘッダーを明記(文字化け対策のため)
    header("Content-Type: application/json; charset=UTF-8");
    
    // jQueryからPOST通信で受け取った値を取得
    $name = $_POST['name']; // 名前
    $email = $_POST['email']; // メールアドレス
    $comment = $_POST['comment']; // コメント
    
    // 時間軸の設定
    date_default_timezone_set('Asia/Tokyo');
    // 曜日の設定
    $w = date("w");
    $week_name = array("Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat");
    // お問い合わせ日時の詳細設定
    $date = date("Y/m/d " . "($week_name[$w])" . " H:i:s");
    
    //サイトを見てフォームを記入した人への自動返信メール
    $mailto = $email;
    $to = 'samurai.portfolio@gmail.com'; 
    $mailfrom = 'From:samurai.portfolio@gmail.com'; 
    $subject = "You have successfully submitted the form.";
    
    // 代入演算子、改行文字を使って自動メールのフォーマットを作成
    $content = "\r\n";
    $content .= "Thank you for your inquiry.\r\n";
    $content .= "The details of your inquiry are as follows.\r\n";
    $content .= "=================================\r\n";
    $content .= "Name: " . $name . "\r\n";
    $content .= "Email: " . $email . "\r\n";
    $content .= "Comment: " . $comment . "\r\n";
    $content .= "Inquiry date and time: " . $date . "\r\n";
    $content .= "=================================\r\n";
    
    // サイト管理者確認用メール(Iwaiあて)
    // 代入演算子、改行文字を使って自動メールのフォーマットを作成
    $subject2 = "An inquiry has been received.";
    $content2 = "";
    $content2 .= "An inquiry has been received.\r\n";
    $content2 .= "Below are the contents.\r\n";
    $content2 .= "=================================\r\n";
    $content2 .= "Name: " . $name . "\r\n";
    $content2 .= "Email:   " . $email . "\r\n";
    $content2 .= "Comment: " . $comment . "\r\n";
    $content2 .= "Inquiry date and time:   " . $date . "\r\n";
    $content2 .= "=================================" . "\r\n";
    
    // 文字化け対策
    mb_language("English");
    mb_internal_encoding("UTF-8");
    
    // メール送信
    $result_1 = mb_send_mail($mailto, $subject, $content, $mailfrom); // 相手に届くメール
    $result_2 = mb_send_mail($to, $subject2, $content2, $mailfrom); // Iwaiに届くメール
    
    // 二つのメール送信結果を判定し、Ajaxに配列をreturn
    if($result_1 and result_2) { // php形式のデータをjson形式に変更
        echo json_encode(array('result' => true)); 
    } else {
        echo json_encode(array('result' => false));
    }
     