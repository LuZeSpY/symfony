<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKCb37Uf\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKCb37Uf/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerKCb37Uf.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerKCb37Uf\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerKCb37Uf\App_KernelDevDebugContainer([
    'container.build_hash' => 'KCb37Uf',
    'container.build_id' => '02d483f0',
    'container.build_time' => 1665329081,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKCb37Uf');
