<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * StorageQuotaBreakdown
 */
class StorageQuotaBreakdown
{
    public function __construct(
        /**  */
        public ?string $displayName = null,
        /**  */
        public ?string $manageWebUrl = null,
        /**  */
        public ?string $used = null
    ) {}
}
