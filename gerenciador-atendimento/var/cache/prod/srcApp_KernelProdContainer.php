<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLWxUMPt\srcApp_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLWxUMPt/srcApp_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerLWxUMPt.legacy');

    return;
}

if (!\class_exists(srcApp_KernelProdContainer::class, false)) {
    \class_alias(\ContainerLWxUMPt\srcApp_KernelProdContainer::class, srcApp_KernelProdContainer::class, false);
}

return new \ContainerLWxUMPt\srcApp_KernelProdContainer(array(
    'container.build_hash' => 'LWxUMPt',
    'container.build_id' => '305ae1f7',
    'container.build_time' => 1546174194,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerLWxUMPt');
