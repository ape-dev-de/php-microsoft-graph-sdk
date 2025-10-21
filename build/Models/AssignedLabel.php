<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AssignedLabel
 */
class AssignedLabel
{
    public function __construct(
        /** The display name of the label. Read-only. */
        public ?string $displayName = null,
        /** The unique identifier of the label. */
        public ?string $labelId = null
    ) {}
}
