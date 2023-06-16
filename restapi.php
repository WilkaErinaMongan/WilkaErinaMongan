<?php

require_once "koneksi.php";
if(function_exists($_GET['function'])) {
    $_GET['function']();
}

function insert_makanan(){
    global $koneksi;
    $check = array('id' => '', 'judul' => '', 'info' => ''  );
    $check_match = count(array_intersect_key($_POST, $check));
    if($check_match == count($check)) {
        $result = mysqli_query($koneksi, "INSERT INTO makanan SET
        id = '$_POST[id]',
        judul = '$_POST[judul]',
        info = '$_POST[info]'");
    
        if($result) {
            $respons = array(
                'status' => 1,
                'massage' => 'Insert Data Sukses'
            );
        }
        else {
            $respons = array(
                'status' => 0,
                'massage' => 'Gagal Insert data'
            );
        }
    }else {
            $respons = array(
                'status' => 0,
                'massage' => 'Parameter Salah'
            );
        }
    header('content-Type:application/json');
    echo json_encode($respons);
}

function get_makanan() {
    global $koneksi;
    $query = $koneksi ->query("SELECT * FROM makanan");
    while($row = mysqli_fetch_object($query)) {
        $data[] = $row;
    }
    $respons = array (
        'status' => 1,
        'massage' => 'Sukses Menampilkan Data',
        'data' => $data
    );
    header('Content-Type:aplication/json');
    echo json_encode($respons);
}

function get_makanan_id() {
    global $koneksi;
    if(!empty($_GET["id"])) {
        $id = $_GET["id"];
    }
    $query = "SELECT * FROM makanan WHERE id=$id";
    $result = $koneksi -> query($query);
    while($row = mysqli_fetch_object($result)) {
        $data[] = $row;
    }
    if($data) {
        $respons = array(
            'status' => 1,
            'massage' => 'Sukses Menampilkan Data Berdasarkan ID',
            'data' => $data
        );
    }
    else {
        $respons = array(
            'status' => 0,
            'massage' => 'Data Tidak Ditemukan'
        );
    }
    header('Content-Type:aplication/json');
    echo json_encode($respons);
}

function update_makanan() {
    global $koneksi;
    if(!empty($_GET["id"])) {
        $id = $_GET["id"];
    }
    $check = array('id' => '', 'judul'=>'', 'info' => ''  );
    $check_match = count(array_intersect_key($_POST, $check));
    if($check_match == count($check)) {
        $result = mysqli_query($koneksi, "UPDATE makanan SET
        id ='$_POST[id]', judul = '$_POST[judul]', info ='$_POST[info]' WHERE id=$id");
        if($result) {
            $respons = array (
                'status' => 1,
                'massage' => 'Update Data Berhasil'
            );
        }
        else {
            $respons = array (
                'status' => 0,
                'massage' => 'Gagal Mengupdate Data'
            );
        }
    }else{
        $respons = array (
            'status' => 0,
            'massage' => 'Gagal Mengupdate Data',
            'data' => $id
        );
    }
    header('Content-Type:aplication/json');
    echo json_encode($respons);
}

function hapus_makanan() {
    global $koneksi;
    $id = $_GET['id'];
    $query = "DELETE FROM makanan WHERE id=$id";
    if(mysqli_query($koneksi, $query)) {
        $respons = array (
            'status' => 1,
            'massage' => 'Hapus Data Berhasil'
        );
    }
    else {
        $respons = array (
            'status' => 0,
            'massage' => 'Gagal Menghapus Data'
        );
    }
    header('Content-Type:aplication/json');
    echo json_encode($respons);
}

?>