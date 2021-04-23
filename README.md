# Aplicação CRUD em Codeiniter 4.1 (EM DESENVOLVIMENTO)

## Configurações usadas:

HTML5, CSS (Bootstrap 4), Mysql
Página NÃO RESPONSÍVA
Adicionar banners para a visualização (link na página inicial)

## Funcionamento

CI_ENVIRONMENT = development. (Alterar para o formato apropriado) 
Para o funcionamento do Banco de Dados e execução dos CRUD's, ative a extensão de conexão
do MYSQLi no php.ini.
Banco de Dados usado terá o nome no config/database. Por default, o nome será ezoom_crud.
Crie o Banco de dados para a execução do sistema.
O sistema de Administração começa vazio, por favor, execute o php spark migrate para
criação da tabela no Banco de Dados.

Os links NÃO ESTÃO criptografados para que o desenvolvedor possa manipular da forma que
ele achar adequado.

### Rotas

banners/list: Listagem dos banners com ações (criar, exibir, editar e excluir)
banners/new/form: Criação de novo banner
banners/edit/{id}: Edição do banner
banners/delete/{id}: exclusão do banner

### Controllers

Controller Banner: Exibe as funções de administração/exibição do sistema
Controller Home: Exibe a página do site visível ao público

### Formatação de imagens.

As imagens serão formatadas para melhor exibição e diminuição de peso no servidor.
A configuração de formatação será definida no controller.

##