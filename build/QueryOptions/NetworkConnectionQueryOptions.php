<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for NetworkConnection resources
 *
 * Available select fields:
 * - applicationName
 * - destinationAddress
 * - destinationDomain
 * - destinationLocation
 * - destinationPort
 * - destinationUrl
 * - direction
 * - domainRegisteredDateTime
 * - localDnsName
 * - natDestinationAddress
 * - natDestinationPort
 * - natSourceAddress
 * - natSourcePort
 * - protocol
 * - riskScore
 * - sourceAddress
 * - sourceLocation
 * - sourcePort
 * - status
 * - urlParameters
 */
class NetworkConnectionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for NetworkConnection
     */
    public const FIELD_APPLICATION_NAME = 'applicationName';
    public const FIELD_DESTINATION_ADDRESS = 'destinationAddress';
    public const FIELD_DESTINATION_DOMAIN = 'destinationDomain';
    public const FIELD_DESTINATION_LOCATION = 'destinationLocation';
    public const FIELD_DESTINATION_PORT = 'destinationPort';
    public const FIELD_DESTINATION_URL = 'destinationUrl';
    public const FIELD_DIRECTION = 'direction';
    public const FIELD_DOMAIN_REGISTERED_DATE_TIME = 'domainRegisteredDateTime';
    public const FIELD_LOCAL_DNS_NAME = 'localDnsName';
    public const FIELD_NAT_DESTINATION_ADDRESS = 'natDestinationAddress';
    public const FIELD_NAT_DESTINATION_PORT = 'natDestinationPort';
    public const FIELD_NAT_SOURCE_ADDRESS = 'natSourceAddress';
    public const FIELD_NAT_SOURCE_PORT = 'natSourcePort';
    public const FIELD_PROTOCOL = 'protocol';
    public const FIELD_RISK_SCORE = 'riskScore';
    public const FIELD_SOURCE_ADDRESS = 'sourceAddress';
    public const FIELD_SOURCE_LOCATION = 'sourceLocation';
    public const FIELD_SOURCE_PORT = 'sourcePort';
    public const FIELD_STATUS = 'status';
    public const FIELD_URL_PARAMETERS = 'urlParameters';

    /**
     * Select specific NetworkConnection properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
