<?php

md_language("Japanese");
md_internal_encoding("UTF-8");

// 最初のアドレスは送信先アドレス、後のアドレスは送信元アドレス
if (md_send_mail("w.takwshi9@gmail.com", "宿泊予約メールです。", "From: w.takeeshi9@gmail.com")) {
	echo "メール送信しました。";
} else {
	echo "メール送信に失敗しました。";
}

?>