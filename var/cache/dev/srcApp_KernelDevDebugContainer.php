<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQXPnaaS\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQXPnaaS/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQXPnaaS.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQXPnaaS\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerQXPnaaS\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'QXPnaaS',
    'container.build_id' => '6933f61c',
    'container.build_time' => 1607360948,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQXPnaaS');
