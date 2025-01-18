<?php

declare(strict_types=1);

namespace Saschahemleb\PhpGrafanaApiClient\Api;

use Saschahemleb\PhpGrafanaApiClient\Resource\DashboardResource;
use Saschahemleb\PhpGrafanaApiClient\Resource\DashboardResponse as DashboardResponseResource;

class Dashboard extends Api
{
    /**
     * Creates a datasource for the organizer
     *
     * If the user is in multiple organizers, use the `Client::inOrganization` to control
     * in which organizer the datasource is created
     */
    public function createDatasource(DashboardResource $datasource): DashboardResource
    {
        $data = $this->extract($datasource);
        $response = json_decode($this->post('/datasources', $data)->getBody()->getContents(), true);

        return $this->hydrateRaw($response['datasource'], new DashboardResource());
    }

    public function getDashboardById(int $dashboardId): DashboardResource
    {
        return $this->hydrate(
            $this->get("/dashboards/{$dashboardId}"),
            new DashboardResource(),
        );
    }


    public function getDashboardByUid(string $dashboardUid): DashboardResource
    {
        return $this->hydrate(
            $this->get("/dashboards/uid/{$dashboardUid}"),
            new DashboardResource(),
        );
    }

    public function updateDashboard(DashboardResource $dashboard): DashboardResponseResource
    {
        $data = $this->extract($dashboard);
        $response = json_decode($this->post("/dashboards/db", $data)->getBody()->getContents(), true);

        return $this->hydrateRaw($response, new DashboardResponseResource());
    }

    public function getOrCreateDashboard($uid,$title)
    {
        try {

            $d=$this->getDashboardByUid($uid);
        } catch (\Exception $e) {
            $d= new DashboardResource();
            $d->newDashboard($uid,$title);
        }
        return $d;
    }



    /*
    public function getDatasourceByName(string $name): DatasourceResource
    {
        return $this->hydrate(
            $this->get("/datasources/name/{$name}"),
            new DatasourceResource(),
        );
    }

    public function updateDatasource(DatasourceResource $datasource): DatasourceResource
    {
        $data = $this->extract($datasource);
        $response = json_decode($this->put("/datasources/{$datasource->getId()}", $data)->getBody()->getContents(), true);

        return $this->hydrateRaw($response['datasource'], new DatasourceResource());
    }

    public function deleteDatasourceById(int $datasourceId)
    {
        $this->delete("/datasources/{$datasourceId}");
    }

    public function deleteDatasourceByUid(string $datasourceUid)
    {
        $this->delete("/datasources/uid/{$datasourceUid}");
    }

    public function deleteDatasourceByName(string $datasourceName)
    {
        $this->delete("/datasources/name/{$datasourceName}");
    }
    */
}
