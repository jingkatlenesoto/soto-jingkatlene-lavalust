<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>
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
            padding: 40px 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 35px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
        }

        /* Dual Ring Profile Picture */
        .profile-ring-outer {
            width: 140px;
            height: 140px;
            border-radius: 50%;
            border: 3px solid rgba(255, 255, 255, 0.25);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }
        .profile-ring-inner {
            width: 124px;
            height: 124px;
            border-radius: 50%;
            border: 3px solid #ffffff;
            overflow: hidden;
        }
        .profile-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Header Info */
        .hero-info h1 {
            font-size: 30px;
            font-weight: 700;
            margin-bottom: 5px;
            letter-spacing: 0.5px;
        }
        .hero-info h2 {
            font-size: 18px;
            font-weight: 400;
            opacity: 0.85;
            margin-bottom: 20px;
        }
        .hero-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            font-size: 14px;
            opacity: 0.9;
        }
        .hero-meta-item {
            display: flex;
            align-items: center;
            gap: 6px;
        }

        /* Main Dashboard Content Layout */
        .dashboard-container {
            max-width: 1100px;
            margin: 40px auto 0;
            padding: 0 20px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px;
        }

        /* Section Headings */
        .section-title {
            font-size: 13px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.2px;
            color: var(--text-muted);
            margin-bottom: 15px;
        }

        /* Card Elements */
        .card {
            background: var(--card-bg);
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03);
            margin-bottom: 25px;
            border: 1px solid #e5e9f0;
        }

        /* Slate Highlight Cards */
        .purple-card-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin-bottom: 25px;
        }
        .purple-card {
            background-color: var(--primary);
            color: white;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }
        .purple-card h4 {
            font-size: 15px;
            font-weight: 600;
            margin-bottom: 4px;
        }
        .purple-card p {
            font-size: 13px;
            opacity: 0.85;
        }

        /* Key-Value Details List */
        .info-list {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }
        .info-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px dashed #e5e9f0;
            padding-bottom: 8px;
            font-size: 14px;
        }
        .info-item:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }
        .info-label {
            color: var(--text-muted);
            font-weight: 500;
        }
        .info-value {
            font-weight: 600;
            color: var(--text-main);
            text-align: right;
        }

        /* Badges for Skills & Hobbies */
        .badge-container {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 5px;
        }
        .badge {
            background-color: #e5e9f0;
            color: var(--primary-dark);
            padding: 6px 14px;
            border-radius: 6px;
            font-size: 12px;
            font-weight: 600;
        }

        /* Responsive Breakpoint */
        @media (max-width: 768px) {
            .hero-header {
                flex-direction: column;
                text-align: center;
            }
            .hero-meta {
                justify-content: center;
            }
            .dashboard-container {
                grid-template-columns: 1fr;
            }
            .purple-card-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

    <!-- Top Navigation -->
    <nav>
        <a href="<?= site_url('student'); ?>">Home</a> | 
        <a href="<?= site_url('student/profile'); ?>">Student Profile</a>
    </nav>

    <!-- Hero Header Banner -->
    <div class="hero-header">
        <div class="profile-ring-outer">
            <div class="profile-ring-inner">
                <img src="<?= base_url('assets/images/' . $student['profile_pic']); ?>" alt="Profile Picture" class="profile-img">
            </div>
        </div>
        <div class="hero-info">
            <h1>I'm <?= $student['name']; ?>,</h1>
            <h2>I'm a <?= $student['course']; ?> Student</h2>
            <div class="hero-meta">
                <div class="hero-meta-item">
                    &#9993; <?= $student['email']; ?>
                </div>
                <div class="hero-meta-item">
                    &#128222; <?= $student['contact_no']; ?>
                </div>
                <div class="hero-meta-item">
                    &#128205; <?= $student['address']; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Dashboard Content Area -->
    <div class="dashboard-container">

        <!-- Left Column -->
        <div>
            <!-- Academic Overview -->
            <div class="section-title">Academic Details</div>
            <div class="purple-card-grid">
                <div class="purple-card">
                    <h4><?= $student['course']; ?></h4>
                    <p><?= $student['year']; ?> (Section <?= $student['section']; ?>)</p>
                </div>
                <div class="purple-card">
                    <h4>GPA: <?= $student['gpa']; ?></h4>
                    <p>Status: <?= $student['academic_status']; ?></p>
                </div>
            </div>

            <!-- Technical Skills Section -->
            <div class="section-title">My Skills & Interests</div>
            <div class="card">
                <div class="info-label" style="margin-bottom: 8px;">Technical Skills</div>
                <div class="badge-container" style="margin-bottom: 20px;">
                    <?php 
                        $skills = explode(',', $student['skills']);
                        foreach($skills as $skill): 
                    ?>
                        <span class="badge"><?= trim($skill); ?></span>
                    <?php endforeach; ?>
                </div>

                <div class="info-label" style="margin-bottom: 8px;">Hobbies & Activities</div>
                <div class="badge-container">
                    <?php 
                        $hobbies = explode(',', $student['hobbies']);
                        foreach($hobbies as $hobby): 
                    ?>
                        <span class="badge" style="background-color: #f0f2f5; color: #555;"><?= trim($hobby); ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- Right Column -->
        <div>
            <!-- Personal & Contact Details -->
            <div class="section-title">Personal Details</div>
            <div class="card">
                <div class="info-list">
                    <div class="info-item">
                        <span class="info-label">Student ID</span>
                        <span class="info-value"><?= $student['student_id']; ?></span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Department</span>
                        <span class="info-value"><?= $student['department']; ?></span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Adviser</span>
                        <span class="info-value"><?= $student['adviser']; ?></span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Birthdate</span>
                        <span class="info-value"><?= $student['birthdate']; ?></span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Gender</span>
                        <span class="info-value"><?= $student['gender']; ?></span>
                    </div>
                </div>
            </div>

            <!-- Online Profiles & Emergency Contacts -->
            <div class="section-title">Profiles & Emergency</div>
            <div class="card">
                <div class="info-list">
                    <div class="info-item">
                        <span class="info-label">GitHub</span>
                        <span class="info-value">
                            <a href="<?= $student['github']; ?>" target="_blank" style="color: var(--primary); text-decoration: none; font-weight: 600;">View Profile</a>
                        </span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Emergency Contact</span>
                        <span class="info-value"><?= $student['emergency_contact']; ?></span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Emergency Phone</span>
                        <span class="info-value"><?= $student['emergency_no']; ?></span>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>
</html>