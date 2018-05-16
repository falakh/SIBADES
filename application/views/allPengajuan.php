<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

    <table id="example" class="display">
        <thead>
            <tr>
                <th>id_pengauan</th>
                <th>nama</th>
                <th>Perihal</th>
                <th>Status</th>
                <th>Pesan</th>
                <th>Aksi</th>
            </tr>
        </thead>

    </table>
    <script>
        var table;
        $(document).ready(function() {
            table = $('#example').DataTable({

                searching: false,
                paging: false,
                "processing": false,
                "serverSide": false,
                "ajax": {
                    "url": "http://localhost/SIBADES/PengajuanController/AllPengajuan",
                    "type": "POST"
                },
                "columns": [{
                    "data": "id_pengajuan"
                }, {
                    "data": "nama"
                }, {
                    "data": "perihal"
                }, {
                    "data": "status"
                }, {
                    "data": "pesan"
                }, {
                    "data": null,
                    className: "center",
                    defaultContent: '<button id="acc">ACC</button><button id="tolak">Tolak</button>'

                }]
            });
            $('#example tbody').on('click', '#acc', function() {
                var data = table.row($(this).parents('tr')).data();
                $.post("http://localhost/SIBADES/PengajuanController/accPengajuan", {
                        id: data.id_pengajuan,
                    },
                    function(data, status) {
                        alert("Data: " + data + "\nStatus: " + status);
                    })
            });

            $('#example tbody').on('click', '#tolak', function() {
                var data = table.row($(this).parents('tr')).data();
                $.post("http://localhost/SIBADES/PengajuanController/tolak", {
                        id: data.id_pengajuan,
                        pesan: document.getElementById("pesan").value
                    },
                    function(data, status) {
                        alert("Data: " + data + "\nStatus: " + status);
                    })
            });
            setInterval(function() {
                table.ajax.reload();
                console.log("aa");
            }, 3000);
        });
    </script>
    <div>
        <table>
            <tr>
                <td>
                    pesan
                </td>
                <td>
                    :
                </td>
                <td>
                    <input type="textarea" name="" id="pesan">
                </td>
            </tr>
        </table>
    </div>
</body>

</html>