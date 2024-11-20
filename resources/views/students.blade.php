<x-layout>
    <x-slot:title>{{$title}}</x-slot>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
        }


        h2 {
            color: #333;
            text-align: center;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f8f8f8;
            color: #333;
        }

        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tbody tr:hover {
            background-color: #e9e9e9;
        }

        button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            font-size: 16px;
        }

        button:hover {
            background-color: #0056b3;
        }

        .add-student {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 10px;
        }

        .add-student a {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>List of Students</h2>

        <div class="add-student">
            <a href="{{ route('students.create') }}">
                <button>Add Student</button>
            </a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Grade</th>
                    <th>Department</th>
                    <th>Email</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                    <tr>
                    <td class="border px-4 py-2">{{ $student -> id }}</td>
                    <td class="border px-4 py-2">{{ $student -> name }}</td>
                    <td class="border px-4 py-2">{{ optional($student->grade)->name }}</td>
                    <td class="border px-4 py-2">{{ optional($student->department)->name }}</td>
                    <td class="border px-4 py-2">{{ $student -> email }}</td>
                    <td class="border px-4 py-2">{{ $student -> address }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>

</x-layout>
