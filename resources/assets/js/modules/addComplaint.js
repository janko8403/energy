export default function addComplaint() {

    var addComplaintForm = $('.add-complaint-form');
    const checkboxNoneEmail = document.querySelector('#none-email'),
        inputDateOfBirthForm = document.querySelector('#date-of-birth-form'),
        peselComplaintForm = document.querySelector('#pesel-complaint-form'),
        checkboxPesel = document.querySelector('#none-pesel'),
        nameComplaint = document.querySelector('#name-complaint'),
        surnameComplaint = document.querySelector('#surname-complaint'),
        idInput = document.getElementById('id-complaint'),
        phoneComplaint = document.querySelector('#phone-complaint'),
        emailComplaint = document.querySelector('#email-complaint'),
        reportingPersonComplaint = document.querySelector('#reporting-person-complaint'),
        departmentId = document.querySelector('#department-id'),
        complaintType = document.querySelector('#complaint-type'),
        reportingMethod = document.querySelector('#reporting-method'),
        submitButton = $('#submit-complaint-form'),
        dateBirthComplaint = document.querySelector('#datebirth-complaint'),
        peselComplaint = document.querySelector('#pesel-complaint'),
        contentComplaint = document.querySelector('#content-complaint'),
        addressComplaintForm = document.querySelector('#address-complaint'),
        streetComplaint = document.querySelector('#street-complaint'),
        streetNumberComplaint = document.querySelector('#street-number-complaint'),
        addComplaintModal = document.querySelector('#add-complaint'),
        apartmentComplaint = document.querySelector('#apartment-complaint'),
        cityComplaint = document.querySelector('#city-complaint'),
        // fileComplaint = document.querySelector('#complaint-attachment'),
        postCodeComplaint = document.querySelector('#post-code-complaint'),
        contactMethodRadios = [...document.querySelectorAll('input[name=contact_method]')],
        patientInformedRadios = [...document.querySelectorAll('input[name=patient_informed]')];
    var contactMethod = 'phone',
        isCheckboxEmail = false,
        isCheckboxPesel = false,
        patientInformed = '1',
        html;

    for (let i = 0; i < contactMethodRadios.length; i++) {
        contactMethodRadios[i].addEventListener('click', function () {
            contactMethod = contactMethodRadios[i].value;
            if (contactMethodRadios[i].value === 'letter') {
                $(addressComplaintForm).removeClass('d-none');
                //addressComplaintForm.style.display = 'block';
            } else {
                $(addressComplaintForm).addClass('d-none');
                // addressComplaintForm.style.display = 'none';
            }
        });
    }

    for (let i = 0; i < patientInformedRadios.length; i++) {
        patientInformedRadios[i].addEventListener('click', function () {
            patientInformed = patientInformedRadios[i].value;
        });
    }

    if (checkboxNoneEmail) {
        checkboxNoneEmail.addEventListener('change', function () {
            if (this.checked) {
                isCheckboxEmail = 'on';
                emailComplaint.setAttribute('disabled', 'true');
                emailComplaint.value = '';
            } else {
                isCheckboxEmail = false;
                emailComplaint.removeAttribute('disabled', '');
            }
        });
    }

    if (checkboxPesel) {
        checkboxPesel.addEventListener('change', function () {
            if (this.checked) {
                isCheckboxPesel = 'on';
                inputDateOfBirthForm.style.display = 'block';
                peselComplaintForm.style.display = 'none';
            } else {
                isCheckboxPesel = false;
                inputDateOfBirthForm.style.display = 'none';
                peselComplaintForm.style.display = 'block';
            }
        });
    }

    submitButton.click(async e => await addStore());

    async function addStore() {

        // const fd = new FormData()
        // fd.append('complaint-attachment', fileComplaint.files[0]);
        const id = idInput.value;
        const url = id ? '/complaint/edit/' + id : 'complaint/send';
        await fetch(url, {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json',
                'X-CSRF-Token': $('input[name="_token"]').val(),
            },
            body: JSON.stringify({
                'name': nameComplaint.value,
                'surname': surnameComplaint.value,
                'phone': phoneComplaint.value,
                'email': emailComplaint.value,
                'none_email': isCheckboxEmail,
                'none_pesel': isCheckboxPesel,
                'pesel': peselComplaint.value,
                'date_birth': dateBirthComplaint.value,
                'complaint_content': contentComplaint.value,
                'contact_method': contactMethod,
                'reporting_person': reportingPersonComplaint.value,
                'department_id': departmentId.value,
                'reporting_method': reportingMethod.value,
                'patient_informed': patientInformed,
                'complaint_type_id': complaintType.value,
                // 'complaint_attachment': fd,
                'street': streetComplaint.value,
                'street_number': streetNumberComplaint.value,
                'apartment': apartmentComplaint.value,
                'city': cityComplaint.value,
                'post_code': postCodeComplaint.value,
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
                    showMsg('Reklamacja poprawnie zapisana', 'success');
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
                    addComplaintModal.classList.remove(['modal-show']);
                    $('.send-alert').removeClass('success');
                    addComplaintForm[0].reset();
                }, 2000);
            }
        }, 500);
    }

}
