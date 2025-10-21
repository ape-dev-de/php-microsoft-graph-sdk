<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityUserSource
 */
class SecurityUserSource
{
    /**
     * Email address of the user's mailbox.
     */
    private ?string $email;

    /**
     * Specifies which sources are included in this group. Possible values are: mailbox, site.
     */
    private ?string $includedSources;

    /**
     * The URL of the user's OneDrive for Business site. Read-only.
     */
    private ?string $siteWebUrl;


    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getIncludedSources(): ?string
    {
        return $this->includedSources;
    }

    public function setIncludedSources(?string $includedSources): self
    {
        $this->includedSources = $includedSources;
        return $this;
    }

    public function getSiteWebUrl(): ?string
    {
        return $this->siteWebUrl;
    }

    public function setSiteWebUrl(?string $siteWebUrl): self
    {
        $this->siteWebUrl = $siteWebUrl;
        return $this;
    }

}
