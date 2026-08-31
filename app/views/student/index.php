<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal - Home</title>
    <style>
        :root {
            --purple: #b39ddb;          /* Lavender purple */
            --purple-dark: #7c5295;     /* Deep purple */
            --purple-darker: #5c3a72;   /* Deeper purple for text/accent */
            --pink: #f4b8cd;            /* Soft pink */
            --pink-dark: #e88fae;       /* Primary action pink */
            --cream: #f3dfc1;           /* Cream accent */
            --bg-color: #f7f2fb;        /* Page background */
            --card-bg: #ffffff;         /* Main container background */
            --card-inner: #faf7fd;      /* Sub-box background */
            --text-main: #4a3b5c;       /* Dark text */
            --text-muted: #8e7a9f;      /* Muted text */
            --border: #eadff6;          /* Border color */
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
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Top Navigation */
        nav {
            background-color: #ffffff;
            padding: 15px 40px;
            box-shadow: 0 2px 10px rgba(124, 82, 149, 0.06);
            display: flex;
            gap: 15px;
            align-items: center;
        }
        nav a {
            text-decoration: none;
            color: var(--purple-dark);
            font-weight: 600;
            font-size: 14px;
            transition: color 0.2s;
        }
        nav a:hover {
            color: var(--purple-darker);
        }
        nav span {
            color: var(--border);
        }

        /* Hero Wrapper */
        .hero-wrapper {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
        }

        /* Main Card Layout */
        .card {
            background: var(--card-bg);
            border-radius: 20px;
            padding: 40px 35px;
            max-width: 580px;
            width: 100%;
            box-shadow: 0 10px 30px rgba(124, 82, 149, 0.1);
            border: 1px solid var(--border);
            text-align: center;
            position: relative;
        }

        .top-line {
            width: 40px;
            height: 4px;
            background: var(--pink-dark);
            border-radius: 2px;
            margin: 0 auto 18px;
        }

        .badge {
            display: inline-block;
            background-color: #f3e9fa;
            color: var(--purple-darker);
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
            padding: 6px 16px;
            border-radius: 20px;
            margin-bottom: 20px;
            border: 1px solid var(--border);
        }

        .card h1 {
            font-size: 28px;
            color: var(--purple-darker);
            margin-bottom: 12px;
            font-weight: 700;
            line-height: 1.3;
        }

        .card p.description {
            color: var(--text-muted);
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 28px;
        }

        /* Button Group */
        .btn-group {
            display: flex;
            gap: 12px;
            justify-content: center;
            margin-bottom: 25px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 12px 22px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            transition: transform 0.15s ease, box-shadow 0.15s ease;
        }

        .btn-secondary {
            background-color: #f0e6f7;
            color: var(--purple-darker);
            border: 1px solid var(--border);
        }

        .btn-secondary:hover {
            background-color: #e4d5f0;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--pink) 0%, var(--pink-dark) 100%);
            color: #ffffff;
            box-shadow: 0 4px 12px rgba(232, 143, 174, 0.35);
        }

        .btn-primary:hover {
            transform: translateY(-1px);
            box-shadow: 0 6px 16px rgba(232, 143, 174, 0.45);
        }

        /* Info Lock Box */
        .info-box {
            background-color: var(--card-inner);
            border: 1px dashed var(--purple);
            border-radius: 12px;
            padding: 16px 20px;
            font-size: 13px;
            color: var(--text-main);
            text-align: left;
            margin-bottom: 25px;
            line-height: 1.5;
        }

        .info-box p {
            margin-bottom: 4px;
        }

        .info-box a {
            color: var(--purple-dark);
            font-weight: 700;
            text-decoration: underline;
        }

        /* Card Footer */
        .card-footer {
            font-size: 11px;
            color: var(--text-muted);
            letter-spacing: 1px;
            text-transform: uppercase;
            font-weight: 600;
        }
    </style>
</head>
<body>

    <!-- Top Navigation Bar -->
    <nav>
        <a href="<?= site_url('student'); ?>">Home</a>
        <span>|</span>
        <a href="<?= site_url('student/profile'); ?>">Student Profile</a>
    </nav>

    <!-- Main Container -->
    <div class="hero-wrapper">
        <div class="card">
            <div class="top-line"></div>
            <div class="badge">✦ Student Information System</div>
            
            <h1>Welcome, Allyssa Mae R. Macalalad!</h1>
            <p class="description">Your personal student information dashboard. Access your profile and manage your student information through the LavaLust system.</p>

            <div class="btn-group">
                <a href="<?= site_url('student'); ?>" class="btn btn-secondary">
                    🏠 Home
                </a>
                <a href="<?= site_url('student/profile'); ?>" class="btn btn-primary">
                    👤 Student Profile
                </a>
            </div>

            <div class="info-box">
                <p>🔒 <strong>The Student Profile page is protected by StudentMiddleware.</strong></p>
                <p>If you haven't unlocked access yet, click <a href="#">here to grant access</a> before opening your profile.</p>
            </div>

            <div class="card-footer">
                LAVALUST • STUDENT PORTAL
            </div>
        </div>
    </div>

</body>
</html>