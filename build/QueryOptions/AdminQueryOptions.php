<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Admin resources
 *
 * Available select fields:
 * - edge
 * - microsoft365Apps
 * - people
 * - reportSettings
 * - serviceAnnouncement
 * - sharepoint
 */
class AdminQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Admin
     */
    public const FIELD_EDGE = 'edge';
    public const FIELD_MICROSOFT365APPS = 'microsoft365Apps';
    public const FIELD_PEOPLE = 'people';
    public const FIELD_REPORT_SETTINGS = 'reportSettings';
    public const FIELD_SERVICE_ANNOUNCEMENT = 'serviceAnnouncement';
    public const FIELD_SHAREPOINT = 'sharepoint';

    /**
     * Select specific Admin properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
