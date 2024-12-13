<?php
namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Auction extends ResourceController
{
    protected $modelName = 'App\Models\AuctionModel';
    protected $format    = 'json';

    public function create()
    {
        $data = $this->request->getPost();

        if ($this->model->insert($data)) {
            return $this->respondCreated(['message' => 'Auction created successfully']);
        }

        return $this->fail($this->model->errors());
    }

    public function list()
    {
        $auctions = $this->model->findAll();
        return $this->respond($auctions);
    }
}

?>