<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityCvssSummary resources
 *
 * Available select fields:
 * - score
 * - severity
 * - vectorString
 */
class SecurityCvssSummaryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityCvssSummary
     */
    public const FIELD_SCORE = 'score';
    public const FIELD_SEVERITY = 'severity';
    public const FIELD_VECTOR_STRING = 'vectorString';

    /**
     * Select specific SecurityCvssSummary properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
