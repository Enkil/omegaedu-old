<?php

function rusdate($format = 'j %MONTH% Y', $d, $offset = 0)
{
    $montharr = array('января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря');
    $dayarr = array('понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота', 'воскресенье');
 
    $d += 3600 * $offset;
 
    $sarr = array('/%MONTH%/i', '/%DAYWEEK%/i');
    $rarr = array( $montharr[date("m", $d) - 1], $dayarr[date("N", $d) - 1] );
 
    $format = preg_replace($sarr, $rarr, $format); 
    return date($format, $d);
}

$activepage='article'; include('../../header.php');

?>

<div class="row">
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2  text-center">
<a href="/base/egenews"><div>
<i class="fa fa-info-circle" style="font-size:100px; line-height:100px;"></i>
<p style="font-size:21px;">Новости ЕГЭ</p>
</div></a>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2  text-center">
<a href="/base/vuz"><div>
<i class="fa fa-building-o" style="font-size:84px; line-height:100px;"></i>
<p style="font-size:21px;">О вузах</p>
</div></a>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2  text-center">
<a href="/base/interview"><div>
<i class="fa fa-comments" style="margin-top:-4px; font-size:110px; line-height:104px;"></i>
<p style="font-size:21px;">Интервью</p>
</div></a>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2  text-center">
<a href="/base/math"><div>
<i class="fa fa-superscript" style="margin-left:6px; margin-top:4px; font-size:114px; line-height:96px;"></i>
<p style="font-size:21px;">Математика</p>
</div></a>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2  text-center">
<a href="/base/phys"><div>
<i class="fa fa-cog" style="font-size:100px; line-height:100px;"></i>
<p style="font-size:21px;">Физика</p>
</div></a>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2  text-center">
<a href="/base/rus"><div>
<i class="fa fa-font" style="font-size:96px; line-height:100px;"></i>
<p style="font-size:21px;">Русский язык</p>
</div></a>
</div>
</div>

<div style="border:2px solid #ccc; border-radius:15px; padding:20px 30px 20px 30px; margin-top:20px;">
<p style="font-size:24px; margin-bottom:20px;"><a class="black" href="/base">База знаний</a> / Все статьи</p>

<?php

include("../../mysql.php");
$db = mysql_connect($mysql_server, $mysql_user, $mysql_pass);
mysql_select_db($mysql_dbname, $db);
mysql_query("SET NAMES utf8");

$r = mysql_query("SELECT MAX(id) FROM article WHERE 1=1");
$col = mysql_result($r, 0);

for($i = 0; $i < $col; $i++)
{
  $r = mysql_query("SELECT * FROM article WHERE id = '".($col-$i)."'");
  $data[$i] = mysql_fetch_array($r);
  $data[$i]['type'] = "article";
}

function cmp($a, $b)
{
  if(strtotime($a['pubdate']) == strtotime($b['pubdate'])) return 0;
  if(strtotime($a['pubdate']) > strtotime($b['pubdate'])) return -1;
  if(strtotime($a['pubdate']) < strtotime($b['pubdate'])) return 1;   
}
usort($data, "cmp");

for($i = 0; $i < $col; $i++)
{
  echo('
<div style="display:inline-block; width:400px; vertical-align:top;"><a href="/base/'.$data[$i]['type'].'/'.$data[$i]['enname'].'"><img src="'.$data[$i]['img'].'" style="width:400px;" /></a></div>
<div style="display:inline-block; width:455px; margin-left:15px;">
<p style="font-size:21px; margin-top:5px;"><a class="black" href="/base/'.$data[$i]['type'].'/'.$data[$i]['enname'].'">'.$data[$i]['name'].'</a></p>
<div style="max-height:120px; overflow:hidden; margin-bottom:10px;">'.$data[$i]['pervtxt'].'</div>
<div style="margin-top:-25px; min-height:25px; position:relative; background: linear-gradient(to bottom, rgba(255,255,255,0.2), rgba(255,255,255,1));"></div>
<p><a href="/base/'.$data[$i]['type'].'/'.$data[$i]['enname'].'">');if($data[$i]['type']=="article")echo('Читать статью..');if($data[$i]['type']=="video")echo('Смотреть видео..');echo('</a></p>
<p style="color:#777; font-size:14px; margin-bottom:0px;"><i style="font-size:15px;" class="fa fa-eye"></i> <span id="views'.$data[$i]['id'].'_'.$data[$i]['type'].'">'.$data[$i]['views'].'</span><br>'.rusdate('j %MONTH% Y', strtotime($data[$i]['pubdate'])).'</p>
</div>
');
  if($data[$i]['type']=="video") echo('
<script>
      var videoId = "'.$data[$i]['url'].'";

      var jsonUrl = "http://gdata.youtube.com/feeds/api/videos/" + videoId + "?v=2&alt=json";
      $.getJSON(jsonUrl, function (videoData) {
        var videoJson = JSON.stringify(videoData),
          vidJson = JSON.parse(videoJson),
          views = vidJson.entry.yt$statistics.viewCount;
        $("#views'.$data[$i]['id'].'_video").html(views);
      });
</script>
');
  if($i+1<$col) echo('<hr style="border-top:1px solid #ccc;">');
}
?>

<hr style="margin:20px -30px 0 -30px; border-top:2px solid #ccc;">

<div style="text-align:center; margin-top:15px;">
<p style="margin-bottom:10px;">Хотите узнать больше? Приходите к нам <a href="/courses">учиться</a>.</p>
<style>
.pluso-wrap a:hover {border-bottom:none;}
.pluso-more {display:none !important;}
</style>
<script type="text/javascript">(function() {
  if (window.pluso)if (typeof window.pluso.start == "function") return;
  if (window.ifpluso==undefined) { window.ifpluso = 1;
    var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
    s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
    s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
    var h=d[g]('body')[0];
    h.appendChild(s);
  }})();</script>
<div class="pluso" data-background="transparent" data-options="medium,square,line,horizontal,counter,theme=04" data-services="vkontakte,odnoklassniki,facebook,twitter" data-user="2045717350"></div>
</div>

</div>

<?php include('../../footer.php'); ?>
