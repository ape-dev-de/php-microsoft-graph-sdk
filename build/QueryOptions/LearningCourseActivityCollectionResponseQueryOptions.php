<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LearningCourseActivityCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class LearningCourseActivityCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific LearningCourseActivityCollectionResponse properties
     * 
     * @param array<string> $select Use LearningCourseActivityCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
