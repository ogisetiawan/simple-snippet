<?php
/**
 * ! ### INSTALL GIT ###
 * ? add repositiry: masuk ke dalam directory yang akan di push
 * * git init 
 * ? intial git. dan menambhakan folder git (hidden)
 * ? tambahakan file .gitignore
 * ? yang berfungsi sebagai file mana saja yang akan diabaikan oleh git dalam souce control
 */

/**
 * ! ### SIMBOL GIT VS CODE
 * * U artinya Untracked adalah file yang belum pernah dimasukkan ke dalam Git (file baru).
 * * M artinya Modified adalah file yang sudah dimasukkan ke dalam database Git dan sudah pernah dimodifikasi.
 * * D artinya Deleted adalah file yang dihapus.
 * * A artinya Added adalah file yang ditambahkan ke dalam mode staged.
 */

/**
* ! ### STAGGED KE DALAM .GIT ###
* ? memasukan file atau perubahan pada resporsity ke dalam .git semestera
*/

/**
* ! ### WORKING REMOTE REPOSITORY VIA VSCODE ###
* ? buatlah sebuah repository baru pada github.
* ? copy url git
* ? masukan perintah add origin dan marge url git hasil clone 
* * git remote add origirin https://github.com/ogisetiawan/simple-snippet.git 
* ? menggunakan https;
* * git remote add origirin git@github.com:ogisetiawan/simple-snippet.git
* ? menggunakan ssh;
* todo: perbedaaan https dan ssh ssh tidak perlu login kembali
*/

/**
* !### WORKING REMOTE REPOSITORY GIT VIA CMD ###
* * git init 
* ? untuk meng-set folder yang digunakan tersebut sebagai repo local git. bisa di bilang ini instalasi git pertama kali
* * git add . / git add nama_file.php / git add folder/nama_file.php
* ? untuk menambah file project yang mau di upload sebelum di commit
* * git commit -m "first commit" 
* ? untuk menambah keterangan/status perubahaan saat upload ke repo online, 
* * git remote add origin https://github.com/ogisetiawan/simple-snippet.git
* ? untuk meng-setting remote origin dari repo online, repo online bisa dilihat pada link yang tersedia di bagian atas Project dengan format “.git”
* * git push -u origin master / git push origin master --force
* ? Perintah untuk mengupload file yang ada pada repo lokal ke repo online yang diletakkan pada branch yang sudah tersedia di repo online.
* * git pull
* ? ? Perintah untuk download file yang ada pada repo online ke repo lokal.
*/

/**
* ! ### CLONE AND PULL MY PROJECT GITHUB ###
* 
*/

/**
 * ! ### OPTIMASI RENDERING ###!
 * ? render: Jika ada javascript yang tergantung javascript lain
 * ? async: Jika Javascript indenpenden dan tidak terkait kode javascript yang lain
 * 
 */