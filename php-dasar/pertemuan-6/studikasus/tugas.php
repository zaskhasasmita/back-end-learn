<?php 

$film = [
    [
        "judul" => "Ujang Supratman",
        "tahun" => "2019",
        "deskripsi" => "Sebuah film yang mengisahkan perjuangan Ujang Supratman, seorang pahlawan nasional yang berkontribusi dalam pergerakan kemerdekaan Indonesia. Film ini menyajikan kisah inspiratif dan menggugah semangat patriotisme.",
        "img" => "https://source.unsplash.com/1920x1080?a"
    ],
    [
        "judul" => "Pertarungan Cinta",
        "tahun" => "2020",
        "deskripsi" => "Sebuah kisah cinta yang mempertemukan dua jiwa yang berbeda. Konflik dan rintangan mewarnai perjalanan mereka, menciptakan cerita yang penuh emosi dan mengharukan.",
        "img" => "https://source.unsplash.com/1920x1080?b"
    ],
    [
        "judul" => "Labirin Masa Depan",
        "tahun" => "2021",
        "deskripsi" => "Film fiksi ilmiah yang memasuki dunia labirin dimensi. Petualangan penuh misteri dan tantangan menanti para karakter utama, menguji ketangguhan dan kecerdasan mereka.",
        "img" => "https://source.unsplash.com/1920x1080?c"
    ],
    [
        "judul" => "Melodi Senja",
        "tahun" => "2022",
        "deskripsi" => "Sebuah drama musikal yang menggambarkan perjalanan seorang musisi mencari identitas dan arti sejati dalam melodi senja kehidupannya. Suara dan harmoni menciptakan pengalaman yang menggetarkan.",
        "img" => "https://source.unsplash.com/1920x1080?d"
    ],
    [
        "judul" => "Misi Rahasia: Operasi Terakhir",
        "tahun" => "2023",
        "deskripsi" => "Film aksi yang memaparkan misi rahasia penuh ketegangan dan adrenalin. Keberanian dan kecerdikan diuji dalam operasi terakhir yang menentukan nasib banyak orang.",
        "img" => "https://source.unsplash.com/1920x1080?e"
    ],
    [
        "judul" => "Kisah Cinta di Bawah Bintang",
        "tahun" => "2024",
        "deskripsi" => "Romansa yang berkembang di bawah cahaya bintang. Kehidupan malam yang indah menjadi saksi perjalanan cinta antara dua jiwa yang terhubung melalui takdir.",
        "img" => "https://source.unsplash.com/1920x1080?f"
    ],
    [
        "judul" => "Petualangan di Pulau Terlarang",
        "tahun" => "2025",
        "deskripsi" => "Sebuah ekspedisi penuh petualangan ke pulau misterius yang dianggap terlarang. Bertahan hidup dan mengungkap rahasia pulau menjadi fokus utama dalam perjalanan ini.",
        "img" => "https://source.unsplash.com/1920x1080?g"
    ],
    [
        "judul" => "Mimpi di Balik Layar",
        "tahun" => "2026",
        "deskripsi" => "Film dokumenter yang mengungkap perjuangan dan keberhasilan di balik layar industri hiburan. Kisah inspiratif dari para pekerja keras yang mengejar mimpi mereka.",
        "img" => "https://source.unsplash.com/1920x1080?h"
    ],
    [
        "judul" => "Detektif Bayangan",
        "tahun" => "2027",
        "deskripsi" => "Seorang detektif bayangan memecahkan kasus-kasus sulit yang sulit dipecahkan oleh kepolisian. Kejeniusan dan intuisi tinggi menjadi senjata utama dalam menjalankan tugasnya.",
        "img" => "https://source.unsplash.com/1920x1080?i"
    ],
    [
        "judul" => "Voyage to the Stars",
        "tahun" => "2028",
        "deskripsi" => "Film petualangan luar angkasa yang membawa penonton dalam sebuah perjalanan ke bintang-bintang yang belum pernah dijelajahi. Keajaiban alam semesta dan pertemuan dengan makhluk luar angkasa menjadi inti cerita.",
        "img" => "https://source.unsplash.com/1920x1080?j"
    ],
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script>
        tailwind.config = {
        theme: {
            extend: {
            colors: {
                clifford: '#da373d',
            }
            }
        }
        }
    </script>
    <style type="text/tailwindcss">
        @layer utilities {
        .content-auto {
            content-visibility: auto;
        }
        }
    </style>
    <title>Document</title>
</head>
<body>
    
<h1 class="font-bold text-4xl text-center mt-20 text-slate-700">Film Zaskha</h1>
<h2 class="font-medium text-2xl text-center mt-5 mb-20 text-slate-500">Praktek menampilkan list Film menggunakan Array Associative PHP</h2>

<div class="container p-4 mx-auto">

    <div class="flex flex-wrap justify-center">

        <?php foreach($film as $f) { ?>
        <div class="p-2 w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
            <div id="card" class="border  rounded-2xl overflow-hidden shadow-md">
                <div>
                    <img src="<?= $f["img"]?>" alt="">
                </div>
                <div class="p-5">
                    <h4 class="font-bold text-2xl text-slate-700">
                        <?= $f["judul"] ?>
                    </h4>
                    <p class="text-slate-500 mb-2">
                    <?= $f["tahun"] ?>
                    </p>
                    <p class="text-sm text-slate-600">
                    <?= $f["deskripsi"] ?>
                    </p>
                </div>
            </div>
        </div>
        <?php  } ?>
        
    </div>
    
</div>


</body>
</html>