<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Danh sách học sinh</title>

    <!-- ✅ Bootstrap -->
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
            margin-bottom: 30px;
        }

        .container {
            background-color: #fffafc;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 4px 15px rgba(255, 192, 203, 0.2);
        }

        .table {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(255, 182, 193, 0.3);
            background-color: #fff0f6;
        }

        thead {
            background-color: #ffb6c1;
            color: white;
        }

        th,
        td {
            vertical-align: middle !important;
            border-color: #ffe0eb !important;
        }

        tbody tr:hover {
            background-color: #ffe4ef;
            transition: background-color 0.3s ease;
        }

        .btn {
            border-radius: 20px;
            font-size: 0.9rem;
            padding: 6px 14px;
        }

        .btn-primary {
            background-color: #f472b6;
            border: none;
        }

        .btn-primary:hover {
            background-color: #ec4899;
        }

        .btn-danger {
            background-color: #fb7185;
            border: none;
        }

        .btn-danger:hover {
            background-color: #e11d48;
        }

        .btn-success {
            background-color: #86efac;
            border: none;
            color: #065f46;
        }

        .btn-success:hover {
            background-color: #4ade80;
            color: #064e3b;
        }

        .top-buttons {
            display: flex;
            justify-content: end;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1>Danh sách học sinh</h1>

        <div class="top-buttons">
            <a href="{{ url('students/add') }}" class="btn btn-success">+ Thêm học sinh</a>
        </div>

        <table class="table table-bordered text-center align-middle">
            <thead>
                <tr>
                    <th>Tên</th>
                    <th>Tuổi</th>
                    <th>Lớp</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->age }}</td>
                    <td>{{ $student->class }}</td>
                    <td>
                        <a href="{{ url('students/' . $student->id) }}" class="btn btn-primary btn-sm">
                            Sửa
                        </a>

                        <form action="{{ url('students/' . $student->id) }}" method="POST"
                            style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Bạn có chắc chắn muốn xóa học sinh này không?')">
                                Xóa
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>