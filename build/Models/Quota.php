<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Quota
 */
class Quota
{
    public function __construct(
        /** Total space consumed by files in the recycle bin, in bytes. Read-only. */
        public ?float $deleted = null,
        /** Total space remaining before reaching the capacity limit, in bytes. Read-only. */
        public ?float $remaining = null,
        /** Enumeration value that indicates the state of the storage space. Read-only. */
        public ?string $state = null,
        /** Information about the drive's storage quota plans. Only in Personal OneDrive. */
        public ?string $storagePlanInformation = null,
        /** Total allowed storage space, in bytes. Read-only. */
        public ?float $total = null,
        /** Total space used, in bytes. Read-only. */
        public ?float $used = null
    ) {}
}
