const form = document.querySelector("form");
form.addEventListener("submit", function(event) {
    const nama = document.querySelector('input[name="nama"]').value;
    const laporan = document.querySelector('textarea[name="laporan"]').value;
    const foto = document.querySelector('input[name="foto"]').value;
    if (nama.trim() === "") {
        alert("Nama harus diisi!");
        event.preventDefault();
        return;
    }
    if (laporan.trim() === "") {
        alert("Isi laporan harus diisi!");
        event.preventDefault();
        return;
    }
    if (foto === "") {
        alert("Foto bukti harus diupload!");
        event.preventDefault();
        return;
    }
    const konfirmasi = confirm(
        "Apakah data laporan sudah benar?"
    );
    if (!konfirmasi) {
        event.preventDefault();
    }
});