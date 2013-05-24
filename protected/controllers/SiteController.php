<?php
class SiteController extends Controller {

    public function actionIndex() {
        $this->render('index');
    }

    public function actionAboutMe() {
        $this->renderPartial('_aboutMe', array(), false, true);
    }

    public function actionCv() {
        $this->renderPartial('_cv', array(), false, true);
    }

    public function actionWork() {
        $this->renderPartial('_work', array(), false, true);
    }

    public function actionContact() {
        if (isset($_POST['imail'])) {
            if ($_POST['email'] != '') {
                $this->renderPartial('_formError', array('error' => 'You damn botter!'));
                return;
            }
            if ($_POST['imail'] == '') {
                $this->renderPartial('_formError', array('error' => 'So... What is your email address?'));
                return;
            }
            if ($_POST['name'] == '') {
                $this->renderPartial('_formError', array('error' => 'What do your friends call you?'));
                return;
            }
            if ($_POST['message'] == '') {
                $this->renderPartial('_formError', array('error' => 'Oh no, the silent treatment!'));
                return;
            }
            if (mail('info@subdee.org', $_POST['name'] . ' wants to tell you something!', $_POST['name'] . ' ( ' . $_POST['imail'] . ' ) says: ' . $_POST['message']))
                $this->renderPartial('_formSuccess');
            else
                $this->renderPartial('_formError', array('error' => 'Uh-oh something went horribly wrong! Please contact me some other way...'));
            return;
        }
        $this->renderPartial('_contact', array(), false, true);
    }

    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

}