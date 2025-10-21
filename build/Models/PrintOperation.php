<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintOperation
 */
class PrintOperation
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The DateTimeOffset when the operation was created. Read-only. */
        public ?\DateTimeInterface $createdDateTime = null,
        /**  */
        public ?string $status = null
    ) {}
}
