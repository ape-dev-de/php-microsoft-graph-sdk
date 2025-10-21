<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsUniversalAppXContainedApp
 */
class WindowsUniversalAppXContainedApp
{
    public function __construct(
        /** A class that represents a contained app of a WindowsUniversalAppX app. */
        public ?string $appUserModelId = null
    ) {}
}
