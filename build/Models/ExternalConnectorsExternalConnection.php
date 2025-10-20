<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsExternalConnection
 */
class ExternalConnectorsExternalConnection
{
    /**
     * Collects configurable settings related to activities involving connector content.
     */
    private ?string $activitySettings;

    /**
     * Specifies additional application IDs that are allowed to manage the connection and to index content in the connection. Optional.
     */
    private ?string $configuration;

    /**
     * The Teams app ID. Optional.
     */
    private ?string $connectorId;

    /**
     * Description of the connection displayed in the Microsoft 365 admin center. Optional.
     */
    private ?string $description;

    /**
     * The display name of the connection to be displayed in the Microsoft 365 admin center. Maximum length of 128 characters. Required.
     */
    private ?string $name;

    /**
     * The settings configuring the search experience for content in this connection, such as the display templates for search results.
     */
    private ?string $searchSettings;

    /**
     * Indicates the current state of the connection. Possible values are: draft, ready, obsolete, limitExceeded, unknownFutureValue.
     */
    private ?string $state;

    /**
     */
    private array $groups = [];

    /**
     */
    private array $items = [];

    /**
     */
    private array $operations = [];

    /**
     */
    private ?string $schema;

    public function getActivitySettings(): ?string
    {
        return $this->activitySettings;
    }

    public function setActivitySettings(?string $activitySettings): self
    {
        $this->activitySettings = $activitySettings;
        return $this;
    }

    public function getConfiguration(): ?string
    {
        return $this->configuration;
    }

    public function setConfiguration(?string $configuration): self
    {
        $this->configuration = $configuration;
        return $this;
    }

    public function getConnectorId(): ?string
    {
        return $this->connectorId;
    }

    public function setConnectorId(?string $connectorId): self
    {
        $this->connectorId = $connectorId;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getSearchSettings(): ?string
    {
        return $this->searchSettings;
    }

    public function setSearchSettings(?string $searchSettings): self
    {
        $this->searchSettings = $searchSettings;
        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): self
    {
        $this->state = $state;
        return $this;
    }

    public function getGroups(): array
    {
        return $this->groups;
    }

    public function setGroups(array $groups): self
    {
        $this->groups = $groups;
        return $this;
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function setItems(array $items): self
    {
        $this->items = $items;
        return $this;
    }

    public function getOperations(): array
    {
        return $this->operations;
    }

    public function setOperations(array $operations): self
    {
        $this->operations = $operations;
        return $this;
    }

    public function getSchema(): ?string
    {
        return $this->schema;
    }

    public function setSchema(?string $schema): self
    {
        $this->schema = $schema;
        return $this;
    }

}
