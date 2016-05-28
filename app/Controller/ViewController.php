<?php
namespace AppController;

class ViewController extends Controller {

    protected $app;
    protected $baseUrl;
    protected $currentUrl;
    protected $currentUrlWithQuery;
    protected $assetUrl;
    protected $lang;
    // data to display on the page
    public  $viewData      = array(
      'js'           => array()
    , 'meta'         => ''
    , 'metaDescription' => ''
    , 'menu'         => null
    , 'manifest'     => array()
    , 'view'         => null
    );
    public  $template = 'desktop/';
    public  $isMobile = null; // user agent info
    public  $isMinify = '.min';

    public function __construct($app)
    {
        $this->app = $app;
        // detection
        $this->viewData['isMobile'] = $this->isMobile ;
        if($this->app->detection->isMobile() && !$this->app->detection->isTablet()):
            $this->template = 'mobile/';
            $this->isMobile = true;
            $this->viewData['isMobile'] = $this->isMobile ;
        endif;
        // bootstrap
        $this->makePaths();
        $this->getLang();
        $this->spaceDetection();
        // pass params to view
        $this->viewData['baseUrl'] = $this->baseUrl;
        $this->viewData['currentUrl'] = $this->currentUrl;
        $this->viewData['currentUrlWithQuery'] = $this->currentUrlWithQuery;
        $this->viewData['assetUrl'] = $this->assetUrl;
        $this->viewData['lang'] = $this->lang;
        $this->viewData['isMinify'] = $this->isMinify;
        return $this;
    }

    public function makePaths()
    {
        $env = $this->app->environment();
        $request = $this->app->getInstance()->request();
        $this->baseUrl = $request->getUrl().$request->getRootUri();
        $this->currentUrl = $request->getUrl().$request->getPath();
        $this->assetUrl = $this->baseUrl.'/public/';
        if ($env['QUERY_STRING']) {
            $this->currentUrlWithQuery = $request->getUrl().$request->getPath().'?' . $env['QUERY_STRING'];
        }
    }

    public function getLang()
    {
        $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        switch ($lang){
            case "fr":
                $this->lang = 'fr';
                break;
            case "it":
                $this->lang = 'it';
                break;
            case "en":
                $this->lang = 'en';
                break;
            default:
                $this->lang = 'en';
                break;
        }
    }

    public function spaceDetection()
    {
        if($this->app->space === 'dev'):
            $this->isMinify = '';
        endif;
    }

    public function getAsset($url)
    {
        return $this->assetUrl.$url;
    }

}