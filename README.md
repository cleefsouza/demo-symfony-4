## SYMFONY 5
Projeto introdutorio ao framework PHP Symfony 5.

---

#### COMANDOS BÁSICO

* Cria um projeto `composer create-project symfony/skeleton app-name`
* Roda o projeto localmente `php - S localhost:8000 -t public`
* Instala servidor do Symfony `composer require symfony/web-server-bundle ^4.4.2`
* Executa servidor do Symfony `php bin/console server:run`
* Instala annotations `composer require annotations`

* **Twig Templates**
    * Instala o Twig para criação de templates `composer require twig`

* **Doctrine ORM**
    - Instala o Doctrine ORM `composer require doctrine`
    - Cria banco de dados `php bin/console doctrine:database:create`

* **Maker**
    - Instala o Maker `composer require maker`
    - Cria entidades via console `php bin/console make:entity NomeEntidade`
    - Versiona a base de dados `php bin/console doctrine:migrations:diff`
    - Persiste as migrations na base de dados `php bin/console doctrine:migrations:migrate`