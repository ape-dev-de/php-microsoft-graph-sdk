<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SharepointIds
 */
class SharepointIds
{
    /**
     * The unique identifier (guid) for the item's list in SharePoint.
     */
    private ?string $listId;

    /**
     * An integer identifier for the item within the containing list.
     */
    private ?string $listItemId;

    /**
     * The unique identifier (guid) for the item within OneDrive for Business or a SharePoint site.
     */
    private ?string $listItemUniqueId;

    /**
     * The unique identifier (guid) for the item's site collection (SPSite).
     */
    private ?string $siteId;

    /**
     * The SharePoint URL for the site that contains the item.
     */
    private ?string $siteUrl;

    /**
     * The unique identifier (guid) for the tenancy.
     */
    private ?string $tenantId;

    /**
     * The unique identifier (guid) for the item's site (SPWeb).
     */
    private ?string $webId;

    public function getListId(): ?string
    {
        return $this->listId;
    }

    public function setListId(?string $listId): self
    {
        $this->listId = $listId;
        return $this;
    }

    public function getListItemId(): ?string
    {
        return $this->listItemId;
    }

    public function setListItemId(?string $listItemId): self
    {
        $this->listItemId = $listItemId;
        return $this;
    }

    public function getListItemUniqueId(): ?string
    {
        return $this->listItemUniqueId;
    }

    public function setListItemUniqueId(?string $listItemUniqueId): self
    {
        $this->listItemUniqueId = $listItemUniqueId;
        return $this;
    }

    public function getSiteId(): ?string
    {
        return $this->siteId;
    }

    public function setSiteId(?string $siteId): self
    {
        $this->siteId = $siteId;
        return $this;
    }

    public function getSiteUrl(): ?string
    {
        return $this->siteUrl;
    }

    public function setSiteUrl(?string $siteUrl): self
    {
        $this->siteUrl = $siteUrl;
        return $this;
    }

    public function getTenantId(): ?string
    {
        return $this->tenantId;
    }

    public function setTenantId(?string $tenantId): self
    {
        $this->tenantId = $tenantId;
        return $this;
    }

    public function getWebId(): ?string
    {
        return $this->webId;
    }

    public function setWebId(?string $webId): self
    {
        $this->webId = $webId;
        return $this;
    }

}
