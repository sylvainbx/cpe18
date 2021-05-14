if (location.protocol === 'http:') {
    window.location.href = 'https://www.cpe18.fr';
}

function showLogin() {
    document.querySelector('.login').style.display = 'block';
    document.querySelector('.buttons').style.display = 'none';
}

function logout() {
    window.location.href = 'https://www.cpe18.fr';
}
