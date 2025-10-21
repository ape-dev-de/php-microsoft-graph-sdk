<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ContentTypeInfo
 */
class ContentTypeInfo
{
    public function __construct(
        /** The ID of the content type. */
        public ?string $id = null,
        /** The name of the content type. */
        public ?string $name = null
    ) {}
}
