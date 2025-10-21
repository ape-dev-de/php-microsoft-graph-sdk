<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceManagementReports
 */
class DeviceManagementReports
{
    public function __construct(
        /** @var string[] Entity representing a job to export a report */
        public array $exportJobs = []
    ) {}
}
