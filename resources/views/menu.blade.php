<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Menu | EatWithUmmi</title>

    <style>

        :root {
            --pink: #E14A8D;
            --light-pink: #FFF3F8;
            --black: #111111;
            --grey: #666666;
            --white: #ffffff;
            --border: #eeeeee;
        }


        /* =========================
           RESET
        ========================= */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: var(--white);
            color: var(--black);
            overflow-x: hidden;
        }

        a {
            transition: all 0.3s ease;
        }


        /* =========================
           NAVBAR
        ========================= */

        .navbar {
            width: 100%;
            padding: 22px 6%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: var(--white);
            position: relative;
            z-index: 10;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo img {
            width: 125px;
            display: block;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 30px;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--black);
            font-size: 13px;
            font-weight: 600;
            position: relative;
            transition: color 0.3s ease;
        }

        .nav-links a:not(.nav-order)::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -6px;
            width: 0;
            height: 1.5px;
            background: var(--pink);
            transition: width 0.3s ease;
        }

        .nav-links a:not(.nav-order):hover {
            color: var(--pink);
        }

        .nav-links a:not(.nav-order):hover::after {
            width: 100%;
        }

        .nav-order {
            background: var(--pink);
            color: var(--white) !important;
            padding: 11px 18px;
            border-radius: 30px;
            transition:
                transform 0.3s ease,
                background 0.3s ease;
        }

        .nav-order:hover {
            background: var(--black);
            transform: translateY(-2px);
        }


        /* =========================
           MENU HERO
        ========================= */

        .menu-hero {
            min-height: 520px;
            padding: 100px 6%;
            background: var(--light-pink);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .menu-hero::before {
            content: "UMMI";
            position: absolute;
            right: -40px;
            bottom: -80px;
            font-size: 220px;
            font-weight: 900;
            letter-spacing: -12px;
            color: rgba(225, 74, 141, 0.06);
            pointer-events: none;
        }

        .menu-hero::after {
            content: "GOOD FOOD";
            position: absolute;
            left: -45px;
            top: 70px;
            font-size: 90px;
            font-weight: 900;
            letter-spacing: -6px;
            color: rgba(225, 74, 141, 0.045);
            transform: rotate(-90deg);
            pointer-events: none;
        }

        .eyebrow {
            font-size: 12px;
            font-weight: 800;
            letter-spacing: 2px;
            color: var(--pink);
            margin-bottom: 18px;
        }

        .menu-hero .eyebrow {
            position: relative;
            z-index: 1;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 2.5px;
            color: var(--pink);
            margin-bottom: 22px;
            animation: fadeUp 0.8s ease forwards;
        }

        .menu-hero h1 {
            position: relative;
            z-index: 1;
            font-size: clamp(60px, 9vw, 125px);
            line-height: 0.86;
            letter-spacing: -6px;
            margin-bottom: 30px;
            animation: fadeUp 0.9s ease 0.1s forwards;
            opacity: 0;
        }

        .menu-hero h1 span {
            color: var(--pink);
        }

        .menu-hero > p:last-child {
            position: relative;
            z-index: 1;
            max-width: 500px;
            margin: 0 auto;
            color: var(--grey);
            font-size: 15px;
            line-height: 1.7;
            animation: fadeUp 0.9s ease 0.2s forwards;
            opacity: 0;
        }


        /* =========================
           MENU CONTENT
        ========================= */

        .menu-section {
            padding: 100px 6%;
        }

        .menu-section:nth-child(even) {
            background: #fafafa;
        }

        .section-heading {
            display: flex;
            justify-content: space-between;
            align-items: end;
            gap: 30px;
            margin-bottom: 50px;
        }

        .section-heading h2 {
            font-size: clamp(38px, 5vw, 65px);
            line-height: 0.95;
            letter-spacing: -3px;
        }

        .section-heading h2 span {
            color: var(--pink);
        }

        .section-heading p {
            max-width: 360px;
            color: var(--grey);
            line-height: 1.6;
            font-size: 14px;
        }


                /* =========================
        MENU GRID
        ========================= */

        .menu-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 30px;
        }

        .menu-card {
            background: var(--white);
            border: none;
            border-radius: 28px;
            overflow: hidden;
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }

        .menu-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 45px rgba(0, 0, 0, 0.08);
        }


        /* =========================
        MENU IMAGES
        ========================= */

        .menu-card-image {
            width: 100%;
            height: 320px;
            overflow: hidden;
            background: #f3f3f3;
        }

        .menu-card-image img {
            width: 100%;
            height: 320px;
            display: block;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .menu-card:hover .menu-card-image img {
            transform: scale(1.04);
        }


        /* =========================
           MENU CONTENT
        ========================= */

        .menu-card-content {
            padding: 24px 26px 27px;
        }
        .menu-card-top {
            display: flex;
            justify-content: space-between;
            align-items: start;
            gap: 20px;
            margin-bottom: 22px;
        }


        /* HIDE FOOD NUMBERS */

        .menu-number {
            display: none;
        }


        /* FOOD TITLES */

        .menu-card h3 {
            font-size: 24px;
            line-height: 1.15;
            color: var(--black);
        }

        .menu-price {
            font-size: 15px;
            font-weight: 800;
            white-space: nowrap;
        }


        /* =========================
           PRICE OPTIONS
        ========================= */

        .price-list {
            border-top: 1px solid var(--border);
        }

        .price-row {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            padding: 14px 0;
            border-bottom: 1px solid var(--border);
            font-size: 14px;
        }

        .price-row span:first-child {
            color: var(--grey);
        }

        .price-row span:last-child {
            font-weight: 700;
            white-space: nowrap;
        }

        .menu-note {
            margin-top: 18px;
            color: var(--grey);
            font-size: 13px;
            line-height: 1.6;
        }


        /* =========================
           IMAGELESS CARDS
        ========================= */

        .menu-card.no-image {
            min-height: 310px;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
        }


        /* =========================
           EXTRAS
        ========================= */

        .extras-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1px;
            background: var(--border);
            border: 1px solid var(--border);
        }

        .extra-item {
            background: var(--white);
            padding: 28px;
            display: flex;
            justify-content: space-between;
            gap: 20px;

            transition:
                transform 0.3s ease,
                background 0.3s ease,
                color 0.3s ease;
        }

        .extra-item:hover {
            transform: translateY(-4px);
            background: var(--light-pink);
        }

        .extra-item span:first-child {
            font-size: 15px;
        }

        .extra-item span:last-child {
            font-weight: 800;
            white-space: nowrap;
        }


        /* =========================
           ORDER CTA
        ========================= */

        .menu-cta {
            padding: 110px 6%;
            background: var(--black);
            color: var(--white);
            text-align: center;
        }

        .menu-cta .eyebrow {
            color: var(--pink);
        }

        .menu-cta h2 {
            font-size: clamp(45px, 7vw, 90px);
            line-height: 0.9;
            letter-spacing: -4px;
            margin-bottom: 25px;
        }

        .menu-cta h2 span {
            color: var(--pink);
        }

        .menu-cta p {
            max-width: 500px;
            margin: 0 auto 35px;
            color: #cccccc;
            line-height: 1.7;
            font-size: 15px;
        }

        .cta-btn {
            display: inline-block;
            padding: 16px 25px;
            background: var(--pink);
            color: var(--white);
            text-decoration: none;
            font-size: 14px;
            font-weight: 800;

            transition:
                transform 0.3s ease,
                background 0.3s ease;
        }

        .cta-btn:hover {
            transform: translateY(-3px);
            background: #c83b79;
        }


        /* =========================
           FOOTER
        ========================= */

        .footer {
            background: var(--white);
            padding: 65px 6% 25px;
        }

        .footer-top {
            display: grid;
            grid-template-columns: 1.3fr 1fr 1fr;
            gap: 60px;
            padding-bottom: 55px;
        }

        .footer-logo img {
            width: 125px;
            display: block;
            margin-bottom: 20px;
        }

        .footer-brand p {
            max-width: 280px;
            color: var(--grey);
            font-size: 14px;
            line-height: 1.7;
            margin-bottom: 14px;
        }

        .footer-brand span {
            font-size: 13px;
            font-weight: 700;
        }

        .footer-column {
            display: flex;
            flex-direction: column;
            gap: 14px;
        }

        .footer-column h4 {
            font-size: 13px;
            margin-bottom: 8px;
        }

        .footer-column a {
            color: var(--grey);
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s ease;
        }

        .footer-column a:hover {
            color: var(--pink);
        }

        .footer-order p {
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 2px;
            color: var(--pink);
            margin-bottom: 12px;
        }

        .footer-order h3 {
            font-size: 35px;
            line-height: 0.95;
            letter-spacing: -2px;
            margin-bottom: 25px;
        }

        .footer-order h3 span {
            color: var(--pink);
        }

        .footer-order-btn {
            display: inline-block;
            background: var(--pink);
            color: var(--white);
            padding: 14px 20px;
            font-size: 13px;
            font-weight: 700;
            text-decoration: none;

            transition:
                transform 0.3s ease,
                background 0.3s ease;
        }

        .footer-order-btn:hover {
            transform: translateY(-3px);
            background: var(--black);
        }

        .footer-bottom {
            border-top: 1px solid var(--border);
            padding-top: 22px;
            display: flex;
            justify-content: space-between;
            gap: 20px;
            color: #888888;
            font-size: 12px;
        }


        /* =========================
           HERO ANIMATIONS
        ========================= */

        @keyframes fadeUp {

            from {
                opacity: 0;
                transform: translateY(35px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }

        }

        @keyframes fadeIn {

            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }

        }


        /* =========================
           SCROLL REVEAL
        ========================= */

        .animate-on-scroll {
            opacity: 0;
            transform: translateY(35px);

            transition:
                opacity 0.8s ease var(--reveal-delay, 0s),
                transform 0.8s ease var(--reveal-delay, 0s);
        }

        .animate-on-scroll.is-visible {
            opacity: 1;
            transform: translateY(0);
        }


        /* =========================
           MENU CARD STAGGER
        ========================= */

        .menu-card:nth-child(1) {
            --reveal-delay: 0.05s;
        }

        .menu-card:nth-child(2) {
            --reveal-delay: 0.12s;
        }

        .menu-card:nth-child(3) {
            --reveal-delay: 0.19s;
        }

        .menu-card:nth-child(4) {
            --reveal-delay: 0.26s;
        }

        .menu-card:nth-child(5) {
            --reveal-delay: 0.33s;
        }


        /* =========================
           EXTRAS STAGGER
        ========================= */

        .extra-item:nth-child(1) {
            --reveal-delay: 0.05s;
        }

        .extra-item:nth-child(2) {
            --reveal-delay: 0.10s;
        }

        .extra-item:nth-child(3) {
            --reveal-delay: 0.15s;
        }

        .extra-item:nth-child(4) {
            --reveal-delay: 0.20s;
        }

        .extra-item:nth-child(5) {
            --reveal-delay: 0.25s;
        }

        .extra-item:nth-child(6) {
            --reveal-delay: 0.30s;
        }

        .extra-item:nth-child(7) {
            --reveal-delay: 0.35s;
        }


        /* =========================
           BUTTON PERFORMANCE
        ========================= */

        .nav-order,
        .cta-btn,
        .footer-order-btn {
            will-change: transform;
        }


        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 800px) {

            .nav-links {
                gap: 15px;
            }

            .nav-links a:not(.nav-order) {
                display: none;
            }
            .nav-links a.active {
                color: var(--pink);
            }

            .nav-links a.active::after {
                width: 100%;
            }


            /* MENU HERO */

            .menu-hero {
                min-height: 450px;
                padding: 75px 6%;
            }

            .menu-hero::before {
                font-size: 150px;
                right: -35px;
                bottom: -45px;
            }

            .menu-hero::after {
                font-size: 60px;
                left: -35px;
                top: 70px;
            }

            .menu-hero h1 {
                font-size: 65px;
                letter-spacing: -4px;
            }


            /* MENU */

            .menu-section {
                padding: 75px 6%;
            }

            .section-heading {
                display: block;
            }

            .section-heading p {
                margin-top: 20px;
            }

            .menu-grid {
                grid-template-columns: 1fr;
            }

            .extras-grid {
                grid-template-columns: 1fr;
            }


            /* FOOTER */

            .footer-top {
                grid-template-columns: 1fr 1fr;
            }

            .footer-order {
                grid-column: 1 / -1;
            }

        }


        @media (max-width: 500px) {

            .navbar {
                padding: 20px 5%;
            }

            .logo img {
                width: 110px;
            }

            .nav-order {
                padding: 10px 13px !important;
                font-size: 12px !important;
            }


            /* MENU HERO */

            .menu-hero {
                min-height: 420px;
                padding: 65px 5%;
            }

            .menu-hero::before {
                font-size: 110px;
                right: -25px;
                bottom: -30px;
            }

            .menu-hero::after {
                display: none;
            }

            .menu-hero h1 {
                font-size: 55px;
                letter-spacing: -3px;
            }


            /* MENU */

            .menu-section {
                padding: 60px 5%;
            }

            .section-heading h2 {
                font-size: 45px;
            }

            .menu-card-image {
                height: 260px;
            }

            .menu-card-content {
                padding: 22px;
            }

            .menu-card-top {
                display: block;
            }

            .menu-price {
                display: block;
                margin-top: 8px;
            }

            .menu-card h3 {
                font-size: 24px;
            }


            /* EXTRAS */

            .extra-item {
                padding: 22px;
            }


            /* CTA */

            .menu-cta {
                padding: 80px 5%;
            }

            .menu-cta h2 {
                font-size: 55px;
            }


            /* FOOTER */

            .footer {
                padding: 55px 5% 20px;
            }

            .footer-top {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .footer-order {
                grid-column: auto;
            }

            .footer-bottom {
                display: block;
            }

            .footer-bottom p:last-child {
                margin-top: 8px;
            }

        }


        /* =========================
           REDUCE MOTION
        ========================= */

        @media (prefers-reduced-motion: reduce) {

            *,
            *::before,
            *::after {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
                scroll-behavior: auto !important;
            }

            .animate-on-scroll {
                opacity: 1;
                transform: none;
            }
            @media (max-width: 800px) {
    .menu-grid {
        grid-template-columns: 1fr;
        gap: 22px;
    }

    .menu-card-image {
        height: 340px;
    }

    .menu-card-image img {
        height: 340px;
    }
}

@media (max-width: 500px) {
    .menu-card-image {
        height: 260px;
    }

    .menu-card-image img {
        height: 260px;
    }

    .menu-card-content {
        padding: 20px;
    }

    .menu-card h3 {
        font-size: 20px;
    }
}

        }

    </style>

</head>


<body>


    <!-- =========================
     NAVBAR
========================= -->

<nav class="navbar">

    <a href="/" class="logo">

        <img
            src="{{ asset('images/logo.png') }}"
            alt="EatWithUmmi"
        >

    </a>


    <div class="nav-links">

        <a href="/">
            Home
        </a>

        <a href="/?#about">
            About
        </a>

        <a href="/menu" class="active">
            Menu
        </a>

        <a href="/?#delivery">
            Delivery
        </a>

        <a href="/?#contact">
            Contact
        </a>

        <a
            href="https://wa.me/2349071833146"
            class="nav-order"
        >
            Order Now
        </a>

    </div>

</nav>



    <!-- =========================
         MENU HERO
    ========================= -->

    <section class="menu-hero">

        <p class="eyebrow">
            MENU
        </p>

        <h1>
            Good food.<br>
            <span>Great choices.</span>
        </h1>

        <p>
            Homemade meals prepared fresh with love.
            Choose what you're craving and send us your pre-order.
        </p>

    </section>



    <!-- =========================
         RICE
    ========================= -->

    <section class="menu-section">

        <div class="section-heading">

            <div>

                <p class="eyebrow">
                    RICE
                </p>

                <h2>
                    Rice,<br>
                    <span>done right.</span>
                </h2>

            </div>

            <p>
                From classic Jollof to rich native flavours,
                every plate is prepared fresh and made to order.
            </p>

        </div>


        <div class="menu-grid">


            <!-- JOLLOF RICE -->

            <div class="menu-card no-image">

                <div class="menu-card-content">

                    <div class="menu-card-top">

                        <div>

                            <p class="menu-number">
                                01
                            </p>

                            <h3>
                                Jollof Rice
                            </h3>

                        </div>

                    </div>


                    <div class="price-list">

                        <div class="price-row">

                            <span>
                                Chicken Laps
                            </span>

                            <span>
                                ₦7,000
                            </span>

                        </div>


                        <div class="price-row">

                            <span>
                                Turkey
                            </span>

                            <span>
                                ₦8,500
                            </span>

                        </div>

                    </div>


                    <p class="menu-note">
                        Smoky, rich and freshly prepared.
                    </p>

                </div>

            </div>



            <!-- BASMATI FRIED RICE -->

            <div class="menu-card">

                <div class="menu-card-image">

                    <img
                        src="{{ asset('images/basmatifriedricenew.png') }}" 
                        alt="Basmati Fried Rice"
                    >

                </div>


                <div class="menu-card-content">
 
                    <div class="menu-card-top">

                        <div>

                            <p class="menu-number">
                                02
                            </p>

                            <h3>
                                Basmati Fried Rice
                            </h3>

                        </div>

                    </div>


                    <div class="price-list">

                        <div class="price-row">

                            <span>
                                Chicken Laps
                            </span>

                            <span>
                                ₦9,000
                            </span>

                        </div>


                        <div class="price-row">

                            <span>
                                Turkey
                            </span>

                            <span>
                                ₦10,500
                            </span>

                        </div>

                    </div>

                </div>

            </div>



            <!-- BASMATI NATIVE RICE -->

            <div class="menu-card no-image">

                <div class="menu-card-content">

                    <div class="menu-card-top">

                        <div>

                            <p class="menu-number">
                                03
                            </p>

                            <h3>
                                Basmati Native Rice
                            </h3>

                        </div>

                    </div>


                    <div class="price-list">

                        <div class="price-row">

                            <span>
                                Chicken Laps
                            </span>

                            <span>
                                ₦9,000
                            </span>

                        </div>


                        <div class="price-row">

                            <span>
                                Hake Fish
                            </span>

                            <span>
                                ₦8,000
                            </span>

                        </div>


                        <div class="price-row">

                            <span>
                                Turkey
                            </span>

                            <span>
                                ₦10,500
                            </span>

                        </div>

                    </div>


                    <p class="menu-note">
                        Rich native flavours, prepared fresh.
                    </p>

                </div>

            </div>



            <!-- ASUN RICE -->

            <div class="menu-card">

                <div class="menu-card-image">

                    <img
                        src="{{ asset('images/asunricenew.jpeg') }}"
                        alt="Asun Rice"
                    >

                </div>


                <div class="menu-card-content">

                    <div class="menu-card-top">

                        <div>

                            <p class="menu-number">
                                04
                            </p>

                            <h3>
                                Asun Rice
                            </h3>

                        </div>

                        <span class="menu-price">
                            ₦10,000
                        </span>

                    </div>


                    <p class="menu-note">
                        Comes with 2 eggs and Asun.
                    </p>

                </div>

            </div>



            <!-- OFADA RICE -->

            <div class="menu-card no-image">

                <div class="menu-card-content">

                    <div class="menu-card-top">

                        <div>

                            <p class="menu-number">
                                05
                            </p>

                            <h3>
                                Ofada Rice
                            </h3>

                        </div>

                    </div>


                    <div class="price-list">

                        <div class="price-row">

                            <span>
                                Plain
                            </span>

                            <span>
                                ₦6,500
                            </span>

                        </div>


                        <div class="price-row">

                            <span>
                                Chicken Laps
                            </span>

                            <span>
                                ₦8,500
                            </span>

                        </div>


                        <div class="price-row">

                            <span>
                                Turkey
                            </span>

                            <span>
                                ₦10,000
                            </span>

                        </div>

                    </div>


                    <p class="menu-note">
                        Comes with egg, ponmo and fish/fish chunks.
                    </p>

                </div>

            </div>

        </div>

    </section>



    <!-- =========================
         PASTA
    ========================= -->

    <section class="menu-section">

        <div class="section-heading">

            <div>

                <p class="eyebrow">
                    PASTA
                </p>

                <h2>
                    Pasta with<br>
                    <span>personality.</span>
                </h2>

            </div>

            <p>
                Stir-fried, loaded and packed with flavour.
                Pick your protein and make it yours.
            </p>

        </div>


        <div class="menu-grid">


            <!-- STIR-FRY PASTA -->

            <div class="menu-card no-image">

                <div class="menu-card-content">

                    <div class="menu-card-top">

                        <div>

                            <p class="menu-number">
                                01
                            </p>

                            <h3>
                                Stir-Fry Pasta
                            </h3>

                        </div>

                    </div>


                    <div class="price-list">

                        <div class="price-row">

                            <span>
                                2 Eggs
                            </span>

                            <span>
                                ₦6,500
                            </span>

                        </div>


                        <div class="price-row">

                            <span>
                                Chicken Laps
                            </span>

                            <span>
                                ₦8,000
                            </span>

                        </div>


                        <div class="price-row">

                            <span>
                                Turkey
                            </span>

                            <span>
                                ₦9,500
                            </span>

                        </div>

                    </div>

                </div>

            </div>



            <!-- NATIVE SPAGHETTI -->

            <div class="menu-card">

                <div class="menu-card-image">

                    <img
                        src="{{ asset('images/nativespagnew.jpeg') }}"
                        alt="Native Spaghetti"
                    >

                </div>


                <div class="menu-card-content">

                    <div class="menu-card-top">

                        <div>

                            <p class="menu-number">
                                02
                            </p>

                            <h3>
                                Native Spaghetti
                            </h3>

                        </div>

                    </div>


                    <div class="price-list">

                        <div class="price-row">

                            <span>
                                2 Eggs
                            </span>

                            <span>
                                ₦6,500
                            </span>

                        </div>


                        <div class="price-row">

                            <span>
                                Chicken
                            </span>

                            <span>
                                ₦8,000
                            </span>

                        </div>


                        <div class="price-row">

                            <span>
                                Turkey
                            </span>

                            <span>
                                ₦9,500
                            </span>

                        </div>

                    </div>

                </div>

            </div>



            <!-- LOADED BEEF STIR-FRY SPAGHETTI -->

            <div class="menu-card">

                <div class="menu-card-image">

                    <img
                        src="{{ asset('images/loadedstirfrynew.png') }}"
                        alt="Loaded Beef Stir-Fry Spaghetti"
                    >

                </div>


                <div class="menu-card-content">

                    <div class="menu-card-top">

                        <div>

                            <p class="menu-number">
                                03
                            </p>

                            <h3>
                                Loaded Beef Stir-Fry Spaghetti
                            </h3>

                        </div>

                        <span class="menu-price">
                            ₦10,000
                        </span>

                    </div>


                    <p class="menu-note">
                        Comes with 2 eggs.
                    </p>

                </div>

            </div>

        </div>

    </section>



    <!-- =========================
         EXTRAS
    ========================= -->

    <section class="menu-section">

        <div class="section-heading">

            <div>

                <p class="eyebrow">
                    EXTRAS
                </p>

                <h2>
                    Make your<br>
                    <span>meal yours.</span>
                </h2>

            </div>

            <p>
                Add a little something extra to your order.
            </p>

        </div>


        <div class="extras-grid">

            <div class="extra-item">
                <span>Plantain</span>
                <span>₦1,000</span>
            </div>

            <div class="extra-item">
                <span>Egg</span>
                <span>₦500</span>
            </div>

            <div class="extra-item">
                <span>Zobo</span>
                <span>₦1,200</span>
            </div>

            <div class="extra-item">
                <span>Chicken Laps</span>
                <span>₦3,500</span>
            </div>

            <div class="extra-item">
                <span>Turkey</span>
                <span>₦5,500</span>
            </div>

            <div class="extra-item">
                <span>Beef</span>
                <span>₦1,000</span>
            </div>

            <div class="extra-item">
                <span>Sausage</span>
                <span>₦500</span>
            </div>

        </div>

    </section>



    <!-- =========================
         ORDER CTA
    ========================= -->

    <section class="menu-cta">

        <p class="eyebrow">
            READY TO ORDER?
        </p>

        <h2>
            Pick your meal.<br>
            <span>We'll handle the rest.</span>
        </h2>

        <p>
            EatWithUmmi is pre-order only. Send us your order
            on WhatsApp and we'll confirm the details with you.
        </p>

        <a
            href="https://wa.me/2349071833146"
            class="cta-btn"
        >
            Order on WhatsApp →
        </a>

    </section>



    <!-- =========================
         FOOTER
    ========================= -->

    <footer class="footer">

        <div class="footer-top">


            <div class="footer-brand">

                <a href="/" class="footer-logo">

                    <img
                        src="{{ asset('images/logo.png') }}"
                        alt="EatWithUmmi"
                    >

                </a>

                <p>
                    Homemade meals made fresh with love,
                    delivered straight to you in Ibadan.
                </p>

                <span>
                    Good food. Good mood. 💗
                </span>

            </div>



            <div class="footer-links">

                <div class="footer-column">

                    <h4>
                        Explore
                    </h4>

                    <a href="/">
                        Home
                    </a>

                    <a href="/?#about">
                        About
                    </a>

                    <a href="/menu">
                        Menu
                    </a>

                    <a href="/?#delivery">
                        Delivery
                    </a>

                </div>

            </div>



            <div class="footer-order">

                <p>
                    READY TO EAT?
                </p>

                <h3>
                    Let's get<br>
                    you <span>fed.</span>
                </h3>

                <a
                    href="https://wa.me/2349071833146"
                    class="footer-order-btn"
                >
                    Order on WhatsApp →
                </a>

            </div>

        </div>



        <div class="footer-bottom">

            <p>
                © {{ date('Y') }} EatWithUmmi. All rights reserved.
            </p>

            <p>
                Ibadan, Nigeria
            </p>

        </div>

    </footer>



    <!-- =========================
         MENU SCROLL ANIMATION
    ========================= -->

    <script>

        const animatedElements = document.querySelectorAll(
            '.menu-section, ' +
            '.section-heading, ' +
            '.menu-card, ' +
            '.extra-item, ' +
            '.menu-cta'
        );


        const observer = new IntersectionObserver((entries) => {

            entries.forEach((entry) => {

                if (entry.isIntersecting) {

                    entry.target.classList.add('is-visible');

                    observer.unobserve(entry.target);

                }

            });

        }, {

            threshold: 0.15

        });


        animatedElements.forEach((element) => {

            element.classList.add('animate-on-scroll');

            observer.observe(element);

        });

    </script>


</body>

</html>