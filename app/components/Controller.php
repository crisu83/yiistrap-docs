<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
    /**
     * @var array context menu items. This property will be assigned to {@link CMenu::items}.
     */
    public $menu = array();
    /**
     * @var array the breadcrumbs of the current page. The value of this property will
     * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
     * for more details on how to specify this property.
     */
    public $breadcrumbs = array();

    public $meta_keywords = array();
    public $meta_description = array();


    /**
     * Gets a param
     * @param $name
     * @param null $defaultValue
     * @return mixed
     */
    public function getActionParam($name, $defaultValue = null)
    {
        return Yii::app()->request->getParam($name, $defaultValue);
    }

    /**
     * Loads the requested data model.
     * @param string the model class name
     * @param integer the model ID
     * @param array additional search criteria
     * @param boolean whether to throw exception if the model is not found. Defaults to true.
     * @return CActiveRecord the model instance.
     * @throws CHttpException if the model cannot be found
     */
    protected function loadModel($class, $id, $criteria = array(), $exceptionOnNull = true)
    {
        if (empty($criteria)) {
            $model = CActiveRecord::model($class)->findByPk($id);
        } else {
            $finder = CActiveRecord::model($class);
            $c      = new CDbCriteria($criteria);
            $c->mergeWith(
                array(
                    'condition' => $finder->tableSchema->primaryKey . '=:id',
                    'params'    => array(':id' => $id),
                )
            );
            $model = $finder->find($c);
        }
        if (isset($model)) {
            return $model;
        } else {
            if ($exceptionOnNull) {
                throw new CHttpException(404, 'Unable to find the requested object.');
            }
        }
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model)
    {
        if (isset($_POST['ajax']) && $_POST['ajax'] === $model->formId) {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    /**
     * Outputs (echo) json representation of $data, prints html on debug mode.
     * NOTE: json_encode exists in PHP > 5.2, so it's safe to use it directly without checking
     * @param array $data the data (PHP array) to be encoded into json array
     * @param int $opts Bitmask consisting of JSON_HEX_QUOT, JSON_HEX_TAG, JSON_HEX_AMP, JSON_HEX_APOS, JSON_FORCE_OBJECT.
     */
    public function renderJson($data, $opts = null)
    {
        if (YII_DEBUG && isset($_GET['debug']) && is_array($data)) {
            foreach ($data as $type => $v) {
                printf('<h1>%s</h1>%s', $type, is_array($v) ? json_encode($v, $opts) : $v);
            }
        } else {
            header('Content-Type: application/json; charset=UTF-8');
            echo json_encode($data, $opts);
        }
    }

    /**
     * Utility function to ensure the base url.
     * @param $url
     * @return string
     */
    public function baseUrl($url = '')
    {
        static $baseUrl;
        if ($baseUrl === null) {
            $baseUrl = Yii::app()->request->baseUrl;
        }
        return $baseUrl . '/' . ltrim($url, '/');
    }
}
