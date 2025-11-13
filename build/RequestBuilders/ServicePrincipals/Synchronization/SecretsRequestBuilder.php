<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ServicePrincipals\Synchronization;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ServicePrincipals\Synchronization\Secrets\CountRequestBuilder;

/**
 * Request builder for /servicePrincipals/{servicePrincipal-id}/synchronization/secrets
 */
class SecretsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Add synchronization secrets
     * @param array<string, mixed> $body Request body
     * @return \stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function put(array $body): \stdClass|null
    {
        $response = $this->client->put($this->requestUrl, $body);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePut($responseBody);
    }

    /**
     * Deserialize response to \stdClass|null
     */
    private function deserializePut(string $body): \stdClass|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        return (object)$data;
    }
    /**
     * Navigate to $count
     *
     * @return CountRequestBuilder
     */
    public function count(): CountRequestBuilder
    {
        return new CountRequestBuilder($this->client, $this->requestUrl . '/$count');
    }
}
