<?php

namespace App\Http\Controllers;

use Spatie\ArrayToXml\ArrayToXml;

class StorageController extends Controller
{
    public function index()
    {
        // robe 0 - 17 light 18-35 heavy 36-49
        $name = [
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

        $itemId = 9335;
        $skillId = 5820;

        for ($i = 0; $i <= 9; $i++) {

            for ($sets = 35; $sets <= 48; $sets++) {
                $array['armorset'][] = [
                    [
                        '_attributes' => [
                            'name' => "No Grade " . collect($name)->get($sets) . " mode: " . $i + 1,
                            'chest' => $itemId,
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
                $itemId++;
            }
            $itemId = $itemId + 35;
            $skillId++;

        }


        return response(ArrayToXml::convert($array, [
            'rootElementName' => 'list'
        ]), 200, [
            'Content-Type' => 'application/xml'
        ]);
    }

    public final function csvToArrayStatsSet()
    {
        // $grades = array_reverse(array_chunk(array_map('str_getcsv', file('../l2j - STAT - ROBE.csv')), 12));
        $grades = array_reverse(array_chunk(array_map('str_getcsv', file('../l2j - STAT - HEAVY.csv')), 15));

        $result = ['skill' => []];

        $id = 5820;
        foreach ($grades as $grade) {
            $grade = collect($grade);
            $gradeName = collect($grade->first())->first();
            $levels = collect($grade->first())->forget([0, 13, 12, 11])->count();
            $grade->forget([0, 1]);

            for ($level = 1; $level <= $levels; $level++) {
                $gradeStat = $grade->values();
                $id++;

                $stats = [];
                $index = 0;
                foreach ($gradeStat as $stat) {
                    $index++;
                    $grade = collect($grade->values());
                    $statName = collect($grade->get($index - 1))->first();
                    $statValue = collect($grade->get($index - 1))->get($level);
                    $statMode = collect($grade->get($index - 1))->last();


                    if ($statValue == 0) continue;

                    if ($statMode == '%' && $statValue > 0) {
                        $mode = 'mul';
                    } elseif ($statMode == '%' && $statValue < 0) {
                        $mode = 'sub';
                    } elseif ($statMode == 'int' && $statValue > 0) {
                        $mode = 'add';
                    } elseif ($statMode == 'int' && $statValue < 0) {
                        $mode = 'sub';
                    }

                    if ($statMode == '%' && $statValue <= 9 && $statValue > 0) {
                        $statValue = '1.0' . $statValue;
                    } elseif ($statMode == '%' && $statValue > 9 && $statValue > 0) {
                        $statValue = '1.' . $statValue;
                    }

                    if ($mode == 'sub' && $statValue < 0) {
                        $statValue = $statValue * -1;
                    }

                    $stats['for'][$mode][] = [
                        '_attributes' => [
                            'stat' => $statName,
                            'val' => $statValue,
                        ],
                    ];
                }

                $result['skill'][] = array_merge([
                    '_attributes' => [
                        'id' => $id - 1,
                        'levels' => '1',
                        'name' => $gradeName . " Mode: $level",
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
                        ],
                    ],
                ], $stats);
            }
        }
        return response(ArrayToXml::convert($result, [
            'rootElementName' => 'list'
        ]), 200, [
            'Content-Type' => 'application/xml'
        ]);
    }

    public final function csvToArrayStatsSetDescription()
    {
        //$grades = array_reverse(array_chunk(array_map('str_getcsv', file('../l2j - STAT - ROBE.csv')), 12));
        $grades = array_reverse(array_chunk(array_map('str_getcsv', file('../l2j - STAT - HEAVY.csv')), 15));

        $result = ['skill' => []];

        $id = 5820;
        foreach ($grades as $grade) {
            $grade = collect($grade);
            $gradeName = collect($grade->first())->first();
            $levels = collect($grade->first())->forget([0, 13, 12, 11])->count();
            $grade->forget([0, 1]);

            for ($level = 1; $level <= $levels; $level++) {
                $gradeStat = $grade->values();

                $stats = 'Эффект комплекта^^';
                if ($level == 1) {
                    $stats = 'Комплект может быть распознан, тогда он приобретет дополнительные характеристики.^^^^Эффект комплекта^^';
                }
                $index = 0;
                foreach ($gradeStat as $stat) {
                    $index++;
                    $grade = collect($grade->values());
                    $statName = collect($grade->get($index - 1))->first();
                    $statValue = collect($grade->get($index - 1))->get($level);
                    $statMode = collect($grade->get($index - 1))->last();


                    if ($statValue == 0) continue;

                    if ($statMode == '%' && $statValue > 0) {
                        $mode = '+';
                    } elseif ($statMode == '%' && $statValue < 0) {
                        $mode = '-';
                    } elseif ($statMode == 'int' && $statValue > 0) {
                        $mode = '+';
                    } elseif ($statMode == 'int' && $statValue < 0) {
                        $mode = '-';
                    }

                    if ($statMode == '%') {
                        $statValue = $statValue . '%';
                    }

                    if ($mode == '-' && $statValue < 0) {
                        $statValue = $statValue * -1;
                    }

                    $name = collect([
                        'mAtkSpd' => 'Скор. Маг.',
                        'runSpd' => 'Скорость',
                        'pDef' => 'Физ. Защ.',
                        'mDef' => 'Маг. Защ.',
                        'mAtk' => 'Маг. Атк.',
                        'INT' => 'INT',
                        'WIT' => 'WIT',
                        'MEN' => 'MEN',
                        'regMp' => 'Регенерация MP',
                        'maxMp' => 'Увеличение MP',

                        'pAtkSpd' => 'Скор. Атк.',
                        'pAtk' => 'Физ. Атк.',
                        'STR' => 'STR',
                        'DEX' => 'DEX',
                        'CON' => 'CON',
                        'regCp' => 'Регенерация CP',
                        'maxCp' => 'Увеличение CP',
                        'rEvas' => 'Уклонение',
                        'accCombat' => 'Точность',
                    ]);

                    $stats .= $name->get($statName) . ' ' . $mode . $statValue . "^^";

                }

                $result['skill'][] = $stats;
                if ($statName == 'runSpd'){
                    dd($result);
                }
            }
        }
        return response(ArrayToXml::convert($result, [
            'rootElementName' => 'list'
        ], true, 'UTF-8'), 200, [
            'Content-Type' => 'application/xml;charset=UTF-8',
            'charset' => 'charset=UTF-8'
        ]);
    }
}
