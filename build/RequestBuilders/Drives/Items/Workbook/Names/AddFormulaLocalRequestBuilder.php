<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Names;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\WorkbookNamedItem;

/**
 * Request builder for /drives/{drive-id}/items/{driveItem-id}/workbook/names/addFormulaLocal
 */
class AddFormulaLocalRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action addFormulaLocal
     * @param WorkbookNamedItem|\stdClass $body Request body
     * @return WorkbookNamedItem|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(WorkbookNamedItem|\stdClass $body): WorkbookNamedItem|\stdClass|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to WorkbookNamedItem|\stdClass|null
     */
    private function deserializePost(string $body): WorkbookNamedItem|\stdClass|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new WorkbookNamedItem($data);
    }
}
