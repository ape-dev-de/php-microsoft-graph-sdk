<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsExternalConnection
 */
class ExternalConnectorsExternalConnection
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Collects configurable settings related to activities involving connector content. */
        public ?string $activitySettings = null,
        /** Specifies additional application IDs that are allowed to manage the connection and to index content in the connection. Optional. */
        public ?string $configuration = null,
        /** The Teams app ID. Optional. */
        public ?string $connectorId = null,
        /** Description of the connection displayed in the Microsoft 365 admin center. Optional. */
        public ?string $description = null,
        /** The display name of the connection to be displayed in the Microsoft 365 admin center. Maximum length of 128 characters. Required. */
        public ?string $name = null,
        /** The settings configuring the search experience for content in this connection, such as the display templates for search results. */
        public ?string $searchSettings = null,
        /** Indicates the current state of the connection. Possible values are: draft, ready, obsolete, limitExceeded, unknownFutureValue. */
        public ?string $state = null,
        /**  */
        public array $groups = [],
        /**  */
        public array $items = [],
        /**  */
        public array $operations = [],
        /**  */
        public ?string $schema = null
    ) {}
}
