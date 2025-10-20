<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ArtifactQuery
 */
class ArtifactQuery
{
    /**
     * The type of artifact to search. The possible values are: message, unknownFutureValue.
     */
    private ?string $artifactType;

    /**
     * Specifies criteria to retrieve artifacts.
     */
    private ?string $queryExpression;

    public function getArtifactType(): ?string
    {
        return $this->artifactType;
    }

    public function setArtifactType(?string $artifactType): self
    {
        $this->artifactType = $artifactType;
        return $this;
    }

    public function getQueryExpression(): ?string
    {
        return $this->queryExpression;
    }

    public function setQueryExpression(?string $queryExpression): self
    {
        $this->queryExpression = $queryExpression;
        return $this;
    }

}
