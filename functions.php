<?php
/**
 <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educação Que Reflete - Onde cada criança se vê no mundo que habita</title>
    <meta name="description" content="Educação Que Reflete - Projeto familiar de educação sensível e criativa baseada na pedagogia Waldorf. Onde cada criança se vê no mundo que habita.">
    <meta name="keywords" content="educação, pedagogia Waldorf, brincar livre, educação familiar, ensino criativo, educação sensível">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Source+Serif+Pro&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --azul-reflexivo: #a8d0e6;
            --dourado-suave: #f9e076;
            --verde-natural: #6b8e6e;
            --bege-aconchegante: #f7f3e8;
            --cinza-claro: #f8f9fa;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, var(--bege-aconchegante) 0%, #ffffff 100%);
            color: #333;
            line-height: 1.6;
            padding-top: 80px;
        }

        /* HEADER E LOGO */
        .header-principal {
            background: linear-gradient(135deg, var(--azul-reflexivo) 0%, #97c4e0 100%);
            padding: 2rem 0;
            text-align: center;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            position: relative;
            overflow: hidden;
        }

        .header-principal::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path d="M0,0 L100,0 L100,100 Z" fill="rgba(255,255,255,0.2)"/></svg>');
            background-size: cover;
        }

        .logo-container {
            position: relative;
            z-index: 2;
        }

        .logo-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto 1rem auto;
            border: 4px solid white;
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
            display: block;
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        .logo-texto {
            font-size: 3.5rem;
            font-weight: 300;
            color: #333;
            margin-bottom: 0.5rem;
            font-family: 'Montserrat', sans-serif;
        }

        .logo-slogan {
            font-size: 1.3rem;
            color: #555;
            font-weight: 400;
            font-style: italic;
            min-height: 1.5em;
        }

        /* MENU PRINCIPAL RESPONSIVO */
        .nav-principal {
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(10px);
            padding: 0;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
            position: relative;
        }

        .logo-menu {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--verde-natural);
            text-decoration: none;
            font-family: 'Montserrat', sans-serif;
        }

        /* Menu Desktop */
        .nav-menu {
            display: flex;
            gap: 1.5rem;
            align-items: center;
        }

        .nav-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.8rem 1.5rem;
            background: linear-gradient(135deg, var(--verde-natural) 0%, #5a7c5d 100%);
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(107, 142, 110, 0.3);
            white-space: nowrap;
            font-family: 'Montserrat', sans-serif;
        }

        .nav-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(107, 142, 110, 0.5);
        }

        .nav-item i {
            font-size: 1.1rem;
        }

        /* Hamburger Menu */
        .hamburger {
            display: none;
            background: linear-gradient(135deg, var(--verde-natural) 0%, #5a7c5d 100%);
            border: none;
            color: white;
            padding: 0.8rem;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(107, 142, 110, 0.3);
        }

        .hamburger:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(107, 142, 110, 0.4);
        }

        /* Menu Mobile */
        .mobile-menu {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background: linear-gradient(135deg, var(--azul-reflexivo) 0%, var(--verde-natural) 100%);
            z-index: 9999;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 2rem;
            padding: 2rem;
        }

        .mobile-menu.active {
            display: flex;
        }

        .mobile-nav-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1.2rem 2rem;
            background: rgba(255, 255, 255, 0.95);
            color: var(--verde-natural);
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            width: 100%;
            max-width: 300px;
            justify-content: center;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            font-family: 'Montserrat', sans-serif;
        }

        .mobile-nav-item:hover {
            transform: translateX(10px);
            background: white;
        }

        .close-menu {
            position: absolute;
            top: 2rem;
            right: 2rem;
            background: rgba(255, 255, 255, 0.95);
            border: none;
            color: var(--verde-natural);
            font-size: 2rem;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .close-menu:hover {
            transform: scale(1.1);
            background: white;
        }

        /* SEÇÕES GERAIS */
        .secao {
            padding: 4rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-title {
            font-size: 2.5rem;
            color: var(--verde-natural);
            text-align: center;
            margin-bottom: 3rem;
            font-weight: 300;
            font-family: 'Montserrat', sans-serif;
        }

        /* SEÇÃO DO VÍDEO */
        .video-section {
            background: linear-gradient(135deg, var(--cinza-claro) 0%, #ffffff 100%);
            padding: 4rem 2rem;
            text-align: center;
        }

        .video-container {
            max-width: 900px;
            margin: 0 auto;
            background: white;
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .video-title {
            font-size: 2.2rem;
            color: var(--verde-natural);
            margin-bottom: 2rem;
            font-weight: 300;
            font-family: 'Montserrat', sans-serif;
        }

        .video-placeholder {
            background: linear-gradient(135deg, var(--azul-reflexivo) 0%, var(--dourado-suave) 100%);
            border-radius: 15px;
            padding: 3rem;
            color: #333;
            margin-bottom: 1.5rem;
            position: relative;
        }

        .video-icon {
            font-size: 4rem;
            margin-bottom: 1rem;
        }

        .youtube-link {
            display: inline-block;
            background: #ff0000;
            color: white;
            padding: 1rem 2rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            margin-top: 1rem;
            font-family: 'Montserrat', sans-serif;
        }

        .youtube-link:hover {
            background: #cc0000;
            transform: scale(1.05);
        }

        .container-quem-somos {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            position: relative;
            z-index: 2;
        }

        .titulo-centralizado {
            text-align: center;
            margin-bottom: 2rem;
            font-size: 2.5rem;
            color: var(--verde-natural);
            position: relative;
            font-family: 'Montserrat', sans-serif;
        }

        .titulo-centralizado::after {
            content: '';
            display: block;
            width: 80px;
            height: 3px;
            background: linear-gradient(135deg, var(--azul-reflexivo), var(--verde-natural));
            margin: 1rem auto;
            border-radius: 2px;
        }

        .texto-centralizado {
            text-align: center;
            margin-left: auto;
            margin-right: auto;
        }

        .introducao-familia {
            max-width: 800px;
            margin: 0 auto 4rem auto;
        }

        .introducao-familia p {
            font-size: 1.25rem;
            line-height: 1.8;
            color: #555;
            background: rgba(255, 255, 255, 0.7);
            padding: 2.5rem;
            border-radius: 20px;
            border: 2px solid rgba(107, 142, 110, 0.1);
            box-shadow: 0 8px 25px rgba(0,0,0,0.05);
        }

        /* SEÇÃO DOS 3 PORTAIS */
        .portais-section {
            padding: 4rem 2rem;
            background: linear-gradient(135deg, var(--cinza-claro) 0%, #ffffff 100%);
        }

        .portais-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .portal-card {
            background: white;
            border-radius: 20px;
            padding: 2.5rem;
            text-align: center;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            border: 2px solid transparent;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100%;
            min-height: 500px;
        }

        .portal-card:hover {
            transform: translateY(-10px);
            border-color: var(--azul-reflexivo);
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        }

        .portal-logo {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 1.5rem;
            border: 3px solid var(--azul-reflexivo);
        }

        .portal-title {
            font-size: 1.8rem;
            color: var(--verde-natural);
            margin-bottom: 1rem;
            font-family: 'Montserrat', sans-serif;
        }

        .portal-desc {
            color: #666;
            margin-bottom: 2rem;
            line-height: 1.6;
            flex-grow: 1;
        }

        .portal-link {
            display: inline-block;
            background: linear-gradient(135deg, var(--verde-natural) 0%, #5a7c5d 100%);
            color: white;
            padding: 1rem 2rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            margin-bottom: 1.5rem;
            margin-top: auto;
            font-family: 'Montserrat', sans-serif;
        }

        .portal-link:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(107, 142, 110, 0.4);
        }

        .like-container {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
            margin-top: 1rem;
        }

        .like-btn {
            background: none;
            border: 2px solid var(--azul-reflexivo);
            color: var(--azul-reflexivo);
            padding: 0.5rem 1rem;
            border-radius: 25px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-family: 'Montserrat', sans-serif;
        }

        .like-btn:hover {
            background: var(--azul-reflexivo);
            color: white;
        }

        .like-btn.curtido {
            background: var(--verde-natural) !important;
            color: white !important;
            border-color: var(--verde-natural) !important;
        }

        .like-count {
            font-weight: 600;
            color: var(--verde-natural);
            font-family: 'Montserrat', sans-serif;
        }

        /* SEÇÃO QUEM SOMOS */
        .cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin: 4rem 0;
        }

        .card-unificado {
            background: white;
            border-radius: 20px;
            padding: 2.5rem;
            text-align: center;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            border: 2px solid transparent;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100%;
            min-height: 450px;
            position: relative;
        }

        .card-unificado:hover {
            transform: translateY(-10px);
            border-color: var(--azul-reflexivo);
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        }

        .card-unificado::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(135deg, var(--azul-reflexivo), var(--verde-natural));
            border-radius: 20px 20px 0 0;
        }

        .card-image {
            width: 140px;
            height: 140px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid var(--azul-reflexivo);
            margin-bottom: 1.5rem;
            position: relative;
        }

        .decoracao-foto {
            position: absolute;
            top: -8px;
            left: -8px;
            right: -8px;
            bottom: -8px;
            border: 2px solid var(--dourado-suave);
            border-radius: 50%;
            animation: pulse 3s infinite;
        }

        @keyframes pulse {
            0%, 100% { opacity: 0.5; transform: scale(1); }
            50% { opacity: 0.8; transform: scale(1.05); }
        }

        .card-title {
            font-size: 1.4rem;
            color: var(--verde-natural);
            margin-bottom: 1rem;
            font-weight: 600;
            font-family: 'Montserrat', sans-serif;
        }

        .card-subtitle {
            color: var(--azul-reflexivo);
            font-weight: 600;
            margin-bottom: 1rem;
            font-size: 0.95rem;
            font-family: 'Montserrat', sans-serif;
        }

        .card-desc {
            color: #666;
            line-height: 1.6;
            margin-bottom: 1.5rem;
            flex-grow: 1;
        }

        .card-link {
            display: inline-block;
            background: linear-gradient(135deg, var(--verde-natural) 0%, #5a7c5d 100%);
            color: white;
            padding: 1rem 2rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            margin-top: auto;
            font-family: 'Montserrat', sans-serif;
        }

        .card-link:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(107, 142, 110, 0.4);
        }

        .redes-sociais {
            display: flex;
            justify-content: center;
            gap: 0.8rem;
            margin-top: 1rem;
        }

        .icone-rede {
            display: inline-block;
            padding: 0.5rem;
            background: var(--bege-aconchegante);
            border-radius: 50%;
            transition: all 0.3s ease;
            text-decoration: none;
            font-size: 1.1rem;
        }

        .icone-rede:hover {
            background: var(--dourado-suave);
            transform: scale(1.2);
        }

        .missao-valores {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 4rem;
            padding-top: 3rem;
            border-top: 2px solid rgba(107, 142, 110, 0.2);
        }

        .cartao-missao, .cartao-valores {
            background: white;
            padding: 2.5rem;
            border-radius: 16px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .cartao-missao h4, .cartao-valores h4 {
            color: var(--verde-natural);
            margin-bottom: 1.5rem;
            font-size: 1.3rem;
            font-family: 'Montserrat', sans-serif;
        }

        .lista-centralizada {
            text-align: center;
        }

        .cartao-valores li {
            padding: 0.7rem 0;
            border-bottom: 1px solid rgba(0,0,0,0.1);
            position: relative;
            padding-left: 0;
            text-align: center;
            list-style: none;
        }

        .cartao-valores li:before {
            content: '🌱';
            margin-right: 0.5rem;
        }

        /* SEÇÃO ESCOLAS WALDORF - CARDS EM LINHA ÚNICA */
        .escolas-section {
            padding: 4rem 2rem;
            background: linear-gradient(135deg, #f8f5f0 0%, #ffffff 100%);
        }

        .escolas-container {
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
        }

        .escolas-scroll-container {
            display: flex;
            overflow-x: auto;
            gap: 25px;
            padding: 20px 10px;
            scroll-behavior: smooth;
            -webkit-overflow-scrolling: touch;
            scrollbar-width: thin;
            scrollbar-color: var(--azul-reflexivo) var(--bege-aconchegante);
        }

        .escolas-scroll-container::-webkit-scrollbar {
            height: 8px;
        }

        .escolas-scroll-container::-webkit-scrollbar-track {
            background: var(--bege-aconchegante);
            border-radius: 10px;
        }

        .escolas-scroll-container::-webkit-scrollbar-thumb {
            background: var(--azul-reflexivo);
            border-radius: 10px;
        }

        .escola-card {
            flex: 0 0 auto;
            width: 320px;
            background: white;
            border-radius: 20px;
            padding: 2rem;
            text-align: center;
            box-shadow: 0 6px 16px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            border: 2px solid transparent;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100%;
            min-height: 420px;
            position: relative;
        }

        .escola-card:hover {
            transform: translateY(-8px);
            border-color: var(--azul-reflexivo);
            box-shadow: 0 12px 20px rgba(0,0,0,0.15);
        }

        .escola-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(135deg, var(--azul-reflexivo), var(--verde-natural));
            border-radius: 20px 20px 0 0;
        }

        .escola-logo {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 1.5rem;
            border: 3px solid var(--azul-reflexivo);
        }

        .escola-info {
            margin: 1rem 0;
            text-align: left;
            font-size: 0.9rem;
            width: 100%;
        }

        .escola-info p {
            margin: 0.5rem 0;
            color: #555;
        }

        .escola-descricao {
            color: #666;
            margin-bottom: 1rem;
            line-height: 1.6;
            flex-grow: 1;
        }

        .escola-meta {
            font-size: 0.9em;
            color: #888;
            margin-top: 0.5rem;
            font-style: italic;
        }

        .escola-actions {
            display: flex;
            gap: 0.5rem;
            margin-top: 1rem;
            flex-wrap: wrap;
            justify-content: center;
            width: 100%;
        }

        .btn-escola {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.7rem 1rem;
            border-radius: 8px;
            text-decoration: none;
            font-size: 0.85rem;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            flex: 1;
            min-width: 120px;
            justify-content: center;
            font-family: 'Montserrat', sans-serif;
        }

        .btn-site {
            background: var(--verde-natural);
            color: white;
        }

        .btn-maps {
            background: var(--azul-reflexivo);
            color: white;
        }

        .btn-escola:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }

        .btn-site:hover {
            background: #5a7c5d;
        }

        .btn-maps:hover {
            background: #8bb9d8;
        }

        .escolas-navigation {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 20px;
        }

        .nav-btn {
            background: var(--azul-reflexivo);
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            color: white;
            font-weight: bold;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .nav-btn:hover {
            background: var(--verde-natural);
            transform: scale(1.1);
        }

        .nav-btn:disabled {
            background: #ccc;
            cursor: not-allowed;
            transform: none;
        }

        /* FORMULÁRIO DE CONTATO */
        .form-contato {
            background: white;
            border-radius: 20px;
            padding: 3rem;
            margin: 4rem auto;
            max-width: 700px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: var(--verde-natural);
            font-family: 'Montserrat', sans-serif;
        }

        .form-input, .form-textarea {
            width: 100%;
            padding: 1rem;
            border: 2px solid var(--bege-aconchegante);
            border-radius: 10px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .form-input:focus, .form-textarea:focus {
            outline: none;
            border-color: var(--azul-reflexivo);
        }

        .form-textarea {
            min-height: 150px;
            resize: vertical;
        }

        .btn-enviar {
            background: linear-gradient(135deg, var(--verde-natural) 0%, #5a7c5d 100%);
            color: white;
            border: none;
            padding: 1rem 2rem;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            display: block;
            width: 100%;
            max-width: 300px;
            margin: 0 auto;
            font-family: 'Montserrat', sans-serif;
        }

        .btn-enviar:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(107, 142, 110, 0.4);
        }

        /* RODAPÉ */
        footer {
            background-color: var(--verde-natural);
            color: white;
            text-align: center;
            padding: 3rem 2rem;
            margin-top: 4rem;
        }

        footer a {
            color: white;
            margin: 0 0.5rem;
            text-decoration: none;
            transition: opacity 0.3s ease;
        }

        footer a:hover {
            opacity: 0.8;
            text-decoration: underline;
        }

        /* RESPONSIVIDADE */
        @media (max-width: 1024px) {
            .nav-menu {
                gap: 1rem;
            }
            
            .nav-item {
                padding: 0.7rem 1.2rem;
                font-size: 0.9rem;
            }
        }

        @media (max-width: 768px) {
            body {
                padding-top: 70px;
            }

            .nav-menu {
                display: none;
            }

            .hamburger {
                display: block;
            }

            .logo-texto {
                font-size: 2.5rem;
            }
            
            .logo-img {
                width: 100px;
                height: 100px;
            }
            
            .section-title, .titulo-centralizado {
                font-size: 2rem;
            }
            
            .portais-grid, .cards-grid {
                grid-template-columns: 1fr;
            }

            .introducao-familia p {
                padding: 2rem;
                font-size: 1.1rem;
            }

            .missao-valores {
                grid-template-columns: 1fr;
            }

            .card-image {
                width: 120px;
                height: 120px;
            }

            .portal-logo, .escola-logo {
                width: 80px;
                height: 80px;
            }

            .card-unificado, .portal-card, .escola-card {
                min-height: 400px;
                padding: 2rem;
            }

            .form-contato {
                padding: 2rem;
            }

            .escola-actions {
                flex-direction: column;
            }
            
            .btn-escola {
                width: 100%;
            }

            .video-container {
                padding: 1.5rem;
            }

            .video-placeholder {
                padding: 2rem;
            }

            .escola-card {
                width: 280px;
            }
        }

        @media (max-width: 480px) {
            .card-unificado, .portal-card, .escola-card {
                padding: 1.5rem;
            }

            .card-image {
                width: 100px;
                height: 100px;
            }

            .portal-logo, .escola-logo {
                width: 70px;
                height: 70px;
            }

            .cartao-missao, .cartao-valores {
                padding: 2rem 1.5rem;
            }

            .introducao-familia p {
                padding: 1.5rem;
            }

            .card-unificado, .portal-card {
                min-height: 380px;
            }

            .escola-card {
                min-height: 420px;
                width: 260px;
            }

            .nav-container {
                padding: 0.8rem 1.5rem;
            }

            footer {
                padding: 2rem 1rem;
            }

            .form-contato {
                padding: 1.5rem;
            }

            .video-container {
                padding: 1rem;
            }

            .video-placeholder {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- MENU PRINCIPAL RESPONSIVO -->
    <nav class="nav-principal" aria-label="Navegação principal">
        <div class="nav-container">
            <!-- Logo -->
            <a href="#" class="logo-menu">Educação Que Reflete</a>

            <!-- Menu Desktop -->
            <div class="nav-menu">
                <a href="#video" class="nav-item">
                    <i class="fas fa-play-circle" aria-hidden="true"></i>
                    <span>Apresentação</span>
                </a>
                <a href="#portais" class="nav-item">
                    <i class="fas fa-door-open" aria-hidden="true"></i>
                    <span>Nossos Portais</span>
                </a>
                <a href="#quem-somos" class="nav-item">
                    <i class="fas fa-heart" aria-hidden="true"></i>
                    <span>Quem Somos</span>
                </a>
                <a href="#escolas-waldorf" class="nav-item">
                    <i class="fas fa-school" aria-hidden="true"></i>
                    <span>Escolas</span>
                </a>
                <a href="#contato" class="nav-item">
                    <i class="fas fa-envelope" aria-hidden="true"></i>
                    <span>Contato</span>
                </a>
            </div>

            <!-- Hamburger Menu -->
            <button class="hamburger" id="hamburger-btn" aria-label="Abrir menu">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </nav>

    <!-- Menu Mobile -->
    <div class="mobile-menu" id="mobile-menu">
        <button class="close-menu" id="close-menu" aria-label="Fechar menu">
            <i class="fas fa-times"></i>
        </button>
        
        <a href="#video" class="mobile-nav-item" onclick="fecharMenu()">
            <i class="fas fa-play-circle" aria-hidden="true"></i>
            <span>Apresentação</span>
        </a>
        <a href="#portais" class="mobile-nav-item" onclick="fecharMenu()">
            <i class="fas fa-door-open" aria-hidden="true"></i>
            <span>Nossos Portais</span>
        </a>
        <a href="#quem-somos" class="mobile-nav-item" onclick="fecharMenu()">
            <i class="fas fa-heart" aria-hidden="true"></i>
            <span>Quem Somos</span>
        </a>
        <a href="#escolas-waldorf" class="mobile-nav-item" onclick="fecharMenu()">
            <i class="fas fa-school" aria-hidden="true"></i>
            <span>Escolas Waldorf</span>
        </a>
        <a href="#contato" class="mobile-nav-item" onclick="fecharMenu()">
            <i class="fas fa-envelope" aria-hidden="true"></i>
            <span>Contato</span>
        </a>
    </div>

    <!-- HEADER COM LOGO -->
    <header class="header-principal" role="banner">
        <div class="logo-container">
            <img src="imagens/logos/logo-educacao-que-reflete.jpg" 
                 alt="Educação Que Reflete" 
                 class="logo-img"
                 loading="lazy"
                 width="120" 
                 height="120">
            <h1 class="logo-texto">Educação Que Reflete</h1>
            <p class="logo-slogan" aria-live="polite"></p>
        </div>
    </header>

    <main role="main">
        <!-- SEÇÃO DO VÍDEO (TRANSPLANTADA) -->
        <section id="video" class="video-section">
            <div class="video-container">
                <h2 class="video-title">Apresentação com Thaiara</h2>
                <div class="video-placeholder">
                    <div class="video-icon" aria-hidden="true">🎬</div>
                    <h3>Vídeo de Apresentação</h3>
                    <p>Em breve: Thaiara apresenta a visão do Educação Que Reflete</p>
                    <p><small>Espaço reservado para embed do YouTube</small></p>
                    <!-- FUTURO: Embed do YouTube aqui -->
                    <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/SEU_CODIGO" frameborder="0" allowfullscreen></iframe> -->
                    <a href="#" class="youtube-link" target="_blank" rel="noopener">
                        <i class="fab fa-youtube" aria-hidden="true"></i> Acesse nosso Canal
                    </a>
                </div>
                <p>Assista à Thaiara compartilhar nossa visão transformadora da educação</p>
            </div>
        </section>

        <!-- SEÇÃO DOS 3 PORTAIS -->
        <section id="portais" class="portais-section">
            <div class="section-container">
                <h2 class="section-title">Nossos Três Portais</h2>
                
                <div class="portais-grid">
                    <!-- PORTAL 1 - ESPELHO DE BRINCAR -->
                    <div class="portal-card">
                        <img src="imagens/logos/logo-espelho-de-brincar.jpg" 
                             alt="Espelho de Brincar" 
                             class="portal-logo"
                             loading="lazy"
                             width="100" 
                             height="100">
                        <h3 class="portal-title">Espelho de Brincar</h3>
                        <p class="portal-desc">Para crianças de 0-7 anos. O mundo é bom. A casa como ventre ampliado onde cada canto é convite ao movimento sagrado.</p>
                        <a href="portais/portal-espelho-de-brincar/index.html" class="portal-link">Conhecer Este Portal</a>
                        <div class="like-container">
                            <button class="like-btn" onclick="curtirPortal(1)">
                                <i class="fas fa-heart"></i> Curtir
                            </button>
                            <span class="like-count" id="likes-1">0</span>
                        </div>
                    </div>

                    <!-- PORTAL 2 - ESPELHO DO CÉU -->
                    <div class="portal-card">
                        <img src="imagens/logos/logo-espelho-do-ceu.jpg" 
                             alt="Espelho do Céu" 
                             class="portal-logo"
                             loading="lazy"
                             width="100" 
                             height="100">
                        <h3 class="portal-title">Espelho do Céu</h3>
                        <p class="portal-desc">Para crianças de 7-14 anos. O mundo é belo. A casa como atelier de encontros onde cada atividade é pintura da alma.</p>
                        <a href="portais/portal-espelho-do-ceu.html" class="portal-link">Explorar Este Portal</a>
                        <div class="like-container">
                            <button class="like-btn" onclick="curtirPortal(2)">
                                <i class="fas fa-heart"></i> Curtir
                            </button>
                            <span class="like-count" id="likes-2">0</span>
                        </div>
                    </div>

                    <!-- PORTAL 3 - ESPELHO D'ÁGUA -->
                    <div class="portal-card">
                        <img src="imagens/logos/logo-espelho-dagua.jpg" 
                             alt="Espelho D'Água" 
                             class="portal-logo"
                             loading="lazy"
                             width="100" 
                             height="100">
                        <h3 class="portal-title">Espelho D'Água</h3>
                        <p class="portal-desc">Para jovens de 14-21 anos. O mundo é verdadeiro. A casa como ágora de ideias onde cada diálogo é busca de sentido.</p>
                        <a href="portais/portal-espelho-dagua.html" class="portal-link">Acessar Este Portal</a>
                        <div class="like-container">
                            <button class="like-btn" onclick="curtirPortal(3)">
                                <i class="fas fa-heart"></i> Curtir
                            </button>
                            <span class="like-count" id="likes-3">0</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SEÇÃO QUEM SOMOS COMPLETA -->
        <section id="quem-somos" class="secao" style="background: white;">
            <div class="container-quem-somos">
                <h2 class="titulo-centralizado">Quem Somos</h2>
                
                <div class="introducao-familia">
                    <p class="texto-centralizado">Somos uma família que acredita que a educação nasce do afeto e se fortalece no brincar. Nosso propósito é abrir um portal educativo para famílias que buscam uma educação mais sensível, criativa e conectada à natureza da criança.</p>
                </div>

                <!-- EQUIPE E NOVOS ESPAÇOS COM LAYOUT UNIFICADO -->
                <div class="cards-grid">
                    <!-- Carlos -->
                    <div class="card-unificado">
                        <div class="foto-container">
                            <img src="imagens/equipe/carlos.jpg" 
                                 alt="Carlos" 
                                 class="card-image"
                                 loading="lazy"
                                 width="140" 
                                 height="140">
                            <div class="decoracao-foto"></div>
                        </div>
                        <h3 class="card-title">Carlos</h3>
                        <p class="card-subtitle">Idealizador & Documentarista</p>
                        <p class="card-desc">O pai que tece narrativas entre filosofia e infância, capturando a magia do brincar através das lentes.</p>
                        <div class="redes-sociais">
                            <a href="#" class="icone-rede">📷</a>
                            <a href="#" class="icone-rede">✍️</a>
                        </div>
                    </div>

                    <!-- Thaiara -->
                    <div class="card-unificado">
                        <div class="foto-container">
                            <img src="imagens/equipe/thaiara.jpg" 
                                 alt="Thaiara" 
                                 class="card-image"
                                 loading="lazy"
                                 width="140" 
                                 height="140">
                            <div class="decoracao-foto"></div>
                        </div>
                        <h3 class="card-title">Thaiara</h3>
                        <p class="card-subtitle">Pedagoga Waldorf</p>
                        <p class="card-desc">Conduz as atividades e a base antroposófica, trazendo o coração da pedagogia Waldorf para cada projeto.</p>
                        <div class="redes-sociais">
                            <a href="#" class="icone-rede">📚</a>
                            <a href="#" class="icone-rede">🎨</a>
                        </div>
                    </div>

                    <!-- Guto -->
                    <div class="card-unificado">
                        <div class="foto-container">
                            <img src="imagens/equipe/guto.jpg" 
                                 alt="Mauro Augusto (Guto)" 
                                 class="card-image"
                                 loading="lazy"
                                 width="140" 
                                 height="140">
                            <div class="decoracao-foto"></div>
                        </div>
                        <h3 class="card-title">Mauro Augusto (Guto)</h3>
                        <p class="card-subtitle">Nossa Conexão com Todas as Idades</p>
                        <p class="card-desc">Aos 14 anos, é nossa âncora e traz autenticidade para os vídeos, mostrando que cada fase tem sua beleza.</p>
                        <div class="redes-sociais">
                            <a href="#" class="icone-rede">🎬</a>
                            <a href="#" class="icone-rede">🎮</a>
                        </div>
                    </div>

                    <!-- Sofia -->
                    <div class="card-unificado">
                        <div class="foto-container">
                            <img src="imagens/equipe/sofia.jpg" 
                                 alt="Sofia" 
                                 class="card-image"
                                 loading="lazy"
                                 width="140" 
                                 height="140">
                            <div class="decoracao-foto"></div>
                        </div>
                        <h3 class="card-title">Sofia</h3>
                        <p class="card-subtitle">Artesã & Diretora Criativa</p>
                        <p class="card-desc">Especialista em amigurumi, cuida da direção criativa, design e técnica, dando vida aos projetos com suas mãos.</p>
                        <div class="redes-sociais">
                            <a href="#" class="icone-rede">🧶</a>
                            <a href="#" class="icone-rede">🎨</a>
                        </div>
                    </div>

                    <!-- Gestão de Mídias Sociais -->
                    <div class="card-unificado">
                        <div class="foto-container">
                            <img src="imagens/equipe/gesta.jpg" 
                                 alt="Gestão de Mídias Sociais" 
                                 class="card-image"
                                 loading="lazy"
                                 width="140" 
                                 height="140">
                            <div class="decoracao-foto"></div>
                        </div>
                        <h3 class="card-title">Gestão de Mídias Sociais</h3>
                        <p class="card-subtitle">Curadoria e Conteúdo</p>
                        <p class="card-desc">Espaço dedicado à criação de conteúdo para nossas redes sociais. Compartilhamos inspirações, atividades e reflexões sobre educação viva.</p>
                        <a href="#" class="card-link">Acompanhe Nossas Redes</a>
                    </div>

                    <!-- Famílias Participantes -->
                    <div class="card-unificado">
                        <div class="foto-container">
                            <img src="imagens/equipe/familias.jpg" 
                                 alt="Famílias Participantes" 
                                 class="card-image"
                                 loading="lazy"
                                 width="140" 
                                 height="140">
                            <div class="decoracao-foto"></div>
                        </div>
                        <h3 class="card-title">Famílias Participantes</h3>
                        <p class="card-subtitle">Junte-se a Nós</p>
                        <p class="card-desc">Convite para famílias que desejam fazer parte dessa jornada educativa. Participe de nossos encontros, oficinas e trocas de experiências.</p>
                        <a href="#contato" class="card-link">Quero Participar</a>
                    </div>
                </div>

                <!-- Missão e Valores -->
                <div class="missao-valores">
                    <div class="cartao-missao">
                        <h4 class="titulo-centralizado">🌿 Nossa Missão</h4>
                        <p class="texto-centralizado">Ser um espelho que reflete a essência do brincar livre, ajudando famílias a reconectarem-se com os ritmos naturais da infância.</p>
                    </div>
                    <div class="cartao-valores">
                        <h4 class="titulo-centralizado">💖 Nossos Valores</h4>
                        <ul class="lista-centralizada">
                            <li>Respeito pelo ritmo de cada criança</li>
                            <li>Educação como ato de amor</li>
                            <li>Conexão com a natureza</li>
                            <li>Brincar como linguagem universal</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- SEÇÃO ESCOLAS WALDORF - CARDS EM LINHA ÚNICA -->
        <section id="escolas-waldorf" class="escolas-section">
            <div class="escolas-container">
                <h2 class="section-title">Escolas Waldorf em Piracicaba</h2>
                
                <div style="text-align: center; max-width: 800px; margin: 0 auto 3rem auto;">
                    <p class="texto-centralizado">Em Piracicaba, temos escolas com uma proposta de educação que honra a infância, baseada na Antroposofia de Rudolf Steiner - onde o aprender nasce do afeto, da natureza e do respeito pelo desenvolvimento único de cada criança.</p>
                </div>

                <div class="escolas-scroll-container" id="escolas-scroll">
                    <!-- Jardim Amanari -->
                    <div class="escola-card">
                        <img src="imagens/escolas/amanari-logo.jpg" 
                             alt="Jardim Amanari" 
                             class="escola-logo"
                             loading="lazy">
                        <h3 class="card-title">🌧️ Jardim Amanari</h3>
                        <p class="escola-descricao"><strong>"Nascida da Chuva"</strong> - Educação Infantil que acolhe os primeiros passos com suavidade e proteção.</p>
                        
                        <div class="escola-info">
                            <p>📞 <strong>(19) 99999-9999</strong></p>
                            <p>📧 <strong>contato@jardimamanari.com.br</strong></p>
                            <p>🌐 <strong>www.jardimamanari.com.br</strong></p>
                            <p class="escola-meta">Rua Professor José Agostinho Forti, 255 – Dois Córregos</p>
                        </div>

                        <div class="escola-actions">
                            <a href="https://www.jardimamanari.com.br" target="_blank" class="btn-escola btn-site">
                                <i class="fas fa-globe"></i> Visitar Site
                            </a>
                            <a href="https://maps.google.com/?q=Rua Professor José Agostinho Forti, 255, Dois Córregos, Piracicaba" 
                               target="_blank" class="btn-escola btn-maps">
                                <i class="fas fa-map-marker-alt"></i> Como Chegar
                            </a>
                        </div>
                    </div>

                    <!-- Casulo Berçário -->
                    <div class="escola-card">
                        <img src="imagens/escolas/casulo-logo.jpg" 
                             alt="Casulo Berçário" 
                             class="escola-logo"
                             loading="lazy">
                        <h3 class="card-title">🦋 Casulo Berçário</h3>
                        <p class="escola-descricao"><strong>"Proteção que Transforma"</strong> - Cuidado amoroso para os primeiros anos de vida.</p>
                        
                        <div class="escola-info">
                            <p>📞 <strong>(19) 98888-8888</strong></p>
                            <p>📧 <strong>casulo@bercario.com.br</strong></p>
                            <p>🌐 <strong>www.casulobercario.com.br</strong></p>
                            <p class="escola-meta">Rua José Ferraz de Camargo, 661</p>
                        </div>

                        <div class="escola-actions">
                            <a href="https://www.casulobercario.com.br" target="_blank" class="btn-escola btn-site">
                                <i class="fas fa-globe"></i> Visitar Site
                            </a>
                            <a href="https://maps.google.com/?q=Rua José Ferraz de Camargo, 661, Piracicaba" 
                               target="_blank" class="btn-escola btn-maps">
                                <i class="fas fa-map-marker-alt"></i> Como Chegar
                            </a>
                        </div>
                    </div>

                    <!-- Escola Waldorf Novalis -->
                    <div class="escola-card">
                        <img src="imagens/escolas/novalis-logo.jpg" 
                             alt="Escola Waldorf Novalis" 
                             class="escola-logo"
                             loading="lazy">
                        <h3 class="card-title">🌱 Escola Waldorf Novalis</h3>
                        <p class="escola-descricao"><strong>"Terra Nova para Semear"</strong> - Da Educação Infantil ao Ensino Médio, formando seres humanos livres.</p>
                        
                        <div class="escola-info">
                            <p>📞 <strong>(19) 97777-7777</strong></p>
                            <p>📧 <strong>contato@novalis.com.br</strong></p>
                            <p>🌐 <strong>www.escolanovalis.com.br</strong></p>
                            <p class="escola-meta">Rua Otília Teodoro, 171 – Monte Alegre</p>
                        </div>

                        <div class="escola-actions">
                            <a href="https://www.escolanovalis.com.br" target="_blank" class="btn-escola btn-site">
                                <i class="fas fa-globe"></i> Visitar Site
                            </a>
                            <a href="https://maps.google.com/?q=Rua Otília Teodoro, 171, Monte Alegre, Piracicaba" 
                               target="_blank" class="btn-escola btn-maps">
                                <i class="fas fa-map-marker-alt"></i> Como Chegar
                            </a>
                        </div>
                    </div>

                    <!-- Ubaeté -->
                    <div class="escola-card">
                        <img src="imagens/escolas/ubaete-logo.jpg" 
                             alt="Ubaeté" 
                             class="escola-logo"
                             loading="lazy">
                        <h3 class="card-title">🛶 Ubaeté</h3>
                        <p class="escola-descricao"><strong>"Canoa Verdadeira"</strong> - Nova escola em formação, trazendo a pedagogia Waldorf para mais crianças.</p>
                        
                        <div class="escola-info">
                            <p>📞 <strong>(19) 96666-6666</strong></p>
                            <p>📧 <strong>contato@ubaete.com.br</strong></p>
                            <p>🌐 <strong>Em construção</strong></p>
                            <p class="escola-meta">Em implantação - Piracicaba</p>
                        </div>

                        <div class="escola-actions">
                            <a href="#contato" class="btn-escola btn-site" style="background: #95a5a6;">
                                <i class="fas fa-envelope"></i> Entrar em Contato
                            </a>
                            <button class="btn-escola btn-maps" disabled style="background: #bdc3c7; cursor: not-allowed;">
                                <i class="fas fa-map-marker-alt"></i> Em Breve
                            </button>
                        </div>
                    </div>
                </div>

                <div class="escolas-navigation">
                    <button class="nav-btn" id="prevBtn" aria-label="Escolas anteriores">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="nav-btn" id="nextBtn" aria-label="Próximas escolas">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </section>

        <!-- SEÇÃO DE CONTATO -->
        <section id="contato" class="secao">
            <div class="section-container">
                <h2 class="section-title">Entre em Contato</h2>
                <div class="form-contato">
                    <form id="form-contato-familia" onsubmit="enviarFormulario(event)">
                        <div class="form-group">
                            <label for="nome" class="form-label">Seu Nome</label>
                            <input type="text" id="nome" class="form-input" required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Seu E-mail</label>
                            <input type="email" id="email" class="form-input" required>
                        </div>
                        <div class="form-group">
                            <label for="assunto" class="form-label">Assunto</label>
                            <select id="assunto" class="form-input" required>
                                <option value="">Selecione um assunto</option>
                                <option value="info">Informações sobre os portais</option>
                                <option value="participar">Quero participar</option>
                                <option value="duvida">Dúvida sobre educação</option>
                                <option value="escolas">Informações sobre escolas</option>
                                <option value="outro">Outro</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="mensagem" class="form-label">Sua Mensagem</label>
                            <textarea id="mensagem" class="form-textarea" required></textarea>
                        </div>
                        <button type="submit" class="btn-enviar">Enviar Mensagem</button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <!-- RODAPÉ -->
    <footer>
        <p>© 2024 Educação Que Reflete</p>
        <p>Piracicaba SP · De família para família</p>
        <div style="margin-top: 1rem;">
            <a href="https://instagram.com/educacaoquereflete" target="_blank" rel="noopener">Instagram</a>
            <a href="https://youtube.com/educacaoquereflete" target="_blank" rel="noopener">YouTube</a>
            <a href="#contato">Contato</a>
        </div>
    </footer>

    <script>
        // Menu Hamburguer
        const hamburgerBtn = document.getElementById('hamburger-btn');
        const closeMenuBtn = document.getElementById('close-menu');
        const mobileMenu = document.getElementById('mobile-menu');

        function abrirMenu() {
            mobileMenu.classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function fecharMenu() {
            mobileMenu.classList.remove('active');
            document.body.style.overflow = 'auto';
        }

        hamburgerBtn.addEventListener('click', abrirMenu);
        closeMenuBtn.addEventListener('click', fecharMenu);

        // Fechar menu ao clicar em um link
        document.querySelectorAll('.mobile-nav-item').forEach(link => {
            link.addEventListener('click', fecharMenu);
        });

        // Fechar menu ao pressionar ESC
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                fecharMenu();
            }
        });

        // Sistema de curtidas
        let likes = [0, 0, 0];

        function inicializarCurtidas() {
            const likesSalvos = localStorage.getItem('portalLikes');
            if (likesSalvos) {
                const likesArray = JSON.parse(likesSalvos);
                likesArray.forEach((count, index) => {
                    if (index > 0) {
                        likes[index] = count;
                        document.getElementById(`likes-${index}`).textContent = count;
                    }
                });
            }
        }

        function curtirPortal(portalNum) {
            likes[portalNum]++;
            document.getElementById(`likes-${portalNum}`).textContent = likes[portalNum];
            localStorage.setItem('portalLikes', JSON.stringify(likes));
            
            const btn = event.target.closest('.like-btn');
            btn.classList.add('curtido');
            
            setTimeout(() => {
                btn.classList.remove('curtido');
            }, 1000);
        }

        // Smooth scroll para links âncora
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Efeito de digitação no slogan
        const slogan = "Onde cada criança se vê no mundo que habita";
        let i = 0;
        const speed = 50;

        function typeWriter() {
            if (i < slogan.length) {
                document.querySelector(".logo-slogan").textContent += slogan.charAt(i);
                i++;
                setTimeout(typeWriter, speed);
            }
        }

        // Envio do formulário de contato
        function enviarFormulario(event) {
            event.preventDefault();
            const nome = document.getElementById('nome').value;
            alert(`Obrigado, ${nome}! Sua mensagem foi enviada. Em breve entraremos em contato.`);
            document.getElementById('form-contato-familia').reset();
        }

        // Navegação dos cards de escolas
        const escolasScroll = document.getElementById('escolas-scroll');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');

        function atualizarBotoesNavegacao() {
            prevBtn.disabled = escolasScroll.scrollLeft <= 0;
            nextBtn.disabled = escolasScroll.scrollLeft + escolasScroll.clientWidth >= escolasScroll.scrollWidth - 1;
        }

        nextBtn.addEventListener('click', () => {
            escolasScroll.scrollBy({
                left: 350,
                behavior: 'smooth'
            });
        });

        prevBtn.addEventListener('click', () => {
            escolasScroll.scrollBy({
                left: -350,
                behavior: 'smooth'
            });
        });

        escolasScroll.addEventListener('scroll', atualizarBotoesNavegacao);

        // Inicializar quando a página carregar
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelector(".logo-slogan").textContent = "";
            typeWriter();
            inicializarCurtidas();
            atualizarBotoesNavegacao();
        });
    </script>
</body>
</html>
 */

function educacao_que_reflete_setup() {
    // Suporte a traduções
    load_theme_textdomain('educacao-que-reflete', get_template_directory() . '/languages');
    
    // Suporte a elementos do WordPress
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // Registrar menus
    register_nav_menus(array(
        'primary' => __('Menu Principal', 'educacao-que-reflete'),
        'footer' => __('Menu Rodapé', 'educacao-que-reflete'),
    ));
}
add_action('after_setup_theme', 'educacao_que_reflete_setup');

// Enfileirar scripts e estilos
function educacao_que_reflete_scripts() {
    // Seu CSS principal
    wp_enqueue_style('educacao-style', get_stylesheet_uri());
    
    // Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');
    
    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Source+Serif+Pro&display=swap');
    
    // Seu JavaScript
    wp_enqueue_script('educacao-script', get_template_directory_uri() . '/assets/js/custom.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'educacao_que_reflete_scripts');
