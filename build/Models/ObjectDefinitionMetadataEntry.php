<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ObjectDefinitionMetadataEntry
 */
class ObjectDefinitionMetadataEntry
{
    public function __construct(
        /** Possible values are: PropertyNameAccountEnabled, PropertyNameSoftDeleted, IsSoftDeletionSupported, IsSynchronizeAllSupported, ConnectorDataStorageRequired, Extensions, LinkTypeName. */
        public ?string $key = null,
        /** Value of the metadata property. */
        public ?string $value = null
    ) {}
}
