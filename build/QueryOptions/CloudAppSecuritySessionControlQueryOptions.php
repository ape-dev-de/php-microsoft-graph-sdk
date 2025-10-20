<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudAppSecuritySessionControl resources
 *
 * Available select fields:
 * - cloudAppSecurityType
 */
class CloudAppSecuritySessionControlQueryOptions extends QueryOptions
{
    public const FIELD_CLOUD_APP_SECURITY_TYPE = 'cloudAppSecurityType';

    /**
     * Select specific CloudAppSecuritySessionControl properties
     * 
     * @param array<string> $select Use CloudAppSecuritySessionControlQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
