<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CrossTenantAccessPolicyB2BSetting
 */
class CrossTenantAccessPolicyB2BSetting
{
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
        if (isset($data['applications'])) {
            $this->applications = is_array($data['applications']) ? new CrossTenantAccessPolicyTargetConfiguration($data['applications']) : $data['applications'];
        }
        if (isset($data['usersAndGroups'])) {
            $this->usersAndGroups = is_array($data['usersAndGroups']) ? new CrossTenantAccessPolicyTargetConfiguration($data['usersAndGroups']) : $data['usersAndGroups'];
        }
    }
}
