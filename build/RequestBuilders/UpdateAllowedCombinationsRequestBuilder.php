<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\UpdateAllowedCombinationsResult;

/**
 * Request builder for updateAllowedCombinations
 */
class UpdateAllowedCombinationsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Invoke action updateAllowedCombinations
     * @param UpdateAllowedCombinationsResult|\stdClass $body Request body
     * @return UpdateAllowedCombinationsResult|\stdClass
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(UpdateAllowedCombinationsResult|\stdClass $body): UpdateAllowedCombinationsResult|\stdClass
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to UpdateAllowedCombinationsResult|\stdClass
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
        return new UpdateAllowedCombinationsResult($data);
    }
}
