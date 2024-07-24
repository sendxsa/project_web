document.addEventListener('DOMContentLoaded', function() {
    var input = document.getElementById('luasLahan');

    function formatValue(value) {
        // Hapus semua karakter non-numeric kecuali koma
        var numericValue = value.replace(/[^0-9,]/g, '');
        // Jika terdapat koma, pastikan hanya satu koma
        if (numericValue.includes(',')) {
            numericValue = numericValue.replace(/,+/g, ',');
        }
        // Jika tidak ada koma, tambahkan ",00"
        if (!numericValue.includes(',')) {
            numericValue += ',00';
        } else if (numericValue.split(',')[1].length === 0) {
            numericValue += '00'; // Tambah dua digit jika koma ada tapi tidak ada digit setelahnya
        } else if (numericValue.split(',')[1].length === 1) {
            numericValue += '0'; // Tambah satu digit jika hanya satu digit setelah koma
        }
        return numericValue;
    }

    // Event handler untuk input event
    input.addEventListener('input', function() {
        // Simpan posisi kursor
        var cursorPosition = input.selectionStart;
        // Format nilai
        input.value = formatValue(input.value);
        // Kembalikan posisi kursor
        input.setSelectionRange(cursorPosition, cursorPosition);
    });

    // Inisialisasi dengan nilai awal
    input.value = formatValue(input.value);
});