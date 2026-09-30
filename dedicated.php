<?php
// dedicated.php
?>
<!doctype html>
<html lang="en">
<head>
<!-- SEO for dedicated.php -->

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>VelocityHost | Dedicated Server Hosting</title>
<meta name="description"
    content="VelocityHost provides high-performance dedicated server hosting with full control, advanced DDoS protection, and 24/7 reliability for gaming and enterprise needs.">
<meta name="keywords"
    content="Dedicated Server Hosting, VelocityHost, High Performance Hosting, Secure Servers, DDoS Protected Hosting, Enterprise Hosting, Game Server Hosting, Bare Metal Servers">
<meta name="author" content="VelocityHost.tn">
<link rel="canonical" href="https://velocityhost.tn/dedicated.php">

<!-- Open Graph / Facebook -->
<meta property="og:site_name" content="VelocityHost">
<meta property="og:title" content="VelocityHost | Dedicated Server Hosting">
<meta property="og:description"
    content="Get powerful, reliable, and secure dedicated servers with VelocityHost. Full control, low latency, and advanced DDoS protection.">
<meta property="og:type" content="website">
<meta property="og:locale" content="en_US">
<meta property="og:url" content="https://velocityhost.tn/dedicated.php">
<meta property="og:image" content="https://velocityhost.tn/assets/imgs/hero.webp">

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="VelocityHost | Dedicated Server Hosting">
<meta name="twitter:description"
    content="VelocityHost offers dedicated server hosting with full control, high performance, and enterprise-grade DDoS protection.">
<meta name="twitter:image" content="https://velocityhost.tn/assets/imgs/hero.webp">

<!-- Favicon -->
<link rel="icon" href="assets/imgs/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" sizes="180x180" href="assets/imgs/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/imgs/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/imgs/favicon-16x16.png">
<meta name="msapplication-TileColor" content="#2d89ef">
<meta name="theme-color" content="#ffffff">


<!-- Tailwind -->
<script src="https://cdn.tailwindcss.com"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">

<style>
:root{
  --bg:#0b1020;
  --glass: rgba(255,255,255,0.04);
  --accent:#2bb7ff;
  --accent-2:#5b7cff;
}
body{font-family:Inter,ui-sans-serif,system-ui,-apple-system,Segoe UI,Roboto,'Helvetica Neue',Arial; overflow-x:hidden;}

.animated-bg{
  background: linear-gradient(120deg, rgba(27,33,57,1) 0%, rgba(11,16,32,1) 35%, rgba(8,12,22,1) 100%);
  position:relative;
  overflow-x:hidden;
}
.bg-gradient-move{
  position:fixed;
  inset:0;
  width:100%;
  height:100%;
  background: radial-gradient(circle at 10% 20%, rgba(43,183,255,0.12), transparent 8%),
              radial-gradient(circle at 80% 80%, rgba(91,124,255,0.08), transparent 12%);
  animation: float 12s linear infinite;
  filter: blur(40px);
  pointer-events:none;
  z-index:-1;
}
@keyframes float{
  0% {transform: translate3d(0px,0px,0) rotate(0deg)}
  50% {transform: translate3d(-6%,4%,0) rotate(10deg)}
  100% {transform: translate3d(0px,0px,0) rotate(0deg)}
}
.float-icon{position:absolute;opacity:.06;font-size:120px;mix-blend-mode:screen}
.float-1{left:6%;top:10%;transform:rotate(12deg)}
.float-2{right:8%;top:30%;transform:rotate(-8deg)}
.float-3{left:20%;bottom:6%;transform:rotate(6deg)}
.glass{background: linear-gradient(180deg, rgba(255,255,255,0.03), rgba(255,255,255,0.02)); border:1px solid rgba(255,255,255,0.04);backdrop-filter: blur(6px)}
.underline-anim{position:relative}
.underline-anim::after{content:'';position:absolute;left:0;bottom:-6px;height:4px;width:40%;background:linear-gradient(90deg,var(--accent),var(--accent-2));border-radius:999px;transform-origin:left;transform:scaleX(.01);transition:transform .45s cubic-bezier(.2,.9,.2,1)}
.underline-anim:hover::after{transform:scaleX(1)}
.badge-top{position:absolute;right:0;top:-14px;background:linear-gradient(90deg,var(--accent-2),var(--accent));padding:.35rem .9rem;border-radius:999px;font-weight:700;color:#031024;font-size:.82rem}
.enter-up{transform: translateY(18px); opacity:0; animation:enterUp .7s forwards}
@keyframes enterUp{to{transform:none;opacity:1}}
.pattern{background-image: radial-gradient(circle at 10% 20%, rgba(255,255,255,0.02) 0.5px, transparent 0.5px); background-size: 12px 12px}
section{scroll-margin-top:5rem; padding-top:3rem; padding-bottom:3rem;}
@media(max-width:768px){.grid-cols-3{grid-template-columns:1fr !important}}
</style>
</head>
<body class="animated-bg min-h-screen text-white pattern" style="background-color:var(--bg)">

<div class="bg-gradient-move"></div>
<div class="float-icon float-1">⚡</div>
<div class="float-icon float-2">🔌</div>
<div class="float-icon float-3">🖥️</div>

 <!-- Navbar (same as your current structure) -->
<?php include 'includes/navbar.php'; ?>

<!-- HERO -->
<header class="max-w-6xl mx-auto px-6 pt-32 pb-20 relative">
  <div class="grid md:grid-cols-2 gap-8 items-center">
    <div class="enter-up">
      <small class="text-sky-300/70 font-medium uppercase tracking-wide">Dedicated Server</small>
      <h1 class="text-4xl md:text-5xl font-extrabold mt-4 leading-tight">
        Fast & Reliable <span style="background:linear-gradient(90deg,var(--accent),var(--accent-2));-webkit-background-clip:text;background-clip:text;color:transparent">Dedicated Server</span> — <span class="text-sky-300">Full Root Access & Secure</span>
      </h1>
      <p class="mt-4 text-sky-200/70 max-w-xl">
        High-performance Dedicated Server with NVMe storage, enterprise DDoS protection, and instant setup. Perfect for developers, businesses, and gaming communities.
      </p>

      <div class="mt-6 flex flex-wrap gap-3">
        <a href="#plans" class="inline-flex items-center gap-3 bg-gradient-to-r from-sky-500 to-indigo-500 text-black px-5 py-3 rounded-lg font-semibold shadow-lg">View Dedicated Plans</a>
        <a href="#" class="inline-flex items-center gap-3 border border-white/6 px-5 py-3 rounded-lg font-medium text-sky-200">Contact Sales</a>
      </div>

      <div class="mt-8 grid grid-cols-2 sm:grid-cols-3 gap-3 text-sm text-sky-200/70">
        <div class="glass px-4 py-3 rounded-lg flex flex-col">
          <span class="font-bold text-white">Instant Setup</span>
          <span class="text-xs">Servers ready in <strong>minutes</strong></span>
        </div>
        <div class="glass px-4 py-3 rounded-lg flex flex-col">
          <span class="font-bold text-white">DDoS Protection</span>
          <span class="text-xs">Enterprise-grade mitigation</span>
        </div>
        <div class="glass px-4 py-3 rounded-lg flex flex-col">
          <span class="font-bold text-white">Full Root Access</span>
          <span class="text-xs">Manage all server settings</span>
        </div>
      </div>
    </div>

    <div class="enter-up">
      <div class="relative glass p-6 rounded-2xl shadow-2xl border border-white/6">
        <div class="badge-top">Popular</div>
        <div class="flex items-start gap-4">
          <div>
            <h3 class="text-2xl font-extrabold">AMD Ryzen 9 5950X</h3>
            <p class="text-sky-200/70 text-sm mt-1">16 cores / 32 threads</p>
          </div>
          <div class="ml-auto text-right">
            <div class="text-xs text-sky-300">Starting at</div>
            <div class="text-4xl font-extrabold">€160<span class="text-sm">/mo</span></div>
            <div class="text-xs text-sky-300">or €1800/year</div>
          </div>
        </div>

        <ul class="mt-6 space-y-3 text-sm text-sky-200/70">
          <li>✓ 128 GB DDR4 RAM</li>
          <li>✓ 2x 1000 GB NVMe Datacenter SSD</li>
          <li>✓ 10 Gbit/s</li>
          <li>✓ 24/7 DDoS Protection</li>
          <li>✓ PletX DDoS Protection</li>
        </ul>

        <div class="mt-6 flex flex-col sm:flex-row gap-3">
          <a href="#" class="flex-1 text-center py-3 rounded-lg bg-gradient-to-r from-sky-500 to-indigo-500 text-black font-semibold">Order Dedicated Pro</a>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- Dedicated Plans Section -->
<section id="plans" class="max-w-6xl mx-auto px-6 py-12">
  <div class="text-center mb-8">
    <h2 class="text-3xl font-extrabold">Choose Your Dedicated Plan</h2>
    <p class="text-sky-200/70 mt-2">From small projects to high-demand applications — scale easily with VelocityHost.</p>
  </div>

  <div class="grid md:grid-cols-3 gap-6">
    <!-- AMD Ryzen 7 7700 -->
    <div class="glass p-6 rounded-2xl enter-up">
      <div class="flex items-center justify-between">
        <div>
          <h3 class="font-bold text-lg">AMD Ryzen 7 7700</h3>
          <p class="text-xs text-sky-200/60">8 cores / 16 threads</p>
        </div>
        <div class="text-right">
          <div class="text-2xl font-extrabold">€125<span class="text-sm">/mo</span></div>
          <div class="text-xs text-sky-300">128 GB DDR5 RAM</div>
        </div>
      </div>
      <ul class="mt-4 text-sm text-sky-200/70 space-y-2">
        <li>• 2x 500 GB NVMe Datacenter SSD</li>
        <li>• 10 Gbit/s</li>
        <li>• PletX DDoS Protection</li>
      </ul>
      <div class="mt-6">
        <a href="#" class="block text-center py-3 rounded-lg bg-gradient-to-r from-sky-500 to-indigo-500 text-black font-semibold">Order Starter</a>
      </div>
    </div>

    <!-- AMD Ryzen 9 7900X -->
    <div class="relative glass p-6 rounded-2xl shadow-lg border border-white/6 enter-up">
      <div class="badge-top">Best value</div>
      <div class="flex items-center justify-between">
        <div>
          <h3 class="font-bold text-lg">AMD Ryzen 9 7900X</h3>
          <p class="text-xs text-sky-200/60">8 cores / 16 threads</p>
        </div>
        <div class="text-right">
          <div class="text-2xl font-extrabold">€170<span class="text-sm">/mo</span></div>
          <div class="text-xs text-sky-300">128 GB DDR5 RAM</div>
        </div>
      </div>
      <ul class="mt-4 text-sm text-sky-200/70 space-y-2">
        <li>• 2x 1000 GB NVMe Datacenter SSD</li>
        <li>• 10 Gbit/s</li>
        <li>• PletX DDoS Protection</li>
      </ul>
      <div class="mt-6 flex flex-col sm:flex-row gap-3">
        <a href="#" class="flex-1 text-center py-3 rounded-lg bg-gradient-to-r from-sky-500 to-indigo-500 text-black font-semibold">Order Pro</a>
      </div>
    </div>

    <!-- Ultra Dedicated -->
    <div class="glass p-6 rounded-2xl enter-up">
      <div class="flex items-center justify-between">
        <div>
          <h3 class="font-bold text-lg">AMD Ryzen 9 7950X3D</h3>
          <p class="text-xs text-sky-200/60">16 cores / 32 threads</p>
        </div>
        <div class="text-right">
          <div class="text-2xl font-extrabold">€210<span class="text-sm">/mo</span></div>
          <div class="text-xs text-sky-300">128 GB DDR5 RAM</div>
        </div>
      </div>
      <ul class="mt-4 text-sm text-sky-200/70 space-y-2">
        <li>• 2x 1000 GB NVMe Datacenter SSD</li>
        <li>• 10 Gbit/s</li>
        <li>• PletX DDoS Protection</li>
      </ul>
      <div class="mt-6">
        <a href="#" class="block text-center py-3 rounded-lg bg-gradient-to-r from-sky-500 to-indigo-500 text-black font-semibold">Order Ultra</a>
      </div>
    </div>
  </div>
</section>

        <!-- Footer (same as your current structure) -->
        <?php include 'includes/footer.php'; ?>

<!-- FontAwesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</body>
</html>
