document.addEventListener('DOMContentLoaded', function () {
    // Interaksi sederhana untuk tombol simulasi baru
    const btnSimulasiBaru = document.getElementById('btn-simulasi-baru');
    if (btnSimulasiBaru) {
        btnSimulasiBaru.addEventListener('click', function (e) {
            e.preventDefault();
            alert('Mengarahkan ke halaman buat simulasi baru...');
            // window.location.href = '/simulasi/baru';
        });
    }

    // Interaksi tombol detail/surat
    const detailTriggers = document.querySelectorAll('.detail-trigger');
    detailTriggers.forEach(trigger => {
        trigger.addEventListener('click', function (e) {
            e.preventDefault();
            const rowText = this.closest('.grid').querySelector('.text-gray-800').textContent;
            console.log('Melihat detail untuk:', rowText);
        });
    });
});