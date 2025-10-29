<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\B2xUserFlows\ApiConnectorConfiguration\PostAttributeCollection;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\IdentityApiConnector;

/**
 * Request builder for /identity/b2xUserFlows/{b2xIdentityUserFlow-id}/apiConnectorConfiguration/postAttributeCollection/uploadClientCertificate
 */
class UploadClientCertificateRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action uploadClientCertificate
     * @param IdentityApiConnector|\stdClass $body Request body
     * @return IdentityApiConnector|\stdClass
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(IdentityApiConnector|\stdClass $body): IdentityApiConnector|\stdClass
    {
        // Get raw data from model
        $bodyData = method_exists($body, 'getRaw') ? $body->getRaw() : json_encode(json_decode($body, true));
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to IdentityApiConnector|\stdClass
     */
    private function deserializePost(string $body): mixed
    {
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
