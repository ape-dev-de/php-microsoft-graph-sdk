<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnTokenIssuanceStartCustomExtensionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class OnTokenIssuanceStartCustomExtensionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific OnTokenIssuanceStartCustomExtensionCollectionResponse properties
     * 
     * @param array<string> $select Use OnTokenIssuanceStartCustomExtensionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
