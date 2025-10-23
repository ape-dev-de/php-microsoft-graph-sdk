<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosStoreAppAssignmentSettings
 */
class IosStoreAppAssignmentSettings
{
    /** When TRUE, indicates that the app can be uninstalled by the user. When FALSE, indicates that the app cannot be uninstalled by the user. By default, this property is set to null which internally is treated as TRUE. */
    public ?bool $isRemovable = null;

    /** When TRUE, indicates that the app should be uninstalled when the device is removed from Intune. When FALSE, indicates that the app will not be uninstalled when the device is removed from Intune. By default, property is set to null which internally is treated as TRUE. */
    public ?bool $uninstallOnDeviceRemoval = null;

    /** This is the unique identifier (Id) of the VPN Configuration to apply to the app. */
    public ?string $vpnConfigurationId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['isRemovable'])) {
            $this->isRemovable = $data['isRemovable'];
        }
        if (isset($data['uninstallOnDeviceRemoval'])) {
            $this->uninstallOnDeviceRemoval = $data['uninstallOnDeviceRemoval'];
        }
        if (isset($data['vpnConfigurationId'])) {
            $this->vpnConfigurationId = $data['vpnConfigurationId'];
        }
    }
}
