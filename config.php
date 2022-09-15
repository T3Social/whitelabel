<?php

/** @noinspection MissedFieldInspection */

use yii\base\Application;

return [
    'id' => 'whitelabel',
    'class' => 'humhub\modules\whitelabel\Module',
    'namespace' => 'humhub\modules\whitelabel',
    'events' => [
        [Application::class, Application::EVENT_BEFORE_REQUEST, ['humhub\modules\whitelabel\Events', 'disablePoweredBy']]
    ]
];
?>