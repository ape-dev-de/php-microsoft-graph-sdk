<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EdgeSearchEngineCustom
 */
class EdgeSearchEngineCustom
{
    /**
     * Allows IT admins to set a custom default search engine for MDM-Controlled devices.
     */
    private ?string $edgeSearchEngineOpenSearchXmlUrl;

    public function getEdgeSearchEngineOpenSearchXmlUrl(): ?string
    {
        return $this->edgeSearchEngineOpenSearchXmlUrl;
    }

    public function setEdgeSearchEngineOpenSearchXmlUrl(?string $edgeSearchEngineOpenSearchXmlUrl): self
    {
        $this->edgeSearchEngineOpenSearchXmlUrl = $edgeSearchEngineOpenSearchXmlUrl;
        return $this;
    }

}
