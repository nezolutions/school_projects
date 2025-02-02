<?php require_once 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saintek Presma PPLG 2024</title>
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');

#loading {
    display: block;
}
#welcome {
    display: none;
}
#form, #form2, #form3, #form4 {
    display: none;
}

#kesan-pesan1, #kesan-pesan2, #kesan-pesan3 {
    display: none;
}

select[name='jurusan'], select[name='nomor'] {
    display: inline-block;
}

*, html {
    padding: 0;
    margin: 0;
    zoom: 1.05;
    overflow: hidden;
    box-sizing: border-box;
    scroll-behavior: smooth;
}

::selection {
    background-color: rgb(200, 0, 0);
    color: yellow;
}

body {
    background: linear-gradient(to top, rgb(0, 40, 60), rgb(0, 80, 130)) no-repeat;
    color: white;
    font-family: 'poppins', sans-serif;
    user-select: none;
    overflow: hidden;
}

h1, p {
    user-select: text;
}

h2 {
    user-select: text;
    margin-bottom: 10px;
}

div.loading {
    background: rgba(0, 0, 0, 0.5);
    width: 100%;
    height: 70em;
    overflow: hidden;
    text-align: center;
    user-select: none;
}

div.loading-container {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

span.dots {
    display: inline-block;
    vertical-align: middle;
    width: .6em;
    height: .6em;
    margin: .19em;
    background: #c9c619;
    border-radius: .6em;
    filter: drop-shadow(0 0 5px #222);
    animation: loading 0.5s infinite alternate;
}

span.dots:nth-of-type(2) {
    background: #ffffff;
    animation-delay: 0.2s;
}

span.dots:nth-of-type(3) {
    background: #6598f7;
    animation-delay: 0.4s;
}

@keyframes loading {
    0% {
      opacity: 0;
      transform: scale(0);
    }

    100% {
      opacity: 1;
      transform: scale(1.2);
    }
}

div.loading img.logo {
    max-width: 100px;
    width: 80%;
    height: auto;
    filter: drop-shadow(0 0 5px #222);
}

div.welcome {
    width: 100vw;
    height: 70em;
    overflow: hidden;
    text-align: center;
    animation: welcome 1s linear alternate;
    transition: 1s;
}

div.welcome-container {
    max-width: 700px;
    width: 90%;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

div.welcome-container h1 {
    font-size: normal;
    transition: 0.5s;
    line-height: 1.2;
}

div.welcome-container p {
    margin-bottom: 5px;
    font-size: small;
    transition: 0.5s;
}

div.welcome-container h1:hover, div.welcome-container p:hover {
    transform: scale(1.05);
}

@keyframes welcome {
    0% {
        opacity: 0;
    }

    100% {
        opacity: 1;
    }
}

div.welcome img.logo {
    margin-bottom: 5px;
    max-width: 50px;
    width: 90%;
    height: auto;
    transition: 0.5s;
}

img.logo-saintek {
    padding-bottom: 2px;
}

img.logo-smkpp {
    padding: 4px 4px 6px 4px;
    margin-bottom: 3px;
}

img.logo-rpl:hover, img.logo-saintek:hover, img.logo-smkpp:hover {
    filter: brightness(0.8);
}

button.btn, input.btn-submit1, input.btn-submit2, input.btn-submit3  {
    outline: none;
    border: none;
    border-radius: 20px;
    background-color: #c9c619;
    color: white;
    font-weight: bold;
    width: 100px;
    height: 40px;
    margin-top: 10px;
    transition: 0.5s;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    text-transform: uppercase;
    cursor: pointer;
    font-family: 'poppins', sans-serif;
}

i.fas {
    font-size: 24px;
    vertical-align: middle;
}

button.btn:hover, input.btn-submit1:hover, input.btn-submit2:hover, input.btn-submit3:hover {
    background-color: #aca91c;
    transform: scale(1.05);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.4);
}

button.btn:active, input.btn-submit1:active, input.btn-submit2:active, input.btn-submit3:active {
    transform: scale(0.95);
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}

button.btn:disabled, input.btn-submit1:disabled, input.btn-submit2:disabled, input.btn-submit3:disabled {
    filter: brightness(0.5);
}

div.form, div.form2, div.form3, div.form4 {
    width: 100vw;
    height: 70em;
    overflow: hidden;
    text-align: center;
    animation: form 1s linear alternate;
}

div.kesan-pesan1, div.kesan-pesan2, div.kesan-pesan3 {
    width: 100vw;
    height: 70em;
    overflow: hidden;
    text-align: center;
    animation: form 1s linear alternate;
}

div.form-container {
    max-width: 600px;
    width: 90%;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

@keyframes form {
    0% {
        opacity: 0;
    }

    100% {
        opacity: 1;
    }
}

p.radio {
    display: inline-block;
    justify-content: center;
    max-width: 150px;
    width: 100%;
    height: 150px;
    font-weight: 600;
    letter-spacing: 1px;
    border-radius: 5px;
    margin: 5px;
    padding: 10px;
    cursor: pointer;
    background-color: #477cdf;
    color: white;
    transition: 0.5s;
    user-select: none;
}

p.radio:hover {
    background-color: #3862b4;
}

p.radio:active {
    transform: scale(0.9);
}

p.radio span {
    position: relative;
    top: 35%;
}

input[type='radio'] {
    display: none;
}

input[type='radio']:checked + p.radio {
    background-color: white;
    color: #477cdf;
}

div.form2 .form-container h2, div.form3 .form-container h2, div.form4 .form-container h2,
div.kesan-pesan1 .form-container h2, div.kesan-pesan2 .form-container h2, div.kesan-pesan3 .form-container h2 {
    line-height: 1.3;
}

span.sub {
    font-size: small;
}

input[type='text'] {
    max-width: 420px;
    font-family: 'poppins', sans-serif;
    width: 90%;
    height: 40px;
    border: none;
    border-radius: 50px;
    margin-top: 10px;
    padding: 10px;
}

input[name='username-siswa'], input[name='username-guru'], input[name='username-pengunjung'], input[name='jabatan'], input[name='asal-instansi'] {
    text-transform: uppercase;
}

input[name='username-siswa']::placeholder, input[name='username-guru']::placeholder, input[name='username-pengunjung']::placeholder, input[name='jabatan']::placeholder, input[name='asal-instansi']::placeholder {
    text-transform: none;
}

input[type='text']:focus {
    outline: 1px solid #6598f7;
    box-shadow: 0 0 8px #6598f7;
}

div.select-option {
    background-color: white;
    max-width: 420px;
    width: 90%;
    margin: auto;
    margin-top: 10px;
    height: 40px;
    border-radius: 20px;
    user-select: none;
}

div.select-option:hover {
    outline: 1px solid #6598f7;
    box-shadow: 0 0 8px #6598f7;
}

select.chooser {
    background: none;
    font-family: 'poppins', sans-serif;
    width: 94px;
    padding: 9px;
    border: none;
    cursor: pointer;
    user-select: none;
}

select.chooser:focus {
    outline: none;
}

button.btn-back1, button.btn-back2, button.btn-back3, button.btn-back4, button.btn-back5, button.btn-back6, button.btn-home {
    background-color: #fb652e;
}

button.btn-back1:hover, button.btn-back2:hover, button.btn-back3:hover, button.btn-back4:hover, button.btn-back5:hover, button.btn-back6:hover, button.btn-home:hover {
    background-color: #c94a1c;
}

div.holder-button {
    user-select: none;
}

textarea.text-pesan {
    font-family: 'poppins', sans-serif;
    margin-top: 5px;
    padding: 5px;
    resize: vertical;
    width: 400px;
    height: 150px;
    min-height: 80px;
    max-height: 400px;
    border-radius: 5px;
}

textarea.text-pesan:focus {
    outline: 1px solid #6598f7;
    box-shadow: 0 0 8px #6598f7;
}

p.status {
    padding: 5px;
    position: absolute;
    display: none;
    top: 0;
    color: #333;
    text-align: center;
    width: 100%;
}

@media screen and (max-width: 720px) {
    *, html {
        zoom: 1;
    }
}

@media screen and (max-width: 435px) {
    *, html {
        zoom: 0.98;
    }

    div.select-option {
        max-width: 400px;
    }
}

@media screen and (max-width: 316px) {
    *, html {
        filter: opacity(0);
    }
}
</style>
<body>
    <p id="confirm-status" class="status">Terkirim</p>
    <div class="loading" id="loading">
        <div class="loading-container">
            <img class="logo" src="assets/icon_rpl.png" draggable="false" /><br>
            <span class="dots"></span>
            <span class="dots"></span>
            <span class="dots"></span>
        </div>
    </div>
    <div class="welcome" id="welcome">
        <div class="welcome-container">
            <img class="logo logo-smkpp" src="assets/icon_smkpp.png" draggable="false" />
            <img class="logo logo-saintek" src="assets/icon_saintek.png" draggable="false">
            <img class="logo logo-rpl" src="assets/icon_rpl.png" draggable="false" />
            <br>
            <p>Selamat Datang di Booth Pengembangan Perangkat Lunak dan Gim (PPLG)</p>
            <h1>Berikan Kesan Pesanmu di Saintek Prestasi Prima 2024</h1>
            <button class="btn btn-start" onclick="BtnMulai()" disabled>Mulai</button>
        </div>
    </div>
    <form action="process.php" name="input-st" method="POST">
        <div class="form" id="form">
            <div class="form-container">
                <h2>Oke! Kami perlu mengidentifikasi siapa anda.</h2>
                <div class="options">
                    <label class="option">
                        <input type="radio" name="role" id="siswa" value="SISWA" checked>
                        <p class="radio">
                            <span><i class="fas fa-user-graduate"></i><br>SISWA</span>
                        </p>
                    </label>
                    <label class="option">
                        <input type="radio" name="role" id="guru" value="GURU">
                        <p class="radio">
                            <span><i class="fas fa-chalkboard-teacher"></i><br>GURU</span>
                        </p>
                    </label>
                    <label class="option">
                        <input type="radio" name="role" id="pengunjung" value="PENGUNJUNG">
                        <p class="radio">
                            <span><i class="fas fa-user-friends"></i><br>PENGUNJUNG</span>
                        </p>
                    </label>
                </div>
                <button class="btn btn-home" onclick="window.location.reload()" disabled>Home</button>&nbsp;
                <button class="btn btn-next" onclick="BtnGo()" disabled>Next</button>
            </div>
        </div>

        <!-- FORM SISWA -->
        <div class="form2" id="form2">
            <div class="form-container">
                <h2>Halo siswa/i Prestasi Prima! ⸜(o&nbsp;ᴗ&nbsp;o&nbsp;)<br><span class="sub">Silahkan tulis nama dan pilih kelas anda.</span></h2>
                <input type="text" autocomplete="off" name="username-siswa" id="username-siswa" maxlength="64" spellcheck="false" placeholder="Masukkan Nama, eg. Anggatra Satya">
                <br>
                <div class="select-option">
                    <select class="chooser" name="level" onchange="showJurusan(this.value)">
                        <option value="" disabled selected>Kelas</option>
                        <option value="XI">XII</option>
                        <option value="XI">XI</option>
                        <option value="X">X</option>
                    </select>
                    <select class="chooser" name="jurusan" onchange="showNomor(this.value)" disabled>
                        <option value="" disabled selected>Jurusan</option>
                        <option value="PPLG">PPLG</option>
                        <option value="TJKT">TJKT</option>
                        <option value="DKV">DKV</option>
                        <option value="BCF">BCF</option>
                        <option value="SMA">SMA</option>
                    </select>
                    <select class="chooser" name="nomor" disabled>
                        <option value="" disabled selected>Nomor</option>
                    </select>
                </div>
                <div class="holder-button">
                    <button class="btn btn-back1" onclick="BtnBack1a()" disabled>Back</button>&nbsp;
                    <button class="btn btn-next1" onclick="BtnNext1a()" disabled>Next</button>
                </div>
            </div>
        </div>
        <!-- FORM GURU -->
        <div class="form3" id="form3">
            <div class="form-container">
                <h2>Halo guru Prestasi Prima! ⸜(o&nbsp;ᴗ&nbsp;o&nbsp;)<br><span class="sub">Silahkan tulis nama dan jabatan anda.</span></h2>
                <input type="text" autocomplete="off" name="username-guru" id="username-guru" maxlength="64" spellcheck="false" placeholder="Masukkan Nama, eg. Sir Agus"><br>
                <input type="text" autocomplete="off" name="jabatan" id="jabatan" maxlength="64" spellcheck="false" placeholder="Masukkan Jabatan, eg. Guru RPL, etc.">
                <div class="holder-button">
                    <button class="btn btn-back2" onclick="BtnBack1b()" disabled>Back</button>&nbsp;
                    <button class="btn btn-next2" onclick="BtnNext1b()" disabled>Next</button>
                </div>
            </div>
        </div>
        <!-- FORM PENGUNJUNG -->
        <div class="form4" id="form4">
            <div class="form-container">
                <h2>Halo pengunjung Prestasi Prima! ⸜(o&nbsp;ᴗ&nbsp;o&nbsp;)<br><span class="sub">Silahkan tulis nama dan instansi anda.</span></h2>
                <input type="text" autocomplete="off" name="username-pengunjung" id="username-pengunjung" maxlength="64" spellcheck="false" placeholder="Masukkan Nama, eg. Anggatra Satya"><br>
                <input type="text" autocomplete="off" name="asal-instansi" id="asal-instansi" maxlength="64" spellcheck="false" placeholder="Asal Instansi, eg. SMK Prestasi Prima, etc.">
                <div class="holder-button">
                    <button class="btn btn-back3" onclick="BtnBack1c()" disabled>Back</button>&nbsp;
                    <button class="btn btn-next3" onclick="BtnNext1c()" disabled>Next</button>
                </div>
            </div>
        </div>
        <!-- KESAN PESAN SISWA -->
        <div class="kesan-pesan1" id="kesan-pesan1">
            <div class="form-container">
                <h2>Apa kesan pesan anda <br> setelah mengunjungi Saintek Fair?</h2>
                <textarea name="input-kp1" autocomplete="off" class="text-pesan" id="input-kp1" placeholder="Tuliskan kesan pesanmu disini..." spellcheck="false" maxlength="960"></textarea>
                <div class="holder-button">
                    <button class="btn btn-back4" onclick="BtnBack2a()" disabled>Back</button>&nbsp;
                    <input type="submit" class="btn btn-submit1" onclick="BtnSub2a()" disabled></button>
                </div>
            </div>
         </div>  
        <!-- KESAN PESAN GURU -->
        <div class="kesan-pesan2" id="kesan-pesan2">
            <div class="form-container">
                <h2>Apa kesan pesan anda <br> setelah mengunjungi Saintek Fair?</h2>
                <textarea name="input-kp2" autocomplete="off" class="text-pesan" id="input-kp2" placeholder="Tuliskan kesan pesanmu disini..." spellcheck="false" maxlength="960"></textarea>
                <div class="holder-button">
                    <button class="btn btn-back5" onclick="BtnBack2b()" disabled>Back</button>&nbsp;
                    <input type="submit" class="btn btn-submit2" onclick="BtnSub2b()" disabled></button>
                </div>
            </div>
         </div>  
        <!-- KESAN PESAN PENGUNJUNG -->
        <div class="kesan-pesan3" id="kesan-pesan3">
            <div class="form-container">
                <h2>Apa kesan pesan anda <br> setelah mengunjungi Saintek Fair?</h2>
                <textarea name="input-kp3" autocomplete="off" class="text-pesan" id="input-kp3" placeholder="Tuliskan kesan pesanmu disini..." spellcheck="false" maxlength="960"></textarea>
                <div class="holder-button">
                    <button class="btn btn-back6" onclick="BtnBack2c()" disabled>Back</button>&nbsp;
                    <input type="submit" class="btn btn-submit3" onclick="BtnSub2c()" disabled></button>
                </div>
            </div>
         </div>  
    </form>
</body>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var lastMouseMove = new Date().getTime();
    document.onmousemove = function() {
        lastMouseMove = new Date().getTime();
    };
    setInterval(function() {
        if (new Date().getTime() - lastMouseMove > 60000) {
            window.location.reload();
        }
    }, 1000);

    cekHalaman();
});

const loading = document.getElementById('loading');
const welcome = document.getElementById('welcome');
const form = document.getElementById('form');
const form2 = document.getElementById('form2');
const form3 = document.getElementById('form3');
const form4 = document.getElementById('form4');
const kp1 = document.getElementById('kesan-pesan1');
const kp2 = document.getElementById('kesan-pesan2');
const kp3 = document.getElementById('kesan-pesan3');
document.querySelectorAll('.btn').disabled = true;

function BtnSub2a() {
    const ntc = document.getElementById('confirm-status');
    if (document.querySelector('form').reportValidity()) {
        ntc.style.backgroundColor = '#c9c619';
        ntc.textContent = 'Terkirim';
    } else {
        ntc.style.backgroundColor = '#c94a1c';
        ntc.textContent = 'Gagal';
    }
    ntc.style.display = 'block';
    setTimeout(() => {
        ntc.style.display = 'none';
    }, 1100);
}

function BtnSub2b() {
    const ntc = document.getElementById('confirm-status');
    if (document.querySelector('form').reportValidity()) {
        ntc.style.backgroundColor = '#c9c619';
        ntc.textContent = 'Terkirim';
    } else {
        ntc.style.backgroundColor = '#c94a1c';
        ntc.textContent = 'Gagal';
    }
    ntc.style.display = 'block';
    setTimeout(() => {
        ntc.style.display = 'none';
    }, 1100);
}

function BtnSub2c() {
    const ntc = document.getElementById('confirm-status');
    if (document.querySelector('form').reportValidity()) {
        ntc.style.backgroundColor = '#c9c619';
        ntc.textContent = 'Terkirim';
    } else {
        ntc.style.backgroundColor = '#c94a1c';
        ntc.textContent = 'Gagal';
    }
    ntc.style.display = 'block';
    setTimeout(() => {
        ntc.style.display = 'none';
    }, 1100);
}

function BtnBack2a() {
    kp1.style.opacity = 1;
    document.querySelector('.btn-submit1').disabled = true;
    document.querySelector('.btn-back4').disabled = true;
    document.getElementById('input-kp1').removeAttribute('required');
    setTimeout(function() {
        kp1.style.transition = 'opacity 0.5s';
        kp1.style.opacity = 0;
        setTimeout(function() {
            kp1.style.display = 'none';
            form2.style.display = 'block';
            form2.style.opacity = 0;
            setTimeout(function() {
                form2.style.opacity = 1;
                document.querySelector('.btn-next1').disabled = false;
                document.querySelector('.btn-back1').disabled = false; // Tombol back pada form2 diaktifkan kembali
            }, 500);
        }, 500);
    }, 500);
}

function BtnBack2b() {
    kp2.style.opacity = 1;
    document.querySelector('.btn-submit2').disabled = true;
    document.querySelector('.btn-back5').disabled = true;
    document.getElementById('input-kp2').removeAttribute('required');
    setTimeout(function() {
        kp2.style.transition = 'opacity 0.5s';
        kp2.style.opacity = 0;
        setTimeout(function() {
            kp2.style.display = 'none';
            form3.style.display = 'block';
            form3.style.opacity = 0;
            setTimeout(function() {
                form3.style.opacity = 1;
                document.querySelector('.btn-next2').disabled = false;
                document.querySelector('.btn-back2').disabled = false; // Tombol back pada form3 diaktifkan kembali
            }, 500);
        }, 500);
    }, 500);
}

function BtnBack2c() {
    kp3.style.opacity = 1;
    document.querySelector('.btn-submit3').disabled = true;
    document.querySelector('.btn-back6').disabled = true;
    document.getElementById('input-kp3').removeAttribute('required');
    setTimeout(function() {
        kp3.style.transition = 'opacity 0.5s';
        kp3.style.opacity = 0;
        setTimeout(function() {
            kp3.style.display = 'none';
            form4.style.display = 'block';
            form4.style.opacity = 0;
            setTimeout(function() {
                form4.style.opacity = 1;
                document.querySelector('.btn-next3').disabled = false;
                document.querySelector('.btn-back3').disabled = false; // Tombol back pada form4 diaktifkan kembali
            }, 500);
        }, 500);
    }, 500);
}

function BtnBack1c() {
    form4.style.opacity = 1;
    document.querySelector('.btn-next3').disabled = true;
    document.querySelector('.btn-back3').disabled = true;
    document.getElementById('username-pengunjung').removeAttribute('required', '');
    setTimeout(function() {
        form4.style.transition = 'opacity 0.5s';
        form4.style.opacity = 0;
        setTimeout(function() {
            form4.style.display = 'none';
            form.style.display = 'block';
            form.style.opacity = 0;
            setTimeout(function() {
                form.style.opacity = 1;
                document.querySelector('.btn-next').disabled = false;
                document.querySelector('.btn-home').disabled = false;
            }, 500);
        }, 500);
    }, 500);
}

function BtnBack1b() {
    form3.style.opacity = 1;
    document.querySelector('.btn-next2').disabled = true;
    document.querySelector('.btn-back2').disabled = true;
    document.getElementById('username-guru').removeAttribute('required', '');
    setTimeout(function() {
        form3.style.transition = 'opacity 0.5s';
        form3.style.opacity = 0;
        setTimeout(function() {
            form3.style.display = 'none';
            form.style.display = 'block';
            form.style.opacity = 0;
            setTimeout(function() {
                form.style.opacity = 1;
                document.querySelector('.btn-next').disabled = false;
                document.querySelector('.btn-home').disabled = false;
            }, 500);
        }, 500);
    }, 500);
}

function BtnBack1a() {
    form2.style.opacity = 1;
    document.querySelector('.btn-next1').disabled = true;
    document.querySelector('.btn-back1').disabled = true;
    document.getElementById('username-siswa').removeAttribute('required', '');
    setTimeout(function() {
        form2.style.transition = 'opacity 0.5s';
        form2.style.opacity = 0;
        setTimeout(function() {
            form2.style.display = 'none';
            form.style.display = 'block';
            form.style.opacity = 0;
            setTimeout(function() {
                form.style.opacity = 1;
                document.querySelector('.btn-next').disabled = false;
                document.querySelector('.btn-home').disabled = false;
            }, 500);
        }, 500);
    }, 500);
}

function BtnNext1a() {
    form2.style.opacity = 1;
    const usernameSiswa = document.getElementById('username-siswa').value;
    const jurusan = document.getElementsByName("jurusan")[0].value;
    const nomor = document.getElementsByName("nomor")[0].value;
    if (usernameSiswa !== "" && jurusan !== "" && nomor !== "") {
        document.querySelector('.btn-next1').disabled = true;
        document.querySelector('.btn-back1').disabled = true;
        document.getElementById('input-kp1').setAttribute('required', '');
        setTimeout(function() {
            form2.style.transition = 'opacity 0.5s';
            form2.style.opacity = 0;
            setTimeout(function() {
                form2.style.display = 'none';
                kp1.style.display = 'block';
                kp1.style.opacity = 0;
                setTimeout(function() {
                    kp1.style.opacity = 1;
                    document.querySelector('.btn-submit1').disabled = false;
                    document.querySelector('.btn-back4').disabled = false;
                }, 500);
            }, 500);
        }, 500);
    }
}

function BtnNext1b() {
    form3.style.opacity = 1;
    const usernameGuru = document.getElementById('username-guru').value;
    const jabatan = document.getElementsByName('jabatan').value;
    if (usernameGuru !== "" && jabatan !== "") {
        document.querySelector('.btn-next2').disabled = true;
        document.querySelector('.btn-back2').disabled = true;
        document.getElementById('input-kp2').setAttribute('required', '');
        setTimeout(function() {
            form3.style.transition = 'opacity 0.5s';
            form3.style.opacity = 0;
            setTimeout(function() {
                form3.style.display = 'none';
                kp2.style.display = 'block';
                kp2.style.opacity = 0;
                setTimeout(function() {
                    kp2.style.opacity = 1;
                    document.querySelector('.btn-submit2').disabled = false;
                    document.querySelector('.btn-back5').disabled = false;
                }, 500);
            }, 500);
        }, 500);
    }
}

function BtnNext1c() {
    form4.style.opacity = 1;
    const usernamePengunjung = document.getElementById('username-pengunjung').value;
    const asalInstansi = document.getElementById('asal-instansi').value;
    if (usernamePengunjung !== "" && asalInstansi !== "") {
        document.querySelector('.btn-next3').disabled = true;
        document.querySelector('.btn-back3').disabled = true;
        document.getElementById('input-kp3').setAttribute('required', '');
        setTimeout(function() {
            form4.style.transition = 'opacity 0.5s';
            form4.style.opacity = 0;
            setTimeout(function() {
                form4.style.display = 'none';
                kp3.style.display = 'block';
                kp3.style.opacity = 0;
                setTimeout(function() {
                    kp3.style.opacity = 1;
                    document.querySelector('.btn-submit3').disabled = false;
                    document.querySelector('.btn-back6').disabled = false;
                }, 500);
            }, 500);
        }, 500);
    }
}

function BtnGo() {
    form.style.opacity = 1;
    document.querySelector('.btn-next').disabled = true;
    document.querySelector('.btn-home').disabled = true;
    setTimeout(function() {
        form.style.transition = 'opacity 0.5s';
        form.style.opacity = 0;
        setTimeout(function() {
            form.style.display = 'none';
            const student = document.querySelector('input[id="siswa"]:checked');
            const teacher = document.querySelector('input[id="guru"]:checked');
            const visitor = document.querySelector('input[id="pengunjung"]:checked');
            
            if (student) {
                document.getElementById('username-siswa').value = "";
                document.getElementById('input-kp1').value = "";
                document.getElementById('username-siswa').setAttribute('required', '');
                document.querySelectorAll('select.chooser').forEach(select => select.setAttribute('required', ''));

                const drops = document.querySelector('select[name="level"]');
                const dropj = document.querySelector('select[name="jurusan"]');
                const dropn = document.querySelector('select[name="nomor"]');
                drops.selectedIndex = 0;
                dropj.selectedIndex = 0;
                dropj.disabled = true;
                dropn.selectedIndex = 0;
                dropn.disabled = true;

                form2.style.display = 'block';
                form2.style.opacity = 0;
                setTimeout(function() {     
                    form2.style.opacity = 1;
                    document.querySelector('.btn-next1').disabled = false;
                    document.querySelector('.btn-back1').disabled = false;
                }, 500);
            } else if (teacher) {
                document.getElementById('username-guru').value = "";
                document.getElementById('input-kp2').value = "";
                document.getElementById('username-guru').setAttribute('required', '');
                document.getElementById('jabatan').value = "";
                document.getElementById('jabatan').setAttribute('required', '');
                form3.style.display = 'block';
                form3.style.opacity = 0;
                setTimeout(function() {
                    form3.style.opacity = 1;
                    document.querySelector('.btn-next2').disabled = false;
                    document.querySelector('.btn-back2').disabled = false;
                }, 500);
            } else if (visitor) {
                document.getElementById('username-pengunjung').value = "";
                document.getElementById('input-kp3').value = "";
                document.getElementById('username-pengunjung').setAttribute('required', '');
                document.getElementById('asal-instansi').value = ""; 
                document.getElementById('asal-instansi').setAttribute('required', '');
                form4.style.display = 'block';
                form4.style.opacity = 0;
                setTimeout(function() {
                    form4.style.opacity = 1;
                    document.querySelector('.btn-next3').disabled = false;
                    document.querySelector('.btn-back3').disabled = false;
                }, 500);
            }
        }, 500);
    }, 500);
}

// Tombol Mulai
function BtnMulai() {
    welcome.style.opacity = 1;
    document.querySelector('.btn-start').disabled = true;
    setTimeout(function() {
        welcome.style.transition = 'opacity 0.5s';
        welcome.style.opacity = 0;
        setTimeout(function() {
            welcome.style.display = 'none';
            form.style.display = 'block';
            setTimeout(function() {
                document.querySelector('.btn-next').disabled = false;
                document.querySelector('.btn-home').disabled = false;
            }, 500);
        }, 500);
    }, 500);
}

function cekHalaman() {
    loading.style.display = 'block';
    loading.style.opacity = 1;
    loading.style.transition = 'opacity 0.5s';

    welcome.style.display = 'none';
    form.style.display = 'none';
    form2.style.display = 'none';
    form3.style.display = 'none';

    if (navigator.onLine) {
        setTimeout(function() {
            loading.style.opacity = 0;
            setTimeout(function() {
                loading.style.display = 'none';
                welcome.style.display = 'block';
                setTimeout(function() {
                    document.querySelector('.btn-start').disabled = false;
                }, 500);
            }, 500);
        }, 2000);
    }
}

// Mengatur fungsi cekJaringan untuk dijalankan saat window terload
window.onload = cekHalaman;
// Mengatur fungsi cekJaringan untuk dijalankan saat koneksi internet online
window.ononline = cekJaringan;
// Mengatur fungsi cekJaringan untuk dijalankan saat koneksi internet offline
// window.onoffline = cekJaringan;
// Mengatur fungsi cekJaringan untuk dijalankan saat terjadi perubahan pada history browser
window.onpopstate = cekHalaman;
// Mengatur fungsi cekJaringan untuk dijalankan saat terjadi perubahan pada hash URL
window.onhashchange = cekHalaman;

function showJurusan(value) {
    if (value !== "") {
        document.getElementsByName("jurusan")[0].disabled = false;
    } else {
        document.getElementsByName("jurusan")[0].disabled = true;
        document.getElementsByName("nomor")[0].disabled = true;
    }
}
function showNomor(value) {
    let nomorSelect = document.getElementsByName("nomor")[0];
    nomorSelect.innerHTML = "<option value='' disabled selected>Nomor</option>";
    if (value === "PPLG" || value === "TJKT" || value === "BCF") {
        for (let i = 1; i <= 2; i++) {
            nomorSelect.options[nomorSelect.options.length] = new Option(i, i);
        }
    } else if (value === "DKV") {
        for (let i = 1; i <= 3; i++) {
            nomorSelect.options[nomorSelect.options.length] = new Option(i, i);
        }
    } else if (value === "SMA") {
        for (let i = 1; i <= 15; i++) {
            nomorSelect.options[nomorSelect.options.length] = new Option(i, i);
        }
    }
    nomorSelect.disabled = false;
    nomorSelect.style.display = "inline-block";
}

</script>
</html>