<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ObjectIdentity resources
 *
 * Available select fields:
 * - issuer
 * - issuerAssignedId
 * - signInType
 */
class ObjectIdentityQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ObjectIdentity
     */
    public const FIELD_ISSUER = 'issuer';
    public const FIELD_ISSUER_ASSIGNED_ID = 'issuerAssignedId';
    public const FIELD_SIGN_IN_TYPE = 'signInType';

    /**
     * Select specific ObjectIdentity properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
