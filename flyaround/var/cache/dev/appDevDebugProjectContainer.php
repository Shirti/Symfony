<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOypuykp\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOypuykp/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerOypuykp.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerOypuykp\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerOypuykp\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Oypuykp',
    'container.build_id' => '5a5b7f43',
    'container.build_time' => 1527844670,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerOypuykp');
