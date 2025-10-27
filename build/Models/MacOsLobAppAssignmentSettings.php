<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MacOsLobAppAssignmentSettings
 */
class MacOsLobAppAssignmentSettings
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** When TRUE, indicates that the app should be uninstalled when the device is removed from Intune. When FALSE, indicates that the app will not be uninstalled when the device is removed from Intune. */
    public ?bool $uninstallOnDeviceRemoval = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['uninstallOnDeviceRemoval'])) {
            $this->uninstallOnDeviceRemoval = is_bool($data['uninstallOnDeviceRemoval']) ? $data['uninstallOnDeviceRemoval'] : (bool)$data['uninstallOnDeviceRemoval'];
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
