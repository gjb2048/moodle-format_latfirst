var toggleBinaryGlobal="10000000000000000000000000000000000000000000000000000";var thesparezeros="00000000000000000000000000";var thewwwroot;var thecookiesubid;var numToggles=0;var currentWeek;var cookieExpires;var ie7OrLess=false;var ie=false;function latfirst_init(e,c,d,b){thewwwroot=e;thecookiesubid=c+d;cookieExpires=b;if(/MSIE (\d+\.\d+);/.test(navigator.userAgent)){var a=new Number(RegExp.$1);ie=true;if(a<=7){ie7OrLess=true}}}function set_current_week(a){currentWeek=a}function togglebinary(c,b){if((c>=1)&&(c<=52)){var e=toggleBinaryGlobal.substring(0,c);var a=toggleBinaryGlobal.substring(c+1);var d=e+b+a;toggleBinaryGlobal=d;save_toggles()}}function toggleexactweek(g,f,d,b){if(document.getElementById){if(ie==true){var a="block"}else{var a="table-row"}if(g.style.display==a){g.style.display="none";var c="hidden";if(ie7OrLess==true){g.className+=" latest_first"}f.style.backgroundImage="url("+thewwwroot+"/course/format/latfirst/arrow_down.png)";if(b==false){togglebinary(d,"0")}}else{g.style.display=a;var c="visible";if(ie7OrLess==true){g.className=g.className.replace(/\b latest_first\b/,"")}f.style.backgroundImage="url("+thewwwroot+"/course/format/latfirst/arrow_up.png)";if(b==false){togglebinary(d,"1")}}if(ie==true){var e=g.getElementsByTagName("embed");if(e[0]!=null){e[0].style.visibility=c}}}}function toggle_week(b,a){if(document.getElementById){imageSwitch=b;targetElement=b.parentNode.parentNode.nextSibling;toggleexactweek(targetElement,imageSwitch,a,false)}}function to2baseString(c){var e=parseInt(c.substring(0,6),36);var b=parseInt(c.substring(6,12),36);var d=e.toString(2);var a=b.toString(2);if(d.length<26){d=thesparezeros.substring(0,(26-d.length))+d}if(a.length<27){a=thesparezeros.substring(0,(27-a.length))+a}return d+a}function to36baseString(b){var e=parseInt(b.substring(0,26),2);var c=parseInt(b.substring(26,53),2);var d=e.toString(36);var a=c.toString(36);if(d.length<6){d=thesparezeros.substring(0,(6-d.length))+d}if(a.length<6){a=thesparezeros.substring(0,(6-a.length))+a}return d+a}function saveweekcollcookie(a){if(cookieExpires==null){YUI().use("cookie",function(b){b.Cookie.setSub("mdl_cf_latfirst",thecookiesubid,a)})}else{YUI().use("cookie",function(c){var b=new Date();b.setTime(b.getTime()+cookieExpires);c.Cookie.setSub("mdl_cf_latfirst",thecookiesubid,a,{expires:b})})}}function reloadToggles(){YUI().use("cookie",function(b){var c=b.Cookie.getSub("mdl_cf_latfirst",thecookiesubid);if(c!=null){toggleBinaryGlobal=to2baseString(c)}for(var a=1;a<=numToggles;a++){if((a<=numToggles)&&((toggleBinaryGlobal.charAt(a)=="1")||(a==currentWeek))){toggleexactweek(document.getElementById("section-"+a),document.getElementById("sectionatag-"+a),a,true)}}})}function reload_toggles(a){numToggles=a;YUI().use("node-base",function(b){b.on("domready",reloadToggles)})}function show_week(a){toggleexactweek(document.getElementById("section-"+a),document.getElementById("sectionatag-"+a),a,true)}function save_toggles(){saveweekcollcookie(to36baseString(toggleBinaryGlobal))}function allToggle(c){var d;var b;if(c==false){if(ie==true){b="block"}else{b="table-row"}}else{b="none"}for(var a=1;a<=numToggles;a++){d=document.getElementById("section-"+a);if(a!=currentWeek){d.style.display=b;toggleexactweek(d,document.getElementById("sectionatag-"+a),a,false)}}}function all_opened(){allToggle(true)}function all_closed(){allToggle(false)};