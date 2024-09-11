<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #c9c1c0;
        }
        .container {
            margin-top: 50px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center text-danger">Register</h3>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="username"><b>Name</b></label>
                            <input type="text" class="form-control" id="username" placeholder="Enter your username" required>
                        </div>
                        <div class="form-group">
                            <label for="email"><b>Email</b></label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                        </div>
                        <div class="form-group">
                            <label for="password"><b>Password</b></label>
                            <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
                        </div>
                        <div class="form-group">
                            <label for="confirmPassword"><b>Confirm Password</b></label>
                            <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm your password" required>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="agreeTerms" required>
                            <label class="form-check-label" for="agreeTerms">I agree to the terms and conditions</label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
