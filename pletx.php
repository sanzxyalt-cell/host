<!DOCTYPE html>
<html lang="en">
<head>

<!-- SEO for pletX.php -->

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>VelocityHost | DDoS Protected Hosting</title>
<meta name="description"
    content="VelocityHost provides high-performance hosting with advanced DDoS protection for game servers, VPS, and web services. Keep your servers safe and online 24/7.">
<meta name="keywords"
    content="DDoS Protection, DDoS Protected Hosting, Game Server Hosting, VPS Hosting, Secure Hosting, VelocityHost, CS 1.6, FiveM, SAMP, MTA, Minecraft">
<meta name="author" content="VelocityHost.tn">
<link rel="canonical" href="https://velocityhost.tn/pletx.php">

<!-- Open Graph / Facebook -->
<meta property="og:site_name" content="VelocityHost">
<meta property="og:title" content="VelocityHost | DDoS Protected Hosting">
<meta property="og:description"
    content="Keep your servers safe with VelocityHost's advanced DDoS protection. Perfect for game servers, VPS, and web hosting.">
<meta property="og:type" content="website">
<meta property="og:locale" content="en_US">
<meta property="og:url" content="https://velocityhost.tn/pletx.php">
<meta property="og:image" content="https://velocityhost.tn/assets/imgs/hero.webp">

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="VelocityHost | DDoS Protected Hosting">
<meta name="twitter:description"
    content="Protect your servers with VelocityHost's advanced DDoS protection. Reliable, secure, and high-performance hosting.">
<meta name="twitter:image" content="https://velocityhost.tn/assets/imgs/hero.webp">

<!-- Favicon -->
<link rel="icon" href="assets/imgs/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" sizes="180x180" href="assets/imgs/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/imgs/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/imgs/favicon-16x16.png">
<meta name="msapplication-TileColor" content="#2d89ef">
<meta name="theme-color" content="#ffffff">

<!-- SEO for pletX.php -->

  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            brand: {
              50:'#eef6ff',100:'#d9eaff',200:'#bcd9ff',300:'#8ac0ff',400:'#54a5ff',
              500:'#2d8bff',600:'#1e6fe6',700:'#1858b4',800:'#123f80',900:'#0c2a57'
            },
            ink: { 900:'#0a0f1a', 800:'#0b1220', 700:'#0e1a2f' }
          },
          boxShadow: {
            glow: '0 10px 30px rgba(45,139,255,.35)',
            glowStrong: '0 15px 45px rgba(45,139,255,.55)'
          },
          backdropBlur: { xs: '2px' },
          borderRadius: { '3xl':'1.75rem' },
          keyframes: {
            float: { '0%,100%':{transform:'translateY(0)'}, '50%':{transform:'translateY(-8px)'} },
            shimmer: { '0%':{backgroundPosition:'-200% 0'}, '100%':{backgroundPosition:'200% 0'} },
            blob: { '0%,100%':{transform:'translate(0,0) scale(1)'}, '50%':{transform:'translate(10px,-20px) scale(1.05)'} }
          },
          animation: {
            float:'float 5s ease-in-out infinite',
            blob:'blob 14s ease-in-out infinite',
            blob2:'blob 18s ease-in-out infinite',
            blob3:'blob 22s ease-in-out infinite'
          }
        }
      }
    }
  </script>

  <!-- Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>

  <style>
    /* Global background */
    body { background: radial-gradient(1200px 600px at 20% 0%, rgba(45,139,255,.15), transparent 60%), radial-gradient(900px 500px at 90% 20%, rgba(124,58,237,.12), transparent 60%), linear-gradient(140deg,#0a0f1a,#0b1220 45%,#0e1a2f); }

    /* Glass card */
    .glass {
      background: linear-gradient(180deg, rgba(255,255,255,.06), rgba(255,255,255,.02));
      border: 1px solid rgba(255,255,255,.08);
      backdrop-filter: blur(12px) saturate(140%);
    }

    /* Gradient border utility */
    .gradient-border {
      position: relative;
    }
    .gradient-border::before {
      content:'';
      position:absolute; inset:0; padding:1px; border-radius:inherit;
      background: linear-gradient(90deg, rgba(45,139,255,.7), rgba(124,58,237,.7), rgba(45,139,255,.7));
      -webkit-mask:linear-gradient(#000 0 0) content-box, linear-gradient(#000 0 0);
      -webkit-mask-composite: xor; mask-composite: exclude;
      pointer-events:none;
    }

    /* Particle canvas takes full hero */
    #particles { position:absolute; inset:0; pointer-events:none; }
    .shimmer {
      background: linear-gradient(90deg, rgba(255,255,255,.05) 25%, rgba(255,255,255,.15) 50%, rgba(255,255,255,.05) 75%);
      background-size: 200% 100%;
      animation: shimmer 4s linear infinite;
    }

    /* Table hover */
    .tbl tr:hover td { background-color: rgba(45,139,255,.06); }

    /* Sticky first column on wide tables */
    @media (min-width: 1024px) {
      .sticky-col { position: sticky; left: 0; z-index: 2; }
      .sticky-head { position: sticky; left: 0; z-index: 3; }
    }
  </style>
</head>

    <!-- Navbar (same as your current structure) -->
<?php include 'includes/navbar.php'; ?>


<body class="text-white selection:bg-brand-500/30 selection:text-white">

  <!-- HERO -->
  <header class="relative overflow-hidden">
    <!-- animated blobs -->
    <div class="pointer-events-none absolute -top-24 -left-24 h-80 w-80 rounded-full bg-brand-500/20 blur-3xl animate-blob"></div>
    <div class="pointer-events-none absolute top-10 right-10 h-96 w-96 rounded-full bg-purple-600/20 blur-3xl animate-blob2"></div>
    <div class="pointer-events-none absolute bottom-0 left-1/3 h-[28rem] w-[28rem] rounded-full bg-blue-400/10 blur-3xl animate-blob3"></div>

    <div class="relative mx-auto max-w-7xl px-6 pt-24 pb-20 lg:px-12 lg:pt-28 lg:pb-24">
      <div class="grid lg:grid-cols-2 gap-10 items-center">
        <div>
          <div class="inline-flex items-center gap-2 rounded-full border border-white/10 px-3 py-1 text-sm text-white/70 glass">
            <span class="h-2 w-2 rounded-full bg-emerald-400 animate-pulse"></span>
            Always-on Mitigation
          </div>

          <h1 class="mt-5 text-4xl sm:text-5xl lg:text-6xl font-extrabold leading-tight tracking-tight">
            PletX <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-400 via-white to-brand-500 shimmer">DDoS Protection</span>
          </h1>
          <p class="mt-5 text-lg text-white/70 max-w-xl">
            Purpose-built for latency-sensitive workloads. Intelligent L3–L7 detection, permanent mitigation, and premium connectivity — engineered for game hosting and high-traffic services.
          </p>

          <div class="mt-8 flex flex-wrap gap-3">
            <a href="#compare" class="group inline-flex items-center gap-2 rounded-2xl bg-brand-500 px-6 py-3 font-semibold text-black shadow-glow transition hover:shadow-glowStrong">
              Compare Providers
              <i class="fa-solid fa-arrow-right group-hover:translate-x-0.5 transition"></i>
            </a>
            <a href="#features" class="inline-flex items-center gap-2 rounded-2xl glass px-6 py-3 font-semibold text-white hover:bg-white/5 transition">
              See Features
            </a>
          </div>

          <!-- trust chips -->
          <div class="mt-8 flex flex-wrap items-center gap-4 text-sm text-white/60">
            <div class="flex items-center gap-2"><i class="fa-solid fa-gauge-high text-brand-400"></i> Ultra-low latency</div>
            <div class="flex items-center gap-2"><i class="fa-solid fa-shield-halved text-brand-400"></i> Permanent mitigation</div>
            <div class="flex items-center gap-2"><i class="fa-solid fa-network-wired text-brand-400"></i> Premium transit</div>
          </div>
        </div>

        <!-- hero card -->
        <div class="relative">
          <canvas id="particles"></canvas>
          <div class="gradient-border rounded-3xl glass p-6 lg:p-8 relative">
            <div class="rounded-2xl bg-gradient-to-br from-white/5 to-transparent p-6">
              <div class="flex items-center justify-between">
                <div class="text-white/80">
                  <p class="text-sm">Live Attack Surface</p>
                  <p class="text-2xl font-bold mt-1">Protected</p>
                </div>
                <div class="h-12 w-12 rounded-2xl bg-brand-500/20 flex items-center justify-center">
                  <i class="fa-solid fa-bolt text-brand-400 text-xl"></i>
                </div>
              </div>
              <div class="mt-6 grid grid-cols-3 gap-4 text-center">
                <div class="rounded-2xl bg-white/5 p-4">
                  <p class="text-2xl font-extrabold">L3/L4</p>
                  <p class="text-xs text-white/60 mt-1">Volumetric</p>
                </div>
                <div class="rounded-2xl bg-white/5 p-4">
                  <p class="text-2xl font-extrabold">L7</p>
                  <p class="text-xs text-white/60 mt-1">Application</p>
                </div>
                <div class="rounded-2xl bg-white/5 p-4">
                  <p class="text-2xl font-extrabold">BGP</p>
                  <p class="text-xs text-white/60 mt-1">Anycast</p>
                </div>
              </div>
              <div class="mt-6 h-2 w-full rounded-full bg-white/10 overflow-hidden">
                <div class="h-full w-3/4 bg-gradient-to-r from-brand-400 to-purple-500"></div>
              </div>
              <p class="mt-3 text-xs text-white/50">Real-time filtering without scrubbing detours.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- FEATURES -->
  <section id="features" class="mx-auto max-w-7xl px-6 lg:px-12 py-16 lg:py-20">
    <div class="text-center max-w-3xl mx-auto">
      <h2 class="text-3xl lg:text-4xl font-extrabold">Why teams choose <span class="text-brand-400">PletX</span></h2>
      <p class="mt-3 text-white/70">Pro-grade stack, tuned for games and realtime apps.</p>
    </div>

    <div class="mt-10 grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
      <!-- card -->
      <div class="gradient-border rounded-2xl glass p-6 hover:translate-y-[-4px] transition">
        <div class="h-12 w-12 rounded-xl bg-brand-500/20 flex items-center justify-center mb-4"><i class="fa-solid fa-layer-group text-brand-400"></i></div>
        <h3 class="font-semibold text-lg">Network Tbps Scale</h3>
        <p class="text-sm text-white/70 mt-2">Massive headroom to absorb the largest volumetric events.</p>
      </div>
      <div class="gradient-border rounded-2xl glass p-6 hover:translate-y-[-4px] transition">
        <div class="h-12 w-12 rounded-xl bg-brand-500/20 flex items-center justify-center mb-4"><i class="fa-solid fa-route text-brand-400"></i></div>
        <h3 class="font-semibold text-lg">BGP + BYOIP</h3>
        <p class="text-sm text-white/70 mt-2">Advertise your own space with flexible anycast policies.</p>
      </div>
      <div class="gradient-border rounded-2xl glass p-6 hover:translate-y-[-4px] transition">
        <div class="h-12 w-12 rounded-xl bg-brand-500/20 flex items-center justify-center mb-4"><i class="fa-solid fa-shield text-brand-400"></i></div>
        <h3 class="font-semibold text-lg">Permanent Mitigation</h3>
        <p class="text-sm text-white/70 mt-2">Always-on filtering — no on-demand cutovers, no warm-ups.</p>
      </div>
      <div class="gradient-border rounded-2xl glass p-6 hover:translate-y-[-4px] transition">
        <div class="h-12 w-12 rounded-xl bg-brand-500/20 flex items-center justify-center mb-4"><i class="fa-solid fa-plug text-brand-400"></i></div>
        <h3 class="font-semibold text-lg">Premium Connectivity</h3>
        <p class="text-sm text-white/70 mt-2">Low-loss paths and top-tier transit to keep ping stable.</p>
      </div>
    </div>
  </section>

  <!-- COMPARISON -->
  <section id="compare" class="bg-ink-800/60 border-y border-white/10 py-16">
    <div class="mx-auto max-w-7xl px-6 lg:px-12">
      <div class="flex items-end justify-between flex-wrap gap-6">
        <div>
          <h2 class="text-3xl lg:text-4xl font-extrabold">PletX vs other DDoS providers</h2>
          <p class="mt-2 text-white/70">Based on the feature matrix provided: Path Network, StormWall, Cosmic Guard, and Voxility.</p>
        </div>
        <div class="inline-flex items-center gap-2 rounded-2xl glass px-4 py-2">
          <i class="fa-solid fa-circle-info text-brand-400"></i>
          <span class="text-sm text-white/70">Hover rows to highlight</span>
        </div>
      </div>

      <div class="mt-8 overflow-x-auto rounded-2xl gradient-border">
        <table class="min-w-[900px] w-full tbl border-separate border-spacing-0">
          <thead>
            <tr class="bg-white/5">
              <th class="sticky-head text-left px-5 py-4 font-semibold">Features</th>
              <th class="px-5 py-4 font-semibold">PletX</th>
              <th class="px-5 py-4 font-semibold">Path Network</th>
              <th class="px-5 py-4 font-semibold">StormWall</th>
              <th class="px-5 py-4 font-semibold">Cosmic Guard</th>
              <th class="px-5 py-4 font-semibold">Voxility</th>
            </tr>
          </thead>
          <tbody class="text-center">
            <!-- Utility SVGs -->
            <svg width="0" height="0" class="absolute">
              <symbol id="check" viewBox="0 0 24 24"><path fill="currentColor" d="M9 16.2 4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4z"/></symbol>
              <symbol id="times" viewBox="0 0 24 24"><path fill="currentColor" d="m18.3 5.7-12.6 12.6 1.4 1.4 12.6-12.6zM6.7 5.7 5.3 7.1l12.6 12.6 1.4-1.4z"/></symbol>
            </svg>

            <!-- Row helper -->
            <script>
              // just to avoid duplication in the markup
              function cell(icon) { return `<div class="inline-flex h-8 w-8 items-center justify-center rounded-full ${icon==='check'?'bg-emerald-500/15 text-emerald-400':'bg-rose-500/15 text-rose-400'}"><svg width="18" height="18"><use href="#${icon}"/></svg></div>` }
            </script>

            <!-- Matrix rows (from your supplied table) -->
            <tr class="border-t border-white/10 hover:bg-white/5 transition">
              <td class="sticky-col text-left px-5 py-4 bg-transparent">Network Tbps Scale</td>
              <td class="px-5 py-4"><div class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-emerald-500/15 text-emerald-400"><svg width="18" height="18"><use href="#check"/></svg></div></td>
              <td class="px-5 py-4"><div class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-emerald-500/15 text-emerald-400"><svg width="18" height="18"><use href="#check"/></svg></div></td>
              <td class="px-5 py-4"><div class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-emerald-500/15 text-emerald-400"><svg width="18" height="18"><use href="#check"/></svg></div></td>
              <td class="px-5 py-4"><div class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-emerald-500/15 text-emerald-400"><svg width="18" height="18"><use href="#check"/></svg></div></td>
              <td class="px-5 py-4"><div class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-emerald-500/15 text-emerald-400"><svg width="18" height="18"><use href="#check"/></svg></div></td>
            </tr>

            <tr class="border-t border-white/10 hover:bg-white/5 transition">
              <td class="sticky-col text-left px-5 py-4 bg-transparent">BGP</td>
              <td class="px-5 py-4"><div class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-emerald-500/15 text-emerald-400"><svg width="18" height="18"><use href="#check"/></svg></div></td>
              <td class="px-5 py-4"><div class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-emerald-500/15 text-emerald-400"><svg width="18" height="18"><use href="#check"/></svg></div></td>
              <td class="px-5 py-4"><div class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-emerald-500/15 text-emerald-400"><svg width="18" height="18"><use href="#check"/></svg></div></td>
              <td class="px-5 py-4"><div class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-emerald-500/15 text-emerald-400"><svg width="18" height="18"><use href="#check"/></svg></div></td>
              <td class="px-5 py-4"><div class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-emerald-500/15 text-emerald-400"><svg width="18" height="18"><use href="#check"/></svg></div></td>
            </tr>

            <tr class="border-t border-white/10 hover:bg-white/5 transition">
              <td class="sticky-col text-left px-5 py-4 bg-transparent">BYOIP</td>
              <td class="px-5 py-4"><div class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-emerald-500/15 text-emerald-400"><svg width="18" height="18"><use href="#check"/></svg></div></td>
              <td class="px-5 py-4"><div class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-emerald-500/15 text-emerald-400"><svg width="18" height="18"><use href="#check"/></svg></div></td>
              <td class="px-5 py-4"><div class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-emerald-500/15 text-emerald-400"><svg width="18" height="18"><use href="#check"/></svg></div></td>
              <td class="px-5 py-4"><div class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-emerald-500/15 text-emerald-400"><svg width="18" height="18"><use href="#check"/></svg></div></td>
              <td class="px-5 py-4"><div class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-emerald-500/15 text-emerald-400"><svg width="18" height="18"><use href="#check"/></svg></div></td>
            </tr>

            <tr class="border-t border-white/10 hover:bg-white/5 transition">
              <td class="sticky-col text-left px-5 py-4 bg-transparent">Permanent Mitigation System</td>
              <td class="px-5 py-4"><div class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-emerald-500/15 text-emerald-400"><svg width="18" height="18"><use href="#check"/></svg></div></td>
              <td class="px-5 py-4"><div class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-emerald-500/15 text-emerald-400"><svg width="18" height="18"><use href="#check"/></svg></div></td>
              <td class="px-5 py-4"><div class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-rose-500/15 text-rose-400"><svg width="18" height="18"><use href="#times"/></svg></div></td>
              <td class="px-5 py-4"><div class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-emerald-500/15 text-emerald-400"><svg width="18" height="18"><use href="#check"/></svg></div></td>
              <td class="px-5 py-4"><div class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-rose-500/15 text-rose-400"><svg width="18" height="18"><use href="#times"/></svg></div></td>
            </tr>

            <tr class="border-t border-white/10 hover:bg-white/5 transition">
              <td class="sticky-col text-left px-5 py-4 bg-transparent">Premium Connectivity</td>
              <td class="px-5 py-4"><div class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-emerald-500/15 text-emerald-400"><svg width="18" height="18"><use href="#check"/></svg></div></td>
              <td class="px-5 py-4"><div class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-emerald-500/15 text-emerald-400"><svg width="18" height="18"><use href="#check"/></svg></div></td>
              <td class="px-5 py-4"><div class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-emerald-500/15 text-emerald-400"><svg width="18" height="18"><use href="#check"/></svg></div></td>
              <td class="px-5 py-4"><div class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-rose-500/15 text-rose-400"><svg width="18" height="18"><use href="#times"/></svg></div></td>
              <td class="px-5 py-4"><div class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-emerald-500/15 text-emerald-400"><svg width="18" height="18"><use href="#check"/></svg></div></td>
            </tr>

            <tr class="border-t border-white/10 hover:bg-white/5 transition">
              <td class="sticky-col text-left px-5 py-4 bg-transparent">Trial Possibility</td>
              <td class="px-5 py-4"><div class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-emerald-500/15 text-emerald-400"><svg width="18" height="18"><use href="#check"/></svg></div></td>
              <td class="px-5 py-4"><div class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-emerald-500/15 text-emerald-400"><svg width="18" height="18"><use href="#check"/></svg></div></td>
              <td class="px-5 py-4"><div class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-emerald-500/15 text-emerald-400"><svg width="18" height="18"><use href="#check"/></svg></div></td>
              <td class="px-5 py-4"><div class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-rose-500/15 text-rose-400"><svg width="18" height="18"><use href="#times"/></svg></div></td>
              <td class="px-5 py-4"><div class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-rose-500/15 text-rose-400"><svg width="18" height="18"><use href="#times"/></svg></div></td>
            </tr>

            <tr class="border-t border-white/10 hover:bg-white/5 transition">
              <td class="sticky-col text-left px-5 py-4 bg-transparent">Symmetric Protection</td>
              <td class="px-5 py-4"><div class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-emerald-500/15 text-emerald-400"><svg width="18" height="18"><use href="#check"/></svg></div></td>
              <td class="px-5 py-4"><div class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-emerald-500/15 text-emerald-400"><svg width="18" height="18"><use href="#check"/></svg></div></td>
              <td class="px-5 py-4"><div class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-rose-500/15 text-rose-400"><svg width="18" height="18"><use href="#times"/></svg></div></td>
              <td class="px-5 py-4"><div class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-rose-500/15 text-rose-400"><svg width="18" height="18"><use href="#times"/></svg></div></td>
              <td class="px-5 py-4"><div class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-rose-500/15 text-rose-400"><svg width="18" height="18"><use href="#times"/></svg></div></td>
            </tr>

            <tr class="border-t border-white/10 hover:bg-white/5 transition">
              <td class="sticky-col text-left px-5 py-4 bg-transparent">Automatic Port Learning</td>
              <td class="px-5 py-4"><div class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-emerald-500/15 text-emerald-400"><svg width="18" height="18"><use href="#check"/></svg></div></td>
              <td class="px-5 py-4"><div class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-rose-500/15 text-rose-400"><svg width="18" height="18"><use href="#times"/></svg></div></td>
              <td class="px-5 py-4"><div class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-rose-500/15 text-rose-400"><svg width="18" height="18"><use href="#times"/></svg></div></td>
              <td class="px-5 py-4"><div class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-rose-500/15 text-rose-400"><svg width="18" height="18"><use href="#times"/></svg></div></td>
              <td class="px-5 py-4"><div class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-rose-500/15 text-rose-400"><svg width="18" height="18"><use href="#times"/></svg></div></td>
            </tr>

            <tr class="border-t border-white/10 hover:bg-white/5 transition">
              <td class="sticky-col text-left px-5 py-4 bg-transparent">Custom Solutions at no cost</td>
              <td class="px-5 py-4"><div class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-emerald-500/15 text-emerald-400"><svg width="18" height="18"><use href="#check"/></svg></div></td>
              <td class="px-5 py-4"><div class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-rose-500/15 text-rose-400"><svg width="18" height="18"><use href="#times"/></svg></div></td>
              <td class="px-5 py-4"><div class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-rose-500/15 text-rose-400"><svg width="18" height="18"><use href="#times"/></svg></div></td>
              <td class="px-5 py-4"><div class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-rose-500/15 text-rose-400"><svg width="18" height="18"><use href="#times"/></svg></div></td>
              <td class="px-5 py-4"><div class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-rose-500/15 text-rose-400"><svg width="18" height="18"><use href="#times"/></svg></div></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="mx-auto max-w-7xl px-6 lg:px-12 py-16">
    <div class="gradient-border rounded-3xl glass p-8 lg:p-12 text-center">
      <h3 class="text-2xl lg:text-3xl font-extrabold">Ready for cleaner ping and real protection?</h3>
      <p class="mt-3 text-white/70 max-w-2xl mx-auto">Plug PletX in front of your nodes with BGP or GRE tunneling. Keep your IP space — keep your performance.</p>
      <div class="mt-7 flex items-center justify-center gap-3">
        <a href="#compare" class="inline-flex items-center gap-2 rounded-2xl bg-brand-500 px-6 py-3 font-semibold text-black shadow-glow transition hover:shadow-glowStrong">
          View Comparison
          <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>
    </div>
  </section>

 <!-- Footer (same as your current structure) -->
<?php include 'includes/footer.php'; ?>

  <!-- Particles + small utilities -->
  <script>
    document.getElementById('year').textContent = new Date().getFullYear();

    // Lightweight hero particles
    (function(){
      const canvas = document.getElementById('particles');
      if(!canvas) return;
      const ctx = canvas.getContext('2d');
      let w, h, dpr = window.devicePixelRatio || 1;
      const N = 70;
      let pts = [];

      function resize(){
        w = canvas.clientWidth || canvas.parentElement.clientWidth;
        h = canvas.clientHeight || 360;
        canvas.width = w * dpr; canvas.height = h * dpr;
        ctx.setTransform(dpr,0,0,dpr,0,0);
      }
      function init(){
        pts = Array.from({length:N},()=>({
          x: Math.random()*w,
          y: Math.random()*h,
          vx: (Math.random()-.5)*0.4,
          vy: (Math.random()-.5)*0.4,
          r: Math.random()*2+0.6,
          a: Math.random()*0.6+0.2
        }));
      }
      function step(){
        ctx.clearRect(0,0,w,h);
        pts.forEach(p=>{
          p.x+=p.vx; p.y+=p.vy;
          if(p.x<0||p.x>w) p.vx*=-1;
          if(p.y<0||p.y>h) p.vy*=-1;

          ctx.beginPath();
          ctx.arc(p.x,p.y,p.r,0,Math.PI*2);
          ctx.fillStyle = `rgba(45,139,255,${p.a})`;
          ctx.fill();
        });
        // subtle links
        for(let i=0;i<N;i++){
          for(let j=i+1;j<N;j++){
            const a=pts[i], b=pts[j];
            const dx=a.x-b.x, dy=a.y-b.y, dist=Math.hypot(dx,dy);
            if(dist<90){
              ctx.strokeStyle=`rgba(124,58,237,${0.08*(1-dist/90)})`;
              ctx.lineWidth=1;
              ctx.beginPath(); ctx.moveTo(a.x,a.y); ctx.lineTo(b.x,b.y); ctx.stroke();
            }
          }
        }
        requestAnimationFrame(step);
      }
      resize(); init(); step();
      window.addEventListener('resize', ()=>{ resize(); init(); });
    })();

    // Simple scroll reveal (Hero UI feel without external libs)
    const reveal = () => {
      document.querySelectorAll('.glass, .gradient-border, section h2').forEach(el=>{
        const r = el.getBoundingClientRect();
        if(r.top < window.innerHeight * 0.9){
          el.style.transition = 'transform .7s ease, opacity .7s ease, box-shadow .4s ease';
          el.style.transform = 'translateY(0)';
          el.style.opacity = '1';
        } else {
          el.style.transform = 'translateY(12px)';
          el.style.opacity = '.0';
        }
      });
    };
    reveal();
    window.addEventListener('scroll', reveal, { passive:true });
  </script>
</body>
</html>
