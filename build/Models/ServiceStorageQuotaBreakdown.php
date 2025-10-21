<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServiceStorageQuotaBreakdown
 */
class ServiceStorageQuotaBreakdown
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /**  */
        public ?string $displayName = null,
        /**  */
        public ?string $manageWebUrl = null,
        /**  */
        public ?float $used = null
    ) {}
}
