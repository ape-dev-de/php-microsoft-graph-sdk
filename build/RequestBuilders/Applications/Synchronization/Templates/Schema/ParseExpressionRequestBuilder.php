<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Applications\Synchronization\Templates\Schema;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\ParseExpressionResponse;

/**
 * Request builder for /applications/{application-id}/synchronization/templates/{synchronizationTemplate-id}/schema/parseExpression
 */
class ParseExpressionRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action parseExpression
     * @param ParseExpressionResponse|\stdClass $body Request body
     * @return ParseExpressionResponse|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(ParseExpressionResponse|\stdClass $body): ParseExpressionResponse|\stdClass|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to ParseExpressionResponse|\stdClass|null
     */
    private function deserializePost(string $body): ParseExpressionResponse|\stdClass|null    {
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
