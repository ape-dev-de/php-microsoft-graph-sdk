<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Sites\Lists\ContentTypes;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\ContentType;

/**
 * Request builder for /groups/{group-id}/sites/{site-id}/lists/{list-id}/contentTypes/addCopyFromContentTypeHub
 */
class AddCopyFromContentTypeHubRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action addCopyFromContentTypeHub
     * @param ContentType|\stdClass $body Request body
     * @return ContentType|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(ContentType|\stdClass $body): ContentType|\stdClass|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to ContentType|\stdClass|null
     */
    private function deserializePost(string $body): ContentType|\stdClass|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new ContentType($data);
    }
}
