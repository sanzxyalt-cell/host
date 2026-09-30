<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SEO for privacy-policy.php -->

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>VelocityHost | Privacy Policy</title>
<meta name="description"
    content="Read VelocityHost's Privacy Policy — learn how we collect, use, and protect your data while providing secure and reliable hosting services.">
<meta name="keywords"
    content="Privacy Policy, Data Protection, VelocityHost, Secure Hosting, Hosting Privacy, User Data, GDPR, Hosting Security">
<meta name="author" content="VelocityHost.tn">
<link rel="canonical" href="https://velocityhost.tn/privacy-policy.php">

<!-- Open Graph / Facebook -->
<meta property="og:site_name" content="VelocityHost">
<meta property="og:title" content="VelocityHost | Privacy Policy">
<meta property="og:description"
    content="Learn how VelocityHost protects your data, maintains privacy, and ensures secure hosting for all users.">
<meta property="og:type" content="website">
<meta property="og:locale" content="en_US">
<meta property="og:url" content="https://velocityhost.tn/privacy-policy.php">
<meta property="og:image" content="https://velocityhost.tn/assets/imgs/hero.webp">

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="VelocityHost | Privacy Policy">
<meta name="twitter:description"
    content="Understand VelocityHost's Privacy Policy — how we collect, manage, and protect your data for secure hosting services.">
<meta name="twitter:image" content="https://velocityhost.tn/assets/imgs/hero.webp">

<!-- Favicon -->
<link rel="icon" href="assets/imgs/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" sizes="180x180" href="assets/imgs/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/imgs/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/imgs/favicon-16x16.png">
<meta name="msapplication-TileColor" content="#2d89ef">
<meta name="theme-color" content="#ffffff">



<!-- TailwindCSS -->
<script src="https://cdn.tailwindcss.com"></script>
<script>
tailwind.config = {
  theme: {
    extend: {
      colors: {
        brand: {
          50:'#eef6ff',100:'#d9eaff',200:'#bcd9ff',300:'#8ac0ff',400:'#54a5ff',
          500:'#2d8bff',600:'#1e6fe6',700:'#1858b4',800:'#123f80',900:'#0c2a57'
        }
      },
      boxShadow: { glow: '0 0 0 0 rgba(0,0,0,0), 0 10px 25px -5px rgba(59,130,246,.4), 0 8px 10px -6px rgba(59,130,246,.3)' }
    }
  }
}
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
body { background: linear-gradient(135deg,#0f172a,#1e293b); }
.glass-card { backdrop-filter: blur(12px) saturate(180%); background-color: rgba(15,23,42,0.5); border-radius:1rem; border:1px solid rgba(255,255,255,0.1); padding:1.5rem; transition: transform 0.3s ease, box-shadow 0.3s ease; }
.glass-card:hover { transform: translateY(-5px); box-shadow:0 15px 25px rgba(59,130,246,0.4); }
.stat-value { font-size:1.5rem; font-weight:700; color:#3b82f6; }
</style>
</head>
<body class="text-white font-sans">

 <!-- Navbar (same as your current structure) -->
<?php include 'includes/navbar.php'; ?>

<!-- Hero + Privacy Policy Section -->
<div class="pt-32 container mx-auto px-6 lg:px-20">
  <section class="space-y-8">

    <div class="glass-card">
      <h2 class="text-2xl font-bold mb-3">1. Information We Collect</h2>
      <p>We collect personal information such as name, email address, payment details, and usage data to provide and improve our services.</p>
    </div>

    <div class="glass-card">
      <h2 class="text-2xl font-bold mb-3">2. How We Use Information</h2>
      <p>Your information is used to operate our services, process payments, enhance security, and provide customer support.</p>
    </div>

    <div class="glass-card">
      <h2 class="text-2xl font-bold mb-3">3. Data Protection & Security</h2>
      <p>We implement strong security measures to protect your data, including encryption and secure storage. However, no method of transmission is 100% secure.</p>
    </div>

    <div class="glass-card">
      <h2 class="text-2xl font-bold mb-3">4. Sharing of Data</h2>
      <p>VelocityHost does not sell your personal data. We may share it with trusted partners to operate our services or comply with legal obligations.</p>
    </div>

    <div class="glass-card">
      <h2 class="text-2xl font-bold mb-3">5. Cookies & Tracking</h2>
      <p>We use cookies and similar technologies to improve user experience and analyze traffic. You may control cookie settings in your browser.</p>
    </div>

    <div class="glass-card">
      <h2 class="text-2xl font-bold mb-3">6. User Rights</h2>
      <p>You have the right to access, update, or delete your personal information. Contact us for any privacy-related requests.</p>
    </div>

    <div class="glass-card">
      <h2 class="text-2xl font-bold mb-3">7. Updates to This Policy</h2>
      <p>We may update this Privacy Policy periodically. Continued use of our services means you accept the latest version.</p>
    </div>

  </section>
</div>

 <!-- Footer (same as your current structure) -->
<?php include 'includes/footer.php'; ?>

<script>
document.getElementById('year').textContent = new Date().getFullYear();
</script>

</body>
</html>
