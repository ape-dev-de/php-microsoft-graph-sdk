<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Sites\Onenote\Notebooks\Sections\Pages;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\OnenotePagePreview;

/**
 * Request builder for /groups/{group-id}/sites/{site-id}/onenote/notebooks/{notebook-id}/sections/{onenoteSection-id}/pages/{onenotePage-id}/preview()
 */
class PreviewRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke function preview
     * @return OnenotePagePreview|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(): OnenotePagePreview|\stdClass|null
    {
        $response = $this->client->get($this->requestUrl, []);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to OnenotePagePreview|\stdClass|null
     */
    private function deserializeGet(string $body): OnenotePagePreview|\stdClass|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new OnenotePagePreview($data);
    }
}
