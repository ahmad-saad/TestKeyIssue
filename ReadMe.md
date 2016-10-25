To start the test execute the following CLI command:
**php bin/console testcommand**

Causes the following Exception:
=====
As soon as you have a **prices** element in the article array, the following array-missing-key notice is shown:

```
PHP Notice:  Undefined index: key in /var/www/html/shopware/engine/Library/Doctrine/ORM/Persisters/Entity/BasicEntityPersister.php on line 671
PHP Stack trace:
PHP   1. {main}() /var/www/html/shopware/bin/console:0
PHP   2. Symfony\Component\Console\Application->run() /var/www/html/shopware/bin/console:38
PHP   3. Shopware\Components\Console\Application->doRun() /var/www/html/shopware/vendor/symfony/console/Application.php:123
PHP   4. Symfony\Component\Console\Application->doRun() /var/www/html/shopware/engine/Shopware/Components/Console/Application.php:132
PHP   5. Symfony\Component\Console\Application->doRunCommand() /var/www/html/shopware/vendor/symfony/console/Application.php:192
PHP   6. Symfony\Component\Console\Command\Command->run() /var/www/html/shopware/vendor/symfony/console/Application.php:844
PHP   7. TestKeyIssue\Commands\TestCommand->execute() /var/www/html/shopware/vendor/symfony/console/Command/Command.php:259
PHP   8. Shopware\Components\Api\Resource\Article->create() /var/www/html/shopware/custom/plugins/TestKeyIssue/Commands/TestCommand.php:72
PHP   9. Shopware\Components\Api\Resource\Resource->flush() /var/www/html/shopware/engine/Shopware/Components/Api/Resource/Article.php:541
PHP  10. Doctrine\ORM\EntityManager->flush() /var/www/html/shopware/engine/Shopware/Components/Api/Resource/Resource.php:260
PHP  11. Doctrine\ORM\UnitOfWork->commit() /var/www/html/shopware/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php:356
PHP  12. Doctrine\ORM\UnitOfWork->executeInserts() /var/www/html/shopware/vendor/doctrine/orm/lib/Doctrine/ORM/UnitOfWork.php:378
PHP  13. Doctrine\ORM\Persisters\Entity\BasicEntityPersister->executeInserts() /var/www/html/shopware/vendor/doctrine/orm/lib/Doctrine/ORM/UnitOfWork.php:1018
PHP  14. Doctrine\ORM\Persisters\Entity\BasicEntityPersister->prepareInsertData() /var/www/html/shopware/engine/Library/Doctrine/ORM/Persisters/Entity/BasicEntityPersister.php:271
PHP  15. Doctrine\ORM\Persisters\Entity\BasicEntityPersister->prepareUpdateData() /var/www/html/shopware/engine/Library/Doctrine/ORM/Persisters/Entity/BasicEntityPersister.php:722

Notice: Undefined index: key in /var/www/html/shopware/engine/Library/Doctrine/ORM/Persisters/Entity/BasicEntityPersister.php on line 671

Call Stack:
    0.0004     350112   1. {main}() /var/www/html/shopware/bin/console:0
    0.0807    3104384   2. Symfony\Component\Console\Application->run() /var/www/html/shopware/bin/console:38
    0.0932    3241152   3. Shopware\Components\Console\Application->doRun() /var/www/html/shopware/vendor/symfony/console/Application.php:123
    1.7660   20414440   4. Symfony\Component\Console\Application->doRun() /var/www/html/shopware/engine/Shopware/Components/Console/Application.php:132
    1.7661   20414440   5. Symfony\Component\Console\Application->doRunCommand() /var/www/html/shopware/vendor/symfony/console/Application.php:192
    1.7661   20414440   6. Symfony\Component\Console\Command\Command->run() /var/www/html/shopware/vendor/symfony/console/Application.php:844
    1.7662   20417096   7. TestKeyIssue\Commands\TestCommand->execute() /var/www/html/shopware/vendor/symfony/console/Command/Command.php:259
    1.7778   20831328   8. Shopware\Components\Api\Resource\Article->create() /var/www/html/shopware/custom/plugins/TestKeyIssue/Commands/TestCommand.php:72
    7.4983   22993000   9. Shopware\Components\Api\Resource\Resource->flush() /var/www/html/shopware/engine/Shopware/Components/Api/Resource/Article.php:541
    7.4985   22993000  10. Doctrine\ORM\EntityManager->flush() /var/www/html/shopware/engine/Shopware/Components/Api/Resource/Resource.php:260
    7.4985   22993000  11. Doctrine\ORM\UnitOfWork->commit() /var/www/html/shopware/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php:356
    7.6598   24021720  12. Doctrine\ORM\UnitOfWork->executeInserts() /var/www/html/shopware/vendor/doctrine/orm/lib/Doctrine/ORM/UnitOfWork.php:378
    7.6599   24023768  13. Doctrine\ORM\Persisters\Entity\BasicEntityPersister->executeInserts() /var/www/html/shopware/vendor/doctrine/orm/lib/Doctrine/ORM/UnitOfWork.php:1018
    7.6600   24025608  14. Doctrine\ORM\Persisters\Entity\BasicEntityPersister->prepareInsertData() /var/www/html/shopware/engine/Library/Doctrine/ORM/Persisters/Entity/BasicEntityPersister.php:271
    7.6600   24025608  15. Doctrine\ORM\Persisters\Entity\BasicEntityPersister->prepareUpdateData() /var/www/html/shopware/engine/Library/Doctrine/ORM/Persisters/Entity/BasicEntityPersister.php:722
```