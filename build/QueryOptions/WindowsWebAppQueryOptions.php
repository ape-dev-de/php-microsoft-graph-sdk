<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsWebApp resources
 *
 * Available select fields:
 * - appUrl
 */
class WindowsWebAppQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsWebApp
     */
    public const FIELD_APP_URL = 'appUrl';

    /**
     * Select specific WindowsWebApp properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
