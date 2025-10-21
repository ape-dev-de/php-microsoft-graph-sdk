<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEdiscoveryReviewTag
 */
class SecurityEdiscoveryReviewTag
{
    public function __construct(
        /** Indicates whether a single or multiple child tags can be associated with a document. Possible values are: One, Many.  This value controls whether the UX presents the tags as checkboxes or a radio button group. */
        public ?string $childSelectability = null,
        /** Returns the tags that are a child of a tag. */
        public array $childTags = [],
        /** Returns the parent tag of the specified tag. */
        public ?string $parent = null
    ) {}
}
