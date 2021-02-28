<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>R</title>
</head>

<body>
    <!DOCTYPE html>
    <html>
    

    <body>
        <div >
            <h3>SIMPLE Registration Page</h3>
            <?php
            if (isset($_POST['register'])) {
                $ful_name = $_POST['full_name'];
                $gender = $_POST['gender'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];

                echo 'Name : ' . $ful_name .'<br>';
                echo 'Gender : ' . $gender . '<br>';
                echo 'Email : ' . $email . '<br>';
                echo 'Phone : ' . $phone;


            }

            ?>

            <div>
                <form action="" method="POST">
                    <label for="full_name">Full Name</label>
                    <input type="text" id="full_name" name="full_name" placeholder="Enter your full name" required>

                    <label for="phone">Phone number</label>
                    <input type="number" id="phone" name="phone" placeholder="Enter your Phone number" required>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>


                    <label for="gender">Gender</label>
                    <select id="gender" name="gender" required>
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>

                    </select>

                    <input type="submit" name="register" value="Register">
                </form>
            </div>
        </div>
    </body>

    </html>
