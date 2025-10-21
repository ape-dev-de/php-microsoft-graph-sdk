<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudAppSecurityState resources
 *
 * Available select fields:
 * - destinationServiceIp
 * - destinationServiceName
 * - riskScore
 */
class CloudAppSecurityStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CloudAppSecurityState
     */
    public const FIELD_DESTINATION_SERVICE_IP = 'destinationServiceIp';
    public const FIELD_DESTINATION_SERVICE_NAME = 'destinationServiceName';
    public const FIELD_RISK_SCORE = 'riskScore';

    /**
     * Select specific CloudAppSecurityState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
