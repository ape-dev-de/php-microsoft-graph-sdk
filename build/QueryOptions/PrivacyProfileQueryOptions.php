<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrivacyProfile resources
 *
 * Available select fields:
 * - contactEmail
 * - statementUrl
 */
class PrivacyProfileQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrivacyProfile
     */
    public const FIELD_CONTACT_EMAIL = 'contactEmail';
    public const FIELD_STATEMENT_URL = 'statementUrl';

    /**
     * Select specific PrivacyProfile properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
