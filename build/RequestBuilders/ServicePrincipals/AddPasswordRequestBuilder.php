<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ServicePrincipals;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\PasswordCredential;

/**
 * Request builder for /servicePrincipals/{servicePrincipal-id}/addPassword
 */
class AddPasswordRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action addPassword
     * @param PasswordCredential $body Request body
     * @return PasswordCredential|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(PasswordCredential $body): PasswordCredential|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to PasswordCredential|null
     */
    private function deserializePost(string $body): PasswordCredential|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new PasswordCredential($data);
    }
}
