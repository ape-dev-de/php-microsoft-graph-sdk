<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SearchIdentity
 */
class SearchIdentity
{
    public function __construct(
        /**  */
        public ?string $displayName = null,
        /**  */
        public ?string $id = null
    ) {}
}
