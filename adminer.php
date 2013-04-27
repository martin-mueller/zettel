<?php
/** Adminer - Compact database management
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 3.6.4
*/error_reporting(6135);$ic=!ereg('^(unsafe_raw)?$',ini_get("filter.default"));if($ic||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$W){$pg=filter_input_array(constant("INPUT$W"),FILTER_UNSAFE_RAW);if($pg)$$W=$pg;}}if(function_exists("mb_internal_encoding"))mb_internal_encoding("8bit");if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
lzw_decompress("\0\0\0` \0Ñ\0\n @\0¥CÑË\"\0`E„Q∏‡ˇá?¿tvM'îJd¡d\\åb0\0ƒ\"ô¿f”à§Ós5õœÁ—AùXPaJì0Ñ•ë8Ñ#RäT©ëz`à#.©«cÌX√˛»Ä?¿-\0°Im?†.´M∂Ä\0»Ø(Ãâ˝¿/(%å\0");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress("\n1ÃáìŸåﬁl7úáB1Ñ4vb0òÕfsëºÍn2BÃ—±Ÿòﬁn:á#(ºb.\rDc)»»a7EÑë§¬l¶√±îËi1Ãésò¥Á-4ôáf”	»Œi7Ü≥ÈÜÑéåF√©ñ®aç'3I– d´¬!S±Êæ:4Áß+MdÂgØã¨«É°Óˆtô∞cëÜ£ı„È†b{èH(∆ì—ît1…)t⁄}F¶p0ôï8Ë\\82õDL>Ç9`'C°º€ó889§» éxQÿ˛\0Óe4ôÕQ òl¡≠P±øVâ≈bÒëóΩT4≤\\ûW/ôÊÈ’\nêÄ` 7\"hƒqπË4ZM6£T÷\r≠r\\ñ∂C{h€7\r”x67Œ©∫J á2.3êÂ9àKûÎ¢H¢,å!mî∆Üo\$„π.[\r&Ó#\$≤<¡àfÕ)èZ£\0=œr®è9√‹jŒ™J†Ë0´c,|Œ=ë√‚˘ΩÍö°Rs_6£Ñ›∑≠˚Ç·…ÌÄZ6£2Bæp\\-á1s2…“>éÉ X:\r‹∫ñ»3ªbö√ºÕ-8SLı¿Ìº…K.¸¥-‹“•\rH@ml·:¢Îµ;Æ˙˛¶ÓJ£0LR–2¥!Ëø´ÂAÍà∆2§	m˝—Ì0eI¡≠-:U\r¸„9‘ıMWLª0˚πGcJv2(ÎÎF9é`¬<áJÑ7+Àö~†çï}DJµΩHWÕSN÷«Ôe◊u]1Ã•(O‘L–™<l˛“R[u&™ÉH⁄3èvÚÄõ‹Uàt6∑√\$¡6‡ﬂ‡X\"ò<£ª}:Oã‰<3x≈O§8Û>†ÃÏÏCŒ⁄Ô1É¢Å’HR‚π’SñdÅ9™‡π%µU1ñSnÊa|.˜‘Å`Í†8£†∂:#Ä ‡CŒ2ã∏*[o·Ü4Xx˙.k\">∫°A™ÕO+,Ûx\\5tò—Ü÷Å`\\≈oûèçà%ßj⁄Ò]∏™n˚»\\È£h‹=éz»√™2\$®´÷F[NYè’Œ”RØ˝[IÙ±’⁄7≤®t“î∂˛7éÏ(·úÔÃWj0ˆÛ§Ê2v}›Ú;Ôk2å–Va–‡ªÒûr=¯ã(À„¢,≥õ\rÏÈj*∫B(RÓ2CñN\\åŒˇ≤9{a\0≈ï”VR4éB∏Ã/zÒnŒ6å£öá≠ÌÅ“(wÉs·sÌÚ∏«¥B[Û¯Mi#:#¯ØU·˛=M-~±ı‰„h)Øı	ÉpåCõ9/,–rÿ=ÉsëÉêò#BvŒäÅM èt=˜@ñhsÕÖÑ`k°Ûåp.=Së\"ŒÓjìÉ&5ƒué—p#Yçúüøá˙Y	‚∂~)∞s4Ÿ√1naV*ÊƒTS·Àqê§6Ü\"[LgÜ¨ë∆B\"|¿í2üéQ§:8∆®’ûÉ\rùVÉ∂4‡aj!º.&ñŒ√Éòo%0F9\"\$Òê≤D»π„â?'®ô2B¥Aﬂga≈kr≠'\$9\rÿ†6π`eœª diÙ˚2p\\õ\$ª“≥™pÿæCuFÒõ∞‡„\r[nQÀP“b0i‡ŸõSnT’#%@ò˛SÒ‚äÃOK’(ÜA¯Ö3QÀÕw2úŸfÇi&0ÆRh Fi0∫ÂvÄg\nAñ‡ƒ©i‚≠® _3˝H„VªAûbn†Öñ'i¿tå™E)⁄\0rƒ ;ó˘\0gÅ3°Ã4Üëfõ—xÀQÍ¢∑ÑÈM+vÄÍEZ\n´LA•ÄËù†¿‡Yù%¶EAºì*lëU}èâN¥FÈë/≥°óß:Î1^ÜÖlÆ¶•≤ï95è¥Q ©Ûa4ˆGlñ≠∫’2¶c \rÂ@≥*§√=bgÂÕ˛√i‡Aï© iG≤ÉØ#·8Î†1ÇÀ¯¯O⁄§L#ïû¶!Õw9AdÇA°3Ä®=9väâ<Æé≈” ‡•pda…»æ∫tÙÈ„…wNÿ¸ÕW1Q'≈¶üN∫p&ƒkk\"úhˆΩíö⁄¸n°ó]ÛíÄQtÍœm>≤ÊíòËHu´±É!5‰ƒVñ‚⁄¢`[)\r:J⁄g¥§n@È∫òicÅsâe2…∫ \rò˝≈¥q†ù◊íz¡hm\r·ËáRéld°ÉC.-˘ ÷YpÆ(ƒÔ\r8£ÄpaRt›0'd¶B®˙7a¶,ÿjË{¡ë¯ô3,¨·,h¶µ§π%r}O© bì.ÔîªÜÂg4Ú«¥π∆‡‰` <8ˆﬁ3Ág\nõg ˘d87Ï∆™™¿eÃŸaI¿pÂöÚ».ÅOÌ#^òéWÛåÃ‡é»k%x,®2ŒÊ}FüÀ4ì,Ó_¡9ã6;p∞m›Ωt&¢ÜwÏ„ºø//Ùu£2Õ`¥¿‡O Î§ÓuDëz^SfÄ˛\r*yv=Í%Mu0{pÎYl^ÎqU°}uiTŒ;ontåm’	àÀª+ÜÔ\"Fœw°°ﬂºlÙ-¿yY\0˙@");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("f:õågCIº‹\n:ÃÊsaîPi2\nOgc	»e6LÜÛ‘⁄e7∆s)–ã\rè»HGíIí∆∆3aÑÊs'c„—D i6úNå£—Ëú—2H„Ò8úuF§RÖ#≥îîÍr7á#©îv}Ä@†ê`Qåﬁo5öa‘Iú‹,2O'8îR-q:PÕ∆S∏(àaºä*wÉ(∏Á%ø‡pí<F)‹nx8‰zA\"≥Z-C€e∏V'àßÉÅ¶™s¢‰q’˚;NFì1‰≠≤9ÎGºÕ¶'0ô\r¶õŸ»ø±9n`√—ÄúX1©›ÅG3Ã‡tçee9äÆ:NeÌä˝N±–OSÚz¯cëåzlé`5‚„Å»ﬂ	≥3‚Òyﬂ¸8.ä\r„êŒπP‹˙\rÉ@ç£Æÿ\\1\r„ Û\0Ç@2j8ÿó=.∫¶∞ -r»√°®¨0çäËQ®Íä∫hƒbºåÅÏ`Å¿éª^9ãq⁄E!£ í7)#¿∫™* ¿Q∆»ã\0äÿ“1´»Ê\"ëh >Éÿ˙∞––∆⁄-C \"í‰XÆáS`\\ºè§F÷¨h8‡ä≤‚†¬3ß£`X:OÒö,™á´⁄˙)£8ä“<BN–É;>9¡8“Ûácº<á#0L™≥ò 9éîÁ?ß(¯Râ#Íe=™©ù\n´√Í™:*Í 0÷D≥ 9C±à◊@–÷{ZO≥˝Í›8≠¶i™oV®v¢k®Ar™8&£Ö¯..É—cH°E–>ÅH_hÅìŒ’WUŸ5·Ù1çr*ú¶Œˆ^–(€b‡x‹°Y1∞⁄‘&XH‰6Öÿì.9áx∞PÈ\r.`v4áòî∂Üç√8Ë4daXVâ6ÅFè‘’EHH∫fc-^=‰¬ﬁtô›xãY\rö%ˆ´xeè†ÁQ˚,X=1!∫svÈjËkQ2…ì%⁄W?ˆ√≈Æå¥Ê=êdY&Ÿì§VX4ÂŸÄÃ\\ó5–ﬂ„X√¨!◊}‚ÊµNÁ°gv⁄ÉWY*€Q≈Ëi&»l√Œ—µZ#ñ›„Ò†’ë\rAÁ\$e∞v5o#ﬁõ¢ÿ¸ê∂5gc3MTC£L>vŒHÈ‹√˙ñß<`¯∞⁄*†]Ç_à£;%À;Ó⁄Vñ˘iéì¿Ë„4X√Èñ'îå`∫™…„i◊j0g∂O±Ü€•ìiÊåÏ©9∑∆ô€íd›FÍ Ÿk/l≈û∏ñnƒ‹c<b\nâ®8◊`ëHìÎe≈}]\$“≤˙÷‚ Ì∞!Ü¿“√C)±\$ ∞öA◊`Û\0'êïÄ&\0BŒ!Ìå)•Úò¥5E)‰¡‡“¬o\rÑ‘8r`˚»Ã!2Í≠T¡õs=ØDÀ©’>\n/≈l”âíï[˝ò≈†P€‡aá8%ê¯ù!›1v/••SUcoJ®:î4J+ÅBÅ‡ÛáµvØJ¸Ç\r·‚¬b{É†,|\0Ó∞zˆÉc‹™≈Yß≈lÆ\n¸úi.ı‹!‰€)¸¶dmÓJ´Ø—»!'“¡Î B\nC\\i\$Jò\"æÎ÷2»+ÁIkJññÒ\$äëí‚Gôy\$#‹≤i/¶CAbæÃbÇC(·ò:∞ UXòØî2&	«, Q;~/•ıKy9◊ÿ?û\r6æ∞tV È—!∫6áCP≥	hYÎE¡ê”Œÿ‚£ˆlÒ‰èû(ÿñT·“p'3É–C<ÿdcÆÅ∏?∞yCÁÛ˛e0º@&A?»=§Â%≥A:JD&SQò—6RÃ)Aòù–b`0⁄@àÈu9(ç!0R\náF Ñïé¬ä ƒwC\\â©å§œÖr‘‰‹ô°Ó§#ï~ÿ2'\$° :–ÿK¡`h¨≥@â£EbÛ¢[–~°—Èí‚ TÊ≈lf5™≥BR]±{\"-§–\0Ë≠ L>\r«\$@ö\n(&\r¡à9á\0vh*…á∞ñ*∆XÎ!_djàòÉÜÂpyπáèÇ∂ë`·jYûwJÇ\$ÿR™à(uaM+¡ÍnÌxsÇpU^ÄAp`Õ§IÏíH÷\n®fó02…)!4a˘9	¿¢ÍïEwC›–°òìÀ© âL◊P‘›ƒ˛Ai–)Íp¯3‰AÅu‚¿ˆ˝AIêA…Hu	Á!gÕïíUîêâéZU∑¿ºc§*≠¥¿∞MÑ√xf∆:À∆^√Xp+ëV∞ùÜ±·≤KâC#+æ ÷Wh˙CP!»«¿;î[pn\\%ò¥k\0ÑÙ≤≤,⁄®8‡7„¨xQC\nY\rˆbˇ£XvC d\nAº;ÇálF,_wr4RPÔ˘ªHAµ!Ù;ôâ&^Õ≤ùÖ\"6;úÂ≤ÍŒ=˜#CÌèsm≈J·jê`Àä„9\\gŸÙã\$#QüËEst/\n–”«\rú¯rt\$Y˝20y£©™§§KG@ñzé°µ,¶x2Æ\0¬∏õ‡[ ¥=–∏¬‡dkÃÇ@LTÊ•hi±#§ñDi<˝—˘sHπäÊ®aø§\nr†Ï≠B È∆ `¡ùÍzW∂ˆÍ›[ÎÖqÎ-i≠µ∆∫◊ö˚`Wärê6‚nK≈–m˝‚„ñ∆Ù5ô„Aÿù˙aC\nCo\0óg˜√rí5\"´´\$3•ºßÕõﬂÓÒ€ ótõv\"H4{!∞sÚGÉpM\rˆÍ⁄BE¨„Ÿı≠:iÏ71Fì\\∂t˛“ér Êm3¶¿Vùdú◊ñÌvÓÎc/\r°πƒGd_À5V¯èAÔûtûOæA?B\r Lt¢>ò%¢ º\$2∞–Ãòá*≠Áj∏íZ]	a.˙”◊î·>ÈÂ} »C∑.ŸßoIÌ\r*o˚∏vÊÙwOxÈH˘˝&FûçwäYÉAzBã–¿ÒG}¡0§cTI	•‡QÂeG%jT˛ªTZù.(ûü/A≈|¬]+™\$°ø_ÂÂ6yÃπû_ﬂ+9¯ªÚ#°œﬁÂX~ ›g¿”V‚ÜÈöÿàr\rìx<ƒ¸G‘'‘ª él†\0Ÿ7f˝…XHQ}HeÛ¶»,K	TÉ9*Â∞LKé.[ÎD∏§˚>\r¯ˇ'Áßi¬˚¶(Ç)\"à f˛¶≈\0000¶ b∂Ú(lç„Fé.∫çjrÚnå˛bJÛ.óBDkÆó∆b˝b\r¬%«‰b‡∑Çq©òDb0≥PPx√†ƒ8eRDi∏…0ìPv+*¨¸F¸êôèñkèﬁ\$Ø‚lP=ÜäjÊ¡¢à¯¿–ú0…∂¸\0Ú˚pPè§4(É«–pÂDã–.é•NqPí\$H≈∞◊&1¬äÊ∞Ã¿÷48\nÄ“#ÓFU,”ﬂê‰)¢æêø ¬ ‰ä\r\"e/ÃÀè–∫ÍîI\0õ(ÄhØEp(Äf∂ˇo§ˇ¶	ö;ª	†¯˚ØÓˇ#§»|¢Ø˙—9\0Ä{\"ò/dÍ∑Ü∞¢Ü>®B∑+v∑±|üB,V0P‚m˛H1àe*ZoeBÃãê1\r(¯⁄ RLiô±úU ã`‰¬.åè˛˚q∂ñn.≈dÄ¥¬íµT7QíìÀW\0R±–îFâeq´Nµ1P◊Ê~b£*¯êtÇ¿A•rõp≤˙ÖD0â‡Ô)úSNZ6CÕ © \nbHIèõ!g∂W0~+MG«,ﬁ˜ÑÑY*åHP‡H(l’m∆’Â∆À˛◊éÿ<ÒûJvÛ§]&(ˆ•‰\n-†ö √œ®j˛ºcà©2ê6`œ)rö‡–•Jr¿€)íúu@˙•‚™\r¨ö†ÇJ£f˝c+‡u&VSã2Æror´)R¡+@|9ç≤K2Ω/2ü.ÚØ0ƒ„¢» ’)ÄP*Âæ»ÜM^\rb‡0\0¬Y\"™\"∫UxÜêŸÄ∞±Í»Ä‡Qì1\r ~Q@3‡ô43F≥Jf¿R@Q3àd¿Ç5√b\0û@‘FÛN/Ä6‚	73w7¢<@öÉ„Ïl2\$ST±†®\nŒRUÏ2Û2N…´5‚D\r‰4˘œ?2Çò\n\0û\n`®``é≥Œ Y1äobÒ2≥∑;#\$≥I; êÎ¢í”@Nà\"B2‡Z\nà¸m•†‡%¿ÉÎÓËÄ£¸‡Zx¿[1Ç@,¬ííÂ;”>†È>”?#Ç6Cƒ\0[CÖPH†Zƒ≤‚ZûJ≥[;Ö9CPñ√∫B≈P1ÃÙÃÈ/#vf4`\$Tf2@1—0Ç\$X\rì a¥zjDô;ìÍI¬Pí\$¥{%Ç1òÜ†Ë¨äÕ1o§\"RSJ¿ÒKÖÕ4ìtz∆√\0∑Eì>,EÉƒ<@WL„NµÚ6\nê&3‡Rdi\0.r Û‚‘ä∆≠`Q\0003&PÄ∑\0001¥NXDÑπ«bã¨ô»‡ÄÓ\"†‹©ÆUQS\rpØ∞¢·—D˘KÆLÃü∞\$N§¯1™f¿ËîÔ`˜0⁄U’H¡Ò…–ªºö“∆ou*+1K‚ESWµ.¶ÈÜFíí„àEä™M£à≥´iê&™∞'TÄ∏Ëà\rY5ñö\rO©˙;\$\"âc™Î¢ÚÏËœbòéR`m¶›…˙ñ–¸ÙrÉQIieI≤≥hŸâ≤öÒ†¡Qj¶ dÚ'í\"õˆ\n¡DYR'T1Iıú±cd±´µ¥aÎBju∫∏0óGÃˆ	ÏF\$µ∫ˆE≥Uœp¯6LZTƒÎ?¬Ú\$6Ub#ãNƒÍdr∫…LpÜc+rñerˇL6VÑ£.∆d hÄe√>	¡®·2Ã∏5\0bœ§º’ç\\÷\0_Z‡^‡YÈ\rj+á]“¸œÌñÊ9WgBﬁbäÄÍ\0`#õf.ˆs'6(J†Ú‡\rfﬁq	m\n‡ä(l5Û,œu¿l\$áp+Ò\\c\nLˆó¿‰œrΩ,‡®\rÎP8àÓ¡VÑ\$ ±R/†É√.1åWÃ‡d∑F\$Ä\\ÄÎ@ÎÏ0\"ßt‡ W\"67&ÏˆhqBavd√ÄäI*\$#≈w†…v§ê9◊`*v9wVX\$VÚóˆebk<ﬂVW@Œî¬ß6ƒ\$F¯pDoh‡(ÄeW2KL\0Pæ¥ø+¢3‡LRt&W\0™\n@íà €NÉ.åıú\"#>(∂ªGTÀGì]>îjWÇËÄrªdóMÙ3Nb0˜of’ﬁ‘ˆV\"(®\nM‚ádò/ÿ!~¯3pËv5ÙÉXEñµ8;>∏> ◊ÖÑf8f6ˇÉƒopNUv\nBDÑ>w/7˜ó_rÃ67Ñ<Lıq‰§s¿X™_dé|kÉálœÑƒn˜≥ ‰Ñ	Äﬁ8.D*†P XÉ–qãx™ÓÎ~kë!£8≥ó°Z#§øX ø¨'Y¯Œ≤‡8*(¡´Ù\"L',≤œ-\$≠-ÉƒøT_!W»øW˜^î kêâÜuƒ;µ Æf◊ÖßòÃV(≤‰TÙÈÅê&ˆŒ»lN`zN“mj\nm§…zÑê‡àœìﬂî‰*BÂ‘‚ÂjÁ¿yãëé√ÈåV’òzπM2©B´@ˆ¬x‘øV¨‹Ü¯◊ Vãπ¥ã‹\$óƒW∏îΩ‡Wjd∆x€bY%z\"ÇÇqÉB/#ÚC^≤˛“B\nÏπîVúπŒOÙ˜∞b´o∫æ¬#\0Ö«™≤Vjc§\rKt\r∂>„ﬁ>\$Ú>ÉÏ?Ñ?c˙?‰*`‰@ÑÚ% Ä∆„@ ∞âäÉÇc„qÜcü“!†3¥òÉàíÿZ&yµÃÎ}‚ß•≠X##∆∆ÂN]bJ4a¬ÜZ0&‡∆&˙q§∑–º`{§\0,Ï@˙å&zÅìU√ìéÃ“Ngn¬ç?CŒ‹1;‰9z⁄[t\$B;OÜ˙UëÉ∆:£’#†w´„ÿ=⁄ç§C?©`‘pÒ¨√÷ ÿ‚G6ºf5ˆÜzå\"Zó¨@ø•£P_∞‰PË&†‹\r`D™# D¥À¢6B™@D4ó1Ñ∂`‚\rÄø≥J¥;.˙[3≥m¡®π˛€00€6√õK¥)3µI3¢ku¥¢çEÄt?Çí“º.{6&`ﬁ\r†^B\0^∫2æËÖ&A#^?b@‡I\0#@:@‡˚<(™’4[o°hf∏ Ë„O∑§\n@‰ z,{ê √˜Ä(?¢«W¥˚S∫;<˚›µpïµƒ∑æ Ÿ¥ªÏR˚ùΩr!µD>õ•æ@Èø?@N+ÇCk‡,¿‹v¿ŒªöõÎÚ≠`F‡™| ÿØ`]®¿ô§∏ØÎt! €∞<A¥“!√˚l˙ñ(‡Œ\r=≈‡ËÂ+àp9—cZ‘ ‘Ä\$b˜bI^yîèhÕÆ‰äÇÕ~b/(ÊË±≠≠TH<ò‘öÈ;†›Æ¯°©◊ByW´7™‚‰_ ¶§ ßåÕå¿À∆}¬\r8n yóö‘q&xÕLÓèhUœòW≤aGÎQ!\nÄ‰\n%«ŒÓ‡Áî0N@Ú≥zt'ùî5”q–}.WZ·éR¨º>î\r¿à6lùD6G\"9%óä‘é6E†mälä6”F·jf‰9.|æ(—nú(\rÚoõ=ÄÀ…∆m’Éê‚|)ÇéÀ\"îæf§Ó¿ƒ˘•[†»YÕ.F~¸ˇ⁄ÆD‰Äâ˙ôÔ]⁄/í•P©l¡Ω´⁄Îq€*¸„K©=÷∂ÒÑ~81”ãï⁄≤^Œ+YÖù…K´7P◊pÎ±+1 ∆/∞oâ}·„‡q	ﬂ›§\rÖEﬁ}∞∑I*=‚∞beÄﬁ-›´tˆ›≠ﬁù›„R¶£]XU‘;≤,˘–=sì¥·÷6ñ˚ñ˚Ú\$Tv¿»˜∞†z(˜8áX^ ÿsôéUF∏EËó\rÿBï∫<àÑ!§sËÉ´Í∑&≤–QÄﬁªÇﬁU\r4\0YÈÑÏ3‡∏<≈)\r¯êpmÏHœ\r¯kÖê*~úûå¥ûí!ﬁÕö> é,@:ôÓ^≤à~∂G_Í“IœRó£.æ„˙Q\\ÄÀv˛ˆıŸ7ÖÀIÚwq§…{‡OÌ#A%?ı5˛âv|\0nyá''ÊcGÌ÷npd=ldª_Œ.Å	2hK‚¢â…\\’W∂∑I|Ù¿¬ıâÒíNÇíS8¢ ƒoÃÃ›»x≈í-ykÕíK#Qô;nç¢° sO\\⁄£ VÁ›wmæhvI\"\0àh·ÿÖS˝m¬rÚ∏ﬂúŸêí‹·qÏá©ö§í„Û~˘≥÷Íia!DFç‹9	.¸≤â‰®Ïès≥Tø°ŒHØ!±™vx¯ÑdÛåJç◊Bï:®§flÉ\n2¸Åp£à\rå`J#¡Ùò6Í~º†FyÁ:@Ï\r\0[àC>ù‡.ÄùQ!“Ï\0–U(\"A‚]ÇHŒÿ0SR!)ıO¢I\"ãNÜ2pëd	ÄIX@¯ \"ß§\0Pê\nºçê>A∫¡EÉP»a.ç\"©iBâ\0páúgÔÕg€<_ ë0	t\"Oÿ}*⁄\0Q(ÅxÍ∞Ç¯Ü^@–6I°;â	 0ÅÿÓH9ÃÃ:\0Å—ç ∫∞/∏1u†|Kt-à«∑µ…§»œ·_\0ÁÁA1Yê?tC\0.®(Ü|?0UeL\"Éy	CñÅl?\"¢Ã·N•Ö4PTÎ4ñ—\r0i–°≤Él'NñpËIÅ≤D1\r`&3¯F?,Ø∆~@Ãa~'6ñ!ƒá‘éZMt√¨„DåÜÄ]!ˇ»y\rM%!h\n¯\nI|a≈-úÂ¶áa!\0Y‡5Ö0``!Ñï†0\"ù›Ô\rõw˘¬j\"÷H¡Ü(¶—N©‘(≈@¶‘ÿ^v™88ÅÑTL¿.å ’täˆÕèƒÙ\$™~€X2˘∆Eú≈¸D˝6¢WMNt“∫0ﬁ¨7õgóñ≤‡ÀâÇ*ÃnìJ^≥Ä¬¨Ëeb:nÚ»@Ë¥@4--i°2ä„\$ÕÙ&R5mÃ?zöë»ÉË4••jÌkL]êÿ†0¢Ωπ·aÊãÏ`›êÒ¡ä˛.e*ı£ÉÖ◊§*\"4\nÖBäÂ„pà0®Î∂¬0ˇ‡ºÅ»©òSpó@X≈†134I–M‡g¿æ)01B%Yë≠çà#XÅä@rÉ‚ÑÊ*úXÅ6|n^¬∞AQcÄÄäCÄΩÚ5AY⁄NV∞^Ä	r2™\"—w˜}øTŒb…59†MW'∏=í<ƒ[»_V≠◊GπîŒfr3‘œÅmßPI]\nwâ¸UUàÙO#(ëôéÓEë´2<Ãá»»c¸xsQ\0¥†;L\$…	`ÅÄÑ‘\r§@ïí2§0B#€=\$·QÖb¡◊êÅåÄd*(÷H~D¡tû¡aq¬Z;–8®çNS∂ADê®?\n¸=éa∂\0ˆ\nEVÈ‘§ïx!Ä»IhH j#Ù A≤Öòi:v2	%ë¬ImkßíÚP ,:!“ôî2-`Î\$ë≈é–¡±¨:îlÇ2UVPâÄ),≤çh¿ÎQIÄ!§\$ÜÑ\$˜\0ŸI˙P	çÜÑ†Ü}\"YH—…è˜q\"e\"Bï\0ÓH≈X)¨•√Çy\0údÿ“3êCNèt˘Ênó*;≈2¡ñå∏ÑΩ¯lîÖÖ‹k®ápÃ∆H‰:9X	e•0]\$üò!õp_Píê„*%8ÙG\"YÉ;[ leûøÄ∏h:FuH≠@ËP)X∫ºsÀ°3˙ÈM CC ™À°™ŸVÁ\0gö\\áp\ní@ü¿Á.c.. \0ß2;ÒÕ\r09π∫]∞lª@dÁPùÀ∂aÖë¿ﬂ\0Pm∞Ä‰–Fê\0˜i{Lÿd6)±N70©çêÓc±%¸ΩóLl…}ùˆ\0Ê“∆•/Ä;ÀÈ™'1ôTºb˘Y<Lº‹g)ß¶˚Ç∆dı)àp§‚+å;p±\"!f\r\"\0ÙÉô––«◊\0Ú≠Lñj≥Dô…™à0—rLBbSú≈œ kx7%XÜÅÖ C∂¬¿D˚‚Ú 4–Âàà	≠∆o§eõAô@Ê˘∏Å÷npmõ±;]1íÕ^≥\n7âôµÈUå§[·{ãtç¿gcHL8ÅáVã∆ PáKîÜêE”ﬁövT Õ/ÆVQªêg!\"äNM˙ã◊'Èùä_+3ﬁÀ\\º†'hU#5\nS\0≠Òo¯g‹wg`2ëF2‰Àf]ïà≤M‡6øH%“±è¥ı&æj÷b7úÛL+<á†v¿\0ƒfÅè‰¿\r¯ÀcB1‡6,¶4\nÚT,Èpét†Ò`]IÕ\\ê¢ñò/o£åì>…àio∆ì∆H T!© 4Í<átï1e¢ˆ1A»=âZh\r•ÿ≠8b:ÅS<9Ã¿§ÉGÿÜhÃê\0Üê‡?Iö9ÙØ%0= P£Ú∑ò\$§LI‚‰b\0ƒ¨∑FBÏËƒ≈†8œê uS2Å Ü‘8BŸfÍÅ1W£h\\Å Ù.KC§kPÒ@h	Ë®öa (*≤âØ1´¶ˆ7∫)!|(°˙çWÁrôπÿg±˘õÙ‡«7 :P∆4dCHNÄ‡™¥?*zDg†˚öh÷p-Œ˚Ò¸vBAI^/π¨jÖr?£¸4û™†ò˛lÍ¡Còu\rH‡ä∫+∂â¬v¢2hë†ßª,)'S*Ó®XÁp2«‰ !πpëi\"w'_“aÀñõ[@È7ëén1Cÿã(≤8™O√h*Ã•\"øÖUH R\0 ¿_]Xa)^=sπÑÌ\\‚uC(Ã ÍPSîir§]©í∫e…Ï\$†e¶xµicM «bà‚uïÌ0©D'?3zr gK ¿åêx˙S-xü<∑åVy\n*—^âÙùry\ríâA£A<ê∑HºEâÂâJqz.ä\$Qx	æ Í*&¥±ﬁó††õ ∂∆\$Qá0p	·,)öì‘f–ä¸hêAÊ=´·ì∏≈2µ∞\0âZ‡\"\$ÿõSÜ ‘Útæ`õb‚ hÔOö>≥ÙtD˝ÁÚh`–Gx∆∆K-SBk?Ñç¯mµ\"¸Ó∆Á˙y”‘\r\0Bi¶™ír©Á’H‚qC8ºÇHìR9·ÄÃ≈V¡—™YTÚ≤¶µtf9Øc=â.4Z®M©Â^÷≤tEÆ6TZ<]PjÜ≠»ÛU2~’W\n(q*µUë÷H≤µîàùT\"<u )Å¢U„Îî\$?ùN5¯£‘Yì‡'éÚÉÃÊ◊!2L•™fñî¿\n8?ôÅ:‚ÑcÆIke/÷™*µ™ÁRAu9È(>∫l”æòØ)=<¿ê\0002ÅçÛÇ'Úé“ÏÕh¥\0Ò§Ï-;8aüáÃ5>¢≥3dı\0OH\"qOÀ≠hå∫ê¿“U\"¬£6C^π D§FïıHAÑ¸œêÅH NOH ∆ûhr‘É‡\nõ√Ä∂z˛H	TÊÂ4¨\"˙ˇÑ4Ö¡2ïh›î©ª9ÀCœØ eÍ/a\0ä◊ÿ ¿-uÄô)&^k◊Ù\r÷-rlA«?ÿ\\ ”≤\\m~Öe…nã4PÁüïãÉ‡πu)uÊÃ´`ÓÏö&⁄/Ç%ÇŒ≤%ã\\Ω◊0ñ≥éQ¬◊Ä˚·ãî-†nïlÚÈÚf<Yru :ïóÂ∑d)ä\0–2‚ØUëÕ+ÉDìÊ\0000ô9Î2∞Ò@&∂Œ¥≠¡GçA[≥aMr—)8¨÷!2-\0ö¯ÿ&© Máeå>–>Ÿ∆ÃÓØe	AÍéΩk-?>\"¢ß≥,´Á⁄∏ÛY®ÕlÄ≠õÃ{i´9Ÿ–∂H≥ƒ∫Ïˆ#ywY˛^6Ç†·Œç?õDZPhfß¥\\ı÷Æ.;QÅÃ÷Ï∆7YØÌ'˚JÃpH—6<QmsbYx˛)e¥Ï‹‹˛z›ø“Öñ‚∂4ˆmìl≥u“ŸÀŸ5UîBøk9⁄p»,£åd\\Ñ>ãPü bßè;éái¥`⁄bÁ*:ë?Áﬂg+xãEB’±∂ƒø-/!‘tg≤V\\¿J=pYÇ(\"Ã†Ã:`&8»f∞X\"W£?÷”g°·ô·ŒëÎ7£E« \0®◊Ä]ÿœc˘#cy‹\r x]…\0‘‚ä5ÒÀ%≤e[o„ÁYŒÁWµHÚgjÀd€ˆ\0.çŒÃÌ¬í^ÂN|π`Õ&¡sôBÊë˚ì1√íiie@Ìâ¬R∂ô±Äf÷îõ⁄®˜∞!9÷£Íq9tZ–)6y4XêÄzu)w‹:◊rˇô‹9ÇwxiÜ\\πò¶Ë∂e∫ç€wµZXdS8ºÆ≠¥ë®¶\0¶ge/6ÙSÆ[l{≈€†◊wéäjªÌ›o0:æ·vW∑∞Ké•T£1›9áRGAôI\"ÄÊ3¨ﬁ†∫“æÌ“#;Ä|ÁÀä,Àd.†üv¯‡h—˜göÄTﬁÿi\0;ñ3<◊<π™çíÓ,∆&‡ÁÒ}`µÑ7Ÿ\$Yû∑_1ÉﬁÙ<\0aæ\0xŒH˜°ﬁÿê\0=y1`ô‘`î'+t!§‹	·E´~:(äb‡/|Ω÷›.dó„Bﬁ\0⁄ÌC«Vˆ◊Åô≠ÂœQ⁄≠)`∞∏±·Oqí=ûq4—ö+dEj.*ÿ®+•i=já®`‚Ë∑àÚáé I]¬ò]?\"˜¡–¬!sM\0—:“€j#‹Gè\n@‡–hlŸh@~6Ã\$`ÙgxLß ∞íeŸL≈®yNˆë\r±_ÏÄ1ÎÆÜ@#ú)¯M≥`Òt@]!±óÄ∂∆Îº{0î3≥ílµßÚ=ä∏a¸2,Ù\r	^∫Ÿ£·à.∫√L˝0ƒ¸@|<√æ+fxº5\\ﬁ3ÙãVÒâ÷µπ¯a0˙ÈqàCÁ=ì@-ƒ<qµ<=‚8√¯ê&‡±%ä#€‚fCó;Ê%√≈Å{Õbm¶Ä.ƒÓp≈ãlPñ`·ÿ	(–Ä»èÉïUj¢óÅ®æpÜ¿cg\rÚ√ï_E†]6OÜ#£\\NˆBJ·l\$Ø[¿vÄ‡∫\\s·ÔRﬂ¬ÓpÏwí·‰Ò∏X√‡eÃVÇtÔbŸÄ‡f7ãº∫≠bZ∏ñ∆V'Ë.∞∂ï®∏ßÒBÉcº2…\n˛Bqe≈Úò|xbÜ-⁄Ç∫©ò·\$9 ƒF|rä 9ƒûB¶•åg>˘ˇ }X`2R\\G·ã\$√L¿ú˝2Wé|éW0D‚˙Ω˚∂@ ∫≤GÖ¬5(ì…Ë/ÁR§êÜˇ´\$É‡éZò˝`N…ı8µìï^|¯æ¯dèø˙Á¿[Ä–D^ˇÿ\n¿ºÉ¿\$º™ﬂ—ﬁ'zôæ°Úß»~a@µ&§ù‹k¿VÄœÖ<xß±_å‹\$* ‹\0*@j€ê¸ ≠∏3‰ÑÃ^KEΩ\nPófHíÇ.e3-ô|Ã⁄`bÅ_r¸‰øE‡6eÌÒ»éU˛öKç<™˝I_ƒKIKË‘&54¡òS`ÿÄ{i2Ü@cÅΩPxöVŒÂ0÷bìv™˛E&0\0Õ« }");}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo"GIF87a\0\0°\0\0ÓÓÓ\0\0\0ôôô\0\0\0,\0\0\0\0\0\0\0!Ñè©ÀÌMÒÃ*)æo˙Ø) qï°eàµÓ#ƒÚLÀ\0;";break;case"cross.gif":echo"GIF87a\0\0°\0\0ÓÓÓ\0\0\0ôôô\0\0\0,\0\0\0\0\0\0\0#Ñè©ÀÌ#\na÷Fo~y√.Å_waî·1Á±JÓG¬L◊6]\0\0;";break;case"up.gif":echo"GIF87a\0\0°\0\0ÓÓÓ\0\0\0ôôô\0\0\0,\0\0\0\0\0\0\0 Ñè©ÀÌMQN\nÔ}Ùûa8äyöa≈∂Æ\0«Ú\0;";break;case"down.gif":echo"GIF87a\0\0°\0\0ÓÓÓ\0\0\0ôôô\0\0\0,\0\0\0\0\0\0\0 Ñè©ÀÌMÒÃ*)æ[W˛\\¢«L&Ÿú∆∂ï\0«Ú\0;";break;case"arrow.gif":echo"GIF89a\0\n\0Ä\0\0ÄÄÄˇˇˇ!˘\0\0\0,\0\0\0\0\0\n\0\0Çiñ±ãûî™”≤ﬁª\0\0;";break;}}exit;}function
connection(){global$h;return$h;}function
adminer(){global$b;return$b;}function
idf_unescape($s){$dd=substr($s,-1);return
str_replace($dd.$dd,$dd,substr($s,1,-1));}function
escape_string($W){return
substr(q($W),1,-1);}function
remove_slashes($Je,$ic=false){if(get_magic_quotes_gpc()){while(list($w,$W)=each($Je)){foreach($W
as$Wc=>$V){unset($Je[$w][$Wc]);if(is_array($V)){$Je[$w][stripslashes($Wc)]=$V;$Je[]=&$Je[$w][stripslashes($Wc)];}else$Je[$w][stripslashes($Wc)]=($ic?$V:stripslashes($V));}}}}function
bracket_escape($s,$Aa=false){static$bg=array(':'=>':1',']'=>':2','['=>':3');return
strtr($s,($Aa?array_flip($bg):$bg));}function
h($N){return
htmlspecialchars(str_replace("\0","",$N),ENT_QUOTES);}function
nbsp($N){return(trim($N)!=""?h($N):"&nbsp;");}function
nl_br($N){return
str_replace("\n","<br>",$N);}function
checkbox($A,$X,$Na,$bd="",$Vd="",$Vc=false){static$r=0;$r++;$H="<input type='checkbox' name='$A' value='".h($X)."'".($Na?" checked":"").($Vd?' onclick="'.h($Vd).'"':'').($Vc?" class='jsonly'":"")." id='checkbox-$r'>";return($bd!=""?"<label for='checkbox-$r'>$H".h($bd)."</label>":$H);}function
optionlist($Zd,$nf=null,$vg=false){$H="";foreach($Zd
as$Wc=>$V){$ae=array($Wc=>$V);if(is_array($V)){$H.='<optgroup label="'.h($Wc).'">';$ae=$V;}foreach($ae
as$w=>$W)$H.='<option'.($vg||is_string($w)?' value="'.h($w).'"':'').(($vg||is_string($w)?(string)$w:$W)===$nf?' selected':'').'>'.h($W);if(is_array($V))$H.='</optgroup>';}return$H;}function
html_select($A,$Zd,$X="",$Ud=true){if($Ud)return"<select name='".h($A)."'".(is_string($Ud)?' onchange="'.h($Ud).'"':"").">".optionlist($Zd,$X)."</select>";$H="";foreach($Zd
as$w=>$W)$H.="<label><input type='radio' name='".h($A)."' value='".h($w)."'".($w==$X?" checked":"").">".h($W)."</label>";return$H;}function
confirm($gb=""){return" onclick=\"return confirm('".'Sind Sie sicher ?'.($gb?" (' + $gb + ')":"")."');\"";}function
print_fieldset($r,$id,$Cg=false,$Vd=""){echo"<fieldset><legend><a href='#fieldset-$r' onclick=\"".h($Vd)."return !toggle('fieldset-$r');\">$id</a></legend><div id='fieldset-$r'".($Cg?"":" class='hidden'").">\n";}function
bold($Ha){return($Ha?" class='active'":"");}function
odd($H=' class="odd"'){static$q=0;if(!$H)$q=-1;return($q++%2?$H:'');}function
js_escape($N){return
addcslashes($N,"\r\n'\\/");}function
json_row($w,$W=null){static$jc=true;if($jc)echo"{";if($w!=""){echo($jc?"":",")."\n\t\"".addcslashes($w,"\r\n\"\\").'": '.($W!==null?'"'.addcslashes($W,"\r\n\"\\").'"':'undefined');$jc=false;}else{echo"\n}\n";$jc=true;}}function
ini_bool($Lc){$W=ini_get($Lc);return(eregi('^(on|true|yes)$',$W)||(int)$W);}function
sid(){static$H;if($H===null)$H=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$H;}function
q($N){global$h;return$h->quote($N);}function
get_vals($F,$f=0){global$h;$H=array();$G=$h->query($F);if(is_object($G)){while($I=$G->fetch_row())$H[]=$I[$f];}return$H;}function
get_key_vals($F,$i=null){global$h;if(!is_object($i))$i=$h;$H=array();$G=$i->query($F);if(is_object($G)){while($I=$G->fetch_row())$H[$I[0]]=$I[1];}return$H;}function
get_rows($F,$i=null,$l="<p class='error'>"){global$h;$cb=(is_object($i)?$i:$h);$H=array();$G=$cb->query($F);if(is_object($G)){while($I=$G->fetch_assoc())$H[]=$I;}elseif(!$G&&!is_object($i)&&$l&&defined("PAGE_HEADER"))echo$l.error()."\n";return$H;}function
unique_array($I,$u){foreach($u
as$t){if(ereg("PRIMARY|UNIQUE",$t["type"])){$H=array();foreach($t["columns"]as$w){if(!isset($I[$w]))continue
2;$H[$w]=$I[$w];}return$H;}}$H=array();foreach($I
as$w=>$W){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$w))$H[$w]=$W;}return$H;}function
where($Z,$n=array()){global$v;$H=array();$uc='(^[\w\(]+'.str_replace("_",".*",preg_quote(idf_escape("_"))).'\)+$)';foreach((array)$Z["where"]as$w=>$W){$w=bracket_escape($w,1);$H[]=(preg_match($uc,$w)?$w:idf_escape($w)).(($v=="sql"&&ereg('\\.',$W))||$v=="mssql"?" LIKE ".exact_value(addcslashes($W,"%_\\")):" = ".unconvert_field($n[$w],exact_value($W)));}foreach((array)$Z["null"]as$w)$H[]=idf_escape($w)." IS NULL";return
implode(" AND ",$H);}function
where_check($W,$n=array()){parse_str($W,$Ma);remove_slashes(array(&$Ma));return
where($Ma,$n);}function
where_link($q,$f,$X,$Wd="="){return"&where%5B$q%5D%5Bcol%5D=".urlencode($f)."&where%5B$q%5D%5Bop%5D=".urlencode(($X!==null?$Wd:"IS NULL"))."&where%5B$q%5D%5Bval%5D=".urlencode($X);}function
cookie($A,$X){global$ba;$oe=array($A,(ereg("\n",$X)?"":$X),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0)$oe[]=true;return
call_user_func_array('setcookie',$oe);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function
stop_session(){if(!ini_bool("session.use_cookies"))session_write_close();}function&get_session($w){return$_SESSION[$w][DRIVER][SERVER][$_GET["username"]];}function
set_session($w,$W){$_SESSION[$w][DRIVER][SERVER][$_GET["username"]]=$W;}function
auth_url($_b,$L,$U,$k=null){global$Ab;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($Ab))."|username|".($k!==null?"db|":"").session_name()),$_);return"$_[1]?".(sid()?SID."&":"").($_b!="server"||$L!=""?urlencode($_b)."=".urlencode($L)."&":"")."username=".urlencode($U).($k!=""?"&db=".urlencode($k):"").($_[2]?"&$_[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($md,$yd=null){if($yd!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($md!==null?$md:$_SERVER["REQUEST_URI"]))][]=$yd;}if($md!==null){if($md=="")$md=".";header("Location: $md");exit;}}function
query_redirect($F,$md,$yd,$Oe=true,$Xb=true,$ec=false){global$h,$l,$b;if($Xb)$ec=!$h->query($F);$wf="";if($F)$wf=$b->messageQuery("$F;");if($ec){$l=error().$wf;return
false;}if($Oe)redirect($md,$yd.$wf);return
true;}function
queries($F=null){global$h;static$Me=array();if($F===null)return
implode(";\n",$Me);$Me[]=(ereg(';$',$F)?"DELIMITER ;;\n$F;\nDELIMITER ":$F);return$h->query($F);}function
apply_queries($F,$Q,$Sb='table'){foreach($Q
as$O){if(!queries("$F ".$Sb($O)))return
false;}return
true;}function
queries_redirect($md,$yd,$Oe){return
query_redirect(queries(),$md,$yd,$Oe,false,!$Oe);}function
remove_from_uri($ne=""){return
substr(preg_replace("~(?<=[?&])($ne".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($C,$lb){return" ".($C==$lb?$C+1:'<a href="'.h(remove_from_uri("page").($C?"&page=$C":"")).'">'.($C+1)."</a>");}function
get_file($w,$rb=false){$gc=$_FILES[$w];if(!$gc||$gc["error"])return$gc["error"];$H=file_get_contents($rb&&ereg('\\.gz$',$gc["name"])?"compress.zlib://$gc[tmp_name]":($rb&&ereg('\\.bz2$',$gc["name"])?"compress.bzip2://$gc[tmp_name]":$gc["tmp_name"]));if($rb){$xf=substr($H,0,3);if(function_exists("iconv")&&ereg("^\xFE\xFF|^\xFF\xFE",$xf,$Ve))$H=iconv("utf-16","utf-8",$H);elseif($xf=="\xEF\xBB\xBF")$H=substr($H,3);}return$H;}function
upload_error($l){$vd=($l==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($l?'Hochladen von Datei fehlgeschlagen.'.($vd?" ".sprintf('Maximal erlaubte Dateigr√∂sse ist %sB.',$vd):""):'Datei existiert nicht.');}function
repeat_pattern($ve,$x){return
str_repeat("$ve{0,65535}",$x/65535)."$ve{0,".($x%65535)."}";}function
is_utf8($W){return(preg_match('~~u',$W)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$W));}function
shorten_utf8($N,$x=80,$Df=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$x).")($)?)u",$N,$_))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$x).")($)?)",$N,$_);return
h($_[1]).$Df.(isset($_[2])?"":"<i>...</i>");}function
friendly_url($W){return
preg_replace('~[^a-z0-9_]~i','-',$W);}function
hidden_fields($Je,$Gc=array()){while(list($w,$W)=each($Je)){if(is_array($W)){foreach($W
as$Wc=>$V)$Je[$w."[$Wc]"]=$V;}elseif(!in_array($w,$Gc))echo'<input type="hidden" name="'.h($w).'" value="'.h($W).'">';}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($O){global$b;$H=array();foreach($b->foreignKeys($O)as$o){foreach($o["source"]as$W)$H[$W][]=$o;}return$H;}function
enum_input($S,$ya,$m,$X,$Lb=null){global$b;preg_match_all("~'((?:[^']|'')*)'~",$m["length"],$qd);$H=($Lb!==null?"<label><input type='$S'$ya value='$Lb'".((is_array($X)?in_array($Lb,$X):$X===0)?" checked":"")."><i>".'leer'."</i></label>":"");foreach($qd[1]as$q=>$W){$W=stripcslashes(str_replace("''","'",$W));$Na=(is_int($X)?$X==$q+1:(is_array($X)?in_array($q+1,$X):$X===$W));$H.=" <label><input type='$S'$ya value='".($q+1)."'".($Na?' checked':'').'>'.h($b->editVal($W,$m)).'</label>';}return$H;}function
input($m,$X,$p){global$h,$T,$b,$v;$A=h(bracket_escape($m["field"]));echo"<td class='function'>";$Xe=($v=="mssql"&&$m["auto_increment"]);if($Xe&&!$_POST["save"])$p=null;$vc=(isset($_GET["select"])||$Xe?array("orig"=>'Original'):array())+$b->editFunctions($m);$ya=" name='fields[$A]'";if($m["type"]=="enum")echo
nbsp($vc[""])."<td>".$b->editInput($_GET["edit"],$m,$ya,$X);else{$jc=0;foreach($vc
as$w=>$W){if($w===""||!$W)break;$jc++;}$Ud=($jc?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($m["field"])))."]']; if ($jc > f.selectedIndex) f.selectedIndex = $jc;\"":"");$ya.=$Ud;echo(count($vc)>1?html_select("function[$A]",$vc,$p===null||in_array($p,$vc)||isset($vc[$p])?$p:"","functionChange(this);"):nbsp(reset($vc))).'<td>';$Nc=$b->editInput($_GET["edit"],$m,$ya,$X);if($Nc!="")echo$Nc;elseif($m["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$m["length"],$qd);foreach($qd[1]as$q=>$W){$W=stripcslashes(str_replace("''","'",$W));$Na=(is_int($X)?($X>>$q)&1:in_array($W,explode(",",$X),true));echo" <label><input type='checkbox' name='fields[$A][$q]' value='".(1<<$q)."'".($Na?' checked':'')."$Ud>".h($b->editVal($W,$m)).'</label>';}}elseif(ereg('blob|bytea|raw|file',$m["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$A'$Ud>";elseif(($Rf=ereg('text|lob',$m["type"]))||ereg("\n",$X)){if($Rf&&$v!="sqlite")$ya.=" cols='50' rows='12'";else{$J=min(12,substr_count($X,"\n")+1);$ya.=" cols='30' rows='$J'".($J==1?" style='height: 1.2em;'":"");}echo"<textarea$ya>".h($X).'</textarea>';}else{$xd=(!ereg('int',$m["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$m["length"],$_)?((ereg("binary",$m["type"])?2:1)*$_[1]+($_[3]?1:0)+($_[2]&&!$m["unsigned"]?1:0)):($T[$m["type"]]?$T[$m["type"]]+($m["unsigned"]?0:1):0));if($h->server_info>=5.6&&ereg('time',$m["type"]))$xd+=7;echo"<input".(ereg('int',$m["type"])?" type='number'":"")." value='".h($X)."'".($xd?" maxlength='$xd'":"").(ereg('char|binary',$m["type"])&&$xd>20?" size='40'":"")."$ya>";}}}function
process_input($m){global$b;$s=bracket_escape($m["field"]);$p=$_POST["function"][$s];$X=$_POST["fields"][$s];if($m["type"]=="enum"){if($X==-1)return
false;if($X=="")return"NULL";return+$X;}if($m["auto_increment"]&&$X=="")return
null;if($p=="orig")return($m["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($m["field"]):false);if($p=="NULL")return"NULL";if($m["type"]=="set")return
array_sum((array)$X);if(ereg('blob|bytea|raw|file',$m["type"])&&ini_bool("file_uploads")){$gc=get_file("fields-$s");if(!is_string($gc))return
false;return
q($gc);}return$b->processInput($m,$X,$p);}function
search_tables(){global$b,$h;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$pc=false;foreach(table_status()as$O=>$P){$A=$b->tableName($P);if(isset($P["Engine"])&&$A!=""&&(!$_POST["tables"]||in_array($O,$_POST["tables"]))){$G=$h->query("SELECT".limit("1 FROM ".table($O)," WHERE ".implode(" AND ",$b->selectSearchProcess(fields($O),array())),1));if(!$G||$G->fetch_row()){if(!$pc){echo"<ul>\n";$pc=true;}echo"<li>".($G?"<a href='".h(ME."select=".urlencode($O)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$A</a>\n":"$A: <span class='error'>".error()."</span>\n");}}}echo($pc?"</ul>":"<p class='message'>".'Keine Tabellen.')."\n";}function
dump_headers($Fc,$Fd=false){global$b;$H=$b->dumpHeaders($Fc,$Fd);$le=$_POST["output"];if($le!="text")header("Content-Disposition: attachment; filename=".$b->dumpFilename($Fc).".$H".($le!="file"&&!ereg('[^0-9a-z]',$le)?".$le":""));session_write_close();return$H;}function
dump_csv($I){foreach($I
as$w=>$W){if(preg_match("~[\"\n,;\t]~",$W)||$W==="")$I[$w]='"'.str_replace('"','""',$W).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$I)."\r\n";}function
apply_sql_function($p,$f){return($p?($p=="unixepoch"?"DATETIME($f, '$p')":($p=="count distinct"?"COUNT(DISTINCT ":strtoupper("$p("))."$f)"):$f);}function
password_file(){$xb=ini_get("upload_tmp_dir");if(!$xb){if(function_exists('sys_get_temp_dir'))$xb=sys_get_temp_dir();else{$hc=@tempnam("","");if(!$hc)return
false;$xb=dirname($hc);unlink($hc);}}$hc="$xb/adminer.key";$H=@file_get_contents($hc);if($H)return$H;$rc=@fopen($hc,"w");if($rc){$H=md5(uniqid(mt_rand(),true));fwrite($rc,$H);fclose($rc);}return$H;}function
is_mail($Ib){$xa='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$zb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$ve="$xa+(\\.$xa+)*@($zb?\\.)+$zb";return
preg_match("(^$ve(,\\s*$ve)*\$)i",$Ib);}function
is_url($N){$zb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($zb?\\.)+$zb(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$N,$_)?strtolower($_[1]):"");}function
is_shortable($m){return
ereg('char|text|lob|geometry|point|linestring|polygon',$m["type"]);}function
slow_query($F){global$b,$R;$k=$b->database();if(support("kill")&&is_object($i=connect())&&($k==""||$i->select_db($k))){$Zc=$i->result("SELECT CONNECTION_ID()");echo'<script type="text/javascript">
var timeout = setTimeout(function () {
	ajax(\'',js_escape(ME),'script=kill\', function () {
	}, \'token=',$R,'&kill=',$Zc,'\');
}, ',1000*$b->queryTimeout(),');
</script>
';}else$i=null;ob_flush();flush();$H=@get_key_vals($F,$i);if($i){echo"<script type='text/javascript'>clearTimeout(timeout);</script>\n";ob_flush();flush();}return
array_keys($H);}function
lzw_decompress($Ea){$wb=256;$Fa=8;$Ra=array();$Ye=0;$Ze=0;for($q=0;$q<strlen($Ea);$q++){$Ye=($Ye<<8)+ord($Ea[$q]);$Ze+=8;if($Ze>=$Fa){$Ze-=$Fa;$Ra[]=$Ye>>$Ze;$Ye&=(1<<$Ze)-1;$wb++;if($wb>>$Fa)$Fa++;}}$vb=range("\0","\xFF");$H="";foreach($Ra
as$q=>$Qa){$Hb=$vb[$Qa];if(!isset($Hb))$Hb=$Gg.$Gg[0];$H.=$Hb;if($q)$vb[]=$Gg.$Hb[0];$Gg=$Hb;}return$H;}global$b,$h,$Ab,$Fb,$Pb,$l,$vc,$_c,$ba,$Mc,$v,$ca,$cd,$Td,$we,$Af,$R,$dg,$T,$rg,$ia;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$ba=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$oe=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0)$oe[]=true;call_user_func_array('session_set_cookie_params',$oe);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$ic);if(function_exists("set_magic_quotes_runtime"))set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);function
get_lang(){return'de';}function
lang($cg,$Md){$ye=($Md==1?0:1);$cg=str_replace("%d","%s",$cg[$ye]);$Md=number_format($Md,0,".",' ');return
sprintf($cg,$Md);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$errno,$error;function
__construct(){global$b;$ye=array_search("",$b->operators);if($ye!==false)unset($b->operators[$ye]);}function
dsn($Cb,$U,$D,$Wb='auth_error'){set_exception_handler($Wb);parent::__construct($Cb,$U,$D);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($F,$lg=false){$G=parent::query($F);$this->error="";if(!$G){list(,$this->errno,$this->error)=$this->errorInfo();return
false;}$this->store_result($G);return$G;}function
multi_query($F){return$this->_result=$this->query($F);}function
store_result($G=null){if(!$G){$G=$this->_result;if(!$G)return
false;}if($G->columnCount()){$G->num_rows=$G->rowCount();return$G;}$this->affected_rows=$G->rowCount();return
true;}function
next_result(){if(!$this->_result)return
false;$this->_result->_offset=0;return@$this->_result->nextRowset();}function
result($F,$m=0){$G=$this->query($F);if(!$G)return
false;$I=$G->fetch();return$I[$m];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$I=(object)$this->getColumnMeta($this->_offset++);$I->orgtable=$I->table;$I->orgname=$I->name;$I->charsetnr=(in_array("blob",(array)$I->flags)?63:0);return$I;}}}$Ab=array();$Ab["sqlite"]="SQLite 3";$Ab["sqlite2"]="SQLite 2";if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){$Ae=array((isset($_GET["sqlite"])?"SQLite3":"SQLite"),"PDO_SQLite");define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(class_exists(isset($_GET["sqlite"])?"SQLite3":"SQLiteDatabase")){if(isset($_GET["sqlite"])){class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$errno,$error,$_link;function
Min_SQLite($hc){$this->_link=new
SQLite3($hc);$Ag=$this->_link->version();$this->server_info=$Ag["versionString"];}function
query($F){$G=@$this->_link->query($F);$this->error="";if(!$G){$this->errno=$this->_link->lastErrorCode();$this->error=$this->_link->lastErrorMsg();return
false;}elseif($G->numColumns())return
new
Min_Result($G);$this->affected_rows=$this->_link->changes();return
true;}function
quote($N){return(is_utf8($N)?"'".$this->_link->escapeString($N)."'":"x'".reset(unpack('H*',$N))."'");}function
store_result(){return$this->_result;}function
result($F,$m=0){$G=$this->query($F);if(!is_object($G))return
false;$I=$G->_result->fetchArray();return$I[$m];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($G){$this->_result=$G;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$f=$this->_offset++;$S=$this->_result->columnType($f);return(object)array("name"=>$this->_result->columnName($f),"type"=>$S,"charsetnr"=>($S==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}else{class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($hc){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($hc);}function
query($F,$lg=false){$Cd=($lg?"unbufferedQuery":"query");$G=@$this->_link->$Cd($F,SQLITE_BOTH,$l);$this->error="";if(!$G){$this->error=$l;return
false;}elseif($G===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($G);}function
quote($N){return"'".sqlite_escape_string($N)."'";}function
store_result(){return$this->_result;}function
result($F,$m=0){$G=$this->query($F);if(!is_object($G))return
false;$I=$G->_result->fetch();return$I[$m];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($G){$this->_result=$G;if(method_exists($G,'numRows'))$this->num_rows=$G->numRows();}function
fetch_assoc(){$I=$this->_result->fetch(SQLITE_ASSOC);if(!$I)return
false;$H=array();foreach($I
as$w=>$W)$H[($w[0]=='"'?idf_unescape($w):$w)]=$W;return$H;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$A=$this->_result->fieldName($this->_offset++);$ve='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($ve\\.)?$ve\$~",$A,$_)){$O=($_[3]!=""?$_[3]:idf_unescape($_[2]));$A=($_[5]!=""?$_[5]:idf_unescape($_[4]));}return(object)array("name"=>$A,"orgname"=>$A,"orgtable"=>$O,);}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
Min_SQLite($hc){$this->dsn(DRIVER.":$hc","","");}}}if(class_exists("Min_SQLite")){class
Min_DB
extends
Min_SQLite{function
Min_DB(){$this->Min_SQLite(":memory:");}function
select_db($hc){if(is_readable($hc)&&$this->query("ATTACH ".$this->quote(ereg("(^[/\\\\]|:)",$hc)?$hc:dirname($_SERVER["SCRIPT_FILENAME"])."/$hc")." AS a")){$this->Min_SQLite($hc);return
true;}return
false;}function
multi_query($F){return$this->_result=$this->query($F);}function
next_result(){return
false;}}}function
idf_escape($s){return'"'.str_replace('"','""',$s).'"';}function
table($s){return
idf_escape($s);}function
connect(){return
new
Min_DB;}function
get_databases(){return
array();}function
limit($F,$Z,$y,$B=0,$pf=" "){return" $F$Z".($y!==null?$pf."LIMIT $y".($B?" OFFSET $B":""):"");}function
limit1($F,$Z){global$h;return($h->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($F,$Z,1):" $F$Z");}function
db_collation($k,$Ua){global$h;return$h->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($j){return
array();}function
table_status($A=""){global$h;$H=array();foreach(get_rows("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view')".($A!=""?" AND name = ".q($A):""))as$I){$I["Oid"]="t";$I["Auto_increment"]="";$I["Rows"]=$h->result("SELECT COUNT(*) FROM ".idf_escape($I["Name"]));$H[$I["Name"]]=$I;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$I)$H[$I["name"]]["Auto_increment"]=$I["seq"];return($A!=""?$H[$A]:$H);}function
is_view($P){return$P["Engine"]=="view";}function
fk_support($P){global$h;return!$h->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($O){$H=array();foreach(get_rows("PRAGMA table_info(".table($O).")")as$I){$S=strtolower($I["type"]);$sb=$I["dflt_value"];$H[$I["name"]]=array("field"=>$I["name"],"type"=>(eregi("int",$S)?"integer":(eregi("char|clob|text",$S)?"text":(eregi("blob",$S)?"blob":(eregi("real|floa|doub",$S)?"real":"numeric")))),"full_type"=>$S,"default"=>(ereg("'(.*)'",$sb,$_)?str_replace("''","'",$_[1]):($sb=="NULL"?null:$sb)),"null"=>!$I["notnull"],"auto_increment"=>eregi('^integer$',$S)&&$I["pk"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$I["pk"],);}return$H;}function
indexes($O,$i=null){$H=array();$De=array();foreach(fields($O)as$m){if($m["primary"])$De[]=$m["field"];}if($De)$H[""]=array("type"=>"PRIMARY","columns"=>$De,"lengths"=>array());foreach(get_rows("PRAGMA index_list(".table($O).")")as$I){if(!ereg("^sqlite_",$I["name"])){$H[$I["name"]]["type"]=($I["unique"]?"UNIQUE":"INDEX");$H[$I["name"]]["lengths"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($I["name"]).")")as$hf)$H[$I["name"]]["columns"][]=$hf["name"];}}return$H;}function
foreign_keys($O){$H=array();foreach(get_rows("PRAGMA foreign_key_list(".table($O).")")as$I){$o=&$H[$I["id"]];if(!$o)$o=$I;$o["source"][]=$I["from"];$o["target"][]=$I["to"];}return$H;}function
view($A){global$h;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$h->result("SELECT sql FROM sqlite_master WHERE name = ".q($A))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($k){return
false;}function
error(){global$h;return
h($h->error);}function
exact_value($W){return
q($W);}function
check_sqlite_name($A){global$h;$dc="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($dc)\$~",$A)){$h->error=sprintf('Bitte einen der Dateitypen %s benutzen.',str_replace("|",", ",$dc));return
false;}return
true;}function
create_database($k,$e){global$h;if(file_exists($k)){$h->error='Datei existiert schon.';return
false;}if(!check_sqlite_name($k))return
false;$z=new
Min_SQLite($k);$z->query('PRAGMA encoding = "UTF-8"');$z->query('CREATE TABLE adminer (i)');$z->query('DROP TABLE adminer');return
true;}function
drop_databases($j){global$h;$h->Min_SQLite(":memory:");foreach($j
as$k){if(!@unlink($k)){$h->error='Datei existiert schon.';return
false;}}return
true;}function
rename_database($A,$e){global$h;if(!check_sqlite_name($A))return
false;$h->Min_SQLite(":memory:");$h->error='Datei existiert schon.';return@rename(DB,$A);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($O,$A,$n,$lc,$Ya,$Nb,$e,$za,$se){$ug=($O==""||$lc);foreach($n
as$m){if($m[0]!=""||!$m[1]||$m[2]){$ug=true;break;}}$c=array();$je=array();$Ee=false;foreach($n
as$m){if($m[1]){if($m[1][6])$Ee=true;$c[]=($ug?"  ":"ADD ").implode($m[1]);if($m[0]!="")$je[$m[0]]=$m[1][0];}}if($ug){if($O!=""){queries("BEGIN");foreach(foreign_keys($O)as$o){$g=array();foreach($o["source"]as$f){if(!$je[$f])continue
2;$g[]=$je[$f];}$lc[]="  FOREIGN KEY (".implode(", ",$g).") REFERENCES ".table($o["table"])." (".implode(", ",array_map('idf_escape',$o["target"])).") ON DELETE $o[on_delete] ON UPDATE $o[on_update]";}$u=array();foreach(indexes($O)as$Xc=>$t){$g=array();foreach($t["columns"]as$f){if(!$je[$f])continue
2;$g[]=$je[$f];}$g="(".implode(", ",$g).")";if($t["type"]!="PRIMARY")$u[]=array($t["type"],$Xc,$g);elseif(!$Ee)$lc[]="  PRIMARY KEY $g";}}$c=array_merge($c,$lc);if(!queries("CREATE TABLE ".table($O!=""?"adminer_$A":$A)." (\n".implode(",\n",$c)."\n)"))return
false;if($O!=""){if($je&&!queries("INSERT INTO ".table("adminer_$A")." (".implode(", ",$je).") SELECT ".implode(", ",array_map('idf_escape',array_keys($je)))." FROM ".table($O)))return
false;$ig=array();foreach(triggers($O)as$gg=>$Uf){$eg=trigger($gg);$ig[]="CREATE TRIGGER ".idf_escape($gg)." ".implode(" ",$Uf)." ON ".table($A)."\n$eg[Statement]";}if(!queries("DROP TABLE ".table($O)))return
false;queries("ALTER TABLE ".table("adminer_$A")." RENAME TO ".table($A));if(!alter_indexes($A,$u))return
false;foreach($ig
as$eg){if(!queries($eg))return
false;}queries("COMMIT");}}else{foreach($c
as$W){if(!queries("ALTER TABLE ".table($O)." $W"))return
false;}if($O!=$A&&!queries("ALTER TABLE ".table($O)." RENAME TO ".table($A)))return
false;}if($za)queries("UPDATE sqlite_sequence SET seq = $za WHERE name = ".q($A));return
true;}function
index_sql($O,$S,$A,$g){return"CREATE $S ".($S!="INDEX"?"INDEX ":"").idf_escape($A!=""?$A:uniqid($O."_"))." ON ".table($O)." $g";}function
alter_indexes($O,$c){foreach($c
as$W){if(!queries($W[2]=="DROP"?"DROP INDEX ".idf_escape($W[1]):index_sql($O,$W[0],$W[1],$W[2])))return
false;}return
true;}function
truncate_tables($Q){return
apply_queries("DELETE FROM",$Q);}function
drop_views($Y){return
apply_queries("DROP VIEW",$Y);}function
drop_tables($Q){return
apply_queries("DROP TABLE",$Q);}function
move_tables($Q,$Y,$Pf){return
false;}function
trigger($A){global$h;if($A=="")return
array("Statement"=>"BEGIN\n\t;\nEND");preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s+([a-z]+)\\s+ON\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*(?:FOR\\s*EACH\\s*ROW\\s)?(.*)~is',$h->result("SELECT sql FROM sqlite_master WHERE name = ".q($A)),$_);return
array("Timing"=>strtoupper($_[1]),"Event"=>strtoupper($_[2]),"Trigger"=>$A,"Statement"=>$_[3]);}function
triggers($O){$H=array();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($O))as$I){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s*([a-z]+)~i',$I["sql"],$_);$H[$I["name"]]=array($_[1],$_[2]);}return$H;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Type"=>array("FOR EACH ROW"),);}function
routine($A,$S){}function
routines(){}function
routine_languages(){}function
begin(){return
queries("BEGIN");}function
insert_into($O,$M){return
queries("INSERT INTO ".table($O).($M?" (".implode(", ",array_keys($M)).")\nVALUES (".implode(", ",$M).")":"DEFAULT VALUES"));}function
insert_update($O,$M,$De){return
queries("REPLACE INTO ".table($O)." (".implode(", ",array_keys($M)).") VALUES (".implode(", ",$M).")");}function
last_id(){global$h;return$h->result("SELECT LAST_INSERT_ROWID()");}function
explain($h,$F){return$h->query("EXPLAIN $F");}function
found_rows($P,$Z){}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($lf){return
true;}function
create_sql($O,$za){global$h;$H=$h->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($O));foreach(indexes($O)as$A=>$t){if($A=='')continue;$H.=";\n\n".index_sql($O,$t['type'],$A,"(".implode(", ",array_map('idf_escape',$t['columns'])).")");}return$H;}function
truncate_sql($O){return"DELETE FROM ".table($O);}function
use_sql($ob){}function
trigger_sql($O,$Bf){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($O)));}function
show_variables(){global$h;$H=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$w)$H[$w]=$h->result("PRAGMA $w");return$H;}function
show_status(){$H=array();foreach(get_vals("PRAGMA compile_options")as$Yd){list($w,$W)=explode("=",$Yd,2);$H[$w]=$W;}return$H;}function
convert_field($m){}function
unconvert_field($m,$H){return$H;}function
support($fc){return
ereg('^(view|trigger|variables|status|dump|move_col|drop_col)$',$fc);}$v="sqlite";$T=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$Af=array_keys($T);$rg=array();$Xd=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","");$vc=array("hex","length","lower","round","unixepoch","upper");$_c=array("avg","count","count distinct","group_concat","max","min","sum");$Fb=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$Ab["pgsql"]="PostgreSQL";if(isset($_GET["pgsql"])){$Ae=array("PgSQL","PDO_PgSQL");define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($Qb,$l){if(ini_bool("html_errors"))$l=html_entity_decode(strip_tags($l));$l=ereg_replace('^[^:]*: ','',$l);$this->error=$l;}function
connect($L,$U,$D){global$b;$k=$b->database();set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($L,"'\\"))."' user='".addcslashes($U,"'\\")."' password='".addcslashes($D,"'\\")."'";$this->_link=@pg_connect("$this->_string dbname='".($k!=""?addcslashes($k,"'\\"):"postgres")."'",PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&$k!=""){$this->_database=false;$this->_link=@pg_connect("$this->_string dbname='postgres'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$Ag=pg_version($this->_link);$this->server_info=$Ag["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($N){return"'".pg_escape_string($this->_link,$N)."'";}function
select_db($ob){global$b;if($ob==$b->database())return$this->_database;$H=@pg_connect("$this->_string dbname='".addcslashes($ob,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($H)$this->_link=$H;return$H;}function
close(){$this->_link=@pg_connect("$this->_string dbname='postgres'");}function
query($F,$lg=false){$G=@pg_query($this->_link,$F);$this->error="";if(!$G){$this->error=pg_last_error($this->_link);return
false;}elseif(!pg_num_fields($G)){$this->affected_rows=pg_affected_rows($G);return
true;}return
new
Min_Result($G);}function
multi_query($F){return$this->_result=$this->query($F);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($F,$m=0){$G=$this->query($F);if(!$G||!$G->num_rows)return
false;return
pg_fetch_result($G->_result,0,$m);}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($G){$this->_result=$G;$this->num_rows=pg_num_rows($G);}function
fetch_assoc(){return
pg_fetch_assoc($this->_result);}function
fetch_row(){return
pg_fetch_row($this->_result);}function
fetch_field(){$f=$this->_offset++;$H=new
stdClass;if(function_exists('pg_field_table'))$H->orgtable=pg_field_table($this->_result,$f);$H->name=pg_field_name($this->_result,$f);$H->orgname=$H->name;$H->type=pg_field_type($this->_result,$f);$H->charsetnr=($H->type=="bytea"?63:0);return$H;}function
__destruct(){pg_free_result($this->_result);}}}elseif(extension_loaded("pdo_pgsql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_PgSQL";function
connect($L,$U,$D){global$b;$k=$b->database();$N="pgsql:host='".str_replace(":","' port='",addcslashes($L,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn("$N dbname='".($k!=""?addcslashes($k,"'\\"):"postgres")."'",$U,$D);return
true;}function
select_db($ob){global$b;return($b->database()==$ob);}function
close(){}}}function
idf_escape($s){return'"'.str_replace('"','""',$s).'"';}function
table($s){return
idf_escape($s);}function
connect(){global$b;$h=new
Min_DB;$kb=$b->credentials();if($h->connect($kb[0],$kb[1],$kb[2])){if($h->server_info>=9)$h->query("SET application_name = 'Adminer'");return$h;}return$h->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database ORDER BY datname");}function
limit($F,$Z,$y,$B=0,$pf=" "){return" $F$Z".($y!==null?$pf."LIMIT $y".($B?" OFFSET $B":""):"");}function
limit1($F,$Z){return" $F$Z";}function
db_collation($k,$Ua){global$h;return$h->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$h;return$h->result("SELECT user");}function
tables_list(){return
get_key_vals("SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema() ORDER BY table_name");}function
count_tables($j){return
array();}function
table_status($A=""){$H=array();foreach(get_rows("SELECT relname AS \"Name\", CASE relkind WHEN 'r' THEN 'table' ELSE 'view' END AS \"Engine\", pg_relation_size(oid) AS \"Data_length\", pg_total_relation_size(oid) - pg_relation_size(oid) AS \"Index_length\", obj_description(oid, 'pg_class') AS \"Comment\", relhasoids AS \"Oid\", reltuples as \"Rows\"
FROM pg_class
WHERE relkind IN ('r','v')
AND relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())".($A!=""?" AND relname = ".q($A):""))as$I)$H[$I["Name"]]=$I;return($A!=""?$H[$A]:$H);}function
is_view($P){return$P["Engine"]=="view";}function
fk_support($P){return
true;}function
fields($O){$H=array();foreach(get_rows("SELECT a.attname AS field, format_type(a.atttypid, a.atttypmod) AS full_type, d.adsrc AS default, a.attnotnull, col_description(c.oid, a.attnum) AS comment
FROM pg_class c
JOIN pg_namespace n ON c.relnamespace = n.oid
JOIN pg_attribute a ON c.oid = a.attrelid
LEFT JOIN pg_attrdef d ON c.oid = d.adrelid AND a.attnum = d.adnum
WHERE c.relname = ".q($O)."
AND n.nspname = current_schema()
AND NOT a.attisdropped
AND a.attnum > 0
ORDER BY a.attnum")as$I){ereg('(.*)(\\((.*)\\))?',$I["full_type"],$_);list(,$I["type"],,$I["length"])=$_;$I["full_type"]=$I["type"].($I["length"]?"($I[length])":"");$I["null"]=($I["attnotnull"]=="f");$I["auto_increment"]=eregi("^nextval\\(",$I["default"]);$I["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);if(preg_match('~^(.*)::.+$~',$I["default"],$_))$I["default"]=($_[1][0]=="'"?idf_unescape($_[1]):$_[1]);$H[$I["field"]]=$I;}return$H;}function
indexes($O,$i=null){global$h;if(!is_object($i))$i=$h;$H=array();$Jf=$i->result("SELECT oid FROM pg_class WHERE relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema()) AND relname = ".q($O));$g=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $Jf AND attnum > 0",$i);foreach(get_rows("SELECT relname, indisunique, indisprimary, indkey FROM pg_index i, pg_class ci WHERE i.indrelid = $Jf AND ci.oid = i.indexrelid",$i)as$I){$H[$I["relname"]]["type"]=($I["indisprimary"]=="t"?"PRIMARY":($I["indisunique"]=="t"?"UNIQUE":"INDEX"));$H[$I["relname"]]["columns"]=array();foreach(explode(" ",$I["indkey"])as$Jc)$H[$I["relname"]]["columns"][]=$g[$Jc];$H[$I["relname"]]["lengths"]=array();}return$H;}function
foreign_keys($O){global$Td;$H=array();foreach(get_rows("SELECT conname, pg_get_constraintdef(oid) AS definition
FROM pg_constraint
WHERE conrelid = (SELECT pc.oid FROM pg_class AS pc INNER JOIN pg_namespace AS pn ON (pn.oid = pc.relnamespace) WHERE pc.relname = ".q($O)." AND pn.nspname = current_schema())
AND contype = 'f'::char
ORDER BY conkey, conname")as$I){if(preg_match('~FOREIGN KEY\s*\((.+)\)\s*REFERENCES (.+)\((.+)\)(.*)$~iA',$I['definition'],$_)){$I['source']=array_map('trim',explode(',',$_[1]));$I['table']=$_[2];if(preg_match('~(.+)\.(.+)~',$_[2],$pd)){$I['ns']=$pd[1];$I['table']=$pd[2];}$I['target']=array_map('trim',explode(',',$_[3]));$I['on_delete']=(preg_match("~ON DELETE ($Td)~",$_[4],$pd)?$pd[1]:'NO ACTION');$I['on_update']=(preg_match("~ON UPDATE ($Td)~",$_[4],$pd)?$pd[1]:'NO ACTION');$H[$I['conname']]=$I;}}return$H;}function
view($A){global$h;return
array("select"=>$h->result("SELECT pg_get_viewdef(".q($A).")"));}function
collations(){return
array();}function
information_schema($k){return($k=="information_schema");}function
error(){global$h;$H=h($h->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$H,$_))$H=$_[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($_[3]).'})(.*)~','\\1<b>\\2</b>',$_[2]).$_[4];return
nl_br($H);}function
exact_value($W){return
q($W);}function
create_database($k,$e){return
queries("CREATE DATABASE ".idf_escape($k).($e?" ENCODING ".idf_escape($e):""));}function
drop_databases($j){global$h;$h->close();return
apply_queries("DROP DATABASE",$j,'idf_escape');}function
rename_database($A,$e){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($A));}function
auto_increment(){return"";}function
alter_table($O,$A,$n,$lc,$Ya,$Nb,$e,$za,$se){$c=array();$Me=array();foreach($n
as$m){$f=idf_escape($m[0]);$W=$m[1];if(!$W)$c[]="DROP $f";else{$yg=$W[5];unset($W[5]);if(isset($W[6])&&$m[0]=="")$W[1]=($W[1]=="bigint"?" big":" ")."serial";if($m[0]=="")$c[]=($O!=""?"ADD ":"  ").implode($W);else{if($f!=$W[0])$Me[]="ALTER TABLE ".table($O)." RENAME $f TO $W[0]";$c[]="ALTER $f TYPE$W[1]";if(!$W[6]){$c[]="ALTER $f ".($W[3]?"SET$W[3]":"DROP DEFAULT");$c[]="ALTER $f ".($W[2]==" NULL"?"DROP NOT":"SET").$W[2];}}if($m[0]!=""||$yg!="")$Me[]="COMMENT ON COLUMN ".table($O).".$W[0] IS ".($yg!=""?substr($yg,9):"''");}}$c=array_merge($c,$lc);if($O=="")array_unshift($Me,"CREATE TABLE ".table($A)." (\n".implode(",\n",$c)."\n)");elseif($c)array_unshift($Me,"ALTER TABLE ".table($O)."\n".implode(",\n",$c));if($O!=""&&$O!=$A)$Me[]="ALTER TABLE ".table($O)." RENAME TO ".table($A);if($O!=""||$Ya!="")$Me[]="COMMENT ON TABLE ".table($A)." IS ".q($Ya);if($za!=""){}foreach($Me
as$F){if(!queries($F))return
false;}return
true;}function
alter_indexes($O,$c){$hb=array();$Bb=array();foreach($c
as$W){if($W[0]!="INDEX")$hb[]=($W[2]=="DROP"?"\nDROP CONSTRAINT ".idf_escape($W[1]):"\nADD $W[0] ".($W[0]=="PRIMARY"?"KEY ":"").$W[2]);elseif($W[2]=="DROP")$Bb[]=idf_escape($W[1]);elseif(!queries("CREATE INDEX ".idf_escape($W[1]!=""?$W[1]:uniqid($O."_"))." ON ".table($O)." $W[2]"))return
false;}return((!$hb||queries("ALTER TABLE ".table($O).implode(",",$hb)))&&(!$Bb||queries("DROP INDEX ".implode(", ",$Bb))));}function
truncate_tables($Q){return
queries("TRUNCATE ".implode(", ",array_map('table',$Q)));return
true;}function
drop_views($Y){return
queries("DROP VIEW ".implode(", ",array_map('table',$Y)));}function
drop_tables($Q){return
queries("DROP TABLE ".implode(", ",array_map('table',$Q)));}function
move_tables($Q,$Y,$Pf){foreach($Q
as$O){if(!queries("ALTER TABLE ".table($O)." SET SCHEMA ".idf_escape($Pf)))return
false;}foreach($Y
as$O){if(!queries("ALTER VIEW ".table($O)." SET SCHEMA ".idf_escape($Pf)))return
false;}return
true;}function
trigger($A){if($A=="")return
array("Statement"=>"EXECUTE PROCEDURE ()");$J=get_rows('SELECT trigger_name AS "Trigger", condition_timing AS "Timing", event_manipulation AS "Event", \'FOR EACH \' || action_orientation AS "Type", action_statement AS "Statement" FROM information_schema.triggers WHERE event_object_table = '.q($_GET["trigger"]).' AND trigger_name = '.q($A));return
reset($J);}function
triggers($O){$H=array();foreach(get_rows("SELECT * FROM information_schema.triggers WHERE event_object_table = ".q($O))as$I)$H[$I["trigger_name"]]=array($I["condition_timing"],$I["event_manipulation"]);return$H;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW","FOR EACH STATEMENT"),);}function
routines(){return
get_rows('SELECT p.proname AS "ROUTINE_NAME", p.proargtypes AS "ROUTINE_TYPE", pg_catalog.format_type(p.prorettype, NULL) AS "DTD_IDENTIFIER"
FROM pg_catalog.pg_namespace n
JOIN pg_catalog.pg_proc p ON p.pronamespace = n.oid
WHERE n.nspname = current_schema()
ORDER BY p.proname');}function
routine_languages(){return
get_vals("SELECT langname FROM pg_catalog.pg_language");}function
begin(){return
queries("BEGIN");}function
insert_into($O,$M){return
queries("INSERT INTO ".table($O).($M?" (".implode(", ",array_keys($M)).")\nVALUES (".implode(", ",$M).")":"DEFAULT VALUES"));}function
insert_update($O,$M,$De){global$h;$sg=array();$Z=array();foreach($M
as$w=>$W){$sg[]="$w = $W";if(isset($De[idf_unescape($w)]))$Z[]="$w = $W";}return($Z&&queries("UPDATE ".table($O)." SET ".implode(", ",$sg)." WHERE ".implode(" AND ",$Z))&&$h->affected_rows)||queries("INSERT INTO ".table($O)." (".implode(", ",array_keys($M)).") VALUES (".implode(", ",$M).")");}function
last_id(){return
0;}function
explain($h,$F){return$h->query("EXPLAIN $F");}function
found_rows($P,$Z){global$h;if(ereg(" rows=([0-9]+)",$h->result("EXPLAIN SELECT * FROM ".idf_escape($P["Name"]).($Z?" WHERE ".implode(" AND ",$Z):"")),$Ve))return$Ve[1];return
false;}function
types(){return
get_vals("SELECT typname
FROM pg_type
WHERE typnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
AND typtype IN ('b','d','e')
AND typelem = 0");}function
schemas(){return
get_vals("SELECT nspname FROM pg_namespace ORDER BY nspname");}function
get_schema(){global$h;return$h->result("SELECT current_schema()");}function
set_schema($kf){global$h,$T,$Af;$H=$h->query("SET search_path TO ".idf_escape($kf));foreach(types()as$S){if(!isset($T[$S])){$T[$S]=0;$Af['Benutzer-definierte Typen'][]=$S;}}return$H;}function
use_sql($ob){return"\connect ".idf_escape($ob);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
process_list(){global$h;return
get_rows("SELECT * FROM pg_stat_activity ORDER BY ".($h->server_info<9.2?"procpid":"pid"));}function
show_status(){}function
convert_field($m){}function
unconvert_field($m,$H){return$H;}function
support($fc){return
ereg('^(comment|view|scheme|processlist|sequence|trigger|type|variables|drop_col)$',$fc);}$v="pgsql";$T=array();$Af=array();foreach(array('Zahlen'=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),'Datum oder Zeit'=>array("date"=>13,"time"=>17,"timestamp"=>20,"timestamptz"=>21,"interval"=>0),'Zeichenketten'=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),'Bin√§r'=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),'Netzwerk'=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),'Geometrie'=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$w=>$W){$T+=$W;$Af[$w]=array_keys($W);}$rg=array();$Xd=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$vc=array("char_length","lower","round","to_hex","to_timestamp","upper");$_c=array("avg","count","count distinct","max","min","sum");$Fb=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$Ab["oracle"]="Oracle";if(isset($_GET["oracle"])){$Ae=array("OCI8","PDO_OCI");define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_error($Qb,$l){if(ini_bool("html_errors"))$l=html_entity_decode(strip_tags($l));$l=ereg_replace('^[^:]*: ','',$l);$this->error=$l;}function
connect($L,$U,$D){$this->_link=@oci_new_connect($U,$D,$L,"AL32UTF8");if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$l=oci_error();$this->error=$l["message"];return
false;}function
quote($N){return"'".str_replace("'","''",$N)."'";}function
select_db($ob){return
true;}function
query($F,$lg=false){$G=oci_parse($this->_link,$F);$this->error="";if(!$G){$l=oci_error($this->_link);$this->errno=$l["code"];$this->error=$l["message"];return
false;}set_error_handler(array($this,'_error'));$H=@oci_execute($G);restore_error_handler();if($H){if(oci_num_fields($G))return
new
Min_Result($G);$this->affected_rows=oci_num_rows($G);}return$H;}function
multi_query($F){return$this->_result=$this->query($F);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($F,$m=1){$G=$this->query($F);if(!is_object($G)||!oci_fetch($G->_result))return
false;return
oci_result($G->_result,$m);}}class
Min_Result{var$_result,$_offset=1,$num_rows;function
Min_Result($G){$this->_result=$G;}function
_convert($I){foreach((array)$I
as$w=>$W){if(is_a($W,'OCI-Lob'))$I[$w]=$W->load();}return$I;}function
fetch_assoc(){return$this->_convert(oci_fetch_assoc($this->_result));}function
fetch_row(){return$this->_convert(oci_fetch_row($this->_result));}function
fetch_field(){$f=$this->_offset++;$H=new
stdClass;$H->name=oci_field_name($this->_result,$f);$H->orgname=$H->name;$H->type=oci_field_type($this->_result,$f);$H->charsetnr=(ereg("raw|blob|bfile",$H->type)?63:0);return$H;}function
__destruct(){oci_free_statement($this->_result);}}}elseif(extension_loaded("pdo_oci")){class
Min_DB
extends
Min_PDO{var$extension="PDO_OCI";function
connect($L,$U,$D){$this->dsn("oci:dbname=//$L;charset=AL32UTF8",$U,$D);return
true;}function
select_db($ob){return
true;}}}function
idf_escape($s){return'"'.str_replace('"','""',$s).'"';}function
table($s){return
idf_escape($s);}function
connect(){global$b;$h=new
Min_DB;$kb=$b->credentials();if($h->connect($kb[0],$kb[1],$kb[2]))return$h;return$h->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($F,$Z,$y,$B=0,$pf=" "){return($B?" * FROM (SELECT t.*, rownum AS rnum FROM (SELECT $F$Z) t WHERE rownum <= ".($y+$B).") WHERE rnum > $B":($y!==null?" * FROM (SELECT $F$Z) WHERE rownum <= ".($y+$B):" $F$Z"));}function
limit1($F,$Z){return" $F$Z";}function
db_collation($k,$Ua){global$h;return$h->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$h;return$h->result("SELECT USER FROM DUAL");}function
tables_list(){return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."
UNION SELECT view_name, 'view' FROM user_views");}function
count_tables($j){return
array();}function
table_status($A=""){$H=array();$mf=q($A);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine", avg_row_len * num_rows "Data_length", num_rows "Rows" FROM all_tables WHERE tablespace_name = '.q(DB).($A!=""?" AND table_name = $mf":"")."
UNION SELECT view_name, 'view', 0, 0 FROM user_views".($A!=""?" WHERE view_name = $mf":""))as$I){if($A!="")return$I;$H[$I["Name"]]=$I;}return$H;}function
is_view($P){return$P["Engine"]=="view";}function
fk_support($P){return
true;}function
fields($O){$H=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($O)." ORDER BY column_id")as$I){$S=$I["DATA_TYPE"];$x="$I[DATA_PRECISION],$I[DATA_SCALE]";if($x==",")$x=$I["DATA_LENGTH"];$H[$I["COLUMN_NAME"]]=array("field"=>$I["COLUMN_NAME"],"full_type"=>$S.($x?"($x)":""),"type"=>strtolower($S),"length"=>$x,"default"=>$I["DATA_DEFAULT"],"null"=>($I["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$H;}function
indexes($O,$i=null){$H=array();foreach(get_rows("SELECT uic.*, uc.constraint_type
FROM user_ind_columns uic
LEFT JOIN user_constraints uc ON uic.index_name = uc.constraint_name AND uic.table_name = uc.table_name
WHERE uic.table_name = ".q($O)."
ORDER BY uc.constraint_type, uic.column_position",$i)as$I){$H[$I["INDEX_NAME"]]["type"]=($I["CONSTRAINT_TYPE"]=="P"?"PRIMARY":($I["CONSTRAINT_TYPE"]=="U"?"UNIQUE":"INDEX"));$H[$I["INDEX_NAME"]]["columns"][]=$I["COLUMN_NAME"];$H[$I["INDEX_NAME"]]["lengths"][]=($I["CHAR_LENGTH"]&&$I["CHAR_LENGTH"]!=$I["COLUMN_LENGTH"]?$I["CHAR_LENGTH"]:null);}return$H;}function
view($A){$J=get_rows('SELECT text "select" FROM user_views WHERE view_name = '.q($A));return
reset($J);}function
collations(){return
array();}function
information_schema($k){return
false;}function
error(){global$h;return
h($h->error);}function
exact_value($W){return
q($W);}function
explain($h,$F){$h->query("EXPLAIN PLAN FOR $F");return$h->query("SELECT * FROM plan_table");}function
found_rows($P,$Z){}function
alter_table($O,$A,$n,$lc,$Ya,$Nb,$e,$za,$se){$c=$Bb=array();foreach($n
as$m){$W=$m[1];if($W&&$m[0]!=""&&idf_escape($m[0])!=$W[0])queries("ALTER TABLE ".table($O)." RENAME COLUMN ".idf_escape($m[0])." TO $W[0]");if($W)$c[]=($O!=""?($m[0]!=""?"MODIFY (":"ADD ("):"  ").implode($W).($O!=""?")":"");else$Bb[]=idf_escape($m[0]);}if($O=="")return
queries("CREATE TABLE ".table($A)." (\n".implode(",\n",$c)."\n)");return(!$c||queries("ALTER TABLE ".table($O)."\n".implode("\n",$c)))&&(!$Bb||queries("ALTER TABLE ".table($O)." DROP (".implode(", ",$Bb).")"))&&($O==$A||queries("ALTER TABLE ".table($O)." RENAME TO ".table($A)));}function
foreign_keys($O){return
array();}function
truncate_tables($Q){return
apply_queries("TRUNCATE TABLE",$Q);}function
drop_views($Y){return
apply_queries("DROP VIEW",$Y);}function
drop_tables($Q){return
apply_queries("DROP TABLE",$Q);}function
begin(){return
true;}function
insert_into($O,$M){return
queries("INSERT INTO ".table($O)." (".implode(", ",array_keys($M)).")\nVALUES (".implode(", ",$M).")");}function
last_id(){return
0;}function
schemas(){return
get_vals("SELECT DISTINCT owner FROM dba_segments WHERE owner IN (SELECT username FROM dba_users WHERE default_tablespace NOT IN ('SYSTEM','SYSAUX'))");}function
get_schema(){global$h;return$h->result("SELECT sys_context('USERENV', 'SESSION_USER') FROM dual");}function
set_schema($lf){global$h;return$h->query("ALTER SESSION SET CURRENT_SCHEMA = ".idf_escape($lf));}function
show_variables(){return
get_key_vals('SELECT name, display_value FROM v$parameter');}function
process_list(){return
get_rows('SELECT sess.process AS "process", sess.username AS "user", sess.schemaname AS "schema", sess.status AS "status", sess.wait_class AS "wait_class", sess.seconds_in_wait AS "seconds_in_wait", sql.sql_text AS "sql_text", sess.machine AS "machine", sess.port AS "port"
FROM v$session sess LEFT OUTER JOIN v$sql sql
ON sql.sql_id = sess.sql_id
WHERE sess.type = \'USER\'
ORDER BY PROCESS
');}function
show_status(){$J=get_rows('SELECT * FROM v$instance');return
reset($J);}function
convert_field($m){}function
unconvert_field($m,$H){return$H;}function
support($fc){return
ereg("view|scheme|processlist|drop_col|variables|status",$fc);}$v="oracle";$T=array();$Af=array();foreach(array('Zahlen'=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),'Datum oder Zeit'=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),'Zeichenketten'=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),'Bin√§r'=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$w=>$W){$T+=$W;$Af[$w]=array_keys($W);}$rg=array();$Xd=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$vc=array("length","lower","round","upper");$_c=array("avg","count","count distinct","max","min","sum");$Fb=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$Ab["mssql"]="MS SQL";if(isset($_GET["mssql"])){$Ae=array("SQLSRV","MSSQL");define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$l){$this->errno=$l["code"];$this->error.="$l[message]\n";}$this->error=rtrim($this->error);}function
connect($L,$U,$D){$this->_link=@sqlsrv_connect($L,array("UID"=>$U,"PWD"=>$D,"CharacterSet"=>"UTF-8"));if($this->_link){$Kc=sqlsrv_server_info($this->_link);$this->server_info=$Kc['SQLServerVersion'];}else$this->_get_error();return(bool)$this->_link;}function
quote($N){return"'".str_replace("'","''",$N)."'";}function
select_db($ob){return$this->query("USE ".idf_escape($ob));}function
query($F,$lg=false){$G=sqlsrv_query($this->_link,$F);$this->error="";if(!$G){$this->_get_error();return
false;}return$this->store_result($G);}function
multi_query($F){$this->_result=sqlsrv_query($this->_link,$F);$this->error="";if(!$this->_result){$this->_get_error();return
false;}return
true;}function
store_result($G=null){if(!$G)$G=$this->_result;if(sqlsrv_field_metadata($G))return
new
Min_Result($G);$this->affected_rows=sqlsrv_rows_affected($G);return
true;}function
next_result(){return
sqlsrv_next_result($this->_result);}function
result($F,$m=0){$G=$this->query($F);if(!is_object($G))return
false;$I=$G->fetch_row();return$I[$m];}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($G){$this->_result=$G;}function
_convert($I){foreach((array)$I
as$w=>$W){if(is_a($W,'DateTime'))$I[$w]=$W->format("Y-m-d H:i:s");}return$I;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC,SQLSRV_SCROLL_NEXT));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC,SQLSRV_SCROLL_NEXT));}function
fetch_field(){if(!$this->_fields)$this->_fields=sqlsrv_field_metadata($this->_result);$m=$this->_fields[$this->_offset++];$H=new
stdClass;$H->name=$m["Name"];$H->orgname=$m["Name"];$H->type=($m["Type"]==1?254:0);return$H;}function
seek($B){for($q=0;$q<$B;$q++)sqlsrv_fetch($this->_result);}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($L,$U,$D){$this->_link=@mssql_connect($L,$U,$D);if($this->_link){$G=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$I=$G->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$I[0]] $I[1]";}else$this->error=mssql_get_last_message();return(bool)$this->_link;}function
quote($N){return"'".str_replace("'","''",$N)."'";}function
select_db($ob){return
mssql_select_db($ob);}function
query($F,$lg=false){$G=mssql_query($F,$this->_link);$this->error="";if(!$G){$this->error=mssql_get_last_message();return
false;}if($G===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($G);}function
multi_query($F){return$this->_result=$this->query($F);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result);}function
result($F,$m=0){$G=$this->query($F);if(!is_object($G))return
false;return
mssql_result($G->_result,0,$m);}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($G){$this->_result=$G;$this->num_rows=mssql_num_rows($G);}function
fetch_assoc(){return
mssql_fetch_assoc($this->_result);}function
fetch_row(){return
mssql_fetch_row($this->_result);}function
num_rows(){return
mssql_num_rows($this->_result);}function
fetch_field(){$H=mssql_fetch_field($this->_result);$H->orgtable=$H->table;$H->orgname=$H->name;return$H;}function
seek($B){mssql_data_seek($this->_result,$B);}function
__destruct(){mssql_free_result($this->_result);}}}function
idf_escape($s){return"[".str_replace("]","]]",$s)."]";}function
table($s){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($s);}function
connect(){global$b;$h=new
Min_DB;$kb=$b->credentials();if($h->connect($kb[0],$kb[1],$kb[2]))return$h;return$h->error;}function
get_databases(){return
get_vals("EXEC sp_databases");}function
limit($F,$Z,$y,$B=0,$pf=" "){return($y!==null?" TOP (".($y+$B).")":"")." $F$Z";}function
limit1($F,$Z){return
limit($F,$Z,1);}function
db_collation($k,$Ua){global$h;return$h->result("SELECT collation_name FROM sys.databases WHERE name =  ".q($k));}function
engines(){return
array();}function
logged_user(){global$h;return$h->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($j){global$h;$H=array();foreach($j
as$k){$h->select_db($k);$H[$k]=$h->result("SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES");}return$H;}function
table_status($A=""){$H=array();foreach(get_rows("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V')".($A!=""?" AND name = ".q($A):""))as$I){if($A!="")return$I;$H[$I["Name"]]=$I;}return$H;}function
is_view($P){return$P["Engine"]=="VIEW";}function
fk_support($P){return
true;}function
fields($O){$H=array();foreach(get_rows("SELECT c.*, t.name type, d.definition [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($O))as$I){$S=$I["type"];$x=(ereg("char|binary",$S)?$I["max_length"]:($S=="decimal"?"$I[precision],$I[scale]":""));$H[$I["name"]]=array("field"=>$I["name"],"full_type"=>$S.($x?"($x)":""),"type"=>$S,"length"=>$x,"default"=>$I["default"],"null"=>$I["is_nullable"],"auto_increment"=>$I["is_identity"],"collation"=>$I["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$I["is_identity"],);}return$H;}function
indexes($O,$i=null){$H=array();foreach(get_rows("SELECT i.name, key_ordinal, is_unique, is_primary_key, c.name AS column_name
FROM sys.indexes i
INNER JOIN sys.index_columns ic ON i.object_id = ic.object_id AND i.index_id = ic.index_id
INNER JOIN sys.columns c ON ic.object_id = c.object_id AND ic.column_id = c.column_id
WHERE OBJECT_NAME(i.object_id) = ".q($O),$i)as$I){$H[$I["name"]]["type"]=($I["is_primary_key"]?"PRIMARY":($I["is_unique"]?"UNIQUE":"INDEX"));$H[$I["name"]]["lengths"]=array();$H[$I["name"]]["columns"][$I["key_ordinal"]]=$I["column_name"];}return$H;}function
view($A){global$h;return
array("select"=>preg_replace('~^(?:[^[]|\\[[^]]*])*\\s+AS\\s+~isU','',$h->result("SELECT VIEW_DEFINITION FROM INFORMATION_SCHEMA.VIEWS WHERE TABLE_SCHEMA = SCHEMA_NAME() AND TABLE_NAME = ".q($A))));}function
collations(){$H=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$e)$H[ereg_replace("_.*","",$e)][]=$e;return$H;}function
information_schema($k){return
false;}function
error(){global$h;return
nl_br(h(preg_replace('~^(\\[[^]]*])+~m','',$h->error)));}function
exact_value($W){return
q($W);}function
create_database($k,$e){return
queries("CREATE DATABASE ".idf_escape($k).(eregi('^[a-z0-9_]+$',$e)?" COLLATE $e":""));}function
drop_databases($j){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$j)));}function
rename_database($A,$e){if(eregi('^[a-z0-9_]+$',$e))queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $e");queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($A));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".(+$_POST["Auto_increment"]).",1)":"")." PRIMARY KEY";}function
alter_table($O,$A,$n,$lc,$Ya,$Nb,$e,$za,$se){$c=array();foreach($n
as$m){$f=idf_escape($m[0]);$W=$m[1];if(!$W)$c["DROP"][]=" COLUMN $f";else{$W[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$W[1]);if($m[0]=="")$c["ADD"][]="\n  ".implode("",$W).($O==""?substr($lc[$W[0]],16+strlen($W[0])):"");else{unset($W[6]);if($f!=$W[0])queries("EXEC sp_rename ".q(table($O).".$f").", ".q(idf_unescape($W[0])).", 'COLUMN'");$c["ALTER COLUMN ".implode("",$W)][]="";}}}if($O=="")return
queries("CREATE TABLE ".table($A)." (".implode(",",(array)$c["ADD"])."\n)");if($O!=$A)queries("EXEC sp_rename ".q(table($O)).", ".q($A));if($lc)$c[""]=$lc;foreach($c
as$w=>$W){if(!queries("ALTER TABLE ".idf_escape($A)." $w".implode(",",$W)))return
false;}return
true;}function
alter_indexes($O,$c){$t=array();$Bb=array();foreach($c
as$W){if($W[2]=="DROP"){if($W[0]=="PRIMARY")$Bb[]=idf_escape($W[1]);else$t[]=idf_escape($W[1])." ON ".table($O);}elseif(!queries(($W[0]!="PRIMARY"?"CREATE $W[0] ".($W[0]!="INDEX"?"INDEX ":"").idf_escape($W[1]!=""?$W[1]:uniqid($O."_"))." ON ".table($O):"ALTER TABLE ".table($O)." ADD PRIMARY KEY")." $W[2]"))return
false;}return(!$t||queries("DROP INDEX ".implode(", ",$t)))&&(!$Bb||queries("ALTER TABLE ".table($O)." DROP ".implode(", ",$Bb)));}function
begin(){return
queries("BEGIN TRANSACTION");}function
insert_into($O,$M){return
queries("INSERT INTO ".table($O).($M?" (".implode(", ",array_keys($M)).")\nVALUES (".implode(", ",$M).")":"DEFAULT VALUES"));}function
insert_update($O,$M,$De){$sg=array();$Z=array();foreach($M
as$w=>$W){$sg[]="$w = $W";if(isset($De[idf_unescape($w)]))$Z[]="$w = $W";}return
queries("MERGE ".table($O)." USING (VALUES(".implode(", ",$M).")) AS source (c".implode(", c",range(1,count($M))).") ON ".implode(" AND ",$Z)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$sg)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($M)).") VALUES (".implode(", ",$M).");");}function
last_id(){global$h;return$h->result("SELECT SCOPE_IDENTITY()");}function
explain($h,$F){$h->query("SET SHOWPLAN_ALL ON");$H=$h->query($F);$h->query("SET SHOWPLAN_ALL OFF");return$H;}function
found_rows($P,$Z){}function
foreign_keys($O){$H=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($O))as$I){$o=&$H[$I["FK_NAME"]];$o["table"]=$I["PKTABLE_NAME"];$o["source"][]=$I["FKCOLUMN_NAME"];$o["target"][]=$I["PKCOLUMN_NAME"];}return$H;}function
truncate_tables($Q){return
apply_queries("TRUNCATE TABLE",$Q);}function
drop_views($Y){return
queries("DROP VIEW ".implode(", ",array_map('table',$Y)));}function
drop_tables($Q){return
queries("DROP TABLE ".implode(", ",array_map('table',$Q)));}function
move_tables($Q,$Y,$Pf){return
apply_queries("ALTER SCHEMA ".idf_escape($Pf)." TRANSFER",array_merge($Q,$Y));}function
trigger($A){if($A=="")return
array();$J=get_rows("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".q($A));$H=reset($J);if($H)$H["Statement"]=preg_replace('~^.+\\s+AS\\s+~isU','',$H["text"]);return$H;}function
triggers($O){$H=array();foreach(get_rows("SELECT sys1.name,
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing]
FROM sysobjects sys1
JOIN sysobjects sys2 ON sys1.parent_obj = sys2.id
WHERE sys1.xtype = 'TR' AND sys2.name = ".q($O))as$I)$H[$I["name"]]=array($I["Timing"],$I["Event"]);return$H;}function
trigger_options(){return
array("Timing"=>array("AFTER","INSTEAD OF"),"Type"=>array("AS"),);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){global$h;if($_GET["ns"]!="")return$_GET["ns"];return$h->result("SELECT SCHEMA_NAME()");}function
set_schema($kf){return
true;}function
use_sql($ob){return"USE ".idf_escape($ob);}function
show_variables(){return
array();}function
show_status(){return
array();}function
convert_field($m){}function
unconvert_field($m,$H){return$H;}function
support($fc){return
ereg('^(scheme|trigger|view|drop_col)$',$fc);}$v="mssql";$T=array();$Af=array();foreach(array('Zahlen'=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),'Datum oder Zeit'=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),'Zeichenketten'=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),'Bin√§r'=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$w=>$W){$T+=$W;$Af[$w]=array_keys($W);}$rg=array();$Xd=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$vc=array("len","lower","round","upper");$_c=array("avg","count","count distinct","max","min","sum");$Fb=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$Ab=array("server"=>"MySQL")+$Ab;if(!defined("DRIVER")){$Ae=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($L,$U,$D){mysqli_report(MYSQLI_REPORT_OFF);list($Dc,$xe)=explode(":",$L,2);$H=@$this->real_connect(($L!=""?$Dc:ini_get("mysqli.default_host")),($L.$U!=""?$U:ini_get("mysqli.default_user")),($L.$U.$D!=""?$D:ini_get("mysqli.default_pw")),null,(is_numeric($xe)?$xe:ini_get("mysqli.default_port")),(!is_numeric($xe)?$xe:null));if($H){if(method_exists($this,'set_charset'))$this->set_charset("utf8");else$this->query("SET NAMES utf8");}return$H;}function
result($F,$m=0){$G=$this->query($F);if(!$G)return
false;$I=$G->fetch_array();return$I[$m];}function
quote($N){return"'".$this->escape_string($N)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($L,$U,$D){$this->_link=@mysql_connect(($L!=""?$L:ini_get("mysql.default_host")),("$L$U"!=""?$U:ini_get("mysql.default_user")),("$L$U$D"!=""?$D:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset'))mysql_set_charset("utf8",$this->_link);else$this->query("SET NAMES utf8");}else$this->error=mysql_error();return(bool)$this->_link;}function
quote($N){return"'".mysql_real_escape_string($N,$this->_link)."'";}function
select_db($ob){return
mysql_select_db($ob,$this->_link);}function
query($F,$lg=false){$G=@($lg?mysql_unbuffered_query($F,$this->_link):mysql_query($F,$this->_link));$this->error="";if(!$G){$this->errno=mysql_errno($this->_link);$this->error=mysql_error($this->_link);return
false;}if($G===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($G);}function
multi_query($F){return$this->_result=$this->query($F);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($F,$m=0){$G=$this->query($F);if(!$G||!$G->num_rows)return
false;return
mysql_result($G->_result,0,$m);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
Min_Result($G){$this->_result=$G;$this->num_rows=mysql_num_rows($G);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$H=mysql_fetch_field($this->_result,$this->_offset++);$H->orgtable=$H->table;$H->orgname=$H->name;$H->charsetnr=($H->blob?63:0);return$H;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($L,$U,$D){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$L)),$U,$D);$this->query("SET NAMES utf8");return
true;}function
select_db($ob){return$this->query("USE ".idf_escape($ob));}function
query($F,$lg=false){$this->setAttribute(1000,!$lg);return
parent::query($F,$lg);}}}function
idf_escape($s){return"`".str_replace("`","``",$s)."`";}function
table($s){return
idf_escape($s);}function
connect(){global$b;$h=new
Min_DB;$kb=$b->credentials();if($h->connect($kb[0],$kb[1],$kb[2])){$h->query("SET sql_quote_show_create = 1, autocommit = 1");return$h;}$H=$h->error;if(function_exists('iconv')&&!is_utf8($H)&&strlen($if=iconv("windows-1250","utf-8",$H))>strlen($H))$H=$if;return$H;}function
get_databases($kc){global$h;$H=get_session("dbs");if($H===null){$F=($h->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");$H=($kc?slow_query($F):get_vals($F));restart_session();set_session("dbs",$H);stop_session();}return$H;}function
limit($F,$Z,$y,$B=0,$pf=" "){return" $F$Z".($y!==null?$pf."LIMIT $y".($B?" OFFSET $B":""):"");}function
limit1($F,$Z){return
limit($F,$Z,1);}function
db_collation($k,$Ua){global$h;$H=null;$hb=$h->result("SHOW CREATE DATABASE ".idf_escape($k),1);if(preg_match('~ COLLATE ([^ ]+)~',$hb,$_))$H=$_[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$hb,$_))$H=$Ua[$_[1]][-1];return$H;}function
engines(){$H=array();foreach(get_rows("SHOW ENGINES")as$I){if(ereg("YES|DEFAULT",$I["Support"]))$H[]=$I["Engine"];}return$H;}function
logged_user(){global$h;return$h->result("SELECT USER()");}function
tables_list(){global$h;return
get_key_vals("SHOW".($h->server_info>=5?" FULL":"")." TABLES");}function
count_tables($j){$H=array();foreach($j
as$k)$H[$k]=count(get_vals("SHOW TABLES IN ".idf_escape($k)));return$H;}function
table_status($A=""){$H=array();foreach(get_rows("SHOW TABLE STATUS".($A!=""?" LIKE ".q(addcslashes($A,"%_")):""))as$I){if($I["Engine"]=="InnoDB")$I["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$I["Comment"]);if(!isset($I["Rows"]))$I["Comment"]="";if($A!="")return$I;$H[$I["Name"]]=$I;}return$H;}function
is_view($P){return!isset($P["Rows"]);}function
fk_support($P){return
eregi("InnoDB|IBMDB2I",$P["Engine"]);}function
fields($O){$H=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($O))as$I){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$I["Type"],$_);$H[$I["Field"]]=array("field"=>$I["Field"],"full_type"=>$I["Type"],"type"=>$_[1],"length"=>$_[2],"unsigned"=>ltrim($_[3].$_[4]),"default"=>($I["Default"]!=""||ereg("char|set",$_[1])?$I["Default"]:null),"null"=>($I["Null"]=="YES"),"auto_increment"=>($I["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$I["Extra"],$_)?$_[1]:""),"collation"=>$I["Collation"],"privileges"=>array_flip(explode(",",$I["Privileges"])),"comment"=>$I["Comment"],"primary"=>($I["Key"]=="PRI"),);}return$H;}function
indexes($O,$i=null){$H=array();foreach(get_rows("SHOW INDEX FROM ".table($O),$i)as$I){$H[$I["Key_name"]]["type"]=($I["Key_name"]=="PRIMARY"?"PRIMARY":($I["Index_type"]=="FULLTEXT"?"FULLTEXT":($I["Non_unique"]?"INDEX":"UNIQUE")));$H[$I["Key_name"]]["columns"][]=$I["Column_name"];$H[$I["Key_name"]]["lengths"][]=$I["Sub_part"];}return$H;}function
foreign_keys($O){global$h,$Td;static$ve='`(?:[^`]|``)+`';$H=array();$ib=$h->result("SHOW CREATE TABLE ".table($O),1);if($ib){preg_match_all("~CONSTRAINT ($ve) FOREIGN KEY \\(((?:$ve,? ?)+)\\) REFERENCES ($ve)(?:\\.($ve))? \\(((?:$ve,? ?)+)\\)(?: ON DELETE ($Td))?(?: ON UPDATE ($Td))?~",$ib,$qd,PREG_SET_ORDER);foreach($qd
as$_){preg_match_all("~$ve~",$_[2],$uf);preg_match_all("~$ve~",$_[5],$Pf);$H[idf_unescape($_[1])]=array("db"=>idf_unescape($_[4]!=""?$_[3]:$_[4]),"table"=>idf_unescape($_[4]!=""?$_[4]:$_[3]),"source"=>array_map('idf_unescape',$uf[0]),"target"=>array_map('idf_unescape',$Pf[0]),"on_delete"=>($_[6]?$_[6]:"RESTRICT"),"on_update"=>($_[7]?$_[7]:"RESTRICT"),);}}return$H;}function
view($A){global$h;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$h->result("SHOW CREATE VIEW ".table($A),1)));}function
collations(){$H=array();foreach(get_rows("SHOW COLLATION")as$I){if($I["Default"])$H[$I["Charset"]][-1]=$I["Collation"];else$H[$I["Charset"]][]=$I["Collation"];}ksort($H);foreach($H
as$w=>$W)asort($H[$w]);return$H;}function
information_schema($k){global$h;return($h->server_info>=5&&$k=="information_schema")||($h->server_info>=5.5&&$k=="performance_schema");}function
error(){global$h;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$h->error));}function
error_line(){global$h;if(ereg(' at line ([0-9]+)$',$h->error,$Ve))return$Ve[1]-1;}function
exact_value($W){return
q($W)." COLLATE utf8_bin";}function
create_database($k,$e){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($k).($e?" COLLATE ".q($e):""));}function
drop_databases($j){restart_session();set_session("dbs",null);return
apply_queries("DROP DATABASE",$j,'idf_escape');}function
rename_database($A,$e){if(create_database($A,$e)){$We=array();foreach(tables_list()as$O=>$S)$We[]=table($O)." TO ".idf_escape($A).".".table($O);if(!$We||queries("RENAME TABLE ".implode(", ",$We))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$_a=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$t){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$t["columns"],true)){$_a="";break;}if($t["type"]=="PRIMARY")$_a=" UNIQUE";}}return" AUTO_INCREMENT$_a";}function
alter_table($O,$A,$n,$lc,$Ya,$Nb,$e,$za,$se){$c=array();foreach($n
as$m)$c[]=($m[1]?($O!=""?($m[0]!=""?"CHANGE ".idf_escape($m[0]):"ADD"):" ")." ".implode($m[1]).($O!=""?$m[2]:""):"DROP ".idf_escape($m[0]));$c=array_merge($c,$lc);$yf="COMMENT=".q($Ya).($Nb?" ENGINE=".q($Nb):"").($e?" COLLATE ".q($e):"").($za!=""?" AUTO_INCREMENT=$za":"").$se;if($O=="")return
queries("CREATE TABLE ".table($A)." (\n".implode(",\n",$c)."\n) $yf");if($O!=$A)$c[]="RENAME TO ".table($A);$c[]=$yf;return
queries("ALTER TABLE ".table($O)."\n".implode(",\n",$c));}function
alter_indexes($O,$c){foreach($c
as$w=>$W)$c[$w]=($W[2]=="DROP"?"\nDROP INDEX ".idf_escape($W[1]):"\nADD $W[0] ".($W[0]=="PRIMARY"?"KEY ":"").($W[1]!=""?idf_escape($W[1])." ":"").$W[2]);return
queries("ALTER TABLE ".table($O).implode(",",$c));}function
truncate_tables($Q){return
apply_queries("TRUNCATE TABLE",$Q);}function
drop_views($Y){return
queries("DROP VIEW ".implode(", ",array_map('table',$Y)));}function
drop_tables($Q){return
queries("DROP TABLE ".implode(", ",array_map('table',$Q)));}function
move_tables($Q,$Y,$Pf){$We=array();foreach(array_merge($Q,$Y)as$O)$We[]=table($O)." TO ".idf_escape($Pf).".".table($O);return
queries("RENAME TABLE ".implode(", ",$We));}function
copy_tables($Q,$Y,$Pf){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($Q
as$O){$A=($Pf==DB?table("copy_$O"):idf_escape($Pf).".".table($O));if(!queries("DROP TABLE IF EXISTS $A")||!queries("CREATE TABLE $A LIKE ".table($O))||!queries("INSERT INTO $A SELECT * FROM ".table($O)))return
false;}foreach($Y
as$O){$A=($Pf==DB?table("copy_$O"):idf_escape($Pf).".".table($O));$Bg=view($O);if(!queries("DROP VIEW IF EXISTS $A")||!queries("CREATE VIEW $A AS $Bg[select]"))return
false;}return
true;}function
trigger($A){if($A=="")return
array();$J=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($A));return
reset($J);}function
triggers($O){$H=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($O,"%_")))as$I)$H[$I["Trigger"]]=array($I["Timing"],$I["Event"]);return$H;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($A,$S){global$h,$Pb,$Mc,$T;$ua=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$kg="((".implode("|",array_merge(array_keys($T),$ua)).")\\b(?:\\s*\\(((?:[^'\")]*|$Pb)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$ve="\\s*(".($S=="FUNCTION"?"":$Mc).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$kg";$hb=$h->result("SHOW CREATE $S ".idf_escape($A),2);preg_match("~\\(((?:$ve\\s*,?)*)\\)\\s*".($S=="FUNCTION"?"RETURNS\\s+$kg\\s+":"")."(.*)~is",$hb,$_);$n=array();preg_match_all("~$ve\\s*,?~is",$_[1],$qd,PREG_SET_ORDER);foreach($qd
as$ne){$A=str_replace("``","`",$ne[2]).$ne[3];$n[]=array("field"=>$A,"type"=>strtolower($ne[5]),"length"=>preg_replace_callback("~$Pb~s",'normalize_enum',$ne[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$ne[8] $ne[7]"))),"null"=>1,"full_type"=>$ne[4],"inout"=>strtoupper($ne[1]),"collation"=>strtolower($ne[9]),);}if($S!="FUNCTION")return
array("fields"=>$n,"definition"=>$_[11]);return
array("fields"=>$n,"returns"=>array("type"=>$_[12],"length"=>$_[13],"unsigned"=>$_[15],"collation"=>$_[16]),"definition"=>$_[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT * FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
begin(){return
queries("BEGIN");}function
insert_into($O,$M){return
queries("INSERT INTO ".table($O)." (".implode(", ",array_keys($M)).")\nVALUES (".implode(", ",$M).")");}function
insert_update($O,$M,$De){foreach($M
as$w=>$W)$M[$w]="$w = $W";$sg=implode(", ",$M);return
queries("INSERT INTO ".table($O)." SET $sg ON DUPLICATE KEY UPDATE $sg");}function
last_id(){global$h;return$h->result("SELECT LAST_INSERT_ID()");}function
explain($h,$F){return$h->query("EXPLAIN ".($h->server_info?"PARTITIONS ":"").$F);}function
found_rows($P,$Z){return($Z||$P["Engine"]!="InnoDB"?null:$P["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($kf){return
true;}function
create_sql($O,$za){global$h;$H=$h->result("SHOW CREATE TABLE ".table($O),1);if(!$za)$H=preg_replace('~ AUTO_INCREMENT=\\d+~','',$H);return$H;}function
truncate_sql($O){return"TRUNCATE ".table($O);}function
use_sql($ob){return"USE ".idf_escape($ob);}function
trigger_sql($O,$Bf){$H="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($O,"%_")),null,"-- ")as$I)$H.="\n".($Bf=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($I["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($I["Trigger"])." $I[Timing] $I[Event] ON ".table($I["Table"])." FOR EACH ROW\n$I[Statement];;\n";return$H;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
convert_field($m){if(ereg("binary",$m["type"]))return"HEX(".idf_escape($m["field"]).")";if(ereg("geometry|point|linestring|polygon",$m["type"]))return"AsWKT(".idf_escape($m["field"]).")";}function
unconvert_field($m,$H){if(ereg("binary",$m["type"]))$H="UNHEX($H)";if(ereg("geometry|point|linestring|polygon",$m["type"]))$H="GeomFromText($H)";return$H;}function
support($fc){global$h;return!ereg("scheme|sequence|type".($h->server_info<5.1?"|event|partitioning".($h->server_info<5?"|view|routine|trigger":""):""),$fc);}$v="sql";$T=array();$Af=array();foreach(array('Zahlen'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'Datum oder Zeit'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'Zeichenketten'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Listen'=>array("enum"=>65535,"set"=>64),'Bin√§r'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Geometrie'=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),)as$w=>$W){$T+=$W;$Af[$w]=array_keys($W);}$rg=array("unsigned","zerofill","unsigned zerofill");$Xd=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$vc=array("char_length","date","from_unixtime","lower","round","sec_to_time","time_to_sec","upper");$_c=array("avg","count","count distinct","group_concat","max","min","sum");$Fb=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",),array("(^|[^o])int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ia="3.6.4";class
Adminer{var$operators;function
name(){return"<a href='http://www.adminer.org/' id='h1'>Adminer</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_session("pwds"));}function
permanentLogin(){return
password_file();}function
database(){return
DB;}function
databases($kc=true){return
get_databases($kc);}function
queryTimeout(){return
5;}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){global$Ab;echo'<table cellspacing="0">
<tr><th>Datenbank System<td>',html_select("auth[driver]",$Ab,DRIVER,"loginDriver(this);"),'<tr><th>Server<td><input name="auth[server]" value="',h(SERVER),'" title="hostname[:port]" autocapitalize="off">
<tr><th>Benutzer<td><input name="auth[username]" id="username" value="',h($_GET["username"]),'" autocapitalize="off">
<tr><th>Passwort<td><input type="password" name="auth[password]">
<tr><th>Datenbank<td><input name="auth[db]" value="',h($_GET["db"]);?>" autocapitalize="off">
</table>
<script type="text/javascript">
var username = document.getElementById('username');
username.focus();
username.form['auth[driver]'].onchange();
</script>
<?php

echo"<p><input type='submit' value='".'Login'."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],'Passwort speichern')."\n";}function
login($nd,$D){return
true;}function
tableName($Hf){return
h($Hf["Name"]);}function
fieldName($m,$be=0){return'<span title="'.h($m["full_type"]).'">'.h($m["field"]).'</span>';}function
selectLinks($Hf,$M=""){echo'<p class="tabs">';$ld=array("select"=>'Daten ausw√§hlen',"table"=>'Struktur anzeigen');if(is_view($Hf))$ld["view"]='View √§ndern';else$ld["create"]='Tabelle √§ndern';if($M!==null)$ld["edit"]='Neuer Datensatz';foreach($ld
as$w=>$W)echo" <a href='".h(ME)."$w=".urlencode($Hf["Name"]).($w=="edit"?$M:"")."'".bold(isset($_GET[$w])).">$W</a>";echo"\n";}function
foreignKeys($O){return
foreign_keys($O);}function
backwardKeys($O,$Gf){return
array();}function
backwardKeysPrint($Ba,$I){}function
selectQuery($F){global$v,$R;return"<form action='".h(ME)."sql=' method='post'><p><span onclick=\"return !selectEditSql(event, this, '".'Ausf√ºhren'."');\">"."<code class='jush-$v'>".h(str_replace("\n"," ",$F))."</code>"." <a href='".h(ME)."sql=".urlencode($F)."'>".'√Ñndern'."</a>"."</span><input type='hidden' name='token' value='$R'></p></form>\n";}function
rowDescription($O){return"";}function
rowDescriptions($J,$mc){return$J;}function
selectLink($W,$m){}function
selectVal($W,$z,$m){$H=($W===null?"<i>NULL</i>":(ereg("char|binary",$m["type"])&&!ereg("var",$m["type"])?"<code>$W</code>":$W));if(ereg('blob|bytea|raw|file',$m["type"])&&!is_utf8($W))$H=lang(array('%d Byte','%d Bytes'),strlen(html_entity_decode($W,ENT_QUOTES)));return($z?"<a href='".h($z)."'>$H</a>":$H);}function
editVal($W,$m){return$W;}function
selectColumnsPrint($K,$g){global$vc,$_c;print_fieldset("select",'Daten zeigen von',$K);$q=0;$tc=array('Funktionen'=>$vc,'Agregationen'=>$_c);foreach($K
as$w=>$W){$W=$_GET["columns"][$w];echo"<div>".html_select("columns[$q][fun]",array(-1=>"")+$tc,$W["fun"]),"(<select name='columns[$q][col]' onchange='selectFieldChange(this.form);'><option>".optionlist($g,$W["col"],true)."</select>)</div>\n";$q++;}echo"<div>".html_select("columns[$q][fun]",array(-1=>"")+$tc,"","this.nextSibling.nextSibling.onchange();"),"(<select name='columns[$q][col]' onchange='selectAddRow(this);'><option>".optionlist($g,null,true)."</select>)</div>\n","</div></fieldset>\n";}function
selectSearchPrint($Z,$g,$u){print_fieldset("search",'Suchen',$Z);foreach($u
as$q=>$t){if($t["type"]=="FULLTEXT"){echo"(<i>".implode("</i>, <i>",array_map('h',$t["columns"]))."</i>) AGAINST"," <input type='search' name='fulltext[$q]' value='".h($_GET["fulltext"][$q])."' onchange='selectFieldChange(this.form);'>",checkbox("boolean[$q]",1,isset($_GET["boolean"][$q]),"BOOL"),"<br>\n";}}$_GET["where"]=(array)$_GET["where"];reset($_GET["where"]);$La="this.nextSibling.onchange();";for($q=0;$q<=count($_GET["where"]);$q++){list(,$W)=each($_GET["where"]);if(!$W||("$W[col]$W[val]"!=""&&in_array($W["op"],$this->operators))){echo"<div><select name='where[$q][col]' onchange='$La'><option value=''>(".'beliebig'.")".optionlist($g,$W["col"],true)."</select>",html_select("where[$q][op]",$this->operators,$W["op"],$La),"<input type='search' name='where[$q][val]' value='".h($W["val"])."' onchange='".($W?"selectFieldChange(this.form)":"selectAddRow(this)").";' onsearch='selectSearch(this);'></div>\n";}}echo"</div></fieldset>\n";}function
selectOrderPrint($be,$g,$u){print_fieldset("sort",'Ordnen',$be);$q=0;foreach((array)$_GET["order"]as$w=>$W){if(isset($g[$W])){echo"<div><select name='order[$q]' onchange='selectFieldChange(this.form);'><option>".optionlist($g,$W,true)."</select>",checkbox("desc[$q]",1,isset($_GET["desc"][$w]),'absteigend')."</div>\n";$q++;}}echo"<div><select name='order[$q]' onchange='selectAddRow(this);'><option>".optionlist($g,null,true)."</select>","<label><input type='checkbox' name='desc[$q]' value='1'>".'absteigend'."</label></div>\n";echo"</div></fieldset>\n";}function
selectLimitPrint($y){echo"<fieldset><legend>".'Begrenzung'."</legend><div>";echo"<input type='number' name='limit' class='size' value='".h($y)."' onchange='selectFieldChange(this.form);'>","</div></fieldset>\n";}function
selectLengthPrint($Sf){if($Sf!==null){echo"<fieldset><legend>".'Textl√§nge'."</legend><div>","<input type='number' name='text_length' class='size' value='".h($Sf)."'>","</div></fieldset>\n";}}function
selectActionPrint($u){echo"<fieldset><legend>".'Aktion'."</legend><div>","<input type='submit' value='".'Daten zeigen von'."'>"," <span id='noindex' title='".'Full table scan'."'></span>","<script type='text/javascript'>\n","var indexColumns = ";$g=array();foreach($u
as$t){if($t["type"]!="FULLTEXT")$g[reset($t["columns"])]=1;}$g[""]=1;foreach($g
as$w=>$W)json_row($w);echo";\n","selectFieldChange(document.getElementById('form'));\n","</script>\n","</div></fieldset>\n";}function
selectCommandPrint(){return!information_schema(DB);}function
selectImportPrint(){return!information_schema(DB);}function
selectEmailPrint($Jb,$g){}function
selectColumnsProcess($g,$u){global$vc,$_c;$K=array();$yc=array();foreach((array)$_GET["columns"]as$w=>$W){if($W["fun"]=="count"||(isset($g[$W["col"]])&&(!$W["fun"]||in_array($W["fun"],$vc)||in_array($W["fun"],$_c)))){$K[$w]=apply_sql_function($W["fun"],(isset($g[$W["col"]])?idf_escape($W["col"]):"*"));if(!in_array($W["fun"],$_c))$yc[]=$K[$w];}}return
array($K,$yc);}function
selectSearchProcess($n,$u){global$v;$H=array();foreach($u
as$q=>$t){if($t["type"]=="FULLTEXT"&&$_GET["fulltext"][$q]!="")$H[]="MATCH (".implode(", ",array_map('idf_escape',$t["columns"])).") AGAINST (".q($_GET["fulltext"][$q]).(isset($_GET["boolean"][$q])?" IN BOOLEAN MODE":"").")";}foreach((array)$_GET["where"]as$W){if("$W[col]$W[val]"!=""&&in_array($W["op"],$this->operators)){$bb=" $W[op]";if(ereg('IN$',$W["op"])){$Hc=process_length($W["val"]);$bb.=" (".($Hc!=""?$Hc:"NULL").")";}elseif(!$W["op"])$bb.=$W["val"];elseif($W["op"]=="LIKE %%")$bb=" LIKE ".$this->processInput($n[$W["col"]],"%$W[val]%");elseif(!ereg('NULL$',$W["op"]))$bb.=" ".$this->processInput($n[$W["col"]],$W["val"]);if($W["col"]!="")$H[]=idf_escape($W["col"]).$bb;else{$Va=array();foreach($n
as$A=>$m){$Sc=ereg('char|text|enum|set',$m["type"]);if((is_numeric($W["val"])||!ereg('int|float|double|decimal|bit',$m["type"]))&&(!ereg("[\x80-\xFF]",$W["val"])||$Sc)){$A=idf_escape($A);$Va[]=($v=="sql"&&$Sc&&!ereg('^utf8',$m["collation"])?"CONVERT($A USING utf8)":$A);}}$H[]=($Va?"(".implode("$bb OR ",$Va)."$bb)":"0");}}}return$H;}function
selectOrderProcess($n,$u){$H=array();foreach((array)$_GET["order"]as$w=>$W){if(isset($n[$W])||preg_match('~^((COUNT\\(DISTINCT |[A-Z0-9_]+\\()(`(?:[^`]|``)+`|"(?:[^"]|"")+")\\)|COUNT\\(\\*\\))$~',$W))$H[]=(isset($n[$W])?idf_escape($W):$W).(isset($_GET["desc"][$w])?" DESC":"");}return$H;}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"50");}function
selectLengthProcess(){return(isset($_GET["text_length"])?$_GET["text_length"]:"100");}function
selectEmailProcess($Z,$mc){return
false;}function
selectQueryBuild($K,$Z,$yc,$be,$y,$C){return"";}function
messageQuery($F){global$v;restart_session();$Bc=&get_session("queries");$r="sql-".count($Bc[$_GET["db"]]);if(strlen($F)>1e6)$F=ereg_replace('[\x80-\xFF]+$','',substr($F,0,1e6))."\n...";$Bc[$_GET["db"]][]=array($F,time());return" <span class='time'>".@date("H:i:s")."</span> <a href='#$r' onclick=\"return !toggle('$r');\">".'SQL-Query'."</a><div id='$r' class='hidden'><pre><code class='jush-$v'>".shorten_utf8($F,1000).'</code></pre><p><a href="'.h(str_replace("db=".urlencode(DB),"db=".urlencode($_GET["db"]),ME).'sql=&history='.(count($Bc[$_GET["db"]])-1)).'">'.'√Ñndern'.'</a></div>';}function
editFunctions($m){global$Fb;$H=($m["null"]?"NULL/":"");foreach($Fb
as$w=>$vc){if(!$w||(!isset($_GET["call"])&&(isset($_GET["select"])||where($_GET)))){foreach($vc
as$ve=>$W){if(!$ve||ereg($ve,$m["type"]))$H.="/$W";}if($w&&!ereg('set|blob|bytea|raw|file',$m["type"]))$H.="/=";}}return
explode("/",$H);}function
editInput($O,$m,$ya,$X){if($m["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$ya value='-1' checked><i>".'Original'."</i></label> ":"").($m["null"]?"<label><input type='radio'$ya value=''".($X!==null||isset($_GET["select"])?"":" checked")."><i>NULL</i></label> ":"").enum_input("radio",$ya,$m,$X,0);return"";}function
processInput($m,$X,$p=""){if($p=="=")return$X;$A=$m["field"];$H=($m["type"]=="bit"&&ereg("^([0-9]+|b'[0-1]+')\$",$X)?$X:q($X));if(ereg('^(now|getdate|uuid)$',$p))$H="$p()";elseif(ereg('^current_(date|timestamp)$',$p))$H=$p;elseif(ereg('^([+-]|\\|\\|)$',$p))$H=idf_escape($A)." $p $H";elseif(ereg('^[+-] interval$',$p))$H=idf_escape($A)." $p ".(preg_match("~^(\\d+|'[0-9.: -]') [A-Z_]+$~i",$X)?$X:$H);elseif(ereg('^(addtime|subtime|concat)$',$p))$H="$p(".idf_escape($A).", $H)";elseif(ereg('^(md5|sha1|password|encrypt)$',$p))$H="$p($H)";return
unconvert_field($m,$H);}function
dumpOutput(){$H=array('text'=>'anzeigen','file'=>'Datei');if(function_exists('gzencode'))$H['gz']='gzip';if(function_exists('bzcompress'))$H['bz2']='bzip2';return$H;}function
dumpFormat(){return
array('sql'=>'SQL','csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpDatabase($k){}function
dumpTable($O,$Bf,$Tc=false){if($_POST["format"]!="sql"){echo"\xef\xbb\xbf";if($Bf)dump_csv(array_keys(fields($O)));}elseif($Bf){$hb=create_sql($O,$_POST["auto_increment"]);if($hb){if($Bf=="DROP+CREATE")echo"DROP ".($Tc?"VIEW":"TABLE")." IF EXISTS ".table($O).";\n";if($Tc)$hb=remove_definer($hb);echo"$hb;\n\n";}}}function
dumpData($O,$Bf,$F){global$h,$v;$sd=($v=="sqlite"?0:1048576);if($Bf){if($_POST["format"]=="sql"&&$Bf=="TRUNCATE+INSERT")echo
truncate_sql($O).";\n";if($_POST["format"]=="sql")$n=fields($O);$G=$h->query($F,1);if($G){$Oc="";$Ja="";$Yc=array();$Df="";while($I=$G->fetch_row()){if(!$Yc){$zg=array();foreach($I
as$W){$m=$G->fetch_field();$Yc[]=$m->name;$w=idf_escape($m->name);$zg[]="$w = VALUES($w)";}$Df=($Bf=="INSERT+UPDATE"?"\nON DUPLICATE KEY UPDATE ".implode(", ",$zg):"").";\n";}if($_POST["format"]!="sql"){if($Bf=="table"){dump_csv($Yc);$Bf="INSERT";}dump_csv($I);}else{if(!$Oc)$Oc="INSERT INTO ".table($O)." (".implode(", ",array_map('idf_escape',$Yc)).") VALUES";foreach($I
as$w=>$W)$I[$w]=($W!==null?(ereg('int|float|double|decimal|bit',$n[$Yc[$w]]["type"])&&$W!=''?$W:q($W)):"NULL");$if=($sd?"\n":" ")."(".implode(",\t",$I).")";if(!$Ja)$Ja=$Oc.$if;elseif(strlen($Ja)+4+strlen($if)+strlen($Df)<$sd)$Ja.=",$if";else{echo$Ja.$Df;$Ja=$Oc.$if;}}}if($Ja)echo$Ja.$Df;}elseif($_POST["format"]=="sql")echo"-- ".str_replace("\n"," ",$h->error)."\n";}}function
dumpFilename($Fc){return
friendly_url($Fc!=""?$Fc:(SERVER!=""?SERVER:"localhost"));}function
dumpHeaders($Fc,$Fd=false){$le=$_POST["output"];$bc=(ereg('sql',$_POST["format"])?"sql":($Fd?"tar":"csv"));header("Content-Type: ".($le=="bz2"?"application/x-bzip":($le=="gz"?"application/x-gzip":($bc=="tar"?"application/x-tar":($bc=="sql"||$le!="file"?"text/plain":"text/csv")."; charset=utf-8"))));if($le=="bz2")ob_start('bzcompress',1e6);if($le=="gz")ob_start('gzencode',1e6);return$bc;}function
homepage(){echo'<p>'.($_GET["ns"]==""?'<a href="'.h(ME).'database=">'.'Datenbank √§ndern'."</a>\n":""),(support("scheme")?"<a href='".h(ME)."scheme='>".($_GET["ns"]!=""?'Schema √§ndern':'Neues Schema')."</a>\n":""),($_GET["ns"]!==""?'<a href="'.h(ME).'schema=">'.'Datenbankschema'."</a>\n":""),(support("privileges")?"<a href='".h(ME)."privileges='>".'Rechte'."</a>\n":"");return
true;}function
navigation($Ed){global$ia,$R,$v,$Ab;echo'<h1>
',$this->name(),' <span class="version">',$ia,'</span>
<a href="http://www.adminer.org/#download" id="version">',(version_compare($ia,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($Ed=="auth"){$jc=true;foreach((array)$_SESSION["pwds"]as$_b=>$sf){foreach($sf
as$L=>$xg){foreach($xg
as$U=>$D){if($D!==null){if($jc){echo"<p id='logins' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";$jc=false;}$qb=$_SESSION["db"][$_b][$L][$U];foreach(($qb?array_keys($qb):array(""))as$k)echo"<a href='".h(auth_url($_b,$L,$U,$k))."'>($Ab[$_b]) ".h($U.($L!=""?"@$L":"").($k!=""?" - $k":""))."</a><br>\n";}}}}}else{echo'<form action="" method="post">
<p class="logout">
';if(DB==""||!$Ed){echo"<a href='".h(ME)."sql='".bold(isset($_GET["sql"])).">".'SQL-Query'."</a>\n";if(support("dump"))echo"<a href='".h(ME)."dump=".urlencode(isset($_GET["table"])?$_GET["table"]:$_GET["select"])."' id='dump'".bold(isset($_GET["dump"])).">".'Export'."</a>\n";}echo'<input type="submit" name="logout" value="Abmelden" id="logout">
<input type="hidden" name="token" value="',$R,'">
</p>
</form>
';$this->databasesPrint($Ed);if($_GET["ns"]!==""&&!$Ed&&DB!=""){echo'<p><a href="'.h(ME).'create="'.bold($_GET["create"]==="").">".'Neue Tabelle'."</a>\n";$Q=tables_list();if(!$Q)echo"<p class='message'>".'Keine Tabellen.'."\n";else{$this->tablesPrint($Q);$ld=array();foreach($Q
as$O=>$S)$ld[]=preg_quote($O,'/');echo"<script type='text/javascript'>\n","var jushLinks = { $v: [ '".js_escape(ME)."table=\$&', /\\b(".implode("|",$ld).")\\b/g ] };\n";foreach(array("bac","bra","sqlite_quo","mssql_bra")as$W)echo"jushLinks.$W = jushLinks.$v;\n";echo"</script>\n";}}}}function
databasesPrint($Ed){global$h;$j=$this->databases();echo'<form action="">
<p id="dbs">
';hidden_fields_get();echo($j?'<select name="db" onmousedown="dbMouseDown(event, this);" onchange="dbChange(this);">'.optionlist(array(""=>"(".'Datenbank'.")")+$j,DB).'</select>':'<input name="db" value="'.h(DB).'" autocapitalize="off">'),'<input type="submit" value="Benutzung"',($j?" class='hidden'":""),'>
';if($Ed!="db"&&DB!=""&&$h->select_db(DB)){if(support("scheme")){echo"<br>".html_select("ns",array(""=>"(".'Schema'.")")+schemas(),$_GET["ns"],"this.form.submit();");if($_GET["ns"]!="")set_schema($_GET["ns"]);}}echo(isset($_GET["sql"])?'<input type="hidden" name="sql" value="">':(isset($_GET["schema"])?'<input type="hidden" name="schema" value="">':(isset($_GET["dump"])?'<input type="hidden" name="dump" value="">':""))),"</p></form>\n";}function
tablesPrint($Q){echo"<p id='tables' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";foreach($Q
as$O=>$S){echo'<a href="'.h(ME).'select='.urlencode($O).'"'.bold($_GET["select"]==$O).">".'zeigen'."</a> ",'<a href="'.h(ME).'table='.urlencode($O).'"'.bold($_GET["table"]==$O)." title='".'Struktur anzeigen'."'>".$this->tableName(array("Name"=>$O))."</a><br>\n";}}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);if($b->operators===null)$b->operators=$Xd;function
page_header($Vf,$l="",$Ia=array(),$Wf=""){global$ca,$b,$h,$Ab;header("Content-Type: text/html; charset=utf-8");if($b->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}$Xf=$Vf.($Wf!=""?": ".h($Wf):"");$Yf=strip_tags($Xf.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());echo'<!DOCTYPE html>
<html lang="de" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$Yf,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=3.6.4",'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=3.6.4",'"></script>
';if($b->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=3.6.4",'">
<link rel="apple-touch-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=3.6.4",'">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="ltr nojs" onkeydown="bodyKeydown(event);" onclick="bodyClick(event);" onload="bodyLoad(\'',(is_object($h)?substr($h->server_info,0,3):""),'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion();"),'">
<script type="text/javascript">
document.body.className = document.body.className.replace(/ nojs/, \' js\');
</script>

<div id="content">
';if($Ia!==null){$z=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($z?$z:".").'">'.$Ab[DRIVER].'</a> &raquo; ';$z=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$L=(SERVER!=""?h(SERVER):'Server');if($Ia===false)echo"$L\n";else{echo"<a href='".($z?h($z):".")."' accesskey='1' title='Alt+Shift+1'>$L</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Ia)))echo'<a href="'.h($z."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($Ia)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($Ia
as$w=>$W){$ub=(is_array($W)?$W[1]:$W);if($ub!="")echo'<a href="'.h(ME."$w=").urlencode(is_array($W)?$W[0]:$W).'">'.h($ub).'</a> &raquo; ';}}echo"$Vf\n";}}echo"<h2>$Xf</h2>\n";restart_session();$tg=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$Bd=$_SESSION["messages"][$tg];if($Bd){echo"<div class='message'>".implode("</div>\n<div class='message'>",$Bd)."</div>\n";unset($_SESSION["messages"][$tg]);}$j=&get_session("dbs");if(DB!=""&&$j&&!in_array(DB,$j,true))$j=null;stop_session();if($l)echo"<div class='error'>$l</div>\n";define("PAGE_HEADER",1);}function
page_footer($Ed=""){global$b;echo'</div>

<div id="menu">
';$b->navigation($Ed);echo'</div>
';}function
int32($Hd){while($Hd>=2147483648)$Hd-=4294967296;while($Hd<=-2147483649)$Hd+=4294967296;return(int)$Hd;}function
long2str($V,$Dg){$if='';foreach($V
as$W)$if.=pack('V',$W);if($Dg)return
substr($if,0,end($V));return$if;}function
str2long($if,$Dg){$V=array_values(unpack('V*',str_pad($if,4*ceil(strlen($if)/4),"\0")));if($Dg)$V[]=strlen($if);return$V;}function
xxtea_mx($Ig,$Hg,$Ef,$Wc){return
int32((($Ig>>5&0x7FFFFFF)^$Hg<<2)+(($Hg>>3&0x1FFFFFFF)^$Ig<<4))^int32(($Ef^$Hg)+($Wc^$Ig));}function
encrypt_string($_f,$w){if($_f=="")return"";$w=array_values(unpack("V*",pack("H*",md5($w))));$V=str2long($_f,true);$Hd=count($V)-1;$Ig=$V[$Hd];$Hg=$V[0];$E=floor(6+52/($Hd+1));$Ef=0;while($E-->0){$Ef=int32($Ef+0x9E3779B9);$Eb=$Ef>>2&3;for($me=0;$me<$Hd;$me++){$Hg=$V[$me+1];$Gd=xxtea_mx($Ig,$Hg,$Ef,$w[$me&3^$Eb]);$Ig=int32($V[$me]+$Gd);$V[$me]=$Ig;}$Hg=$V[0];$Gd=xxtea_mx($Ig,$Hg,$Ef,$w[$me&3^$Eb]);$Ig=int32($V[$Hd]+$Gd);$V[$Hd]=$Ig;}return
long2str($V,false);}function
decrypt_string($_f,$w){if($_f=="")return"";$w=array_values(unpack("V*",pack("H*",md5($w))));$V=str2long($_f,false);$Hd=count($V)-1;$Ig=$V[$Hd];$Hg=$V[0];$E=floor(6+52/($Hd+1));$Ef=int32($E*0x9E3779B9);while($Ef){$Eb=$Ef>>2&3;for($me=$Hd;$me>0;$me--){$Ig=$V[$me-1];$Gd=xxtea_mx($Ig,$Hg,$Ef,$w[$me&3^$Eb]);$Hg=int32($V[$me]-$Gd);$V[$me]=$Hg;}$Ig=$V[$Hd];$Gd=xxtea_mx($Ig,$Hg,$Ef,$w[$me&3^$Eb]);$Hg=int32($V[0]-$Gd);$V[0]=$Hg;$Ef=int32($Ef-0x9E3779B9);}return
long2str($V,true);}$h='';$R=$_SESSION["token"];if(!$_SESSION["token"])$_SESSION["token"]=rand(1,1e6);$we=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$W){list($w)=explode(":",$W);$we[$w]=$W;}}$d=$_POST["auth"];if($d){session_regenerate_id();$_SESSION["pwds"][$d["driver"]][$d["server"]][$d["username"]]=$d["password"];$_SESSION["db"][$d["driver"]][$d["server"]][$d["username"]][$d["db"]]=true;if($d["permanent"]){$w=base64_encode($d["driver"])."-".base64_encode($d["server"])."-".base64_encode($d["username"])."-".base64_encode($d["db"]);$Ge=$b->permanentLogin();$we[$w]="$w:".base64_encode($Ge?encrypt_string($d["password"],$Ge):"");cookie("adminer_permanent",implode(" ",$we));}if(count($_POST)==1||DRIVER!=$d["driver"]||SERVER!=$d["server"]||$_GET["username"]!==$d["username"]||DB!=$d["db"])redirect(auth_url($d["driver"],$d["server"],$d["username"],$d["db"]));}elseif($_POST["logout"]){if($R&&$_POST["token"]!=$R){page_header('Abmelden','CSRF Token ung√ºltig. Bitte die Formulardaten erneut abschicken.');page_footer("db");exit;}else{foreach(array("pwds","db","dbs","queries")as$w)set_session($w,null);unset_permanent();redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),'Abmeldung erfolgreich.');}}elseif($we&&!$_SESSION["pwds"]){session_regenerate_id();$Ge=$b->permanentLogin();foreach($we
as$w=>$W){list(,$Pa)=explode(":",$W);list($_b,$L,$U,$k)=array_map('base64_decode',explode("-",$w));$_SESSION["pwds"][$_b][$L][$U]=decrypt_string(base64_decode($Pa),$Ge);$_SESSION["db"][$_b][$L][$U][$k]=true;}}function
unset_permanent(){global$we;foreach($we
as$w=>$W){list($_b,$L,$U,$k)=array_map('base64_decode',explode("-",$w));if($_b==DRIVER&&$L==SERVER&&$U==$_GET["username"]&&$k==DB)unset($we[$w]);}cookie("adminer_permanent",implode(" ",$we));}function
auth_error($Vb=null){global$h,$b,$R;$tf=session_name();$l="";if(!$_COOKIE[$tf]&&$_GET[$tf]&&ini_bool("session.use_only_cookies"))$l='Sitzungen m√ºssen aktiviert sein.';elseif(isset($_GET["username"])){if(($_COOKIE[$tf]||$_GET[$tf])&&!$R)$l='Sitzungsdauer abgelaufen, bitte erneut anmelden.';else{$D=&get_session("pwds");if($D!==null){$l=h($Vb?$Vb->getMessage():(is_string($h)?$h:'Ung√ºltige Anmelde-Informationen.'));$D=null;}unset_permanent();}}page_header('Login',$l,null);echo"<form action='' method='post'>\n";$b->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);unset_permanent();page_header('Keine Erweiterungen installiert',sprintf('Keine der unterst√ºtzten PHP-Erweiterungen (%s) ist vorhanden.',implode(", ",$Ae)),false);page_footer("auth");exit;}$h=connect();}if(is_string($h)||!$b->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$R=$_SESSION["token"];if($d&&$_POST["token"])$_POST["token"]=$R;$l='';if($_POST){if($_POST["token"]!=$R){$Lc="max_input_vars";$wd=ini_get($Lc);if(extension_loaded("suhosin")){foreach(array("suhosin.request.max_vars","suhosin.post.max_vars")as$w){$W=ini_get($w);if($W&&(!$wd||$W<$wd)){$Lc=$w;$wd=$W;}}}$l=(!$_POST["token"]&&$wd?sprintf('Die maximal erlaubte Anzahl der Felder ist √ºberschritten. Bitte %s erh√∂hen.',"'$Lc'"):'CSRF Token ung√ºltig. Bitte die Formulardaten erneut abschicken.');}}elseif($_SERVER["REQUEST_METHOD"]=="POST")$l=sprintf('POST data zu gross. Reduzieren Sie die Gr√∂sse oder vergr√∂ssern Sie den Wert %s in der Konfiguration.',"'post_max_size'");if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false){session_cache_limiter("");session_write_close();}function
connect_error(){global$b,$h,$R,$l,$Ab;$j=array();if(DB!="")page_header('Datenbank'.": ".h(DB),'Datenbank ung√ºltig.',true);else{if($_POST["db"]&&!$l)queries_redirect(substr(ME,0,-1),'Datenbanken entfernt.',drop_databases($_POST["db"]));page_header('Datenbank ausw√§hlen',$l,false);echo"<p><a href='".h(ME)."database='>".'Neue Datenbank'."</a>\n";foreach(array('privileges'=>'Rechte','processlist'=>'Prozessliste','variables'=>'Variablen','status'=>'Status',)as$w=>$W){if(support($w))echo"<a href='".h(ME)."$w='>$W</a>\n";}echo"<p>".sprintf('Version %s: %s, mit PHP-Erweiterung %s',$Ab[DRIVER],"<b>$h->server_info</b>","<b>$h->extension</b>")."\n","<p>".sprintf('Angemeldet als: %s',"<b>".h(logged_user())."</b>")."\n";$Te="<a href='".h(ME)."refresh=1'>".'Aktualisieren'."</a>\n";$j=$b->databases();if($j){$lf=support("scheme");$Ua=collations();echo"<form action='' method='post'>\n","<table cellspacing='0' class='checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);'>\n","<thead><tr><td>&nbsp;<th>".'Datenbank'."<td>".'Collation'."<td>".'Tabellen'."</thead>\n";foreach($j
as$k){$df=h(ME)."db=".urlencode($k);echo"<tr".odd()."><td>".checkbox("db[]",$k,in_array($k,(array)$_POST["db"])),"<th><a href='$df'>".h($k)."</a>","<td><a href='$df".($lf?"&amp;ns=":"")."&amp;database=' title='".'Datenbank √§ndern'."'>".nbsp(db_collation($k,$Ua))."</a>","<td align='right'><a href='$df&amp;schema=' id='tables-".h($k)."' title='".'Datenbankschema'."'>?</a>","\n";}echo"</table>\n","<script type='text/javascript'>tableCheck();</script>\n","<p><input type='submit' name='drop' value='".'Entfernen'."'".confirm("formChecked(this, /db/)").">\n","<input type='hidden' name='token' value='$R'>\n",$Te,"</form>\n";}else
echo"<p>$Te";}page_footer("db");if($j)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=connect');</script>\n";}if(isset($_GET["status"]))$_GET["variables"]=$_GET["status"];if(!(DB!=""?$h->select_db(DB):isset($_GET["sql"])||isset($_GET["dump"])||isset($_GET["database"])||isset($_GET["processlist"])||isset($_GET["privileges"])||isset($_GET["user"])||isset($_GET["variables"])||$_GET["script"]=="connect"||$_GET["script"]=="kill")){if(DB!=""||$_GET["refresh"]){restart_session();set_session("dbs",null);}connect_error();exit;}if(support("scheme")&&DB!=""&&$_GET["ns"]!==""){if(!isset($_GET["ns"]))redirect(preg_replace('~ns=[^&]*&~','',ME)."ns=".get_schema());if(!set_schema($_GET["ns"])){page_header('Schema'.": ".h($_GET["ns"]),'Schema nicht g√ºltig.',true);page_footer("ns");exit;}}function
select($G,$i=null,$Ec="",$ee=array()){$ld=array();$u=array();$g=array();$Ga=array();$T=array();$H=array();odd('');for($q=0;$I=$G->fetch_row();$q++){if(!$q){echo"<table cellspacing='0' class='nowrap'>\n","<thead><tr>";for($Uc=0;$Uc<count($I);$Uc++){$m=$G->fetch_field();$A=$m->name;$de=$m->orgtable;$ce=$m->orgname;$H[$m->table]=$de;if($Ec)$ld[$Uc]=($A=="table"?"table=":($A=="possible_keys"?"indexes=":null));elseif($de!=""){if(!isset($u[$de])){$u[$de]=array();foreach(indexes($de,$i)as$t){if($t["type"]=="PRIMARY"){$u[$de]=array_flip($t["columns"]);break;}}$g[$de]=$u[$de];}if(isset($g[$de][$ce])){unset($g[$de][$ce]);$u[$de][$ce]=$Uc;$ld[$Uc]=$de;}}if($m->charsetnr==63)$Ga[$Uc]=true;$T[$Uc]=$m->type;$A=h($A);echo"<th".($de!=""||$m->name!=$ce?" title='".h(($de!=""?"$de.":"").$ce)."'":"").">".($Ec?"<a href='$Ec".strtolower($A)."' target='_blank' rel='noreferrer' class='help'>$A</a>":$A);}echo"</thead>\n";}echo"<tr".odd().">";foreach($I
as$w=>$W){if($W===null)$W="<i>NULL</i>";elseif($Ga[$w]&&!is_utf8($W))$W="<i>".lang(array('%d Byte','%d Bytes'),strlen($W))."</i>";elseif(!strlen($W))$W="&nbsp;";else{$W=h($W);if($T[$w]==254)$W="<code>$W</code>";}if(isset($ld[$w])&&!$g[$ld[$w]]){if($Ec){$O=$I[array_search("table=",$ld)];$z=$ld[$w].urlencode($ee[$O]!=""?$ee[$O]:$O);}else{$z="edit=".urlencode($ld[$w]);foreach($u[$ld[$w]]as$Sa=>$Uc)$z.="&where".urlencode("[".bracket_escape($Sa)."]")."=".urlencode($I[$Uc]);}$W="<a href='".h(ME.$z)."'>$W</a>";}echo"<td>$W";}}echo($q?"</table>":"<p class='message'>".'Keine Daten.')."\n";return$H;}function
referencable_primary($of){$H=array();foreach(table_status()as$If=>$O){if($If!=$of&&fk_support($O)){foreach(fields($If)as$m){if($m["primary"]){if($H[$If]){unset($H[$If]);break;}$H[$If]=$m;}}}}return$H;}function
textarea($A,$X,$J=10,$Va=80){echo"<textarea name='$A' rows='$J' cols='$Va' class='sqlarea' spellcheck='false' wrap='off' onkeydown='return textareaKeydown(this, event);'>";if(is_array($X)){foreach($X
as$W)echo
h($W[0])."\n\n\n";}else
echo
h($X);echo"</textarea>";}function
format_time($xf,$Mb){return" <span class='time'>(".sprintf('%.3f s',max(0,array_sum(explode(" ",$Mb))-array_sum(explode(" ",$xf)))).")</span>";}function
edit_type($w,$m,$Ua,$nc=array()){global$Af,$T,$rg,$Td;echo'<td><select name="',$w,'[type]" class="type" onfocus="lastType = selectValue(this);" onchange="editingTypeChange(this);">',optionlist((!$m["type"]||isset($T[$m["type"]])?array():array($m["type"]))+$Af+($nc?array('Fremdschl√ºssel'=>$nc):array()),$m["type"]),'</select>
<td><input name="',$w,'[length]" value="',h($m["length"]),'" size="3" onfocus="editingLengthFocus(this);"><td class="options">';echo"<select name='$w"."[collation]'".(ereg('(char|text|enum|set)$',$m["type"])?"":" class='hidden'").'><option value="">('.'Kollation'.')'.optionlist($Ua,$m["collation"]).'</select>',($rg?"<select name='$w"."[unsigned]'".(!$m["type"]||ereg('(int|float|double|decimal)$',$m["type"])?"":" class='hidden'").'><option>'.optionlist($rg,$m["unsigned"]).'</select>':''),(isset($m['on_update'])?"<select name='$w"."[on_update]'".($m["type"]=="timestamp"?"":" class='hidden'").'>'.optionlist(array(""=>"(".'ON UPDATE'.")","CURRENT_TIMESTAMP"),$m["on_update"]).'</select>':''),($nc?"<select name='$w"."[on_delete]'".(ereg("`",$m["type"])?"":" class='hidden'")."><option value=''>(".'ON DELETE'.")".optionlist(explode("|",$Td),$m["on_delete"])."</select> ":" ");}function
process_length($x){global$Pb;return(preg_match("~^\\s*(?:$Pb)(?:\\s*,\\s*(?:$Pb))*\\s*\$~",$x)&&preg_match_all("~$Pb~",$x,$qd)?implode(",",$qd[0]):preg_replace('~[^0-9,+-]~','',$x));}function
process_type($m,$Ta="COLLATE"){global$rg;return" $m[type]".($m["length"]!=""?"(".process_length($m["length"]).")":"").(ereg('int|float|double|decimal',$m["type"])&&in_array($m["unsigned"],$rg)?" $m[unsigned]":"").(ereg('char|text|enum|set',$m["type"])&&$m["collation"]?" $Ta ".q($m["collation"]):"");}function
process_field($m,$jg){return
array(idf_escape(trim($m["field"])),process_type($jg),($m["null"]?" NULL":" NOT NULL"),(isset($m["default"])?" DEFAULT ".((ereg("time",$m["type"])&&eregi('^CURRENT_TIMESTAMP$',$m["default"]))||($m["type"]=="bit"&&ereg("^([0-9]+|b'[0-1]+')\$",$m["default"]))?$m["default"]:q($m["default"])):""),($m["type"]=="timestamp"&&$m["on_update"]?" ON UPDATE $m[on_update]":""),(support("comment")&&$m["comment"]!=""?" COMMENT ".q($m["comment"]):""),($m["auto_increment"]?auto_increment():null),);}function
type_class($S){foreach(array('char'=>'text','date'=>'time|year','binary'=>'blob','enum'=>'set',)as$w=>$W){if(ereg("$w|$W",$S))return" class='$w'";}}function
edit_fields($n,$Ua,$S="TABLE",$nc=array(),$Za=false){global$h,$Mc;echo'<thead><tr class="wrap">
';if($S=="PROCEDURE"){echo'<td>&nbsp;';}echo'<th>',($S=="TABLE"?'Spaltenname':'Name des Parameters'),'<td>Typ<textarea id="enum-edit" rows="4" cols="12" wrap="off" style="display: none;" onblur="editingLengthBlur(this);"></textarea>
<td>L√§nge
<td>Optionen
';if($S=="TABLE"){echo'<td>NULL
<td><input type="radio" name="auto_increment_col" value=""><acronym title="Auto-Inkrement">AI</acronym>
<td>Vorgabewerte festlegen
',(support("comment")?"<td".($Za?"":" class='hidden'").">".'Kommentar':"");}echo'<td>',"<input type='image' class='icon' name='add[".(support("move_col")?0:count($n))."]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.6.4' alt='+' title='".'Hinzuf√ºgen'."'>",'<script type="text/javascript">row_count = ',count($n),';</script>
</thead>
<tbody onkeydown="return editingKeydown(event);">
';foreach($n
as$q=>$m){$q++;$fe=$m[($_POST?"orig":"field")];$yb=(isset($_POST["add"][$q-1])||(isset($m["field"])&&!$_POST["drop_col"][$q]))&&(support("drop_col")||$fe=="");echo'<tr',($yb?"":" style='display: none;'"),'>
',($S=="PROCEDURE"?"<td>".html_select("fields[$q][inout]",explode("|",$Mc),$m["inout"]):""),'<th>';if($yb){echo'<input name="fields[',$q,'][field]" value="',h($m["field"]),'" onchange="',($m["field"]!=""||count($n)>1?"":"editingAddRow(this); "),'editingNameChange(this);" maxlength="64" autocapitalize="off">';}echo'<input type="hidden" name="fields[',$q,'][orig]" value="',h($fe),'">
';edit_type("fields[$q]",$m,$Ua,$nc);if($S=="TABLE"){echo'<td>',checkbox("fields[$q][null]",1,$m["null"]),'<td><input type="radio" name="auto_increment_col" value="',$q,'"';if($m["auto_increment"]){echo' checked';}?> onclick="var field = this.form['fields[' + this.value + '][field]']; if (!field.value) { field.value = 'id'; field.onchange(); }">
<td><?php echo
checkbox("fields[$q][has_default]",1,$m["has_default"]),'<input name="fields[',$q,'][default]" value="',h($m["default"]),'" onchange="this.previousSibling.checked = true;">
',(support("comment")?"<td".($Za?"":" class='hidden'")."><input name='fields[$q][comment]' value='".h($m["comment"])."' maxlength='".($h->server_info>=5.5?1024:255)."'>":"");}echo"<td>",(support("move_col")?"<input type='image' class='icon' name='add[$q]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.6.4' alt='+' title='".'Hinzuf√ºgen'."' onclick='return !editingAddRow(this, 1);'>&nbsp;"."<input type='image' class='icon' name='up[$q]' src='".h(preg_replace("~\\?.*~","",ME))."?file=up.gif&amp;version=3.6.4' alt='^' title='".'Nach oben'."'>&nbsp;"."<input type='image' class='icon' name='down[$q]' src='".h(preg_replace("~\\?.*~","",ME))."?file=down.gif&amp;version=3.6.4' alt='v' title='".'Nach unten'."'>&nbsp;":""),($fe==""||support("drop_col")?"<input type='image' class='icon' name='drop_col[$q]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=3.6.4' alt='x' title='".'Entfernen'."' onclick='return !editingRemoveRow(this);'>":""),"\n";}}function
process_fields(&$n){ksort($n);$B=0;if($_POST["up"]){$dd=0;foreach($n
as$w=>$m){if(key($_POST["up"])==$w){unset($n[$w]);array_splice($n,$dd,0,array($m));break;}if(isset($m["field"]))$dd=$B;$B++;}}if($_POST["down"]){$pc=false;foreach($n
as$w=>$m){if(isset($m["field"])&&$pc){unset($n[key($_POST["down"])]);array_splice($n,$B,0,array($pc));break;}if(key($_POST["down"])==$w)$pc=$m;$B++;}}$n=array_values($n);if($_POST["add"])array_splice($n,key($_POST["add"]),0,array(array()));}function
normalize_enum($_){return"'".str_replace("'","''",addcslashes(stripcslashes(str_replace($_[0][0].$_[0][0],$_[0][0],substr($_[0],1,-1))),'\\'))."'";}function
grant($wc,$Ie,$g,$Sd){if(!$Ie)return
true;if($Ie==array("ALL PRIVILEGES","GRANT OPTION"))return($wc=="GRANT"?queries("$wc ALL PRIVILEGES$Sd WITH GRANT OPTION"):queries("$wc ALL PRIVILEGES$Sd")&&queries("$wc GRANT OPTION$Sd"));return
queries("$wc ".preg_replace('~(GRANT OPTION)\\([^)]*\\)~','\\1',implode("$g, ",$Ie).$g).$Sd);}function
drop_create($Bb,$hb,$cf,$md,$Ad,$zd,$_d,$A){if($_POST["drop"])query_redirect($Bb,$md,$Ad);else{if($A!="")queries($Bb);queries_redirect($md,($A!=""?$zd:$_d),queries($hb));if($A!="")queries($cf);}}function
create_trigger($Sd,$I){global$v;$Uf=" $I[Timing] $I[Event]";return"CREATE TRIGGER ".idf_escape($I["Trigger"]).($v=="mssql"?$Sd.$Uf:$Uf.$Sd).rtrim(" $I[Type]\n$I[Statement]",";").";";}function
create_routine($ef,$I){global$Mc;$M=array();$n=(array)$I["fields"];ksort($n);foreach($n
as$m){if($m["field"]!="")$M[]=(ereg("^($Mc)\$",$m["inout"])?"$m[inout] ":"").idf_escape($m["field"]).process_type($m,"CHARACTER SET");}return"CREATE $ef ".idf_escape(trim($I["name"]))." (".implode(", ",$M).")".(isset($_GET["function"])?" RETURNS".process_type($I["returns"],"CHARACTER SET"):"").($I["language"]?" LANGUAGE $I[language]":"").rtrim("\n$I[definition]",";").";";}function
remove_definer($F){return
preg_replace('~^([A-Z =]+) DEFINER=`'.preg_replace('~@(.*)~','`@`(%|\\1)',logged_user()).'`~','\\1',$F);}function
tar_file($hc,$db){$H=pack("a100a8a8a8a12a12",$hc,644,0,0,decoct(strlen($db)),decoct(time()));$Oa=8*32;for($q=0;$q<strlen($H);$q++)$Oa+=ord($H[$q]);$H.=sprintf("%06o",$Oa)."\0 ";return$H.str_repeat("\0",512-strlen($H)).$db.str_repeat("\0",511-(strlen($db)+511)%512);}function
ini_bytes($Lc){$W=ini_get($Lc);switch(strtolower(substr($W,-1))){case'g':$W*=1024;case'm':$W*=1024;case'k':$W*=1024;}return$W;}$Td="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";$Pb="'(?:''|[^'\\\\]|\\\\.)*+'";$Mc="IN|OUT|INOUT";if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["callf"]))$_GET["call"]=$_GET["callf"];if(isset($_GET["function"]))$_GET["procedure"]=$_GET["function"];if(isset($_GET["download"])){$a=$_GET["download"];$n=fields($a);header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$h->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($a)," WHERE ".where($_GET,$n),1));exit;}elseif(isset($_GET["table"])){$a=$_GET["table"];$n=fields($a);if(!$n)$l=error();$P=($n?table_status($a):array());page_header(($n&&is_view($P)?'View':'Tabelle').": ".h($a),$l);$b->selectLinks($P);$Ya=$P["Comment"];if($Ya!="")echo"<p>".'Kommentar'.": ".h($Ya)."\n";if($n){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Spalte'."<td>".'Typ'.(support("comment")?"<td>".'Kommentar':"")."</thead>\n";foreach($n
as$m){echo"<tr".odd()."><th>".h($m["field"]),"<td title='".h($m["collation"])."'>".h($m["full_type"]).($m["null"]?" <i>NULL</i>":"").($m["auto_increment"]?" <i>".'Auto-Inkrement'."</i>":""),(isset($m["default"])?" [<b>".h($m["default"])."</b>]":""),(support("comment")?"<td>".nbsp($m["comment"]):""),"\n";}echo"</table>\n";if(!is_view($P)){echo"<h3>".'Indizes'."</h3>\n";$u=indexes($a);if($u){echo"<table cellspacing='0'>\n";foreach($u
as$A=>$t){ksort($t["columns"]);$Fe=array();foreach($t["columns"]as$w=>$W)$Fe[]="<i>".h($W)."</i>".($t["lengths"][$w]?"(".$t["lengths"][$w].")":"");echo"<tr title='".h($A)."'><th>$t[type]<td>".implode(", ",$Fe)."\n";}echo"</table>\n";}echo'<p><a href="'.h(ME).'indexes='.urlencode($a).'">'.'Indizes √§ndern'."</a>\n";if(fk_support($P)){echo"<h3>".'Fremdschl√ºssel'."</h3>\n";$nc=foreign_keys($a);if($nc){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Ursprung'."<td>".'Ziel'."<td>".'ON DELETE'."<td>".'ON UPDATE'.($v!="sqlite"?"<td>&nbsp;":"")."</thead>\n";foreach($nc
as$A=>$o){echo"<tr title='".h($A)."'>","<th><i>".implode("</i>, <i>",array_map('h',$o["source"]))."</i>","<td><a href='".h($o["db"]!=""?preg_replace('~db=[^&]*~',"db=".urlencode($o["db"]),ME):($o["ns"]!=""?preg_replace('~ns=[^&]*~',"ns=".urlencode($o["ns"]),ME):ME))."table=".urlencode($o["table"])."'>".($o["db"]!=""?"<b>".h($o["db"])."</b>.":"").($o["ns"]!=""?"<b>".h($o["ns"])."</b>.":"").h($o["table"])."</a>","(<i>".implode("</i>, <i>",array_map('h',$o["target"]))."</i>)","<td>".nbsp($o["on_delete"])."\n","<td>".nbsp($o["on_update"])."\n",($v=="sqlite"?"":'<td><a href="'.h(ME.'foreign='.urlencode($a).'&name='.urlencode($A)).'">'.'√Ñndern'.'</a>');}echo"</table>\n";}if($v!="sqlite")echo'<p><a href="'.h(ME).'foreign='.urlencode($a).'">'.'Fremdschl√ºssel hinzuf√ºgen'."</a>\n";}if(support("trigger")){echo"<h3>".'Trigger'."</h3>\n";$ig=triggers($a);if($ig){echo"<table cellspacing='0'>\n";foreach($ig
as$w=>$W)echo"<tr valign='top'><td>$W[0]<td>$W[1]<th>".h($w)."<td><a href='".h(ME.'trigger='.urlencode($a).'&name='.urlencode($w))."'>".'√Ñndern'."</a>\n";echo"</table>\n";}echo'<p><a href="'.h(ME).'trigger='.urlencode($a).'">'.'Trigger hinzuf√ºgen'."</a>\n";}}}}elseif(isset($_GET["schema"])){page_header('Datenbankschema',"",array(),DB.($_GET["ns"]?".$_GET[ns]":""));$Kf=array();$Lf=array();$A="adminer_schema";$ea=($_GET["schema"]?$_GET["schema"]:$_COOKIE[($_COOKIE["$A-".DB]?"$A-".DB:$A)]);preg_match_all('~([^:]+):([-0-9.]+)x([-0-9.]+)(_|$)~',$ea,$qd,PREG_SET_ORDER);foreach($qd
as$q=>$_){$Kf[$_[1]]=array($_[2],$_[3]);$Lf[]="\n\t'".js_escape($_[1])."': [ $_[2], $_[3] ]";}$Zf=0;$Da=-1;$kf=array();$Se=array();$hd=array();foreach(table_status()as$P){if(!isset($P["Engine"]))continue;$ye=0;$kf[$P["Name"]]["fields"]=array();foreach(fields($P["Name"])as$A=>$m){$ye+=1.25;$m["pos"]=$ye;$kf[$P["Name"]]["fields"][$A]=$m;}$kf[$P["Name"]]["pos"]=($Kf[$P["Name"]]?$Kf[$P["Name"]]:array($Zf,0));foreach($b->foreignKeys($P["Name"])as$W){if(!$W["db"]){$fd=$Da;if($Kf[$P["Name"]][1]||$Kf[$W["table"]][1])$fd=min(floatval($Kf[$P["Name"]][1]),floatval($Kf[$W["table"]][1]))-1;else$Da-=.1;while($hd[(string)$fd])$fd-=.0001;$kf[$P["Name"]]["references"][$W["table"]][(string)$fd]=array($W["source"],$W["target"]);$Se[$W["table"]][$P["Name"]][(string)$fd]=$W["target"];$hd[(string)$fd]=true;}}$Zf=max($Zf,$kf[$P["Name"]]["pos"][0]+2.5+$ye);}echo'<div id="schema" style="height: ',$Zf,'em;" onselectstart="return false;">
<script type="text/javascript">
var tablePos = {',implode(",",$Lf)."\n",'};
var em = document.getElementById(\'schema\').offsetHeight / ',$Zf,';
document.onmousemove = schemaMousemove;
document.onmouseup = function (ev) {
	schemaMouseup(ev, \'',js_escape(DB),'\');
};
</script>
';foreach($kf
as$A=>$O){echo"<div class='table' style='top: ".$O["pos"][0]."em; left: ".$O["pos"][1]."em;' onmousedown='schemaMousedown(this, event);'>",'<a href="'.h(ME).'table='.urlencode($A).'"><b>'.h($A)."</b></a>";foreach($O["fields"]as$m){$W='<span'.type_class($m["type"]).' title="'.h($m["full_type"].($m["null"]?" NULL":'')).'">'.h($m["field"]).'</span>';echo"<br>".($m["primary"]?"<i>$W</i>":$W);}foreach((array)$O["references"]as$Qf=>$Ue){foreach($Ue
as$fd=>$Pe){$gd=$fd-$Kf[$A][1];$q=0;foreach($Pe[0]as$uf)echo"\n<div class='references' title='".h($Qf)."' id='refs$fd-".($q++)."' style='left: $gd"."em; top: ".$O["fields"][$uf]["pos"]."em; padding-top: .5em;'><div style='border-top: 1px solid Gray; width: ".(-$gd)."em;'></div></div>";}}foreach((array)$Se[$A]as$Qf=>$Ue){foreach($Ue
as$fd=>$g){$gd=$fd-$Kf[$A][1];$q=0;foreach($g
as$Pf)echo"\n<div class='references' title='".h($Qf)."' id='refd$fd-".($q++)."' style='left: $gd"."em; top: ".$O["fields"][$Pf]["pos"]."em; height: 1.25em; background: url(".h(preg_replace("~\\?.*~","",ME))."?file=arrow.gif) no-repeat right center;&amp;version=3.6.4'><div style='height: .5em; border-bottom: 1px solid Gray; width: ".(-$gd)."em;'></div></div>";}}echo"\n</div>\n";}foreach($kf
as$A=>$O){foreach((array)$O["references"]as$Qf=>$Ue){foreach($Ue
as$fd=>$Pe){$Dd=$Zf;$ud=-10;foreach($Pe[0]as$w=>$uf){$ze=$O["pos"][0]+$O["fields"][$uf]["pos"];$_e=$kf[$Qf]["pos"][0]+$kf[$Qf]["fields"][$Pe[1][$w]]["pos"];$Dd=min($Dd,$ze,$_e);$ud=max($ud,$ze,$_e);}echo"<div class='references' id='refl$fd' style='left: $fd"."em; top: $Dd"."em; padding: .5em 0;'><div style='border-right: 1px solid Gray; margin-top: 1px; height: ".($ud-$Dd)."em;'></div></div>\n";}}}echo'</div>
<p><a href="',h(ME."schema=".urlencode($ea)),'" id="schema-link">Dauerhafter Link</a>
';}elseif(isset($_GET["dump"])){$a=$_GET["dump"];if($_POST&&!$l){$fb="";foreach(array("output","format","db_style","routines","events","table_style","auto_increment","triggers","data_style")as$w)$fb.="&$w=".urlencode($_POST[$w]);cookie("adminer_export",substr($fb,1));$Q=array_flip((array)$_POST["tables"])+array_flip((array)$_POST["data"]);$bc=dump_headers((count($Q)==1?key($Q):DB),(DB==""||count($Q)>1));$Rc=ereg('sql',$_POST["format"]);if($Rc)echo"-- Adminer $ia ".$Ab[DRIVER]." dump

".($v!="sql"?"":"SET NAMES utf8;
".($_POST["data_style"]?"SET foreign_key_checks = 0;
SET time_zone = ".q(substr(preg_replace('~^[^-]~','+\0',$h->result("SELECT TIMEDIFF(NOW(), UTC_TIMESTAMP)")),0,6)).";
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';
":"")."
");$Bf=$_POST["db_style"];$j=array(DB);if(DB==""){$j=$_POST["databases"];if(is_string($j))$j=explode("\n",rtrim(str_replace("\r","",$j),"\n"));}foreach((array)$j
as$k){$b->dumpDatabase($k);if($h->select_db($k)){if($Rc&&ereg('CREATE',$Bf)&&($hb=$h->result("SHOW CREATE DATABASE ".idf_escape($k),1))){if($Bf=="DROP+CREATE")echo"DROP DATABASE IF EXISTS ".idf_escape($k).";\n";echo"$hb;\n";}if($Rc){if($Bf)echo
use_sql($k).";\n\n";$ke="";if($_POST["routines"]){foreach(array("FUNCTION","PROCEDURE")as$ef){foreach(get_rows("SHOW $ef STATUS WHERE Db = ".q($k),null,"-- ")as$I)$ke.=($Bf!='DROP+CREATE'?"DROP $ef IF EXISTS ".idf_escape($I["Name"]).";;\n":"").remove_definer($h->result("SHOW CREATE $ef ".idf_escape($I["Name"]),2)).";;\n\n";}}if($_POST["events"]){foreach(get_rows("SHOW EVENTS",null,"-- ")as$I)$ke.=($Bf!='DROP+CREATE'?"DROP EVENT IF EXISTS ".idf_escape($I["Name"]).";;\n":"").remove_definer($h->result("SHOW CREATE EVENT ".idf_escape($I["Name"]),3)).";;\n\n";}if($ke)echo"DELIMITER ;;\n\n$ke"."DELIMITER ;\n\n";}if($_POST["table_style"]||$_POST["data_style"]){$Y=array();foreach(table_status()as$P){$O=(DB==""||in_array($P["Name"],(array)$_POST["tables"]));$mb=(DB==""||in_array($P["Name"],(array)$_POST["data"]));if($O||$mb){if(!is_view($P)){if($bc=="tar")ob_start();$b->dumpTable($P["Name"],($O?$_POST["table_style"]:""));if($mb)$b->dumpData($P["Name"],$_POST["data_style"],"SELECT * FROM ".table($P["Name"]));if($Rc&&$_POST["triggers"]&&$O&&($ig=trigger_sql($P["Name"],$_POST["table_style"])))echo"\nDELIMITER ;;\n$ig\nDELIMITER ;\n";if($bc=="tar")echo
tar_file((DB!=""?"":"$k/")."$P[Name].csv",ob_get_clean());elseif($Rc)echo"\n";}elseif($Rc)$Y[]=$P["Name"];}}foreach($Y
as$Bg)$b->dumpTable($Bg,$_POST["table_style"],true);if($bc=="tar")echo
pack("x512");}}}if($Rc)echo"-- ".$h->result("SELECT NOW()")."\n";exit;}page_header('Exportieren',$l,($_GET["export"]!=""?array("table"=>$_GET["export"]):array()),DB);echo'
<form action="" method="post">
<table cellspacing="0">
';$pb=array('','USE','DROP+CREATE','CREATE');$Mf=array('','DROP+CREATE','CREATE');$nb=array('','TRUNCATE+INSERT','INSERT');if($v=="sql")$nb[]='INSERT+UPDATE';parse_str($_COOKIE["adminer_export"],$I);if(!$I)$I=array("output"=>"text","format"=>"sql","db_style"=>(DB!=""?"":"CREATE"),"table_style"=>"DROP+CREATE","data_style"=>"INSERT");if(!isset($I["events"])){$I["routines"]=$I["events"]=($_GET["dump"]=="");$I["triggers"]=$I["table_style"];}echo"<tr><th>".'Ergebnis'."<td>".html_select("output",$b->dumpOutput(),$I["output"],0)."\n";echo"<tr><th>".'Format'."<td>".html_select("format",$b->dumpFormat(),$I["format"],0)."\n";echo($v=="sqlite"?"":"<tr><th>".'Datenbank'."<td>".html_select('db_style',$pb,$I["db_style"]).(support("routine")?checkbox("routines",1,$I["routines"],'Prozeduren'):"").(support("event")?checkbox("events",1,$I["events"],'Ereignisse'):"")),"<tr><th>".'Tabellen'."<td>".html_select('table_style',$Mf,$I["table_style"]).checkbox("auto_increment",1,$I["auto_increment"],'Auto-Inkrement').(support("trigger")?checkbox("triggers",1,$I["triggers"],'Trigger'):""),"<tr><th>".'Daten'."<td>".html_select('data_style',$nb,$I["data_style"]),'</table>
<p><input type="submit" value="Exportieren">
<input type="hidden" name="token" value="',$R,'">

<table cellspacing="0">
';$Ce=array();if(DB!=""){$Na=($a!=""?"":" checked");echo"<thead><tr>","<th style='text-align: left;'><label><input type='checkbox' id='check-tables'$Na onclick='formCheck(this, /^tables\\[/);'>".'Tabellen'."</label>","<th style='text-align: right;'><label>".'Daten'."<input type='checkbox' id='check-data'$Na onclick='formCheck(this, /^data\\[/);'></label>","</thead>\n";$Y="";foreach(table_status()as$P){$A=$P["Name"];$Be=ereg_replace("_.*","",$A);$Na=($a==""||$a==(substr($a,-1)=="%"?"$Be%":$A));$Fe="<tr><td>".checkbox("tables[]",$A,$Na,$A,"checkboxClick(event, this); formUncheck('check-tables');");if(is_view($P))$Y.="$Fe\n";else
echo"$Fe<td align='right'><label>".($P["Engine"]=="InnoDB"&&$P["Rows"]?"~ ":"").$P["Rows"].checkbox("data[]",$A,$Na,"","checkboxClick(event, this); formUncheck('check-data');")."</label>\n";$Ce[$Be]++;}echo$Y;}else{echo"<thead><tr><th style='text-align: left;'><label><input type='checkbox' id='check-databases'".($a==""?" checked":"")." onclick='formCheck(this, /^databases\\[/);'>".'Datenbank'."</label></thead>\n";$j=$b->databases();if($j){foreach($j
as$k){if(!information_schema($k)){$Be=ereg_replace("_.*","",$k);echo"<tr><td>".checkbox("databases[]",$k,$a==""||$a=="$Be%",$k,"formUncheck('check-databases');")."</label>\n";$Ce[$Be]++;}}}else
echo"<tr><td><textarea name='databases' rows='10' cols='20'></textarea>";}echo'</table>
</form>
';$jc=true;foreach($Ce
as$w=>$W){if($w!=""&&$W>1){echo($jc?"<p>":" ")."<a href='".h(ME)."dump=".urlencode("$w%")."'>".h($w)."</a>";$jc=false;}}}elseif(isset($_GET["privileges"])){page_header('Rechte');$G=$h->query("SELECT User, Host FROM mysql.".(DB==""?"user":"db WHERE ".q(DB)." LIKE Db")." ORDER BY Host, User");$wc=$G;if(!$G)$G=$h->query("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1) AS User, SUBSTRING_INDEX(CURRENT_USER, '@', -1) AS Host");echo"<form action=''><p>\n";hidden_fields_get();echo"<input type='hidden' name='db' value='".h(DB)."'>\n",($wc?"":"<input type='hidden' name='grant' value=''>\n"),"<table cellspacing='0'>\n","<thead><tr><th>".'Benutzer'."<th>".'Server'."<th>&nbsp;</thead>\n";while($I=$G->fetch_assoc())echo'<tr'.odd().'><td>'.h($I["User"])."<td>".h($I["Host"]).'<td><a href="'.h(ME.'user='.urlencode($I["User"]).'&host='.urlencode($I["Host"])).'">'.'√Ñndern'."</a>\n";if(!$wc||DB!="")echo"<tr".odd()."><td><input name='user' autocapitalize='off'><td><input name='host' value='localhost' autocapitalize='off'><td><input type='submit' value='".'√Ñndern'."'>\n";echo"</table>\n","</form>\n",'<p><a href="'.h(ME).'user=">'.'Neuer Benutzer'."</a>";}elseif(isset($_GET["sql"])){if(!$l&&$_POST["export"]){dump_headers("sql");$b->dumpTable("","");$b->dumpData("","table",$_POST["query"]);exit;}restart_session();$Cc=&get_session("queries");$Bc=&$Cc[DB];if(!$l&&$_POST["clear"]){$Bc=array();redirect(remove_from_uri("history"));}page_header('SQL-Query',$l);if(!$l&&$_POST){$rc=false;$F=$_POST["query"];if($_POST["webfile"]){$rc=@fopen((file_exists("adminer.sql")?"adminer.sql":(file_exists("adminer.sql.gz")?"compress.zlib://adminer.sql.gz":"compress.bzip2://adminer.sql.bz2")),"rb");$F=($rc?fread($rc,1e6):false);}elseif($_FILES&&$_FILES["sql_file"]["error"]!=UPLOAD_ERR_NO_FILE)$F=get_file("sql_file",true);if(is_string($F)){if(function_exists('memory_get_usage'))@ini_set("memory_limit",max(ini_bytes("memory_limit"),2*strlen($F)+memory_get_usage()+8e6));if($F!=""&&strlen($F)<1e6){$E=$F.(ereg(";[ \t\r\n]*\$",$F)?"":";");if(!$Bc||reset(end($Bc))!=$E){restart_session();$Bc[]=array($E,time());set_session("queries",$Cc);stop_session();}}$vf="(?:\\s|/\\*.*\\*/|(?:#|-- )[^\n]*\n|--\n)";$tb=";";$B=0;$Lb=true;$i=connect();if(is_object($i)&&DB!="")$i->select_db(DB);$Xa=0;$Rb=array();$kd=0;$pe='[\'"'.($v=="sql"?'`#':($v=="sqlite"?'`[':($v=="mssql"?'[':''))).']|/\\*|-- |$'.($v=="pgsql"?'|\\$[^$]*\\$':'');$ag=microtime();parse_str($_COOKIE["adminer_export"],$pa);$Db=$b->dumpFormat();unset($Db["sql"]);while($F!=""){if(!$B&&preg_match("~^$vf*DELIMITER\\s+(\\S+)~i",$F,$_)){$tb=$_[1];$F=substr($F,strlen($_[0]));}else{preg_match('('.preg_quote($tb)."\\s*|$pe)",$F,$_,PREG_OFFSET_CAPTURE,$B);list($pc,$ye)=$_[0];if(!$pc&&$rc&&!feof($rc))$F.=fread($rc,1e5);else{if(!$pc&&rtrim($F)=="")break;$B=$ye+strlen($pc);if($pc&&rtrim($pc)!=$tb){while(preg_match('('.($pc=='/*'?'\\*/':($pc=='['?']':(ereg('^-- |^#',$pc)?"\n":preg_quote($pc)."|\\\\."))).'|$)s',$F,$_,PREG_OFFSET_CAPTURE,$B)){$if=$_[0][0];if(!$if&&$rc&&!feof($rc))$F.=fread($rc,1e5);else{$B=$_[0][1]+strlen($if);if($if[0]!="\\")break;}}}else{$Lb=false;$E=substr($F,0,$ye);$Xa++;$Fe="<pre id='sql-$Xa'><code class='jush-$v'>".shorten_utf8(trim($E),1000)."</code></pre>\n";if(!$_POST["only_errors"]){echo$Fe;ob_flush();flush();}$xf=microtime();if($h->multi_query($E)&&is_object($i)&&preg_match("~^$vf*USE\\b~isU",$E))$i->query($E);do{$G=$h->store_result();$Mb=microtime();$Tf=format_time($xf,$Mb).(strlen($E)<1000?" <a href='".h(ME)."sql=".urlencode(trim($E))."'>".'√Ñndern'."</a>":"");if($h->error){echo($_POST["only_errors"]?$Fe:""),"<p class='error'>".'Fehler in der SQL-Abfrage'.($h->errno?" ($h->errno)":"").": ".error()."\n";$Rb[]=" <a href='#sql-$Xa'>$Xa</a>";if($_POST["error_stops"])break
2;}elseif(is_object($G)){$ee=select($G,$i);if(!$_POST["only_errors"]){echo"<form action='' method='post'>\n","<p>".($G->num_rows?lang(array('%d Datensatz','%d Datens√§tze'),$G->num_rows):"").$Tf;$r="export-$Xa";$ac=", <a href='#$r' onclick=\"return !toggle('$r');\">".'Exportieren'."</a><span id='$r' class='hidden'>: ".html_select("output",$b->dumpOutput(),$pa["output"])." ".html_select("format",$Db,$pa["format"])."<input type='hidden' name='query' value='".h($E)."'>"." <input type='submit' name='export' value='".'Exportieren'."'><input type='hidden' name='token' value='$R'></span>\n";if($i&&preg_match("~^($vf|\\()*SELECT\\b~isU",$E)&&($Zb=explain($i,$E))){$r="explain-$Xa";echo", <a href='#$r' onclick=\"return !toggle('$r');\">EXPLAIN</a>$ac","<div id='$r' class='hidden'>\n";select($Zb,$i,($v=="sql"?"http://dev.mysql.com/doc/refman/".substr($h->server_info,0,3)."/en/explain-output.html#explain_":""),$ee);echo"</div>\n";}else
echo$ac;echo"</form>\n";}}else{if(preg_match("~^$vf*(CREATE|DROP|ALTER)$vf+(DATABASE|SCHEMA)\\b~isU",$E)){restart_session();set_session("dbs",null);stop_session();}if(!$_POST["only_errors"])echo"<p class='message' title='".h($h->info)."'>".lang(array('Abfrage ausgef√ºhrt, %d Datensatz betroffen.','Abfrage ausgef√ºhrt, %d Datens√§tze betroffen.'),$h->affected_rows)."$Tf\n";}$xf=$Mb;}while($h->next_result());$kd+=substr_count($E.$pc,"\n");$F=substr($F,$B);$B=0;}}}}if($Lb)echo"<p class='message'>".'Kein Kommando vorhanden.'."\n";elseif($_POST["only_errors"])echo"<p class='message'>".lang(array('SQL-Query erfolgreich ausgef√ºhrt.','%d SQL-Queries erfolgreich ausgef√ºhrt.'),$Xa-count($Rb)).format_time($ag,microtime())."\n";elseif($Rb&&$Xa>1)echo"<p class='error'>".'Fehler in der SQL-Abfrage'.": ".implode("",$Rb)."\n";}else
echo"<p class='error'>".upload_error($F)."\n";}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
<p>';$E=$_GET["sql"];if($_POST)$E=$_POST["query"];elseif($_GET["history"]=="all")$E=$Bc;elseif($_GET["history"]!="")$E=$Bc[$_GET["history"]][0];textarea("query",$E,20);echo($_POST?"":"<script type='text/javascript'>document.getElementsByTagName('textarea')[0].focus();</script>\n"),"<p>".(ini_bool("file_uploads")?'Datei importieren'.': <input type="file" name="sql_file"'.($_FILES&&$_FILES["sql_file"]["error"]!=4?'':' onchange="this.form[\'only_errors\'].checked = true;"').'> (&lt; '.ini_get("upload_max_filesize").'B)':'Importieren von Dateien abgeschaltet.'),'<p>
<input type="submit" value="Ausf√ºhren" title="Ctrl+Enter">
',checkbox("error_stops",1,$_POST["error_stops"],'Bei Fehler anhalten')."\n",checkbox("only_errors",1,$_POST["only_errors"],'Nur Fehler anzeigen')."\n";print_fieldset("webfile",'Im Server',$_POST["webfile"],"document.getElementById('form')['only_errors'].checked = true; ");$ab=array();foreach(array("gz"=>"zlib","bz2"=>"bz2")as$w=>$W){if(extension_loaded($W))$ab[]=".$w";}echo
sprintf('Webserver Datei %s',"<code>adminer.sql".($ab?"[".implode("|",$ab)."]":"")."</code>"),' <input type="submit" name="webfile" value="'.'Datei ausf√ºhren'.'">',"</div></fieldset>\n";if($Bc){print_fieldset("history",'History',$_GET["history"]!="");for($W=end($Bc);$W;$W=prev($Bc)){$w=key($Bc);list($E,$Tf)=$W;echo'<a href="'.h(ME."sql=&history=$w").'">'.'√Ñndern'."</a> <span class='time' title='".@date('Y-m-d',$Tf)."'>".@date("H:i:s",$Tf)."</span> <code class='jush-$v'>".shorten_utf8(ltrim(str_replace("\n"," ",str_replace("\r","",preg_replace('~^(#|-- ).*~m','',$E)))),80,"</code>")."<br>\n";}echo"<input type='submit' name='clear' value='".'Entleeren'."'>\n","<a href='".h(ME."sql=&history=all")."'>".'Alle √§ndern'."</a>\n","</div></fieldset>\n";}echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$n=fields($a);$Z=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0],$n):""):where($_GET,$n));$sg=(isset($_GET["select"])?$_POST["edit"]:$Z);foreach($n
as$A=>$m){if(!isset($m["privileges"][$sg?"update":"insert"])||$b->fieldName($m)=="")unset($n[$A]);}if($_POST&&!$l&&!isset($_GET["select"])){$md=$_POST["referer"];if($_POST["insert"])$md=($sg?null:$_SERVER["REQUEST_URI"]);elseif(!ereg('^.+&select=.+$',$md))$md=ME."select=".urlencode($a);if(isset($_POST["delete"]))query_redirect("DELETE".limit1("FROM ".table($a)," WHERE $Z"),$md,'Datensatz gel√∂scht.');else{$M=array();foreach($n
as$A=>$m){$W=process_input($m);if($W!==false&&$W!==null)$M[idf_escape($A)]=($sg?"\n".idf_escape($A)." = $W":$W);}if($sg){if(!$M)redirect($md);query_redirect("UPDATE".limit1(table($a)." SET".implode(",",$M),"\nWHERE $Z"),$md,'Datensatz ge√§ndert.');}else{$G=insert_into($a,$M);$ed=($G?last_id():0);queries_redirect($md,sprintf('Datensatz%s hinzugef√ºgt.',($ed?" $ed":"")),$G);}}}$If=$b->tableName(table_status($a));page_header(($sg?'√Ñndern':'Hinzuf√ºgen'),$l,array("select"=>array($a,$If)),$If);$I=null;if($_POST["save"])$I=(array)$_POST["fields"];elseif($Z){$K=array();foreach($n
as$A=>$m){if(isset($m["privileges"]["select"])){$wa=convert_field($m);if($_POST["clone"]&&$m["auto_increment"])$wa="''";if($v=="sql"&&ereg("enum|set",$m["type"]))$wa="1*".idf_escape($A);$K[]=($wa?"$wa AS ":"").idf_escape($A);}}$I=array();if($K){$J=get_rows("SELECT".limit(implode(", ",$K)." FROM ".table($a)," WHERE $Z",(isset($_GET["select"])?2:1)));$I=(isset($_GET["select"])&&count($J)!=1?null:reset($J));}}if($I===false)echo"<p class='error'>".'Keine Daten.'."\n";echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';if(!$n)echo"<p class='error'>".'You have no privileges to update this table.'."\n";else{echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($n
as$A=>$m){echo"<tr><th>".$b->fieldName($m);$sb=$_GET["set"][bracket_escape($A)];$X=($I!==null?($I[$A]!=""&&$v=="sql"&&ereg("enum|set",$m["type"])?(is_array($I[$A])?array_sum($I[$A]):+$I[$A]):$I[$A]):(!$sg&&$m["auto_increment"]?"":(isset($_GET["select"])?false:($sb!==null?$sb:$m["default"]))));if(!$_POST["save"]&&is_string($X))$X=$b->editVal($X,$m);$p=($_POST["save"]?(string)$_POST["function"][$A]:($sg&&$m["on_update"]=="CURRENT_TIMESTAMP"?"now":($X===false?null:($X!==null?'':'NULL'))));if(ereg("time",$m["type"])&&$X=="CURRENT_TIMESTAMP"){$X="";$p="now";}input($m,$X,$p);echo"\n";}echo"</table>\n";}echo'<p>
';if($n){echo"<input type='submit' value='".'Speichern'."'>\n";if(!isset($_GET["select"]))echo"<input type='submit' name='insert' value='".($sg?'Speichern und weiter bearbeiten':'Speichern und n√§chsten hinzuf√ºgen')."' title='Ctrl+Shift+Enter'>\n";}echo($sg?"<input type='submit' name='delete' value='".'Entfernen'."' onclick=\"return confirm('".'Sind Sie sicher ?'."');\">\n":($_POST||!$n?"":"<script type='text/javascript'>document.getElementById('form').getElementsByTagName('td')[1].firstChild.focus();</script>\n"));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["create"])){$a=$_GET["create"];$qe=array('HASH','LINEAR HASH','KEY','LINEAR KEY','RANGE','LIST');$Re=referencable_primary($a);$nc=array();foreach($Re
as$If=>$m)$nc[str_replace("`","``",$If)."`".str_replace("`","``",$m["field"])]=$If;$he=array();$ie=array();if($a!=""){$he=fields($a);$ie=table_status($a);}if($_POST&&!$_POST["fields"])$_POST["fields"]=array();if($_POST&&!$l&&!$_POST["add"]&&!$_POST["drop_col"]&&!$_POST["up"]&&!$_POST["down"]){if($_POST["drop"])query_redirect("DROP TABLE ".table($a),substr(ME,0,-1),'Tabelle entfernt.');else{$n=array();$va=array();$ug=false;$lc=array();ksort($_POST["fields"]);$ge=reset($he);$ta=" FIRST";foreach($_POST["fields"]as$w=>$m){$o=$nc[$m["type"]];$jg=($o!==null?$Re[$o]:$m);if($m["field"]!=""){if(!$m["has_default"])$m["default"]=null;if($w==$_POST["auto_increment_col"])$m["auto_increment"]=true;$Ke=process_field($m,$jg);$va[]=array($m["orig"],$Ke,$ta);if($Ke!=process_field($ge,$ge)){$n[]=array($m["orig"],$Ke,$ta);if($m["orig"]!=""||$ta)$ug=true;}if($o!==null)$lc[idf_escape($m["field"])]=($a!=""&&$v!="sqlite"?"ADD":" ")." FOREIGN KEY (".idf_escape($m["field"]).") REFERENCES ".table($nc[$m["type"]])." (".idf_escape($jg["field"]).")".(ereg("^($Td)\$",$m["on_delete"])?" ON DELETE $m[on_delete]":"");$ta=" AFTER ".idf_escape($m["field"]);}elseif($m["orig"]!=""){$ug=true;$n[]=array($m["orig"]);}if($m["orig"]!=""){$ge=next($he);if(!$ge)$ta="";}}$se="";if(in_array($_POST["partition_by"],$qe)){$te=array();if($_POST["partition_by"]=='RANGE'||$_POST["partition_by"]=='LIST'){foreach(array_filter($_POST["partition_names"])as$w=>$W){$X=$_POST["partition_values"][$w];$te[]="\nPARTITION ".idf_escape($W)." VALUES ".($_POST["partition_by"]=='RANGE'?"LESS THAN":"IN").($X!=""?" ($X)":" MAXVALUE");}}$se.="\nPARTITION BY $_POST[partition_by]($_POST[partition])".($te?" (".implode(",",$te)."\n)":($_POST["partitions"]?" PARTITIONS ".(+$_POST["partitions"]):""));}elseif(support("partitioning")&&ereg("partitioned",$ie["Create_options"]))$se.="\nREMOVE PARTITIONING";$yd='Tabelle ge√§ndert.';if($a==""){cookie("adminer_engine",$_POST["Engine"]);$yd='Tabelle erstellt.';}$A=trim($_POST["name"]);queries_redirect(ME."table=".urlencode($A),$yd,alter_table($a,$A,($v=="sqlite"&&($ug||$lc)?$va:$n),$lc,$_POST["Comment"],($_POST["Engine"]&&$_POST["Engine"]!=$ie["Engine"]?$_POST["Engine"]:""),($_POST["Collation"]&&$_POST["Collation"]!=$ie["Collation"]?$_POST["Collation"]:""),($_POST["Auto_increment"]!=""?+$_POST["Auto_increment"]:""),$se));}}page_header(($a!=""?'Tabelle √§ndern':'Neue Tabelle erstellen'),$l,array("table"=>$a),$a);$I=array("Engine"=>$_COOKIE["adminer_engine"],"fields"=>array(array("field"=>"","type"=>(isset($T["int"])?"int":(isset($T["integer"])?"integer":"")))),"partition_names"=>array(""),);if($_POST){$I=$_POST;if($I["auto_increment_col"])$I["fields"][$I["auto_increment_col"]]["auto_increment"]=true;process_fields($I["fields"]);}elseif($a!=""){$I=$ie;$I["name"]=$a;$I["fields"]=array();if(!$_GET["auto_increment"])$I["Auto_increment"]="";foreach($he
as$m){$m["has_default"]=isset($m["default"]);$I["fields"][]=$m;}if(support("partitioning")){$sc="FROM information_schema.PARTITIONS WHERE TABLE_SCHEMA = ".q(DB)." AND TABLE_NAME = ".q($a);$G=$h->query("SELECT PARTITION_METHOD, PARTITION_ORDINAL_POSITION, PARTITION_EXPRESSION $sc ORDER BY PARTITION_ORDINAL_POSITION DESC LIMIT 1");list($I["partition_by"],$I["partitions"],$I["partition"])=$G->fetch_row();$I["partition_names"]=array();$I["partition_values"]=array();foreach(get_rows("SELECT PARTITION_NAME, PARTITION_DESCRIPTION $sc AND PARTITION_NAME != '' ORDER BY PARTITION_ORDINAL_POSITION")as$hf){$I["partition_names"][]=$hf["PARTITION_NAME"];$I["partition_values"][]=$hf["PARTITION_DESCRIPTION"];}$I["partition_names"][]="";}}$Ua=collations();$Ob=engines();foreach($Ob
as$Nb){if(!strcasecmp($Nb,$I["Engine"])){$I["Engine"]=$Nb;break;}}echo'
<form action="" method="post" id="form">
<p>
Name der Tabelle: <input name="name" maxlength="64" value="',h($I["name"]),'" autocapitalize="off">
';if($a==""&&!$_POST){?><script type='text/javascript'>document.getElementById('form')['name'].focus();</script><?php }echo($Ob?html_select("Engine",array(""=>"(".'Motor'.")")+$Ob,$I["Engine"]):""),' ',($Ua&&!ereg("sqlite|mssql",$v)?html_select("Collation",array(""=>"(".'Kollation'.")")+$Ua,$I["Collation"]):""),' <input type="submit" value="Speichern">
<table cellspacing="0" id="edit-fields" class="nowrap">
';$Za=($_POST?$_POST["comments"]:$I["Comment"]!="");if(!$_POST&&!$Za){foreach($I["fields"]as$m){if($m["comment"]!=""){$Za=true;break;}}}edit_fields($I["fields"],$Ua,"TABLE",$nc,$Za);echo'</table>
<p>
Auto-Inkrement: <input type="number" name="Auto_increment" size="6" value="',h($I["Auto_increment"]),'">
<label class="jsonly"><input type="checkbox" id="defaults" name="defaults" value="1" checked onclick="columnShow(this.checked, 5);">Vorgabewerte festlegen</label>
';if(!$_POST["defaults"]){echo'<script type="text/javascript">editingHideDefaults()</script>';}echo(support("comment")?checkbox("comments",1,$Za,'Kommentar',"columnShow(this.checked, 6); toggle('Comment'); if (this.checked) this.form['Comment'].focus();",true).' <input name="Comment" id="Comment" value="'.h($I["Comment"]).'" maxlength="'.($h->server_info>=5.5?2048:60).'"'.($Za?'':' class="hidden"').'>':''),'<p>
<input type="submit" value="Speichern">
';if($_GET["create"]!=""){echo'<input type="submit" name="drop" value="Entfernen"',confirm(),'>';}if(support("partitioning")){$re=ereg('RANGE|LIST',$I["partition_by"]);print_fieldset("partition",'Partitionieren um',$I["partition_by"]);echo'<p>
',html_select("partition_by",array(-1=>"")+$qe,$I["partition_by"],"partitionByChange(this);"),'(<input name="partition" value="',h($I["partition"]),'">)
Partitionen: <input type="number" name="partitions" class="size" value="',h($I["partitions"]),'"',($re||!$I["partition_by"]?" class='hidden'":""),'>
<table cellspacing="0" id="partition-table"',($re?"":" class='hidden'"),'>
<thead><tr><th>Name der Partition<th>Werte</thead>
';foreach($I["partition_names"]as$w=>$W){echo'<tr>','<td><input name="partition_names[]" value="'.h($W).'"'.($w==count($I["partition_names"])-1?' onchange="partitionNameChange(this);"':'').' autocapitalize="off">','<td><input name="partition_values[]" value="'.h($I["partition_values"][$w]).'">';}echo'</table>
</div></fieldset>
';}echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["indexes"])){$a=$_GET["indexes"];$Ic=array("PRIMARY","UNIQUE","INDEX");$P=table_status($a);if(eregi("MyISAM|M?aria".($h->server_info>=5.6?"|InnoDB":""),$P["Engine"]))$Ic[]="FULLTEXT";$u=indexes($a);if($v=="sqlite"){unset($Ic[0]);unset($u[""]);}if($_POST&&!$l&&!$_POST["add"]){$c=array();foreach($_POST["indexes"]as$t){$A=$t["name"];if(in_array($t["type"],$Ic)){$g=array();$jd=array();$M=array();ksort($t["columns"]);foreach($t["columns"]as$w=>$f){if($f!=""){$x=$t["lengths"][$w];$M[]=idf_escape($f).($x?"(".(+$x).")":"");$g[]=$f;$jd[]=($x?$x:null);}}if($g){$Yb=$u[$A];if($Yb){ksort($Yb["columns"]);ksort($Yb["lengths"]);if($t["type"]==$Yb["type"]&&array_values($Yb["columns"])===$g&&(!$Yb["lengths"]||array_values($Yb["lengths"])===$jd)){unset($u[$A]);continue;}}$c[]=array($t["type"],$A,"(".implode(", ",$M).")");}}}foreach($u
as$A=>$Yb)$c[]=array($Yb["type"],$A,"DROP");if(!$c)redirect(ME."table=".urlencode($a));queries_redirect(ME."table=".urlencode($a),'Indizes ge√§ndert.',alter_indexes($a,$c));}page_header('Indizes',$l,array("table"=>$a),$a);$n=array_keys(fields($a));$I=array("indexes"=>$u);if($_POST){$I=$_POST;if($_POST["add"]){foreach($I["indexes"]as$w=>$t){if($t["columns"][count($t["columns"])]!="")$I["indexes"][$w]["columns"][]="";}$t=end($I["indexes"]);if($t["type"]||array_filter($t["columns"],'strlen')||array_filter($t["lengths"],'strlen'))$I["indexes"][]=array("columns"=>array(1=>""));}}else{foreach($I["indexes"]as$w=>$t){$I["indexes"][$w]["name"]=$w;$I["indexes"][$w]["columns"][]="";}$I["indexes"][]=array("columns"=>array(1=>""));}echo'
<form action="" method="post">
<table cellspacing="0" class="nowrap">
<thead><tr><th>Index-Typ<th>Spalte (L√§nge)<th>Name</thead>
';$Uc=1;foreach($I["indexes"]as$t){echo"<tr><td>".html_select("indexes[$Uc][type]",array(-1=>"")+$Ic,$t["type"],($Uc==count($I["indexes"])?"indexesAddRow(this);":1))."<td>";ksort($t["columns"]);$q=1;foreach($t["columns"]as$w=>$f){echo"<span>".html_select("indexes[$Uc][columns][$q]",array(-1=>"")+$n,$f,($q==count($t["columns"])?"indexesAddColumn":"indexesChangeColumn")."(this, '".js_escape($v=="sql"?"":$_GET["indexes"]."_")."');"),"<input type='number' name='indexes[$Uc][lengths][$q]' class='size' value='".h($t["lengths"][$w])."'> </span>";$q++;}echo"<td><input name='indexes[$Uc][name]' value='".h($t["name"])."' autocapitalize='off'>\n";$Uc++;}echo'</table>
<p>
<input type="submit" value="Speichern">
<noscript><p><input type="submit" name="add" value="Hinzuf√ºgen"></noscript>
<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["database"])){if($_POST&&!$l&&!isset($_POST["add_x"])){restart_session();$A=trim($_POST["name"]);if($_POST["drop"]){$_GET["db"]="";queries_redirect(remove_from_uri("db|database"),'Datenbank entfernt.',drop_databases(array(DB)));}elseif(DB!==$A){if(DB!=""){$_GET["db"]=$A;queries_redirect(preg_replace('~db=[^&]*&~','',ME)."db=".urlencode($A),'Datenbank umbenannt.',rename_database($A,$_POST["collation"]));}else{$j=explode("\n",str_replace("\r","",$A));$Cf=true;$dd="";foreach($j
as$k){if(count($j)==1||$k!=""){if(!create_database($k,$_POST["collation"]))$Cf=false;$dd=$k;}}queries_redirect(ME."db=".urlencode($dd),'Datenbank erstellt.',$Cf);}}else{if(!$_POST["collation"])redirect(substr(ME,0,-1));query_redirect("ALTER DATABASE ".idf_escape($A).(eregi('^[a-z0-9_]+$',$_POST["collation"])?" COLLATE $_POST[collation]":""),substr(ME,0,-1),'Datenbank ge√§ndert.');}}page_header(DB!=""?'Datenbank √§ndern':'Neue Datenbank',$l,array(),DB);$Ua=collations();$A=DB;$Ta=null;if($_POST){$A=$_POST["name"];$Ta=$_POST["collation"];}elseif(DB!="")$Ta=db_collation(DB,$Ua);elseif($v=="sql"){foreach(get_vals("SHOW GRANTS")as$wc){if(preg_match('~ ON (`(([^\\\\`]|``|\\\\.)*)%`\\.\\*)?~',$wc,$_)&&$_[1]){$A=stripcslashes(idf_unescape("`$_[2]`"));break;}}}echo'
<form action="" method="post">
<p>
',($_POST["add_x"]||strpos($A,"\n")?'<textarea id="name" name="name" rows="10" cols="40">'.h($A).'</textarea><br>':'<input name="name" id="name" value="'.h($A).'" maxlength="64" autocapitalize="off">')."\n".($Ua?html_select("collation",array(""=>"(".'Kollation'.")")+$Ua,$Ta):"");?>
<script type='text/javascript'>document.getElementById('name').focus();</script>
<input type="submit" value="Speichern">
<?php
if(DB!="")echo"<input type='submit' name='drop' value='".'Entfernen'."'".confirm().">\n";elseif(!$_POST["add_x"]&&$_GET["db"]=="")echo"<input type='image' name='add' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.6.4' alt='+' title='".'Hinzuf√ºgen'."'>\n";echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["scheme"])){if($_POST&&!$l){$z=preg_replace('~ns=[^&]*&~','',ME)."ns=";if($_POST["drop"])query_redirect("DROP SCHEMA ".idf_escape($_GET["ns"]),$z,'Schema wurde gel√∂scht.');else{$A=trim($_POST["name"]);$z.=urlencode($A);if($_GET["ns"]=="")query_redirect("CREATE SCHEMA ".idf_escape($A),$z,'Neues Schema erstellt.');elseif($_GET["ns"]!=$A)query_redirect("ALTER SCHEMA ".idf_escape($_GET["ns"])." RENAME TO ".idf_escape($A),$z,'Schema ge√§ndert.');else
redirect($z);}}page_header($_GET["ns"]!=""?'Schema √§ndern':'Neues Schema',$l);$I=$_POST;if(!$I)$I=array("name"=>$_GET["ns"]);echo'
<form action="" method="post">
<p><input name="name" id="name" value="',h($I["name"]);?>" autocapitalize="off">
<script type='text/javascript'>document.getElementById('name').focus();</script>
<input type="submit" value="Speichern">
<?php
if($_GET["ns"]!="")echo"<input type='submit' name='drop' value='".'Entfernen'."'".confirm().">\n";echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["call"])){$da=$_GET["call"];page_header('Aufrufen'.": ".h($da),$l);$ef=routine($da,(isset($_GET["callf"])?"FUNCTION":"PROCEDURE"));$Hc=array();$ke=array();foreach($ef["fields"]as$q=>$m){if(substr($m["inout"],-3)=="OUT")$ke[$q]="@".idf_escape($m["field"])." AS ".idf_escape($m["field"]);if(!$m["inout"]||substr($m["inout"],0,2)=="IN")$Hc[]=$q;}if(!$l&&$_POST){$Ka=array();foreach($ef["fields"]as$w=>$m){if(in_array($w,$Hc)){$W=process_input($m);if($W===false)$W="''";if(isset($ke[$w]))$h->query("SET @".idf_escape($m["field"])." = $W");}$Ka[]=(isset($ke[$w])?"@".idf_escape($m["field"]):$W);}$F=(isset($_GET["callf"])?"SELECT":"CALL")." ".idf_escape($da)."(".implode(", ",$Ka).")";echo"<p><code class='jush-$v'>".h($F)."</code> <a href='".h(ME)."sql=".urlencode($F)."'>".'√Ñndern'."</a>\n";if(!$h->multi_query($F))echo"<p class='error'>".error()."\n";else{$i=connect();if(is_object($i))$i->select_db(DB);do{$G=$h->store_result();if(is_object($G))select($G,$i);else
echo"<p class='message'>".lang(array('Kommando SQL ausgef√ºhrt, %d Datensatz betroffen.','Kommando SQL ausgef√ºhrt, %d Datens√§tze betroffen.'),$h->affected_rows)."\n";}while($h->next_result());if($ke)select($h->query("SELECT ".implode(", ",$ke)));}}echo'
<form action="" method="post">
';if($Hc){echo"<table cellspacing='0'>\n";foreach($Hc
as$w){$m=$ef["fields"][$w];$A=$m["field"];echo"<tr><th>".$b->fieldName($m);$X=$_POST["fields"][$A];if($X!=""){if($m["type"]=="enum")$X=+$X;if($m["type"]=="set")$X=array_sum($X);}input($m,$X,(string)$_POST["function"][$A]);echo"\n";}echo"</table>\n";}echo'<p>
<input type="submit" value="Aufrufen">
<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["foreign"])){$a=$_GET["foreign"];if($_POST&&!$l&&!$_POST["add"]&&!$_POST["change"]&&!$_POST["change-js"]){if($_POST["drop"])query_redirect("ALTER TABLE ".table($a)."\nDROP ".($v=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($_GET["name"]),ME."table=".urlencode($a),'Fremdschl√ºssel entfernt.');else{$uf=array_filter($_POST["source"],'strlen');ksort($uf);$Pf=array();foreach($uf
as$w=>$W)$Pf[$w]=$_POST["target"][$w];query_redirect("ALTER TABLE ".table($a).($_GET["name"]!=""?"\nDROP ".($v=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($_GET["name"]).",":"")."\nADD FOREIGN KEY (".implode(", ",array_map('idf_escape',$uf)).") REFERENCES ".table($_POST["table"])." (".implode(", ",array_map('idf_escape',$Pf)).")".(ereg("^($Td)\$",$_POST["on_delete"])?" ON DELETE $_POST[on_delete]":"").(ereg("^($Td)\$",$_POST["on_update"])?" ON UPDATE $_POST[on_update]":""),ME."table=".urlencode($a),($_GET["name"]!=""?'Fremdschl√ºssel ge√§ndert.':'Fremdschl√ºssel erstellt.'));$l='Spalten des Ursprungs und des Zieles m√ºssen vom gleichen Datentyp sein, es muss unter den Zielspalten ein Index existieren und die referenzierten Daten m√ºssen existieren.'."<br>$l";}}page_header('Fremdschl√ºssel',$l,array("table"=>$a),$a);$I=array("table"=>$a,"source"=>array(""));if($_POST){$I=$_POST;ksort($I["source"]);if($_POST["add"])$I["source"][]="";elseif($_POST["change"]||$_POST["change-js"])$I["target"]=array();}elseif($_GET["name"]!=""){$nc=foreign_keys($a);$I=$nc[$_GET["name"]];$I["source"][]="";}$uf=array_keys(fields($a));$Pf=($a===$I["table"]?$uf:array_keys(fields($I["table"])));$Qe=array();foreach(table_status()as$A=>$P){if(fk_support($P))$Qe[]=$A;}echo'
<form action="" method="post">
<p>
';if($I["db"]==""&&$I["ns"]==""){echo'Zieltabelle:
',html_select("table",$Qe,$I["table"],"this.form['change-js'].value = '1'; this.form.submit();"),'<input type="hidden" name="change-js" value="">
<noscript><p><input type="submit" name="change" value="√Ñndern"></noscript>
<table cellspacing="0">
<thead><tr><th>Ursprung<th>Ziel</thead>
';$Uc=0;foreach($I["source"]as$w=>$W){echo"<tr>","<td>".html_select("source[".(+$w)."]",array(-1=>"")+$uf,$W,($Uc==count($I["source"])-1?"foreignAddRow(this);":1)),"<td>".html_select("target[".(+$w)."]",$Pf,$I["target"][$w]);$Uc++;}echo'</table>
<p>
ON DELETE: ',html_select("on_delete",array(-1=>"")+explode("|",$Td),$I["on_delete"]),' ON UPDATE: ',html_select("on_update",array(-1=>"")+explode("|",$Td),$I["on_update"]),'<p>
<input type="submit" value="Speichern">
<noscript><p><input type="submit" name="add" value="Spalte hinzuf√ºgen"></noscript>
';}if($_GET["name"]!=""){echo'<input type="submit" name="drop" value="Entfernen"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["view"])){$a=$_GET["view"];$I=($a==""?array():view($a));$I["name"]=$a;if($_POST){if(!$l){$A=trim($_POST["name"]);drop_create("DROP VIEW ".table($a),"CREATE VIEW ".table($A)." AS\n$_POST[select]","CREATE VIEW ".table($a)." AS\n$I[select]",($_POST["drop"]?substr(ME,0,-1):ME."table=".urlencode($A)),'View entfernt.','View ge√§ndert.','View erstellt.',$a);}$I=$_POST;}page_header(($a!=""?'View √§ndern':'Neue View erstellen'),$l,array("table"=>$a),$a);echo'
<form action="" method="post">
<p>Name: <input name="name" value="',h($I["name"]),'" maxlength="64" autocapitalize="off">
<p>';textarea("select",$I["select"]);echo'<p>
<input type="submit" value="Speichern">
';if($_GET["view"]!=""){echo'<input type="submit" name="drop" value="Entfernen"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["event"])){$aa=$_GET["event"];$Pc=array("YEAR","QUARTER","MONTH","DAY","HOUR","MINUTE","WEEK","SECOND","YEAR_MONTH","DAY_HOUR","DAY_MINUTE","DAY_SECOND","HOUR_MINUTE","HOUR_SECOND","MINUTE_SECOND");$zf=array("ENABLED"=>"ENABLE","DISABLED"=>"DISABLE","SLAVESIDE_DISABLED"=>"DISABLE ON SLAVE");if($_POST&&!$l){if($_POST["drop"])query_redirect("DROP EVENT ".idf_escape($aa),substr(ME,0,-1),'Ereignis entfernt.');elseif(in_array($_POST["INTERVAL_FIELD"],$Pc)&&isset($zf[$_POST["STATUS"]])){$jf="\nON SCHEDULE ".($_POST["INTERVAL_VALUE"]?"EVERY ".q($_POST["INTERVAL_VALUE"])." $_POST[INTERVAL_FIELD]".($_POST["STARTS"]?" STARTS ".q($_POST["STARTS"]):"").($_POST["ENDS"]?" ENDS ".q($_POST["ENDS"]):""):"AT ".q($_POST["STARTS"]))." ON COMPLETION".($_POST["ON_COMPLETION"]?"":" NOT")." PRESERVE";queries_redirect(substr(ME,0,-1),($aa!=""?'Ereignis ge√§ndert.':'Ereignis erstellt.'),queries(($aa!=""?"ALTER EVENT ".idf_escape($aa).$jf.($aa!=$_POST["EVENT_NAME"]?"\nRENAME TO ".idf_escape($_POST["EVENT_NAME"]):""):"CREATE EVENT ".idf_escape($_POST["EVENT_NAME"]).$jf)."\n".$zf[$_POST["STATUS"]]." COMMENT ".q($_POST["EVENT_COMMENT"]).rtrim(" DO\n$_POST[EVENT_DEFINITION]",";").";"));}}page_header(($aa!=""?'Ereignis √§ndern'.": ".h($aa):'Ereignis erstellen'),$l);$I=$_POST;if(!$I&&$aa!=""){$J=get_rows("SELECT * FROM information_schema.EVENTS WHERE EVENT_SCHEMA = ".q(DB)." AND EVENT_NAME = ".q($aa));$I=reset($J);}echo'
<form action="" method="post">
<table cellspacing="0">
<tr><th>Name<td><input name="EVENT_NAME" value="',h($I["EVENT_NAME"]),'" maxlength="64" autocapitalize="off">
<tr><th title="datetime">Start<td><input name="STARTS" value="',h("$I[EXECUTE_AT]$I[STARTS]"),'">
<tr><th title="datetime">Ende<td><input name="ENDS" value="',h($I["ENDS"]),'">
<tr><th>Jede<td><input type="number" name="INTERVAL_VALUE" value="',h($I["INTERVAL_VALUE"]),'" class="size"> ',html_select("INTERVAL_FIELD",$Pc,$I["INTERVAL_FIELD"]),'<tr><th>Status<td>',html_select("STATUS",$zf,$I["STATUS"]),'<tr><th>Kommentar<td><input name="EVENT_COMMENT" value="',h($I["EVENT_COMMENT"]),'" maxlength="64">
<tr><th>&nbsp;<td>',checkbox("ON_COMPLETION","PRESERVE",$I["ON_COMPLETION"]=="PRESERVE",'Nach der Ausf√ºhrung erhalten'),'</table>
<p>';textarea("EVENT_DEFINITION",$I["EVENT_DEFINITION"]);echo'<p>
<input type="submit" value="Speichern">
';if($aa!=""){echo'<input type="submit" name="drop" value="Entfernen"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["procedure"])){$da=$_GET["procedure"];$ef=(isset($_GET["function"])?"FUNCTION":"PROCEDURE");$ff=routine_languages();$I=($da==""?array("fields"=>array()):routine($da,$ef));$I["name"]=$da;if($_POST){if(!$l&&!$_POST["add"]&&!$_POST["drop_col"]&&!$_POST["up"]&&!$_POST["down"])drop_create("DROP $ef ".idf_escape($da),create_routine($ef,$_POST),create_routine($ef,$I),substr(ME,0,-1),'Prozedur entfernt.','Prozedur ge√§ndert.','Prozedur erstellt.',$da);$I=$_POST;$I["fields"]=(array)$I["fields"];process_fields($I["fields"]);}page_header(($da!=""?(isset($_GET["function"])?'Funktion √§ndern':'Prozedur √§ndern').": ".h($da):(isset($_GET["function"])?'Neue Funktion':'Neue Prozedur')),$l);$Ua=get_vals("SHOW CHARACTER SET");sort($Ua);echo'
<form action="" method="post" id="form">
<p>Name: <input name="name" value="',h($I["name"]),'" maxlength="64" autocapitalize="off">
',($ff?'Sprache'.": ".html_select("language",$ff,$I["language"]):""),'<table cellspacing="0" class="nowrap">
';edit_fields($I["fields"],$Ua,$ef);if(isset($_GET["function"])){echo"<tr><td>".'Typ des R√ºckgabewertes';edit_type("returns",$I["returns"],$Ua);}echo'</table>
<p>';textarea("definition",$I["definition"]);echo'<p>
<input type="submit" value="Speichern">
';if($da!=""){echo'<input type="submit" name="drop" value="Entfernen"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["sequence"])){$fa=$_GET["sequence"];if($_POST&&!$l){$z=substr(ME,0,-1);$A=trim($_POST["name"]);if($_POST["drop"])query_redirect("DROP SEQUENCE ".idf_escape($fa),$z,'Sequenz gel√∂scht.');elseif($fa=="")query_redirect("CREATE SEQUENCE ".idf_escape($A),$z,'Neue Sequenz erstellt.');elseif($fa!=$A)query_redirect("ALTER SEQUENCE ".idf_escape($fa)." RENAME TO ".idf_escape($A),$z,'Sequenz ge√§ndert.');else
redirect($z);}page_header($fa!=""?'Sequenz √§ndern'.": ".h($fa):'Neue Sequenz',$l);$I=$_POST;if(!$I)$I=array("name"=>$fa);echo'
<form action="" method="post">
<p><input name="name" value="',h($I["name"]),'" autocapitalize="off">
<input type="submit" value="Speichern">
';if($fa!="")echo"<input type='submit' name='drop' value='".'Entfernen'."'".confirm().">\n";echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["type"])){$ga=$_GET["type"];if($_POST&&!$l){$z=substr(ME,0,-1);if($_POST["drop"])query_redirect("DROP TYPE ".idf_escape($ga),$z,'Typ gel√∂scht.');else
query_redirect("CREATE TYPE ".idf_escape(trim($_POST["name"]))." $_POST[as]",$z,'Typ erstellt.');}page_header($ga!=""?'Typ √§ndern'.": ".h($ga):'Typ erstellen',$l);$I=$_POST;if(!$I)$I=array("as"=>"AS ");echo'
<form action="" method="post">
<p>
';if($ga!="")echo"<input type='submit' name='drop' value='".'Entfernen'."'".confirm().">\n";else{echo"<input name='name' value='".h($I['name'])."' autocapitalize='off'>\n";textarea("as",$I["as"]);echo"<p><input type='submit' value='".'Speichern'."'>\n";}echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["trigger"])){$a=$_GET["trigger"];$hg=trigger_options();$fg=array("INSERT","UPDATE","DELETE");$I=(array)trigger($_GET["name"])+array("Trigger"=>$a."_bi");if($_POST){if(!$l&&in_array($_POST["Timing"],$hg["Timing"])&&in_array($_POST["Event"],$fg)&&in_array($_POST["Type"],$hg["Type"])){$Sd=" ON ".table($a);drop_create("DROP TRIGGER ".idf_escape($_GET["name"]).($v=="pgsql"?$Sd:""),create_trigger($Sd,$_POST),create_trigger($Sd,$I+array("Type"=>reset($hg["Type"]))),ME."table=".urlencode($a),'Trigger entfernt.','Trigger ge√§ndert.','Trigger erstellt.',$_GET["name"]);}$I=$_POST;}page_header(($_GET["name"]!=""?'Trigger √§ndern'.": ".h($_GET["name"]):'Trigger hinzuf√ºgen'),$l,array("table"=>$a));echo'
<form action="" method="post" id="form">
<table cellspacing="0">
<tr><th>Zeitpunkt<td>',html_select("Timing",$hg["Timing"],$I["Timing"],"if (/^".preg_quote($a,"/")."_[ba][iud]$/.test(this.form['Trigger'].value)) this.form['Trigger'].value = '".js_escape($a)."_' + selectValue(this).charAt(0).toLowerCase() + selectValue(this.form['Event']).charAt(0).toLowerCase();"),'<tr><th>Ereignis<td>',html_select("Event",$fg,$I["Event"],"this.form['Timing'].onchange();"),'<tr><th>Typ<td>',html_select("Type",$hg["Type"],$I["Type"]),'</table>
<p>Name: <input name="Trigger" value="',h($I["Trigger"]),'" maxlength="64" autocapitalize="off">
<p>';textarea("Statement",$I["Statement"]);echo'<p>
<input type="submit" value="Speichern">
';if($_GET["name"]!=""){echo'<input type="submit" name="drop" value="Entfernen"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["user"])){$ha=$_GET["user"];$Ie=array(""=>array("All privileges"=>""));foreach(get_rows("SHOW PRIVILEGES")as$I){foreach(explode(",",($I["Privilege"]=="Grant option"?"":$I["Context"]))as$eb)$Ie[$eb][$I["Privilege"]]=$I["Comment"];}$Ie["Server Admin"]+=$Ie["File access on server"];$Ie["Databases"]["Create routine"]=$Ie["Procedures"]["Create routine"];unset($Ie["Procedures"]["Create routine"]);$Ie["Columns"]=array();foreach(array("Select","Insert","Update","References")as$W)$Ie["Columns"][$W]=$Ie["Tables"][$W];unset($Ie["Server Admin"]["Usage"]);foreach($Ie["Tables"]as$w=>$W)unset($Ie["Databases"][$w]);$Jd=array();if($_POST){foreach($_POST["objects"]as$w=>$W)$Jd[$W]=(array)$Jd[$W]+(array)$_POST["grants"][$w];}$xc=array();$Qd="";if(isset($_GET["host"])&&($G=$h->query("SHOW GRANTS FOR ".q($ha)."@".q($_GET["host"])))){while($I=$G->fetch_row()){if(preg_match('~GRANT (.*) ON (.*) TO ~',$I[0],$_)&&preg_match_all('~ *([^(,]*[^ ,(])( *\\([^)]+\\))?~',$_[1],$qd,PREG_SET_ORDER)){foreach($qd
as$W){if($W[1]!="USAGE")$xc["$_[2]$W[2]"][$W[1]]=true;if(ereg(' WITH GRANT OPTION',$I[0]))$xc["$_[2]$W[2]"]["GRANT OPTION"]=true;}}if(preg_match("~ IDENTIFIED BY PASSWORD '([^']+)~",$I[0],$_))$Qd=$_[1];}}if($_POST&&!$l){$Rd=(isset($_GET["host"])?q($ha)."@".q($_GET["host"]):"''");if($_POST["drop"])query_redirect("DROP USER $Rd",ME."privileges=",'Benutzer entfernt.');else{$Kd=q($_POST["user"])."@".q($_POST["host"]);$ue=$_POST["pass"];if($ue!=''&&!$_POST["hashed"]){$ue=$h->result("SELECT PASSWORD(".q($ue).")");$l=!$ue;}$jb=false;if(!$l){if($Rd!=$Kd){$jb=queries(($h->server_info<5?"GRANT USAGE ON *.* TO":"CREATE USER")." $Kd IDENTIFIED BY PASSWORD ".q($ue));$l=!$jb;}elseif($ue!=$Qd)queries("SET PASSWORD FOR $Kd = ".q($ue));}if(!$l){$af=array();foreach($Jd
as$Nd=>$wc){if(isset($_GET["grant"]))$wc=array_filter($wc);$wc=array_keys($wc);if(isset($_GET["grant"]))$af=array_diff(array_keys(array_filter($Jd[$Nd],'strlen')),$wc);elseif($Rd==$Kd){$Pd=array_keys((array)$xc[$Nd]);$af=array_diff($Pd,$wc);$wc=array_diff($wc,$Pd);unset($xc[$Nd]);}if(preg_match('~^(.+)\\s*(\\(.*\\))?$~U',$Nd,$_)&&(!grant("REVOKE",$af,$_[2]," ON $_[1] FROM $Kd")||!grant("GRANT",$wc,$_[2]," ON $_[1] TO $Kd"))){$l=true;break;}}}if(!$l&&isset($_GET["host"])){if($Rd!=$Kd)queries("DROP USER $Rd");elseif(!isset($_GET["grant"])){foreach($xc
as$Nd=>$af){if(preg_match('~^(.+)(\\(.*\\))?$~U',$Nd,$_))grant("REVOKE",array_keys($af),$_[2]," ON $_[1] FROM $Kd");}}}queries_redirect(ME."privileges=",(isset($_GET["host"])?'Benutzer ge√§ndert.':'Benutzer erstellt.'),!$l);if($jb)$h->query("DROP USER $Kd");}}page_header((isset($_GET["host"])?'Benutzer'.": ".h("$ha@$_GET[host]"):'Neuer Benutzer'),$l,array("privileges"=>array('','Rechte')));if($_POST){$I=$_POST;$xc=$Jd;}else{$I=$_GET+array("host"=>$h->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', -1)"));$I["pass"]=$Qd;if($Qd!="")$I["hashed"]=true;$xc[(DB==""||$xc?"":idf_escape(addcslashes(DB,"%_"))).".*"]=array();}echo'<form action="" method="post">
<table cellspacing="0">
<tr><th>Server<td><input name="host" maxlength="60" value="',h($I["host"]),'" autocapitalize="off">
<tr><th>Benutzer<td><input name="user" maxlength="16" value="',h($I["user"]),'" autocapitalize="off">
<tr><th>Passwort<td><input name="pass" id="pass" value="',h($I["pass"]),'">
';if(!$I["hashed"]){echo'<script type="text/javascript">typePassword(document.getElementById(\'pass\'));</script>';}echo
checkbox("hashed",1,$I["hashed"],'Hashed',"typePassword(this.form['pass'], this.checked);"),'</table>

';echo"<table cellspacing='0'>\n","<thead><tr><th colspan='2'><a href='http://dev.mysql.com/doc/refman/".substr($h->server_info,0,3)."/en/grant.html#priv_level' target='_blank' rel='noreferrer' class='help'>".'Rechte'."</a>";$q=0;foreach($xc
as$Nd=>$wc){echo'<th>'.($Nd!="*.*"?"<input name='objects[$q]' value='".h($Nd)."' size='10' autocapitalize='off'>":"<input type='hidden' name='objects[$q]' value='*.*' size='10'>*.*");$q++;}echo"</thead>\n";foreach(array(""=>"","Server Admin"=>'Server',"Databases"=>'Datenbank',"Tables"=>'Tabelle',"Columns"=>'Spalte',"Procedures"=>'Rutine',)as$eb=>$ub){foreach((array)$Ie[$eb]as$He=>$Ya){echo"<tr".odd()."><td".($ub?">$ub<td":" colspan='2'").' lang="en" title="'.h($Ya).'">'.h($He);$q=0;foreach($xc
as$Nd=>$wc){$A="'grants[$q][".h(strtoupper($He))."]'";$X=$wc[strtoupper($He)];if($eb=="Server Admin"&&$Nd!=(isset($xc["*.*"])?"*.*":".*"))echo"<td>&nbsp;";elseif(isset($_GET["grant"]))echo"<td><select name=$A><option><option value='1'".($X?" selected":"").">".'Erlauben'."<option value='0'".($X=="0"?" selected":"").">".'Verbieten'."</select>";else
echo"<td align='center'><input type='checkbox' name=$A value='1'".($X?" checked":"").($He=="All privileges"?" id='grants-$q-all'":($He=="Grant option"?"":" onclick=\"if (this.checked) formUncheck('grants-$q-all');\"")).">";$q++;}}}echo"</table>\n",'<p>
<input type="submit" value="Speichern">
';if(isset($_GET["host"])){echo'<input type="submit" name="drop" value="Entfernen"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["processlist"])){if(support("kill")&&$_POST&&!$l){$ad=0;foreach((array)$_POST["kill"]as$W){if(queries("KILL ".(+$W)))$ad++;}queries_redirect(ME."processlist=",lang(array('%d Prozess gestoppt.','%d Prozesse gestoppt.'),$ad),$ad||!$_POST["kill"]);}page_header('Prozessliste',$l);echo'
<form action="" method="post">
<table cellspacing="0" onclick="tableClick(event);" ondblclick="tableClick(event, true);" class="nowrap checkable">
';$q=-1;foreach(process_list()as$q=>$I){if(!$q){echo"<thead><tr lang='en'>".(support("kill")?"<th>&nbsp;":"");foreach($I
as$w=>$W)echo"<th>".($v=="sql"?"<a href='http://dev.mysql.com/doc/refman/".substr($h->server_info,0,3)."/en/show-processlist.html#processlist_".strtolower($w)."' target='_blank' rel='noreferrer' class='help'>$w</a>":$w);echo"</thead>\n";}echo"<tr".odd().">".(support("kill")?"<td>".checkbox("kill[]",$I["Id"],0):"");foreach($I
as$w=>$W)echo"<td>".(($v=="sql"&&$w=="Info"&&ereg("Query|Killed",$I["Command"])&&$W!="")||($v=="pgsql"&&$w=="current_query"&&$W!="<IDLE>")||($v=="oracle"&&$w=="sql_text"&&$W!="")?"<code class='jush-$v'>".shorten_utf8($W,100,"</code>").' <a href="'.h(ME.($I["db"]!=""?"db=".urlencode($I["db"])."&":"")."sql=".urlencode($W)).'">'.'Klonen'.'</a>':nbsp($W));echo"\n";}echo'</table>
<script type=\'text/javascript\'>tableCheck();</script>
<p>
';if(support("kill")){echo($q+1)."/".sprintf('%d insgesamt',$h->result("SELECT @@max_connections")),"<p><input type='submit' value='".'Anhalten'."'>\n";}echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["select"])){$a=$_GET["select"];$P=table_status($a);$u=indexes($a);$n=fields($a);$nc=column_foreign_keys($a);$Od="";if($P["Oid"]=="t"){$Od=($v=="sqlite"?"rowid":"oid");$u[]=array("type"=>"PRIMARY","columns"=>array($Od));}parse_str($_COOKIE["adminer_import"],$qa);$bf=array();$g=array();$Sf=null;foreach($n
as$w=>$m){$A=$b->fieldName($m);if(isset($m["privileges"]["select"])&&$A!=""){$g[$w]=html_entity_decode(strip_tags($A));if(is_shortable($m))$Sf=$b->selectLengthProcess();}$bf+=$m["privileges"];}list($K,$yc)=$b->selectColumnsProcess($g,$u);$Qc=count($yc)<count($K);$Z=$b->selectSearchProcess($n,$u);$be=$b->selectOrderProcess($n,$u);$y=$b->selectLimitProcess();$sc=($K?implode(", ",$K):"*".($Od?", $Od":""));if($v=="sql"){foreach($g
as$w=>$W){if($K&&!$K[$w])continue;$wa=convert_field($n[$w]);if($wa)$sc.=", $wa AS ".idf_escape($w);}}$sc.="\nFROM ".table($a);$zc=($yc&&$Qc?"\nGROUP BY ".implode(", ",$yc):"").($be?"\nORDER BY ".implode(", ",$be):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$og=>$I){$wa=convert_field($n[key($I)]);echo$h->result("SELECT".limit(($wa?$wa:idf_escape(key($I)))." FROM ".table($a)," WHERE ".where_check($og,$n).($Z?" AND ".implode(" AND ",$Z):"").($be?" ORDER BY ".implode(", ",$be):""),1));}exit;}if($_POST&&!$l){$Fg="(".implode(") OR (",array_map('where_check',(array)$_POST["check"])).")";$De=$qg=null;foreach($u
as$t){if($t["type"]=="PRIMARY"){$De=array_flip($t["columns"]);$qg=($K?$De:array());break;}}foreach((array)$qg
as$w=>$W){if(in_array(idf_escape($w),$K))unset($qg[$w]);}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");if(!is_array($_POST["check"])||$qg===array()){$Eg=$Z;if(is_array($_POST["check"]))$Eg[]="($Fg)";$F="SELECT $sc".($Eg?"\nWHERE ".implode(" AND ",$Eg):"").$zc;}else{$mg=array();foreach($_POST["check"]as$W)$mg[]="(SELECT".limit($sc,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($W,$n).$zc,1).")";$F=implode(" UNION ALL ",$mg);}$b->dumpData($a,"table",$F);exit;}if(!$b->selectEmailProcess($Z,$nc)){if($_POST["save"]||$_POST["delete"]){$G=true;$ra=0;$F=table($a);$M=array();if(!$_POST["delete"]){foreach($g
as$A=>$W){$W=process_input($n[$A]);if($W!==null){if($_POST["clone"])$M[idf_escape($A)]=($W!==false?$W:idf_escape($A));elseif($W!==false)$M[]=idf_escape($A)." = $W";}}$F.=($_POST["clone"]?" (".implode(", ",array_keys($M)).")\nSELECT ".implode(", ",$M)."\nFROM ".table($a):" SET\n".implode(",\n",$M));}if($_POST["delete"]||$M){$Wa="UPDATE";if($_POST["delete"]){$Wa="DELETE";$F="FROM $F";}if($_POST["clone"]){$Wa="INSERT";$F="INTO $F";}if($_POST["all"]||($qg===array()&&$_POST["check"])||$Qc){$G=queries("$Wa $F".($_POST["all"]?($Z?"\nWHERE ".implode(" AND ",$Z):""):"\nWHERE $Fg"));$ra=$h->affected_rows;}else{foreach((array)$_POST["check"]as$W){$G=queries($Wa.limit1($F,"\nWHERE ".where_check($W,$n)));if(!$G)break;$ra+=$h->affected_rows;}}}$yd=sprintf('%d Artikel betroffen.',$ra);if($_POST["clone"]&&$G&&$ra==1){$ed=last_id();if($ed)$yd=sprintf('Datensatz%s hinzugef√ºgt.'," $ed");}queries_redirect(remove_from_uri($_POST["all"]&&$_POST["delete"]?"page":""),$yd,$G);}elseif(!$_POST["import"]){if(!$_POST["val"])$l='Ctrl+klick zum Bearbeiten des Wertes.';else{$G=true;$ra=0;foreach($_POST["val"]as$og=>$I){$M=array();foreach($I
as$w=>$W){$w=bracket_escape($w,1);$M[]=idf_escape($w)." = ".(ereg('char|text',$n[$w]["type"])||$W!=""?$b->processInput($n[$w],$W):"NULL");}$F=table($a)." SET ".implode(", ",$M);$Eg=" WHERE ".where_check($og,$n).($Z?" AND ".implode(" AND ",$Z):"");$G=queries("UPDATE".($Qc?" $F$Eg":limit1($F,$Eg)));if(!$G)break;$ra+=$h->affected_rows;}queries_redirect(remove_from_uri(),sprintf('%d Artikel betroffen.',$ra),$G);}}elseif(is_string($gc=get_file("csv_file",true))){cookie("adminer_import","output=".urlencode($qa["output"])."&format=".urlencode($_POST["separator"]));$G=true;$Va=array_keys($n);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$gc,$qd);$ra=count($qd[0]);begin();$pf=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));foreach($qd[0]as$w=>$W){preg_match_all("~((?>\"[^\"]*\")+|[^$pf]*)$pf~",$W.$pf,$rd);if(!$w&&!array_diff($rd[1],$Va)){$Va=$rd[1];$ra--;}else{$M=array();foreach($rd[1]as$q=>$Sa)$M[idf_escape($Va[$q])]=($Sa==""&&$n[$Va[$q]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$Sa))));$G=insert_update($a,$M,$De);if(!$G)break;}}if($G)queries("COMMIT");queries_redirect(remove_from_uri("page"),lang(array('%d Datensatz importiert.','%d Datens√§tze wurden importiert.'),$ra),$G);queries("ROLLBACK");}else$l=upload_error($gc);}}$If=$b->tableName($P);if(is_ajax())ob_start();page_header('Daten zeigen von'.": $If",$l);$M=null;if(isset($bf["insert"])){$M="";foreach((array)$_GET["where"]as$W){if(count($nc[$W["col"]])==1&&($W["op"]=="="||(!$W["op"]&&!ereg('[_%]',$W["val"]))))$M.="&set".urlencode("[".bracket_escape($W["col"])."]")."=".urlencode($W["val"]);}}$b->selectLinks($P,$M);if(!$g)echo"<p class='error'>".'Auswahl der Tabelle fehlgeschlagen'.($n?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectColumnsPrint($K,$g);$b->selectSearchPrint($Z,$g,$u);$b->selectOrderPrint($be,$g,$u);$b->selectLimitPrint($y);$b->selectLengthPrint($Sf);$b->selectActionPrint($u);echo"</form>\n";$C=$_GET["page"];if($C=="last"){$qc=$h->result("SELECT COUNT(*) FROM ".table($a).($Z?" WHERE ".implode(" AND ",$Z):""));$C=floor(max(0,$qc-1)/$y);}$F=$b->selectQueryBuild($K,$Z,$yc,$be,$y,$C);if(!$F)$F="SELECT".limit((+$y&&$yc&&$Qc&&$v=="sql"?"SQL_CALC_FOUND_ROWS ":"").$sc,($Z?"\nWHERE ".implode(" AND ",$Z):"").$zc,($y!=""?+$y:null),($C?$y*$C:0),"\n");echo$b->selectQuery($F);$G=$h->query($F);if(!$G)echo"<p class='error'>".error()."\n";else{if($v=="mssql"&&$C)$G->seek($y*$C);$Kb=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$J=array();while($I=$G->fetch_assoc()){if($C&&$v=="oracle")unset($I["RNUM"]);$J[]=$I;}if($_GET["page"]!="last")$qc=(+$y&&$yc&&$Qc?($v=="sql"?$h->result(" SELECT FOUND_ROWS()"):$h->result("SELECT COUNT(*) FROM ($F) x")):count($J));if(!$J)echo"<p class='message'>".'Keine Daten.'."\n";else{$Ca=$b->backwardKeys($a,$If);echo"<table id='table' cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$yc&&$K?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'√§ndern'."</a>");$Id=array();$vc=array();reset($K);$Ne=1;foreach($J[0]as$w=>$W){if($w!=$Od){$W=$_GET["columns"][key($K)];$m=$n[$K?($W?$W["col"]:current($K)):$w];$A=($m?$b->fieldName($m,$Ne):"*");if($A!=""){$Ne++;$Id[$w]=$A;$f=idf_escape($w);$Ec=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($w);$ub="&desc%5B0%5D=1";echo'<th onmouseover="columnMouse(this);" onmouseout="columnMouse(this, \' hidden\');">','<a href="'.h($Ec.($be[0]==$f||$be[0]==$w||(!$be&&$Qc&&$yc[0]==$f)?$ub:'')).'">';echo(!$K||$W?apply_sql_function($W["fun"],$A):h(current($K)))."</a>";echo"<span class='column hidden'>","<a href='".h($Ec.$ub)."' title='".'absteigend'."' class='text'> ‚Üì</a>";if(!$W["fun"])echo'<a href="#fieldset-search" onclick="selectSearch(\''.h(js_escape($w)).'\'); return false;" title="'.'Suchen'.'" class="text jsonly"> =</a>';echo"</span>";}$vc[$w]=$W["fun"];next($K);}}$jd=array();if($_GET["modify"]){foreach($J
as$I){foreach($I
as$w=>$W)$jd[$w]=max($jd[$w],min(40,strlen(utf8_decode($W))));}}echo($Ca?"<th>".'Relationen':"")."</thead>\n";if(is_ajax()){if($y%2==1&&$C%2==1)odd();ob_end_clean();}foreach($b->rowDescriptions($J,$nc)as$Hd=>$I){$ng=unique_array($J[$Hd],$u);$og="";foreach($ng
as$w=>$W){if(strlen($W)>64){$w="MD5(".(strpos($w,'(')?$w:idf_escape($w)).")";$W=md5($W);}$og.="&".($W!==null?urlencode("where[".bracket_escape($w)."]")."=".urlencode($W):"null%5B%5D=".urlencode($w));}echo"<tr".odd().">".(!$yc&&$K?"":"<td>".checkbox("check[]",substr($og,1),in_array(substr($og,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").($Qc||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$og)."'>".'√§ndern'."</a>"));foreach($I
as$w=>$W){if(isset($Id[$w])){$m=$n[$w];if($W!=""&&(!isset($Kb[$w])||$Kb[$w]!=""))$Kb[$w]=(is_mail($W)?$Id[$w]:"");$z="";$W=$b->editVal($W,$m);if($W!==null){if(ereg('blob|bytea|raw|file',$m["type"])&&$W!="")$z=ME.'download='.urlencode($a).'&field='.urlencode($w).$og;if($W==="")$W="&nbsp;";elseif($Sf!=""&&is_shortable($m))$W=shorten_utf8($W,max(0,+$Sf));else$W=h($W);if(!$z){foreach((array)$nc[$w]as$o){if(count($nc[$w])==1||end($o["source"])==$w){$z="";foreach($o["source"]as$q=>$uf)$z.=where_link($q,$o["target"][$q],$J[$Hd][$uf]);$z=($o["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($o["db"]),ME):ME).'select='.urlencode($o["table"]).$z;if(count($o["source"])==1)break;}}}if($w=="COUNT(*)"){$z=ME."select=".urlencode($a);$q=0;foreach((array)$_GET["where"]as$V){if(!array_key_exists($V["col"],$ng))$z.=where_link($q++,$V["col"],$V["val"],$V["op"]);}foreach($ng
as$Wc=>$V)$z.=where_link($q++,$Wc,$V);}}if(!$z&&($z=$b->selectLink($I[$w],$m))===null){if(is_mail($I[$w]))$z="mailto:$I[$w]";if($Le=is_url($I[$w]))$z=($Le=="http"&&$ba?$I[$w]:"$Le://www.adminer.org/redirect/?url=".urlencode($I[$w]));}$r=h("val[$og][".bracket_escape($w)."]");$X=$_POST["val"][$og][bracket_escape($w)];$Ac=h($X!==null?$X:$I[$w]);$od=strpos($W,"<i>...</i>");$Gb=is_utf8($W)&&$J[$Hd][$w]==$I[$w]&&!$vc[$w];$Rf=ereg('text|lob',$m["type"]);echo(($_GET["modify"]&&$Gb)||$X!==null?"<td>".($Rf?"<textarea name='$r' cols='30' rows='".(substr_count($I[$w],"\n")+1)."'>$Ac</textarea>":"<input name='$r' value='$Ac' size='$jd[$w]'>"):"<td id='$r' onclick=\"selectClick(this, event, ".($od?2:($Rf?1:0)).($Gb?"":", '".h('Benutzen Sie den Link zum editieren dieses Wertes.')."'").");\">".$b->selectVal($W,$z,$m));}}if($Ca)echo"<td>";$b->backwardKeysPrint($Ca,$J[$Hd]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n",(!$yc&&$K?"":"<script type='text/javascript'>tableCheck();</script>\n");}if(($J||$C)&&!is_ajax()){$Ub=true;if($_GET["page"]!="last"&&+$y&&!$Qc&&($qc>=$y||$C)){$qc=found_rows($P,$Z);if($qc<max(1e4,2*($C+1)*$y))$qc=reset(slow_query("SELECT COUNT(*) FROM ".table($a).($Z?" WHERE ".implode(" AND ",$Z):"")));else$Ub=false;}if(+$y&&($qc===false||$qc>$y||$C)){echo"<p class='pages'>";$td=($qc===false?$C+(count($J)>=$y?2:1):floor(($qc-1)/$y));echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".'Seite'."', '".($C+1)."'), event); return false;\">".'Seite'."</a>:",pagination(0,$C).($C>5?" ...":"");for($q=max(1,$C-4);$q<min($td,$C+5);$q++)echo
pagination($q,$C);if($td>0){echo($C+5<$td?" ...":""),($Ub&&$qc!==false?pagination($td,$C):" <a href='".h(remove_from_uri("page")."&page=last")."' title='~$td'>".'letzte'."</a>");}echo(($qc===false?count($J)+1:$qc-$C*$y)>$y?' <a href="'.h(remove_from_uri("page")."&page=".($C+1)).'" onclick="return !selectLoadMore(this, '.(+$y).', \''.'Loading'.'\');">'.'Load more data'.'</a>':'');}echo"<p>\n",($qc!==false?"(".($Ub?"":"~ ").lang(array('%d Datensatz','%d Datens√§tze'),$qc).") ":""),checkbox("all",1,0,'Gesamtergebnis')."\n";if($b->selectCommandPrint()){echo'<fieldset><legend>√Ñndern</legend><div>
<input type="submit" value="Speichern"',($_GET["modify"]?'':' title="'.'Ctrl+klick zum Bearbeiten des Wertes.'.'" class="jsonly"');?>>
<input type="submit" name="edit" value="√Ñndern">
<input type="submit" name="clone" value="Klonen">
<input type="submit" name="delete" value="Entfernen" onclick="return confirm('Sind Sie sicher ? (' + (this.form['all'].checked ? <?php echo$qc,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}$oc=$b->dumpFormat();if($oc){print_fieldset("export",'Exportieren');$le=$b->dumpOutput();echo($le?html_select("output",$le,$qa["output"])." ":""),html_select("format",$oc,$qa["format"])," <input type='submit' name='export' value='".'Exportieren'."'>\n","</div></fieldset>\n";}}if($b->selectImportPrint()){print_fieldset("import",'Importieren',!$J);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$qa["format"],1);echo" <input type='submit' name='import' value='".'Importieren'."'>","</div></fieldset>\n";}$b->selectEmailPrint(array_filter($Kb,'strlen'),$g);echo"<p><input type='hidden' name='token' value='$R'></p>\n","</form>\n";}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["variables"])){$yf=isset($_GET["status"]);page_header($yf?'Status':'Variablen');$_g=($yf?show_status():show_variables());if(!$_g)echo"<p class='message'>".'Keine Daten.'."\n";else{echo"<table cellspacing='0'>\n";foreach($_g
as$w=>$W){echo"<tr>","<th><code class='jush-".$v.($yf?"status":"set")."'>".h($w)."</code>","<td>".nbsp($W);}echo"</table>\n";}}elseif(isset($_GET["script"])){header("Content-Type: text/javascript; charset=utf-8");if($_GET["script"]=="db"){$Ff=array("Data_length"=>0,"Index_length"=>0,"Data_free"=>0);foreach(table_status()as$P){$r=js_escape($P["Name"]);json_row("Comment-$r",nbsp($P["Comment"]));if(!is_view($P)){foreach(array("Engine","Collation")as$w)json_row("$w-$r",nbsp($P[$w]));foreach($Ff+array("Auto_increment"=>0,"Rows"=>0)as$w=>$W){if($P[$w]!=""){$W=number_format($P[$w],0,'.',' ');json_row("$w-$r",($w=="Rows"&&$W&&$P["Engine"]==($wf=="pgsql"?"table":"InnoDB")?"~ $W":$W));if(isset($Ff[$w]))$Ff[$w]+=($P["Engine"]!="InnoDB"||$w!="Data_free"?$P[$w]:0);}elseif(array_key_exists($w,$P))json_row("$w-$r");}}}foreach($Ff
as$w=>$W)json_row("sum-$w",number_format($W,0,'.',' '));json_row("");}elseif($_GET["script"]=="kill")$h->query("KILL ".(+$_POST["kill"]));else{foreach(count_tables($b->databases())as$k=>$W)json_row("tables-".js_escape($k),$W);json_row("");}exit;}else{$Of=array_merge((array)$_POST["tables"],(array)$_POST["views"]);if($Of&&!$l&&!$_POST["search"]){$G=true;$yd="";if($v=="sql"&&count($_POST["tables"])>1&&($_POST["drop"]||$_POST["truncate"]||$_POST["copy"]))queries("SET foreign_key_checks = 0");if($_POST["truncate"]){if($_POST["tables"])$G=truncate_tables($_POST["tables"]);$yd='Tabellen sind entleert worden (truncate).';}elseif($_POST["move"]){$G=move_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$yd='Tabellen verschoben.';}elseif($_POST["copy"]){$G=copy_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$yd='Tabellen wurden kopiert.';}elseif($_POST["drop"]){if($_POST["views"])$G=drop_views($_POST["views"]);if($G&&$_POST["tables"])$G=drop_tables($_POST["tables"]);$yd='Tabellen wurden entfernt (drop).';}elseif($v!="sql"){$G=($v=="sqlite"?queries("VACUUM"):apply_queries("VACUUM".($_POST["optimize"]?"":" ANALYZE"),$_POST["tables"]));$yd='Tables have been optimized.';}elseif(!$_POST["tables"])$yd='Keine Tabellen.';elseif($G=queries(($_POST["optimize"]?"OPTIMIZE":($_POST["check"]?"CHECK":($_POST["repair"]?"REPAIR":"ANALYZE")))." TABLE ".implode(", ",array_map('idf_escape',$_POST["tables"])))){while($I=$G->fetch_assoc())$yd.="<b>".h($I["Table"])."</b>: ".h($I["Msg_text"])."<br>";}queries_redirect(substr(ME,0,-1),$yd,$G);}page_header(($_GET["ns"]==""?'Datenbank'.": ".h(DB):'Schema'.": ".h($_GET["ns"])),$l,true);if($b->homepage()){if($_GET["ns"]!==""){echo"<h3>".'Tabellen und Views'."</h3>\n";$Nf=tables_list();if(!$Nf)echo"<p class='message'>".'Keine Tabellen.'."\n";else{echo"<form action='' method='post'>\n","<p>".'Suche in Tabellen'.": <input type='search' name='query' value='".h($_POST["query"])."'> <input type='submit' name='search' value='".'Suchen'."'>\n";if($_POST["search"]&&$_POST["query"]!="")search_tables();echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^(tables|views)\[/);">','<th>'.'Tabelle','<td>'.'Motor','<td>'.'Collation','<td>'.'Datengr√∂sse','<td>'.'Indexgr√∂sse','<td>'.'Freier Bereich','<td>'.'Auto-Inkrement','<td>'.'Datens√§tze',(support("comment")?'<td>'.'Kommentar':''),"</thead>\n";foreach($Nf
as$A=>$S){$Bg=($S!==null&&!eregi("table",$S));echo'<tr'.odd().'><td>'.checkbox(($Bg?"views[]":"tables[]"),$A,in_array($A,$Of,true),"","formUncheck('check-all');"),'<th><a href="'.h(ME).'table='.urlencode($A).'" title="'.'Struktur anzeigen'.'">'.h($A).'</a>';if($Bg){echo'<td colspan="6"><a href="'.h(ME)."view=".urlencode($A).'" title="'.'View √§ndern'.'">'.'View'.'</a>','<td align="right"><a href="'.h(ME)."select=".urlencode($A).'" title="'.'Daten ausw√§hlen'.'">?</a>';}else{foreach(array("Engine"=>array(),"Collation"=>array(),"Data_length"=>array("create",'Tabelle √§ndern'),"Index_length"=>array("indexes",'Indizes √§ndern'),"Data_free"=>array("edit",'Neuer Datensatz'),"Auto_increment"=>array("auto_increment=1&create",'Tabelle √§ndern'),"Rows"=>array("select",'Daten ausw√§hlen'),)as$w=>$z)echo($z?"<td align='right'><a href='".h(ME."$z[0]=").urlencode($A)."' id='$w-".h($A)."' title='$z[1]'>?</a>":"<td id='$w-".h($A)."'>&nbsp;");}echo(support("comment")?"<td id='Comment-".h($A)."'>&nbsp;":"");}echo"<tr><td>&nbsp;<th>".sprintf('%d insgesamt',count($Nf)),"<td>".nbsp($v=="sql"?$h->result("SELECT @@storage_engine"):""),"<td>".nbsp(db_collation(DB,collations()));foreach(array("Data_length","Index_length","Data_free")as$w)echo"<td align='right' id='sum-$w'>&nbsp;";echo"</table>\n","<script type='text/javascript'>tableCheck();</script>\n";if(!information_schema(DB)){echo"<p>".(ereg('^(sql|sqlite|pgsql)$',$v)?($v!="sqlite"?"<input type='submit' value='".'Analysieren'."'> ":"")."<input type='submit' name='optimize' value='".'Optimieren'."'> ":"").($v=="sql"?"<input type='submit' name='check' value='".'Pr√ºfen'."'> <input type='submit' name='repair' value='".'Reparieren'."'> ":"")."<input type='submit' name='truncate' value='".'Entleeren (truncate)'."'".confirm("formChecked(this, /tables/)")."> <input type='submit' name='drop' value='".'Entfernen'."'".confirm("formChecked(this, /tables|views/)").">\n";$j=(support("scheme")?schemas():$b->databases());if(count($j)!=1&&$v!="sqlite"){$k=(isset($_POST["target"])?$_POST["target"]:(support("scheme")?$_GET["ns"]:DB));echo"<p>".'In andere Datenbank verschieben'.": ",($j?html_select("target",$j,$k):'<input name="target" value="'.h($k).'" autocapitalize="off">')," <input type='submit' name='move' value='".'Verschieben'."'>",(support("copy")?" <input type='submit' name='copy' value='".'Kopieren'."'>":""),"\n";}echo"<input type='hidden' name='token' value='$R'>\n";}echo"</form>\n";}echo'<p><a href="'.h(ME).'create=">'.'Neue Tabelle erstellen'."</a>\n";if(support("view"))echo'<a href="'.h(ME).'view=">'.'Neue View erstellen'."</a>\n";if(support("routine")){echo"<h3>".'Prozeduren'."</h3>\n";$gf=routines();if($gf){echo"<table cellspacing='0'>\n",'<thead><tr><th>'.'Name'.'<td>'.'Typ'.'<td>'.'Typ des R√ºckgabewertes'."<td>&nbsp;</thead>\n";odd('');foreach($gf
as$I){echo'<tr'.odd().'>','<th><a href="'.h(ME).($I["ROUTINE_TYPE"]!="PROCEDURE"?'callf=':'call=').urlencode($I["ROUTINE_NAME"]).'">'.h($I["ROUTINE_NAME"]).'</a>','<td>'.h($I["ROUTINE_TYPE"]),'<td>'.h($I["DTD_IDENTIFIER"]),'<td><a href="'.h(ME).($I["ROUTINE_TYPE"]!="PROCEDURE"?'function=':'procedure=').urlencode($I["ROUTINE_NAME"]).'">'.'√Ñndern'."</a>";}echo"</table>\n";}echo'<p>'.(support("procedure")?'<a href="'.h(ME).'procedure=">'.'Neue Prozedur'.'</a> ':'').'<a href="'.h(ME).'function=">'.'Neue Funktion'."</a>\n";}if(support("sequence")){echo"<h3>".'Sequenz'."</h3>\n";$qf=get_vals("SELECT sequence_name FROM information_schema.sequences WHERE sequence_schema = current_schema()");if($qf){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Name'."</thead>\n";odd('');foreach($qf
as$W)echo"<tr".odd()."><th><a href='".h(ME)."sequence=".urlencode($W)."'>".h($W)."</a>\n";echo"</table>\n";}echo"<p><a href='".h(ME)."sequence='>".'Neue Sequenz'."</a>\n";}if(support("type")){echo"<h3>".'Benutzer-definierte Typen'."</h3>\n";$wg=types();if($wg){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Name'."</thead>\n";odd('');foreach($wg
as$W)echo"<tr".odd()."><th><a href='".h(ME)."type=".urlencode($W)."'>".h($W)."</a>\n";echo"</table>\n";}echo"<p><a href='".h(ME)."type='>".'Typ erstellen'."</a>\n";}if(support("event")){echo"<h3>".'Ereignisse'."</h3>\n";$J=get_rows("SHOW EVENTS");if($J){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Name'."<td>".'Zeitplan'."<td>".'Start'."<td>".'Ende'."<td></thead>\n";foreach($J
as$I){echo"<tr>","<th>".h($I["Name"]),"<td>".($I["Execute at"]?'Zur angegebenen Zeit'."<td>".$I["Execute at"]:'Jede'." ".$I["Interval value"]." ".$I["Interval field"]."<td>$I[Starts]"),"<td>$I[Ends]",'<td><a href="'.h(ME).'event='.urlencode($I["Name"]).'">'.'√Ñndern'.'</a>';}echo"</table>\n";$Tb=$h->result("SELECT @@event_scheduler");if($Tb&&$Tb!="ON")echo"<p class='error'><code class='jush-sqlset'>event_scheduler</code>: ".h($Tb)."\n";}echo'<p><a href="'.h(ME).'event=">'.'Ereignis erstellen'."</a>\n";}if($Nf)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}}}page_footer();