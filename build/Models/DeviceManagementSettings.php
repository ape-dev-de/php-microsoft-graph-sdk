<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceManagementSettings
 */
class DeviceManagementSettings
{
    public function __construct(
        /** The number of days a device is allowed to go without checking in to remain compliant. */
        public ?float $deviceComplianceCheckinThresholdDays = null,
        /** Is feature enabled or not for scheduled action for rule. */
        public ?bool $isScheduledActionEnabled = null,
        /** Device should be noncompliant when there is no compliance policy targeted when this is true */
        public ?string $secureByDefault = null
    ) {}
}
