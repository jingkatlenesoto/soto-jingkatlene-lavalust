<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal - Home</title>
    <style>
        :root {
            --primary: #4c566a;         /* Deep slate-indigo */
            --primary-dark: #3b4252;    /* Dark navy-slate */
            --accent: #5e81ac;          /* Muted steel blue */
            --bg-color: #f2f4f8;        /* Soft gray background */
            --card-bg: #ffffff;
            --text-main: #2e3440;       /* Dark slate text */
            --text-muted: #7e889b;     /* Muted gray text */
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--bg-color);
            color: var(--text-main);
            padding-bottom: 40px;
        }

        /* Top Navigation Bar */
        nav {
            background-color: #ffffff;
            padding: 15px 40px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.04);
            display: flex;
            gap: 15px;
        }
        nav a {
            text-decoration: none;
            color: var(--accent);
            font-weight: 600;
            font-size: 14px;
        }
        nav a:hover {
            color: var(--primary-dark);
        }

        /* Hero Header Section */
        .hero-header {
            background-color: var(--primary-dark);
            color: white;
            padding: 50px 20px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
        }

        .hero-header h1 {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 10px;
            letter-spacing: 0.5px;
        }

        .hero-header p {
            font-size: 16px;
            opacity: 0.85;
        }

        /* Main Container */
        .container {
            max-width: 800px;
            margin: 40px auto 0;
            padding: 0 20px;
        }

        /* Card Element */
        .card {
            background: var(--card-bg);
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03);
            border: 1px solid #e5e9f0;
            text-align: center;
        }

        .card h2 {
            font-size: 20px;
            color: var(--primary-dark);
            margin-bottom: 12px;
        }

        .card p {
            color: var(--text-muted);
            font-size: 15px;
            line-height: 1.6;
            margin-bottom: 25px;
        }

        /* Action Button */
        .btn {
            display: inline-block;
            background-color: var(--primary);
            color: #ffffff;
            padding: 12px 24px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            transition: background-color 0.2s ease, transform 0.1s ease;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }

        .btn:hover {
            background-color: var(--primary-dark);
            transform: translateY(-1px);
        }
    </style>
</head>
<body>

    <!-- Top Navigation -->
    <nav>
        <a href="<?= site_url('student'); ?>">Home</a> | 
        <a href="<?= site_url('student/profile'); ?>">Student Profile</a>
    </nav>

    <!-- Hero Banner -->
    <div class="hero-header">
        <h1>Welcome to the Student Portal</h1>
        <p>Access and manage your student information seamlessly.</p>
    </div>

    <!-- Main Content -->
    <div class="container">
        <div class="card">
            <h2>Quick Access</h2>
            <p>Select "Student Profile" from the menu or click below to view complete academic records, personal information, and contact details.</p>
            <a href="<?= site_url('student/profile'); ?>" class="btn">View Student Profile</a>
        </div>
    </div>

</body>
</html>