<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPRxx1UU\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPRxx1UU/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPRxx1UU.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPRxx1UU\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerPRxx1UU\App_KernelDevDebugContainer([
    'container.build_hash' => 'PRxx1UU',
    'container.build_id' => '5d0c72b3',
    'container.build_time' => 1678995271,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPRxx1UU');
