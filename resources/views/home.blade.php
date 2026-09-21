<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>EatWithUmmi | Good Food. Good Mood.</title>

    <style>

    :root {
        --pink: #E14A8D;
        --black: #111111;
        --white: #ffffff;
        --light-pink: #FFF3F8;
        --gray: #666666;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    html {
        scroll-behavior: smooth;
    }

    body {
        font-family: Arial, sans-serif;
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
        min-height: 85px;
        padding: 18px 7%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: var(--white);
        border-bottom: 1px solid #eee;
    }

    .logo {
        display: flex;
        align-items: center;
        flex-shrink: 0;
    }

    .logo img {
        width: 100px;
        height: auto;
        display: block;
    }

    nav {
        display: flex;
        align-items: center;
        gap: 30px;
    }

    nav a {
        text-decoration: none;
        color: var(--black);
        font-size: 15px;
    }

    nav a:hover {
        color: var(--pink);
    }

    nav a.active {
        color: var(--pink);
    }

    .nav-btn,
    .primary-btn {
        background: var(--pink);
        color: var(--white);
        text-decoration: none;
        padding: 13px 22px;
        border-radius: 30px;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .nav-btn {
        flex-shrink: 0;
    }

    .nav-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(225, 74, 141, 0.25);
    }


    /* =========================
       HERO
    ========================= */

    .hero {
        min-height: calc(100vh - 85px);
        padding: 70px 7%;
        background: var(--light-pink);
        display: grid;
        grid-template-columns: minmax(0, 1fr) minmax(380px, 0.9fr);
        align-items: center;
        gap: 70px;
        overflow: hidden;
    }

    .hero-content {
        width: 100%;
        max-width: 680px;
        animation: heroText 1.4s ease-out both;
    }

    .eyebrow {
        color: var(--pink);
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 2.5px;
        margin-bottom: 22px;
    }

    .hero h1 {
        font-size: clamp(60px, 7vw, 100px);
        line-height: 0.92;
        letter-spacing: -4px;
        margin-bottom: 28px;
    }

    .hero h1 span {
        color: var(--pink);
    }

    .hero-text {
        max-width: 500px;
        font-size: 18px;
        line-height: 1.7;
        color: var(--gray);
        margin-bottom: 34px;
    }

    .hero-buttons {
        display: flex;
        align-items: center;
        gap: 14px;
    }

    .primary-btn {
        padding: 15px 25px;
        box-shadow: 0 12px 30px rgba(225, 74, 141, 0.22);
    }

    .primary-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 16px 35px rgba(225, 74, 141, 0.3);
    }

    .secondary-btn {
        text-decoration: none;
        color: var(--black);
        padding: 14px 23px;
        border: 1px solid #d7d7d7;
        border-radius: 50px;
        font-weight: 600;
        background: rgba(255, 255, 255, 0.6);
    }

    .secondary-btn:hover {
        border-color: var(--pink);
        color: var(--pink);
        transform: translateY(-3px);
    }


    /* =========================
       HERO IMAGE
    ========================= */

    .hero-image {
        width: 100%;
        height: 560px;
        border-radius: 35px;
        background: #f2dce6;
        position: relative;
        overflow: hidden;
        animation: heroImage 1.7s ease-out 0.15s both;
    }

    .hero-image img {
        width: 100%;
        height: 100%;
        display: block;
        object-fit: cover;
    }

    .hero-image::after {
        content: "";
        position: absolute;
        inset: 20px;
        border: 1px solid rgba(225, 74, 141, 0.2);
        border-radius: 25px;
        pointer-events: none;
    }


    /* =========================
       ABOUT
    ========================= */

    .about {
        padding: 110px 7%;
        background: var(--white);
    }

    .about-content {
        max-width: 750px;
    }

    .about h2 {
        font-size: clamp(42px, 6vw, 72px);
        line-height: 1;
        margin: 15px 0 30px;
    }

    .about h2 span {
        color: var(--pink);
    }

    .about p:not(.eyebrow):not(.tagline) {
        font-size: 18px;
        line-height: 1.8;
        color: var(--gray);
        margin-bottom: 18px;
    }

    .tagline {
        color: var(--pink);
        font-weight: 700;
        font-size: 18px;
        margin-top: 25px;
    }


    /* =========================
       FEATURED FOOD
    ========================= */

    .featured {
        padding: 120px 7%;
        background: var(--light-pink);
    }

    .featured-header {
        display: flex;
        align-items: flex-end;
        justify-content: space-between;
        gap: 50px;
        margin-bottom: 55px;
    }

    .featured-header h2 {
        font-size: clamp(48px, 6vw, 78px);
        line-height: 0.95;
        letter-spacing: -3px;
        margin-top: 15px;
    }

    .featured-header h2 span {
        color: var(--pink);
    }

    .featured-intro {
        max-width: 350px;
        font-size: 17px;
        line-height: 1.7;
        color: var(--gray);
        margin-bottom: 5px;
    }


    /* FOOD GRID */

    .featured-grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 30px;
    }

    .featured-card {
        background: var(--white);
        border-radius: 28px;
        overflow: hidden;
        transition: transform 0.4s ease, box-shadow 0.4s ease;
    }

    .featured-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 45px rgba(0, 0, 0, 0.08);
    }


    /* FOOD IMAGES */

    .featured-image {
        width: 100%;
        height: 320px;
        overflow: hidden;
        background: #f3f3f3;
    }

    .featured-image img {
        width: 100%;
        height: 100%;
        display: block;
        object-fit: cover;
        transition: transform 0.6s ease;
    }

    .featured-card:hover .featured-image img {
        transform: scale(1.04);
    }

    .featured-large .featured-image {
        height: 430px;
    }


    /* CARD INFO */

    .featured-info {
        padding: 24px 26px 27px;
        display: flex;
        align-items: flex-end;
        justify-content: space-between;
        gap: 20px;
    }

    .featured-info p {
        color: var(--pink);
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 1.5px;
        margin-bottom: 8px;
    }

    .featured-info h3 {
        font-size: 24px;
        line-height: 1.15;
    }

    .featured-info > span {
        color: var(--pink);
        font-size: 14px;
        font-weight: 700;
        white-space: nowrap;
    }


    /* CTA */

    .featured-cta {
        display: flex;
        justify-content: center;
        margin-top: 55px;
    }

    .featured-cta .secondary-btn {
        background: var(--white);
    }


    /* =========================
       FEATURED MOBILE
    ========================= */

    @media (max-width: 900px) {

        .featured {
            padding: 90px 6%;
        }

        .featured-header {
            display: block;
            margin-bottom: 40px;
        }

        .featured-header h2 {
            font-size: clamp(46px, 11vw, 64px);
            margin-bottom: 25px;
        }

        .featured-intro {
            max-width: 450px;
            font-size: 16px;
        }

        .featured-grid {
            grid-template-columns: 1fr;
            gap: 22px;
        }

        .featured-image,
        .featured-large .featured-image {
            height: 340px;
        }
    }


    @media (max-width: 500px) {

        .featured {
            padding: 75px 6%;
        }

        .featured-header {
            margin-bottom: 32px;
        }

        .featured-header h2 {
            font-size: 48px;
            letter-spacing: -2px;
        }

        .featured-intro {
            font-size: 15px;
            line-height: 1.65;
        }

        .featured-image,
        .featured-large .featured-image {
            height: 260px;
        }

        .featured-info {
            padding: 20px;
        }

        .featured-info h3 {
            font-size: 20px;
        }

        .featured-info > span {
            font-size: 12px;
        }

        .featured-cta {
            margin-top: 40px;
        }
    }


    /* =========================
       HOW PRE-ORDER WORKS
    ========================= */

    .how-order {
        padding: 120px 7%;
        background: var(--white);
    }

    .how-order-header {
        max-width: 700px;
        margin-bottom: 70px;
    }

    .how-order-header h2 {
        font-size: clamp(48px, 6vw, 78px);
        line-height: 0.95;
        letter-spacing: -3px;
        margin: 15px 0 25px;
    }

    .how-order-header h2 span {
        color: var(--pink);
    }

    .how-order-header > p:not(.eyebrow) {
        max-width: 450px;
        font-size: 17px;
        line-height: 1.7;
        color: var(--gray);
    }


    /* STEPS */

    .steps {
        border-top: 1px solid #e5e5e5;
    }

    .step {
        display: grid;
        grid-template-columns: 100px 1fr;
        gap: 45px;
        align-items: center;
        padding: 38px 0;
        border-bottom: 1px solid #e5e5e5;
        transition: padding-left 0.35s ease;
    }

    .step:hover {
        padding-left: 12px;
    }

    .step-number {
        color: var(--pink);
        font-size: 14px;
        font-weight: 700;
        letter-spacing: 2px;
    }

    .step h3 {
        font-size: 25px;
        margin-bottom: 8px;
    }

    .step p {
        max-width: 550px;
        color: var(--gray);
        font-size: 16px;
        line-height: 1.7;
    }

    .how-order-cta {
        margin-top: 45px;
    }


    /* =========================
       HOW ORDER MOBILE
    ========================= */

    @media (max-width: 900px) {

        .how-order {
            padding: 90px 6%;
        }

        .how-order-header {
            margin-bottom: 50px;
        }

        .how-order-header h2 {
            font-size: clamp(46px, 11vw, 64px);
        }

        .step {
            grid-template-columns: 55px 1fr;
            gap: 20px;
            padding: 30px 0;
        }

        .step h3 {
            font-size: 21px;
        }

        .step p {
            font-size: 15px;
        }
    }


    @media (max-width: 500px) {

        .how-order {
            padding: 75px 6%;
        }

        .how-order-header {
            margin-bottom: 40px;
        }

        .how-order-header h2 {
            font-size: 48px;
            letter-spacing: -2px;
        }

        .how-order-header > p:not(.eyebrow) {
            font-size: 15px;
        }

        .step {
            grid-template-columns: 40px 1fr;
            gap: 14px;
            padding: 27px 0;
        }

        .step-number {
            font-size: 11px;
        }

        .step h3 {
            font-size: 19px;
            margin-bottom: 6px;
        }

        .step p {
            font-size: 14px;
            line-height: 1.6;
        }

        .how-order-cta {
            margin-top: 35px;
        }
    }


    /* =========================
       DELIVERY
    ========================= */

    .delivery {
        padding: 120px 7%;
        background: var(--black);
        color: var(--white);
    }

    .delivery-content {
        max-width: 1200px;
        margin: 0 auto;
    }

    .delivery h2 {
        font-size: clamp(48px, 6vw, 78px);
        line-height: 0.95;
        letter-spacing: -3px;
        margin: 15px 0 25px;
    }

    .delivery h2 span {
        color: var(--pink);
    }

    .delivery-intro {
        max-width: 520px;
        color: #b8b8b8;
        font-size: 17px;
        line-height: 1.7;
        margin-bottom: 70px;
    }

    .delivery-details {
        border-top: 1px solid rgba(255, 255, 255, 0.15);
    }

    .delivery-detail {
        display: grid;
        grid-template-columns: 80px 1fr;
        gap: 40px;
        align-items: center;
        padding: 32px 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.15);
        transition: padding-left 0.35s ease;
    }

    .delivery-detail:hover {
        padding-left: 12px;
    }

    .delivery-detail > span {
        color: var(--pink);
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 2px;
    }

    .delivery-detail h3 {
        font-size: 22px;
        margin-bottom: 7px;
    }

    .delivery-detail p {
        color: #a8a8a8;
        font-size: 15px;
        line-height: 1.6;
        max-width: 600px;
    }


    /* =========================
       DELIVERY MOBILE
    ========================= */

    @media (max-width: 900px) {

        .delivery {
            padding: 90px 6%;
        }

        .delivery h2 {
            font-size: clamp(46px, 11vw, 64px);
        }

        .delivery-intro {
            font-size: 16px;
            margin-bottom: 50px;
        }

        .delivery-detail {
            grid-template-columns: 55px 1fr;
            gap: 20px;
            padding: 28px 0;
        }

        .delivery-detail h3 {
            font-size: 20px;
        }
    }


    @media (max-width: 500px) {

        .delivery {
            padding: 75px 6%;
        }

        .delivery h2 {
            font-size: 48px;
            letter-spacing: -2px;
        }

        .delivery-intro {
            font-size: 15px;
            line-height: 1.65;
            margin-bottom: 40px;
        }

        .delivery-detail {
            grid-template-columns: 40px 1fr;
            gap: 14px;
            padding: 25px 0;
        }

        .delivery-detail > span {
            font-size: 11px;
        }

        .delivery-detail h3 {
            font-size: 18px;
            margin-bottom: 6px;
        }

        .delivery-detail p {
            font-size: 14px;
            line-height: 1.6;
        }
    }


    /* =========================
       FINAL CTA
    ========================= */

    .final-cta {
        padding: 140px 7%;
        background: var(--light-pink);
        text-align: center;
    }

    .final-cta-content {
        max-width: 850px;
        margin: 0 auto;
    }

    .final-cta h2 {
        font-size: clamp(58px, 8vw, 105px);
        line-height: 0.9;
        letter-spacing: -4px;
        margin: 15px 0 30px;
    }

    .final-cta h2 span {
        color: var(--pink);
    }

    .final-cta-content > p:not(.eyebrow) {
        max-width: 500px;
        margin: 0 auto 35px;
        color: var(--gray);
        font-size: 17px;
        line-height: 1.7;
    }

    .final-cta .primary-btn {
        display: inline-block;
    }


    /* =========================
       FINAL CTA MOBILE
    ========================= */

    @media (max-width: 900px) {

        .final-cta {
            padding: 100px 6%;
        }

        .final-cta h2 {
            font-size: clamp(52px, 13vw, 78px);
            letter-spacing: -3px;
        }

        .final-cta-content > p:not(.eyebrow) {
            font-size: 16px;
            max-width: 450px;
        }
    }


    @media (max-width: 500px) {

        .final-cta {
            padding: 80px 6%;
        }

        .final-cta h2 {
            font-size: 50px;
            letter-spacing: -2.5px;
        }

        .final-cta-content > p:not(.eyebrow) {
            font-size: 15px;
            line-height: 1.65;
            margin-bottom: 30px;
        }

        .final-cta .primary-btn {
            padding: 14px 20px;
            font-size: 13px;
        }
    }


    /* =========================
       ANIMATIONS
    ========================= */

    @keyframes heroText {

        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }

    }

    @keyframes heroImage {

        from {
            opacity: 0;
            transform: translateX(40px) scale(0.97);
        }

        to {
            opacity: 1;
            transform: translateX(0) scale(1);
        }

    }


    /* =========================
       TABLET / MOBILE
    ========================= */

    @media (max-width: 900px) {

        .navbar {
            min-height: 66px;
            height: 66px;
            padding: 0 6%;
        }

        .logo img {
            width: 78px;
        }

        nav {
            display: none;
        }

        .nav-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 10px 17px;
            font-size: 12px;
            line-height: 1;
            white-space: nowrap;
        }


        /* HERO */

        .hero {
            min-height: auto;
            padding: 52px 6% 50px;
            display: flex;
            flex-direction: column;
            align-items: stretch;
            gap: 34px;
        }

        .hero-content {
            width: 100%;
            max-width: 100%;
        }

        .eyebrow {
            font-size: 9px;
            letter-spacing: 1.7px;
            line-height: 1.5;
            margin-bottom: 17px;
        }

        .hero h1 {
            max-width: 600px;
            font-size: clamp(48px, 13vw, 68px);
            line-height: 0.94;
            letter-spacing: -3px;
            margin-bottom: 21px;
        }

        .hero-text {
            width: 100%;
            max-width: 440px;
            font-size: 16px;
            line-height: 1.65;
            margin-bottom: 26px;
        }

        .hero-buttons {
            width: 100%;
            display: flex;
            align-items: stretch;
            gap: 10px;
        }

        .primary-btn,
        .secondary-btn {
            flex: 1;
            width: auto;
            text-align: center;
            padding: 14px 12px;
            font-size: 13px;
            white-space: nowrap;
        }


        /* HERO IMAGE */

        .hero-image {
            height: 360px;
            border-radius: 25px;
        }

        .hero-image::after {
            inset: 14px;
            border-radius: 18px;
        }


        /* ABOUT */

        .about {
            padding: 80px 6%;
        }

        .about h2 {
            font-size: clamp(42px, 11vw, 62px);
        }

        .about p:not(.eyebrow):not(.tagline) {
            font-size: 16px;
            line-height: 1.7;
        }

    }


    /* =========================
       SMALL PHONES
    ========================= */

    @media (max-width: 500px) {

        .navbar {
            min-height: 64px;
            height: 64px;
            padding: 0 6%;
        }

        .logo img {
            width: 74px;
        }

        .nav-btn {
            padding: 9px 15px;
            font-size: 11px;
        }


        /* HERO */

        .hero {
            padding: 45px 6% 42px;
            gap: 30px;
        }

        .eyebrow {
            font-size: 8px;
            letter-spacing: 1.5px;
            margin-bottom: 16px;
        }

        .hero h1 {
            font-size: 50px;
            line-height: 0.94;
            letter-spacing: -2.5px;
            margin-bottom: 19px;
        }

        .hero-text {
            font-size: 15px;
            line-height: 1.65;
            margin-bottom: 23px;
        }

        .hero-buttons {
            gap: 8px;
        }

        .primary-btn,
        .secondary-btn {
            padding: 13px 10px;
            font-size: 12px;
        }


        /* HERO IMAGE */

        .hero-image {
            height: 300px;
            border-radius: 21px;
        }

        .hero-image::after {
            inset: 12px;
            border-radius: 16px;
        }


        /* ABOUT */

        .about {
            padding: 70px 6%;
        }

        .about h2 {
            font-size: 48px;
            letter-spacing: -2px;
        }

    }


    /* =========================
       FOOTER
    ========================= */

    .footer {
        background: #0d0d0d;
        color: var(--white);
        padding: 90px 7% 30px;
    }

    .footer-top {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1.3fr 0.8fr 1fr;
        gap: 80px;
        padding-bottom: 70px;
    }

    .footer-brand {
        max-width: 330px;
    }

    .footer-logo {
        display: inline-block;
        margin-bottom: 25px;
    }

    .footer-logo img {
        width: 150px;
        height: auto;
        display: block;
    }

    .footer-brand > p {
        color: #999;
        font-size: 15px;
        line-height: 1.7;
        margin-bottom: 18px;
    }

    .footer-brand > span {
        color: var(--pink);
        font-size: 14px;
        font-weight: 600;
    }

    .footer-links {
        display: flex;
        gap: 70px;
    }

    .footer-column {
        display: flex;
        flex-direction: column;
        gap: 14px;
    }

    .footer-column h4 {
        color: var(--white);
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        margin-bottom: 8px;
    }

    .footer-column a {
        color: #999;
        font-size: 14px;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .footer-column a:hover {
        color: var(--pink);
    }

    .footer-order {
        border-left: 1px solid rgba(255, 255, 255, 0.12);
        padding-left: 55px;
    }

    .footer-order > p {
        color: var(--pink);
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 2px;
        margin-bottom: 12px;
    }

    .footer-order h3 {
        color: var(--white);
        font-size: 44px;
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
        transition: transform 0.3s ease, background 0.3s ease;
    }

    .footer-order-btn:hover {
        background: #c83d7b;
        color: var(--white);
        transform: translateY(-3px);
    }

    .footer-bottom {
        max-width: 1200px;
        margin: 0 auto;
        padding-top: 25px;
        border-top: 1px solid rgba(255, 255, 255, 0.12);
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .footer-bottom p {
        color: #666;
        font-size: 12px;
    }


    /* =========================
       FOOTER RESPONSIVE
    ========================= */

    @media (max-width: 900px) {

        .footer {
            padding: 80px 6% 25px;
        }

        .footer-top {
            grid-template-columns: 1fr 1fr;
            gap: 60px 40px;
            padding-bottom: 55px;
        }

        .footer-brand {
            max-width: 300px;
        }

        .footer-order {
            grid-column: 1 / -1;
            border-left: none;
            border-top: 1px solid rgba(255, 255, 255, 0.12);
            padding-left: 0;
            padding-top: 40px;
        }

        .footer-order h3 {
            font-size: 40px;
        }

        .footer-bottom {
            padding-top: 22px;
        }

    }


    @media (max-width: 500px) {

        .footer {
            padding: 65px 6% 22px;
        }

        .footer-top {
            grid-template-columns: 1fr;
            gap: 45px;
            padding-bottom: 45px;
        }

        .footer-logo img {
            width: 135px;
        }

        .footer-brand > p {
            font-size: 14px;
        }

        .footer-links {
            gap: 55px;
        }

        .footer-order {
            padding-top: 35px;
        }

        .footer-order h3 {
            font-size: 38px;
        }

        .footer-order-btn {
            padding: 13px 18px;
            font-size: 12px;
        }

        .footer-bottom {
            flex-direction: column;
            align-items: flex-start;
            gap: 8px;
        }

        .footer-bottom p {
            font-size: 11px;
        }

    }


    /* =========================
       HOME SCROLL REVEAL
    ========================= */

    .home-reveal {
        opacity: 0;
        transform: translateY(35px);
        transition:
            opacity 0.8s ease var(--reveal-delay, 0s),
            transform 0.8s ease var(--reveal-delay, 0s);
    }

    .home-reveal.is-visible {
        opacity: 1;
        transform: translateY(0);
    }


    /* FEATURED FOOD STAGGER */

    .featured-card:nth-child(1) {
        --reveal-delay: 0.05s;
    }

    .featured-card:nth-child(2) {
        --reveal-delay: 0.12s;
    }

    .featured-card:nth-child(3) {
        --reveal-delay: 0.19s;
    }

    .featured-card:nth-child(4) {
        --reveal-delay: 0.26s;
    }


    /* PRE-ORDER STEPS STAGGER */

    .step:nth-child(1) {
        --reveal-delay: 0.05s;
    }

    .step:nth-child(2) {
        --reveal-delay: 0.14s;
    }

    .step:nth-child(3) {
        --reveal-delay: 0.23s;
    }


    /* DELIVERY DETAILS STAGGER */

    .delivery-detail:nth-child(1) {
        --reveal-delay: 0.05s;
    }

    .delivery-detail:nth-child(2) {
        --reveal-delay: 0.12s;
    }

    .delivery-detail:nth-child(3) {
        --reveal-delay: 0.19s;
    }

    .delivery-detail:nth-child(4) {
        --reveal-delay: 0.26s;
    }


    /* REDUCE MOTION */

    @media (prefers-reduced-motion: reduce) {

        *,
        *::before,
        *::after {
            animation-duration: 0.01ms !important;
            animation-iteration-count: 1 !important;
            transition-duration: 0.01ms !important;
            scroll-behavior: auto !important;
        }

        .home-reveal {
            opacity: 1;
            transform: none;
        }

    }

</style>
</head>

<body>

    <!-- NAVBAR -->
<header class="navbar">
    <div class="logo">
        <img src="{{ asset('images/logo.png') }}" alt="EatWithUmmi">
    </div>

    <nav>
    <a href="/" class="active">Home</a>
    <a href="#about">About</a>
    <a href="/menu">Menu</a>
    <a href="#delivery">Delivery</a>
    <a href="#contact">Contact</a>
    </nav>

    <a href="https://wa.me/2349071833146" class="nav-btn">
        Order Now
    </a>
</header>

    <section class="hero">

    <div class="hero-content">

        <p class="eyebrow">
            HOMEMADE • FRESH • MADE WITH LOVE
        </p>

        <h1>
            Good food.<br>
            <span>Good mood.</span>
        </h1>

        <p class="hero-text">
            Delicious homemade meals made fresh with love,
            delivered straight to you in Ibadan.
        </p>

        <div class="hero-buttons">

            <a href="https://wa.me/2349071833146" class="primary-btn">
                Order on WhatsApp
            </a>

            <a href="/menu" class="secondary-btn">
            View Menu
            </a>

        </div>

    </div>

    <div class="hero-image">
    <img src="{{ asset('images/heroimage.png') }}" alt="EatWithUmmi meals">
</div>

</section>


    <!-- =========================
     OUR STORY
========================= -->

<section class="about" id="about">

    <div class="about-content">

        <p class="eyebrow">
            OUR STORY
        </p>

        <h2>
            From the kitchen<br>
            to <span>your table.</span>
        </h2>

        <p>
            EatWithUmmi started from something simple, a love for
            cooking and seeing people enjoy good food.
        </p>

        <p>
            What started in the kitchen slowly grew into something
            bigger. After taking a pause during NYSC, Ummi is back
            and ready to share her homemade meals with Ibadan again.
        </p>

        <p>
            Every meal is prepared fresh, with care and attention,
            so you can enjoy food that feels homemade, because it is.
        </p>

        <p class="tagline">
            Good food. Good mood. 💗
        </p>

    </div>

</section>

    <!-- =========================
     FEATURED FOOD
========================= -->

<section class="featured">

    <div class="featured-header">

        <div>
            <p class="eyebrow">A TASTE OF UMMI</p>

            <h2>
                Made fresh.<br>
                <span>Made for you.</span>
            </h2>
        </div>

        <p class="featured-intro">
            A few of the meals you can look forward to at EatWithUmmi.
        </p>

    </div>


    <div class="featured-grid">


        <!-- ASUN RICE -->

        <div class="featured-card featured-large">

            <div class="featured-image">
                <img
                    src="{{ asset('images\asunricenew.jpeg') }}"
                    alt="Asun Rice"
                >
            </div>

            <div class="featured-info">

                <div>
                    
                    <h3>Asun Rice</h3>
                </div>

                <span>₦10,000</span>

            </div>

        </div>


        <!-- BASMATI FRIED RICE -->

        <div class="featured-card">

            <div class="featured-image">
                <img
                    src="{{ asset(images\basmatifriedricenew.png') }}"
                    alt="Basmati Fried Rice"
                >
            </div>

            <div class="featured-info">

                <div>
                
                    <h3>Basmati Fried Rice</h3>
                </div>

                <span>from ₦9,000</span>

            </div>

        </div>


        <!-- NATIVE SPAGHETTI -->

        <div class="featured-card">

            <div class="featured-image">
                <img
                    src="{{ asset('images\nativespagnew.jpeg') }}"
                    alt="Native Spaghetti"
                >
            </div>

            <div class="featured-info">

                <div>
                    
                    <h3>Native Spaghetti</h3>
                </div>

                <span>from ₦6,500</span>

            </div>

        </div>


        <!-- LOADED BEEF STIR-FRY SPAGHETTI -->

        <div class="featured-card">

            <div class="featured-image">
                <img
                    src="{{ asset('images\loadedstirfrynew.png') }}"
                    alt="Loaded Beef Stir-Fry Spaghetti"
                >
            </div>

            <div class="featured-info">

                <div>
                
                    <h3>Loaded Stir-Fry Spaghetti</h3>
                </div>

                <span>₦10,000</span>

            </div>

        </div>


    </div>


    <div class="featured-cta">

        <a href="/menu" class="secondary-btn">
            Explore Full Menu →
        </a>

    </div>

</section>

<!-- =========================
     HOW PRE-ORDER WORKS
========================= -->

<section class="how-order">

    <div class="how-order-header">

        <p class="eyebrow">
            HOW IT WORKS
        </p>

        <h2>
            Your meal starts<br>
            with a <span>pre-order.</span>
        </h2>

        <p>
            Getting your favourite meal from EatWithUmmi is simple.
        </p>

    </div>


    <div class="steps">


        <!-- STEP 01 -->

        <div class="step">

            <div class="step-number">
                01
            </div>

            <div>
                <h3>Choose your meal</h3>

                <p>
                    Browse the menu and choose what you're craving.
                </p>
            </div>

        </div>


        <!-- STEP 02 -->

        <div class="step">

            <div class="step-number">
                02
            </div>

            <div>
                <h3>Send your order</h3>

                <p>
                    Send your order through WhatsApp or give us a call.
                    We'll confirm the details with you.
                </p>
            </div>

        </div>


        <!-- STEP 03 -->

        <div class="step">

            <div class="step-number">
                03
            </div>

            <div>
                <h3>We prepare & deliver</h3>

                <p>
                    Once your order is confirmed, your meal is prepared
                    fresh and delivered straight to you in Ibadan.
                </p>
            </div>

        </div>


    </div>


    <div class="how-order-cta">

        <a
            href="https://wa.me/2349071833146"
            class="primary-btn"
        >
            Order on WhatsApp
        </a>

    </div>

</section>

<!-- =========================
     DELIVERY
========================= -->

<section class="delivery" id="delivery">

    <div class="delivery-content">

        <p class="eyebrow">
            DELIVERY
        </p>

        <h2>
            Good food,<br>
            <span>coming your way.</span>
        </h2>

        <p class="delivery-intro">
            We deliver freshly prepared meals anywhere within Ibadan.
            Your meal is prepared with care and sent straight to you.
        </p>


        <div class="delivery-details">


            <!-- 01 -->

            <div class="delivery-detail">

                <span>01</span>

                <div>
                    <h3>Anywhere in Ibadan</h3>

                    <p>
                        We currently deliver anywhere within Ibadan.
                    </p>
                </div>

            </div>


            <!-- 02 -->

            <div class="delivery-detail">

                <span>02</span>

                <div>
                    <h3>Delivery fee</h3>

                    <p>
                        Delivery fee depends on your location.
                    </p>
                </div>

            </div>


            <!-- 03 -->

            <div class="delivery-detail">

                <span>03</span>

                <div>
                    <h3>From 12 PM</h3>

                    <p>
                        Deliveries start from 12 PM. Your delivery time
                        depends on your location and the day's order volume.
                    </p>
                </div>

            </div>


            <!-- 04 -->

            <div class="delivery-detail">

                <span>04</span>

                <div>
                    <h3>Pre-order ahead</h3>

                    <p>
                        Same-day orders are subject to availability
                        and confirmation.
                    </p>
                </div>

            </div>


        </div>

    </div>

</section>

<!-- =========================
     FINAL CTA
========================= -->

<section class="final-cta" id="contact">

    <div class="final-cta-content">

        <p class="eyebrow">
            READY TO EAT?
        </p>

        <h2>
            What are you<br>
            <span>craving?</span>
        </h2>

        <p>
            Choose your meal from the menu, send us your order,
            and let EatWithUmmi prepare something good for you.
        </p>

        <div class="final-cta-buttons">

            <a
                href="/menu"
                class="primary-btn"
            >
                Explore the Menu →
            </a>

            <a
                href="https://wa.me/2349071833146"
                class="secondary-btn"
            >
                Order on WhatsApp
            </a>

        </div>

    </div>

</section>

<!-- =========================
     FOOTER
========================= -->

<footer class="footer">

    <div class="footer-top">

        <div class="footer-brand">

            <a href="/" class="footer-logo">
                <img src="{{ asset('images/logo.png') }}" alt="EatWithUmmi">
            </a>

            <p>
                Homemade meals made fresh with love,
                delivered straight to you in Ibadan.
            </p>

            <span>Good food. Good mood. 💗</span>

        </div>

        <div class="footer-links">

            <div class="footer-column">
                <h4>Explore</h4>

                <a href="/">Home</a>
                <a href="#about">About</a>
                <a href="/menu">Menu</a>
                <a href="#delivery">Delivery</a>
            </div>

            <div class="footer-column">
                <h4>Order</h4>

                <a href="https://wa.me/2349071833146">WhatsApp</a>
                <a href="tel:09071833146">Call Us</a>
            </div>

        </div>

        <div class="footer-order">

            <p>READY TO EAT?</p>

            <h3>
                Let's get<br>
                you <span>fed.</span>
            </h3>

            <a href="https://wa.me/2349071833146" class="footer-order-btn">
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
<script>
    const homeRevealElements = document.querySelectorAll(
        '.about-content, ' +
        '.featured-header, ' +
        '.featured-card, ' +
        '.featured-cta, ' +
        '.how-order-header, ' +
        '.step, ' +
        '.how-order-cta, ' +
        '.delivery-content, ' +
        '.delivery-detail, ' +
        '.final-cta-content'
    );

    const homeObserver = new IntersectionObserver((entries) => {

        entries.forEach((entry) => {

            if (entry.isIntersecting) {

                entry.target.classList.add('is-visible');

                homeObserver.unobserve(entry.target);

            }

        });

    }, {
        threshold: 0.15
    });


    homeRevealElements.forEach((element) => {

        element.classList.add('home-reveal');

        homeObserver.observe(element);

    });
</script>
</body>
</html>