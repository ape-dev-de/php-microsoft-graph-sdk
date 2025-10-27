<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceEnrollmentPlatformRestriction
 */
class DeviceEnrollmentPlatformRestriction
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Max OS version supported */
    public ?string $osMaximumVersion = null;

    /** Min OS version supported */
    public ?string $osMinimumVersion = null;

    /** Block personally owned devices from enrolling */
    public ?bool $personalDeviceEnrollmentBlocked = null;

    /** Block the platform from enrolling */
    public ?bool $platformBlocked = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['osMaximumVersion'])) {
            $this->osMaximumVersion = $data['osMaximumVersion'];
        }
        if (isset($data['osMinimumVersion'])) {
            $this->osMinimumVersion = $data['osMinimumVersion'];
        }
        if (isset($data['personalDeviceEnrollmentBlocked'])) {
            $this->personalDeviceEnrollmentBlocked = is_bool($data['personalDeviceEnrollmentBlocked']) ? $data['personalDeviceEnrollmentBlocked'] : (bool)$data['personalDeviceEnrollmentBlocked'];
        }
        if (isset($data['platformBlocked'])) {
            $this->platformBlocked = is_bool($data['platformBlocked']) ? $data['platformBlocked'] : (bool)$data['platformBlocked'];
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
