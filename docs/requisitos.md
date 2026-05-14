# 🟢 Regras de Negócio do MVP (Core)

## RB01 - Dualidade de Perfis

O usuário escolhe no cadastro se deseja ser:

- Aluno
- Tutor
- Ambos

---

## RB02 - Aprovação Manual de Tutores

Para garantir a qualidade inicial da plataforma:

- Todo tutor cadastrado entra com status **"Pendente"**
- O administrador altera manualmente para **"Aprovado"** no banco de dados

---

## RB03 - Match Simplificado

O fluxo de conexão entre aluno e tutor funciona assim:

1. O aluno pesquisa pela matéria desejada
2. A plataforma exibe os tutores disponíveis
3. O aluno clica em **"Solicitar Aula"**

---

## RB04 - SOS Prova

O aluno pode marcar um pedido como urgente.

### Comportamento:

- O pedido recebe uma flag de urgência
- O tutor visualiza o pedido com destaque vermelho no painel

---

## RB05 - Acerto Financeiro Offline (Simulado)

A plataforma:

- Exibe o valor da aula
- Calcula automaticamente a **Taxa StudyLink**

### Pagamento

- Realizado via **Pix diretamente entre aluno e tutor**
- Após receber, o tutor marca:
  - **"Recebi e Aula Concluída"**

---

## RB06 - Avaliação de Qualidade

Ao final da aula:

- O aluno deve avaliar o tutor de **1 a 5 estrelas**
- A nota gera a reputação básica do tutor na plataforma

---

# 🟡 Requisitos Funcionais do MVP

## RF01 - Sistema de Cadastro e Login

Funcionalidades:

- Cadastro de usuários
- Login autenticado
- Armazenamento seguro com **hash de senha**

---

## RF02 - Dashboard do Aluno

O painel do aluno deve conter:

- Barra de busca de matérias
- Histórico de solicitações/aulas

---

## RF03 - Dashboard do Tutor

O painel do tutor deve possuir:

- Aba de **Pedidos Pendentes**
- Botão de **Aceitar Aula**

---

## RF04 - Fluxo de Solicitação

Fluxo básico:

1. O aluno escolhe a matéria
2. O tutor recebe uma notificação na tela

---

## RF05 - Sala de Aula

Uma tela simples onde:

- O tutor cola o link do próprio **Google Meet**
- O aluno acessa a aula através desse link

---

## RF06 - Sistema de Estrelas

Após a aula:

- O aluno avalia o tutor
- A média do tutor é atualizada no banco de dados

---

# 🧊 Visão de Futuro (Backlog / Roadmap)

## Roadmap e Escalabilidade

### Integração com IA

Integração com APIs como:

- Gemini
- OpenAI

Objetivo:

- Gerar exercícios automáticos
- Criar resumos inteligentes para os tutores

---

### Gateway de Pagamento Integrado

Implementação de:

- Stripe
- Split financeiro automático
- Sistema de retenção (_Escrow_)

---

### Planos PRO

Criação de assinaturas mensais para:

- Alunos
- Tutores

---

### Vídeo Nativo

Integração com API da **Twilio** para:

- Chamadas de vídeo internas
- Sem necessidade de sair da plataforma

---

### Match Inteligente com Machine Learning

Sistema de recomendação baseado em:

- Histórico do aluno
- Preferências
- Performance
- Compatibilidade entre tutor e aluno

---

### Programa de Embaixadores e Gamificação

Implementação de:

- Sistema de pontos
- Conquistas
- Ranking
- Programa automatizado de embaixadores da plataforma

# 🛠️ Requisitos Não Funcionais (RNF) do MVP

---

## RNF01 - Usabilidade e Responsividade (Mobile-First)

### Objetivo

O sistema deve ser totalmente responsivo, priorizando a experiência em dispositivos móveis.

### Regras

- Interface otimizada para smartphones
- Prioridade para telas entre:
  - `360px`
  - `430px`
- Navegação simples e intuitiva
- Layout adaptável para tablets e desktop

### Justificativa

O público-alvo (Geração Z) acessa majoritariamente via celular.

---

## RNF02 - Compatibilidade

### Objetivo

Garantir funcionamento consistente nos principais navegadores modernos.

### Navegadores suportados

- Google Chrome
- Mozilla Firefox
- Safari
- Microsoft Edge

### Regras

- Não deve haver quebra de layout
- Componentes devem manter comportamento consistente
- Compatibilidade com versões modernas dos navegadores

---

## RNF03 - Segurança Básica (Dados e Banco)

### Objetivo

Garantir segurança mínima obrigatória para autenticação e acesso ao banco de dados.

### Regras Obrigatórias

#### 🔐 Criptografia de Senhas

As senhas devem ser armazenadas utilizando:

```php
password_hash()
```

### Exemplo

```php
$senhaHash = password_hash($senha, PASSWORD_DEFAULT);
```

---

#### 🛡️ Proteção contra SQL Injection

Todas as consultas ao banco devem utilizar:

- Prepared Statements
- PDO

### Exemplo

```php
$stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = ?");
$stmt->execute([$email]);
```

---

## RNF04 - Integridade de Dados

### Objetivo

Garantir consistência das informações da plataforma.

### Regras

- Histórico de aulas não pode ser perdido
- Avaliações devem permanecer registradas
- Mudanças de status devem ser persistidas no banco
- Sessões encerradas não devem apagar informações importantes

### Dados críticos

- Matches
- Pedidos
- Avaliações
- Histórico de aulas

---

## RNF05 - Tom de Voz e Acessibilidade

### Objetivo

Criar uma experiência amigável e inclusiva.

### Regras

- Linguagem simples e direta
- Sem jargões técnicos complexos
- Comunicação empática
- Interface intuitiva
- Boa legibilidade
- Contraste adequado de cores

### Conceito

A plataforma deve transmitir aprendizado:

> “De igual para igual” (Peer-to-Peer)

---

# 🧊 Visão de Futuro (Backlog / Roadmap)

> Funcionalidades e requisitos avançados que ficam fora do escopo do MVP inicial.

---

## ☁️ RNF de Performance em Nuvem

### Futuro

- Escalonamento automático
- Infraestrutura AWS
- Balanceamento de carga

### MVP

- Hospedagem simples/local
- Sem auto scaling

---

## 📈 RNF de Disponibilidade (SLA 99,5%)

### Futuro

- Servidores redundantes
- Alta disponibilidade
- Monitoramento avançado

### Motivo de adiamento

Infraestrutura complexa e custo elevado para projeto inicial.

---

## 🔒 RNF de LGPD Avançada e Criptografia de Pagamentos

### Futuro

Integração com:

- Stripe
- Mercado Pago
- Sistemas antifraude

### MVP

- Pagamento manual via Pix
- Sem processamento de cartão de crédito

---

## 🤖 RNF de Moderação Automática de Chat

### Futuro

Integração de IA para:

- Moderação em tempo real
- Detecção de spam
- Linguagem ofensiva

### MVP

- Sem chat inteligente
- Sem moderação automática

---

## 🏫 RNF de Arquitetura Multi-Tenant

### Futuro

Estrutura preparada para:

- Escolas
- Instituições
- Empresas

### MVP

Foco exclusivo no modelo:

- Aluno ↔ Tutor (B2C)

### Evolução futura

Expansão para:

- Escolas
- Cursos
- Plataformas educacionais parceiras
