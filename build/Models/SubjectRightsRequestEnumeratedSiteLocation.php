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
     * @var string[]
     */
    private array $urls = [];


    /**
     * @return string[]
     */
    public function getUrls(): array
    {
        return $this->urls;
    }

    /**
     * @param string[] $urls
     */
    public function setUrls(array $urls): self
    {
        $this->urls = $urls;
        return $this;
    }

}
