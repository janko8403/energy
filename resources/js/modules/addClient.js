export default function addClient() {

    var addClient = $('.add-client');
    const nazwaOdbiorcy = document.querySelector('#nazwa-odbiorcy'),
        mocUmowna = document.querySelector('#moc-umowna'),
        typKlienta = document.querySelector('#typ-klienta'),
        areaId = document.querySelector('#area-id'),
        generacja = document.querySelector('#generacja'),
        adresIp = document.querySelector('#adres-ip'),
        addConfModal = document.querySelector('#add-client'),
        submitButton = $('#submit-client');
    var html;

    console.log('qqq');

    submitButton.click(async e => await addClientStore());

    async function addClientStore() {
        console.log('form qqq');
        const url = '/admin/add-client';
        await fetch(url, {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json',
                'X-CSRF-Token': $('input[name="_token"]').val(),
            },
            body: JSON.stringify({
                'nazwaOdbiorcy': nazwaOdbiorcy.value,
                'mocUmowna': mocUmowna.value,
                'typKlienta': typKlienta.value,
                'area_id': areaId.value,
                'generacja': generacja.value,
                'adres': adresIp.value,
            })
        })
        .then(res => res.json())
        .then(res => {
            if (res.errors != null) {
                console.log(res.errors)
                const msgs = Object.values(res.errors).map(m => Object.values(m))
                html = `<ul>`
                html += msgs.map(m => `<li>${m}</li>`).join('')
                html += `</ul>`
                showMsg(html, 'error');
            } else {
                showMsg('Dodałeś poprawnie konfigurację', 'success');
                window.location.reload();
            }
        });
    }

    function showMsg(message, alert) {
        setTimeout(() => {
            $('.send-alert').delay(100).fadeIn(100);
            $('.send-alert').html(message);
            $('.send-alert').addClass(alert);
            if (alert == 'success') {
                setTimeout(() => {
                    $('.send-alert').delay(2000).fadeOut(500);
                }, 2000);
                setTimeout(() => {
                    addConfModal.classList.remove(['modal-show']);
                    $('.send-alert').removeClass('success');
                    addClient[0].reset();
                }, 2000);
            }
        }, 500);
    }

}