document.addEventListener('DOMContentLoaded', function() {
    var form = document.querySelector('form[name="divisiForm"]');
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
    var divisi = document.forms["divisiForm"]["divisi"].value;
    var errorDivisi = document.getElementById("errorDivisi");
    var description = document.forms["divisiForm"]["description"].value;
    var errorDescription = document.getElementById("errorDescription");

    errorDivisi.innerHTML = "";
    errorDescription.innerHTML = "";

    if (divisi === "") {
        errorDivisi.innerHTML = "Divisi tidak boleh kosong.";
        isValid = false;
    }

    if (description === "") {
        errorDescription.innerHTML = "Deskripsi tidak boleh kosong.";
        isValid = false;
    }

    return isValid;
}
