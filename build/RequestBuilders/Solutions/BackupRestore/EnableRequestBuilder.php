<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\ServiceStatus;

/**
 * Request builder for /solutions/backupRestore/enable
 */
class EnableRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action enable
     * @param ServiceStatus|\stdClass $body Request body
     * @return ServiceStatus|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(ServiceStatus|\stdClass $body): ServiceStatus|\stdClass|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to ServiceStatus|\stdClass|null
     */
    private function deserializePost(string $body): ServiceStatus|\stdClass|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new ServiceStatus($data);
    }
}
