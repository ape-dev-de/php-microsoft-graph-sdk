<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceConfigurationUserStatus resources
 *
 * Available select fields:
 * - devicesCount
 * - lastReportedDateTime
 * - status
 * - userDisplayName
 * - userPrincipalName
 */
class DeviceConfigurationUserStatusQueryOptions extends QueryOptions
{
    public const FIELD_DEVICES_COUNT = 'devicesCount';
    public const FIELD_LAST_REPORTED_DATE_TIME = 'lastReportedDateTime';
    public const FIELD_STATUS = 'status';
    public const FIELD_USER_DISPLAY_NAME = 'userDisplayName';
    public const FIELD_USER_PRINCIPAL_NAME = 'userPrincipalName';

    /**
     * Select specific DeviceConfigurationUserStatus properties
     * 
     * @param array<string> $select Use DeviceConfigurationUserStatusQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
