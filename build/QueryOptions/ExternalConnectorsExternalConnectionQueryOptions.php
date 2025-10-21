<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalConnectorsExternalConnection resources
 *
 * Available select fields:
 * - activitySettings
 * - configuration
 * - connectorId
 * - description
 * - name
 * - searchSettings
 * - state
 * - groups
 * - items
 * - operations
 * - schema
 */
class ExternalConnectorsExternalConnectionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ExternalConnectorsExternalConnection
     */
    public const FIELD_ACTIVITY_SETTINGS = 'activitySettings';
    public const FIELD_CONFIGURATION = 'configuration';
    public const FIELD_CONNECTOR_ID = 'connectorId';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_NAME = 'name';
    public const FIELD_SEARCH_SETTINGS = 'searchSettings';
    public const FIELD_STATE = 'state';
    public const FIELD_GROUPS = 'groups';
    public const FIELD_ITEMS = 'items';
    public const FIELD_OPERATIONS = 'operations';
    public const FIELD_SCHEMA = 'schema';

    /**
     * Select specific ExternalConnectorsExternalConnection properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
