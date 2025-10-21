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
    /**
     * Available select fields for ConfigurationManagerCollectionAssignmentTarget
     */
    public const FIELD_COLLECTION_ID = 'collectionId';

    /**
     * Select specific ConfigurationManagerCollectionAssignmentTarget properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
