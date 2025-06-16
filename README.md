# 📚 Sistema de Biblioteca - PHP MVC

Sistema de gerenciamento de biblioteca desenvolvido em PHP utilizando o padrão arquitetural MVC (Model-View-Controller).

## 🏗️ A Importância do Padrão MVC

O padrão MVC (Model-View-Controller) é uma arquitetura fundamental no desenvolvimento de aplicações web que oferece diversos benefícios:

### **Separação de Responsabilidades**
O MVC divide a aplicação em três camadas distintas, cada uma com responsabilidades específicas:

- **Model (Modelo)**: Responsável pela lógica de negócios e manipulação de dados. Gerencia a comunicação com o banco de dados, validações e regras de negócio.

- **View (Visão)**: Camada de apresentação que cuida da interface do usuário. Responsável por exibir os dados ao usuário de forma organizada e interativa.

- **Controller (Controlador)**: Atua como intermediário entre Model e View. Processa as requisições do usuário, coordena as operações e determina qual View será apresentada.

### **Vantagens do Padrão MVC**

1. **Manutenibilidade**: Com o código organizado em camadas, fica mais fácil localizar e corrigir problemas específicos sem afetar outras partes do sistema.

2. **Reutilização de Código**: Components podem ser reutilizados em diferentes partes da aplicação, reduzindo duplicação de código.

3. **Trabalho em Equipe**: Diferentes desenvolvedores podem trabalhar simultaneamente em camadas distintas sem conflitos.

4. **Testabilidade**: Cada componente pode ser testado independentemente, facilitando a criação de testes unitários.

5. **Escalabilidade**: A estrutura modular permite que o sistema cresça de forma organizada e sustentável.

6. **Flexibilidade**: Mudanças em uma camada não necessariamente afetam as outras, permitindo evolução independente.

## 🚀 Como ver funcionando

### **Pré-requisitos**
- PHP 7.4 ou superior
- MySQL 5.7 ou superior
- Visual Studio Code
- Servidor web local (Apache/Nginx) ou servidor built-in do PHP

### **Instruções de Inicialização**

1. **Prepare o ambiente:**
   - Abra a pasta `App` no VS Code
   - Certifique-se de que o MySQL está rodando

2. **Configure a conexão com o banco:**
   - Se necessário, edite os dados de conexão com MySQL no PHP (host, porta, usuário e senha)
   - Geralmente localizado no arquivo de configuração do banco de dados

3. **Inicie o servidor PHP:**
   ```bash
   php -S localhost:8000
   ```

4. **Acesse a aplicação:**
   - Abra seu navegador
   - Acesse: http://localhost:8000

## 📁 Estrutura do Projeto

```
App/
├── Controllers/     # Controladores da aplicação
├── Models/         # Modelos e lógica de negócio
├── Views/          # Templates e interface do usuário
├── Config/         # Configurações (banco de dados, etc.)
├── Public/         # Arquivos públicos (CSS, JS, imagens)
└── index.php       # Ponto de entrada da aplicação
```

## 🛠️ Tecnologias Utilizadas

- **PHP**: Linguagem de programação server-side
- **MySQL**: Sistema de gerenciamento de banco de dados
- **HTML/CSS**: Estrutura e estilização das páginas
- **JavaScript**: Interatividade no frontend

## 📋 Funcionalidades

- Cadastro de livros
- Gerenciamento de usuários
- Sistema de empréstimos
- Controle de devoluções
- Relatórios de biblioteca

## 🤝 Contribuição

1. Faça um fork do projeto
2. Crie uma branch para sua feature (`git checkout -b feature/AmazingFeature`)
3. Commit suas mudanças (`git commit -m 'Add some AmazingFeature'`)
4. Push para a branch (`git push origin feature/AmazingFeature`)
5. Abra um Pull Request

## 📝 Licença

Este projeto está sob a licença MIT. Veja o arquivo `LICENSE` para mais detalhes.

## 👨‍💻 Desenvolvedor

Desenvolvido por [Guilherme C. Matos](https://github.com/GuilhermeCMatos)

---

### 💡 Dicas de Uso

- Mantenha sempre o servidor MySQL rodando antes de iniciar a aplicação
- Para desenvolvimento, utilize o servidor built-in do PHP para testes rápidos
- Em produção, configure um servidor web adequado como Apache ou Nginx
- Verifique as permissões de escrita nas pastas necessárias
