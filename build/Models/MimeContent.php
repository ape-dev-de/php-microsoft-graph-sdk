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
        /** The byte array that contains the actual content. */
        public ?string $value = null
    ) {}
}
