<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container6frnrkj\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container6frnrkj/appProdProjectContainer.php') {
    touch(__DIR__.'/Container6frnrkj.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\Container6frnrkj\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \Container6frnrkj\appProdProjectContainer(array(
    'container.build_hash' => '6frnrkj',
    'container.build_id' => 'ec438273',
    'container.build_time' => 1517230516,
));
