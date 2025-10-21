<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageResourceRole
 */
class AccessPackageResourceRole
{
    /**
     * A description for the resource role.
     */
    private ?string $description;

    /**
     * The display name of the resource role such as the role defined by the application.
     */
    private ?string $displayName;

    /**
     * The unique identifier of the resource role in the origin system. For a SharePoint Online site, the originId is the sequence number of the role in the site.
     */
    private ?string $originId;

    /**
     * The type of the resource in the origin system, such as SharePointOnline, AadApplication, or AadGroup.
     */
    private ?string $originSystem;

    /**
     */
    private ?string $resource;


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

    public function getOriginId(): ?string
    {
        return $this->originId;
    }

    public function setOriginId(?string $originId): self
    {
        $this->originId = $originId;
        return $this;
    }

    public function getOriginSystem(): ?string
    {
        return $this->originSystem;
    }

    public function setOriginSystem(?string $originSystem): self
    {
        $this->originSystem = $originSystem;
        return $this;
    }

    public function getResource(): ?string
    {
        return $this->resource;
    }

    public function setResource(?string $resource): self
    {
        $this->resource = $resource;
        return $this;
    }

}
