<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttributeRuleMembers
 */
class AttributeRuleMembers
{
    /**
     * A description of the membership rule.
     */
    private ?string $description;

    /**
     * Determines the allowed target users for this policy. For more information about the syntax of the membership rule, see Membership Rules syntax.
     */
    private ?string $membershipRule;


    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getMembershipRule(): ?string
    {
        return $this->membershipRule;
    }

    public function setMembershipRule(?string $membershipRule): self
    {
        $this->membershipRule = $membershipRule;
        return $this;
    }

}
