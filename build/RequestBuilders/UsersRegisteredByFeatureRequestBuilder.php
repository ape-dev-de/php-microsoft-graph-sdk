<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\UserRegistrationFeatureSummary;

/**
 * Request builder for usersRegisteredByFeature()
 */
class UsersRegisteredByFeatureRequestBuilder extends BaseRequestBuilder
{
    /**
     * Invoke function usersRegisteredByFeature
     * @return UserRegistrationFeatureSummary
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(): UserRegistrationFeatureSummary
    {
        $response = $this->client->get($this->requestUrl, []);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to UserRegistrationFeatureSummary
     */
    private function deserializeGet(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new UserRegistrationFeatureSummary($data);
    }
}
