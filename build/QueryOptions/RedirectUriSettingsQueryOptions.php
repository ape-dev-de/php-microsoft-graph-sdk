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
    public const FIELD_INDEX = 'index';
    public const FIELD_URI = 'uri';

    /**
     * Select specific RedirectUriSettings properties
     * 
     * @param array<string> $select Use RedirectUriSettingsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
