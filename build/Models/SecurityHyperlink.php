<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityHyperlink
 */
class SecurityHyperlink
{
    public function __construct(
        /** The name for this hyperlink. */
        public ?string $name = null,
        /** The URL for this hyperlink. */
        public ?string $url = null
    ) {}
}
