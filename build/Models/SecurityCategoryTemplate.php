<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityCategoryTemplate
 */
class SecurityCategoryTemplate
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Represents the user who created the filePlanDescriptorTemplate column. */
        public ?string $createdBy = null,
        /** Represents the date and time in which the filePlanDescriptorTemplate is created. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Unique string that defines a filePlanDescriptorTemplate name. */
        public ?string $displayName = null,
        /** Represents all subcategories under a particular category. */
        public array $subcategories = []
    ) {}
}
