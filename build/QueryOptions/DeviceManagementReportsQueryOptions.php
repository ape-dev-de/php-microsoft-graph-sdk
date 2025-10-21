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
    /**
     * Available select fields for DeviceManagementReports
     */
    public const FIELD_EXPORT_JOBS = 'exportJobs';

    /**
     * Select specific DeviceManagementReports properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
