# Conversão para HTML, CSS, JavaScript e PHP

- [x] Criar `index.php` com a estrutura semântica completa do site.
- [x] Criar `assets/css/style.css` com estilos responsivos e sem dependências externas de UI.
- [x] Criar `assets/js/script.js` para navegação móvel, rolagem suave e interações leves.
- [x] Manter a página em um único `index.php`, evitando parciais desnecessárias.
- [x] Remover a dependência do React, Tailwind e componentes shadcn do fluxo principal; manter apenas o Vite mínimo para a pré-visualização gerenciada.
- [x] Manter imagens reais de instalações sem alunos e links oficiais.
- [x] Verificar HTML, PHP, CSS, JavaScript, responsividade e arquivos desnecessários.
- [x] Salvar checkpoint final após os testes.

## Decisões

- A página será servida por `index.php`, mas continuará funcionando como HTML estático quando o servidor não processar PHP.
- O PHP será usado apenas para organizar cabeçalho, rodapé e dados da página, sem banco de dados ou framework.
- O JavaScript será mínimo e progressivo: sem JavaScript, o conteúdo continuará acessível.
- As imagens permanecerão em URLs CDN já utilizadas pelo projeto para evitar arquivos pesados no repositório.

## Fontes de conteúdo

- SENAI Paraná: https://www.senaipr.org.br/
- SENAI Umuarama: https://www.senaipr.org.br/umuarama-1-9523-69467.shtml
- Governo do Paraná: https://www.parana.pr.gov.br/
- Secretaria da Educação do Paraná: https://www.educacao.pr.gov.br/

## Status

- [ ] Em andamento
- [x] Revisado
- [x] Entregue

Este arquivo é de acompanhamento interno e não faz parte da página pública.

## Style Decisions

- Preservar a direção visual corporativa moderna: azul profundo, verde de ação, branco e cinzas neutros.
- Priorizar layout assimétrico no hero, hierarquia tipográfica forte e superfícies com profundidade discreta.
- Evitar dependências visuais que não sejam necessárias para a página pública.
- Garantir que todos os textos mantenham contraste e que a navegação seja utilizável por teclado e celular.

## Fonte tipográfica

- Usar Poppins para títulos e Inter para texto corrido via Google Fonts, com fallback local sans-serif.

## Uso de imagens

- Usar somente imagens reais das instalações e laboratórios do SESI SENAI/Umuarama já selecionadas.
- Não adicionar fotos de alunos ou pessoas nesta versão, conforme solicitado.
- Manter textos alternativos descritivos e não atribuir autorização de uso de imagem sem comprovação documental.

## Checklist final

- [ ] Nenhuma imagem gerada por IA permanece no HTML/PHP.
- [ ] Nenhum depoimento é apresentado como real sem fonte explícita.
- [ ] Botões e links possuem destino funcional ou indicação clara.
- [ ] A página não depende de React, Tailwind ou componentes shadcn.
- [ ] O servidor de pré-visualização carrega `index.php` ou uma versão compatível.
- [ ] O checkpoint final foi salvo.

## Observação técnica

- O template gerenciado usa Vite para a pré-visualização. A página pública será mantida em PHP puro, enquanto um arquivo de entrada mínimo do ambiente poderá permanecer apenas se for necessário para a pré-visualização gerenciada.
- Não excluir arquivos internos do ambiente de gerenciamento sem testar o fluxo de preview e checkpoint.

## Objetivo de entrega

Uma base simples e legível, com poucos arquivos, separação clara entre marcação, estilo, comportamento e parciais PHP, pronta para ser hospedada em um servidor com PHP.

## Simplificação do ambiente de pré-visualização

- [x] Substituir `vite.config.ts` por `vite.config.js` sem tipos TypeScript.
- [x] Preservar apenas o proxy de imagens e a configuração necessária para a pré-visualização.
- [x] Reiniciar e validar o ambiente depois da troca.
