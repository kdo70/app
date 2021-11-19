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
        /*** form_experience */
        DB::table('form_experiences')->insert([
            'label' => 'Более 15 лет'
        ]);
        DB::table('form_experiences')->insert([
            'label' => 'Более 10 лет'
        ]);
        DB::table('form_experiences')->insert([
            'label' => 'Более 5 лет'
        ]);
        DB::table('form_experiences')->insert([
            'label' => 'Более 2 лет'
        ]);
        DB::table('form_experiences')->insert([
            'label' => 'Более 1 года'
        ]);
        DB::table('form_experiences')->insert([
            'label' => 'Менее 1 года'
        ]);
        /*** form_experience */


        /*** form_profession */
        DB::table('form_professions')->insert([
            'label' => 'Dreadnought'
        ]);
        DB::table('form_professions')->insert([
            'label' => 'Duelist'
        ]);
        DB::table('form_professions')->insert([
            'label' => 'Phoenix Knight'
        ]);
        DB::table('form_professions')->insert([
            'label' => 'Hell Knight'
        ]);
        DB::table('form_professions')->insert([
            'label' => 'Adventurer'
        ]);
        DB::table('form_professions')->insert([
            'label' => 'Sagittarius'
        ]);

        DB::table('form_professions')->insert([
            'label' => 'Archmage'
        ]);
        DB::table('form_professions')->insert([
            'label' => 'Soultaker'
        ]);
        DB::table('form_professions')->insert([
            'label' => 'Arcana Lord'
        ]);
        DB::table('form_professions')->insert([
            'label' => 'Cardinal'
        ]);
        DB::table('form_professions')->insert([
            'label' => 'Hierophant'
        ]);

        DB::table('form_professions')->insert([
            'label' => 'Eva\'s Templar'
        ]);
        DB::table('form_professions')->insert([
            'label' => 'Sword Muse'
        ]);
        DB::table('form_professions')->insert([
            'label' => 'Wind Rider'
        ]);
        DB::table('form_professions')->insert([
            'label' => 'Moonlight Sentinel'
        ]);

        DB::table('form_professions')->insert([
            'label' => 'Mystic Muse'
        ]);
        DB::table('form_professions')->insert([
            'label' => 'Elemental Master'
        ]);
        DB::table('form_professions')->insert([
            'label' => 'Eva\'s Saint'
        ]);

        DB::table('form_professions')->insert([
            'label' => 'Shillien Templar'
        ]);
        DB::table('form_professions')->insert([
            'label' => 'Spectral Dancer'
        ]);
        DB::table('form_professions')->insert([
            'label' => 'Ghost Hunter'
        ]);
        DB::table('form_professions')->insert([
            'label' => 'Ghost Sentinel'
        ]);

        DB::table('form_professions')->insert([
            'label' => 'Storm Screamer'
        ]);
        DB::table('form_professions')->insert([
            'label' => 'Spectral Master'
        ]);
        DB::table('form_professions')->insert([
            'label' => 'Shillien Saint'
        ]);

        DB::table('form_professions')->insert([
            'label' => 'Titan'
        ]);
        DB::table('form_professions')->insert([
            'label' => 'Grand Khavatari'
        ]);

        DB::table('form_professions')->insert([
            'label' => 'Dominator'
        ]);
        DB::table('form_professions')->insert([
            'label' => 'Doomcryer'
        ]);

        DB::table('form_professions')->insert([
            'label' => 'Fortune Seeker'
        ]);
        DB::table('form_professions')->insert([
            'label' => 'Maestro'
        ]);
        /*** form_profession */


        /*** form_town */
        DB::table('form_towns')->insert([
            'label' => 'Floran Village'
        ]);
        DB::table('form_towns')->insert([
            'label' => 'Gludin Village'
        ]);
        DB::table('form_towns')->insert([
            'label' => 'Heine'
        ]);
        DB::table('form_towns')->insert([
            'label' => 'Hunters Village'
        ]);
        DB::table('form_towns')->insert([
            'label' => 'Rune Township'
        ]);
        DB::table('form_towns')->insert([
            'label' => 'Town of Aden'
        ]);
        DB::table('form_towns')->insert([
            'label' => 'Town of Dion'
        ]);
        DB::table('form_towns')->insert([
            'label' => 'Town of Giran'
        ]);
        DB::table('form_towns')->insert([
            'label' => 'Town of Gludio'
        ]);
        DB::table('form_towns')->insert([
            'label' => 'Town of Goddard'
        ]);
        DB::table('form_towns')->insert([
            'label' => 'Town of Oren'
        ]);
        DB::table('form_towns')->insert([
            'label' => 'Town of Schuttgart'
        ]);
        DB::table('form_towns')->insert([
            'label' => 'Dark Elven Village'
        ]);
        DB::table('form_towns')->insert([
            'label' => 'Dwarven Village'
        ]);
        DB::table('form_towns')->insert([
            'label' => 'Elven Village'
        ]);
        DB::table('form_towns')->insert([
            'label' => 'Orc Village'
        ]);
        DB::table('form_towns')->insert([
            'label' => 'Talking Island Village'
        ]);
        /*** form_town */


        /*** form_town */
        DB::table('form_locations')->insert([
            'label' => 'The Dark Forest'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Elven Forest'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Misty Mountains'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Dragon Valley'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Wasteland'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Fellmere Lake'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'The Ant Nest'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Gludin Arena'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Gludio Castle'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Gludin Harbor'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Langk Lizardmen Dwellings'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Red Rock Ridge'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Maille Lizardmen Barracks'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Windy Hill'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Ruins of Agony'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Forgotten Temple'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Ruins of Despair'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Orc Barracks'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Abandoned Camp'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Elven Ruins'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Cedric\'s Training Hall'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Einhovant\'s School of Magic'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Obelisk of Victory'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Singing Waterfall'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Talking Island Harbor'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Giran Arena'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Giran Castle'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Giran Harbor'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Antharas\' Lair'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Death Pass'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Dion Castle'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Monster Race Track'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Partisan\'s Hideaway'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Execution Grounds'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Cruma Marshlands'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Cruma Tower'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Tanor Canyon'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Bee Hive'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Cave of Trials'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Frozen Waterfalls'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'The Pa\'agrio Temple'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Mithril Mines'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Abandoned Coal Mines'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Strip Mine'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'The Forest of Mirrors'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'The Giant\'s Cave'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Silent Valley'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'The Cemetery'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Narsell Lake'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Forsaken Plains'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'The Forbidden Gateway'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Aden Castle'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Anghel Waterfall'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Tower of Insolence'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Coliseum'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Devastated Castle'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Blazing Swamp'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Ancient Battleground'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Eastern Border Outpost'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Ivory Tower'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Oren Castle'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Plains of the Lizardmen'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'The Enchanted Valley'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Sea of Spores'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Skyshadow Meadow'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Swampland'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'The Shilen Temple'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Altar of Rites'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'School of Dark Arts'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Shadow of the Mother Tree'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Iris Lake'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Elven Fortress'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Starlight Waterfall'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Field of Silence'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Field of Whispers'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Devil\'s Isle'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Alligator Island'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Garden of Eva'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Tour Boat Dock'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Innadril Castle'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Pirate Tunnel'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Oracle of Dawn'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Oracle of Dusk'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Necropolis of Devotion'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Necropolis of Sacrifice'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Catacomb of Dark Omens'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'The Patriot\'s Necropolis'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'The Pilgrim\'s Necropolis'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Catacomb of the Heretic'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Catacomb of the Branded'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Catacomb of the Apostate'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'The Saint\'s Necropolis'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Catacomb of the Forbidden Path'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Necropolis of Martyrdom'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Necropolis of Worship'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Catacomb of the Witch'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'The Disciple\'s Necropolis'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Jail'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Gorgon Flower Garden'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Antharas\' Nest'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Undine Waterfall'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'The Gods\' Falls'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Fields of Massacre'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Immortal Plateau, Northern Region'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Immortal Plateau, Southern Region'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Valley of Heroes'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Frozen Valley'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Western Mining Zone'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Eastern Mining Zone'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Alligator Beach'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Plains of Glory'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'War - Torn Plains'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Breka\'s Stronghold'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Spider Nest'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Black Rock Hill'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Shilen\'s Garden'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Forest of Sacrifice'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Evil Hunting Grounds'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Timak Outpost'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Outlaw Forest'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Hunters Valley'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Forest of Evil'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Ivory Tower Crater'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Plains of Dion'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Floran Agricultural Area'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Dion Hills'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Windawood Manor'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Ol Mahum Checkpoint'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Fellmere Harvesting Grounds'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'The Ruined Bend'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Windmill Hill'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Talking Island, Western Territory'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Talking Island, Eastern Territory'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Monster Track Arena'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Goddard Castle'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Garden of Beasts'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Hot Springs'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Forge of the Gods, Upper Level'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Forge of the Gods, Lower Level'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Hall of Flames'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Valakas\' Lair'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Ketra Orc Outpost'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Imperial Tomb'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Pilgrim\'s Temple'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Sepulcher of Conquerors'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Sepulcher of Rulers'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Sepulcher of Great Sages'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Sepulcher of Judges'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Four Sepulchers'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Wall of Argos'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Shrine of Loyalty'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Varka Silenos Barracks'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Rune Harbor'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Windtail Waterfall'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Beast Farm'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Valley of Saints'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Forest of the Dead'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Swamp of Screams'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Devil\'s Pass'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Dimensional Rift'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Ant Incubator'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Cursed Village'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Olympiad Stadium'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Varka Silenos Village'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Ketra Orc Village'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Hardin\'s Academy'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Rune Castle'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'The Pagan Temple'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Stakato Nest'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Monastery of Silence'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'The Last Imperial Tomb'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Rainbow Springs Chateau'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Wild Beast Reserve'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Fortress of the Dead'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Schuttgart Castle'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Valley of the Lords'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Mining Zone Passage'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Plunderous Plains'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Frozen Labyrinth'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'The Ice Queen\'s Castle'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Pavel Ruins'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Caron\'s Dungeon'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Den of Evil'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Crypts of Disgrace'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Archaic Laboratory'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Frost Lake'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Sky Wagon Relic'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Grave Robber Hideout'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Railroad Station'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Ice Merchant Cabin'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Brigand Stronghold'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Fortress of Resistance'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Western Border Outpost'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'The Immortal Plateau'
        ]);
        DB::table('form_locations')->insert([
            'label' => 'Spine Mountains'
        ]);
        /*** form_town */

        /*** form_town */
        DB::table('form_styles')->insert([
            'label' => 'PVE'
        ]);
        DB::table('form_styles')->insert([
            'label' => 'PVP'
        ]);
        /*** form_style */

        /*** form_pk */
        DB::table('form_pks')->insert([
            'label' => 'Да'
        ]);
        DB::table('form_pks')->insert([
            'label' => 'Нет'
        ]);
        /*** form_pk */

        /*** form_olympiad */
        DB::table('form_olympiads')->insert([
            'label' => 'Да'
        ]);
        DB::table('form_olympiads')->insert([
            'label' => 'Нет'
        ]);
        /*** form_olympiad */

        /*** form_command */
        DB::table('form_commands')->insert([
            'label' => 'Да'
        ]);
        DB::table('form_commands')->insert([
            'label' => 'Нет'
        ]);
        /*** form_command */
    }
}
