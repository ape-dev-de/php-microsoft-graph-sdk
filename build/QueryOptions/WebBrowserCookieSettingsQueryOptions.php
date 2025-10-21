<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WebBrowserCookieSettings resources
 *
 * Available select fields:
 */
class WebBrowserCookieSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WebBrowserCookieSettings
     */

    /**
     * Select specific WebBrowserCookieSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
