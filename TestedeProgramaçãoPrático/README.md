# 🖋️ Teste de programação - Imóvel Guide

## ⛔ Objetivo
- [x]  Criar um formulário que contenha os campos: **Nome - CPF - Creci**
- [x]  Fazer a validação do formulário 
    - [x]  Sendo obrigatório que o CPF tenha 11 caracteres, Creci e Nome tenha pelo menos 2 caracteres
- [x]  Criar um banco de dados para cadastrar os dados: **ID - Nome - CPF - Creci**
- [x]  Gravar os dados ao enviar o formulário, após ser cadastrado redirecionar para a tela do formulário novamente com ele limpo
- [x]  Fazer com que os dados dos corretores apareçam em uma tabela abaixo do formulário
- [x]  Dentro da tabela, apresentar um botão **Editar** e **Excluir**, para cada registro
- [x]  Fazer a função Excluir um registro

### Obrigatório
- [x]  O campo **Creci** deve permitir apenas números e ter no máximo 8 caracteres
- [x]  O campo **Nome** deve ter no máximo 20 caracteres

### Diferenciais
- [x]  Criar a função Editar, carregando as informações no formulário acima e trocar o botão de **Enviar** para **Salvar**
- [x]  Mostrar se a operação de Cadastro, Edição ou Exclusão foi realizada com sucesso em cima do formulário
- [x]  Se ao tentar cadastrar informações com um CPF já presente no banco de dados, o sistema impedir o cadastro e exibir uma mensagem indicando que o registro já existe
- [x]  Caso haja uma tentativa de cadastrar um usuário com o nome **André Nunes**, o sistema deve bloquear o cadastro e exibir uma mensagem informando que o usuário está na blacklist

### Adicionais
- [x]  Se ao tentar cadastrar informações com um Creci já presente no banco de dados, o sistema impedir o cadastro e exibir uma mensagem indicando que o registro já existe

## Linguagens utilizadas:
- PHP 8 (c/ Laravel 10)
- MySQL
- HTML5 (c/ Blade)
- CSS3 (c/ BootStrap)
## Demonstração

### Tela inicial
![Tela inicial](https://cdn.discordapp.com/attachments/821534696433123348/1204577563775598642/image.png?ex=65d53d47&is=65c2c847&hm=8ba8c89a7d415980d3f05b587c442e5bf86c8694443e864911e4a20a76b41437&)

### Mensagem de erro ao colocar menos ou mais digitos no Nome, CPF e Creci
![Mensagem de erro ao colocar menos ou mais digitos no Nome, CPF e Creci](https://cdn.discordapp.com/attachments/821534696433123348/1204580392087068724/image.png?ex=65d53fe9&is=65c2cae9&hm=38efa9c542c25c1419bf9715c7cd75742ece61d4fba2829a38d38f199c5add22&)

## Corretor cadastrado
![Corretor cadastrado](https://cdn.discordapp.com/attachments/821534696433123348/1204581025829748786/image.png?ex=65d54080&is=65c2cb80&hm=de0bb482ca170a59205d89664b9add10a8aedc3c87f9386344cdb5fa0f2df4c9&)

## CPF já cadastrado
![CPF já cadastrado](https://cdn.discordapp.com/attachments/821534696433123348/1204581302884372530/image.png?ex=65d540c2&is=65c2cbc2&hm=3c92c7e7a58c6867c7e46f667dcb2174754e2f60b08cfa3d79a04aae38b33516&)

## Creci já cadastrado
![Creci já cadastrado](https://cdn.discordapp.com/attachments/821534696433123348/1204581545856335883/image.png?ex=65d540fc&is=65c2cbfc&hm=e2bf76a3b1194039753ab463e81d99875a1ff9de9994da4d2bad6efce285c698&)

## Editando cadastro
- 1
![Editando cadastro 1](https://cdn.discordapp.com/attachments/821534696433123348/1204583130292297799/image.png?ex=65d54276&is=65c2cd76&hm=7bf44f4fbd2723b79eb2c15a98a6bc3ee74c570667edf974bc1eb540179e5d6b&)
- 2
![Editando cadastro 2](https://cdn.discordapp.com/attachments/821534696433123348/1204583374514032690/image.png?ex=65d542b0&is=65c2cdb0&hm=8e7e82cb176442a4b3ae51411c001ee594aee1ccff1abe0081050ac34fd5b0a8&)
- 3 - Mostrando validação
![Editando cadastro 3](https://cdn.discordapp.com/attachments/821534696433123348/1204583539824267264/image.png?ex=65d542d7&is=65c2cdd7&hm=312b9efe9fe285b55f1185ebb67ce9a87c18513d0ff52aa435bdf8c9f2e76a32&)
- 4 - Creci do id 29 atualizado
![Texto alternativo](https://cdn.discordapp.com/attachments/821534696433123348/1204583855185469471/image.png?ex=65d54323&is=65c2ce23&hm=5d8c370e0d9920e3816531f3aa120773f47a53b1e2dc991ecafd82afe0f3f26f&)

## Excluindo cadastro
- 1
![Excluindo cadastro 1](https://cdn.discordapp.com/attachments/821534696433123348/1204584022110638150/image.png?ex=65d5434a&is=65c2ce4a&hm=e149d3c4cda30114e9d41e1424dce5cd4af6556a33f024e9f7de8aff8f57f0a8&)
- 2 - Cadastro do Gustavo excluido
![Excluindo cadastro 2](https://cdn.discordapp.com/attachments/821534696433123348/1204584236510617600/image.png?ex=65d5437e&is=65c2ce7e&hm=81a4cbb01ef38e9f66142ca33f392342877a465008e4c3d3ea5eb2633815b71d&)

## Blacklist - André Nunes
![Blacklist - André Nunes](https://cdn.discordapp.com/attachments/821534696433123348/1204584694851567626/image.png?ex=65d543eb&is=65c2ceeb&hm=c57f8edfeb288fb5d8b7d24c5f63884d93bd4c6ff651f753b79b4181646afb83&)

