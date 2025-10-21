<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityFormattedContent
 */
class SecurityFormattedContent
{
    public function __construct(
        /** The content of this formattedContent. */
        public ?string $content = null,
        /** The format of the content. The possible values are: text, html, markdown, unknownFutureValue. */
        public ?string $format = null
    ) {}
}
