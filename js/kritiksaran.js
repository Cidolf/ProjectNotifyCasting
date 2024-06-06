const form = document.getElementById('feedback-form');
const responseMessage = document.getElementById('response-message');

form.addEventListener('submit', function (event) {
    event.preventDefault();

    const formData = new FormData(form);
    const xhr = new XMLHttpRequest();
    xhr.open(form.method, form.action, true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            form.reset();
            responseMessage.innerHTML = '<p class="success-message">Terima kasih atas kritik dan sarannya!</p>';
        } else {
            responseMessage.innerHTML = '<p class="error-message">Terjadi kesalahan. Silakan coba lagi nanti.</p>';
        }
    };

    xhr.send(new URLSearchParams(formData).toString());
})