<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Site
 */
class Site
{
    /**
     * The full title for the site. Read-only.
     */
    private ?string $displayName;

    /**
     */
    private ?string $error;

    /**
     * Identifies whether the site is personal or not. Read-only.
     */
    private ?bool $isPersonalSite;

    /**
     * If present, provides the root site in the site collection. Read-only.
     */
    private ?string $root;

    /**
     * Returns identifiers useful for SharePoint REST compatibility. Read-only.
     */
    private ?string $sharepointIds;

    /**
     * Provides details about the site's site collection. Available only on the root site. Read-only.
     */
    private ?string $siteCollection;

    /**
     * Analytics about the view activities that took place on this site.
     */
    private ?string $analytics;

    /**
     * The collection of column definitions reusable across lists under this site.
     */
    private array $columns = [];

    /**
     * The collection of content types defined for this site.
     */
    private array $contentTypes = [];

    /**
     * The default drive (document library) for this site.
     */
    private ?string $drive;

    /**
     * The collection of drives (document libraries) under this site.
     */
    private array $drives = [];

    /**
     */
    private array $externalColumns = [];

    /**
     * Used to address any item contained in this site. This collection can't be enumerated.
     */
    private array $items = [];

    /**
     * The collection of lists under this site.
     */
    private array $lists = [];

    /**
     * Calls the OneNote service for notebook related operations.
     */
    private ?string $onenote;

    /**
     * The collection of long-running operations on the site.
     */
    private array $operations = [];

    /**
     * The collection of pages in the baseSitePages list in this site.
     */
    private array $pages = [];

    /**
     * The permissions associated with the site. Nullable.
     */
    private array $permissions = [];

    /**
     * The collection of the sub-sites under this site.
     */
    private array $sites = [];

    /**
     * The default termStore under this site.
     */
    private ?string $termStore;

    /**
     * The collection of termStores under this site.
     * @var string[]
     */
    private array $termStores = [];


    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getError(): ?string
    {
        return $this->error;
    }

    public function setError(?string $error): self
    {
        $this->error = $error;
        return $this;
    }

    public function getIsPersonalSite(): ?bool
    {
        return $this->isPersonalSite;
    }

    public function setIsPersonalSite(?bool $isPersonalSite): self
    {
        $this->isPersonalSite = $isPersonalSite;
        return $this;
    }

    public function getRoot(): ?string
    {
        return $this->root;
    }

    public function setRoot(?string $root): self
    {
        $this->root = $root;
        return $this;
    }

    public function getSharepointIds(): ?string
    {
        return $this->sharepointIds;
    }

    public function setSharepointIds(?string $sharepointIds): self
    {
        $this->sharepointIds = $sharepointIds;
        return $this;
    }

    public function getSiteCollection(): ?string
    {
        return $this->siteCollection;
    }

    public function setSiteCollection(?string $siteCollection): self
    {
        $this->siteCollection = $siteCollection;
        return $this;
    }

    public function getAnalytics(): ?string
    {
        return $this->analytics;
    }

    public function setAnalytics(?string $analytics): self
    {
        $this->analytics = $analytics;
        return $this;
    }

    public function getColumns(): array
    {
        return $this->columns;
    }

    public function setColumns(array $columns): self
    {
        $this->columns = $columns;
        return $this;
    }

    public function getContentTypes(): array
    {
        return $this->contentTypes;
    }

    public function setContentTypes(array $contentTypes): self
    {
        $this->contentTypes = $contentTypes;
        return $this;
    }

    public function getDrive(): ?string
    {
        return $this->drive;
    }

    public function setDrive(?string $drive): self
    {
        $this->drive = $drive;
        return $this;
    }

    public function getDrives(): array
    {
        return $this->drives;
    }

    public function setDrives(array $drives): self
    {
        $this->drives = $drives;
        return $this;
    }

    public function getExternalColumns(): array
    {
        return $this->externalColumns;
    }

    public function setExternalColumns(array $externalColumns): self
    {
        $this->externalColumns = $externalColumns;
        return $this;
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function setItems(array $items): self
    {
        $this->items = $items;
        return $this;
    }

    public function getLists(): array
    {
        return $this->lists;
    }

    public function setLists(array $lists): self
    {
        $this->lists = $lists;
        return $this;
    }

    public function getOnenote(): ?string
    {
        return $this->onenote;
    }

    public function setOnenote(?string $onenote): self
    {
        $this->onenote = $onenote;
        return $this;
    }

    public function getOperations(): array
    {
        return $this->operations;
    }

    public function setOperations(array $operations): self
    {
        $this->operations = $operations;
        return $this;
    }

    public function getPages(): array
    {
        return $this->pages;
    }

    public function setPages(array $pages): self
    {
        $this->pages = $pages;
        return $this;
    }

    public function getPermissions(): array
    {
        return $this->permissions;
    }

    public function setPermissions(array $permissions): self
    {
        $this->permissions = $permissions;
        return $this;
    }

    public function getSites(): array
    {
        return $this->sites;
    }

    public function setSites(array $sites): self
    {
        $this->sites = $sites;
        return $this;
    }

    public function getTermStore(): ?string
    {
        return $this->termStore;
    }

    public function setTermStore(?string $termStore): self
    {
        $this->termStore = $termStore;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getTermStores(): array
    {
        return $this->termStores;
    }

    /**
     * @param string[] $termStores
     */
    public function setTermStores(array $termStores): self
    {
        $this->termStores = $termStores;
        return $this;
    }

}
