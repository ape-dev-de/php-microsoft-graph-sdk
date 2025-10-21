<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConvertIdResult
 */
class ConvertIdResult
{
    public function __construct(
        /** An error object indicating the reason for the conversion failure. This value isn't present if the conversion succeeded. */
        public ?GenericError $errorDetails = null,
        /** The identifier that was converted. This value is the original, un-converted identifier. */
        public ?string $sourceId = null,
        /** The converted identifier. This value isn't present if the conversion failed. */
        public ?string $targetId = null
    ) {}
}
