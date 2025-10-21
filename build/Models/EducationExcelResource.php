<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationExcelResource
 */
class EducationExcelResource
{
    public function __construct(
        /** Pointer to the Excel file object. */
        public ?string $fileUrl = null
    ) {}
}
