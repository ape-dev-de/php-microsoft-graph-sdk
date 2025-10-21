<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExtractSensitivityLabelsResult
 */
class ExtractSensitivityLabelsResult
{
    public function __construct(
        /** List of sensitivity labels assigned to a file. */
        public array $labels = []
    ) {}
}
