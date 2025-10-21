<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * StorageQuotaBreakdown
 */
class StorageQuotaBreakdown
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /**  */
        public ?string $displayName = null,
        /**  */
        public ?string $manageWebUrl = null,
        /**  */
        public ?string $used = null
    ) {}
}
