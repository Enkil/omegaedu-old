<?php $activepage='video'; include('header.php'); ?>
<a href="#"><img src="img/webinar_full.png"></a>
<hr style="margin-top:0px;">

<div class="row">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center">
<a href="#"><div>
<i class="fa fa-play-circle-o" style="font-size:100px; line-height:100px;"></i>
<p style="font-size:21px;">Все видео</p>
</div></a>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center">
<a href="#"><div>
<i class="fa fa-superscript" style="margin-left:6px; margin-top:4px; font-size:114px; line-height:96px;"></i>
<p style="font-size:21px;">Математика</p>
</div></a>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center">
<a href="#"><div>
<i class="fa fa-cog" style="font-size:100px; line-height:100px;"></i>
<p style="font-size:21px;">Физика</p>
</div></a>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center">
<a href="#"><div>
<i class="fa fa-font" style="font-size:96px; line-height:100px;"></i>
<p style="font-size:21px;">Русский язык</p>
</div></a>
</div>
</div>

<div style="border:2px solid #ccc; border-radius:15px; padding:20px 30px 20px 30px; margin-top:20px;">
<p style="font-size:24px; margin-bottom:5px;">Молекулярно-кинетическая теория <span style="font-size:18px; color:#bbb;">(56:16)</span></p>

<p style="color:#777; font-size:14px;"><i style="font-size:15px;" class="fa fa-eye"></i> <span id="views">0</span><br>2 августа 2013</p>

<div style="margin-bottom:10px;" id="player"></div>
<!-- <iframe width="876" height="493" src="//www.youtube.com/embed/TjUKW65hMUg?rel=0&modestbranding=1&showinfo=0&theme=light" frameborder="0" allowfullscreen></iframe> -->

<script>
      var videoId = 'TjUKW65hMUg';      

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

        var jsonUrl = 'http://gdata.youtube.com/feeds/api/videos/' + videoId + '?v=2&alt=json';
        $.getJSON(jsonUrl, function (videoData) {
          var videoJson = JSON.stringify(videoData),
            vidJson = JSON.parse(videoJson),
            views = vidJson.entry.yt$statistics.viewCount;
          $('#views').text(views);
        });
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

<p>
Занятие проводит Пенкин Михаил Александрович, преподаватель физики МФТИ с многолетним стажем. Около 7 лет занимается олимпиадным движением в сфере довузовской подготовки школьников. Выпустил более 300 учеников, большая часть которых поступила в МФТИ и МГУ, а также в другие ведущие технические вузы страны. Его ученики ежегодно становятся победителями и призерами самых престижных олимпиад по физике: олимпиада «Физтех», олимпиада «Ломоносов» и др.
</p>
<p>
Темы:<br>
1. Положения молекулярно-кинетической теории и их доказательства.<br>
2. Явления диффузии и броуновского движения.<br>
3. Масса и размер молекул.<br>
4. Основные характеристики вещества.<br>
5. Модель идеального газа.<br>
6. Давление идеального газа.<br>
7. Абсолютная шкала температур.<br>
8. Основное уравнение молекулярно-кинетической теории.<br>
9. Уравнение Менделеева-Клапейрона.<br>
10. Плотность идеального газа.<br>
11. Средняя квадратичная скорость.<br>
12. Процессы, проводимые с газом.<br>
13. Изобарный процесс. Закон Гей-Люссака.<br>
14. Изохорный процесс. Закон Шарля.<br>
15. Изотермический процесс. Закон Бойля-Мариотта.<br>
16. Смеси идеальных газов. Закон Дальтона.<br>
17. Несколько примеров решения задач. 
</p>

<hr style="margin:20px -30px 0 -30px; border-top:2px solid #ccc;">

<div style="text-align:center; margin-top:15px;">
<p style="margin-bottom:10px;">Хотите узнать больше? Приходите к нам <a href="#">учиться</a>.</p>
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
VK.Widgets.Comments("vk_comments", {limit: 5, width: "876", attach: "*"});
</script>

</div>

<div style="margin-top:30px; border:2px solid #08c; border-radius:15px; text-align:center; padding-bottom:14px;">
<i class="fa fa-envelope" style="position:relative; top:-20px; padding:0 12px; color:#08c; background-color:#fff; font-size:36px;"></i>
<p style="margin-top:-12px;">Оставьте заявку и сделайте первый шаг к успешной сдачи ЕГЭ:</p>
<form class="form-inline" style="margin-bottom:10px;">
<input class="form-control" type="text" id="r-name1" name="r-name1" placeholder="Ваше имя" />
<input style="margin-left:10px;" class="form-control" type="text" id="r-mail1" name="r-mail1" placeholder="E-mail" />
<a style="margin-left:10px;" onclick="$('#r-txt1').text('Вы подписаны!'); $.post('r.php', { name : $('#r-name1').val(), mail : $('#r-mail1').val() });" class="bttn">Подписаться на рассылку</a>
<span id="r-txt1" class="text-error" style="margin-left:5px;"></span>
</form>
</div>

<div id="vk_groups" style="margin-top:30px; margin-bottom:30px;"></div>
<script type="text/javascript">
VK.Widgets.Group("vk_groups", {mode: 0, width: "940", height: "255", color1: 'FFFFFF', color2: '2B587A', color3: '787878'}, 47913943);
</script>

<hr>

<div class="row" style="margin-top:20px; margin-bottom:32px;">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
<img src="img/logo_bottom.png" style="width:68px; margin-left:15px; margin-top:3px; vertical-align:top;" />
<p style="display:inline-block; font-weight:normal; font-size:14px; line-height:18px; margin-top:14px; margin-bottom:0px; margin-left:15px; color:#555;">Развитие<br>через<br>обучение</p>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:right;">
<p style="margin-top:13px; margin-bottom:0px; margin-right:50px;">«Сколько б ты ни жил, всю жизнь следует учиться.»</p>
<p style="color:#777; margin-right:50px;">— Сенека</p>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center">
<p style="margin-top:16px; margin-bottom:0px; font-size:21px;">8 (495) 134 45 17</p>
<p style="margin-top:12px; margin-bottom:0px; font-size:15px;">omegaedu@gmail.com</p>
</div>
</div>

<div class="clear"></div>

</div>


</body>
</html>
