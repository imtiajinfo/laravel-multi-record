<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Multi Record</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
</head>
<body>
    
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                
                <div class="card-header">
                    
                </div>
                <div class="card-body">
                    <button type="button" onclick="addRecords()" class="btn btn-primary">Add New</button>
                    <form action="store" method="POST">
                        @csrf
                        <table>
                            <thead>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Purchase</th>
                                <th>Sale</th>
                            </thead>
                            <tbody id="productsTable">
                                
                            </tbody>
                        </table>
                        <input type="submit" value="Submit" class="btn btn-success">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function addRecords()
        {
            $("#productsTable").append(`
                <tr>
                    <td>
                        <input type="text" class="form-control" name="name[]">
                    </td>
                    <td>
                        <input type="number" class="form-control" name="quantity[]">
                    </td>
                    <td>
                        <input type="number" class="form-control" name="purchasePrice[]">
                    </td>
                    <td>
                        <input type="number" class="form-control" name="salePrice[]">
                    </td>
                    <td>
                        <input type="button" class="btn btn-danger removeThis" value="-">
                    </td>
                </tr>
            `);
        }

        $(document).on('click', '.removeThis', function(){
            $(this).parent().parent().remove();
        });
    </script>
</body>
</html>