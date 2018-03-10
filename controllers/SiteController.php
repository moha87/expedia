<?php

namespace app\controllers;

use app\common\components\ApiCaller;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $oCaller = new ApiCaller();
        $data = json_decode($oCaller->ApiCallerGet());

        $offerInfo = $data->offerInfo;
        $userInfo = $data->userInfo;
        $offers = $data->offers->Hotel;

        $offers = $this->ParseDataToArray($offers);

        return $this->render('index',['offerInfo'=>$offerInfo,'userInfo'=>$userInfo,'offers'=>$offers]);
    }

    public function actionView($id){
        $data = $this->getDataById($id);
        return $this->render('view',['offerInfo'=>$data['offerInfo'],'userInfo'=>$data['userInfo'],'offers'=>$data['offers']]);
    }

    public function ParseDataToArray($offers){
        $data = [];
        foreach($offers as $key=>$value){
            $data[$key]['travelStartDate'] = $value->offerDateRange->travelStartDate[0].'-'.$value->offerDateRange->travelStartDate[1].'-'.$value->offerDateRange->travelStartDate[2];
            $data[$key]['travelEndDate'] = $value->offerDateRange->travelEndDate[0].'-'.$value->offerDateRange->travelEndDate[1].'-'.$value->offerDateRange->travelEndDate[2];
            $data[$key]['destination_name'] = $value->destination->longName;
            $data[$key]['hotelName'] = $value->hotelInfo->hotelName;
            $data[$key]['hotelStarRating'] = $value->hotelInfo->hotelStarRating;
            $data[$key]['totalPriceValue'] = $value->hotelPricingInfo->totalPriceValue;
            $data[$key]['currency'] = $value->hotelPricingInfo->currency;
            $data[$key]['hotelInfositeUrl'] = $value->hotelUrls->hotelInfositeUrl;
        }
        return $data;
    }
    public function getDataById($id){
        $oCaller = new ApiCaller();
        $data = json_decode($oCaller->ApiCallerGet());
        $offerInfo = $data->offerInfo;
        $userInfo = $data->userInfo;
        $offers = $data->offers->Hotel[$id];
        return ['offerInfo'=>$offerInfo,'userInfo'=>$userInfo,'offers'=>$offers];
    }
}
