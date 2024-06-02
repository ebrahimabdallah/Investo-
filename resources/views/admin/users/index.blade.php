@extends('admin.layouts.app')
@section('content')

<title>جدول بسيط</title>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        border: 1px solid #dddddd;
        padding: 8px;
    }

    th {
        background-color: #f2f2f2;
    }

    h2 {
        text-align: center;
    }
</style>

<h2>Posts</h2>

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>first name </th>
            <th>last name</th>
                 <th>Operations</th>
 
         </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->l_name }}</td>
                <td>{{ $user->f_name }}</td>
                 <td><button class="btn btn-primary">Action</button></td>
                  
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
