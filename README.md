# ⚙️ Desenvolvimento Back-End (PHP & Automação CLI)

![Status](https://img.shields.io/badge/Status-Em%20Andamento%20--%20Semestre%20Letivo-blue?style=for-the-badge&logo=php)
![Linguagem](https://img.shields.io/badge/PHP-8.x-777BB4?style=for-the-badge&logo=php&logoColor=white)
![Shell](https://img.shields.io/badge/CLI-PowerShell%20%2F%20Bash-4E9A06?style=for-the-badge&logo=powershell&logoColor=white)

---

## 📌 1. Visão Geral do Repositório

Este repositório documenta a minha evolução na disciplina de **Desenvolvimento Back-End**. O conteúdo abrange desde conceitos fundamentais de automação via linha de comando (CLI) para gerenciamento corporativo de diretórios e arquivos até o desenvolvimento de lógica de programação servidor utilizando **PHP 8** (estruturas condicionais, laços de repetição, funções e arrays multidimensionais).

---

## 🚀 2. O Que Foi Desenvolvido Até Agora (Progresso Atual)

### 📂 Tópicos e Práticas Concluídas:

1. **Automação CLI & Estruturação Organizacional (`EmpresaY`):**
   - Criação da estrutura de pastas e setores corporativos (Administrativo, TI, Projetos, RH, Financeiro) utilizando comandos de terminal (`mkdir`, `cd`, `ren`, `mv`).
   - Automação de relatórios consolidados em formato `.txt` e geração de arquivos de dados `.csv`.
   - Registro detalhado de histórico de comandos (`atividade_cli.txt`) e script em PowerShell (`refaz.ps1`).

2. **PHP 8 - Sintaxe Fundamental & Exibição (`aula01` e `aula02`):**
   - Estrutura de arquivos PHP (`<?php ?>`), comando `echo` e pré-formatação HTML (`<pre>`).
   - Declaração de variáveis (`$nome`, `$idade`, `$salario`, `$ativa`, `$localizacao`), concatenação de strings com o operador ponto (`.`) e interpolação.

3. **PHP 8 - Operadores Aritméticos, Comparação e Ternários (`aula03` e `aula04`):**
   - Operações matemáticas (`+`, `*`) aplicadas ao cálculo de horas trabalhadas e remuneração corporativa HighTech.
   - Operadores de comparação (`<`, `>`, `>=`).
   - Expressões condicionais concisas com o operador ternário (`? :`).

4. **PHP 8 - Estruturas Condicionais & Seleção (`aula05`):**
   - Controle de fluxo com `if`, `elseif` e `else` (sistema de faixas etárias para plano de cargos HighTech).
   - Tomada de decisão múltipla com a estrutura `switch / case` (identificação de dias da semana).

5. **PHP 8 - Laços de Repetição & Algoritmos (`aula06`):**
   - Estrutura de repetição `for` (cálculo de tabuada e sistema de checagem de metas financeiras para contribuintes/vendedores).
   - Estrutura de repetição `while` e operador de resto de divisão/módulo (`%`) para filtragem de números pares.

6. **PHP 8 - Arrays, Matrizes & Laço `foreach` (`aula07`):**
   - Manipulation de arrays indexados e função `count()`.
   - Arrays associativos (`chave => valor`) para mapear colaboradores e cargos corporativos (ex: CEO, Diretor RH, Vendas).
   - Iteração em coleções de dados complexas utilizando o laço `foreach`.

### 🛠️ Tecnologias e Ferramentas Utilizadas:
- **PHP 8.x**
- **PowerShell / Terminal CLI**
- **HTML5 (Integração básica em scripts PHP)**
- **Arquivos Estruturados (CSV e TXT)**

---

## 🗓️ 3. Mapeamento do Semestre (Cronograma & Evolução)

Confira abaixo o planejamento de tópicos da disciplina:

- [x] **Módulo 1:** Automação em Linha de Comando (CLI) e Gerenciamento de Arquivos/Pastas
- [x] **Módulo 2:** Fundamentos de PHP, Tags, Variáveis e Saída de Dados
- [x] **Módulo 3:** Operadores Aritméticos, Comparação e Operador Ternário
- [x] **Módulo 4:** Estruturas Condicionais (`if`, `elseif`, `else`, `switch / case`)
- [x] **Módulo 5:** Estruturas de Repetição (`for`, `while`) e Algoritmos Comerciais
- [x] **Módulo 6:** Arrays Indexados, Associativos, Matrizes e Laço `foreach`
- [ ] **Módulo 7:** Manipulação de Strings e Funções Nativas de PHP
- [ ] **Módulo 8:** Funções Personalizadas, Parâmetros e Retornos
- [ ] **Módulo 9:** Reutilização de Código com `include`, `require`, `include_once` e `require_once`
- [ ] **Módulo 10:** Processamento de Formulários Web (Métodos HTTP `GET` e `POST`)
- [ ] **Módulo 11:** Integração com Banco de Dados PostgreSQL/MySQL via PDO
- [ ] **Módulo 12:** Gerenciamento de Sessões (`$_SESSION`), Cookies e Autenticação

---

## 💻 4. Como Executar e Testar

### Pré-requisitos:
- PHP 8.x instalado no ambiente.
- Terminal / PowerShell ou ambiente local (ex: XAMPP / VS Code).

### Executando os Scripts PHP:

1. **Via Servidor Embutido do PHP:**
   Navegue até a pasta do repositório no terminal e execute:
   ```bash
   php -S localhost:8000
   ```
   Acesse no navegador: `http://localhost:8000/PHP/aula07/index.php`

2. **Via Linha de Comando (CLI Direct):**
   ```bash
   php ./PHP/aula04/index.php
   php ./PHP/aula06/index.php
   php ./PHP/aula07/index.php
   ```

### Executando os Scripts CLI (`EmpresaY`):
No PowerShell, você pode analisar a atividade de criação de arquivos navegando até a pasta:
```powershell
cd ./EmpresaY_atividadeDErevisao
Get-Content ./atividade_cli.txt
```

---

## 📝 5. Próximos Passos & Anotações

- [ ] Estudar a sanitização e validação de dados em formulários HTTP em PHP.
- [ ] Implementar a conexão PDO com o banco de dados PostgreSQL desenvolvido na disciplina de BD.
- [ ] Explorar conceitos de Orientação a Objetos (POO) em PHP (Classes, Objetos e Encapsulamento).

---
*Repositório mantido por [João Wictor](https://github.com/joaorbm09) para fins acadêmicos.*
