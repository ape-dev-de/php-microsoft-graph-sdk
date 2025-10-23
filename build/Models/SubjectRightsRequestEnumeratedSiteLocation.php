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
    public array $urls = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['urls'])) {
            $this->urls = $data['urls'];
        }
    }
}
