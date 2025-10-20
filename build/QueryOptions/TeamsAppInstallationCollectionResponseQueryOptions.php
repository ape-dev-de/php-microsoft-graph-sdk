<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamsAppInstallationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class TeamsAppInstallationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific TeamsAppInstallationCollectionResponse properties
     * 
     * @param array<string> $select Use TeamsAppInstallationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
