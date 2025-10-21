<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ItemAnalytics
 */
class ItemAnalytics
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /**  */
        public ?string $allTime = null,
        /**  */
        public array $itemActivityStats = [],
        /**  */
        public ?string $lastSevenDays = null
    ) {}
}
