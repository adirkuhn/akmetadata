<?php
namespace OCA\Files\Controller;

use OCP\AppFramework\Http;
use OCP\AppFramework\Controller;
use OCP\IRequest;
use OCP\AppFramework\Http\JSONResponse;
use OCP\AppFramework\Http\DataResponse;
use OCP\AppFramework\Http\DownloadResponse;
use OC\Preview;
use OCA\Files\Service\TagService;

class MetaDataController extends Controller {

    public function __construct($AppName, IRequest $request) {

        parent::__construct($AppName, $request);
     }


     /**
      * @NoAdminRequired
      * @NoCSRFRequired
      */
     public function index() {
        return new JSONResponse(array(
            'nome'  => 'Adir',
            'idade' => 28,
            'site'  => 'metastack'
        ), Http::STATUS_OK);
     }

}