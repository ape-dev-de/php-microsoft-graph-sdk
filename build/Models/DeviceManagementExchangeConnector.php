<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceManagementExchangeConnector
 */
class DeviceManagementExchangeConnector
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The name of the server hosting the Exchange Connector. */
        public ?string $connectorServerName = null,
        /** An alias assigned to the Exchange server */
        public ?string $exchangeAlias = null,
        /**  */
        public ?string $exchangeConnectorType = null,
        /** Exchange Organization to the Exchange server */
        public ?string $exchangeOrganization = null,
        /** Last sync time for the Exchange Connector */
        public ?\DateTimeInterface $lastSyncDateTime = null,
        /** Email address used to configure the Service To Service Exchange Connector. */
        public ?string $primarySmtpAddress = null,
        /** The name of the Exchange server. */
        public ?string $serverName = null,
        /**  */
        public ?string $status = null,
        /** The version of the ExchangeConnectorAgent */
        public ?string $version = null
    ) {}
}
