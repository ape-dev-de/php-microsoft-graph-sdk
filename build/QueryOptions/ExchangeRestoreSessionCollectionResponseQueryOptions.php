<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExchangeRestoreSessionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ExchangeRestoreSessionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ExchangeRestoreSessionCollectionResponse properties
     * 
     * @param array<string> $select Use ExchangeRestoreSessionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
