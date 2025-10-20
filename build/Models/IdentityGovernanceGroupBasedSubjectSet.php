<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceGroupBasedSubjectSet
 */
class IdentityGovernanceGroupBasedSubjectSet
{
    /**
     */
    private ?string $groups;

    public function getGroups(): ?string
    {
        return $this->groups;
    }

    public function setGroups(?string $groups): self
    {
        $this->groups = $groups;
        return $this;
    }

}
