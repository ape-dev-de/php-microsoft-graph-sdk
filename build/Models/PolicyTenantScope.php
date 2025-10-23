<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PolicyTenantScope
 */
class PolicyTenantScope
{
    /**  */
    public ?UserActivityTypes $activities = null;

    /**  */
    public ?ExecutionMode $executionMode = null;

    /** 
     * The locations (like domains or URLs) to be protected. Required.
     * @var PolicyLocation[]
     */
    public array $locations = [];

    /** 
     * The enforcement actions to take if the policy conditions are met within this scope. Required.
     * @var DlpActionInfo[]
     */
    public array $policyActions = [];

    /** 
     * Specifies the users and groups included in or excluded from this tenant-level policy scope.
     * @var PolicyBinding|\stdClass|null
     */
    public mixed $policyScope = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['activities'])) {
            $this->activities = $data['activities'];
        }
        if (isset($data['executionMode'])) {
            $this->executionMode = $data['executionMode'];
        }
        if (isset($data['locations'])) {
            $this->locations = $data['locations'];
        }
        if (isset($data['policyActions'])) {
            $this->policyActions = $data['policyActions'];
        }
        if (isset($data['policyScope'])) {
            $this->policyScope = $data['policyScope'];
        }
    }
}
