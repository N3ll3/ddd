<?php
declare(strict_types=1);

use App\Application\Settings\SettingsInterface;
use DI\ContainerBuilder;
use Psr\Container\ContainerInterface;

return function (ContainerBuilder $containerBuilder) {
   
    $containerBuilder->addDefinitions([
        PDO::class => function(ContainerInterface $c){
            $settings = $c->get(SettingsInterface::class)->get('db');
            $host = $settings['host'];
            $dbname = $settings['database'];
            $username = $settings['username'];
            $password = $settings['password'];
            $charset = $settings['charset'];
            $flags = $settings['flags'];
            $dsn = "mysql:host=$host;port=3306;dbname=$dbname";

            return new PDO($dsn, $username, $password,$flags);
        }
]);
};
