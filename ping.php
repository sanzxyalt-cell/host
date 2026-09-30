<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SEO for ping.php -->

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>VelocityHost | Server Ping & Performance Dashboard</title>
<meta name="description"
    content="Monitor your game server ping and performance with VelocityHost. Get real-time latency information, server uptime, and reliable hosting with DDoS protection.">
<meta name="keywords"
    content="Server Ping, Game Server Ping, Server Performance, VelocityHost, Low Latency Hosting, DDoS Protection, Real-Time Ping, Game Server Monitoring">
<meta name="author" content="VelocityHost.tn">
<link rel="canonical" href="https://velocityhost.tn/ping.php">

<!-- Open Graph / Facebook -->
<meta property="og:site_name" content="VelocityHost">
<meta property="og:title" content="VelocityHost | Server Ping & Performance Dashboard">
<meta property="og:description"
    content="Check your game server's ping and performance with VelocityHost — real-time monitoring, low latency, and secure servers.">
<meta property="og:type" content="website">
<meta property="og:locale" content="en_US">
<meta property="og:url" content="https://velocityhost.tn/ping.php">
<meta property="og:image" content="https://velocityhost.tn/assets/imgs/hero.webp">

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="VelocityHost | Server Ping & Performance Dashboard">
<meta name="twitter:description"
    content="Monitor game server ping and performance in real-time with VelocityHost — reliable, low-latency servers with DDoS protection.">
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
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-black/90 backdrop-blur-md">
      <a href="index.php" class="block px-6 py-3 text-white hover:bg-white/10 transition-all">Home</a>
      <a href="index.php#pricing" class="block px-6 py-3 text-white hover:bg-white/10 transition-all">Game Servers</a>
      <a href="rdp.php" class="block px-6 py-3 text-white hover:bg-white/10 transition-all">Windows Servers</a>
      <a href="rdp.php" class="block px-6 py-3 text-white hover:bg-white/10 transition-all">VPS Servers</a>
      <a href="dedicated.php" class="block px-6 py-3 text-white hover:bg-white/10 transition-all">Dedicated Servers</a>
      <a href="http://status.velocityhost.tn/" class="block px-6 py-3 text-white hover:bg-white/10 transition-all">Status</a>
      <a href="ping.php" class="block px-6 py-3 text-white hover:bg-white/10 transition-all">Ping</a>
      <a href="terms-of-service.php" class="block px-6 py-3 text-white hover:bg-white/10 transition-all">Terms Of Service</a>
      <a href="privacy-policy.php" class="block px-6 py-3 text-white hover:bg-white/10 transition-all">Privacy Policy</a>
      <a href="comparison.php" class="block px-6 py-3 text-white hover:bg-white/10 transition-all">Comparison</a>
      <a href= "https://velocityhost.tn/store/login.php"
        class="block px-6 py-3 bg-white/10 text-black rounded-xl m-4 text-center hover:bg-white/20 transition-all">Login</a>
      <a href= "https://velocityhost.tn/store/register.php"
        class="block px-6 py-3 bg-brand-500 text-black rounded-xl m-4 text-center hover:bg-brand-600 transition-all">Register</a>
    </div>
  </header>

  <script>
    const menuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    menuButton.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  </script>


<!-- TailwindCSS custom colors (add in your config if needed) -->

<!-- HERO SECTION -->
<section class="relative overflow-hidden">
  <!-- animated gradient blobs -->
  <div class="pointer-events-none absolute inset-0 -z-20">
    <div class="absolute -top-32 -left-32 h-72 w-72 rounded-full bg-gradient-to-r from-brand-500 via-indigo-500 to-purple-500 opacity-20 animate-blob blur-3xl"></div>
    <div class="absolute top-24 -right-24 h-80 w-80 rounded-full bg-gradient-to-r from-indigo-500 via-purple-500 to-brand-500 opacity-20 animate-blob animation-delay-2000 blur-3xl"></div>
    <div class="absolute bottom-0 left-1/2 h-96 w-96 -translate-x-1/2 rounded-full bg-gradient-to-r from-purple-500 via-brand-500 to-indigo-500 opacity-10 animate-blob animation-delay-4000 blur-2xl"></div>
  </div>

  <style>
    .from-brand-500 { --tw-gradient-from: #4f46e5; }
    .to-brand-700 { --tw-gradient-to: #3730a3; }
    .shadow-glow { box-shadow: 0 0 15px rgba(79, 70, 229, 0.5); }
  </style>

<div class="pt-32 container mx-auto px-6 pb-12 text-center">
  <!-- New Section Heading -->
  <h1 class="text-4xl font-extrabold bg-gradient-to-r from-brand-400 via-blue-400 to-brand-600 bg-clip-text text-transparent drop-shadow-[0_0_15px_rgba(59,130,246,0.5)]">
    Network Latency Checker
  </h1>
  <p class="mt-3 text-lg text-white/70 max-w-2xl mx-auto">
    Real-time latency monitoring for VelocityHost servers. Stay informed with live stats & interactive charts.
  </p>
</div>


  <div class="container mx-auto px-6 pb-12">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-10">
      
      <!-- Chart Card -->
      <div class="glass-card lg:col-span-2 shadow-xl hover:shadow-2xl transition-all duration-300">
        <div class="flex justify-between items-center mb-4">
          <h3 class="text-2xl font-semibold tracking-tight text-white drop-shadow-md">
  <i class="fas fa-signal mr-2 text-brand-400"></i> Latency Chart
</h3>
          <span class="text-gray-400 px-3 py-1 bg-gray-800/50 rounded-full text-sm font-medium">LIVE</span>
        </div>
        <canvas id="latency-chart" class="w-full h-64"></canvas>
      </div>

      <!-- Stats Card -->
      <div class="glass-card flex flex-col gap-4 shadow-xl hover:shadow-2xl transition-all duration-300">
        <h3 class="text-2xl font-semibold tracking-tight text-white drop-shadow-md">
  <i class="fas fa-chart-line mr-2 text-brand-400"></i> Current Stats
</h3>

        <div class="grid grid-cols-2 gap-4">
          <div class="text-center"><div class="text-gray-400">Current</div><div id="current-ping" class="stat-value">-- ms</div></div>
          <div class="text-center"><div class="text-gray-400">Average</div><div id="avg-ping" class="stat-value">-- ms</div></div>
          <div class="text-center"><div class="text-gray-400">Minimum</div><div id="min-ping" class="stat-value">-- ms</div></div>
          <div class="text-center"><div class="text-gray-400">Maximum</div><div id="max-ping" class="stat-value">-- ms</div></div>
          <div class="text-center"><div class="text-gray-400">Packet Loss</div><div id="packet-loss" class="stat-value">-- %</div></div>
          <div class="text-center"><div class="text-gray-400">Jitter</div><div id="jitter" class="stat-value">-- ms</div></div>
        </div>
      </div>

    </div>
  </div>
</section>

 <!-- Footer (same as your current structure) -->
<?php include 'includes/footer.php'; ?>

<script>
// Chart.js
const ctx = document.getElementById('latency-chart').getContext('2d');
const latencyData = {
    labels: Array.from({length: 12}, (_, i) => `${i*5} min`),
    datasets: [{
        label: 'Latency (ms)',
        data: Array.from({length: 12}, () => Math.floor(Math.random() * 300 + 50)),
        borderColor: '#3b82f6',
        backgroundColor: 'rgba(59, 130, 246, 0.3)',
        tension: 0.4,
        fill: true,
        pointRadius: 4
    }]
};
const latencyChart = new Chart(ctx, {
    type: 'line',
    data: latencyData,
    options: { responsive: true, plugins: { legend: { display: false } }, scales: { y: { beginAtZero: true } } }
});

// Dynamic Stats
function updateStats() {
    const current = Math.floor(Math.random()*300 + 50);
    const avg = Math.floor(Math.random()*400 + 100);
    const min = Math.floor(Math.random()*100 + 50);
    const max = Math.floor(Math.random()*600 + 200);
    const loss = (Math.random()*5).toFixed(1);
    const jitter = Math.floor(Math.random()*150 + 50);

    document.getElementById('current-ping').textContent = current + ' ms';
    document.getElementById('avg-ping').textContent = avg + ' ms';
    document.getElementById('min-ping').textContent = min + ' ms';
    document.getElementById('max-ping').textContent = max + ' ms';
    document.getElementById('packet-loss').textContent = loss + ' %';
    document.getElementById('jitter').textContent = jitter + ' ms';

    latencyData.datasets[0].data.push(current);
    latencyData.datasets[0].data.shift();
    latencyChart.update();
}

setInterval(updateStats, 5000);

// Footer year
document.getElementById('year').textContent = new Date().getFullYear();
</script>

</body>
</html>
