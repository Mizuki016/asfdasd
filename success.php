<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Welcome — UniClub</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700;800&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    :root { --navy:#0B1F3A; --gold:#C9A84C; --gold2:#E6C76A; --gray:#8A9BB0; --green:#3CC98A; --border:rgba(201,168,76,0.25); }
    body {
      font-family: 'DM Sans', sans-serif;
      background: var(--navy); color: #fff;
      min-height: 100vh; display: flex; flex-direction: column;
      align-items: center; justify-content: center;
      padding: 2rem;
    }
    body::before {
      content: ''; position: fixed; inset: 0;
      background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
      pointer-events: none; z-index: 0; opacity: 0.4;
    }
    .card {
      position: relative; z-index: 1;
      background: rgba(255,255,255,0.04);
      border: 1px solid var(--border);
      border-radius: 16px; padding: 3rem 2.5rem;
      max-width: 480px; width: 100%;
      text-align: center;
      animation: popIn 0.5s cubic-bezier(.175,.885,.32,1.275) both;
    }
    .checkmark {
      width: 72px; height: 72px; border-radius: 50%;
      background: rgba(60,201,138,0.12);
      border: 2px solid rgba(60,201,138,0.4);
      display: flex; align-items: center; justify-content: center;
      font-size: 2rem; margin: 0 auto 1.5rem;
    }
    h1 { font-family: 'Playfair Display', serif; font-size: 2rem; margin-bottom: 0.5rem; }
    .sub { color: var(--gray); margin-bottom: 2rem; line-height: 1.65; }
    .club-badge {
      display: inline-block;
      background: rgba(201,168,76,0.12);
      border: 1px solid var(--border);
      color: var(--gold); font-size: 0.85rem; font-weight: 600;
      padding: 0.45rem 1.2rem; border-radius: 50px;
      margin-bottom: 2rem;
    }
    .divider { border: none; border-top: 1px solid var(--border); margin: 1.5rem 0; }
    .next-steps { text-align: left; margin-bottom: 2rem; }
    .next-steps h3 { font-size: 0.75rem; letter-spacing: 0.12em; text-transform: uppercase; color: var(--gray); margin-bottom: 1rem; }
    .step { display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.75rem; font-size: 0.88rem; color: var(--gray); }
    .step-num {
      width: 24px; height: 24px; border-radius: 50%; flex-shrink: 0;
      background: rgba(201,168,76,0.12); border: 1px solid var(--border);
      color: var(--gold); font-size: 0.7rem; font-weight: 700;
      display: flex; align-items: center; justify-content: center;
    }
    .btn {
      display: inline-block; padding: 0.85rem 2rem;
      background: var(--gold); color: var(--navy);
      border-radius: 6px; font-weight: 700; font-size: 0.95rem;
      text-decoration: none; transition: all 0.2s;
    }
    .btn:hover { background: var(--gold2); transform: translateY(-1px); }
    @keyframes popIn {
      from { opacity: 0; transform: scale(0.9) translateY(20px); }
      to   { opacity: 1; transform: scale(1) translateY(0); }
    }
  </style>
</head>
<body>
<?php
$name = htmlspecialchars($_GET['name'] ?? 'Student');
$club = htmlspecialchars($_GET['club'] ?? 'your club');
?>
<div class="card">
  <div class="checkmark">✓</div>
  <h1>Welcome, <?= $name ?>!</h1>
  <p class="sub">Your registration was successful. You're now a member of the UniClub portal.</p>
  <div class="club-badge">✦ <?= $club ?></div>
  <hr class="divider"/>
  <div class="next-steps">
    <h3>What's Next</h3>
    <div class="step"><div class="step-num">1</div>Check your email for a welcome message from your club.</div>
    <div class="step"><div class="step-num">2</div>Attend the next club orientation or general assembly.</div>
    <div class="step"><div class="step-num">3</div>Connect with fellow members and explore upcoming events.</div>
  </div>
  <a href="index.php" class="btn">← Back to Home</a>
</div>
</body>
</html>
