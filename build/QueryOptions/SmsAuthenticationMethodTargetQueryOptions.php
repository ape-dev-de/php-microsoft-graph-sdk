<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SmsAuthenticationMethodTarget resources
 *
 * Available select fields:
 * - isUsableForSignIn
 */
class SmsAuthenticationMethodTargetQueryOptions extends QueryOptions
{
    public const FIELD_IS_USABLE_FOR_SIGN_IN = 'isUsableForSignIn';

    /**
     * Select specific SmsAuthenticationMethodTarget properties
     * 
     * @param array<string> $select Use SmsAuthenticationMethodTargetQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
