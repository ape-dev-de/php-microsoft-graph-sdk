<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SharedDriveItem
 */
class SharedDriveItem
{
    public function __construct(
        /** Information about the owner of the shared item being referenced. */
        public ?string $owner = null,
        /** Used to access the underlying driveItem */
        public ?string $driveItem = null,
        /** All driveItems contained in the sharing root. This collection cannot be enumerated. */
        public array $items = [],
        /** Used to access the underlying list */
        public ?string $list = null,
        /** Used to access the underlying listItem */
        public ?string $listItem = null,
        /** Used to access the permission representing the underlying sharing link */
        public ?string $permission = null,
        /** Used to access the underlying driveItem. Deprecated -- use driveItem instead. */
        public ?string $root = null,
        /** Used to access the underlying site */
        public ?string $site = null
    ) {}
}
