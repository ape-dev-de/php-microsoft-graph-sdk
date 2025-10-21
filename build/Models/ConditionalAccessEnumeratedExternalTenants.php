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
     * @var string[]
     */
    private array $members = [];


    /**
     * @return string[]
     */
    public function getMembers(): array
    {
        return $this->members;
    }

    /**
     * @param string[] $members
     */
    public function setMembers(array $members): self
    {
        $this->members = $members;
        return $this;
    }

}
