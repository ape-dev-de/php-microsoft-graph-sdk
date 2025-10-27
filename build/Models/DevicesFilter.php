<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DevicesFilter
 */
class DevicesFilter
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Determines whether devices that satisfy the rule should be allowed or blocked. The possible values are: allowed, blocked, unknownFutureValue.
     * @var CrossTenantAccessPolicyTargetConfigurationAccessType|\stdClass|null
     */
    public CrossTenantAccessPolicyTargetConfigurationAccessType|\stdClass|null $mode = null;

    /** Defines the rule to filter the devices. For example, device.deviceAttribute2 -eq 'PrivilegedAccessWorkstation'. */
    public ?string $rule = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['mode'])) {
            $this->mode = is_string($data['mode']) ? CrossTenantAccessPolicyTargetConfigurationAccessType::tryFrom($data['mode']) : $data['mode'];
        }
        if (isset($data['rule'])) {
            $this->rule = $data['rule'];
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
