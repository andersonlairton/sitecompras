# Análise do projeto e sugestões de backlog

## 1. Resumo executivo

O projeto apresenta uma base funcional de e-commerce/marketplace de compras entre fornecedor e cliente, com páginas de cadastro, autenticação, listagem de produtos e fluxo de pedidos. A estrutura atual demonstra esforço inicial para separar responsabilidades, mas ainda está fortemente orientada para scripts PHP procedurais com trechos de MVC incompleto.

O maior risco do projeto não está em falta de funcionalidade inicial, e sim em fragilidade operacional e de segurança. Há evidências de:

- SQL com concatenação direta de entrada do usuário;
- senhas armazenadas com MD5;
- uso de sessões sem padronização de autenticação;
- código duplicado em vários arquivos;
- inconsistência entre arquivos de cadastro, edição e exclusão;
- ausência de validação e tratamento centralizado de erros;
- UI e fluxos pouco padronizados.

Em termos de evolução, o projeto precisa passar de um protótipo funcional para uma solução mais segura, testável e escalável.

---

## 2. Observações da arquitetura atual

### 2.1. Estrutura funcional

O projeto já possui elementos importantes:

- cadastro de clientes e fornecedores;
- autenticação por login;
- gestão de produtos;
- listagem e pesquisa de produtos;
- gestão de pedidos;
- estrutura inicial em MVC com Controllers e Models.

### 2.2. Problemas estruturais

Os arquivos principais evidenciam uma mistura de estilos:

- páginas PHP com lógica de acesso ao banco no mesmo arquivo;
- modelos com operações de banco e regras de negócio em paralelo;
- controllers incompletos ou com ações parcialmente implementadas;
- uso de includes para configuração direta e repetida;
- arquivos redundantes, como cad_produto.php, salvarproduto.php, editproduto.php e editarproduto.php, que parecem representar caminhos diferentes para a mesma ação.

Isso gera baixa manutenibilidade, dificulta testes e aumenta chance de regressões.

---

## 3. Diagnóstico técnico e de negócio

### 3.1. Segurança

Os riscos mais relevantes observados são:

- uso de MD5 para senhas;
- acesso direto a $_POST e $_SESSION sem validação robusta;
- SQL dinâmico montado por concatenação de strings;
- inclusão de arquivos de configuração com credenciais fixas no código;
- comparação de senha sem hash seguro;
- autenticação baseada em dados do banco sem camada de autorização consistente.

Impacto: risco alto de vazamento de dados, autenticação quebrada e vulnerabilidades de injeção SQL.

### 3.2. Qualidade de código

Há sinais de código legado e incompleto:

- funções vazias, como deletar() em ProdutosModel;
- comentários de código legado e blocos comentados;
- var_dump em produção;
- uso inconsistente de nomes de arquivos e classes;
- ausência de padronização de convenções de nomenclatura;
- falta de camada de exceptions e logs.

Impacto: baixa produtividade da equipe, alto custo de manutenção e pouca previsibilidade.

### 3.3. Fluxo de dados e regras de negócio

Observa-se que:

- o cadastro de fornecedores e clientes não segue uma única modelagem de usuário;
- há divergência de campos e padronização entre tabelas e ações;
- a autenticação e a criação de usuários parecem estar desconectadas em partes do código;
- busca e listagem de produtos estão espalhadas por arquivos sem uma visão única de consulta;
- as regras de atualização e exclusão de produto ainda estão frágeis.

Impacto: inconsistência no comportamento e má experiência de uso.

### 3.4. Experiência do usuário

A interface parece estar em fase inicial, com:

- HTML misturado com lógica;
- pouca organização visual e reutilização de layout;
- ausência de mensagens de feedback mais amigáveis;
- navegação pouco consistente;
- ausência de validações front-end e tratamento de erros amigáveis;
- pouca responsividade e UX mobile.

Impacto: reduz confiança e aumenta taxa de abandono do usuário.

---

## 4. Pontos fortes identificados

Mesmo com os problemas, o projeto já contém uma base útil:

- domínio claro do negócio: venda de produtos por fornecedores e compra por clientes;
- autenticação inicial já implementada;
- cadastro e listagem de produtos funcionando como base de MVP;
- uso de MySQL e PHP, com estrutura familiar para manutenção em ambiente web;
- divisão inicial em Models e Controllers, o que pode ser expandida para uma arquitetura mais consistente.

---

## 5. Backlog de melhorias sugerido

### Prioridade Alta

| ID | Item | Objetivo | Impacto |
|---|---|---|---|
| B-01 | Reestruturação da arquitetura em MVC/Service | Centralizar regras de negócio e reduzir lógica dispersa entre arquivos | Alto |
| B-02 | Correção de autenticação e autorização | Padronizar sessão, login, permissões e controle por perfil | Alto |
| B-03 | Segurança de senhas e credenciais | Trocar MD5 por password_hash e validar senha com password_verify | Alto |
| B-04 | Proteção contra SQL Injection | Migrar para prepared statements e consultas centralizadas | Alto |
| B-05 | Padronização de banco e modelos de dados | Unificar tabelas, nomes e relacionamentos entre cliente, fornecedor, usuário e produto | Alto |
| B-06 | Validação centralizada de entrada | Validar dados do formulário antes de persistir no banco | Alto |

### Prioridade Média

| ID | Item | Objetivo | Impacto |
|---|---|---|---|
| B-07 | Refactor dos fluxos de CRUD de produto | Remover código duplicado e unificar fluxo de cadastro, edição e exclusão | Médio |
| B-08 | Gestão de upload de imagens | Tratar arquivos de forma segura, com validação de tipo e tamanho | Médio |
| B-09 | Melhor UX no cadastro e login | Reduzir campos confusos, melhorar feedback e mensagens | Médio |
| B-10 | Painel administrativo e dashboard | Exibir indicadores de vendas, produtos, pedidos e clientes | Médio |
| B-11 | Sistema de pedidos mais robusto | Validar estoque, valor, status e histórico de transações | Médio |
| B-12 | Busca e filtros avançados | Permitir busca por categoria, nome, preço e fornecedor | Médio |

### Prioridade Baixa

| ID | Item | Objetivo | Impacto |
|---|---|---|---|
| B-13 | Responsividade e redesign visual | Melhorar compatibilidade em mobile e desktop | Baixo |
| B-14 | Logs e auditoria | Registrar ações críticas e erros para diagnóstico | Baixo |
| B-15 | Testes automatizados | Cobrir login, cadastro e CRUD de produto | Baixo |
| B-16 | Documentação e onboarding | Facilitar manutenção e novo aprendizado da equipe | Baixo |
| B-17 | Deploy e ambiente de homologação | Padronizar Docker, ambiente e regras de publicação | Baixo |

---

## 6. Detalhamento das melhorias por eixo

### 6.1. Segurança e autenticação

- Migração de MD5 para password_hash;
- criação de camada de autenticação centralizada;
- controle por perfil: cliente, fornecedor, administrador;
- armazenamento sensível em variáveis de ambiente;
- bloqueio de acesso a áreas sem sessão válida;
- uso de prepared statements em todos os acessos ao banco.

#### Histórias sugeridas
- Como usuário, quero fazer login com senha segura para proteger minha conta.
- Como administrador, quero controlar acesso por perfil para restringir áreas do sistema.

### 6.2. Arquitetura e manutenção

- padronizar uma estrutura com Controller, Model, Service, Repository ou DAO;
- consolidar a conexão ao banco em um único arquivo/Classe;
- remover lógica de interface e SQL espalhados por arquivos de view;
- centralizar as rotas e fluxos do sistema.

#### Histórias sugeridas
- Como desenvolvedor, quero uma arquitetura padronizada para facilitar manutenção.
- Como time, quero reduzir duplicação de código para acelerar entregas.

### 6.3. Gestão de produtos e pedidos

- validar campos obrigatórios e regras de negócio antes de salvar;
- padronizar tabela de produtos e itens de pedido;
- criar status de pedido: pendente, aprovado, cancelado, entregue;
- implementar histórico de alterações e auditoria; 
- permitir atualização de imagem e preço com regras de negócio definidas.

#### Histórias sugeridas
- Como fornecedor, quero cadastrar produtos com dados consistentes para manter catálogo confiável.
- Como cliente, quero visualizar produtos com filtros e preço corretamente apresentados.

### 6.4. UX e interface

- criar layout e componentes reutilizáveis;
- unificar mensagens de alerta e validação;
- melhorar fluxo de cadastro com feedback visual;
- tornar a aplicação responsiva para celular;
- adicionar páginas de empty state, erros e confirmação.

#### Histórias sugeridas
- Como cliente, quero receber feedback claro no cadastro para concluir meu fluxo com menos erro.
- Como fornecedor, quero gerenciar meu catálogo em uma interface simples e responsiva.

### 6.5. Qualidade e evolução

- criar testes automatizados para cenários críticos;
- documentar endpoints, regras e arquitetura;
- configurar ambiente de homologação e produção separados;
- criar backlog de melhorias com prioridade por valor de negócio.

---

## 7. Roadmap sugerido

### Fase 1 - Correção de riscos e estabilização
- segurança de autenticação;
- proteção de SQL e validação de dados;
- padronização de banco e conexão;
- revisão dos fluxos de cadastro e login.

### Fase 2 - Estrutura e produtividade
- refactor do MVC e regras de negócio;
- estabilização de CRUD de produto e pedido;
- padronização de layout e feedback visual;
- upload e gestão de imagens.

### Fase 3 - Expansão e maturidade
- dashboard administrativo;
- filtros e busca avançada;
- relatórios e métricas;
- testes automatizados e documentação.

---

## 8. Recomendação final

O projeto tem um bom potencial como MVP, mas ainda está em uma fase inicial de consolidação técnica. Para evoluir com segurança, a prioridade deve ser a correção da base de autenticação, segurança de dados e arquitetura. A partir daí, o trabalho deve se concentrar em padronização, UX, gestão de produtos e processos de pedido.

Se o objetivo for transformar este projeto em uma solução de produção, o primeiro grande ciclo de desenvolvimento deve focar em:

1. segurança;
2. organização de código;
3. consistência de dados;
4. qualidade da experiência do usuário.

---

## 9. Conclusão

O backlog sugerido acima considera o projeto como um sistema em crescimento e ajuda a transformar ideias dispersas em uma visão de evolução estratégica. A maior necessidade é deixar de ser um conjunto de scripts funcionais e se tornar uma solução de software sustentável, segura e escalável.
