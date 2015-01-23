    <?php include('header.php'); ?>

    <center><a class="image" href=""><img src="img/webinar_full.png"></a></center>
   
    <div class="row" style="margin-top:25px;">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
            <p style="font-size:21px; text-align:center;">Статьи</p>
            <a class="image" href="#"><img src="img/mipt_statya_main.png" style="border-radius:15px;"></a>
            <p style="margin-top:7px; margin-bottom:5px; text-align:center;">
                <span style="font-size:17px;">«Система Физтеха»</span><br>
                Все что вы хотели знать о<br>
                лучшем техническом вузе страны.
            </p>
            <p style="text-align:center;"><a href="article.php">Читать статью</a></p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
            <p style="font-size:21px; text-align:center;">Видеолекции</p>
            <a class="image" href="#"><img src="img/phys1_video_main.png" style="border-radius:15px;"></a>
            <p style="margin-top:7px; margin-bottom:5px; text-align:center;">
                <span style="font-size:17px;">Молекулярно-кинетическая теория</span><br>
                Теория для подготовки к ЕГЭ<br>
                Длительность: 56 минут
            </p>
            <p style="text-align:center;"><a href="">Смотреть видео</a></p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
            <p style="font-size:21px; text-align:center;">Отзывы</p>
            <a class="image" href="#"><img src="img/menzorova_otz_main.png" style="border-radius:15px;"></a>
            <p style="margin-top:7px; margin-bottom:5px; text-align:center;">
                <span style="font-size:17px;">Ксения Мензорова</span><br>
                Баллы ЕГЭ: 96, 95, 98<br>
                Поступила в МФТИ
            </p>
            <p style="text-align:center;"><a href="#">Читать отзыв</a></p>
        </div>
    </div>

    <div style="margin-top:25px; border:2px solid #08c; border-radius:15px; text-align:center; padding-bottom:14px;">
        <i class="fa fa-envelope" style="position:relative; top:-20px; padding:0 12px; color:#08c; background-color:#fff; font-size:36px;"></i>
        <p style="margin-top:-12px;">Оставьте заявку и сделайте первый шаг к успешной сдаче ЕГЭ:</p>
        <form class="form-inline" style="margin-bottom:10px;">
            <input class="form-control" type="text" id="r-name1" name="r-name1" placeholder="Ваше имя" />
            <input style="margin-left:10px;" class="form-control"class="form-control" type="text" id="r-mail1" name="r-mail1" placeholder="E-mail" />
            <input style="margin-left:10px;" class="form-control"class="form-control" type="text" id="r-tel1" name="r-tel1" placeholder="+7-123-4567890" />
            <a style="margin-left:10px;" onclick="$('#r-txt1').text('Спасибо!'); $.post('r.php', { name : $('#r-name1').val(), mail : $('#r-mail1').val(), tel : $('#r-tel1').val() });" class="bttn">Подписаться на рассылку</a>
            <span id="r-txt1" class="text-error" style="margin-left:5px;"></span>
        </form>
    </div>

    <center>    
        <div id="vk_groups" style="margin-top:30px; margin-bottom:30px;"></div>
        <script type="text/javascript">
            VK.Widgets.Group("vk_groups", {mode: 0, width: "940", height: "255", color1: 'FFFFFF', color2: '2B587A', color3: '787878'}, 47913943);
        </script>
    </center>

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

<!-- Yandex.Metrika informer -->
<a href="https://metrika.yandex.ru/stat/?id=27801762&amp;from=informer"
target="_blank" rel="nofollow"><img src="//bs.yandex.ru/informer/27801762/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"
style="width:88px; height:31px; border:0;" alt="яндекс.ћетрика" title="яндекс.ћетрика: данные за сегодн€ (просмотры, визиты и уникальные посетители)" onclick="try{Ya.Metrika.informer({i:this,id:27801762,lang:'ru'});return false}catch(e){}"/></a>
<!-- /Yandex.Metrika informer -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
            try {
                        w.yaCounter27801762 = new Ya.Metrika({id:27801762,
                                            webvisor:true,
                                                                clickmap:true,
                                                                                    trackLinks:true,
                                                                                                        accurateTrackBounce:true});
                                                                                                                } catch(e) { }
                                                                                                                    });
                                                                                                                    
                                                                                                                        var n = d.getElementsByTagName("script")[0],
                                                                                                                                s = d.createElement("script"),
                                                                                                                                        f = function () { n.parentNode.insertBefore(s, n); };
                                                                                                                                            s.type = "text/javascript";
                                                                                                                                                s.async = true;
                                                                                                                                                    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";
                                                                                                                                                    
                                                                                                                                                        if (w.opera == "[object Opera]") {
                                                                                                                                                                d.addEventListener("DOMContentLoaded", f, false);
                                                                                                                                                                    } else { f(); }
                                                                                                                                                                    })(document, window, "yandex_metrika_callbacks");
                                                                                                                                                                    </script>
                                                                                                                                                                    <noscript><div><img src="//mc.yandex.ru/watch/27801762" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
                                                                                                                                                                    <!-- /Yandex.Metrika counter -->

</body>
</html>
