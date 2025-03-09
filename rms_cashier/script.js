function hitung() {
    var pesanan1 = parseInt(document.getElementById('nasgorSh').value) || 0;
    var pesanan2 = parseInt(document.getElementById('nasgorAa').value) || 0;
    var pesanan3 = parseInt(document.getElementById('nasgorSb').value) || 0;
    var pesanan4 = parseInt(document.getElementById('lemonTea').value) || 0;
    var pesanan5 = parseInt(document.getElementById('esTehManis').value) || 0;
    var jumlah = 0;
    var diskon = 0;
    var hasil = 0;
    var harga = [
        50000,
        25000,
        25000,
        10000,
        10000
    ];

    if (isNaN(pesanan1) == false || pesanan1 !== "") {
        jumlah += (pesanan1 * harga[0]);
    }

    if (isNaN(pesanan2) == false || pesanan2 !== "") {
        jumlah += (pesanan2 * harga[1]);
    }

    if (isNaN(pesanan3) == false || pesanan3 !== "") {
        jumlah += (pesanan3 * harga[2]);
    }

    if (isNaN(pesanan4) == false || pesanan4 !== "") {
        jumlah += (pesanan4 * harga[3]);
    }

    if (isNaN(pesanan5) == false || pesanan5 !== "") {
        jumlah += (pesanan5 * harga[4]);
    }

    if (jumlah >= 50000) {
        diskon = jumlah * 0.05;
        document.getElementById('diskonBar').innerText = diskon.toLocaleString();
        hasil = jumlah - diskon;

    } else {
        document.getElementById('diskonBar').innerText = diskon.toLocaleString();
        hasil = jumlah;
    }

    document.getElementById('jumlahBar').innerText = jumlah.toLocaleString();
    document.getElementById('totalBar').innerText = hasil.toLocaleString();
}

function batal() {
    document.getElementById('jumlahBar').innerText = "0";
    document.getElementById('diskonBar').innerText = "0";
    document.getElementById('totalBar').innerText = "0";
}
function cetak() {
    var res = document.getElementById('totalBar').innerText || 0;
    if (res <= 0 || res == "") {
        alert("Pesanan tidak ada.");
        return 0;
    } else {
        var main = document.getElementById('mainpage');
        main.style.display = "none";
        var main = document.getElementById('nav');
        main.style.display = "none";
        var side = document.getElementById('payment');
        side.style.display = "block";

        var struk = "======================================\n";
        struk    += "| STRUK PEMBELIAN\n";
        struk    += "======================================\n";
        
        var pesanan = [
            { nama: '- Pizza', harga: 50000, jumlah: parseInt(document.getElementById('nasgorSh').value) || 0 },
            { nama: '- Taco', harga: 25000, jumlah: parseInt(document.getElementById('nasgorAa').value) || 0 },
            { nama: '- Burger', harga: 25000, jumlah: parseInt(document.getElementById('nasgorSb').value) || 0 },
            { nama: '- Fantastic', harga: 10000, jumlah: parseInt(document.getElementById('lemonTea').value) || 0 },
            { nama: '- Cocacolastic', harga: 10000, jumlah: parseInt(document.getElementById('esTehManis').value) || 0 }
        ];

        var jumlah = 0;
        for (var i = 0; i < pesanan.length; i++) {
            if (pesanan[i].jumlah > 0) {
                var subtotal = pesanan[i].harga * pesanan[i].jumlah;
                struk += "| " + pesanan[i].nama + "\n| " + "x" + pesanan[i].jumlah.toString() + " = Rp " + subtotal.toLocaleString() + "\n";
                jumlah += subtotal;
            }
        }
        struk += "--------------------------------------\n";

        var diskon = jumlah >= 50000 ? jumlah * 0.05 : 0;
        var total = jumlah - diskon;

        struk += "| Diskon 5% Sebanyak\t\t: Rp " + diskon.toLocaleString() + "\n";
        struk += "| Total Pembayaran\t\t: Rp " + total.toLocaleString() + "\n";
        struk += "======================================\n";

        document.getElementById('menuBar').innerText = struk;
        window.print('menuBar');
    }   
}