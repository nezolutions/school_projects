<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supplier - EDIT</title>
</head>
<style>
    td:first-child {width: 160px;}
</style>
<body>
    <center style="margin-top: 20%">
        <table>
            <form method="POST" action="{{url('bloking/supplier/edit_sup')}}/{{$id}}">
                @csrf
                @method('put')
                <tr>
                    <td>
                        <label>Nama Supplier</label>
                    </td>
                    <td>
                        <input type="text" name="namaSupplier" value="{{$namaSupplier}}" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Alamat Supplier</label>
                    </td>
                    <td>
                        <input type="text" name="alamatSupplier" value="{{$alamatSupplier}}" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Telp Supplier</label>
                    </td>
                    <td>
                        <input type="text" name="telpSupplier" value="{{$telpSupplier}}" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="{{url('bloking/supplier/')}}">Cancel</a>
                    </td>
                    <td>
                        <input type="submit" name="save" value="Save">
                        <input type="reset" name="reset" value="Reset">
                    </td>
                </tr>
            </form>
        </table>
    </center>
</body>
</html>