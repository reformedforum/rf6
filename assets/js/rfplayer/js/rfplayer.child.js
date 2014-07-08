var jpPlayTime = $("#jplayer_play_time");
var jpTotalTime = $("#jplayer_total_time");
var currentlyPlaying = null;
var disablePlaylist = false;

function initPlayer() {
	$("#jquery_jplayer").jPlayer({
		ready: function() {
			$.jPlayer.timeFormat.showHour = true;
			poll();
		},
		swfPath: 'scripts/rfplayer/jplayer'
	})
	.jPlayer("onProgressChange", function(loadPercent, playedPercentRelative, playedPercentAbsolute, playedTime, totalTime) {
		$('#jplayer_play_time').html($.jPlayer.convertTime(playedTime));
		$('#jplayer_total_time').html($.jPlayer.convertTime(totalTime));
	})
	.jPlayer("onSoundComplete", function() {
		playlistNext();
	});

	$("#jplayer_previous").click( function() {
		playlistPrev();
		return false;
	});

	$("#jplayer_next").click( function() {
		playlistNext();
		return false;
	});
	
	$('#jplayer_ul_playlist').sortable({
		start: function(event, ui) {
			disablePlaylist = true;
		},
	    update: function(event, ui) {
			setTimeout('disablePlaylist = false', 100);
	    }
	});
	
	window.onunload = unloadPlayer;
}

function unloadPlayer() {
	$.cookie("rfplayer.rfwindow", 'closed', { path:'/' });
}

function poll() {
	var mode = $.cookie("rfplayer.mode");
	if (mode != null) {
		var name = $.cookie("rfplayer.name");
		var fileUrl = $.cookie("rfplayer.fileUrl");
		
		if (mode == 'play')
			playFile(name, fileUrl);
		else if (mode == 'add')
			addPlaylistItem(name, fileUrl);
			
		this.focus();
		$.cookie("rfplayer.mode", null, { path:'/' });
		$.cookie("rfplayer.name", null, { path:'/' });
		$.cookie("rfplayer.fileUrl", null, { path:'/' });
	}
	setTimeout('poll()', 500);
}

function playFile(name, fileUrl) {
	var playlist = getPlaylist();
	if (playlist!= null && playlist.length > 0) {
		var sPlaylist = getStructuredPlaylist();
		clearPlaylist();
		addPlaylistItem(name, fileUrl);
		for (var x = 0; x < sPlaylist.length; x++) {
			addPlaylistItem(sPlaylist[x].attr('name'), sPlaylist[x].attr('mp3'), false);
		}
	} else {
		addPlaylistItem(name, fileUrl);
	}
	
	playlistChange(0);
}

function addPlaylistItem(name, fileUrl, animate) {
	if (animate == null)
		animate = true;
		
	var length = getPlaylistLength();
	$("#jplayer_playlist ul").append("<li id='playlist_item_" + length + "'>" + name + " <div class='delete'><a href='javascript:;' onclick='removePlaylistItem(" + length + ")' title='Remove'><img src='scripts/rfplayer/images/close-icon.png' /></a></div></li>");
	$("#playlist_item_" + length).attr("name", name).attr("mp3", fileUrl).click(function() {
		if (!disablePlaylist) {
			var id = $(this).attr('id');
			if (currentlyPlaying != id) {
				playlistChange(
					getPlaylistIndex(id)
				);
			}
		}
	});
	
	if (animate == true)
		$("#playlist_item_" + length).effect('pulsate', { times:2 }, 100);
}

function getStructuredPlaylist() {
	var playlist = [];
	var tPlaylist = getPlaylist();
	var length = tPlaylist.length;
	for (var x = 0; x < length; x++) {
		var item = $('#playlist_item_' + x);
		playlist.push(item);
	}
	return playlist;
}

function removePlaylistItem(id) {
	if (confirm('Are you sure you want to remove this item from the playlist?')) {
		if (getCurrentlyPlayingIndex() == id) {
			$("#jquery_jplayer").jPlayer("stop");
			$("#jquery_jplayer").jPlayer("clearFile");
		}
		
		$('#playlist_item_' + id).remove();
	}
	return false;
}

function clearPlaylist() {
	$("#jplayer_playlist ul").empty();
}

function playlistConfig(index) {
	if (currentlyPlaying)
		$("#" + currentlyPlaying).removeClass("jplayer_playlist_current");
	
	var playlist = getPlaylist();
	$("#jquery_jplayer").jPlayer("setFile", $('#' + playlist[index]).attr("mp3"));
	currentlyPlaying = playlist[index];
	$("#" + currentlyPlaying).addClass("jplayer_playlist_current");
}

function playlistChange(index) {
	playlistConfig(index);
	$("#jquery_jplayer").jPlayer("play");
}

function playlistNext() {
	var currentIndex = getCurrentlyPlayingIndex();
	var newIndex = (currentIndex + 1 < getPlaylistLength() ? currentIndex + 1 : 0);
	playlistChange(newIndex);
}

function playlistPrev() {
	var currentIndex = getCurrentlyPlayingIndex();
	var newIndex = (currentIndex - 1 >= 0 ? currentIndex - 1 : getPlaylistLength() - 1);
	playlistChange(newIndex);
}

function getPlaylistLength() {
	var playlist = getPlaylist();
	return (playlist ? playlist.length : 0);
}

function getCurrentlyPlayingIndex() {
	var playlist = $('#jplayer_ul_playlist').sortable('toArray');
	for (var x = 0; x < playlist.length; x++) {
		if (playlist[x] == currentlyPlaying) {
			return x;
		}
	}
	
	return null;
}

function getPlaylist() {
	return $('#jplayer_ul_playlist').sortable('toArray');
}

function getPlaylistIndex(id) {
	var playlist = getPlaylist();
	for (var x = 0; x < playlist.length; x++) {
		if (playlist[x] == id) {
			return x;
		}
	}
	
	return null;
}

/**
 * Cookie plugin
 *
 * Copyright (c) 2006 Klaus Hartl (stilbuero.de)
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 *
 */

/**
 * Create a cookie with the given name and value and other optional parameters.
 *
 * @example $.cookie('the_cookie', 'the_value');
 * @desc Set the value of a cookie.
 * @example $.cookie('the_cookie', 'the_value', { expires: 7, path: '/', domain: 'jquery.com', secure: true });
 * @desc Create a cookie with all available options.
 * @example $.cookie('the_cookie', 'the_value');
 * @desc Create a session cookie.
 * @example $.cookie('the_cookie', null);
 * @desc Delete a cookie by passing null as value. Keep in mind that you have to use the same path and domain
 *       used when the cookie was set.
 *
 * @param String name The name of the cookie.
 * @param String value The value of the cookie.
 * @param Object options An object literal containing key/value pairs to provide optional cookie attributes.
 * @option Number|Date expires Either an integer specifying the expiration date from now on in days or a Date object.
 *                             If a negative value is specified (e.g. a date in the past), the cookie will be deleted.
 *                             If set to null or omitted, the cookie will be a session cookie and will not be retained
 *                             when the the browser exits.
 * @option String path The value of the path atribute of the cookie (default: path of page that created the cookie).
 * @option String domain The value of the domain attribute of the cookie (default: domain of page that created the cookie).
 * @option Boolean secure If true, the secure attribute of the cookie will be set and the cookie transmission will
 *                        require a secure protocol (like HTTPS).
 * @type undefined
 *
 * @name $.cookie
 * @cat Plugins/Cookie
 * @author Klaus Hartl/klaus.hartl@stilbuero.de
 */

/**
 * Get the value of a cookie with the given name.
 *
 * @example $.cookie('the_cookie');
 * @desc Get the value of a cookie.
 *
 * @param String name The name of the cookie.
 * @return The value of the cookie.
 * @type String
 *
 * @name $.cookie
 * @cat Plugins/Cookie
 * @author Klaus Hartl/klaus.hartl@stilbuero.de
 */
jQuery.cookie = function(name, value, options) {
    if (typeof value != 'undefined') { // name and value given, set cookie
        options = options || {};
        if (value === null) {
            value = '';
            options.expires = -1;
        }
        var expires = '';
        if (options.expires && (typeof options.expires == 'number' || options.expires.toUTCString)) {
            var date;
            if (typeof options.expires == 'number') {
                date = new Date();
                date.setTime(date.getTime() + (options.expires * 24 * 60 * 60 * 1000));
            } else {
                date = options.expires;
            }
            expires = '; expires=' + date.toUTCString(); // use expires attribute, max-age is not supported by IE
        }
        // CAUTION: Needed to parenthesize options.path and options.domain
        // in the following expressions, otherwise they evaluate to undefined
        // in the packed version for some reason...
        var path = options.path ? '; path=' + (options.path) : '';
        var domain = options.domain ? '; domain=' + (options.domain) : '';
        var secure = options.secure ? '; secure' : '';
        document.cookie = [name, '=', encodeURIComponent(value), expires, path, domain, secure].join('');
    } else { // only name given, get cookie
        var cookieValue = null;
        if (document.cookie && document.cookie != '') {
            var cookies = document.cookie.split(';');
            for (var i = 0; i < cookies.length; i++) {
                var cookie = jQuery.trim(cookies[i]);
                // Does this cookie string begin with the name we want?
                if (cookie.substring(0, name.length + 1) == (name + '=')) {
                    cookieValue = decodeURIComponent(cookie.substring(name.length + 1));
                    break;
                }
            }
        }
        return cookieValue;
    }
};