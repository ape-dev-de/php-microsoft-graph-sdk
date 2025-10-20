<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PeopleAdminSettings
 */
class PeopleAdminSettings
{
    /**
     * Represents administrator settings that manage the support for item insights in an organization.
     */
    private ?string $itemInsights;

    /**
     * Contains a collection of the properties an administrator has defined as visible on the Microsoft 365 profile card.
     */
    private array $profileCardProperties = [];

    /**
     * Represents administrator settings that manage the support of pronouns in an organization.
     */
    private ?string $pronouns;

    public function getItemInsights(): ?string
    {
        return $this->itemInsights;
    }

    public function setItemInsights(?string $itemInsights): self
    {
        $this->itemInsights = $itemInsights;
        return $this;
    }

    public function getProfileCardProperties(): array
    {
        return $this->profileCardProperties;
    }

    public function setProfileCardProperties(array $profileCardProperties): self
    {
        $this->profileCardProperties = $profileCardProperties;
        return $this;
    }

    public function getPronouns(): ?string
    {
        return $this->pronouns;
    }

    public function setPronouns(?string $pronouns): self
    {
        $this->pronouns = $pronouns;
        return $this;
    }

}
