<?php
    $pdo = include "koneksi.php";
    //dapatkan data user dari form register
    $user = [
    	'nama' => $_POST['nama'],
    	'email' => $_POST['email'],
    	'ttl' => $_POST['ttl'],
    	'alamat' => $_POST['alamat'],
    ];
    $data = array($user['nama'],$user['ttl'],$user['alamat'], $user['email']);
    $query = "insert into user (nama, tgl_lahir, alamat, email) values  (?,?,?,?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute($data);
    
	header("Location: menu.html");
    ?>