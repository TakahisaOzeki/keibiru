<div class="pc">
  <footer>
    <!-- <div class="margin-top"> -->
    <img class="footer_logo" src="<?php echo get_template_directory_uri() ?>/img/footer_logo.png" alt="けいびる歯科医院ロゴ">
    <div class="pc">
      <div class="tel">
        <img class="tel_icon" src="<?php echo get_template_directory_uri() ?>/img/footer_tel_icon.png" alt="TELアイコン">
        <p>042-337-4388</p>
      </div>
      <div class="tel_time">
        <p>電話受付 平日 9:00〜20:00</p>
        <p>土 9:00〜17:00　日・祝 9:00〜16:00</p>
      </div>
      <div class="access_info">
        <p>〒206-0002 東京都多摩市一ノ宮 3-1-3 桜ヶ丘Kビル 6F</p>
        <p>電車：京王線 聖蹟桜ヶ丘駅 西口改札より徒歩約1分</p>
        <p>車：専用駐車場【1台】他近隣に有料駐車場有り　</p>
      </div>
      <!-- </div> -->

      <div class="sp">
        <div class="access_info">
          <p>
            〒206-0002 東京都多摩市一ノ宮3-1-3<br>
            桜ヶ丘Kビル6F
          </p>
          <p>
            京王線 聖蹟桜ヶ丘駅 西口改札より<br>
            徒歩約1分
          </p>
          <p>
            車:専用駐車場【1台】<br>
            他近隣に有料駐車場有り<br>

          </p>
        </div>
      </div>
      <p class="copyright">
        Copyright © 多摩市 聖蹟桜ヶ丘 けいびる歯科医院 All Rights Reserved.
      </p>
    </div>
  </footer>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/e9b228cd3c.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/hamburger/draws_sebon.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/slick/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/main.js"></script>
<script>
  $(function(){
  var showTop = 100;/*100と定義*/

  $('body').append('<a href="javascript:void(0);" id="fixedTop"><div></div></a>'); /*bodyに加える*//*href="javascript:void(0);"→ページ遷移を無効にする。*/
  var fixedTop = $('#fixedTop'); /*定義する*/
    $(window).on('load scroll resize',function(){ /*ロード、スクロール、リサイズした時*/
        if($(window).scrollTop() >= showTop){ /*移動量が100以上になったら*/
            fixedTop.fadeIn('normal'); /*出現*/
        } else if($(window).scrollTop() < showTop){
            fixedTop.fadeOut('normal'); /*消える*/
        }
      });
    fixedTop.on('click',function(){ /*クリックしたら*/
      $('html,body').animate({scrollTop:'0'},500); /* http://semooh.jp/jquery/api/effects/animate/params,+[duration],+[easing],+[callback]/ */
    });
  });
</script>
<!-- <script type="text/javascript" src="https://hp-tools-home.com/gap/?i=bx6m&jq=off"></script> けいびるのアクセス解析コード-->


</body>
</html>
