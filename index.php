<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>jQuery Datatable Ajax PHP</title>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>


    
    <script type="text/javascript">
        $(document).ready(function() {
            $('#jquery-datatable-ajax-php').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ],
                'processing': true, 
                'serverSide': true,
                'serverMethod': 'post',
                'ajax': {
                    'url':'datatable.php'
                },
                'columns': [
                    { data: 'masach' },
                    { data: 'tensach' },
                    { data: 'mota' },
                    { data: 'gia' },
                    { data: 'hinh' },
                    { data: 'manxb' },
                    { data: 'maloai' },
                ]
           });

        } );


        $(document).ready(function() {
        $('#jquery-datatable-ajax-php').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            } );
        } );
            
    </script>
</head>
<body>



    <table id="jquery-datatable-ajax-php" class="display" style="width:100%">
        <thead>
            <tr>
                <th>M?? S??ch</th>
                <th>T??n S??ch</th>
                <th>M?? t???</th>
                <th>Gi??</th>
                <th>H??nh</th>
                <th>M?? Nh?? Xu???t B???n</th>
                <th>M?? Lo???i</th>
            </tr>
        </thead>
    </table>
    

</body>
</html>