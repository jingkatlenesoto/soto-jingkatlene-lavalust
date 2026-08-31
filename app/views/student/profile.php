<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Profile</title>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&family=Inter:wght@400;500;600;700&display=swap');

  *{box-sizing:border-box;}
  html,body{margin:0;padding:0;}
  body{
    font-family:'Inter', sans-serif;
    background:#0B1A2E;
    color:#DCE6F2;
    min-height:100vh;
  }

  /* Top nav */
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
  .navbar a.dim{color:#7FA6D6;}
  .navbar .sep{color:#2E4D74;}

  /* Header */
  .header{
    background:linear-gradient(100deg, #12345C 0%, #0B2340 55%, #081A30 100%);
    padding:56px 20px 60px;
    text-align:center;
  }
  .avatar{
    width:130px;
    height:130px;
    border-radius:50%;
    margin:0 auto 22px;
    background:linear-gradient(145deg,#1B3A5F,#0D2138);
    border:4px solid #F7941D;
    box-shadow:0 0 0 6px rgba(247,148,29,0.15);
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:13px;
    color:#7FA6D6;
    letter-spacing:0.3px;
  }
  .header h1{
    font-family:'Poppins', sans-serif;
    font-weight:700;
    font-size:32px;
    color:#fff;
    margin:0 0 6px 0;
  }
  .header h1 span{
    color:#F7941D;
  }
  .header .id-line{
    font-size:14px;
    color:#7FA6D6;
    margin:0 0 18px 0;
    letter-spacing:0.3px;
  }
  .access-pill{
    display:inline-block;
    background:rgba(247,148,29,0.15);
    border:1px solid rgba(247,148,29,0.4);
    color:#FFC98A;
    font-size:12px;
    font-weight:600;
    letter-spacing:0.3px;
    padding:6px 16px;
    border-radius:999px;
  }

  /* Main */
  main{
    max-width:1040px;
    margin:-30px auto 0;
    padding:0 24px 60px;
  }

  .row{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:24px;
    margin-bottom:24px;
  }

  .tile{
    background:#0F2340;
    border:1px solid rgba(247,148,29,0.15);
    border-radius:14px;
    padding:28px 30px;
  }

  .tile h2{
    font-family:'Poppins', sans-serif;
    font-size:13px;
    font-weight:600;
    letter-spacing:0.6px;
    text-transform:uppercase;
    color:#F7941D;
    margin:0 0 20px 0;
  }

  .field{
    display:flex;
    justify-content:space-between;
    align-items:baseline;
    padding:12px 0;
    border-bottom:1px dashed rgba(127,166,214,0.2);
  }
  .field:last-child{border-bottom:none;padding-bottom:0;}
  .field:first-child{padding-top:0;}
  .field .label{
    font-size:13.5px;
    color:#7FA6D6;
  }
  .field .value{
    font-size:14.5px;
    font-weight:600;
    color:#fff;
    text-align:right;
  }
  .field .value a{
    color:#F7941D;
    text-decoration:none;
    font-weight:600;
  }

  .bio-text{
    font-size:14px;
    line-height:1.65;
    color:#B7CBE4;
    margin:0 0 22px 0;
  }

  .tag-group{margin-bottom:20px;}
  .tag-group:last-child{margin-bottom:0;}
  .tag-group h3{
    font-size:12.5px;
    font-weight:600;
    color:#7FA6D6;
    margin:0 0 10px 0;
  }
  .tags{
    display:flex;
    flex-wrap:wrap;
    gap:8px;
  }
  .tag{
    font-size:12.5px;
    font-weight:600;
    padding:6px 13px;
    border-radius:8px;
  }
  .tag.blue{
    background:rgba(90,150,220,0.15);
    color:#8FBBEA;
    border:1px solid rgba(90,150,220,0.35);
  }
  .tag.orange{
    background:rgba(247,148,29,0.15);
    color:#FFC98A;
    border:1px solid rgba(247,148,29,0.35);
  }

  .btn-list{
    display:flex;
    flex-direction:column;
    gap:10px;
  }
  .btn-list a{
    display:flex;
    justify-content:space-between;
    align-items:center;
    background:rgba(255,255,255,0.03);
    border:1px solid rgba(127,166,214,0.2);
    color:#DCE6F2;
    text-decoration:none;
    font-size:14px;
    font-weight:600;
    padding:12px 16px;
    border-radius:10px;
    transition:border-color .15s ease, background .15s ease;
  }
  .btn-list a:hover{
    border-color:#F7941D;
    background:rgba(247,148,29,0.08);
  }
  .btn-list a .arrow{
    color:#F7941D;
  }

  footer{
    text-align:center;
    padding:26px 20px;
    font-size:12px;
    letter-spacing:0.4px;
    color:#4C6D93;
    border-top:1px solid rgba(127,166,214,0.12);
  }

  @media (max-width:760px){
    .row{grid-template-columns:1fr;}
    .header h1{font-size:24px;}
  }
</style>
</head>
<body>
  <div class="navbar">
    <a href="<?= site_url(); ?>" class="dim">Home</a>
    <span class="sep">|</span>
    <a href="<?= site_url('student/profile'); ?>">Student Profile</a>
  </div>

  <div class="header">
    <div class="avatar">Profile Photo</div>
    <h1>Welcome, <span>Jing katlene A. Soto!</span></h1>
    <p class="id-line">ID: 2024-00202</p>
    <span class="access-pill">Access granted by Middleware</span>
  </div>

  <main>
    <div class="row">
      <div class="tile">
        <h2>Academic Info</h2>
        <div class="field"><span class="label">Course</span><span class="value">BS Information Technology</span></div>
        <div class="field"><span class="label">Year Level</span><span class="value">3rd Year</span></div>
        <div class="field"><span class="label">Section</span><span class="value">3F-5</span></div>
        <div class="field"><span class="label">Status</span><span class="value">Active</span></div>
      </div>

      <div class="tile">
        <h2>Contact Info</h2>
        <div class="field"><span class="label">Email</span><span class="value">jingkatlenes@gmail.com</span></div>
        <div class="field"><span class="label">Address</span><span class="value">Puting Tubig, Calapan City</span></div>
        <div class="field"><span class="label">Contact No.</span><span class="value">09203747743</span></div>
        <div class="field"><span class="label">Adviser</span><span class="value">Ronald Marasigan</span></div>
      </div>
    </div>

    <div class="row">
      <div class="tile">
        <h2>Bio &amp; Skills</h2>
        <p class="bio-text">BS Information Technology student under the College of Computer Studies, currently building web systems with the LavaLust framework.</p>
        <div class="tag-group">
          <h3>Top Skills</h3>
          <div class="tags">
            <span class="tag blue">PHP</span>
            <span class="tag blue">LavaLust Framework</span>
            <span class="tag blue">HTML/CSS</span>
            <span class="tag blue">JavaScript</span>
            <span class="tag blue">MySQL</span>
          </div>
        </div>
        <div class="tag-group">
          <h3>Hobbies &amp; Interests</h3>
          <div class="tags">
            <span class="tag orange">sleeping</span>
            <span class="tag orange">Watching Short Drama</span>
            <span class="tag orange">Love dogs</span>
          </div>
        </div>
      </div>

      <div class="tile">
        <h2>Profiles</h2>
        <div class="btn-list">
          <a href="https://github.com/jingkatlenesoto/soto-jingkatlene-lavalust" target="_blank" rel="noopener">
            View GitHub <span class="arrow">→</span>
          </a>
          <a href="tel:09092929614">
            Emergency Contact — Rene Boy N. Soto (Father) <span class="arrow">→</span>
          </a>
          <a href="tel:09092929614">
            Emergency Phone — 09092929614 <span class="arrow">→</span>
          </a>
        </div>
      </div>
    </div>
  </main>

  <footer>LAVALUST · STUDENT PORTAL | 2024</footer>
</body>
</html>