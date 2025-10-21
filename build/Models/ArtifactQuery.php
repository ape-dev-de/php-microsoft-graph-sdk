<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ArtifactQuery
 */
class ArtifactQuery
{
    public function __construct(
        /** The type of artifact to search. The possible values are: message, unknownFutureValue. */
        public ?string $artifactType = null,
        /** Specifies criteria to retrieve artifacts. */
        public ?string $queryExpression = null
    ) {}
}
