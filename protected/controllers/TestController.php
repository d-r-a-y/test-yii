<?php
class TestController extends Controller
{
    public function actionIndex()
    {
        $model=new TestForm;
        if(isset($_POST['TestForm']))
        {
            // получаем данные от пользователя
            $model->attributes=$_POST['TestForm'];
            // проверяем полученные данные и, если результат проверки положительный,
            // перенаправляем пользователя на предыдущую страницу
            if($model->validate())
                $this->redirect(Yii::app()->user->returnUrl);
        }
        // рендерим представление
        $this->render('index',array('model'=>$model));
    }

}