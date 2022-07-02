<?php

use App\Http\Controllers\StorageController;
use App\Http\Controllers\Web\Login\WebLoginController;
use App\View\Components\Registration;
use Illuminate\Support\Facades\Route;
use Spatie\ArrayToXml\ArrayToXml;
/*test();
function test(){

    $min = 5;
    $max = 10;
    $limit = 0;
    $message = '';
    for ($i = 0; $i <= 8; $i++) {
        if (rand(0, 100) > 25) {
            $rand = rand($min, $max);
            $message .= '<br> ' . $rand;
        } else {
            $limit++;
            $message .= '<br> ' . 0;
        }

    }
    if ($limit !== 3){
        $message = '';
        test();
    }
    echo $message;
}

die();

$min = 5;
$max = 21;
for ($i = 0; $i <= 8; $i++) {
    if (rand(0, 100) > 25) {
        $rand = rand($min, $max);

        if ($rand <= 9) {
            $rand = '0' . $rand;
        }
        echo '<br> 1,' . $rand;
    } else {
        echo '<br> ' . 0;
    }
}

die();*/
// robe 0 - 17 light 18-35 heavy 36-49
/*$name = [
    'Devotion Magic Set',
    'Clan Oath Magic Set',
    'Elven Mithril Magic Set',
    'Demon Magic Set',
    'Karmian Magic Set',
    'Divine Magic Set',
    'Avadon Magic Set',
    'Zubei Magic Set',
    'Blue Wolf Magic Set',
    'Doom Magic Set',
    'Tallum Magic Set',
    'Dark Crystal Magic Set',
    'Nightmare Magic Set',
    'Apella Magic Set',
    'Majestic Magic Set',
    'Major Arcana Magic Set',
    'Knowledge Magic Set',
    'Wooden Leather Set',
    'Reinforced Leather Set',
    'Clan Oath Leather Set',
    'Manticore Skin Leather Set',
    'Plate Leather Set',
    'Theca Leather Set',
    'Drake Leather Set',
    'Blue Wolf Leather Set',
    'Zubei Leather Set',
    'Doom Leather Set',
    'Avadon Leather Set',
    'Nightmare Leather Set',
    'Dark Crystal Leather Set',
    'Tallum Leather Set',
    'Majestic Leather Set',
    'Apella Leather Set',
    'Draconic Leather Set',
    'Scaly Leather Set',
    'Brigandine Heavy Set',
    'Clan Oath Heavy Set',
    'Composite Heavy Set',
    'Full Plate Heavy Set',
    'Zubei Heavy Set',
    'Avadon Heavy Set',
    'Doom Heavy Set',
    'Nightmare Heavy Set',
    'Blue Wolf Heavy Set',
    'Dark Crystal Heavy Set',
    'Tallum Heavy Set',
    'Majestic Heavy Set',
    'Apella Heavy Set',
    'Imperial Crusader Heavy Set',
];

$array = [];

$n = -1;
$skillId = 5701;
for ($i = 9349; $i <= 9364; $i++) {
    $n++;
    $array['armorset'][] = [
        [
            '_attributes' => [
                'name' => collect($name)->get($n),
                'chest' => $i,
                'legs' => "0",
                'head' => "0",
                'gloves' => "0",
                'feet' => "0",
                'skillId' => $skillId,
                'shield' => "0",
                'shieldSkillId' => "0",
                'enchant6Skill' => "0",
            ],

        ]
    ];
}*/


/*echo ArrayToXml::convert($array);
die();*/
/*$array = [
    'item' => [
    ],
];

$robe = [
    'pDef' => [0, 4, 5, 4, 4, 4, 5, 7, 6, 3],
    'mDef' => [0, 4, 7, 5, 7, 4, 4, 4, 7, 4],
    'runSpd' => [0, 4, 4, 3, 7, 4, 4, 6, 5, 4],
    'mAtkSpd' => [0, 3, 3, 3, 4, 4, 4, 4, 5, 5],
    'mAtk' => [0, 4, 3, 2, 3, 5, 2, 4, 3, 3],
    'regMp' => [0, 4, 4, 4, 7, 7, 3, 5, 5, 5],
    'maxMp' => [0, 4, 5, 5, 3, 4, 6, 6, 4, 6],
    'INT' => [0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
    'WIT' => [0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
    'MEN' => [0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
    'mReuse' => [0, 3, 3, 3, 2, 3, 3, 2, 3, 2],
    'mCritRate' => [0, 2, 2, 3, 3, 2, 3, 3, 2, 3],
];
$skill = [
    'skill' => [
    ],
];

$level = -1;
for ($i = 5700; $i <= 5709; $i++) {
    $level++;


    $stats = [];
    foreach ($robe as $stat => $value) {
        $mod = 'mul';
        if (in_array($stat, ['runSpd'])) {
            $mod = 'add';
            $value = $value[$level];
        } elseif (in_array($stat, ['INT', 'WIT', 'MEN'])) {
            $value = $value[$level];
            if ($value > 0) {
                $mod = 'add';
                $stats[$mod][] = [
                    '_attributes' => [
                        'stat' => $stat,
                        'val' => $value,
                    ],
                ];
            } else {
                $mod = 'sub';
                $value = $value * -1;
            }
        } else {
            $value = $value[$level];
        }

        if ($value == 0) continue;

        if ($mod == 'mul' && $value <= 9) {
            $value = '1.0' . $value;
        } elseif ($mod == 'mul' && $value > 9) {
            $value = '1.' . $value;
        }

        $stats['for'][$mod][] = [
            '_attributes' => [
                'stat' => $stat,
                'val' => $value,
            ],
        ];

    }

    $skill['skill'][] = array_merge(['_attributes' => [
        'id' => $i,
        'levels' => '1',
        'name' => "No Grade Magic Set Lvl " . $level + 1,
    ],
        'set' => [
            [
                '_attributes' => [
                    'name' => 'target',
                    'val' => 'SELF',
                ],
            ],
            [
                '_attributes' => [
                    'name' => 'skillType',
                    'val' => 'BUFF',
                ],
            ],
            [
                '_attributes' => [
                    'name' => 'operateType',
                    'val' => 'PASSIVE',
                ],
            ]
        ],], $stats);


}
echo '<pre>';
$result = ArrayToXml::convert($skill);
var_dump($result);
die();*/
/*$n = -1;
for ($i = 9300; $i <= 9789; $i++) {
    $n++;

    if ($n == 49) {
        $n = 0;
    }

    $armorType = '';
    $pdef = 0;
    $weight = 0;
    $maxMp = 0;

    if ($n <= 16) {
        $armorType = 'MAGIC';
        $pdef = '119';
        $weight = 1930;
        $maxMp = 424;
    }
    if ($n > 16 && $n <= 34) {
        $armorType = 'LIGHT';
        $pdef = '150';
        $weight = 2413;
    }
    if ($n > 34 && $n <= 48) {
        $armorType = 'HEAVY';
        $pdef = '186';
        $weight = 3017;
    }


    /*    $array['product'][] = [
             [
                 '_attributes' => [
                     'id' => $i
                 ],
             ]
         ];
    $array['item'][] = [
        [
            '_attributes' => [
                'id' => $i,
                'type' => 'Armor',
                'name' => collect($name)->get($n),
            ],
            'set' => [
                [
                    '_attributes' => [
                        'name' => 'default_action',
                        'val' => 'equip'
                    ],
                ],
                [
                    '_attributes' => [
                        'name' => 'armor_type',
                        'val' => $armorType
                    ],
                ],
                [
                    '_attributes' => [
                        'name' => 'bodypart',
                        'val' => 'chest'
                    ],
                ],
                [
                    '_attributes' => [
                        'name' => 'material',
                        'val' => 'LEATHER'
                    ],
                ],
                [
                    '_attributes' => [
                        'name' => 'weight',
                        'val' => $weight
                    ],
                ],
                [
                    '_attributes' => [
                        'name' => 'price',
                        'val' => '28825'
                    ],
                ],
            ],
            'for' =>
                [
                    'baseadd' =>
                        [
                            '_attributes' => [
                                'stat' => 'pDef',
                                'val' => $pdef,
                            ],
                        ],
                    'add' =>
                        [
                            '_attributes' => [
                                'stat' => 'maxMp',
                                'val' => $maxMp,
                            ],
                        ],
                ]
        ]
    ];
}
$result = ArrayToXml::convert($array);

echo $result;

*/

Route::group(['name' => 'index'], function () {
   /* Route::get('/', [StorageController::class, 'index'])
        ->name('.index');*/
   Route::get('/', function () {
        return view('app.views.index.index');
    })->name('.index');
   Route::get('/event/{slug}', function ($slug) {
        return view('app.views.index.event', ['slug' => $slug]);
    })->name('.event');
});

Route::group(['name' => 'library'], function () {
    Route::get('/library', function () {
        return view('app.views.library.index');
    })->name('.library');
});

Route::group(['name' => 'storage'], function () {
    Route::get('/storage', [StorageController::class, 'index'])
        ->name('.storage');
});

Route::group(['name' => 'support'], function () {
    Route::get('/support', function () {
        return view('app.views.support.index');
    })->name('.support');
});

Route::group(['name' => 'donate'], function () {
    Route::get('/donate', function () {
        return view('app.views.donate.index');
    })->name('.donate');
});

Route::group(['name' => 'ratings'], function () {
    Route::get('/ratings', function () {
        return view('app.views.ratings.index');
    })->name('.ratings');
});

Route::group(['name' => 'forums'], function () {
    Route::get('/forums', function () {
        return view('app.views.forums.index');
    })->name('.forums');
});

Route::prefix('login')->middleware(['guest'])->name('.login')->group(function () {

    Route::get('/', [WebLoginController::class, 'show'])
        ->name('.show');

    Route::middleware('throttle:5:1')
        ->post('/registration', [WebLoginController::class, 'registration'])
        ->name('.registration');

    Route::get('/verification/{id}/{hash}', [WebLoginController::class, 'verification'])
        ->name('.verification');

    Route::middleware('throttle:5:1')
        ->post('/notification', [WebLoginController::class, 'notification'])
        ->name('.notification');

    Route::middleware('throttle:5:1')
        ->post('/authentication', [WebLoginController::class, 'authentication'])
        ->name('.authentication');

});


Route::middleware(['auth'])->group(function () {

    Route::get('/manage', function () {
        return view('app.views.manage.index');
    })->name('.manage');
});

/*** Группа - шаблоны **/
Route::prefix('template')->name('.template')->group(function () {

    /*** Шаблон окна - registration **/
    Route::get('/registration', function () {
        return app(Registration::class)->render();
    })->name('.registration');

    /*** Шаблон окна - restore **/
    Route::get('/restore', function () {
        return view('components.restore');
    })->name('.restore');

    /*** Шаблон окна - verification **/
    Route::get('/verification', function () {
        return view('components.verification');
    })->name('.verification');

    /*** Шаблон окна - developers **/
    Route::get('/developers', function () {
        return view('components.developers');
    })->name('.developers');

    /*** Шаблон окна - event-records **/
    Route::get('/records', function () {
        return view('components.event-records');
    })->name('.records');

});
