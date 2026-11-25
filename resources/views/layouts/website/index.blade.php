<!DOCTYPE html>
<html lang="{{ Multira::getCurrentLocale() }}" dir="{{ Multira::getCurrentLocaleDirection() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title>جامعة النور</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg: #FFFFFF;
            --surface: #F1F4FA;
            --ink: #14213D;
            --muted: #51607F;
            --brand: #1B2A6B;
            --brand-ink: #FFFFFF;
            --accent: #F2A900;
            --line: #D9DFEC;
            box-sizing: border-box;
            padding-top: env(safe-area-inset-top, 0px);
            padding-bottom: env(safe-area-inset-bottom, 0px);
        }

        @media (prefers-color-scheme:dark) {
            :root:not([data-theme="light"]) {
                --bg: #0E1426;
                --surface: #161E38;
                --ink: #E8ECF7;
                --muted: #A3AECB;
                --brand: #F2A900;
                --brand-ink: #14213D;
                --accent: #F2A900;
                --line: #2A3558;
                color-scheme: dark;
            }
        }

        :root[data-theme="dark"] {
            --bg: #0E1426;
            --surface: #161E38;
            --ink: #E8ECF7;
            --muted: #A3AECB;
            --brand: #F2A900;
            --brand-ink: #14213D;
            --accent: #F2A900;
            --line: #2A3558;
            color-scheme: dark;
        }

        html {
            scroll-padding-top: env(safe-area-inset-top, 0px);
            scroll-behavior: smooth
        }

        * {
            box-sizing: border-box
        }

        body {
            margin: 0;
            background: var(--bg);
            color: var(--ink);
            font-family: "Cairo", Tahoma, Arial, sans-serif;
            line-height: 1.8
        }

        a {
            color: inherit;
            text-decoration: none
        }

        a:focus-visible,
        button:focus-visible {
            outline: 3px solid var(--accent);
            outline-offset: 3px
        }

        .wrap {
            max-width: 1080px;
            margin: 0 auto;
            padding: 0 20px
        }

        header {
            border-bottom: 1px solid var(--line)
        }

        header .wrap {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            padding-top: 14px;
            padding-bottom: 14px;
            flex-wrap: wrap
        }

        .logo {
            font-weight: 800;
            font-size: 1.4rem;
            color: var(--brand)
        }

        nav {
            display: flex;
            gap: 22px;
            flex-wrap: wrap
        }

        nav a {
            color: var(--muted);
            font-weight: 600
        }

        nav a:hover {
            color: var(--ink)
        }

        .hero .wrap {
            display: grid;
            grid-template-columns: 1.2fr .8fr;
            gap: 40px;
            align-items: center;
            padding-top: 64px;
            padding-bottom: 64px
        }

        h1 {
            font-size: clamp(2.2rem, 5vw, 3.6rem);
            line-height: 1.25;
            margin: 0 0 16px;
            font-weight: 800;
            color: var(--brand)
        }

        .hero p {
            font-size: 1.1rem;
            color: var(--muted);
            max-width: 46ch;
            margin: 0 0 28px
        }

        .btn {
            display: inline-block;
            background: var(--brand);
            color: var(--brand-ink);
            padding: 12px 28px;
            border-radius: 6px;
            font-weight: 700
        }

        .btn.ghost {
            background: transparent;
            color: var(--ink);
            border: 2px solid var(--line);
            margin-inline-start: 10px
        }

        .arch {
            aspect-ratio: 3/4;
            background: var(--brand);
            border-radius: 999px 999px 8px 8px;
            position: relative;
            display: flex;
            align-items: flex-end;
            justify-content: center;
            padding: 28px;
            max-width: 320px;
            margin-inline: auto;
            width: 100%
        }

        .arch::before {
            content: "";
            position: absolute;
            inset: 16px;
            border: 2px solid var(--accent);
            border-radius: 999px 999px 4px 4px;
            pointer-events: none
        }

        .arch span {
            color: var(--brand-ink);
            font-weight: 800;
            font-size: 1.2rem;
            text-align: center;
            position: relative
        }

        section {
            padding: 56px 0
        }

        h2 {
            font-size: 1.9rem;
            margin: 0 0 28px;
            font-weight: 800
        }

        .alt {
            background: var(--surface)
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px
        }

        .fac {
            border-top: 4px solid var(--accent);
            background: var(--bg);
            padding: 20px 22px;
            border-radius: 0 0 8px 8px;
            border-inline: 1px solid var(--line);
            border-bottom: 1px solid var(--line)
        }

        .fac h3 {
            margin: 0 0 6px;
            font-size: 1.15rem;
            color: var(--brand)
        }

        .fac p {
            margin: 0;
            color: var(--muted);
            font-size: .95rem
        }

        .news {
            display: grid;
            gap: 0
        }

        .news a {
            display: flex;
            gap: 20px;
            padding: 18px 0;
            border-bottom: 1px solid var(--line);
            align-items: baseline
        }

        .news time {
            flex: 0 0 96px;
            color: var(--muted);
            font-size: .9rem
        }

        .news strong {
            font-weight: 600
        }

        .news a:hover strong {
            color: var(--brand)
        }

        .apply .wrap {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
            flex-wrap: wrap
        }

        .apply h2 {
            margin: 0 0 6px
        }

        .apply p {
            margin: 0;
            color: var(--muted)
        }

        footer {
            background: var(--brand);
            color: var(--brand-ink);
            padding: 32px 0 36px;
            font-size: .95rem
        }

        footer .wrap {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            flex-wrap: wrap
        }

        footer p {
            margin: 0
        }

        @media (max-width:760px) {
            .hero .wrap {
                grid-template-columns: 1fr;
                padding-top: 40px;
                padding-bottom: 40px
            }

            .arch {
                max-width: 220px;
                order: -1
            }

            .news a {
                flex-direction: column;
                gap: 2px
            }
        }

        @media (prefers-reduced-motion:reduce) {
            html {
                scroll-behavior: auto
            }
        }
    </style>
</head>

<body>

    <header>
        <div class="wrap">
            <a class="logo" href="#top"> {{ __('website.logo') }} </a>
            <nav aria-label="القائمة الرئيسية">
                <a href="#faculties">{{ __('website.departments') }}</a>
                <a href="#news">الأخبار</a>
                <a href="#apply">القبول</a>
                <a href="#contact">تواصل معنا</a>
                <x-multira-switcher />
            </nav>
        </div>
    </header>

    @yield('content')

    <footer id="contact">
        <div class="wrap">
            <p><strong>جامعة النور</strong><br>شارع الجامعة، المدينة</p>
            <p>info@alnoor.edu<br>٠١١ ٠٠٠ ٠٠٠٠</p>
            <p>© ٢٠٢٦ جامعة النور. جميع الحقوق محفوظة.</p>
        </div>
    </footer>

</body>

</html>