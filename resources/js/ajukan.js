document.addEventListener('DOMContentLoaded', function () {
    const options = document.querySelectorAll('.document-option');
    
    options.forEach(option => {
        option.addEventListener('click', function () {
            // Reset style untuk semua opsi
            options.forEach(opt => {
                opt.classList.remove('bg-slate-50', 'border-sky-900');
                opt.classList.add('bg-white', 'border-slate-200');
                const radioInner = opt.querySelector('.radio-indicator div');
                radioInner.classList.remove('bg-sky-900');
                radioInner.classList.add('bg-transparent');
                opt.querySelector('.radio-indicator').classList.remove('border-sky-900');
                opt.querySelector('.radio-indicator').classList.add('border-neutral-400');
            });

            // Terapkan style aktif pada opsi yang dipilih
            this.classList.remove('bg-white', 'border-slate-200');
            this.classList.add('bg-slate-50', 'border-sky-900');
            
            const activeRadio = this.querySelector('input[type="radio"]');
            activeRadio.checked = true;

            const activeIndicator = this.querySelector('.radio-indicator');
            activeIndicator.classList.remove('border-neutral-400');
            activeIndicator.classList.add('border-sky-900');
            
            const activeInner = activeIndicator.querySelector('div');
            activeInner.classList.remove('bg-transparent');
            activeInner.classList.add('bg-sky-900');
        });
    });
});