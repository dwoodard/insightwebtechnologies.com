<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Insight Web Technologies — AI Chat Assistant & Automation for Local Businesses</title>
  <meta name="description" content="Give your business website a 24/7 AI assistant that answers customer questions, books appointments, and follows up on leads automatically. Powered by Insight Web Technologies." />
  <meta name="keywords" content="AI chatbot for business, AI receptionist, website chat assistant, appointment booking automation, SMS follow-up, lead capture, small business AI" />

  <link rel="canonical" href="{{ request()->url() }}" />

  <meta property="og:type" content="website" />
  <meta property="og:title" content="Insight Web Technologies — AI Chat Assistant for Your Business" />
  <meta property="og:description" content="Your website, always working for you. An AI assistant that answers questions, books appointments, and follows up with leads — 24/7." />
  <meta property="og:site_name" content="Insight Web Technologies" />
  <meta property="og:url" content="{{ request()->fullUrl() }}" />
  <meta property="og:image" content="{{ asset('build/assets/og-image.png') }}" />

  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Insight Web Technologies — AI Chat Assistant for Your Business" />
  <meta name="twitter:description" content="Your website, always working for you. An AI assistant that answers questions, books appointments, and follows up with leads — 24/7." />
  <meta name="twitter:image" content="{{ asset('build/assets/og-image.png') }}" />

  @verbatim
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "Insight Web Technologies",
    "description": "AI chat assistants and automation tools for small and local businesses.",
    "telephone": "+17754427070",
    "serviceType": ["AI Chat Assistant", "Appointment Booking Automation", "SMS Follow-Up", "Lead Capture", "Web Design"]
  }
  </script>
  @endverbatim

  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />

  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: { sans: ['"Plus Jakarta Sans"', 'sans-serif'] },
          colors: {
            navy:  '#0D1F4E',
            navyL: '#1a3068',
            blue:  '#2563EB',
            blueL: '#3B82F6',
            blueMuted: '#EFF6FF',
            blueBorder: '#BFDBFE',
            teal:  '#0891B2',
            tealL: '#E0F7FA',
            body:  '#374151',
            muted: '#6B7280',
            light: '#9CA3AF',
            bg:    '#F8FAFD',
            bdr:   '#E5E7EB',
            green: '#10B981',
            greenBg: '#ECFDF5',
          }
        }
      }
    }
  </script>

  <style>
    *, *::before, *::after { box-sizing: border-box; }
    html { scroll-behavior: smooth; }
    body { background: #fff; color: #374151; font-family: 'Plus Jakarta Sans', sans-serif; overflow-x: hidden; }

    .reveal { opacity: 0; transform: translateY(22px); transition: opacity 0.6s ease, transform 0.6s ease; }
    .reveal.visible { opacity: 1; transform: translateY(0); }

    #navbar { transition: background 0.3s, box-shadow 0.3s; }
    #navbar.scrolled { background: rgba(255,255,255,0.97); backdrop-filter: blur(16px); box-shadow: 0 1px 0 #E5E7EB, 0 4px 18px rgba(0,0,0,0.05); }

    .btn-primary { background:#2563EB; color:#fff; font-weight:700; border-radius:10px; transition:all 0.2s; display:inline-flex; align-items:center; gap:8px; }
    .btn-primary:hover { background:#1D4ED8; box-shadow:0 4px 20px rgba(37,99,235,0.35); transform:translateY(-1px); }

    .btn-navy { background:#0D1F4E; color:#fff; font-weight:700; border-radius:10px; transition:all 0.2s; display:inline-flex; align-items:center; gap:8px; }
    .btn-navy:hover { background:#1a3068; box-shadow:0 4px 20px rgba(13,31,78,0.3); transform:translateY(-1px); }

    .btn-outline { border:2px solid #2563EB; color:#2563EB; font-weight:700; border-radius:10px; background:transparent; transition:all 0.2s; display:inline-flex; align-items:center; gap:8px; }
    .btn-outline:hover { background:#EFF6FF; transform:translateY(-1px); }

    .btn-outline-white { border:2px solid rgba(255,255,255,0.4); color:white; font-weight:700; border-radius:10px; background:transparent; transition:all 0.2s; display:inline-flex; align-items:center; gap:8px; }
    .btn-outline-white:hover { background:rgba(255,255,255,0.1); transform:translateY(-1px); }

    .btn-white { background:#fff; color:#0D1F4E; font-weight:700; border-radius:10px; transition:all 0.2s; display:inline-flex; align-items:center; gap:8px; }
    .btn-white:hover { background:#EFF6FF; transform:translateY(-1px); }

    .card { background:#fff; border:1px solid #E5E7EB; border-radius:16px; box-shadow:0 2px 18px rgba(0,0,0,0.06); transition:border-color 0.25s, box-shadow 0.25s, transform 0.25s; }
    .card:hover { border-color:#BFDBFE; box-shadow:0 8px 36px rgba(37,99,235,0.1); transform:translateY(-3px); }

    .card-featured { background:linear-gradient(145deg,#0D1F4E,#1a3a70); border:2px solid #3B82F6; border-radius:16px; box-shadow:0 12px 50px rgba(13,31,78,0.22); transition:box-shadow 0.25s, transform 0.25s; color:#fff; }
    .card-featured:hover { box-shadow:0 20px 60px rgba(13,31,78,0.32); transform:translateY(-4px); }

    .section-light { background:#F8FAFD; }
    .section-navy  { background:linear-gradient(135deg,#0D1F4E 0%,#1a3a70 100%); }
    .section-teal  { background:linear-gradient(135deg,#0891B2 0%,#0369A1 100%); }

    .chk { display:flex; align-items:flex-start; gap:10px; font-size:0.9rem; line-height:1.5; margin-bottom:10px; }
    .chk-icon { width:18px; height:18px; border-radius:50%; background:#ECFDF5; flex-shrink:0; margin-top:1px; display:flex; align-items:center; justify-content:center; color:#10B981; }
    .chk-icon-d { width:18px; height:18px; border-radius:50%; background:rgba(59,130,246,0.2); flex-shrink:0; margin-top:1px; display:flex; align-items:center; justify-content:center; color:#60A5FA; }

    .badge { font-size:0.72rem; font-weight:700; letter-spacing:0.08em; text-transform:uppercase; border-radius:6px; padding:4px 10px; display:inline-block; }
    .badge-b { background:#EFF6FF; color:#2563EB; border:1px solid #BFDBFE; }
    .badge-w { background:rgba(255,255,255,0.15); color:#fff; border:1px solid rgba(255,255,255,0.25); }
    .badge-t { background:#E0F7FA; color:#0891B2; border:1px solid #B2EBF2; }

    .hr { height:1px; background:#E5E7EB; }
    .hr-w { height:1px; background:rgba(255,255,255,0.15); }

    .form-input { background:#fff; border:1.5px solid #E5E7EB; color:#1E293B; border-radius:10px; padding:13px 16px; width:100%; font-family:inherit; font-size:0.95rem; transition:border-color 0.2s, box-shadow 0.2s; outline:none; }
    .form-input:focus { border-color:#2563EB; box-shadow:0 0 0 3px rgba(37,99,235,0.09); }
    .form-input::placeholder { color:#9CA3AF; }

    @keyframes ticker { 0%{transform:translateX(0)} 100%{transform:translateX(-50%)} }
    .ticker-track { display:flex; animation:ticker 28s linear infinite; white-space:nowrap; }

    .ping-dot { position:relative; display:inline-flex; align-items:center; gap:8px; }
    .ping-dot::before { content:''; width:8px; height:8px; border-radius:50%; background:#10B981; flex-shrink:0; }
    .ping-dot::after { content:''; position:absolute; left:0; width:8px; height:8px; border-radius:50%; background:#10B981; animation:ping 2s cubic-bezier(0,0,0.2,1) infinite; }
    @keyframes ping { 75%,100%{transform:scale(2.5);opacity:0} }

    .step-n { font-size:2.6rem; font-weight:800; color:transparent; -webkit-text-stroke:2px #BFDBFE; line-height:1; }

    .cmp-table { width:100%; border-collapse:separate; border-spacing:0; }
    .cmp-table th { padding:13px 16px; font-size:0.83rem; font-weight:700; text-align:center; background:#F8FAFD; border-bottom:2px solid #E5E7EB; }
    .cmp-table th:first-child { text-align:left; border-radius:12px 0 0 0; }
    .cmp-table th:last-child { border-radius:0 12px 0 0; }
    .cmp-table td { padding:11px 16px; text-align:center; font-size:0.875rem; color:#6B7280; border-bottom:1px solid #F1F5F9; }
    .cmp-table td:first-child { text-align:left; color:#374151; font-weight:500; }
    .cmp-table tbody tr:hover td { background:#F8FAFD; }
    .cmp-table .cf { background:#EFF6FF; border-left:2px solid #BFDBFE; border-right:2px solid #BFDBFE; }
    .cmp-table .cfh { background:#EFF6FF; border-left:2px solid #BFDBFE; border-right:2px solid #BFDBFE; color:#2563EB; }
    .cmp-price td { font-weight:800; font-size:0.95rem; color:#0D1F4E; background:#F8FAFD; border-top:2px solid #E5E7EB; border-bottom:none; }
    .cmp-price td.cf { color:#2563EB; background:#EFF6FF; }
    .cmp-wrap { border:1.5px solid #E5E7EB; border-radius:14px; overflow:hidden; }
    .y { color:#10B981; font-weight:700; font-size:0.95rem; }
    .n { color:#D1D5DB; font-size:0.8rem; }

    #mobile-menu { display:none; }
    #mobile-menu.open { display:flex; }
    #scroll-progress { position:fixed; top:0; left:0; height:3px; background:linear-gradient(90deg,#2563EB,#0891B2); z-index:9999; width:0%; transition:width 0.1s linear; }
  </style>
</head>

<body>
<div id="scroll-progress"></div>

<!-- NAV -->
<nav id="navbar" class="fixed top-0 left-0 right-0 z-50 px-6 lg:px-12 bg-transparent">
  <div class="max-w-7xl mx-auto flex items-center justify-between h-16 lg:h-20">
    <a href="#" class="flex items-center gap-3">
      <div class="w-9 h-9 rounded-xl bg-blue flex items-center justify-center">
        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 1L16 5V13L9 17L2 13V5L9 1Z" stroke="white" stroke-width="1.5" fill="rgba(255,255,255,0.15)"/><circle cx="9" cy="9" r="2.5" fill="white"/></svg>
      </div>
      <span class="font-bold text-navy text-lg tracking-tight" style="font-weight:800">Insight<span class="text-blue">Web</span></span>
    </a>
    <ul class="hidden md:flex items-center gap-8 text-sm font-semibold text-body">
      <li><a href="#how-it-works" class="hover:text-blue transition-colors">How It Works</a></li>
      <li><a href="#packages" class="hover:text-blue transition-colors">Packages</a></li>
      <li><a href="#services" class="hover:text-blue transition-colors">More Services</a></li>
      <li><a href="#contact" class="hover:text-blue transition-colors">Contact</a></li>
    </ul>
    <div class="hidden md:flex items-center gap-3">
      <a href="tel:+17754427070" class="btn-outline text-sm px-5 py-2.5">
        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81a19.79 19.79 0 01-3.07-8.63A2 2 0 012 .18h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.09-1.09a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
        Call for a Demo
      </a>
      <a href="#contact" class="btn-primary text-sm px-5 py-2.5">Book a Free Call</a>
    </div>
    <button id="hamburger" class="md:hidden p-2 text-body" aria-label="Toggle menu">
      <svg id="icon-open" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
      <svg id="icon-close" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="hidden"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
    </button>
  </div>
  <div id="mobile-menu" class="flex-col gap-3 md:hidden pb-5 px-2 border-t border-bdr pt-4 bg-white/97 backdrop-blur-xl">
    <a href="#how-it-works" class="font-semibold text-body hover:text-blue py-1 block">How It Works</a>
    <a href="#packages" class="font-semibold text-body hover:text-blue py-1 block">Packages</a>
    <a href="#services" class="font-semibold text-body hover:text-blue py-1 block">More Services</a>
    <a href="#contact" class="font-semibold text-body hover:text-blue py-1 block">Contact</a>
    <div class="flex flex-col gap-3 pt-2">
      <a href="tel:+17754427070" class="btn-outline text-sm px-5 py-3 justify-center">Call for a Demo</a>
      <a href="#contact" class="btn-primary text-sm px-5 py-3 justify-center">Book a Free Call</a>
    </div>
  </div>
</nav>


<!-- HERO -->
<section class="section-navy relative overflow-hidden pt-20">
  <div class="absolute inset-0 overflow-hidden pointer-events-none">
    <div style="position:absolute;width:600px;height:600px;background:radial-gradient(circle,rgba(59,130,246,0.14) 0%,transparent 70%);top:-150px;right:-100px;border-radius:50%;"></div>
    <div style="position:absolute;width:400px;height:400px;background:radial-gradient(circle,rgba(8,145,178,0.09) 0%,transparent 70%);bottom:-100px;left:-50px;border-radius:50%;"></div>
  </div>

  <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-12 py-20 lg:py-28">

    <div class="mb-8 reveal">
      <div class="inline-flex items-center gap-3 bg-white/10 backdrop-blur-sm border border-white/20 rounded-full px-5 py-2">
        <span class="ping-dot text-white text-sm font-semibold">Live demos available</span>
        <span class="text-white/30">|</span>
        <a href="tel:+17754427070" class="text-white/80 hover:text-white text-sm font-semibold transition-colors flex items-center gap-1.5">
          <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81a19.79 19.79 0 01-3.07-8.63A2 2 0 012 .18h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.09-1.09a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
          +1 (775) 442-7070
        </a>
      </div>
    </div>

    <div class="grid lg:grid-cols-2 gap-14 items-center">
      <div>
        <div class="badge badge-w mb-5 reveal" style="transition-delay:0.05s">AI Chat Assistant for Local Businesses</div>
        <h1 class="text-white text-4xl lg:text-5xl xl:text-6xl leading-[1.1] mb-6 reveal" style="font-weight:800;transition-delay:0.1s">
          Your website,<br/>
          <span style="color:#60A5FA;">always working</span><br/>
          for you.
        </h1>
        <p class="text-white/75 text-lg leading-relaxed max-w-lg mb-8 reveal" style="transition-delay:0.15s">
          Add an AI assistant to your website that answers customer questions, books appointments, and captures leads — around the clock, without any extra effort from you.
        </p>
        <div class="flex flex-col sm:flex-row gap-3 mb-10 reveal" style="transition-delay:0.2s">
          <a href="#contact" class="btn-white px-7 py-3.5 text-base justify-center">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
            Book a Free Strategy Call
          </a>
          <a href="tel:+17754427070" class="btn-outline-white px-7 py-3.5 text-base justify-center">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81a19.79 19.79 0 01-3.07-8.63A2 2 0 012 .18h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.09-1.09a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
            Hear a Live Demo
          </a>
        </div>
        <div class="flex flex-wrap gap-5 reveal" style="transition-delay:0.25s">
          <div class="flex items-center gap-2 text-white/60 text-sm">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="#10B981"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/></svg>
            5-star rated
          </div>
          <span class="text-white/20 hidden sm:block">|</span>
          <div class="flex items-center gap-2 text-white/60 text-sm">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#60A5FA" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
            Active 24/7
          </div>
          <span class="text-white/20 hidden sm:block">|</span>
          <div class="flex items-center gap-2 text-white/60 text-sm">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#60A5FA" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            No long-term contracts
          </div>
        </div>
      </div>

      <!-- Chat card -->
      <div class="hidden lg:block reveal" style="transition-delay:0.3s">
        <div class="relative max-w-sm ml-auto">
          <div class="bg-white rounded-2xl p-6" style="box-shadow:0 20px 60px rgba(13,31,78,0.25);">
            <div class="flex items-center gap-3 mb-4 pb-4 border-b border-bdr">
              <div class="w-10 h-10 rounded-full bg-blue flex items-center justify-center flex-shrink-0">
                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
              </div>
              <div>
                <div class="font-bold text-navy text-sm">Insight Assistant</div>
                <div class="flex items-center gap-1.5 mt-0.5">
                  <div class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></div>
                  <span class="text-xs text-muted">Online · answers in seconds</span>
                </div>
              </div>
            </div>
            <div class="space-y-3 mb-4">
              <div class="bg-blueMuted rounded-2xl rounded-tl-sm px-4 py-3 text-sm text-body max-w-[88%]">Hi! 👋 What can I help you with today?</div>
              <div class="rounded-2xl rounded-tr-sm px-4 py-3 text-sm text-white max-w-[88%] ml-auto" style="background:#0D1F4E;">Do you have any openings this week?</div>
              <div class="bg-blueMuted rounded-2xl rounded-tl-sm px-4 py-3 text-sm text-body max-w-[88%]">Yes! I can book you in. What day works best — Wednesday or Thursday?</div>
              <div class="flex gap-1 px-3 py-2.5 bg-bg rounded-2xl max-w-[56px]">
                <div class="w-1.5 h-1.5 rounded-full bg-light animate-bounce" style="animation-delay:0s"></div>
                <div class="w-1.5 h-1.5 rounded-full bg-light animate-bounce" style="animation-delay:0.15s"></div>
                <div class="w-1.5 h-1.5 rounded-full bg-light animate-bounce" style="animation-delay:0.3s"></div>
              </div>
            </div>
            <div class="grid grid-cols-3 gap-2 pt-4 border-t border-bdr">
              <div class="text-center"><div class="font-extrabold text-blue text-lg">24/7</div><div class="text-xs text-muted">Available</div></div>
              <div class="text-center"><div class="font-extrabold text-blue text-lg">&lt;5s</div><div class="text-xs text-muted">Response</div></div>
              <div class="text-center"><div class="font-extrabold text-blue text-lg">∞</div><div class="text-xs text-muted">Chats at once</div></div>
            </div>
          </div>
          <div class="absolute -top-4 -right-4 bg-green-500 text-white rounded-xl px-3 py-2 text-xs font-bold shadow-lg">Never miss a lead</div>
        </div>
      </div>
    </div>
  </div>

  <div style="position:relative;height:55px;overflow:hidden;">
    <svg viewBox="0 0 1440 55" fill="none" xmlns="http://www.w3.org/2000/svg" style="position:absolute;bottom:0;width:100%;" preserveAspectRatio="none">
      <path d="M0 55 L0 28 Q360 0 720 28 Q1080 55 1440 28 L1440 55 Z" fill="white"/>
    </svg>
  </div>
</section>


<!-- TICKER -->
<div class="overflow-hidden border-b border-bdr bg-white py-3">
  <div class="ticker-track">
    <div class="flex items-center gap-10 px-8 text-xs font-bold text-muted tracking-widest uppercase">
      <span class="text-blue">✦</span><span>AI Chat Assistant</span>
      <span class="text-blue">✦</span><span>Appointment Booking</span>
      <span class="text-blue">✦</span><span>Lead Capture</span>
      <span class="text-blue">✦</span><span>SMS Follow-Up</span>
      <span class="text-blue">✦</span><span>Missed Call Text-Back</span>
      <span class="text-blue">✦</span><span>CRM Contact Creation</span>
      <span class="text-blue">✦</span><span>Review Requests</span>
      <span class="text-blue">✦</span><span>FAQ Automation</span>
      <span class="text-blue">✦</span><span>Web Design</span>
      <span class="text-blue">✦</span><span>Monthly Monitoring</span>
    </div>
    <div class="flex items-center gap-10 px-8 text-xs font-bold text-muted tracking-widest uppercase" aria-hidden="true">
      <span class="text-blue">✦</span><span>AI Chat Assistant</span>
      <span class="text-blue">✦</span><span>Appointment Booking</span>
      <span class="text-blue">✦</span><span>Lead Capture</span>
      <span class="text-blue">✦</span><span>SMS Follow-Up</span>
      <span class="text-blue">✦</span><span>Missed Call Text-Back</span>
      <span class="text-blue">✦</span><span>CRM Contact Creation</span>
      <span class="text-blue">✦</span><span>Review Requests</span>
      <span class="text-blue">✦</span><span>FAQ Automation</span>
      <span class="text-blue">✦</span><span>Web Design</span>
      <span class="text-blue">✦</span><span>Monthly Monitoring</span>
    </div>
  </div>
</div>


<!-- PROBLEM / VALUE -->
<section class="py-24 px-6 lg:px-12 bg-white">
  <div class="max-w-7xl mx-auto">
    <div class="grid lg:grid-cols-2 gap-16 items-center">
      <div class="reveal">
        <div class="badge badge-b mb-5">Sound familiar?</div>
        <h2 class="text-3xl lg:text-4xl text-navy leading-[1.2] mb-5" style="font-weight:800;">
          Your website gets visitors.<br/>
          <span class="text-blue">But are you capturing them?</span>
        </h2>
        <p class="text-body text-lg leading-relaxed mb-5">
          Most small business websites are passive — visitors come, look around, and leave without ever connecting. And when someone calls after hours? It often goes straight to voicemail.
        </p>
        <p class="text-muted leading-relaxed">
          We set up an AI chat assistant on your website that's ready to answer questions, book appointments, and collect contact info — even at 11pm on a Sunday.
        </p>
      </div>
      <div class="grid grid-cols-2 gap-4 reveal" style="transition-delay:0.1s">
        <div class="card p-6"><div class="text-3xl font-extrabold text-blue mb-2">78%</div><div class="text-sm text-body leading-snug">of customers choose the <strong class="text-navy">first business that responds</strong></div></div>
        <div class="card p-6 mt-6"><div class="text-3xl font-extrabold text-blue mb-2">60%</div><div class="text-sm text-body leading-snug">of calls happen <strong class="text-navy">outside business hours</strong> — and go unanswered</div></div>
        <div class="card p-6"><div class="text-3xl font-extrabold text-blue mb-2">3×</div><div class="text-sm text-body leading-snug">more bookings with <strong class="text-navy">automated follow-up</strong> after first contact</div></div>
        <div class="card p-6 mt-6"><div class="text-3xl font-extrabold text-blue mb-2">24/7</div><div class="text-sm text-body leading-snug">your AI assistant is always on, <strong class="text-navy">ready to help any visitor</strong></div></div>
      </div>
    </div>
  </div>
</section>


<!-- HOW IT WORKS -->
<section id="how-it-works" class="py-24 px-6 lg:px-12 section-light">
  <div class="max-w-7xl mx-auto">
    <div class="text-center max-w-xl mx-auto mb-16 reveal">
      <div class="badge badge-b mb-4">Simple Setup</div>
      <h2 class="text-3xl lg:text-4xl text-navy leading-[1.2] mb-4" style="font-weight:800;">From sign-up to live chatbot<br/>in just a few steps</h2>
      <p class="text-muted text-lg">We handle the setup — you just show up for a quick call and we take care of the rest.</p>
    </div>
    <div class="relative">
      <div class="hidden lg:block absolute top-10 left-[14%] right-[14%] h-0.5" style="background:linear-gradient(90deg,transparent,#BFDBFE,transparent)"></div>
      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
        <div class="text-center reveal" style="transition-delay:0.05s">
          <div class="step-n mb-2">01</div>
          <div class="w-14 h-14 rounded-2xl bg-blueMuted border border-blueBorder flex items-center justify-center mx-auto mb-4">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="1.8"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
          </div>
          <h3 class="font-bold text-navy text-base mb-2">Book a Free Call</h3>
          <p class="text-muted text-sm leading-relaxed">We'll learn about your business, your most common questions, and what you want the chatbot to handle.</p>
        </div>
        <div class="text-center reveal" style="transition-delay:0.1s">
          <div class="step-n mb-2">02</div>
          <div class="w-14 h-14 rounded-2xl bg-blueMuted border border-blueBorder flex items-center justify-center mx-auto mb-4">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="1.8"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 013 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>
          </div>
          <h3 class="font-bold text-navy text-base mb-2">We Build & Train It</h3>
          <p class="text-muted text-sm leading-relaxed">We set up your AI assistant, train it on your FAQs, connect your calendar, and configure it to match your business.</p>
        </div>
        <div class="text-center reveal" style="transition-delay:0.15s">
          <div class="step-n mb-2">03</div>
          <div class="w-14 h-14 rounded-2xl bg-blueMuted border border-blueBorder flex items-center justify-center mx-auto mb-4">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="1.8"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
          </div>
          <h3 class="font-bold text-navy text-base mb-2">You Go Live</h3>
          <p class="text-muted text-sm leading-relaxed">We add the chatbot to your website and run a test together. Once you're happy, it's on — ready to help your customers.</p>
        </div>
        <div class="text-center reveal" style="transition-delay:0.2s">
          <div class="step-n mb-2">04</div>
          <div class="w-14 h-14 rounded-2xl bg-blueMuted border border-blueBorder flex items-center justify-center mx-auto mb-4">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="1.8"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
          </div>
          <h3 class="font-bold text-navy text-base mb-2">We Keep It Running</h3>
          <p class="text-muted text-sm leading-relaxed">Every month we check in, monitor performance, and make updates so your assistant stays accurate and useful.</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- PACKAGES -->
<section id="packages" class="py-24 px-6 lg:px-12 bg-white">
  <div class="max-w-7xl mx-auto">
    <div class="text-center max-w-xl mx-auto mb-16 reveal">
      <div class="badge badge-b mb-4">Simple, Honest Pricing</div>
      <h2 class="text-3xl lg:text-4xl text-navy leading-[1.2] mb-4" style="font-weight:800;">Choose the plan that fits<br/>where your business is today</h2>
      <p class="text-muted text-lg">Monthly subscriptions. No contracts. Cancel anytime.</p>
    </div>

    <div class="grid lg:grid-cols-3 gap-6 items-start">

      <!-- Starter -->
      <div class="card p-8 reveal" style="transition-delay:0.05s">
        <div class="badge badge-b mb-4">Starter</div>
        <div class="flex items-end gap-2 mb-2"><span class="font-extrabold text-4xl text-navy">$297</span><span class="text-muted pb-1.5">/month</span></div>
        <p class="text-sm text-muted mb-1 font-semibold">Best for:</p>
        <p class="text-sm text-body mb-6 leading-relaxed">Small businesses that want to capture website leads and reduce time spent answering common questions.</p>
        <div class="hr mb-6"></div>
        <ul class="mb-8 space-y-2.5">
          <li class="chk"><span class="chk-icon"><svg width="10" height="10" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="1.5 6 4.5 9 10.5 3"/></svg></span><span class="text-body">AI chat assistant on your website</span></li>
          <li class="chk"><span class="chk-icon"><svg width="10" height="10" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="1.5 6 4.5 9 10.5 3"/></svg></span><span class="text-body">Answers common customer questions</span></li>
          <li class="chk"><span class="chk-icon"><svg width="10" height="10" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="1.5 6 4.5 9 10.5 3"/></svg></span><span class="text-body">Appointment booking assistance</span></li>
          <li class="chk"><span class="chk-icon"><svg width="10" height="10" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="1.5 6 4.5 9 10.5 3"/></svg></span><span class="text-body">Basic FAQ knowledge base setup</span></li>
          <li class="chk"><span class="chk-icon"><svg width="10" height="10" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="1.5 6 4.5 9 10.5 3"/></svg></span><span class="text-body">Lead capture from website chats</span></li>
          <li class="chk"><span class="chk-icon"><svg width="10" height="10" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="1.5 6 4.5 9 10.5 3"/></svg></span><span class="text-body">CRM contact creation</span></li>
          <li class="chk"><span class="chk-icon"><svg width="10" height="10" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="1.5 6 4.5 9 10.5 3"/></svg></span><span class="text-body">Basic reporting dashboard</span></li>
          <li class="chk"><span class="chk-icon"><svg width="10" height="10" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="1.5 6 4.5 9 10.5 3"/></svg></span><span class="text-body">Monthly AI monitoring</span></li>
        </ul>
        <a href="https://buy.stripe.com/test_28EfZi2DccUe6aObVldQQ00" target="_blank" rel="noopener" class="btn-outline w-full py-3.5 text-sm justify-center block text-center rounded-xl">Get Started</a>
      </div>

      <!-- Growth -->
      <div class="card-featured p-8 relative reveal" style="transition-delay:0.1s">
        <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-blue text-white rounded-full px-5 py-1.5 text-xs font-bold shadow-lg">Most Popular</div>
        <div class="badge badge-w mb-4 mt-2">Growth</div>
        <div class="flex items-end gap-2 mb-2"><span class="font-extrabold text-4xl text-white">$597</span><span class="text-white/60 pb-1.5">/month</span></div>
        <p class="text-sm text-white/60 mb-1 font-semibold">Best for:</p>
        <p class="text-sm text-white/80 mb-6 leading-relaxed">Businesses that receive frequent calls or texts and want AI to handle lead conversations automatically.</p>
        <div class="hr-w mb-6"></div>
        <ul class="mb-8 space-y-2.5" style="color:rgba(255,255,255,0.85)">
          <li class="chk"><span class="chk-icon-d"><svg width="10" height="10" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="1.5 6 4.5 9 10.5 3"/></svg></span><span>Everything in Starter</span></li>
          <li class="chk"><span class="chk-icon-d"><svg width="10" height="10" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="1.5 6 4.5 9 10.5 3"/></svg></span><span>AI SMS conversation responses</span></li>
          <li class="chk"><span class="chk-icon-d"><svg width="10" height="10" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="1.5 6 4.5 9 10.5 3"/></svg></span><span>Automated lead follow-up sequences</span></li>
          <li class="chk"><span class="chk-icon-d"><svg width="10" height="10" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="1.5 6 4.5 9 10.5 3"/></svg></span><span>Missed call text-back automation</span></li>
          <li class="chk"><span class="chk-icon-d"><svg width="10" height="10" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="1.5 6 4.5 9 10.5 3"/></svg></span><span>Pipeline tracking for leads &amp; appointments</span></li>
          <li class="chk"><span class="chk-icon-d"><svg width="10" height="10" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="1.5 6 4.5 9 10.5 3"/></svg></span><span>Review request automation</span></li>
          <li class="chk"><span class="chk-icon-d"><svg width="10" height="10" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="1.5 6 4.5 9 10.5 3"/></svg></span><span>Expanded reporting dashboard</span></li>
          <li class="chk"><span class="chk-icon-d"><svg width="10" height="10" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="1.5 6 4.5 9 10.5 3"/></svg></span><span>Monthly monitoring &amp; optimization</span></li>
        </ul>
        <a href="https://buy.stripe.com/test_14A28s4LkcUe1Uy6B1dQQ01" target="_blank" rel="noopener" class="btn-white w-full py-3.5 text-sm justify-center block text-center rounded-xl font-bold">Get Started</a>
      </div>

      <!-- Pro -->
      <div class="card p-8 reveal" style="transition-delay:0.15s">
        <div class="badge badge-t mb-4">Pro</div>
        <div class="flex items-end gap-2 mb-2"><span class="font-extrabold text-4xl text-navy">$1,197</span><span class="text-muted pb-1.5">/month</span></div>
        <p class="text-sm text-muted mb-1 font-semibold">Best for:</p>
        <p class="text-sm text-body mb-6 leading-relaxed">High-volume businesses that want a fully automated system to capture leads, schedule appointments, and follow up with customers.</p>
        <div class="hr mb-6"></div>
        <ul class="mb-8 space-y-2.5">
          <li class="chk"><span class="chk-icon"><svg width="10" height="10" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="1.5 6 4.5 9 10.5 3"/></svg></span><span class="text-body">Everything in Growth</span></li>
          <li class="chk"><span class="chk-icon"><svg width="10" height="10" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="1.5 6 4.5 9 10.5 3"/></svg></span><span class="text-body">Full AI receptionist conversation handling</span></li>
          <li class="chk"><span class="chk-icon"><svg width="10" height="10" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="1.5 6 4.5 9 10.5 3"/></svg></span><span class="text-body">Advanced workflow automations</span></li>
          <li class="chk"><span class="chk-icon"><svg width="10" height="10" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="1.5 6 4.5 9 10.5 3"/></svg></span><span class="text-body">Multi-step lead nurturing campaigns</span></li>
          <li class="chk"><span class="chk-icon"><svg width="10" height="10" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="1.5 6 4.5 9 10.5 3"/></svg></span><span class="text-body">AI knowledge base expansion</span></li>
          <li class="chk"><span class="chk-icon"><svg width="10" height="10" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="1.5 6 4.5 9 10.5 3"/></svg></span><span class="text-body">Advanced reporting &amp; performance insights</span></li>
          <li class="chk"><span class="chk-icon"><svg width="10" height="10" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="1.5 6 4.5 9 10.5 3"/></svg></span><span class="text-body">Priority monitoring &amp; support</span></li>
          <li class="chk"><span class="chk-icon"><svg width="10" height="10" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="1.5 6 4.5 9 10.5 3"/></svg></span><span class="text-body">Automation optimization &amp; updates</span></li>
        </ul>
        <a href="https://buy.stripe.com/test_7sY00kfpYdYieHkf7xdQQ02" target="_blank" rel="noopener" class="btn-navy w-full py-3.5 text-sm justify-center block text-center rounded-xl">Get Started</a>
      </div>

    </div>

    <!-- Comparison table -->
    <div class="mt-14 reveal" style="transition-delay:0.2s">
      <div class="text-center mb-8">
        <div class="badge badge-b mb-3">Compare Plans</div>
        <h3 class="font-bold text-2xl text-navy">Everything, side by side</h3>
      </div>
      <div class="cmp-wrap hidden md:block overflow-x-auto">
        <table class="cmp-table">
          <thead>
            <tr>
              <th class="text-left text-muted font-semibold text-sm w-2/5">Feature</th>
              <th class="text-navy"><div class="font-bold">Starter</div><div class="text-blue font-extrabold text-lg mt-0.5">$297<span class="text-muted text-xs font-normal">/mo</span></div></th>
              <th class="cfh"><div class="font-bold text-blue">Growth ★</div><div class="text-blue font-extrabold text-lg mt-0.5">$597<span class="text-muted text-xs font-normal">/mo</span></div></th>
              <th class="text-navy"><div class="font-bold">Pro</div><div class="text-blue font-extrabold text-lg mt-0.5">$1,197<span class="text-muted text-xs font-normal">/mo</span></div></th>
            </tr>
          </thead>
          <tbody>
            <tr><td>AI chat assistant on website</td><td><span class="y">✓</span></td><td class="cf"><span class="y">✓</span></td><td><span class="y">✓</span></td></tr>
            <tr><td>Answers customer questions (FAQ)</td><td><span class="y">✓</span></td><td class="cf"><span class="y">✓</span></td><td><span class="y">✓</span></td></tr>
            <tr><td>Appointment booking assistance</td><td><span class="y">✓</span></td><td class="cf"><span class="y">✓</span></td><td><span class="y">✓</span></td></tr>
            <tr><td>Lead capture &amp; CRM contact creation</td><td><span class="y">✓</span></td><td class="cf"><span class="y">✓</span></td><td><span class="y">✓</span></td></tr>
            <tr><td>Reporting dashboard</td><td class="text-body text-sm">Basic</td><td class="cf text-body text-sm">Expanded</td><td class="text-body text-sm">Advanced</td></tr>
            <tr><td>Monthly AI monitoring</td><td><span class="y">✓</span></td><td class="cf"><span class="y">✓</span></td><td><span class="y">✓</span></td></tr>
            <tr><td>AI SMS conversation responses</td><td><span class="n">—</span></td><td class="cf"><span class="y">✓</span></td><td><span class="y">✓</span></td></tr>
            <tr><td>Automated lead follow-up (SMS)</td><td><span class="n">—</span></td><td class="cf"><span class="y">✓</span></td><td><span class="y">✓</span></td></tr>
            <tr><td>Missed call text-back</td><td><span class="n">—</span></td><td class="cf"><span class="y">✓</span></td><td><span class="y">✓</span></td></tr>
            <tr><td>Pipeline tracking (leads &amp; appointments)</td><td><span class="n">—</span></td><td class="cf"><span class="y">✓</span></td><td><span class="y">✓</span></td></tr>
            <tr><td>Review request automation</td><td><span class="n">—</span></td><td class="cf"><span class="y">✓</span></td><td><span class="y">✓</span></td></tr>
            <tr><td>Advanced workflow automations</td><td><span class="n">—</span></td><td class="cf"><span class="n">—</span></td><td><span class="y">✓</span></td></tr>
            <tr><td>Multi-step lead nurturing campaigns</td><td><span class="n">—</span></td><td class="cf"><span class="n">—</span></td><td><span class="y">✓</span></td></tr>
            <tr><td>AI knowledge base expansion</td><td><span class="n">—</span></td><td class="cf"><span class="n">—</span></td><td><span class="y">✓</span></td></tr>
            <tr><td>Priority support</td><td><span class="n">—</span></td><td class="cf"><span class="n">—</span></td><td><span class="y">✓</span></td></tr>
            <tr class="cmp-price"><td class="text-muted font-normal text-sm">Monthly price</td><td>$297/mo</td><td class="cf">$597/mo</td><td>$1,197/mo</td></tr>
          </tbody>
        </table>
      </div>
      <!-- Mobile -->
      <div class="md:hidden space-y-4">
        <div class="card p-5"><div class="flex justify-between items-center mb-3"><div class="badge badge-b">Starter</div><span class="font-extrabold text-xl text-navy">$297<span class="text-muted text-sm font-normal">/mo</span></span></div><ul class="space-y-1.5 text-sm text-body"><li>✓ AI chat on your website</li><li>✓ Answers FAQs &amp; books appointments</li><li>✓ Lead capture &amp; CRM</li><li>✓ Basic reporting</li><li>✓ Monthly monitoring</li></ul></div>
        <div class="card-featured p-5"><div class="flex justify-between items-center mb-3"><div class="badge badge-w">Growth ★</div><span class="font-extrabold text-xl text-white">$597<span class="text-white/50 text-sm font-normal">/mo</span></span></div><ul class="space-y-1.5 text-sm" style="color:rgba(255,255,255,0.85)"><li>✓ Everything in Starter</li><li>✓ AI SMS responses</li><li>✓ Missed call text-back</li><li>✓ Lead follow-up sequences</li><li>✓ Review requests &amp; pipeline tracking</li></ul></div>
        <div class="card p-5"><div class="flex justify-between items-center mb-3"><div class="badge badge-t">Pro</div><span class="font-extrabold text-xl text-navy">$1,197<span class="text-muted text-sm font-normal">/mo</span></span></div><ul class="space-y-1.5 text-sm text-body"><li>✓ Everything in Growth</li><li>✓ Advanced automations</li><li>✓ Multi-step nurture campaigns</li><li>✓ AI knowledge base expansion</li><li>✓ Priority support</li></ul></div>
      </div>
    </div>

    <p class="text-center text-muted text-sm mt-8">Not sure which plan fits? <a href="#contact" class="text-blue font-semibold hover:underline">Book a free 20-minute call</a> and we'll help you decide.</p>
  </div>
</section>


<!-- ADDITIONAL SERVICES -->
<section id="services" class="py-24 px-6 lg:px-12 section-light">
  <div class="max-w-7xl mx-auto">
    <div class="text-center max-w-xl mx-auto mb-14 reveal">
      <div class="badge badge-b mb-4">More from Insight Web</div>
      <h2 class="text-3xl lg:text-4xl text-navy leading-[1.2] mb-4" style="font-weight:800;">Need a website to go with it?</h2>
      <p class="text-muted text-lg">Our AI assistants work best when paired with a great-looking website. We build those too.</p>
    </div>
    <div class="grid md:grid-cols-3 gap-6">
      <div class="card p-8 reveal" style="transition-delay:0.05s">
        <div class="w-12 h-12 rounded-xl bg-blueMuted border border-blueBorder flex items-center justify-center mb-5"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="1.8"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg></div>
        <h3 class="font-bold text-navy text-xl mb-3">Web Design</h3>
        <p class="text-muted text-sm leading-relaxed mb-5">Clean, professional websites designed to convert visitors into customers — with your AI assistant built in from day one.</p>
        <a href="#contact" class="text-blue text-sm font-bold hover:underline flex items-center gap-1.5">Learn more <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
      </div>
      <div class="card p-8 reveal" style="transition-delay:0.1s">
        <div class="w-12 h-12 rounded-xl bg-blueMuted border border-blueBorder flex items-center justify-center mb-5"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="1.8"><circle cx="12" cy="12" r="10"/><path d="M8.56 2.75c4.37 6.03 6.02 9.42 8.03 17.72m2.54-15.38c-3.72 4.35-8.94 5.66-16.88 5.85m19.5 1.9c-3.5-.93-6.63-.82-8.94 0-2.58.92-5.01 2.86-7.44 6.32"/></svg></div>
        <h3 class="font-bold text-navy text-xl mb-3">Brand Design</h3>
        <p class="text-muted text-sm leading-relaxed mb-5">Logo, colors, and brand guidelines that make your business look polished and consistent across everything you put out.</p>
        <a href="#contact" class="text-blue text-sm font-bold hover:underline flex items-center gap-1.5">Learn more <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
      </div>
      <div class="card p-8 reveal" style="transition-delay:0.15s">
        <div class="w-12 h-12 rounded-xl bg-blueMuted border border-blueBorder flex items-center justify-center mb-5"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="1.8"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg></div>
        <h3 class="font-bold text-navy text-xl mb-3">AI Consulting</h3>
        <p class="text-muted text-sm leading-relaxed mb-5">Not sure how AI fits your business? We'll walk you through practical ideas in plain language — no jargon, no pressure.</p>
        <a href="#contact" class="text-blue text-sm font-bold hover:underline flex items-center gap-1.5">Learn more <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
      </div>
    </div>
  </div>
</section>


<!-- CTA BANNER -->
<section class="section-teal py-16 px-6 lg:px-12">
  <div class="max-w-4xl mx-auto text-center reveal">
    <div class="badge badge-w mb-5">Ready to get started?</div>
    <h2 class="text-white text-3xl lg:text-5xl leading-[1.15] mb-5" style="font-weight:800;">Let's put AI to work<br/>on your website.</h2>
    <p class="text-white/80 text-lg max-w-xl mx-auto mb-10">Book a free 20-minute call and we'll show you exactly how an AI assistant would work for your business — no commitment required.</p>
    <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
      <a href="#contact" class="btn-white px-9 py-4 text-base justify-center">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
        Book a Free Strategy Call
      </a>
      <a href="tel:+17754427070" class="text-white font-bold text-base flex items-center gap-2 hover:text-white/80 transition-colors">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81a19.79 19.79 0 01-3.07-8.63A2 2 0 012 .18h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.09-1.09a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
        Or call +1 (775) 442-7070
      </a>
    </div>
  </div>
</section>


<!-- CONTACT -->
<section id="contact" class="py-24 px-6 lg:px-12 bg-white">
  <div class="max-w-7xl mx-auto">
    <div class="grid lg:grid-cols-2 gap-16">
      <div class="reveal">
        <div class="badge badge-b mb-5">Get In Touch</div>
        <h2 class="text-3xl lg:text-4xl text-navy leading-[1.2] mb-5" style="font-weight:800;">Let's talk about<br/>your business.</h2>
        <p class="text-muted leading-relaxed mb-10 text-lg">Have questions about how it works, which plan makes sense, or just want to see a quick demo? Drop us a message and we'll get back to you within one business day.</p>
        <div class="space-y-5">
          <div class="flex items-center gap-4">
            <div class="w-11 h-11 rounded-xl bg-blueMuted border border-blueBorder flex items-center justify-center flex-shrink-0"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="1.8"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81a19.79 19.79 0 01-3.07-8.63A2 2 0 012 .18h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.09-1.09a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg></div>
            <div><div class="text-xs text-muted font-bold uppercase tracking-wide mb-0.5">Phone</div><a href="tel:+17754427070" class="font-bold text-navy hover:text-blue transition-colors">+1 (775) 442-7070</a></div>
          </div>
          <div class="flex items-center gap-4">
            <div class="w-11 h-11 rounded-xl bg-blueMuted border border-blueBorder flex items-center justify-center flex-shrink-0"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="1.8"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg></div>
            <div><div class="text-xs text-muted font-bold uppercase tracking-wide mb-0.5">Email</div><a href="/cdn-cgi/l/email-protection#59313c3535361930372a303e312d2e3c3b2d3c3a31773a3634" class="font-bold text-navy hover:text-blue transition-colors"><span class="__cf_email__" data-cfemail="c2aaa7aeaead82abacb1aba5aab6b5a7a0b6a7a1aaeca1adaf">[email&#160;protected]</span></a></div>
          </div>
          <div class="flex items-center gap-4">
            <div class="w-11 h-11 rounded-xl bg-blueMuted border border-blueBorder flex items-center justify-center flex-shrink-0"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="1.8"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></div>
            <div><div class="text-xs text-muted font-bold uppercase tracking-wide mb-0.5">Schedule</div><a href="#" target="_blank" rel="noopener" class="font-bold text-navy hover:text-blue transition-colors">Book a free 20-min strategy call →</a></div>
          </div>
        </div>
      </div>

      <div class="card p-8 lg:p-10 reveal" style="transition-delay:0.15s">
        <form id="contact-form" class="space-y-5" onsubmit="handleFormSubmit(event)">
          <div class="grid sm:grid-cols-2 gap-5">
            <div><label class="text-xs font-bold text-muted uppercase tracking-wide mb-2 block">First Name</label><input type="text" placeholder="John" class="form-input" required /></div>
            <div><label class="text-xs font-bold text-muted uppercase tracking-wide mb-2 block">Last Name</label><input type="text" placeholder="Smith" class="form-input" required /></div>
          </div>
          <div><label class="text-xs font-bold text-muted uppercase tracking-wide mb-2 block">Business Email</label><input type="email" placeholder="john@yourbusiness.com" class="form-input" required /></div>
          <div><label class="text-xs font-bold text-muted uppercase tracking-wide mb-2 block">Phone Number</label><input type="tel" placeholder="+1 (775) 000-0000" class="form-input" /></div>
          <div>
            <label class="text-xs font-bold text-muted uppercase tracking-wide mb-2 block">I'm interested in…</label>
            <select class="form-input" required>
              <option value="" disabled selected>Select an option</option>
              <option>Starter Plan — AI Chat Assistant ($297/mo)</option>
              <option>Growth Plan — AI + SMS Automation ($597/mo)</option>
              <option>Pro Plan — Full Automation System ($1,197/mo)</option>
              <option>Web Design</option>
              <option>Brand Design</option>
              <option>AI Consulting</option>
              <option>Not sure — help me decide</option>
            </select>
          </div>
          <div><label class="text-xs font-bold text-muted uppercase tracking-wide mb-2 block">Tell us about your business</label><textarea rows="4" placeholder="What kind of business do you run? What questions do your customers ask most?" class="form-input resize-none"></textarea></div>
          <button type="submit" class="btn-primary w-full py-4 rounded-xl text-sm justify-center font-bold">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
            Send Message
          </button>
        </form>
        <div id="form-success" class="hidden text-center py-8">
          <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4" style="background:#ECFDF5;border:1px solid rgba(16,185,129,0.3);">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
          </div>
          <h3 class="font-bold text-navy text-xl mb-2">Message Sent!</h3>
          <p class="text-muted text-sm">We'll be in touch within one business day. You can also <a href="tel:+17754427070" class="text-blue font-semibold hover:underline">call us</a> for a same-day demo.</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- FOOTER -->
<footer class="border-t border-bdr py-12 px-6 lg:px-12 bg-white">
  <div class="max-w-7xl mx-auto">
    <div class="grid md:grid-cols-4 gap-10 mb-10">
      <div class="md:col-span-2">
        <a href="#" class="flex items-center gap-3 mb-4 w-fit">
          <div class="w-9 h-9 rounded-xl bg-blue flex items-center justify-center"><svg width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 1L16 5V13L9 17L2 13V5L9 1Z" stroke="white" stroke-width="1.5" fill="rgba(255,255,255,0.15)"/><circle cx="9" cy="9" r="2.5" fill="white"/></svg></div>
          <span class="font-extrabold text-navy text-lg">Insight<span class="text-blue">Web</span> Technologies</span>
        </a>
        <p class="text-muted text-sm leading-relaxed max-w-xs mb-5">AI chat assistants and automation tools that help local businesses capture more leads and spend less time answering the same questions over and over.</p>
        <div class="flex gap-3">
          <a href="#" target="_blank" rel="noopener" class="w-9 h-9 rounded-lg border border-bdr flex items-center justify-center text-muted hover:text-blue hover:border-blueBorder transition-all"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg></a>
          <a href="#" class="w-9 h-9 rounded-lg border border-bdr flex items-center justify-center text-muted hover:text-blue hover:border-blueBorder transition-all"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg></a>
          <a href="#" class="w-9 h-9 rounded-lg border border-bdr flex items-center justify-center text-muted hover:text-blue hover:border-blueBorder transition-all"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg></a>
        </div>
      </div>
      <div>
        <div class="text-xs font-bold text-blue tracking-widest uppercase mb-4">Plans</div>
        <ul class="space-y-2 text-sm text-muted">
          <li><a href="#packages" class="hover:text-navy transition-colors">Starter — $297/mo</a></li>
          <li><a href="#packages" class="hover:text-navy transition-colors">Growth — $597/mo</a></li>
          <li><a href="#packages" class="hover:text-navy transition-colors">Pro — $1,197/mo</a></li>
        </ul>
      </div>
      <div>
        <div class="text-xs font-bold text-blue tracking-widest uppercase mb-4">Company</div>
        <ul class="space-y-2 text-sm text-muted">
          <li><a href="#how-it-works" class="hover:text-navy transition-colors">How It Works</a></li>
          <li><a href="#services" class="hover:text-navy transition-colors">Web &amp; Brand Design</a></li>
          <li><a href="#contact" class="hover:text-navy transition-colors">Contact Us</a></li>
          <li><a href="#" target="_blank" rel="noopener" class="hover:text-navy transition-colors">Book a Free Call</a></li>
        </ul>
      </div>
    </div>
    <div class="hr mb-6"></div>
    <div class="flex flex-col sm:flex-row justify-between items-center gap-3">
      <p class="text-xs text-muted">© 2025 Insight Web Technologies. All rights reserved.</p>
      <div class="flex gap-5 text-xs text-muted">
        <a href="#" class="hover:text-blue transition-colors">Privacy Policy</a>
        <a href="/terms" class="hover:text-blue transition-colors">Terms of Service</a>
      </div>
    </div>
  </div>
</footer>

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script>
  window.addEventListener('scroll', () => {
    const st = document.documentElement.scrollTop;
    const sh = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    document.getElementById('scroll-progress').style.width = (st / sh * 100) + '%';
  });

  const navbar = document.getElementById('navbar');
  window.addEventListener('scroll', () => navbar.classList.toggle('scrolled', window.scrollY > 30));

  const hamburger = document.getElementById('hamburger');
  const mobileMenu = document.getElementById('mobile-menu');
  hamburger.addEventListener('click', () => {
    mobileMenu.classList.toggle('open');
    document.getElementById('icon-open').classList.toggle('hidden');
    document.getElementById('icon-close').classList.toggle('hidden');
  });
  mobileMenu.querySelectorAll('a').forEach(a => a.addEventListener('click', () => {
    mobileMenu.classList.remove('open');
    document.getElementById('icon-open').classList.remove('hidden');
    document.getElementById('icon-close').classList.add('hidden');
  }));

  const observer = new IntersectionObserver(entries => {
    entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); });
  }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });
  document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

  function handleFormSubmit(e) {
    e.preventDefault();
    const form = document.getElementById('contact-form');
    const success = document.getElementById('form-success');
    form.style.opacity = '0';
    form.style.transition = 'opacity 0.3s ease';
    setTimeout(() => {
      form.style.display = 'none';
      success.classList.remove('hidden');
      success.style.opacity = '0';
      success.style.transition = 'opacity 0.4s ease';
      requestAnimationFrame(() => success.style.opacity = '1');
    }, 300);
  }
</script>
<script 
  src="https://widgets.leadconnectorhq.com/loader.js"  
  data-resources-url="https://widgets.leadconnectorhq.com/chat-widget/loader.js" 
 data-widget-id="69b30fdb4ed9d7630a7f34e8"   > 
 </script>
</body>
</html>