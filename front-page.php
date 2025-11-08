<?php get_header(); ?>

<!-- COLE AQUI TODAS AS 5 SEÇÕES DO SEU HTML:
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
-->

<?php get_footer(); ?>
