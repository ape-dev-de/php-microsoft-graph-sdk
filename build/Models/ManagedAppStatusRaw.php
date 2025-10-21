<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedAppStatusRaw
 */
class ManagedAppStatusRaw
{
    public function __construct(
        /** Represents an un-typed status report about organizations app protection and configuration. */
        public ?string $content = null
    ) {}
}
