<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityFilePlanCitation
 */
class SecurityFilePlanCitation
{
    /**
     * Represents the jurisdiction or agency that published the filePlanCitation.
     */
    private ?string $citationJurisdiction;

    /**
     * Represents the URL to the published filePlanCitation.
     */
    private ?string $citationUrl;

    public function getCitationJurisdiction(): ?string
    {
        return $this->citationJurisdiction;
    }

    public function setCitationJurisdiction(?string $citationJurisdiction): self
    {
        $this->citationJurisdiction = $citationJurisdiction;
        return $this;
    }

    public function getCitationUrl(): ?string
    {
        return $this->citationUrl;
    }

    public function setCitationUrl(?string $citationUrl): self
    {
        $this->citationUrl = $citationUrl;
        return $this;
    }

}
