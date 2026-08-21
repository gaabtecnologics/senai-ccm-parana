<?php
declare(strict_types=1);

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

$site = [
    'name' => 'SENAI & Colégios Cívico-Militares do Paraná',
    'description' => 'Informações sobre a parceria entre o SENAI e os Colégios Cívico-Militares do Paraná, com destaque para Umuarama.',
    'senai_url' => 'https://www.senaipr.org.br/',
    'courses_url' => 'https://www.senaipr.org.br/cursos-tecnicos/',
    'education_url' => 'https://www.educacao.pr.gov.br/',
    'umuarama_url' => 'https://www.senaipr.org.br/umuarama-1-9523-69467.shtml',
    'phone' => '(44) 3639-1220',
    'phone_link' => '+554436391220',
    'year' => date('Y'),
];

$images = [
    'hero' => 'https://files.manuscdn.com/user_upload_by_module/session_file/310519663385167336/fpTwsLaOIhkUFIlI.jpg',
    'lab' => 'https://files.manuscdn.com/user_upload_by_module/session_file/310519663385167336/VLdadrTeaAMEWNwP.jpg',
    'aerial' => 'https://files.manuscdn.com/user_upload_by_module/session_file/310519663385167336/PulfwpONQeKvnaAL.jpg',
    'senai_logo' => 'https://d2xsxph8kpxj0f.cloudfront.net/310519663385167336/K3tkZv4hPizuMeoPYXWB5m/senai-logo_bf0dab15.png',
    'ccm_logo' => 'https://d2xsxph8kpxj0f.cloudfront.net/310519663385167336/K3tkZv4hPizuMeoPYXWB5m/ccm-logo_95881827.png',
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
    'Administração', 'Alimentos', 'Automação Industrial', 'Biotecnologia', 'Celulose e Papel',
    'Cibersistemas para Automação', 'Desenvolvimento de Sistemas', 'Design Gráfico', 'Edificações',
    'Eletromecânica', 'Eletrônica', 'Eletrotécnica', 'Logística', 'Manutenção Automotiva',
    'Mecânica', 'Mecatrônica', 'Mineração', 'Qualidade', 'Química',
    'Refrigeração e Climatização', 'Segurança do Trabalho',
];

$timeline = [
    ['year' => '2024', 'title' => 'Início da parceria', 'items' => ['2 mil vagas', '66 turmas', 'Primeiras ofertas']],
    ['year' => '2025', 'title' => 'Expansão estadual', 'items' => ['6.473 alunos', '223 turmas', '144 escolas']],
    ['year' => '2026', 'title' => 'Novos horizontes', 'items' => ['6.521 vagas', '21 títulos técnicos', '345 colégios CCM']],
];
