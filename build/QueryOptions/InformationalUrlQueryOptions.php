<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for InformationalUrl resources
 *
 * Available select fields:
 * - logoUrl
 * - marketingUrl
 * - privacyStatementUrl
 * - supportUrl
 * - termsOfServiceUrl
 */
class InformationalUrlQueryOptions extends QueryOptions
{
    public const FIELD_LOGO_URL = 'logoUrl';
    public const FIELD_MARKETING_URL = 'marketingUrl';
    public const FIELD_PRIVACY_STATEMENT_URL = 'privacyStatementUrl';
    public const FIELD_SUPPORT_URL = 'supportUrl';
    public const FIELD_TERMS_OF_SERVICE_URL = 'termsOfServiceUrl';

    /**
     * Select specific InformationalUrl properties
     * 
     * @param array<string> $select Use InformationalUrlQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
