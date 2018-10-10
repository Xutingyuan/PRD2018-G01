<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<link rel="stylesheet" type="text/css" href="/css/game.css" />
<link rel="stylesheet" type="text/css" href="/css/main.css" />
<link rel="stylesheet" type="text/css" href="/css/message.css" />
<link rel="stylesheet" type="text/css" href="/css/bbs.css" />

<script type="text/javascript" src="/system/application/views/admin/main.js">
</script>

</head>

<body>

<?php 

	$msg = $this->session->flashdata('msg');
	if($msg)
		echo "<script language=\"JavaScript\">alert(\"$msg\");</script>"; 

?>
<div class="container">
    <div class="header">
      <div class="logo">
      <div class="per_info" align="center">
        	<p><?php echo $this->session->userdata('user_name')	;?>，欢迎回来！</p>
            <p>积分：<?php echo $this->session->userdata('score');  ?>分 | 等级：<?php               
			switch($this->session->userdata('grade'))			
            {
				case 1: echo "新手上路";break;
				case 2: echo "初学乍练";break;
				case 3: echo "略有小成";break;
				case 4: echo "渐入佳境";break;
				case 5: echo "炉火纯青";break;
				case 6: echo "登峰造极";break;
			}
			?>    |   
            在线时间：<?php echo $this->session->userdata('onlinetime');?>
            </p>
            <a href="http://10.214.29.18/pbcls/">关于我们</a>
            <a href=<?php echo site_url('home/quit/')?>>退出</a>
        </div>
      </div>
      <ul class="nav">
        <li><a href=<?php echo site_url("home/index")?>><strong>首 页</strong></a></li>
        <li><a href=<?php echo site_url("cc/index")?>><strong>案 例</strong></a></li>
        <li><a href=<?php echo site_url("ins/index")?>><strong>实 例</strong></a></li>
        <li><a href=<?php echo site_url("per/index")?>><strong>个人空间</strong></a></li>
      </ul>
    </div>
    <div class="maincontent">
   		<div class="sidebar">
        	<?php echo img('system/image/u25.jpg');?>
            <ul class="sidebar_nav">
                <li><a href=<?php echo site_url("evaluation") ?>><strong>我要进行的评价</strong></a></li>
                <li><a href=<?php echo site_url("evaluation/selfevaluation") ?>>自评</a></li>
                <li><a href=<?php echo site_url("evaluation/mutualmain")?>>互评</a></li>
                <li><a href=<?php echo site_url("evaluation/downloadevaluationdoc") ?>>评价标准</a></li>
                <li><a href=<?php echo site_url("evaluation") ?>><strong>我当前的评价</strong></a></li>
                <li><a href=<?php echo site_url("evaluation/from_instructor")?>>老师的评价</a></li>
                <li><a href=<?php echo site_url("evaluation/from_manager")?>>经理的评价</a></li>
                <li><a href=<?php echo site_url("evaluation/from_member")?>>组员的评价</a></li>
                 <li><a href=<?php echo site_url("evaluation/historyevaluation") ?>><strong>我的历史评价</strong></a></li>
                
            </ul>
   	</div>

        <div class="mainbody">
			<div class="game_nav">
            	PBCLS >> <?php echo $this->session->userdata('instancename'); ?> >> 评价 >> 老师评价
          </div>
            
          <div class="main" align="center">
          <h5>在这里您可以对您可以看到知道老师对您和您的小组前一项目阶段的评价。</h5>
          <!--
            <table border="0" cellspacing="0" cellpadding="5" width="300">
            <tr>
            	<td><p>任务名称：</p></td>
                <td></td>
            </tr>
            <tr>	
            	<td><p>任务需求：</p></td>
                <td><p></p></td>
            </tr>
            <tr>	
            	<td><p>提交的文档：</p>
                </td><td><p></p></td>
            </tr>
            </table>
            -->
            
           <p>任务阶段：<?php echo $taskname; ?></p>
           <table style="font-size:12px" border="1" width="400">
            <tr><th colspan="3" align="center" width="400">指导老师对自己的评价</th></tr>
            <tr align="center"><th width="120">评价项目</th>
            <th width="40">权重%</th><th width="240">等级</th></tr>           
            <tr align="center"><td>学习状态</td><td>20</td><td><?php echo $result['instructor_attitude']; ?></td></tr>
            <tr align="center"><td>资源上传下载数量</td><td>20</td><td><?php echo $result['instructor_updownquantity']; ?></td></tr>
            <tr align="center"><td>资源上传下载质量</td><td>20</td><td><?php echo $result['instructor_updownquality']; ?></td></tr>
            <tr align="center"><td>BBS问答次数</td><td>20</td><td><?php echo $result['instructor_bbsquantity']; ?></td></tr>
            <tr align="center"><td>BBS问答质量</td><td>20</td><td><?php echo $result['instructor_bbsquality']; ?></td></tr>
            <tr align="center"><td>综合评价</td><td><?php echo $result['instructor_score']; ?></td>
            <td><?php echo $result['instructor_mark']; ?></td></tr>
            </table>
            <br />
            <table style="font-size:12px" border="1" width="400">
            <tr><th colspan="3" align="center">指导老师对小组的评价</th></tr>
            <tr align="center"><th width="120">评价项目</th>
            <th width="40">权重%</th><th width="240">等级</th></tr>
            <tr align="center"><td>资源上传下载数量</td><td>10</td><td><?php echo $teamresult['updownquantity']; ?></td></tr>
            <tr align="center"><td>资源上传下载质量</td><td>10</td><td><?php echo $teamresult['updownquality']; ?></td></tr>
            <tr align="center"><td>BBS问答次数</td><td>10</td><td><?php echo $teamresult['bbsquantity']; ?></td></tr>
            <tr align="center"><td>BBS问答质量</td><td>10</td><td><?php echo $teamresult['bbsquality']; ?></td></tr>
            <tr align="center"><td>文档完成时间</td><td>10</td><td><?php echo $teamresult['docpasstime']; ?></td></tr>
            <tr align="center"><td>文档创新情况</td><td>10</td><td><?php echo $teamresult['docinnovation']; ?></td></tr>
            <tr align="center"><td>文档正确程度</td><td>30</td><td><?php echo $teamresult['doccorrectness']; ?></td></tr>
            <tr align="center"><td>文档风格</td><td>10</td><td><?php echo $teamresult['docstyle']; ?></td></tr>
            <tr align="center"><td>综合评价</td><td><?php echo $teamresult['score'];?></td>
            <td><?php echo $teamresult['mark']; ?></td></tr>
            </table>
          <br />
          </div>
        </div>
  </div>
    <class class="footer">
    	<hr />
        <p align="center">Copyright 2009 PBCLS Team. All Rights Reserved.</p>
</div>
</div>
</body>
</html>