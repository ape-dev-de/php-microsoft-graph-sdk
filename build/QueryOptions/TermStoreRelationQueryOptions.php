<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TermStoreRelation resources
 *
 * Available select fields:
 * - relationship
 * - fromTerm
 * - set
 * - toTerm
 */
class TermStoreRelationQueryOptions extends QueryOptions
{
    public const FIELD_RELATIONSHIP = 'relationship';
    public const FIELD_FROM_TERM = 'fromTerm';
    public const FIELD_SET = 'set';
    public const FIELD_TO_TERM = 'toTerm';

    /**
     * Select specific TermStoreRelation properties
     * 
     * @param array<string> $select Use TermStoreRelationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
