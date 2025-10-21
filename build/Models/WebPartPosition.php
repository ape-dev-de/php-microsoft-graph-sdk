<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WebPartPosition
 */
class WebPartPosition
{
    public function __construct(
        /** Indicates the identifier of the column where the web part is located. */
        public ?string $columnId = null,
        /** Indicates the horizontal section where the web part is located. */
        public ?string $horizontalSectionId = null,
        /** Indicates whether the web part is located in the vertical section. */
        public ?bool $isInVerticalSection = null,
        /** Index of the current web part. Represents the order of the web part in this column or section. */
        public ?string $webPartIndex = null
    ) {}
}
