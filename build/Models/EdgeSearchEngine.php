<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EdgeSearchEngine
 */
class EdgeSearchEngine
{
    /**
     * Allows IT admins to set a predefined default search engine for MDM-Controlled devices.
     */
    private ?string $edgeSearchEngineType;

    public function getEdgeSearchEngineType(): ?string
    {
        return $this->edgeSearchEngineType;
    }

    public function setEdgeSearchEngineType(?string $edgeSearchEngineType): self
    {
        $this->edgeSearchEngineType = $edgeSearchEngineType;
        return $this;
    }

}
