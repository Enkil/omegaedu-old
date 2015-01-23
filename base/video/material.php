<?php

if(!isset($vid)) $vid = 1;

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

include("../../../mysql.php");
$db = mysql_connect($mysql_server, $mysql_user, $mysql_pass);
mysql_select_db($mysql_dbname, $db);
mysql_query("SET NAMES utf8");

$r = mysql_query("SELECT * FROM video WHERE id = '".$vid."'");
$video = mysql_fetch_array($r);

$activepage='video'; include('../../../header.php');

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
<p style="font-size:24px; margin-bottom:5px;"><? echo($video['name']); ?> <span style="font-size:18px; color:#bbb;">(<? echo($video['duration']); ?>)</span></p>

<p style="color:#777; font-size:14px;"><i style="font-size:15px;" class="fa fa-eye"></i> <span id="views"></span><br><? echo(rusdate('j %MONTH% Y', strtotime($video['pubdate']))); ?></p>

<div style="margin-bottom:10px;" id="player"></div>
<script>
      var videoId = '<? echo($video['url']); ?>';      

      var jsonUrl = 'http://gdata.youtube.com/feeds/api/videos/' + videoId + '?v=2&alt=json';
      $.getJSON(jsonUrl, function (videoData) {
        var videoJson = JSON.stringify(videoData),
          vidJson = JSON.parse(videoJson),
          views = vidJson.entry.yt$statistics.viewCount;
        $('#views').html(views);
      });

      var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          height: '493',
          width: '876',
          videoId: videoId,
          playerVars: {'theme':'light', 'showinfo':'0'},
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
      }

      // 4. The API will call this function when the video player is ready.
      function onPlayerReady(event) {
        player.setPlaybackQuality('hd720');

        //event.target.playVideo();
      }

      // 5. The API calls this function when the player's state changes.
      //    The function indicates that when playing a video (state=1),
      //    the player should play for six seconds and then stop.
      var done = false;
      function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
          //setTimeout(stopVideo, 60);
          done = true;
        }
      }
      function stopVideo() {
        player.stopVideo();
      }
</script>

<? echo($video['txt']); ?>

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

<hr style="margin:20px -30px 0 -30px; border-top:2px solid #ccc;">

<div style="margin-top:20px;" id="vk_comments"></div>
<script type="text/javascript">
VK.Widgets.Comments("vk_comments", {limit: 5, width: "876", attach: "*"}, "video<? echo($vid); ?>");
</script>

</div>

<?php include('../../../footer.php'); ?>
