<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobAppMsiInformation
 */
class Win32LobAppMsiInformation
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /**  */
    public ?Win32LobAppMsiPackageType $packageType = null;

    /** The MSI product code. */
    public ?string $productCode = null;

    /** The MSI product name. */
    public ?string $productName = null;

    /** The MSI product version. */
    public ?string $productVersion = null;

    /** The MSI publisher. */
    public ?string $publisher = null;

    /** Whether the MSI app requires the machine to reboot to complete installation. */
    public ?bool $requiresReboot = null;

    /** The MSI upgrade code. */
    public ?string $upgradeCode = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['packageType'])) {
            $this->packageType = is_string($data['packageType']) ? Win32LobAppMsiPackageType::tryFrom($data['packageType']) : $data['packageType'];
        }
        if (isset($data['productCode'])) {
            $this->productCode = $data['productCode'];
        }
        if (isset($data['productName'])) {
            $this->productName = $data['productName'];
        }
        if (isset($data['productVersion'])) {
            $this->productVersion = $data['productVersion'];
        }
        if (isset($data['publisher'])) {
            $this->publisher = $data['publisher'];
        }
        if (isset($data['requiresReboot'])) {
            $this->requiresReboot = is_bool($data['requiresReboot']) ? $data['requiresReboot'] : (bool)$data['requiresReboot'];
        }
        if (isset($data['upgradeCode'])) {
            $this->upgradeCode = $data['upgradeCode'];
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
