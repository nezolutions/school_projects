function submitForm() {
    const un = document.getElementById('username').value;
    const pw = document.getElementById('password').value; 

    // username dan password boleh diubah sesuai keinginan
    if (un !== "gatra" || pw !== "5500") {
        alert("Username atau password salah.");
        return false;
    }
    alert("Username atau password benar.");
    window.location.href = 'dashboard.html';
    return false;
}
