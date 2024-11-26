# Observações

## PSR-4
Padronização de classes para que o autoload funcione

## PSR-12
Padronização do código PHP

## Comandos importantes
`composer init`
<p>Instalar os arquivos principais do composer</p>

`composer install`
<p>Instalar todos os pacotes do composer.json e se já existir o composer.lock instala as versões que existem no arquivo lock</p>

`composer update`
<p>Atualizar todos os pacotes para a última versão</p>

`composer dump-autoload`
<p>Atualiza as informações do composer.json, sem instalar nenhum pacote</p>

`composer install --no-dev`
<p>Muito usado para instalar em produção instala todos os pacotes, sem instalar os pacotes de dev</p>

`composer require` e `composer require --dev`
<p>Usados para instalar dependências</p>

`vendor\bin\phpunit tests\BuscadorDeCursosTest.php`
<p>Executa os testes, o diretório /bin é onde estão os executáveis do composer</p>

`.\vendor\bin\phpcs --standard=PSR12 src\`
<p>Utiliza as especificações da PSR12 para validar os padrões de código</p>

`vendor\bin\phan --allow-polyfill-parser .\src\BuscadorDeCursos.php`
<p>Verificar erros no código</p>

`composer check`
<p>
    Roda os scripts comfigurados no composer.json    
</p>

`composer list`
<p>
    Lista os comandos do composer
</p>

## Ferramentas de qualidade de software
- PHP Unit: Teste de software
- PHPCS (CodeSniffer): Validação de código
- Phan: Validação de erros no código

## PHAN
Para que o phan consiga analisar todo o projeto o ideal é criar um arquivo de configuração em .phan/config.php