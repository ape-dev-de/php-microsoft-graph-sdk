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
        /** @var string[] Windows Information Protection IP Range Collection */
        public array $ranges = []
    ) {}
}
