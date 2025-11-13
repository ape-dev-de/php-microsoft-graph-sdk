<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\ApiConnectors;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\IdentityApiConnector;

/**
 * Request builder for /identity/apiConnectors/{identityApiConnector-id}/uploadClientCertificate
 */
class UploadClientCertificateRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action uploadClientCertificate
     * @param IdentityApiConnector|\stdClass $body Request body
     * @return IdentityApiConnector|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(IdentityApiConnector|\stdClass $body): IdentityApiConnector|\stdClass|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to IdentityApiConnector|\stdClass|null
     */
    private function deserializePost(string $body): IdentityApiConnector|\stdClass|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new IdentityApiConnector($data);
    }
}
