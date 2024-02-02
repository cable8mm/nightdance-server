<?php

$config['Settings'] = [
    'version' => '1',
    'title' => 'Nightdance CMS',
    'description' => 'Contents Management System for Super Admin',
    'logo-small' => 'http://mail.nightdance.co.kr/imgs/logo.gif',
    'copyright' => 'Dance Edutainment',
    'site_url' => 'http://www.nightdance.co.kr',
];

$config['Menus'] = [
    [
        'title' => '홈',
        'url' => '/',
        'children' => [
            [
                'title' => '마에스트로',
                'url' => ['controller' => 'maestros', 'action' => 'index'],
                'children' => [
                    [
                        'title' => '관리자',
                        'url' => ['controller' => 'maestros', 'action' => 'index'],
                    ],
                    [
                        'title' => '관리자 그룹',
                        'url' => ['controller' => 'maestro_groups', 'action' => 'index'],
                    ],
                ],
            ],
            [
                'title' => '로그아웃',
                'url' => ['controller' => 'maestros', 'action' => 'logout'],
            ],
        ],
    ],
    [
        'title' => '동영상 시청 관리',
        'url' => ['admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'nd_stats', 'action' => 'index'],
        'children' => [
            [
                'title' => '동영상 시청 관리',
                'url' => ['admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'nd_stats', 'action' => 'index'],
            ],
        ],
    ],
    [
        'title' => '커뮤니티 관리',
        'url' => ['admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'nd_forums', 'action' => 'index'],
        'children' => [
            [
                'title' => '게시판',
                'url' => ['admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'nd_forums', 'action' => 'index'],
                'children' => [
                    [
                        'title' => '게시판 포스트',
                        'url' => ['admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'nd_topics', 'action' => 'index'],
                    ],
                    [
                        'title' => '게시판 덧글',
                        'url' => ['admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'nd_posts', 'action' => 'index'],
                    ],
                    [
                        'title' => '게시판 카테고리',
                        'url' => ['admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'nd_fcategories', 'action' => 'index'],
                    ],
                ],
            ],
            [
                'title' => 'Invitation',
                'url' => ['admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'invitations', 'action' => 'index'],
            ],
            [
                'title' => 'internships',
                'url' => ['admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'internships', 'action' => 'index'],
            ],
            [
                'title' => '포인트 관리',
                'url' => ['admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'point_actions', 'action' => 'index'],
            ],
        ],
    ],
    [
        'title' => '콘텐츠 관리',
        'url' => ['admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'nd_categories', 'action' => 'index'],
        'children' => [
            [
                'title' => '메인 슬라이드',
                'url' => ['admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'main_slides', 'action' => 'index'],
            ],
            [
                'title' => '동영상',
                'url' => ['admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'nd_clips', 'action' => 'index'],
            ],
            [
                'title' => '음악',
                'url' => ['admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'nd_musics', 'action' => 'index'],
            ],
            [
                'title' => '추천 리스트',
                'url' => ['admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'nd_suggests', 'action' => 'index'],
            ],
            [
                'title' => '패키지',
                'url' => ['admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'packages', 'action' => 'index'],
            ],
            [
                'title' => '강사',
                'url' => ['admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'nd_teachers', 'action' => 'index'],
            ],
            [
                'title' => '스태프',
                'url' => ['admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'staffs', 'action' => 'index'],
            ],
            [
                'title' => '댄스 장르',
                'url' => ['admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'nd_genres', 'action' => 'index'],
            ],
            [
                'title' => '사이트 카테고리',
                'url' => ['admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'nd_categories', 'action' => 'index'],
            ],
            [
                'title' => '동영상 카테고리(new)',
                'url' => ['admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'clip_categories', 'action' => 'index'],
            ],
            [
                'title' => '강사 포지션',
                'url' => ['admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'teacher_positions', 'action' => 'index'],
            ],
            [
                'title' => '스태프 포지션',
                'url' => ['admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'staff_positions', 'action' => 'index'],
            ],
        ],
    ],
    [
        'title' => '랭킹',
        'url' => ['admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'specialists', 'action' => 'index'],
        'children' => [
            [
                'title' => '랭킹',
                'url' => ['admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'nd_rankings', 'action' => 'index'],
            ],
        ],
    ],
    [
        'title' => '전문반 관리',
        'url' => ['admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'specialists', 'action' => 'index'],
        'children' => [
            [
                'title' => '전문가',
                'url' => ['admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'specialists', 'action' => 'index'],
            ],
        ],
    ],
    [
        'title' => '홍보 & 마케팅',
        'url' => ['admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'coupon_corps', 'action' => 'index'],
        'children' => [
            [
                'title' => '발행된 쿠폰',
                'url' => ['admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'coupon_issues', 'action' => 'index'],
            ],
            [
                'title' => '쿠폰 발행 요청 업체',
                'url' => ['admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'coupon_corps', 'action' => 'index'],
            ],
        ],
    ],
    [
        'title' => '회원 & 결제 관리',
        'url' => ['admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'payments', 'action' => 'index'],
        'children' => [
            [
                'title' => '회원 관리',
                'url' => ['admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'nd_users', 'action' => 'index'],
            ],
            [
                'title' => 'PG사 결제 로그',
                'url' => ['admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'nd_ncash_logs', 'action' => 'index'],
            ],
            [
                'title' => '결제 수단',
                'url' => ['admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'nd_payments', 'action' => 'index'],
            ],
            [
                'title' => '월별 매출',
                'url' => ['controller' => 'month_sales']],
        ],
    ],
    [
        'title' => '삼성 스마트TV',
        'url' => ['admin' => true, 'prefix' => false, 'plugin' => null],
        'children' => [
            [
                'title' => '삼성 TV 사용자',
                'url' => ['admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'api_users', 'action' => 'index'],
            ],
            [
                'title' => 'API 이용자',
                'url' => ['admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'api_consumers', 'action' => 'index'],
            ],
            [
                'title' => 'API 토큰(개발용)',
                'url' => ['admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'api_access_tokens', 'action' => 'index'],
            ],
            [
                'title' => '무료 강좌',
                'url' => ['admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'samsung_free_clips', 'action' => 'index'],
            ],
            [
                'title' => '쿠폰 그룹',
                'url' => ['admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'api_coupon_groups', 'action' => 'index'],
            ],
            [
                'title' => '쿠폰 발행',
                'url' => ['admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'api_coupons', 'action' => 'index'],
            ],
            [
                'title' => '이벤트',
                'url' => ['admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'api_events', 'action' => 'index'],
            ],
            [
                'title' => '결제',
                'url' => ['admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'api_paylogs', 'action' => 'index'],
            ],
        ],
    ],
    [
        'title' => '관리',
        'url' => ['admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'users', 'action' => 'index'],
        'children' => [
            [
                'title' => '관리자 계정',
                'url' => ['admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'users', 'action' => 'index'],
            ],
            [
                'title' => '계정 그룹',
                'url' => ['admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'groups', 'action' => 'index'],
            ],		[
                'title' => '지부',
                'url' => ['admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'branches', 'action' => 'index'],
            ],
        ],
    ],
];
