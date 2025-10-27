<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceManagementSettings
 */
class DeviceManagementSettings
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

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
        $this->rawData = $data;
        if (isset($data['deviceComplianceCheckinThresholdDays'])) {
            $this->deviceComplianceCheckinThresholdDays = is_numeric($data['deviceComplianceCheckinThresholdDays']) ? (float)$data['deviceComplianceCheckinThresholdDays'] : $data['deviceComplianceCheckinThresholdDays'];
        }
        if (isset($data['isScheduledActionEnabled'])) {
            $this->isScheduledActionEnabled = is_bool($data['isScheduledActionEnabled']) ? $data['isScheduledActionEnabled'] : (bool)$data['isScheduledActionEnabled'];
        }
        if (isset($data['secureByDefault'])) {
            $this->secureByDefault = is_bool($data['secureByDefault']) ? $data['secureByDefault'] : (bool)$data['secureByDefault'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
