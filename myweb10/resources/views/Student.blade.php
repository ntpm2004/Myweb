<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Danh sách học sinh</title>
</head>

<body>
    <h1>Danh sách học sinh</h1>

    <table border="1" cellpadding="8">
        <tr>
            <th>Tên</th>
            <th>Tuổi</th>
            <th>Lớp</th>
        </tr>
        @foreach ($students as $student)
        <tr>
            <td>{{ $student->name }}</td>
            <td>{{ $student->age }}</td>
            <td>{{ $student->class }}</td>
        </tr>
        @endforeach
    </table>
</body>

</html