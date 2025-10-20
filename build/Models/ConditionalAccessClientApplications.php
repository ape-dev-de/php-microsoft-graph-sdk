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
     */
    private ?string $excludeServicePrincipals;

    /**
     * Service principal IDs included in the policy scope, or ServicePrincipalsInMyTenant.
     */
    private ?string $includeServicePrincipals;

    /**
     * Filter that defines the dynamic-servicePrincipal-syntax rule to include/exclude service principals. A filter can use custom security attributes to include/exclude service principals.
     */
    private ?string $servicePrincipalFilter;

    public function getExcludeServicePrincipals(): ?string
    {
        return $this->excludeServicePrincipals;
    }

    public function setExcludeServicePrincipals(?string $excludeServicePrincipals): self
    {
        $this->excludeServicePrincipals = $excludeServicePrincipals;
        return $this;
    }

    public function getIncludeServicePrincipals(): ?string
    {
        return $this->includeServicePrincipals;
    }

    public function setIncludeServicePrincipals(?string $includeServicePrincipals): self
    {
        $this->includeServicePrincipals = $includeServicePrincipals;
        return $this;
    }

    public function getServicePrincipalFilter(): ?string
    {
        return $this->servicePrincipalFilter;
    }

    public function setServicePrincipalFilter(?string $servicePrincipalFilter): self
    {
        $this->servicePrincipalFilter = $servicePrincipalFilter;
        return $this;
    }

}
