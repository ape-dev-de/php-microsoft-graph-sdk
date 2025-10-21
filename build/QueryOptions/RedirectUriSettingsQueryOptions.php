<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RedirectUriSettings resources
 *
 * Available select fields:
 * - index
 * - uri
 */
class RedirectUriSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RedirectUriSettings
     */
    public const FIELD_INDEX = 'index';
    public const FIELD_URI = 'uri';

    /**
     * Select specific RedirectUriSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
