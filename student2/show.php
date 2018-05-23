<?php
if(isset($_GET['xh'])){
	require_once 'dbconfig.php';
	$xh=$_GET['xh'];
	$sql = "select * from score,student where score.studentId='$xh' and score.studentId=student.studentId";
	header ( "content-type:text/html;charset=utf-8" );
	$r=mysql_query($sql);
	echo '<table class="table table-bordered">';
	echo "<thead>";
    echo "<tr>";
	echo "<th>学生</th>";
	echo "<th>科目</th>";
	echo "<th>成绩</th>";
	echo "</tr>";
	echo "</thead>";
    echo "<tbody>";
	while ($row=mysql_fetch_array($r)){
        echo "<tr>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['subject']."</td>";
        echo "<td>".$row['mark']."</td>";	
        echo "</tr>";
	}
	echo "</tbody>";
	echo "</table>";
}
?>