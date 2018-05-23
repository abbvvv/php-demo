<?php
/* if (! isset ( $_SESSION )) {
	session_start ();
}
if (! isset ( $_SESSION ['userName'] )) {
	header ( "location:login.php" );
}
$userName = $_SESSION ['userName'];
//计算当前文件名
$url = $_SERVER['PHP_SELF'];
$start = strrpos($url,'/');
$end = strrpos($url,'.');
$menuName = substr($url,$start+1,$end-$start-1); */
require_once 'base.php';
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Admin Dashboard</h2>   
                        <h5>Welcome Jhon Deo , Love to see you back. </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-envelope-o"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">120 New</p>
                    <p class="text-muted">Messages</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-bars"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">30 Tasks</p>
                    <p class="text-muted">Remaining</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-bell-o"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">240 New</p>
                    <p class="text-muted">Notifications</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-rocket"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">3 Orders</p>
                    <p class="text-muted">Pending</p>
                </div>
             </div>
		     </div>
			</div>
                 <!-- /. ROW  -->
                <hr />                
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue">
                    <i class="fa fa-warning"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">52 Important Issues to Fix </p>
                    <p class="text-muted">Please fix these issues to work smooth</p>
                    <p class="text-muted">Time Left: 30 mins</p>
                    <hr />
                    <p class="text-muted">
                          <span class="text-muted color-bottom-txt"><i class="fa fa-edit"></i>
                               Lorem ipsum dolor sit amet, consectetur adipiscing elit gthn. 
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit gthn. 
                               </span>
                    </p>
                </div>
             </div>
		     </div>
                    
                    
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel back-dash">
                               <i class="fa fa-dashboard fa-3x"></i><strong> &nbsp; SPEED</strong>
                             <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing sit ametsit amet elit ftr. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        </div>
                       
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12 ">
                        <div class="panel ">
          <div class="main-temp-back">
            <div class="panel-body">
              <div class="row">
                <div class="col-xs-6"> <i class="fa fa-cloud fa-3x"></i> Newyork City </div>
                <div class="col-xs-6">
                  <div class="text-temp"> 10° </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
                     <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-desktop"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">Display</p>
                    <p class="text-muted">Looking Good</p>
                </div>
             </div>
			
    </div>
                        
        </div>
                 <!-- /. ROW  -->
                <div class="row"> 
                    
                      
                               <div class="col-md-9 col-sm-12 col-xs-12">                     
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Bar Chart Example
                        </div>
                        <div class="panel-body">
                            <div id="morris-bar-chart"></div>
                        </div>
                    </div>            
                </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">                       
                    <div class="panel panel-primary text-center no-boder bg-color-green">
                        <div class="panel-body">
                            <i class="fa fa-bar-chart-o fa-5x"></i>
                            <h3>120 GB </h3>
                        </div>
                        <div class="panel-footer back-footer-green">
                           Disk Space Available
                            
                        </div>
                    </div>
                    <div class="panel panel-primary text-center no-boder bg-color-red">
                        <div class="panel-body">
                            <i class="fa fa-edit fa-5x"></i>
                            <h3>20,000 </h3>
                        </div>
                        <div class="panel-footer back-footer-red">
                            Articles Pending
                            
                        </div>
                    </div>                         
                        </div>
                
           </div>
           <div class="copyrights">Collect from <a href="http://www.cssmoban.com/"  title="网站模板">网站模板</a></div>
                 <!-- /. ROW  -->
                <div class="row" >
                    <div class="col-md-3 col-sm-12 col-xs-12">
  <div class="panel panel-primary text-center no-boder bg-color-green">
                        <div class="panel-body">
                            <i class="fa fa-comments-o fa-5x"></i>
                            <h4>200 New Comments </h4>
                             <h4>See All Comments  </h4>
                        </div>
                        <div class="panel-footer back-footer-green">
                             <i class="fa fa-rocket fa-5x"></i>
                            Lorem ipsum dolor sit amet sit sit, consectetur adipiscing elitsit sit gthn ipsum dolor sit amet ipsum dolor sit amet
                            
                        </div>
                    </div>
                    </div>
                    <div class="col-md-9 col-sm-12 col-xs-12">
               
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Responsive Table Example
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                             <th>User No.</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>100090</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                            <td>100090</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                            <td>100090</td>
                                        </tr>
                                         <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>100090</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                            <td>100090</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                            <td>100090</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    </div>
                </div>
                 <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                   
                    <div class="chat-panel panel panel-default chat-boder chat-panel-head" >
                        <div class="panel-heading">
                            <i class="fa fa-comments fa-fw"></i>
                            Chat Box
                            <div class="btn-group pull-right">
                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-chevron-down"></i>
                                </button>
                                <ul class="dropdown-menu slidedown">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-refresh fa-fw"></i>Refresh
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-check-circle fa-fw"></i>Available
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-times fa-fw"></i>Busy
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-clock-o fa-fw"></i>Away
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-sign-out fa-fw"></i>Sign Out
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="panel-body">
                            <ul class="chat-box">
                                <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="assets/img/1.png" alt="User" class="img-circle" />
                                    </span>
                                    <div class="chat-body">                                        
                                            <strong >Jack Sparrow</strong>
                                            <small class="pull-right text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i>12 mins ago
                                            </small>                                      
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="right clearfix">
                                    <span class="chat-img pull-right">

                                        <img src="assets/img/2.png" alt="User" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        
                                            <small class=" text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i>13 mins ago</small>
                                            <strong class="pull-right">Jhonson Deed</strong>
                                      
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                         <img src="assets/img/3.png" alt="User" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        
                                            <strong >Jack Sparrow</strong>
                                            <small class="pull-right text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i>14 mins ago</small>
                                        
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="right clearfix">
                                    <span class="chat-img pull-right">
                                         <img src="assets/img/4.png" alt="User" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                      
                                            <small class=" text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i>15 mins ago</small>
                                            <strong class="pull-right">Jhonson Deed</strong>
                                       
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                    <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="assets/img/1.png" alt="User" class="img-circle" />
                                    </span>
                                    <div class="chat-body">                                        
                                            <strong >Jack Sparrow</strong>
                                            <small class="pull-right text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i>12 mins ago
                                            </small>                                      
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="right clearfix">
                                    <span class="chat-img pull-right">
                                       <img src="assets/img/2.png" alt="User" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        
                                            <small class=" text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i>13 mins ago</small>
                                            <strong class="pull-right">Jhonson Deed</strong>
                                      
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="panel-footer">
                            <div class="input-group">
                                <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message to send..." />
                                <span class="input-group-btn">
                                    <button class="btn btn-warning btn-sm" id="btn-chat">
                                        Send
                                    </button>
                                </span>
                            </div>
                        </div>

                    </div>
                    
                </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                         <div class="panel panel-default">
                        <div class="panel-heading">
                           Label Examples
                        </div>
                        <div class="panel-body">
                            <span class="label label-default">Default</span>
<span class="label label-primary">Primary</span>
<span class="label label-success">Success</span>
<span class="label label-info">Info</span>
<span class="label label-warning">Warning</span>
<span class="label label-danger">Danger</span>
                        </div>
                    </div>
                         
                         <div class="panel panel-default">
                        <div class="panel-heading">
                            Donut Chart Example
                        </div>
                        <div class="panel-body">
                            <div id="morris-donut-chart"></div>
                            More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a>
                        </div>
                    </div>
                      
                    </div>
                </div>     
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
