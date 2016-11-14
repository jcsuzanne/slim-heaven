<?php
namespace AppController;

class PageController extends Controller {


    public function home()
    {
        $this->__create($this->app,['tpl'=>'content/home','jscontroller'=>'home','metaTitle'=>'home','metaDescription'=>'Home description']);
    }

    public function __create($app,$configs)
    {
        $view = new \AppController\ViewController($app);
        $app->view->appendData(array(
          'app' => $app,
          'viewData' => $view->viewData,
          'isMobile' => $view->viewData['isMobile']
        ));
        $dataToPass = $configs;
        $dataToPass['view'] = $app->view->fetch($configs['tpl'].'.php');
        $dataToPass['viewController'] = $view;
        $datasView = array_merge($view->viewData,$dataToPass);
        if($app->request->isXhr()):
            $xhr = array();
            $xhr['jscontroller'] = $datasView['jscontroller'];
            $xhr['meta'] = $datasView['meta'];
            $xhr['metaDescription'] = $datasView['metaDescription'];
            $xhr['menu'] = $datasView['menu'];
            $xhr['currentUrl'] = $datasView['currentUrl'];
            $xhr['manifest'] = $datasView['manifest'];
            $xhr['view'] = $datasView['view'];
            echo json_encode($xhr);
        else:
            $app->render($view->template.'.php', $datasView);
        endif;
    }

}