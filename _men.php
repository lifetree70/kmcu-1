<?php
	$servername = "localhost"; //서버명
	$username = "root"; //사용자명
	$password = ""; // 비밀번호
	$dbname = "database"; // DB명
	//MYSQL 연결하기
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	$sql = "CREATE TABLE _men(
		num int not null auto_increment,
		id char(20) not null,
		pass char(20) not null,
		name char(20) not null,
		email char(80),
		regist_day char(20),
		level int,
		point int,
		primary key(num))";

	$result = mysqli_query($conn, $sql);
	if ($result)
	echo "회원 db 테이블에 생성 완료";
	else
	echo "회원 db 테이블에 생성 오류 : " . mysqli_error($conn);
	mysqli_close($conn);
	?> 