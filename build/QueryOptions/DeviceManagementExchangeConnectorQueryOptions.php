<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceManagementExchangeConnector resources
 *
 * Available select fields:
 * - connectorServerName
 * - exchangeAlias
 * - exchangeConnectorType
 * - exchangeOrganization
 * - lastSyncDateTime
 * - primarySmtpAddress
 * - serverName
 * - status
 * - version
 */
class DeviceManagementExchangeConnectorQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceManagementExchangeConnector
     */
    public const FIELD_CONNECTOR_SERVER_NAME = 'connectorServerName';
    public const FIELD_EXCHANGE_ALIAS = 'exchangeAlias';
    public const FIELD_EXCHANGE_CONNECTOR_TYPE = 'exchangeConnectorType';
    public const FIELD_EXCHANGE_ORGANIZATION = 'exchangeOrganization';
    public const FIELD_LAST_SYNC_DATE_TIME = 'lastSyncDateTime';
    public const FIELD_PRIMARY_SMTP_ADDRESS = 'primarySmtpAddress';
    public const FIELD_SERVER_NAME = 'serverName';
    public const FIELD_STATUS = 'status';
    public const FIELD_VERSION = 'version';

    /**
     * Select specific DeviceManagementExchangeConnector properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
