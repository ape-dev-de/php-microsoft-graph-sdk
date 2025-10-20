<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnAuthenticationMethodLoadStartListenerCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class OnAuthenticationMethodLoadStartListenerCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific OnAuthenticationMethodLoadStartListenerCollectionResponse properties
     * 
     * @param array<string> $select Use OnAuthenticationMethodLoadStartListenerCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
