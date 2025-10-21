<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudClipboardRoot
 */
class CloudClipboardRoot
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Represents a collection of Cloud Clipboard items. */
        public array $items = []
    ) {}
}
