<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RestorePointSearchResult resources
 *
 * Available select fields:
 * - artifactHitCount
 * - restorePoint
 */
class RestorePointSearchResultQueryOptions extends QueryOptions
{
    public const FIELD_ARTIFACT_HIT_COUNT = 'artifactHitCount';
    public const FIELD_RESTORE_POINT = 'restorePoint';

    /**
     * Select specific RestorePointSearchResult properties
     * 
     * @param array<string> $select Use RestorePointSearchResultQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
