<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\Onenote\Resources;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\OnenoteResource;

/**
 * Request builder for /sites/{site-id}/onenote/resources/{onenoteResource-id}/content
 */
class ContentRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get content for the navigation property resources from sites
     * @return string|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(): string|null
    {
        $response = $this->client->get($this->requestUrl, []);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to string|null
     */
    private function deserializeGet(string $body): string|null    {
        if (empty($body)) {
            return null;
        }

        return $body;
    }
    /**
     * Update content for the navigation property resources in sites
     * @param OnenoteResource $body Request body
     * @return OnenoteResource|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function put(OnenoteResource $body): OnenoteResource|null
    {
        $response = $this->client->put($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePut($responseBody);
    }

    /**
     * Deserialize response to OnenoteResource|null
     */
    private function deserializePut(string $body): OnenoteResource|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new OnenoteResource($data);
    }
}
