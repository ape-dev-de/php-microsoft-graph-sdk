<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TextContent
 */
class TextContent
{
    public function __construct(
        /** The text content data. Inherits properties from contentBase. */
        public ?string $data = null
    ) {}
}
