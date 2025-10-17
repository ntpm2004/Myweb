<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Thêm học sinh mới</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #ffeef8;
            font-family: 'Poppins', sans-serif;
        }

        h1 {
            color: #d63384;
            font-weight: 600;
            text-align: center;
        }

        .container {
            max-width: 600px;
            background-color: #fffafc;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 6px 20px rgba(255, 182, 193, 0.3);
        }

        .form-label {
            color: #c2185b;
            font-weight: 500;
        }

        .form-control {
            border-radius: 15px;
            border: 1px solid #f8bbd0;
            background-color: #fff0f6;
            transition: 0.3s;
        }

        .form-control:focus {
            border-color: #ec4899;
            box-shadow: 0 0 6px rgba(236, 72, 153, 0.4);
            background-color: #fff;
        }

        .btn-success {
            background-color: #f472b6;
            border: none;
            border-radius: 20px;
            padding: 8px 18px;
            font-weight: 500;
        }

        .btn-success:hover {
            background-color: #ec4899;
        }

        .btn-secondary {
            background-color: #f8bbd0;
            border: none;
            border-radius: 20px;
            padding: 8px 18px;
            color: #6b0f3b;
            font-weight: 500;
        }

        .btn-secondary:hover {
            background-color: #f48fb1;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Thêm học sinh mới</h1>

        <form action="{{ url('students/store') }}" method="POST" class="p-3">
            @csrf

            <div class="mb-3">
                <label class="form-label">Tên</label>
                <input type="text" name="name" class="form-control" placeholder="Nhập tên học sinh" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Tuổi</label>
                <input type="number" name="age" class="form-control" placeholder="Nhập tuổi" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Lớp</label>
                <input type="text" name="class" class="form-control" placeholder="Nhập lớp học" required>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-success me-2">Thêm học sinh</button>
                <a href="{{ url('students') }}" class="btn btn-secondary">Hủy</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>