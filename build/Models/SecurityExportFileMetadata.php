<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityExportFileMetadata
 */
class SecurityExportFileMetadata
{
    public function __construct(
        /**  */
        public ?string $downloadUrl = null,
        /**  */
        public ?string $fileName = null,
        /**  */
        public ?float $size = null
    ) {}
}
