<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WebApp resources
 *
 * Available select fields:
 * - appUrl
 * - useManagedBrowser
 */
class WebAppQueryOptions extends QueryOptions
{
    public const FIELD_APP_URL = 'appUrl';
    public const FIELD_USE_MANAGED_BROWSER = 'useManagedBrowser';

    /**
     * Select specific WebApp properties
     * 
     * @param array<string> $select Use WebAppQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
