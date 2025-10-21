<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityWhoisRecord resources
 *
 * Available select fields:
 * - history
 */
class SecurityWhoisRecordQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityWhoisRecord
     */
    public const FIELD_HISTORY = 'history';

    /**
     * Select specific SecurityWhoisRecord properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
