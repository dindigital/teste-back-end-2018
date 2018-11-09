### DIN DIGITAL - Teste Laravel - 2018

# O teste
O objetivo do teste é conhecer as habilidades em:
- Programação PHP / Laravel
- Organização (código/arquivos)
- Controle de versão
- Análise/Entendimento de requisitos
- Capricho (atenção com urls, metatags, validações, modelagem, nomenclatura, ...)

## Importante
Tudo que for desenvolvido não será utilizado comercialmente e a única intenção é de avaliar o conhecimento atual do interessado.

### Qual é o teste ?
Imagine que a empresa foi contratada para participar de um projeto. Este projeto consiste na elaboração de um site.

O site será para um consultório médico e o principal objetivo é armazenar leeds de possíveis clientes.

A equipe de criação já fez o layout (fake, este foi comprado), a equipe de frontend fez a montagem (fake, a compra foi do template montado) e agora teremos a programação backend para fechar este projeto.

### O que deve ser feito ?
- [ ] Modelagem de banco de dados para formulário. Os campos do formulário são: Nome, E-mail, Telefone
- [ ] Modelagem de banco de dados para médicos. Os campos são: Nome, Especialidade, Celular, Descrição, Foto
- [ ] Exibir as páginas do projeto (index.html, appontment_success.html, doctor.html) com rotas
- [ ] Persistir os dados do formulário no banco de dados modelado. Os 3 campos são obrigatórios
- [ ] Após a persistência dos dados do formulário, enviar um e-mail para o administrador do sistema
- [ ] Após o envio do e-mail, direcionar usuário para tela de sucesso (appontment_success.html)
- [ ] Exibir a lista de doutores cadastrados na página inicial, temos uma área chamada "Meet the Wealth.life Specialists Doctors"
- [ ] Ao clicar em um médico, exibir as informações deste médico na página doctor.html
- [ ] Criação de um recurso de API Rest GET para listar os médicos em formato JSON.
- [ ] Criação de um painel administrativo simples para alimentação (CRUD) dos dados.

OBS: Os arquivos do template estão dentro da pasta files deste repositório

### O que devo utilizar ?
- Laravel e Docker

### Como iniciar ?
- Entre na pasta docker e execute um docker-compose up
- Após o build e execução, o laravel padrão estará disponível na URL http://localhost
- Os arquivos do projeto (Laravel) estão dentro da pasta site

### Como participar ?
- Fazer um fork deste repositório
- Programar para atender os requisitos
- Fazer um merge request quando finalizar. 

# Obrigado! :)
