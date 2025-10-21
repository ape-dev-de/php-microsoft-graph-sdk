<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceEnrollmentConfiguration resources
 *
 * Available select fields:
 * - createdDateTime
 * - description
 * - displayName
 * - lastModifiedDateTime
 * - priority
 * - version
 * - assignments
 */
class DeviceEnrollmentConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceEnrollmentConfiguration
     */
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_PRIORITY = 'priority';
    public const FIELD_VERSION = 'version';
    public const FIELD_ASSIGNMENTS = 'assignments';

    /**
     * Select specific DeviceEnrollmentConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
