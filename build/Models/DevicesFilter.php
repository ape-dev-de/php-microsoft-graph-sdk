<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DevicesFilter
 */
class DevicesFilter
{
    /** 
     * Determines whether devices that satisfy the rule should be allowed or blocked. The possible values are: allowed, blocked, unknownFutureValue.
     * @var CrossTenantAccessPolicyTargetConfigurationAccessType|\stdClass|null
     */
    public mixed $mode = null;

    /** Defines the rule to filter the devices. For example, device.deviceAttribute2 -eq 'PrivilegedAccessWorkstation'. */
    public ?string $rule = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['mode'])) {
            $this->mode = is_array($data['mode']) ? new CrossTenantAccessPolicyTargetConfigurationAccessType($data['mode']) : $data['mode'];
        }
        if (isset($data['rule'])) {
            $this->rule = $data['rule'];
        }
    }
}
