<div id='header'>
<?php
$links = array();
$links[] = array(
	'title' => '동영상 시청 관리',
	'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'nd_stats', 'action' => 'index'),
	'children' => array(
		array(
			'title' => '동영상 시청 관리',
			'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'nd_stats', 'action' => 'index')
		),
	)
);
$links[] = array(
	'title' => '커뮤니티 관리',
	'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'nd_forums', 'action' => 'index'),
	'children' => array(
		array(
			'title' => '게시판',
			'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'nd_forums', 'action' => 'index')
		),
		array(
			'title' => '게시판 포스트',
			'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'nd_topics', 'action' => 'index')
		),
		array(
			'title' => '게시판 덧글',
			'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'nd_posts', 'action' => 'index')
		),
		array(
			'title' => '게시판 카테고리',
			'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'nd_fcategories', 'action' => 'index')
		),
	)
);
$links[] = array(
	'title' => '콘텐츠 관리',
	'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'nd_categories', 'action' => 'index'),
	'children' => array(
		array(
			'title' => '동영상',
			'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'nd_clips', 'action' => 'index')
		),
		array(
			'title' => '음악',
			'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'nd_musics', 'action' => 'index')
		),
		array(
			'title' => '추천 리스트',
			'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'nd_suggests', 'action' => 'index')
		),
		array(
			'title' => '패키지',
			'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'nd_packs', 'action' => 'index')
		),
		array(
			'title' => '강사',
			'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'nd_teachers', 'action' => 'index')
		),
		array(
			'title' => '스태프',
			'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'staffs', 'action' => 'index')
		),
		array(
			'title' => '댄스 장르',
			'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'nd_genres', 'action' => 'index')
		),
		array(
			'title' => '사이트 카테고리',
			'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'nd_categories', 'action' => 'index')
		),
		array(
			'title' => '강사 포지션',
			'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'teacher_positions', 'action' => 'index')
		),
		array(
			'title' => '스태프 포지션',
			'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'staff_positions', 'action' => 'index')
		),
	)
);

$links[] = array(
	'title' => '랭킹',
	'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'specialists', 'action' => 'index'),
	'children' => array(
		array(
			'title' => '랭킹',
			'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'nd_rankings', 'action' => 'index')
		),
	)
);

$links[] = array(
	'title' => '전문반 관리',
	'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'specialists', 'action' => 'index'),
	'children' => array(
		array(
			'title' => '전문가',
			'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'specialists', 'action' => 'index')
		),
	)
);

$links[] = array(
	'title' => '홍보 & 마케팅',
	'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'coupon_corps', 'action' => 'index'),
	'children' => array(
		array(
			'title' => '발행된 쿠폰',
			'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'coupon_issues', 'action' => 'index')
		),
		array(
			'title' => '쿠폰 발행 요청 업체',
			'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'coupon_corps', 'action' => 'index')
		),
	)
);

$links[] = array(
	'title' => '회원 & 결제 관리',
	'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'payments', 'action' => 'index'),
	'children' => array(
		array(
			'title' => '회원 관리',
			'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'nd_users', 'action' => 'index')
		),
		array(
			'title' => 'PG사 결제 로그',
			'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'nd_ncash_logs', 'action' => 'index')
		),
		array(
			'title' => '결제 수단',
			'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'nd_payments', 'action' => 'index')
		),
	)
);

$links[] = array(
	'title' => '관리',
	'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'users', 'action' => 'index'),
	'children' => array(
		array(
			'title' => '관리자 계정',
			'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'users', 'action' => 'index')
		),
		array(
			'title' => '계정 그룹',
			'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'groups', 'action' => 'index')
		),		array(
			'title' => '지부',
			'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'branches', 'action' => 'index')
		),
	)
);
?>
<?php
/*
echo '<ul>';
foreach($links as $v) {
	echo '<li><b>'.$v['title'].'</b></li>';

	echo '<ol>';
	foreach($v['children'] as $sv) {
		echo '<li>'.$sv['title'].'</li>';
	}
	echo '</ol>';
}
echo '</ul>';
exit;
*/
?>
<h1><?//=$html->image(Configure::read('Settings.logo-small')) ?> <a href="/"><?php __(Configure::read('Settings.title'))?> : <?php __(Configure::read('Settings.description'))?></a> <?=$html->link(__('[ Logout ]', null), array('controller'=>'admin_users', 'action'=>'logout'))?></h1>
<?php
echo $tree->generate($links, array ('element' => 'admin/menu_item', 'id'=>'nav-one','class' => 'nav'));
?>
</div>