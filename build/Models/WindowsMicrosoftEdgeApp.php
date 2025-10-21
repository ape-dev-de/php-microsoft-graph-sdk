<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsMicrosoftEdgeApp
 */
class WindowsMicrosoftEdgeApp
{
    public function __construct(
        /**  */
        public ?string $channel = null,
        /** Contains properties and inherited properties for the Microsoft Edge app on Windows. */
        public ?string $displayLanguageLocale = null
    ) {}
}
