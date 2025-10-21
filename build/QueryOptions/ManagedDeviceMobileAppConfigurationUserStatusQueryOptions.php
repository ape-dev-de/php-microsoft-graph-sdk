<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedDeviceMobileAppConfigurationUserStatus resources
 *
 * Available select fields:
 * - devicesCount
 * - lastReportedDateTime
 * - status
 * - userDisplayName
 * - userPrincipalName
 */
class ManagedDeviceMobileAppConfigurationUserStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ManagedDeviceMobileAppConfigurationUserStatus
     */
    public const FIELD_DEVICES_COUNT = 'devicesCount';
    public const FIELD_LAST_REPORTED_DATE_TIME = 'lastReportedDateTime';
    public const FIELD_STATUS = 'status';
    public const FIELD_USER_DISPLAY_NAME = 'userDisplayName';
    public const FIELD_USER_PRINCIPAL_NAME = 'userPrincipalName';

    /**
     * Select specific ManagedDeviceMobileAppConfigurationUserStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
