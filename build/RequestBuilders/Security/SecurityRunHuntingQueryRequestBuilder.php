<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\SecurityHuntingQueryResults;

/**
 * Request builder for /security/microsoft.graph.security.runHuntingQuery
 */
class SecurityRunHuntingQueryRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action runHuntingQuery
     * @param SecurityHuntingQueryResults|\stdClass $body Request body
     * @return SecurityHuntingQueryResults|\stdClass
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(SecurityHuntingQueryResults|\stdClass $body): SecurityHuntingQueryResults|\stdClass
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to SecurityHuntingQueryResults|\stdClass
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
        return new SecurityHuntingQueryResults($data);
    }
}
