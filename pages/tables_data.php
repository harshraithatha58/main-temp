<?php
require './_init.php';
if (isset($_GET['accept'])) {
  $sno = $_GET['accept'];
  $accept = true;
  $sql = "INSERT INTO `admin` (`username`, `email`, `password`) VALUES ('$FullName', '$eMail','$hashedPassword' )";
  $result = mysqli_query($conn, $sql);
}
if (isset($_GET['delete'])) {
  $eMail = $_GET['delete'];
  $delete = true;
  $sql = "DELETE FROM `user` WHERE `email` = $eMail";
  $result = mysqli_query($conn, $sql);
}

?>

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>AdminX - Data Tables</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" type="text/css" href="../assets/css/adminx.css" media="screen" />
</head>

<body>
  <div class="adminx-container">
    <!-- Header -->
    <nav class="navbar navbar-expand justify-content-between fixed-top">
      <a class="navbar-brand mb-0 h1 d-none d-md-block" href="dash_index.html">
        <img src="../assets/images/logo.png" class="navbar-brand-image d-inline-block align-top mr-2" alt="">
        AdminX
      </a>

      <form class="form-inline form-quicksearch d-none d-md-block mx-auto">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-icon">
              <i data-feather="search"></i>
            </div>
          </div>
          <input type="text" class="form-control" id="search" placeholder="Type to search...">
        </div>
      </form>

      <div class="d-flex flex-1 d-block d-md-none">
        <a href="#" class="sidebar-toggle ml-3">
          <i data-feather="menu"></i>
        </a>
      </div>

      <ul class="navbar-nav d-flex justify-content-end mr-2">
        <!-- Notificatoins -->
        <li class="nav-item dropdown d-flex align-items-center mr-2">
          <a class="nav-link nav-link-notifications" id="dropdownNotifications" data-toggle="dropdown" href="#">
            <i class="oi oi-bell display-inline-block align-middle"></i>
            <span class="nav-link-notification-number">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-menu-notifications" aria-labelledby="dropdownNotifications">
            <div class="notifications-header d-flex justify-content-between align-items-center">
              <span class="notifications-header-title">
                Notifications
              </span>
              <a href="#" class="d-flex"><small>Mark all as read</small></a>
            </div>

            <div class="list-group">
              <a href="#" class="list-group-item list-group-item-action unread">
                <p class="mb-1">Invitation for <strong>Lunch</strong> on <strong>Jan 12th 2018</strong> by <strong>Laura</strong></p>

                <div class="mb-1">
                  <button type="button" class="btn btn-primary btn-sm">Accept invite</button>
                  <button type="button" class="btn btn-outline-danger btn-sm">Decline</button>
                </div>

                <small>1 hour ago</small>
              </a>

              <a href="#" class="list-group-item list-group-item-action">
                <p class="mb-1"><strong class="text-success">Goal completed</strong><br />1,000 new members today</p>
                <small>3 days ago</small>
              </a>

              <a href="#" class="list-group-item list-group-item-action">
                <p class="mb-1 text-danger"><strong>System error detected</strong></p>
                <small>3 days ago</small>
              </a>

              <a href="#" class="list-group-item list-group-item-action">
                <p class="mb-1">Your task <strong>Design Draft</strong> is due today.</p>
                <small>4 days ago</small>
              </a>
            </div>

            <div class="notifications-footer text-center">
              <a href="#"><small>View all notifications</small></a>
            </div>
          </div>
        </li>
        <!-- Notifications -->
        <li class="nav-item dropdown">
          <a class="nav-link avatar-with-name" id="navbarDropdownMenuLink" data-toggle="dropdown" href="#">
            <img src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/128.jpg" class="d-inline-block align-top" alt="">
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">My Profile</a>
            <a class="dropdown-item" href="#">My Tasks</a>
            <a class="dropdown-item" href="#">Settings</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item text-danger" href="#">Sign out</a>
          </div>
        </li>
      </ul>
    </nav>
    <!-- // Header -->

    <!-- Sidebar -->
    <div class="adminx-sidebar expand-hover push">
      <ul class="sidebar-nav">
        <li class="sidebar-nav-item">
          <a href="dash_index.html" class="sidebar-nav-link">
            <span class="sidebar-nav-icon">
              <i data-feather="home"></i>
            </span>
            <span class="sidebar-nav-name">
              Dashboard
            </span>
            <span class="sidebar-nav-end">

            </span>
          </a>
        </li>

        <li class="sidebar-nav-item">
          <a href="tables.html" class="sidebar-nav-link">
            <span class="sidebar-nav-abbr">
              F
            </span>
            <span class="sidebar-nav-name">
              Regular Tables
            </span>
          </a>
        </li>

        <li class="sidebar-nav-item">
          <a href="tables_data.php" class="sidebar-nav-link active">
            <span class="sidebar-nav-abbr">
              F
            </span>
            <span class="sidebar-nav-name">
              Data Tables
            </span>
          </a>
        </li>
        <li class="sidebar-nav-item">
          <a href="404.html" class="sidebar-nav-link">
            <span class="sidebar-nav-abbr">
              f
            </span>
            <span class="sidebar-nav-name">
              404 Error
            </span>
          </a>
        </li>

        <li class="sidebar-nav-item">
          <a href="500.html" class="sidebar-nav-link">
            <span class="sidebar-nav-abbr">
              f
            </span>
            <span class="sidebar-nav-name">
              500 Error
            </span>
          </a>
        </li>
      </ul>
      </li>
      </ul>
    </div><!-- Sidebar End -->

    <!-- Main Content -->
    <div class="adminx-content">
      <div class="adminx-main-content">
        <div class="container-fluid">
          <!-- BreadCrumb -->
          <div class="pb-3">
            <h1>Data Tables</h1>
          </div>

          <div class="row">
            <div class="col">
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="card mb-grid">
                <div class="table-responsive-md">
                  <table class="table table-actions table-striped table-hover mb-0" data-table>
                    <thead>
                      <tr>
                        <th scope="col">
                          <label class="custom-control custom-checkbox m-0 p-0">
                            <input type="checkbox" class="custom-control-input table-select-all">
                            <span class="custom-control-indicator"></span>
                          </label>
                        </th>
                        <th scope="col">sr no</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">description</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">
                          <label class="custom-control custom-checkbox m-0 p-0">
                            <input type="checkbox" class="custom-control-input table-select-row">
                            <span class="custom-control-indicator"></span>
                          </label>
                        </th>
                        <td> </td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>
                          <span class="badge badge-pill badge-primary">Admin</span>
                        </td>
                        <td>
                          <button class="btn btn-sm btn-primary" name="accept">Edit</button>
                          <button class="btn btn-sm btn-danger" name="delete">Delete</button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">
                          <label class="custom-control custom-checkbox m-0 p-0">
                            <input type="checkbox" class="custom-control-input table-select-row">
                            <span class="custom-control-indicator"></span>
                          </label>
                        </th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>
                          <span class="badge badge-pill badge-primary">Author</span>
                          <span class="badge badge-pill badge-primary">Developer</span>
                        </td>
                        <td>
                          <button class="btn btn-sm btn-primary">Edit</button>
                          <button class="btn btn-sm btn-danger">Delete</button>
                        </td>
                      </tr>
                        
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- // Main Content -->
  </div>

  <!-- If you prefer jQuery these are the required scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  <script src="../assets/js/vendor.js"></script>
  <script src="../assets/js/adminx.js"></script>

  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script>
    $(document).ready(function() {
      var table = $('[data-table]').DataTable({
        "columns": [
          null,
          null,
          null,
          null,
          null,
          {
            "orderable": false
          }
        ]
      });

      /* $('.form-control-search').keyup(function(){
        table.search($(this).val()).draw() ;
      }); */
    });
  </script>
  <!-- If you prefer vanilla JS these are the only required scripts -->
  <!-- script src="../dist/js/vendor.js"></script>
    <script src="../dist/js/adminx.vanilla.js"></script-->
</body>

</html>