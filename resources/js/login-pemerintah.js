
document.addEventListener('DOMContentLoaded', () => {

    const form = document.getElementById(
        'loginPemerintahForm'
    );

    const username = document.getElementById('username');
    const password = document.getElementById('password');
    const message = document.getElementById('loginMessage');

    if (!form) return;

    function showMessage(text) {
        message.textContent = text;
        message.hidden = false;
    }

    function clearMessage() {
        message.textContent = '';
        message.hidden = true;
    }

    [username, password].forEach((input) => {
        input.addEventListener('input', clearMessage);
    });

    form.addEventListener('submit', (event) => {
        // Mode preview: belum ada autentikasi backend.
        event.preventDefault();
        clearMessage();

        if (!username.value.trim()) {
            showMessage('Username petugas wajib diisi.');
            username.focus();
            return;
        }

        if (!password.value) {
            showMessage('Password wajib diisi.');
            password.focus();
            return;
        }

        showMessage(
            'Halaman login berhasil dipreview. ' +
            'Autentikasi petugas belum diaktifkan.'
        );
    });

});
