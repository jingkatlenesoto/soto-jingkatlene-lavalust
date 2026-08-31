<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal - Home</title>
    <style>
        :root {
            --purple: #b39ddb;          /* Lavender purple (calculator body) */
            --purple-dark: #7c5295;     /* Deep purple (the "=" key) */
            --purple-darker: #5c3a72;   /* Even deeper, for headings */
            --pink: #f4b8cd;            /* Soft pink */
            --pink-dark: #e88fae;       /* Dusty rose */
            --cream: #f3dfc1;           /* Cream/tan keys */
            --bg-color: #f7f2fb;        /* Very light lavender page bg */
            --card-bg: #ffffff;
            --text-main: #4a3b5c;       /* Deep purple-grey text */
            --text-muted: #9c8bb4;
            --border: #eadff6;
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
            box-shadow: 0 2px 10px rgba(124, 82, 149, 0.06);
            display: flex;
            gap: 15px;
        }
        nav a {
            text-decoration: none;
            color: var(--purple-dark);
            font-weight: 600;
            font-size: 14px;
        }
        nav a:hover {
            color: var(--purple-darker);
        }

        /* Hero Header Section */
        .hero-header {
            background: linear-gradient(135deg, var(--purple) 0%, var(--purple-dark) 100%);
            color: white;
            padding: 50px 20px;
            text-align: center;
            box-shadow: 0 6px 20px rgba(124, 82, 149, 0.25);
        }

        .hero-header h1 {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 10px;
            letter-spacing: 0.5px;
        }

        .hero-header p {
            font-size: 16px;
            opacity: 0.9;
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
            border-radius: 14px;
            padding: 30px;
            box-shadow: 0 4px 15px rgba(124, 82, 149, 0.06);
            border: 1px solid var(--border);
            text-align: center;
        }

        .card h2 {
            font-size: 20px;
            color: var(--purple-darker);
            margin-bottom: 12px;
        }

        .card p {
            color: var(--text-muted);
            font-size: 15px;
            line-height: 1.6;
            margin-bottom: 25px;
        }

        /* Action Button (pink calculator key style) */
        .btn {
            display: inline-block;
            background: linear-gradient(135deg, var(--pink) 0%, var(--pink-dark) 100%);
            color: #ffffff;
            padding: 12px 24px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            transition: transform 0.15s ease, box-shadow 0.15s ease;
            box-shadow: 0 4px 12px rgba(232, 143, 174, 0.35);
        }

        .btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 6px 16px rgba(232, 143, 174, 0.45);
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