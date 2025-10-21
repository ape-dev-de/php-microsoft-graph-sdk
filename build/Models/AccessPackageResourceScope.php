<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageResourceScope
 */
class AccessPackageResourceScope
{
    /**
     * The description of the scope.
     */
    private ?string $description;

    /**
     * The display name of the scope.
     */
    private ?string $displayName;

    /**
     * True if the scopes are arranged in a hierarchy and this is the top or root scope of the resource.
     */
    private ?bool $isRootScope;

    /**
     * The unique identifier for the scope in the resource as defined in the origin system.
     */
    private ?string $originId;

    /**
     * The origin system for the scope.
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

    public function getIsRootScope(): ?bool
    {
        return $this->isRootScope;
    }

    public function setIsRootScope(?bool $isRootScope): self
    {
        $this->isRootScope = $isRootScope;
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
