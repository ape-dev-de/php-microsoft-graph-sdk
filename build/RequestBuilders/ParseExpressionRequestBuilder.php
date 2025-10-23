<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ParseExpressionResponse;

/**
 * Request builder for parseExpression
 */
class ParseExpressionRequestBuilder extends BaseRequestBuilder
{
    /**
     * Invoke action parseExpression
     * @param ParseExpressionResponse|\stdClass $body Request body
     * @return ParseExpressionResponse|\stdClass
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(ParseExpressionResponse|\stdClass $body): ParseExpressionResponse|\stdClass
    {
        // Convert model to array
        $bodyData = (array)$body;
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
