<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CrossTenantAccessPolicyTargetConfiguration
 */
class CrossTenantAccessPolicyTargetConfiguration
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Defines whether access is allowed or blocked. The possible values are: allowed, blocked, unknownFutureValue.
     * @var CrossTenantAccessPolicyTargetConfigurationAccessType|\stdClass|null
     */
    public CrossTenantAccessPolicyTargetConfigurationAccessType|\stdClass|null $accessType = null;

    /** 
     * Specifies whether to target users, groups, or applications with this rule.
     * @var CrossTenantAccessPolicyTarget[]
     */
    public array $targets = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['accessType'])) {
            $this->accessType = is_string($data['accessType']) ? CrossTenantAccessPolicyTargetConfigurationAccessType::tryFrom($data['accessType']) : $data['accessType'];
        }
        if (isset($data['targets'])) {
            $this->targets = $data['targets'];
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
