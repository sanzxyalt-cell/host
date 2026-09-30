<!DOCTYPE html>
<html lang="en">
<head>
  
<!-- SEO for comparison.php -->

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>VelocityHost | Compare Us With Other Hosting Providers</title>
<meta name="description"
    content="Compare VelocityHost with other hosting providers — discover why we offer better performance, low-latency game servers, advanced DDoS protection, and 24/7 support.">
<meta name="keywords"
    content="VelocityHost Comparison, Game Hosting Comparison, VPS Hosting Comparison, DDoS Protection, Low Latency Servers, Reliable Hosting, Best Game Hosting">
<meta name="author" content="VelocityHost.tn">
<link rel="canonical" href="https://velocityhost.tn/comparison.php">

<!-- Open Graph / Facebook -->
<meta property="og:site_name" content="VelocityHost">
<meta property="og:title" content="VelocityHost | Compare Us With Other Hosting Providers">
<meta property="og:description"
    content="See why VelocityHost is better than other hosting providers with fast servers, reliable uptime, and advanced DDoS protection.">
<meta property="og:type" content="website">
<meta property="og:locale" content="en_US">
<meta property="og:url" content="https://velocityhost.tn/comparison.php">
<meta property="og:image" content="https://velocityhost.tn/assets/imgs/hero.webp">

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="VelocityHost | Compare Us With Other Hosting Providers">
<meta name="twitter:description"
    content="Compare VelocityHost to other providers — find out why our game hosting, VPS, and DDoS protection services are superior.">
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
            vh: {
              bg: '#0b0e15',
              card: '#111727',
              accent: '#00c2ff',
              accent2: '#7c3aed',
              text: '#e5f2ff',
              sub: '#9fb3c8'
            }
          },
          boxShadow: {
            glow: '0 0 0 2px rgba(0,194,255,0.15), 0 20px 40px -20px rgba(0,0,0,0.6)'
          },
          borderRadius: {
            '2xl': '1.25rem',
            '3xl': '1.75rem'
          },
          keyframes: {
            floaty: {
              '0%, 100%': { transform: 'translateY(0)' },
              '50%': { transform: 'translateY(-6px)' }
            },
            shimmer: {
              '0%': { backgroundPosition: '-200% 0' },
              '100%': { backgroundPosition: '200% 0' }
            }
          },
          animation: {
            floaty: 'floaty 6s ease-in-out infinite',
            shimmer: 'shimmer 2.5s linear infinite'
          }
        }
      }
    }
  </script>
  <style>
    .grid-hero {
      background: radial-gradient(1200px 600px at 10% 0%, rgba(124,58,237,.25), transparent 60%),
                  radial-gradient(900px 600px at 90% 10%, rgba(0,194,255,.20), transparent 60%),
                  linear-gradient(180deg, #0b0e15, #0b0e15);
    }
    .noise { position: absolute; inset: 0; pointer-events:none; mix-blend-mode: overlay; opacity:.08;
      background-image: url('data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\' preserveAspectRatio=\'none\' viewBox=\'0 0 100 100\'><filter id=\'n\'><feTurbulence type=\'fractalNoise\' baseFrequency=\'0.9\' numOctaves=\'2\'/></filter><rect width=\'100%\' height=\'100%\' filter=\'url(%23n)\'/></svg>'); }
    .shimmer { background: linear-gradient(90deg, transparent, rgba(255,255,255,.08), transparent); background-size: 200% 100%; }
  </style>
</head>
<body class="bg-vh-bg text-vh-text antialiased selection:bg-vh-accent/30 selection:text-white">

 <!-- Navbar (same as your current structure) -->
<?php include 'includes/navbar.php'; ?>

  <!-- Hero -->
  <section class="grid-hero relative overflow-hidden">
    <div class="noise"></div>
    <div class="max-w-7xl mx-auto px-4 lg:px-8 py-20 md:py-28 grid md:grid-cols-2 gap-10 items-center">
      <div>
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full border border-white/10 bg-white/5 text-xs text-vh-sub mb-4">
          <span class="i-dot h-1.5 w-1.5 rounded-full bg-vh-accent animate-ping"></span>
          <span>Real results • No fluff</span>
        </div>
        <h1 class="text-4xl md:text-6xl font-black leading-[1.05] tracking-tight">The <span class="text-transparent bg-clip-text bg-gradient-to-r from-vh-accent to-vh-accent2">fair comparison</span> your servers deserve.</h1>
        <p class="mt-5 text-lg text-vh-sub max-w-xl">See how VelocityHost stacks up against two common competitors across performance, reliability, DDoS protection, and support. We built this page with transparent, verifiable metrics.</p>
        <div class="mt-8 flex flex-wrap gap-3">
          <a href="#compare" class="px-5 py-3 rounded-2xl bg-vh-accent text-black font-semibold shadow-glow">Compare Now</a>
          <a href="#benchmarks" class="px-5 py-3 rounded-2xl border border-white/10 hover:bg-white/5">View Benchmarks</a>
        </div>
        <div class="mt-8 grid grid-cols-3 gap-4 text-center">
          <div class="p-4 rounded-2xl bg-white/5 border border-white/10">
            <div class="text-2xl font-bold">99.99%</div>
            <div class="text-xs text-vh-sub">Uptime Target</div>
          </div>
          <div class="p-4 rounded-2xl bg-white/5 border border-white/10">
            <div class="text-2xl font-bold">480+ Gbps</div>
            <div class="text-xs text-vh-sub">DDoS Mitigation</div>
          </div>
          <div class="p-4 rounded-2xl bg-white/5 border border-white/10">
            <div class="text-2xl font-bold"><span id="ttf">~140 ms</span></div>
            <div class="text-xs text-vh-sub">Avg. Deploy to Live</div>
          </div>
        </div>
      </div>
      <div class="relative">
        <div class="absolute -inset-6 rounded-3xl shimmer opacity-60"></div>
        <div class="relative rounded-3xl bg-gradient-to-b from-white/10 to-white/5 border border-white/10 p-6">
          <div class="flex items-center justify-between">
            <div class="text-sm text-vh-sub">Live Comparison Widget</div>
            <div class="text-xs px-2 py-1 rounded bg-white/10 border border-white/10">Demo</div>
          </div>
          <div class="mt-4 grid grid-cols-3 gap-3 text-center text-sm">
            <div class="p-3 rounded-xl bg-vh-card/60 border border-white/10">
              <div class="text-vh-sub mb-1">Latency (EU)</div>
              <div class="font-bold text-lg">8.6 ms</div>
              <div class="text-[11px] text-emerald-300">VelocityHost</div>
            </div>
            <div class="p-3 rounded-xl bg-vh-card/40 border border-white/10">
              <div class="text-vh-sub mb-1">Competitor A</div>
              <div class="font-bold text-lg">12.4 ms</div>
              <div class="text-[11px] text-vh-sub">(higher)</div>
            </div>
            <div class="p-3 rounded-xl bg-vh-card/40 border border-white/10">
              <div class="text-vh-sub mb-1">Competitor B</div>
              <div class="font-bold text-lg">15.1 ms</div>
              <div class="text-[11px] text-vh-sub">(higher)</div>
            </div>
          </div>
          <div class="mt-6">
            <div class="text-xs text-vh-sub mb-2">Throughput under 200k pps attack</div>
            <div class="w-full h-3 bg-white/5 rounded-full overflow-hidden border border-white/10">
              <div class="h-full bg-gradient-to-r from-vh-accent to-vh-accent2" style="width: 92%"></div>
            </div>
            <div class="flex justify-between text-[11px] text-vh-sub mt-1">
              <span>VelocityHost</span>
              <span>92%</span>
            </div>
            <div class="w-full h-2 mt-3 bg-white/5 rounded-full overflow-hidden border border-white/10">
              <div class="h-full bg-white/30" style="width: 74%"></div>
            </div>
            <div class="w-full h-2 mt-2 bg-white/5 rounded-full overflow-hidden border border-white/10">
              <div class="h-full bg-white/30" style="width: 61%"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Name Inputs for Competitors (simple, client-side only) -->
  <section class="max-w-7xl mx-auto px-4 lg:px-8 mt-6">
    <div class="rounded-2xl bg-white/5 border border-white/10 p-4 flex flex-wrap items-center gap-3 text-sm text-vh-sub">
      <span class="text-white/80">Customize competitor names:</span>
      <input id="compA" class="px-3 py-2 rounded-xl bg-black/30 border border-white/10" placeholder="Competitor A" />
      <input id="compB" class="px-3 py-2 rounded-xl bg-black/30 border border-white/10" placeholder="Competitor B" />
      <button id="applyNames" class="px-4 py-2 rounded-xl bg-vh-accent/10 hover:bg-vh-accent/20 border border-vh-accent/30 text-white">Apply</button>
    </div>
  </section>

  <!-- Comparison Section -->
  <section id="compare" class="relative py-20">
    <div class="max-w-7xl mx-auto px-4 lg:px-8">
      <div class="flex items-end justify-between gap-6 flex-wrap">
        <div>
          <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight">VelocityHost vs Two Competitors</h2>
          <p class="mt-2 text-vh-sub max-w-2xl">A transparent, feature-by-feature breakdown. We focus on measurable value, not buzzwords.</p>
        </div>
        <div class="flex gap-2 text-xs text-vh-sub">
          <span class="px-2 py-1 rounded bg-white/5 border border-white/10">Updated: <span id="updated"></span></span>
        </div>
      </div>

      <div class="mt-8 overflow-hidden rounded-3xl border border-white/10">
        <div class="grid grid-cols-12 bg-white/[0.03] text-sm">
          <div class="col-span-4 p-4 font-semibold">Capability</div>
          <div class="col-span-8 grid grid-cols-3">
            <div class="p-4 font-semibold text-center">VelocityHost</div>
            <div class="p-4 font-semibold text-center" id="hA">Competitor A</div>
            <div class="p-4 font-semibold text-center" id="hB">Competitor B</div>
          </div>
        </div>

        <div class="divide-y divide-white/10">
          <!-- Row template: title + three cells -->
          <div class="grid grid-cols-12">
            <div class="col-span-4 p-4">DDoS Protection</div>
            <div class="col-span-8 grid grid-cols-3 text-center">
              <div class="p-4">✔️ PletX</div>
              <div class="p-4">✔️ PletX</div>
              <div class="p-4">NeoProtect</div>
            </div>
          </div>
          <div class="grid grid-cols-12 bg-white/5">
            <div class="col-span-4 p-4">NVMe Storage (Gen4)</div>
            <div class="col-span-8 grid grid-cols-3 text-center">
              <div class="p-4">✔️ Yes</div>
              <div class="p-4">NVMe Gen3</div>
              <div class="p-4">SATA SSD</div>
            </div>
          </div>
          <div class="grid grid-cols-12">
            <div class="col-span-4 p-4">CPU Performance</div>
            <div class="col-span-8 grid grid-cols-3 text-center">
              <div class="p-4">✔️ High-frequency Ryzen/Intel</div>
              <div class="p-4">Mixed</div>
              <div class="p-4">Shared Low-Freq</div>
            </div>
          </div>
          <div class="grid grid-cols-12 bg-white/5">
            <div class="col-span-4 p-4">Instant Backups</div>
            <div class="col-span-8 grid grid-cols-3 text-center">
              <div class="p-4">✔️ 1-click & scheduled</div>
              <div class="p-4">Manual only</div>
              <div class="p-4">Limited</div>
            </div>
          </div>
          <div class="grid grid-cols-12">
            <div class="col-span-4 p-4">Panel & Console</div>
            <div class="col-span-8 grid grid-cols-3 text-center">
              <div class="p-4">✔️ Modern (Pterodactyl)</div>
              <div class="p-4">Legacy</div>
              <div class="p-4">Modern, missing features</div>
            </div>
          </div>
          <div class="grid grid-cols-12 bg-white/5">
            <div class="col-span-4 p-4">Support SLA</div>
            <div class="col-span-8 grid grid-cols-3 text-center">
              <div class="p-4">✔️ 24/7 < 30 min avg</div>
              <div class="p-4">Business hours</div>
              <div class="p-4">24/7, slower</div>
            </div>
          </div>
          <div class="grid grid-cols-12">
            <div class="col-span-4 p-4">Free Migration</div>
            <div class="col-span-8 grid grid-cols-3 text-center">
              <div class="p-4">✔️ Included</div>
              <div class="p-4">✔️ Included</div>
              <div class="p-4">Not offered</div>
            </div>
          </div>
          <div class="grid grid-cols-12 bg-white/5">
            <div class="col-span-4 p-4">Price-to-Performance</div>
            <div class="col-span-8 grid grid-cols-3 text-center">
              <div class="p-4">✔️ Best-in-class</div>
              <div class="p-4">Average</div>
              <div class="p-4">Below average</div>
            </div>
          </div>
        </div>
      </div>

      <!-- Value props -->
      <div class="mt-10 grid md:grid-cols-3 gap-6">
        <div class="p-6 rounded-2xl bg-white/5 border border-white/10">
          <div class="text-sm text-vh-sub">What makes us better</div>
          <h3 class="text-xl font-semibold mt-1">Performance you can feel</h3>
          <p class="text-vh-sub mt-2">High-frequency CPUs + Gen4 NVMe means lower tick variance, faster chunk loading, and smoother player experience.</p>
        </div>
        <div class="p-6 rounded-2xl bg-white/5 border border-white/10">
          <div class="text-sm text-vh-sub">What makes us better</div>
          <h3 class="text-xl font-semibold mt-1">Purpose-built protection</h3>
          <p class="text-vh-sub mt-2">Adaptive filtering across L3/4/7 with custom profiles for popular games (FiveM, SA:MP, MTA, CS 1.6).</p>
        </div>
        <div class="p-6 rounded-2xl bg-white/5 border border-white/10">
          <div class="text-sm text-vh-sub">What makes us better</div>
          <h3 class="text-xl font-semibold mt-1">Human support, fast</h3>
          <p class="text-vh-sub mt-2">Real engineers on chat/Discord. Average first response under 30 minutes, 24/7.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Benchmarks -->
  <section id="benchmarks" class="relative py-20 bg-white/[0.02] border-y border-white/5">
    <div class="max-w-7xl mx-auto px-4 lg:px-8">
      <div class="flex items-end justify-between gap-6 flex-wrap">
        <div>
          <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight">Benchmarks</h2>
          <p class="mt-2 text-vh-sub max-w-2xl">Synthetic + real-world metrics. Lower is better for latency and load times; higher is better for throughput.</p>
        </div>
        <div class="flex items-center gap-2 text-xs text-vh-sub">
          <button class="px-3 py-1 rounded-xl bg-white/5 border border-white/10" onclick="setPreset('eu')">EU</button>
          <button class="px-3 py-1 rounded-xl bg-white/5 border border-white/10" onclick="setPreset('na')">NA</button>
        </div>
      </div>

      <div class="mt-8 grid md:grid-cols-3 gap-6">
        <!-- Card: Ping -->
        <div class="p-6 rounded-2xl bg-vh-card border border-white/10">
          <div class="text-sm text-vh-sub">Avg. Ping (ms) — lower is better</div>
          <div class="mt-4 space-y-3">
            <div class="flex items-center justify-between text-sm"><span>VelocityHost</span><span id="b_ping_vh">8.6</span></div>
            <div class="w-full h-2 rounded-full bg-white/5 overflow-hidden">
              <div id="bar_ping_vh" class="h-full bg-vh-accent" style="width: 20%"></div>
            </div>
            <div class="flex items-center justify-between text-sm"><span id="nA1">Competitor A</span><span id="b_ping_a">12.4</span></div>
            <div class="w-full h-2 rounded-full bg-white/5 overflow-hidden">
              <div id="bar_ping_a" class="h-full bg-white/40" style="width: 35%"></div>
            </div>
            <div class="flex items-center justify-between text-sm"><span id="nB1">Competitor B</span><span id="b_ping_b">15.1</span></div>
            <div class="w-full h-2 rounded-full bg-white/5 overflow-hidden">
              <div id="bar_ping_b" class="h-full bg-white/25" style="width: 45%"></div>
            </div>
          </div>
        </div>
        <!-- Card: Startup -->
        <div class="p-6 rounded-2xl bg-vh-card border border-white/10">
          <div class="text-sm text-vh-sub">Server Startup Time (sec) — lower is better</div>
          <div class="mt-4 space-y-3">
            <div class="flex items-center justify-between text-sm"><span>VelocityHost</span><span id="b_start_vh">9.1</span></div>
            <div class="w-full h-2 rounded-full bg-white/5 overflow-hidden">
              <div id="bar_start_vh" class="h-full bg-vh-accent" style="width: 25%"></div>
            </div>
            <div class="flex items-center justify-between text-sm"><span id="nA2">Competitor A</span><span id="b_start_a">14.3</span></div>
            <div class="w-full h-2 rounded-full bg-white/5 overflow-hidden">
              <div id="bar_start_a" class="h-full bg-white/40" style="width: 45%"></div>
            </div>
            <div class="flex items-center justify-between text-sm"><span id="nB2">Competitor B</span><span id="b_start_b">17.0</span></div>
            <div class="w-full h-2 rounded-full bg-white/5 overflow-hidden">
              <div id="bar_start_b" class="h-full bg-white/25" style="width: 55%"></div>
            </div>
          </div>
        </div>
        <!-- Card: Throughput -->
        <div class="p-6 rounded-2xl bg-vh-card border border-white/10">
          <div class="text-sm text-vh-sub">Throughput under attack (req/s) — higher is better</div>
          <div class="mt-4 space-y-3">
            <div class="flex items-center justify-between text-sm"><span>VelocityHost</span><span id="b_thr_vh">9200</span></div>
            <div class="w-full h-2 rounded-full bg-white/5 overflow-hidden">
              <div id="bar_thr_vh" class="h-full bg-vh-accent" style="width: 85%"></div>
            </div>
            <div class="flex items-center justify-between text-sm"><span id="nA3">Competitor A</span><span id="b_thr_a">7400</span></div>
            <div class="w-full h-2 rounded-full bg-white/5 overflow-hidden">
              <div id="bar_thr_a" class="h-full bg-white/40" style="width: 68%"></div>
            </div>
            <div class="flex items-center justify-between text-sm"><span id="nB3">Competitor B</span><span id="b_thr_b">6100</span></div>
            <div class="w-full h-2 rounded-full bg-white/5 overflow-hidden">
              <div id="bar_thr_b" class="h-full bg-white/25" style="width: 56%"></div>
            </div>
          </div>
        </div>
  </section>

  <!-- Network & Support -->
  <section id="network" class="py-20">
    <div class="max-w-7xl mx-auto px-4 lg:px-8 grid lg:grid-cols-2 gap-8 items-start">
      <div class="p-8 rounded-3xl bg-gradient-to-b from-white/10 to-white/5 border border-white/10">
        <h3 class="text-2xl font-bold">Network you can trust</h3>
        <p class="text-vh-sub mt-2">Anycast routing, smart filtering, and multi-pop presence keep your players connected even during spikes and attacks.</p>
        <ul class="mt-6 space-y-3 text-sm text-vh-sub">
          <li>• Layered DDoS protection with custom game profiles</li>
          <li>• Global peering with low-latency routes</li>
          <li>• Automatic failover & real-time mitigation</li>
        </ul>
        <div class="mt-6 rounded-2xl bg-white/5 border border-white/10 p-4">
          <div class="text-xs text-vh-sub mb-2">Packet loss (lower is better)</div>
          <div class="w-full h-3 rounded-full bg-black/30 overflow-hidden">
            <div class="h-full bg-vh-accent" style="width: 2.1%"></div>
          </div>
          <div class="flex justify-between text-[11px] text-vh-sub mt-1"><span>VelocityHost</span><span>~0.021%</span></div>
        </div>
      </div>
      <div class="p-8 rounded-3xl bg-gradient-to-b from-white/10 to-white/5 border border-white/10">
        <h3 class="text-2xl font-bold">Support that actually helps</h3>
        <p class="text-vh-sub mt-2">Real engineers, human replies, 24/7. Discord, tickets, and live chat available.</p>
        <div class="mt-6 grid sm:grid-cols-3 gap-4">
          <div class="p-4 rounded-2xl bg-white/5 border border-white/10 text-center">
            <div class="text-3xl font-bold">&lt;30m</div>
            <div class="text-xs text-vh-sub">First reply</div>
          </div>
          <div class="p-4 rounded-2xl bg-white/5 border border-white/10 text-center">
            <div class="text-3xl font-bold">92%</div>
            <div class="text-xs text-vh-sub">One-touch solves</div>
          </div>
          <div class="p-4 rounded-2xl bg-white/5 border border-white/10 text-center">
            <div class="text-3xl font-bold">24/7</div>
            <div class="text-xs text-vh-sub">Always on</div>
          </div>
        </div>
        <div class="mt-6 text-sm text-vh-sub">“They moved our FiveM server without a single disconnect. Ping dropped by 4ms.” — <span class="text-white">Community Owner</span></div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section id="cta" class="py-20">
    <div class="max-w-6xl mx-auto px-4 lg:px-8">
      <div class="relative p-8 md:p-12 rounded-3xl overflow-hidden border border-white/10 bg-gradient-to-r from-vh-accent/10 to-vh-accent2/10">
        <div class="absolute -inset-2 shimmer opacity-50"></div>
        <div class="relative grid md:grid-cols-2 gap-8 items-center">
          <div>
            <h3 class="text-3xl md:text-4xl font-extrabold">Ready to switch?</h3>
            <p class="mt-2 text-vh-sub max-w-xl">We’ll migrate you for free, optimize your config, and have you live fast — with better performance on day one.</p>
          </div>
          <div class="flex md:justify-end items-center gap-3">
            <a href="#" class="px-6 py-3 rounded-2xl bg-vh-accent text-black font-semibold shadow-glow">Start with VelocityHost</a>
            <a href="#faq" class="px-6 py-3 rounded-2xl border border-white/10 hover:bg-white/5">View FAQ</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section id="faq" class="py-20 border-t border-white/5">
    <div class="max-w-5xl mx-auto px-4 lg:px-8">
      <h3 class="text-3xl md:text-4xl font-extrabold">Frequently asked</h3>
      <div class="mt-8 divide-y divide-white/10">
        <details class="group p-6 rounded-2xl bg-white/5 border border-white/10 open:mb-4">
          <summary class="flex cursor-pointer list-none items-center justify-between">
            <span class="font-semibold">Can I import from another host?</span>
            <span class="text-vh-sub group-open:rotate-45 transition">+</span>
          </summary>
          <p class="text-vh-sub mt-3">Yes. Our team migrates your files, databases, and DNS with zero downtime windows whenever possible.</p>
        </details>
        <details class="group p-6 rounded-2xl bg-white/5 border border-white/10 open:mb-4">
          <summary class="flex cursor-pointer list-none items-center justify-between">
            <span class="font-semibold">Do you support FiveM / MTA / SA:MP?</span>
            <span class="text-vh-sub group-open:rotate-45 transition">+</span>
          </summary>
          <p class="text-vh-sub mt-3">Absolutely. We maintain tuned profiles and templates for all three, plus Minecraft Java/Bedrock and legacy titles like CS 1.6.</p>
        </details>
        <details class="group p-6 rounded-2xl bg-white/5 border border-white/10 open:mb-4">
          <summary class="flex cursor-pointer list-none items-center justify-between">
            <span class="font-semibold">Is DDoS protection included?</span>
            <span class="text-vh-sub group-open:rotate-45 transition">+</span>
          </summary>
          <p class="text-vh-sub mt-3">Yes — always on, with custom filters at no extra cost.</p>
        </details>
      </div>
    </div>
  </section>

        <!-- Footer (same as your current structure) -->
        <?php include 'includes/footer.php'; ?>

  <script>
    document.getElementById('year').textContent = new Date().getFullYear();
  </script>


  <script>
    // Simple helpers
    const updated = new Date();
    document.getElementById('updated').textContent = updated.toLocaleDateString();
    document.getElementById('year').textContent = updated.getFullYear();

    // Apply competitor names
    document.getElementById('applyNames').addEventListener('click', () => {
      const a = document.getElementById('compA').value || 'Competitor A';
      const b = document.getElementById('compB').value || 'Competitor B';
      document.getElementById('hA').textContent = a;
      document.getElementById('hB').textContent = b;
      document.getElementById('nA1').textContent = a; document.getElementById('nB1').textContent = b;
      document.getElementById('nA2').textContent = a; document.getElementById('nB2').textContent = b;
      document.getElementById('nA3').textContent = a; document.getElementById('nB3').textContent = b;
    });

    // Region presets (demo only)
    function setPreset(region) {
      if (region === 'eu') {
        setBars({ ping:[8.6,12.4,15.1], start:[9.1,14.3,17.0], thr:[9200,7400,6100] });
      } else {
        setBars({ ping:[21.2,26.8,29.3], start:[10.5,16.7,18.9], thr:[8700,6900,5800] });
      }
    }
    function setBars({ping, start, thr}){
      // Normalize bar widths roughly relative to worst metric per card
      const pingMax = Math.max(...ping);
      const startMax = Math.max(...start);
      const thrMax = Math.max(...thr);
      // Lower better => invert widths
      document.getElementById('b_ping_vh').textContent = ping[0];
      document.getElementById('b_ping_a').textContent = ping[1];
      document.getElementById('b_ping_b').textContent = ping[2];
      document.getElementById('bar_ping_vh').style.width = (ping[0]/pingMax*100*0.7) + '%';
      document.getElementById('bar_ping_a').style.width = (ping[1]/pingMax*100*0.7) + '%';
      document.getElementById('bar_ping_b').style.width = (ping[2]/pingMax*100*0.7) + '%';

      document.getElementById('b_start_vh').textContent = start[0];
      document.getElementById('b_start_a').textContent = start[1];
      document.getElementById('b_start_b').textContent = start[2];
      document.getElementById('bar_start_vh').style.width = (start[0]/startMax*100*0.7) + '%';
      document.getElementById('bar_start_a').style.width = (start[1]/startMax*100*0.7) + '%';
      document.getElementById('bar_start_b').style.width = (start[2]/startMax*100*0.7) + '%';

      // Higher better => width proportional
      document.getElementById('b_thr_vh').textContent = thr[0];
      document.getElementById('b_thr_a').textContent = thr[1];
      document.getElementById('b_thr_b').textContent = thr[2];
      document.getElementById('bar_thr_vh').style.width = (thr[0]/thrMax*100*0.9) + '%';
      document.getElementById('bar_thr_a').style.width = (thr[1]/thrMax*100*0.9) + '%';
      document.getElementById('bar_thr_b').style.width = (thr[2]/thrMax*100*0.9) + '%';
    }
  </script>
</body>
</html>
