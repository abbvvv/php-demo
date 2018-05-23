<?php require_once 'base.php';?>

<?php
require_once 'dbconfig.php';
// 访问student
$query = "select * from student";
$result = mysql_query($query);
?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12">
				<h2>学生基本信息</h2>
			</div>
		</div>
		<!-- /. ROW  -->
		<hr />
		<div class="row">
			<div class="col-md-12">
				<!-- Advanced Tables -->
				<div class="panel panel-default">
					<div class="panel-heading"><a href='insert.php' class="btn btn-primary">增加学生信息</a></div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover"
								id="dataTables-example">
								<thead>
									<tr>
										<th>学号</th>
										<th>姓名</th>
										<th>班级</th>
										<th>生日</th>
										<th>性别</th>
										<th>民族</th>
										<th>操作</th>
									</tr>
								</thead>
								<tbody>
                        		<?php
                        $line = 0;
                        while ($row = mysql_fetch_array($result)) {
                            $line ++;
                            $linecolor = $line % 2 == 0 ? 'odd gradeX' : 'even gradeC';
                            echo '<tr class="$linecolor" onMouseMove="show(\''.$row['studentId'].'\')">';
                            
                            echo "<td>" . $row['studentId'] . "</td>";
                            echo "<td>" . $row['name'] . "</td>";
                            echo "<td>" . $row['className'] . "</td>";
                            echo "<td>" . $row['birthday'] . "</td>";
                            echo "<td>" . $row['sex'] . "</td>";
                            echo "<td>" . $row['nation'] . "</td>";
                            echo "<td><a href='edit.php?id=" . $row['id'] . "' class='btn btn-info btn-xs'>编辑</a>&nbsp;&nbsp;<a href='delete.php?id=" . $row['id'] . "' class='btn btn-danger btn-xs'>删除</a></td>";
                            echo "</tr>";
                        }
                        ?>
								</tbody>
							</table>
						</div>

					</div>
					<script type="text/javascript">
                                function show(xh){  
                                    var xmlhttp = new window.XMLHttpRequest();
                                    xmlhttp.open("GET","show.php?xh="+xh,true);
                                    xmlhttp.send();
                                    xmlhttp.onreadystatechange=function(){
                                    if(xmlhttp.readyState==4 && xmlhttp.status==200){
                                    document.getElementById("grade").innerHTML = xmlhttp.responseText;
                                          }
                                    }
                               }
                            </script>
                            <div id="grade">
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

