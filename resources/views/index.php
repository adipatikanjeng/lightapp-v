<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="<?php echo csrf_token();?>" />
    <title>Lumen and Vuejs</title>
    <link rel="stylesheet" href="lib/bootstrap/dist/css/bootstrap.min.css" />
    <link href="app-content/app.css" rel="stylesheet" />
</head>
<body>
    <div class="jumbotron">
        <div class="container">
            <div class="col-sm-8 col-sm-offset-2">
                <div id="auth">
                    <div class="col-md-6 col-md-offset-3">
                        <h2>Login</h2>
                        <form v-on="submit: loginTask">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" v-model="email | require" placeholder="Email" require>
                            </div>

                            <div class="form-group">
                                <label for="email">Password</label>
                                <input type="password" name="password" class="form-control" v-model="password" placeholder="Password" require>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" v-model="remember" name="remember">
                                <label>Remember me</label>
                            </div>
                            <div class="form-actions">
                                <button class="btn btn-primary">Login</button>
                                <a class="btn btn-link" href="">Register</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // $.ajaxSetup({
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //     }
        // })
    </script>
    <script src="js/vue.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/app.js"></script>

</body>
</html>