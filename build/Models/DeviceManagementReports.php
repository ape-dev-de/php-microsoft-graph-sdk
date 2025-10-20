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
     */
    private ?string $exportJobs;

    public function getExportJobs(): ?string
    {
        return $this->exportJobs;
    }

    public function setExportJobs(?string $exportJobs): self
    {
        $this->exportJobs = $exportJobs;
        return $this;
    }

}
