<html><meta charset='UTF-8'/><meta content='width=device-width, initial-scale=1, user-scalable=1, minimum-scale=1, maximum-scale=5' name='viewport'/><meta content='IE=edge' http-equiv='X-UA-Compatible'/>
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&display=swap" rel="stylesheet"><script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script><script src="https://kit.fontawesome.com/4f3ce16e3e.js" crossorigin="anonymous"></script><head>
<!-- Edit Judul Script di Sini -->
  <title>Script HTML</title>
<!-- 
  Made with love by Rayys!

     Blog: https://PalingIT.com
     Instagram: @rayyarrr
     TikTok: @rayy4r
     Email: rayyar0703@gmail.com

  Thanks to all <3
-->
</head>
<style>
:root {
--warna-bg: rgba(0, 0, 0, .7); 
--warna-teks: white;
--bingkai: 14px;
--warna-bingkai: rgba(255, 255, 255, .8);
--gaya-font: 'Josefin Sans', sans-serif;
}
body{background-color:#101010;font-family:var(--gaya-font);padding: 25px;-webkit-user-select: none; -ms-user-select: none; user-select: none;} a{text-decoration:none;}
body::before{content:"\00A9  Script HTML Bucin";color:white;opacity:.3;font-size:2vw;position:fixed;bottom:15px;left:15px;}
#bodyblur{opacity:1;animation: jj 7s infinite;position:fixed;top:0;left:0;right:0;bottom:0;background:rgba(0,0,0,.3);z-index:-1;transition:all 1s ease;} #wallpaper{transition:all 3s ease;}
#beneranblur{position:fixed;top:0;left:0;right:0;bottom:0;background:rgba(0,0,0,.3);-webkit-backdrop-filter:blur(2px); backdrop-filter:blur(2px);transition:all 3s ease;}
@keyframes jj{0%  {transform: scale(1.1);} 50% {transform: scale(1.2);} 100% {transform: scale(1.1);}}

@keyframes leaves {0% {transform: scale(1.0);} 100% {transform: scale(.8);}}
#lope, .lopdeg{animation: leaves 1s ease-in-out infinite alternate;-webkit-animation: leaves 1s ease-in-out infinite alternate;}
.lovein:hover{transform: scale(1.3);}

@keyframes kont{0%  {left:-1px; top:-3px;} 50% {left:1px; top:3px;} 100% {left:-1px; top:-3px;}}
blockquote{opacity:0;visibility:hidden;transition:all 1s ease;position:relative;margin-top:120px;margin-left:0;margin-right:0;}
blockquote{width:400px;background:var(--warna-bg);color:var(--warna-teks);font-size:20px;font-weight:700;text-shadow: 0px 2px 2px rgba(0, 0, 0, .8);text-align:center;line-height:1.3em;padding:16px 35px 16px 35px;border: 1px solid var(--warna-teks);border-radius:var(--bingkai);}
blockquote p:first-child{font-size:18px;font-weight:700;text-align:center;} #katabawah{font-size:15px;}
p{margin:1.5em 0;transition:all .3s ease;}
#bq img{display:none;width:160px;height:160px;margin:20px 0 0 0;}
#fotolove{opacity:0;visibility:hidden;border-radius:50%;transition:all .3s ease;} #fotolove:hover{transform: scale(.8);}
#akhiran, #idkirim{display:none;color:#FFA300;font-size:16px;text-align:center;background:rgba(0,0,0,.55);text-shadow: 0px;padding:10px;border-radius:var(--bingkai);line-height:10px;transition:all .2s ease;} #akhiran:hover, #idkirim:hover{transform: scale(.9);opacity:.5;}

#pergeseran{opacity:0;visibility:hidden;transition:all 2s ease;display:flex;flex-wrap:nowrap;align-items:flex-start;justify-content:flex-start;position:relative;max-width:500px;padding:0 20px; overflow-y:hidden;overflow-x:scroll;scroll-behavior:smooth;scroll-snap-type:x mandatory; -ms-overflow-style:none;-webkit-overflow-scrolling:touch}
#pergeseran p{background:var(--warna-bg);color:var(--warna-teks);text-shadow: 0px 2px 2px rgba(0, 0, 0, .8);border-left:2px solid var(--warna-bingkai);border-right:2px solid var(--warna-bingkai); border-radius:0;padding:8px;display:flex;flex-wrap:nowrap;text-align:center;font-size:17px;font-weight:700;line-height:1.4em;align-items:center;justify-content:center;flex-shrink:0; width:90%;height:150px;margin:0 15px 0 0; scroll-snap-align:center} #pergeseran > *:last-child{margin-right:0} #pergeseran:after{content:'';display:block;flex-shrink:0; align-self:stretch;padding-left:20px}
#pergeseran p b{display:block;} #pergeseran p b img{width:80px;height:80px;margin-bottom:20px;}
#tm{width:100px;color:#FFB400;transition:all .5s ease;} #tm:hover{transform: scale(.7);}
#idgeser, #idkalimat, #palingakhir{position:relative;opacity:.9;font-size:16px;line-height:1.4em;color:var(--warna-teks);text-align:center;text-shadow: 0px 2px 2px rgba(0, 0, 0, .8);transition:all 1s ease;} #idkalimat, #palingakhir{opacity:0;transform: scale(.1);}
#imglewat{opacity:0;max-width:520px;height:0;position:relative;z-index:-1;transition:all 1s ease;}
#idkalimat{font-weight:700} #palingakhir{width:300px;margin:0 50px;}

.lovein{font-size:50px;display:flex;align-items:center;justify-content:center;transition:all .3s ease;}
.lovein svg{width:80px;height:80px;fill:#fefefe}

.content2{display:block;text-align:center;width:100%;height:180px;margin-top:50px;}
.content2 > *{display:flex;align-items:center;justify-content:center;margin-top:15px;font-size:17px;color:white}
.image img{border-radius:10%;transform:scale(.1);transition:all .8s ease;}
#k2 .image > *{margin-bottom:40px;} #k2{font-weight:700;font-size:17px;color:white;text-shadow: 0px 2px 2px rgba(0, 0, 0, .8);} #final1{transition:all 3s ease;}

.content2{display:none;}
#Content, #k2{animation:none 3s infinite;position:relative;opacity:0;width:100%;height:180px;transition:all 1.2s ease;}
#Content > *, #k2 > *{display:flex;align-items:center;justify-content:center;margin-top:20px;}
#k2, #final1{transform:scale(.4);}

#Tombol{position:relative;opacity:0;margin:0;margin-top:-100px;display:flex;align-items:left;list-style:none;transform: scale(.1);transition:all 1s ease;}
#Tombol a{cursor:pointer;display:inline-flex;align-items:center; margin:0;margin:12px 0 12px 0;transition:all .2s ease;padding:10px;outline:0;border-left:2px solid var(--warna-bingkai);border-right:2px solid var(--warna-bingkai); border-radius:0;line-height:15px;background:var(--warna-bg);color:var(--warna-teks);font-size:14px;font-weight:400;white-space:nowrap;overflow:hidden;z-index:1} 
#Tombol a:hover{border-left:4px solid var(--warna-bingkai);border-right:4px solid var(--warna-bingkai);transform: scale(.90);opacity:.98;}

.swal2-title{margin-right:20px;margin-left:20px;font-size:22px;text-align:center;padding:15px 30px 0 30px;}
.swal2-modal{background:rgba(255, 255, 255, .99);border: .7px solid #000;border-radius:var(--bingkai);top:-60px;}

.fa-heart {opacity:.4;color:white;font-size: 20px;position: absolute;animation:  heartMove linear 1;top: -10vh;z-index: 0;}
@keyframes heartMove {0%{transform: translateY(-10vh) ;} 100%{transform: translateY(100vh) ;}}
.sticky-ad {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex; -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            overflow: visible;
            position: fixed;
            text-align: center;
            bottom: -130px;
            left: 0;
            width: 100%;
            z-index: 999;
            max-height: 104px;
            background-image: none;
            background-color: #fff;
            box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.2);
            margin-bottom: 0;
            padding-top: 4px;
            transition: all 0.4s ease-in-out;
        }
        .sticky-ad-close-button {
            position: absolute;
            width: 28px;
            height: 28px;
            top: -28px;
            right: 0;
            background-image: url("data:image/svg+xml;charset=utf8,%3csvg width='13' height='13' viewBox='341 8 13 13' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3e%3cg%3e%3cpath style='fill:%234F4F4F' d='M354 9.31L352.69 8l-5.19 5.19L342.31 8 341 9.31l5.19 5.19-5.19 5.19 1.31 1.31 5.19-5.19 5.19 5.19 1.31-1.31-5.19-5.19z'%3e%3c/path%3e%3c/g%3e%3c/svg%3e");
            background-size: 13px 13px;
            background-position: 9px;
            background-color: #fff;
            background-repeat: no-repeat;
            box-shadow: 0 -1px 1px 0 rgba(0, 0, 0, 0.2);
            border: none;
            border-radius: 12px 0 0 0;
            cursor: pointer;
        }
        .sticky-ad-close-button:before {
            position: absolute;
            content: "";
            top: -20px;
            right: 0;
            left: -20px;
            bottom: 0;
        }
        
        :active,
        :focus {
            outline: 0;
        } 

.adB{min-height:45px;display:flex;align-items:center;justify-content:center;font-size:15px;font-weight:700;color:#565656;} .adB::before{content:attr(data-text)} a{text-decoration:none;}
</style>
<body><div id="bodyblur"><img id="wallpaper" src="" width="100%" height="100%"/><div id="beneranblur"></div></div>

<div id='Content'>

<div><marquee id="imglewat" direction="right"><img id="fotonimasi" src="" width="100px" height="100px"/></marquee></div>

<div><div id='pergeseran'>

<!-- Pesan -->
<p><b><img src="https://i.ibb.co/s9cTyc0/bunga.gif"/><br>
	<span>Hai kamu ❤️</span>
</b></p>

<p><b><img src="https://feeldreams.github.io/cilukba.gif"/><br>
	<span>Ciyee yang hari ini ultah 🤭</span>
</b></p>

<p><b><img src="https://feeldreams.github.io/g5.gif"/><br>
	<span>Selamat Ulang Tahun! 🥳</span>
</b></p>

<p><b><img src="https://feeldreams.github.io/mndkat.gif"/><br>
	<span>Semoga Panjang Umur 🥰</span>
</b></p>

<p><b><img src="https://feeldreams.github.io/gumush.gif"/><br>
	<span>Aku Cuma Pengen Kamu Sehat Selalu 🤩</span>
</b></p>

<!-- Tombol Akhir --><p><b><img id="fotolove" src="https://maafin.feeldream.repl.co/love.gif" onClick="akhiran();"/><br>
	<span>Oh iya, Klik LOVE-nya</span>
</b></p>

</div></div>

<p id="idgeser">Geser ya &#128073;</p><p id="idkalimat"></p><p id="idmarq"><marquee id="palingakhir"></marquee></p>

   <!-- Tombol -->
     <div id="Tombol">
       <a onClick="multifungsi()">
         <b id="tmbl">Geser &#128073;</b>
       </a>
     </div>
     
</div>
<div class='sticky-ad' id='sticky-ad'>
 <div class='adB'><a rel="dofollow" href='https://youtu.be/RORUzthaCtk'>Lihat Tutorialnya di Sini!</a></div>
<button aria-label='Close this ad' class='sticky-ad-close-button' onclick='hilangkan();'/>
</div>
<script>
  async function maubucin(){
await swals.fire({
  title: '<strong>Mau bikin Script HTML Bucin seperti ini?</strong>',
  html:
    'Lihat tutorialnya di: ' +
    '<a href="https://youtu.be/RORUzthaCtk">Klik di Sini!</a> ' + '<br><br>' + 'Bisa diedit kata-kata sesukamu!',
  focusConfirm: false,
});
  }
  function tunjukkan(){document.getElementById("sticky-ad").style = "bottom: 0px";}
function hilangkan() {document.getElementById("sticky-ad").style = "bottom: -130px";}
  ftom=0; jikapr=1; function nongeser() {tombol();idgeser.style = "transform: scale(.1);opacity:0;";fotolove.style="opacity:1;visibility:visible";}
  function showDiv() {setTimeout(kpemb,100);setTimeout(nongeser,1000);document.getElementById('Content').style = "opacity:1;margin-top:10vh;animation:none 3s infinite;";document.getElementById("pergeseran").style = "opacity:1;visibility:visible;";}
  function showAkhir() {setInterval(createHeart,200);document.getElementById('k2').style = "opacity:1;transform:scale(1);margin:0;";document.getElementById('Content').style.display = "none";}
  function mulaiakhir() {nonDiv();setTimeout(showAkhir,500);setTimeout(finalis,600);}
  function tombol(){if(pergeseran.style.display == 'none'){ftom=50;tmbl.innerHTML="Kirim Pesan";Tombol.style="margin-top:30px;opacity:1;transform: scale(1)";tmbl.style="font-size:12px"}else{ftom=1;jikapr+=1;Tombol.style="opacity:1;transform: scale(1);";}} 
  function multifungsi(){if(ftom==1){document.getElementById('pergeseran').scrollLeft += 300;hsementara();} if(ftom==50){jawab();}}
  function hsementara(){Tombol.style="opacity:0;transform: scale(.1);";ftom=0;if(jikapr<=5){setTimeout(tombol,600);}}
  
  var aa=0,pemb;pemb = "";var i=0,halo;halo = "";var u=0,text2;text2 = "";var o=0,text3;text3 = "";var a=0,final1;final1 = "";var ab=0,final2;final2 = "";
  function kpemb() {document.getElementById('bodyblur').style = "opacity:.7;";}
  function finalis() {document.getElementById("bq").style = "opacity:1;visibility:visible;margin-top:0";setTimeout(showTom,4000);}
  const swals = Swal.mixin({allowOutsideClick: false, cancelButtonColor: '#FF0040',}); const swalsy = Swal.mixin({confirmButtonText: 'Iya', allowOutsideClick: false,}); const swalst = Swal.mixin({allowOutsideClick: false, showConfirmButton: false, timer: 1000, timerProgressBar: true, didOpen: () => {Swal.showLoading();const b = Swal.getHtmlContainer().querySelector('b');timerInterval = setInterval(() => {Swal.getTimerLeft()}, 100)},willClose: () => {clearInterval(timerInterval)}}); const style = document.createElement('style');
  function play() {var audio = new Audio('' + linkmp3);audio.play();} const body = document.querySelector("body");function createHeart() {const heart = document.createElement("div"); heart.className = "fas fa-heart"; heart.style.left = (Math.random() * 90)+"vw"; heart.style.animationDuration = (Math.random()*3)+2+"s"; body.appendChild(heart);} setInterval(function name(params) {var heartArr = document.querySelectorAll(".fa-heart"); if (heartArr.length > 100) {heartArr[0].remove()}},100);
  function StartMarqueeL(){imglewat.style="opacity:1;height:100px;";var marquee = document.getElementById ("imglewat");marquee.start();}function StopMarqueeL(){var marquee = document.getElementById ("imglewat");marquee.stop();}StopMarqueeL(); 
  function akhiran(){setTimeout(tunjukkan,3000);Tombol.style="transition:all .3s ease;opacity:0;transform: scale(.1);";setTimeout(startmq,4000);bodyblur.style="opacity:.4;animation:none";beneranblur.style="-webkit-backdrop-filter:blur(5px); backdrop-filter:blur(5px)";wallpaper.style="transform: scale(1.6)";pergeseran.style="display:none";StartMarqueeL();idgeser.innerHTML = "";idkalimat.innerHTML = akhirkata2;idgeser.style = "opacity:1;transform: scale(1);font-size:16px;font-weight:400;margin:0 30px;margin-top:15px;";setTimeout(aksiakhir,800);}
  function startmq(){var marquee = document.getElementById ("palingakhir");marquee.start();}function stopmq(){var marquee = document.getElementById ("palingakhir");marquee.stop();}stopmq();
  async function menuju(){await swals.fire('OK!', 'Kirim pesan ke WhatsApp aku, ya!', 'success');window.location = "https://api.whatsapp.com/send?phone=&text=" + pesanwhatsapp;}
  var aa=0,akhirkata;akhirkata = "";function aksiakhir() {if(aa<akhirkata.length){idgeser.innerHTML += akhirkata.charAt(aa);aa++;setTimeout(aksiakhir,65);}
    if(aa==akhirkata.length){idkalimat.style = "opacity:1;transform: scale(1);font-size:16px;margin-top:20px";setTimeout(showpalingakhir,1100);}
   } function showpalingakhir(){palingakhir.style = "opacity:1;transform: scale(1);font-size:16px;margin-top:20px";setTimeout(tombol,4000);setTimeout(maubucin,8888);}
</script>

<script type="text/javascript">
       async function jawab(){
           var { value: jawaban } = await swals.fire({
               title: 'Isi Pesan Kamu', input: 'text', allowOutsideClick: false, showCancelButton: false,
           });
           if(jawaban && jawaban.length < 16){
           	window.jawaban = jawaban;pesanwhatsapp = jawaban;menuju();
           } else {
               await swals.fire('Ups!', 'Kolom tidak boleh kosong atau lebih dari 15 karakter, ya!');
           }
       }
        
       async function pertama(){
       	 wallpaper.src = "https://feeldreams.github.io/wpjalanan.jpg";
            fotonimasi.src = "https://feeldreams.github.io/nimasi.gif";
       	 audio = new Audio('https://feeldreams.github.io/anotherme.mp3');
       
            akhirkata = "Semoga di hari spesialmu ini, kamu menjadi pribadi yang lebih baik yaaa 🥳      ";
            akhirkata2 = "Happy Birthday!!!";
            palingakhir.innerHTML = "Jangan lupa traktirannya! 🤣";
            
            await swalst.fire('Tunggu');lanjut();
        }
        pertama();
        
        async function lanjut() {
        	await swals.fire('Selamat datang!', 'Sekarang lihat ini ya :)');showDiv();audio.play();
        }
</script>
</body>
</html>
