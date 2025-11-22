<?php
header("Content-Type: application/json");

// استقبل البيانات الخام
$data = file_get_contents("php://input");

// إذا فاضي → رجّع خطأ
if (!$data) {
    echo json_encode(["status" => "error", "msg" => "No data received"]);
    exit;
}

// اكتب داخل ملف ads.json
file_put_contents("ads.json", $data);

// تأكيد
echo json_encode(["status" => "success"]);
?>
