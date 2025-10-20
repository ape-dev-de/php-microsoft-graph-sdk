<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationMethodsRegistrationCampaignIncludeTargetCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AuthenticationMethodsRegistrationCampaignIncludeTargetCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AuthenticationMethodsRegistrationCampaignIncludeTargetCollectionResponse properties
     * 
     * @param array<string> $select Use AuthenticationMethodsRegistrationCampaignIncludeTargetCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
