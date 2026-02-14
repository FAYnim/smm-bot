<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Managed Partnership Agreement - Telegram PTC Bot Platform</title>
    <meta name="description" content="Terms of Service for Managed Partnership Agreement - Telegram PTC Bot Platform by FayDev">
    <meta name="robots" content="noindex, nofollow">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@300;400;500;600;700&family=Outfit:wght@300;400;500;600;700;800;900&family=DM+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="shortcut icon" href="favicon/favicon.ico">
    
    <link rel="stylesheet" href="style.css">
    <style>
        /* ToS Page Specific Styles */
        .tos-page {
            min-height: 100vh;
            padding-top: 100px;
            padding-bottom: 80px;
        }
        
        .tos-header {
            text-align: center;
            margin-bottom: 60px;
        }
        
        .tos-header-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 16px;
            background: var(--accent-cyan-dim);
            border: 1px solid var(--accent-cyan);
            border-radius: 100px;
            font-size: 0.85rem;
            color: var(--accent-cyan);
            margin-bottom: 24px;
        }
        
        .tos-header h1 {
            font-family: var(--font-display);
            font-size: clamp(2rem, 5vw, 3rem);
            font-weight: 800;
            color: var(--text-primary);
            margin-bottom: 12px;
            letter-spacing: -0.02em;
        }
        
        .tos-header h1 span {
            color: var(--accent-cyan);
        }
        
        .tos-updated {
            font-size: 0.9rem;
            color: var(--text-secondary);
        }
        
        .tos-updated strong {
            color: var(--text-primary);
        }
        
        .tos-content {
            max-width: 900px;
            margin: 0 auto;
        }
        
        .tos-section {
            margin-bottom: 48px;
            padding: 32px;
            background: var(--bg-surface);
            border: 1px solid var(--border-subtle);
            border-radius: 16px;
            transition: border-color 0.3s ease;
        }
        
        .tos-section:hover {
            border-color: var(--border-light);
        }
        
        .tos-section-number {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 32px;
            height: 32px;
            background: var(--accent-cyan-dim);
            color: var(--accent-cyan);
            font-family: var(--font-mono);
            font-size: 0.85rem;
            font-weight: 600;
            border-radius: 8px;
            margin-right: 12px;
        }
        
        .tos-section h2 {
            display: flex;
            align-items: center;
            font-family: var(--font-display);
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 20px;
        }
        
        .tos-section p {
            color: var(--text-secondary);
            line-height: 1.8;
            margin-bottom: 16px;
        }
        
        .tos-section p:last-child {
            margin-bottom: 0;
        }
        
        .tos-section ul {
            list-style: none;
            padding: 0;
            margin: 16px 0;
        }
        
        .tos-section ul li {
            position: relative;
            padding-left: 28px;
            margin-bottom: 12px;
            color: var(--text-secondary);
            line-height: 1.6;
        }
        
        .tos-section ul li:last-child {
            margin-bottom: 0;
        }
        
        .tos-section ul li::before {
            content: '';
            position: absolute;
            left: 0;
            top: 8px;
            width: 6px;
            height: 6px;
            background: var(--accent-cyan);
            border-radius: 50%;
        }
        
        .tos-section ul li i {
            position: absolute;
            left: 0;
            top: 4px;
            color: var(--accent-success);
            font-size: 0.9rem;
        }
        
        .tos-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 0.95rem;
        }
        
        .tos-table th,
        .tos-table td {
            padding: 14px 16px;
            text-align: left;
            border-bottom: 1px solid var(--border-subtle);
        }
        
        .tos-table th {
            background: var(--bg-elevated);
            color: var(--text-primary);
            font-weight: 600;
            font-family: var(--font-display);
        }
        
        .tos-table th:first-child {
            border-radius: 8px 0 0 0;
        }
        
        .tos-table th:last-child {
            border-radius: 0 8px 0 0;
        }
        
        .tos-table td {
            color: var(--text-secondary);
        }
        
        .tos-table tr:last-child td:first-child {
            border-radius: 0 0 0 8px;
        }
        
        .tos-table tr:last-child td:last-child {
            border-radius: 0 0 8px 0;
        }
        
        .tos-table tr:hover td {
            background: var(--bg-elevated);
        }
        
        .tos-table .highlight {
            color: var(--accent-cyan);
            font-weight: 600;
        }
        
        .tos-table .highlight-amber {
            color: var(--accent-amber);
            font-weight: 600;
        }
        
        .tos-note {
            background: var(--accent-amber-dim);
            border-left: 3px solid var(--accent-amber);
            padding: 16px 20px;
            margin: 20px 0;
            border-radius: 0 8px 8px 0;
            font-size: 0.9rem;
            color: var(--text-secondary);
        }
        
        .tos-note strong {
            color: var(--accent-amber);
        }
        
        .tos-formula {
            background: var(--bg-elevated);
            padding: 16px 20px;
            border-radius: 8px;
            font-family: var(--font-mono);
            font-size: 0.9rem;
            color: var(--accent-cyan);
            margin: 12px 0;
            display: inline-block;
        }
        
        .tos-contact {
            background: linear-gradient(135deg, var(--accent-cyan-dim), var(--accent-amber-dim));
            border: 1px solid var(--border-light);
            border-radius: 16px;
            padding: 32px;
            text-align: center;
            margin-top: 48px;
        }
        
        .tos-contact h3 {
            font-family: var(--font-display);
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 16px;
        }
        
        .tos-contact p {
            color: var(--text-secondary);
            margin-bottom: 8px;
        }
        
        .tos-contact a {
            color: var(--accent-cyan);
            text-decoration: none;
            font-weight: 500;
        }
        
        .tos-contact a:hover {
            text-decoration: underline;
        }
        
        .tos-back {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 12px 24px;
            background: var(--bg-surface);
            border: 1px solid var(--border-light);
            border-radius: 100px;
            color: var(--text-primary);
            font-weight: 500;
            margin-bottom: 32px;
            transition: all 0.3s ease;
        }
        
        .tos-back:hover {
            background: var(--bg-elevated);
            border-color: var(--accent-cyan);
            color: var(--accent-cyan);
        }
        
        .tos-back i {
            font-size: 0.9rem;
        }
        
        /* Responsive Tables */
        @media (max-width: 768px) {
            .tos-table {
                display: block;
                overflow-x: auto;
                white-space: nowrap;
            }
            
            .tos-section {
                padding: 24px 20px;
            }
            
            .tos-section h2 {
                font-size: 1.15rem;
            }
        }
        
        /* Print Styles */
        @media print {
            body {
                background: white;
                color: black;
            }
            
            .nav, .noise-overlay, .grid-bg, .footer, .tos-back {
                display: none !important;
            }
            
            .tos-page {
                padding-top: 20px;
                padding-bottom: 20px;
            }
            
            .tos-section {
                break-inside: avoid;
                border: 1px solid #ccc;
                background: white;
            }
            
            .tos-table th,
            .tos-table td {
                border: 1px solid #ccc;
            }
        }
    </style>
</head>
<body>

<div class="noise-overlay"></div>
<div class="grid-bg"></div>

<nav class="nav" id="nav">
    <div class="nav-inner">
        <a href="index.php" class="nav-logo">
            <img src="favicon/favicon-32x32.png" alt="Telegram PTC Bot Logo" class="nav-logo-img">
            <span class="logo-bracket">[</span>PTC<span class="logo-dot">.</span>Bot<span class="logo-bracket">]</span>
        </a>
        <div class="nav-links">
            <a href="index.php#features">Features</a>
            <a href="index.php#pricing">Pricing</a>
            <a href="index.php#faq">FAQ</a>
        </div>
        <a href="index.php#pricing" class="nav-cta">Back to Main</a>
    </div>
</nav>

<main class="tos-page">
    <div class="container">
        <a href="index.php#pricing" class="tos-back">
            <i class="fa-solid fa-arrow-left"></i>
            <span>Back to Partnership</span>
        </a>
        
        <header class="tos-header">
            <div class="tos-header-badge">
                <i class="fa-solid fa-file-contract"></i>
                <span>Legal Document</span>
            </div>
            <h1>MANAGED <span>PARTNERSHIP</span> AGREEMENT</h1>
            <p class="tos-updated">Telegram PTC Bot Platform &mdash; <strong>Terakhir diperbarui:</strong> 14 Februari 2026</p>
        </header>
        
        <div class="tos-content">
            <!-- Section 1: DEFINISI -->
            <section class="tos-section">
                <h2>
                    <span class="tos-section-number">1</span>
                    DEFINISI
                </h2>
                <ul>
                    <li><strong>"Platform"</strong>: Sistem Telegram PTC Bot yang dikelola oleh Developer</li>
                    <li><strong>"Developer"</strong>: FayDev, pengelola teknis platform</li>
                    <li><strong>"Investor"</strong>: Pihak yang menyediakan modal dan menerima revenue share</li>
                    <li><strong>"Net Revenue"</strong>: Total pendapatan gross dikurangi biaya operasional yang disetujui</li>
                </ul>
            </section>
            
            <!-- Section 2: SCOPE OF WORK -->
            <section class="tos-section">
                <h2>
                    <span class="tos-section-number">2</span>
                    SCOPE OF WORK (DEVELOPER)
                </h2>
                <p>Developer bertanggung jawab penuh atas:</p>
                <ul>
                    <li><i class="fa-solid fa-check"></i> Server hosting dan domain</li>
                    <li><i class="fa-solid fa-check"></i> Maintenance dan monitoring 24/7</li>
                    <li><i class="fa-solid fa-check"></i> Update fitur dan security patches</li>
                    <li><i class="fa-solid fa-check"></i> Bug fixes</li>
                    <li><i class="fa-solid fa-check"></i> Support user (via admin yang ditunjuk)</li>
                    <li><i class="fa-solid fa-check"></i> Backup dan disaster recovery</li>
                </ul>
                <p><strong>Backup support:</strong> Developer dapat melibatkan admin tambahan jika diperlukan tanpa biaya ekstra untuk Investor.</p>
            </section>
            
            <!-- Section 3: KEWAJIBAN INVESTOR -->
            <section class="tos-section">
                <h2>
                    <span class="tos-section-number">3</span>
                    KEWAJIBAN INVESTOR
                </h2>
                <p>Investor hanya bertanggung jawab atas:</p>
                <ul>
                    <li>Modal awal (jika memilih Hybrid Model: $100 setup fee)</li>
                    <li>Ketersediaan akun untuk menerima pembayaran revenue share</li>
                </ul>
            </section>
            
            <!-- Section 4: REVENUE SHARING MODELS -->
            <section class="tos-section">
                <h2>
                    <span class="tos-section-number">4</span>
                    REVENUE SHARING MODELS
                </h2>
                <table class="tos-table">
                    <thead>
                        <tr>
                            <th>Model</th>
                            <th>Investor</th>
                            <th>Developer</th>
                            <th>Setup Fee</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Pure Revenue Share</strong></td>
                            <td class="highlight">80%</td>
                            <td>20%</td>
                            <td>$0</td>
                        </tr>
                        <tr>
                            <td><strong>Hybrid Model</strong></td>
                            <td class="highlight">85%</td>
                            <td>15%</td>
                            <td class="highlight-amber">$100 one-time</td>
                        </tr>
                    </tbody>
                </table>
            </section>
            
            <!-- Section 5: PERHITUNGAN NET REVENUE -->
            <section class="tos-section">
                <h2>
                    <span class="tos-section-number">5</span>
                    PERHITUNGAN NET REVENUE
                </h2>
                <p><strong>Gross Revenue</strong> = Total seluruh pendapatan platform (deposit client, fees, dll)</p>
                
                <p><strong>Biaya Operasional</strong> (dikurangi dari Gross):</p>
                <ul>
                    <li>Server hosting: ~Rp 100.000/bulan</li>
                    <li>Domain renewal: ~Rp 3.000/bulan</li>
                    <li><strong>Total fixed cost: Rp 103.000/bulan</strong></li>
                </ul>
                
                <div class="tos-formula">Net Revenue = Gross Revenue &minus; Rp 103.000</div>
                
                <div class="tos-note">
                    <strong>Catatan:</strong> Tidak ada payment gateway fees karena menggunakan sistem manual transfer + verifikasi admin.
                </div>
            </section>
            
            <!-- Section 6: PEMBAYARAN REVENUE SHARE -->
            <section class="tos-section">
                <h2>
                    <span class="tos-section-number">6</span>
                    PEMBAYARAN REVENUE SHARE
                </h2>
                <table class="tos-table">
                    <thead>
                        <tr>
                            <th>Aspek</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Frekuensi</strong></td>
                            <td>Bulanan</td>
                        </tr>
                        <tr>
                            <td><strong>Minimum payout</strong></td>
                            <td>Rp 250.000</td>
                        </tr>
                        <tr>
                            <td><strong>Akumulasi</strong></td>
                            <td>Jika di bawah minimum, diakumulasi ke bulan berikutnya</td>
                        </tr>
                        <tr>
                            <td><strong>Method (Indonesia)</strong></td>
                            <td>Transfer bank atau E-wallet (DANA/OVO/GoPay)</td>
                        </tr>
                        <tr>
                            <td><strong>Method (International)</strong></td>
                            <td>PayPal atau Crypto (USDT)</td>
                        </tr>
                    </tbody>
                </table>
                
                <p><strong>Jadwal pembayaran:</strong> Dalam 7 hari kerja setelah laporan bulanan dikirim.</p>
            </section>
            
            <!-- Section 7: DURASI & TERMINATION -->
            <section class="tos-section">
                <h2>
                    <span class="tos-section-number">7</span>
                    DURASI & TERMINATION
                </h2>
                <table class="tos-table">
                    <thead>
                        <tr>
                            <th>Aspek</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Minimum commitment</strong></td>
                            <td>3 bulan</td>
                        </tr>
                        <tr>
                            <td><strong>Notice period</strong></td>
                            <td>14 hari tertulis (WhatsApp/email)</td>
                        </tr>
                        <tr>
                            <td><strong>Exit terms</strong></td>
                            <td>Revenue yang belum dibayar tetap ikut minimum payout rules (tidak ada pembayaran langsung, tetap akumulasi jika di bawah Rp 250.000)</td>
                        </tr>
                    </tbody>
                </table>
                
                <p><strong>Early termination:</strong> Jika Investor berhenti sebelum 3 bulan, tidak ada penalty namun revenue yang terakumulasi tetap mengikuti minimum payout rules.</p>
            </section>
            
            <!-- Section 8: LAPORAN & TRANSPARENSI -->
            <section class="tos-section">
                <h2>
                    <span class="tos-section-number">8</span>
                    LAPORAN & TRANSPARENSI
                </h2>
                <p><strong>Format:</strong> Spreadsheet (Google Sheets/Excel)</p>
                <p><strong>Dikirim via:</strong> Email atau WhatsApp</p>
                
                <p><strong>Isi laporan bulanan:</strong></p>
                <ul>
                    <li>Gross Revenue (rincian sumber)</li>
                    <li>Biaya operasional (breakdown)</li>
                    <li>Net Revenue</li>
                    <li>Investor share (80% atau 85%)</li>
                    <li>Accumulated balance (jika ada)</li>
                    <li>Status payout (dibayar/diakumulasi)</li>
                </ul>
                
                <p><strong>Future improvement:</strong> Dashboard real-time (opsional, akan diinfokan jika tersedia).</p>
            </section>
            
            <!-- Section 9: SUPPORT & RESPONSE TIME -->
            <section class="tos-section">
                <h2>
                    <span class="tos-section-number">9</span>
                    SUPPORT & RESPONSE TIME
                </h2>
                <p><strong>Scope support:</strong></p>
                <ul>
                    <li>Laporan keuangan</li>
                    <li>Status teknis platform</li>
                    <li>Request fitur baru (dengan kesepakatan development terpisah)</li>
                </ul>
                
                <p><strong>Response time:</strong></p>
                <ul>
                    <li><strong>Urgent</strong> (platform down, bug kritis): 24 jam</li>
                    <li><strong>Non-urgent</strong> (laporan, pertanyaan, request): 3 hari</li>
                </ul>
            </section>
            
            <!-- Section 10: REQUEST FITUR BARU -->
            <section class="tos-section">
                <h2>
                    <span class="tos-section-number">10</span>
                    REQUEST FITUR BARU
                </h2>
                <p>Investor dapat mengajukan request fitur. Developer akan mengevaluasi dan mengajukan:</p>
                <ul>
                    <li>Estimasi waktu development</li>
                    <li>Biaya tambahan (jika di luar scope maintenance standar)</li>
                    <li>Kesepakatan tertulis sebelum development dimulai</li>
                </ul>
            </section>
            
            <!-- Section 11: DISPUTE RESOLUTION -->
            <section class="tos-section">
                <h2>
                    <span class="tos-section-number">11</span>
                    DISPUTE RESOLUTION
                </h2>
                <ul>
                    <li><strong>1. Diskusi baik-baik:</strong> Para pihak berkomitmen menyelesaikan perselisihan melalui komunikasi terbuka</li>
                    <li><strong>2. Termination:</strong> Jika tidak tercapai kesepakatan, partnership dapat dihentikan sesuai terms di Section 7</li>
                    <li><strong>3. Final settlement:</strong> Semua revenue yang terhutang dibayarkan sesuai minimum payout rules dalam 30 hari setelah termination</li>
                </ul>
            </section>
            
            <!-- Section 12: LIMITATION OF LIABILITY -->
            <section class="tos-section">
                <h2>
                    <span class="tos-section-number">12</span>
                    LIMITATION OF LIABILITY
                </h2>
                <ul>
                    <li>Developer tidak bertanggung jawab atas kehilangan profit yang diakibatkan oleh downtime server yang wajar (< 99% uptime)</li>
                    <li>Developer tidak bertanggung jawab atas tindakan user (client/worker) yang melanggar ketentuan platform</li>
                    <li>Investor memahami bahwa ini adalah bisnis dengan risiko pasar, tidak ada jaminan profit minimum</li>
                </ul>
            </section>
            
            <!-- Section 13: AMENDMENTS -->
            <section class="tos-section">
                <h2>
                    <span class="tos-section-number">13</span>
                    AMENDMENTS
                </h2>
                <p>Perubahan ToS akan diinformasikan 14 hari sebelum efektif. Continued participation setelah perubahan berarti persetujuan.</p>
            </section>
            
            <!-- Section 14: ACCEPTANCE -->
            <section class="tos-section">
                <h2>
                    <span class="tos-section-number">14</span>
                    ACCEPTANCE
                </h2>
                <p>Dengan mengklik "Start Partnership" dan mengirim pesan WhatsApp, Investor menyatakan telah membaca, memahami, dan menyetujui seluruh Terms of Service ini.</p>
            </section>
            
            <!-- Contact Section -->
            <div class="tos-contact">
                <h3><i class="fa-solid fa-address-book"></i> Kontak Developer</h3>
                <p><strong>WhatsApp:</strong> <a href="https://wa.me/<?php echo $whatsapp_number; ?>" target="_blank" rel="noopener"><?php echo $whatsapp_number; ?></a></p>
                <p><strong>Response time:</strong> Sesuai Section 9</p>
            </div>
        </div>
    </div>
</main>

<footer class="footer">
    <div class="container">
        <div class="footer-inner">
            <div class="footer-logo">
                <span class="logo-bracket">[</span>PTC<span class="logo-dot">.</span>Bot<span class="logo-bracket">]</span>
            </div>
            <p class="footer-text">Managed Partnership Terms of Service</p>
            <div class="footer-links">
                <a href="index.php">Main Page</a>
                <a href="index.php#pricing">Pricing</a>
                <a href="index.php#faq">FAQ</a>
            </div>
        </div>
    </div>
</footer>

<script src="script.js"></script>
</body>
</html>