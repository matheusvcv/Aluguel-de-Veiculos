# Sistema de Aluguel de Veículos

O projeto Alugel-de-Veículos é um sistema de gerenciamento de locação de carros. Fazendo relação entre quatro tabelas do banco de dados MySQL, o sistema entende dois tipos de usuários, sendo estes clientes e funcionários. Os funcionários precisam fazer login, e podem cadastrar e consultar clientes, realizar a ação de locação dos veículos e realizar o recebimento de veículos anteriormente locados. Já os clientes podem fazer cotações e visualizar as informações. A partir do momento que algum dos carros é locado, ele se torna indisponível até que o procedimento de devolução seja realizado. 

O banco de dados possui quatro tabelas, sendo uma para registar os funcionários e tornar possível o sistema de login, e outras duas para registrar os carros e os clientes. A última, é a que registra a reservas, e se conecta com todas as outras através de chaves estrangeiras. Ela recebe os dados de das outras três, e torna o sistema verificável e funcional.

As ferramentas utilizadas para desenvolver esse projeto foram: PHP Orientado à objeto integrado com banco de dados MySql, HTML e CSS.

Demonstração de funcionário realizando locação e devolução de um veículo e demais funcionalidades: 
<br>
![escola](https://user-images.githubusercontent.com/98974444/187558236-5392112a-970e-4724-b478-6d38db6ee5a4.gif)
<br>
Demonstração de cliente fazendo cotações:
<br>

![escola](https://user-images.githubusercontent.com/98974444/187558914-26da8bf2-8f0b-4c4f-b667-e1787d1bd4f5.gif)

