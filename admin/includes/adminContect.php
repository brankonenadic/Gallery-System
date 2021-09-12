
<div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Blank Page
                    <small>Subheading</small>
                </h1>
                <?php  
               
                $result_set = UserClass::find_all_users();
                while ($row = mysqli_fetch_array($result_set)) {
                    $id = UserClass::get_id($row['username']);

                    echo  $id . " " . $row['first_name'] . " " . $row['last_name'] . " " . $row['username'] . "<br>";
                }
                $find = UserClass::get_user_by_id(3);
               /*  echo $user['username']; */

          /*       $user = new UserClass();
                $user->id = $find['id'];
                $user->username = $find['username'];
                $user->password = $find['password'];
                $user->first_name = $find['first_name'];
                $user->last_name = $find['last_name']; */
                echo $user->id;
                echo "<br>";
                echo $user->username;
                echo "<br>";
                echo $user->password;
                echo "<br>";
                echo $user->first_name;
                echo "<br>";
                echo $user->last_name;
                 ?>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-file"></i> Blank Page
                    </li>
                </ol>
            </div>
        </div>
<!-- /.row -->

</div>
<!-- /.container-fluid -->