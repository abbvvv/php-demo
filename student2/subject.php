<?php require_once 'base.php';?>

<?php
require_once 'dbconfig.php';
// 访问student
$query = "select * from subject";
$result = mysql_query($query);
?>
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
			<div class="col-md-12">
				<!-- Advanced Tables -->
				<div class="panel panel-default">
					<div class="panel-heading"><a href='insertsubject.php' class="btn btn-primary">增加科目信息</a></div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover"
								id="dataTables-example">
								<thead>
									<tr>
										<th>科目</th>
										<th>任课老师</th>
										<th>科目简介</th>
										<th>操作</th>
									</tr>
								</thead>
								<tbody>
                        		<?php
                        $line = 0;
                        while ($row = mysql_fetch_array($result)) {
                            $line ++;
                            $linecolor = $line % 2 == 0 ? 'odd gradeX' : 'even gradeC';
                            echo "<tr class='$linecolor'>";
                            echo "<td>" . $row['subjectname'] . "</td>";
                            echo "<td>" . $row['teacher'] . "</td>";
                            echo "<td>" . $row['content'] . "</td>";
                            
                            echo "<td><a href='editsubject.php?id=" . $row['id'] . "' class='btn btn-info btn-xs'>编辑</a>&nbsp;&nbsp;<a href='deletesubject.php?id=" . $row['id'] . "' class='btn btn-danger btn-xs'>删除</a></td>";
                            echo "</tr>";
                        }
                        ?>
								</tbody>
							</table>
						</div>

					</div>
				</div>
				<!--End Advanced Tables -->
			</div>
		</div>

	</div>

</div>
<!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
<!-- /. WRAPPER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="assets/js/jquery.metisMenu.js"></script>
<!-- DATA TABLE SCRIPTS -->
<script src="assets/js/dataTables/jquery.dataTables.js"></script>
<script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
<script>
		$(document).ready(function() {
			$('#dataTables-example').dataTable();
		});
	</script>
<!-- CUSTOM SCRIPTS -->
<script src="assets/js/custom.js"></script>
</body>
</html>

