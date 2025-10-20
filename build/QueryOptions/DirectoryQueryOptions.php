<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Directory resources
 *
 * Available select fields:
 * - administrativeUnits
 * - attributeSets
 * - customSecurityAttributeDefinitions
 * - deletedItems
 * - deviceLocalCredentials
 * - federationConfigurations
 * - onPremisesSynchronization
 * - publicKeyInfrastructure
 * - subscriptions
 */
class DirectoryQueryOptions extends QueryOptions
{
    public const FIELD_ADMINISTRATIVE_UNITS = 'administrativeUnits';
    public const FIELD_ATTRIBUTE_SETS = 'attributeSets';
    public const FIELD_CUSTOM_SECURITY_ATTRIBUTE_DEFINITIONS = 'customSecurityAttributeDefinitions';
    public const FIELD_DELETED_ITEMS = 'deletedItems';
    public const FIELD_DEVICE_LOCAL_CREDENTIALS = 'deviceLocalCredentials';
    public const FIELD_FEDERATION_CONFIGURATIONS = 'federationConfigurations';
    public const FIELD_ON_PREMISES_SYNCHRONIZATION = 'onPremisesSynchronization';
    public const FIELD_PUBLIC_KEY_INFRASTRUCTURE = 'publicKeyInfrastructure';
    public const FIELD_SUBSCRIPTIONS = 'subscriptions';

    /**
     * Select specific Directory properties
     * 
     * @param array<string> $select Use DirectoryQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
