<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessEnumeratedExternalTenants
 */
class ConditionalAccessEnumeratedExternalTenants
{
    /**
     * A collection of tenant IDs that define the scope of a policy targeting conditional access for guests and external users.
     */
    private ?string $members;

    public function getMembers(): ?string
    {
        return $this->members;
    }

    public function setMembers(?string $members): self
    {
        $this->members = $members;
        return $this;
    }

}
