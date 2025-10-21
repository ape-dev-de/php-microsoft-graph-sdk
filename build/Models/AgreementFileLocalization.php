<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AgreementFileLocalization
 */
class AgreementFileLocalization
{
    public function __construct(
        /** @var string[] Read-only. Customized versions of the terms of use agreement in the Microsoft Entra tenant. */
        public array $versions = []
    ) {}
}
