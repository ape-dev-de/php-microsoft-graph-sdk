<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Authentication\Methods;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\PasswordResetResponse;

/**
 * Request builder for /me/authentication/methods/{authenticationMethod-id}/resetPassword
 */
class ResetPasswordRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action resetPassword
     * @param PasswordResetResponse|\stdClass $body Request body
     * @return PasswordResetResponse|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(PasswordResetResponse|\stdClass $body): PasswordResetResponse|\stdClass|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to PasswordResetResponse|\stdClass|null
     */
    private function deserializePost(string $body): PasswordResetResponse|\stdClass|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new PasswordResetResponse($data);
    }
}
