<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EmailSettings resources
 *
 * Available select fields:
 * - senderDomain
 * - useCompanyBranding
 */
class EmailSettingsQueryOptions extends QueryOptions
{
    public const FIELD_SENDER_DOMAIN = 'senderDomain';
    public const FIELD_USE_COMPANY_BRANDING = 'useCompanyBranding';

    /**
     * Select specific EmailSettings properties
     * 
     * @param array<string> $select Use EmailSettingsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
