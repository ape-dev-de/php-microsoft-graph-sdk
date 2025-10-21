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
    /**
     * Available select fields for IosiPadOSWebClip
     */
    public const FIELD_APP_URL = 'appUrl';
    public const FIELD_USE_MANAGED_BROWSER = 'useManagedBrowser';

    /**
     * Select specific IosiPadOSWebClip properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
