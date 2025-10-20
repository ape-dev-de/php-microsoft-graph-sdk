<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TermStoreGroup
 */
class TermStoreGroup
{
    /**
     * Date and time of the group creation. Read-only.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Description that gives details on the term usage.
     */
    private ?string $description;

    /**
     * Name of the group.
     */
    private ?string $displayName;

    /**
     * ID of the parent site of this group.
     */
    private ?string $parentSiteId;

    /**
     * Returns the type of the group. Possible values are: global, system, and siteCollection.
     */
    private ?string $scope;

    /**
     * All sets under the group in a term [store].
     */
    private ?string $sets;

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

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

    public function getParentSiteId(): ?string
    {
        return $this->parentSiteId;
    }

    public function setParentSiteId(?string $parentSiteId): self
    {
        $this->parentSiteId = $parentSiteId;
        return $this;
    }

    public function getScope(): ?string
    {
        return $this->scope;
    }

    public function setScope(?string $scope): self
    {
        $this->scope = $scope;
        return $this;
    }

    public function getSets(): ?string
    {
        return $this->sets;
    }

    public function setSets(?string $sets): self
    {
        $this->sets = $sets;
        return $this;
    }

}
