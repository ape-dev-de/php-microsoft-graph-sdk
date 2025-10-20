<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SubjectRightsRequestEnumeratedSiteLocation
 */
class SubjectRightsRequestEnumeratedSiteLocation
{
    /**
     * Collection of site URLs that should be included. Includes the URL of each site, for example, https://www.contoso.com/site1.
     */
    private ?string $urls;

    public function getUrls(): ?string
    {
        return $this->urls;
    }

    public function setUrls(?string $urls): self
    {
        $this->urls = $urls;
        return $this;
    }

}
