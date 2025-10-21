<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ScopeBase
 */
class ScopeBase
{
    /**
     * The identifier for the scope. This could be a user ID, group ID, or a keyword like ''All'' for tenant scope.
     */
    private ?string $identity;


    public function getIdentity(): ?string
    {
        return $this->identity;
    }

    public function setIdentity(?string $identity): self
    {
        $this->identity = $identity;
        return $this;
    }

}
