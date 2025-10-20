<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SharePointIdentitySet
 */
class SharePointIdentitySet
{
    /**
     * The group associated with this action. Optional.
     */
    private ?string $group;

    /**
     * The SharePoint group associated with this action. Optional.
     */
    private ?string $siteGroup;

    /**
     * The SharePoint user associated with this action. Optional.
     */
    private ?string $siteUser;

    public function getGroup(): ?string
    {
        return $this->group;
    }

    public function setGroup(?string $group): self
    {
        $this->group = $group;
        return $this;
    }

    public function getSiteGroup(): ?string
    {
        return $this->siteGroup;
    }

    public function setSiteGroup(?string $siteGroup): self
    {
        $this->siteGroup = $siteGroup;
        return $this;
    }

    public function getSiteUser(): ?string
    {
        return $this->siteUser;
    }

    public function setSiteUser(?string $siteUser): self
    {
        $this->siteUser = $siteUser;
        return $this;
    }

}
