export default function editClient() {

    var addClient = $('.edit-client');
    const nazwaOdbiorcy = document.querySelector('#nazwa-odbiorcy-edit'),
        mocUmowna = document.querySelector('#moc-umowna-edit'),
        id = document.querySelector('#id-edit'),
        pvId = document.querySelector('#pv-id'),
        typKlienta = document.querySelector('#typ-klienta-edit'),
        areaId = document.querySelector('#area-id-edit'),
        generacja = document.querySelector('#generacja-edit'),
        adresIp = document.querySelector('#adres-ip-edit'),
        addConfModal = document.querySelector('#edit-client'),
        submitButton = $('#submit-edit-client');
    var html;

    console.log('ffff');

    submitButton.click(async e => await editClientStore());

    async function editClientStore() {
        console.log('form ffff');
        const url = '/admin/edit-client';
        await fetch(url, {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json',
                'X-CSRF-Token': $('input[name="_token"]').val(),
            },
            body: JSON.stringify({
                'id': id.value,
                'pv_id': pvId.value,
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