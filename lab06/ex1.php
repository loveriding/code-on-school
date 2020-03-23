<?php

$cols = 10;
$rows = 10;
?>
<!DOCTYPE html>
<html>
<head>
	<title>ex1</title>
	<style type="text/css">
		table,tr,td {
			border: 1px solid black;
			border-collapse: collapse;
			margin: 20px auto;
		}
	</style>
</head>
<body>
</body>
</html>
<?php

echo ('<table border = "1"><tr>');

        for ($r =1; $r <= $rows; $r++){
        	echo "<td>";
            for ($c = 1; $c <= $cols; $c++)
                echo($c.'x'.$r.'='.$c*$r.'<br>');
            echo "</td>";
        }

        echo("</tr></table>");

?>