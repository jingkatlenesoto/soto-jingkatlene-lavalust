<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Portal</title>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&family=Inter:wght@400;500;600&display=swap');

  *{box-sizing:border-box;}
  html,body{margin:0;padding:0;}
  body{
    font-family:'Inter', sans-serif;
    background:#0B1A2E;
    min-height:100vh;
  }

  .navbar{
    background:#0F2340;
    padding:16px 40px;
    display:flex;
    align-items:center;
    gap:16px;
    font-weight:600;
  }
  .navbar a{
    color:#F7941D;
    text-decoration:none;
    font-size:15px;
    transition: opacity 0.2s ease;
  }
  .navbar a:hover{
    opacity: 0.8;
  }
  .navbar .sep{color:#2E4D74;}

  .hero{
    background:linear-gradient(100deg, #12345C 0%, #0B2340 55%, #081A30 100%);
    padding:64px 20px 72px;
    text-align:center;
    color:#fff;
  }
  .hero h1{
    font-family:'Poppins', sans-serif;
    font-weight:700;
    font-size:40px;
    margin:0 0 14px 0;
  }
  .hero p{
    font-size:17px;
    margin:0;
    color:#AFC6DE;
  }

  .content{
    display:flex;
    justify-content:center;
    padding:0 20px;
    margin-top:-40px;
  }

  .quick-card{
    background:#0F2340;
    max-width:640px;
    width:100%;
    border-radius:14px;
    border:1px solid rgba(247,148,29,0.2);
    box-shadow:0 24px 50px -20px rgba(0,0,0,0.5);
    padding:44px 48px 48px;
    text-align:center;
  }

  .quick-card h2{
    font-family:'Poppins', sans-serif;
    font-weight:700;
    font-size:24px;
    color:#F7941D;
    margin:0 0 18px 0;
  }

  .quick-card p{
    font-size:15px;
    line-height:1.6;
    color:#9FB4CC;
    max-width:44ch;
    margin:0 auto 28px;
  }

  .btn-profile{
    display:inline-block;
    background:linear-gradient(90deg, #F7941D, #E0692B);
    color:#fff;
    font-weight:600;
    font-size:15px;
    text-decoration:none;
    padding:14px 32px;
    border-radius:10px;
    box-shadow:0 10px 22px -8px rgba(224,105,43,0.6);
    transition: transform 0.2s ease, box-shadow 0.2s ease;
  }
  .btn-profile:hover{
    transform: translateY(-2px);
    box-shadow:0 14px 26px -8px rgba(224,105,43,0.8);
  }

  .spacer{height:60px;}

  @media (max-width:600px){
    .hero h1{font-size:28px;}
    .quick-card{padding:32px 24px 36px;}
  }
</style>
</head>
<body>
  <div class="navbar">
    <a href="<?= site_url(); ?>">Home</a>
    <span class="sep">|</span>
    <a href="<?= site_url('student/profile'); ?>">Student Profile</a>
  </div>

  <div class="hero">
    <h1>Welcome to the Student Portal</h1>
    <p>Access and manage your student information seamlessly.</p>
  </div>

  <div class="content">
    <div class="quick-card">
      <h2>Quick Access</h2>
      <p>Select "Student Profile" from the menu or click below to view complete academic records, personal information, and contact details.</p>
      <a href="<?= site_url('student/profile'); ?>" class="btn-profile">View Student Profile</a>
    </div>
  </div>

  <div class="spacer"></div>
</body>
</html>