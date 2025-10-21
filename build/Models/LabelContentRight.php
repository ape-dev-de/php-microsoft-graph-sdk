<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LabelContentRight
 */
class LabelContentRight
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The content identifier. */
        public ?string $cid = null,
        /** The content format. */
        public ?string $format = null,
        /**  */
        public ?UsageRights $rights = null,
        /**  */
        public ?SensitivityLabel $label = null
    ) {}
}
