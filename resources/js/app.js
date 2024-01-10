import './bootstrap';

const alertButton = document.getElementById('open-alert');

if(alertButton) {
    alertButton.addEventListener('buttonClick', () => {
        alert('ok');
    })
}