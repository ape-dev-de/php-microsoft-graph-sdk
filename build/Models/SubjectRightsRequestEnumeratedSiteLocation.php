<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SubjectRightsRequestEnumeratedSiteLocation
 */
class SubjectRightsRequestEnumeratedSiteLocation
{
    public function __construct(
        /** @var string[] Collection of site URLs that should be included. Includes the URL of each site, for example, https://www.contoso.com/site1. */
        public array $urls = []
    ) {}
}
