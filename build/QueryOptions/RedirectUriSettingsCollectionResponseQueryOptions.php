<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RedirectUriSettingsCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class RedirectUriSettingsCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific RedirectUriSettingsCollectionResponse properties
     * 
     * @param array<string> $select Use RedirectUriSettingsCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
