<?php
  	
  $search = getIndex("search");
	if($search != "") {
		include "module/search/index.php";
		return;
	}
	$mod = getIndex("mod", "homepage");

	if($mod == "register")
		include "register.php";
	else if($mod == "loaitin")
		include "module/loaitin/index.php";
	else if($mod == "theloai")
		include "module/theloai/index.php";
	else if($mod == "baiviet")
		include "module/baiviet/index.php";
	else 
		include "module/trangchu/index.php";

	/*if($mod == "detail")
		include "detail/content.php"; 
	else if($mod == "category")
		include "category/content.php";
	else if($mod == "search")
		include "search/content.php";
	else if($mod == "contact")
		include "contact/contact-container.php";
	else include "homepage/content.php";*/
	?>