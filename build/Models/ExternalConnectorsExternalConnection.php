<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsExternalConnection
 */
class ExternalConnectorsExternalConnection
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Collects configurable settings related to activities involving connector content.
     * @var ExternalConnectorsActivitySettings|\stdClass|null
     */
    public ExternalConnectorsActivitySettings|\stdClass|null $activitySettings = null;

    /** 
     * Specifies additional application IDs that are allowed to manage the connection and to index content in the connection. Optional.
     * @var ExternalConnectorsConfiguration|\stdClass|null
     */
    public ExternalConnectorsConfiguration|\stdClass|null $configuration = null;

    /** The Teams app ID. Optional. */
    public ?string $connectorId = null;

    /** Description of the connection displayed in the Microsoft 365 admin center. Optional. */
    public ?string $description = null;

    /** The display name of the connection to be displayed in the Microsoft 365 admin center. Maximum length of 128 characters. Required. */
    public ?string $name = null;

    /** 
     * The settings configuring the search experience for content in this connection, such as the display templates for search results.
     * @var ExternalConnectorsSearchSettings|\stdClass|null
     */
    public ExternalConnectorsSearchSettings|\stdClass|null $searchSettings = null;

    /** 
     * Indicates the current state of the connection. Possible values are: draft, ready, obsolete, limitExceeded, unknownFutureValue.
     * @var ExternalConnectorsConnectionState|\stdClass|null
     */
    public ExternalConnectorsConnectionState|\stdClass|null $state = null;

    /** 
     * 
     * @var ExternalConnectorsExternalGroup[]
     */
    public array $groups = [];

    /** 
     * 
     * @var ExternalConnectorsExternalItem[]
     */
    public array $items = [];

    /** 
     * 
     * @var ExternalConnectorsConnectionOperation[]
     */
    public array $operations = [];

    /** 
     * 
     * @var ExternalConnectorsSchema|\stdClass|null
     */
    public ExternalConnectorsSchema|\stdClass|null $schema = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['activitySettings'])) {
            $this->activitySettings = is_array($data['activitySettings']) ? new ExternalConnectorsActivitySettings($data['activitySettings']) : $data['activitySettings'];
        }
        if (isset($data['configuration'])) {
            $this->configuration = is_array($data['configuration']) ? new ExternalConnectorsConfiguration($data['configuration']) : $data['configuration'];
        }
        if (isset($data['connectorId'])) {
            $this->connectorId = $data['connectorId'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['searchSettings'])) {
            $this->searchSettings = is_array($data['searchSettings']) ? new ExternalConnectorsSearchSettings($data['searchSettings']) : $data['searchSettings'];
        }
        if (isset($data['state'])) {
            $this->state = is_array($data['state']) ? new ExternalConnectorsConnectionState($data['state']) : $data['state'];
        }
        if (isset($data['groups'])) {
            $this->groups = $data['groups'];
        }
        if (isset($data['items'])) {
            $this->items = $data['items'];
        }
        if (isset($data['operations'])) {
            $this->operations = $data['operations'];
        }
        if (isset($data['schema'])) {
            $this->schema = is_array($data['schema']) ? new ExternalConnectorsSchema($data['schema']) : $data['schema'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
