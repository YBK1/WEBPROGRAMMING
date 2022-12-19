<?php

	header('Content-Type: text/html; charset=utf-8'); // utf-8인코딩

	// localhost = DB주소, mbti=DB계정아이디, mbtisql=DB계정비밀번호, simpleDB="DB이름"
	$db = new mysqli("localhost","mbti","mbtisql","simpleDB"); 
	$db->set_charset("utf8");

	function mq($sql)
	{
		global $db;
		return $db->query($sql);
	}
?>