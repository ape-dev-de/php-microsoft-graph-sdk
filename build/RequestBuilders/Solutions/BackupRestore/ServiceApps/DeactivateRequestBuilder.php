<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\ServiceApps;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\ServiceApp;

/**
 * Request builder for /solutions/backupRestore/serviceApps/{serviceApp-id}/deactivate
 */
class DeactivateRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action deactivate
     * @param ServiceApp|\stdClass $body Request body
     * @return ServiceApp|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(ServiceApp|\stdClass $body): ServiceApp|\stdClass|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to ServiceApp|\stdClass|null
     */
    private function deserializePost(string $body): ServiceApp|\stdClass|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new ServiceApp($data);
    }
}
