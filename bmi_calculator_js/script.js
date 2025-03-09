document.addEventListener("submit", (e) => {
    e.preventDefault();
});
function check() {
    var beratBadan = parseInt(document.getElementById('bbindex').value || "");
    var tinggiBadan = parseFloat(document.getElementById('tbindex').value || "");

    if (isNaN(beratBadan) || isNaN(tinggiBadan)) {
        document.getElementById('result2').innerText = "Masukkan tidak valid";
        return 0;
    }

    if (tinggiBadan > 3) {
        tinggiBadan = tinggiBadan / 100;
    }
    
    var bmi = beratBadan / (tinggiBadan * tinggiBadan);
    bmi = bmi.toFixed(1);

    var status;
    if (bmi < 18.5) {
        status = "Status: Anda Kurus";
    } else if (bmi >= 18.5 && bmi < 25) {
        status = "Status: Anda Normal";
    } else if (bmi >= 25 && bmi < 30) {
        status = "Status: Anda Overweight";
    } else {
        status = "Status: Anda Obesitas";
    }
    
    document.getElementById('result2').innerText = `BMI: ${bmi}\n${status}`;
    return 0;
}