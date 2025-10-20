<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SmsAuthenticationMethodTargetCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SmsAuthenticationMethodTargetCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SmsAuthenticationMethodTargetCollectionResponse properties
     * 
     * @param array<string> $select Use SmsAuthenticationMethodTargetCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
