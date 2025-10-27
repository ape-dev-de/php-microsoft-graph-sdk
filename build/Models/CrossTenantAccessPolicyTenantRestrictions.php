<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CrossTenantAccessPolicyTenantRestrictions
 */
class CrossTenantAccessPolicyTenantRestrictions
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * The list of applications targeted with your cross-tenant access policy.
     * @var CrossTenantAccessPolicyTargetConfiguration|\stdClass|null
     */
    public mixed $applications = null;

    /** 
     * The list of users and groups targeted with your cross-tenant access policy.
     * @var CrossTenantAccessPolicyTargetConfiguration|\stdClass|null
     */
    public mixed $usersAndGroups = null;

    /** 
     * Defines the rule for filtering devices and whether devices that satisfy the rule should be allowed or blocked. This property isn't supported on the server side yet.
     * @var DevicesFilter|\stdClass|null
     */
    public mixed $devices = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['applications'])) {
            $this->applications = is_array($data['applications']) ? new CrossTenantAccessPolicyTargetConfiguration($data['applications']) : $data['applications'];
        }
        if (isset($data['usersAndGroups'])) {
            $this->usersAndGroups = is_array($data['usersAndGroups']) ? new CrossTenantAccessPolicyTargetConfiguration($data['usersAndGroups']) : $data['usersAndGroups'];
        }
        if (isset($data['devices'])) {
            $this->devices = is_array($data['devices']) ? new DevicesFilter($data['devices']) : $data['devices'];
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
