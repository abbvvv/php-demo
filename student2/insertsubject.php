<?php require_once 'base.php';?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12">
				<h2>科目信息</h2>
			</div>
		</div>
		<!-- /. ROW  -->
		<hr />
		<div class="row">
			<div class="col-md-6 col-md-offset-1">
				<!-- class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1"> -->
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong>增加科目信息 </strong>
					</div>
					<div class="panel-body">
						<form role="form" action="insertsubjectdo.php" method='post'>
						<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-tag">选择科目&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i></span>
 								<select class="form-control" name='subject'>
                                                <option value="Java">Java</option>
                                                <option value="PHP">PHP</option>
                                                <option value="Photoshop">Photoshop</option>
                                                <option value="Swift">Swift</option>
                                                <option value="C语言">C语言</option>
                                </select>
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-circle-o-notch">
										任课老师&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i></span> <input type="text" class="form-control"
									placeholder="任课老师 " name='teacher' />
							</div>
							
							
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-tag"> 科目简介&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i></span>
								<input type="text" class="form-control" placeholder="科目简介"
									name='content' />
							</div>
							<input type='submit' class="btn btn-info" value='确认修改' />
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