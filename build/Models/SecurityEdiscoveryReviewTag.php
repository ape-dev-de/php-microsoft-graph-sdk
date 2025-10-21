<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEdiscoveryReviewTag
 */
class SecurityEdiscoveryReviewTag
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /**  */
        public ?IdentitySet $createdBy = null,
        /**  */
        public ?string $description = null,
        /**  */
        public ?string $displayName = null,
        /**  */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** Indicates whether a single or multiple child tags can be associated with a document. Possible values are: One, Many.  This value controls whether the UX presents the tags as checkboxes or a radio button group. */
        public ?SecurityChildSelectability $childSelectability = null,
        /** Returns the tags that are a child of a tag. */
        public array $childTags = [],
        /** Returns the parent tag of the specified tag. */
        public ?SecurityEdiscoveryReviewTag $parent = null
    ) {}
}
