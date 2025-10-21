<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AgreementFile
 */
class AgreementFile
{
    public function __construct(
        /** @var string[] The localized version of the terms of use agreement files attached to the agreement. */
        public array $localizations = []
    ) {}
}
