<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * InsightIdentity
 */
class InsightIdentity
{
    public function __construct(
        /** The email address of the user who shared the item. */
        public ?string $address = null,
        /** The display name of the user who shared the item. */
        public ?string $displayName = null,
        /** The ID of the user who shared the item. */
        public ?string $id = null
    ) {}
}
