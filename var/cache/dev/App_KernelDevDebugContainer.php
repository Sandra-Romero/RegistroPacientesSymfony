<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerE7ES9h7\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerE7ES9h7/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerE7ES9h7.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerE7ES9h7\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerE7ES9h7\App_KernelDevDebugContainer([
    'container.build_hash' => 'E7ES9h7',
    'container.build_id' => 'dcef4a8a',
    'container.build_time' => 1600936439,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerE7ES9h7');
