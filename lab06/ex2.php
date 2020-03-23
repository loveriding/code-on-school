<?php 
	$ketqua = "";
	$msg = "";
	if(isset($_REQUEST["cmdTinh"])) {
		$so_a = $_REQUEST["so_a"];
		if(!isset($so_a) || !is_numeric($so_a)) {
			$msg = "Số hạng 1 chưa được nhập hoặc chưa phải là số";
		}
		else{
			$so_b = $_REQUEST["so_b"];
			$pt = $_REQUEST["pheptinh"];
			if(!isset($pt)) {
				$msg = "Chọn phép toán !";
			}
			else
			switch($pt) {
				case "+":
					$ketqua = "$so_a + $so_b = ".($so_a + $so_b);
					break;
				case "-":
					$ketqua = "$so_a + $so_b = ".($so_a + $so_b);
					break;
				case "*":
					$ketqua = "$so_a + $so_b = ".($so_a + $so_b);
					break;
				case "/":
					if($so_b == 0) {
						$msg = "Số hạng 2 phải khác 0";
						break;
					}
					else{
					$ketqua = "$so_a + $so_b = ".($so_a + $so_b);
					break;

					}
				default : 
					$msg = "Phép toán phải là + - * /";
			}			 
		}

	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>ex2</title>
 	<style type="text/css">
		/*body {
			text-align: center;
		}*/
		#input_box1 {
    		/*text-align: center;*/
    		width: 400px;
    		margin: auto;
		}
		#input_box2 {
			/*text-align: center;*/
			width: 250px;
			margin: auto;
		}
		#submit_box {
			width: 250px;
			margin: 20px auto;

		}

	</style>
 </head>
 <body>
 <form method="get">
 	<div id="input_box1">
 		
 	<label for="so_a">Số hạng 1 &nbsp;</label>
  	<input type="number" name="so_a" id="so_a"><br>
  	<label for="so_a">Số hạng 2 &nbsp;</label>
  	<input type="number" name="so_b" id="so_b"><br>
  	<div id="input_box2">
 	</div>	
  		
  	<input type="radio" name="pheptinh" id="phepcong" value="+" checked="checked">
 	<label for="phepcong">Cộng </label>
  	<input type="radio" name="pheptinh" id="pheptru" value="-">
 	<label for="pheptru">Trừ</label>
  	<input type="radio" name="pheptinh" id="phepnhan" value="*">
 	<label for="phepnhan">Nhân</label>
  	<input type="radio" name="pheptinh" id="phepchia" value="/">
 	<label for="phepchia">Chia</label>
 	<br>
  	</div>
 	<div id="submit_box">
 	<div style="margin-bottom: 10px;"><b><?php echo $ketqua; ?></b></div><br> 		
 	<input type="submit" name="cmdTinh" value="Xem Kết Quả">
 	<div style="color: red"><?php echo $msg; ?></div>
 	</div>
 </form>
 </body>
 </html>