
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/sumform.css">
    <title>Form Tính Tổng</title>
</head>
<body>
    <form action="{{ route('sum.calculate') }}" method="POST">
    <h2>Nhập hai số để tính tổng</h2> 
        @csrf    <!--@csrf chứng thực submit-->
        <label for="a">Số A:</label>
        <input type="number" name="a" id="a" required>
        <br><br>
        <label for="b">Số B:</label>
        <input type="number" name="b" id="b" required>
        <br><br>
        <div class="button"><button type="submit">Tính Tổng</button></div>
        @if(isset($result))
        <h3>Kết quả: {{ $result }}</h3>
    @endif
    </form>
</body>
</html>
