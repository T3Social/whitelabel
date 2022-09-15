<?php

namespace humhub\modules\whitelabel;

use Yii;

class Events
{
    public static function disablePoweredBy()
    {
        Yii::$app->params['hidePoweredBy'] = true;
    }
}