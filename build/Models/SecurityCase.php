<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityCase
 */
class SecurityCase
{
    public function __construct(
        /**  */
        public ?\DateTimeInterface $createdDateTime = null,
        /**  */
        public ?string $description = null,
        /**  */
        public ?string $displayName = null,
        /**  */
        public ?string $lastModifiedBy = null,
        /**  */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /**  */
        public ?string $status = null
    ) {}
}
