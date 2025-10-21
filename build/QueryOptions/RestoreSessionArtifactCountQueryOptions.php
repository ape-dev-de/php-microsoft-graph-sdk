<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RestoreSessionArtifactCount resources
 *
 * Available select fields:
 * - completed
 * - failed
 * - inProgress
 * - total
 */
class RestoreSessionArtifactCountQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RestoreSessionArtifactCount
     */
    public const FIELD_COMPLETED = 'completed';
    public const FIELD_FAILED = 'failed';
    public const FIELD_IN_PROGRESS = 'inProgress';
    public const FIELD_TOTAL = 'total';

    /**
     * Select specific RestoreSessionArtifactCount properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
