<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosVppAppAssignmentSettings
 */
class IosVppAppAssignmentSettings
{
    /** Whether or not to use device licensing. */
    public ?bool $useDeviceLicensing = null;

    /** The VPN Configuration Id to apply for this app. */
    public ?string $vpnConfigurationId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['useDeviceLicensing'])) {
            $this->useDeviceLicensing = $data['useDeviceLicensing'];
        }
        if (isset($data['vpnConfigurationId'])) {
            $this->vpnConfigurationId = $data['vpnConfigurationId'];
        }
    }
}
