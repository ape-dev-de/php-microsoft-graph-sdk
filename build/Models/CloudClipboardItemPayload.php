<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudClipboardItemPayload
 */
class CloudClipboardItemPayload
{
    public function __construct(
        /** The formatName version of the value of a cloud clipboard encoded in base64. */
        public ?string $content = null,
        /** For a list of possible values see formatName values. */
        public ?string $formatName = null
    ) {}
}
