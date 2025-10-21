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
    /**
     * Available select fields for AppConsentRequestScope
     */
    public const FIELD_DISPLAY_NAME = 'displayName';

    /**
     * Select specific AppConsentRequestScope properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
