<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormHandBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*** table_form_experience */
        DB::table('table_form_experience')->insert([
            'label' => 'Более 15 лет'
        ]);
        DB::table('table_form_experience')->insert([
            'label' => 'Более 10 лет'
        ]);
        DB::table('table_form_experience')->insert([
            'label' => 'Более 5 лет'
        ]);
        DB::table('table_form_experience')->insert([
            'label' => 'Более 2 года'
        ]);
        DB::table('table_form_experience')->insert([
            'label' => 'Более 1 года'
        ]);
        DB::table('table_form_experience')->insert([
            'label' => 'Менее 1 года'
        ]);
        /*** table_form_experience */


        /*** table_form_profession */
        DB::table('table_form_profession')->insert([
            'label' => 'Dreadnought'
        ]);
        DB::table('table_form_profession')->insert([
            'label' => 'Duelist'
        ]);
        DB::table('table_form_profession')->insert([
            'label' => 'Phoenix Knight'
        ]);
        DB::table('table_form_profession')->insert([
            'label' => 'Hell Knight'
        ]);
        DB::table('table_form_profession')->insert([
            'label' => 'Adventurer'
        ]);
        DB::table('table_form_profession')->insert([
            'label' => 'Sagittarius'
        ]);

        DB::table('table_form_profession')->insert([
            'label' => 'Archmage'
        ]);
        DB::table('table_form_profession')->insert([
            'label' => 'Soultaker'
        ]);
        DB::table('table_form_profession')->insert([
            'label' => 'Arcana Lord'
        ]);
        DB::table('table_form_profession')->insert([
            'label' => 'Cardinal'
        ]);
        DB::table('table_form_profession')->insert([
            'label' => 'Hierophant'
        ]);

        DB::table('table_form_profession')->insert([
            'label' => 'Eva\'s Templar'
        ]);
        DB::table('table_form_profession')->insert([
            'label' => 'Sword Muse'
        ]);
        DB::table('table_form_profession')->insert([
            'label' => 'Wind Rider'
        ]);
        DB::table('table_form_profession')->insert([
            'label' => 'Moonlight Sentinel'
        ]);

        DB::table('table_form_profession')->insert([
            'label' => 'Mystic Muse'
        ]);
        DB::table('table_form_profession')->insert([
            'label' => 'Elemental Master'
        ]);
        DB::table('table_form_profession')->insert([
            'label' => 'Eva\'s Saint'
        ]);

        DB::table('table_form_profession')->insert([
            'label' => 'Shillien Templar'
        ]);
        DB::table('table_form_profession')->insert([
            'label' => 'Spectral Dancer'
        ]);
        DB::table('table_form_profession')->insert([
            'label' => 'Ghost Hunter'
        ]);
        DB::table('table_form_profession')->insert([
            'label' => 'Ghost Sentinel'
        ]);

        DB::table('table_form_profession')->insert([
            'label' => 'Storm Screamer'
        ]);
        DB::table('table_form_profession')->insert([
            'label' => 'Spectral Master'
        ]);
        DB::table('table_form_profession')->insert([
            'label' => 'Shillien Saint'
        ]);

        DB::table('table_form_profession')->insert([
            'label' => 'Titan'
        ]);
        DB::table('table_form_profession')->insert([
            'label' => 'Grand Khavatari'
        ]);

        DB::table('table_form_profession')->insert([
            'label' => 'Dominator'
        ]);
        DB::table('table_form_profession')->insert([
            'label' => 'Doomcryer'
        ]);

        DB::table('table_form_profession')->insert([
            'label' => 'Fortune Seeker'
        ]);
        DB::table('table_form_profession')->insert([
            'label' => 'Maestro'
        ]);
        /*** table_form_profession */


        /*** table_form_town */
        DB::table('table_form_town')->insert([
            'label' => 'Floran Village'
        ]);
        DB::table('table_form_town')->insert([
            'label' => 'Gludin Village'
        ]);
        DB::table('table_form_town')->insert([
            'label' => 'Heine'
        ]);
        DB::table('table_form_town')->insert([
            'label' => 'Hunters Village'
        ]);
        DB::table('table_form_town')->insert([
            'label' => 'Rune Township'
        ]);
        DB::table('table_form_town')->insert([
            'label' => 'Town of Aden'
        ]);
        DB::table('table_form_town')->insert([
            'label' => 'Town of Dion'
        ]);
        DB::table('table_form_town')->insert([
            'label' => 'Town of Giran'
        ]);
        DB::table('table_form_town')->insert([
            'label' => 'Town of Gludio'
        ]);
        DB::table('table_form_town')->insert([
            'label' => 'Town of Goddard'
        ]);
        DB::table('table_form_town')->insert([
            'label' => 'Town of Oren'
        ]);
        DB::table('table_form_town')->insert([
            'label' => 'Town of Schuttgart'
        ]);
        DB::table('table_form_town')->insert([
            'label' => 'Dark Elven Village'
        ]);
        DB::table('table_form_town')->insert([
            'label' => 'Dwarven Village'
        ]);
        DB::table('table_form_town')->insert([
            'label' => 'Elven Village'
        ]);
        DB::table('table_form_town')->insert([
            'label' => 'Orc Village'
        ]);
        DB::table('table_form_town')->insert([
            'label' => 'Talking Island Village'
        ]);
        /*** table_form_town */


        /*** table_form_town */
        DB::table('table_form_location')->insert([
            'label' => 'The Dark Forest'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Elven Forest'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Misty Mountains'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Dragon Valley'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Wasteland'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Fellmere Lake'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'The Ant Nest'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Gludin Arena'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Gludio Castle'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Gludin Harbor'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Langk Lizardmen Dwellings'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Red Rock Ridge'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Maille Lizardmen Barracks'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Windy Hill'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Ruins of Agony'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Forgotten Temple'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Ruins of Despair'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Orc Barracks'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Abandoned Camp'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Elven Ruins'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Cedric\'s Training Hall'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Einhovant\'s School of Magic'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Obelisk of Victory'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Singing Waterfall'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Talking Island Harbor'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Giran Arena'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Giran Castle'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Giran Harbor'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Antharas\' Lair'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Death Pass'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Dion Castle'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Monster Race Track'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Partisan\'s Hideaway'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Execution Grounds'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Cruma Marshlands'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Cruma Tower'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Tanor Canyon'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Bee Hive'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Cave of Trials'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Frozen Waterfalls'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'The Pa\'agrio Temple'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Mithril Mines'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Abandoned Coal Mines'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Strip Mine'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'The Forest of Mirrors'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'The Giant\'s Cave'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Silent Valley'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'The Cemetery'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Narsell Lake'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Forsaken Plains'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'The Forbidden Gateway'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Aden Castle'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Anghel Waterfall'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Tower of Insolence'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Coliseum'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Devastated Castle'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Blazing Swamp'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Ancient Battleground'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Eastern Border Outpost'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Ivory Tower'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Oren Castle'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Plains of the Lizardmen'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'The Enchanted Valley'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Sea of Spores'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Skyshadow Meadow'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Swampland'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'The Shilen Temple'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Altar of Rites'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'School of Dark Arts'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Shadow of the Mother Tree'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Iris Lake'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Elven Fortress'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Starlight Waterfall'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Field of Silence'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Field of Whispers'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Devil\'s Isle'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Alligator Island'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Garden of Eva'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Tour Boat Dock'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Innadril Castle'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Pirate Tunnel'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Oracle of Dawn'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Oracle of Dusk'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Necropolis of Devotion'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Necropolis of Sacrifice'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Catacomb of Dark Omens'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'The Patriot\'s Necropolis'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'The Pilgrim\'s Necropolis'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Catacomb of the Heretic'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Catacomb of the Branded'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Catacomb of the Apostate'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'The Saint\'s Necropolis'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Catacomb of the Forbidden Path'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Necropolis of Martyrdom'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Necropolis of Worship'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Catacomb of the Witch'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'The Disciple\'s Necropolis'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Jail'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Gorgon Flower Garden'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Antharas\' Nest'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Undine Waterfall'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'The Gods\' Falls'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Fields of Massacre'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Immortal Plateau, Northern Region'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Immortal Plateau, Southern Region'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Valley of Heroes'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Frozen Valley'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Western Mining Zone'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Eastern Mining Zone'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Alligator Beach'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Plains of Glory'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'War - Torn Plains'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Breka\'s Stronghold'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Spider Nest'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Black Rock Hill'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Shilen\'s Garden'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Forest of Sacrifice'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Evil Hunting Grounds'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Timak Outpost'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Outlaw Forest'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Hunters Valley'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Forest of Evil'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Ivory Tower Crater'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Plains of Dion'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Floran Agricultural Area'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Dion Hills'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Windawood Manor'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Ol Mahum Checkpoint'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Fellmere Harvesting Grounds'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'The Ruined Bend'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Windmill Hill'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Talking Island, Western Territory'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Talking Island, Eastern Territory'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Monster Track Arena'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Goddard Castle'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Garden of Beasts'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Hot Springs'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Forge of the Gods, Upper Level'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Forge of the Gods, Lower Level'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Hall of Flames'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Valakas\' Lair'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Ketra Orc Outpost'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Imperial Tomb'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Pilgrim\'s Temple'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Sepulcher of Conquerors'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Sepulcher of Rulers'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Sepulcher of Great Sages'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Sepulcher of Judges'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Four Sepulchers'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Wall of Argos'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Shrine of Loyalty'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Varka Silenos Barracks'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Rune Harbor'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Windtail Waterfall'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Beast Farm'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Valley of Saints'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Forest of the Dead'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Swamp of Screams'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Devil\'s Pass'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Dimensional Rift'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Ant Incubator'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Cursed Village'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Olympiad Stadium'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Varka Silenos Village'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Ketra Orc Village'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Hardin\'s Academy'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Rune Castle'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'The Pagan Temple'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Stakato Nest'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Monastery of Silence'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'The Last Imperial Tomb'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Rainbow Springs Chateau'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Wild Beast Reserve'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Fortress of the Dead'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Schuttgart Castle'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Valley of the Lords'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Mining Zone Passage'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Plunderous Plains'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Frozen Labyrinth'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'The Ice Queen\'s Castle'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Pavel Ruins'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Caron\'s Dungeon'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Den of Evil'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Crypts of Disgrace'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Archaic Laboratory'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Frost Lake'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Sky Wagon Relic'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Grave Robber Hideout'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Railroad Station'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Ice Merchant Cabin'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Brigand Stronghold'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Fortress of Resistance'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Western Border Outpost'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'The Immortal Plateau'
        ]);
        DB::table('table_form_location')->insert([
            'label' => 'Spine Mountains'
        ]);
        /*** table_form_town */
    }
}
