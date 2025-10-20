<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceManagementExchangeConnector
 */
class DeviceManagementExchangeConnector
{
    /**
     * The name of the server hosting the Exchange Connector.
     */
    private ?string $connectorServerName;

    /**
     * An alias assigned to the Exchange server
     */
    private ?string $exchangeAlias;

    /**
     */
    private ?string $exchangeConnectorType;

    /**
     * Exchange Organization to the Exchange server
     */
    private ?string $exchangeOrganization;

    /**
     * Last sync time for the Exchange Connector
     */
    private ?\DateTimeInterface $lastSyncDateTime;

    /**
     * Email address used to configure the Service To Service Exchange Connector.
     */
    private ?string $primarySmtpAddress;

    /**
     * The name of the Exchange server.
     */
    private ?string $serverName;

    /**
     */
    private ?string $status;

    /**
     * Entity which represents a connection to an Exchange environment.
     */
    private ?string $version;

    public function getConnectorServerName(): ?string
    {
        return $this->connectorServerName;
    }

    public function setConnectorServerName(?string $connectorServerName): self
    {
        $this->connectorServerName = $connectorServerName;
        return $this;
    }

    public function getExchangeAlias(): ?string
    {
        return $this->exchangeAlias;
    }

    public function setExchangeAlias(?string $exchangeAlias): self
    {
        $this->exchangeAlias = $exchangeAlias;
        return $this;
    }

    public function getExchangeConnectorType(): ?string
    {
        return $this->exchangeConnectorType;
    }

    public function setExchangeConnectorType(?string $exchangeConnectorType): self
    {
        $this->exchangeConnectorType = $exchangeConnectorType;
        return $this;
    }

    public function getExchangeOrganization(): ?string
    {
        return $this->exchangeOrganization;
    }

    public function setExchangeOrganization(?string $exchangeOrganization): self
    {
        $this->exchangeOrganization = $exchangeOrganization;
        return $this;
    }

    public function getLastSyncDateTime(): ?\DateTimeInterface
    {
        return $this->lastSyncDateTime;
    }

    public function setLastSyncDateTime(?\DateTimeInterface $lastSyncDateTime): self
    {
        $this->lastSyncDateTime = $lastSyncDateTime;
        return $this;
    }

    public function getPrimarySmtpAddress(): ?string
    {
        return $this->primarySmtpAddress;
    }

    public function setPrimarySmtpAddress(?string $primarySmtpAddress): self
    {
        $this->primarySmtpAddress = $primarySmtpAddress;
        return $this;
    }

    public function getServerName(): ?string
    {
        return $this->serverName;
    }

    public function setServerName(?string $serverName): self
    {
        $this->serverName = $serverName;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): self
    {
        $this->version = $version;
        return $this;
    }

}
