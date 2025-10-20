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
     */
    private ?string $resourceScopes;

    public function getPrincipalScopes(): array
    {
        return $this->principalScopes;
    }

    public function setPrincipalScopes(array $principalScopes): self
    {
        $this->principalScopes = $principalScopes;
        return $this;
    }

    public function getResourceScopes(): ?string
    {
        return $this->resourceScopes;
    }

    public function setResourceScopes(?string $resourceScopes): self
    {
        $this->resourceScopes = $resourceScopes;
        return $this;
    }

}
