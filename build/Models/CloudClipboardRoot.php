<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudClipboardRoot
 */
class CloudClipboardRoot
{
    public function __construct(
        /** @var string[] Represents a collection of Cloud Clipboard items. */
        public array $items = []
    ) {}
}
