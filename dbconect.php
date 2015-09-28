<?php

	$link = mysql_connect('mysql414.db.sakura.ne.jp', 'takeshi-w', 'take-cw99');
	if (!$link) {
	
	}

	// データベースへの接続
	$db_selected = mysql_select_db('takeshi-w_new_my_life', $link);
	if (!$db_selected){
	   
	}