<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BasicAuthentication resources
 *
 * Available select fields:
 * - password
 * - username
 */
class BasicAuthenticationQueryOptions extends QueryOptions
{
    public const FIELD_PASSWORD = 'password';
    public const FIELD_USERNAME = 'username';

    /**
     * Select specific BasicAuthentication properties
     * 
     * @param array<string> $select Use BasicAuthenticationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
