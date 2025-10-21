<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * StorageQuotaBreakdown
 */
class StorageQuotaBreakdown
{
    /**
     */
    private ?string $displayName;

    /**
     */
    private ?string $manageWebUrl;

    /**
     */
    private ?string $used;


    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getManageWebUrl(): ?string
    {
        return $this->manageWebUrl;
    }

    public function setManageWebUrl(?string $manageWebUrl): self
    {
        $this->manageWebUrl = $manageWebUrl;
        return $this;
    }

    public function getUsed(): ?string
    {
        return $this->used;
    }

    public function setUsed(?string $used): self
    {
        $this->used = $used;
        return $this;
    }

}
