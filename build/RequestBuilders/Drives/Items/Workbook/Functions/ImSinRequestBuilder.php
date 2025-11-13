<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\WorkbookFunctionResult;

/**
 * Request builder for /drives/{drive-id}/items/{driveItem-id}/workbook/functions/imSin
 */
class ImSinRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action imSin
     * @param WorkbookFunctionResult|\stdClass $body Request body
     * @return WorkbookFunctionResult|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(WorkbookFunctionResult|\stdClass $body): WorkbookFunctionResult|\stdClass|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to WorkbookFunctionResult|\stdClass|null
     */
    private function deserializePost(string $body): WorkbookFunctionResult|\stdClass|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new WorkbookFunctionResult($data);
    }
}
