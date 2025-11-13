<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\ConditionalAccess\AuthenticationStrength\Policies;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\UpdateAllowedCombinationsResult;

/**
 * Request builder for /identity/conditionalAccess/authenticationStrength/policies/{authenticationStrengthPolicy-id}/updateAllowedCombinations
 */
class UpdateAllowedCombinationsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action updateAllowedCombinations
     * @param UpdateAllowedCombinationsResult|\stdClass $body Request body
     * @return UpdateAllowedCombinationsResult|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(UpdateAllowedCombinationsResult|\stdClass $body): UpdateAllowedCombinationsResult|\stdClass|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to UpdateAllowedCombinationsResult|\stdClass|null
     */
    private function deserializePost(string $body): UpdateAllowedCombinationsResult|\stdClass|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new UpdateAllowedCombinationsResult($data);
    }
}
