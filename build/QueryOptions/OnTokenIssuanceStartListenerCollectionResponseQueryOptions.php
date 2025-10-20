<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnTokenIssuanceStartListenerCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class OnTokenIssuanceStartListenerCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific OnTokenIssuanceStartListenerCollectionResponse properties
     * 
     * @param array<string> $select Use OnTokenIssuanceStartListenerCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
