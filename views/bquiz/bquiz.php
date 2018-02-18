<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;

?>
	<div class="swiper__container">
		<div class="swiper-wrapper">
			<div class="swiper__container__left">
				<div class="swiper-wrapper">
					<div class="container__left swiper-slide" data-day="0">
						<div class="cause__left">
							<div class="ctp">
								<img alt="CTP" class="" src="app/images/build/logo_bw.png"style="left: -120px;position: relative;">
							</div>
						</div>
					</div>
					<?php foreach ($bnoises as $b): ?>
					<div class="container__left swiper-slide" data-cause="<?= Html::encode("{$b->q_id}")?>" data-day="<?= Html::encode("{$b->q_id}")?>">
						<div class="cause__left">
							<p><strong><?= Html::encode("{$b->q_que}") ?></strong></p>
							<ul style="list-style-type:none;">
							<li><input type="radio" name="q_<?= Html::encode("{$b->q_id}") ?>" value="1"><span><?= Html::encode("{$b->ans_a}") ?></span></li>
							<li><input type="radio" name="q_<?= Html::encode("{$b->q_id}") ?>" value="2"><span><?= Html::encode("{$b->ans_b}") ?></span></li>
							<li><input type="radio" name="q_<?= Html::encode("{$b->q_id}") ?>" value="3"><span><?= Html::encode("{$b->ans_c}") ?></span></li>
							<li><input type="radio" name="q_<?= Html::encode("{$b->q_id}") ?>" value="4"><span><?= Html::encode("{$b->ans_d}") ?></span></li>
							</ul>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
			<div class="swiper__container__right">
				<div class="swiper-wrapper">
					<div class="container__right swiper-slide" data-cause="" data-day="" >
						<div class="cause__right">
						</div>
					</div>
					<div class="container__right swiper-slide" data-cause="Friends of the Children" data-day="0" data-shorturl="friends-of-the-children">
						<div class="cause__right">
								<div class="today">
									<img alt="Friends of the Children" class="cause__left__logo" src="app/images/build/b_noesis.png">
									<p class="today__message">Scroll to learn more about all our featured causes</p>
									<div class="today__cta">
										<button class="today__cta__arrow-down icon-arrow-down"></button>
									</div>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="nav">
		<nav class="nav__days">
			<div class="nav__days__up icon-arrow-up"></div>
			<ol class="nav__days__list">
				<li class="nav__days__list__item day-20" data-cause-left="1" data-cause-right="19">
					<div class="nav__days__list__item__count">#20</div>
					<!-- <div class="nav__days__list__item__cause">Friends of the Children</div> -->
				</li>
				<li class="nav__days__list__item day-19" data-cause-left="2" data-cause-right="18">
					<div class="nav__days__list__item__count">#19</div>
					<!-- <div class="nav__days__list__item__cause">Big Sisters of Boston</div> -->
				</li>
				<li class="nav__days__list__item day-18" data-cause-left="3" data-cause-right="17">
					<div class="nav__days__list__item__count">#18</div>
					<!-- <div class="nav__days__list__item__cause">Home Base</div> -->
				</li>
				<li class="nav__days__list__item day-17" data-cause-left="4" data-cause-right="16">
					<div class="nav__days__list__item__count">#17</div>
					<!-- <div class="nav__days__list__item__cause">DJ Dream Fund</div> -->
				</li>
				<li class="nav__days__list__item day-16" data-cause-left="5" data-cause-right="15">
					<div class="nav__days__list__item__count">#16</div>
					<!-- <div class="nav__days__list__item__cause">Cradles to Crayons</div> -->
				</li>
				<li class="nav__days__list__item day-15" data-cause-left="6" data-cause-right="14">
					<div class="nav__days__list__item__count">#15</div>
					<!-- <div class="nav__days__list__item__cause">Pop Warner Little Scholars</div> -->
				</li>
				<li class="nav__days__list__item day-14" data-cause-left="7" data-cause-right="13">
					<div class="nav__days__list__item__count">#14</div>
					<!-- <div class="nav__days__list__item__cause">Save the Children</div> -->
				</li>
				<li class="nav__days__list__item day-13" data-cause-left="8" data-cause-right="12">
					<div class="nav__days__list__item__count">#13</div>
					<!-- <div class="nav__days__list__item__cause">Learn to Cope</div> -->
				</li>
				<li class="nav__days__list__item day-12" data-cause-left="9" data-cause-right="11">
					<div class="nav__days__list__item__count">#12</div>
					<!-- <div class="nav__days__list__item__cause">Catie's Closet</div> -->
				</li>
				<li class="nav__days__list__item day-11" data-cause-left="10" data-cause-right="10">
					<div class="nav__days__list__item__count">#11</div>
					<!-- <div class="nav__days__list__item__cause">Mass Council on Compulsive Gambling</div> -->
				</li>
				<li class="nav__days__list__item day-10" data-cause-left="11" data-cause-right="9">
					<div class="nav__days__list__item__count">#10</div>
					<!-- <div class="nav__days__list__item__cause">UTEC</div> -->
				</li>
				<li class="nav__days__list__item day-9" data-cause-left="12" data-cause-right="8">
					<div class="nav__days__list__item__count">#9</div>
					<!-- <div class="nav__days__list__item__cause">Massachusetts Animal Coalition</div> -->
				</li>
				<li class="nav__days__list__item day-8" data-cause-left="13" data-cause-right="7">
					<div class="nav__days__list__item__count">#8</div>
					<!-- <div class="nav__days__list__item__cause">Camp Sunshine</div> -->
				</li>
				<li class="nav__days__list__item day-7" data-cause-left="14" data-cause-right="6">
					<div class="nav__days__list__item__count">#7</div>
					<!-- <div class="nav__days__list__item__cause">Be Bold, Be Bald</div> -->
				</li>
				<li class="nav__days__list__item day-6" data-cause-left="15" data-cause-right="5">
					<div class="nav__days__list__item__count">#6</div>
					<!-- <div class="nav__days__list__item__cause">Read to a Child</div> -->
				</li>
				<li class="nav__days__list__item day-5" data-cause-left="16" data-cause-right="4">
					<div class="nav__days__list__item__count">#5</div>
					<!-- <div class="nav__days__list__item__cause">MENTOR</div> -->
				</li>
				<li class="nav__days__list__item day-4" data-cause-left="17" data-cause-right="3">
					<div class="nav__days__list__item__count">#4</div>
					<!-- <div class="nav__days__list__item__cause">ALS ONE</div> -->
				</li>
				<li class="nav__days__list__item day-3" data-cause-left="18" data-cause-right="2">
					<div class="nav__days__list__item__count">#3</div>
					<!-- <div class="nav__days__list__item__cause">uAspire</div> -->
				</li>
				<li class="nav__days__list__item day-2" data-cause-left="19" data-cause-right="1">
					<div class="nav__days__list__item__count">#2</div>
					<!-- <div class="nav__days__list__item__cause">St. Francis House</div> -->
				</li>
				<li class="nav__days__list__item day-1" data-cause-left="20" data-cause-right="0">
					<div class="nav__days__list__item__count">#1</div>
					<!-- <div class="nav__days__list__item__cause">Red Sox Scholars</div> -->
				</li>
			</ol>
			<div class="nav__days__down icon-arrow-down"></div>
		</nav>
		<div class="nav__contact-us">
			<p>Contact Us</p>
		</div>
	</div>
	<div class="menu">
		<span class="menu__expand">&#9776;</span>
		<span class="menu__close">x</span>
	</div>
	<div class="curtain"></div>