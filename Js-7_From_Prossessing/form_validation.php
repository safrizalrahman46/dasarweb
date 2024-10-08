<!-- <!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi</title>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form method="post" action="proses_validasi.php">
        <label for="nama">Nama: </label>
        <input type="text" id="nama" name="nama"><br>

        <label for="email">Email: </label>
        <input type="text" id="email" name="email"><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html> -->

<!-- 7.2 -->
<!-- <!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm" method="post" action="proses_validasi.php">
        <label for="nama">Nama: </label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>

        <label for="email">Email: </label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>

        <input type="submit" value="Submit">
    </form>

    <script>
    $(document).ready(function() {
        $("#myForm").submit(function(event) {
            var nama = $("#nama").val();
            var email = $("#email").val();
            var valid = true;

            if (nama === "") {
                $("#nama-error").text("Nama harus diisi.");
                valid = false;
            } else {
                $("#nama-error").text("");
            }

            if (email === "") {
                $("#email-error").text("Email harus diisi.");
                valid = false;
            } else if (!validateEmail(email)) {
                $("#email-error").text("Format email tidak valid.");
                valid = false;
            } else {
                $("#email-error").text("");
            }

            if (!valid) {
                event.preventDefault(); // Menghentikan pengiriman form jika validasi gagal
            }
        });

        function validateEmail(email) {
            var re = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
            return re.test(String(email).toLowerCase());
        }
    });
    </script>
</body>
</html> -->

<!-- 7.3 -->
<!-- <!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm">
        <label for="nama">Nama: </label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>

        <label for="email">Email: </label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>

        <input type="submit" value="Submit">
    </form>
    <div id="result"></div>

    <script>
    $(document).ready(function() {
        $("#myForm").submit(function(event) {
            event.preventDefault(); // Prevent the form from submitting via the browser

            var nama = $("#nama").val();
            var email = $("#email").val();
            var valid = true;

            if (nama === "") {
                $("#nama-error").text("Nama harus diisi.");
                valid = false;
            } else {
                $("#nama-error").text("");
            }

            if (email === "") {
                $("#email-error").text("Email harus diisi.");
                valid = false;
            } else if (!validateEmail(email)) {
                $("#email-error").text("Format email tidak valid.");
                valid = false;
            } else {
                $("#email-error").text("");
            }

            if (valid) {
                $.ajax({
                    url: 'proses_validasi.php',
                    type: 'POST',
                    data: { nama: nama, email: email },
                    success: function(response) {
                        $("#result").html(response);
                    }
                });
            }
        });

        function validateEmail(email) {
            var re = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
            return re.test(String(email).toLowerCase());
        }
    });
    </script>
</body>
</html> -->

<!-- 7.4 -->
<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm">
        <label for="nama">Nama: </label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>

        <label for="email">Email: </label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>

        <label for="password">Password: </label>
        <input type="password" id="password" name="password">
        <span id="password-error" style="color: red;"></span><br>

        <input type="submit" value="Submit">
    </form>
    <div id="result"></div>

    <script>
    $(document).ready(function() {
        $("#myForm").submit(function(event) {
            event.preventDefault(); // Prevent the form from submitting via the browser

            var nama = $("#nama").val();
            var email = $("#email").val();
            var password = $("#password").val();
            var valid = true;

            if (nama === "") {
                $("#nama-error").text("Nama harus diisi.");
                valid = false;
            } else {
                $("#nama-error").text("");
            }

            if (email === "") {
                $("#email-error").text("Email harus diisi.");
                valid = false;
            } else if (!validateEmail(email)) {
                $("#email-error").text("Format email tidak valid.");
                valid = false;
            } else {
                $("#email-error").text("");
            }

            if (password.length < 8) {
                $("#password-error").text("Password harus terdiri dari minimal 8 karakter.");
                valid = false;
            } else {
                $("#password-error").text("");
            }

            if (valid) {
                $.ajax({
                    url: 'proses_validasi.php',
                    type: 'POST',
                    data: { nama: nama, email: email, password: password },
                    success: function(response) {
                        $("#result").html(response);
                    }
                });
            }
        });

        function validateEmail(email) {
            var re = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
            return re.test(String(email).toLowerCase());
        }
    });
    </script>
</body>
</html>
