<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosiPadOSWebClip resources
 *
 * Available select fields:
 * - appUrl
 * - useManagedBrowser
 */
class IosiPadOSWebClipQueryOptions extends QueryOptions
{
    public const FIELD_APP_URL = 'appUrl';
    public const FIELD_USE_MANAGED_BROWSER = 'useManagedBrowser';

    /**
     * Select specific IosiPadOSWebClip properties
     * 
     * @param array<string> $select Use IosiPadOSWebClipQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
