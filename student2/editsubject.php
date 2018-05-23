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
$query = "select * from subject where id=$id";
$result = mysql_query ( $query );
$row = mysql_fetch_array ( $result );
?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12">
				<h2>修改科目信息</h2>
			</div>
		</div>
		<!-- /. ROW  -->
		<hr />
		<div class="row">
			<div class="col-md-6 col-md-offset-1">
				<!-- class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1"> -->
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong> 编辑科目信息 </strong>
					</div>
					<div class="panel-body">
						<form role="form" action="editsubjectdo.php" method='post'>
							<br /> <input type='hidden' name='id' value='<?=$row ['id']?>' />
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-tag">选择科目&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i></span>
 								<select class="form-control" name='subject'>
                                <option value='Java'<?=$row['subjectname']=='Java'?'selected':''?> >Java</option>
								<option value='PHP'<?=$row['subjectname']=='PHP'?'selected':''?> >PHP</option>
								<option value='Photoshop'<?=$row['subjectname']=='Photoshop'?'selected':''?> >Photoshop</option>
								<option value='Swift'<?=$row['subjectname']=='Swift'?'selected':''?> >Swift</option>
								<option value='C语言'<?=$row['subjectname']=='C语言'?'selected':''?> >C语言</option>
                                </select>
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-circle-o-notch">
										任课老师</i></span> <input type="text" class="form-control"
									placeholder="任课老师 " name='teacher'
									value="<?=$row ['teacher']?>" />
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-circle-o-notch">
										科目简介</i></span> <input type="text" class="form-control"
									placeholder="科目简介 " name='content'
									value="<?=$row ['content']?>" />
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