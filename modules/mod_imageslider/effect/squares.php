<script>
/*
 * jQuery Nivo Slider v2.3 fixed 3
 * http://nivo.dev7studios.com
 *
 * Copyright 2010, Gilbert Pellegrom
 * Free to use and abuse under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Jul 2011 fixed by wowslider.com - support for span instead of link
 * Jan 2011 fixed by wowslider.com - random effect selecting bug
 * Dec 2010 fixed by wowslider.com - added position:absolute to slice elements, added nivoRun external function to manual start
 */
//////////////////////////////////////////////
// Obfuscated by Javascript Obfuscator 4.2  //
// http://javascript-source.com             //
//////////////////////////////////////////////
eval((function(x){var d="";var p=0;while(p<x.length){if(x.charAt(p)!="`")d+=x.charAt(p++);else{var l=x.charCodeAt(p+3)-28;if(l>4)d+=d.substr(d.length-x.charCodeAt(p+1)*96-x.charCodeAt(p+2)+3104-l,l);else d+="`";p+=4}}return d})("(function ($) {var NivoSlider = ` 5&element, options` G#settings = $.extend({}, $.fn.n` b%.defaults` V&;var vars = {current` H!:0, ` )#Image:\"\", total` :!s:0, randAnim` 7!running:false, paused` &$stop` &\"}`!-!s`\"3$$`\"+$);` .\".data(\"nivo:vars\",`!Z!` 6%css(\"position\", \"relative\"` :%addClass` `\"`\"U\"\"`\"D\"kids =`!8#.children();kids.each`$!'`#V#` A!`!f!thi`#+#link = \"\";if (!` >!.is(\"img\")) {if (` ,&a` /!` *\"`!P*-imageLink\");` o#` C!;}`!0$` Q\"find` z!:first\");}`!T%Width` A%width()`!U!` 3(= 0`!=$` C*attr(\"` R!` j)Height` >%h` *!` m(` 9$` o'` E+` u\"` T\"\");}`!E+>`$\"$`!m#) {` $)` A&` P(` }#` T%`!Q$` T&` +#` C');}`$Y#`%|\"display\", \"none\");`!k\"` &3vars.`'s'++;}`\"c\"`)3$.star`(U\" >`\"k!` %5=`'M!` c() {` 60` 7. - 1`$=!s.`)a( =`*Z%` U'`#-\"$(kids[` C-])`'$)` 4(`*L!`'m!` C4;} else` 'L`'20`!A?`(Y\"` *7`$F,block\");}`+)(background\", \"url(\" +`#\\\"`!u(`'-#src\") + \") no-repeat\");for (var i = 0; i <`#p'lices; i++`.q$lice`)&$Math.`!<!(`'i* /` T,`&6\"i =`$m(` 5! - 1`'_&append($(\"<div class=\\`+T\"` K!\\\"></div>\"`# \"{left:`!L'* i + \"px\", `!J!:`!M+-`!y(` B(`.]$:\"absolute\"})`%P&` dz` 5$`!-<`&:!`#:%ca`2R!`\"zB` F#\\\"><p></p`!X+`&H#:`*}\", opacity:` },O` 2\"})`$n\"`&84title\") != \"\"`%w#` /!`*^$` :6` s!` '!.substr(0, 1) == \"#\") {` `$$` @\").html(`-N!\".`\"@( p\",`./#` >#` K\";` 9,` <'fadeIn`#Z&animSpeed);}`0g!timer`(I!`3'!` @%manualAdvance &&`48!.leng`05!1`!t!` U\"setInterval`42*nivoRun`(i#,` ^!,`(J%, false);}` *&.pauseTime`+u#` 0%dire` u!Nav`%Q-`%M/` D(\\\"><a` 1*prev` 4\"Prev</a` 1-next` <\"Next` =!`&;#`0l*` }(Hide`-G!`$)#` 0(`$P(ide();`2g$over`#+*` A<show(`#4!` *I`!1#}`&6\"a` F\"`\"c#` <'live(\"click\"` s+`(;%running) {return`$f\";}clear`%E%`%]!);`%a$\"\"`4E\"`2p)-= 2;`%J<\"prev\"`!v!`!p&`$;#` x~`!u!`!B=nex`3.!`'*,control`'2\"var nivoC` /\"`*R!`,j0` K%`.V'`%i$`'n#` \\'`2D2`)g'`2N$`!B3Thumbs`!X#child =` Y\"eq(i`'k\"!` 3!.is(\"img\")) {` B$` 4\"find` 7!:firs`\"f!` r9FromRel`+!#`\"##`*(&`)@+` W#\\\" rel=\\\"\" +`14\"\\\"><img src` 0#`!I\"`._\"rel\")` A\" alt=\\\"\\\" /></a>\"`2d&` Fwsrc\").replace`\"S6Search`->'` 1,R` \\\"`!q7`!Ed\" + (i + 1`!(!` v%`0|&`!R% a:eq(\" +`2X)`*2\"+ \")`)P'addClass(\"active\"`1k(` f'`)Gcif ($(this).has`!,+`*,M`)3#css(\"background\", \"url(`#:\"`\"W(Image`%6(`#V\") no-repeat\")`-9/= `!l$`'2(- 1`+\\>`#=#`+m0keyboard`+|\"$(window).keypress`11'event`#Y#` '!.keyCode == \"37\"`/\"~`/b>`!F39` xa`/>E`#V-pauseOnHover) {`%l#hover`#W'`.?\"` G#d = true;`!6<}`'q+` U*`\"5\"if ` T\"`\"j!\" && !`!T%manualAdvance) {` t$set`!.%` u)`\"H<`!/!);}`,H'`!K!Time`\"w#`\"[#b`03!nivo:animFinished`*#,`$J(`\"+%$(kids).each`!R*`1N!`(F$`1I(` ,$`)g!display\", \"none`$Q#` U#kids[`&\\-]` _,` .5` r,block`&y$`#z,`$F(`#8~`#7` ,%afterChange.call`#2\";});this`.u!Run =`$<'index, effec`*$`(q9`!$%` M\" =` U# ||`!T&` -\"`-:1`!,!`,|A`\"O#`!8#`(p!};var `!t0` M4nudge`&f\"`/J! =`1F#.data`'>#vars\"`%\"` ?!&&`2K/==` /\"total` .!s - 1) {`\"N%las` G\"`#q)if ((`%i! ||` ^\"stop)`%p!`!X$`#N3before`$a.`'k!` T$`1m:`1dA`1y*} else`%G\"`! !`'q!`/'\"` ;p` z*`.i\"` 4p}`$e-++`%-%`$m=`,j$`'B+0;`$E%`!m!showEnd`%2-` J.< 0` ]3`&50` `\"`,]C`\"i- = ` A6`%(%` )J.f`0#!img:firs`$b%`\"g%controlNav`.R!\"`+}!-` ,& a\",`)H#).removeClass(\"active\");` A1:eq`%/-`#5\"+ \")` i'add` a,`!S+aption`--(`%}/title\") != \"\"`+F#` /!`$C$` :6`4]#tle.substr(0, 1)`'d!#\"`08!` b\"$` @\").html(`!a#`\"T&`!b\"`\"0'`1^)` j\"`1g#`#_(` Q\" p` N'fadeOut`\"Z&animSpeed`4P+`3o$`!L!`!W\";` ,$fadeIn` Q/`1)!`&'$`!+9` k(}`\".7` o8` q3`\")A`*i# i`)!` Z%slice` V'each`4@*var ` A!Width = Math.`,8!`1@#.width() /`2i&` M!s`#8&css({height:\"0px\", opacity:\"0\", `-(&:`,[Q -\" +`2s!`!a$+ i *`!n(-` \"'` Z!px 0%\"});i++;}`'6\"`!x%effect`&D!random`(\"$anims = new Array(\"` s!DownRight\", ` (&Lef` '&Up` 3*Up` 0+` R.` .\"` ?$fol`0-!fade\");`\"|!randAnim =`!U\"[`$;!floor(`$E\"`!z!() * (` =!.leng`\"}!1))]`0(&` `&= undefined`.6$` |'`!9\";}`+N*`#+\".indexOf(\",`+<\"-1`#)+` A,split` J!`!-$.trim`!o\"`!{8`\"*()]);`2S\"running = true`$e5`$B%\" ||`!N,` 4*`$5\" ||`&u\"`#$(` 10` O9`$n!` L;` ?!`.X%meBuff`)z!`)&`)U%s`.0!`* 2`\":>`!\"H` n=._reverse();}` H\"`+<8`0(\"his);` +!`+&\"top:0, bottom:\"`)b!f (i =`%x'`!D#- 1) {setTimeout` {*` o\"animate`+{&100%`+z(1.0\"},` r&`0='\"\"`0=+`-1#trigger(\"nivo:animFinished\"`03\", 100 +`$T%`/:&` ut` 2`%t%+= 50`-($`!E#`%@9Up`'-:`,k$`%a7` 7(` M7`&C<` ;#`'.}` ~H`')~`(#$\"\"`(#%0`')~`')~`')~`'8o`0$>`4W(`%e9`0#C` C\"`&O>`0#Gv`'_f`!*N`'Vw`(*%0`%s%`0P5++`&T&`(j:`#(!}if (v`(-~`(-~`(-~`(q:v`(jAfold`%}3` 6!`'G:`&\"5`%bBvar origWidth =` :\".width(`.e.0px\", `\"~+` H!` 6\"`.Ce` n\"`!P%`$}~`%AZ`!<O`.Egfade`%i4ade`%y$`%?M`%]#`%;!\"`%/\"\", `%1\"`$h=` U$`\"{%`\"Q> * 2`$+W`$L#` bS);}`#f$}`(1!tra`(E!`!B&msg) {if ` }!.console && typeof ` +#.log != \"undefine`)!` 2'` e!;}};` c!stop` {)` ~#!$(element).data`\"S#vars\")` Q!`#b!` %; = true;`\"*!(\"Stop S`#M!\"`!7(art`!00` [dfals`!9'art`!8)`$)&fterLoad.call`,=#};$.fn`'1!` O\"`!])options) {return `\"-!`-(2`!b#`39+` /#`!s'`&M\"\")` l%;}var ` 1& = new N`!J%` j!, `!E$;` [5,` ['`'2\"`\".,.defaults = {`*A\":\"random`)i\"ces:15, `'7%:500, pauseTime:3000, `$p!` n!:0, dire`\"h!Nav:true` %*Hide` 0#ca`\" !` &$ontrol` L&` '&Thumbs:`$w!` &.FromRel` '4Search:\".jpg\"` -.Replace:\"_thumb` ?#keyboard`!D&`\"P!OnHover` ,#manualAdvance`!6%`\"/\"O`*e#0.8, beforeChange:`%_)}, `&e!` %3`$Y!showEnd` ,-las`#o#` ^1Loa` D,`%;#_reverse = [].` &#;})(jQuery);"))// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Last updated: 2011-10-27
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
var ws_slices=function(e,a,g){var f=jQuery;var c;var d;var b=g.children();c=f("<div></div>");g.append(c);c.css({left:(e.outWidth-e.width)/2+"px",top:(e.outHeight-e.height)/2+"px",width:e.width+"px",height:e.height+"px","background-color":"#FFF",position:"absolute"});c.append(b);slider=c.nivoSlider({directionNav:false,keyboardNav:false,controlNav:false,manualAdvance:true,caption:0,effect:"sliceDownRight,sliceDownLeft,sliceUpRight,sliceUpLeft,sliceUpDownRight,sliceUpDownLeft,sliceUpDownRight,sliceUpDownLeft,fold,fold,fold",animSpeed:e.duration});a.css({border:"none"});a.show();b.css({"z-index":3,position:"absolute",left:0,top:0});this.go=function(i,h){var j=c.data("nivoslider").nivoRun(i);if(j){f(a.get(h)).hide();f(a.get(i)).show();return i}else{return -1}}};// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Last updated: 2011-10-27
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
</script>
<?php
echo '
<script>
jQuery("#wowslider-container").wowSlider({effect:"slices",prev:"",next:"",duration:20*'.$effectD.',delay:20*'.$slideD.',outWidth:'.$imgW.',outHeight:'.$imgH.',width:'.$imgW.',height:'.$imgH.',autoPlay:true,stopOnHover:false,loop:false,bullets:true,caption:true,controls:true});
</script>';