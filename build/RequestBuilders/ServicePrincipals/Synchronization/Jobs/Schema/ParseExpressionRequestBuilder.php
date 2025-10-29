<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ServicePrincipals\Synchronization\Jobs\Schema;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\ParseExpressionResponse;

/**
 * Request builder for /servicePrincipals/{servicePrincipal-id}/synchronization/jobs/{synchronizationJob-id}/schema/parseExpression
 */
class ParseExpressionRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action parseExpression
     * @param ParseExpressionResponse|\stdClass $body Request body
     * @return ParseExpressionResponse|\stdClass
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(ParseExpressionResponse|\stdClass $body): ParseExpressionResponse|\stdClass
    {
        // Get raw data from model
        $bodyData = method_exists($body, 'getRaw') ? $body->getRaw() : json_encode(json_decode($body, true));
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to ParseExpressionResponse|\stdClass
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
        return new ParseExpressionResponse($data);
    }
}
