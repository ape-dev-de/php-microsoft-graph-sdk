<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceManagementReports
 */
class DeviceManagementReports
{
    /**
     * Entity representing a job to export a report
     * @var string[]
     */
    private array $exportJobs = [];


    /**
     * @return string[]
     */
    public function getExportJobs(): array
    {
        return $this->exportJobs;
    }

    /**
     * @param string[] $exportJobs
     */
    public function setExportJobs(array $exportJobs): self
    {
        $this->exportJobs = $exportJobs;
        return $this;
    }

}
