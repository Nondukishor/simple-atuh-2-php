<!DOCTYPE html>
<html>
<head>
<link href="../../asset/logcss/css.css" rel="stylesheet" type="text/css">
<link href="../../asset/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="../../asset/css/bootstrap-grid.css" rel="stylesheet" type="text/css">
    <body>
    <div class="wrapper">
        <form class="form-signin" action="../../LoginD.php">
            <h2 class="form-signin-heading">Please login</h2>
            <input type="text" class="form-control" name="username" placeholder="Email Address" required="" autofocus="" />
            <br>
            <input type="password" class="form-control" name="password" placeholder="Password" required=""/>
            <label class="checkbox">
                <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
            </label>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        </form>
    </div>
</body>
</html>
