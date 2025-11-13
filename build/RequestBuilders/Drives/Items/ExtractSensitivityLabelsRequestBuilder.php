<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\ExtractSensitivityLabelsResult;

/**
 * Request builder for /drives/{drive-id}/items/{driveItem-id}/extractSensitivityLabels
 */
class ExtractSensitivityLabelsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action extractSensitivityLabels
     * @param ExtractSensitivityLabelsResult|\stdClass $body Request body
     * @return ExtractSensitivityLabelsResult|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(ExtractSensitivityLabelsResult|\stdClass $body): ExtractSensitivityLabelsResult|\stdClass|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to ExtractSensitivityLabelsResult|\stdClass|null
     */
    private function deserializePost(string $body): ExtractSensitivityLabelsResult|\stdClass|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new ExtractSensitivityLabelsResult($data);
    }
}
