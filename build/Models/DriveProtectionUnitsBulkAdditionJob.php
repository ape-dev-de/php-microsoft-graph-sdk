<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DriveProtectionUnitsBulkAdditionJob
 */
class DriveProtectionUnitsBulkAdditionJob
{
    public function __construct(
        /** @var string[] The list of OneDrive directoryObjectIds to add to the OneDrive protection policy. */
        public array $directoryObjectIds = [],
        /** @var string[] The list of email addresses to add to the OneDrive protection policy. */
        public array $drives = []
    ) {}
}
