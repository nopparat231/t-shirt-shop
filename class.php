<?php


date_default_timezone_set("Asia/Bangkok");
class class_action{

//ฟังก์ชั่นในการลิงค์ไปหน้าอื่น	
	public function goto_page($speed,$url){
		return "<meta http-equiv='refresh' content='$speed;$url' />";
	}

//ฟังก์ชั่นแสดงข้อความ
	public function show_message($word){
		return "<script type='text/javascript'>alert('$word');</script>";
	}

}
?>
