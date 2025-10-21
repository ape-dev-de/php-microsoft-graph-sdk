<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for GranularMailboxRestoreArtifact resources
 *
 * Available select fields:
 * - artifactCount
 * - searchResponseId
 */
class GranularMailboxRestoreArtifactQueryOptions extends QueryOptions
{
    /**
     * Available select fields for GranularMailboxRestoreArtifact
     */
    public const FIELD_ARTIFACT_COUNT = 'artifactCount';
    public const FIELD_SEARCH_RESPONSE_ID = 'searchResponseId';

    /**
     * Select specific GranularMailboxRestoreArtifact properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
