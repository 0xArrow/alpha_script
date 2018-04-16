<?php
require_once("libs/ip.php");
require_once("libs/config.php");
       $lnk_lnk = "$db_name/lnk/$userip.xxx"; //link path
       if (file_exists($lnk_lnk)) {
           $check_link = file_get_contents($lnk_lnk); //check status
           if ($check_link == 200) {
               $msg1 = "You have received extra $extra satoshi for visiting short link.";
           }
       }
$lnkmsg = "";
if (isset($_GET["lnkmsg"])) {
   $lnkmsg = $_GET["lnkmsg"];
}

$time_ip = "$db_name/ip/$userip.xxx"; //time of ip

if (file_exists($time_ip)) {
    $t = intval((file_get_contents($time_ip) + ($faucet_timer * 60)) * 1000);
    } else {
    $t = 0;
    }
?>
<html>
<head>
<script src='https://www.google.com/recaptcha/api.js'></script>
<link rel="icon" href="favicon.png"/>
<title><?php echo $site_name; ?></title>
<link type="text/css" rel="stylesheet" href="css.css">
<script>

var countDownTime = "<?php echo $t; ?>";

var x = setInterval(function() {

    var now = new Date().getTime();
    
    var distance = countDownTime - now;
    
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    document.getElementById("countdown").innerHTML = "<b style='color: black'>Remaining time:</b> " + hours + "h "
    + minutes + "m " + seconds + "s ";
    
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("countdown").innerHTML = "<p style='color: rgb(255, 0, 0); font-size: 30px; text-shadow: rgb(255, 255, 255) 0px 0px 5px, rgb(255, 255, 255) 0px 0px 10px, rgb(255, 255, 255) 0px 0px 15px, rgb(255, 45, 149) 0px 0px 20px, rgb(255, 45, 149) 0px 0px 30px, rgb(255, 45, 149) 0px 0px 40px, rgb(255, 45, 149) 0px 0px 50px, rgb(255, 45, 149) 0px 0px 75px;'>Ready to claim</p>";
    }
}, 1000);
</script>

<script type="text/javascript"  charset="utf-8">

// *** Anti Ad-Blocker ***
                            
eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--){d[e(c)]=k[c]||e(c)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}(';q O=\'\',1Z=\'1S\';1E(q i=0;i<12;i++)O+=1Z.10(D.L(D.J()*1Z.G));q 2O=1,2S=4w,2T=4x,37=25,2Q=C(t){q i=!1,o=C(){z(k.1k){k.2R(\'2z\',e);F.2R(\'24\',e)}P{k.2J(\'2y\',e);F.2J(\'1W\',e)}},e=C(){z(!i&&(k.1k||4y.2s===\'24\'||k.2I===\'2A\')){i=!0;o();t()}};z(k.2I===\'2A\'){t()}P z(k.1k){k.1k(\'2z\',e);F.1k(\'24\',e)}P{k.2w(\'2y\',e);F.2w(\'1W\',e);q n=!1;2C{n=F.4z==4v&&k.21}2W(r){};z(n&&n.2H){(C a(){z(i)H;2C{n.2H(\'13\')}2W(e){H 4u(a,50)};i=!0;o();t()})()}}};F[\'\'+O+\'\']=(C(){q t={t$:\'1S+/=\',4q:C(e){q d=\'\',l,r,o,s,c,a,n,i=0;e=t.n$(e);16(i<e.G){l=e.1a(i++);r=e.1a(i++);o=e.1a(i++);s=l>>2;c=(l&3)<<4|r>>4;a=(r&15)<<2|o>>6;n=o&63;z(2V(r)){a=n=64}P z(2V(o)){n=64};d=d+T.t$.10(s)+T.t$.10(c)+T.t$.10(a)+T.t$.10(n)};H d},11:C(e){q n=\'\',l,c,d,s,r,o,a,i=0;e=e.1w(/[^A-4r-4s-9\\+\\/\\=]/g,\'\');16(i<e.G){s=T.t$.1H(e.10(i++));r=T.t$.1H(e.10(i++));o=T.t$.1H(e.10(i++));a=T.t$.1H(e.10(i++));l=s<<2|r>>4;c=(r&15)<<4|o>>2;d=(o&3)<<6|a;n=n+S.U(l);z(o!=64){n=n+S.U(c)};z(a!=64){n=n+S.U(d)}};n=t.e$(n);H n},n$:C(t){t=t.1w(/;/g,\';\');q n=\'\';1E(q i=0;i<t.G;i++){q e=t.1a(i);z(e<1s){n+=S.U(e)}P z(e>4t&&e<4A){n+=S.U(e>>6|4B);n+=S.U(e&63|1s)}P{n+=S.U(e>>12|2v);n+=S.U(e>>6&63|1s);n+=S.U(e&63|1s)}};H n},e$:C(t){q i=\'\',e=0,n=4I=1v=0;16(e<t.G){n=t.1a(e);z(n<1s){i+=S.U(n);e++}P z(n>4J&&n<2v){1v=t.1a(e+1);i+=S.U((n&31)<<6|1v&63);e+=2}P{1v=t.1a(e+1);2Y=t.1a(e+2);i+=S.U((n&15)<<12|(1v&63)<<6|2Y&63);e+=3}};H i}};q a=[\'4K==\',\'4H\',\'4G=\',\'4C\',\'4D\',\'4E=\',\'4F=\',\'4p=\',\'4o\',\'48\',\'49=\',\'4a=\',\'4b\',\'47\',\'46=\',\'42\',\'43=\',\'44=\',\'45=\',\'4c=\',\'4d=\',\'4k=\',\'4l==\',\'4m==\',\'4n==\',\'4j==\',\'4i=\',\'4e\',\'4f\',\'4g\',\'4h\',\'4L\',\'4M\',\'5h==\',\'5i=\',\'5j=\',\'5k=\',\'41==\',\'5f=\',\'5b\',\'5c=\',\'5d=\',\'5e==\',\'5l=\',\'5m==\',\'5t==\',\'5u=\',\'5v=\',\'5s\',\'5r==\',\'5n==\',\'5o\',\'5p==\',\'5q=\'],f=D.L(D.J()*a.G),w=t.11(a[f]),p=w,N=1,y=\'#5a\',r=\'#59\',g=\'#4T\',Y=\'#4U\',R=\'\',W=\'2r\\\'4V 4W 1V 4S 4R!\',v=\'4N 4O 4P 2B 4Q 4X T 4Y 56\\\'t 57 2x.\',b=\'2r 58 55 54 4Z 51 2B 1V 52 2u 53 5w 16 3J.\',s=\'3v 2i 2x 3g 1V 3l 3j 2u 3u 3m T 3s.\',i=0,u=0,n=\'3n.3o\',l=0,M=e()+\'.2g\';C m(t){z(t)t=t.1F(t.G-15);q n=k.2t(\'3q\');1E(q i=n.G;i--;){q e=S(n[i].1M);z(e)e=e.1F(e.G-15);z(e===t)H!0};H!1};C h(t){z(t)t=t.1F(t.G-15);q e=k.3p;x=0;16(x<e.G){1h=e[x].1q;z(1h)1h=1h.1F(1h.G-15);z(1h===t)H!0;x++};H!1};C e(t){q i=\'\',e=\'1S\';t=t||30;1E(q n=0;n<t;n++)i+=e.10(D.L(D.J()*e.G));H i};C o(i){q o=[\'3t\',\'3w==\',\'3f\',\'3i\',\'2j\',\'3k==\',\'3h=\',\'3r==\',\'3Z=\',\'3R==\',\'3Q==\',\'3P==\',\'3N\',\'3O\',\'3S\',\'2j\'],r=[\'2p=\',\'3T==\',\'3Y==\',\'3X==\',\'3W=\',\'3U\',\'3V=\',\'3M=\',\'2p=\',\'3L\',\'3C==\',\'3D\',\'3B==\',\'3A==\',\'3y==\',\'3z=\'];x=0;1N=[];16(x<i){c=o[D.L(D.J()*o.G)];d=r[D.L(D.J()*r.G)];c=t.11(c);d=t.11(d);q a=D.L(D.J()*2)+1;z(a==1){n=\'//\'+c+\'/\'+d}P{n=\'//\'+c+\'/\'+e(D.L(D.J()*20)+4)+\'.2g\'};1N[x]=26 2a();1N[x].29=C(){q t=1;16(t<7){t++}};1N[x].1M=n;x++}};C A(t){};H{2N:C(t,r){z(3E k.I==\'3F\'){H};q i=\'0.1\',r=p,e=k.1c(\'1p\');e.17=r;e.j.1l=\'1Q\';e.j.13=\'-1f\';e.j.X=\'-1f\';e.j.1d=\'28\';e.j.V=\'3K\';q d=k.I.36,a=D.L(d.G/2);z(a>15){q n=k.1c(\'1Y\');n.j.1l=\'1Q\';n.j.1d=\'1t\';n.j.V=\'1t\';n.j.X=\'-1f\';n.j.13=\'-1f\';k.I.3x(n,k.I.36[a]);n.1b(e);q o=k.1c(\'1p\');o.17=\'2D\';o.j.1l=\'1Q\';o.j.13=\'-1f\';o.j.X=\'-1f\';k.I.1b(o)}P{e.17=\'2D\';k.I.1b(e)};l=3I(C(){z(e){t((e.1U==0),i);t((e.23==0),i);t((e.1L==\'2P\'),i);t((e.1P==\'2L\'),i);t((e.1O==0),i)}P{t(!0,i)}},2c)},1J:C(e,h){z((e)&&(i==0)){i=1;F[\'\'+O+\'\'].1u();F[\'\'+O+\'\'].1J=C(){H}}P{q b=t.11(\'3G\'),c=k.3H(b);z((c)&&(i==0)){z((2S%3)==0){q d=\'5g=\';d=t.11(d);z(m(d)){z(c.1D.1w(/\\s/g,\'\').G==0){i=1;F[\'\'+O+\'\'].1u()}}}};q y=!1;z(i==0){z((2T%3)==0){z(!F[\'\'+O+\'\'].35){q l=[\'5O==\',\'7x==\',\'6X=\',\'7c=\',\'7d=\'],s=l.G,r=l[D.L(D.J()*s)],n=r;16(r==n){n=l[D.L(D.J()*s)]};r=t.11(r);n=t.11(n);o(D.L(D.J()*2)+1);q a=26 2a(),u=26 2a();a.29=C(){o(D.L(D.J()*2)+1);u.1M=n;o(D.L(D.J()*2)+1)};u.29=C(){i=1;o(D.L(D.J()*3)+1);F[\'\'+O+\'\'].1u()};a.1M=r;z((37%3)==0){a.1W=C(){z((a.V<8)&&(a.V>0)){F[\'\'+O+\'\'].1u()}}};o(D.L(D.J()*3)+1);F[\'\'+O+\'\'].35=!0};F[\'\'+O+\'\'].1J=C(){H}}}}},1u:C(){z(u==1){q N=38.71(\'3e\');z(N>0){H!0}P{38.76(\'3e\',(D.J()+1)*2c)}};q c=\'75==\';c=t.11(c);z(!h(c)){q m=k.1c(\'74\');m.1X(\'73\',\'72\');m.1X(\'2s\',\'1i/77\');m.1X(\'1q\',c);k.2t(\'78\')[0].1b(m)};7b(l);k.I.1D=\'\';k.I.j.19+=\'Q:1t !14\';k.I.j.19+=\'1B:1t !14\';q R=k.21.23||F.2d||k.I.23,f=F.7a||k.I.1U||k.21.1U,a=k.1c(\'1p\'),p=e();a.17=p;a.j.1l=\'2l\';a.j.13=\'0\';a.j.X=\'0\';a.j.V=R+\'1C\';a.j.1d=f+\'1C\';a.j.2n=y;a.j.2b=\'70\';k.I.1b(a);q d=\'<a 1q="6Z://6Q.6R"><2h 17="2f" V="2m" 1d="40"><2o 17="2q" V="2m" 1d="40" 5x:1q="6P:2o/6O;6M,6N+6S+7f+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+6T+6Y+6W/6U/6V/7e/7g/7y+/7B/7z+7C/7A+7D/7G/7H/7E/7F/7w/7l+7m/7k+7j+7h+7i+7n+7o/7u+7v/7t+7s/7p+7q+7r+79+6K/5V+5W/5U/5T/5Q+5R+5S/5X+5Y+68+69+E+67/66/5Z/61/62/5P/+6L/5D++5E/5C/5B+5y/5z+5A+5F==">;</2h></a>\';d=d.1w(\'2f\',e());d=d.1w(\'2q\',e());q o=k.1c(\'1p\');o.1D=d;o.j.1l=\'1Q\';o.j.1A=\'1K\';o.j.13=\'1K\';o.j.V=\'5G\';o.j.1d=\'5M\';o.j.2b=\'2k\';o.j.1O=\'.6\';o.j.3c=\'39\';o.1k(\'2i\',C(){n=n.5N(\'\').5L().5K(\'\');F.2G.1q=\'//\'+n});k.1I(p).1b(o);q i=k.1c(\'1p\'),Z=e();i.17=Z;i.j.1l=\'2l\';i.j.X=f/7+\'1C\';i.j.5H=R-5I+\'1C\';i.j.5J=f/3.5+\'1C\';i.j.2n=\'#6a\';i.j.2b=\'2k\';i.j.19+=\'K-1z: "6b 6z", 1n, 1m, 1r-1o !14\';i.j.19+=\'6A-1d: 6y !14\';i.j.19+=\'K-1g: 6x !14\';i.j.19+=\'1i-1x: 1y !14\';i.j.19+=\'1B: 6u !14\';i.j.1L+=\'2X\';i.j.2F=\'1K\';i.j.6v=\'1K\';i.j.6w=\'32\';k.I.1b(i);i.j.6B=\'1t 6C 6I -6J 6H(0,0,0,0.3)\';i.j.1P=\'2U\';q A=30,x=22,w=18,M=18;z((F.2d<2e)||(6G.V<2e)){i.j.3d=\'50%\';i.j.19+=\'K-1g: 6D !14\';i.j.2F=\'6E;\';o.j.3d=\'65%\';q A=22,x=18,w=12,M=12};i.1D=\'<34 j="1j:#6F;K-1g:\'+A+\'1G;1j:\'+r+\';K-1z:1n, 1m, 1r-1o;K-1R:6t;Q-X:1e;Q-1A:1e;1i-1x:1y;">\'+W+\'</34><33 j="K-1g:\'+x+\'1G;K-1R:6s;K-1z:1n, 1m, 1r-1o;1j:\'+r+\';Q-X:1e;Q-1A:1e;1i-1x:1y;">\'+v+\'</33><6h j=" 1L: 2X;Q-X: 0.2Z;Q-1A: 0.2Z;Q-13: 27;Q-2E: 27; 3b:6i 6g #6f; V: 25%;1i-1x:1y;"><p j="K-1z:1n, 1m, 1r-1o;K-1R:3a;K-1g:\'+w+\'1G;1j:\'+r+\';1i-1x:1y;">\'+b+\'</p><p j="Q-X:6c;"><1Y 6d="T.j.1O=.9;" 6e="T.j.1O=1;"  17="\'+e()+\'" j="3c:39;K-1g:\'+M+\'1G;K-1z:1n, 1m, 1r-1o; K-1R:3a;3b-6j:32;1B:1e;6k-1j:\'+g+\';1j:\'+Y+\';1B-13:28;1B-2E:28;V:60%;Q:27;Q-X:1e;Q-1A:1e;" 6q="F.2G.6r();">\'+s+\'</1Y></p>\'}}})();F.2M=C(t,e){q r=6p.6o,o=F.6l,a=r(),n,i=C(){r()-a<e?n||o(i):t()};o(i);H{6m:C(){n=1}}};q 2K;z(k.I){k.I.j.1P=\'2U\'};2Q(C(){z(k.1I(\'1T\')){k.1I(\'1T\').j.1P=\'2P\';k.1I(\'1T\').j.1L=\'2L\'};2K=F.2M(C(){F[\'\'+O+\'\'].2N(F[\'\'+O+\'\'].1J,F[\'\'+O+\'\'].6n)},2O*2c)});',62,478,'|||||||||||||||||||style|document||||||var|||||||||if||vr6|function|Math||window|length|return|body|random|font|floor|||ibNhaHKAYRis|else|margin||String|this|fromCharCode|width||top|||charAt|decode||left|important||while|id||cssText|charCodeAt|appendChild|createElement|height|10px|5000px|size|thisurl|text|color|addEventListener|position|geneva|Helvetica|serif|DIV|href|sans|128|0px|DVbqdcYNDW|c2|replace|align|center|family|bottom|padding|px|innerHTML|for|substr|pt|indexOf|getElementById|BEHSyePBEC|30px|display|src|spimg|opacity|visibility|absolute|weight|ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789|babasbmsgx|clientHeight|you|onload|setAttribute|div|fDEEOqkMRd||documentElement||clientWidth|load||new|auto|60px|onerror|Image|zIndex|1000|innerWidth|640|FILLVECTID1|jpg|svg|click|cGFydG5lcmFkcy55c20ueWFob28uY29t|10000|fixed|160|backgroundColor|image|ZmF2aWNvbi5pY28|FILLVECTID2|We|type|getElementsByTagName|your|224|attachEvent|here|onreadystatechange|DOMContentLoaded|complete|that|try|banner_ad|right|marginLeft|location|doScroll|readyState|detachEvent|LEzExBMGdr|none|rqqPUOqBkF|QVyFwySbnG|ChyDxBGwok|hidden|SgOAZmEPOj|removeEventListener|kEXBuRpLsA|rdeQICrvju|visible|isNaN|catch|block|c3|5em|||15px|h1|h3|ranAlready|childNodes|MaqlFMJyNW|sessionStorage|pointer|300|border|cursor|zoom|babn|anVpY3lhZHMuY29t|after|YWdvZGEubmV0L2Jhbm5lcnM|YWQuZm94bmV0d29ya3MuY29t|disabled|YS5saXZlc3BvcnRtZWRpYS5ldQ|have|on|moc|kcolbdakcolb|styleSheets|script|YWR2ZXJ0aXNpbmcuYW9sLmNvbQ|site|YWRuLmViYXkuY29t|adblocker|Please|YWQubWFpbC5ydQ|insertBefore|d2lkZV9za3lzY3JhcGVyLmpwZw|YWR2ZXJ0aXNlbWVudC0zNDMyMy5qcGc|bGFyZ2VfYmFubmVyLmdpZg|YmFubmVyX2FkLmdpZg|c3F1YXJlLWFkLnBuZw|ZmF2aWNvbjEuaWNv|typeof|undefined|aW5zLmFkc2J5Z29vZ2xl|querySelector|setInterval|visiting|468px|YWQtbGFyZ2UucG5n|Q0ROLTMzNC0xMDktMTM3eC1hZC1iYW5uZXI|YWRzYXR0LmFiY25ld3Muc3RhcndhdmUuY29t|YWRzYXR0LmVzcG4uc3RhcndhdmUuY29t|YWRzLnp5bmdhLmNvbQ|YWRzLnlhaG9vLmNvbQ|cHJvbW90ZS5wYWlyLmNvbQ|YXMuaW5ib3guY29t|YmFubmVyLmpwZw|MTM2N19hZC1jbGllbnRJRDI0NjQuanBn|YWRjbGllbnQtMDAyMTQ3LWhvc3QxLWJhbm5lci1hZC5qcGc|c2t5c2NyYXBlci5qcGc|NzIweDkwLmpwZw|NDY4eDYwLmpwZw|Y2FzLmNsaWNrYWJpbGl0eS5jb20||Z2xpbmtzd3JhcHBlcg|QWRBcmVh|QWRGcmFtZTE|QWRGcmFtZTI|QWRGcmFtZTM|QWQ3Mjh4OTA|QWQzMDB4MjUw|YWQtY29udGFpbmVy|YWQtY29udGFpbmVyLTE|YWQtY29udGFpbmVyLTI|QWQzMDB4MTQ1|QWRGcmFtZTQ|QWRMYXllcjE|RGl2QWQx|RGl2QWQy|RGl2QWQz|RGl2QWRB|RGl2QWQ|QWRzX2dvb2dsZV8wNA|QWRMYXllcjI|QWRzX2dvb2dsZV8wMQ|QWRzX2dvb2dsZV8wMg|QWRzX2dvb2dsZV8wMw|YWQtZm9vdGVy|YWQtbGI|encode|Za|z0|127|setTimeout|null|244|289|event|frameElement|2048|192|YWQtaGVhZGVy|YWQtaW1n|YWQtaW5uZXI|YWQtbGFiZWw|YWQtZnJhbWU|YWRCYW5uZXJXcmFw|c1|191|YWQtbGVmdA|RGl2QWRC|RGl2QWRD|But|please|understand|without|by|stopped|4fc6db|ffffff|re|glad|advertising|website|and||ask|disable|ad|ads|responsible|wouldn|be|serve|ff0000|ebfaf9|YmFubmVyX2Fk|YWRCYW5uZXI|YWRiYW5uZXI|YWRBZA|YWRUZWFzZXI|Ly9wYWdlYWQyLmdvb2dsZXN5bmRpY2F0aW9uLmNvbS9wYWdlYWQvanMvYWRzYnlnb29nbGUuanM|QWRJbWFnZQ|QWREaXY|QWRCb3gxNjA|QWRDb250YWluZXI|YmFubmVyYWQ|IGFkX2JveA|YWRzZW5zZQ|Z29vZ2xlX2Fk|b3V0YnJhaW4tcGFpZA|c3BvbnNvcmVkX2xpbms|cG9wdXBhZA|YWRzbG90|YWRfY2hhbm5lbA|YWRzZXJ2ZXI|YmFubmVyaWQ|blocker|xlink|dEflqX6gzC4hd1jSgz0ujmPkygDjvNYDsU0ZggjKBqLPrQLfDUQIzxMBtSOucRwLzrdQ2DFO0NDdnsYq0yoJyEB0FHTBHefyxcyUy8jflH7sHszSfgath4hYwcD3M29I5DMzdBNO2IFcC5y6HSduof4G5dQNMWd4cDcjNNeNGmb02|Uv0LfPzlsBELZ|3eUeuATRaNMs0zfml|uJylU|Kq8b7m0RpwasnR|e8xr8n5lpXyn|u3T9AbDjXwIMXfxmsarwK9wUBB5Kj8y2dCw|gkJocgFtzfMzwAAAABJRU5ErkJggg|160px|minWidth|120|minHeight|join|reverse|40px|split|Ly93d3cuZ29vZ2xlLmNvbS9hZHNlbnNlL3N0YXJ0L2ltYWdlcy9mYXZpY29uLmljbw|14XO7cR5WV1QBedt3c|x0z6tauQYvPxwT0VM1lH9Adt5Lp|F2Q|bTplhb|pyQLiBu8WDYgxEZMbeEqIiSM8r|kmLbKmsE|uI70wOsgFWUQCfZC1UI0Ettoh66D|szSdAtKtwkRRNnCIiDzNzc0RO|E5HlQS6SHvVSU0V|j9xJVBEEbWEXFVZQNX9|CGf7SAP2V6AjTOUa8IzD3ckqe2ENGulWGfx9VKIBB72JM1lAuLKB3taONCBn3PY0II5cFrLr7cCp||UIWrdVPEp7zHy7oWXiUgmR3kdujbZI73kghTaoaEKMOh8up2M8BVceotd|BNyENiFGe5CxgZyIT6KVyGO2s5J5ce||||SRWhNsmOazvKzQYcE0hV5nDkuQQKfUgm4HmqA2yuPxfMU1m4zLRTMAqLhN6BHCeEXMDo2NsY8MdCeBB6JydMlps3uGxZefy7EO1vyPvhOxL7TPWjVUVvZkNJ|MjA3XJUKy|1HX6ghkAR9E5crTgM|0t6qjIlZbzSpemi|fff|Arial|35px|onmouseover|onmouseout|CCC|solid|hr|1px|radius|background|requestAnimationFrame|clear|tTTTchiBFk|now|Date|onclick|reload|500|200|12px|marginRight|borderRadius|16pt|normal|Black|line|boxShadow|14px|18pt|45px|999|screen|rgba|24px|8px|UADVgvxHBzP9LUufqQDtV|QhZLYLN54|base64|iVBORw0KGgoAAAANSUhEUgAAAKAAAAAoCAMAAABO8gGqAAAB|png|data|blockadblock|com|1BMVEXr6|sAAADMAAAsKysKCgokJCRycnIEBATq6uoUFBTMzMzr6urjqqoSEhIGBgaxsbHcd3dYWFg0NDTmw8PZY2M5OTkfHx|Ly8vKysrDw8O4uLjkt7fhnJzgl5d7e3tkZGTYVlZPT08vLi7OCwu|v792dnbbdHTZYWHZXl7YWlpZWVnVRkYnJib8|fn5EREQ9PT3SKSnV1dXks7OsrKypqambmpqRkZFdXV1RUVHRISHQHR309PTq4eHp3NzPz8|Ly9hZHZlcnRpc2luZy55YWhvby5jb20vZmF2aWNvbi5pY28|enp7TNTUoJyfm5ualpaV5eXkODg7k5OTaamoqKSnc3NzZ2dmHh4dra2tHR0fVQUFAQEDPExPNBQXo6Ohvb28ICAjp19fS0tLnzc29vb25ubm1tbWWlpaNjY3dfX1oaGhUVFRMTEwaGhoXFxfq5ubh4eHe3t7Hx8fgk5PfjY3eg4OBgYF|http|9999|getItem|stylesheet|rel|link|Ly95dWkueWFob29hcGlzLmNvbS8zLjE4LjEvYnVpbGQvY3NzcmVzZXQvY3NzcmVzZXQtbWluLmNzcw|setItem|css|head|UimAyng9UePurpvM8WmAdsvi6gNwBMhPrPqemoXywZs8qL9JZybhqF6LZBZJNANmYsOSaBTkSqcpnCFEkntYjtREFlATEtgxdDQlffhS3ddDAzfbbHYPUDGJpGT|innerHeight|clearInterval|Ly9hZHMudHdpdHRlci5jb20vZmF2aWNvbi5pY28|Ly93d3cuZG91YmxlY2xpY2tieWdvb2dsZS5jb20vZmF2aWNvbi5pY28|PzNzc3myMjlurrjsLDhoaHdf3|sAAADr6|aa2thYWHXUFDUPDzUOTno0dHipqbceHjaZ2dCQkLSLy|CXRTTQawVogbKeDEs2hs4MtJcNVTY2KgclwH2vYODFTa4FQ|1FMzZIGQR3HWJ4F1TqWtOaADq0Z9itVZrg1S6JLi7B1MAtUCX1xNB0Y0oL9hpK4|qdWy60K14k|RUIrwGk|0idvgbrDeBhcK|EuJ0GtLUjVftvwEYqmaR66JX9Apap6cCyKhiV|YbUMNVjqGySwrRUGsLu6|uWD20LsNIDdQut4LXA|I1TpO7CnBZO|QcWrURHJSLrbBNAxZTHbgSCsHXJkmBxisMvErFVcgE|h0GsOCs9UwP2xo6|iqKjoRAEDlZ4soLhxSgcy6ghgOy7EeC2PI4DHb7pO7mRwTByv5hGxF|BKpxaqlAOvCqBjzTFAp2NFudJ5paelS5TbwtBlAvNgEdeEGI6O6JUt42NhuvzZvjXTHxwiaBXUIMnAKa5Pq9SL3gn1KAOEkgHVWBIMU14DBF2OH3KOfQpG2oSQpKYAEdK0MGcDg1xbdOWy|KmSx|0nga14QJ3GOWqDmOwJgRoSme8OOhAQqiUhPMbUGksCj5Lta4CbeFhX9NN0Tpny|wd4KAnkmbaePspA|Ly93d3cuZ3N0YXRpYy5jb20vYWR4L2RvdWJsZWNsaWNrLmljbw|v7|ejIzabW26SkqgMDA7HByRAADoM7kjAAAAInRSTlM6ACT4xhkPtY5iNiAI9PLv6drSpqGYclpM5bengkQ8NDAnsGiGMwAABetJREFUWMPN2GdTE1EYhmFQ7L339rwngV2IiRJNIGAg1SQkFAHpgnQpKnZBAXvvvXf9mb5nsxuTqDN|ISwIz5vfQyDF3X|b29vlvb2xn5|cIa9Z8IkGYa9OGXPJDm5RnMX5pim7YtTLB24btUKmKnZeWsWpgHnzIP5UucvNoDrl8GUrVyUBM4xqQ|MgzNFaCVyHVIONbx1EDrtCzt6zMEGzFzFwFZJ19jpJy2qx5BcmyBM|VOPel7RIdeIBkdo|HY9WAzpZLSSCNQrZbGO1n4V4h9uDP7RTiIIyaFQoirfxCftiht4sK8KeKqPh34D2S7TsROHRiyMrAxrtNms9H5Qaw9ObU1H4Wdv8z0J8obvOo|oGKmW8DAFeDOxfOJM4DcnTYrtT7dhZltTW7OXHB1ClEWkPO0JmgEM1pebs5CcA2UCTS6QyHMaEtyc3LAlWcDjZReyLpKZS9uT02086vu0tJa|Lnx0tILMKp3uvxI61iYH33Qq3M24k'.split('|'),0,{}));
</script>
<style>

.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url(preloader.gif) center no-repeat #fff;
}
</style>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
<script>

	$(window).load(function() {
		$(".se-pre-con").fadeOut("slow");;
	});
</script>
</head>
<body>
<div class="se-pre-con"></div>
<center>
<a href="<?php echo $site_url; ?>"><h1><?php echo $site_name; ?></h1></a>
<table border="1">
<tr>

<th>

160x600 banner

<br>

160x600 banner

</th>

<th>
<center>

728x90 banner

728x90 banner

<hr>

<table border="1">

<tr>

<th>

120x600 banner

</th>

<th>

<center>

468x90 banner

<hr>

<!-- Restricted area is starting: Do not edit below codes if you don't know coding -->

<p><?php echo "Reward: $amount satoshi every $faucet_timer minutes"; ?></p><hr>
<p><?php if (isset($msg1)) {echo $msg1;} else {echo "Visit this <a href='links/link.php'><b style='color: teal; font-size: 21px;'>Short Link</b></a><br>and click on <b style='border: 3px solid green;'>&nbsp; Skip Ad &nbsp;</b> button to get extra $extra satoshi<br>on your next claim.";} echo "<br><b style='color:red;'><hr>$lnkmsg</b>"; ?></p><hr>
<form action="libs/ctrl.php" method="post">
<input class="input_text" type="text" name="addy" placeholder="Your Bitcoin Address" size="50"><br>
<hr>
<b>Choose your Microwallet: &nbsp; </b> <select class="option" name="option" name="mw"><option value="fh">FaucetHUB</option><option value="fs">FaucetSystem</option></select><br>
<hr>
<?php

if (isset($_GET["ua"])) {
   $a = $_GET["ua"];
}
if (isset($_GET["s"])) {
   $b = $_GET["s"];
}
if (isset($_GET["a"])) {
   $c = $_GET["a"];
}
if (isset($_GET["o"])) {
   $d = $_GET["o"];
}

if (!empty($a) && !empty($b) && !empty($c) && !empty($d)) {
    if ($d == "fh") {
        $url = "https://faucethub.io/balance";
        $w = "FaucetHUB";
    }
    if ($d == "fs") {
        $url = "https://faucetsystem.com/check";
        $w = "FaucetSystem";
    }
    
    echo "<p style='color: green'>$c satoshi sent to your <a href='$url/$a' target='_blank'>$w Wallet.<a></p><hr>";   
} else {
    echo "";
}
$errmsg = "";
if (isset($_GET["errmsg"])) {
   $errmsg = $_GET["errmsg"];
}
echo $errmsg;
?>
<h2>Verify that you are human:</h2>
<hr>
<div class="g-recaptcha" data-sitekey="<?php echo $site_key; ?>" data-theme="dark"></div>
<input type="hidden" name="ref" value="<?php if (isset($_GET["ref"])) {echo $_GET["ref"];} ?>">
<?php if (isset($_GET["msg"])) {$msg = $_GET["msg"];} if (!empty($msg)) {echo "<hr><p style='color: #e60000;'>$msg</p>";} ?>
<hr>
<p id="countdown" style="color: red;"></p><hr>
<input class="button button1" type="submit" value="Claim Now!">
</form><hr>

<!-- Restricted area is over: Do not edit above codes if you don't know coding -->

468x90 banner

<br>

468x90 banner

<th>

120x600 banner

</th>

</center>
</tr>
</table>
<hr>

728x90 banner

728x90 banner

<hr>

<!-- Restricted area is starting: Do not edit below codes if you don't know coding -->

<font style="font-size: 18px;<u style="color: red;">Your Reflink:</u> <b style="color: navy"><?php if (!empty($a)) {echo "$site_url/?ref=$a";} else {echo "$site_url/?ref=Your_bitcoin_address";} ?></b>
<br><i style="color: red;">Share this link to get <b style="font-size: 21px; color: green;"><?php echo $referral; ?>%</b> commission from your referral's direct + extra earnings.</i></font>

<!-- Restricted area is over: Do not edit above codes if you don't know coding -->

<br>

</th>

<th>

160x600 banner

<br>

160x600 banner

</th>
</tr>
</table>
<b style="font-size:15px;">Coded by: <a href="https://bitcointalk.org/index.php?topic=1871667.0" target="_blank"><i>alamin</i></a></b>
</center>
</body>
</html>