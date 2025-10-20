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
    public const FIELD_HISTORY = 'history';

    /**
     * Select specific SecurityWhoisRecord properties
     * 
     * @param array<string> $select Use SecurityWhoisRecordQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
