<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ContentActivity
 */
class ContentActivity
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /**  */
        public ?string $contentMetadata = null,
        /** The scope identified from computed protection scopes. */
        public ?string $scopeIdentifier = null,
        /** ID of the user. */
        public ?string $userId = null
    ) {}
}
