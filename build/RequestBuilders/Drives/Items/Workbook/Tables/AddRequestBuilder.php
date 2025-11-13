<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Tables;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\WorkbookTable;

/**
 * Request builder for /drives/{drive-id}/items/{driveItem-id}/workbook/tables/add
 */
class AddRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action add
     * @param WorkbookTable|\stdClass $body Request body
     * @return WorkbookTable|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(WorkbookTable|\stdClass $body): WorkbookTable|\stdClass|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to WorkbookTable|\stdClass|null
     */
    private function deserializePost(string $body): WorkbookTable|\stdClass|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new WorkbookTable($data);
    }
}
