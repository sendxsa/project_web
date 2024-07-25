function formatDate(dateString) {
    var date = new Date(dateString);
    var year = date.getFullYear();
    var month = ('0' + (date.getMonth() + 1)).slice(-2);
    var day = ('0' + date.getDate()).slice(-2);
    return year + month + day;
}

// Function to update the No. PBG field
function updateNoPbg() {
    var tanggalRegistrasi = document.getElementById('tanggalRegistrasi').value;
    var nomorPbg = document.getElementById('nomorPbg').value;

    // Format the tanggalRegistrasi to YYYYMMDD
    var formattedDate = tanggalRegistrasi ? formatDate(tanggalRegistrasi) : '';

    // Format the No. PBG value
    var noPbgValue = '317409-' + formattedDate + '-' + nomorPbg;

    // Update the No. PBG field
    document.getElementById('noPbg').value = noPbgValue;
}

// Set initial value for No. PBG
document.getElementById('noPbg').value = '317409';

// Attach event listeners to update the No. PBG field when either of the other fields change
document.getElementById('tanggalRegistrasi').addEventListener('input', updateNoPbg);
document.getElementById('nomorPbg').addEventListener('input', updateNoPbg);