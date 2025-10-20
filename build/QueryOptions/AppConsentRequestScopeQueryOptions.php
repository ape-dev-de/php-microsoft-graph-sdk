<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AppConsentRequestScope resources
 *
 * Available select fields:
 * - displayName
 */
class AppConsentRequestScopeQueryOptions extends QueryOptions
{
    public const FIELD_DISPLAY_NAME = 'displayName';

    /**
     * Select specific AppConsentRequestScope properties
     * 
     * @param array<string> $select Use AppConsentRequestScopeQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
