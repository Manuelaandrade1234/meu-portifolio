<?php
$ano = date('Y');
$whatsapp = '5581991859578';
$mensagem = rawurlencode('Olá, Manuela! Conheci seu portfólio e gostaria de conversar sobre um projeto.');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfólio de Manuela Andrade — desenvolvedora de sistemas, aplicações web, PDV, delivery, APIs e automações.">
    <meta name="theme-color" content="#563a2e">
    <title>Manuela Andrade | Portfólio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <style>
        :root {
            --cream: #f8f4ee;
            --cream-2: #eee5db;
            --brown: #563a2e;
            --brown-deep: #2f201a;
            --gold: #bd8f44;
            --gold-light: #e5c88d;
            --ink: #241c18;
            --muted: #756962;
            --white: #fffdf9;
            --line: rgba(86,58,46,.14);
            --shadow: 0 24px 70px rgba(65,42,31,.12);
            --radius: 28px;
        }
        * { box-sizing: border-box; margin: 0; padding: 0; }
        html { scroll-behavior: smooth; }
        body {
            font-family: 'DM Sans', sans-serif;
            color: var(--ink);
            background:
                radial-gradient(circle at 88% 8%, rgba(189,143,68,.16), transparent 24rem),
                radial-gradient(circle at 8% 38%, rgba(86,58,46,.08), transparent 28rem),
                var(--cream);
            overflow-x: hidden;
        }
        body::before {
            content: '';
            position: fixed;
            inset: 0;
            pointer-events: none;
            opacity: .28;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 180 180' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='.8' numOctaves='2' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='.06'/%3E%3C/svg%3E");
            z-index: 99;
        }
        a { color: inherit; text-decoration: none; }
        img { display: block; max-width: 100%; }
        button, input, textarea { font: inherit; }
        .container { width: min(1160px, calc(100% - 40px)); margin: 0 auto; }
        .eyebrow {
            display: inline-flex; align-items: center; gap: 9px;
            color: var(--brown); font-size: .76rem; font-weight: 700;
            letter-spacing: .16em; text-transform: uppercase;
        }
        .eyebrow::before { content: ''; width: 28px; height: 1px; background: var(--gold); }
        h1, h2, h3 { font-family: 'Playfair Display', serif; line-height: 1.08; }
        .section { padding: 110px 0; }
        .section-head { display: grid; grid-template-columns: 1fr .8fr; align-items: end; gap: 40px; margin-bottom: 52px; }
        .section-head h2 { font-size: clamp(2.3rem, 5vw, 4.4rem); max-width: 720px; margin-top: 13px; }
        .section-head p { color: var(--muted); line-height: 1.8; max-width: 520px; justify-self: end; }

        header {
            position: fixed; top: 18px; left: 0; right: 0; z-index: 30;
        }
        .nav {
            height: 72px; display: flex; align-items: center; justify-content: space-between;
            padding: 0 16px 0 22px; border: 1px solid rgba(255,255,255,.7);
            background: rgba(255,253,249,.78); backdrop-filter: blur(20px);
            border-radius: 22px; box-shadow: 0 12px 40px rgba(54,35,27,.08);
        }
        .brand { display: flex; align-items: center; gap: 12px; font-weight: 800; }
        .brand img { width: 42px; height: 42px; border-radius: 50%; object-fit: cover; border: 1px solid var(--gold-light); }
        .brand span { line-height: 1.05; }
        .brand small { display: block; color: var(--gold); font-size: .61rem; letter-spacing: .18em; margin-top: 5px; }
        nav ul { display: flex; list-style: none; gap: 30px; align-items: center; }
        nav a { font-size: .9rem; font-weight: 600; color: #554a44; transition: .25s; }
        nav a:hover { color: var(--gold); }
        .nav-cta, .btn {
            display: inline-flex; align-items: center; justify-content: center; gap: 10px;
            border-radius: 999px; font-weight: 700; transition: .28s ease; border: 1px solid transparent;
        }
        .nav-cta { background: var(--brown); color: white; padding: 13px 20px; }
        .nav-cta:hover { background: var(--gold); color: var(--brown-deep); transform: translateY(-2px); }
        .menu-btn { display:none; border:0; background:transparent; font-size:1.3rem; color:var(--brown); padding:10px; }

        .hero { min-height: 100vh; padding: 145px 0 70px; display: flex; align-items: center; }
        .hero-grid { display: grid; grid-template-columns: 1.12fr .88fr; gap: 64px; align-items: center; }
        .hero h1 { font-size: clamp(3.6rem, 7.2vw, 7.2rem); letter-spacing: -.045em; margin: 20px 0 24px; }
        .hero h1 span { color: var(--gold); font-style: italic; }
        .hero-copy > p { max-width: 660px; font-size: 1.12rem; line-height: 1.8; color: var(--muted); }
        .hero-actions { display:flex; gap:14px; flex-wrap:wrap; margin-top:34px; }
        .btn { padding: 16px 24px; }
        .btn-primary { background:var(--brown); color:#fff; box-shadow:0 12px 28px rgba(86,58,46,.22); }
        .btn-primary:hover { background:var(--gold); color:var(--brown-deep); transform:translateY(-3px); }
        .btn-secondary { border-color:var(--line); background:rgba(255,255,255,.54); color:var(--brown); }
        .btn-secondary:hover { border-color:var(--gold); transform:translateY(-3px); }
        .hero-meta { margin-top:42px; display:flex; gap:24px; flex-wrap:wrap; color:#665952; font-size:.86rem; }
        .hero-meta span { display:flex; align-items:center; gap:8px; }
        .hero-meta i { color:var(--gold); }
        .portrait-wrap { position:relative; min-height:610px; }
        .portrait-card {
            position:absolute; inset:0 0 0 36px; border-radius: 220px 220px 34px 34px;
            overflow:hidden; border:1px solid rgba(189,143,68,.5); box-shadow:var(--shadow);
            background:linear-gradient(150deg,#e6d8c8,#ae8a6f);
        }
        .portrait-card img { width:100%; height:100%; object-fit:cover; object-position:center 20%; }
        .portrait-card::after { content:''; position:absolute; inset:0; background:linear-gradient(180deg,transparent 56%,rgba(47,32,26,.32)); }
        .float-note {
            position:absolute; z-index:2; left:0; bottom:45px; padding:18px 22px;
            width:230px; border-radius:20px; background:rgba(255,253,249,.88); backdrop-filter:blur(18px);
            border:1px solid rgba(255,255,255,.8); box-shadow:0 18px 40px rgba(50,32,24,.16);
        }
        .float-note strong { display:block; color:var(--brown); margin-bottom:5px; }
        .float-note small { color:var(--muted); line-height:1.45; }
        .orbit { position:absolute; width:115px; height:115px; right:-34px; top:72px; border-radius:50%; border:1px solid rgba(189,143,68,.46); display:grid; place-items:center; background:rgba(248,244,238,.55); backdrop-filter:blur(8px); }
        .orbit img { width:72px; height:72px; border-radius:50%; object-fit:cover; }

        .marquee { border-block:1px solid var(--line); overflow:hidden; background:rgba(255,255,255,.4); }
        .marquee-track { width:max-content; display:flex; gap:40px; padding:18px 0; animation:marquee 24s linear infinite; }
        .marquee span { display:flex; align-items:center; gap:40px; color:var(--brown); font-weight:700; letter-spacing:.08em; text-transform:uppercase; font-size:.75rem; }
        .marquee span::after { content:'✦'; color:var(--gold); }
        @keyframes marquee { to { transform:translateX(-50%); } }

        .about-grid { display:grid; grid-template-columns:.82fr 1.18fr; gap:58px; align-items:stretch; }
        .about-panel { background:var(--brown-deep); color:white; padding:44px; border-radius:var(--radius); position:relative; overflow:hidden; min-height:430px; }
        .about-panel::before { content:'MA'; position:absolute; right:-22px; bottom:-45px; font-family:'Playfair Display'; font-size:13rem; color:rgba(255,255,255,.035); }
        .about-panel h3 { font-size:2.35rem; margin:18px 0; }
        .about-panel p { color:#d5c9c1; line-height:1.8; }
        .signature { margin-top:42px; font-family:'Playfair Display'; font-style:italic; color:var(--gold-light); font-size:1.35rem; }
        .about-content { display:grid; grid-template-columns:1fr 1fr; gap:18px; }
        .info-card { padding:28px; border:1px solid var(--line); border-radius:22px; background:rgba(255,255,255,.48); transition:.3s; }
        .info-card:hover { transform:translateY(-6px); background:var(--white); box-shadow:0 18px 40px rgba(65,42,31,.08); }
        .info-card i { color:var(--gold); font-size:1.35rem; margin-bottom:23px; }
        .info-card h4 { font-size:1.04rem; margin-bottom:9px; color:var(--brown-deep); }
        .info-card p { color:var(--muted); line-height:1.65; font-size:.9rem; }

        .projects { background:var(--brown-deep); color:white; position:relative; overflow:hidden; }
        .projects::before { content:''; position:absolute; width:520px; height:520px; border-radius:50%; background:rgba(189,143,68,.12); filter:blur(80px); right:-180px; top:-120px; }
        .projects .section-head p { color:#cdbfb7; }
        .project-list { display:grid; gap:22px; }
        .project {
            display:grid; grid-template-columns:70px 1fr 1fr 46px; gap:26px; align-items:center;
            padding:30px 32px; border-radius:24px; border:1px solid rgba(255,255,255,.1);
            background:rgba(255,255,255,.035); transition:.35s; position:relative;
        }
        .project:hover { transform:translateX(8px); border-color:rgba(229,200,141,.55); background:rgba(255,255,255,.07); }
        .project-number { font-family:'Playfair Display'; font-size:1.9rem; color:var(--gold-light); }
        .project h3 { font-size:1.75rem; margin-bottom:7px; }
        .project p { color:#bfb2aa; line-height:1.65; font-size:.92rem; }
        .tags { display:flex; flex-wrap:wrap; gap:8px; }
        .tag { border:1px solid rgba(255,255,255,.13); border-radius:999px; padding:7px 11px; font-size:.72rem; color:#e7ddd7; }
        .project-arrow { width:42px; height:42px; display:grid; place-items:center; border-radius:50%; border:1px solid rgba(255,255,255,.15); color:var(--gold-light); }

        .skills-grid { display:grid; grid-template-columns:repeat(5,1fr); gap:14px; }
        .skill { min-height:125px; border:1px solid var(--line); border-radius:20px; display:flex; flex-direction:column; align-items:center; justify-content:center; gap:12px; background:rgba(255,255,255,.48); transition:.3s; }
        .skill:hover { transform:translateY(-6px) rotate(-1deg); background:var(--white); border-color:rgba(189,143,68,.5); }
        .skill i { font-size:1.8rem; color:var(--brown); }
        .skill span { font-weight:700; font-size:.86rem; }

        .journey { background:linear-gradient(180deg,rgba(238,229,219,.5),rgba(255,255,255,.5)); }
        .timeline { position:relative; max-width:900px; margin:0 auto; }
        .timeline::before { content:''; position:absolute; left:50%; top:0; bottom:0; width:1px; background:linear-gradient(var(--gold),rgba(189,143,68,.15)); }
        .timeline-item { width:50%; padding:0 46px 48px; position:relative; }
        .timeline-item:nth-child(even) { margin-left:50%; }
        .timeline-item::before { content:''; position:absolute; top:8px; width:13px; height:13px; border-radius:50%; background:var(--gold); box-shadow:0 0 0 7px var(--cream-2); }
        .timeline-item:nth-child(odd)::before { right:-7px; }
        .timeline-item:nth-child(even)::before { left:-6px; }
        .timeline-card { padding:26px; border-radius:20px; background:var(--white); border:1px solid var(--line); box-shadow:0 15px 35px rgba(65,42,31,.06); }
        .timeline-card time { color:var(--gold); font-weight:800; font-size:.78rem; letter-spacing:.1em; }
        .timeline-card h3 { font-size:1.38rem; margin:10px 0; }
        .timeline-card p { color:var(--muted); line-height:1.65; font-size:.9rem; }

        .cert-grid { display:grid; grid-template-columns:repeat(3,1fr); gap:18px; }
        .cert { padding:28px; border-radius:22px; background:rgba(255,255,255,.6); border:1px solid var(--line); position:relative; overflow:hidden; }
        .cert::after { content:''; position:absolute; width:85px; height:85px; border-radius:50%; background:rgba(189,143,68,.11); right:-24px; top:-24px; }
        .cert small { color:var(--gold); font-weight:800; letter-spacing:.1em; text-transform:uppercase; }
        .cert h3 { font-size:1.35rem; margin:12px 0 8px; }
        .cert p { color:var(--muted); font-size:.88rem; }

        .contact-card { padding:70px; background:var(--brown); color:white; border-radius:38px; display:grid; grid-template-columns:1fr auto; align-items:center; gap:40px; position:relative; overflow:hidden; }
        .contact-card::before { content:''; position:absolute; width:420px; height:420px; border:1px solid rgba(255,255,255,.1); border-radius:50%; right:-190px; top:-210px; }
        .contact-card h2 { font-size:clamp(2.5rem,5vw,4.8rem); max-width:700px; }
        .contact-card p { color:#dfd3cd; margin-top:18px; line-height:1.7; }
        .contact-card .btn { background:var(--gold-light); color:var(--brown-deep); white-space:nowrap; position:relative; z-index:2; }
        .contact-card .btn:hover { background:white; transform:translateY(-3px); }
        footer { padding:32px 0 44px; }
        .footer-row { display:flex; align-items:center; justify-content:space-between; gap:20px; color:var(--muted); font-size:.84rem; }
        .social { display:flex; gap:10px; }
        .social a { width:40px; height:40px; border-radius:50%; display:grid; place-items:center; border:1px solid var(--line); color:var(--brown); transition:.25s; }
        .social a:hover { background:var(--brown); color:white; transform:translateY(-3px); }
        .wa-float { position:fixed; right:22px; bottom:22px; width:58px; height:58px; display:grid; place-items:center; border-radius:50%; background:#1fa855; color:white; font-size:1.45rem; box-shadow:0 14px 30px rgba(31,168,85,.3); z-index:20; }
        .reveal { opacity:0; transform:translateY(28px); transition:.75s ease; }
        .reveal.visible { opacity:1; transform:none; }

        @media (max-width: 900px) {
            nav ul { display:none; position:absolute; top:82px; left:20px; right:20px; flex-direction:column; background:var(--white); border:1px solid var(--line); padding:24px; border-radius:20px; box-shadow:var(--shadow); }
            nav ul.open { display:flex; }
            .menu-btn { display:block; }
            .nav-cta { display:none; }
            .hero-grid, .about-grid, .section-head, .contact-card { grid-template-columns:1fr; }
            .hero { padding-top:125px; }
            .hero h1 { font-size:clamp(3rem,13vw,5.8rem); }
            .portrait-wrap { min-height:560px; max-width:560px; width:100%; margin:20px auto 0; }
            .section-head p { justify-self:start; }
            .skills-grid { grid-template-columns:repeat(3,1fr); }
            .cert-grid { grid-template-columns:1fr 1fr; }
            .project { grid-template-columns:54px 1fr 42px; }
            .project .tags { grid-column:2/4; }
            .contact-card { padding:48px 34px; }
        }
        @media (max-width: 620px) {
            .container { width:min(100% - 26px,1160px); }
            .section { padding:82px 0; }
            .brand span { font-size:.83rem; }
            .hero-copy > p { font-size:1rem; }
            .portrait-wrap { min-height:470px; }
            .portrait-card { left:12px; border-radius:150px 150px 28px 28px; }
            .orbit { right:-4px; top:32px; width:90px; height:90px; }
            .orbit img { width:58px; height:58px; }
            .float-note { bottom:20px; width:205px; padding:15px 17px; }
            .about-content { grid-template-columns:1fr; }
            .about-panel { padding:32px 26px; min-height:auto; }
            .skills-grid { grid-template-columns:1fr 1fr; }
            .cert-grid { grid-template-columns:1fr; }
            .project { grid-template-columns:40px 1fr; padding:24px 20px; }
            .project-arrow { display:none; }
            .project .tags { grid-column:1/3; }
            .timeline::before { left:6px; }
            .timeline-item, .timeline-item:nth-child(even) { width:100%; margin-left:0; padding:0 0 30px 34px; }
            .timeline-item:nth-child(odd)::before, .timeline-item:nth-child(even)::before { left:0; right:auto; }
            .contact-card { border-radius:28px; padding:38px 24px; }
            .footer-row { flex-direction:column; text-align:center; }
        }
    </style>
</head>
<body>
<header>
    <div class="container nav">
        <a class="brand" href="#inicio">
            <img src="foto-manuela.jpeg" alt="Manuela Andrade">
            <span>MANUELA ANDRADE<small>TECNOLOGIA • SOFTWARE • INOVAÇÃO</small></span>
        </a>
        <nav>
            <button class="menu-btn" aria-label="Abrir menu"><i class="fa-solid fa-bars"></i></button>
            <ul id="menu">
                <li><a href="#sobre">Sobre</a></li>
                <li><a href="#projetos">Projetos</a></li>
                <li><a href="#tecnologias">Tecnologias</a></li>
                <li><a href="#trajetoria">Trajetória</a></li>
            </ul>
        </nav>
        <a class="nav-cta" href="https://wa.me/<?= $whatsapp ?>?text=<?= $mensagem ?>" target="_blank">Vamos conversar <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
    </div>
</header>

<main>
    <section class="hero" id="inicio">
        <div class="container hero-grid">
            <div class="hero-copy reveal">
                <span class="eyebrow">Meu Portfólio</span>
                <h1>Tecnologia que cria <span>impacto.</span></h1>
                <p>Sou Manuela Andrade, apaixonada por tecnologia e por transformar ideias em soluções digitais. Desenvolvo sistemas, aplicações e soluções que unem funcionalidade, desempenho e uma excelente experiência para o usuário. Acredito que tecnologia vai muito além do código: ela conecta pessoas, resolve problemas e cria oportunidades. É essa visão que levo para cada projeto, buscando sempre aprender, evoluir e construir soluções que realmente façam a diferença.</p>
                <div class="hero-actions">
                    <a class="btn btn-primary" href="#projetos">Explorar projetos <i class="fa-solid fa-arrow-down"></i></a>
                    <a class="btn btn-secondary" href="https://github.com/Manuelaandrade1234" target="_blank"><i class="fa-brands fa-github"></i> Ver GitHub</a>
                </div>
                <div class="hero-meta">
                    <span><i class="fa-solid fa-location-dot"></i> Recife, PE</span>
                    <span><i class="fa-solid fa-code"></i> Full Stack</span>
                    <span><i class="fa-solid fa-circle-check"></i> Disponível para projetos</span>
                </div>
            </div>
            <div class="portrait-wrap reveal">
                <div class="portrait-card"><img src="foto-manuela.jpeg" alt="Manuela Andrade"></div>
                
                <div class="float-note">
    <strong>O futuro pertence a quem cria.</strong>
    <small>E eu escolhi construí-lo através da tecnologia.</small>
</div>
            </div>
        </div>
    </section>

    <div class="marquee" aria-hidden="true">
        <div class="marquee-track">
            <span>Desenvolvimento web</span><span>Sistemas personalizados</span><span>APIs</span><span>Automação comercial</span><span>Banco de dados</span><span>Experiência do usuário</span>
            <span>Desenvolvimento web</span><span>Sistemas personalizados</span><span>APIs</span><span>Automação comercial</span><span>Banco de dados</span><span>Experiência do usuário</span>
        </div>
    </div>

    <section class="section" id="sobre">
        <div class="container">
            <div class="section-head reveal">
                <div><span class="eyebrow">Sobre mim</span><h2>Construindo tecnologia que faz sentido.</h2></div>
                <p>Minha jornada une estudo constante, prática e projetos reais. Gosto de entender o problema por completo e transformar necessidades em soluções simples, seguras e eficientes.</p>
            </div>
            <div class="about-grid">
                <article class="about-panel reveal">
                    <span class="eyebrow" style="color:var(--gold-light)">Minha essência</span>
                    <h3>Curiosidade para aprender. Coragem para construir.</h3>
                    <p>Sempre fui movida pela curiosidade e pela vontade de transformar ideias em realidade. Hoje desenvolvo sistemas, aplicações e soluções digitais pensando em criar experiências inteligentes, organizadas e que realmente facilitem o dia a dia das pessoas. Para mim, cada projeto representa uma nova oportunidade de aprender, superar desafios e entregar algo que gere impacto de verdade.</p>
                    <div class="signature">Manuela Andrade</div>
                </article>
                <div class="about-content">
                    <article class="info-card reveal"><i class="fa-solid fa-layer-group"></i><h4>Visão completa</h4><p>Do planejamento ao banco de dados, da interface à implantação.</p></article>
                    <article class="info-card reveal"><i class="fa-solid fa-wand-magic-sparkles"></i><h4>Experiência do usuário</h4><p>Interfaces modernas, intuitivas e pensadas para proporcionar uma navegação simples, agradável e eficiente.</p></article>
                    <article class="info-card reveal"><i class="fa-solid fa-gears"></i><h4>Soluções reais</h4><p>Experiência com PDV, delivery, NFC-e, relatórios, estoque e automações.</p></article>
                    <article class="info-card reveal"><i class="fa-solid fa-arrow-trend-up"></i><h4>Evolução contínua</h4><p>Aprendizado constante em PHP, Java, Python, APIs, Linux e infraestrutura.</p></article>
                </div>
            </div>
        </div>
    </section>

    <section class="section projects" id="projetos">
        <div class="container">
            <div class="section-head reveal">
                <div><span class="eyebrow" style="color:var(--gold-light)">Projetos selecionados</span><h2>Ideias transformadas em soluções reais.</h2></div>
                <p>Projetos que representam minha evolução técnica e minha capacidade de transformar demandas em aplicações úteis.</p>
            </div>
            <div class="project-list">
                <a class="project reveal" href="https://github.com/Manuelaandrade1234/5MSistemafacil" target="_blank">
                    <span class="project-number">01</span><div><h3>PDV Andrade</h3><p>Sistema de gestão comercial com vendas, estoque, clientes, caixa, relatórios, orçamento e integração fiscal.</p></div><div class="tags"><span class="tag">PHP</span><span class="tag">MySQL</span><span class="tag">JavaScript</span><span class="tag">NFC-e</span></div><span class="project-arrow"><i class="fa-solid fa-arrow-up-right-from-square"></i></span>
                </a>
                <a class="project reveal" href="https://varejaojandrade.sistemafacill.online/" target="_blank">
                    <span class="project-number">02</span><div><h3>Delivery Integrado</h3><p>Experiência de pedidos online conectada ao sistema comercial, com catálogo, carrinho e gestão administrativa.</p></div><div class="tags"><span class="tag">PHP</span><span class="tag">Integração</span><span class="tag">Responsivo</span><span class="tag">UX</span></div><span class="project-arrow"><i class="fa-solid fa-arrow-up-right-from-square"></i></span>
                </a>
                <a class="project reveal" href="https://github.com/Manuelaandrade1234/petshop-fullstack" target="_blank">
                    <span class="project-number">03</span><div><h3>Petshop Full Stack</h3><p>API com módulos de tutores, pets, produtos, serviços e agendamentos, autenticação e documentação.</p></div><div class="tags"><span class="tag">Node.js</span><span class="tag">Express</span><span class="tag">MongoDB</span><span class="tag">Swagger</span></div><span class="project-arrow"><i class="fa-solid fa-arrow-up-right-from-square"></i></span>
                </a>
                <a class="project reveal" href="https://github.com/Manuelaandrade1234/Beauty-Hub" target="_blank">
                    <span class="project-number">04</span><div><h3>Beauty Hub</h3><p>Projeto web voltado à organização de serviços e experiência digital no segmento de beleza.</p></div><div class="tags"><span class="tag">Web</span><span class="tag">Front-end</span><span class="tag">UI</span></div><span class="project-arrow"><i class="fa-solid fa-arrow-up-right-from-square"></i></span>
                </a>
            </div>
        </div>
    </section>

    <section class="section" id="tecnologias">
        <div class="container">
            <div class="section-head reveal">
                <div><span class="eyebrow">Tecnologias</span><h2>Tecnologias que dão vida às ideias.</h2></div>
                <p>Um conjunto de tecnologias usadas conforme a necessidade de cada solução, com foco em estabilidade, manutenção e boa experiência.</p>
            </div>
            <div class="skills-grid">
                <div class="skill reveal"><i class="fa-brands fa-php"></i><span>PHP</span></div>
                <div class="skill reveal"><i class="fa-brands fa-js"></i><span>JavaScript</span></div>
                <div class="skill reveal"><i class="fa-brands fa-java"></i><span>Java</span></div>
                <div class="skill reveal"><i class="fa-brands fa-python"></i><span>Python</span></div>
                <div class="skill reveal"><i class="fa-brands fa-node-js"></i><span>Node.js</span></div>
                <div class="skill reveal"><i class="fa-solid fa-database"></i><span>MySQL</span></div>
                <div class="skill reveal"><i class="fa-solid fa-leaf"></i><span>MongoDB</span></div>
                <div class="skill reveal"><i class="fa-brands fa-html5"></i><span>HTML5</span></div>
                <div class="skill reveal"><i class="fa-brands fa-css3-alt"></i><span>CSS3</span></div>
                <div class="skill reveal"><i class="fa-brands fa-git-alt"></i><span>Git</span></div>
                <div class="skill reveal"><i class="fa-brands fa-linux"></i><span>Linux</span></div>
                <div class="skill reveal"><i class="fa-solid fa-plug"></i><span>APIs REST</span></div>
                <div class="skill reveal"><i class="fa-solid fa-file-invoice"></i><span>NFC-e</span></div>
                <div class="skill reveal"><i class="fa-brands fa-bootstrap"></i><span>Bootstrap</span></div>
                <div class="skill reveal"><i class="fa-brands fa-github"></i><span>GitHub</span></div>
            </div>
        </div>
    </section>

    <section class="section journey" id="trajetoria">
        <div class="container">
            <div class="section-head reveal">
                <div><span class="eyebrow">Trajetória</span><h2>Uma história escrita projeto por projeto.</h2></div>
                <p>Cada etapa representa uma nova habilidade, um desafio superado e mais maturidade para desenvolver soluções melhores.</p>
            </div>
            <div class="timeline">
                <div class="timeline-item reveal"><article class="timeline-card"><time>2025</time><h3>Base em desenvolvimento web</h3><p>Formação prática em HTML, CSS, JavaScript, PHP e fundamentos de programação.</p></article></div>
                <div class="timeline-item reveal"><article class="timeline-card"><time>2025–2026</time><h3>Linux, redes e segurança</h3><p>Aprofundamento em Linux Essentials, redes, Packet Tracer e fundamentos de defesa de rede.</p></article></div>
                <div class="timeline-item reveal"><article class="timeline-card"><time>2026</time><h3>Projetos Full Stack</h3><p>Desenvolvimento com PHP, Java, Python, Node.js, bancos SQL e NoSQL.</p></article></div>
                <div class="timeline-item reveal"><article class="timeline-card"><time>ATUALMENTE</time><h3>Andrade Development</h3><p>Criação de sistemas e soluções digitais com foco em negócios, automação e experiência do usuário.</p></article></div>
                <div class="timeline-item reveal"><article class="timeline-card"><time>Atualmente</time><h3>Evolução constante</h3><p>Estou sempre estudando, desenvolvendo novos projetos e aprimorando minhas habilidades para entregar soluções cada vez melhores.</p></article></div>
            </div>
        </div>
    </section>

    <section class="section" id="certificacoes">
        <div class="container">
            <div class="section-head reveal">
                <div><span class="eyebrow">Formação complementar</span><h2>Conhecimento aplicado em cada projeto.</h2></div>
                <p>Uma seleção dos estudos que complementam minha experiência e ampliam minha visão sobre desenvolvimento de software.</p>
            </div>
            <div class="cert-grid">
                <article class="cert reveal"><small>135 horas</small><h3>Python Desenvolvedor 2026</h3><p>Do zero à inteligência artificial.</p></article>
                <article class="cert reveal"><small>54 horas</small><h3>Java Completo</h3><p>Programação orientada a objetos e projetos.</p></article>
                <article class="cert reveal"><small>36 horas</small><h3>PHP do Zero à Maestria</h3><p>Desenvolvimento web e projetos práticos.</p></article>
                <article class="cert reveal"><small>70 horas</small><h3>Linux Essentials</h3><p>Fundamentos de sistemas Linux.</p></article>
                <article class="cert reveal"><small>27 horas</small><h3>Defesa de Rede</h3><p>Conceitos essenciais de proteção e segurança.</p></article>
                <article class="cert reveal"><small>12 horas</small><h3>Rocketseat Discover</h3><p>Fundamentos e práticas de desenvolvimento web.</p></article>
            </div>
        </div>
    </section>

    <section class="section" id="contato">
        <div class="container">
            <div class="contact-card reveal">
                <div><span class="eyebrow" style="color:var(--gold-light)">Vamos criar algo</span><h2>Tem uma ideia esperando para sair do papel?</h2><p>Tem uma ideia, um desafio ou um projeto em mente? Vamos conversar e transformar isso em uma solução digital moderna, eficiente e preparada para crescer junto com o seu negócio.</p></div>
                <a class="btn" href="https://wa.me/<?= $whatsapp ?>?text=<?= $mensagem ?>" target="_blank"><i class="fa-brands fa-whatsapp"></i> Falar no WhatsApp</a>
            </div>
        </div>
    </section>
</main>

<footer>
    <div class="container footer-row">
        <p>© <?= $ano ?> Manuela Andrade. Feito com propósito e tecnologia.</p>
        <div class="social">
            <a href="https://github.com/Manuelaandrade1234" target="_blank" aria-label="GitHub"><i class="fa-brands fa-github"></i></a>
            <a href="https://www.linkedin.com/in/manuela-andrade-b330a2353" target="_blank" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="https://wa.me/<?= $whatsapp ?>" target="_blank" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
        </div>
    </div>
</footer>
<a class="wa-float" href="https://wa.me/<?= $whatsapp ?>?text=<?= $mensagem ?>" target="_blank" aria-label="Falar no WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
<script>
    const menuBtn = document.querySelector('.menu-btn');
    const menu = document.getElementById('menu');
    menuBtn.addEventListener('click', () => menu.classList.toggle('open'));
    menu.querySelectorAll('a').forEach(link => link.addEventListener('click', () => menu.classList.remove('open')));

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: .12 });
    document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
</script>
</body>
</html>