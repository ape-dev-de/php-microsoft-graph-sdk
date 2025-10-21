<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MimeContent
 */
class MimeContent
{
    public function __construct(
        /** Indicates the content mime type. */
        public ?string $type = null,
        /** Contains properties for a generic mime content. */
        public ?string $value = null
    ) {}
}
