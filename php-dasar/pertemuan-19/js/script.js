// ambil elemen yang dibutuhkan 
let keyword = document.getElementById('keyword');
let tombolCari = document.getElementById('tombol-cari');
let container = document.getElementById('container');

// tambahkan event ketika keyword ditulis
keyword.addEventListener('keyup', function() {
    
    // buat object ajax
    let xhr = new XMLHttpRequest();

    // cek kesiapan ajax nya
    xhr.onreadystatechange = function () {
        if( xhr.readyState == 4 && xhr.status == 200 ) {
            container.innerHTML = xhr.responseText;
        }
    }

    // eksekusi ajax
    xhr.open('GET', 'ajax/atlet.php?keyword=' + keyword.value, true);
    xhr.send();

});