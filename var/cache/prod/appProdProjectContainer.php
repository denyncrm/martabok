<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHdcwumc\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHdcwumc/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerHdcwumc.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerHdcwumc\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerHdcwumc\appProdProjectContainer([
    'container.build_hash' => 'Hdcwumc',
    'container.build_id' => '7a8df0fc',
    'container.build_time' => 1664186300,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHdcwumc');