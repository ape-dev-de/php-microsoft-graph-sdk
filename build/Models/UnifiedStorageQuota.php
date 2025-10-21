<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedStorageQuota
 */
class UnifiedStorageQuota
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /**  */
        public ?float $deleted = null,
        /**  */
        public ?string $manageWebUrl = null,
        /**  */
        public ?float $remaining = null,
        /**  */
        public ?string $state = null,
        /**  */
        public ?float $total = null,
        /**  */
        public ?float $used = null,
        /** @var string[]  */
        public array $services = []
    ) {}
}
