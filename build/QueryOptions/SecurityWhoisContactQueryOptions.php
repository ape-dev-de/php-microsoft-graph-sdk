<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityWhoisContact resources
 *
 * Available select fields:
 * - address
 * - email
 * - fax
 * - name
 * - organization
 * - telephone
 */
class SecurityWhoisContactQueryOptions extends QueryOptions
{
    public const FIELD_ADDRESS = 'address';
    public const FIELD_EMAIL = 'email';
    public const FIELD_FAX = 'fax';
    public const FIELD_NAME = 'name';
    public const FIELD_ORGANIZATION = 'organization';
    public const FIELD_TELEPHONE = 'telephone';

    /**
     * Select specific SecurityWhoisContact properties
     * 
     * @param array<string> $select Use SecurityWhoisContactQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
