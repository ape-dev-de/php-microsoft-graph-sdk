<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityHostReputationRule resources
 *
 * Available select fields:
 * - description
 * - name
 * - relatedDetailsUrl
 * - severity
 */
class SecurityHostReputationRuleQueryOptions extends QueryOptions
{
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_NAME = 'name';
    public const FIELD_RELATED_DETAILS_URL = 'relatedDetailsUrl';
    public const FIELD_SEVERITY = 'severity';

    /**
     * Select specific SecurityHostReputationRule properties
     * 
     * @param array<string> $select Use SecurityHostReputationRuleQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
