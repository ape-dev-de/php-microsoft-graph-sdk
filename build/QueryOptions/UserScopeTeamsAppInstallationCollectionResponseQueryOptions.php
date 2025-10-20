<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserScopeTeamsAppInstallationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UserScopeTeamsAppInstallationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UserScopeTeamsAppInstallationCollectionResponse properties
     * 
     * @param array<string> $select Use UserScopeTeamsAppInstallationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
