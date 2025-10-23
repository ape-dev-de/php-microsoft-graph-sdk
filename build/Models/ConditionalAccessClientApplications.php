<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessClientApplications
 */
class ConditionalAccessClientApplications
{
    /** 
     * Service principal IDs excluded from the policy scope.
     * @var string[]
     */
    public array $excludeServicePrincipals = [];

    /** 
     * Service principal IDs included in the policy scope, or ServicePrincipalsInMyTenant.
     * @var string[]
     */
    public array $includeServicePrincipals = [];

    /** 
     * Filter that defines the dynamic-servicePrincipal-syntax rule to include/exclude service principals. A filter can use custom security attributes to include/exclude service principals.
     * @var ConditionalAccessFilter|\stdClass|null
     */
    public mixed $servicePrincipalFilter = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['excludeServicePrincipals'])) {
            $this->excludeServicePrincipals = $data['excludeServicePrincipals'];
        }
        if (isset($data['includeServicePrincipals'])) {
            $this->includeServicePrincipals = $data['includeServicePrincipals'];
        }
        if (isset($data['servicePrincipalFilter'])) {
            $this->servicePrincipalFilter = $data['servicePrincipalFilter'];
        }
    }
}
