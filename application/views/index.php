<?php include 'header.php'; ?>
<div style="width:100%;height:831px;background:url(images/bg.jpg);float:left;">
    <div  style="margin:17px auto 24px auto;background:none" class="mid" id="index_mid">
	<div style="width:100%;height:100%;position:absolute;z-index:0;opacity:0.6;filter:alpha(opacity=60);background:#000;offset:0;" ></div>
          <div style="opacity:0.6;filter:alpha(opacity=60);background:url(images/bg_index_3.gif);position:absolute;" id="mid_tit">
             <div style="opacity:0.0;filter:alpha(opacity=0);width:860px;margin:15px auto 0 63px;" id="mid_log"><img src="<?php echo base_url();?>/images/title.gif" /></div>
	  </div>
          <div id="mid_con">
             <div style="margin-top:70px" id="scroll">
                  <div  id="scroll_div" class="ynode_scroll">
                    <div class="ynode_scrollImg" style="width:2580px;left:0;">
                    <div class="ynode_img">
					  <div class="div_left sdiv "><a class="div_left" style="display:block" href="<?php echo site_url('pictures/'.$focuspic[0]['posts_id']);?>"><img src="<?php echo site_url('thumb/'.'4/'. str_replace('/','_',$pictures[0][0])); ?>"  alt="<?php echo $focuspic[0]['posts_title']?>" title="<?php echo $focuspic[0]['posts_title']?>" /></a></div>
                      <!--<a href=""> <div class="div_left sdiv "><img src="<?php echo base_url();?>/newImages/p1.jpg" /></div></a>-->
					  <div class="div_rightT sdiv "><a class="div_rightT"  href="<?php echo site_url('pictures/'.$focuspic[0]['posts_id']);?>"><img src="<?php echo site_url('thumb/'.'1/'. str_replace('/','_',$pictures[0][1])); ?>"  alt="<?php echo $focuspic[0]['posts_title']?>" title="<?php echo $focuspic[0]['posts_title']?>" /></a></div>
                      <!--<a href=""><div class="div_rightT sdiv"><img src="<?php echo base_url();?>/images/p2.gif" /></div></a>-->
					  <div class="div_rightT2 sdiv "><a class="div_rightT2" href="<?php echo site_url('pictures/'.$focuspic[0]['posts_id']);?>"><img src="<?php echo site_url('thumb/'.'3/'. str_replace('/','_',$pictures[0][2])); ?>"  alt="<?php echo $focuspic[0]['posts_title']?>" title="<?php echo $focuspic[0]['posts_title']?>" /></a></div>
                      <!--<a href=""><div class="div_rightT2 sdiv"><img src="<?php echo base_url();?>/newImages/p4.jpg" /></div></a>-->
					  <div class="div_rightB sdiv "><a class="div_rightB"  href="<?php echo site_url('pictures/'.$focuspic[0]['posts_id']);?>"><img src="<?php echo site_url('thumb/'.'3/'. str_replace('/','_',$pictures[0][3])); ?>"  alt="<?php echo $focuspic[0]['posts_title']?>" title="<?php echo $focuspic[0]['posts_title']?>" /></a></div>
                      <!--<a href=""><div class="div_rightB sdiv"><img src="<?php echo base_url();?>/images/p3.gif" /></div></a>-->
					  <div class="div_rightB2 sdiv "><a class="div_rightB2" href="<?php echo site_url('pictures/'.$focuspic[0]['posts_id']);?>"><img src="<?php echo site_url('thumb/'.'5/'. str_replace('/','_',$pictures[0][4])); ?>"  alt="<?php echo $focuspic[0]['posts_title']?>" title="<?php echo $focuspic[0]['posts_title']?>" /></a></div>
                      <!--<a href=""><div class="div_rightB2 sdiv"></div>-->
                    </div>  
                    <div class="ynode_img">
					 <div class="div_left sdiv "><a class="div_left" href="<?php echo site_url('pictures/'.$focuspic[1]['posts_id']);?>"><img src="<?php echo site_url('thumb/'.'4/'. str_replace('/','_',$pictures[1][0])); ?>"  alt="<?php echo $focuspic[1]['posts_title']?>" title="<?php echo $focuspic[1]['posts_title']?>" /></a></div>
                      <!--<a href=""> <div class="div_left sdiv "><img src="<?php echo base_url();?>/newImages/p1.jpg" /></div></a>-->
					  <div class="div_rightT sdiv "><a class="div_rightT" href="<?php echo site_url('pictures/'.$focuspic[1]['posts_id']);?>"><img src="<?php echo site_url('thumb/'.'1/'. str_replace('/','_',$pictures[1][1])); ?>"  alt="<?php echo $focuspic[1]['posts_title']?>" title="<?php echo $focuspic[1]['posts_title']?>" /></a></div>
                      <!--<a href=""><div class="div_rightT sdiv"><img src="<?php echo base_url();?>/images/p2.gif" /></div></a>-->
					  <div class="div_rightT2 sdiv "><a class="div_rightT2" href="<?php echo site_url('pictures/'.$focuspic[1]['posts_id']);?>"><img src="<?php echo site_url('thumb/'.'3/'. str_replace('/','_',$pictures[1][2])); ?>"  alt="<?php echo $focuspic[1]['posts_title']?>" title="<?php echo $focuspic[1]['posts_title']?>" /></a></div>
                      <!--<a href=""><div class="div_rightT2 sdiv"><img src="<?php echo base_url();?>/newImages/p4.jpg" /></div></a>-->
					  <div class="div_rightB sdiv "><a class="div_rightB" href="<?php echo site_url('pictures/'.$focuspic[1]['posts_id']);?>"><img src="<?php echo site_url('thumb/'.'3/'. str_replace('/','_',$pictures[1][3])); ?>"  alt="<?php echo $focuspic[1]['posts_title']?>" title="<?php echo $focuspic[1]['posts_title']?>" /></a></div>
                      <!--<a href=""><div class="div_rightB sdiv"><img src="<?php echo base_url();?>/images/p3.gif" /></div></a>-->
					  <div class="div_rightB2 sdiv "><a class="div_rightB2" href="<?php echo site_url('pictures/'.$focuspic[1]['posts_id']);?>"><img src="<?php echo site_url('thumb/'.'5/'. str_replace('/','_',$pictures[1][4])); ?>"  alt="<?php echo $focuspic[1]['posts_title']?>" title="<?php echo $focuspic[1]['posts_title']?>" /></a></div>
                      <!--<a href=""><div class="div_rightB2 sdiv"></div>-->
                      <!--<a href=""><div class="div_left sdiv "><img src="<?php echo base_url();?>/newImages/p1.jpg" /></div></a>
                      <a href=""><div class="div_rightT sdiv"><img src="<?php echo base_url();?>/images/p2.gif" /></div></a>
                      <a href=""><div class="div_rightT2 sdiv"><img src="<?php echo base_url();?>/newImages/p4.jpg" /></div></a>
                      <a href=""><div class="div_rightB sdiv"><img src="<?php echo base_url();?>/images/p3.gif" /></div></a>
                      <a href=""><div class="div_rightB2 sdiv"></div></a>-->
                    </div> 
                    <div class="ynode_img">
					  <div class="div_left sdiv "><a class="div_left" href="<?php echo site_url('pictures/'.$focuspic[2]['posts_id']);?>"><img src="<?php echo site_url('thumb/'.'4/'. str_replace('/','_',$pictures[2][0])); ?>"  alt="<?php echo $focuspic[2]['posts_title']?>" title="<?php echo $focuspic[2]['posts_title']?>" /></a></div>
                      <!--<a href=""> <div class="div_left sdiv "><img src="<?php echo base_url();?>/newImages/p1.jpg" /></div></a>-->
					  <div class="div_rightT sdiv "><a class="div_rightT" href="<?php echo site_url('pictures/'.$focuspic[2]['posts_id']);?>"><img src="<?php echo site_url('thumb/'.'1/'. str_replace('/','_',$pictures[2][1])); ?>"  alt="<?php echo $focuspic[2]['posts_title']?>" title="<?php echo $focuspic[2]['posts_title']?>" /></a></div>
                      <!--<a href=""><div class="div_rightT sdiv"><img src="<?php echo base_url();?>/images/p2.gif" /></div></a>-->
					  <div class="div_rightT2 sdiv "><a class="div_rightT2" href="<?php echo site_url('pictures/'.$focuspic[2]['posts_id']);?>"><img src="<?php echo site_url('thumb/'.'3/'. str_replace('/','_',$pictures[2][2])); ?>"  alt="<?php echo $focuspic[2]['posts_title']?>" title="<?php echo $focuspic[2]['posts_title']?>" /></a></div>
                      <!--<a href=""><div class="div_rightT2 sdiv"><img src="<?php echo base_url();?>/newImages/p4.jpg" /></div></a>-->
					  <div class="div_rightB sdiv "><a class="div_rightB" href="<?php echo site_url('pictures/'.$focuspic[2]['posts_id']);?>"><img src="<?php echo site_url('thumb/'.'3/'. str_replace('/','_',$pictures[2][3])); ?>"  alt="<?php echo $focuspic[2]['posts_title']?>" title="<?php echo $focuspic[2]['posts_title']?>" /></a></div>
                      <!--<a href=""><div class="div_rightB sdiv"><img src="<?php echo base_url();?>/images/p3.gif" /></div></a>-->
					  <div class="div_rightB2 sdiv "><a class="div_rightB2" href="<?php echo site_url('pictures/'.$focuspic[2]['posts_id']);?>"><img src="<?php echo site_url('thumb/'.'5/'. str_replace('/','_',$pictures[2][4])); ?>"  alt="<?php echo $focuspic[2]['posts_title']?>" title="<?php echo $focuspic[2]['posts_title']?>" /></a></div>
                      <!--<a href=""><div class="div_left sdiv "><img src="<?php echo base_url();?>/newImages/p1.jpg" /></div></a>
                      <a href=""><div class="div_rightT sdiv"><img src="<?php echo base_url();?>/images/p2.gif" /></div></a>
                      <a href=""><div class="div_rightT2 sdiv"><img src="<?php echo base_url();?>/newImages/p4.jpg" /></div></a>
                      <a href=""><div class="div_rightB sdiv"><img src="<?php echo base_url();?>/images/p3.gif" /></div></a>
                      <a href=""><div class="div_rightB2 sdiv"></div></a>-->
                    </div> 
                    </div>
                  </div>
                  <div style="float:left;" class="sc_list" id="ynode-menu">
                     <ul>
                        <li class='ynode_ul'></li>
                        <li class='ynode_ul'></li>
                        <li class='ynode_ul'></li>
                     </ul>
                  </div>
<script type="text/javascript">
indexNum=0;
current=3;
$(function()
{
	var t=setInterval(indexMoveR,4000);	
	$($('.ynode_ul')[0]).mouseover(function(){
		clearInterval(t);
		for(var i=0;i<3;i++){	
		//getClassName('ynode_ul')[i].style.background='#7c7c7c';
		$($('.ynode_ul')[i]).css('background-color','#7c7c7c');
		}
		$($('.ynode_ul')[0]).css('background-color','#ffffff');
		$('.ynode_scrollImg').animate({left:'0'});
	});
	$($('.ynode_ul')[0]).mouseout(function(){
		current=0;
		t=setInterval(indexMoveR,4000);	
	});
	$($('.ynode_ul')[1]).mouseover(function(){
		clearInterval(t);
		for(var i=0;i<3;i++){	
		//getClassName('ynode_ul')[i].style.background='#7c7c7c';
		$($('.ynode_ul')[i]).css('background-color','#7c7c7c');
		}
		$($('.ynode_ul')[1]).css('background-color','#ffffff');
		$('.ynode_scrollImg').animate({left:'-860'});
	});
	$($('.ynode_ul')[1]).mouseout(function(){
		current=1;
		t=setInterval(indexMoveR,4000);	
	});
	$($('.ynode_ul')[2]).mouseover(function(){
		current=2;
		clearInterval(t);
		for(var i=0;i<3;i++){	
		//getClassName('ynode_ul')[i].style.background='#7c7c7c';
		$($('.ynode_ul')[i]).css('background-color','#7c7c7c');
		}
		$($('.ynode_ul')[2]).css('background-color','#ffffff');
		$('.ynode_scrollImg').animate({left:'-1720'});
	});
	$($('.ynode_ul')[2]).mouseout(function(){
		t=setInterval(indexMoveR,4000);	
	});
/*getClassName('ynode_ul')[0].onmouseover=function(){
	clearInterval(t);
	for(var i=0;i<indexLen-1;i++){
		getClassName('ynode_img')[i].style.display='none';
		getClassName('ynode_ul')[i].style.background='#7c7c7c';
		}
	getClassName('ynode_img')[0].style.display='block';
	getClassName('ynode_ul')[0].style.background='white';
	
}
getClassName('ynode_ul')[0].onmouseout=function(){
	t=setInterval(indexMoveR,1000);	
}*/	
}
)

function indexMoveR()
{
	if(current==3)
	indexNum++;
	else
	{indexNum=current;indexNum++;}
	current=3;
	if(indexNum==3){indexNum=0;}
	for(var i=0;i<3;i++){	
		//getClassName('ynode_ul')[i].style.background='#7c7c7c';
		$($('.ynode_ul')[i]).css('background-color','#7c7c7c');
		}
		
	//getClassName('ynode_img')[indexNum].style.display='block';
	$($('.ynode_ul')[indexNum]).css('background-color','#ffffff');
	//getClassName('ynode_ul')[indexNum].style.background='white';
	var leftNum=indexNum*860;
	$('.ynode_scrollImg').animate({left:'-'+leftNum});
	//alert(indexNum);
}
</script>
<script type="text/javascript">
/*function $(id){
	return document.getElementById(id);
  }
function getClassName(classN){
	if(document.getElementsByClass){
		return document.getElementsByClass(classN);
		}
		var ret=[];
		var nodes=document.getElementsByTagName('*');
		for(var i=0,len=nodes.length;i<len;i++){
			var names=nodes[i].className.split(/\s+/);
			for(var j=0,lenN=names.length;j<lenN;j++){
				  if(names[j]==classN){
					  ret.push(nodes[i]);
					  }
				}  
			}
		return ret;
   }
   var indexNum=0;
   var indexLen=getClassName('ynode_img').length;
function indexMoveR(){
	indexNum++;
	if(indexNum==3){indexNum=0;}
	for(var i=0;i<indexLen;i++){
		getClassName('ynode_img')[i].style.display='none';
		getClassName('ynode_ul')[i].style.background='#7c7c7c';
		}
	getClassName('ynode_img')[indexNum].style.display='block';
	getClassName('ynode_ul')[indexNum].style.background='white';
}

var t=setInterval(indexMoveR,1000);
getClassName('ynode_ul')[0].onmouseover=function(){
	clearInterval(t);
	for(var i=0;i<indexLen-1;i++){
		getClassName('ynode_img')[i].style.display='none';
		getClassName('ynode_ul')[i].style.background='#7c7c7c';
		}
	getClassName('ynode_img')[0].style.display='block';
	getClassName('ynode_ul')[0].style.background='white';
	
}
getClassName('ynode_ul')[0].onmouseout=function(){
	t=setInterval(indexMoveR,1000);	
}
getClassName('ynode_ul')[1].onmouseover=function(){
	clearInterval(t);
	for(var i=0;i<indexLen-1;i++){
		getClassName('ynode_img')[i].style.display='none';
		getClassName('ynode_ul')[i].style.background='#7c7c7c';
		}
	getClassName('ynode_img')[1].style.display='block';
	getClassName('ynode_ul')[1].style.background='white';
	
}
getClassName('ynode_ul')[1].onmouseout=function(){
	t=setInterval(indexMoveR,1000);	
}
getClassName('ynode_ul')[2].onmouseover=function(){
	clearInterval(t);
	for(var i=0;i<indexLen-1;i++){
		getClassName('ynode_img')[i].style.display='none';
		getClassName('ynode_ul')[i].style.background='#7c7c7c';
		}
	getClassName('ynode_img')[2].style.display='block';
	getClassName('ynode_ul')[2].style.background='white';
	
}
getClassName('ynode_ul')[2].onmouseout=function(){
	t=setInterval(indexMoveR,1000);	
}*/
</script>                 
    
                  <div style="clear:left;"  class="show showTop f"><a style="display:block;width:100%;height:100%;" href="<?php echo site_url('pictures/'.$newestpic[0]['posts_id']);?>"><img src="<?php echo site_url('thumb/'.'2/'. str_replace('/','_',$newestpic[0]['posts_thumb'])); ?>"  alt="<?php echo $newestpic[0]['posts_title']?>" title="<?php echo $newestpic[0]['posts_title']?>" /><div class="dj"><p>[图集]<?php echo $newestpic[0]['posts_title']?></p><p>点击:<?php echo $newestpic[0]['posts_hit'];?></p></div></a></div>
                  <div class="show showTop"><a style="display:block;width:100%;height:100%;" href="<?php echo site_url('pictures/'.$newestpic[1]['posts_id']);?>"><img src="<?php echo site_url('thumb/'.'2/'. str_replace('/','_',$newestpic[1]['posts_thumb'])); ?>"  alt="<?php echo $newestpic[1]['posts_title']?>" title="<?php echo $newestpic[1]['posts_title']?>"/><div class="dj"><p>[图集]<?php echo $newestpic[1]['posts_title']?></p><p>点击:<?php echo $newestpic[1]['posts_hit'];?></p></div></a></div>
                  <div class="show showTop"><a style="display:block;width:100%;height:100%;" href="<?php echo site_url('pictures/'.$newestpic[2]['posts_id']);?>"><img src="<?php echo site_url('thumb/'.'2/'. str_replace('/','_',$newestpic[2]['posts_thumb'])); ?>"  alt="<?php echo $newestpic[2]['posts_title']?>" title="<?php echo $newestpic[2]['posts_title']?>"/><div class="dj"><p>[图集]<?php echo $newestpic[2]['posts_title']?></p><p>点击:<?php echo $newestpic[2]['posts_hit'];?></p></div></a></div>
                  <div class="show showTop"><a style="display:block;width:100%;height:100%;" href="<?php echo site_url('pictures/'.$newestpic[3]['posts_id']);?>"><img src="<?php echo site_url('thumb/'.'2/'. str_replace('/','_',$newestpic[3]['posts_thumb'])); ?>"  alt="<?php echo $newestpic[3]['posts_title']?>" title="<?php echo $newestpic[3]['posts_title']?>"/><div class="dj"><p>[图集]<?php echo $newestpic[3]['posts_title']?></p><p>点击:<?php echo $newestpic[3]['posts_hit'];?></p></div></a></div>
                  <div style="clear:left;" class="show showBot f"><a style="display:block;width:100%;height:100%;" href="<?php echo site_url('pictures/'.$newestpic[4]['posts_id']);?>"><img src="<?php echo site_url('thumb/'.'2/'. str_replace('/','_',$newestpic[4]['posts_thumb'])); ?>"  alt="<?php echo $newestpic[4]['posts_title']?>" title="<?php echo $newestpic[4]['posts_title']?>"/><div class="dj"><p>[图集]<?php echo $newestpic[4]['posts_title']?></p><p>点击:<?php echo $newestpic[4]['posts_hit'];?></p></div></a></div>
                  <div class="show showBot"><a style="display:block;width:100%;height:100%;" href="<?php echo site_url('pictures/'.$newestpic[5]['posts_id']);?>"><img src="<?php echo site_url('thumb/'.'2/'. str_replace('/','_',$newestpic[5]['posts_thumb'])); ?>"  alt="<?php echo $newestpic[5]['posts_title']?>" title="<?php echo $newestpic[5]['posts_title']?>"/><div class="dj"><p>[图集]<?php echo $newestpic[5]['posts_title']?></p><p>点击:<?php echo $newestpic[5]['posts_hit'];?></p></div></a></div>
                  <div class="show showBot"><a style="display:block;width:100%;height:100%;" href="<?php echo site_url('pictures/'.$newestpic[6]['posts_id']);?>"><img src="<?php echo site_url('thumb/'.'2/'. str_replace('/','_',$newestpic[6]['posts_thumb'])); ?>"  alt="<?php echo $newestpic[6]['posts_title']?>" title="<?php echo $newestpic[6]['posts_title']?>"/><div class="dj"><p>[图集]<?php echo $newestpic[6]['posts_title']?></p><p>点击:<?php echo $newestpic[6]['posts_hit'];?></p></div></a></div>
                  <div class="show showBot"><a style="display:block;width:100%;height:100%;" href="<?php echo site_url('pictures/'.$newestpic[7]['posts_id']);?>"><img src="<?php echo site_url('thumb/'.'2/'. str_replace('/','_',$newestpic[7]['posts_thumb'])); ?>"  alt="<?php echo $newestpic[7]['posts_title']?>" title="<?php echo $newestpic[7]['posts_title']?>"/><div class="dj"><p>[图集]<?php echo $newestpic[7]['posts_title']?></p><p>点击:<?php echo $newestpic[7]['posts_hit'];?></p></div></a></div>
                  <a style="color:#bdbdbd; float:right;" href="http://pic.ecjtu.net/index.php/list" style="float: right; margin: 5px 0 0 0;">更多&gt;&gt;</a>
             </div>
          </div>
  <script type="text/javascript" src="js/ynode.js"></script>         
    </div>
</div>
 <?php include 'footer.php'; ?>
