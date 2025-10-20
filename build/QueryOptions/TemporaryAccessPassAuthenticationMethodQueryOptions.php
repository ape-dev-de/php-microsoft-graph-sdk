<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TemporaryAccessPassAuthenticationMethod resources
 *
 * Available select fields:
 * - createdDateTime
 * - isUsable
 * - isUsableOnce
 * - lifetimeInMinutes
 * - methodUsabilityReason
 * - startDateTime
 * - temporaryAccessPass
 */
class TemporaryAccessPassAuthenticationMethodQueryOptions extends QueryOptions
{
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_IS_USABLE = 'isUsable';
    public const FIELD_IS_USABLE_ONCE = 'isUsableOnce';
    public const FIELD_LIFETIME_IN_MINUTES = 'lifetimeInMinutes';
    public const FIELD_METHOD_USABILITY_REASON = 'methodUsabilityReason';
    public const FIELD_START_DATE_TIME = 'startDateTime';
    public const FIELD_TEMPORARY_ACCESS_PASS = 'temporaryAccessPass';

    /**
     * Select specific TemporaryAccessPassAuthenticationMethod properties
     * 
     * @param array<string> $select Use TemporaryAccessPassAuthenticationMethodQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
