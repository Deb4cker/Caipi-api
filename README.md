# Caipi-api
### Api Rest em Larável para gerenciar a discografia da dupla caipira Tião Carreiro e Pardinho. 🤠

## Funcionalidades
#### 1. Ver lista de álbuns e faixas
Exibe todos os álbuns disponíveis e suas respectivas faixas.

#### 2. Pesquisar álbuns e faixas por nome
Permite a pesquisa de álbuns e faixas pelo nome.

#### 3. Adicionar um novo álbum
Funcionalidade para adicionar novos álbuns à discografia.

#### 4. Adicionar uma nova faixa em um álbum
Adicione novas faixas a álbuns existentes.

#### 5. Excluir uma faixa
Permite a remoção de faixas de um álbum.

#### 6. Excluir um álbum
Permite a exclusão de álbuns inteiros.

## Tecnologias Utilizadas
- PHP 8.3.3
- Laravel 11.18.1

## Rotas da API
### Álbuns
- Ver todos os álbuns: ```{c:green}GET{/c} /album```
- Ver álbum específico: ```{c:green}GET{/c} /album/{id}```
- Pesquisar álbuns por nome: ```{c:green}GET{/c} /album/search?name={title}```
- Adicionar novo álbum: ```{c:orange}POST{/c} /album```
- Atualizar álbum: ```{c:blue}PUT{/c} /album/{id}```
- Excluir álbum: ```{c:red}DELETE{/c} /album/{id}```

### Faixas
- Ver todas as faixas: ```{c:green}GET{/c} /track```
- Ver faixa específica: ```{c:green}GET{/c} /track/{id}```
- Adicionar nova faixa: ```{c:orange}POST{/c} /track```
- Atualizar faixa: ```{c:blue}PUT{/c} /track/{id}```
- Excluir faixa: ```{c:red}DELETE{/c} /track/{id}```

## Como Rodar o Projeto
#### Clone o repositório:
```git clone https://github.com/Deb4cker/Caipi-api```

#### Instale as dependências:
```composer install```

#### Configure o ambiente:
Renomeie o arquivo .env.example para .env e configure as variáveis de ambiente, especialmente as informações de banco de dados.

#### Gere a chave da aplicação:
```php artisan key:generate```

#### Execute as migrações:

```php artisan migrate``` ou ```php artisan migrate --seed``` para fazer o database seed. 

####Inicie o servidor:
```php artisan serve```

## Contribuição
Sinta-se à vontade para contribuir com o projeto! Abra uma issue ou envie um pull request.

## Licença
Este projeto está licenciado sob a MIT License.

## Agradecimentos
À TECHPINES pelo desafio proposto.

## Contato
Para dúvidas ou sugestões, entre em contato através do email: ndebacher@gmail.com
