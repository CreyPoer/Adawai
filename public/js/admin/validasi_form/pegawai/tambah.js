document.addEventListener('DOMContentLoaded', function() {
    var form = document.querySelector('form[name="pegawaiForm"]');
    console.log(form);
    if (form) {
        form.addEventListener('submit', function(event) {
            if (!validateForm()) {
                event.preventDefault();
            }
        });
    } else {
        console.error("Form not found!");
    }
});
function validateForm() {
    var isValid = true;
    var name = document.forms["pegawaiForm"]["name"].value;
    var errorName = document.getElementById("errorName");
    var nip = document.forms["pegawaiForm"]["nip"].value;
    var errorNIP = document.getElementById("errorNIP");
    var no_telepon = document.forms["pegawaiForm"]["no_telepon"].value;
    var errorNo_Telepon = document.getElementById("errorNo_Telepon");
    var email = document.forms["pegawaiForm"]["email"].value;
    var errorEmail = document.getElementById("errorEmail");

    var gender = document.forms["pegawaiForm"]["gender"].value;
    var errorGender = document.getElementById("errorGender");

    var divisi_id = document.forms["pegawaiForm"]["divisi_id"].value;
    var errorDivisi_Id = document.getElementById("errorDivisi_Id");

    var marital_status = document.forms["pegawaiForm"]["marital_status"].value;
    var errorMarital_Status = document.getElementById("errorMarital_Status");

    var education = document.forms["pegawaiForm"]["education"].value;
    var errorEducation = document.getElementById("errorEducation");

    var sallary = document.forms["pegawaiForm"]["sallary"].value;
    var errorSallary = document.getElementById("errorSallary");
    var foto = document.forms["pegawaiForm"]["foto"].value;
    var errorFoto = document.getElementById("errorFoto");
    var alamat = document.forms["pegawaiForm"]["alamat"].value;
    var errorAlamat = document.getElementById("errorAlamat");

    errorName.innerHTML = "";
    errorNIP.innerHTML = "";
    errorNo_Telepon.innerHTML = "";
    errorEmail.innerHTML = "";
    errorGender.innerHTML = "";
    errorDivisi_Id.innerHTML = "";
    errorMarital_Status.innerHTML = "";
    errorEducation.innerHTML = "";
    errorSallary.innerHTML = "";
    errorFoto.innerHTML = "";
    errorAlamat.innerHTML = "";

    if (name === "") {
        errorName.innerHTML = "Nama tidak boleh kosong.";
        isValid = false;
    }else if (!/^[a-zA-Z\s]*$/.test(name)) {
        errorName.innerHTML = "Nama hanya boleh berisi huruf dan spasi.";
        isValid = false;
    }

    if (nip === "") {
        errorNIP.innerHTML = "NIP tidak boleh kosong.";
        isValid = false;
    }else if (!/^\d+$/.test(nip)) {
        errorNIP.innerHTML = "NIP harus berupa angka.";
        isValid = false;
    }


    if (no_telepon === "") {
        errorNo_Telepon.innerHTML = "Nomor Telepon tidak boleh kosong.";
        isValid = false;
    }else if(!/^[0-9+-]+$/.test(no_telepon)){
        errorNo_Telepon.innerHTML = "Nomor Telepon hanya boleh berisi angka dan karakter '+' dan '-'";
        isValid = false;
    }

    if (email === "") {
        errorEmail.innerHTML = "Email tidak boleh kosong.";
        isValid = false;
    }else if(!/\S+@\S+\.\S+/.test(email)){
        errorEmail.innerHTML = "Format email tidak valid.";
        isValid = false;
    }

    if (gender === "") {
        errorGender.innerHTML = "Jenis Kelamin tidak boleh kosong.";
        isValid = false;
    }

    if (divisi_id === "") {
        errorDivisi_Id.innerHTML = "Divisi tidak boleh kosong.";
        isValid = false;
    }

    if (marital_status === "") {
        errorMarital_Status.innerHTML = "Status Pernikahan tidak boleh kosong.";
        isValid = false;
    }

    if (education === "") {
        errorEducation.innerHTML = "Pendidikan tidak boleh kosong.";
        isValid = false;
    }

    if (sallary === "") {
        errorSallary.innerHTML = "Gaji tidak boleh kosong.";
        isValid = false;
    }else if(!/^\d+(\.\d{1,2})?$/.test(sallary)){
        errorSallary.innerHTML = "Gaji harus berupa angka non-negatif.";
        isValid = false;
    }

    if (foto === "") {
        errorFoto.innerHTML = "Foto harus di unggah.";
        isValid = false;
    }else if(!/(\.jpg|\.jpeg|\.png)$/i.exec(foto)){
        errorFoto.innerHTML = "Hanya file JPG, JPEG, atau PNG yang diizinkan.";
        isValid = false;
    }

    if (alamat === "") {
        errorAlamat.innerHTML = "Alamat tidak boleh kosong.";
        isValid = false;
    }

    return isValid;
}
