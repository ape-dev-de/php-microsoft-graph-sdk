<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityHostname resources
 *
 * Available select fields:
 * - registrant
 * - registrar
 */
class SecurityHostnameQueryOptions extends QueryOptions
{
    public const FIELD_REGISTRANT = 'registrant';
    public const FIELD_REGISTRAR = 'registrar';

    /**
     * Select specific SecurityHostname properties
     * 
     * @param array<string> $select Use SecurityHostnameQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
