<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationEventsFlow
 */
class AuthenticationEventsFlow
{
    /**
     * The conditions representing the context of the authentication request that's used to decide whether the events policy is invoked.  Supports $filter (eq). See support for filtering on user flows for syntax information.
     */
    private ?string $conditions;

    /**
     * The description of the events policy.
     */
    private ?string $description;

    /**
     * Required. The display name for the events policy.
     */
    private ?string $displayName;


    public function getConditions(): ?string
    {
        return $this->conditions;
    }

    public function setConditions(?string $conditions): self
    {
        $this->conditions = $conditions;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

}
