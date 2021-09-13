1. DESCRIÇÃO GERAL DO PRODUTO
Adensar é uma aplicação que atua pela qualidade e preservação do meio ambiente através do levantamento arbóreo. Possibilita ao usuário realizarem o levantamento arbóreo, isto é, cadastrar dados das árvores de certas regiões por onde esteve, e colaborar cedendo informações que ajudam na preservação ambiental e nas características eminentemente residenciais da região, valorizando a boa convivência e cidadania e promovendo o respeito mútuo, ao bem público e ao meio ambiente.
1.1   	Principais Usuários
1.1.1 Agentes de Campo – Usuários que irão realizar o levantamento arbóreo em determinada região.

1.1.2 Administrador – Usuários irão administrar as permissões de outros usuários (incluir, excluir e personalizar usuários) e consultar as informações das árvores levantadas(gerar relatórios).
2. ESCOPO
2.1 Levantar os Requisitos do Projeto
2.1.1 Funcionais

•               Cadastrar, alterar e excluir usuários;
•               Login do usuário, de forma a permitir o acesso do mesmo a partir de diferentes aparelhos, tendo sempre informações dos mapeamentos a mão;
 
•               Cadastrar, alterar e excluir árvores;
•             	Sistema de localização, que deve mapear a localização automaticamente utilizando o GPS do dispositivo;
 
•         Extrair relatório dos levantamentos realizados.
•	Visualização dos levantamentos a partir de um mapa	 (Google Maps API)
 		2.1.2 Não-Funcionais
•               O sistema deve ter resposta rápida;
 
•               Ser intuitivo, em sua entrada de dados e no processo de acesso a arquivos.
  
4. PLANEJAMENTO
Para o planejamento inicial, a gerência do projeto é dividida entre as etapas das atividades do projeto. Dito isto, cada administrador atuará independente dos outros, contudo na etapa do processo a qual pertence. Após a sua atuação inicial, serão realizadas novas análises após a releitura do software para trabalhar nas adaptações requeridas pela releitura do sistema. Podemos separar o planejamento da seguinte maneira:
 
I.              Fase 1 – Escopo do Projeto
·          Descrição do Projeto – Identificar o cenário e a função do sistema que será implementado no projeto e especificar como será o seu funcionamento de acordo com a proposta;
·       Definição de Requisitos – Definir quais requisitos serão implementados dentro do projeto para que atenda as necessidades básicas do produto;
·                Wireframe – Criar um protótipo do sistema para sugerir a sua estrutura e relacionamentos entre suas páginas de forma ilustrativa semelhante do layout de elementos fundamentais na interface.
·         Apresentação do Projeto – Apresentar o sistema e suas funcionalidades para o cliente de forma objetiva para demonstrar o seu uso e benefício.

II. 	 Fase 2 – Implementação do Projeto
· Implementação "CRUD usuário” – Implementar as funcionalidades de Cadastro, alteração e exclusão de usuários;
· Implementação "CRUD árvore (placa)” – Implementar as funcionalidades de Cadastro, alteração e exclusão de árvores;
· Implementação  “Aplicação Web (Front-End)” - Implementação do Front-End das aplicações Web;
· Implementação  “Aplicação Banco de dados” - Implementação da estrutura de Banco de Dados;
· Implementação  “Extração de Relatórios” - Implementar a funcionalidade de extração de relatórios com dados dos levantamentos;
· Testes Unitários - Aplicação de teste nas assinaturas de entrada e saída de um sistema.
 Executável 1 –  Implementação "CRUD usuário”
			     Implementação "CRUD árvore (placa)”













5. WIREFRAMES
um Wireframe é uma representação visual da estrutura e funcionalidade de uma única página web ou uma tela de aplicativo móvel. Wireframes são usados ​​no início do processo de desenvolvimento para estabelecer a estrutura básica de uma página antes de acrescentar o design visual e conteúdo. Segue abaixo os Wireframes do projeto Adensar:

       	         
        Wireframe 1 - Página de Login		            Wireframe 2 -  Levantamento
                            
 Wireframe 3 - Painel do Administrador	           Wireframe 4 - Mapa Geográfico




6. DIAGRAMAS
	6.1	Diagrama de Domínio
Um modelo de domínio é um modelo conceitual do domínio que incorpora comportamento e dados. Segue abaixo o diagrama de domínio do Projeto Adensar:
	6.2	Diagrama de Pacotes e Componentes
		Diagramas de pacotes e componentes são diagramas estruturais usados para mostrar, em uma forma de pacotes, a organização e disposição de vários elementos de modelos. Segue abaixo o diagrama de pacotes e componentes do projeto Adensar:

7. ARQUITETURA
	A arquitetura da aplicação será baseada em cliente-servidor, com o fluxo da aplicação web (Html/CSS) comunicando-se  com o backend (PHP) e por fim comunicando-se com o banco de dados (MySQL).
# adensar