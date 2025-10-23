<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceManagementReports
 */
class DeviceManagementReports
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Entity representing a job to export a report
     * @var DeviceManagementExportJob[]
     */
    public array $exportJobs = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['exportJobs'])) {
            $this->exportJobs = $data['exportJobs'];
        }
    }
}
