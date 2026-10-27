<?php
include 'admin/db_connect.php';

// Check connection
if (!$conn) {
    die("Error connecting to database");
}

// 1. Clear old airlines and insert Yemenia
$conn->query("TRUNCATE TABLE airlines_list");
$conn->query("INSERT INTO airlines_list (id, airlines, logo_path) VALUES (1, 'الخطوط الجوية اليمنية (Yemenia)', 'Yemenia_Logo_Transparent_400x400.png')");

// 2. Update flights to point to airline 1
$conn->query("UPDATE flight_list SET airline_id = 1");
$conn->query("UPDATE flight_list SET plane_no = 'IY-601' WHERE id = 1");
$conn->query("UPDATE flight_list SET plane_no = 'IY-602' WHERE id = 2");
$conn->query("UPDATE flight_list SET plane_no = 'IY-800' WHERE id = 3");
$conn->query("UPDATE flight_list SET plane_no = 'IY-705' WHERE id = 4");

?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>تحديث شركة الطيران والشعار</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: #f4f6f9; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .card { background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); text-align: center; max-width: 480px; }
        .logo { width: 140px; height: 140px; object-fit: contain; margin-bottom: 20px; }
        h2 { color: #28a745; margin: 10px 0; }
        p { color: #555; line-height: 1.6; }
        .btn { display: inline-block; background: #007bff; color: white; padding: 10px 20px; text-decoration: none; border-radius: 6px; margin-top: 15px; font-weight: bold; }
        .btn:hover { background: #0056b3; }
    </style>
</head>
<body>
    <div class="card">
        <img src="assets/img/Yemenia_Logo_Transparent_400x400.png" alt="Yemenia Logo" class="logo">
        <h2>تم تحديث شركة الطيران بنجاح!</h2>
        <p>تم اعتماد <strong>الخطوط الجوية اليمنية (Yemenia)</strong> وحذف الشركات القديمة وربط كافة الرحلات بالشعار الجديد.</p>
        <a href="index.php" class="btn">الذهاب للموقع الرئيسي</a>
        <a href="admin/index.php" class="btn" style="background:#6c757d;">لوحة التحكم</a>
    </div>
</body>
</html>
