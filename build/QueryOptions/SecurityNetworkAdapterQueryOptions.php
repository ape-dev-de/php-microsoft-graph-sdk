<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityNetworkAdapter resources
 *
 * Available select fields:
 * - isEnabled
 * - name
 */
class SecurityNetworkAdapterQueryOptions extends QueryOptions
{
    public const FIELD_IS_ENABLED = 'isEnabled';
    public const FIELD_NAME = 'name';

    /**
     * Select specific SecurityNetworkAdapter properties
     * 
     * @param array<string> $select Use SecurityNetworkAdapterQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
