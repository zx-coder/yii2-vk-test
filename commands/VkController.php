<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\commands;

use VK\VK;
use yii\console\Controller;
use ZxCoder\Methods\Stat\Stat;

class VkController extends Controller
{

    public function actionGetStat($app_id, $token, $group_id, $date_from, $date_to)
    {
        $vk = new VK($app_id, '', $token);
        $stat = new Stat($vk);
        $res = $stat->get(new \DateTime($date_from), new \DateTime($date_to), $group_id);

        var_dump($res);
    }
}
