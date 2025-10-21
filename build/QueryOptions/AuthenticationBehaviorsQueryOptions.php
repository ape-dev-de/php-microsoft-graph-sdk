<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationBehaviors resources
 *
 * Available select fields:
 * - blockAzureADGraphAccess
 * - removeUnverifiedEmailClaim
 * - requireClientServicePrincipal
 */
class AuthenticationBehaviorsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AuthenticationBehaviors
     */
    public const FIELD_BLOCK_AZURE_ADGRAPH_ACCESS = 'blockAzureADGraphAccess';
    public const FIELD_REMOVE_UNVERIFIED_EMAIL_CLAIM = 'removeUnverifiedEmailClaim';
    public const FIELD_REQUIRE_CLIENT_SERVICE_PRINCIPAL = 'requireClientServicePrincipal';

    /**
     * Select specific AuthenticationBehaviors properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
