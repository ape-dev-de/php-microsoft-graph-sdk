<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ContentTypeOrder
 */
class ContentTypeOrder
{
    public function __construct(
        /** Indicates whether this is the default content type */
        public ?bool $default = null,
        /** Specifies the position in which the content type appears in the selection UI. */
        public ?float $position = null
    ) {}
}
