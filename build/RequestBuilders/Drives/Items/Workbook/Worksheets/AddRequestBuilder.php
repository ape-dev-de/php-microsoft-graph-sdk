<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Worksheets;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\WorkbookWorksheet;

/**
 * Request builder for /drives/{drive-id}/items/{driveItem-id}/workbook/worksheets/add
 */
class AddRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action add
     * @param WorkbookWorksheet|\stdClass $body Request body
     * @return WorkbookWorksheet|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(WorkbookWorksheet|\stdClass $body): WorkbookWorksheet|\stdClass|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to WorkbookWorksheet|\stdClass|null
     */
    private function deserializePost(string $body): WorkbookWorksheet|\stdClass|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new WorkbookWorksheet($data);
    }
}
