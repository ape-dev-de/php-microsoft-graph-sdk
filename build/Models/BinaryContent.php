<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BinaryContent
 */
class BinaryContent
{
    public function __construct(
        /** The binary content, encoded as a Base64 string. Inherited from contentBase. */
        public ?string $data = null
    ) {}
}
