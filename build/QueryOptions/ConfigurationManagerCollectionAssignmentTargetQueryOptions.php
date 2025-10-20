<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ConfigurationManagerCollectionAssignmentTarget resources
 *
 * Available select fields:
 * - collectionId
 */
class ConfigurationManagerCollectionAssignmentTargetQueryOptions extends QueryOptions
{
    public const FIELD_COLLECTION_ID = 'collectionId';

    /**
     * Select specific ConfigurationManagerCollectionAssignmentTarget properties
     * 
     * @param array<string> $select Use ConfigurationManagerCollectionAssignmentTargetQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
