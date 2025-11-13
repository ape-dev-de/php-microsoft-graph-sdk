<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Storage\FileStorage\Containers;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\FileStorageContainer;

/**
 * Request builder for /storage/fileStorage/containers/{fileStorageContainer-id}/restore
 */
class RestoreRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action restore
     * @param FileStorageContainer|\stdClass $body Request body
     * @return FileStorageContainer|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(FileStorageContainer|\stdClass $body): FileStorageContainer|\stdClass|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to FileStorageContainer|\stdClass|null
     */
    private function deserializePost(string $body): FileStorageContainer|\stdClass|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new FileStorageContainer($data);
    }
}
