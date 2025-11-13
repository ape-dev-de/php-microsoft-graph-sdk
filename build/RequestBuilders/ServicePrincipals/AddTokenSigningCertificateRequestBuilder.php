<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ServicePrincipals;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\SelfSignedCertificate;

/**
 * Request builder for /servicePrincipals/{servicePrincipal-id}/addTokenSigningCertificate
 */
class AddTokenSigningCertificateRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action addTokenSigningCertificate
     * @param SelfSignedCertificate $body Request body
     * @return SelfSignedCertificate|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(SelfSignedCertificate $body): SelfSignedCertificate|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to SelfSignedCertificate|null
     */
    private function deserializePost(string $body): SelfSignedCertificate|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new SelfSignedCertificate($data);
    }
}
