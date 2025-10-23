<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsExternalConnection
 */
class ExternalConnectorsExternalConnection
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Collects configurable settings related to activities involving connector content.
     * @var ExternalConnectorsActivitySettings|\stdClass|null
     */
    public mixed $activitySettings = null;

    /** 
     * Specifies additional application IDs that are allowed to manage the connection and to index content in the connection. Optional.
     * @var ExternalConnectorsConfiguration|\stdClass|null
     */
    public mixed $configuration = null;

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
    public mixed $searchSettings = null;

    /** 
     * Indicates the current state of the connection. Possible values are: draft, ready, obsolete, limitExceeded, unknownFutureValue.
     * @var ExternalConnectorsConnectionState|\stdClass|null
     */
    public mixed $state = null;

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
    public mixed $schema = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['activitySettings'])) {
            $this->activitySettings = $data['activitySettings'];
        }
        if (isset($data['configuration'])) {
            $this->configuration = $data['configuration'];
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
            $this->searchSettings = $data['searchSettings'];
        }
        if (isset($data['state'])) {
            $this->state = $data['state'];
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
            $this->schema = $data['schema'];
        }
    }
}
