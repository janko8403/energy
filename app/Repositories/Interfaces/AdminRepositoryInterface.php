<?php

namespace App\Repositories\Interfaces;

interface AdminRepositoryInterface
{

    public function createClient(array $request);

    public function getLogs();

    public function getClients();
    public function updateClient(array $request, int $id, int $pv_id);
    public function deleteClient(int $id);

    public function getArea(int $id);
    public function getPvGeneration(int $id);
    public function getPvIp(int $id);
    public function getPowerValue();
    public function getLabelDate();
    public function getNameByClient();
    public function getyClientWithRelations();
    public function setDevice($data);
}
