<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bank System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/index.css" type="text/css">

    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
    <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
        <div class="container">
            <a class="navbar-brand mr-auto" href="#"><img src="images/logo.jpg" width="50" height="41"></a>
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


    <div>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">User Id</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Balance</th>
                <th scope="col">View</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php
            require ("connect.php");
            $stmt = $pdo->query("SELECT * FROM users");
            // set the resulting array to associative
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if(count($rows)>0){
                foreach($rows as $row){ ?>
        
                    <th scope="row"><?php echo $row['user_id'] ?></th>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['balance'] ?></td>
                    <td><button><?php  echo('<a href="profile.php?user_id='.$row['user_id'].'">'."View".'</a> ');
                    ?></button></td>
                    <br>
                    </tr>
            <?php }
            }?>

            
        </tbody>
    </table>
    </div>    
</body>
</html>