<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceManagementSettings
 */
class DeviceManagementSettings
{
    /** The number of days a device is allowed to go without checking in to remain compliant. */
    public ?float $deviceComplianceCheckinThresholdDays = null;

    /** Is feature enabled or not for scheduled action for rule. */
    public ?bool $isScheduledActionEnabled = null;

    /** Device should be noncompliant when there is no compliance policy targeted when this is true */
    public ?bool $secureByDefault = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['deviceComplianceCheckinThresholdDays'])) {
            $this->deviceComplianceCheckinThresholdDays = $data['deviceComplianceCheckinThresholdDays'];
        }
        if (isset($data['isScheduledActionEnabled'])) {
            $this->isScheduledActionEnabled = $data['isScheduledActionEnabled'];
        }
        if (isset($data['secureByDefault'])) {
            $this->secureByDefault = $data['secureByDefault'];
        }
    }
}
