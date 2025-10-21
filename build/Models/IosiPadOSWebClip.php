<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosiPadOSWebClip
 */
class IosiPadOSWebClip
{
    public function __construct(
        /** Indicates iOS/iPadOS web clip app URL. Example: ''https://www.contoso.com */
        public ?string $appUrl = null,
        /** Contains properties and inherited properties for iOS web apps. */
        public ?string $useManagedBrowser = null
    ) {}
}
