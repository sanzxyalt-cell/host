<!doctype html>
<html lang="en">
<head>
  <!-- SEO for webhost.php -->

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>VelocityHost | Web Hosting</title>
<meta name="description"
    content="Host your websites with VelocityHost — fast, secure, and reliable web hosting with NvME storage, DDoS protection, and full control panel.">
<meta name="keywords"
    content="Web Hosting, NvME Hosting, DDoS Protected Hosting, VelocityHost, Reliable Hosting, PHP Hosting, MySQL Hosting">
<meta name="author" content="VelocityHost.tn">
<link rel="canonical" href="https://velocityhost.tn/webhost.php">

<!-- Open Graph / Facebook -->
<meta property="og:site_name" content="VelocityHost">
<meta property="og:title" content="VelocityHost | Web Hosting">
<meta property="og:description"
    content="High-performance and secure web hosting with VelocityHost. Fast NvME servers, full control panel, and DDoS protection for your websites.">
<meta property="og:type" content="website">
<meta property="og:locale" content="en_US">
<meta property="og:url" content="https://velocityhost.tn/webhost.php">
<meta property="og:image" content="https://velocityhost.tn/assets/imgs/hero.webp">

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="VelocityHost | Web Hosting">
<meta name="twitter:description"
    content="Host your websites with VelocityHost — fast, secure, and reliable hosting with NvME storage and DDoS protection.">
<meta name="twitter:image" content="https://velocityhost.tn/assets/imgs/hero.webp">

<!-- Favicon -->
<link rel="icon" href="assets/imgs/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" sizes="180x180" href="assets/imgs/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/imgs/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/imgs/favicon-16x16.png">
<meta name="msapplication-TileColor" content="#2d89ef">
<meta name="theme-color" content="#ffffff">

<!-- Tailwind CDN -->
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
@media(max-width:768px){
  .grid-cols-3{grid-template-columns:1fr !important}
}
</style>
</head>
<body class="animated-bg min-h-screen text-white pattern" style="background-color:var(--bg)">

<div class="bg-gradient-move"></div>
<div class="float-icon float-1">💻</div>
<div class="float-icon float-2">🌐</div>
<div class="float-icon float-3">⚡</div>

<!-- Navbar -->
<?php include 'includes/navbar.php'; ?>

<!-- HERO -->
<header class="max-w-6xl mx-auto px-6 pt-32 pb-20 relative">
  <div class="grid md:grid-cols-2 gap-8 items-center">
    <div class="enter-up">
      <small class="text-sky-300/70 font-medium uppercase tracking-wide">Web Hosting</small>
      <h1 class="text-4xl md:text-5xl font-extrabold mt-4 leading-tight">Fast & Reliable <span style="background:linear-gradient(90deg,var(--accent),var(--accent-2));-webkit-background-clip:text;background-clip:text;color:transparent">Web Hosting</span> — <span class="text-sky-300">Secure & NvME powered</span></h1>
      <p class="mt-4 text-sky-200/70 max-w-xl">Host your websites with high-speed NvME servers, enterprise DDoS protection, and a powerful control panel. Optimized for uptime and performance.</p>

      <div class="mt-6 flex flex-wrap gap-3">
        <a href="#plans" class="inline-flex items-center gap-3 bg-gradient-to-r from-sky-500 to-indigo-500 text-black px-5 py-3 rounded-lg font-semibold shadow-lg">View Web Hosting Plans</a>
      </div>

      <div class="mt-8 grid grid-cols-2 sm:grid-cols-3 gap-3 text-sm text-sky-200/70">
        <div class="glass px-4 py-3 rounded-lg flex flex-col">
          <span class="font-bold text-white">Instant Setup</span>
          <span class="text-xs">Ready in <strong>minutes</strong></span>
        </div>
        <div class="glass px-4 py-3 rounded-lg flex flex-col">
          <span class="font-bold text-white">DDoS Protection</span>
          <span class="text-xs">Enterprise-grade mitigation</span>
        </div>
        <div class="glass px-4 py-3 rounded-lg flex flex-col">
          <span class="font-bold text-white">Control Panel</span>
          <span class="text-xs">CyberPanel</span>
        </div>
      </div>
    </div>

    <div class="enter-up">
      <div class="relative glass p-6 rounded-2xl shadow-2xl border border-white/6">
        <div class="badge-top">Popular</div>
        <div class="flex items-start gap-4">
          <div>
            <h3 class="text-2xl font-extrabold">Web Elite</h3>
            <p class="text-sky-200/70 text-sm mt-1">Best for growing websites</p>
          </div>
          <div class="ml-auto text-right">
            <div class="text-xs text-sky-300">Starting at</div>
            <div class="text-4xl font-extrabold">€4.99<span class="text-sm">/mo</span></div>
            <div class="text-xs text-sky-300">or €50/year</div>
          </div>
        </div>

        <ul class="mt-6 space-y-3 text-sm text-sky-200/70">
          <li>✓ 2 vCPU / 2 GB RAM</li>
          <li>✓ 20GB NvME Storage</li>
          <li>✓ DDoS Protection</li>
          <li>✓ MySQL + PHPMyAdmin</li>
          <li>✓ Full Control Panel</li>
        </ul>

        <div class="mt-6 flex flex-col sm:flex-row gap-3">
          <a href="https://velocityhost.tn/store/index.php?rp=/store/webhost/web-nvme-elite" class="flex-1 text-center py-3 rounded-lg bg-gradient-to-r from-sky-500 to-indigo-500 text-black font-semibold">Order Web Pro</a>
        </div>

        <div class="mt-4 text-xs text-sky-300">Includes <strong>CyberPanel</strong>, FTP access, and database management support.</div>
      </div>
    </div>

  </div>
</header>

<section id="plans" class="max-w-6xl mx-auto px-6 py-12">
  <div class="text-center mb-8">
    <h2 class="text-3xl font-extrabold">Choose Your Web Hosting Plan</h2>
    <p class="text-sky-200/70 mt-2">From small personal sites to high-traffic business websites — scale easily.</p>
  </div>

  <div class="grid md:grid-cols-3 gap-6">
    <!-- Starter -->
    <div class="glass p-6 rounded-2xl enter-up">
      <div class="flex items-center justify-between">
        <div>
          <h3 class="font-bold text-lg">Starter</h3>
          <p class="text-xs text-sky-200/60">Personal websites</p>
        </div>
        <div class="text-right">
          <div class="text-2xl font-extrabold">€1.99<span class="text-sm">/mo</span></div>
          <div class="text-xs text-sky-300">1 Website</div>
        </div>
      </div>
      <ul class="mt-4 text-sm text-sky-200/70 space-y-2">
        <li>✓ 1 vCPU / 1 GB RAM</li>
        <li>✓ 10GB NvME Storage</li>
        <li>✓ DDoS Protection</li>
        <li>✓ MySQL + PHPMyAdmin</li>
        <li>✓ Full Control Panel</li>
      </ul>
      <div class="mt-6">
        <a href="https://velocityhost.tn/store/index.php?rp=/store/webhost/web-nvme-starter" class="block text-center py-3 rounded-lg bg-gradient-to-r from-sky-500 to-indigo-500 text-black font-semibold">Order Starter</a>
      </div>
    </div>

    <!-- Pro -->
    <div class="relative glass p-6 rounded-2xl shadow-lg border border-white/6 enter-up">
      <div class="badge-top">Best value</div>
      <div class="flex items-center justify-between">
        <div>
          <h3 class="font-bold text-lg">Pro</h3>
          <p class="text-xs text-sky-200/60">Recommended</p>
        </div>
        <div class="text-right">
          <div class="text-2xl font-extrabold">€3.99<span class="text-sm">/mo</span></div>
          <div class="text-xs text-sky-300">5 Websites</div>
        </div>
      </div>
      <ul class="mt-4 text-sm text-sky-200/70 space-y-2">
        <li>✓ 2 vCPU / 2 GB RAM</li>
        <li>✓ 50GB NvME Storage</li>
        <li>✓ DDoS Protection</li>
        <li>✓ MySQL + PHPMyAdmin</li>
        <li>✓ Full Control Panel</li>
      </ul>
      <div class="mt-6 flex flex-col sm:flex-row gap-3">
        <a href="https://velocityhost.tn/store/index.php?rp=/store/webhost/web-nvme-pro" class="flex-1 text-center py-3 rounded-lg bg-gradient-to-r from-sky-500 to-indigo-500 text-black font-semibold">Order Pro</a>
      </div>
    </div>

    <!-- Ultra -->
    <div class="glass p-6 rounded-2xl enter-up">
      <div class="flex items-center justify-between">
        <div>
          <h3 class="font-bold text-lg">Ultra</h3>
          <p class="text-xs text-sky-200/60">High-traffic & business</p>
        </div>
        <div class="text-right">
          <div class="text-2xl font-extrabold">€8.99<span class="text-sm">/mo</span></div>
          <div class="text-xs text-sky-300">Unlimited Websites</div>
        </div>
      </div>
      <ul class="mt-4 text-sm text-sky-200/70 space-y-2">
        <li>✓ 4 vCPU / 8 GB RAM</li>
        <li>✓ 200GB NvME Storage</li>
        <li>✓ DDoS Protection</li>
        <li>✓ MySQL + PHPMyAdmin</li>
        <li>✓ Full Control Panel</li>
      </ul>
      <div class="mt-6">
        <a href="https://velocityhost.tn/store/index.php?rp=/store/webhost/web-nvme-ultra" class="block text-center py-3 rounded-lg bg-gradient-to-r from-sky-500 to-indigo-500 text-black font-semibold">Order Ultra</a>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<?php include 'includes/footer.php'; ?>

</body>
</html>
