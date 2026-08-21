    <footer class="site-footer">
        <div class="container footer-grid">
            <div>
                <a class="footer-brand" href="#inicio">SENAI <span>×</span> CCM-PR</a>
                <p>Educação técnica, informação e caminhos para o futuro profissional no Paraná.</p>
            </div>
            <div>
                <h3>Links oficiais</h3>
                <a href="<?= e($site['senai_url']) ?>" target="_blank" rel="noopener noreferrer">SENAI Paraná</a>
                <a href="<?= e($site['education_url']) ?>" target="_blank" rel="noopener noreferrer">Educação Paraná</a>
                <a href="<?= e($site['umuarama_url']) ?>" target="_blank" rel="noopener noreferrer">SENAI Umuarama</a>
            </div>
            <div>
                <h3>Contato</h3>
                <a href="tel:<?= e($site['phone_link']) ?>"><?= e($site['phone']) ?></a>
                <span>Rua Capital da Amizade, 2635</span>
                <span>Umuarama – Paraná</span>
            </div>
        </div>
        <div class="container footer-bottom">
            <span>© <?= e($site['year']) ?> <?= e($site['name']) ?></span>
            <span>Consulte sempre as fontes oficiais para dados de inscrições e vagas.</span>
        </div>
    </footer>

    <script src="assets/js/script.js" defer></script>
</body>
</html>
