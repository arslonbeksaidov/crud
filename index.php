<?php
include "action.php";
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <link rel="stylesheet" href="" type="text/css"/>
    <script type="text/javascript"></script>
</head>
<body>
<div class="container">
    <div class="jumbotron">
        <h1>
            example
            <small>Arslon</small>
        </h1>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">enter txt</div>
                <div class="panel-body">
                    <?php
                    if (isset($_GET["update"])) {
                        //php 7
                        $id = $_GET["id"] ?? null;
                        $where = array("id" => $id);
                        $row = $obj->select_record("example", $where);
                        ?>
                        <form method="post" action="action.php">
                            <table class="table table-hover">
                                <tr>

                                    <td><input type="hidden" name="id" value="<?php echo $id; ?>"
                                                </td>
                                </tr>
                                <tr>
                                    <td>name</td>
                                    <td><input type="text" name="name" class="form-control" value="<?php echo $row["m_name"]; ?>"
                                               placeholder="kirit"></td>
                                </tr>
                                <tr>
                                    <td>raqam</td>
                                    <td><input type="text" name="qty" class="form-control" value="<?php echo $row["qty"]; ?>"
                                               placeholder="raqam"></td>
                                </tr>
                                <tr>
                                    <td>date</td>
                                    <td><input type="text" name="name2" class="form-control" value="<?php echo $row["date"]; ?>"
                                               placeholder="raqam"></td>
                                </tr>

                                <tr>
                                    <td colspan="2" align="center"><input type="submit" class="btn btn-primary"
                                                                          name="edit" value="Update"></td>
                                </tr>
                            </table>
                        </form>
                        <?php
                    } else {
                        ?>
                        <form method="post" action="action.php">
                            <table class="table table-hover">
                                <tr>
                                    <td>mavzu</td>
                                    <td><input type="text" class="form-control" name="name" placeholder="kirit"></td>
                                </tr>
                                <tr>
                                    <td>text</td>
                                    <td><input type="text" class="form-control" name="qty" placeholder="raqam"></td>
                                </tr>
                                <tr>
                                    <td>date</td>
                                    <td><input type="text" class="form-control" name="name2" placeholder="raqam"></td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center"><input type="submit" class="btn btn-primary"
                                                                          name="sumbit" value="store"></td>
                                </tr>
                            </table>
                        </form>

                        <?php
                    }
                    ?>

                </div>
            </div>

        </div>
        <div class="col-md-3"></div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <table class="table table-bordered">
                <tr>
                    <th>#</th>
                    <th>name</th>
                    <th>aviable stock</th>
                    <th>date</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                </tr>
                <?php
                $myrow = $obj->fetch_record("example");
                foreach ($myrow as $row) {
                    ?>
                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["m_name"]; ?></td>
                        <td><b><?php echo $row["qty"]; ?></b></td>
                        <td><b><?php echo $row["date"]; ?></b></td>

                        <td><a href="index.php?update=1&id=<?php echo $row["id"];?>" class="btn btn-info">edit</a></td>
                        <td><a href="index.php?delete=1&id=<?php echo $row["id"];?>" class="btn btn-danger">delete</a></td>
                    </tr>
                    <?php
                }
                ?>


            </table>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
</body>
</html>