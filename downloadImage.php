<?php

// Mảng chứa tên các hình ảnh và URL tương ứng
$images = [
    "login.png" => "https://tse4.mm.bing.net/th?id=OIP.RAZJigrDViiKFJ6eIR1I0gHaHa&pid=Api&P=0&h=180", // Add URL for login.png
    "search-icon.png" => "https://tse3.mm.bing.net/th?id=OIP._RTO9yp1xH5aQA0vS7fpHAHaHW&pid=Api&P=0&h=180", // Add URL for seach-icon.png
    "savani-logo.png" => "https://tse1.mm.bing.net/th?id=OIP.7JOH_q_p5F5uUnCy1bauzAHaEC&pid=Api&P=0&h=180",
    "cart-icon.png" => "https://tse4.mm.bing.net/th?id=OIP.eigxI83-OFKQKZJZSoHaKwHaHa&pid=Api&P=0&h=180",
    "user-icon.png" => "https://tse2.mm.bing.net/th?id=OIP.Crq9sn3Qu3HyHwPJi2zW8QHaHa&pid=Api&P=0&h=180",
    "baohanh-icon.png" => "https://tse3.mm.bing.net/th?id=OIP.pIuMciKLcAOJ6cOcvciUBAHaHa&pid=Api&P=0&h=180",   
    "visa-icon.png" => "https://tse4.mm.bing.net/th?id=OIP.IuIHY-f7cXScwOly97NecAHaHa&pid=Api&P=0&h=180",
    "facebook-icon.png" => "https://tse2.mm.bing.net/th?id=OIP.T5VrbJ6XosfdUtseiJrgVwHaHa&pid=Api&P=0&h=180",
    "youtube-icon.png" => "https://tse2.mm.bing.net/th?id=OIP.T5VrbJ6XosfdUtseiJrgVwHaHa&pid=Api&P=0&h=180",
    "instagram-icon.png" => "https://static.vecteezy.com/system/resources/previews/012/493/083/non_2x/instagram-logo-3d-illustration-free-png.png",
    "zalo-icon.png" => "https://tse3.mm.bing.net/th?id=OIP.92GkHrmR211foCNYsQDCzgHaHJ&pid=Api&P=0&h=180",
    "lazada-icon.png" => "https://tse3.mm.bing.net/th?id=OIP.92GkHrmR211foCNYsQDCzgHaHJ&pid=Api&P=0&h=180",





   ];

// Đảm bảo rằng thư mục images trong public đã tồn tại
$imageFolder = 'images';
if (!file_exists($imageFolder)) {
    mkdir($imageFolder, 0777, true);  // Tạo thư mục images nếu chưa tồn tại
}

// Duyệt qua mảng và tải từng hình ảnh
foreach ($images as $filename => $url) {
    // Lấy dữ liệu hình ảnh từ URL
    $imageData = file_get_contents($url);

    if ($imageData) {
        // Lưu hình ảnh vào thư mục public/images
        file_put_contents($imageFolder . '/' . $filename, $imageData);
        echo "Hình ảnh $filename đã được lưu vào thư mục $imageFolder!<br>";
    } else {
        echo "Không thể tải hình ảnh từ URL: $url<br>";
    }
}
?>
