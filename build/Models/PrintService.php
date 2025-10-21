<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintService
 */
class PrintService
{
    public function __construct(
        /** @var string[] Endpoints that can be used to access the service. Read-only. Nullable. */
        public array $endpoints = []
    ) {}
}
