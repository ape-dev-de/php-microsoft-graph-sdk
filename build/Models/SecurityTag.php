<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityTag
 */
class SecurityTag
{
    public function __construct(
        /**  */
        public ?string $createdBy = null,
        /**  */
        public ?string $description = null,
        /**  */
        public ?string $displayName = null,
        /**  */
        public ?\DateTimeInterface $lastModifiedDateTime = null
    ) {}
}
