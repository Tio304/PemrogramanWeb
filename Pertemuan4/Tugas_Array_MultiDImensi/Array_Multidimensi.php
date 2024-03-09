<?php
$photos = array(
    array(

        'image' => '../img/gumball watterson.jpeg',
        'nama' => 'Gumball',
        'nim' => '2241769999',
        'jurusan' => 'Teknik Lawak',
        'email' => 'Gumball.gum@gmail.com'
    ),
    array(
        'image' => '../img/darwin.jpeg',
        'nama' => 'Darwin',
        'nim' => '2241769998',
        'jurusan' => 'Pengairan',
        'email' => 'Darwin.gum@gmail.com'
    ),
    array(
        'image' => '../img/bob.jpeg',
        'nama' => 'Bobki',
        'nim' => '8796450494',
        'jurusan' => 'Teknik Fotografi',
        'email' => 'Bobki.CAt@gmail.com'
    ),
    array(
        'image' => '../img/clarkson.jpeg',
        'nama' => 'CLarkson',
        'nim' => '7827585720',
        'jurusan' => 'Bisnis Otomotif',
        'email' => 'Clark.one@gmail.com'
    ),
    array(
        'image' => '../img/hunt.jpeg',
        'nama' => 'Hunt',
        'nim' => '458724025',
        'jurusan' => 'Perbalapan',
        'email' => 'James.Hunt@gmail.com'
    ),
);

foreach ($photos as $photo) {
    echo "<li><img src='img/" . $photo['image'] . "' alt='Photo' width='200' height='150'></li>";
    echo "<li>Nama: " . $photo['nama'] . "</li>";
    echo "<li>NIM: " . $photo['nim'] . "</li>";
    echo "<li>Jurusan: " . $photo['jurusan'] . "</li>";
    echo "<li>Email: " . $photo['email']. "</li>";
    echo "<br>";
}