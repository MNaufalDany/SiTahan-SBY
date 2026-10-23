document.addEventListener('DOMContentLoaded', function() {
    
    // Fungsi untuk kembali ke halaman form kondisi-awal
    const btnBack = document.getElementById('btnBack');
    
    if(btnBack) {
        btnBack.addEventListener('click', function() {
            // Bisa menggunakan history back
            window.history.back();
            
            // ATAU arahkan langsung ke route URL jika history back tidak sesuai:
            // window.location.href = '/simulasi/kondisi-awal';
        });
    }

});