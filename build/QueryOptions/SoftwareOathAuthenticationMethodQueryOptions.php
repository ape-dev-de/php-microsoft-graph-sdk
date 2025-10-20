<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SoftwareOathAuthenticationMethod resources
 *
 * Available select fields:
 * - secretKey
 */
class SoftwareOathAuthenticationMethodQueryOptions extends QueryOptions
{
    public const FIELD_SECRET_KEY = 'secretKey';

    /**
     * Select specific SoftwareOathAuthenticationMethod properties
     * 
     * @param array<string> $select Use SoftwareOathAuthenticationMethodQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
