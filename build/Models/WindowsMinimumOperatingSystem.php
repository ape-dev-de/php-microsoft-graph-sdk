<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsMinimumOperatingSystem
 */
class WindowsMinimumOperatingSystem
{
    public function __construct(
        /** Windows version 10.0 or later. */
        public ?bool $v10_0 = null,
        /** Windows version 8.0 or later. */
        public ?bool $v8_0 = null,
        /** The minimum operating system required for a Windows mobile app. */
        public ?string $v8_1 = null
    ) {}
}
