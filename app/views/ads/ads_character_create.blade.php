<!DOCTYPE html>
<html>
<head>
	<title>Character Creation</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/main.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<style>

	body {

    background-image: url("/img/create_character.jpg");
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size:cover;

	}

	h2 {

		color: white;
	}

	.well {
		background-color: #D65930;
	}

	</style>
</head>
<body>
	@include('partials.navbar')
	<div class="container" id="user_creation">
		<h2>Character Creation</h2>
		
		{{ Form::open(array('action' => 'ItemsController@storeCharacter')) }}
		<div class="form-horizontal well" enctype="multipart/form-data">
			<div class="row">
				<div>
					<input id="submit_button" type="submit">
				</div>
			</div>
			
			<div class="row">
				<div class="form-group-inline">
					<label for="name" class="control-label col-sm-2"> Name:</label>
					<div class="col-sm-9">
						<input type="text" id="name" name="name" placeholder="Character Name" class="form-control"><br>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="form-group-inline">
					<label for="realm" name="realm" class="control-label col-sm-2">Realm:</label>
					<div class="col-sm-4">
						<select id="realm" name="realm" class="form-control">
							<option value="">SELECT REALM (below)</option>
							<option value="Aegwynn">Aegwynn</option>
							<option value="Aerie Peak">Aerie Peak</option>
							<option value="Agamaggan">Agamaggan</option>
							<option value="Aggramar">Aggramar</option>
							<option value="Akama">Akama</option>
							<option value="Alexstrasza">Alexstrasza</option>
							<option value="Altar of Storms">Altar of Storms</option>
							<option value="Alterac Mountains">Alterac Mountains</option>
							<option value="Aman'Thul">Aman'Thul</option>
							<option value="Andorhal">Andorhal</option>
							<option value="Anetheron">Anetheron</option>
							<option value="Antonidas">Antonidas</option>
							<option value="Anub'arak">Anub'arak</option>
							<option value="Anvilmar">Anvilmar</option>
							<option value="Arathor">Arathor</option>
							<option value="Archimonde">Archimonde</option>
							<option value="Area 52">Area 52</option>
							<option value="Argent Dawn">Argent Dawn</option>
							<option value="Arthas">Arthas</option>
							<option value="Arygos">Arygos</option>
							<option value="Auchindoun">Auchindoun</option>
							<option value="Azgalor">Azgalor</option>
							<option value="Azjol-Nerub">Azjol-Nerub</option>
							<option value="Azshara">Azshara</option>
							<option value="Azuremyst">Azuremyst</option>
							<option value="Baelgun">Baelgun</option>
							<option value="Balnazzar">Balnazzar</option>
							<option value="Barthilas">Barthilas</option>
							<option value="Black Dragonflight">Black Dragonflight</option>
							<option value="Blackhand">Blackhand</option>
							<option value="Blackrock">Blackrock</option>
							<option value="Blackwater Raiders">Blackwater Raiders</option>
							<option value="Blackwing Lair">Blackwing Lair</option>
							<option value="Blade's Edge">Blade's Edge</option>
							<option value="Bladefist">Bladefist</option>
							<option value="Bleeding Hollow">Bleeding Hollow</option>
							<option value="Blood Furnace">Blood Furnace</option>
							<option value="Bloodhoof">Bloodhoof</option>
							<option value="Bloodscalp">Bloodscalp</option>
							<option value="Bonechewer">Bonechewer</option>
							<option value="Borean Tundra">Borean Tundra</option>
							<option value="Boulderfist">Boulderfist</option>
							<option value="Bronzebeard">Bronzebeard</option>
							<option value="Burning Blade">Burning Blade</option>
							<option value="Burning Legion">Burning Legion</option>
							<option value="Caelestrasz">Caelestrasz</option>
							<option value="Cairne">Cairne</option>
							<option value="Cenarion Circle">Cenarion Circle</option>
							<option value="Cenarius">Cenarius</option>
							<option value="Cho'gall">Cho'gall</option>
							<option value="Chromaggus">Chromaggus</option>
							<option value="Coilfang">Coilfang</option>
							<option value="Crushridge">Crushridge</option>
							<option value="Daggerspine">Daggerspine</option>
							<option value="Dalaran">Dalaran</option>
							<option value="Dalvengyr">Dalvengyr</option>
							<option value="Dark Iron">Dark Iron</option>
							<option value="Darkspear">Darkspear</option>
							<option value="Darrowmere">Darrowmere</option>
							<option value="Dath'Remar">Dath'Remar</option>
							<option value="Dawnbringer">Dawnbringer</option>
							<option value="Deathwing">Deathwing</option>
							<option value="Demon Soul">Demon Soul</option>
							<option value="Dentarg">Dentarg</option>
							<option value="Destromath">Destromath</option>
							<option value="Dethecus">Dethecus</option>
							<option value="Detheroc">Detheroc</option>
							<option value="Doomhammer">Doomhammer</option>
							<option value="Draenor">Draenor</option>
							<option value="Dragonblight">Dragonblight</option>
							<option value="Dragonmaw">Dragonmaw</option>
							<option value="Drak'Tharon">Drak'Tharon</option>
							<option value="Drak'thul">Drak'thul</option>
							<option value="Draka">Draka</option>
							<option value="Drakkari">Drakkari</option>
							<option value="Dreadmaul">Dreadmaul</option>
							<option value="Drenden">Drenden</option>
							<option value="Dunemaul">Dunemaul</option>
							<option value="Durotan">Durotan</option>
							<option value="Duskwood">Duskwood</option>
							<option value="Earthen Ring">Earthen Ring</option>
							<option value="Echo Isles">Echo Isles</option>
							<option value="Eitrigg">Eitrigg</option>
							<option value="Eldre'Thalas">Eldre'Thalas</option>
							<option value="Elune">Elune</option>
							<option value="Emerald Dream">Emerald Dream</option>
							<option value="Eonar">Eonar</option>
							<option value="Eredar">Eredar</option>
							<option value="Executus">Executus</option>
							<option value="Exodar">Exodar</option>
							<option value="Farstriders">Farstriders</option>
							<option value="Farstriders">Farstriders</option>
							<option value="Feathermoon">Feathermoon</option>
							<option value="Fenris">Fenris</option>
							<option value="Firetree">Firetree</option>
							<option value="Fizzcrank">Fizzcrank</option>
							<option value="Frostmane">Frostmane</option>
							<option value="Frostmourne">Frostmourne</option>
							<option value="Frostwolf">Frostwolf</option>
							<option value="Galakrond">Galakrond</option>
							<option value="Garithos">Garithos</option>
							<option value="Garona">Garona</option>
							<option value="Garona">Garona</option>
							<option value="Garrosh">Garrosh</option>
							<option value="Ghostlands">Ghostlands</option>
							<option value="Gilneas">Gilneas</option>
							<option value="Gnomeregan">Gnomeregan</option>
							<option value="Gorefiend">Gorefiend</option>
							<option value="Gorgonnash">Gorgonnash</option>
							<option value="Greymane">Greymane</option>
							<option value="Grizzly Hills">Grizzly Hills</option>
							<option value="Gul'dan">Gul'dan</option>
							<option value="Gundrak">Gundrak</option>
							<option value="Gurubashi">Gurubashi</option>
							<option value="Hakkar">Hakkar</option>
							<option value="Haomarush">Haomarush</option>
							<option value="Hellscream">Hellscream</option>
							<option value="Hydraxis">Hydraxis</option>
							<option value="Hyjal">Hyjal</option>
							<option value="Icecrown">Icecrown</option>
							<option value="Illidan">Illidan</option>
							<option value="Jaedenar">Jaedenar</option>
							<option value="Jubei'Thos">Jubei'Thos</option>
							<option value="Kael'thas">Kael'thas</option>
							<option value="Kalecgos">Kalecgos</option>
							<option value="Kargath">Kargath</option>
							<option value="Kel'Thuzad">Kel'Thuzad</option>
							<option value="Khadgar">Khadgar</option>
							<option value="Khaz Modan">Khaz Modan</option>
							<option value="Khaz'goroth">Khaz'goroth</option>
							<option value="Kil'jaeden">Kil'jaeden</option>
							<option value="Kilrogg">Kilrogg</option>
							<option value="Kirin Tor">Kirin Tor</option>
							<option value="Korgath">Korgath</option>
							<option value="Korialstrasz">Korialstrasz</option>
							<option value="Kul Tiras">Kul Tiras</option>
							<option value="Laughing Skull">Laughing Skull</option>
							<option value="Lethon">Lethon</option>
							<option value="Lightbringer">Lightbringer</option>
							<option value="Lightning's Blade">Lightning's Blade</option>
							<option value="Lightninghoof">Lightninghoof</option>
							<option value="Llane">Llane</option>
							<option value="Lothar">Lothar</option>
							<option value="Madoran">Madoran</option>
							<option value="Maelstrom">Maelstrom</option>
							<option value="Magtheridon">Magtheridon</option>
							<option value="Maiev">Maiev</option>
							<option value="Mal'Ganis">Mal'Ganis</option>
							<option value="Malfurion">Malfurion</option>
							<option value="Malorne">Malorne</option>
							<option value="Malygos">Malygos</option>
							<option value="Mannoroth">Mannoroth</option>
							<option value="Medivh">Medivh</option>
							<option value="Misha">Misha</option>
							<option value="Mok'Nathal">Mok'Nathal</option>
							<option value="Moon Guard">Moon Guard</option>
							<option value="Moonrunner">Moonrunner</option>
							<option value="Mug'thol">Mug'thol</option>
							<option value="Muradin">Muradin</option>
							<option value="Nagrand">Nagrand</option>
							<option value="Nathrezim">Nathrezim</option>
							<option value="Nazgrel">Nazgrel</option>
							<option value="Nazjatar">Nazjatar</option>
							<option value="Ner'zhul">Ner'zhul</option>
							<option value="Nesingwary">Nesingwary</option>
							<option value="Nordrassil">Nordrassil</option>
							<option value="Norgannon">Norgannon</option>
							<option value="Onyxia">Onyxia</option>
							<option value="Perenolde">Perenolde</option>
							<option value="Proudmoore">Proudmoore</option>
							<option value="Quel'Thalas">Quel'Thalas</option>
							<option value="Quel'dorei">Quel'dorei</option>
							<option value="Ragnaros">Ragnaros</option>
							<option value="Ravencrest">Ravencrest</option>
							<option value="Ravenholdt">Ravenholdt</option>
							<option value="Rexxar">Rexxar</option>
							<option value="Rivendare">Rivendare</option>
							<option value="Runetotem">Runetotem</option>
							<option value="Sargeras">Sargeras</option>
							<option value="Saurfang">Saurfang</option>
							<option value="Scarlet Crusade">Scarlet Crusade</option>
							<option value="Scilla">Scilla</option>
							<option value="Sen'jin">Sen'jin</option>
							<option value="Sentinels">Sentinels</option>
							<option value="Shadow Council">Shadow Council</option>
							<option value="Shadowmoon">Shadowmoon</option>
							<option value="Shadowsong">Shadowsong</option>
							<option value="Shandris">Shandris</option>
							<option value="Shattered Halls">Shattered Halls</option>
							<option value="Shattered Hand">Shattered Hand</option>
							<option value="Shu'halo">Shu'halo</option>
							<option value="Silver Hand">Silver Hand</option>
							<option value="Silvermoon">Silvermoon</option>
							<option value="Sisters of Elune">Sisters of Elune</option>
							<option value="Skullcrusher">Skullcrusher</option>
							<option value="Skywall">Skywall</option>
							<option value="Smolderthorn">Smolderthorn</option>
							<option value="Spinebreaker">Spinebreaker</option>
							<option value="Spirestone">Spirestone</option>
							<option value="Staghelm">Staghelm</option>
							<option value="Steamwheedle Cartel">Steamwheedle Cartel</option>
							<option value="Stonemaul">Stonemaul</option>
							<option value="Stormrage">Stormrage</option>
							<option value="Stormreaver">Stormreaver</option>
							<option value="Stormscale">Stormscale</option>
							<option value="Suramar">Suramar</option>
							<option value="Tanaris">Tanaris</option>
							<option value="Terenas">Terenas</option>
							<option value="Terokkar">Terokkar</option>
							<option value="Thaurissan">Thaurissan</option>
							<option value="The Forgotten Coast">The Forgotten Coast</option>
							<option value="The Scryers">The Scryers</option>
							<option value="The Underbog">The Underbog</option>
							<option value="The Venture Co">The Venture Co</option>
							<option value="Thorium Brotherhood">Thorium Brotherhood</option>
							<option value="Thrall">Thrall</option>
							<option value="Thunderhorn">Thunderhorn</option>
							<option value="Thunderlord">Thunderlord</option>
							<option value="Tichondrius">Tichondrius</option>
							<option value="Tortheldrin">Tortheldrin</option>
							<option value="Trollbane">Trollbane</option>
							<option value="Turalyon">Turalyon</option>
							<option value="Twisting Nether">Twisting Nether</option>
							<option value="Uldaman">Uldaman</option>
							<option value="Uldum">Uldum</option>
							<option value="Undermine">Undermine</option>
							<option value="Ursin">Ursin</option>
							<option value="Uther">Uther</option>
							<option value="Vashj">Vashj</option>
							<option value="Vek'nilash">Vek'nilash</option>
							<option value="Velen">Velen</option>
							<option value="Warsong">Warsong</option>
							<option value="Whisperwind">Whisperwind</option>
							<option value="Wildhammer">Wildhammer</option>
							<option value="Windrunner">Windrunner</option>
							<option value="Winterhoof">Winterhoof</option>
							<option value="Wyrmrest Accord">Wyrmrest Accord</option>
							<option value="Ysera">Ysera</option>
							<option value="Ysondre">Ysondre</option>
							<option value="Zangarmarsh">Zangarmarsh</option>
							<option value="Zul'jin">Zul'jin</option>
							<option value="Zuluhed">Zuluhed</option>
						</select>
					</div>
					
					<label for="class" class="control-label col-sm-1">Class:</label>
					<div class="col-sm-4">
						<select id="class" name="class" class="form-control">
							<option>SELECT CLASS (below)</option>
							<option value="Warrior">Warrior</option>
							<option value="Paladin">Paladin</option>
							<option value="Hunter">Hunter</option>
							<option value="Rogue">Rogue</option>
							<option value="Priest">Priest</option>
							<option value="Death_Knight">Death Knight</option>
							<option value="Shaman">Shaman</option>
							<option value="Mage">Mage</option>
							<option value="Warlock">Warlock</option>
							<option value="Monk">Monk</option>
							<option value="Druid">Druid</option>
							<option value="Demon_Hunter">Demon Hunter</option>
						</select>
					</div>
				</div>
			</div>
				
			<div class="row">
				<div class="form-group-inline">	
					<label for="race" class="control-label col-sm-2">Race:</label>
					<div class="col-sm-4">
						<select id="race" name="race" class="form-control">
							<option>SELECT RACE (below)</option>
							<option value="Pandaren">Pandaren</option>
							<option value="Worgen">Worgen</option>
							<option value="Draenei">Draenei</option>
							<option value="Dwarf">Dwarf</option>
							<option value="Gnome">Gnome</option>
							<option value="Guman">Human</option>
							<option value="Night_Elf">Night Elf</option>
							<option value="Goblin">Goblin</option>
							<option value="Blood_Elf">Blood Elf</option>
							<option value="Orc">Orc</option>
							<option value="Tauren">Tauren</option>
							<option value="Troll">Troll</option>
							<option value="Undead">Undead</option>
						</select>
					</div>
				</div>
			</div>	
			<div class="form-group">
				<div class="col-sm-6">
				    <label for="character_image">Character Image Upload</label>
				    <input type="file" id="character_image" name="file">
				    <!-- <p class="help-block">Upload Image of Character Here</p> -->
				</div>
			</div>
		</form>
	</div>
	{{ Form::close()}}
	@include('partials.footer')
</body>
</html>
