<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CrossTenantAccessPolicyInboundTrust
 */
class CrossTenantAccessPolicyInboundTrust
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Specifies whether compliant devices from external Microsoft Entra organizations are trusted. */
    public ?bool $isCompliantDeviceAccepted = null;

    /** Specifies whether Microsoft Entra hybrid joined devices from external Microsoft Entra organizations are trusted. */
    public ?bool $isHybridAzureADJoinedDeviceAccepted = null;

    /** Specifies whether MFA from external Microsoft Entra organizations is trusted. */
    public ?bool $isMfaAccepted = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['isCompliantDeviceAccepted'])) {
            $this->isCompliantDeviceAccepted = is_bool($data['isCompliantDeviceAccepted']) ? $data['isCompliantDeviceAccepted'] : (bool)$data['isCompliantDeviceAccepted'];
        }
        if (isset($data['isHybridAzureADJoinedDeviceAccepted'])) {
            $this->isHybridAzureADJoinedDeviceAccepted = is_bool($data['isHybridAzureADJoinedDeviceAccepted']) ? $data['isHybridAzureADJoinedDeviceAccepted'] : (bool)$data['isHybridAzureADJoinedDeviceAccepted'];
        }
        if (isset($data['isMfaAccepted'])) {
            $this->isMfaAccepted = is_bool($data['isMfaAccepted']) ? $data['isMfaAccepted'] : (bool)$data['isMfaAccepted'];
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
