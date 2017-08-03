<?php

return [
    'adminEmail' => 'admin@example.com',
    'domain'=>[
        'www'=>'http://wshop.tunnel.echomod.cn',
        'm'=>'http://wshop.tunnel.echomod.cn/m',
        'web'=>'http://wshop.tunnel.echomod.cn/web',
    ],
    'upload' => [
		'avatar' => '/uploads/avatar',
		'brand' => '/uploads/brand',
		'book' => '/uploads/book',
	],
    "weixin"=>[
      'appid'=>'wx505146c05ca816bf',
      'sk'=>'94937698ddb1d1ceaf202285780244e6',
      'token'=>'weixin',
      'pay' => [
          'key' => '根据实际情况填写',
          'mch_id' => '根据实际情况填写',
          'notify_url' => [
             'm' => '/pay/callback'
             ],
          ]
    ],
    'title' => '菜菜的微信图书商城',
];
