<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMdMITyJ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMdMITyJ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerMdMITyJ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerMdMITyJ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerMdMITyJ\App_KernelDevDebugContainer([
    'container.build_hash' => 'MdMITyJ',
    'container.build_id' => 'cdf223eb',
    'container.build_time' => 1617293120,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMdMITyJ');
