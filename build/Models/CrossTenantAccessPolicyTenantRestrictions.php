<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CrossTenantAccessPolicyTenantRestrictions
 */
class CrossTenantAccessPolicyTenantRestrictions
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
        if (isset($data['applications'])) {
            $this->applications = $data['applications'];
        }
        if (isset($data['usersAndGroups'])) {
            $this->usersAndGroups = $data['usersAndGroups'];
        }
        if (isset($data['devices'])) {
            $this->devices = $data['devices'];
        }
    }
}
