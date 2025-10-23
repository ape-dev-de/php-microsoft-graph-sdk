<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceManagementExchangeConnector
 */
class DeviceManagementExchangeConnector
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The name of the server hosting the Exchange Connector. */
    public ?string $connectorServerName = null;

    /** An alias assigned to the Exchange server */
    public ?string $exchangeAlias = null;

    /**  */
    public ?DeviceManagementExchangeConnectorType $exchangeConnectorType = null;

    /** Exchange Organization to the Exchange server */
    public ?string $exchangeOrganization = null;

    /** Last sync time for the Exchange Connector */
    public ?\DateTimeInterface $lastSyncDateTime = null;

    /** Email address used to configure the Service To Service Exchange Connector. */
    public ?string $primarySmtpAddress = null;

    /** The name of the Exchange server. */
    public ?string $serverName = null;

    /**  */
    public ?DeviceManagementExchangeConnectorStatus $status = null;

    /** The version of the ExchangeConnectorAgent */
    public ?string $version = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['connectorServerName'])) {
            $this->connectorServerName = $data['connectorServerName'];
        }
        if (isset($data['exchangeAlias'])) {
            $this->exchangeAlias = $data['exchangeAlias'];
        }
        if (isset($data['exchangeConnectorType'])) {
            $this->exchangeConnectorType = $data['exchangeConnectorType'];
        }
        if (isset($data['exchangeOrganization'])) {
            $this->exchangeOrganization = $data['exchangeOrganization'];
        }
        if (isset($data['lastSyncDateTime'])) {
            $this->lastSyncDateTime = $data['lastSyncDateTime'];
        }
        if (isset($data['primarySmtpAddress'])) {
            $this->primarySmtpAddress = $data['primarySmtpAddress'];
        }
        if (isset($data['serverName'])) {
            $this->serverName = $data['serverName'];
        }
        if (isset($data['status'])) {
            $this->status = $data['status'];
        }
        if (isset($data['version'])) {
            $this->version = $data['version'];
        }
    }
}
