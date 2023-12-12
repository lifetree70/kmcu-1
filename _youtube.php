<?php
	$servername = "localhost"; //서버명
	$username = "root"; //사용자명
	$password = ""; // 비밀번호
	$dbname = "database"; // DB명
	//MYSQL 연결하기
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	$sql = "CREATE TABLE _youtube (
		num int not null auto_increment,
		id char(20) not null,
		name char(20) not null,
		subject char(200) not null,
		content text,
		is_html char(1),
		regist_day char(20),
		file_name char(40),
		file_type char(40),
		file_copied char(40),
		primary key(num))";

	$result = mysqli_query($conn, $sql);
	if ($result)
	echo "유튜브 게시판 테이블에 생성 완료";
	else
	echo "유튜브 게시판 테이블에 생성 오류 : " . mysqli_error($conn);
	mysqli_close($conn);
	?>