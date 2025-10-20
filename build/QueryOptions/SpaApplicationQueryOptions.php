<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SpaApplication resources
 *
 * Available select fields:
 * - redirectUris
 */
class SpaApplicationQueryOptions extends QueryOptions
{
    public const FIELD_REDIRECT_URIS = 'redirectUris';

    /**
     * Select specific SpaApplication properties
     * 
     * @param array<string> $select Use SpaApplicationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
