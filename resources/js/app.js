import './bootstrap';

const alertButton = document.getElementById('open-alert');

if (alertButton) {
    alertButton.addEventListener('click', () => {
        alert('ok');
    })
}