<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityVendorInformation
 */
class SecurityVendorInformation
{
    /** Specific provider (product/service - not vendor company); for example, WindowsDefenderATP. */
    public ?string $provider = null;

    /** Version of the provider or subprovider, if it exists, that generated the alert. Required */
    public ?string $providerVersion = null;

    /** Specific subprovider (under aggregating provider); for example, WindowsDefenderATP.SmartScreen. */
    public ?string $subProvider = null;

    /** Name of the alert vendor (for example, Microsoft, Dell, FireEye). Required */
    public ?string $vendor = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['provider'])) {
            $this->provider = $data['provider'];
        }
        if (isset($data['providerVersion'])) {
            $this->providerVersion = $data['providerVersion'];
        }
        if (isset($data['subProvider'])) {
            $this->subProvider = $data['subProvider'];
        }
        if (isset($data['vendor'])) {
            $this->vendor = $data['vendor'];
        }
    }
}
