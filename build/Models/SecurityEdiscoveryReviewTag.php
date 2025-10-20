<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEdiscoveryReviewTag
 */
class SecurityEdiscoveryReviewTag
{
    /**
     * Indicates whether a single or multiple child tags can be associated with a document. Possible values are: One, Many.  This value controls whether the UX presents the tags as checkboxes or a radio button group.
     */
    private ?string $childSelectability;

    /**
     * Returns the tags that are a child of a tag.
     */
    private array $childTags = [];

    /**
     * Returns the parent tag of the specified tag.
     */
    private ?string $parent;

    public function getChildSelectability(): ?string
    {
        return $this->childSelectability;
    }

    public function setChildSelectability(?string $childSelectability): self
    {
        $this->childSelectability = $childSelectability;
        return $this;
    }

    public function getChildTags(): array
    {
        return $this->childTags;
    }

    public function setChildTags(array $childTags): self
    {
        $this->childTags = $childTags;
        return $this;
    }

    public function getParent(): ?string
    {
        return $this->parent;
    }

    public function setParent(?string $parent): self
    {
        $this->parent = $parent;
        return $this;
    }

}
