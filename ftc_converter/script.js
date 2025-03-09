document.addEventListener("submit", (e) => {
    e.preventDefault();
});
function convert() {
    var fahrenheit = parseFloat(document.getElementById('derajat').value);
    if (isNaN(fahrenheit)) {
        document.getElementById('result1').innerText = "Masukkan tidak valid";
    } else {
        var celcius = 5 / 9 * (fahrenheit - 32);
        document.getElementById('result1').innerText = "Derajat Celcius: " + celcius.toFixed(2) + "°C";
    }
    return 0;
}