<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TelecomExpenseManagementPartner
 */
class TelecomExpenseManagementPartner
{
    /**
     * Whether the partner's AAD app has been authorized to access Intune.
     */
    private ?bool $appAuthorized;

    /**
     * Display name of the TEM partner.
     */
    private ?string $displayName;

    /**
     * Whether Intune's connection to the TEM service is currently enabled or disabled.
     */
    private ?bool $enabled;

    /**
     * Timestamp of the last request sent to Intune by the TEM partner.
     */
    private ?\DateTimeInterface $lastConnectionDateTime;

    /**
     * telecomExpenseManagementPartner resources represent the metadata and status of a given TEM service. Once your organization has onboarded with a partner, the partner can be enabled or disabled to switch TEM functionality on or off.
     */
    private ?string $url;

    public function getAppAuthorized(): ?bool
    {
        return $this->appAuthorized;
    }

    public function setAppAuthorized(?bool $appAuthorized): self
    {
        $this->appAuthorized = $appAuthorized;
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

    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    public function setEnabled(?bool $enabled): self
    {
        $this->enabled = $enabled;
        return $this;
    }

    public function getLastConnectionDateTime(): ?\DateTimeInterface
    {
        return $this->lastConnectionDateTime;
    }

    public function setLastConnectionDateTime(?\DateTimeInterface $lastConnectionDateTime): self
    {
        $this->lastConnectionDateTime = $lastConnectionDateTime;
        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;
        return $this;
    }

}
