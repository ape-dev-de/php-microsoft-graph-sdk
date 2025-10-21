<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityFilePlanDescriptorTemplate
 */
class SecurityFilePlanDescriptorTemplate
{
    public function __construct(
        /** Represents the user who created the filePlanDescriptorTemplate column. */
        public ?string $createdBy = null,
        /** Represents the date and time in which the filePlanDescriptorTemplate is created. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Unique string that defines a filePlanDescriptorTemplate name. */
        public ?string $displayName = null
    ) {}
}
