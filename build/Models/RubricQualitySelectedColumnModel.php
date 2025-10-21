<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RubricQualitySelectedColumnModel
 */
class RubricQualitySelectedColumnModel
{
    public function __construct(
        /** ID of the selected level for this quality. */
        public ?string $columnId = null,
        /** ID of the associated quality. */
        public ?string $qualityId = null
    ) {}
}
