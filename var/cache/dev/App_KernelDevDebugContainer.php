<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTHe86R9\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTHe86R9/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerTHe86R9.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerTHe86R9\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerTHe86R9\App_KernelDevDebugContainer([
    'container.build_hash' => 'THe86R9',
    'container.build_id' => 'e336c49e',
    'container.build_time' => 1664629930,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTHe86R9');