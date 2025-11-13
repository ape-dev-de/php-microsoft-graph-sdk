<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\AuthenticationMethods;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\UserRegistrationFeatureSummary;

/**
 * Request builder for /reports/authenticationMethods/usersRegisteredByFeature()
 */
class UsersRegisteredByFeatureRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke function usersRegisteredByFeature
     * @return UserRegistrationFeatureSummary|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(): UserRegistrationFeatureSummary|null
    {
        $response = $this->client->get($this->requestUrl, []);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to UserRegistrationFeatureSummary|null
     */
    private function deserializeGet(string $body): UserRegistrationFeatureSummary|null    {
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
