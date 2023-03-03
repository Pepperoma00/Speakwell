<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Logopedista;

class RegistrazioneController extends Controller
{
    public function actionLogopedista()
    {
        $model = new Logopedista();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->save();
            Yii::$app->session->setFlash('success', 'Registrazione completata con successo!');
            return $this->redirect(['http://localhost:8080/index.php']);
        }

        return $this->render('logopedista', [
            'model' => $model,
        ]);
    }
}

