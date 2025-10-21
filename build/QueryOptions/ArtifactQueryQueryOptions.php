<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ArtifactQuery resources
 *
 * Available select fields:
 * - artifactType
 * - queryExpression
 */
class ArtifactQueryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ArtifactQuery
     */
    public const FIELD_ARTIFACT_TYPE = 'artifactType';
    public const FIELD_QUERY_EXPRESSION = 'queryExpression';

    /**
     * Select specific ArtifactQuery properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
