<?php
// Bağlantı parametreleri
$serverName = "localhost"; // Veya server IP adresi
$connectionOptions = array(
    "Database" => "user_database",
    "Uid" => "raul", // SQL Server kullanıcı adı
    "PWD" => "raul1984"  // SQL Server şifresi
);

// Bağlantı oluşturma
$conn = sqlsrv_connect($serverName, $connectionOptions);

// Bağlantı kontrolü
if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}

// Bağlantı başarılı mesajı
echo "Bağlantı başarılı!";
?>
