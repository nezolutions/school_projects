<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supplier - DASHBOARD</title>
</head>
<style>
    table { border-collapse: collapse;}
    th:first-child {width: 80px;}
    th {width: 160px;} 
    .btn {width: 100%; max-width: 736px; display: flex; justify-content: space-between;} 
    button {margin: 2px;}
</style>
<body>
    <center style="margin-top: 20%">
        <div class="btn">
            <a href="{{url('/bloking')}}" style="text-decoration: none">
                <button>Back</button>
            </a>
            <a href="{{url('/bloking/supplier/add_supplier')}}" style="text-decoration: none">
                <button style="margin-bottom: 5px">Add</button>
            </a>
        </div>
        <table border="1">
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>ALAMAT</th>
                <th>TELEPON</th>
                <th>OPSI</th>   
            </tr>
            @php $no = 1 @endphp
            @forelse ($supplier as $row)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$row->namaSupplier}}</td>
                <td>{{$row->alamatSupplier}}</td>
                <td>{{$row->telpSupplier}}</td>
                <td>
                    <a href="{{url('bloking/supplier/update_sup')}}/{{$row->id}}" style="display: inline-block">
                        <input type="button" value="Edit" />
                    </a>
                    <form action="{{url('bloking/supplier/delete_sup')}}/{{$row->id}}" method="POST" style="display: inline-block">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete" onclick="return confirm('Apakah Anda yakin ingin menghapus?')" />
                    </form>
                </td>
            </tr>
            @empty
                <h1>DATA NYA MANA LOL</h1>
            @endforelse
        </table>
    </center>
</body>
</html>