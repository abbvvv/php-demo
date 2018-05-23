<?php require_once 'base.php';?>
<?php

if (! isset ( $_SESSION )) {
	session_start ();
}
if (! isset ( $_SESSION ['userName'] )) {
	header ( "location:login.php" );
}
$userName = $_SESSION ['userName'];

require_once 'dbconfig.php';
// 访问student中指定的id
$id = $_REQUEST ['id'];
$query = "select * from score where id=$id";
$result = mysql_query ( $query );
$row = mysql_fetch_array ( $result );
?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12">
				<h2>修改学生成绩基本信息</h2>
			</div>
		</div>
		<!-- /. ROW  -->
		<hr />
		<div class="row">
			<div class="col-md-6 col-md-offset-1">
				<!-- class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1"> -->
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong> 编辑学生成绩信息 </strong>
					</div>
					<div class="panel-body">
						<form role="form" action="editdoscore.php" method='post'>
							<br /> <input type='hidden' name='id' value='<?=$row ['id']?>' />
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-circle-o-notch">
										学号</i></span> <input type="text" class="form-control"
									placeholder="学号 " name='studentId'
									value="<?=$row ['studentId']?>" />
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-tag"> 学期</i></span>
								<input type="text" class="form-control" placeholder=" 学期"
									name='term' value="<?=$row ['term']?>" />
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-tag">选择科目&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i></span>
 								<select class="form-control" name='subject'>
                                <option value='Java'<?=$row['subject']=='Java'?'selected':''?> >Java</option>
								<option value='PHP'<?=$row['subject']=='PHP'?'selected':''?> >PHP</option>
								<option value='Photoshop'<?=$row['subject']=='Photoshop'?'selected':''?> >Photoshop</option>
								<option value='Swift'<?=$row['subject']=='Swift'?'selected':''?> >Swift</option>
								<option value='C语言'<?=$row['subject']=='C语言'?'selected':''?> >C语言</option>
                                </select>
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-tag"> 成绩</i></span>
								<input type="text" class="form-control" placeholder="成绩"
									name='mark' value="<?=$row ['mark']?>" />
							</div>
							<input type='submit' class="btn btn-success" value='确认修改' />
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
!function(){
	laydate.skin('molv');//切换皮肤，请查看skins下面皮肤库
	laydate({elem: '#birthday'});//绑定元素
}();
</script>
</body>
</html>