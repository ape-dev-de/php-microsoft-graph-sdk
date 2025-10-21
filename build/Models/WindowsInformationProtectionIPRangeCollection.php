<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsInformationProtectionIPRangeCollection
 */
class WindowsInformationProtectionIPRangeCollection
{
    public function __construct(
        /** Display name */
        public ?string $displayName = null,
        /** Collection of ip ranges */
        public array $ranges = []
    ) {}
}
