<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrincipalResourceMembershipsScope
 */
class PrincipalResourceMembershipsScope
{
    /**
     * Defines the scopes of the principals whose access to resources are reviewed in the access review.
     */
    private array $principalScopes = [];

    /**
     * Defines the scopes of the resources for which access is reviewed.
     * @var string[]
     */
    private array $resourceScopes = [];


    public function getPrincipalScopes(): array
    {
        return $this->principalScopes;
    }

    public function setPrincipalScopes(array $principalScopes): self
    {
        $this->principalScopes = $principalScopes;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getResourceScopes(): array
    {
        return $this->resourceScopes;
    }

    /**
     * @param string[] $resourceScopes
     */
    public function setResourceScopes(array $resourceScopes): self
    {
        $this->resourceScopes = $resourceScopes;
        return $this;
    }

}
