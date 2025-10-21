<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityReportFileMetadata
 */
class SecurityReportFileMetadata
{
    public function __construct(
        /** The URL to download the report. */
        public ?string $downloadUrl = null,
        /** The name of the file. */
        public ?string $fileName = null,
        /** The size of the file. */
        public ?float $size = null
    ) {}
}
