<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\Sites\Pages\GraphsitePage\WebParts;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\WebPartPosition;

/**
 * Request builder for /sites/{site-id}/pages/{baseSitePage-id}/graph.sitePage/webParts/{webPart-id}/getPositionOfWebPart
 */
class GetPositionOfWebPartRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action getPositionOfWebPart
     * @param WebPartPosition|\stdClass $body Request body
     * @return WebPartPosition|\stdClass
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(WebPartPosition|\stdClass $body): WebPartPosition|\stdClass
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to WebPartPosition|\stdClass
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
        return new WebPartPosition($data);
    }
}
