<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FileAssessmentRequest
 */
class FileAssessmentRequest
{
    public function __construct(
        /** Base64 encoded file content. The file content can't fetch back because it isn't stored. */
        public ?string $contentData = null,
        /** The file name. */
        public ?string $fileName = null
    ) {}
}
