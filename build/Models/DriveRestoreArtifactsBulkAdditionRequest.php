<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DriveRestoreArtifactsBulkAdditionRequest
 */
class DriveRestoreArtifactsBulkAdditionRequest
{
    public function __construct(
        /** @var string[] The list of directory object IDs that are added to the corresponding OneDrive for work or school restore session in a bulk operation. */
        public array $directoryObjectIds = [],
        /** @var string[] The list of email addresses that are added to the corresponding OneDrive for work or school restore session in a bulk operation. */
        public array $drives = []
    ) {}
}
