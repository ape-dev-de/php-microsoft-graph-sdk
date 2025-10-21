<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PublicKeyInfrastructureRoot resources
 *
 * Available select fields:
 * - certificateBasedAuthConfigurations
 */
class PublicKeyInfrastructureRootQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PublicKeyInfrastructureRoot
     */
    public const FIELD_CERTIFICATE_BASED_AUTH_CONFIGURATIONS = 'certificateBasedAuthConfigurations';

    /**
     * Select specific PublicKeyInfrastructureRoot properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
