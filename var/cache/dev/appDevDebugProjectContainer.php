<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerM0srmva\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerM0srmva/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerM0srmva.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerM0srmva\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerM0srmva\appDevDebugProjectContainer(array(
    'container.build_hash' => 'M0srmva',
    'container.build_id' => '375d8e50',
    'container.build_time' => 1527605542,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerM0srmva');
