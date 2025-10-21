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
    private array $excludeServicePrincipals = [];

    /**
     * Service principal IDs included in the policy scope, or ServicePrincipalsInMyTenant.
     * @var string[]
     */
    private array $includeServicePrincipals = [];

    /**
     * Filter that defines the dynamic-servicePrincipal-syntax rule to include/exclude service principals. A filter can use custom security attributes to include/exclude service principals.
     */
    private ?string $servicePrincipalFilter;


    /**
     * @return string[]
     */
    public function getExcludeServicePrincipals(): array
    {
        return $this->excludeServicePrincipals;
    }

    /**
     * @param string[] $excludeServicePrincipals
     */
    public function setExcludeServicePrincipals(array $excludeServicePrincipals): self
    {
        $this->excludeServicePrincipals = $excludeServicePrincipals;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getIncludeServicePrincipals(): array
    {
        return $this->includeServicePrincipals;
    }

    /**
     * @param string[] $includeServicePrincipals
     */
    public function setIncludeServicePrincipals(array $includeServicePrincipals): self
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
