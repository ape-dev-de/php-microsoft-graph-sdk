<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityHostReputation resources
 *
 * Available select fields:
 * - classification
 * - rules
 * - score
 */
class SecurityHostReputationQueryOptions extends QueryOptions
{
    public const FIELD_CLASSIFICATION = 'classification';
    public const FIELD_RULES = 'rules';
    public const FIELD_SCORE = 'score';

    /**
     * Select specific SecurityHostReputation properties
     * 
     * @param array<string> $select Use SecurityHostReputationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
