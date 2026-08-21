<?php
declare(strict_types=1);

require __DIR__ . '/includes/site-data.php';
require __DIR__ . '/includes/header.php';
?>

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
                    <a class="button button-outline" href="<?= e($site['courses_url']) ?>" target="_blank" rel="noopener noreferrer">Consultar inscrições</a>
                </div>
            </div>
            <figure class="hero-media media-frame">
                <img src="<?= e($images['hero']) ?>" alt="Fachada do SESI SENAI Umuarama" fetchpriority="high">
                <figcaption>Instalações do SESI SENAI Umuarama</figcaption>
            </figure>
        </div>
    </section>

    <section class="stats" aria-label="Números da parceria">
        <div class="container stats-grid">
            <?php foreach ($stats as $stat): ?>
                <div class="stat-item">
                    <strong class="stat-value <?= e($stat['tone']) ?>"><?= e($stat['value']) ?></strong>
                    <span><?= e($stat['label']) ?></span>
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
                        <span class="number-mark" aria-hidden="true"><?= e($benefit['number']) ?></span>
                        <h3><?= e($benefit['title']) ?></h3>
                        <p><?= e($benefit['text']) ?></p>
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
                    <a class="course-card reveal" href="<?= e($site['courses_url']) ?>" target="_blank" rel="noopener noreferrer">
                        <span class="course-index"><?= str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) ?></span>
                        <span>
                            <strong><?= e($course) ?></strong>
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
                <img src="<?= e($images['lab']) ?>" alt="Laboratório técnico do SENAI sem pessoas" loading="lazy">
                <figcaption>Ambiente de aprendizagem técnica</figcaption>
            </figure>
            <div class="facility-copy">
                <p class="eyebrow">Ambientes que ensinam</p>
                <h2>Conhecimento aplicado em espaços profissionais</h2>
                <p>Laboratórios, salas técnicas e oficinas ajudam a transformar conteúdos em experiências concretas. A disponibilidade dos ambientes varia conforme o curso e a unidade.</p>
                <a class="text-link" href="<?= e($site['senai_url']) ?>" target="_blank" rel="noopener noreferrer">Ver cursos e unidades no SENAI Paraná <span aria-hidden="true">→</span></a>
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
                    <p><strong>Telefone:</strong> <a href="tel:<?= e($site['phone_link']) ?>"><?= e($site['phone']) ?></a></p>
                </div>
                <div class="button-row">
                    <a class="button button-light" href="<?= e($site['umuarama_url']) ?>" target="_blank" rel="noopener noreferrer">Ver unidade</a>
                    <a class="button button-ghost-light" href="<?= e($site['education_url']) ?>" target="_blank" rel="noopener noreferrer">Secretaria da Educação</a>
                </div>
            </div>
            <figure class="umuarama-media media-frame reveal">
                <img src="<?= e($images['aerial']) ?>" alt="Instalações do SENAI Umuarama vistas de uma área externa" loading="lazy">
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
                        <strong class="timeline-year"><?= e($item['year']) ?></strong>
                        <h3><?= e($item['title']) ?></h3>
                        <ul>
                            <?php foreach ($item['items'] as $line): ?>
                                <li><?= e($line) ?></li>
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
            <a class="button button-primary button-large" href="<?= e($site['courses_url']) ?>" target="_blank" rel="noopener noreferrer">Acessar cursos técnicos <span aria-hidden="true">↗</span></a>
        </div>
    </section>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
