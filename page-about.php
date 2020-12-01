<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the about page when no about.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rino_matsuhima
 */

get_header();
?>

	<main class="site-main">
		<div class="about__wrapper">
			<div class="about__mainVisualWrapper">
				<picture class="about__mainVisual -back">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/mv_bg_02.jpg" alt="">
				</picture>
				<picture class="about__mainVisual -front">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/mv_bg_01.jpg" alt="">
				</picture>
				<h1 class="about__heading -en">ABOUT</h1>
			</div>
			<section class="about__message">
				<div class="about__messageText">
					<h2 class="sectionHeading">MESSAGE</h2>
					<p class="about__messageParagraph">
						松嶋りのの写真は、私がネット婚活をしていた時にこんなサービスが欲しかったというものを作りました。
					</p>
					<p class="about__messageParagraph">
						高校生の頃から容姿コンプレックスを克服するために磨いてきた自撮り技術、ひたすら女優さんや女性アイドルの魅せ方を研究してきた技術を全て注ぎ込みました。どうすれば、女性を200％魅力的に見せるか、13年間かけて自ら編み出したものです。
					</p>
					<p class="about__messageParagraph">
						写真より実物の方がいいねと言われる、自分に自信が持てない、自分の笑顔や写真が苦手。私も写真がすごく苦手だったからこそ、そんなクライアントさんが自分の魅力を再発見して、自信を持ってもらえる写真をお一人お一人丁寧に撮影をしています。
					</p>
					<p class="about__messageParagraph">
						松嶋の写真は『どこよりも自然体の笑顔が撮れる』『写真嫌いの私がはじめて写真が好きになった』と口コミで評判を広げて頂いています。
					</p>
					<p class="about__messageParagraph">
						『写真を通じて、女性の自己肯定感をあげる』ことを使命として、それぞれの魅力の素晴らしさを伝えていきたいと思います。
					</p>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/message_image.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/about/message_image.jpg 1x, <?php echo get_template_directory_uri(); ?>/assets/images/about/message_image@2x.jpg 2x" alt="" class="about__messagePhoto">
			</section>
			<section class="about__value">
				<h2 class="sectionHeading">VALUE</h2>
				<ul class="about__valueList">
					<li class="about__valueItem">
						<div class="about__valueNumberWrapper">
							<span class="about__valueNumber -en">01</span>
						</div>
						<h3 class="about__valueHeading">あなたの本来の魅力を<br>知ってほしいという想い</h3>
						<p class="about__valueParagraph">
							どうしたら、もっと魅力的になれますか？<br>
							と聞かれたら、私は間違いなく、まずはあなたの魅力を認めて受け入れてあげてください、とお伝えします。200名以上の女性をサポートしてきた経験から、その人らしさ以上に輝ける人はいません。あなたの素材を認めて愛してあげたときに、きっとあなたの魅力は花開きます。
						</p>
					</li>
					<li class="about__valueItem">
						<div class="about__valueNumberWrapper">
							<span class="about__valueNumber -en">02</span>
						</div>
						<h3 class="about__valueHeading">誰よりも、あなた自身を<br>好きになってほしいという願い</h3>
						<p class="about__valueParagraph">
							誰かを愛するには、まずは自分を愛してあげることが出発点です。長い人生の中で、あなたがあなたの1番のファンであり 応援者になって、あなたを好きになってください。ありのままの自分を、私らしい個性を丸ごと愛した先に、きっと幸せな未來があります。あなたが丸ごと自分を好きになれるように私は全力でサポートします。
						</p>
					</li>
					<li class="about__valueItem">
						<div class="about__valueNumberWrapper">
							<span class="about__valueNumber -en">03</span>
						</div>
						<h3 class="about__valueHeading">リアルな婚活現場で<br>きたえぬかれた視点</h3>
						<p class="about__valueParagraph">
							20代前半から結婚相談所や婚活アプリ、飲み会や婚活パーティーなど、あらゆる手段を経験し、理想の彼とお付き合いをした経験から、最新の婚活事情をまじえてあなたをプロデュースします。自分史上最高の1枚なのに、友達に撮ってもらったようなナチュラルさが人気の秘訣です。
						</p>
					</li>
				</ul>
			</section>
			<section class="about__profile">
				<h2 class="sectionHeading">PROFILE</h2>
				<div class="about__profileContents">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/president_image.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/about/president_image.jpg 1x, <?php echo get_template_directory_uri(); ?>/assets/images/about/president_image@2x.jpg 2x" alt="">
					<div class="about__profileText">
						<div class="about__profileNameWrapper">
							<span class="about__profilePosition">Mywill 代表</span><span class="about__profileName">松嶋 りの</span>
						</div>
						<p class="about__profileParagraph">
							関西学院大学　卒業<br>
							大手メガバンク、商社勤務を経てPhotographerとして独立。<br>
							OL時代に友人の依頼から始まった撮影活動が、現在では募集前にほぼ満席となる人気を継続中。
						</p>
						<p class="about__profileParagraph">
							またafter followの継続コーチングでは具体的かつ実践的なコンサルティングで自己肯定感をあげて、夢を叶えるクライアントが続出。<br>
							一部実績：好きな仕事で1000名以上のフォロワーを持ち起業ができた。<br>
							ありのままの自分を愛してくれる彼と婚約できた等。累計卒業生は30名以上。
						</p>
						<p class="about__profileParagraph">
							2018年に起業をしてから、200名以上の女性をサポートし、現在は法人・個人・起業家の幅広い層から松嶋の写真は『どこよりも自然体の笑顔が撮れる』『写真嫌いの私がはじめて写真を好きになれた』『とにかく撮影が楽しくてあっという間に終わってしまう』と口コミで評判を広めている。
						</p>
					</div>
				</div>
			</section>
		</div>
	</main><!-- #main -->

<?php
get_footer();
