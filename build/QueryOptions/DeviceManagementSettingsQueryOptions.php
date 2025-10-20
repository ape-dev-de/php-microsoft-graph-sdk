<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceManagementSettings resources
 *
 * Available select fields:
 * - deviceComplianceCheckinThresholdDays
 * - isScheduledActionEnabled
 * - secureByDefault
 */
class DeviceManagementSettingsQueryOptions extends QueryOptions
{
    public const FIELD_DEVICE_COMPLIANCE_CHECKIN_THRESHOLD_DAYS = 'deviceComplianceCheckinThresholdDays';
    public const FIELD_IS_SCHEDULED_ACTION_ENABLED = 'isScheduledActionEnabled';
    public const FIELD_SECURE_BY_DEFAULT = 'secureByDefault';

    /**
     * Select specific DeviceManagementSettings properties
     * 
     * @param array<string> $select Use DeviceManagementSettingsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
