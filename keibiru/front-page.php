<?php

$post = get_page_by_title("お知らせのタイトル",OBJECT,'post');
$news = $post->post_content;

$post = get_page_by_title("お知らせの内容",OBJECT,'post');
$news_naiyou = $post->post_content;

// お知らせ取得
$arg = array(
             'posts_per_page' => 3, // 表示する件数
             'orderby' => 'date', // 日付でソート
             'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
             'category_name' => 'お知らせ' // 表示したいカテゴリーのスラッグを指定
         );
  $posts = get_posts( $arg );

get_header();
 ?>

<main id="top">
  <div class="fade">
    <!-- <img src="<?php echo get_template_directory_uri() ?>/img/top_fade01.jpg" alt="けいびる医院風景"> -->
    <!-- <div class="catch">
      <p class="name">多摩市|けいびる歯科医院</p>
      <p>けいびる歯科医院では国内トップクラスの滅菌設備を整えています。 また、徹底してディスポーザブル - 使い捨てが最大の衛生管理しています。</p>
    </div> -->
    <div class="pc">
        <ul class="single-item">
          <li><img src="<?php echo get_template_directory_uri() ?>/img/top_fade01.jpg" alt="けいびる歯科医院治療風景"></li>
          <li><img src="<?php echo get_template_directory_uri() ?>/img/top_fade02.jpg" alt="けいびる歯科医院治療風景"></li>
        </ul>
      </div>
      <div class="sp">
        <ul class="single-item">
          <ul class="single-item">
            <li><img src="<?php echo get_template_directory_uri() ?>/img/top_fade01_sp.jpg" alt="けいびる歯科医院治療風景"></li>
            <li><img src="<?php echo get_template_directory_uri() ?>/img/top_fade02_sp.jpg" alt="けいびる歯科医院治療風景"></li>
          </ul>
        </ul>
      </div>
  </div>
  <div class="wrap">
    <div class="title">
      <h1 class="midashi01">けいびる歯科ってどんな歯医者？</h1>
    </div>
    <p>
      けいびる歯科医院は、地域医療へ貢献できるように努めています。当院は、高度な技術提供と年中無休診療、院内環境を追求し、多摩市でもっとも通いやすい歯科医院を目指しています。子どもが小さいから通えない。休みが日曜日だから通えない。車いすだから通えない。今までこのような理由で歯医者さんへなかなか通えなかった方でも、けいびる歯科医院なら、安心して通うことができます。患者様のお口の状態とお気持ちを1番に考え、一人ひとりにあった治療法をご提案しています。お口の中や、歯のことでお悩みがあればお気軽にご相談ください。いつでもお待ちしております。
    </p>

    <div class="check_cover">
      <div class="check_list">
        <ul>
          <li>年中無休（お正月も休まず診療）</li>
          <li style="line-height: 1.4em;">平日9:00～20:00まで（土曜日は17:30まで、日曜日・祝日は16:00まで）</li>
          <li>急患対応可能	</li>
          <li style="line-height: 1.4em;">なるべく抜かない・削らない・痛くない治療</li>
        </ul>
      </div>
      <div class="check_list">
        <ul>
          <li style="line-height: 1.4em;">保険診療中心（なるべく保険治療で治療できるようにご提案）</li>
          <li>駐車場あり</li>
          <li>京王線『聖蹟桜ヶ丘駅』徒歩１分</li>
          <li>バリアフリー対応可能</li>
        </ul>
      </div>
    </div>


    <div class="flex_between">
      <img class="photo_middle" src="<?php echo get_template_directory_uri() ?>/img/074.jpg" alt="診察室">
      <img class="photo_middle" src="<?php echo get_template_directory_uri() ?>/img/094.jpg" alt="受付・待合室">
    </div>
  </div><!-- wrap -->

  <div class="background_color">
  <div class="category_title">
    <p class="category_txt midashi01">診療の案内</p>
  </div>
    <div class="wrap">
      <p class="middle_txt">診療日</p>
      <div class="pc">
        <table class="reception_graph">
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
              <th>09:00~13:00</th>
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
              <th>15:00~20:00</th>
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
        <table class="reception_graph">
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
              <th>09:00~13:00</th>
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
              <th>15:00~20:00</th>
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



      <div class="flex_center">
        <img class="photo_big" src="<?php echo get_template_directory_uri() ?>/img/gaikan_b.jpg" alt="けいびる歯科医院外観風景">
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
    </div><!-- wrap -->
  </div><!-- background_color -->

  <div class="wrap">
    <div class="category_title">
      <p class="category_txt midashi01">お知らせ</p>
      <!-- <p class="small_txt">News from a hospital</p> -->
    </div>
    <div class="pc">
      <div class="news">
        <?php if( $posts ): ?>
          <?php
          foreach ( $posts as $post ) :
            setup_postdata( $post ); ?>

            <div class="line02">
              <div class="news_title">
                <span>
                  <?php the_time( 'Y年m月d日' ); ?>
                </span>
                <?php the_title(); ?>
              </div>
              <?php the_content(); ?>
            </div>

          <?php endforeach; ?>
          <?php
        endif;
        wp_reset_postdata();
        ?>
      </div>
    </div>
    <div class="sp">
      <div class="news">
        <?php if( $posts ): ?>
          <?php
          foreach ( $posts as $post ) :
            setup_postdata( $post ); ?>

            <div class="line02">
              <div class="news_title">
                <span>
                  <?php the_time( 'Y年m月d日' ); ?>
                </span><br>
                <?php the_title(); ?>
              </div>
              <?php the_content(); ?>
            </div>

          <?php endforeach; ?>
          <?php
        endif;
        wp_reset_postdata();
        ?>
      </div>
    </div>
    <!-- <div class="news">
      <div class="line02">
        <div class="news_title">
          <?=$news?>
        </div>
        <?=$news_naiyou?>
      </div>
    </div> -->
  </div><!-- wrap -->


  <div class="background_color">
    <div class="category_title">
      <p class="category_txt midashi01">診療科目</p>
    </div>
    <div class="wrap">
      <div class="flex_between">

        <div class="medical_courses">
          <div class="">
            <p class="middle_txt txt_bold">虫歯治療</p>
            <p class="course_naiyou">「虫歯治療」とは、予防歯科を始め、歯周病の治療や虫歯、あるいは外力などによってダメーシを受けた歯牙 の修復を主とする歯科診療です。</p>

            <div class="flex_between cost">
              <div class="insurance">
                <p>保険適用</p>
              </div>
              <div class="own_cost">
                <p>自費診療</p>
              </div>
            </div>
          </div>

        <div class="flex_end">
          <a href="<?php echo home_url('/general_dentistry/') ?>" class="more_btn">
            <p>詳細を見る</p>
          </a>
        </div>
        </div><!-- medical_courses -->

        <div class="medical_courses">
          <p class="middle_txt txt_bold">歯周病</p>
          <p class="course_naiyou">「虫歯治療」とは、予防歯科を始め、歯周病の治療や虫歯、あるいは外力などによってダメーシを受けた歯牙の修復を主とする歯科診療です。</p>

        <div class="flex_between cost">
          <div class="insurance">
            <p>保険適用</p>
          </div>
          <div class="own_cost">
            <p>自費診療</p>
          </div>
        </div>

        <div class="flex_end">
          <a href="<?php echo home_url('/perio/') ?>" class="more_btn">
            <p>詳細を見る</p>
          </a>
        </div>
        </div><!-- medical_courses -->

        <div class="medical_courses">
          <p class="middle_txt txt_bold">小児歯科</p>
          <p class="course_naiyou">「虫歯治療」とは、予防歯科を始め、歯周病の治療や虫歯、あるいは外力などによってダメーシを受けた歯牙の修復を主とする歯科診療です。</p>

        <div class="flex_between cost">
          <div class="insurance">
            <p>保険適用</p>
          </div>
          <div class="space">
            <p class="kara_cost"></p>
          </div>
        </div>

        <div class="flex_end">
          <a href="<?php echo home_url('/pediatric_dentistry/') ?>" class="more_btn">
            <p>詳細を見る</p>
          </a>
        </div>
        </div><!-- medical_courses -->

        <!-- <div class="medical_courses">
          <p class="middle_txt txt_bold">インプラント</p>
          <p class="course_naiyou">「インプラント」とは、虫歯や歯肉の病気、あるいは怪我などのアクシデントによって、失われてしまった天然の歯を補うための歯科治療のひとつです。</p>

          <div class="flex_between cost">
            <div class="space">
              <p class="kara_cost"></p>
            </div>
            <div class="own_cost">
              <p>自費診療</p>
            </div>
          </div>

          <a href="<?php echo home_url('/shinryou/') ?>" class="more_btn">
            <p>詳細を見る</p>
          </a>
        </div> -->
        <!-- medical_courses -->

      </div><!-- flex_between -->

      <div class="flex_between">
        <div class="medical_courses">
          <p class="middle_txt txt_bold">インプラント</p>
          <p class="course_naiyou">「インプラント」とは、虫歯や歯肉の病気、あるいは怪我などのアクシデントによって、失われてしまった天然の歯を補うための歯科治療のひとつです。</p>

        <div class="flex_between cost">
          <div class="space">
            <p class="kara_cost"></p>
          </div>
          <div class="own_cost">
            <p>自費診療</p>
          </div>
        </div>

        <div class="flex_end">
        <a href="<?php echo home_url('/implant/') ?>" class="more_btn">
          <p>詳細を見る</p>
        </a>
        </div>
        </div><!-- medical_courses -->

        <div class="medical_courses">
          <p class="middle_txt txt_bold">審美歯科</p>
          <p class="course_naiyou">「審美歯科」とは、「美しさ」と「機能」に焦点を当てた、ホワイトニングやセラミック治療など、総合的な歯科医療のことです。</p>

        <div class="flex_between cost">
          <div class="space">
            <p class="kara_cost"></p>
          </div>
          <div class="own_cost">
            <p>自費診療</p>
          </div>
        </div>

        <div class="flex_end">
          <a href="<?php echo home_url('/shinryou/') ?>" class="more_btn">
            <p>詳細を見る</p>
          </a>
        </div>
        </div><!-- medical_courses -->

        <div class="medical_courses">
          <p class="middle_txt txt_bold">予防歯科</p>
          <p class="course_naiyou">「予防歯科」とは、なるべく虫歯や歯周病、歯槽膿漏などのお口のトラブルなどにかかる前に予防する歯科診療のことです。</p>

        <div class="flex_between cost">
          <div class="insurance">
            <p>保険適用</p>
          </div>
          <div class="space">
            <p class="kara_cost"></p>
          </div>
        </div>

        <div class="flex_end">
          <a href="<?php echo home_url('/preventivedentistry/') ?>" class="more_btn">
            <p>詳細を見る</p>
          </a>
        </div>
        </div><!-- medical_courses -->

        <!-- <div class="medical_courses">
          <p class="middle_txt txt_bold">口腔外科</p>
          <p class="course_naiyou">「口腔外科」とは口腔(こうくう:口のなか)、顎(がく:あご)、顔面ならびにその隣接組織に現れる先天性および後天性の疾患を扱う歯科診療です。</p>

          <div class="flex_between cost">
            <div class="space">
              <p class="kara_cost"></p>
            </div>
            <div class="insurance">
              <p>保険適用</p>
            </div>
          </div>

          <a href="<?php echo home_url('/shinryou/') ?>" class="more_btn">
            <p>詳細を見る</p>
          </a>
        </div> -->
        <!-- medical_courses -->

      </div><!-- flex_between -->

      <div class="flex_between">
        <div class="medical_courses">
          <p class="middle_txt txt_bold">矯正</p>
          <p class="course_naiyou">矯正のテキスト矯正のテキスト矯正のテキスト矯正のテキスト矯正のテキスト</p>

        <div class="flex_between cost">
          <div class="own_cost">
            <p>自費診療</p>
          </div>
          <div class="space">
            <p class="kara_cost"></p>
          </div>
        </div>

        <a href="<?php echo home_url('/ortho/') ?>" class="more_btn">
          <p>詳細を見る</p>
        </a>
        </div><!-- medical_courses -->

        <div class="medical_courses">
          <p class="middle_txt txt_bold">口腔外科</p>
          <p class="course_naiyou">「口腔外科」とは口腔(こうくう:口のなか)、顎(がく:あご)、顔面ならびにその隣接組織に現れる先天性および後天性の疾患を扱う歯科診療です。</p>

        <div class="flex_between cost">
          <div class="insurance">
            <p>保険適用</p>
          </div>
          <div class="space">
            <p class="kara_cost"></p>
          </div>
        </div>

        <a href="<?php echo home_url('/Oral_surgery/') ?>" class="more_btn">
          <p>詳細を見る</p>
        </a>
        </div><!-- medical_courses -->

        <div class="medical_courses pc" style="background-color:#F2F9F9;">

        </div>



      </div><!-- flex_between -->

    </div><!-- wrap -->
  </div><!-- background_color -->

  <div class="wrap">
    <div class="pc">
      <div class="title">
        <p class="midashi01">けいびる歯科医院が選ばれる理由</p>
      </div>
    </div>
    <div class="sp">
      <div class="title">
        <p class="midashi01">けいびる歯科医院<br>が選ばれる理由</p>
      </div>
    </div>
    <div class="point">
      <div class="pc">
        <div class="point_title">
          <img src="<?php echo get_template_directory_uri() ?>/img/point_icon.png" alt="ポイントアイコン">
          <p class="big_txt"><span class="txt_bold">1.</span>高い技術力をほこる医師が診療を担当</p>
        </div>
      </div>
      <div class="sp">
        <div class="point_title">
          <div class="point_icon">
            <img src="<?php echo get_template_directory_uri() ?>/img/point_icon.png" alt="ポイントアイコン">
            <span class="txt_bold point_number">1.</span>
          </div>
          <p class="big_txt">高い技術力をほこる医師が診療を担当</p>
        </div>
      </div>
      <div class="point_naiyou">
        <div class="flex_between">
          <p>
            当院には8名の歯科医師が在籍しており、すべての医師が総合的な治療を高いレベルで行っています。<br>
            歯周病科、口腔外科、矯正科は認定医を取得した医師が在籍していますので、地域歯科医療を包括的に行うことが可能です。基本的に担当医師制となっておりますので、医師が責任をもって最後まで治療を行っていきます。
          </p>
          <img class="photo_small" src="<?php echo get_template_directory_uri() ?>/img/Oral_surgery_002.jpg" alt="治療風景10月">
        </div>
        <p class="margin-top">
          また、日々新しい医学の知識、技術の勉強会を定期的に開いて技術の向上に努めています。インプラントでは他院ではお断りされてしまったケースでも高い技術力・知識があるからこそ、当院でなら行える場合もございますので、ぜひご相談ください！けいびる歯科医院の技術をもとめ、県外から来院されるお客様もいらっしゃいます。
        </p>
      </div>
    </div><!-- point -->

    <div class="point">
      <div class="pc">
        <div class="point_title">
          <img src="<?php echo get_template_directory_uri() ?>/img/point_icon.png" alt="ポイントアイコン">
          <p class="big_txt"><span class="txt_bold">2.</span>痛くない治療、なるべく歯を抜かない治療</p>
        </div>
      </div>
      <div class="sp">
        <div class="point_title">
          <div class="point_icon">
            <img src="<?php echo get_template_directory_uri() ?>/img/point_icon.png" alt="ポイントアイコン">
            <span class="txt_bold point_number">2.</span>
          </div>
          <p class="big_txt">痛くない治療、なるべく歯を抜かない治療</p>
        </div>
      </div>
      <div class="point_naiyou">
        <div class="flex_between">
          <p>
            患者様の視点に立って治療を進めていくことを1番大切にしています！また、お身体とお気持ちに負担をかけないように「なるべく抜かない、削らない、痛くない治療」を心がけています。歯医者を嫌いになる理由で最も多いのが「痛い」「怖い」というものです。けいびる歯科は恐怖心を取り除くために、無痛治療を目指しています。
          </p>
          <img class="photo_small" src="<?php echo get_template_directory_uri() ?>/img/001.jpg" alt="治療風景2">
        </div>
        <p class="margin-top">
          具体的には、麻酔注射の前に表面麻酔薬を2種類使っています。表面をまず麻酔させることで針をさしたときの痛みを感じにくくしています。そして、針も最も細い針を使用して痛みをさらに感じにくくしています。そのため、お子さまや、痛いことが苦手な方でも安心です。
        </p>
      </div>
    </div><!-- point -->

    <div class="point">
      <div class="pc">
        <div class="point_title">
          <img src="<?php echo get_template_directory_uri() ?>/img/point_icon.png" alt="ポイントアイコン">
          <p class="big_txt"><span class="txt_bold">3.</span>丁寧なカウンセリングだから安心</p>
        </div>
      </div>
      <div class="sp">
        <div class="point_title">
          <div class="point_icon">
            <img src="<?php echo get_template_directory_uri() ?>/img/point_icon.png" alt="ポイントアイコン">
            <span class="txt_bold point_number">3.</span>
          </div>
          <p class="big_txt">丁寧なカウンセリングだから安心</p>
        </div>
      </div>
      <div class="point_naiyou">
        <div class="flex_between">
          <p>
            初めて受診される患者様は、長めに時間をとり、患者様の歯の現状を確認・説明させていただいたうえで、今後の治療方針などを患者様のご希望をお聞きしながら、治療を始めていきます。また、日本歯科TC協会が認定する「トリートメントコーディネーター」という資格を持ったスタッフが在籍しており、医師には直接話しづらい相談もできるような体制が整っています。
          </p>
          <img class="photo_small" src="<?php echo get_template_directory_uri() ?>/img/General_dentistry001.jpg" alt="けいびる歯科医院長">
        </div>
        <p class="margin-top">
          トリートメントコーディネーターとは、高度なコミュニケーション能力で患者様へのカウンセリングや治療の提案、時にはお支払いの計画まで立てるという役割を担っています。「治療が怖いけど、どんな治療を行うの…？」「先生に相談したけど、もう一度説明してほしい」など、気になることがありましたらなんでもにご相談ください♪
        </p>
      </div>
    </div><!-- point -->

    <div class="point">
      <div class="pc">
        <div class="point_title">
          <img src="<?php echo get_template_directory_uri() ?>/img/point_icon.png" alt="ポイントアイコン">
          <p class="big_txt"><span class="txt_bold">4.</span>治療の様子が見えるから、治療の不安が少ない</p>
        </div>
      </div>
      <div class="sp">
        <div class="point_title">
          <div class="point_icon">
            <img src="<?php echo get_template_directory_uri() ?>/img/point_icon.png" alt="ポイントアイコン">
            <span class="txt_bold point_number">4.</span>
          </div>
          <p class="big_txt">治療の様子が見えるから、治療の不安が少ない</p>
        </div>
      </div>
      <div class="point_naiyou">
        <div class="flex_between">
          <p>
            「治療中、自分の歯がどうなっているのかわからない」「治療内容がよくわからない」、そんな不安対策も完璧です！自分で見られない、わからないから不安と感じてしまうものです。<br>そこで当院では、治療の不安や不信感が少しでも軽減されるように、治療の見える化に積極的に取り組んでいます！
          </p>
          <img class="photo_small" src="<?php echo get_template_directory_uri() ?>/img/002.jpg" alt="治療風景3">
        </div>
        <p class="margin-top">
          治療の状況をしっかり見せるという点においては、患者様が治療を受ける診療チェアのライトの部分が鏡になっていて、どのように治療されているかその都度、ご自身で確認することができます。また、すべての診療チェアに液晶モニターを完備していますので、ご自身のレントゲン画像を見ながら治療についての説明をお聞きいただけます。もちろん、ご納得いただけるまで丁寧にご説明します。
        </p>
      </div>
    </div><!-- point -->

    <div class="point">
      <div class="pc">
        <div class="point_title">
          <img src="<?php echo get_template_directory_uri() ?>/img/point_icon.png" alt="ポイントアイコン">
          <p class="big_txt"><span class="txt_bold">5.</span>年中無休、京王線聖蹟桜ヶ丘駅から徒歩1分、緊急の診療も対応可能</p>
        </div>
      </div>
      <div class="sp">
        <div class="point_title">
          <div class="point_icon">
            <img src="<?php echo get_template_directory_uri() ?>/img/point_icon.png" alt="ポイントアイコン">
            <span class="txt_bold point_number">5.</span>
          </div>
          <p class="big_txt">年中無休、京王線聖蹟桜ヶ丘駅から徒歩1分、緊急の診療も対応可能</p>
        </div>
      </div>
      <div class="point_naiyou">
        <div class="flex_between">
          <p>
              けいびる歯科は年中無休です。年末年始、祝日も医師が二人ほど交代で診療しています！平日は夜8時までと普段忙しくてなかなか時間がつくれない方でも通いやすい病院づくりを心がけています。また、緊急の対応も可能です。「普段通っている歯医者さんがお休み…」「急に歯が痛くなってきた…」「被せものがとれてしまった…」など、まずはお電話ください！
          </p>
          <img class="photo_small" src="<?php echo get_template_directory_uri() ?>/img/084.jpg" alt="けいびる歯科医院外観">
        </div>
        <p class="margin-top">
        基本的には予約制ですが、できるだけ早く受診できるよう調整します。また、京王線の聖蹟桜ヶ丘駅から徒歩1分と、とっても便利！電車、バス、お車（駐車場1台有）と、どの交通手段でもお越しいただきやすい所にあります。
        </p>
      </div>
    </div><!-- point -->

    <div class="point">
      <div class="pc">
        <div class="point_title">
          <img src="<?php echo get_template_directory_uri() ?>/img/point_icon.png" alt="ポイントアイコン">
          <p class="big_txt"><span class="txt_bold">6.</span>優しい女性スタッフがお子様の診療をサポート</p>
        </div>
      </div>
      <div class="sp">
        <div class="point_title">
          <div class="point_icon">
            <img src="<?php echo get_template_directory_uri() ?>/img/point_icon.png" alt="ポイントアイコン">
            <span class="txt_bold point_number">6.</span>
          </div>
          <p class="big_txt">優しい女性スタッフがお子様の診療をサポート</p>
        </div>
      </div>
      <div class="point_naiyou">
        <div class="flex_between">
          <p>
            けいびる歯科医院には、女性スタッフが25名ほど在籍しており、どの時間に来院されても子育てを経験した女性スタッフがいます。お子さまが治療されるときは、お母さまやお父さまも診療室にお入りいただけます。<br>
            フッ素はバリエーションを多くそろえていて、お子さまからは甘くておいしいと好評です。
          </p>
          <img class="photo_small" src="<?php echo get_template_directory_uri() ?>/img/003.jpg" alt="待合室風景">
        </div>
        <p class="margin-top">
          フッ素を楽しみにして来院されるお子さまも多くいますよ！治療をがんばったお子さまにはごほうびとして、おもちゃを1つプレゼントしています。当院スタッフの子どもたちはこれを楽しみに喜んで来院しています(笑)<br>
          また、お母さまやお父さまの治療のときには、スタッフがお子さまと、楽しく絵本を読んだり一緒におもちゃで遊んだりしながら、治療が終わるまでお待ちします。当院はお子様の来院も多いので、生まれたばかりのお子さまでも安心してお任せください。
        </p>
      </div>
    </div><!-- point -->

    <div class="point">
      <div class="pc">
        <div class="point_title">
          <img src="<?php echo get_template_directory_uri() ?>/img/point_icon.png" alt="ポイントアイコン">
          <p class="big_txt"><span class="txt_bold">7.</span>衛生面への配慮</p>
        </div>
      </div>
      <div class="sp">
        <div class="point_title">
          <div class="point_icon">
            <img src="<?php echo get_template_directory_uri() ?>/img/point_icon.png" alt="ポイントアイコン">
            <span class="txt_bold point_number">7.</span>
          </div>
          <p class="big_txt">衛生面への配慮</p>
        </div>
      </div>
      <div class="point_naiyou">
        <p>
          当院では、日ごろから衛生管理には気をかけ、患者様間での器具の使いまわしをしない治療を徹底し続けています。それに加えて定期的に最新の機材の導入し、滅菌・消毒を行い衛生管理の強化をはかっています。複数台あるクラスSクラスの滅菌器を常時稼働させ、患者様に使用した器具は治療ごとに滅菌処理を行います。
        </p>
        <div class="flex_between">
          <img class="photo_small margin-top" style="width:255px;" src="<?php echo get_template_directory_uri() ?>/img/089.jpg" alt="NSK i care">
          <img class="photo_small margin-top" style="width:255px;" src="<?php echo get_template_directory_uri() ?>/img/090.jpg" alt="MELAquick12">
          <img class="photo_small margin-top" style="width:255px;" src="<?php echo get_template_directory_uri() ?>/img/091.jpg" alt="パナオート21EX">
        </div>
        <p class="margin-top">
        また、材料や器具に使い捨てできるもの（紙コップやエプロンなど）も取り入れながら、患者様に直接触れる器具には細心の注意をはらっています。天井にはメディカルライトエアーという医療用空気浄化装置を複数台設置し、ウイルスなどの感染や、花粉、粉塵、臭いなどから患者様を守るべく、より安心・安全な環境づくりを目指しております。スリッパは毎日診療終了後に消毒を行っています。
        </p>
      </div>
    </div><!-- point -->

    <div class="point">
      <div class="pc">
        <div class="point_title">
          <img src="<?php echo get_template_directory_uri() ?>/img/point_icon.png" alt="ポイントアイコン">
          <p class="big_txt"><span class="txt_bold">8.</span>居心地の良い院内の環境</p>
        </div>
      </div>
      <div class="sp">
        <div class="point_title">
          <div class="point_icon">
            <img src="<?php echo get_template_directory_uri() ?>/img/point_icon.png" alt="ポイントアイコン">
            <span class="txt_bold point_number">8.</span>
          </div>
          <p class="big_txt">居心地の良い院内の環境</p>
        </div>
      </div>
      <div class="point_naiyou">
        <div class="flex_between">
          <p>
              入り口付近は段差がありますが、スロープをご用意していますので、車いすやベビーカーでもそのまま入っていただけます(そのときはお声がけください)。また、そのまま診療室までも入っていただけます！待合室は広く設けており、ゆったりとおくつろぎいただけます。雑誌類が豊富で待ち時間も退屈させません！
          </p>
          <img class="photo_small" src="<?php echo get_template_directory_uri() ?>/img/093.jpg" alt="院内風景">
        </div>
        <p class="margin-top">
          男女ファッション誌、レシピ本、日経ビジネス、釣り・ゴルフなどの趣味の雑誌など多く取りそろえています。お子さまには、おもちゃやミッケ、アンパンマンの本など20冊ほどをご用意しています。うっかり歯磨きをしてくるのを忘れてしまっても大丈夫です！待合室には洗面台がありますので、ご自由にお使いください。お手洗いはエレベーターホールの隣に男女別で完備しています。
        </p>
      </div>
    </div><!-- point -->

    <div class="point">
      <div class="pc">
        <div class="point_title">
          <img src="<?php echo get_template_directory_uri() ?>/img/point_icon.png" alt="ポイントアイコン">
          <p class="big_txt"><span class="txt_bold">9.</span>ていねいな保険診療と良心的価格の自費診療</p>
        </div>
      </div>
      <div class="sp">
        <div class="point_title">
          <div class="point_icon">
            <img src="<?php echo get_template_directory_uri() ?>/img/point_icon.png" alt="ポイントアイコン">
            <span class="txt_bold point_number">9.</span>
          </div>
          <p class="big_txt">ていねいな保険診療と良心的価格の自費診療</p>
        </div>
      </div>
      <div class="point_naiyou">
        <div class="flex_between">
          <p>
              けいびる歯科医院は、高度な治療をなるべく広く患者様に受けていただきたいと思っていますので、良心的な価格で自費診療の治療を提供しています！事前に全ての金額を提示して、金額の面に関しても安心していただけるように取り組んでいます。もちろん、高い技術と質の良い材料はお約束します！
          </p>
          <img class="photo_small" src="<?php echo get_template_directory_uri() ?>/img/gaiyou_003.jpg" alt="受付カウンター風景">
        </div>
        <p class="margin-top">
          場合によっては、患者様のご予約日に合わせて技工士を呼び、色味の確認や、患者様の望む歯の形態など、直接お話しすることも可能です。また、保険診療でも可能な内容に対しては、無理に自費診療にすることはありません。患者様と相談して、保険診療でできることはすべて保険にて対応しています！保険診療においても、被せものや入れ歯に一切手を抜くことはなく、患者様にとって満足していただけるよう常々努めています。
        </p>
      </div>
    </div><!-- point -->

    <div class="point">
      <div class="pc">
        <div class="point_title">
          <img src="<?php echo get_template_directory_uri() ?>/img/point_icon.png" alt="ポイントアイコン">
          <p class="big_txt"><span class="txt_bold">10.</span>こだわりのホームケアアイテム</p>
        </div>
      </div>
      <div class="sp">
        <div class="point_title">
          <div class="point_icon">
            <img src="<?php echo get_template_directory_uri() ?>/img/point_icon.png" alt="ポイントアイコン">
            <span class="txt_bold point_number">10.</span>
          </div>
          <p class="big_txt">こだわりのホームケアアイテム</p>
        </div>
      </div>
      <div class="point_naiyou">
        <div class="flex_between">
          <p>
              受付には、当院の歯科医師や歯科衛生士が講習を受け、実際に試したうえで患者様におすすめできる商品を中心に20種類以上のホームケアアイテムをご用意しています。先生がおすすめする他では買えないホームケアアイテムもご用意していますし、先生に指導を受けたホームケアアイテムが周辺のドラッグストアよりも安くお買い求めいただけますよ！
          </p>
          <img class="photo_small" src="<?php echo get_template_directory_uri() ?>/img/081.jpg" alt="けいびる歯科ホームケアアイテム">
        </div>
        <p class="margin-top">
          また、アメリカから直輸入している商品も多数あります。ホワイトニング用の歯磨き粉は日本のものより効果が高く、ホワイトニング後の後戻りを緩和させる成分が入っているので、入荷したらまとめてお買いいただく方もいらっしゃるくらい大人気商品となっています。<br>
          歯ブラシもお子さま用、矯正している方用などがあり、種類豊富にそろえておりますので、自分にぴったりなものが必ず見つかります！歯ブラシやホームケアに関する相談もお気軽にお問い合わせください。
        </p>
      </div>
    </div><!-- point -->
  </div><!-- wrap -->

  <div class="background_color">
    <div class="category_title">
      <p class="category_txt midashi01">ドクター・スタッフ紹介</p>
    </div>
    <div class="wrap">
      <div class="flex_between">
        <img class="photo_middle" src="<?php echo get_template_directory_uri() ?>/img/photo_middle_01.jpg" alt="院長坂本孝夫">
        <div class="pc">
          <div class="staff_introduce">
            <p class="staff_name txt_bold">
              院長　坂本 孝夫
              <span class="small_txt">Sakamoto Takao</span>
            </p>
            <p class="txt_bold">ごあいさつ</p>
            <p>
              多摩市「けいびる歯科医院」では、地域に根ざした歯科医療を大切に考えております。患者の利便性を考え、無理なく通えるようにと「年中無休」を掲げて診療を行っております。多摩市一ノ宮の地元の皆様に支持される歯科医院を目指していきます。
            </p>
          </div><!-- staff_introduce -->
        </div><!-- pc -->
        <div class="sp">
          <div class="staff_introduce">
            <p class="staff_name txt_bold">
              院長　坂本 孝夫
            </p>
            <p style="margin-top:-5px;">
              <span class="small_txt">Sakamoto Takao</span>
            </p>
            <p class="txt_bold">ごあいさつ</p>
            <p>
              多摩市「けいびる歯科医院」では、地域に根ざした歯科医療を大切に考えております。患者の利便性を考え、無理なく通えるようにと「年中無休」を掲げて診療を行っております。多摩市一ノ宮の地元の皆様に支持される歯科医院を目指していきます。
            </p>
          </div><!-- staff_introduce -->
        </div><!-- sp -->
      </div>

      <div class="keireki">
        <!-- <div class="keireki_title">
          <p class="txt_bold">ー 経歴 ー</p>
        </div>
        <div class="keire_naiyou">
          <p>●●大学歯学部卒。都内の歯科医院にて・・・簡単な経歴を記入。簡単な経歴を記入。簡単な経歴を記入。</p>
          <p>●●大学歯学部卒。都内の歯科医院にて・・・簡単な経歴を記入。</p>
          <p>●●大学歯学部卒。都内の歯科医院にて・・・</p>
          <p>●●大学歯学部卒。都内の歯科医院にて・・・簡単な経歴を記入。簡単な経歴を記入。簡単な経歴を記入。</p>
        </div> -->

        <div class="more_btn_cover">
          <a href="<?php echo home_url('/doctor_staff') ?>" class="more_btn">
            <p>詳細を見る</p>
          </a>
        </div>
      </div><!-- keireki -->
    </div><!-- wrap -->
  </div><!-- background_color -->

  <div class="wrap">
    <div class="category_title">
      <p class="category_txt midashi01">よくある質問</p>
      <!-- <p class="small_txt">Examination guide</p> -->
    </div>

  <table class="QA">
     <tr>
       <th>
         <div class="Q">
         <p class="txt_bold">Q.</p>
         </div>
       </th>
       <td>
         <p>
           予約をしたいので、予約の流れを知りたいです。
         </p>
       </td>
     </tr>
     <tr class="answer">
       <th>
         <div class="A">
           <p class="txt_bold">A.</p>
         </div>
       </th>
       <td>
         <p>
           当院は、基本的にご予約制となっております。電話予約または、直接お越しいただいて受付で予約をとることが可能です。<br>
           お電話でご予約される場合は、当ホームページに記載の電話番号(042-337-4388)におかけください。その際、ご希望のお日にちとお時間をお伝えください。また、歯科医師のご希望がありましたらお伺いいたします。<br>
           予約なく、直接お越しいただいた場合も、ご希望のお日にちとお時間をお伝えいただければ、空き状況を確認いたします。<br>
           はじめての方は、ご予約時間をだいたい３０分ほどいただいております。<br>
           ご予約されたときは、あまりお待たせする時間はないように努めております。ですが、混雑しているときなどは多少お待ちいただくこともございますので、お急ぎの方は受付までお伝えください。
         </p>
       </td>
     </tr>
  </table>
</div><!-- wrap -->

  <div class="background_color">
    <div class="category_title">
      <p class="category_txt midashi01">けいびる歯科院からのお約束</p>
    </div>
    <div class="wrap">
      <div class="flex_center" style="margin-top:50px;">
        <img class="photo_big" src="<?php echo get_template_directory_uri() ?>/img/photo_big_01.jpg" alt="けいびる歯科医院スタッフ集合写真">
      </div>
      <p class="margin-top padding-bottom">
        けいびる歯科医院として、患者様にお約束できることをお伝えください。<br>
        例:患者様の歯に関するお悩みをしっかりとすべてお聞かせいただき、お客様それぞれに最適な治療を提供させていただきます。痛くない治療を希望するなどの、ご希望もご遠慮なく、お申し付けください。あなたの歯のお悩みがなくなることをお約束致します。お気軽にお電話ください。
      </p>
    </div>
  </div>

</main>
<?php
get_footer();
 ?>
