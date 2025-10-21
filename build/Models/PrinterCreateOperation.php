<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrinterCreateOperation
 */
class PrinterCreateOperation
{
    public function __construct(
        /** The signed certificate created during the registration process. Read-only. */
        public ?string $certificate = null,
        /** The created printer entity. Read-only. */
        public ?string $printer = null
    ) {}
}
