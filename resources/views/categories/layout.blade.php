
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css"/>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css"/>

</head>


<body>
    
<div class="container pt-5 mt-5">
    @yield('content')


    </div>

<br>       
 <scrip src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></scrip>
    <script src="https://code.jquery.com/jquery-3.5.1.js"> </script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
   

      <script>$(document).ready(function () {
       $('#example').DataTable();
      });
      </script>

</body>
</html>