<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TermColumn
 */
class TermColumn
{
    public function __construct(
        /** Specifies whether the column allows more than one value. */
        public ?bool $allowMultipleValues = null,
        /** Specifies whether to display the entire term path or only the term label. */
        public ?bool $showFullyQualifiedName = null,
        /**  */
        public ?string $parentTerm = null,
        /**  */
        public ?string $termSet = null
    ) {}
}
