import { Button } from "@/components/ui/button";
import { Card } from "@/components/ui/card";
import { ArrowRight, Award, Briefcase, Code, Cpu, GraduationCap, Lightbulb, Users } from "lucide-react";

/**
 * Design Philosophy: Corporate Modernism
 * - Confiança e solidez através de elementos estruturados
 * - Hierarquia clara de informações com foco em benefícios
 * - Integração visual das duas instituições (SENAI + CCM)
 * - Cores: Azul Profundo (#1e3a8a) + Verde Vibrante (#16a34a)
 * - Tipografia: Poppins Bold para títulos, Inter Regular para corpo
 */

export default function Home() {
  return (
    <div className="min-h-screen bg-white">
      {/* Header com Logos */}
      <header className="sticky top-0 z-50 bg-white border-b border-gray-200 shadow-sm">
        <div className="container mx-auto px-4 py-4 flex items-center justify-between">
          <div className="flex items-center gap-4">
            <img 
              src="https://d2xsxph8kpxj0f.cloudfront.net/310519663385167336/K3tkZv4hPizuMeoPYXWB5m/senai-logo_bf0dab15.png" 
              alt="SENAI Logo" 
              className="h-12 w-auto"
            />
            <div className="w-px h-12 bg-gray-300"></div>
            <img 
              src="https://d2xsxph8kpxj0f.cloudfront.net/310519663385167336/K3tkZv4hPizuMeoPYXWB5m/ccm-logo_95881827.png" 
              alt="CCM Logo" 
              className="h-12 w-auto"
            />
          </div>
          <nav className="hidden md:flex gap-8">
            <a href="#beneficios" className="text-gray-700 hover:text-blue-900 font-medium transition">Benefícios</a>
            <a href="#cursos" className="text-gray-700 hover:text-blue-900 font-medium transition">Cursos</a>
            <a href="#umuarama" className="text-gray-700 hover:text-blue-900 font-medium transition">Umuarama</a>
            <a href="#depoimentos" className="text-gray-700 hover:text-blue-900 font-medium transition">Depoimentos</a>
          </nav>
        </div>
      </header>

      {/* Hero Section */}
      <section className="relative bg-gradient-to-br from-blue-900 to-blue-800 text-white py-20 overflow-hidden">
        <div className="absolute inset-0 opacity-10">
          <div className="absolute top-0 right-0 w-96 h-96 bg-green-500 rounded-full mix-blend-multiply filter blur-3xl"></div>
          <div className="absolute bottom-0 left-0 w-96 h-96 bg-blue-500 rounded-full mix-blend-multiply filter blur-3xl"></div>
        </div>
        
        <div className="container mx-auto px-4 relative z-10">
          <div className="grid md:grid-cols-2 gap-12 items-center">
            <div>
              <h1 className="text-5xl font-bold mb-6 leading-tight">
                Educação Técnica de Qualidade para o Futuro
              </h1>
              <p className="text-xl text-blue-100 mb-8">
                A parceria entre SENAI e Colégios Cívico-Militares do Paraná oferece formação profissional gratuita, integrada ao Ensino Médio, com reconhecimento de 90,5% das indústrias.
              </p>
              <div className="flex gap-4">
                <Button className="bg-green-600 hover:bg-green-700 text-white px-8 py-6 text-lg">
                  Saiba Mais <ArrowRight className="ml-2 h-5 w-5" />
                </Button>
                <Button variant="outline" className="border-white text-white hover:bg-white hover:text-blue-900 px-8 py-6 text-lg">
                  Inscreva-se
                </Button>
              </div>
            </div>
            <div className="relative">
              <img 
                src="https://d2xsxph8kpxj0f.cloudfront.net/310519663385167336/K3tkZv4hPizuMeoPYXWB5m/hero-laboratory-C86JALwyQicebQ3LKZPw8m.webp"
                alt="Laboratório SENAI"
                className="rounded-lg shadow-2xl"
              />
            </div>
          </div>
        </div>
      </section>

      {/* Estatísticas */}
      <section className="bg-gray-50 py-16">
        <div className="container mx-auto px-4">
          <div className="grid md:grid-cols-4 gap-8">
            <div className="text-center">
              <div className="text-4xl font-bold text-blue-900 mb-2">6.473</div>
              <p className="text-gray-700 font-medium">Alunos Beneficiados em 2025</p>
            </div>
            <div className="text-center">
              <div className="text-4xl font-bold text-green-600 mb-2">90,5%</div>
              <p className="text-gray-700 font-medium">Preferência das Indústrias</p>
            </div>
            <div className="text-center">
              <div className="text-4xl font-bold text-blue-900 mb-2">144</div>
              <p className="text-gray-700 font-medium">Escolas Participantes</p>
            </div>
            <div className="text-center">
              <div className="text-4xl font-bold text-green-600 mb-2">100%</div>
              <p className="text-gray-700 font-medium">Formação Gratuita</p>
            </div>
          </div>
        </div>
      </section>

      {/* Benefícios */}
      <section id="beneficios" className="py-20">
        <div className="container mx-auto px-4">
          <div className="text-center mb-16">
            <h2 className="text-4xl font-bold text-blue-900 mb-4">
              Benefícios Reais para Alunos
            </h2>
            <p className="text-xl text-gray-600 max-w-2xl mx-auto">
              Descubra como a parceria SENAI e CCM transforma vidas através da educação técnica de qualidade
            </p>
          </div>

          <div className="grid md:grid-cols-3 gap-8">
            {/* Benefício 1 */}
            <Card className="p-8 hover:shadow-lg transition-shadow border-0">
              <div className="bg-blue-100 w-16 h-16 rounded-lg flex items-center justify-center mb-6">
                <Cpu className="h-8 w-8 text-blue-900" />
              </div>
              <h3 className="text-2xl font-bold text-blue-900 mb-4">Infraestrutura de Qualidade</h3>
              <p className="text-gray-700 mb-4">
                Laboratórios modernos, equipamentos de ponta e materiais específicos fornecidos pelo SENAI para aprendizado prático e imersivo.
              </p>
              <ul className="space-y-2 text-gray-600">
                <li>✓ Laboratórios especializados</li>
                <li>✓ Equipamentos de indústria</li>
                <li>✓ Ambiente profissional</li>
              </ul>
            </Card>

            {/* Benefício 2 */}
            <Card className="p-8 hover:shadow-lg transition-shadow border-0">
              <div className="bg-green-100 w-16 h-16 rounded-lg flex items-center justify-center mb-6">
                <GraduationCap className="h-8 w-8 text-green-600" />
              </div>
              <h3 className="text-2xl font-bold text-blue-900 mb-4">Professores Especializados</h3>
              <p className="text-gray-700 mb-4">
                Docentes experientes do SENAI com expertise em suas áreas, trazendo conhecimento prático do mercado para a sala de aula.
              </p>
              <ul className="space-y-2 text-gray-600">
                <li>✓ Professores certificados</li>
                <li>✓ Experiência industrial</li>
                <li>✓ Metodologia comprovada</li>
              </ul>
            </Card>

            {/* Benefício 3 */}
            <Card className="p-8 hover:shadow-lg transition-shadow border-0">
              <div className="bg-blue-100 w-16 h-16 rounded-lg flex items-center justify-center mb-6">
                <Briefcase className="h-8 w-8 text-blue-900" />
              </div>
              <h3 className="text-2xl font-bold text-blue-900 mb-4">Empregabilidade Garantida</h3>
              <p className="text-gray-700 mb-4">
                90,5% das indústrias preferem profissionais formados pelo SENAI, abrindo portas para carreiras promissoras.
              </p>
              <ul className="space-y-2 text-gray-600">
                <li>✓ Certificação reconhecida</li>
                <li>✓ Oportunidades de estágio</li>
                <li>✓ Inserção no mercado</li>
              </ul>
            </Card>

            {/* Benefício 4 */}
            <Card className="p-8 hover:shadow-lg transition-shadow border-0">
              <div className="bg-green-100 w-16 h-16 rounded-lg flex items-center justify-center mb-6">
                <Lightbulb className="h-8 w-8 text-green-600" />
              </div>
              <h3 className="text-2xl font-bold text-blue-900 mb-4">Desenvolvimento de Habilidades</h3>
              <p className="text-gray-700 mb-4">
                Muito além de técnica: autonomia, criatividade, resolução de problemas e capacidade de inovação.
              </p>
              <ul className="space-y-2 text-gray-600">
                <li>✓ Autonomia profissional</li>
                <li>✓ Criatividade e inovação</li>
                <li>✓ Pensamento crítico</li>
              </ul>
            </Card>

            {/* Benefício 5 */}
            <Card className="p-8 hover:shadow-lg transition-shadow border-0">
              <div className="bg-blue-100 w-16 h-16 rounded-lg flex items-center justify-center mb-6">
                <Users className="h-8 w-8 text-blue-900" />
              </div>
              <h3 className="text-2xl font-bold text-blue-900 mb-4">Suporte Completo</h3>
              <p className="text-gray-700 mb-4">
                Alimentação e transporte fornecidos para aulas práticas, garantindo acesso igualitário a todos os alunos.
              </p>
              <ul className="space-y-2 text-gray-600">
                <li>✓ Alimentação fornecida</li>
                <li>✓ Transporte gratuito</li>
                <li>✓ Acompanhamento integral</li>
              </ul>
            </Card>

            {/* Benefício 6 */}
            <Card className="p-8 hover:shadow-lg transition-shadow border-0">
              <div className="bg-green-100 w-16 h-16 rounded-lg flex items-center justify-center mb-6">
                <Award className="h-8 w-8 text-green-600" />
              </div>
              <h3 className="text-2xl font-bold text-blue-900 mb-4">Certificação Reconhecida</h3>
              <p className="text-gray-700 mb-4">
                Diploma técnico de nível médio reconhecido nacionalmente, válido para progressão educacional e profissional.
              </p>
              <ul className="space-y-2 text-gray-600">
                <li>✓ Certificado oficial</li>
                <li>✓ Válido nacionalmente</li>
                <li>✓ Porta para faculdade</li>
              </ul>
            </Card>
          </div>
        </div>
      </section>

      {/* Cursos Oferecidos */}
      <section id="cursos" className="bg-gray-50 py-20">
        <div className="container mx-auto px-4">
          <div className="text-center mb-16">
            <h2 className="text-4xl font-bold text-blue-900 mb-4">
              Cursos Técnicos Disponíveis
            </h2>
            <p className="text-xl text-gray-600 max-w-2xl mx-auto">
              Formação técnica em áreas estratégicas para a indústria, com carga horária de 1.200 horas
            </p>
          </div>

          <div className="grid md:grid-cols-2 gap-6">
            {[
              { nome: "Mecatrônica", icon: <Cpu className="h-6 w-6" /> },
              { nome: "Eletromecânica", icon: <Code className="h-6 w-6" /> },
              { nome: "Automação Industrial", icon: <Cpu className="h-6 w-6" /> },
              { nome: "Biotecnologia", icon: <Lightbulb className="h-6 w-6" /> },
              { nome: "Química", icon: <Code className="h-6 w-6" /> },
              { nome: "Desenvolvimento de Sistemas", icon: <Code className="h-6 w-6" /> },
              { nome: "Inteligência Artificial", icon: <Lightbulb className="h-6 w-6" /> },
              { nome: "Eletrotécnica", icon: <Cpu className="h-6 w-6" /> },
            ].map((curso, idx) => (
              <Card key={idx} className="p-6 flex items-center gap-4 hover:shadow-md transition-shadow border-0">
                <div className="bg-green-100 p-3 rounded-lg text-green-600">
                  {curso.icon}
                </div>
                <div>
                  <h3 className="font-bold text-blue-900">{curso.nome}</h3>
                  <p className="text-sm text-gray-600">1.200 horas | Integrado ao Ensino Médio</p>
                </div>
              </Card>
            ))}
          </div>
        </div>
      </section>

      {/* Sucesso de Alunos */}
      <section className="py-20">
        <div className="container mx-auto px-4">
          <div className="text-center mb-16">
            <h2 className="text-4xl font-bold text-blue-900 mb-4">
              Histórias de Sucesso
            </h2>
            <p className="text-xl text-gray-600 max-w-2xl mx-auto">
              Alunos que transformaram suas vidas através da educação técnica
            </p>
          </div>

          <div className="grid md:grid-cols-2 gap-12 items-center mb-16">
            <img 
              src="https://d2xsxph8kpxj0f.cloudfront.net/310519663385167336/K3tkZv4hPizuMeoPYXWB5m/students-success-P4RjzngaMs5hgD5uVE4WnF.webp"
              alt="Alunos celebrando sucesso"
              className="rounded-lg shadow-lg"
            />
            <div>
              <h3 className="text-3xl font-bold text-blue-900 mb-6">
                Transformando Vidas Através da Educação
              </h3>
              <p className="text-lg text-gray-700 mb-6">
                Alunos relatam mudanças significativas em sua autonomia, responsabilidade e proatividade. A metodologia do SENAI é reconhecida como inquestionável, com 100% de satisfação entre os estudantes.
              </p>
              <div className="space-y-4">
                <div className="border-l-4 border-green-600 pl-4">
                  <p className="font-bold text-blue-900">Giovanni Paulo Wolf, 16 anos</p>
                  <p className="text-gray-700">"O curso de Química me ajudará a entrar na Petrobras. As aulas são bem elaboradas e aprendo muito sobre experimentos químicos usados nas indústrias."</p>
                </div>
                <div className="border-l-4 border-green-600 pl-4">
                  <p className="font-bold text-blue-900">Maria Júlia Dias Ferreira</p>
                  <p className="text-gray-700">"Exige esforço e resiliência, mas tenho certeza que isso vai me ajudar futuramente para adentrar o mercado de trabalho."</p>
                </div>
              </div>
            </div>
          </div>

          <div className="grid md:grid-cols-2 gap-12 items-center">
            <div>
              <h3 className="text-3xl font-bold text-blue-900 mb-6">
                Preparação para o Futuro Profissional
              </h3>
              <p className="text-lg text-gray-700 mb-6">
                Os cursos técnicos não apenas preparam para o mercado de trabalho, mas também abrem portas para educação superior. Alunos desenvolvem competências essenciais para a indústria moderna.
              </p>
              <div className="space-y-4">
                <div className="border-l-4 border-green-600 pl-4">
                  <p className="font-bold text-blue-900">Ana Laura Souza Madeira, 17 anos</p>
                  <p className="text-gray-700">"As aulas no SENAI são bem dinâmicas. É muito mais legal poder aplicar na prática tudo o que você aprendeu."</p>
                </div>
                <div className="border-l-4 border-green-600 pl-4">
                  <p className="font-bold text-blue-900">Otávio Gabriel de Matos, 16 anos</p>
                  <p className="text-gray-700">"As aulas são um pouco mais puxadas, mas isso desenvolve melhor o meu intelecto e abre portas para indústrias e faculdades."</p>
                </div>
              </div>
            </div>
            <img 
              src="https://d2xsxph8kpxj0f.cloudfront.net/310519663385167336/K3tkZv4hPizuMeoPYXWB5m/industry-partnership-B2G7ZeJSyA6hEFx22PTQ7e.webp"
              alt="Parceria SENAI com indústria"
              className="rounded-lg shadow-lg"
            />
          </div>
        </div>
      </section>

      {/* Região de Umuarama */}
      <section id="umuarama" className="bg-gradient-to-r from-blue-900 to-green-600 text-white py-20">
        <div className="container mx-auto px-4">
          <div className="grid md:grid-cols-2 gap-12 items-center">
            <div>
              <h2 className="text-4xl font-bold mb-6">
                Oportunidades em Umuarama
              </h2>
              <p className="text-xl text-blue-100 mb-6">
                A região Noroeste do Paraná, com destaque para Umuarama, é um polo industrial em crescimento com forte demanda por profissionais técnicos qualificados.
              </p>
              <div className="space-y-4 mb-8">
                <div className="flex gap-4">
                  <div className="bg-white/20 p-3 rounded-lg">
                    <Briefcase className="h-6 w-6" />
                  </div>
                  <div>
                    <h4 className="font-bold text-lg">Mercado em Expansão</h4>
                    <p className="text-blue-100">Indústrias em crescimento buscam profissionais técnicos qualificados</p>
                  </div>
                </div>
                <div className="flex gap-4">
                  <div className="bg-white/20 p-3 rounded-lg">
                    <Award className="h-6 w-6" />
                  </div>
                  <div>
                    <h4 className="font-bold text-lg">Reconhecimento Regional</h4>
                    <p className="text-blue-100">Profissionais SENAI são preferidos pelas indústrias locais</p>
                  </div>
                </div>
                <div className="flex gap-4">
                  <div className="bg-white/20 p-3 rounded-lg">
                    <Users className="h-6 w-6" />
                  </div>
                  <div>
                    <h4 className="font-bold text-lg">Comunidade Educacional</h4>
                    <p className="text-blue-100">Rede de colégios cívico-militares com excelência educacional</p>
                  </div>
                </div>
              </div>
              <Button className="bg-white text-blue-900 hover:bg-gray-100 px-8 py-6 text-lg font-bold">
                Saiba Mais Sobre Umuarama
              </Button>
            </div>
            <img 
              src="https://d2xsxph8kpxj0f.cloudfront.net/310519663385167336/K3tkZv4hPizuMeoPYXWB5m/future-careers-STAk9yYo4KTrSWv5KYkDK5.webp"
              alt="Carreiras futuras"
              className="rounded-lg shadow-2xl"
            />
          </div>
        </div>
      </section>

      {/* Crescimento da Parceria */}
      <section className="py-20 bg-gray-50">
        <div className="container mx-auto px-4">
          <div className="text-center mb-16">
            <h2 className="text-4xl font-bold text-blue-900 mb-4">
              Crescimento da Parceria
            </h2>
            <p className="text-xl text-gray-600">
              Uma expansão exponencial demonstra o sucesso e confiança na parceria
            </p>
          </div>

          <div className="grid md:grid-cols-3 gap-8">
            <Card className="p-8 text-center border-0">
              <div className="text-5xl font-bold text-blue-900 mb-4">2024</div>
              <h3 className="text-2xl font-bold text-blue-900 mb-4">Início da Parceria</h3>
              <div className="space-y-2 text-gray-700">
                <p>2 mil vagas</p>
                <p>66 turmas</p>
                <p>Primeiros alunos</p>
              </div>
            </Card>

            <Card className="p-8 text-center border-0 ring-2 ring-green-600">
              <div className="text-5xl font-bold text-green-600 mb-4">2025</div>
              <h3 className="text-2xl font-bold text-blue-900 mb-4">Expansão Significativa</h3>
              <div className="space-y-2 text-gray-700">
                <p>6.473 alunos</p>
                <p>223 turmas</p>
                <p>144 escolas</p>
              </div>
            </Card>

            <Card className="p-8 text-center border-0">
              <div className="text-5xl font-bold text-blue-900 mb-4">2026</div>
              <h3 className="text-2xl font-bold text-blue-900 mb-4">Novos Horizontes</h3>
              <div className="space-y-2 text-gray-700">
                <p>14 cursos técnicos</p>
                <p>IA incluída</p>
                <p>Expansão contínua</p>
              </div>
            </Card>
          </div>
        </div>
      </section>

      {/* CTA Final */}
      <section className="bg-blue-900 text-white py-16">
        <div className="container mx-auto px-4 text-center">
          <h2 className="text-4xl font-bold mb-6">
            Pronto para Transformar Seu Futuro?
          </h2>
          <p className="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
            Inscreva-se agora em um dos cursos técnicos gratuitos do SENAI nos Colégios Cívico-Militares do Paraná
          </p>
          <div className="flex gap-4 justify-center flex-wrap">
            <Button className="bg-green-600 hover:bg-green-700 text-white px-8 py-6 text-lg">
              Inscrever-se Agora
            </Button>
            <Button variant="outline" className="border-white text-white hover:bg-white hover:text-blue-900 px-8 py-6 text-lg">
              Mais Informações
            </Button>
          </div>
          <p className="text-blue-100 mt-8">
            Contato SENAI Umuarama: (44) 3639-1220 | senaipr.org.br/cursos
          </p>
        </div>
      </section>

      {/* Footer */}
      <footer className="bg-gray-900 text-gray-300 py-12">
        <div className="container mx-auto px-4">
          <div className="grid md:grid-cols-4 gap-8 mb-8">
            <div>
              <h4 className="font-bold text-white mb-4">Sobre</h4>
              <p className="text-sm">Parceria entre SENAI e Colégios Cívico-Militares do Paraná para educação técnica de qualidade.</p>
            </div>
            <div>
              <h4 className="font-bold text-white mb-4">Cursos</h4>
              <ul className="text-sm space-y-2">
                <li><a href="#" className="hover:text-white">Mecatrônica</a></li>
                <li><a href="#" className="hover:text-white">Automação Industrial</a></li>
                <li><a href="#" className="hover:text-white">Desenvolvimento de Sistemas</a></li>
              </ul>
            </div>
            <div>
              <h4 className="font-bold text-white mb-4">Contato</h4>
              <ul className="text-sm space-y-2">
                <li>SENAI Umuarama</li>
                <li>(44) 3639-1220</li>
                <li>senaipr.org.br</li>
              </ul>
            </div>
            <div>
              <h4 className="font-bold text-white mb-4">Redes Sociais</h4>
              <ul className="text-sm space-y-2">
                <li><a href="#" className="hover:text-white">Instagram</a></li>
                <li><a href="#" className="hover:text-white">Facebook</a></li>
                <li><a href="#" className="hover:text-white">YouTube</a></li>
              </ul>
            </div>
          </div>
          <div className="border-t border-gray-800 pt-8 text-center text-sm">
            <p>&copy; 2026 Parceria SENAI & Colégios Cívico-Militares do Paraná. Todos os direitos reservados.</p>
          </div>
        </div>
      </footer>
    </div>
  );
}
