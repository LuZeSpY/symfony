<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTKipTSs\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTKipTSs/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerTKipTSs.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerTKipTSs\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerTKipTSs\App_KernelDevDebugContainer([
    'container.build_hash' => 'TKipTSs',
    'container.build_id' => '4af3fb65',
    'container.build_time' => 1664713658,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTKipTSs');
