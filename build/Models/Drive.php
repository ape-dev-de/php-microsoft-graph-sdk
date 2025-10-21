<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Drive
 */
class Drive
{
    public function __construct(
        /** Describes the type of drive represented by this resource. OneDrive personal drives return personal. OneDrive for Business returns business. SharePoint document libraries return documentLibrary. Read-only. */
        public ?string $driveType = null,
        /** Optional. The user account that owns the drive. Read-only. */
        public ?string $owner = null,
        /** Optional. Information about the drive's storage space quota. Read-only. */
        public ?string $quota = null,
        /**  */
        public ?string $sharePointIds = null,
        /** If present, indicates that it''s a system-managed drive. Read-only. */
        public ?string $system = null,
        /** Collection of bundles (albums and multi-select-shared sets of items). Only in personal OneDrive. */
        public array $bundles = [],
        /** The list of items the user is following. Only in OneDrive for Business. */
        public array $following = [],
        /** All items contained in the drive. Read-only. Nullable. */
        public array $items = [],
        /** For drives in SharePoint, the underlying document library list. Read-only. Nullable. */
        public ?string $list = null,
        /** The root folder of the drive. Read-only. */
        public ?string $root = null,
        /** @var string[] Collection of common folders available in OneDrive. Read-only. Nullable. */
        public array $special = []
    ) {}
}
