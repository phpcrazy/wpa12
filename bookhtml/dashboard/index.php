<?php require "../layout/header.php";  ?>
<body>
    <!-- Body Start Here --> 
    <div class="row">
        <div class="container">
            <div class="col-md-4 col-md-offset-4" style="margin-top:100px;">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Admin Log in Area</h3>
                    </div>
                    <div class="panel-body">
                        <form accept-charset="UTF-8" role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me"> Remember Me
                                    </label>
                                </div>
                                <input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
