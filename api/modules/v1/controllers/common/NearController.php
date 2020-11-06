<?php

namespace addons\TinyShop\api\modules\v1\controllers\common;

use Yii;
use api\controllers\OnAuthController;

/**
 * Class AdvController
 * @package addons\TinyShop\api\modules\v1\controllers\common
 * @author jianyan74 <751393839@qq.com>
 */
class NearController extends OnAuthController
{
    public $modelClass = '';
    
    /**
     * 不用进行登录验证的方法
     * 例如： ['index', 'update', 'create', 'view', 'delete']
     * 默认全部需要验证
     *
     * @var array
     */
    protected $authOptional = ['index'];

    /**
     * @return array|\yii\data\ActiveDataProvider
     */
    public function actionIndex()
    {
        return [
            'cate' => Yii::$app->tinyShopService->productCate->findIndexBlock(), // 首页推荐分类
        ];
    }
}