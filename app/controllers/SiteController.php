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
	 * Renders the basics docs
	 */
	public function actionBase()
	{
		$this->render('base');
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
		$this->render('widgets');
	}

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError()
    {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest) {
                echo $error['message'];
            } else {
                $this->render('error', $error);
            }
        }
    }
}