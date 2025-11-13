<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Names;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\WorkbookRange;

/**
 * Request builder for /drives/{drive-id}/items/{driveItem-id}/workbook/names/{workbookNamedItem-id}/range()/insert
 */
class InsertRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action insert
     * @param WorkbookRange|\stdClass $body Request body
     * @return WorkbookRange|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(WorkbookRange|\stdClass $body): WorkbookRange|\stdClass|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to WorkbookRange|\stdClass|null
     */
    private function deserializePost(string $body): WorkbookRange|\stdClass|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new WorkbookRange($data);
    }
}
