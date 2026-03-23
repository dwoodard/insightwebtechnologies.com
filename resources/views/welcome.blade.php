<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Insight Web Technologies — AI Receptionist & Automation Systems</title>
  <meta name="description" content="AI-powered receptionists and automation systems that help businesses scale and improve efficiency. Book a demo today." />
  <meta name="keywords" content="AI receptionist, business automation, AI chatbot, web design, business integration" />

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Mono:wght@300;400;500&family=Outfit:wght@300;400;500;600&display=swap" rel="stylesheet" />

  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            display: ['Syne', 'sans-serif'],
            mono: ['DM Mono', 'monospace'],
            body: ['Outfit', 'sans-serif'],
          },
          colors: {
            ink: '#060A14',
            panel: '#0C1220',
            edge: '#111827',
            cyan: {
              glow: '#00E5FF',
              mid: '#00B8CC',
              dim: '#007A8A',
            },
            silver: {
              100: '#F0F4FF',
              200: '#C8D4E8',
              300: '#8E9BB0',
              400: '#56637A',
            }
          },
          boxShadow: {
            glow: '0 0 30px rgba(0,229,255,0.15), 0 0 60px rgba(0,229,255,0.05)',
            'glow-lg': '0 0 50px rgba(0,229,255,0.25), 0 0 100px rgba(0,229,255,0.08)',
            card: '0 4px 40px rgba(0,0,0,0.6)',
          }
        }
      }
    }
  </script>

  <style>
    *, *::before, *::after { box-sizing: border-box; }

    html { scroll-behavior: smooth; }

    body {
      background-color: #060A14;
      color: #F0F4FF;
      font-family: 'Outfit', sans-serif;
      overflow-x: hidden;
      cursor: default;
    }

    /* ── Grid texture overlay ── */
    body::before {
      content: '';
      position: fixed;
      inset: 0;
      background-image:
        linear-gradient(rgba(0,229,255,0.025) 1px, transparent 1px),
        linear-gradient(90deg, rgba(0,229,255,0.025) 1px, transparent 1px);
      background-size: 60px 60px;
      pointer-events: none;
      z-index: 0;
    }

    /* ── Animated radial blob ── */
    .hero-blob {
      position: absolute;
      border-radius: 50%;
      filter: blur(120px);
      pointer-events: none;
    }
    .blob-1 {
      width: 700px; height: 700px;
      background: radial-gradient(circle, rgba(0,229,255,0.12) 0%, transparent 70%);
      top: -200px; left: -150px;
      animation: floatBlob 12s ease-in-out infinite;
    }
    .blob-2 {
      width: 500px; height: 500px;
      background: radial-gradient(circle, rgba(0,150,255,0.08) 0%, transparent 70%);
      top: 100px; right: -100px;
      animation: floatBlob 16s ease-in-out infinite reverse;
    }
    @keyframes floatBlob {
      0%, 100% { transform: translate(0, 0) scale(1); }
      33%  { transform: translate(30px, -40px) scale(1.05); }
      66%  { transform: translate(-20px, 20px) scale(0.96); }
    }

    /* ── Fade-up reveal ── */
    .reveal {
      opacity: 0;
      transform: translateY(28px);
      transition: opacity 0.7s ease, transform 0.7s ease;
    }
    .reveal.visible {
      opacity: 1;
      transform: translateY(0);
    }

    /* ── Navbar ── */
    #navbar {
      transition: background 0.4s ease, box-shadow 0.4s ease, backdrop-filter 0.4s ease;
    }
    #navbar.scrolled {
      background: rgba(6,10,20,0.85);
      backdrop-filter: blur(20px);
      box-shadow: 0 1px 0 rgba(0,229,255,0.1);
    }

    /* ── Cyan line accent ── */
    .line-accent {
      display: inline-block;
      height: 2px;
      background: linear-gradient(90deg, #00E5FF, transparent);
    }

    /* ── Glowing border cards ── */
    .card-glow {
      background: rgba(12,18,32,0.8);
      border: 1px solid rgba(0,229,255,0.12);
      transition: border-color 0.3s, box-shadow 0.3s, transform 0.3s;
    }
    .card-glow:hover {
      border-color: rgba(0,229,255,0.4);
      box-shadow: 0 0 40px rgba(0,229,255,0.12), 0 8px 40px rgba(0,0,0,0.5);
      transform: translateY(-4px);
    }

    /* ── Pro card highlight ── */
    .card-pro {
      background: linear-gradient(135deg, rgba(0,229,255,0.06) 0%, rgba(0,80,120,0.15) 100%);
      border: 1px solid rgba(0,229,255,0.35);
      box-shadow: 0 0 50px rgba(0,229,255,0.1), 0 8px 40px rgba(0,0,0,0.5);
    }
    .card-pro:hover {
      border-color: rgba(0,229,255,0.6);
      box-shadow: 0 0 70px rgba(0,229,255,0.18), 0 12px 50px rgba(0,0,0,0.6);
      transform: translateY(-6px);
    }

    /* ── CTA Buttons ── */
    .btn-primary {
      background: linear-gradient(135deg, #00E5FF, #00B8CC);
      color: #060A14;
      font-family: 'Syne', sans-serif;
      font-weight: 700;
      letter-spacing: 0.02em;
      transition: all 0.25s ease;
      position: relative;
      overflow: hidden;
    }
    .btn-primary::after {
      content: '';
      position: absolute;
      inset: 0;
      background: linear-gradient(135deg, rgba(255,255,255,0.2), transparent);
      opacity: 0;
      transition: opacity 0.25s;
    }
    .btn-primary:hover::after { opacity: 1; }
    .btn-primary:hover { box-shadow: 0 0 30px rgba(0,229,255,0.5); transform: translateY(-2px); }

    .btn-outline {
      border: 1.5px solid rgba(0,229,255,0.5);
      color: #00E5FF;
      font-family: 'Syne', sans-serif;
      font-weight: 600;
      transition: all 0.25s ease;
      background: rgba(0,229,255,0.04);
    }
    .btn-outline:hover {
      background: rgba(0,229,255,0.12);
      border-color: #00E5FF;
      box-shadow: 0 0 20px rgba(0,229,255,0.2);
      transform: translateY(-2px);
    }

    /* ── Tag badge ── */
    .tag {
      font-family: 'DM Mono', monospace;
      font-size: 0.7rem;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      color: #00E5FF;
      background: rgba(0,229,255,0.08);
      border: 1px solid rgba(0,229,255,0.2);
      border-radius: 4px;
      padding: 4px 10px;
      display: inline-block;
    }

    /* ── Section divider ── */
    .section-divider {
      height: 1px;
      background: linear-gradient(90deg, transparent, rgba(0,229,255,0.2), transparent);
    }

    /* ── Check mark list ── */
    .check-list li {
      display: flex;
      align-items: flex-start;
      gap: 10px;
      color: #C8D4E8;
      font-size: 0.95rem;
      margin-bottom: 10px;
    }
    .check-list li::before {
      content: '✦';
      color: #00E5FF;
      font-size: 0.65rem;
      margin-top: 5px;
      flex-shrink: 0;
    }

    /* ── Step numbers ── */
    .step-number {
      font-family: 'DM Mono', monospace;
      font-size: 2.5rem;
      font-weight: 500;
      color: transparent;
      -webkit-text-stroke: 1px rgba(0,229,255,0.3);
      line-height: 1;
    }

    /* ── Input fields ── */
    .form-input {
      background: rgba(12,18,32,0.8);
      border: 1px solid rgba(0,229,255,0.15);
      color: #F0F4FF;
      border-radius: 8px;
      padding: 14px 18px;
      width: 100%;
      font-family: 'Outfit', sans-serif;
      font-size: 0.95rem;
      transition: border-color 0.25s, box-shadow 0.25s;
      outline: none;
    }
    .form-input:focus {
      border-color: rgba(0,229,255,0.5);
      box-shadow: 0 0 0 3px rgba(0,229,255,0.08);
    }
    .form-input::placeholder { color: rgba(142,155,176,0.6); }

    /* ── Hero headline gradient ── */
    .headline-gradient {
      background: linear-gradient(135deg, #F0F4FF 0%, #F0F4FF 40%, #00E5FF 75%, #00B8CC 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    /* ── Ticker bar ── */
    @keyframes ticker {
      0% { transform: translateX(0); }
      100% { transform: translateX(-50%); }
    }
    .ticker-inner {
      display: flex;
      animation: ticker 30s linear infinite;
      white-space: nowrap;
    }

    /* ── Ping dot ── */
    .ping-dot {
      position: relative;
      display: inline-flex;
      align-items: center;
    }
    .ping-dot::before {
      content: '';
      width: 8px; height: 8px;
      border-radius: 50%;
      background: #00E5FF;
      margin-right: 8px;
      flex-shrink: 0;
    }
    .ping-dot::after {
      content: '';
      position: absolute;
      left: 0;
      width: 8px; height: 8px;
      border-radius: 50%;
      background: #00E5FF;
      animation: ping 2s cubic-bezier(0,0,0.2,1) infinite;
    }
    @keyframes ping {
      75%, 100% { transform: scale(2.5); opacity: 0; }
    }

    /* Mobile nav */
    #mobile-menu { display: none; }
    #mobile-menu.open { display: flex; }

    /* Scroll indicator */
    #scroll-progress {
      position: fixed;
      top: 0; left: 0;
      height: 2px;
      background: linear-gradient(90deg, #00E5FF, #0080FF);
      z-index: 9999;
      width: 0%;
      transition: width 0.1s linear;
    }
  </style>
</head>

<body class="relative">

  <!-- Scroll progress bar -->
  <div id="scroll-progress"></div>

  <!-- ══════════════════════════════════════════════
       NAVIGATION
  ══════════════════════════════════════════════ -->
  <nav id="navbar" class="fixed top-0 left-0 right-0 z-50 px-6 lg:px-12">
    <div class="max-w-7xl mx-auto flex items-center justify-between h-16 lg:h-20">

      <!-- Logo -->
      <a href="#" class="flex items-center gap-3 group">
        <div class="w-8 h-8 rounded-lg bg-cyan-glow flex items-center justify-center shadow-glow">
          <svg width="18" height="18" viewBox="0 0 18 18" fill="none">
            <path d="M9 1L16 5V13L9 17L2 13V5L9 1Z" stroke="#060A14" stroke-width="1.5" fill="rgba(6,10,20,0.3)"/>
            <circle cx="9" cy="9" r="2.5" fill="#060A14"/>
          </svg>
        </div>
        <span class="font-display font-700 text-silver-100 text-lg tracking-tight group-hover:text-cyan-glow transition-colors">Insight<span class="text-cyan-glow">Web</span></span>
      </a>

      <!-- Desktop Nav Links -->
      <ul class="hidden md:flex items-center gap-8 font-body text-sm text-silver-300">
        <li><a href="#services" class="hover:text-cyan-glow transition-colors">Services</a></li>
        <li><a href="#packages" class="hover:text-cyan-glow transition-colors">Packages</a></li>
        <li><a href="#how-it-works" class="hover:text-cyan-glow transition-colors">How It Works</a></li>
        <li><a href="#contact" class="hover:text-cyan-glow transition-colors">Contact</a></li>
      </ul>

      <!-- Desktop CTAs -->
      <div class="hidden md:flex items-center gap-3">
        <a href="tel:+17754427070‬" class="btn-outline text-sm px-5 py-2.5 rounded-lg flex items-center gap-2">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81a19.79 19.79 0 01-3.07-8.63A2 2 0 012 .18h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.09-1.09a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/>
          </svg>
          Quick Call Demo
        </a>
        <a href="https://app.gohighlevel.com/" target="_blank" rel="noopener" class="btn-primary text-sm px-5 py-2.5 rounded-lg">Book a Demo</a>
      </div>

      <!-- Mobile hamburger -->
      <button id="hamburger" class="md:hidden text-silver-200 p-2" aria-label="Toggle menu">
        <svg id="icon-open" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/>
        </svg>
        <svg id="icon-close" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="hidden">
          <line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/>
        </svg>
      </button>
    </div>

    <!-- Mobile menu -->
    <div id="mobile-menu" class="flex-col gap-4 md:hidden pb-6 px-2 border-t border-cyan-glow/10 pt-4 bg-ink/95 backdrop-blur-xl">
      <a href="#services" class="text-silver-200 font-body hover:text-cyan-glow transition-colors py-1">Services</a>
      <a href="#packages" class="text-silver-200 font-body hover:text-cyan-glow transition-colors py-1">Packages</a>
      <a href="#how-it-works" class="text-silver-200 font-body hover:text-cyan-glow transition-colors py-1">How It Works</a>
      <a href="#contact" class="text-silver-200 font-body hover:text-cyan-glow transition-colors py-1">Contact</a>
      <div class="flex flex-col gap-3 pt-2">
        <a href="tel:+17754427070‬" class="btn-outline text-sm px-5 py-3 rounded-lg text-center flex items-center justify-center gap-2">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81a19.79 19.79 0 01-3.07-8.63A2 2 0 012 .18h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.09-1.09a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/>
          </svg>
          Quick Call Demo
        </a>
        <a href="https://app.gohighlevel.com/" target="_blank" rel="noopener" class="btn-primary text-sm px-5 py-3 rounded-lg text-center">Book a Demo</a>
      </div>
    </div>
  </nav>


  <!-- ══════════════════════════════════════════════
       HERO
  ══════════════════════════════════════════════ -->
  <section id="hero" class="relative min-h-screen flex flex-col justify-center pt-20 overflow-hidden">
    <div class="hero-blob blob-1"></div>
    <div class="hero-blob blob-2"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-12 py-20 lg:py-28">

      <!-- Above-fold quick-call strip -->
      <div class="mb-10 reveal">
        <div class="inline-flex items-center gap-4 bg-panel border border-cyan-glow/15 rounded-full px-5 py-2.5">
          <span class="ping-dot font-mono text-xs text-cyan-glow tracking-widest uppercase">Live Demo Available</span>
          <span class="w-px h-4 bg-silver-400/30"></span>
          <a href="tel:+17754427070‬" class="flex items-center gap-2 text-sm font-body text-silver-200 hover:text-cyan-glow transition-colors">
            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
              <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81a19.79 19.79 0 01-3.07-8.63A2 2 0 012 .18h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.09-1.09a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/>
            </svg>
            Call +1 (775) 442-7070
          </a>
        </div>
      </div>

      <div class="grid lg:grid-cols-2 gap-16 items-center">

        <!-- Left: Headline & CTAs -->
        <div>
          <div class="tag mb-6 reveal" style="transition-delay:0.1s">AI Receptionist & Automation</div>

          <h1 class="font-display font-800 text-5xl lg:text-6xl xl:text-7xl leading-[1.05] mb-6 reveal" style="transition-delay:0.15s">
            <span class="headline-gradient">Your Business,<br/>Running on<br/>Intelligence.</span>
          </h1>

          <p class="font-body text-silver-300 text-lg leading-relaxed max-w-lg mb-10 reveal" style="transition-delay:0.2s">
            AI-powered receptionists, automated workflows, and modern web systems — built for businesses that refuse to be left behind.
          </p>

          <div class="flex flex-col sm:flex-row gap-4 reveal" style="transition-delay:0.25s">
            <a href="https://app.gohighlevel.com/" target="_blank" rel="noopener"
               class="btn-primary px-8 py-4 rounded-xl text-base text-center flex items-center justify-center gap-3">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/>
              </svg>
              Schedule a Strategy Call
            </a>
            <a href="tel:+17754427070‬"
               class="btn-outline px-8 py-4 rounded-xl text-base text-center flex items-center justify-center gap-3">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81a19.79 19.79 0 01-3.07-8.63A2 2 0 012 .18h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.09-1.09a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/>
              </svg>
              Hear a Live Demo
            </a>
          </div>

          <!-- Trust badges -->
          <div class="flex flex-wrap items-center gap-6 mt-12 reveal" style="transition-delay:0.3s">
            <div class="flex items-center gap-2 text-silver-400 text-sm font-body">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="#00E5FF" stroke="none">
                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/>
              </svg>
              5-star rated service
            </div>
            <div class="w-px h-4 bg-silver-400/20 hidden sm:block"></div>
            <div class="flex items-center gap-2 text-silver-400 text-sm font-body">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#00E5FF" stroke-width="2">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
              </svg>
              Setup in 48 hours
            </div>
            <div class="w-px h-4 bg-silver-400/20 hidden sm:block"></div>
            <div class="flex items-center gap-2 text-silver-400 text-sm font-body">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#00E5FF" stroke-width="2">
                <circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>
              </svg>
              24/7 AI uptime
            </div>
          </div>
        </div>

        <!-- Right: AI chat preview card -->
        <div class="hidden lg:block reveal" style="transition-delay:0.35s">
          <div class="relative">
            <div class="card-glow rounded-2xl p-6 max-w-sm ml-auto shadow-card" style="border-color: rgba(0,229,255,0.2);">
              <!-- Card header -->
              <div class="flex items-center gap-3 mb-5">
                <div class="w-10 h-10 rounded-full bg-cyan-glow flex items-center justify-center shadow-glow">
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#060A14" stroke-width="2.5">
                    <path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/>
                  </svg>
                </div>
                <div>
                  <div class="font-display font-700 text-sm text-silver-100">Insight AI Receptionist</div>
                  <div class="flex items-center gap-1.5">
                    <div class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></div>
                    <span class="font-mono text-xs text-silver-400">Online now</span>
                  </div>
                </div>
              </div>

              <!-- Chat bubbles -->
              <div class="space-y-3 mb-5">
                <div class="bg-edge rounded-2xl rounded-tl-sm px-4 py-3 text-sm text-silver-200 font-body max-w-[85%]">
                  Hi! I'm your AI receptionist. How can I help your business today?
                </div>
                <div class="bg-cyan-glow/10 border border-cyan-glow/20 rounded-2xl rounded-tr-sm px-4 py-3 text-sm text-silver-100 font-body max-w-[85%] ml-auto">
                  I'd like to schedule an appointment for Thursday.
                </div>
                <div class="bg-edge rounded-2xl rounded-tl-sm px-4 py-3 text-sm text-silver-200 font-body max-w-[85%]">
                  Perfect! I have Thursday at 2pm or 4pm open. Which works for you?
                </div>
                <!-- Typing indicator -->
                <div class="flex items-center gap-1.5 px-4 py-3 bg-edge rounded-2xl rounded-tl-sm max-w-[70px]">
                  <div class="w-1.5 h-1.5 rounded-full bg-silver-400 animate-bounce" style="animation-delay:0s"></div>
                  <div class="w-1.5 h-1.5 rounded-full bg-silver-400 animate-bounce" style="animation-delay:0.15s"></div>
                  <div class="w-1.5 h-1.5 rounded-full bg-silver-400 animate-bounce" style="animation-delay:0.3s"></div>
                </div>
              </div>

              <!-- Metrics strip -->
              <div class="grid grid-cols-3 gap-2 mt-4 pt-4 border-t border-cyan-glow/10">
                <div class="text-center">
                  <div class="font-display font-700 text-lg text-cyan-glow">24/7</div>
                  <div class="font-mono text-xs text-silver-400">Uptime</div>
                </div>
                <div class="text-center">
                  <div class="font-display font-700 text-lg text-cyan-glow">2s</div>
                  <div class="font-mono text-xs text-silver-400">Avg Response</div>
                </div>
                <div class="text-center">
                  <div class="font-display font-700 text-lg text-cyan-glow">∞</div>
                  <div class="font-mono text-xs text-silver-400">Concurrent</div>
                </div>
              </div>
            </div>

            <!-- Floating badge -->
            <div class="absolute -top-4 -right-4 bg-cyan-glow text-ink rounded-xl px-3 py-2 shadow-glow">
              <div class="font-display font-700 text-xs">Never Miss a Lead</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Scroll indicator -->
    <div class="absolute bottom-10 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 opacity-40 animate-bounce">
      <span class="font-mono text-xs text-silver-400 tracking-widest uppercase">Scroll</span>
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#8E9BB0" stroke-width="2">
        <polyline points="6 9 12 15 18 9"/>
      </svg>
    </div>
  </section>


  <!-- ══════════════════════════════════════════════
       TICKER BAR
  ══════════════════════════════════════════════ -->
  <div class="relative z-10 overflow-hidden border-y border-cyan-glow/10 bg-panel/60 py-3.5">
    <div class="ticker-inner">
      <div class="flex items-center gap-10 px-10 font-mono text-xs text-silver-400 tracking-widest uppercase">
        <span class="text-cyan-glow">✦</span><span>AI Receptionist</span>
        <span class="text-cyan-glow">✦</span><span>Calendar Automation</span>
        <span class="text-cyan-glow">✦</span><span>SMS Chatbot</span>
        <span class="text-cyan-glow">✦</span><span>Voice AI</span>
        <span class="text-cyan-glow">✦</span><span>CRM Integration</span>
        <span class="text-cyan-glow">✦</span><span>Custom Automations</span>
        <span class="text-cyan-glow">✦</span><span>Web Design</span>
        <span class="text-cyan-glow">✦</span><span>Brand Identity</span>
        <span class="text-cyan-glow">✦</span><span>AI Consulting</span>
        <span class="text-cyan-glow">✦</span><span>Priority Support</span>
        <span class="text-cyan-glow">✦</span><span>Multi-Location</span>
        <span class="text-cyan-glow">✦</span><span>Setup in 48 Hours</span>
      </div>
      <!-- Duplicate for seamless loop -->
      <div class="flex items-center gap-10 px-10 font-mono text-xs text-silver-400 tracking-widest uppercase" aria-hidden="true">
        <span class="text-cyan-glow">✦</span><span>AI Receptionist</span>
        <span class="text-cyan-glow">✦</span><span>Calendar Automation</span>
        <span class="text-cyan-glow">✦</span><span>SMS Chatbot</span>
        <span class="text-cyan-glow">✦</span><span>Voice AI</span>
        <span class="text-cyan-glow">✦</span><span>CRM Integration</span>
        <span class="text-cyan-glow">✦</span><span>Custom Automations</span>
        <span class="text-cyan-glow">✦</span><span>Web Design</span>
        <span class="text-cyan-glow">✦</span><span>Brand Identity</span>
        <span class="text-cyan-glow">✦</span><span>AI Consulting</span>
        <span class="text-cyan-glow">✦</span><span>Priority Support</span>
        <span class="text-cyan-glow">✦</span><span>Multi-Location</span>
        <span class="text-cyan-glow">✦</span><span>Setup in 48 Hours</span>
      </div>
    </div>
  </div>


  <!-- ══════════════════════════════════════════════
       PROBLEM / VALUE PROP
  ══════════════════════════════════════════════ -->
  <section class="relative z-10 py-28 px-6 lg:px-12">
    <div class="max-w-7xl mx-auto">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
        <div class="reveal">
          <div class="tag mb-5">The Problem</div>
          <h2 class="font-display font-800 text-4xl lg:text-5xl text-silver-100 leading-[1.1] mb-6">
            Your business loses leads<br/><span class="text-cyan-glow">every time it's closed.</span>
          </h2>
          <p class="font-body text-silver-300 text-lg leading-relaxed mb-6">
            Missed calls, slow follow-ups, and manual scheduling are silently costing you customers. Your competitors who adopt AI aren't just faster — they never sleep.
          </p>
          <p class="font-body text-silver-300 leading-relaxed">
            Insight Web Technologies builds intelligent systems that capture, qualify, and convert your leads around the clock — so you can focus on actually running your business.
          </p>
        </div>

        <div class="grid grid-cols-2 gap-4 reveal" style="transition-delay:0.15s">
          <!-- Stat cards -->
          <div class="card-glow rounded-2xl p-6">
            <div class="font-display font-800 text-4xl text-cyan-glow mb-2">78%</div>
            <div class="font-body text-silver-300 text-sm">of customers buy from the <strong class="text-silver-100">first business to respond</strong></div>
          </div>
          <div class="card-glow rounded-2xl p-6 mt-8">
            <div class="font-display font-800 text-4xl text-cyan-glow mb-2">3×</div>
            <div class="font-body text-silver-300 text-sm">more conversions with <strong class="text-silver-100">automated follow-up</strong> systems</div>
          </div>
          <div class="card-glow rounded-2xl p-6">
            <div class="font-display font-800 text-4xl text-cyan-glow mb-2">60%</div>
            <div class="font-body text-silver-300 text-sm">of calls come <strong class="text-silver-100">outside business hours</strong> — unanswered</div>
          </div>
          <div class="card-glow rounded-2xl p-6 mt-8">
            <div class="font-display font-800 text-4xl text-cyan-glow mb-2">48h</div>
            <div class="font-body text-silver-300 text-sm">average setup time to <strong class="text-silver-100">go fully live</strong> with our systems</div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <div class="section-divider mx-12 lg:mx-24"></div>


  <!-- ══════════════════════════════════════════════
       SERVICES
  ══════════════════════════════════════════════ -->
  <section id="services" class="relative z-10 py-28 px-6 lg:px-12">
    <div class="max-w-7xl mx-auto">

      <div class="text-center max-w-2xl mx-auto mb-20 reveal">
        <div class="tag mb-5">What We Build</div>
        <h2 class="font-display font-800 text-4xl lg:text-5xl text-silver-100 leading-[1.1] mb-5">
          Full-stack intelligence<br/>for your business
        </h2>
        <p class="font-body text-silver-300 text-lg">
          From AI-powered customer touchpoints to polished web presence — we engineer every layer of your digital operation.
        </p>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-5">

        <!-- Service 1 -->
        <div class="card-glow rounded-2xl p-7 reveal" style="transition-delay:0.05s">
          <div class="w-12 h-12 rounded-xl bg-cyan-glow/10 border border-cyan-glow/20 flex items-center justify-center mb-5">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#00E5FF" stroke-width="1.8">
              <path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/>
            </svg>
          </div>
          <h3 class="font-display font-700 text-silver-100 text-xl mb-3">AI Receptionist</h3>
          <p class="font-body text-silver-300 text-sm leading-relaxed">
            A 24/7 chatbot that greets visitors, qualifies leads, answers FAQs, and books appointments — all without lifting a finger.
          </p>
        </div>

        <!-- Service 2 -->
        <div class="card-glow rounded-2xl p-7 reveal" style="transition-delay:0.1s">
          <div class="w-12 h-12 rounded-xl bg-cyan-glow/10 border border-cyan-glow/20 flex items-center justify-center mb-5">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#00E5FF" stroke-width="1.8">
              <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81a19.79 19.79 0 01-3.07-8.63A2 2 0 012 .18h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.09-1.09a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/>
            </svg>
          </div>
          <h3 class="font-display font-700 text-silver-100 text-xl mb-3">SMS & Voice AI</h3>
          <p class="font-body text-silver-300 text-sm leading-relaxed">
            Automated SMS follow-ups and AI-driven voice interactions that engage customers where they actually are — their phones.
          </p>
        </div>

        <!-- Service 3 -->
        <div class="card-glow rounded-2xl p-7 reveal" style="transition-delay:0.15s">
          <div class="w-12 h-12 rounded-xl bg-cyan-glow/10 border border-cyan-glow/20 flex items-center justify-center mb-5">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#00E5FF" stroke-width="1.8">
              <rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/>
            </svg>
          </div>
          <h3 class="font-display font-700 text-silver-100 text-xl mb-3">Web Design</h3>
          <p class="font-body text-silver-300 text-sm leading-relaxed">
            Modern, conversion-focused websites that don't just look good — they're engineered to capture, nurture, and convert.
          </p>
        </div>

        <!-- Service 4 -->
        <div class="card-glow rounded-2xl p-7 reveal" style="transition-delay:0.2s">
          <div class="w-12 h-12 rounded-xl bg-cyan-glow/10 border border-cyan-glow/20 flex items-center justify-center mb-5">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#00E5FF" stroke-width="1.8">
              <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
            </svg>
          </div>
          <h3 class="font-display font-700 text-silver-100 text-xl mb-3">AI Consulting</h3>
          <p class="font-body text-silver-300 text-sm leading-relaxed">
            Expert strategy sessions to map out how AI can eliminate bottlenecks, cut costs, and unlock new revenue in your workflow.
          </p>
        </div>

      </div>
    </div>
  </section>


  <div class="section-divider mx-12 lg:mx-24"></div>


  <!-- ══════════════════════════════════════════════
       PACKAGES / PRICING
  ══════════════════════════════════════════════ -->
  <section id="packages" class="relative z-10 py-28 px-6 lg:px-12">
    <div class="max-w-7xl mx-auto">

      <div class="text-center max-w-2xl mx-auto mb-20 reveal">
        <div class="tag mb-5">Subscription Packages</div>
        <h2 class="font-display font-800 text-4xl lg:text-5xl text-silver-100 leading-[1.1] mb-5">
          Pick your level of<br/><span class="text-cyan-glow">automation</span>
        </h2>
        <p class="font-body text-silver-300 text-lg">
          Every package is a monthly subscription with no long-term contracts. Upgrade anytime as your business grows.
        </p>
      </div>

      <div class="grid lg:grid-cols-3 gap-6 items-start">

        <!-- ── Starter ── -->
        <div class="card-glow rounded-2xl p-8 reveal" style="transition-delay:0.05s">
          <div class="mb-6">
            <div class="tag mb-4">Starter</div>
            <div class="flex items-end gap-2 mb-1">
              <span class="font-display font-800 text-4xl text-silver-100">$297</span>
              <span class="font-body text-silver-400 pb-1">/month</span>
            </div>
            <p class="font-body text-silver-400 text-sm">Perfect for solo operators & small teams getting started with AI.</p>
          </div>

          <div class="section-divider mb-6"></div>

          <ul class="check-list mb-8 space-y-3">
            <li>AI Receptionist Chatbot on your website</li>
            <li>Single calendar integration for bookings</li>
            <li>Lead capture & notification system</li>
            <li>FAQ auto-response setup</li>
            <li>Monthly performance report</li>
          </ul>

          <a href="https://app.gohighlevel.com/" target="_blank" rel="noopener"
             class="btn-outline w-full py-3.5 rounded-xl text-sm text-center block hover:btn-primary transition-all">
            Get Started
          </a>
        </div>

        <!-- ── Growth (Featured) ── -->
        <div class="card-pro rounded-2xl p-8 relative reveal" style="transition-delay:0.1s; transition: border-color 0.3s, box-shadow 0.3s, transform 0.3s;">
          <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-cyan-glow text-ink rounded-full px-5 py-1.5 font-display font-700 text-xs tracking-wide shadow-glow">
            Most Popular
          </div>

          <div class="mb-6 pt-2">
            <div class="tag mb-4">Growth</div>
            <div class="flex items-end gap-2 mb-1">
              <span class="font-display font-800 text-4xl text-silver-100">$597</span>
              <span class="font-body text-silver-400 pb-1">/month</span>
            </div>
            <p class="font-body text-silver-400 text-sm">Built for scaling businesses ready to automate their entire front office.</p>
          </div>

          <div class="section-divider mb-6"></div>

          <ul class="check-list mb-8 space-y-3">
            <li>Everything in Starter</li>
            <li>SMS chatbot for outbound & follow-up</li>
            <li>Voice AI chatbot integration</li>
            <li>CMS & CRM automation workflows</li>
            <li>Multi-step lead nurture sequences</li>
            <li>Bi-weekly check-in calls</li>
          </ul>

          <a href="https://app.gohighlevel.com/" target="_blank" rel="noopener"
             class="btn-primary w-full py-3.5 rounded-xl text-sm text-center block">
            Get Started
          </a>
        </div>

        <!-- ── Pro ── -->
        <div class="card-glow rounded-2xl p-8 reveal" style="transition-delay:0.15s">
          <div class="mb-6">
            <div class="tag mb-4">Pro</div>
            <div class="flex items-end gap-2 mb-1">
              <span class="font-display font-800 text-4xl text-silver-100">$1,197</span>
              <span class="font-body text-silver-400 pb-1">/month</span>
            </div>
            <p class="font-body text-silver-400 text-sm">Enterprise-grade automation for multi-location businesses and high-volume operations.</p>
          </div>

          <div class="section-divider mb-6"></div>

          <ul class="check-list mb-8 space-y-3">
            <li>Everything in Growth</li>
            <li>Custom automation builds</li>
            <li>Priority dedicated support</li>
            <li>Multi-location system management</li>
            <li>Advanced analytics dashboard</li>
            <li>Quarterly strategy sessions</li>
            <li>First access to new features</li>
          </ul>

          <a href="https://app.gohighlevel.com/" target="_blank" rel="noopener"
             class="btn-outline w-full py-3.5 rounded-xl text-sm text-center block">
            Get Started
          </a>
        </div>

      </div>

      <!-- Bottom note -->
      <p class="text-center font-body text-silver-400 text-sm mt-8 reveal" style="transition-delay:0.2s">
        Not sure which plan fits? <a href="https://app.gohighlevel.com/" target="_blank" rel="noopener" class="text-cyan-glow hover:underline">Book a free 20-minute strategy call</a> and we'll figure it out together.
      </p>

    </div>
  </section>


  <div class="section-divider mx-12 lg:mx-24"></div>


  <!-- ══════════════════════════════════════════════
       HOW IT WORKS
  ══════════════════════════════════════════════ -->
  <section id="how-it-works" class="relative z-10 py-28 px-6 lg:px-12">
    <div class="max-w-7xl mx-auto">

      <div class="text-center max-w-2xl mx-auto mb-20 reveal">
        <div class="tag mb-5">The Process</div>
        <h2 class="font-display font-800 text-4xl lg:text-5xl text-silver-100 leading-[1.1] mb-5">
          Live in 48 hours.<br/><span class="text-cyan-glow">Seriously.</span>
        </h2>
        <p class="font-body text-silver-300 text-lg">
          We've streamlined onboarding so you can stop losing leads immediately — not in 6 weeks.
        </p>
      </div>

      <div class="relative">
        <!-- Connecting line -->
        <div class="hidden lg:block absolute top-12 left-[16%] right-[16%] h-px bg-gradient-to-r from-transparent via-cyan-glow/30 to-transparent"></div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">

          <div class="text-center reveal" style="transition-delay:0.05s">
            <div class="step-number mb-2">01</div>
            <div class="w-14 h-14 rounded-2xl bg-panel border border-cyan-glow/20 flex items-center justify-center mx-auto mb-5">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#00E5FF" stroke-width="1.8">
                <rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/>
              </svg>
            </div>
            <h3 class="font-display font-700 text-silver-100 text-lg mb-2">Book a Call</h3>
            <p class="font-body text-silver-400 text-sm leading-relaxed">Schedule a free 20-minute discovery call. We'll assess your needs and recommend the right package.</p>
          </div>

          <div class="text-center reveal" style="transition-delay:0.1s">
            <div class="step-number mb-2">02</div>
            <div class="w-14 h-14 rounded-2xl bg-panel border border-cyan-glow/20 flex items-center justify-center mx-auto mb-5">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#00E5FF" stroke-width="1.8">
                <circle cx="12" cy="12" r="3"/><path d="M19.07 4.93a10 10 0 010 14.14M4.93 4.93a10 10 0 000 14.14"/>
              </svg>
            </div>
            <h3 class="font-display font-700 text-silver-100 text-lg mb-2">We Build</h3>
            <p class="font-body text-silver-400 text-sm leading-relaxed">Our team configures your AI system, integrates your calendar and CRM, and sets up all automations.</p>
          </div>

          <div class="text-center reveal" style="transition-delay:0.15s">
            <div class="step-number mb-2">03</div>
            <div class="w-14 h-14 rounded-2xl bg-panel border border-cyan-glow/20 flex items-center justify-center mx-auto mb-5">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#00E5FF" stroke-width="1.8">
                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
              </svg>
            </div>
            <h3 class="font-display font-700 text-silver-100 text-lg mb-2">Go Live</h3>
            <p class="font-body text-silver-400 text-sm leading-relaxed">Your AI receptionist goes live — tested, tuned, and ready to capture leads the moment it's deployed.</p>
          </div>

          <div class="text-center reveal" style="transition-delay:0.2s">
            <div class="step-number mb-2">04</div>
            <div class="w-14 h-14 rounded-2xl bg-panel border border-cyan-glow/20 flex items-center justify-center mx-auto mb-5">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#00E5FF" stroke-width="1.8">
                <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/>
              </svg>
            </div>
            <h3 class="font-display font-700 text-silver-100 text-lg mb-2">Scale & Grow</h3>
            <p class="font-body text-silver-400 text-sm leading-relaxed">We monitor, optimize, and expand your systems as your business grows. You grow — your AI grows with you.</p>
          </div>

        </div>
      </div>
    </div>
  </section>


  <div class="section-divider mx-12 lg:mx-24"></div>


  <!-- ══════════════════════════════════════════════
       ADDITIONAL SERVICES
  ══════════════════════════════════════════════ -->
  <section class="relative z-10 py-28 px-6 lg:px-12">
    <div class="max-w-7xl mx-auto">

      <div class="text-center max-w-2xl mx-auto mb-20 reveal">
        <div class="tag mb-5">Beyond Automation</div>
        <h2 class="font-display font-800 text-4xl lg:text-5xl text-silver-100 leading-[1.1] mb-5">
          Everything your business<br/>needs to <span class="text-cyan-glow">look the part</span>
        </h2>
      </div>

      <div class="grid md:grid-cols-3 gap-6">

        <div class="card-glow rounded-2xl p-8 reveal" style="transition-delay:0.05s">
          <div class="flex items-center gap-4 mb-5">
            <div class="w-12 h-12 rounded-xl bg-cyan-glow/10 border border-cyan-glow/20 flex items-center justify-center flex-shrink-0">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#00E5FF" stroke-width="1.8">
                <rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/>
              </svg>
            </div>
            <h3 class="font-display font-700 text-silver-100 text-xl">Web Design</h3>
          </div>
          <p class="font-body text-silver-300 text-sm leading-relaxed mb-5">
            Modern, clean, conversion-first websites that are built as complete digital systems — not just pretty pages. Integrated with your AI tools from day one.
          </p>
          <a href="#contact" class="font-mono text-xs text-cyan-glow hover:text-cyan-mid transition-colors tracking-wide uppercase flex items-center gap-2">
            Learn More
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
              <line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/>
            </svg>
          </a>
        </div>

        <div class="card-glow rounded-2xl p-8 reveal" style="transition-delay:0.1s">
          <div class="flex items-center gap-4 mb-5">
            <div class="w-12 h-12 rounded-xl bg-cyan-glow/10 border border-cyan-glow/20 flex items-center justify-center flex-shrink-0">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#00E5FF" stroke-width="1.8">
                <circle cx="12" cy="12" r="10"/><path d="M8.56 2.75c4.37 6.03 6.02 9.42 8.03 17.72m2.54-15.38c-3.72 4.35-8.94 5.66-16.88 5.85m19.5 1.9c-3.5-.93-6.63-.82-8.94 0-2.58.92-5.01 2.86-7.44 6.32"/>
              </svg>
            </div>
            <h3 class="font-display font-700 text-silver-100 text-xl">Brand Design</h3>
          </div>
          <p class="font-body text-silver-300 text-sm leading-relaxed mb-5">
            Stand out with a brand identity that communicates credibility and authority. Logos, color systems, typography, and full brand guidelines built to last.
          </p>
          <a href="#contact" class="font-mono text-xs text-cyan-glow hover:text-cyan-mid transition-colors tracking-wide uppercase flex items-center gap-2">
            Learn More
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
              <line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/>
            </svg>
          </a>
        </div>

        <div class="card-glow rounded-2xl p-8 reveal" style="transition-delay:0.15s">
          <div class="flex items-center gap-4 mb-5">
            <div class="w-12 h-12 rounded-xl bg-cyan-glow/10 border border-cyan-glow/20 flex items-center justify-center flex-shrink-0">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#00E5FF" stroke-width="1.8">
                <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
              </svg>
            </div>
            <h3 class="font-display font-700 text-silver-100 text-xl">AI Consulting</h3>
          </div>
          <p class="font-body text-silver-300 text-sm leading-relaxed mb-5">
            Not sure where AI fits in your business? We map out exactly where automation can save time, reduce costs, and open new revenue — then build it for you.
          </p>
          <a href="#contact" class="font-mono text-xs text-cyan-glow hover:text-cyan-mid transition-colors tracking-wide uppercase flex items-center gap-2">
            Learn More
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
              <line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/>
            </svg>
          </a>
        </div>

      </div>
    </div>
  </section>


  <!-- ══════════════════════════════════════════════
       CTA BANNER
  ══════════════════════════════════════════════ -->
  <section class="relative z-10 py-6 px-6 lg:px-12">
    <div class="max-w-7xl mx-auto">
      <div class="relative overflow-hidden rounded-3xl p-12 lg:p-16 text-center reveal"
           style="background: linear-gradient(135deg, rgba(0,229,255,0.08) 0%, rgba(0,80,120,0.2) 50%, rgba(0,229,255,0.05) 100%); border: 1px solid rgba(0,229,255,0.2);">
        <div class="hero-blob" style="width:400px;height:400px;background:radial-gradient(circle,rgba(0,229,255,0.12) 0%,transparent 70%);top:-100px;left:50%;transform:translateX(-50%);"></div>
        <div class="relative z-10">
          <div class="tag mb-6">Ready to Automate?</div>
          <h2 class="font-display font-800 text-4xl lg:text-5xl text-silver-100 leading-[1.1] mb-5">
            Stop losing leads.<br/><span class="text-cyan-glow">Start scaling.</span>
          </h2>
          <p class="font-body text-silver-300 text-lg max-w-xl mx-auto mb-10">
            Book a free strategy call and we'll show you exactly how Insight AI can be running in your business within 48 hours.
          </p>
          <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="https://app.gohighlevel.com/" target="_blank" rel="noopener"
               class="btn-primary px-10 py-4 rounded-xl text-base flex items-center gap-3">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/>
              </svg>
              Schedule a Strategy Call
            </a>
            <a href="tel:+17754427070‬"
               class="btn-outline px-10 py-4 rounded-xl text-base flex items-center gap-3">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81a19.79 19.79 0 01-3.07-8.63A2 2 0 012 .18h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.09-1.09a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/>
              </svg>
              Call for a Live Demo
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <div class="section-divider mx-12 lg:mx-24 my-10"></div>


  <!-- ══════════════════════════════════════════════
       CONTACT FORM
  ══════════════════════════════════════════════ -->
  <section id="contact" class="relative z-10 py-28 px-6 lg:px-12">
    <div class="max-w-7xl mx-auto">
      <div class="grid lg:grid-cols-2 gap-16">

        <!-- Left -->
        <div class="reveal">
          <div class="tag mb-5">Get In Touch</div>
          <h2 class="font-display font-800 text-4xl lg:text-5xl text-silver-100 leading-[1.1] mb-5">
            Let's build something<br/><span class="text-cyan-glow">intelligent.</span>
          </h2>
          <p class="font-body text-silver-300 leading-relaxed mb-10">
            Whether you want a full demo, have questions about a specific package, or need a custom automation — drop us a message and we'll follow up within one business day.
          </p>

          <div class="space-y-5">
            <div class="flex items-center gap-4">
              <div class="w-10 h-10 rounded-xl bg-cyan-glow/10 border border-cyan-glow/20 flex items-center justify-center flex-shrink-0">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#00E5FF" stroke-width="1.8">
                  <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81a19.79 19.79 0 01-3.07-8.63A2 2 0 012 .18h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.09-1.09a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/>
                </svg>
              </div>
              <div>
                <div class="font-body text-xs text-silver-400 mb-0.5">Phone / Live Demo</div>
                <a href="tel:+17754427070‬" class="font-display font-600 text-silver-100 hover:text-cyan-glow transition-colors">+1 (801) 555-0000</a>
              </div>
            </div>

            <div class="flex items-center gap-4">
              <div class="w-10 h-10 rounded-xl bg-cyan-glow/10 border border-cyan-glow/20 flex items-center justify-center flex-shrink-0">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#00E5FF" stroke-width="1.8">
                  <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/>
                </svg>
              </div>
              <div>
                <div class="font-body text-xs text-silver-400 mb-0.5">Email</div>
                <a href="mailto:hello@insightwebtech.com" class="font-display font-600 text-silver-100 hover:text-cyan-glow transition-colors">hello@insightwebtech.com</a>
              </div>
            </div>

            <div class="flex items-center gap-4">
              <div class="w-10 h-10 rounded-xl bg-cyan-glow/10 border border-cyan-glow/20 flex items-center justify-center flex-shrink-0">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#00E5FF" stroke-width="1.8">
                  <rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/>
                </svg>
              </div>
              <div>
                <div class="font-body text-xs text-silver-400 mb-0.5">Schedule</div>
                <a href="https://app.gohighlevel.com/" target="_blank" rel="noopener" class="font-display font-600 text-silver-100 hover:text-cyan-glow transition-colors">Book a free strategy call →</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Right: Form -->
        <div class="card-glow rounded-2xl p-8 lg:p-10 reveal" style="transition-delay:0.15s">
          <form id="contact-form" class="space-y-5" onsubmit="handleFormSubmit(event)">
            <div class="grid sm:grid-cols-2 gap-5">
              <div>
                <label class="font-mono text-xs text-silver-400 tracking-widest uppercase mb-2 block">First Name</label>
                <input type="text" placeholder="John" class="form-input" required />
              </div>
              <div>
                <label class="font-mono text-xs text-silver-400 tracking-widest uppercase mb-2 block">Last Name</label>
                <input type="text" placeholder="Smith" class="form-input" required />
              </div>
            </div>
            <div>
              <label class="font-mono text-xs text-silver-400 tracking-widest uppercase mb-2 block">Business Email</label>
              <input type="email" placeholder="john@yourcompany.com" class="form-input" required />
            </div>
            <div>
              <label class="font-mono text-xs text-silver-400 tracking-widest uppercase mb-2 block">Phone Number</label>
              <input type="tel" placeholder="+1 (801) 555-0000" class="form-input" />
            </div>
            <div>
              <label class="font-mono text-xs text-silver-400 tracking-widest uppercase mb-2 block">I'm interested in…</label>
              <select class="form-input" required>
                <option value="" disabled selected>Select a service</option>
                <option>Starter AI Receptionist Package</option>
                <option>Growth Automation Package</option>
                <option>Pro Package</option>
                <option>Web Design</option>
                <option>Brand Design</option>
                <option>AI Consulting</option>
                <option>Not sure — help me decide</option>
              </select>
            </div>
            <div>
              <label class="font-mono text-xs text-silver-400 tracking-widest uppercase mb-2 block">Message</label>
              <textarea rows="4" placeholder="Tell us about your business and what you're hoping to automate..." class="form-input resize-none"></textarea>
            </div>

            <button type="submit" class="btn-primary w-full py-4 rounded-xl text-sm flex items-center justify-center gap-3">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/>
              </svg>
              Send Message
            </button>
          </form>

          <!-- Success message (hidden) -->
          <div id="form-success" class="hidden text-center py-8">
            <div class="w-16 h-16 rounded-full bg-cyan-glow/15 border border-cyan-glow/30 flex items-center justify-center mx-auto mb-4">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#00E5FF" stroke-width="2">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
            </div>
            <h3 class="font-display font-700 text-silver-100 text-xl mb-2">Message Received!</h3>
            <p class="font-body text-silver-400 text-sm">We'll reach out within one business day. In the meantime, feel free to <a href="tel:+17754427070‬" class="text-cyan-glow hover:underline">call us</a> for an instant demo.</p>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- ══════════════════════════════════════════════
       FOOTER
  ══════════════════════════════════════════════ -->
  <footer class="relative z-10 border-t border-cyan-glow/10 py-12 px-6 lg:px-12">
    <div class="max-w-7xl mx-auto">
      <div class="grid md:grid-cols-4 gap-10 mb-12">

        <!-- Brand -->
        <div class="md:col-span-2">
          <a href="#" class="flex items-center gap-3 mb-4 group w-fit">
            <div class="w-8 h-8 rounded-lg bg-cyan-glow flex items-center justify-center shadow-glow">
              <svg width="18" height="18" viewBox="0 0 18 18" fill="none">
                <path d="M9 1L16 5V13L9 17L2 13V5L9 1Z" stroke="#060A14" stroke-width="1.5" fill="rgba(6,10,20,0.3)"/>
                <circle cx="9" cy="9" r="2.5" fill="#060A14"/>
              </svg>
            </div>
            <span class="font-display font-700 text-silver-100 text-lg tracking-tight">Insight<span class="text-cyan-glow">Web</span> Technologies</span>
          </a>
          <p class="font-body text-silver-400 text-sm leading-relaxed max-w-xs mb-5">
            AI receptionists and automation systems for businesses that want to scale intelligently and never miss a lead.
          </p>
          <div class="flex items-center gap-3">
            <a href="https://app.gohighlevel.com/" target="_blank" rel="noopener"
               class="w-9 h-9 rounded-lg bg-panel border border-cyan-glow/15 flex items-center justify-center text-silver-400 hover:text-cyan-glow hover:border-cyan-glow/40 transition-all">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor">
                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
              </svg>
            </a>
            <a href="#" class="w-9 h-9 rounded-lg bg-panel border border-cyan-glow/15 flex items-center justify-center text-silver-400 hover:text-cyan-glow hover:border-cyan-glow/40 transition-all">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor">
                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
              </svg>
            </a>
            <a href="#" class="w-9 h-9 rounded-lg bg-panel border border-cyan-glow/15 flex items-center justify-center text-silver-400 hover:text-cyan-glow hover:border-cyan-glow/40 transition-all">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
              </svg>
            </a>
          </div>
        </div>

        <!-- Services -->
        <div>
          <div class="font-mono text-xs text-cyan-glow tracking-widest uppercase mb-5">Services</div>
          <ul class="space-y-2.5 font-body text-sm text-silver-400">
            <li><a href="#packages" class="hover:text-silver-100 transition-colors">AI Receptionist</a></li>
            <li><a href="#packages" class="hover:text-silver-100 transition-colors">SMS & Voice AI</a></li>
            <li><a href="#services" class="hover:text-silver-100 transition-colors">Web Design</a></li>
            <li><a href="#services" class="hover:text-silver-100 transition-colors">Brand Design</a></li>
            <li><a href="#services" class="hover:text-silver-100 transition-colors">AI Consulting</a></li>
          </ul>
        </div>

        <!-- Company -->
        <div>
          <div class="font-mono text-xs text-cyan-glow tracking-widest uppercase mb-5">Company</div>
          <ul class="space-y-2.5 font-body text-sm text-silver-400">
            <li><a href="#how-it-works" class="hover:text-silver-100 transition-colors">How It Works</a></li>
            <li><a href="#packages" class="hover:text-silver-100 transition-colors">Pricing</a></li>
            <li><a href="#contact" class="hover:text-silver-100 transition-colors">Contact</a></li>
            <li><a href="https://app.gohighlevel.com/" target="_blank" rel="noopener" class="hover:text-silver-100 transition-colors">Book a Call</a></li>
          </ul>
        </div>

      </div>

      <div class="section-divider mb-6"></div>
      <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
        <p class="font-mono text-xs text-silver-400">© 2025 Insight Web Technologies. All rights reserved.</p>
        <div class="flex gap-6 font-mono text-xs text-silver-400">
          <a href="#" class="hover:text-cyan-glow transition-colors">Privacy Policy</a>
          <a href="#" class="hover:text-cyan-glow transition-colors">Terms of Service</a>
        </div>
      </div>
    </div>
  </footer>


  <!-- ══════════════════════════════════════════════
       SCRIPTS
  ══════════════════════════════════════════════ -->
  <script>
    // ── Scroll progress bar ──
    window.addEventListener('scroll', () => {
      const scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
      const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
      const progress = (scrollTop / scrollHeight) * 100;
      document.getElementById('scroll-progress').style.width = progress + '%';
    });

    // ── Navbar background on scroll ──
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
      if (window.scrollY > 30) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    });

    // ── Mobile menu toggle ──
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobile-menu');
    const iconOpen = document.getElementById('icon-open');
    const iconClose = document.getElementById('icon-close');

    hamburger.addEventListener('click', () => {
      const isOpen = mobileMenu.classList.contains('open');
      mobileMenu.classList.toggle('open');
      iconOpen.classList.toggle('hidden');
      iconClose.classList.toggle('hidden');
    });

    // Close mobile menu on link click
    mobileMenu.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', () => {
        mobileMenu.classList.remove('open');
        iconOpen.classList.remove('hidden');
        iconClose.classList.add('hidden');
      });
    });

    // ── Intersection Observer for reveal animations ──
    const revealObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
        }
      });
    }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });

    document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));

    // ── Form submit handler ──
    function handleFormSubmit(e) {
      e.preventDefault();
      const form = document.getElementById('contact-form');
      const success = document.getElementById('form-success');
      form.style.opacity = '0';
      form.style.transition = 'opacity 0.3s ease';
      setTimeout(() => {
        form.style.display = 'none';
        success.classList.remove('hidden');
      }, 300);
    }
  </script>

</body>
</html>
