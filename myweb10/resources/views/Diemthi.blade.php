<table border="1" cellpadding="6">
    <thead>
        <tr>
            <th>Học sinh</th>
            <th>Môn</th>
            <th>Điểm</th>
        </tr>
    </thead>
    <tbody>
        @foreach($marks as $mark)
            <tr>
                <td>{{ $students[$mark['student_id']]['name'] ?? 'Không rõ' }}</td>
                <td>{{ $mark['subject'] }}</td>
                <td>{{ $mark['score'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>