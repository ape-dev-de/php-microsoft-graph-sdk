<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TermStoreRelation
 */
class TermStoreRelation
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The type of relation. Possible values are: pin, reuse. */
        public ?TermStoreRelationType $relationship = null,
        /** The from [term] of the relation. The term from which the relationship is defined. A null value would indicate the relation is directly with the [set]. */
        public ?TermStoreTerm $fromTerm = null,
        /** The [set] in which the relation is relevant. */
        public ?TermStoreSet $set = null,
        /** The to [term] of the relation. The term to which the relationship is defined. */
        public ?TermStoreTerm $toTerm = null
    ) {}
}
