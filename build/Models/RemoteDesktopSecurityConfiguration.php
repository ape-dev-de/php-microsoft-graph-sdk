<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RemoteDesktopSecurityConfiguration
 */
class RemoteDesktopSecurityConfiguration
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Determines if Microsoft Entra ID RDS authentication protocol for RDP is enabled. */
    public ?bool $isRemoteDesktopProtocolEnabled = null;

    /** 
     * The collection of target device groups that are associated with the RDS security configuration that will be enabled for SSO when a client connects to the target device over RDP using the new Microsoft Entra ID RDS authentication protocol.
     * @var TargetDeviceGroup[]
     */
    public array $targetDeviceGroups = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['isRemoteDesktopProtocolEnabled'])) {
            $this->isRemoteDesktopProtocolEnabled = $data['isRemoteDesktopProtocolEnabled'];
        }
        if (isset($data['targetDeviceGroups'])) {
            $this->targetDeviceGroups = $data['targetDeviceGroups'];
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
