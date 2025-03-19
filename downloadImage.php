<?php

// Mảng chứa tên các hình ảnh và URL tương ứng
$images = [
    "savani-logo.png" => "https://scontent-hkg4-2.xx.fbcdn.net/v/t39.30808-6/484812960_122115892238755481_7281440840027844372_n.jpg?stp=dst-jpg_p600x600_tt6&_nc_cat=111&ccb=1-7&_nc_sid=aa7b47&_nc_eui2=AeF8TGwqev02BKUIXDNXDrY1dKAC4vYnePF0oALi9id48VMS36N2FcojUn1ttWDaESligD4X22XnJ0b4E8isvckX&_nc_ohc=HZ3WwZcJ3LgQ7kNvgFgZ0zH&_nc_oc=AdhcImoPxd5tHLUju2JhOoJ0qkqXCLLLmk7CHlWTTKsknqg6QwrIUq6VpdrL3V4qM8k&_nc_zt=23&_nc_ht=scontent-hkg4-2.xx&_nc_gid=ZqKj4o4m1bLwDaQtSQsvyw&oh=00_AYGSPflFQmAnTDdfvM9qJqd4v5sI2h4UCEqxSoQrAhwyeg&oe=67DEEEBB",
    "cart-icon.png" => "https://scontent-hkg4-2.xx.fbcdn.net/v/t39.30808-6/484812960_122115892238755481_7281440840027844372_n.jpg?stp=dst-jpg_p600x600_tt6&_nc_cat=111&ccb=1-7&_nc_sid=aa7b47&_nc_eui2=AeF8TGwqev02BKUIXDNXDrY1dKAC4vYnePF0oALi9id48VMS36N2FcojUn1ttWDaESligD4X22XnJ0b4E8isvckX&_nc_ohc=HZ3WwZcJ3LgQ7kNvgFgZ0zH&_nc_oc=AdhcImoPxd5tHLUju2JhOoJ0qkqXCLLLmk7CHlWTTKsknqg6QwrIUq6VpdrL3V4qM8k&_nc_zt=23&_nc_ht=scontent-hkg4-2.xx&_nc_gid=ZqKj4o4m1bLwDaQtSQsvyw&oh=00_AYGSPflFQmAnTDdfvM9qJqd4v5sI2h4UCEqxSoQrAhwyeg&oe=67DEEEBB",
    "user-icon.png" => "https://scontent-hkg4-2.xx.fbcdn.net/v/t39.30808-6/484812960_122115892238755481_7281440840027844372_n.jpg?stp=dst-jpg_p600x600_tt6&_nc_cat=111&ccb=1-7&_nc_sid=aa7b47&_nc_eui2=AeF8TGwqev02BKUIXDNXDrY1dKAC4vYnePF0oALi9id48VMS36N2FcojUn1ttWDaESligD4X22XnJ0b4E8isvckX&_nc_ohc=HZ3WwZcJ3LgQ7kNvgFgZ0zH&_nc_oc=AdhcImoPxd5tHLUju2JhOoJ0qkqXCLLLmk7CHlWTTKsknqg6QwrIUq6VpdrL3V4qM8k&_nc_zt=23&_nc_ht=scontent-hkg4-2.xx&_nc_gid=ZqKj4o4m1bLwDaQtSQsvyw&oh=00_AYGSPflFQmAnTDdfvM9qJqd4v5sI2h4UCEqxSoQrAhwyeg&oe=67DEEEBB",
    "baohanh-icon.png" => "https://scontent-hkg4-2.xx.fbcdn.net/v/t39.30808-6/484812960_122115892238755481_7281440840027844372_n.jpg?stp=dst-jpg_p600x600_tt6&_nc_cat=111&ccb=1-7&_nc_sid=aa7b47&_nc_eui2=AeF8TGwqev02BKUIXDNXDrY1dKAC4vYnePF0oALi9id48VMS36N2FcojUn1ttWDaESligD4X22XnJ0b4E8isvckX&_nc_ohc=HZ3WwZcJ3LgQ7kNvgFgZ0zH&_nc_oc=AdhcImoPxd5tHLUju2JhOoJ0qkqXCLLLmk7CHlWTTKsknqg6QwrIUq6VpdrL3V4qM8k&_nc_zt=23&_nc_ht=scontent-hkg4-2.xx&_nc_gid=ZqKj4o4m1bLwDaQtSQsvyw&oh=00_AYGSPflFQmAnTDdfvM9qJqd4v5sI2h4UCEqxSoQrAhwyeg&oe=67DEEEBB",
    "visa-icon.png" => "https://scontent-hkg4-2.xx.fbcdn.net/v/t39.30808-6/484812960_122115892238755481_7281440840027844372_n.jpg?stp=dst-jpg_p600x600_tt6&_nc_cat=111&ccb=1-7&_nc_sid=aa7b47&_nc_eui2=AeF8TGwqev02BKUIXDNXDrY1dKAC4vYnePF0oALi9id48VMS36N2FcojUn1ttWDaESligD4X22XnJ0b4E8isvckX&_nc_ohc=HZ3WwZcJ3LgQ7kNvgFgZ0zH&_nc_oc=AdhcImoPxd5tHLUju2JhOoJ0qkqXCLLLmk7CHlWTTKsknqg6QwrIUq6VpdrL3V4qM8k&_nc_zt=23&_nc_ht=scontent-hkg4-2.xx&_nc_gid=ZqKj4o4m1bLwDaQtSQsvyw&oh=00_AYGSPflFQmAnTDdfvM9qJqd4v5sI2h4UCEqxSoQrAhwyeg&oe=67DEEEBB",
    "facebook-icon.png" => "https://scontent-hkg4-2.xx.fbcdn.net/v/t39.30808-6/484812960_122115892238755481_7281440840027844372_n.jpg?stp=dst-jpg_p600x600_tt6&_nc_cat=111&ccb=1-7&_nc_sid=aa7b47&_nc_eui2=AeF8TGwqev02BKUIXDNXDrY1dKAC4vYnePF0oALi9id48VMS36N2FcojUn1ttWDaESligD4X22XnJ0b4E8isvckX&_nc_ohc=HZ3WwZcJ3LgQ7kNvgFgZ0zH&_nc_oc=AdhcImoPxd5tHLUju2JhOoJ0qkqXCLLLmk7CHlWTTKsknqg6QwrIUq6VpdrL3V4qM8k&_nc_zt=23&_nc_ht=scontent-hkg4-2.xx&_nc_gid=ZqKj4o4m1bLwDaQtSQsvyw&oh=00_AYGSPflFQmAnTDdfvM9qJqd4v5sI2h4UCEqxSoQrAhwyeg&oe=67DEEEBB",
    "youtube-icon.png" => "https://scontent-hkg4-2.xx.fbcdn.net/v/t39.30808-6/484812960_122115892238755481_7281440840027844372_n.jpg?stp=dst-jpg_p600x600_tt6&_nc_cat=111&ccb=1-7&_nc_sid=aa7b47&_nc_eui2=AeF8TGwqev02BKUIXDNXDrY1dKAC4vYnePF0oALi9id48VMS36N2FcojUn1ttWDaESligD4X22XnJ0b4E8isvckX&_nc_ohc=HZ3WwZcJ3LgQ7kNvgFgZ0zH&_nc_oc=AdhcImoPxd5tHLUju2JhOoJ0qkqXCLLLmk7CHlWTTKsknqg6QwrIUq6VpdrL3V4qM8k&_nc_zt=23&_nc_ht=scontent-hkg4-2.xx&_nc_gid=ZqKj4o4m1bLwDaQtSQsvyw&oh=00_AYGSPflFQmAnTDdfvM9qJqd4v5sI2h4UCEqxSoQrAhwyeg&oe=67DEEEBB",
    "instagram-icon.png" => "https://scontent-hkg4-2.xx.fbcdn.net/v/t39.30808-6/484812960_122115892238755481_7281440840027844372_n.jpg?stp=dst-jpg_p600x600_tt6&_nc_cat=111&ccb=1-7&_nc_sid=aa7b47&_nc_eui2=AeF8TGwqev02BKUIXDNXDrY1dKAC4vYnePF0oALi9id48VMS36N2FcojUn1ttWDaESligD4X22XnJ0b4E8isvckX&_nc_ohc=HZ3WwZcJ3LgQ7kNvgFgZ0zH&_nc_oc=AdhcImoPxd5tHLUju2JhOoJ0qkqXCLLLmk7CHlWTTKsknqg6QwrIUq6VpdrL3V4qM8k&_nc_zt=23&_nc_ht=scontent-hkg4-2.xx&_nc_gid=ZqKj4o4m1bLwDaQtSQsvyw&oh=00_AYGSPflFQmAnTDdfvM9qJqd4v5sI2h4UCEqxSoQrAhwyeg&oe=67DEEEBB",
    "zalo-icon.png" => "https://scontent-hkg4-2.xx.fbcdn.net/v/t39.30808-6/484812960_122115892238755481_7281440840027844372_n.jpg?stp=dst-jpg_p600x600_tt6&_nc_cat=111&ccb=1-7&_nc_sid=aa7b47&_nc_eui2=AeF8TGwqev02BKUIXDNXDrY1dKAC4vYnePF0oALi9id48VMS36N2FcojUn1ttWDaESligD4X22XnJ0b4E8isvckX&_nc_ohc=HZ3WwZcJ3LgQ7kNvgFgZ0zH&_nc_oc=AdhcImoPxd5tHLUju2JhOoJ0qkqXCLLLmk7CHlWTTKsknqg6QwrIUq6VpdrL3V4qM8k&_nc_zt=23&_nc_ht=scontent-hkg4-2.xx&_nc_gid=ZqKj4o4m1bLwDaQtSQsvyw&oh=00_AYGSPflFQmAnTDdfvM9qJqd4v5sI2h4UCEqxSoQrAhwyeg&oe=67DEEEBB",
    "lazada-icon.png" => "https://scontent-hkg4-2.xx.fbcdn.net/v/t39.30808-6/484812960_122115892238755481_7281440840027844372_n.jpg?stp=dst-jpg_p600x600_tt6&_nc_cat=111&ccb=1-7&_nc_sid=aa7b47&_nc_eui2=AeF8TGwqev02BKUIXDNXDrY1dKAC4vYnePF0oALi9id48VMS36N2FcojUn1ttWDaESligD4X22XnJ0b4E8isvckX&_nc_ohc=HZ3WwZcJ3LgQ7kNvgFgZ0zH&_nc_oc=AdhcImoPxd5tHLUju2JhOoJ0qkqXCLLLmk7CHlWTTKsknqg6QwrIUq6VpdrL3V4qM8k&_nc_zt=23&_nc_ht=scontent-hkg4-2.xx&_nc_gid=ZqKj4o4m1bLwDaQtSQsvyw&oh=00_AYGSPflFQmAnTDdfvM9qJqd4v5sI2h4UCEqxSoQrAhwyeg&oe=67DEEEBB",
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
