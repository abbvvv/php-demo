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
$query = "select * from student where id=$id";
$result = mysql_query ( $query );
$row = mysql_fetch_array ( $result );
?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12">
				<h2>修改学生基本信息</h2>
			</div>
		</div>
		<!-- /. ROW  -->
		<hr />
		<div class="row">
			<div class="col-md-6 col-md-offset-1">
				<!-- class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1"> -->
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong> 编辑学生信息 </strong>
					</div>
					<div class="panel-body">
						<form role="form" action="editdo.php" method='post'>
							<br /> <input type='hidden' name='id' value='<?=$row ['id']?>' />
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-circle-o-notch">
										学号</i></span> <input type="text" class="form-control"
									placeholder="学号 " name='studentId'
									value="<?=$row ['studentId']?>" />
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-tag"> 姓名</i></span>
								<input type="text" class="form-control" placeholder=" 姓名"
									name='name' value="<?=$row ['name']?>" />
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-tag"> 班级</i></span>
								<input type="text" class="form-control" placeholder="班级"
									name='className' value="<?=$row ['className']?>" />
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-tag"> 生日</i></span>
								<input type="text" class="form-control" placeholder="生日"
									id='birthday' name='birthday' value="<?=$row ['birthday']?>" />
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-tag"> 性别</i></span>
								<div align='left'>&nbsp;&nbsp;
									<input type="radio" placeholder="性别" name='sex' value='男'
										<?=$row ['sex']=='男'?'checked':''?> />男 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
										placeholder="性别" name='sex' value='女'
										<?=$row ['sex']=='女'?'checked':''?> />女
								</div>
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-tag"> 民族</i></span>
								<input type="text" class="form-control" placeholder="民族"
									name='nation' value="<?=$row ['nation']?>" />
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