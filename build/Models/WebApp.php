<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WebApp
 */
class WebApp
{
    public function __construct(
        /** The web app URL. This property cannot be PATCHed. */
        public ?string $appUrl = null,
        /** Contains properties and inherited properties for web apps. */
        public ?string $useManagedBrowser = null
    ) {}
}
