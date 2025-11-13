<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Onenote\SectionGroups\Sections\Pages;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\OnenoteOperation;

/**
 * Request builder for /me/onenote/sectionGroups/{sectionGroup-id}/sections/{onenoteSection-id}/pages/{onenotePage-id}/copyToSection
 */
class CopyToSectionRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action copyToSection
     * @param OnenoteOperation|\stdClass $body Request body
     * @return OnenoteOperation|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(OnenoteOperation|\stdClass $body): OnenoteOperation|\stdClass|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to OnenoteOperation|\stdClass|null
     */
    private function deserializePost(string $body): OnenoteOperation|\stdClass|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new OnenoteOperation($data);
    }
}
