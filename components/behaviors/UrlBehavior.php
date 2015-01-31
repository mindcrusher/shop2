<?php
/**
 * Email: <alexander@codeordie.ru>
 * Date: 19.01.15
 * Time: 12:10
 *  
 *  use \behaviors\Url
 *  ...
 * 
 *  public function behaviors()
 *  {
 *      return [
 *          Url::className()
 *      ];
 *  }
 * 
 */
namespace app\components\behaviors;

use yii\base\Behavior;
use \yii\helpers\Url as U;

/**
 * Class Url
 * @package common\behaviors
 */
class UrlBehavior extends Behavior
{
    public $id = 'id';
    public $route = null;

    /**
     * @return string
     */
    public function getUrl()
    {
        $id = $this->id;
        if ($this->route == null) {
            $shortClassName = (new \ReflectionClass($this->owner))->getShortName();
            $controller = strtolower($shortClassName);
            $this->route = $controller . '/view';
        }
        if ($this->owner->hasAttribute($id))
            return U::to([$this->route, $id => $this->owner->$id]);

        return U::to([$this->route]);

    }

}