<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\User;

/**
 * Request builder for /users/{user-id}/reprocessLicenseAssignment
 */
class ReprocessLicenseAssignmentRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action reprocessLicenseAssignment
     * @param User|\stdClass $body Request body
     * @return User|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(User|\stdClass $body): User|\stdClass|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to User|\stdClass|null
     */
    private function deserializePost(string $body): User|\stdClass|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new User($data);
    }
}
