<?php

class SiteController extends Controller
{
    /**
     * Renders the index page
     */
    public function actionIndex()
    {
        $this->render('index');
    }

    /**
     * Renders get started page
     */
    public function actionStarted()
    {
        $this->render('started');
    }

	/**
	 * Renders the basic docs
	 */
	public function actionBasics()
	{
		$this->render('basics');
	}

    /**
     * Renders the component docs
     */
    public function actionComponents()
    {
        $this->render('components');
    }

	/**
	 * Renders the widget docs
	 */
	public function actionWidgets()
	{
		Yii::import('application.models.TestForm');
		$model = new TestForm();

		if (isset($_POST['ajax']) && $_POST['ajax'] === 'test-form')
		{
			echo CActiveForm::validate($model);
			app()->end();
		}

		$this->render('widgets', array('model' => $model));
	}

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError()
    {
        if ($error = Yii::app()->errorHandler->error)
        {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }
}