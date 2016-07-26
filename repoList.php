<?php
    /*
      THIS FILE IS NOT GUARUNTEED TO BE UP TO DATE
      This file is used internally by the plugin to aggregate all plugins & themes into a single JSON string, passed to the plugin via a JSON request
    */
    
    header("Access-Control-Allow-Origin: https://discordapp.com");

    $repos = Array(
        'plugins' => Array(
            Array(
                'name' => 'Channel Collapse Button',
                'author' => 'IRDeNial',
                'description' => 'Create a button that allows for hiding of channel list',
                'url' => 'https://github.com/IRDeNial/discord-channel-collapse-button/blob/master/channelcollapsebutton.plugin.js'
            ),
            Array(
                'name' => 'Autoplay GIFS',
                'author' => 'Jiiks',
                'description' => 'Automatically play gifs without having to hover',
                'url' => 'https://github.com/Jiiks/BetterDiscordApp/blob/master/Plugins/AutoPlayGifs.plugin.js'
            ),
            Array(
                'name' => 'Custom role colour',
                'author' => 'Jiiks, Pohky',
                'description' => 'Set any colour as role colour',
                'url' => 'https://github.com/Jiiks/BetterDiscordApp/blob/master/Plugins/customRoleColour.plugin.js'
            ),
            Array(
                'name' => 'Media Support',
                'author' => 'Jiiks',
                'description' => 'Add support for html5 media',
                'url' => 'https://github.com/Jiiks/BetterDiscordApp/blob/master/Plugins/mediaSupport.plugin.js'
            ),
            Array(
                'name' => 'Server/Channel Sorter',
                'author' => 'CosmicSalad',
                'description' => 'Drag and Drop to reorder the list of servers and channels',
                'url' => 'https://github.com/cosmicsalad/Discord-Themes-and-Plugins/blob/master/plugins/sorter.plugin.js'
            ),
            Array(
                'name' => 'Avatar hover',
                'author' => 'noVaLue',
                'description' => 'When hovering, show a resized version of the avatar. Use Ctrl / Ctrl+Shift',
                'url' => 'https://github.com/iVEnoVaLue/BetterPlugins/blob/master/plugins/avatar.plugin.js'
            ),
            Array(
                'name' => 'Double click edit',
                'author' => 'Jiiks',
                'description' => 'Double click your messages to edit them - quite hacky',
                'url' => 'https://github.com/Jiiks/BetterDiscordApp/blob/master/Plugins/dblClickEdit.plugin.js'
            ),
            Array(
                'name' => 'Emote Blacklist',
                'author' => 'Jiiks',
                'description' => 'Blacklist emotes you don\'t want to see',
                'url' => 'https://github.com/Jiiks/BetterDiscordApp/blob/master/Plugins/emoteBlacklist.plugin.js'
            ),
            Array(
                'name' => 'Digital Clock',
                'author' => 'Jiiks',
                'description' => 'Add a clock to your client. Use the #clockPluginClock selector to style it yourself',
                'url' => 'https://github.com/Jiiks/BetterDiscordApp/blob/master/Plugins/clock.plugin.js'
            ),
            Array(
                'name' => 'Replyer',
                'author' => 'Hammock',
                'description' => '@ Reply someone with a button',
                'url' => 'https://github.com/cosmicsalad/Discord-Themes-and-Plugins/blob/master/plugins/replyer.plugin.js'
            ),
            Array(
                'name' => 'Quicksave',
                'author' => 'Kosshi',
                'description' => 'Lets you save images fast with a short random name (Or the original if you want to)',
                'url' => 'https://github.com/kosshishub/CompactGuilds-BD-plugin/blob/master/CompactGuilds.plugin.js'
            ),
            Array(
                'name' => 'Fave Emote Sorter',
                'author' => 'Hammock',
                'description' => 'Drag & Drop rearrange your list of favourited emotes',
                'url' => 'https://github.com/cosmicsalad/Discord-Themes-and-Plugins/blob/master/plugins/emoteSorter.plugin.js',
                'https://rawgit.com/cosmicsalad/Discord-Themes-and-Plugins/master/plugins/emoteSorter.plugin.js'
            ),
            Array(
                'name' => 'Switcher Plugin',
                'author' => 'Ciaran',
                'description' => 'Switch channels quickly via the keyboard. Just press ctrl+k',
                'url' => 'https://github.com/ciaran/bd-switcher/blob/master/switcher.plugin.js'
            ),
            Array(
                'name' => 'Direct Media Converter',
                'author' => 'samfun123',
                'description' => 'Tries to convert most direct image links to embedded images.',
                'url' => 'https://github.com/samfun123/script-storage/blob/master/betterdiscord/plugins/directMedia.plugin.js'
            ),
            Array(
                'name' => 'Automatic Link Unshortener',
                'author' => 'samfun123',
                'description' => 'Checks for common link shorteners and converts them to the original link.',
                'url' => 'https://github.com/samfun123/script-storage/blob/master/betterdiscord/plugins/unshortenLinks.plugin.js'
            ),
            Array(
                'name' => 'Better Plugin Repo',
                'author' => 'samfun123',
                'description' => 'A upgraded plugin repository for #plugin-repo. A preview of it here: https://imgur.com/8fAgy1Y Update: Made installation happen automatically.',
                'url' => 'https://github.com/samfun123/script-storage/blob/master/betterdiscord/plugins/betterRepo.plugin.js'
            ),
            Array(
                'name' => 'Copy Code',
                'author' => 'Finicalmist',
                'description' => 'Copies Code from Code Blocks with a Button',
                'url' => 'https://github.com/Finicalmist/CopyCode/blob/master/copyCode.plugin.js'
            )
        ),
        'themes' => Array(
            Array(
                'name' => 'Dark Souls',
                'author' => 'Satan/Mondanzo',
                'description' => '',
                'url' => 'https://github.com/Mondanzo/GameThemes-BetterDiscord/blob/master/dark_souls.theme.css'
            ),
            Array(
                'name' => 'Ponyo',
                'author' => 'uri',
                'description' => '',
                'url' => 'https://github.com/cmpdc/BDTheme-Ponyo/blob/master/Discord_Ponyo.theme.css'
            ),
            Array(
                'name' => 'Simplistic CSS',
                'author' => 'den',
                'description' => 'Dubai Orange',
                'url' => 'https://github.com/denBot/Simplistic-CSS/blob/master/DubaiOrange.theme.css'
            ),
            Array(
                'name' => 'Simplistic CSS',
                'author' => 'den',
                'description' => 'Green Transparent',
                'url' => 'https://github.com/denBot/Simplistic-CSS/blob/master/Green.theme.css'
            ),
            Array(
                'name' => 'Simplistic CSS',
                'author' => 'den',
                'description' => 'Maware Shade',
                'url' => 'https://github.com/denBot/Simplistic-CSS/blob/master/MawaresShade.theme.css'
            ),
            Array(
                'name' => 'Simplistic CSS',
                'author' => 'den',
                'description' => 'Oceanic Blue',
                'url' => 'https://github.com/denBot/Simplistic-CSS/blob/master/OceanicBlue.theme.css'
            ),
            Array(
                'name' => 'Simplistic CSS',
                'author' => 'den',
                'description' => 'Vibrant Pink',
                'url' => 'https://github.com/denBot/Simplistic-CSS/blob/master/Pink.theme.css'
            ),
            Array(
                'name' => 'Simplistic CSS',
                'author' => 'den',
                'description' => 'Simplistic Blue',
                'url' => 'https://github.com/denBot/Simplistic-CSS/blob/master/Simplified-Blue.theme.css'
            ),
            Array(
                'name' => 'Simplistic CSS',
                'author' => 'den',
                'description' => 'Simplistic Green',
                'url' => 'https://github.com/denBot/Simplistic-CSS/blob/master/Simplified-Green.theme.css'
            ),
            Array(
                'name' => 'OriginalModern',
                'author' => 'mat3',
                'description' => '',
                'url' => 'https://github.com/mathiaslsn/OriginalModern/blob/master/mat.theme.css'
            ),
            Array(
                'name' => 'IOS Switches',
                'author' => 'mat3',
                'description' => 'Use IOS switches instead of checkboxes',
                'url' => 'https://github.com/BeardDesign1/Ios-switches/blob/themes/IOS_Switches.theme.css'
            ),
            Array(
                'name' => 'Cyan Firewatch',
                'author' => 'den',
                'description' => '',
                'url' => 'https://github.com/denBot/Cyan-Firewatch/blob/master/cyan-firewatch.theme.css'
            ),
            Array(
                'name' => 'Modal Animations',
                'author' => 'BeardDesign',
                'description' => 'Animation 1',
                'url' => 'https://github.com/BeardDesign1/discord-modal-animations/blob/themes/modal-anim-1.theme.css'
            ),
            Array(
                'name' => 'Modal Animations',
                'author' => 'BeardDesign',
                'description' => 'Animation 2',
                'url' => 'https://github.com/BeardDesign1/discord-modal-animations/blob/themes/modal-anim-2.theme.css'
            ),
            Array(
                'name' => 'Modal Animations',
                'author' => 'BeardDesign',
                'description' => 'Animation 3',
                'url' => 'https://github.com/BeardDesign1/discord-modal-animations/blob/themes/modal-anim-3.theme.css'
            ),
            Array(
                'name' => 'Modal Animations',
                'author' => 'BeardDesign',
                'description' => 'Animation 4',
                'url' => 'https://github.com/BeardDesign1/discord-modal-animations/blob/themes/modal-anim-4.theme.css'
            ),
            Array(
                'name' => 'Modal Animations',
                'author' => 'BeardDesign',
                'description' => 'Animation 5',
                'url' => 'https://github.com/BeardDesign1/discord-modal-animations/blob/themes/modal-anim-5.theme.css'
            ),
            Array(
                'name' => 'Modal Animations',
                'author' => 'BeardDesign',
                'description' => 'Animation 6',
                'url' => 'https://github.com/BeardDesign1/discord-modal-animations/blob/themes/modal-anim-6.theme.css'
            ),
            Array(
                'name' => 'Modal Animations',
                'author' => 'BeardDesign',
                'description' => 'Animation 7',
                'url' => 'https://github.com/BeardDesign1/discord-modal-animations/blob/themes/modal-anim-7.theme.css'
            ),
            Array(
                'name' => 'Modal Animations',
                'author' => 'BeardDesign',
                'description' => 'Animation 8',
                'url' => 'https://github.com/BeardDesign1/discord-modal-animations/blob/themes/modal-anim-8.theme.css'
            ),
            Array(
                'name' => 'Material Design Switches',
                'author' => 'BeardDesign',
                'description' => 'Material design switches instead of checkboxes',
                'url' => 'https://github.com/BeardDesign1/Material-design-switches/blob/themes/Material_Switches.theme.css'
            ),
            Array(
                'name' => 'MaterialCord',
                'author' => 'BlenderMachine',
                'description' => '',
                'url' => 'https://github.com/gustarrini/MaterialCord/blob/master/materialcord.theme.css'
            ),
            Array(
                'name' => 'Modern N\' Cozy',
                'author' => 'Narugokyu',
                'description' => '',
                'url' => 'https://github.com/Narugokyu/modern-n-cozy/blob/master/modern-n-cozy.theme.css'
            ),
            Array(
                'name' => 'Small Members Tab',
                'author' => 'BeartDesign',
                'description' => '',
                'url' => 'https://github.com/BeardDesign1/small-members-tab/blob/themes/small-members-tab.theme.css'
            ),
            Array(
                'name' => 'Discord ReBorn',
                'author' => 'Zerthox',
                'description' => 'Amber',
                'url' => 'https://github.com/Zerthox/DiscordReBorn/blob/master/DiscordReBorn_Amber.theme.css'
            ),
            Array(
                'name' => 'Discord ReBorn',
                'author' => 'Zerthox',
                'description' => 'Amethyst',
                'url' => 'https://github.com/Zerthox/DiscordReBorn/blob/master/DiscordReBorn_Amethyst.theme.css'
            ),
            Array(
                'name' => 'Discord ReBorn',
                'author' => 'Zerthox',
                'description' => 'Emerald',
                'url' => 'https://github.com/Zerthox/DiscordReBorn/blob/master/DiscordReBorn_Emerald.theme.css'
            ),
            Array(
                'name' => 'Discord ReBorn',
                'author' => 'Zerthox',
                'description' => 'Remove Shadows',
                'url' => 'https://github.com/Zerthox/DiscordReBorn/blob/master/DiscordReBorn_Remove_Shadows.theme.css'
            ),
            Array(
                'name' => 'Discord ReBorn',
                'author' => 'Zerthox',
                'description' => 'Ruby',
                'url' => 'https://github.com/Zerthox/DiscordReBorn/blob/master/DiscordReBorn_Ruby.theme.css'
            ),
            Array(
                'name' => 'Discord ReBorn',
                'author' => 'Zerthox',
                'description' => 'Sapphire',
                'url' => 'https://github.com/Zerthox/DiscordReBorn/blob/master/DiscordReBorn_Sapphire.theme.css'
            ),
            Array(
                'name' => 'Akame',
                'author' => 'llcoll',
                'description' => '',
                'url' => 'https://github.com/llcoll/Discord-Themes/blob/master/Themes/Akame/Akame.theme.css'
            ),
            Array(
                'name' => 'Overwatch',
                'author' => 'Matt',
                'description' => '',
                'url' => 'https://github.com/Matthaz/Overwatch_theme/blob/master/Overwatch.theme.css'
            ),
            Array(
                'name' => 'Shiny Octo Waffle',
                'author' => 'Kappa123',
                'description' => '',
                'url' => 'https://github.com/PepeLUL/Shiny-Octo-Waffle-Theme/blob/master/Shiny.theme.css'
            ),
            Array(
                'name' => 'Material Design',
                'author' => 'BeardDesign',
                'description' => 'http://www.beard-design.com/discord-material-theme.html',
                'url' => 'https://github.com/BeardDesign1/Material-design-theme/blob/themes/Beard\'s-Material-theme-for-Discord.theme.css'
            ),
            Array(
                'name' => 'Esdeath',
                'author' => 'llcoll',
                'description' => '',
                'url' => 'https://github.com/llcoll/Discord-Themes/blob/master/Themes/Esdeath/Esdeath.theme.css'
            ),
            Array(
                'name' => 'Space Nova',
                'author' => 'Narugokyu',
                'description' => '',
                'url' => 'https://github.com/Narugokyu/nova-theme/blob/master/space_nova.theme.css'
            ),
            Array(
                'name' => 'Re:Zero',
                'author' => 'TimcanpyCC',
                'description' => '',
                'url' => 'https://github.com/CurimuChizu/CC-Themes/blob/master/CC-Themes/ReZero.theme.css'
            ),
            Array(
                'name' => 'Witcher 3',
                'author' => 'Mitchell',
                'description' => '',
                'url' => 'https://github.com/jadeonking/Witcher-3-Theme-for-Discord/blob/master/Witcher3.theme.css'
            ),
            Array(
                'name' => 'Dat Discord',
                'author' => 'IceCleaver',
                'description' => '',
                'url' => 'https://github.com/Viniuau/Dat-Discord/blob/master/Dat%20Discord.theme.css'
            ),
            Array(
                'name' => 'Full Light',
                'author' => 'maple',
                'description' => '',
                'url' => 'https://github.com/mrmaple240/Full-Light-Theme/blob/master/FullLightTheme.theme.css'
            ),
            Array(
                'name' => 'Red n Black',
                'author' => 'TimcanpyCC',
                'description' => '',
                'url' => 'https://github.com/CurimuChizu/CC-Themes/blob/master/CC-Themes/Red.n.Black.theme.css'
            ),
            Array(
                'name' => 'Shades of Red',
                'author' => 'Prominency',
                'description' => '',
                'url' => 'https://github.com/trueprominency/Shades-of-Red-Theme/blob/master/shades-of-red.theme.css'
            ),
            Array(
                'name' => 'Thin Dark',
                'author' => 'Snazzah',
                'description' => '',
                'url' => 'https://github.com/SnazzyPine25/Better-Discord-Themes/blob/master/Themes/Thin-Dark/ThinDark.theme.css'
            ),
            Array(
                'name' => 'Clear Discord',
                'author' => 'Dddsasul',
                'description' => '',
                'url' => 'https://github.com/Dddsasul/TeamKappa-theme/blob/master/ClearDiscord.theme.css'
            ),
            Array(
                'name' => 'Casual Dark',
                'author' => 'Top Bunk',
                'description' => '',
                'url' => 'https://github.com/Quietess/Casual-Dark/blob/master/CasualDark.css'
            )
        )
    );

    echo(json_encode($repos));
?>
