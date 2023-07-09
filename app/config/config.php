<?php
$config['Settings'] = array(
	'version' => '1',
	'title' => 'Nightdance CMS',
	'description' => 'Contents Management System for Super Admin',
	'logo-small' => 'http://mail.nightdance.co.kr/imgs/logo.gif',
	'copyright' => 'Dance Edutainment',
	'site_url' => 'http://www.nightdance.co.kr',
);

$config['Menus'] = array(
	array(
		'title' => '홈',
		'url' => '/',
		'children' => array(
			array(
				'title' => '마에스트로',
				'url' => array('controller' => 'maestros', 'action' => 'index'),
				'children' => array(
					array(
						'title' => '관리자',
						'url' => array('controller' => 'maestros', 'action' => 'index'),
					),
					array(
						'title' => '관리자 그룹',
						'url' => array('controller' => 'maestro_groups', 'action' => 'index'),
					),
				)
			),
			array(
				'title' => '로그아웃',
				'url' => array('controller' => 'maestros', 'action' => 'logout'),
			),
		)
	),
	array(
		'title' => '동영상 시청 관리',
		'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'nd_stats', 'action' => 'index'),
		'children' => array(
			array(
				'title' => '동영상 시청 관리',
				'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'nd_stats', 'action' => 'index')
			),
		)
	),
	array(
		'title' => '커뮤니티 관리',
		'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'nd_forums', 'action' => 'index'),
		'children' => array(
			array(
				'title' => '게시판',
				'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'nd_forums', 'action' => 'index'),
				'children' => array(
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
			),
			array(
				'title' => 'Invitation',
				'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'invitations', 'action' => 'index')
			),
			array(
				'title' => 'internships',
				'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'internships', 'action' => 'index')
			),
			array(
				'title' => '포인트 관리',
				'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'point_actions', 'action' => 'index')
			),
		),
	),
	array(
		'title' => '콘텐츠 관리',
		'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'nd_categories', 'action' => 'index'),
		'children' => array(
			array(
				'title' => '메인 슬라이드',
				'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'main_slides', 'action' => 'index')
			),
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
				'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'packages', 'action' => 'index')
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
				'title' => '동영상 카테고리(new)',
				'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'clip_categories', 'action' => 'index')
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
	),
	array(
		'title' => '랭킹',
		'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'specialists', 'action' => 'index'),
		'children' => array(
			array(
				'title' => '랭킹',
				'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'nd_rankings', 'action' => 'index')
			),
		)
	),
	array(
		'title' => '전문반 관리',
		'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'specialists', 'action' => 'index'),
		'children' => array(
			array(
				'title' => '전문가',
				'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'specialists', 'action' => 'index')
			),
		)
	),
	array(
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
	),
	array(
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
			array(
			'title' => '월별 매출',
'url'=>array('controller'=>'month_sales'))
		)
	),
	array(
		'title' => '삼성 스마트TV',
		'url' => array('admin' => true, 'prefix' => false, 'plugin' => null),
		'children' => array(
			array(
				'title' => '삼성 TV 사용자',
				'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'api_users', 'action' => 'index')
			),
			array(
				'title' => 'API 이용자',
				'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'api_consumers', 'action' => 'index')
			),
			array(
				'title' => 'API 토큰(개발용)',
				'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'api_access_tokens', 'action' => 'index')
			),
			array(
				'title' => '무료 강좌',
				'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'samsung_free_clips', 'action' => 'index')
			),
			array(
				'title' => '쿠폰 그룹',
				'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'api_coupon_groups', 'action' => 'index')
			),
			array(
				'title' => '쿠폰 발행',
				'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'api_coupons', 'action' => 'index')
			),
			array(
				'title' => '이벤트',
				'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'api_events', 'action' => 'index')
			),
			array(
				'title' => '결제',
				'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'api_paylogs', 'action' => 'index')
			),
		)
	),
	array(
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
	)
);
?>
