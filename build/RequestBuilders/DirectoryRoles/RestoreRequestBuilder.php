<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DirectoryRoles;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\DirectoryObject;

/**
 * Request builder for /directoryRoles/{directoryRole-id}/restore
 */
class RestoreRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action restore
     * @param DirectoryObject|\stdClass $body Request body
     * @return DirectoryObject|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(DirectoryObject|\stdClass $body): DirectoryObject|\stdClass|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to DirectoryObject|\stdClass|null
     */
    private function deserializePost(string $body): DirectoryObject|\stdClass|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new DirectoryObject($data);
    }
}
