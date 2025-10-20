<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TermsExpiration resources
 *
 * Available select fields:
 * - frequency
 * - startDateTime
 */
class TermsExpirationQueryOptions extends QueryOptions
{
    public const FIELD_FREQUENCY = 'frequency';
    public const FIELD_START_DATE_TIME = 'startDateTime';

    /**
     * Select specific TermsExpiration properties
     * 
     * @param array<string> $select Use TermsExpirationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
