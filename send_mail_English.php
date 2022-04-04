<?php
    // (C)
    // ヘッダーを明記(文字化け対策のため)
    header("Content-Type: application/json; charset=UTF-8");
    // jQueryからPOST通信で受け取った値を取得
    $name = $_POST['name']; // 名前
    $email = $_POST['email']; // メールアドレス
    $comment = $_POST['comment']; // コメント
    
    // HP作成者へのメール送信処理
    $from = $email; // 送信者のメールアドレス
    $to = 'happyday.kazuma@outlook.jp'; // HP作成者のメールアドレス
    $sbject = $name . '様からのお問い合わせです'; // メールの通知内容
    
    // 文字化け対策
    mb_language("English");
    mb_internal_encoding("UTF-8");
    
    // メール送信
    // mb_send_mail(送信先,タイトル,本文,追加ヘッダー)
    $result = mb_send_mail($to, $sbject, $comment, "From:" . $from);
    
    // メール送信結果を判定し、Ajaxに配列をreturn
    if($result) { // php形式のデータをjson形式に変更
        echo json_encode(array('result' => true)); 
    } else {
        echo json_encode(array('result' => false));
    }
    
    
    
    // JSON（JavaScript Object Notation）
    // PHPやJava、Ruby、Pythonなどの様々なプログラミング言語に対応するデータ記述言語。
    // JSONを使用することでプログラミング言語を問わずデータの受け渡しが可能
    // エンコード --- データをある一定の規則に従って、別の形式のデータに変更すること