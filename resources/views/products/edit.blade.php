<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa sản phẩm</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Chỉnh sửa sản phẩm</h2>

        @if($errors->any())
            <div class="alert alert-danger">{{ $errors->first() }}</div>
        @endif

        <form action="{{ route('products.update', $product['id']) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Tên sản phẩm</label>
                <input type="text" name="name" class="form-control" value="{{ $product['name'] }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Quay lại</a>
        </form>
    </div>
</body>
</html>
