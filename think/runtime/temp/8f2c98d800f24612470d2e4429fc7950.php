<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:76:"F:\www\practice_tp\think\public/../application/index\view\search\search.html";i:1507552028;s:76:"F:\www\practice_tp\think\public/../application/index\view\common\header.html";i:1506598287;s:75:"F:\www\practice_tp\think\public/../application/index\view\common\right.html";i:1507550084;s:74:"F:\www\practice_tp\think\public/../application/index\view\common\foot.html";i:1505394084;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>童老师ThinkPHP交流群：484519446</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="童老师ThinkPHP交流群：484519446" />
<meta name="description" content="童老师ThinkPHP交流群：484519446" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<link href="__PUBLIC__/style/lady.css" type="text/css" rel="stylesheet" />
<!-- <link href="http://www.topthink.com/Public/static/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet" /> -->
<script type='text/javascript' src='images/js/ismobile.js'></script>
</head>

<body>

<div class="ladytop">
    <div class="nav">
        <div class="left"><a href=""><img src="__PUBLIC__/images/hunshang.png" alt="wed114婚尚"></a></div>
        <div class="right">
        <div class="box">
       <a href="<?php echo url('index/index'); ?>"  rel='dropmenu209'>首页</a>
          <?php if(is_array($cateres) || $cateres instanceof \think\Collection || $cateres instanceof \think\Paginator): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
         <a href="<?php echo url('cate/index',array('cateid' => $vo['id'])); ?>"  rel='dropmenu209'><?php echo $vo['catename']; ?></a>
         <?php endforeach; endif; else: echo "" ;endif; ?>
         </div>
        </div>
    </div>
</div>

<div class="hotmenu">
<div class="con">热门标签：<a href='qiwenqushi/'>奇闻趣事</a> <a href=''>生活妙招</a> <a href='xingzuo/'>星座</a> <a href='qinzi/'>亲子</a> <a href='qiche/'>汽车</a> <a href='chongwubaike/'>宠物百科</a> <a href='jiaji/'>家居</a> </div>
</div>


<!--顶部通栏-->


<div class="position">搜索：<?php echo $keywords; ?></div>

<div class="overall">

	<div class="left">
		<?php if(is_array($searchres) || $searchres instanceof \think\Collection || $searchres instanceof \think\Paginator): $i = 0; $__LIST__ = $searchres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
		<div class="xnews2">
				<div class="pic"><a target="_blank" href="20160920156216.html"><img src="<?php if($vo['pic'] != ''): ?>__IMG__<?php echo $vo['pic']; else: ?>__PUBLIC__/images/images.jpg<?php endif; ?>" alt=""/></a></div>
				<div class="dec">
				<h3><a target="_blank" href="<?php echo url('article/index', array('arid' => $vo['id'])); ?>"><?php echo $vo['title']; ?></a></h3>
				<div class="time">发布时间：<?php echo date( "Y-m-d",$vo['time']); ?></div>
				<p><?php echo $vo['desc']; ?> </p>
				<div class="time"><a href='http://localhost/practice_tp/think/public/index.php/index/search/index/keywords/$v'><?php echo $vo['keywords']; ?></a>  </div>
				</div>
				</div>
				<?php endforeach; endif; else: echo "" ;endif; ?>

				<div class="pages">
				<div class="plist" >
					<?php echo $searchres -> render(); ?>
				</div>
				</div>
	</div>

		<div class="right">
                <!--右侧各种广告-->
                <!--猜你喜欢-->
<div id="hm_t_57953"><div style="display: block; margin: 0px; padding: 0px; float: none; clear: none; overflow: hidden; position: relative; border: 0px none; background: transparent none repeat scroll 0% 0%; max-width: none; max-height: none; border-radius: 0px; box-shadow: none; transition: none 0s ease 0s ; text-align: left; box-sizing: content-box; width: 300px;">
<div class="hm-t-container" style="width: 298px;"><div class="hm-t-main"><div class="hm-t-header">热门点击</div><div class="hm-t-body">
  <ul class="hm-t-list hm-t-list-img">
    <?php if(is_array($clickres) || $clickres instanceof \think\Collection || $clickres instanceof \think\Paginator): $i = 0; $__LIST__ = $clickres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
<li class="hm-t-item hm-t-item-img">
  <a data-pos="0" title="<?php echo $vo['title']; ?>" target="_blank" href="<?php echo url('article/index',array('arid' => $vo['id'])); ?>" class="hm-t-img-title" style="visibility: visible;">
    <span><?php echo $vo['title']; ?></span></a></li>
    <?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
</div></div></div>

</div></div>
<div style="height:15px"></div>
<div id="hm_t_57953">
  <div style="display: block; margin: 0px; padding: 0px; float: none; clear: none; overflow: hidden; position: relative; border: 0px none; background: transparent none repeat scroll 0% 0%; max-width: none; max-height: none; border-radius: 0px; box-shadow: none; transition: none 0s ease 0s ; text-align: left; box-sizing: content-box; width: 300px;">
<div style="width: 298px;" class="hm-t-container">
  <div class="hm-t-main"><div class="hm-t-header">推荐阅读</div><div class="hm-t-body"><ul class="hm-t-list hm-t-list-img">
<?php if(is_array($tjres) || $tjres instanceof \think\Collection || $tjres instanceof \think\Paginator): $i = 0; $__LIST__ = $tjres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
<li class="hm-t-item hm-t-item-img"><a style="visibility: visible;" class="hm-t-img-title" href="<?php echo url('article/index',array('arid' => $vo['id'])); ?>" target="_blank"
   title="<?php echo $vo['title']; ?>" data-pos="0">
   <span><?php echo $vo['title']; ?></span></a></li>
<?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
</div></div></div>

</div></div>
<div style="height:15px"></div>

<div id="bdcs"><div class="bdcs-container"><meta content="IE=9" http-equiv="x-ua-compatible">   <!-- 嵌入式 -->
  <div id="default-searchbox" class="bdcs-main bdcs-clearfix">
     <div id="bdcs-search-inline" class="bdcs-search bdcs-clearfix">
          <form id="bdcs-search-form" autocomplete="off" class="bdcs-search-form" target="_blank" method="get" action="<?php echo url('Search/index'); ?>">
              <input type="text" placeholder="请输入关键词" id="bdcs-search-form-input" class="bdcs-search-form-input" name="keywords" autocomplete="off" style="line-height: 30px; width:220px;">
                <input type="submit" value="搜索" id="bdcs-search-form-submit" class="bdcs-search-form-submit bdcs-search-form-submit-magnifier">
                 </form>
               </div>
                 <div id="bdcs-search-sug" class="bdcs-search-sug" style="top: 552px; width: 239px;">
                        <ul id="bdcs-search-sug-list" class="bdcs-search-sug-list"></ul>
                   </div>
                          </div>
                          </div>
                        </div>

<div style="height:15px"></div>



            </div>


</div>
<div class="footerd">
<ul>
<li>Copyright &#169; 2008-2016  all rights reserved 版权所有   <a href="http://www.miibeian.gov.cn" target="_blank" rel="nofollow">蜀icp备08107937号</a></li>
</ul>
</div>

<div style="display:none;"><script src='goto/my-65537.js' language='javascript'></script><script src="images/js/count_zixun.js" language="JavaScript"></script></div>

</body>
</html>