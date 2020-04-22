<?php
get_header();
 ?>

<main id="reception_time kobetsu">
  <div id="header_photo">
    <img src="<?php echo get_template_directory_uri() ?>/img/kobetsu_header.jpg" alt="院内風景">
  </div>

  <div class="wrap">
    <div class="category_title">
      <h1 class="category_txt midashi01">診療時間・アクセス</h1>
      <!-- <p class="small_txt">Reception time</p> -->
    </div>

    <div class="reception">
      <p>
        ※年中無休で診療しています。緊急での診察も対応しています。
      </p>
      <div class="pc">
        <table class="reception_graph margin-top">
          <tbody>
            <tr>
              <th></th>
              <th class="txt_bold">月</th>
              <th class="txt_bold">火</th>
              <th class="txt_bold">水</th>
              <th class="txt_bold">木</th>
              <th class="txt_bold">金</th>
              <th class="txt_bold saturday">土</th>
              <th class="txt_bold holiday">日</th>
              <th class="txt_bold holiday">祝</th>
            </tr>
            <tr>
              <th>9:00〜13:00</th>
              <td>●</td>
              <td>●</td>
              <td>●</td>
              <td>●</td>
              <td>●</td>
              <td class="saturday">●</td>
              <td class="holiday">●</td>
              <td class="holiday">●</td>
            </tr>
            <tr>
              <th>15:00〜20:00</th>
              <td>●</td>
              <td>●</td>
              <td>●</td>
              <td>●</td>
              <td>●</td>
              <td class="saturday">●</td>
              <td class="holiday">●</td>
              <td class="holiday">●</td>
            </tr>
            <tr>
              <td class="colspan_txt" colspan="9">休診日:無し(年中無休)休日も診療　※土曜・日曜・祝祭日の午後の診療時間<span class="saturday">土曜</span>14:30~17:30<span class="holiday">日祝</span>14:00~16:00</td>
            </tr>
          </tbody>
        </table>
      </div><!-- pc -->

      <div class="sp">
        <table class="reception_graph margin-top">
          <tbody>
            <tr>
              <th></th>
              <th class="txt_bold">月</th>
              <th class="txt_bold">火</th>
              <th class="txt_bold">水</th>
              <th class="txt_bold">木</th>
              <th class="txt_bold">金</th>
              <th class="txt_bold saturday">土</th>
              <th class="txt_bold holiday">日</th>
              <th class="txt_bold holiday">祝</th>
            </tr>
            <tr>
              <th>9:00〜13:00</th>
              <td>●</td>
              <td>●</td>
              <td>●</td>
              <td>●</td>
              <td>●</td>
              <td class="saturday">●</td>
              <td class="holiday">●</td>
              <td class="holiday">●</td>
            </tr>
            <tr>
              <th>15:00〜20:00</th>
              <td>●</td>
              <td>●</td>
              <td>●</td>
              <td>●</td>
              <td>●</td>
              <td class="saturday">●</td>
              <td class="holiday">●</td>
              <td class="holiday">●</td>
            </tr>
            <tr>
              <td class="colspan_txt" colspan="9">
                休診日:無し(年中無休)休日も診療<br>
                ※土曜・日曜・祝祭日の午後の診療時間<br>
                <span class="saturday">土曜</span>14:30~17:30<br>
                <span class="holiday">日祝</span>14:00~16:00
              </td>
            </tr>
          </tbody>
        </table>
      </div><!-- sp -->
    </div>

  </div><!-- wrap -->

  <div class="background_color">
    <div class="category_title">
      <p class="category_txt">アクセス</p>
    </div>
    <div class="wrap">
      <div class="google_map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6484.195761811937!2d139.446084!3d35.64996!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018e3605a6f85fd%3A0x1c7970f30417feca!2z44CSMjA2LTAwMDIg5p2x5Lqs6YO95aSa5pGp5biC5LiA44OO5a6u77yT5LiB55uu!5e0!3m2!1sja!2sjp!4v1566193116706!5m2!1sja!2sjp" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
  </div>

  <div class="wrap">

    <div class="flex_center padding_top">
      <img class="photo_big pc" src="<?php echo get_template_directory_uri() ?>/img/gaikan_b.jpg" alt="けいびる歯科医院外観風景">
      <img class="photo_big sp" src="<?php echo get_template_directory_uri() ?>/img/gaikan_b_sp.jpg" alt="けいびる歯科医院外観風景">
    </div>

    <div class="flex_between">
      <div class="contact">
        <p class="txt_bold contact_title">お問い合わせ</p>
        <div class="line01">
          <div class="contact_tel">
            <p>TEL</p>
            <p>042-337-4388</p>
          </div>
          <p>〒206-0002 東京都多摩市一ノ宮 3-1-3 桜ヶ丘Kビル 6F</p>
        </div>
      </div>
      <div class="access">
        <p class="txt_bold access_title">アクセス</p>
        <div class="line01">
          <p>電車：京王線 聖蹟桜ヶ丘駅 西口改札より徒歩約1分</p>
          <p>車：専用駐車場【1台】他近隣に有料駐車場有り</p>

        </div>
      </div>
    </div>
    <div class="flex_between padding-bottom">
      <img class="photo_small" src="<?php echo get_template_directory_uri() ?>/img/084.jpg" alt="けいびる歯科医院外観">
      <img class="photo_small" src="<?php echo get_template_directory_uri() ?>/img/photo_middle.jpg" alt="診察室風景">
      <img class="photo_small padding-bottom" src="<?php echo get_template_directory_uri() ?>/img/083.jpg" alt="けいびる歯科医院入り口">
    </div>
  </div>


</main>
<?php
get_footer();
 ?>
