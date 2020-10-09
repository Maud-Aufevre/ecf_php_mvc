<?php
require_once('./controllers/admin/AdminContinentController.php');
require_once('./controllers/admin/AdminArticleController.php');
require_once('./controllers/admin/AdminUserController.php');
require_once('./controllers/admin/AuthController.php');
require_once('./controllers/public/PublicController.php');

class Router {
    private $ctrac;
    private $crtaa;

    public function __construct() {
        $this->ctrac = new AdminContinentController();
        $this->ctraa = new AdminArticleController();
        $this->ctrau = new AdminUserController();
        $this->ctrpub = new PublicController();
    }

    public function getPath() {
        try {
            if(isset($_GET['action'])) {
                switch ($_GET['action']) {
                    case 'list_cont':
                        $this->ctrac->listContinents();
                        break;
                    case 'add_cont':
                        $this->ctrac->addContinent();
                        break;
                    case 'delete_cont':
                        if(isset($_GET['id'])) {
                            $id = (int)$_GET['id'];
                            $this->ctrac->deleteContinent($id);
                        }else{
                            throw new Exception('paramètre non défini');
                        }
                        break;
                    case 'list_art':
                        $this->ctraa->listArticles();
                        break;
                    case 'delete_art':
                        $this->ctraa->suppArticle();
                        break;
                    case 'add_art':
                        $this->ctraa->addArticle();
                        break;
                    case 'edit_art':
                        $this->ctraa->editArticle();
                        break;
                    case 'detail_art':
                        $this->ctraa->detailArticle();
                        break;
                    case 'list_user':
                        $this->ctrau->listUsers();   
                        break;
                    case 'add_user':
                        $this->ctrau->insertUser();   
                        break;
                    case 'status':
                        $this->ctrau->updateStatus();    
                        break;
                    case 'logout':
                        AuthController::logout();   
                        break;
                    case 'admin':
                        $this->ctrau->login();   
                        break;
                    case 'detail_article':
                        $this->ctrpub->detailArticle();   
                        break;

                    default:
                    throw new Exception('Url non définie');
                    break;
                }
            }
            else {
                $this->ctrpub->getData();
            }
        }catch (Exception $e) {
            $this->page404($e->getMessage());
        }
    }

    private function page404($errorMsg){
        require_once('./views/page404.php');
    }

}