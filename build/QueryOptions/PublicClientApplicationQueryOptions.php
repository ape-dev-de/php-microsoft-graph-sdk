<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PublicClientApplication resources
 *
 * Available select fields:
 * - redirectUris
 */
class PublicClientApplicationQueryOptions extends QueryOptions
{
    public const FIELD_REDIRECT_URIS = 'redirectUris';

    /**
     * Select specific PublicClientApplication properties
     * 
     * @param array<string> $select Use PublicClientApplicationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
