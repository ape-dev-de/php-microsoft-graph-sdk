<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityArticleIndicator
 */
class SecurityArticleIndicator
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /**  */
        public ?string $source = null,
        /**  */
        public ?string $artifact = null
    ) {}
}
