<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobAppRegistryRule
 */
class Win32LobAppRegistryRule
{
    public function __construct(
        /** A value indicating whether to search the 32-bit registry on 64-bit systems. */
        public ?bool $check32BitOn64System = null,
        /** The registry comparison value. */
        public ?string $comparisonValue = null,
        /** The full path of the registry entry containing the value to detect. */
        public ?string $keyPath = null,
        /**  */
        public ?string $operationType = null,
        /**  */
        public ?string $operator = null,
        /** A complex type to store registry rule data for a Win32 LOB app. */
        public ?string $valueName = null
    ) {}
}
