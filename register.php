<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Register — UniClub</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="register.css">
</head>
<body>

<!-- TOP BAR -->
<div class="topbar">
  <a href="index.php" class="topbar-logo">Uni<span>Club</span></a>
  <a href="index.php" class="topbar-back">← Back to Home</a>
</div>

<!-- HERO TEXT -->
<div class="hero-text">
  <h1>Join a Student Club!</h1>
  <p>Fill in the form below and become part of our community</p>
</div>

<!-- MAIN CARD -->
<div class="reg-card">

  <?php
  if (!empty($successMsg)) echo "<div class='flash success'>✓ $successMsg</div>";
  if (!empty($errorMsg))   echo "<div class='flash error'>$errorMsg</div>";
  ?>

  <!-- PHOTO UPLOAD -->
  <div class="photo-section" onclick="document.getElementById('profilePhoto').click()">
    <div class="photo-avatar" id="photoAvatar">
      <img id="photoPreview" src="" alt="Preview"/>
      <span id="photoEmoji">📷</span>
    </div>
    <div class="photo-info">
      <strong>Upload Profile Photo</strong>
      <span>JPG, PNG or GIF &middot; Max 3MB &middot; Optional</span>
    </div>
    <button type="button" class="photo-btn"
      onclick="event.stopPropagation(); document.getElementById('profilePhoto').click()">
      Choose Photo
    </button>
    <input type="file" id="profilePhoto" name="profile_photo" accept="image/*"
           style="display:none" onchange="previewPhoto(this)"/>
  </div>

  <form id="regForm" method="POST" action="process.php" enctype="multipart/form-data" novalidate>

    <!-- PERSONAL INFO -->
    <div class="section-label">Personal Information</div>
    <div class="form-grid">

      <div class="form-group">
        <label>First Name <span class="req">*</span></label>
        <div class="input-wrap">
          <span class="ico">✏️</span>
          <input type="text" name="first_name" id="first_name"
                 placeholder="e.g. Maria" autocomplete="given-name"/>
          <span class="check-icon" id="icon_first_name"></span>
        </div>
        <div class="field-error" id="err_first_name">Please enter your first name.</div>
      </div>

      <div class="form-group">
        <label>Last Name <span class="req">*</span></label>
        <div class="input-wrap">
          <span class="ico">✏️</span>
          <input type="text" name="last_name" id="last_name"
                 placeholder="e.g. Santos" autocomplete="family-name"/>
          <span class="check-icon" id="icon_last_name"></span>
        </div>
        <div class="field-error" id="err_last_name">Please enter your last name.</div>
      </div>

      <div class="form-group">
        <label>Student ID <span class="req">*</span></label>
        <div class="input-wrap">
          <span class="ico">🪪</span>
          <input type="text" name="student_id" id="student_id"
                 placeholder="e.g. 2021-12345" maxlength="20"/>
          <span class="check-icon" id="icon_student_id"></span>
        </div>
        <div class="field-error" id="err_student_id">Please enter a valid student ID.</div>
      </div>

      <div class="form-group">
        <label>University Email <span class="req">*</span></label>
        <div class="input-wrap">
          <span class="ico">📧</span>
          <input type="email" name="email" id="email"
                 placeholder="you@university.edu" autocomplete="email"/>
          <span class="check-icon" id="icon_email"></span>
        </div>
        <div class="field-error" id="err_email">Please enter a valid email address.</div>
      </div>

      <div class="form-group">
        <label>Course / Program <span class="req">*</span></label>
        <div class="select-wrap">
          <select name="course" id="course">
            <option value="">Select your course</option>
            <option>BS Computer Science</option>
            <option>BS Information Technology</option>
            <option>BS Business Administration</option>
            <option>BS Engineering</option>
            <option>BS Education</option>
            <option>BS Nursing</option>
            <option>BS Psychology</option>
            <option>AB Communication</option>
            <option>Other</option>
          </select>
        </div>
        <div class="field-error" id="err_course">Please select your course.</div>
      </div>

      <div class="form-group">
        <label>Year Level <span class="req">*</span></label>
        <div class="select-wrap">
          <select name="year_level" id="year_level">
            <option value="">Select year</option>
            <option>1st Year</option>
            <option>2nd Year</option>
            <option>3rd Year</option>
            <option>4th Year</option>
            <option>5th Year</option>
            <option>Graduate</option>
          </select>
        </div>
        <div class="field-error" id="err_year_level">Please select your year level.</div>
      </div>

    </div>

    <!-- CLUB PICKER -->
    <div class="section-label">Choose Your Club</div>
    <div class="club-picker">

      <input class="club-opt-input" type="radio" name="club" id="club_cs"
             value="Computer Science Society"/>
      <label class="club-opt-label" for="club_cs">
        <span class="club-emoji">💻</span>Computer Science Society
      </label>

      <input class="club-opt-input" type="radio" name="club" id="club_art"
             value="Fine Arts &amp; Design Club"/>
      <label class="club-opt-label" for="club_art">
        <span class="club-emoji">🎨</span>Fine Arts &amp; Design
      </label>

      <input class="club-opt-input" type="radio" name="club" id="club_deb"
             value="Debate &amp; Oratory Society"/>
      <label class="club-opt-label" for="club_deb">
        <span class="club-emoji">📢</span>Debate &amp; Oratory
      </label>

      <input class="club-opt-input" type="radio" name="club" id="club_env"
             value="Environmental Advocates"/>
      <label class="club-opt-label" for="club_env">
        <span class="club-emoji">🌱</span>Environmental Advocates
      </label>

      <input class="club-opt-input" type="radio" name="club" id="club_arts"
             value="Performing Arts Guild"/>
      <label class="club-opt-label" for="club_arts">
        <span class="club-emoji">🎭</span>Performing Arts Guild
      </label>

      <input class="club-opt-input" type="radio" name="club" id="club_jour"
             value="Campus Journalism Club"/>
      <label class="club-opt-label" for="club_jour">
        <span class="club-emoji">📰</span>Campus Journalism
      </label>

    </div>
    <div class="field-error" id="err_club" style="margin-top:0.4rem;">
      Please select a club to join.
    </div>

    <!-- PASSWORD -->
    <div class="section-label">Set Your Password</div>
    <div class="form-grid">

      <div class="form-group">
        <label>Password <span class="req">*</span></label>
        <div class="input-wrap">
          <span class="ico">🔑</span>
          <input type="password" name="password" id="password"
                 placeholder="Min. 8 chars + a number"
                 autocomplete="new-password"
                 oninput="checkStrength(this.value)"/>
          <button type="button" class="toggle-pw"
                  onclick="togglePw('password',this)">👁</button>
        </div>
        <div class="strength-wrap">
          <div class="strength-bars">
            <span id="sb1"></span><span id="sb2"></span>
            <span id="sb3"></span><span id="sb4"></span>
          </div>
          <div class="strength-text" id="strengthText">Enter a password</div>
        </div>
        <div class="field-error" id="err_password">
          Must be 8+ characters with at least one number.
        </div>
      </div>

      <div class="form-group">
        <label>Confirm Password <span class="req">*</span></label>
        <div class="input-wrap">
          <span class="ico">🔑</span>
          <input type="password" name="confirm_password" id="confirm_password"
                 placeholder="Re-enter your password"
                 autocomplete="new-password"/>
          <button type="button" class="toggle-pw"
                  onclick="togglePw('confirm_password',this)">👁</button>
        </div>
        <div class="field-error" id="err_confirm_password">
          Passwords do not match.
        </div>
      </div>

    </div>

    <!-- TERMS -->
    <div class="terms-row">
      <input type="checkbox" id="agree" name="agree"/>
      <label for="agree">
        I agree to the <a href="#">Terms of Service</a> and
        <a href="#">Privacy Policy</a> of the Student Affairs Office.
      </label>
    </div>
    <div class="field-error" id="err_agree" style="margin-top:0.3rem;">
      You must agree to the terms to continue.
    </div>

    <input type="hidden" name="photo_attached" id="photoAttached" value="0"/>

    <button type="submit" class="btn-submit" id="submitBtn">
      Create My Account
    </button>

    <div class="signin-link">
      Already have an account? <a href="#">Sign In</a>
    </div>

  </form>
</div>

<script>
// PHOTO PREVIEW
function previewPhoto(input) {
  const file = input.files[0];
  if (!file) return;
  const reader = new FileReader();
  reader.onload = e => {
    const img = document.getElementById('photoPreview');
    img.src = e.target.result;
    img.style.display = 'block';
    document.getElementById('photoEmoji').style.display = 'none';
    document.getElementById('photoAttached').value = '1';
  };
  reader.readAsDataURL(file);
}

// TOGGLE PASSWORD VISIBILITY
function togglePw(id, btn) {
  const el = document.getElementById(id);
  el.type = el.type === 'password' ? 'text' : 'password';
  btn.textContent = el.type === 'password' ? '👁' : '🙈';
}

// PASSWORD STRENGTH METER
function checkStrength(val) {
  let score = 0;
  if (val.length >= 8)          score++;
  if (/[A-Z]/.test(val))        score++;
  if (/[0-9]/.test(val))        score++;
  if (/[^A-Za-z0-9]/.test(val)) score++;
  const s = val.length === 0 ? 0 : Math.max(1, score);

  const colors = ['', '#e05c7a', '#f0a050', '#f0c040', '#2ecc8e'];
  const labels = ['Enter a password', 'Weak', 'Fair', 'Good', 'Strong'];
  for (let i = 1; i <= 4; i++) {
    document.getElementById('sb' + i).style.background =
      i <= s ? colors[s] : 'rgba(12,123,179,0.1)';
  }
  const txt = document.getElementById('strengthText');
  txt.textContent = labels[s];
  txt.style.color = colors[s] || '#7a92a5';
}

// REAL-TIME VALIDATION ICONS
function setCheck(id, ok) {
  const icon = document.getElementById('icon_' + id);
  const inp  = document.getElementById(id);
  if (!icon || !inp) return;
  icon.textContent = ok ? '✅' : '';
  inp.className    = ok ? 'valid' : '';
}

document.getElementById('first_name').addEventListener('input', function() {
  setCheck('first_name', this.value.trim().length >= 2);
});
document.getElementById('last_name').addEventListener('input', function() {
  setCheck('last_name', this.value.trim().length >= 2);
});
document.getElementById('student_id').addEventListener('input', function() {
  setCheck('student_id', /^[\w\-]{4,20}$/.test(this.value.trim()));
});
document.getElementById('email').addEventListener('input', function() {
  const ok = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(this.value.trim());
  setCheck('email', ok);
  document.getElementById('err_email').style.display =
    (this.value && !ok) ? 'block' : 'none';
});

// SUBMIT VALIDATION
function showErr(id, show) {
  document.getElementById('err_' + id).style.display = show ? 'block' : 'none';
}
function getVal(id) { return document.getElementById(id).value.trim(); }

document.getElementById('regForm').addEventListener('submit', function(e) {
  e.preventDefault();
  let ok = true;

  if (getVal('first_name').length < 2)                    { showErr('first_name', true);  ok = false; } else showErr('first_name', false);
  if (getVal('last_name').length  < 2)                    { showErr('last_name', true);   ok = false; } else showErr('last_name', false);
  if (!/^[\w\-]{4,20}$/.test(getVal('student_id')))       { showErr('student_id', true);  ok = false; } else showErr('student_id', false);
  if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(getVal('email'))){ showErr('email', true);       ok = false; } else showErr('email', false);
  if (!getVal('course'))                                   { showErr('course', true);      ok = false; } else showErr('course', false);
  if (!getVal('year_level'))                               { showErr('year_level', true);  ok = false; } else showErr('year_level', false);

  if (!document.querySelector('input[name="club"]:checked'))
    { showErr('club', true); ok = false; } else showErr('club', false);

  const pw = getVal('password');
  if (pw.length < 8 || !/[0-9]/.test(pw))                 { showErr('password', true);         ok = false; } else showErr('password', false);
  if (getVal('confirm_password') !== pw)                   { showErr('confirm_password', true);  ok = false; } else showErr('confirm_password', false);
  if (!document.getElementById('agree').checked)           { showErr('agree', true);             ok = false; } else showErr('agree', false);

  if (ok) {
    const btn = document.getElementById('submitBtn');
    btn.disabled = true;
    btn.textContent = 'Creating your account...';
    this.submit();
  }
});
</script>
</body>
</html>
