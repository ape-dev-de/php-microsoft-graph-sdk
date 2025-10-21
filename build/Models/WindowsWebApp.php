<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsWebApp
 */
class WindowsWebApp
{
    public function __construct(
        /** Contains properties and inherited properties for Windows web apps. */
        public ?string $appUrl = null
    ) {}
}
