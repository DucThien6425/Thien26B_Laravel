<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Danh sách tiêu đề</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <h2 class="text-center mb-4">Danh sách tiêu đề và nội dung</h2>

        <div class="row">
            <!-- Card 1 -->
            @if(isset($data))
                 @foreach($data as $u)
                 <div class="col-md-6 mb-4">
                    <div class="card shadow">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0">{{$u['title']}}</h5>
                        </div>
                        <div class="card-body">
                            <p>{{$u['body']}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            @endif
            
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>