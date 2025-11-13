<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\Pages\GraphsitePage\CanvasLayout\VerticalSection\Webparts;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\WebPartPosition;

/**
 * Request builder for /sites/{site-id}/pages/{baseSitePage-id}/graph.sitePage/canvasLayout/verticalSection/webparts/{webPart-id}/getPositionOfWebPart
 */
class GetPositionOfWebPartRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action getPositionOfWebPart
     * @param WebPartPosition|\stdClass $body Request body
     * @return WebPartPosition|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(WebPartPosition|\stdClass $body): WebPartPosition|\stdClass|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to WebPartPosition|\stdClass|null
     */
    private function deserializePost(string $body): WebPartPosition|\stdClass|null    {
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
