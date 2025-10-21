<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecuritySearch
 */
class SecuritySearch
{
    public function __construct(
        /**  */
        public ?string $contentQuery = null,
        /**  */
        public ?string $createdBy = null,
        /**  */
        public ?\DateTimeInterface $createdDateTime = null,
        /**  */
        public ?string $description = null,
        /**  */
        public ?string $displayName = null,
        /**  */
        public ?string $lastModifiedBy = null,
        /**  */
        public ?\DateTimeInterface $lastModifiedDateTime = null
    ) {}
}
