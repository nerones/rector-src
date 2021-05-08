<?php

declare(strict_types=1);

use Rector\DowngradePhp70\Rector\FunctionLike\DowngradeScalarTypeDeclarationRector;
use Rector\DowngradePhp71\Rector\FunctionLike\DowngradeNullableTypeDeclarationRector;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();
    $services->set(DowngradeNullableTypeDeclarationRector::class);
    $services->set(DowngradeScalarTypeDeclarationRector::class);
};
