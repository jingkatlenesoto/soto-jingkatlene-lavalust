<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile - LavaLust</title>
    <style>
        :root {
            --purple: #b39ddb;          /* Lavender purple */
            --purple-dark: #7c5295;     /* Deep purple */
            --purple-darker: #5c3a72;   /* Deeper purple for text */
            --pink: #f4b8cd;            /* Soft pink */
            --pink-dark: #e88fae;       /* Primary pink accent */
            --cream: #f3dfc1;           /* Cream accent */
            --bg-color: #f7f2fb;        /* Page background */
            --card-bg: #ffffff;         /* Main container background */
            --row-bg: #faf7fd;          /* Details row background */
            --text-main: #4a3b5c;       /* Main text */
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
            padding-bottom: 40px;
        }

        /* Top Navigation Bar */
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

        /* Hero & Content Wrapper */
        .wrapper {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            padding: 40px 20px;
        }

        /* Main Container Card */
        .card {
            background: var(--card-bg);
            border-radius: 20px;
            padding: 40px 35px;
            max-width: 650px;
            width: 100%;
            box-shadow: 0 10px 30px rgba(124, 82, 149, 0.1);
            border: 1px solid var(--border);
            text-align: center;
        }

        .top-line {
            width: 40px;
            height: 4px;
            background: var(--pink-dark);
            border-radius: 2px;
            margin: 0 auto 20px;
        }

        /* Profile Avatar Icon */
        .avatar-container {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--pink) 0%, var(--purple) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            box-shadow: 0 4px 15px rgba(232, 143, 174, 0.3);
            border: 3px solid #ffffff;
        }
        
        .avatar-icon {
            width: 45px;
            height: 45px;
            fill: #ffffff;
        }

        .student-name {
            font-size: 24px;
            color: var(--purple-darker);
            font-weight: 700;
            margin-bottom: 4px;
        }

        .student-sub {
            font-size: 13px;
            color: var(--text-muted);
            margin-bottom: 15px;
        }

        /* Granted Access Badge */
        .access-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background-color: #f3e9fa;
            color: var(--purple-darker);
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 0.8px;
            text-transform: uppercase;
            padding: 6px 16px;
            border-radius: 20px;
            margin-bottom: 30px;
            border: 1px solid var(--border);
        }

        /* Section Heading */
        .section-header {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 14px;
            font-weight: 700;
            color: var(--purple-darker);
            text-align: left;
            margin-bottom: 15px;
        }
        
        .section-header::before {
            content: '';
            display: inline-block;
            width: 10px;
            height: 10px;
            background-color: var(--pink-dark);
            border-radius: 2px;
        }

        /* Info Table / List Box */
        .info-table {
            background-color: var(--row-bg);
            border: 1px solid var(--border);
            border-radius: 12px;
            overflow: hidden;
            margin-bottom: 30px;
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 20px;
            border-bottom: 1px solid var(--border);
            font-size: 13px;
        }

        .info-row:last-child {
            border-bottom: none;
        }

        .info-label {
            color: var(--text-muted);
            font-weight: 600;
        }

        .info-value {
            color: var(--text-main);
            font-weight: 600;
            text-align: right;
        }

        /* Social / Connect Buttons */
        .connect-title {
            font-size: 14px;
            font-weight: 700;
            color: var(--purple-darker);
            margin-bottom: 15px;
        }

        .social-buttons {
            display: flex;
            gap: 10px;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 30px;
        }

        .social-btn {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 10px 18px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 13px;
            font-weight: 600;
            color: #ffffff;
            transition: transform 0.15s ease, opacity 0.15s ease;
        }

        .social-btn:hover {
            transform: translateY(-1px);
            opacity: 0.9;
        }

        .btn-facebook { background-color: #637bd6; }
        .btn-instagram { background-color: #e88fae; }
        .btn-tiktok { background-color: #5c3a72; }

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
    <div class="wrapper">
        <div class="card">
            <div class="top-line"></div>
            
            <!-- Avatar Section -->
            <div class="avatar-container">
                <svg class="avatar-icon" viewBox="0 0 24 24">
                    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                </svg>
            </div>

            <h1 class="student-name"><?= isset($student['name']) ? $student['name'] : 'Allyssa Mae R. Macalalad'; ?></h1>
            <p class="student-sub">Student Profile • LavaLust System</p>

            <div class="access-badge">
                🔒 ACCESS GRANTED BY STUDENTMIDDLEWARE
            </div>

            <!-- Student Information Table -->
            <div class="section-header">Student Information</div>
            
            <div class="info-table">
                <div class="info-row">
                    <span class="info-label">Student ID</span>
                    <span class="info-value"><?= isset($student['student_id']) ? $student['student_id'] : 'MCC2024-00222'; ?></span>
                </div>
                <div class="info-row">
                    <span class="info-label">Name</span>
                    <span class="info-value"><?= isset($student['name']) ? $student['name'] : 'Allyssa Mae R. Macalalad'; ?></span>
                </div>
                <div class="info-row">
                    <span class="info-label">Course</span>
                    <span class="info-value"><?= isset($student['course']) ? $student['course'] : 'BS Information Technology'; ?></span>
                </div>
                <div class="info-row">
                    <span class="info-label">Year Level</span>
                    <span class="info-value"><?= isset($student['year']) ? $student['year'] : '3rd Year'; ?></span>
                </div>
                <div class="info-row">
                    <span class="info-label">Section</span>
                    <span class="info-value"><?= isset($student['section']) ? $student['section'] : '3 - F1'; ?></span>
                </div>
                <div class="info-row">
                    <span class="info-label">Email</span>
                    <span class="info-value"><?= isset($student['email']) ? $student['email'] : 'allyssamaemacalalad11@gmail.com'; ?></span>
                </div>
                <div class="info-row">
                    <span class="info-label">Address</span>
                    <span class="info-value"><?= isset($student['address']) ? $student['address'] : 'Bayan, Naujan, Oriental Mindoro, Philippines'; ?></span>
                </div>
                <div class="info-row">
                    <span class="info-label">Contact No.</span>
                    <span class="info-value"><?= isset($student['contact_no']) ? $student['contact_no'] : '09921478407'; ?></span>
                </div>
                <div class="info-row">
                    <span class="info-label">Hobbies</span>
                    <span class="info-value"><?= isset($student['hobbies']) ? $student['hobbies'] : 'Shopping, Eating, Watching University Series, Playing Clash of Clans and Mobile Legends'; ?></span>
                </div>
                <div class="info-row">
                    <span class="info-label">About</span>
                    <span class="info-value"><?= isset($student['about']) ? $student['about'] : 'A BS Information Technology student who enjoys shopping, eating, and watching university series.'; ?></span>
                </div>
            </div>

            <!-- Social Links Section -->
            <div class="connect-title">Connect With Me</div>
            <div class="social-buttons">
                <a href="<?= isset($student['facebook']) ? $student['facebook'] : '#'; ?>" class="social-btn btn-facebook">Facebook</a>
                <a href="<?= isset($student['instagram']) ? $student['instagram'] : '#'; ?>" class="social-btn btn-instagram">Instagram</a>
                <a href="<?= isset($student['tiktok']) ? $student['tiktok'] : '#'; ?>" class="social-btn btn-tiktok">TikTok</a>
            </div>

            <div class="card-footer">
                LAVALUST • STUDENT PORTAL
            </div>
        </div>
    </div>

</body>
</html>