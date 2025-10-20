<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SiteCollection
 */
class SiteCollection
{
    /**
     * Represents whether the site collection is recently archived, fully archived, or reactivating. Possible values are: recentlyArchived, fullyArchived, reactivating, unknownFutureValue.
     */
    private ?string $archivalDetails;

    /**
     * The geographic region code for where this site collection resides. Only present for multi-geo tenants. Read-only.
     */
    private ?string $dataLocationCode;

    /**
     * The hostname for the site collection. Read-only.
     */
    private ?string $hostname;

    /**
     * If present, indicates that this is a root site collection in SharePoint. Read-only.
     */
    private ?string $root;

    public function getArchivalDetails(): ?string
    {
        return $this->archivalDetails;
    }

    public function setArchivalDetails(?string $archivalDetails): self
    {
        $this->archivalDetails = $archivalDetails;
        return $this;
    }

    public function getDataLocationCode(): ?string
    {
        return $this->dataLocationCode;
    }

    public function setDataLocationCode(?string $dataLocationCode): self
    {
        $this->dataLocationCode = $dataLocationCode;
        return $this;
    }

    public function getHostname(): ?string
    {
        return $this->hostname;
    }

    public function setHostname(?string $hostname): self
    {
        $this->hostname = $hostname;
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

}
