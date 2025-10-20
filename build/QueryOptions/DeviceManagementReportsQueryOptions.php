<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceManagementReports resources
 *
 * Available select fields:
 * - exportJobs
 */
class DeviceManagementReportsQueryOptions extends QueryOptions
{
    public const FIELD_EXPORT_JOBS = 'exportJobs';

    /**
     * Select specific DeviceManagementReports properties
     * 
     * @param array<string> $select Use DeviceManagementReportsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
