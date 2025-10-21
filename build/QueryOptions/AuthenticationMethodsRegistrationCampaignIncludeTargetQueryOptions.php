<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationMethodsRegistrationCampaignIncludeTarget resources
 *
 * Available select fields:
 * - id
 * - targetedAuthenticationMethod
 * - targetType
 */
class AuthenticationMethodsRegistrationCampaignIncludeTargetQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AuthenticationMethodsRegistrationCampaignIncludeTarget
     */
    public const FIELD_ID = 'id';
    public const FIELD_TARGETED_AUTHENTICATION_METHOD = 'targetedAuthenticationMethod';
    public const FIELD_TARGET_TYPE = 'targetType';

    /**
     * Select specific AuthenticationMethodsRegistrationCampaignIncludeTarget properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
