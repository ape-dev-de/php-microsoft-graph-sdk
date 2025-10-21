<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceGroupBasedSubjectSet
 */
class IdentityGovernanceGroupBasedSubjectSet
{
    /**
     * @var string[]
     */
    private array $groups = [];


    /**
     * @return string[]
     */
    public function getGroups(): array
    {
        return $this->groups;
    }

    /**
     * @param string[] $groups
     */
    public function setGroups(array $groups): self
    {
        $this->groups = $groups;
        return $this;
    }

}
