<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedDeviceMobileAppConfiguration resources
 *
 * Available select fields:
 * - createdDateTime
 * - description
 * - displayName
 * - lastModifiedDateTime
 * - targetedMobileApps
 * - version
 * - assignments
 * - deviceStatuses
 * - deviceStatusSummary
 * - userStatuses
 * - userStatusSummary
 */
class ManagedDeviceMobileAppConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ManagedDeviceMobileAppConfiguration
     */
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_TARGETED_MOBILE_APPS = 'targetedMobileApps';
    public const FIELD_VERSION = 'version';
    public const FIELD_ASSIGNMENTS = 'assignments';
    public const FIELD_DEVICE_STATUSES = 'deviceStatuses';
    public const FIELD_DEVICE_STATUS_SUMMARY = 'deviceStatusSummary';
    public const FIELD_USER_STATUSES = 'userStatuses';
    public const FIELD_USER_STATUS_SUMMARY = 'userStatusSummary';

    /**
     * Select specific ManagedDeviceMobileAppConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
