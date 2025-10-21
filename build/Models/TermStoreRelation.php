<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TermStoreRelation
 */
class TermStoreRelation
{
    public function __construct(
        /** The type of relation. Possible values are: pin, reuse. */
        public ?string $relationship = null,
        /** The from [term] of the relation. The term from which the relationship is defined. A null value would indicate the relation is directly with the [set]. */
        public ?string $fromTerm = null,
        /** The [set] in which the relation is relevant. */
        public ?string $set = null,
        /** The to [term] of the relation. The term to which the relationship is defined. */
        public ?string $toTerm = null
    ) {}
}
