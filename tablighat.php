<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

// لیست تبلیغات با عکس‌های باکیفیت
$ads = [
    [
        'name' => 'تبلیغ ۱',
        'url' => 'https://yourhost.com/images/ad1.jpg',
        'flag' => 'banner',
        'IsADS' => true,
        'time' => '5'  // زمان نمایش به ثانیه
    ],
    [
        'name' => 'تبلیغ ۲',
        'url' => 'https://yourhost.com/images/ad2.png',
        'flag' => 'banner',
        'IsADS' => true,
        'time' => '4'
    ],
    [
        'name' => 'تبلیغ ۳',
        'url' => 'https://yourhost.com/images/ad3.webp',
        'flag' => 'banner',
        'IsADS' => true,
        'time' => '6'
    ]
];

// برگردوندن به فرمت JSON
echo json_encode(['views' => $ads], JSON_UNESCAPED_SLASHES);
?>
