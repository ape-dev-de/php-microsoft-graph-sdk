<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsHelloForBusinessAuthenticationMethodCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class WindowsHelloForBusinessAuthenticationMethodCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific WindowsHelloForBusinessAuthenticationMethodCollectionResponse properties
     * 
     * @param array<string> $select Use WindowsHelloForBusinessAuthenticationMethodCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
