<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceManagementReports
 */
class DeviceManagementReports
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Entity representing a job to export a report */
        public array $exportJobs = []
    ) {}
}
