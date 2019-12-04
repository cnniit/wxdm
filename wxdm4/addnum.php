<?php 
$dsn = mysqli_connect('localhost','root','aa5251020','cnzzdb');
$tmpcnzzdm = $_POST['cnzzdm'];
$utq2 = $_POST['utq2'];
$utq3 = $_POST['utq3'];
$tmpbyjc = $_POST['byjc'];
$tmpbyzh = $_POST['byzh'];
$bPC = $_POST['bPC'];
// $tmpcnzztj = $_POST['cnzztj'];
$web = $_GET['web'];
// echo "$bPC"; 
$num = 0;

	$sql0=mysqli_query($dsn,"delete from ".$web);
	mysqli_query($dsn,$sql0);

	$cnzzdm = htmlentities($tmpcnzzdm,ENT_QUOTES,"UTF-8");
	$byjc = htmlentities($tmpbyjc,ENT_QUOTES,"UTF-8");
	$byzh = htmlentities($tmpbyzh,ENT_QUOTES,"UTF-8");


	function pregTen($test){
    
		$rule  = "/(\d+\.?\d+)/";  
		preg_match_all($rule,$test,$result);  
		return $result[0][0];
		  
	} 
	$ten = pregTen($tmpcnzzdm ?$tmpcnzzdm :'ha8888888888ha');
		$tmpcnzztj = "<script>var _czc = _czc || [];_czc.push(['_setAccount', '".$ten."']);</script>";
		$cnzztj = htmlentities($tmpcnzztj,ENT_QUOTES,"UTF-8");


 $sql = "INSERT INTO ".$web."(cnzzdm,cnzztj,utq2,utq3,byjc,byzh,bPC) VALUES ('".$cnzzdm."','".$cnzztj."','".$utq2."','".$utq3."','".$byjc."','".$byzh."','".$bPC."'  )";
//  var_dump($sql);
  mysqli_query($dsn,$sql);

$myfile = fopen('../cnzzjs/'.trim($web).".js", "w") or die("Unable to open file!");


    $num++;   
	
	$txt =  "cnzzdm = '".$cnzzdm."'"; // output's bar
	$txt2 = "cnzztj = '".$cnzztj."'";
	$txt3 =  "utq2 = '".$utq2."'"; 
	$txt4 = "utq3 = '".$utq3."'";
	$txt5 =  "byjc = '".$byjc."'"; 
	$txt6 = "byzh = '".$byzh."'";
	$txt7 = "bPC = '".$bPC."'";
	fwrite($myfile,  $txt.';'.$txt2.';'.$txt3.';'.$txt4.';'.$txt5.';'.$txt6.';'.$txt7 );
		
	fclose($myfile);
	
echo "<p>添加成功</p>";

//echo "$sql";

//var_dump($result);
//echo mysqli_error($conn);
/**if(! $result )
{
  $reback="添加失败,1秒返回";
}
else{

	$reback="添加成功,1秒返回";
}*/
	//echo $reback;//输出变量$reback的值

    header("refresh:0.5;url=./manage.php?web=$web");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
	
		@media screen and (max-width: 1080px) {
			
			p {
				
				font-size: 50px;
			}
			
		
		
		}
	</style>
</head>
<body>
	
</body>
</html>