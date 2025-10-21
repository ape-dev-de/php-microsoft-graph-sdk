<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for FederatedIdentityCredential resources
 *
 * Available select fields:
 * - audiences
 * - description
 * - issuer
 * - name
 * - subject
 */
class FederatedIdentityCredentialQueryOptions extends QueryOptions
{
    /**
     * Available select fields for FederatedIdentityCredential
     */
    public const FIELD_AUDIENCES = 'audiences';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_ISSUER = 'issuer';
    public const FIELD_NAME = 'name';
    public const FIELD_SUBJECT = 'subject';

    /**
     * Select specific FederatedIdentityCredential properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
