<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBAtYKx1\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBAtYKx1/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBAtYKx1.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBAtYKx1\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerBAtYKx1\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'BAtYKx1',
    'container.build_id' => 'c7a6db3a',
    'container.build_time' => 1607698610,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBAtYKx1');
