<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AgreementFileData
 */
class AgreementFileData
{
    public function __construct(
        /** Data that represents the terms of use PDF document. Read-only. */
        public ?string $data = null
    ) {}
}
