<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telegram PTC Bot – Production Ready Source Code</title>
    <meta name="description" content="Launch your own PTC earning platform with a production-ready Telegram bot. Built-in wallet, commission system, multi-role architecture. Limited to 5 copies.">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@300;400;500;600;700&family=Outfit:wght@300;400;500;600;700;800;900&family=DM+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="shortcut icon" href="favicon/favicon.ico">
    <link rel="manifest" href="favicon/site.webmanifest">
    
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="noise-overlay"></div>

<div class="grid-bg"></div>

<nav class="nav" id="nav">
    <div class="nav-inner">
        <a href="#" class="nav-logo">
            <span class="logo-bracket">[</span>PTC<span class="logo-dot">.</span>Bot<span class="logo-bracket">]</span>
        </a>
        <div class="nav-links">
            <a href="#features">Features</a>
            <a href="#revenue">Revenue</a>
            <a href="#stack">Stack</a>
            <a href="#pricing">Pricing</a>
            <a href="#faq">FAQ</a>
        </div>
        <a href="#pricing" class="nav-cta">Get Source Code</a>
    </div>
</nav>

<section class="hero" id="hero">
    <div class="hero-grid-lines"></div>
    <div class="hero-glow"></div>
    
    <div class="container hero-content">
        <div class="hero-badge anim-fade-up">
            <span class="badge-pulse"></span>
            <span class="badge-text">Limited Release — Only <strong>5 Copies</strong> Available</span>
        </div>
        
        <h1 class="hero-title anim-fade-up anim-delay-1">
            Launch Your Own<br>
            <span class="hero-title-accent">PTC Platform</span><br>
            <span class="hero-title-sub">In Days, Not Months.</span>
        </h1>
        
        <p class="hero-desc anim-fade-up anim-delay-2">
            Production-ready Telegram PTC bot with built-in wallet system, 
            commission engine, and multi-role architecture. Deploy, customize, earn.
        </p>
        
        <div class="hero-actions anim-fade-up anim-delay-3">
            <a href="#pricing" class="btn btn-primary btn-glow">
                <span>Get Source Code Now</span>
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M4 10h12m0 0l-4-4m4 4l-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </a>
            <a href="#features" class="btn btn-ghost">
                <span>Explore Features</span>
            </a>
        </div>
        
        <div class="hero-stats anim-fade-up anim-delay-4">
            <div class="hero-stat">
                <span class="hero-stat-value" data-count="3">3</span>
                <span class="hero-stat-label">Roles System</span>
            </div>
            <div class="hero-stat-divider"></div>
            <div class="hero-stat">
                <span class="hero-stat-value">$45</span>
                <span class="hero-stat-label">Starting Price</span>
            </div>
            <div class="hero-stat-divider"></div>
            <div class="hero-stat">
                <span class="hero-stat-value">PHP</span>
                <span class="hero-stat-label">Backend Stack</span>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="hero-terminal anim-fade-up anim-delay-5">
            <div class="terminal-chrome">
                <div class="terminal-dots">
                    <span></span><span></span><span></span>
                </div>
                <span class="terminal-title">bot-deployment.sh</span>
            </div>
            <div class="terminal-body">
                <div class="terminal-line" data-delay="0">
                    <span class="t-prompt">$</span>
                    <span class="t-cmd typing" data-text="git clone your-ptc-bot.git && cd ptc-bot"></span>
                </div>
                <div class="terminal-line" data-delay="2000">
                    <span class="t-prompt">$</span>
                    <span class="t-cmd typing" data-text="php setup.php --configure"></span>
                </div>
                <div class="terminal-line" data-delay="3500">
                    <span class="t-output">&#10003; Database configured</span>
                </div>
                <div class="terminal-line" data-delay="4200">
                    <span class="t-output">&#10003; Webhook registered</span>
                </div>
                <div class="terminal-line" data-delay="4900">
                    <span class="t-output">&#10003; Admin panel ready</span>
                </div>
                <div class="terminal-line" data-delay="5600">
                    <span class="t-output t-success">&#9889; Bot is live. Start earning.</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-problem" id="problem">
    <div class="container">
        <div class="section-label anim-slide-in">The Problem</div>
        <h2 class="section-title anim-slide-in">
            Building from scratch is a<br>
            <span class="text-danger">costly mistake.</span>
        </h2>
        
        <div class="problem-grid">
            <div class="problem-card anim-slide-in">
                <div class="problem-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                </div>
                <h3>Months of Development</h3>
                <p>Building a PTC system from zero means 3-6 months of architecture, testing, and debugging. Time you could spend growing your business.</p>
            </div>
            <div class="problem-card anim-slide-in" style="--delay: 0.1s">
                <div class="problem-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
                </div>
                <h3>Complex Wallet Logic</h3>
                <p>Deposit tracking, withdrawal processing, balance management, commission calculations — one bug and your users lose trust.</p>
            </div>
            <div class="problem-card anim-slide-in" style="--delay: 0.2s">
                <div class="problem-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                </div>
                <h3>Role Management Hell</h3>
                <p>Admin, Client, Worker — each with different permissions, dashboards, and flows. The architectural complexity alone kills most projects.</p>
            </div>
            <div class="problem-card anim-slide-in" style="--delay: 0.3s">
                <div class="problem-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                </div>
                <h3>Monetization Guesswork</h3>
                <p>Commission models, fee structures, payment flows — figuring out the right revenue architecture takes expensive trial and error.</p>
            </div>
        </div>
    </div>
</section>

<section class="section section-solution" id="solution">
    <div class="container">
        <div class="section-label anim-slide-in">The Solution</div>
        <h2 class="section-title anim-slide-in">
            Skip the grind.<br>
            <span class="text-accent">Deploy a proven system.</span>
        </h2>
        
        <div class="solution-steps">
            <div class="solution-step anim-slide-in">
                <div class="step-number">01</div>
                <div class="step-content">
                    <h3>Get the Source Code</h3>
                    <p>Complete production-ready codebase. No boilerplate, no half-built modules. Every feature is tested and working.</p>
                </div>
            </div>
            <div class="solution-connector"></div>
            <div class="solution-step anim-slide-in" style="--delay: 0.15s">
                <div class="step-number">02</div>
                <div class="step-content">
                    <h3>Configure & Deploy</h3>
                    <p>Set your Telegram bot token, connect your database, register the webhook. You're live in under an hour.</p>
                </div>
            </div>
            <div class="solution-connector"></div>
            <div class="solution-step anim-slide-in" style="--delay: 0.3s">
                <div class="step-number">03</div>
                <div class="step-content">
                    <h3>Earn on Autopilot</h3>
                    <p>Clients deposit, create campaigns. Workers complete tasks, get paid. You earn commission on every transaction. Recurring revenue, built in.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-features" id="features">
    <div class="container">
        <div class="section-label anim-slide-in">Features</div>
        <h2 class="section-title anim-slide-in">
            Everything you need.<br>
            <span class="text-accent">Nothing you don't.</span>
        </h2>
        
        <div class="features-grid">
            <div class="feature-card anim-slide-in">
                <div class="feature-icon-wrap">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                </div>
                <h3>Telegram Integration</h3>
                <p>Full Telegram Bot API integration via webhook. Real-time command handling, inline keyboards, and notification system.</p>
            </div>
            
            <div class="feature-card anim-slide-in" style="--delay: 0.05s">
                <div class="feature-icon-wrap">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
                </div>
                <h3>Campaign Management</h3>
                <p>Create, manage, and monitor advertising campaigns. Set budgets, target audiences, and track completion rates.</p>
            </div>
            
            <div class="feature-card anim-slide-in" style="--delay: 0.1s">
                <div class="feature-icon-wrap">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="M2 10h20"/><path d="M6 16h4"/></svg>
                </div>
                <h3>Wallet System</h3>
                <p>Full-featured digital wallet with deposits, withdrawals, balance tracking, and transaction history for all user roles.</p>
            </div>
            
            <div class="feature-card anim-slide-in" style="--delay: 0.15s">
                <div class="feature-icon-wrap">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg>
                </div>
                <h3>Proof Verification</h3>
                <p>Workers submit proof of task completion. Automated and manual verification flows ensure campaign quality.</p>
            </div>
            
            <div class="feature-card anim-slide-in" style="--delay: 0.2s">
                <div class="feature-icon-wrap">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>
                </div>
                <h3>Admin Panel</h3>
                <p>Full-featured web admin panel. Manage users, campaigns, withdrawals, settings, and monitor platform health.</p>
            </div>
            
            <div class="feature-card anim-slide-in" style="--delay: 0.25s">
                <div class="feature-icon-wrap">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                </div>
                <h3>Multi-Role System</h3>
                <p>Three distinct roles — Admin, Client, Worker — each with tailored permissions, interfaces, and capabilities.</p>
            </div>
            
            <div class="feature-card anim-slide-in" style="--delay: 0.3s">
                <div class="feature-icon-wrap">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
                </div>
                <h3>Analytics & Logs</h3>
                <p>Track everything. User activity, campaign performance, financial transactions, system events — all logged and queryable.</p>
            </div>
            
            <div class="feature-card anim-slide-in" style="--delay: 0.35s">
                <div class="feature-icon-wrap">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06A1.65 1.65 0 0 0 4.68 15a1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06A1.65 1.65 0 0 0 9 4.68a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06A1.65 1.65 0 0 0 19.4 9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"/></svg>
                </div>
                <h3>Account Management</h3>
                <p>User registration, profile management, KYC options, account status controls, and bulk user operations.</p>
            </div>
        </div>
    </div>
</section>

<section class="section section-revenue" id="revenue">
    <div class="container">
        <div class="section-label anim-slide-in">Revenue Model</div>
        <h2 class="section-title anim-slide-in">
            How you make money.<br>
            <span class="text-amber">Every single day.</span>
        </h2>
        
        <div class="revenue-flow">
            <div class="revenue-step anim-slide-in">
                <div class="revenue-step-num">1</div>
                <div class="revenue-step-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                </div>
                <h3>Client Deposits</h3>
                <p>Advertisers fund their wallet to create PTC campaigns</p>
            </div>
            
            <div class="revenue-arrow anim-slide-in">
                <svg width="40" height="20" viewBox="0 0 40 20"><path d="M0 10h32m0 0l-6-6m6 6l-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/></svg>
            </div>
            
            <div class="revenue-step anim-slide-in" style="--delay: 0.1s">
                <div class="revenue-step-num">2</div>
                <div class="revenue-step-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
                </div>
                <h3>Campaign Runs</h3>
                <p>Workers view ads, complete tasks, submit proof</p>
            </div>
            
            <div class="revenue-arrow anim-slide-in">
                <svg width="40" height="20" viewBox="0 0 40 20"><path d="M0 10h32m0 0l-6-6m6 6l-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/></svg>
            </div>
            
            <div class="revenue-step anim-slide-in" style="--delay: 0.2s">
                <div class="revenue-step-num">3</div>
                <div class="revenue-step-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>
                </div>
                <h3>You Earn Commission</h3>
                <p>Automatic cut from every campaign completion & withdrawal</p>
            </div>
        </div>
        
        <div class="revenue-highlight anim-slide-in">
            <div class="revenue-highlight-inner">
                <div class="revenue-highlight-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                </div>
                <p><strong>Recurring revenue engine</strong> — you earn on every transaction that flows through your platform. More users = more campaigns = more commission. The system scales with your growth.</p>
            </div>
        </div>
    </div>
</section>

<section class="section section-demo" id="demo">
    <div class="container">
        <div class="section-label anim-slide-in">See It Working</div>
        <h2 class="section-title anim-slide-in">
            Don't take our word for it.<br>
            <span class="text-accent">Try the live demo.</span>
        </h2>
        
        <div class="demo-grid">
            <div class="demo-card demo-card-main anim-slide-in">
                <div class="demo-card-header">
                    <span class="demo-card-badge">Live Bot</span>
                    <h3>Try the Demo Bot</h3>
                </div>
                <p>Interact with a fully working instance. Test the worker flow, view campaigns, check wallet features.</p>
                <a href="#" class="btn btn-primary" target="_blank" rel="noopener">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                    <span>Open Demo Bot</span>
                </a>
            </div>
            
            <div class="demo-card anim-slide-in" style="--delay: 0.1s">
                <div class="demo-card-header">
                    <span class="demo-card-badge">Admin Panel</span>
                    <h3>Dashboard Preview</h3>
                </div>
                <div class="demo-screenshot">
                    <div class="demo-screenshot-placeholder">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
                        <span>Admin Panel Screenshot</span>
                    </div>
                </div>
            </div>
            
            <div class="demo-card anim-slide-in" style="--delay: 0.2s">
                <div class="demo-card-header">
                    <span class="demo-card-badge">Video</span>
                    <h3>Full Walkthrough</h3>
                </div>
                <div class="demo-screenshot">
                    <div class="demo-screenshot-placeholder demo-video">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"><polygon points="5 3 19 12 5 21 5 3"/></svg>
                        <span>Video Demo</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-stack" id="stack">
    <div class="container">
        <div class="section-label anim-slide-in">Tech Stack</div>
        <h2 class="section-title anim-slide-in">
            Built with technology<br>
            <span class="text-accent">you already know.</span>
        </h2>
        
        <div class="stack-grid">
            <div class="stack-item anim-slide-in">
                <div class="stack-item-icon">
                    <span class="stack-logo">PHP</span>
                </div>
                <h4>PHP</h4>
                <p>Core backend logic</p>
            </div>
            <div class="stack-item anim-slide-in" style="--delay: 0.05s">
                <div class="stack-item-icon">
                    <span class="stack-logo">SQL</span>
                </div>
                <h4>MySQL / MariaDB</h4>
                <p>Database engine</p>
            </div>
            <div class="stack-item anim-slide-in" style="--delay: 0.1s">
                <div class="stack-item-icon">
                    <span class="stack-logo">PDO</span>
                </div>
                <h4>PDO</h4>
                <p>Secure DB access</p>
            </div>
            <div class="stack-item anim-slide-in" style="--delay: 0.15s">
                <div class="stack-item-icon">
                    <span class="stack-logo">API</span>
                </div>
                <h4>Telegram Bot API</h4>
                <p>Bot framework</p>
            </div>
            <div class="stack-item anim-slide-in" style="--delay: 0.2s">
                <div class="stack-item-icon">
                    <span class="stack-logo">WH</span>
                </div>
                <h4>Webhook</h4>
                <p>Real-time events</p>
            </div>
            <div class="stack-item anim-slide-in" style="--delay: 0.25s">
                <div class="stack-item-icon">
                    <span class="stack-logo">UI</span>
                </div>
                <h4>HTML + CSS + JS</h4>
                <p>Admin panel frontend</p>
            </div>
        </div>
        
        <div class="stack-note anim-slide-in">
            <p>No exotic frameworks. No complex build tooling. Standard PHP stack that runs on any <strong>$5/month</strong> shared hosting or VPS.</p>
        </div>
    </div>
</section>

<section class="section section-license" id="license">
    <div class="container">
        <div class="section-label anim-slide-in">License</div>
        <h2 class="section-title anim-slide-in">
            Clear terms.<br>
            <span class="text-accent">No surprises.</span>
        </h2>
        
        <div class="license-grid">
            <div class="license-col license-allowed anim-slide-in">
                <h3>
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                    What you can do
                </h3>
                <ul>
                    <li>Use for unlimited projects</li>
                    <li>Use for client projects</li>
                    <li>Rebrand & claim ownership</li>
                    <li>Modify the code freely</li>
                    <li>Deploy on any server</li>
                </ul>
            </div>
            <div class="license-col license-denied anim-slide-in" style="--delay: 0.1s">
                <h3>
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                    Restrictions
                </h3>
                <ul>
                    <li>Cannot resell the source code</li>
                    <li>No future updates included</li>
                    <li>No refunds after delivery</li>
                </ul>
            </div>
        </div>
        
        <div class="license-note anim-slide-in">
            <p>One-time payment. Full ownership of the code. Build as many PTC platforms as you want.</p>
        </div>
    </div>
</section>

<section class="section section-pricing" id="pricing">
    <div class="pricing-glow"></div>
    <div class="container">
        <div class="section-label anim-slide-in">Pricing</div>
        <h2 class="section-title anim-slide-in">
            Secure your copy<br>
            <span class="text-amber">before the price goes up.</span>
        </h2>
        
        <div class="pricing-card anim-slide-in">
            <div class="pricing-card-inner">
                <div class="pricing-badge">
                    <span class="pricing-badge-pulse"></span>
                    <span>Limited — 5 Copies Only</span>
                </div>
                
                <div class="pricing-header">
                    <div class="pricing-amount">
                        <span class="pricing-currency">$</span>
                        <span class="pricing-value">45</span>
                    </div>
                    <span class="pricing-period">one-time payment</span>
                </div>
                
                <div class="pricing-escalation">
                    <div class="pricing-escalation-bar">
                        <div class="pricing-escalation-fill" style="width: 20%"></div>
                    </div>
                    <div class="pricing-escalation-info">
                        <div class="pricing-escalation-item">
                            <span class="pricing-escalation-label">Current Price</span>
                            <span class="pricing-escalation-val text-accent">$45</span>
                        </div>
                        <div class="pricing-escalation-item">
                            <span class="pricing-escalation-label">Next Price</span>
                            <span class="pricing-escalation-val text-amber">$50</span>
                        </div>
                        <div class="pricing-escalation-item">
                            <span class="pricing-escalation-label">Copies Left</span>
                            <span class="pricing-escalation-val copies-left">5</span>
                        </div>
                    </div>
                </div>
                
                <div class="pricing-includes">
                    <h4>Everything included:</h4>
                    <ul>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                            Complete source code
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                            Telegram Bot + Admin Panel
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                            Wallet & Commission System
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                            Multi-role architecture
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                            Campaign management
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                            Analytics & logging
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                            Unlimited project usage
                        </li>
                    </ul>
                </div>
                
                <a href="https://wa.me/YOUR_NUMBER?text=I%20want%20to%20purchase%20the%20PTC%20Bot%20source%20code" class="btn btn-primary btn-glow btn-large" target="_blank" rel="noopener">
                    <span>Get Source Code Now</span>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M4 10h12m0 0l-4-4m4 4l-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </a>
                
                <p class="pricing-notice">Manual verification. Source code delivered after confirmed payment via WhatsApp.</p>
            </div>
        </div>
        
        <div class="pricing-table anim-slide-in">
            <h4>Price Escalation Schedule</h4>
            <div class="pricing-table-grid">
                <div class="pricing-table-row pricing-table-active">
                    <span class="pricing-table-buyer">Copy #1</span>
                    <span class="pricing-table-price">$45</span>
                    <span class="pricing-table-status">Available Now</span>
                </div>
                <div class="pricing-table-row">
                    <span class="pricing-table-buyer">Copy #2</span>
                    <span class="pricing-table-price">$50</span>
                    <span class="pricing-table-status">—</span>
                </div>
                <div class="pricing-table-row">
                    <span class="pricing-table-buyer">Copy #3</span>
                    <span class="pricing-table-price">$55</span>
                    <span class="pricing-table-status">—</span>
                </div>
                <div class="pricing-table-row">
                    <span class="pricing-table-buyer">Copy #4</span>
                    <span class="pricing-table-price">$60</span>
                    <span class="pricing-table-status">—</span>
                </div>
                <div class="pricing-table-row">
                    <span class="pricing-table-buyer">Copy #5</span>
                    <span class="pricing-table-price">$65</span>
                    <span class="pricing-table-status">Final Copy</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-faq" id="faq">
    <div class="container">
        <div class="section-label anim-slide-in">FAQ</div>
        <h2 class="section-title anim-slide-in">
            Common questions.<br>
            <span class="text-accent">Straight answers.</span>
        </h2>
        
        <div class="faq-list">
            <div class="faq-item anim-slide-in">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Can I resell the source code?</span>
                    <svg class="faq-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                </button>
                <div class="faq-answer">
                    <p>No. The license grants you unlimited usage for your own projects and client work, but reselling the source code itself is not permitted.</p>
                </div>
            </div>
            
            <div class="faq-item anim-slide-in" style="--delay: 0.05s">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Can I modify the code?</span>
                    <svg class="faq-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                </button>
                <div class="faq-answer">
                    <p>Absolutely. You get complete source code with full modification rights. Rebrand it, customize it, extend it — it's yours to shape however you want.</p>
                </div>
            </div>
            
            <div class="faq-item anim-slide-in" style="--delay: 0.1s">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Is support included?</span>
                    <svg class="faq-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                </button>
                <div class="faq-answer">
                    <p>Basic setup guidance is included. The code is well-documented and structured for PHP developers. This is a source code purchase, not a SaaS subscription — you're expected to have PHP knowledge.</p>
                </div>
            </div>
            
            <div class="faq-item anim-slide-in" style="--delay: 0.15s">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>What hosting do I need?</span>
                    <svg class="faq-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                </button>
                <div class="faq-answer">
                    <p>Any PHP hosting with MySQL/MariaDB and SSL support. Works on shared hosting ($5/month), VPS, or dedicated servers. No special requirements — if it runs PHP, it runs this bot.</p>
                </div>
            </div>
            
            <div class="faq-item anim-slide-in" style="--delay: 0.2s">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Is this a scam script?</span>
                    <svg class="faq-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                </button>
                <div class="faq-answer">
                    <p>No. This is a legitimate PTC (Paid-To-Click) platform — a well-established advertising model. Clients pay for real ad views, workers earn for completing tasks. The business model is transparent and ethical.</p>
                </div>
            </div>
            
            <div class="faq-item anim-slide-in" style="--delay: 0.25s">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>How does delivery work?</span>
                    <svg class="faq-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                </button>
                <div class="faq-answer">
                    <p>After confirmed payment via WhatsApp, the complete source code package is delivered to you directly. Manual verification ensures security for both parties. Typical delivery is within a few hours.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="container">
        <div class="footer-inner">
            <div class="footer-logo">
                <span class="logo-bracket">[</span>PTC<span class="logo-dot">.</span>Bot<span class="logo-bracket">]</span>
            </div>
            <p class="footer-text">Production-ready Telegram PTC Bot source code. Limited release.</p>
            <div class="footer-links">
                <a href="#features">Features</a>
                <a href="#revenue">Revenue</a>
                <a href="#pricing">Pricing</a>
                <a href="#faq">FAQ</a>
            </div>
        </div>
    </div>
</footer>

<script src="script.js"></script>
</body>
</html>