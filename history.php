<!DOCTYPE html>
<html lang="en">
<head>
<title>Bank System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/index.css" type="text/css">
    <!-- Bootstrap CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<br>
<br>
<br>

<body>
    <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
        <div class="container">
            <a class="navbar-brand mr-auto" href="#"><img src="images/logo.png" width="50" height="41"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
           
            <div class="collapse navbar-collapse" id="Navbar">
               <ul class="navbar-nav mr-auto">
                   <li class="nav-item "><a class="nav-link" href="index.php"><i class="fa fa-home"></i> Home</a></li>
                   <li class="nav-item active"><a class="nav-link" href="viewusers.php"><i class="fa fa-info" aria-hidden="true"></i> Customers</a></li>
                   </ul>
            </div>
                            
        </div>
    </nav>

    <div class="container">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Sender</th>
                <th scope="col">Receiver</th>
                <th scope="col">Amount Transfered</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php 
                    require ("connect.php");
                    $stmt = $pdo->query("SELECT * FROM history");
                    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    if(count($rows)>0){
                        foreach($rows as $row ) { 
                ?>
                        <td><?php echo htmlentities($row['sender']); ?></td>
                        <td><?php echo htmlentities($row['receiver']); ?></td>       
                        <td><?php echo htmlentities($row['amount_trans']); ?></td>
            </tr>
                        <?php }
                    }
                        ?>
            
        </tbody>
    </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script> 
</body>
</html>    