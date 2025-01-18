<?php

declare(strict_types=1);

namespace Saschahemleb\PhpGrafanaApiClient\Resource;

use stdClass;

class DashboardResponse implements Resource
{
    public $id;
    public $uid;
    public $url;
    public $status;
    public $version;
    public $slug;
}
