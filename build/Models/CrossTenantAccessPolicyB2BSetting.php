<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CrossTenantAccessPolicyB2BSetting
 */
class CrossTenantAccessPolicyB2BSetting
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
