<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý phòng</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            border: 3px solid navy;
            width: 600px;
            padding: 15px;
            border-radius: 5px;
            margin: 200px auto;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }
        .header h2 {
            margin: 0;
        }
        .buttons {
            display: flex;
            gap: 10px;
        }
        .btn {
            padding: 8px 15px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            font-weight: bold;
        }
        .btn-red {
            background-color: red;
            color: white;
        }
        .btn-orange {
            background-color: orange;
            color: white;
            display: flex;
            align-items: center;
            gap: 5px;
        }
        .form {
            border-top: 2px solid orange;
            padding-top: 10px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .form input {
            padding: 5px;
            width: 100%;
            border: 1px solid gray;
            border-radius: 5px;
        }
        .image-upload {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 10px;
            border: 2px solid orange;
            border-radius: 5px;
            color: orange;
            cursor: pointer;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Quản lý phòng</h2>
            <div class="buttons">
                <button class="btn btn-red">Hiển Thị</button>
                <button class="btn btn-orange">
                    Thêm mới phòng &#x1F4C5;
                </button>
            </div>
        </div>
        <form action="" method="post" enctype="multipart/form-data" class="form">
            <div>
                <label for="ten-phong">Tên phòng</label>
                <input type="text" id="ten-phong" name="ten-phong" placeholder="Tên phòng">
            </div>
            <div>
                <label for="mo-ta">Mô tả phòng</label>
                <input type="text" id="mo-ta" name="mo-ta" placeholder="Mô tả phòng">
            </div>
            <div>
                <label for="gia">Giá</label>
                <input type="text" id="gia" name="gia" placeholder="Giá phòng">
            </div>
            <div class="image-upload">
                &#x1F4F7; Chọn hình ảnh
                <input type="file" name="hinh-anh" id="hinh-anh" style="display: none;">
            </div>
        </form>
    </div>
</body>
</html>
