<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProtectedContent
 */
class ProtectedContent
{
    public function __construct(
        /** The content id */
        public ?string $cid = null,
        /** The content format. */
        public ?string $format = null,
        /** The unique identifier for the sensitivity label applied to the content. */
        public ?string $labelId = null
    ) {}
}
