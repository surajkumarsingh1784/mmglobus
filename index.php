<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Transform your digital strategy with targeted SEO, social media, and content marketing. Reach the right audience and boost ROI.">
    <meta name="keywords" content="Digital marketing services, SEO, social media marketing, web development">
    <title>Digi Synapse | Digital Marketing Services</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
     <link rel="icon" type="image/x-icon" href="fav-icon.png">

    <style>
        :root {
            --primary: #1a3a52;
            --primary-light: #2d5a7b;
            --accent: #d4a574;
            --accent-dark: #b8935f;
            --neutral-light: #f8f9fa;
            --border-color: #cbd5e1; /* slightly darker so card borders are more visible */
            --text-primary: #1a1a1a; /* dark text for nav links on homepage */
        }

        /* Reset and Base Styles */
        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.5;
            color: rgb(70, 130, 180);
            background-color: var(--primary);
        }

        img {
            max-width: 100%;
            height: auto;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        ul {
            list-style: none;
        }

        /* Container */
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        @media (min-width: 640px) {
            .container {
                padding: 0 1.5rem;
            }
        }

        /* Button */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 0.375rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s ease;
            padding: 0.75rem 1.5rem;
            border: none;
        }

        .btn-primary {
            background-color: rgb(70, 130, 180);
            color: white;
        }

        /* Accent button for hero Get Started */
        .btn-accent {
            background-color: var(--accent);
            /* Use black text as requested */
            color: #000000;
            transition: background-color 0.18s ease, transform 0.12s ease;
        }

        .btn-accent:hover {
            background-color: var(--accent-dark);
            transform: translateY(-1px);
            color: #000000; /* keep text black on hover */
        }

        /* CTA button styling for hero Get Started */
        .cta-button {
            display: inline-block;
            padding: 0.875rem 2.5rem;
            background: var(--accent);
            /* keep CTA label black as requested */
            color: #000000;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: 2px solid var(--accent);
            cursor: pointer;
            font-size: 1rem;
        }

        .cta-button:hover {
            transform: translateY(-2px);
            /* Make the background transparent on hover but keep the label visible */
            background: transparent;
            color: var(--accent); /* show accent color on hover (#d4a574) */
            /* Keep the hover border exactly 2px solid accent (no thicker) */
            border: 2px solid var(--accent);
            /* add a soft outward glow using accent so the border color appears to spread outward */
            box-shadow: 0 8px 24px rgba(212,165,116,0.12), 0 0 0 6px rgba(212,165,116,0.06);
        }

        .btn-primary:hover {
            background-color: #1e293b;
        }

        .btn-white {
            background-color: white;
            color: rgb(70, 130, 180);
        }

        .btn-white:hover {
            background-color: rgba(255, 255, 255, 0.9);
        }

        /* Learn more link styling (About section) */
        .learn-more-link {
            color: var(--accent);
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
        }

        .learn-more-link svg {
            transition: transform 0.18s ease;
            color: var(--accent);
        }

        .learn-more-link:hover svg {
            transform: translateX(4px);
        }

        .btn-lg {
            padding: 1rem 2rem;
            font-size: 1.125rem;
        }

        .btn-full {
            width: 100%;
        }

        /* Header/Navbar */
        .header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 50;
            transition: all 0.3s ease;
            padding: 1rem 0;
            background-color: #ffffff; /* navbar strip set to white */
        }

        .header.scrolled {
            /* switch to primary color when scrolling down for visual emphasis */
            background-color: var(--primary);
            box-shadow: 0 6px 18px rgba(16,24,40,0.12);
            padding: 0.5rem 0;
        }

        /* when header is scrolled and dark, make links and icons white for contrast */
        .header.scrolled .nav-link {
            color: #ffffff;
        }

        .header.scrolled .nav-link:hover {
            color: rgba(255,255,255,0.9);
        }

        .header.scrolled .nav-link::after {
            /* use brand accent for the underline when header is scrolled so it matches active state */
            background-color: var(--accent);
            /* subtle accent glow for visibility on the dark header */
            box-shadow: 0 0 10px rgba(212,165,116,0.18);
        }

        .header.scrolled .menu-btn {
            color: #ffffff;
        }

        .header.scrolled .mobile-menu {
            background-color: var(--primary);
        }

        .header.scrolled .mobile-menu a {
            color: #ffffff;
        }

        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            height: 40px;
            z-index: 50;
        }

        .nav-desktop {
            display: none;
        }

        .nav-link {
            color: var(--text-primary);
            font-weight: 500;
            transition: color 0.18s ease;
            margin: 0 1rem;
            position: relative;
            padding-bottom: 5px;
        }

        /* Ensure the explicit Home link stays dark on the homepage */
        .nav-desktop a[href="#home"] {
            color: var(--text-primary);
        }

        .nav-link:hover {
            color: var(--primary-light);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 2.2px;
            background-color: var(--accent); /* accent underline on white */
            box-shadow: 0 0 8px rgba(212,165,116,0.18);
            transform: scaleX(0);
            transform-origin: center;
            transition: transform 0.3s ease-out;
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            transform: scaleX(1);
        }

        .nav-link.active {
            /* highlight active link with brand accent when at top */
            color: var(--accent);
        }

        .menu-btn {
            background: none;
            border: none;
            color: var(--primary);
            cursor: pointer;
            z-index: 50;
            display: block;
        }

        .mobile-menu {
            position: fixed;
            inset: 0;
            background-color: #ffffff; /* keep mobile menu white to match navbar */
            z-index: 40;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.3s ease;
        }

        .mobile-menu.active {
            opacity: 1;
            pointer-events: auto;
        }

        .mobile-menu a {
            color: var(--text-primary);
            font-size: 1.5rem;
            font-weight: 500;
            margin: 1rem 0;
        }

        @media (min-width: 768px) {
            .nav-desktop {
                display: flex;
                align-items: center;
                /* nudge the nav list further to the right so the shift is noticeable on desktop */
                margin-left: 4.5rem;
            }

            .menu-btn {
                display: none;
            }
            /* reduce the container's right padding inside the header so nav sits closer to the right edge */
            .header .container {
                padding-right: 0.5rem;
            }
        }

        /* Hero Section */
        .hero {
            position: relative;
            /* Use a flexible min-height instead of forcing 100vh so padding can control the visual spacing
               The negative margin slightly lifts the hero from the page bottom as requested */
            min-height: calc(100vh - 3rem);
            width: 100%;
            display: flex;
            align-items: center;
            color: white;
            /* Reverted to solid primary background as requested */
            background-color: var(--primary);
            /* responsive padding: clamp-based so bottom padding scales on different viewports */
            padding: clamp(4rem, 10vw, 8rem) 2rem;
            padding-top: clamp(4rem, 10vw, 8rem);
            padding-right: 2rem;
            padding-bottom: clamp(4rem, 10vw, 8rem);
            /* lift the hero a little so its bottom sits slightly up from the following section */
            margin-bottom: -2.7rem;
            /* crop a portion off the bottom of the hero background */
            overflow: hidden;
            -webkit-clip-path: inset(0 0 8% 0);
            clip-path: inset(0 0 8% 0);
        }

        /* Right-side floating decorative circle behind hero content */
        .hero::before {
            content: '';
            position: absolute;
            top: 90px; /* moved down so the circle sits lower in the hero */
            right: 0;
            width: 500px;
            height: 500px;
            background: rgba(212, 165, 116, 0.10);
            border-radius: 50%;
            z-index: -1; /* sit behind hero content but above hero-bg (which is -2) */
            pointer-events: none;
            transform: translateY(0);
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(20px); }
        }

        .hero-bg {
            position: absolute;
            inset: 0;
            /* background image removed so gradient on .hero is visible */
            display: none;
            z-index: -2;
        }

        .hero-overlay {
            /* overlay removed so hero background color shows plainly */
            display: none;
        }

        .hero-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;
            font-size: 3.5rem;
        }

        .hero-title {
            /* Responsive headline sizing using clamp: min 3.5rem, fluid with viewport, max 5rem */
            font-size: clamp(3.5rem, 6vw, 5rem);
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 1.5rem;
            letter-spacing: -1px;
                /* Use white text for the hero title and typed phrase */
                text-align: center;
            background: none !important;
            color: #ffffff;
            -webkit-text-fill-color: #ffffff; /* for webkit browsers */
        }

        /* Make sure the dynamic typed part inherits sizing and stays visually consistent */
        .hero-title .dynamic-text {
            font-size: inherit;
            font-weight: inherit;
            line-height: inherit;
            letter-spacing: inherit;
            display: inline-block; /* keep it inline so it flows with the heading */
            margin-top: 0.25rem; /* small gap if still needed */
        }

        /* Hero entrance animations */
        .hero-content { position: relative; }
        .hero-content.animate .hero-title,
        .hero-content.animate .hero-subtitle,
        .hero-content.animate .btn-lg {
            opacity: 0;
            transform: translateY(12px);
            animation-fill-mode: forwards;
        }

        .hero-content.animate .hero-title {
            animation: fadeUp 600ms ease-out 0.1s forwards;
        }

        .hero-content.animate .hero-subtitle {
            animation: fadeUp 600ms ease-out 0.3s forwards;
        }

        .hero-content.animate .btn-lg {
            animation: fadeUp 600ms ease-out 0.5s forwards;
        }

        @keyframes fadeUp {
            0% { opacity: 0; transform: translateY(12px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        /* Decorative ball removed — no CSS required here */

    /* Dynamic letter-by-letter text (ensure white color and visible cursor) */
    .dynamic-text { display: inline-block; font-weight: 700; color: #ffffff; }
    .dynamic-text .dyn-cursor { display: inline-block; margin-left: 6px; opacity: 1; color: #ffffff; }
    .dyn-cursor { animation: blink 1s steps(2, start) infinite; color: #ffffff; }
        @keyframes blink { to { opacity: 0; } }
        .dynamic-text.fade-out { opacity: 0; transition: opacity 0.55s ease; }

            .hero-subtitle {
                /* Responsive subtitle sizing: base 1.25rem, scale with viewport, cap at 1.5rem */
                font-size: clamp(1.25rem, 2vw, 1.5rem);
                margin-bottom: 2rem;
                opacity: 0.95;
                /* make subtitle lighter/thinner */
                font-weight: 300;
                color: rgba(255,255,255,0.95); /* ensure subtitle remains white/visible on hero */
                text-align: center;
            }

        @media (min-width: 768px) {
            .hero-title {
                font-size: 4rem;
            }

            .hero-subtitle {
                /* keep clamp-based sizing at larger widths so it scales smoothly */
                font-size: clamp(1.25rem, 2vw, 1.5rem);
            }
        }

        @media (min-width: 1024px) {
            .hero-title {
                font-size: 4.5rem;
            }
        }

        /* Section Styles */
        .section {
            padding: 5rem 0;
        }

        .section-title {
            font-size: 2rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 3rem;
            color: #000000; /* Set text color to black */
        }

        /* Static accent-dark highlight under the About section title */
        .about .section-title {
            position: relative;
        }

        .about .section-title::after {
            content: '';
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            bottom: -0.70rem; /* space below the title */
            width: 4rem;
            height: 4px;
            background: var(--accent);
            border-radius: 3px;
            /* no transition or animation - static highlight */
        }

        /* Static accent highlight under the Our Services title (same as About) */
        .services .section-title {
            position: relative;
        }

        .services .section-title::after {
            content: '';
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            bottom: -0.70rem;
            width: 4rem;
            height: 4px;
            background: var(--accent);
            border-radius: 3px;
        }

        /* Static accent highlight under the Pricing / "Our Packages" title */
        .pricing .section-title {
            position: relative;
        }

        .pricing .section-title::after {
            content: '';
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            bottom: -0.70rem;
            width: 4rem;
            height: 4px;
            background: var(--accent);
            border-radius: 3px;
        }

        /* Static accent highlight under the Testimonials / "What Our Clients Say" title */
        .testimonials .section-title {
            position: relative;
        }

        .testimonials .section-title::after {
            content: '';
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            bottom: -0.70rem;
            width: 4rem;
            height: 4px;
            background: var(--accent);
            border-radius: 3px;
        }

        .section-subtitle {
            font-size: 1.125rem;
            color: #64748b;
            text-align: center;
            max-width: 48rem;
            margin: 0 auto 3rem;
        }

        @media (min-width: 768px) {
            .section-title {
                font-size: 2.5rem;
            }
        }

        /* About Section */
        .about {
            background-color: var(--neutral-light); /* subtle contrast so white about-card borders show */
            padding: 6rem 0 2rem; /* increased top padding so About appears lower on the page */
        }

        .about-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 3rem;
            align-items: center;
        }

        .about-content {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .about-text {
            font-size: 1.125rem;
            color: #334155;
        }

        .about-image-container {
            position: relative;
            height: 400px;
            border-radius: 0.75rem;
            overflow: hidden;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }

        /* About section: fade-in utility and about-card styles */
        .fade-in {
            /* enable entrance animation when the element appears */
            animation: fadeInUp 0.6s ease-out forwards;
        }

        .about-card {
            background: #ffffff;
            padding: 2.5rem;
            border-radius: 12px;
            /* default: no shadow; show on hover */
            box-shadow: none;
            transition: transform 0.28s ease, box-shadow 0.28s ease;
            position: relative;
            overflow: visible;
            border: 1px solid var(--border-color);
            border-top: 4px solid var(--accent);
        }

        .about-card::after {
            /* subtle dark band near the top border that appears on hover */
            content: '';
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            height: 6px;
            background: rgba(0,0,0,0.06);
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
            opacity: 0;
            transition: opacity 0.28s ease;
            pointer-events: none;
        }

        .about-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 24px rgba(0, 0, 0, 0.12);
            animation: none; /* avoid conflicting entrance animation */
        }

        .about-card:hover::after {
            opacity: 1;
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .about-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        @media (min-width: 1024px) {
            .about-grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        /* Nudge the right-side about image slightly upward on larger screens so it lines up visually */
        @media (min-width: 768px) {
            .about-image-container {
                transition: transform 0.3s ease;
                transform: translateY(-24px);
            }
        }

        /* Services Section */
        .services {
            background-color: #f8fafc;
        }

        .services-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 2rem;
        }


        /* Service cards: use a white card with subtle border and shadow (requested) */
        .service-card {
            padding: 2rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            background: #ffffff; /* white card background as requested */
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            transition: box-shadow 0.3s ease, transform 0.22s ease;
            color: #0f172a; /* darker text on white */
            border: 1px solid var(--border-color);
            cursor: pointer;
            overflow: hidden;
            position: relative; /* for the split-bg pseudo-element */
        }

        .service-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 18px 40px rgba(2,6,23,0.12), 0 0 18px rgba(212,165,116,0.06);
            border-color: var(--accent);
        }

        /* Bottom-half gradient overlay to make the bottom 50% show the previous gradient */
        .service-card::before {
            content: '';
            position: absolute;
            left: 0;
            right: 0;
            top: 50%; /* start at middle to cover bottom half */
            bottom: 0;
            background: linear-gradient(180deg, var(--primary) 0%, var(--primary-light) 100%);
            z-index: 0;
            pointer-events: none;
        }

        /* Ensure card children render above the pseudo background */
        .service-card > * {
            position: relative;
            z-index: 1;
        }

        .service-icon {
            height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            color: var(--accent);
            position: relative;
            overflow: hidden;
            margin-bottom: 1rem;
        }

        .service-title {
            color: var(--neutral-light);
            font-size: 1.25rem;
            margin-bottom: 0.75rem;
            font-weight: 700;
        }

        .service-description {
            color: var(--neutral-light);
            font-size: 0.95rem;
            line-height: 1.7;
            flex-grow: 1;
            margin-bottom: 1.5rem;
        }

        @media (min-width: 768px) {
            .services-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (min-width: 1024px) {
            .services-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        /* Testimonials Section */
        .testimonials {
            background-color: var(--neutral-light); /* subtle contrast so card borders are visible */
            padding: 2rem 0;
        }

        /* Show testimonial cards together in a responsive grid instead of a slider */
        .testimonials-slider {
            position: relative;
            overflow: visible; /* allow hover shadows to show */
            border-radius: 0;
            padding: 0.5rem 0;
        }

        .testimonials-container {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1.5rem;
            grid-auto-rows: 1fr; /* ensure rows are equal height */
            transform: none !important; /* disable inline JS translateX */
            transition: none !important;
            align-items: stretch;
        }

        /* Make testimonial cards match the About card visual style */
        .testimonial-slide {
            padding: 2rem;
            text-align: center;
            background: #ffffff;
            border-radius: 12px;
            margin: 0;
            box-shadow: none; /* show on hover only */
            transition: transform 0.28s ease, box-shadow 0.28s ease;
            position: relative;
            overflow: visible;
            border: 1px solid var(--border-color);
            border-top: 4px solid var(--accent); /* keep the accent top band */
        }

        .testimonial-slide::after {
            /* subtle dark band near the top border that appears on hover */
            content: '';
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            height: 6px;
            background: rgba(0,0,0,0.06);
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
            opacity: 0;
            transition: opacity 0.28s ease;
            pointer-events: none;
        }

        .testimonial-slide:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 24px rgba(0, 0, 0, 0.12);
            animation: none;
        }

        .testimonial-slide:hover::after {
            opacity: 1;
        }

        /* Responsive grid: 2 columns on medium screens, 3 on large */
        @media (min-width: 768px) {
            .testimonials-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (min-width: 1024px) {
            .testimonials-container {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        /* Hide the old slider controls since we're showing all cards */
        .testimonials .slider-nav {
            display: none;
        }

        .testimonials .slider-dots {
            display: none;
        }

        .testimonial-stars {
            display: flex;
            justify-content: center;
            gap: 0.25rem;
            margin-bottom: 1.5rem;
        }

        .star {
            color: #fbbf24;
            font-size: 1.25rem;
        }

        .testimonial-text {
            font-size: 1.125rem;
            font-style: italic;
            color: #334155;
            margin-bottom: 2rem;
            flex: 1 1 auto; /* allow the main text to grow so cards match height */
            line-height: 1.6;
        }

        .testimonial-author {
            font-weight: 600;
            color: rgb(70, 130, 180);
            margin-bottom: 0.5rem;
        }

        .testimonial-business {
            color: #64748b;
            font-size: 0.875rem;
        }

        .slider-nav {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 1rem;
            margin-top: 2rem;
        }

        .slider-btn {
            background-color: rgb(70, 130, 180);
            color: white;
            border: none;
            border-radius: 50%;
            width: 3rem;
            height: 3rem;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .slider-btn:hover {
            background-color: #1e293b;
            transform: scale(1.1);
        }

        .slider-btn:disabled {
            background-color: #cbd5e1;
            cursor: not-allowed;
            transform: none;
        }

        .slider-dots {
            display: flex;
            gap: 0.5rem;
        }

        .dot {
            width: 0.75rem;
            height: 0.75rem;
            border-radius: 50%;
            background-color: #cbd5e1;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }

        .dot.active {
            background-color: rgb(70, 130, 180);
        }

        @media (min-width: 768px) {
            .testimonial-slide {
                padding: 4rem 3rem;
            }

            .testimonial-text {
                font-size: 1.25rem;
            }
        }

        /* Pricing Section */
        .pricing {
            background-color: #f8fafc;
        }

        .pricing-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 2rem;
        }

        /* Pricing cards: match About/Testimonial card visual language */
        .pricing-card {
            border: 1px solid var(--border-color);
            border-radius: 0.75rem;
            background-color: #ffffff;
            /* default: no heavy shadow; show lift on hover */
            box-shadow: none;
            transition: transform 0.28s ease, box-shadow 0.28s ease;
            position: relative;
            overflow: visible;
            border-top: 4px solid var(--accent);
        }

        .pricing-card::after {
            /* subtle dark band near the top border that appears on hover */
            content: '';
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            height: 6px;
            background: rgba(0,0,0,0.06);
            border-top-left-radius: 0.75rem;
            border-top-right-radius: 0.75rem;
            opacity: 0;
            transition: opacity 0.28s ease;
            pointer-events: none;
        }

        .pricing-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 24px rgba(0, 0, 0, 0.12);
        }

        .pricing-card:hover::after {
            opacity: 1;
        }

        .pricing-card.popular {
            border-color: rgb(70, 130, 180);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            transform: scale(1.05);
            position: relative;
        }

        .popular-badge {
            position: absolute;
            top: 0;
            right: 0;
            background-color: #eab308;
            color: rgb(70, 130, 180);
            font-size: 0.75rem;
            font-weight: 700;
            padding: 0.25rem 0.75rem;
            border-bottom-left-radius: 0.5rem;
        }

        .pricing-header {
            padding: 2rem;
            text-align: center;
        }

        .pricing-card.popular .pricing-header {
            background-color: rgb(70, 130, 180);
            color: white;
        }

        .pricing-card:not(.popular) .pricing-header {
            background-color: #f8fafc;
        }

        .pricing-title {
            font-size: 1.5rem;
            font-weight: 700;
        }

        .pricing-content {
            padding: 2rem;
        }

        .pricing-price {
            font-size: 2.5rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 2rem;
        }

        .pricing-features {
            margin-bottom: 2rem;
        }

        .feature-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 0.75rem;
        }

        .feature-icon {
            color: #22c55e;
            margin-right: 0.5rem;
            flex-shrink: 0;
            margin-top: 0.125rem;
        }

        .pricing-card.popular .pricing-btn {
            background-color: rgb(70, 130, 180);
            color: white;
        }

        .pricing-card:not(.popular) .pricing-btn {
            background-color: #e2e8f0;
            color: rgb(70, 130, 180);
        }

        .pricing-card:not(.popular) .pricing-btn:hover {
            background-color: #cbd5e1;
        }

        @media (min-width: 768px) {
            .pricing-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        /* CTA Section */
        .cta {
            background-color: rgb(70, 130, 180);
            color: white;
            text-align: center;
        }

        .cta-title {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
        }

        .cta-text {
            font-size: 1.25rem;
            opacity: 0.8;
            max-width: 48rem;
            color: white;
            /* Gradient background as requested */
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
            background-image: linear-gradient(135deg, rgb(26, 58, 82) 0%, rgb(45, 90, 123) 100%);
            background-position-x: initial;
            background-position-y: initial;
            background-size: initial;
            background-repeat: no-repeat;
            background-attachment: initial;
            background-origin: initial;
            background-clip: initial;
            background-color: initial;
        }

        @media (min-width: 768px) {
            .cta-title {
                font-size: 2.5rem;
            }
        }

        /* Footer */
        .footer {
            background: var(--primary);
            padding: 3rem 2rem 1.5rem;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 3rem;
        }

        .footer-logo {
            height: 40px;
            margin-bottom: 1.5rem;
        }

        /* Footer section titles styling */
.footer .footer-title {
    color: var(--accent);
    font-weight: 700;
    margin-bottom: 1rem;
}

        .footer-links li {
            margin-bottom: 0.75rem;
        }

        .footer-links a {
            color: #cbd5e1;
            transition: color 0.2s ease;
        }

        .footer-links a:hover {
            color: white;
        }

        /* Footer links styling */
.footer ul li {
    color: rgba(255, 255, 255, 0.8);
    text-decoration: none;
    transition: color 0.3s ease;
}

/* Footer links hover effect */
.footer ul li:hover {
    color: var(--accent-dark);
}

        .contact-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 1rem;
        }

        .contact-icon {
            color: #cbd5e1;
            margin-right: 0.75rem;
            flex-shrink: 0;
            margin-top: 0.125rem;
        }

        .contact-text {
            color: #cbd5e1;
        }

        .footer-bottom {
            border-top: 1px solid #1e293b;
            margin-top: 3rem;
            padding-top: 2rem;
            text-align: center;
            color: #94a3b8;
        }

        @media (min-width: 768px) {
            .footer-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (min-width: 1024px) {
            .footer-grid {
                grid-template-columns: repeat(4, 1fr);
            }
        }

        /* Hero wave removed - no CSS required here */
    </style>
</head>

<body>
    <!-- Header/Navbar -->
    <header class="header" id="header">
        <div class="container">
            <nav class="navbar">
                <a href="#" class="logo-link">
                    <img src="logo.png" alt="Digi Synapse" class="logo">
                </a>

                <div class="nav-desktop">
                    <a href="#home" class="nav-link">Home</a>
                    <a href="#services" class="nav-link">Services</a>
                    <a href="#testimonials" class="nav-link">Testimonials</a>
                    <a href="#pricing" class="nav-link">Pricing</a>
                    <a href="#about" class="nav-link">About</a>
                    <a href="#contact" class="btn btn-white">Contact Us</a>
                </div>

                <button class="menu-btn" id="menuBtn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                </button>
            </nav>
        </div>

        <div class="mobile-menu" id="mobileMenu">
            <a href="index.php" onclick="closeMobileMenu()">Home</a>
            <a href="index.php#services" onclick="closeMobileMenu()">Services</a>
            <a href="index.php#testimonials" onclick="closeMobileMenu()">Testimonials</a>
            <a href="index.php#pricing" onclick="closeMobileMenu()">Pricing</a>
            <a href="#about" onclick="closeMobileMenu()">About</a>
            <a href="index.php#contact" class="btn btn-white" onclick="closeMobileMenu()">Contact Us</a>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
    <div class="hero-bg"></div>
    <div class="hero-overlay"></div>
    <!-- decorative floating circle removed -->
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">
                    Welcome to the <span class="dynamic-text">Future of Digi Synapse</span>
                </h1>
                <p class="hero-subtitle">Bridging the Digital Divide</p>
                <a href="#contact" class="btn btn-accent btn-lg cta-button">
                    Get Started
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        style="margin-left: 0.5rem;">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </a>
            </div>
        </div>
        <div class="hero-wave">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path id="heroWavePath" d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
    </section>

    <!-- About Section -->
    <section class="section about" id="about">
        <div class="container">
            <h2 class="section-title">About Us</h2>
            <div class="about-grid">
                <div class="about-card about-content fade-in">
                    <p class="about-text">
                        In the digital realm, Digi Synapse is Maximilian Globus's answer to the growing need for
                        seamless online
                        integration. With the motto "Connect with us, and we will engage your business with the online
                        world
                        seamlessly through unique digital craftsmanship," Digi Synapse offers tailored solutions that
                        enhance a
                        business's online presence.
                    </p>
                    <p class="about-text">
                        From digital marketing to web development, Digi Synapse is dedicated to helping businesses
                        navigate the
                        complexities of the digital world with ease and creativity.
                    </p>
                    <a href="#contact" class="learn-more-link" style="align-self: flex-start;">Learn More
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" style="margin-left:0.4rem;">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </a>
                </div>
                <div class="about-image-container">
                    <img src="about.png" alt="About Digi Synapse" class="about-image">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="section services" id="services">
        <div class="container">
            <h2 class="section-title">Our Services</h2>
            <p class="section-subtitle">
                Connect With Us & We Will Engage Your Business With The Online World Seamlessly With Unique Digital
                Craftsmanship.
            </p>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">🚀</div>
                    <h3 class="service-title">Digital Marketing</h3>
                    <p class="service-description">Strategic campaigns that drive traffic, engagement, and conversions
                        for your business.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">💻</div>
                    <h3 class="service-title">Web Development</h3>
                    <p class="service-description">Custom websites that are responsive, fast, and designed to convert
                        visitors into customers.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">📱</div>
                    <h3 class="service-title">Social Media Management</h3>
                    <p class="service-description">Engaging content and community management to build your brand
                        presence online.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">📈</div>
                    <h3 class="service-title">SEO Optimization</h3>
                    <p class="service-description">Improve your search rankings and drive organic traffic to your
                        website.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">✍️</div>
                    <h3 class="service-title">Content Creation</h3>
                    <p class="service-description">High-quality content that resonates with your audience and drives
                        engagement.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">📊</div>
                    <h3 class="service-title">Analytics & Reporting</h3>
                    <p class="service-description">Data-driven insights to optimize your digital marketing strategy.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="section testimonials" id="testimonials">
        <div class="container">
            <h2 class="section-title">What Our Clients Say</h2>
            <p class="section-subtitle">
                Hear from businesses that have transformed their digital presence with Digi Synapse
            </p>

            <div class="testimonials-slider">
                <div class="testimonials-container" id="testimonialsContainer">

                    <!-- Dental Practice 1 -->
                    <div class="testimonial-slide">
                        <div class="testimonial-stars">
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                        </div>
                        <p class="testimonial-text">
                            "Digi Synapse completely transformed our online presence. Our patient bookings increased by
                            150% within just 3 months. Their social media strategy perfectly captured our practice's
                            caring approach."
                        </p>
                        <div class="testimonial-author">Dr. Srikanth</div>
                        <div class="testimonial-business">Sri Lakshmi Dental Clinic And Implant Center</div>
                    </div>

                    <!-- Dental Practice 2 -->
                    <div class="testimonial-slide">
                        <div class="testimonial-stars">
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <!-- <span class="star">★</span> -->
                        </div>
                        <p class="testimonial-text">
                            "The team at Digi Synapse understood our dental practice's unique needs. Their content
                            creation and SEO work helped us rank #1 for 'dentist near me' in our area. Highly
                            recommended!"
                        </p>
                        <div class="testimonial-author">Dr. Rohan Kapoor</div>
                        <div class="testimonial-business">Family Dental Care Center</div>
                    </div>

                    <!-- Dental Practice 3 -->
                    <div class="testimonial-slide">
                        <div class="testimonial-stars">
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <!-- <span class="star">★</span> -->
                        </div>
                        <p class="testimonial-text">
                            "Professional, creative, and results-driven. Digi Synapse helped our orthodontic practice
                            reach younger patients through Instagram and TikTok. Our consultation requests doubled!"
                        </p>
                        <div class="testimonial-author">Dr. Kavya Nair</div>
                        <div class="testimonial-business">Perfect Smile Orthodontics</div>
                    </div>

                    <!-- Salon 1 -->
                    <div class="testimonial-slide">
                        <div class="testimonial-stars">
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                        </div>
                        <p class="testimonial-text">
                            "Amazing work! Digi Synapse created stunning visual content that showcases our hair
                            transformations beautifully. Our Instagram followers grew from 500 to 15K in 6 months!"
                        </p>
                        <div class="testimonial-author">Shreya Gupta</div>
                        <div class="testimonial-business">Glamour Hair Studio</div>
                    </div>

                    <!-- Salon 2 -->
                    <div class="testimonial-slide">
                        <div class="testimonial-stars">
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                        </div>
                        <p class="testimonial-text">
                            "The digital marketing strategy from Digi Synapse brought our beauty salon into the modern
                            age. Online bookings increased by 200% and we're now fully booked weeks in advance!"
                        </p>
                        <div class="testimonial-author">Pooja Iyer</div>
                        <div class="testimonial-business">Luxe Beauty Lounge</div>
                    </div>

                    <!-- Gym -->
                    <div class="testimonial-slide">
                        <div class="testimonial-stars">
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                        </div>
                        <p class="testimonial-text">
                            "Digi Synapse helped us build a strong fitness community online. Their engaging workout
                            videos and motivational content increased our membership by 180%. They truly understand the
                            fitness industry!"
                        </p>
                        <div class="testimonial-author">Arjun Verma</div>
                        <div class="testimonial-business">PowerFit Gym & Training</div>
                    </div>

                </div>

                <div class="slider-nav">
                    <button class="slider-btn" id="prevBtn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </button>

                    <div class="slider-dots" id="sliderDots">
                        <span class="dot active" data-slide="0"></span>
                        <span class="dot" data-slide="1"></span>
                        <span class="dot" data-slide="2"></span>
                        <span class="dot" data-slide="3"></span>
                        <span class="dot" data-slide="4"></span>
                        <span class="dot" data-slide="5"></span>
                    </div>

                    <button class="slider-btn" id="nextBtn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </button>
                </div>
            </div>

        </div>
    </section>


    <!-- Pricing Section -->
    <section class="section pricing" id="pricing">
        <div class="container">
            <h2 class="section-title">Our Packages</h2>
            <div class="pricing-grid">
                <div class="pricing-card">
                    <div class="pricing-header">
                        <h3 class="pricing-title">Gold Clientel</h3>
                    </div>
                    <div class="pricing-content">
                        <p class="pricing-price">₹1999</p>
                        <ul class="pricing-features">
                            <li class="feature-item">
                                <span class="feature-icon">✓</span>
                                <span>Reels: 3 (text based 2 & image based 1)</span>
                            </li>
                            <li class="feature-item">
                                <span class="feature-icon">✓</span>
                                <span>Custom Posters: 2</span>
                            </li>
                            <li class="feature-item">
                                <span class="feature-icon">✓</span>
                                <span>AI Posters: 5</span>
                            </li>
                            <li class="feature-item">
                                <span class="feature-icon">✓</span>
                                <span>Ads: 2 (Uses client's payment)</span>
                            </li>
                            <li class="feature-item">
                                <span class="feature-icon">✓</span>
                                <span>Industry Research: Basic</span>
                            </li>
                            <li class="feature-item">
                                <span class="feature-icon">✓</span>
                                <span>Content Research: Basic</span>
                            </li>
                            <li class="feature-item">
                                <span class="feature-icon">✓</span>
                                <span>Stories: 5</span>
                            </li>
                            <li class="feature-item">
                                <span class="feature-icon">✓</span>
                                <span>Highlights: 5</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="pricing-card popular">
                    <div class="popular-badge">POPULAR</div>
                    <div class="pricing-header">
                        <h3 class="pricing-title">Platinum Clientel</h3>
                    </div>
                    <div class="pricing-content">
                        <p class="pricing-price">₹2999</p>
                        <ul class="pricing-features">
                            <li class="feature-item">
                                <span class="feature-icon">✓</span>
                                <span>Reels: 5 (text based 3 & image based 2)</span>
                            </li>
                            <li class="feature-item">
                                <span class="feature-icon">✓</span>
                                <span>Custom Posters: 5</span>
                            </li>
                            <li class="feature-item">
                                <span class="feature-icon">✓</span>
                                <span>AI Posters: 10</span>
                            </li>
                            <li class="feature-item">
                                <span class="feature-icon">✓</span>
                                <span>Ads: 3 (Uses client's payment)</span>
                            </li>
                            <li class="feature-item">
                                <span class="feature-icon">✓</span>
                                <span>Industry Research: Advance</span>
                            </li>
                            <li class="feature-item">
                                <span class="feature-icon">✓</span>
                                <span>Content Research: Advance</span>
                            </li>
                            <li class="feature-item">
                                <span class="feature-icon">✓</span>
                                <span>Stories: 10</span>
                            </li>
                            <li class="feature-item">
                                <span class="feature-icon">✓</span>
                                <span>Highlights: 10</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="pricing-card">
                    <div class="pricing-header">
                        <h3 class="pricing-title">Jade Clientel</h3>
                    </div>
                    <div class="pricing-content">
                        <p class="pricing-price">₹4999</p>
                        <ul class="pricing-features">
                            <li class="feature-item">
                                <span class="feature-icon">✓</span>
                                <span>Reels: 8 (text based 4 & image based 4)</span>
                            </li>
                            <li class="feature-item">
                                <span class="feature-icon">✓</span>
                                <span>Custom Posters: 10</span>
                            </li>
                            <li class="feature-item">
                                <span class="feature-icon">✓</span>
                                <span>AI Posters: 15</span>
                            </li>
                            <li class="feature-item">
                                <span class="feature-icon">✓</span>
                                <span>Ads: 5 (Uses client's payment)</span>
                            </li>
                            <li class="feature-item">
                                <span class="feature-icon">✓</span>
                                <span>Industry Research: Full</span>
                            </li>
                            <li class="feature-item">
                                <span class="feature-icon">✓</span>
                                <span>Content Research: Full</span>
                            </li>
                            <li class="feature-item">
                                <span class="feature-icon">✓</span>
                                <span>Stories: 15</span>
                            </li>
                            <li class="feature-item">
                                <span class="feature-icon">✓</span>
                                <span>Highlights: 15</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div>
                    <h3 class="footer-title">About</h3>
                    <ul>
                        <li>About Maximilian Globus</li>
                        <li>View Our Services</li>
                        <li>Contact Information</li>
                    </ul>
                </div>
                <div>
                    <h3 class="footer-title">Services</h3>
                    <ul>
                        <li>Human Resources Solutions</li>
                        <li>E-Learning Platform</li>
                        <li>Digital Services</li>
                        <li>Web Services & Development</li>
                    </ul>
                </div>
                <div>
                    <h3 class="footer-title">Legal</h3>
                    <ul>
                        <li>Terms & Conditions</li>
                        <li>Privacy Policy</li>
                        <li>Cookie Policy</li>
                    </ul>
                </div>
                <div>
                    <h3 class="footer-title">Connect With Us</h3>
                    <ul>
                        <li>LinkedIn</li>
                        <li>Twitter</li>
                        <li>Facebook</li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy;
                    <script>document.write(new Date().getFullYear())</script> Digi Synapse. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile Menu Toggle
        const menuBtn = document.getElementById('menuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        const header = document.getElementById('header');

        menuBtn.addEventListener('click', function () {
            mobileMenu.classList.toggle('active');

            // Change menu icon
            if (mobileMenu.classList.contains('active')) {
                menuBtn.innerHTML = `
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                `;
            } else {
                menuBtn.innerHTML = `
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                `;
            }
        });

        function closeMobileMenu() {
            mobileMenu.classList.remove('active');
            menuBtn.innerHTML = `
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
            `;
        }

        // Navbar Background Change on Scroll
        window.addEventListener('scroll', function () {
            if (window.scrollY > 10) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Testimonials Slider
        const testimonialsContainer = document.getElementById('testimonialsContainer');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const dots = document.querySelectorAll('.dot');

        let currentSlide = 0;
        const totalSlides = 6;

        function updateSlider() {
            const translateX = -currentSlide * 100;
            testimonialsContainer.style.transform = `translateX(${translateX}%)`;

            // Update dots
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === currentSlide);
            });

            // Update button states
            prevBtn.disabled = currentSlide === 0;
            nextBtn.disabled = currentSlide === totalSlides - 1;
        }

        function nextSlide() {
            if (currentSlide < totalSlides - 1) {
                currentSlide++;
                updateSlider();
            }
        }

        function prevSlide() {
            if (currentSlide > 0) {
                currentSlide--;
                updateSlider();
            }
        }

        function goToSlide(slideIndex) {
            currentSlide = slideIndex;
            updateSlider();
        }

        // Event listeners
        nextBtn.addEventListener('click', nextSlide);
        prevBtn.addEventListener('click', prevSlide);

        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => goToSlide(index));
        });

        // Auto-play functionality
        let autoPlayInterval = setInterval(nextSlide, 5000);

        // Pause auto-play on hover
        const slider = document.querySelector('.testimonials-slider');
        slider.addEventListener('mouseenter', () => {
            clearInterval(autoPlayInterval);
        });

        slider.addEventListener('mouseleave', () => {
            autoPlayInterval = setInterval(nextSlide, 5000);
        });

        // Reset to first slide when reaching the end
        function resetSlider() {
            if (currentSlide === totalSlides - 1) {
                setTimeout(() => {
                    currentSlide = 0;
                    updateSlider();
                }, 2000);
            }
        }

        // Initialize slider
        updateSlider();

        // Smooth-click handler: capture clicks on any in-page anchor and perform smooth scroll with header offset
        (function () {
            const headerEl = document.getElementById('header');
            function headerHeight() { return headerEl ? headerEl.offsetHeight : 0; }

            // Smooth scroll animator (custom duration)
            let _scrollAnimId = null;
            function animateScrollTo(targetY, duration = 800) {
                if (_scrollAnimId) cancelAnimationFrame(_scrollAnimId);
                const startY = window.scrollY || window.pageYOffset;
                const startTime = performance.now();
                const distance = targetY - startY;

                function easeInOutQuad(t) { return t < 0.5 ? 2*t*t : -1 + (4 - 2*t)*t; }

                function step(now) {
                    const elapsed = now - startTime;
                    const progress = Math.min(elapsed / duration, 1);
                    const eased = easeInOutQuad(progress);
                    window.scrollTo(0, Math.round(startY + distance * eased));
                    if (progress < 1) {
                        _scrollAnimId = requestAnimationFrame(step);
                    } else {
                        _scrollAnimId = null;
                    }
                }

                _scrollAnimId = requestAnimationFrame(step);
            }

            // Use a capturing listener on document so we intercept before the browser's default jump
            document.addEventListener('click', function (e) {
                const a = e.target.closest && e.target.closest('a');
                if (!a) return;
                const href = a.getAttribute('href');
                if (!href || href.charAt(0) !== '#') return;

                const id = href.slice(1);
                if (!id) return;
                const target = document.getElementById(id);
                if (!target) return;

                e.preventDefault();

                const top = target.getBoundingClientRect().top + window.scrollY - headerHeight() - 8;
                // use custom animator with a slightly faster duration
                animateScrollTo(top, 600);

                // close mobile menu if open
                try { if (mobileMenu && mobileMenu.classList.contains('active')) closeMobileMenu(); } catch (err) {}

                // update URL hash after animation completes (slightly longer than duration)
                setTimeout(() => {
                    if (history.replaceState) history.replaceState(null, '', '#' + id);
                }, 700);
            }, true /* useCapture */);
        })();

        // Decorative ball animation removed

        // Active nav link while scrolling (IntersectionObserver)
        (function () {
            const desktopLinks = Array.from(document.querySelectorAll('.nav-desktop a.nav-link'));
            const mobileLinks = Array.from(document.querySelectorAll('.mobile-menu a'));
            const allLinks = desktopLinks.concat(mobileLinks);
            const sections = Array.from(document.querySelectorAll('section[id]'));

            if (!sections.length) return;

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const id = entry.target.id;

                        // remove active from all
                        allLinks.forEach(l => l.classList.remove('active'));

                        // add active to matching desktop & mobile links
                        const d = document.querySelector(`.nav-desktop a[href="#${id}"]`);
                        const m = document.querySelector(`.mobile-menu a[href="#${id}"]`);
                        if (d) d.classList.add('active');
                        if (m) m.classList.add('active');
                    }
                });
            }, { threshold: 0.6 });

            sections.forEach(s => observer.observe(s));
        })();

        // Trigger hero entrance animations on load
        (function () {
            document.addEventListener('DOMContentLoaded', function () {
                const hc = document.querySelector('.hero-content');
                if (!hc) return;
                // small delay so the page looks polished
                setTimeout(() => hc.classList.add('animate'), 180);
            });
        })();

        // Typing animation removed — hero phrase shown statically
    </script>
</body>

</html>