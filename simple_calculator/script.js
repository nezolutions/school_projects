function sec(num) {
    bil = document.getElementById('angkaTotal').innerHTML;
    bil = bil + num;
    document.getElementById('angkaTotal').innerHTML = bil;
}

function minus() {
    bil = document.getElementById('angkaTotal').innerHTML;
    bil = "-" + bil;
    document.getElementById('angkaTotal').innerHTML = bil;
}

function persen() {
    bil = document.getElementById('angkaTotal').innerHTML;
    bil = bil * 1 / 100;
    document.getElementById('angkaTotal').innerHTML = bil;
}

function desimal() {
    bil = document.getElementById('angkaTotal').innerHTML;
    bil = bil + ".";
    document.getElementById('angkaTotal').innerHTML = bil;
}

function reset() {
    document.getElementById('angkaTotal').innerHTML = "";
}

function kali() {
    bil = document.getElementById('angkaTotal').innerHTML;
    bil = bil + "*";
    document.getElementById('angkaTotal').innerHTML = bil;
}

function bagi() {
    bil = document.getElementById('angkaTotal').innerHTML;
    bil = bil + "/";
    document.getElementById('angkaTotal').innerHTML = bil;
}

function kurang() {
    bil = document.getElementById('angkaTotal').innerHTML;
    bil = bil + "-";
    document.getElementById('angkaTotal').innerHTML = bil;
}

function tambah() {
    bil = document.getElementById('angkaTotal').innerHTML;
    bil = bil + "+";
    document.getElementById('angkaTotal').innerHTML = bil;
}

function equal() {
    hasil = document.getElementById('angkaTotal').innerHTML;
    try {
        hasil = eval(hasil);
        document.getElementById('angkaTotal').innerHTML = hasil;
    } catch (error) {
        window.alert("Error: " + error.message);
    }
}