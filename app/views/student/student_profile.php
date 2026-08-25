```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f4f6f8;
            min-height: 100vh;
        }

        .navbar {
            background-color: #2c3e50;
            color: white;
            padding: 18px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar h2 {
            font-size: 24px;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            background-color: #3498db;
            padding: 10px 18px;
            border-radius: 5px;
        }

        .navbar a:hover {
            background-color: #2980b9;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
        }

        .profile-card {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .profile-header {
            background-color: #3498db;
            color: white;
            text-align: center;
            padding: 35px;
        }

        .profile-header h1 {
            margin-bottom: 8px;
        }

        .profile-header p {
            font-size: 16px;
        }

        .profile-info {
            padding: 30px 40px;
        }

        .info-row {
            display: flex;
            border-bottom: 1px solid #eee;
            padding: 15px 0;
        }

        .info-label {
            width: 180px;
            font-weight: bold;
            color: #2c3e50;
        }

        .info-value {
            flex: 1;
            color: #555;
        }

        .back-button {
            display: inline-block;
            margin-top: 25px;
            background-color: #2c3e50;
            color: white;
            text-decoration: none;
            padding: 12px 22px;
            border-radius: 6px;
        }

        .back-button:hover {
            background-color: #1f2d3a;
        }

        @media (max-width: 600px) {
            .navbar {
                padding: 15px 20px;
            }

            .container {
                margin: 20px auto;
            }

            .profile-info {
                padding: 20px;
            }

            .info-row {
                display: block;
            }

            .info-label {
                width: 100%;
                margin-bottom: 5px;
            }
        }
    </style>
</head>

<body>

    <div class="navbar">
        <h2>Student Portal</h2>
        <a href="<?= site_url('student') ?>">Home</a>
    </div>

    <div class="container">

        <div class="profile-card">

            <div class="profile-header">
                <h1><?= $student['name'] ?></h1>
                <p>Student Profile</p>
            </div>

            <div class="profile-info">

                <div class="info-row">
                    <div class="info-label">Student ID</div>
                    <div class="info-value">
                        <?= $student['student_id'] ?>
                    </div>
                </div>

                <div class="info-row">
                    <div class="info-label">Name</div>
                    <div class="info-value">
                        <?= $student['name'] ?>
                    </div>
                </div>

                <div class="info-row">
                    <div class="info-label">Course</div>
                    <div class="info-value">
                        <?= $student['course'] ?>
                    </div>
                </div>

                <div class="info-row">
                    <div class="info-label">Year</div>
                    <div class="info-value">
                        <?= $student['year'] ?>
                    </div>
                </div>

                <div class="info-row">
                    <div class="info-label">Section</div>
                    <div class="info-value">
                        <?= $student['section'] ?>
                    </div>
                </div>

                <div class="info-row">
                    <div class="info-label">Email</div>
                    <div class="info-value">
                        <?= $student['email'] ?>
                    </div>
                </div>

                <div class="info-row">
                    <div class="info-label">Address</div>
                    <div class="info-value">
                        <?= $student['address'] ?>
                    </div>
                </div>

                <div class="info-row">
                    <div class="info-label">Contact Number</div>
                    <div class="info-value">
                        <?= $student['contact'] ?>
                    </div>
                </div>

                <div class="info-row">
                    <div class="info-label">Hobbies</div>
                    <div class="info-value">
                        <?= $student['hobbies'] ?>
                    </div>
                </div>

                <a class="back-button" href="<?= site_url('student') ?>">
                    ← Back to Home
                </a>

            </div>

        </div>

    </div>

</body>
</html>
```
