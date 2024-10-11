
# Sistema de Chamada Escolar "HereIam"

Este repositório contém o projeto desenvolvido como Trabalho de Conclusão de Curso (TCC) no curso técnico em Informática integrado ao ensino médio pelo IFPR – Campus Umuarama (2022). O projeto tem como objetivo criar um sistema de controle de presença escolar utilizando tecnologia biométrica e integração com o Arduino.

## Descrição do Projeto

O sistema "HereIam" é dividido em duas partes principais:

1. **Interface Web**: Desenvolvida em **PHP**, **HTML**, **CSS**, entre outras tecnologias web, esta interface permite que professores gerenciem os alunos e seus registros de presença.

2. **Sistema de Biometria com Arduino**: Através de um **sensor biométrico**, os alunos podem registrar sua presença. Os dados são enviados para o servidor, onde são processados e validados pelo professor.

### Funcionamento

- Quando um aluno registra sua presença usando o sensor biométrico, os dados são temporariamente armazenados em um **banco de dados intermediário**.
- O professor acessa o sistema e valida as presenças, que são então transferidas para o **banco de dados principal** do sistema, onde ficam registradas permanentemente.

### Tecnologias Utilizadas

- **PHP**, **HTML**, **CSS** para o desenvolvimento da interface web entre outras
- **Arduino** e um **sensor biométrico** para captação das presenças
- Dois **bancos de dados**: um temporário para armazenar as presenças e outro para o armazenamento final dos dados

### Desafios e Melhorias Futuras

Alguns pontos do projeto ainda podem ser aprimorados:

- **Segurança**: Aumentar a proteção dos dados na comunicação entre o Arduino e o sistema web.
- **Integração com Arduino**: Melhorar a integração entre os componentes de hardware e software, simplificando o processo e tornando-o mais eficiente, pois existe a necessidade de ter dois bancos de dados e isso deve ser automatizado apenas para um banco.


Sinta-se à vontade para me mandar uma mensagem para mais informações sobre o sistema
