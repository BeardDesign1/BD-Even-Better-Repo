//META{"name":"evenBetterRepo"}*//
function evenBetterRepo(){};

/* Information */
evenBetterRepo.prototype.getName = function(){
    return 'Even Better Repo';
}
evenBetterRepo.prototype.getDescription = function(){
    return '<br id="evenbetterrepo">A better built display for both the themes & plugins repositories.<br><br>https://github.com/IRDeNial/BD-Even-Better-Repo';
}
evenBetterRepo.prototype.getVersion = function(){
    return '1.0.0';
}
evenBetterRepo.prototype.getAuthor = function(){
    return '<a href="https://github.com/IRDeNial" target="_BLANK">DeNial</a>';
}

/* Internal variables */
evenBetterRepo.repoURL = 'https://md5.xyz/discordrepo/repoList.php';
evenBetterRepo.repoInfo = null;
evenBetterRepo.enabled = false;
evenBetterRepo.pluginPath = process.env.APPDATA + "\\BetterDiscord\\plugins\\";;
evenBetterRepo.themePath = process.env.APPDATA + "\\BetterDiscord\\themes\\";;
evenBetterRepo.intervalContainer1 = null;
evenBetterRepo.intervalContainer2 = null;
evenBetterRepo.intervalContainer3 = null;
evenBetterRepo.ebrCSS = `.bd-psm {
    background-color: #2E3136;
    box-shadow: 0 0 10px 5px transparent;
    border: 1px solid transparent;
	border-radius: 3px;
}
.ebr-container {
    margin-top: 40px;
}
.ebr-container p.name {
    color: #fff;
    font-weight: bold;
    float: left;
    margin: 0;
}
.ebr-container p.description {
    color: #DADADA;
    margin: 0;
    padding: 2px 0;
    font-size: 14px;
}
.ebr-container  p.author {
    color: #fff;
    float: right;
    margin: 0;
}
.ebr-plugin-item,
.ebr-theme-item {
    background-color: #27292D;
    border-radius: 3px;
    padding: 6px;
    margin-bottom: 10px;
}
/* ScrollBar affects rest of Discord :( May want to make it not display but still able to scroll*/
.bd-psm .scroller-wrap .scroller::-webkit-scrollbar-track-piece { 
    background-color: #27292D;
}
.bd-psm .scroller-wrap .scroller::-webkit-scrollbar-thumb, .scroller-wrap .scroller::-webkit-scrollbar-track-piece {
    background-color: #7289da;
    background-clip: padding-box;
    border: 3px solid #2E3136;
    border-radius: 7px;
}

.ebr-top {
    display: -webkit-box;
    display: -ms-flexbox;
    display: box;
    display: flex;
    border-bottom: 1px solid #27292D;
    margin-bottom: 28px;
    flex-shrink: 0;
}

.ebr-top .ebr-tab {
    display: inline-block;
    padding-bottom: 15px;
    margin-bottom: -1px;
    font-size: 14px;
    font-weight: 600;
    color: #A5A5A5;
}
.installed-button {
    float: left;
    border-radius: 3px;
    background-color: #dadada;
    color: #333333;
    cursor:default;
}
.install-button {
    float: left;
    border-radius: 3px;
    background-color: #7289da;
    color: #fff;
}
.view-source-button {
    float: right;
    border-radius: 3px;
    background-color: #7289da;
    color: #ffffff;
}
.float-clear {
    clear: both;
}
#evenbetterrepo {
    display: none !important;
}
.ebr-tab-bar-container {
    position: fixed;
    width: 455px;
    margin-left: 0;
    padding-top: 10px;
    transform: translateY(-10px);
    background-color: #2E3136;
}
.ebr-topbar {
    margin-bottom: 0 !important;
}
`;

/* Internal functions */
evenBetterRepo.prototype.doesFileExist = function(filePath) {
    try{
		require('fs').accessSync(filePath);
		return true;
	} catch(e) {
		return false;
	}
};
evenBetterRepo.prototype.isPluginInstalled = function(url) {
    var pluginName = url.substr(url.lastIndexOf('/') + 1);
    if(evenBetterRepo.prototype.doesFileExist(evenBetterRepo.pluginPath + pluginName)) {
        return 1;
    } else {
        return 0;
    }
};
evenBetterRepo.prototype.isThemeInstalled = function(url) {
    var themeName = url.substr(url.lastIndexOf('/') + 1);
    if(evenBetterRepo.prototype.doesFileExist(evenBetterRepo.themePath + themeName)) {
        return 1;
    } else {
        return 0;
    }
};
evenBetterRepo.prototype.installPlugin = function(url) {
    var pluginName = url.substr(url.lastIndexOf('/') + 1);
    
    if(!evenBetterRepo.prototype.isPluginInstalled(url)) {
        $('.'+pluginName.match(/([a-zA-Z]+)/)[0]+'-installbutton').html('Installing');
        $('.'+pluginName.match(/([a-zA-Z]+)/)[0]+'-installbutton').css('float','left').css('border-radius','3px').css('background-color','#dadada').css('color','#333333').css('cursor','default');

        url = url.replace('https://github.com/','https://rawgit.com/');
        url = url.replace('/blob/','/');
        
        var dest = evenBetterRepo.pluginPath + url.substr(url.lastIndexOf('/') + 1);
        var file = require('fs').createWriteStream(dest);

        require('https').get(url, function(response) {
            response.pipe(file);
            file.on('finish', function() {
                file.close();
                $('.'+pluginName.match(/([a-zA-Z]+)/)[0]+'-installbutton').html('Installed');
                $('.'+pluginName.match(/([a-zA-Z]+)/)[0]+'-installbutton').css('float','left').css('border-radius','3px').css('background-color','#dadada').css('color','#333333').css('cursor','default');
            });
        }).on('error', function(err) {
            console.log(err);
            $('.'+pluginName.match(/([a-zA-Z]+)/)[0]+'-installbutton').html('Install');
            $('.'+pluginName.match(/([a-zA-Z]+)/)[0]+'-installbutton').css('float','left').css('border-radius','3px').css('background-color','#7289da').css('color','#ffffff').css('cursor','pointer');
            require('fs').unlink(dest);
            file.close();
        });
    }
};
evenBetterRepo.prototype.installTheme = function(url) {
    var themeName = url.substr(url.lastIndexOf('/') + 1);
    
    if(!evenBetterRepo.prototype.isThemeInstalled(url)) {
        $('.'+themeName.match(/([a-zA-Z]+)/)[0]+'-installbutton').html('Installing');
        $('.'+themeName.match(/([a-zA-Z]+)/)[0]+'-installbutton').css('float','left').css('border-radius','3px').css('background-color','#dadada').css('color','#333333').css('cursor','default');

        url = url.replace('https://github.com/','https://rawgit.com/');
        url = url.replace('/blob/','/');
        
        var dest = evenBetterRepo.themePath + url.substr(url.lastIndexOf('/') + 1);
        var file = require('fs').createWriteStream(dest);

        require('https').get(url, function(response) {
            response.pipe(file);
            file.on('finish', function() {
                file.close();
                $('.'+themeName.match(/([a-zA-Z]+)/)[0]+'-installbutton').html('Installed');
                $('.'+themeName.match(/([a-zA-Z]+)/)[0]+'-installbutton').css('float','left').css('border-radius','3px').css('background-color','#dadada').css('color','#333333').css('cursor','default');
            });
        }).on('error', function(err) {
            console.log(err);
            $('.'+themeName.match(/([a-zA-Z]+)/)[0]+'-installbutton').html('Install');
            $('.'+themeName.match(/([a-zA-Z]+)/)[0]+'-installbutton').css('float','left').css('border-radius','3px').css('background-color','#7289da').css('color','#ffffff').css('cursor','pointer');
            require('fs').unlink(dest);
            file.close();
        });
    }
};
evenBetterRepo.prototype.populatePlugins = function(container){
    var workArea = $('.'+container);
    workArea.addClass('plugins-listing');
    workArea.html('');
    var content = evenBetterRepo.repoInfo.plugins;
    for(var i = 0;i < content.length;++i) {
        var plugin = content[i];
        var pluginInfo = '<div class="ebr-plugin-item">';
            pluginInfo += '<p class="name">'+plugin.name+'</p>';
            pluginInfo += '<p class="author">'+plugin.author+'</p>';
            pluginInfo += '<div class="float-clear"></div>';
            pluginInfo += '<p class="description">'+plugin.description+'</p>';
            if(evenBetterRepo.prototype.isPluginInstalled(plugin.url)) {
                pluginInfo += '<button class="installed-button">Installed</button>';
            } else {
                pluginInfo += '<button target="_BLANK" onclick="evenBetterRepo.prototype.installPlugin(\''+plugin.url+'\');" class="'+plugin.url.substr(plugin.url.lastIndexOf('/') + 1).match(/([a-zA-Z]+)/)[0]+'-installbutton install-button">Install</button>';
            }
            pluginInfo += '<button  onclick="window.open(\''+plugin.url+'\');" class="view-source-button">View Source</button>';
            pluginInfo += '<div class="float-clear"></div>';
        pluginInfo += '</div>';

        workArea.append(pluginInfo);
    }
};

evenBetterRepo.prototype.populateThemes = function(container){
    var workArea = $('.'+container);
    workArea.addClass('themes-listing');
    workArea.html('');
    var content = evenBetterRepo.repoInfo.themes;
    for(var i = 0;i < content.length;++i) {
        var theme = content[i];
        var themeInfo = '<div class="ebr-theme-item">';
            themeInfo += '<p class="name">'+theme.name+'</p>';
            themeInfo += '<p class="author">'+theme.author+'</p>';
            themeInfo += '<div class="float-clear"></div>';
            themeInfo += '<p class="description">'+theme.description+'</p>';
            if(evenBetterRepo.prototype.isThemeInstalled(theme.url)) {
                themeInfo += '<button  class="installed-button">Installed</button>';
            } else {
                themeInfo += '<button target="_BLANK" onclick="evenBetterRepo.prototype.installTheme(\''+theme.url+'\');" class="'+theme.url.substr(theme.url.lastIndexOf('/') + 1).match(/([a-zA-Z]+)/)[0]+'-installbutton install-button">Install</button>';
            }
            themeInfo += '<button onclick="window.open(\''+theme.url+'\');" class="view-source-button">View Source</button>';
            themeInfo += '<div class="float-clear"></div>';
        themeInfo += '</div>';

        workArea.append(themeInfo);
    }
};
evenBetterRepo.prototype.getRepoInfo = function(){
    $.ajax({
        type: "GET",
        url: evenBetterRepo.repoURL,
        dataType: "json",
        success: function(data) {
            evenBetterRepo.repoInfo = data;
        }
    });
}

/* API hooks */
evenBetterRepo.prototype.load = function(){
    evenBetterRepo.prototype.getRepoInfo();
    
    evenBetterRepo.intervalContainer2 = window.setInterval(function(){
        if($('#evenbetterrepo').length) {
            var evenBetterRepoPlugin = $('#evenbetterrepo').parent().parent().parent().parent();
            evenBetterRepoPlugin.parent().prepend(evenBetterRepoPlugin);
            $('#evenbetterrepo').parent().parent().parent().parent().find('.bda-right .bda-plugin-settings').text('Explore').addClass('ebr-explore-button');

            $('#evenbetterrepo').parent().parent().parent().parent().find('.bda-right .bda-plugin-reload').text('Refresh').addClass('ebr-explore-reload').removeAttr('disabled').click(function(){
                evenBetterRepo.prototype.getRepoInfo();
            });
            
            window.clearInterval(evenBetterRepo.intervalContainer2);
        }
    },150);
    evenBetterRepo.intervalContainer3 = window.setInterval(function(){
        if($('.ebr-container.not-loaded').length) {
            evenBetterRepo.prototype.populatePlugins('ebr-container');
            $('.ebr-container.not-loaded').removeClass('not-loaded');
        }
    },150);

    BdApi.clearCSS("ebr-css");
    
    evenBetterRepo.prototype.enabled = false;
};
evenBetterRepo.prototype.start = function(){
    evenBetterRepo.prototype.enabled = true;

    if(evenBetterRepo.prototype.enabled) {
        evenBetterRepo.intervalContainer1 = window.setInterval(function(){
            if($('.ebr-container').length) {
                evenBetterRepo.prototype.populatePlugins('ebr-container');
                window.clearInterval(evenBetterRepo.intervalContainer1);
            }
        },100);
    }

    BdApi.injectCSS("ebr-css", evenBetterRepo.ebrCSS);
};
evenBetterRepo.prototype.stop = function(){
    evenBetterRepo.prototype.enabled = false;
};
evenBetterRepo.prototype.getSettingsPanel = function () {
    return '<div class="ebr-tab-bar-container"><div class="tab-bar TOP ebr-topbar"><div class="tab-bar-item ebr-tab selected" id="ebr-plugins-tab" onclick="evenBetterRepo.prototype.populatePlugins(\'ebr-container\');$(\'.ebr-tab\').removeClass(\'selected\');$(this).addClass(\'selected\');">Plugins</div><div class="tab-bar-item ebr-tab" id="ebr-themes-tab" onclick="evenBetterRepo.prototype.populateThemes(\'ebr-container\');$(\'.ebr-tab\').removeClass(\'selected\');$(this).addClass(\'selected\');">Themes</div></div></div><div class="ebr-container not-loaded"></div>';
};
