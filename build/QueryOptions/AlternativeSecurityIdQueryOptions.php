<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AlternativeSecurityId resources
 *
 * Available select fields:
 * - identityProvider
 * - key
 * - type
 */
class AlternativeSecurityIdQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AlternativeSecurityId
     */
    public const FIELD_IDENTITY_PROVIDER = 'identityProvider';
    public const FIELD_KEY = 'key';
    public const FIELD_TYPE = 'type';

    /**
     * Select specific AlternativeSecurityId properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
