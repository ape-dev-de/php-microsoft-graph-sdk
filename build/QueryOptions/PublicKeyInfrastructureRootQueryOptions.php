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
    public const FIELD_CERTIFICATE_BASED_AUTH_CONFIGURATIONS = 'certificateBasedAuthConfigurations';

    /**
     * Select specific PublicKeyInfrastructureRoot properties
     * 
     * @param array<string> $select Use PublicKeyInfrastructureRootQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
