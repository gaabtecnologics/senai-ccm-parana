<?php
/**
 * SENAI & Colégios Cívico-Militares do Paraná
 * Página principal em PHP puro.
 * A pré-visualização gerenciada usa index.html, gerado a partir deste arquivo.
 */

$siteTitle = 'SENAI & Colégios Cívico-Militares do Paraná';
$enrollmentUrl = 'https://www.senaipr.org.br/cursos-tecnicos/';
$senaiUrl = 'https://www.senaipr.org.br/';
$educationUrl = 'https://www.educacao.pr.gov.br/';
$umuaramaUrl = 'https://www.senaipr.org.br/umuarama-1-9523-69467.shtml';
$year = date('Y');

$images = [
    'hero' => '/manus-storage/nUAUvSxXcYN5_49d7898d.jpg',
    'lab' => '/manus-storage/qnuA7yeGOAqW_cc0870d8.jpg',
    'facility' => '/manus-storage/gPO8QNPJHy4i_acb83128.jpg',
];

$stats = [
    ['value' => '6.521', 'label' => 'vagas no edital 2026', 'tone' => 'blue'],
    ['value' => '90,5%', 'label' => 'preferência das indústrias', 'tone' => 'green'],
    ['value' => '345', 'label' => 'colégios cívico-militares em 2026', 'tone' => 'blue'],
    ['value' => '21', 'label' => 'títulos de cursos técnicos', 'tone' => 'green'],
];

$benefits = [
    ['number' => '01', 'title' => 'Infraestrutura técnica', 'text' => 'Laboratórios, oficinas e ambientes de aprendizagem voltados ao desenvolvimento de competências práticas para a indústria.'],
    ['number' => '02', 'title' => 'Formação aplicada', 'text' => 'Aulas e projetos conectam conceitos técnicos a situações reais de trabalho, com foco em segurança, qualidade e solução de problemas.'],
    ['number' => '03', 'title' => 'Certificação reconhecida', 'text' => 'O curso técnico do SENAI amplia as possibilidades de continuidade dos estudos e de inserção profissional.'],
    ['number' => '04', 'title' => 'Competências para o futuro', 'text' => 'A formação desenvolve raciocínio lógico, autonomia, criatividade, comunicação e cultura de inovação.'],
    ['number' => '05', 'title' => 'Orientação profissional', 'text' => 'A experiência educacional aproxima o estudante das áreas, processos e tecnologias presentes no setor industrial.'],
    ['number' => '06', 'title' => 'Acesso por edital', 'text' => 'As vagas gratuitas e os critérios de participação dependem do edital, da turma e da unidade escolhida.'],
];

$courses = [
    'Administração', 'Alimentos', 'Automação Industrial', 'Biotecnologia',
    'Celulose e Papel', 'Cibersistemas para Automação', 'Desenvolvimento de Sistemas',
    'Design Gráfico', 'Edificações', 'Eletromecânica', 'Eletrônica', 'Eletrotécnica',
    'Logística', 'Manutenção Automotiva', 'Mecânica', 'Mecatrônica', 'Mineração',
    'Qualidade', 'Química', 'Refrigeração e Climatização', 'Segurança do Trabalho'
];

$timeline = [
    ['year' => '2024', 'title' => 'Início da parceria', 'items' => ['2 mil vagas', '66 turmas', 'Primeiras ofertas']],
    ['year' => '2025', 'title' => 'Expansão estadual', 'items' => ['6.473 alunos', '223 turmas', '144 escolas']],
    ['year' => '2026', 'title' => 'Novos horizontes', 'items' => ['6.521 vagas', '21 títulos técnicos', '345 colégios CCM']],
];
?>
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Informações sobre a parceria entre o SENAI e os Colégios Cívico-Militares do Paraná, com destaque para Umuarama.">
    <title><?= htmlspecialchars($siteTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <a class="skip-link" href="#conteudo">Pular para o conteúdo</a>

    <header class="site-header" data-header>
        <div class="container header-inner">
            <a class="brand" href="#inicio" aria-label="Ir para o início">
                <img src="https://d2xsxph8kpxj0f.cloudfront.net/310519663385167336/K3tkZv4hPizuMeoPYXWB5m/senai-logo_bf0dab15.png" alt="SENAI">
                <span class="brand-divider" aria-hidden="true"></span>
                <img class="brand-ccm" src="https://d2xsxph8kpxj0f.cloudfront.net/310519663385167336/K3tkZv4hPizuMeoPYXWB5m/ccm-logo_95881827.png" alt="Colégios Cívico-Militares do Paraná">
            </a>

            <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="menu-principal">
                <span></span><span></span><span></span>
                <span class="sr-only">Abrir menu</span>
            </button>

            <nav id="menu-principal" class="main-nav" aria-label="Navegação principal">
                <a href="#beneficios">Benefícios</a>
                <a href="#cursos">Cursos</a>
                <a href="#umuarama">Umuarama</a>
                <a href="#instalacoes">Instalações</a>
            </nav>
        </div>
    </header>

    <main id="conteudo">
        <section id="inicio" class="hero">
            <div class="hero-orb hero-orb-one" aria-hidden="true"></div>
            <div class="hero-orb hero-orb-two" aria-hidden="true"></div>
            <div class="container hero-grid">
                <div class="hero-copy">
                    <p class="eyebrow eyebrow-light">Parceria SENAI + CCM Paraná</p>
                    <h1>Educação técnica de qualidade para o futuro</h1>
                    <p class="hero-lead">Formação profissional conectada ao Ensino Médio, com oportunidades de aprendizagem prática e foco nas necessidades da indústria paranaense.</p>
                    <div class="button-row">
                        <a class="button button-primary" href="#beneficios">Conheça os benefícios <span aria-hidden="true">→</span></a>
                        <a class="button button-outline" href="<?= htmlspecialchars($enrollmentUrl, ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer">Consultar inscrições</a>
                    </div>
                </div>
                <figure class="hero-media media-frame">
                    <img src="<?= htmlspecialchars($images['hero'], ENT_QUOTES, 'UTF-8') ?>" alt="Fachada do SESI SENAI Umuarama" fetchpriority="high">
                    <figcaption>Instalações do SESI SENAI Umuarama</figcaption>
                </figure>
            </div>
        </section>

        <section class="stats" aria-label="Números da parceria">
            <div class="container stats-grid">
                <?php foreach ($stats as $stat): ?>
                    <div class="stat-item">
                        <strong class="stat-value <?= htmlspecialchars($stat['tone'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($stat['value'], ENT_QUOTES, 'UTF-8') ?></strong>
                        <span><?= htmlspecialchars($stat['label'], ENT_QUOTES, 'UTF-8') ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section id="beneficios" class="section section-benefits">
            <div class="container">
                <div class="section-heading">
                    <p class="eyebrow">Por que escolher essa formação</p>
                    <h2>Benefícios que aproximam a escola do mundo do trabalho</h2>
                    <p>Uma formação técnica combina conhecimento, prática e orientação para que o estudante construa seus próximos passos com mais clareza.</p>
                </div>
                <div class="benefit-grid">
                    <?php foreach ($benefits as $benefit): ?>
                        <article class="benefit-card reveal">
                            <span class="number-mark" aria-hidden="true"><?= htmlspecialchars($benefit['number'], ENT_QUOTES, 'UTF-8') ?></span>
                            <h3><?= htmlspecialchars($benefit['title'], ENT_QUOTES, 'UTF-8') ?></h3>
                            <p><?= htmlspecialchars($benefit['text'], ENT_QUOTES, 'UTF-8') ?></p>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section id="cursos" class="section section-courses">
            <div class="container">
                <div class="section-heading section-heading-split">
                    <div>
                        <p class="eyebrow">Oferta estadual</p>
                        <h2>21 títulos de cursos técnicos</h2>
                    </div>
                    <p>Os cursos podem ter duração de 12, 18 ou 24 meses e ser presenciais ou a distância, conforme a oferta de cada unidade e edital.</p>
                </div>
                <div class="course-grid">
                    <?php foreach ($courses as $index => $course): ?>
                        <a class="course-card reveal" href="<?= htmlspecialchars($enrollmentUrl, ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer">
                            <span class="course-index"><?= str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) ?></span>
                            <span>
                                <strong><?= htmlspecialchars($course, ENT_QUOTES, 'UTF-8') ?></strong>
                                <small>Consultar disponibilidade</small>
                            </span>
                            <span class="course-arrow" aria-hidden="true">↗</span>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section id="instalacoes" class="section section-facilities">
            <div class="container facility-grid">
                <figure class="facility-media media-frame reveal">
                    <img src="<?= htmlspecialchars($images['lab'], ENT_QUOTES, 'UTF-8') ?>" alt="Laboratório técnico do SENAI sem pessoas">
                    <figcaption>Ambiente de aprendizagem técnica</figcaption>
                </figure>
                <div class="facility-copy">
                    <p class="eyebrow">Ambientes que ensinam</p>
                    <h2>Conhecimento aplicado em espaços profissionais</h2>
                    <p>Laboratórios, salas técnicas e oficinas ajudam a transformar conteúdos em experiências concretas. A disponibilidade dos ambientes varia conforme o curso e a unidade.</p>
                    <a class="text-link" href="<?= htmlspecialchars($senaiUrl, ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer">Ver cursos e unidades no SENAI Paraná <span aria-hidden="true">→</span></a>
                </div>
            </div>
        </section>

        <section id="umuarama" class="section section-umuarama">
            <div class="container umuarama-grid">
                <div class="umuarama-copy">
                    <p class="eyebrow eyebrow-light">Foco no Noroeste do Paraná</p>
                    <h2>Umuarama como ponto de partida</h2>
                    <p>A unidade do SENAI em Umuarama oferece atendimento para quem busca qualificação e formação profissional na região. Consulte diretamente a unidade para confirmar cursos, horários, inscrições e requisitos atuais.</p>
                    <div class="contact-card">
                        <h3>SENAI Umuarama</h3>
                        <p><strong>Endereço:</strong> Rua Capital da Amizade, 2635 – Jardim Colibri</p>
                        <p><strong>CEP:</strong> 87506-305</p>
                        <p><strong>Telefone:</strong> <a href="tel:+554436391220">(44) 3639-1220</a></p>
                    </div>
                    <div class="button-row">
                        <a class="button button-light" href="<?= htmlspecialchars($umuaramaUrl, ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer">Ver unidade</a>
                        <a class="button button-ghost-light" href="<?= htmlspecialchars($educationUrl, ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer">Secretaria da Educação</a>
                    </div>
                </div>
                <figure class="umuarama-media media-frame reveal">
                    <img src="<?= htmlspecialchars($images['facility'], ENT_QUOTES, 'UTF-8') ?>" alt="Instalações do SENAI Umuarama vistas de uma área externa">
                    <figcaption>SESI SENAI Umuarama</figcaption>
                </figure>
            </div>
        </section>

        <section class="section section-timeline">
            <div class="container">
                <div class="section-heading">
                    <p class="eyebrow">Evolução</p>
                    <h2>Uma parceria em expansão</h2>
                    <p>Os números abaixo organizam os marcos apresentados nas informações institucionais consultadas. Editais e ofertas podem mudar a cada período.</p>
                </div>
                <div class="timeline-grid">
                    <?php foreach ($timeline as $index => $item): ?>
                        <article class="timeline-card <?= $index === 1 ? 'timeline-card-featured' : '' ?> reveal">
                            <strong class="timeline-year"><?= htmlspecialchars($item['year'], ENT_QUOTES, 'UTF-8') ?></strong>
                            <h3><?= htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8') ?></h3>
                            <ul>
                                <?php foreach ($item['items'] as $line): ?>
                                    <li><?= htmlspecialchars($line, ENT_QUOTES, 'UTF-8') ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="cta">
            <div class="container cta-inner">
                <div>
                    <p class="eyebrow eyebrow-light">Próximo passo</p>
                    <h2>Encontre o curso certo para você</h2>
                    <p>Consulte o edital vigente e confira a oferta disponível para sua cidade.</p>
                </div>
                <a class="button button-primary button-large" href="<?= htmlspecialchars($enrollmentUrl, ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer">Acessar cursos técnicos <span aria-hidden="true">↗</span></a>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container footer-grid">
            <div>
                <a class="footer-brand" href="#inicio">SENAI <span>×</span> CCM-PR</a>
                <p>Educação técnica, informação e caminhos para o futuro profissional no Paraná.</p>
            </div>
            <div>
                <h3>Links oficiais</h3>
                <a href="<?= htmlspecialchars($senaiUrl, ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer">SENAI Paraná</a>
                <a href="<?= htmlspecialchars($educationUrl, ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer">Educação Paraná</a>
                <a href="<?= htmlspecialchars($umuaramaUrl, ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer">SENAI Umuarama</a>
            </div>
            <div>
                <h3>Contato</h3>
                <a href="tel:+554436391220">(44) 3639-1220</a>
                <span>Rua Capital da Amizade, 2635</span>
                <span>Umuarama – Paraná</span>
            </div>
        </div>
        <div class="container footer-bottom">
            <span>© <?= htmlspecialchars($year, ENT_QUOTES, 'UTF-8') ?> <?= htmlspecialchars($siteTitle, ENT_QUOTES, 'UTF-8') ?></span>
            <span>Consulte sempre as fontes oficiais para dados de inscrições e vagas.</span>
        </div>
    </footer>

    <script type="module" src="assets/js/script.js"></script>
</body>
</html>
