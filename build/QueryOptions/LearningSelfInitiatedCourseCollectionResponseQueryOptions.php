<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LearningSelfInitiatedCourseCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class LearningSelfInitiatedCourseCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific LearningSelfInitiatedCourseCollectionResponse properties
     * 
     * @param array<string> $select Use LearningSelfInitiatedCourseCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
