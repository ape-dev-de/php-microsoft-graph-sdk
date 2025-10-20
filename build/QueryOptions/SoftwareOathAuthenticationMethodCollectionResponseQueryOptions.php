<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SoftwareOathAuthenticationMethodCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SoftwareOathAuthenticationMethodCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SoftwareOathAuthenticationMethodCollectionResponse properties
     * 
     * @param array<string> $select Use SoftwareOathAuthenticationMethodCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
