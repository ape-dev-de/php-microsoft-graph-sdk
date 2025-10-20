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
    public const FIELD_AUDIENCES = 'audiences';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_ISSUER = 'issuer';
    public const FIELD_NAME = 'name';
    public const FIELD_SUBJECT = 'subject';

    /**
     * Select specific FederatedIdentityCredential properties
     * 
     * @param array<string> $select Use FederatedIdentityCredentialQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
