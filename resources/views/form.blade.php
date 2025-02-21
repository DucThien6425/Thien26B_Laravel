<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" 
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="title">
        <h3>FORM ĐIỀN THÔNG TIN</h3>
    </div>
    <form action="" method="POST">
    @csrf
        <div class="input">
            <table>
                <tr>
                    <td>
                        <div class="input-container">
                            <i class="fa fa-user icon"></i>
                            <input class="user" name="user" id="user" type="text" placeholder="Họ tên " required>
                        </div>
                    </td>
                    <td>
                        <div class="input-container">
                            <i class="fa fa-phone icon"></i>
                            <input class="phone" name="phone" id="phone" type="text" placeholder="Di động " required>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="input-container">
                            <i class="fa fa-envelope icon"></i>
                            <input class="email" type="text" name="email" id="email" placeholder="Email" required>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="input-container">
                            <i class="fa-solid fa-tag icon"></i>
                            <input class="address" name="address" id="address" type="text" placeholder="Địa chỉ" required>
                        </div>
                    </td>
                </tr>
            </table>
            <button type="submit">Nhập</button>
        </div>
        <div>
            @include ('Blocks.error')
        </div>
        <div class="display-infor">
            @if(isset($arr))
                <p>Tên: {{ $arr['user'] }}</p>
                <p>Số điện thoại: {{ $arr['phone'] }}</p>
                <p>Email: {{ $arr['email'] }}</p>
                <p>Địa chỉ: {{ $arr['address'] }}</p>
            @endif
        </div>
    </form>
</div>
</body>
</html>