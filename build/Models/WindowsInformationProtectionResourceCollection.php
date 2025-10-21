<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsInformationProtectionResourceCollection
 */
class WindowsInformationProtectionResourceCollection
{
    public function __construct(
        /** Display name */
        public ?string $displayName = null,
        /** @var string[] Collection of resources */
        public array $resources = []
    ) {}
}
