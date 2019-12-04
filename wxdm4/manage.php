<?php
	@$web = $_GET['web'];
 	//echo $web;
	//连接数据库
	$dsn = mysqli_connect('localhost','root','aa5251020','cnzzdb');
	//查询
	$sql = 'SELECT * from '.$web;
	//echo "$sql";
	$result = mysqli_query($dsn,$sql);
	//var_dump(mysqli_num_rows($result));
	//echo "查询结果:";
	$num = mysqli_num_rows($result);
	
	//echo htmlspecialchars($_SERVER["PHP_SELF"]);
	$row = mysqli_fetch_assoc($result);

	$cnzzdm = $row['cnzzdm'];//?$row['cnzzdm']:'zjmdm';
	$cnzztj = $row['cnzztj']?$row['cnzztj']:'zjmtj';
	// var_dump($row['cnzzdm']);
	// var_dump($row['cnzztj']);
	$byjc = $row['byjc']?$row['byjc']:'';
	$byzh = $row['byzh']?$row['byzh']:'';
	$bPC = $row['bPC']=='1'?'1':'0';
	// echo $bPC; 



?>
<!DOCTYPE html>
<html class="cnzz">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>DM V4</title>
  <link href="./cnzz_files/sCommon_1dc4fc12.css" rel="stylesheet" type="text/css">
  <link href="./cnzz_files/site_getcode_9680ce5c.css" rel="stylesheet" type="text/css">
  	<script src="http://zh.de3wa.com/jquery.min.js"></script>
  <style>body { background-color: #fff; padding: 0; margin: 0; } body, input, select, textarea { font: 14px/1.5 'PingFang SC', 'microsoft yahei', tahoma, arial, 'Hiragino Sans GB', sans-serif; }
 .button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 6px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
} 
  .button1 {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
.button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}</style>
  <link rel="shortcut icon" href="http://www.jianfeinice.com/assets/img/logo.ico">
  </head>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<body>
  <div class="site_setup_get_code" id="site_setup_get_code">
    <div class="mainContent">
      <div class="tabContent">
        <div class="pcTongji">
          <div class="inforTitle"><?php echo "当前链接:  <span style='width:200px;height:30px;background-color:red;'>".$web."</span>"; ?>  要修改的链接：
		  <form style="display: inline" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>' method="get">
		  	<input type="text" name="web">
		  	<input type="submit" value="修改" class="button ">
		  </form>
		  </div>
		  <form action='addnum.php?web=<?php echo $web ?>' method="post" >
		  
		  
		    <span style="border-top: 1px dashed #CCC;">CNZZ代码演示：   <font size="2" color="red"> &#60;&#115;&#99;&#114;&#105;&#112;&#116;&#32;&#116;&#121;&#112;&#101;&#61;&#34;&#116;&#101;&#120;&#116;&#47;&#106;&#97;&#118;&#97;&#115;&#99;&#114;&#105;&#112;&#116;&#34;&#32;&#115;&#114;&#99;&#61;&#34;&#104;&#116;&#116;&#112;&#115;&#58;&#47;&#47;&#115;&#57;&#46;&#99;&#110;&#122;&#122;&#46;&#99;&#111;&#109;&#47;&#122;&#95;&#115;&#116;&#97;&#116;&#46;&#112;&#104;&#112;&#63;&#105;&#100;&#61;&#49;&#50;&#51;&#52;&#53;&#54;&#55;&#56;&#57;&#48;&#38;&#119;&#101;&#98;&#95;&#105;&#100;&#61;&#49;&#50;&#51;&#52;&#53;&#54;&#55;&#56;&#57;&#48;&#34;&#62;&#60;&#47;&#115;&#99;&#114;&#105;&#112;&#116;&#62;
				</font></span><br> 
		    <div class="code" >
				<div class="leftCode">
				  <div class="tip">CNZZ代码</div>
				</div>
				<div class="middleCode">
				  <textarea  name="cnzzdm" cols="50" rows="3" id="textareaIdImg5" placeholder="请填写CNZZ代码"><?php echo trim($cnzzdm); ?></textarea>
				  </div>
			</div>
			<div style="border-bottom: 1px dashed #CCC;">
					<span>阿里·汇川代码样例：utq('track', '<font size="2" color="red">Search</font> ', '<font size="2" color="red">123456</font>');</span><br>
					<span class="code leftCode tip" style="font-size: 14px;font-weight: bolder;">UC统计方式：<input name="utq2" placeholder="请填写统计方式" value=<?php echo $row['utq2']; ?>></span>
					<span class="code leftCode tip" style="font-size: 14px;font-weight: bolder;">UC六位编码：<input name="utq3" placeholder="请填写六位编码" value=<?php echo $row['utq3']; ?>></span>
			</div>
			<div>

<input type="hidden" name="bPC" value="0">
<input type="checkbox" name="bPC" id="foo" value="1" <?php if($bPC == '1') echo("checked");?>> 屏蔽PC端 
			</div>
			<div class="code" style="border-bottom: 0px dashed #CCC;">
				<div class="leftCode">
				  <div class="tip">备用基础代码</div>
				</div>
				<div class="middleCode">
				  <textarea name="byjc" placeholder="请填写备用基础代码" cols="50" rows="3" id="textareaIdImg6"><?php echo $byjc; ?></textarea>
				  </div>
                </div>
			<div class="code" >
				<div class="leftCode">
				  <div class="tip">备用转化代码</div>
				  
				</div>
				<div class="middleCode">
				  <textarea name="byzh" placeholder="请填写备用转化代码" cols="50" rows="3" id="textareaIdImg7"><?php echo $byzh; ?></textarea>
				  <div class="clipboardTip">您的浏览器不支持此功能,请手工复制文本框中内容</div></div>
			    </div>
			  <div class="pop_buttons">
				<input type="submit" value="添加/替换" class="button  ">
			  </div>
		    </div>
			</form>	
</body>

</html>