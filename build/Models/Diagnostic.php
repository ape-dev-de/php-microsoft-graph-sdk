<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Diagnostic
 */
class Diagnostic
{
    public function __construct(
        /**  */
        public ?string $message = null,
        /**  */
        public ?string $url = null
    ) {}
}
