<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EmailAuthenticationMethod resources
 *
 * Available select fields:
 * - emailAddress
 */
class EmailAuthenticationMethodQueryOptions extends QueryOptions
{
    public const FIELD_EMAIL_ADDRESS = 'emailAddress';

    /**
     * Select specific EmailAuthenticationMethod properties
     * 
     * @param array<string> $select Use EmailAuthenticationMethodQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
