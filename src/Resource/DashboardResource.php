<?php

declare(strict_types=1);

namespace Saschahemleb\PhpGrafanaApiClient\Resource;

use stdClass;

class DashboardResource  implements Resource
{
    public $meta;
    public $dashboard;

    public function clearPanels(): void
    {
        $this->dashboard['panels'] = [];
    }

    public function newDashboard($uid,$title)
    {
        $this->meta=[];

        $this->dashboard = [
            "id" => null,
            "uid" => $uid,
            "title" => $title,
            "timezone"=> "browser",
            "editable" => true,
            "fiscalYearStartMonth" => 0,
            "graphTooltip" => 0,





        ];
        return;

        $this->meta = [
                "type" => "db",
                "canSave" => true,
                "canEdit" => true,
                "canAdmin" => true,
                "canStar" => true,
                "canDelete" => true,
                "slug" => "test-dashboard",
                "url" => "/grafana/d/beacu6wn7xp1cb/test-dashboard",
                "expires" => "0001-01-01T00:00:00Z",
                "created" => "2025-01-18T10:55:17Z",
                "updated" => "2025-01-18T12:23:52Z",
                "updatedBy" => "Anonymous",
                "createdBy" => "admin",
                "version" => 41,
                "hasAcl" => false,
                "isFolder" => false,
                "folderId" => 0,
                "folderUid" => "",
                "folderTitle" => "General",
                "folderUrl" => "",
                "provisioned" => false,
                "provisionedExternalId" => "",
                "annotationsPermissions" => [
                    "dashboard" => [
                        "canAdd" => true,
                        "canEdit" => true,
                        "canDelete" => true
                    ],
                    "organization" => [
                        "canAdd" => true,
                        "canEdit" => true,
                        "canDelete" => true
                    ]
                ]
                    ];
        $this->dashboard = [
                "annotations" => [
                    "list" => [
                        [
                            "builtIn" => 1,
                            "datasource" => [
                                "type" => "grafana",
                                "uid" => "-- Grafana --"
                            ],
                            "enable" => true,
                            "hide" => true,
                            "iconColor" => "rgba(0, 211, 255, 1)",
                            "name" => "Annotations \u0026 Alerts",
                            "type" => "dashboard"
                        ]
                    ]
                ],
                "editable" => true,
                "fiscalYearStartMonth" => 0,
                "graphTooltip" => 0,
                "id" => 1,
                "links" => [],
                "panels" => [],
                "preload" => false,
                "schemaVersion" => 40,
                "tags" => [],
                "templating" => [
                    "list" => []
                ],
                "time" => [
                    "from" => "2025-01-16T15:16:29.313Z",
                    "to" => "2025-01-16T15:17:25.406Z"
                ],
                "timepicker" => [],
                "timezone" => "browser",
                "title" => "Test Dashboard",
                "uid" => "beacu6wn7xp1cb",
                "version" => 41,
                "weekStart" => ""
            ];

    }

}
