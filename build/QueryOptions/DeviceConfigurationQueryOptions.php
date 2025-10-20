<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceConfiguration resources
 *
 * Available select fields:
 * - createdDateTime
 * - description
 * - displayName
 * - lastModifiedDateTime
 * - version
 * - assignments
 * - deviceSettingStateSummaries
 * - deviceStatuses
 * - deviceStatusOverview
 * - userStatuses
 * - userStatusOverview
 */
class DeviceConfigurationQueryOptions extends QueryOptions
{
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_VERSION = 'version';
    public const FIELD_ASSIGNMENTS = 'assignments';
    public const FIELD_DEVICE_SETTING_STATE_SUMMARIES = 'deviceSettingStateSummaries';
    public const FIELD_DEVICE_STATUSES = 'deviceStatuses';
    public const FIELD_DEVICE_STATUS_OVERVIEW = 'deviceStatusOverview';
    public const FIELD_USER_STATUSES = 'userStatuses';
    public const FIELD_USER_STATUS_OVERVIEW = 'userStatusOverview';

    /**
     * Select specific DeviceConfiguration properties
     * 
     * @param array<string> $select Use DeviceConfigurationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
