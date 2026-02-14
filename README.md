# SMM Bot Landing Page

A production-ready landing page for a Telegram PTC (Paid-To-Click) Bot source code product.

## Overview

This landing page is designed to showcase and sell Telegram bot source code with features including:
- Built-in wallet system
- Commission engine
- Multi-role architecture

## Preview

![OG Image Preview](assets/og-image.png)

*Social sharing preview image (Open Graph)*

## Project Structure

```
smm-bot-landing-page/
```

## Technology Stack

- **Frontend**: HTML5, CSS3, JavaScript
- **Backend**: PHP (for configuration management)
- **Fonts**: Outfit, DM Sans, JetBrains Mono (Google Fonts)
- **Design**: Modern dark theme with cyan/amber accents
- **Effects**: Scroll-triggered animations, terminal typing animation

## Features

- Responsive design with mobile navigation
- Animated statistics counter
- Terminal/code preview with typing effect
- Scroll-reveal animations
- Grid background with noise overlay
- Multi-section layout (Hero, Features, Revenue, Stack, Pricing, FAQ)
- Dynamic WhatsApp integration via config
- Complete SEO optimization (Open Graph, Twitter Cards, JSON-LD)

## Quick Start

1. Copy `config-example.php` to `config.php`
2. Edit `config.php` and set your WhatsApp number:
   ```php
   <?php
   $whatsapp_number = 62123456789; // Your WhatsApp number (without +)
   ?>
   ```
3. Open `index.php` in a web browser or deploy to your web server

## Configuration

### WhatsApp Integration

The landing page uses a configuration file for dynamic WhatsApp integration:

1. `config-example.php` - Template file (committed to git)
2. `config.php` - Your actual configuration (ignored by git)

This keeps your WhatsApp number private while allowing easy deployment.

### SEO Settings

The landing page includes comprehensive SEO optimization:

- **Meta Tags**: Title, description, keywords, author, robots
- **Open Graph**: Facebook/LinkedIn sharing with custom image
- **Twitter Cards**: Large image summary card
- **JSON-LD**: Structured data for search engines (Schema.org)
- **Canonical URL**: Prevents duplicate content issues

### Colors
Edit CSS variables in `style.css`:
```css
:root {
    --accent-cyan: #00e5ff;
    --accent-amber: #ffb300;
    /* ... */
}
```

### Content
Modify sections in `index.php`:
- Hero section (lines 44-91)
- Features section
- Pricing section
- FAQ section

## License

This project is proprietary software. All rights reserved.

### Commercial Use

This project is available for commercial use under the following terms:

**Allowed:**
- Use for personal or commercial projects
- Modify design and content as needed
- Host on your own server

**Prohibited:**
- Resell without written permission
- Distribute as a standalone product
- Claim ownership of the original code

**Note:** This landing page is designed to sell Telegram bot source code products. See the product listing for specific purchase terms.

## Disclaimer

THIS SOFTWARE IS PROVIDED "AS IS" WITHOUT WARRANTY OF ANY KIND.

## Contact

For licensing inquiries:
- Email: admin@faydev.my.id
- Website: faydev.my.id
