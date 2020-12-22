<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rino_matsuhima
 */

get_header();
?>

	<main class="site-main">
		<div class="home__wrapper">
			<div class="home__mainVisualWrapper">
				<picture class="home__mainVisual -back">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/mv_back.jpg" alt="">
				</picture>
				<picture class="home__mainVisual -front -pc">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/mv_front.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/mv_front.png 1x, <?php echo get_template_directory_uri(); ?>/assets/images/home/mv_front@2x.png 2x" alt="">
				</picture>
				<picture class="home__mainVisual -upper -sp">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/mainVisual_photo01-sp.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/mainVisual_photo01-sp.png 1x, <?php echo get_template_directory_uri(); ?>/assets/images/home/mainVisual_photo01-sp@2x.png 2x" alt="">
				</picture>
				<picture class="home__mainVisual -lower -sp">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/mainVisual_photo02-sp.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/mainVisual_photo02-sp.jpg 1x, <?php echo get_template_directory_uri(); ?>/assets/images/home/mainVisual_photo02-sp@2x.jpg 2x" alt="">
				</picture>
				<picture class="home__mainVisual -center -sp">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/mainVisual_copy-sp.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/mainVisual_copy-sp.png 1x, <?php echo get_template_directory_uri(); ?>/assets/images/home/mainVisual_copy-sp@2x.png 2x" alt="">
				</picture>
			</div>
			<section class="home__intro">
				<div class="home__introMain">
					<picture class="home__introPicture -center">
						<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/intro_01-sp.jpg" media="(max-width: 480px)">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/intro_01@2x.jpg" alt="">
					</picture>
					<div class="home__introMainText">
						<h2 class="home__introHeading">奇跡の一枚を、撮る</h2>
						<p class="home__introParagraph">
							まるで友達に撮ってもらったみたいに自然。<br>
							なのに、自分史上最高に可愛い。
						</p>
						<p class="home__introParagraph">
							そんな欲張りを叶える撮影サービスを<br>
							ご提供しています。
						</p>
						<a href="<?php echo home_url('/about/') ?>" class="c-button">Read More</a>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/intro_lower-sp.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/intro_lower-sp.png 1x, <?php echo get_template_directory_uri(); ?>/assets/images/home/intro_lower-sp@2x.png 2x" alt="" class="home__introDecorationImage -lower -sp">
					</div>
				</div>
				<div class="home__introDecoration -pc">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/intro_02.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/intro_02.jpg 1x, <?php echo get_template_directory_uri(); ?>/assets/images/home/intro_02@2x.jpg 2x" alt="" class="home__introDecorationImage -lower">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/intro_03.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/intro_03.jpg 1x, <?php echo get_template_directory_uri(); ?>/assets/images/home/intro_03@2x.jpg 2x" alt="" class="home__introDecorationImage -upper">
					<picture class="home__introDecorationText">
						<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/intro_copy.webp" type="image/webp">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/intro_copy.png" alt="A piece of beautiful">
					</picture>
				</div>
			</section>
			<section class="home__service">
				<h2 class="sectionHeading" id="service">SERVICE</h2>
				<div class="home__serviceBlock l-doubleCol" id="profile">
					<div class="home__serviceBlock l-doubleCol__col">
						<a href="https://ameblo.jp/happyfreedomrrr/entry-12462441316.html" target="_blank" noopener>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/service_01.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/service_01.jpg 1x, <?php echo get_template_directory_uri(); ?>/assets/images/home/service_01@2x.jpg 2x" alt="">
							<div class="home__serviceContents">
								<div class="home__serviceText">
									<span class="home__serviceCaption">奇跡の１枚を撮る</span>
									<h3 class="home__serviceHeading">ペアーズ専門のプロフィール撮影サービス</h3>
								</div>
								<picture class="home__serviceIcons">
									<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow.webp" type="image/webp">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow.png" alt="矢印アイコン">
								</picture>
							</div>
						</a>
					</div>
					<div class="home__serviceBlock l-doubleCol__col" id="selfy">
						<a href="https://ameblo.jp/happyfreedomrrr/entry-12613487278.html" target="_blank" noopener>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/service_02.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/service_02.jpg 1x, <?php echo get_template_directory_uri(); ?>/assets/images/home/service_02@2x.jpg 2x" alt="">
							<div class="home__serviceContents">
								<div class="home__serviceText">
									<span class="home__serviceCaption">写真に写る自分が好きになる</span>
									<h3 class="home__serviceHeading">自撮りBoot Camp</h3>
								</div>
								<picture class="home__serviceIcons">
									<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow.webp" type="image/webp">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow.png" alt="矢印アイコン">
								</picture>
							</div>
						</a>
					</div>
				</div>
				<div class="home__serviceBlock l-singleCol" id="academy">
					<div class="home__serviceBlock l-singleCol__col">
						<a href="" target="_blank" class="noevent" noopener>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/service_03.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/service_03.jpg 1x, <?php echo get_template_directory_uri(); ?>/assets/images/home/service_03@2x.jpg 2x" alt="">
							<div class="home__serviceContents">
								<div class="home__serviceText">
									<span class="home__serviceCaption">待望の新サービス登場</span>
									<h3 class="home__serviceHeading -en">My will Academy</h3>
								</div>
								<!-- <picture class="home__serviceIcons">
									<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow.webp" type="image/webp">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow.png" alt="矢印アイコン">
								</picture> -->
								<p class="home__serviceParagraph -en">Comming soon!</p>
							</div>
						</a>
					</div>
				</div>
			</section>
			<section class="home__voice" id="voice">
				<h2 class="sectionHeading">VOICE</h2>
				<ul class="home__voiceList">
					<li class="home__voiceItem">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/voice_01_image.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/voice_01_image.jpg 1x, <?php echo get_template_directory_uri(); ?>/assets/images/home/voice_01_image@2x.jpg 2x" alt="">
						<p class="home__voiceParagraph">ナチュラルな笑顔を引き出す天才です！<br>笑いながらあっという間に自然体で素敵なお写真が撮れていました。</p>
					</li>
					<li class="home__voiceItem">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/voice_02_image.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/voice_02_image.jpg 1x, <?php echo get_template_directory_uri(); ?>/assets/images/home/voice_02_image@2x.jpg 2x" alt="">
						<p class="home__voiceParagraph">やっぱり、りのさんに頼んで良かった！<br>自分だけでは絶対に撮れない写真をたくさん撮ってもらえました♡</p>
					</li>
					<li class="home__voiceItem">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/voice_03_image.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/voice_03_image.jpg 1x, <?php echo get_template_directory_uri(); ?>/assets/images/home/voice_03_image@2x.jpg 2x" alt="">
						<p class="home__voiceParagraph">ネット婚活をしてる方全員！<br>速やかに申し込んで写真を撮ってもらってください！笑</p>
					</li>
				</ul>
				<div class="home__voiceButton"><a href="https://peraichi.com/landing_pages/view/photopairs" target="_blank" noopener class="c-button">Read More</a></div>
			</section>
			<picture class="home__sectionImage">
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/section_bg.jpg" media="(max-width: 480px)">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/section_bg.jpg" alt="">
			</picture>
			<section class="home__column">
				<h2 class="sectionHeading" id="column">COLUMN</h2>
				<div class="home__columnWrapper">
					<?php if (have_posts()): ?>
						<?php while (have_posts()) : the_post(); ?>
							<article id="post-<?php the_ID(); ?>" <?php post_class('home__columnItem'); ?>>
								<a href="<?php the_permalink(); ?>">
									<?php
										if (has_post_thumbnail()) {
												the_post_thumbnail();
										}
									?>
									<div class="home__columnContents">
										<div class="home__columnText">
											<div class="home__columnMeta">
												<span class="home__columnCategory -en">
													<?php
														$category = get_the_category();
														echo $category[0]->cat_name;
													?>
												</span>
												<time datetime="<?php echo get_the_date('Y-m-d'); ?>" class="home__columnPostTime"><?php echo get_the_date('Y/m/d'); ?></time>
											</div>
											<h3 class="home__columnTitle"><?php echo get_the_title(); ?></h3>
										</div>
										<picture class="home__serviceIcons">
											<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow.webp" type="image/webp">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow.png" alt="矢印アイコン">
										</picture>
									</div>
								</a>
							</article>
						<?php endwhile; ?>
						<?php else: ?>
							<p>準備中です</p>
						<?php endif; ?>
				</div>
			</section>
			<section class="home__banners">
				<a href="https://line.me/R/ti/p/%40lba7985t" class="home__bannerLink" target="_blank" noopener>
					<picture class="home__banner">
						<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/banner_line.webp" type="image/webp">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/banner_line.jpg" alt="撮影のご予約受付はLINE@から受付！最新情報も配信します。">
					</picture>
				</a>
				<a href="https://ameblo.jp/happyfreedomrrr/" class="home__bannerLink" target="_blank" noopener>
					<picture class="home__banner">
						<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/banner_ameba.webp" type="image/webp">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/banner_ameba.jpg" alt="AMEBA BLOG 代表 松嶋りの のライフスタイルや、日々の出来事を更新！">
					</picture>
				</a>
			</section>
		</div>
	</main><!-- #main -->

<?php
get_footer();
