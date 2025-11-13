<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\AuthenticationMethods;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\UserRegistrationMethodSummary;

/**
 * Request builder for /reports/authenticationMethods/usersRegisteredByMethod()
 */
class UsersRegisteredByMethodRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke function usersRegisteredByMethod
     * @return UserRegistrationMethodSummary|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(): UserRegistrationMethodSummary|null
    {
        $response = $this->client->get($this->requestUrl, []);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to UserRegistrationMethodSummary|null
     */
    private function deserializeGet(string $body): UserRegistrationMethodSummary|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new UserRegistrationMethodSummary($data);
    }
}
