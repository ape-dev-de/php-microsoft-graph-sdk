<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CrossTenantAccessPolicyTargetConfiguration
 */
class CrossTenantAccessPolicyTargetConfiguration
{
    /** 
     * Defines whether access is allowed or blocked. The possible values are: allowed, blocked, unknownFutureValue.
     * @var CrossTenantAccessPolicyTargetConfigurationAccessType|\stdClass|null
     */
    public mixed $accessType = null;

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
        if (isset($data['accessType'])) {
            $this->accessType = $data['accessType'];
        }
        if (isset($data['targets'])) {
            $this->targets = $data['targets'];
        }
    }
}
